<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index() { 
        $this->load->view('admin/halaman_login'); 
    } 

    public function cek(){

            //echo"cek data";
            $hsl=$this->admin_model->cek();
            
            if ($hsl->num_rows() > 0)
            {//jika salah satu pasword ada di di dalam table 
                    $ok=$hsl->row();
                    $data=array(
                        'username'=>$ok->username,
                        'role'=>$ok->role,
                        'id'=>$ok->id,
                        'nip'=>$ok->nip
                        );
                    $this->session->set_userdata($data);
                    redirect('admin');
                    
            }else
            {
                echo'<script type="text/javascript">
                        //<![CDATA[
                            alert("password salah silahkan login kembali ");
                            window.location="../login";
                        //]]>
                    </script>'; 
            }
            
            
            
        } 
}