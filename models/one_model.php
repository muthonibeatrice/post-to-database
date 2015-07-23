<?php Class One_Model extends CI_Model{
		public function details()
	{
		$query = $this->db->get_where('answer',array('choiceid ='=>$data));
			if(isset($query)){
				$query=$answer;
			}

		// if($query->num_rows()>0)
		// {
		// 	foreach ($query->result() as $row) {
		// 		$data[] = $row;
		// 	}
		// 	return "CORRECT";
		// }

		// else
		// {     	

		// 	// $this->db->insert('details',$data);
		// 	return "Wrong";
		// }

	}

	public function fetch()
	{
        $details = $this->db->get('choices');
        return $details->result();
    }

public function select()
	{
        $details = $this->db->query("select * from choice where ");
        return $details->result();
    }
	

	 public function getAll(){
		$this->db->select('answer');
		$this->db->from('answer');
		$this->db->where('choiceid',48);

		$q = $this->db->get();
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}

	}
	public function add_question($name=null){
		//assign variables to column names in form
		// $answer=($this->input->post('radioGroup1'));
		// $choiceid=($this->input->post('choiceid'));
		
	    $this->db->insert('answer1',$name);

	    // return $insert;
		

	}
}

?>