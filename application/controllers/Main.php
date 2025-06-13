
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('CommonModel');
        $this->load->model('Main_model'); // Ensure Main_model is loaded here
    }

    function index()
    {
        $data['title'] = 'CodeIgniter Simple Login form With Session';
        $this->load->view("login", $data);
    }

    function login()
    {
        $data['title'] = 'CodeIgniter Simple Login form With Session';
        $this->load->view("login", $data);
    }

    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
    
            // Check if username exists
            $username_exists = $this->Main_model->username_exists($username);
            // Check if password exists
            $password_exists = $this->Main_model->password_exists($password);
    
            if ($username_exists && $password_exists) {
                if ($this->Main_model->can_login($username, $password)) {
                    $session_data = array(
                        'username' => $username
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url() . 'main/enter');
                } else {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    $this->session->set_flashdata('valid_username', $username);
                    redirect(base_url() . 'main/login');
                }
            } else {
                if (!$username_exists && !$password_exists) {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                } else {
                    if (!$username_exists) {
                        $this->session->set_flashdata('error', 'Invalid Username');
                        $this->session->set_flashdata('valid_password', $this->input->post('password'));
                    }
                    if (!$password_exists) {
                        $this->session->set_flashdata('error', 'Invalid Password');
                        $this->session->set_flashdata('valid_username', $username);
                    }
                }
                redirect(base_url() . 'main/login');
            }
        } else {
            $this->login();
        }
    }
    

    function enter()
    {
        if ($this->session->userdata('username') != '') {

            $data['medicine_qty'] = count($this->CommonModel->get_all_info('create_medicine_name'));

            $where_array = array("date" => date('Y-m-d'));
            $today_purchase = $this->CommonModel->group_by_data_where("insert_purchase_info", $where_array, "purchase_id");
            $total_today_purchase = 0;
            foreach ($today_purchase as $today_sales_info) {
                $total_today_purchase += $today_sales_info->purchase_price;
            }
            $data['today_purchase_number'] = $total_today_purchase;

            $purchase_due = $this->CommonModel->get_all_info("insert_purchase_info");
            $total_due = 0; $price=0;$pay=0;
            foreach ($purchase_due as $info) {
                $price= $info->purchase_price;
                $pay= $info->purchase_paid;
                $total_due += $price - $pay;
            }
            $data['today_due'] = $total_due;

            $array_check = array(
                "date>=" => date('Y-m-d', strtotime('-1 month')),
                "date<=" => date('Y-m-d')
            );
            $monthly_sales_result = $this->CommonModel->group_by_data_where("sales_product", $array_check, "sales_id");
            $total_monthly_sales = 0;
            foreach ($monthly_sales_result as $monthly_sales_info) {
                $total_monthly_sales += $monthly_sales_info->discount_price;
            }
            $data['monthly_sales_number'] = $total_monthly_sales;

            $where_array_sale = array("date" => date('Y-m-d'));
            $today_sale = $this->CommonModel->group_by_data_where("sales_product", $where_array_sale, "sales_id");
            $total_today_sales = 0;
            foreach ($today_sale as $today_sales_info) {
                $total_today_sales += $today_sales_info->discount_price;
            }
            $data['today_sale_number'] = $total_today_sales;

            $array_check_near_expire = array("expiredate<=" => date('Y-m-d'));
            $data['near_expired_product'] = count($this->CommonModel->get_all_info_by_array('insert_purchase_info', $array_check_near_expire));

            $this->load->view("header");
            $this->load->view("dashboard", $data);
            $this->load->view("footer");
        }
    }

    function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url() . 'main/login');
    }
}