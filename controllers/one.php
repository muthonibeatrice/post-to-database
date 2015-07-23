<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      class One extends CI_Controller{

		function __construct()
   		 {
 		  parent::__construct();
              $this->load->model('one_model');
		 }

      	public function index()
      	{
            //die("hhhhhhhhh");
                  // $answersubmitted=$this->input->get('radioGroup1');
                  // $this->load->model('one_model');
      		// echo 'hello world';
                  // $data['details'] = $this->one_model->fetch();
      		$this->load->view('index');
      	}
            // public function insert1()
            // {
            //   // $this->load->model('one_model');
            //       $answersubmitted=$this->input->post('radioGroup1');
            //       // echo 'hello world';
            //       // $thsis->load->model('one_model');
            //        $answer['returned']=$this->one_model->details($answersubmitted);
            //       //  print_r($data);
            //       // die();
            //        echo "$answersubmitted";
            //       $this->load->view('index',$answer);


            // }

            public function trial()
            {
                  // $answersubmitted=$this->input->post('radioGroup1');
                  // echo 'hello world';
                  // $thsis->load->model('one_model');

                   $data['data'] = $this->one_model->getAll();
                   $this->load->view('index', $data);


            }

             public function trial1()
            {
                  // $answersubmitted=$this->input->post('radioGroup1');
                  // echo 'hello world';
                  // $thsis->load->model('one_model');
                 
                  
                   // if(isset($_POST['submit'])){}
                  $first_name = ($this->input->post('fname'));//assigning variables for the names in the form
                  $last_name = ($this->input->post('lname'));

                  $names=array(
                  'fname'=> $first_name,//column names in the database
                  'lname'=> $last_name
                    );

                  $this->one_model->add_question($names);
                 // $data['data'] = $this->one_model->add_question();

                  //$this->load->view('index',$data);
                    

                   
                   
 // $answersubmitted=$this->input->post('fname');
                  // echo $answersubmitted;

            }
         
      	 


      }
?>