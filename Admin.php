<?php
Class Admin extends CI_Controller{
	  public function __construct() 
    {
        parent::__construct();
     
        // load form and url helpers
        $this->load->helper(array('form', 'url'));
         
        // load form_validation library
        $this->load->library('form_validation');
    }


public function create(){
//load model

$this->load->view('create');


}
public function insert()
{

        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['mobile'] = $this->input->post('mobile');
        $data['city'] =$this->input->post('city');

        $this->form_validation->set_rules('name', 'name', 'required');
         
        
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[student.email]');
         
        $this->form_validation->set_rules('mobile', 'mobile', 'required|max_length[13]');
         
        
        $this->form_validation->set_rules('password', 'password', 'required|exact_length[6]');
         
        $this->form_validation->set_rules('city', 'city', 'required|alpha');
         
        
         
        if ($this->form_validation->run())
        {
        	$this->load->model('Model_admin');
			$result = $this->Model_admin->ins($data);
			if($result)
			{
				$this->session->set_flashdata('message',"<div class='alert alert-success'>Registration Successfull!</div>");
				redirect('admin/home');
			}
			else
			{
				$this->session->set_flashdata('message',"<div class='alert alert-danger'>Something went wrong!</div>");
			}
        }
		$this->load->view('create');
    
     
		//$data= $this->input->post();
		//$this->load->model('model_admin');
		//$this->model_admin->ins($data);

	}
	public function home(){

		
		$this->load->model('Model_admin');
		$results=$this->Model_admin->readdata();
		$this->load->view('view',['result'=>$results]);
	}
	public function update($id = NULL)
{
	$this->load->model('model_admin');
	$data['user'] = $this->model_admin->get_user($id);
	
	
$this->load->view('edit',$data);
}
public function Ndata()
{ 	
	$idata=$this->uri->segment(3);
	  
         
	
		$data=$this->input->post();
		
	
	$this->load->model('Model_admin');
	$tdata=$this->Model_admin->udata($data,$idata);
	if($tdata){
	redirect('admin/home');
}
else{
	echo 'failed';
}
	
	
}
public function delete()
 	{
 		$id = $this->input->get('id');
 		
 		$this->load->model('Model_admin');
 		if($this->Model_admin->delete($id))
		{
			redirect ('admin/home');
		}
 		
 	}

}