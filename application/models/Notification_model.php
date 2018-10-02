<?php
Class Notification_model extends CI_Model
{
 
  function notification_list($limit){
	  $logged_in=$this->session->userdata('logged_in');
		
	  if($this->input->post('search')){
	 $this->db->or_like('notification.nid',$this->input->post('search'));
	 $this->db->or_like('notification.title',$this->input->post('search'));
	 $this->db->or_like('notification.message',$this->input->post('search'));
	 $this->db->or_like('notification.notification_date',$this->input->post('search'));
	 $this->db->or_like('notification.click_action',$this->input->post('search'));
	 $this->db->or_like('notification.notification_to',$this->input->post('search'));
	  }
	  if($logged_in['su'] == '0'){
	  $uid=$logged_in['uid'];
	  $this->db->or_where('notification.uid',$uid);
	$this->db->or_where('notification.uid','0');
		
	  }
	  $this->db->join('users','users.uid=notification.uid','left');
		$this->db->limit($this->config->item('number_of_rows'),$limit);
		$this->db->order_by('nid','desc');
		$query=$this->db->get('notification');
		return $query->result_array();
		
	 
 }
 
 
 function insert_notification($result,$nval){

         $userdata=array(
         'title'=>$this->input->post('title'),
         'message'=>$this->input->post('message'),
         'click_action'=>$this->input->post('click_action'),
         'uid'=>$this->input->post('uid'),
         'notification_to'=>$nval,
         'response'=>$result,
         
         );
         $this->db->insert('notification',$userdata);
         
 
 
 }
 
 
 
   
 
}
?>
