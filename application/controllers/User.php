<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function login()
    {

        $dataInsert = array(
            'user_name' => $_POST['name']
        );
        $this->db->insert('tb_user', $dataInsert);
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['id'] = $this->db->insert_id();

    }

    public function facebook_login()
    {
        $dataInsert = array(
            'user_facebook_id' => $_POST['id'],
            'user_name' => $_POST['name'],
            'user_facebook_name' => $_POST['name'],
            'user_facebook_email' => $_POST['email'],
            'create_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tb_user', $dataInsert);
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['id'] = $this->db->insert_id();
    }

    public function profile()
    {
        $this->load->view('profile');
    }

    public function changename()
    {
        if (isset($_POST) && isset($_SESSION['user']['id'])) {
            $_SESSION['user']['name'] = $_POST['name'];
            $dataWhere = array("user_id" => $_SESSION['user']['id']);
            $dataUpdate = array("user_name" => $_POST['name']);
            $this->db->where($dataWhere);
            $this->db->update("tb_user", $dataUpdate);
            $dataUser=$this->db->query("select * from tb_user where  user_id='".$_SESSION['user']['id']."'")->result();
            if(count($dataUser)>=1){
                $dataUser=$dataUser[0];
            }
            echo json_encode($dataUser);
        }
    }

}
