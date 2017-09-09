<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('students_model','students');
	}
	public function index()
	{
		$header_data['title'] = "Add New Student";
		$data=array();
		
		//$condition = array('sex' => 'F' , 'course' => 'BSIT');
		
		$rs = $this-> students-> read();
		
		foreach($rs as $r){
			$info = array(
					'idno' => $r['idno'],
					'lastname' => $r['lname'],
					'firstname' => $r['fname'],
					'middlename' => $r['mname'],
					'course' => $r['course'],
					'sex' => $r['sex'],
			);
			
			$students[] = $info;	
		}
		$data['students']= $students;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_students',$data);
		$this->load->view('include/footer');
		
	}
	public function add_student(){
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
		}
		
		else{
			$header_data['title'] = "Add New Student";
			$data=array();
			
			$this->load->view('include/header',$header_data);
			$this->load->view('students/new_students',$data);
			$this->load->view('include/footer');
		
		}
	}
		
		
		//echo "CI and bootstrap";
		// $header_data['title']="Students: View Students List";
		// $students = array();
		
		// $condition = array('sex' => 'F' , 'course' => 'BSIT');
		
		// $rs = $this-> students-> read();
		
		// foreach($rs as $r){
			// $info = array(
					// 'idno' => $r['idno'],
					// 'lastname' => $r['lname'],
					// 'firstname' => $r['fname'],
					// 'middlename' => $r['mname'],
					// 'course' => $r['course'],
					// 'sex' => $r['sex'],
			// );
			
			// $students[] = $info;	
		// }
		// $data['students']= $students;
		
		// $this->load->view('include/header',$header_data);
		// $this->load->view('students/view_students',$data);
		// $this->load->view('include/footer');
	}
