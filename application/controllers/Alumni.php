<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Menu_Alumnis','MA');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function Register()
	{
		$this->load->view('View_reg');
	}
	public function reg_menu(){
		$data = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'ID_Card' => $this->input->post("ID_Card"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Sex'=> $this->input->post("Sex"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$data1 = array(	
			'Std_ID'=> $this->input->post("Std_ID"),
			'Name_LastName'=> $this->input->post("Name_LastName"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$data2 = array(
			'Std_ID'=> $this->input->post("Std_ID"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

		$data3 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Username'=> $this->input->post("Username"),
			'Password'=> $this->input->post("Password"),
			'Re_Password'=> $this->input->post("Re_Password"),
		);
		
		

		if($this->input->post("Name_LastName")!= "" && $this->input->post("Std_ID")!== ""){
			$this->MA->insert_Register($data);
			$this->MA->insert_Educational($data1);
			$this->MA->insert_Work($data2);
			$this->MA->insert_Login($data3);
			$this->load->view('index');
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}
	public function showPrivate()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result1['MA'] = $this->MA->Profile($Std_ID);
		$result['MA'] = $this->MA->get_Private();  
		$this->load->view('View_showall',$result,$result1);
	}
	public function showEducational()
	{
		$result['MA'] = $this->MA->get_Educational();
		$this->load->view('view_menu',$result);
	}
	public function showWork()
	{
		$result['MA'] = $this->MA->get_Work();
		$this->load->view('view_menu',$result);
		
	}
	public function getStdID()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('input_Stdid',$result);
		
	}
	public function search_StdID()
	{	
	
		$Std_ID = $this->input->get('Std_ID');
		
		if($Std_ID == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('input_Stdid');
		}
		else
		{
		$result['MA'] = $this->MA->Search_Std_ID($Std_ID);
		$this->load->view('View_StdID',$result);
		}
	}
	public function getName()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('input_StdName',$result);
		
	}
	public function search_Name()
	{
		$FName_LName = $this->input->get('FName_LName');

		if($FName_LName == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('input_StdName');
		}
		else
		{
		$result['MA'] = $this->MA->Search_Name($FName_LName);
		$this->load->view('View_Name',$result);
		}
	}
	public function getYear()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('input_StdYear',$result);
		
	}
		
	public function search_Year()
	{
		$End_Year = $this->input->get('End_Year');

		if($End_Year == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('input_StdYear');
		}
		else
		{
		$result['MA'] = $this->MA->Search_Year($End_Year);
		$this->load->view('View_Year',$result);
		}
	}

	public function Check_Login()
	{

        if ($this->input->post('login')) {
            $Username = $this->input->post('Username');
            $Password = $this->input->post('Password');
            $check = $this->MA->Check_Login($Username, $Password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $this->load->view('home');
            } else {



                // echo '<script>alert("Region already added");</script>'
				echo"<script language=\"JavaScript\">";
    			echo"alert('กรุณาสมัครสมาชิกก่อนค่ะ!')";
				echo	"</script>";
				$this->load->view('index');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
    
        $this->load->view('index');
    }
	
	public function Profile()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('profile',$result);
		
	}
	public function edit()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('editProfile',$result);
	}
	public function View_editprofile()
	{
		$this->load->view('View_editProfile');
	}

	public function edit_Profile()
	{
		$data = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$data1 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$data2 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

			$this->MA->Update_Register($data);
			$this->MA->Update_Educational($data1);
			$this->MA->Update_Work($data2);
			$Std_ID =  $this->session->userdata('Std_ID');
			$result1['MA'] = $this->MA->Profile($Std_ID);
			$this->load->view('profile', $result1);
		
	}
	public function home()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('home',$result);
		
	}
	public function search()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('search',$result);
		
	}
	public function master()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('master',$result);
		
	}
	public function contact()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('contact',$result);
		
	}
	
}
	
