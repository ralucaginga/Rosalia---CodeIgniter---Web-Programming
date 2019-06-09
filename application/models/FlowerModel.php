<?php
class FlowerModel extends CI_Model{
       public function __construct(){
           parent::__construct();
       }

        function getFlowers(){
            $this->db->select('ID,Nume,Imagine,Culoare,Marime,Pret');
            $this->db->from('flowers');
            $query=$this->db->get();
            return $query->result();
        }
        
       function getFlower($id){
         $this->db->select('Nume,Imagine,Culoare,Marime,Pret')->where('ID',$id)->from('flowers');
         $query=$this->db->get();
         return $query->result_array();}
         
        function save($data) {
        $this->db->set('Nume', $data['Nume']);
        $this->db->set('Imagine', $data['Imagine']);
        $this->db->set('Culoare', $data['Culoare']);
        $this->db->set('Marime', $data['Marime']);
        $this->db->set('Pret',$data['Pret']);
        $this->db->insert('flowers');
    }
    public function update($data){
        $this->db->set('Nume',$data['Nume']);
        $this->db->set('Imagine',$data['Imagine']);
        $this->db->set('Culoare',$data['Culoare']);
        $this->db->set('Marime',$data['Marime']);
        $this->db->set('Pret',$data['Pret']);
        $this->db->where('ID',$id);
    }
    
    public function getImages(){
        $this->db->select('ID,Nume,Imagine,Culoare,Marime,Pret')->from('flowers');
        $query=$this->db->get();
        return $query->result();
    }
    
    function getImage($id){
        $this->db->where('ID',$id);
        $query=$this->db->get('flowers');
        return $query->row();
    }
    
    function searchFlower($search){
            $this->db->like('Nume',$search);
            $this->db->or_like('Culoare',$search);
            $query=$this->db->get('flowers');
            return $query->result();
        }
}
