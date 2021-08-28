<?php
class Home extends CI_Controller{
    private $data;
    public function __construct(){
        parent::__construct();
        
        $this->data['category'] = $this->datawork->calling('category');
       
 
    }
     
    public function count_cart(){
        $log = $this->session->userdata('admin');
        $user = $this->db->where('contact',$log)->get('accounts')->row();
        $order = $this->datawork->calling("orders",['ordered'=>false,'user_id'=>$user->id]);
        if(!empty($user) && !empty($order)){
        $order = $this->datawork->calling("orders",['ordered'=>false,'user_id'=>$user->id]);
        $oi = $this->db->where(['order_id'=>$order[0]->order_id,'ordered'=>false])->get('order_item')->num_rows();
        if($oi > 0){
            return $oi;
        }
    }
        return 0;
    }
    public function index(){
        $data['category'] = $this->db->get('category')->result();
        $data['product'] = $this->db->select("*")->from('product')->join('category',"product.category = category.cat_id")->get()->result();
        $this->load->view('public/header');
        $this->load->view('public/home',$data);
        $this->load->view('public/footer');
    }
    
    public function search(){
        $search = $_GET['search'];
        $data['products'] = $this->db->like(array("food_name"=>$search))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header',$data);
        $this->load->view('public/category',$data);
        $this->load->view('public/footer');
    }

    public function product($p_id){
        $this->data['product'] = $this->db->get_where("product",["p_id"=>$p_id])->row();
        $this->load->view('public/product',$this->data);
        $this->load->view('public/footer');
    }
    public function category($cat_id){
        $data['products'] = $this->db->where(array("category"=>$cat_id))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header');
        $this->load->view('public/category',$data);
        $this->load->view('public/footer');
    }
}
?>
