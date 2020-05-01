    <?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('M_login');
            $this->load->helper(array('form','url'));
        }
        function index(){
            $data['title']="Login";
            $data['content']='content';
            $this->load->view('form_login',$data);
        }
        function aksi_login(){
            $username = $this->input->post('nama');
            $password = $this->input->post('password');
            $where = array(
                'nama' => $username,
                'password' => $password
            );
            $cek = $this->M_login->cek_login("tb_user",$where)->row_array();
            if($cek != NULL){
                $data_session = array (
                'nama' => $cek['nama'],
                'username' => $cek['username'],
                );
                $this->session->set_userdata($data_session);

                redirect('Data/index');
            }else{
                $this->Index();
            }
        }
        function logout(){
            redirect('login');
        }
    }
    ?>