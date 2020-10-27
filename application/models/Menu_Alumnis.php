<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_Alumnis extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        function insert_Register($data){
			$this->db->insert('register',$data);
        }
        function insert_Educational($data1){
            $this->db->insert('data_educational',$data1);
        }
        function insert_Work($data2){
            $this->db->insert('data_work',$data2);
        }
        function insert_Login($data3){
            $this->db->insert('login',$data3);
        }
        function insert_info($data4){
            $this->db->insert('info',$data4);
        }
        
        function get_Private(){
			$this->db->select('Name_LastName,Std_ID,Date_Of_Birth,Sex,Address,Tel,E_mail,Facebook,Instagram');
			$result = $this->db->get('register');     
			return $result;
        }
        function get_Educational(){
			$this->db->select('Name_LastName,Std_ID,Date_Of_Birth,Sex,Address,Tel,E_mail,Facebook,Instagram');
			$result = $this->db->get('data_educational');     
			return $result;
        }
        function get_Work(){
			$this->db->select('id_card,Company_Name,Company_Address,Profession,Rank,Company_Tel');
			$result = $this->db->get('data_work');     
			return $result;
        }
        
        function Search_Std_ID($Std_ID){
           
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `Std_ID` = $Std_ID"); 
            return $result;
            
        }
        function Search_Name($Name_LastName){
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `Name_LastName` LIKE '%$Name_LastName%'");
            return $result;
        }
        function Search_Year($End_Year){
            $result = $this->db->query("SELECT * FROM `data_educational` WHERE `End_Year` = $End_Year");
            return $result;
        }
       
        function Check_Login($Username,$Password){
            $this->db->where('Username', $Username);
            $this->db->where('Password', $Password);
            $result = $this->db->get('login');
            $message = '';
    
            if ($result->num_rows() > 0) {
                $message = true;
    
                // $this->load->view('list');
    
            } else {
                $message = false;
            }
            $data = array(
                "message" => $message, "data" => $result->result()
    
            );
            return $data;
        }
        function Profile($Std_ID){
		$this->db->select('*');
        $this->db->from('register');
        $this->db->join('data_educational', 'data_educational.Std_ID = register.Std_ID', 'left');
        $this->db->join('data_work', 'data_work.Std_ID = register.Std_ID', 'left');
        $this->db->where('register.Std_ID', $Std_ID);
        
        $query = $this->db->get();
        return $query->result();
        }
        function Update_Register($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('register', $data);
        }
        function Update_Educational($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('data_educational', $data);
        }
        function Update_Work($data)
        {
            $Std_ID =  $this->session->userdata('Std_ID');
            $this->db->where('Std_ID', $Std_ID);
            $this->db->update('data_work', $data);
        }
}