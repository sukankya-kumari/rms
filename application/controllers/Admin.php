<?php
class Admin extends CI_Controller{
      private $data;
    public function __construct(){
        parent::__construct();
        $this->data['category'] = $this->datawork->calling('category');
    }
    public function index(){
        $this->load->view("admin/index");
        $this->load->view("admin/footer");
    }
    public function login(){
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        if($this->form_validation->run()){
            $data = [
                'username' =>$_POST['username'],
                'password' =>sha1($_POST['password'])
            ];
            if($this->datawork->checkdata("admin",$data)){
                $this->session->set_userdata("admin_log",$_POST['username']);
                redirect("admin/index");
            }
            else{
                echo"<script>alert('userdata and password')</script>";
                redirect("admin/login");
            }
        }
        else{
        $this->load->view("admin/header");
        $this->load->view("admin/login");
        $this->load->view("admin/footer");
        }
    }
    public function add_product(){
        $data['category'] = $this->db->get('category')->result();
        $this->form_validation->set_rules('food_name','food_name',"required");
        $this->form_validation->set_rules('price','price',"required");
        $this->form_validation->set_rules('discount','discount',"required");
        $this->form_validation->set_rules('description','description',"required");
        $this->form_validation->set_rules('made_by','made_by',"required");
        $this->form_validation->set_rules('contact','contact',"required");
        $this->form_validation->set_rules('open_time','open_time',"required");
        $this->form_validation->set_rules('close_time','close_time',"required");
        $this->form_validation->set_rules('category','category',"required");
        
        if($this->form_validation->run()){
            
                $config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
            
            $this->load->library("upload",$config);
            
            if(!$this->upload->do_upload("image")){
                $this->data['error'] = $this->upload->display_errors();
            
            }
            else{
            $data= [
                'food_name' => $_POST['food_name'],
                'price' => $_POST['price'],
                'discount' => $_POST['discount'],
                'category' => $_POST['category'],
                'image' =>$_FILES['image']['name'],
                'description' => $_POST['description'],
                'made_by' => $_POST['made_by'],
                'open_time' => $_POST['open_time'],
                'close_time' => $_POST['close_time'],
                'contact' => $_POST['contact']
            ];
            $this->db->insert("product",$data);
            redirect('admin/index');
          
            }  
        }
        else{
        $this->load->view('admin/header');
        $this->load->view('admin/add_product',$data);
        $this->load->view('admin/footer');
    }
    }
    public function add_category(){
        $this->form_validation->set_rules('title','title',"required");
        $this->form_validation->set_rules('description','description',"required");
        if($this->form_validation->run()){
            $data= [
                'title' => $_POST['title'],
                'description' => $_POST['description']
            ];
            $this->db->insert("category",$data);
            redirect('admin/add_product');
          
            }  
        else{
            $this->load->view('admin/header');
            $this->load->view('admin/add_product',$this->data);
            $this->load->view('admin/footer');
    }
}
    public function total_food(){
       $food = $this->db->count_all_results('product');
       if($food > 0 ){
           return $food;
       }
        return 0;
    }
}
    
?>