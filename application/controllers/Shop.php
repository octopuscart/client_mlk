<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($this->input->post('email'), $sendername);
                $this->email->to(email_bcc);
//                $this->email->bcc(email_bcc);
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;

                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);
                $this->email->message($htmlsmessage);

                $this->email->print_debugger();
                $send = $this->email->send();
                if ($send) {
                    echo json_encode("send");
                } else {
                    $error = $this->email->print_debugger(array('headers'));
                    echo json_encode($error);
                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('Pages/contactus');
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

    public function clients() {
        $this->load->view('Pages/clients');
    }

    function updateFabricsSuit() {
        $fabriclist = ['RF10018.jpg', 'RF10032.jpg', 'RF10033.jpg', 'RF10034.jpg', 'RF10035.jpg', 'RF10042.jpg', 'RF10043.jpg', 'RF10044.jpg', 'RF10045.jpg', 'RF10047.jpg', 'RF10050.jpg', 'RF10056.jpg', 'RF10057.jpg', 'RF10058.jpg', 'RF10060.jpg', 'RF10061.jpg', 'RF10068.jpg', 'RF10069.jpg', 'RF10071.jpg', 'RF10082.jpg', 'RF10085.jpg', 'RF10086.jpg', 'RF10104.jpg', 'RF10106.jpg', 'RF10108.jpg', 'RF10109.jpg', 'RF10110.jpg', 'RF10163.jpg', 'RF10215.jpg', 'RF10217.jpg', 'RF10218.jpg', 'RF10219.jpg', 'RF10220.jpg', 'RF10221.jpg', 'RF10222.jpg', 'RF10224.jpg', 'RF10225.jpg', 'RF10227.jpg', 'RF10229.jpg', 'RF10230.jpg', 'RF10231.jpg', 'RF10232.jpg', 'RF10234.jpg', 'RF10235.jpg', 'RF10238.jpg', 'RF10239.jpg', 'RF10240.jpg', 'RF10241.jpg', 'RF10243.jpg', 'RF10244.jpg'];

        $this->db->where("category_id", 43);
        $query = $this->db->get("products");
        $products = $query->result_array();
        foreach ($products as $key => $value) {
            echo $value["folder"];
            echo $fabriclist[$key];
            echo "<br/>";
            $this->db->where("folder", $value["folder"]);
            $this->db->set(array("folder" => $fabriclist[$key]));
            $this->db->update("products");
        }
    }
    
    function updateFabricsShirt() {
        $fabriclist = ['RK07.jpg', 'RK38.jpg', 'RK39.jpg', 'RK40.jpg', 'RK41.jpg', 'RK42.jpg', 'RK43.jpg', 'RK44.jpg', 'RK45.jpg', 'RK46.jpg', 'RK47.jpg', 'RK48.jpg', 'RK49.jpg', 'RK50.jpg', 'RK51.jpg', 'RK52.jpg', 'RK53.jpg', 'RK54.jpg', 'RK55.jpg', 'RK56.jpg', 'RK57.jpg', 'RK58.jpg', 'RK59.jpg', 'RK60.jpg', 'RK61.jpg', 'RK63.jpg', 'RK64.jpg', 'RK67.jpg', 'RK68.jpg', 'RK69.jpg', 'RK70.jpg', 'RK71.jpg', 'RK72.jpg', 'RK73.jpg', 'RK74.jpg', 'RK75.jpg', 'RK76.jpg', 'RK77.jpg', 'RK78.jpg', 'RK79.jpg', 'RK80.jpg', 'RK81.jpg', 'RK82.jpg', 'RK83.jpg', 'RK84.jpg', 'RK85.jpg', 'RK86.jpg'];
        
        $this->db->where("category_id", 42);
        $query = $this->db->get("products");
        $products = $query->result_array();
        foreach ($products as $key => $value) {
            echo $value["folder"];
            echo $fabriclist[$key];
            echo "<br/>";
            $this->db->where("folder", $value["folder"]);
            $this->db->set(array("folder" => $fabriclist[$key]));
            $this->db->update("products");
        }
    }

}
