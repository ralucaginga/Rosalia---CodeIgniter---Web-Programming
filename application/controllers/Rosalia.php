<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rosalia extends CI_Controller {

    public function index(){
            $this->load->view('main');
	}
        public function about(){
            $this->load->view('about');
        }
        public function contact(){
            $this->load->view('contact');
        }
        
        public function __Construct(){
            parent::__Construct();
            $this->load->database();
            $this->load->model('FlowerModel','f');
        }
        
        public function logare(){
            $data['title']="Login form";
            $this->load->view('logare',$data);
        }
        
        public function check(){
            /*if((($_POST["text1"]=="Admin")&&($_POST["pass1"]=="admin")))
            {
                $this->session->set_userdata('username',$_POST["text1"]);
                return redirect('home');
            }
            else {
                echo "Wrong data";
                exit;
            }  */
            if ($this->input->post('username') == "Admin" && $this->input->post('password') == "admin") {
            if ((int) $this->input->post('remember') == 1) {
                $cookie = array(
                    'name' => 'username',
                    'value' => $this->input->post('username'),
                    'expire' => '20',
                );
                $this->input->set_cookie($cookie);
            }
            $this->session->set_userdata('username', $this->input->post('username'));
            redirect('home');
        } else {
            echo '<script>alert("Invalid Username or Password");</script>';
            $data['selected'] = 2;
            $this->load->view('logare', $data);
        }
        }
        
        public function home(){
        if($this->session->userdata('username')){
            $data['uname']=$this->session->userdata('username');
            $this->load->view('home',$data);
        }
        else {
            return redirect('logare');
        }
        }
        
        public function logout(){
            //$this->session->sess_destroy();
            $this->session->unset_userdata('username');
            delete_cookie('username');
            redirect('');
        }
        
         public function database1(){
            $this->load->helper('url');
            $this->data['flowers']=$this->f->getFlowers();
            $this->load->view('database1',$this->data);
         }
         
         public function view1($id=NULL){
             $this->load->helper('url');
             $this->data['flower']=$this->f->getFlower($id);
             $this->load->view('view1',$this->data);
         }    
         
         public function database(){
             $this->load->helper('url');
             $this->data['imgs']=$this->f->getImages();
             $this->load->view('database',$this->data);
         }
         
         public function view($id=NULL){
             $row=$this->f->getImage($id);
             $data['r']=$row;
             $this->load->view('view',$data);
         }
         
         public function upload(){
             $this->load->helper('form');
             $this->load->view('upload');
         }
         
         public function save(){
             $data = array(
            'Nume' => $this->input->post('Nume'),
            'Imagine' => $this->do_upload(),
            'Culoare' => $this->input->post('Culoare'),
            'Marime' => $this->input->post('Marime'),
            'Pret' => $this->input->post('Pret'),
        );
        $this->f->save($data);
        redirect('database');
        }
        
        private function do_upload(){
            $type = explode('.', $_FILES['poza']["name"]);
             $type = $type[count($type) - 1];
            $url = "./images/".$_FILES['poza']['name'];
            if (in_array($type, array("jpg", "jpeg", "gif", "png")))
             if (is_uploaded_file($_FILES['poza']["tmp_name"]))
                if (move_uploaded_file($_FILES['poza']["tmp_name"], $url))
                    return $url;
             return "";
        }
        
        public function delete($id){
            $id=$this->db->where('ID',$id);
            $this->db->delete('flowers');
            redirect('database');
        }
        
        public function edit($id){
            $row=$this->f->getImage($id);
            $data['r']=$row;
            $this->load->view('edit',$data);
        }
        
        public function update(){
            $id=$this->input->post('ID');
            if ($_FILES['Imagine']['name'] != "") {
            $data=array(
                'Nume'=>$this->input->post('Nume'),
                'Imagine'=>"./images/".$_FILES["Imagine"]["name"],
                'Culoare'=>$this->input->post('Culoare'),
                'Marime'=>$this->input->post('Marime'),
                'Pret'=>$this->input->post('Pret'),
            );
            }
            else{
               $data=array(
                'Nume'=>$this->input->post('Nume'),
                'Culoare'=>$this->input->post('Culoare'),
                'Marime'=>$this->input->post('Marime'),
                'Pret'=>$this->input->post('Pret'),
            ); 
            }
        $image = "./images/" . $_FILES['Imagine']['name'];
        move_uploaded_file($_FILES['Imagine']['tmp_name'], $image);
        $this->db->where('ID', $id);
        $this->db->update('flowers', $data);
        redirect('database');
        }
        
        public function search(){
            $search=$this->input->post('search');
            $row=$this->f->searchFlower($search);
            $data['r']=$row;
            $this->load->view('search_result',$data);
        }
}

