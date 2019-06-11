<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function getmessage(){
       $this->getData($_POST);
    }
    function getData($post){
        $dataWHERE=explode(":",base_url());
        $dataWHERE=$dataWHERE[1];
        $where="";
        if($post['last_message']!="undefined"){
            $where=" and create_date >'".$_POST['last_message']."'";
        }
        $data['resaut']=$this->db->query("select * from tb_chat where ch_server like'%".$dataWHERE."%'".$where)->result();
        foreach ($data['resaut'] as $key=>$item){
            if($item->user_id==$_SESSION['user']['id']){
                $item->self='me';
            }else{
                $item->self='you';
            }
        }
        if(count($data['resaut'])>=1){
            $data['last_message']=$data['resaut'][count($data['resaut'])-1]->create_date;
            echo json_encode($data);
        }
    }
	public function message(){
	    $data['post']=$_POST;

	    $dataInsert=array();
	    $dataInsert['ch_server']=base_url();
	    $dataInsert['ch_name']=$_SESSION['user']['name'];
	    $dataInsert['user_id']=$_SESSION['user']['id'];
	    $dataInsert['ch_text']= ($data['post']['text_message']);
	    $dataInsert['create_date']=date("Y-m-d h:i:sa");
	    $dataWHERE=explode(":",$dataInsert['ch_server']);
        $dataWHERE=$dataWHERE[1];
        $where="";

	    if($data['post']['text_message']!=""){
            $this->db->insert("tb_chat",$dataInsert);
        }

	    $this->getData($_POST);

    }
}
