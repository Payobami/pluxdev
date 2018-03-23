<?php
/**
 * Created by PhpStorm.
 * User: prudent
 * Date: 22-Mar-18
 * Time: 4:25 PM
 */
class Authentication extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('form','url'));
        $this->load->database();
    }


    public function login(){

        $this->form_validation->set_rules('login_id','Username or Email','required|trim|min_length[3]' );
        $this->form_validation->set_rules('password','Password','required|trim|min_length[3]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger text-white"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
        $data['success'] ="";


        if($this->form_validation->run() == false){

            $this->load->view('template/header', $data);
            $this->load->view('login', $data);
            $this->load->view('template/footer', $data);
        }
        else{
            $userName = $this->input->post('login_id');
            $pWord = md5($this->input->post('password'));

            //check the user table if the user exist

            $this->db->where("username ='$userName' AND password = '$pWord'");
            $this->db->or_where("email = '$userName' AND password ='$pWord'");
            $this->db->from('members');
            $countUser = $this->db->count_all_results();



            if($countUser >= 1){

                $this->db->where("username ='$userName' AND password = '$pWord'");
                $this->db->or_where("email = '$userName' AND password ='$pWord'");
                $this->db->from('members');
                $checkStatus = $this->db->get()->result();
                //check for the verification status
                foreach($checkStatus as $loginStatus);

                if($loginStatus->status <= 0){

                    $data['success'] ="<div class='alert alert-danger text-white'><a class='close'>x</a> Unverified Email Address; Please verify the link sent to this email (". $loginStatus->email .") before login</div>";
                    $this->load->view('template/header', $data);
                    $this->load->view('login', $data);
                    $this->load->view('template/footer', $data);
                }

                elseif($loginStatus->status >= 1){

                    //set in the session from here
                    $this->session->loginSession = $loginStatus->username;
                    $this->session->loginEmail = $loginStatus->email;

                    //send back to
                    redirect(base_url('index.php'));
                }

            }

            elseif($countUser<=0){

                $data['success'] ="<div class='alert alert-warning no-border-radius text-white'><a class='close' data-dismiss='alert'>x</a> Username or Password not found please check again or Register</div>";

                $this->load->view('template/header', $data);
                $this->load->view('login', $data);
                $this->load->view('template/footer', $data);
            }

        }

    }




    public function register(){

        $data['success']="";

        $this->form_validation->set_rules('firstname','First Name','required|trim|alpha|min_length[3]');
        $this->form_validation->set_rules('username','Username','required|trim|min_length[5]');
        $this->form_validation->set_rules('lastname','Last Name','required|trim|alpha|min_length[3]');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');
        $this->form_validation->set_rules('country','Country','required|trim|alpha');
        $this->form_validation->set_rules('confirm','Term and Conditions','required|trim|alpha');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger text-white"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');


        if($this->form_validation->run() == false){

            $this->load->view('template/header', $data);
            $this->load->view('register', $data);
            $this->load->view('template/footer', $data);

        }
        else{
            $username = $this->input->post('username');
            $firstName = $this->input->post('firstname');
            $lastName = $this->input->post('lastname');
            $emailAdd = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $country = $this->input->post('country');





            //check if the user already register

            $this->db->where("username ='$username'");
            $this->db->or_where("email ='$emailAdd'");
            $countUser = $this->db->count_all_results('members');

            if($countUser >= 1){

                $data['success'] ="<div class='alert alert-danger no-border-radius text-white'><a class='close' data-dismiss='alert'>x</a> Already registered !!!.. Please try to login with your login ID (". $emailAdd . ") and password</div>";

                $this->load->view('template/header', $data);
                $this->load->view('register', $data);
                $this->load->view('template/footer', $data);


            }

            else{
                $mailConfirm = md5($emailAdd);
                $insertReg = array(
                    'username'=>$username,
                    'email'=>$emailAdd,
                    'fullname'=>$firstName .' '.$lastName,
                    'password'=>$password,
                    'country' => $country,
                    'status'=> 0,
                    'active'=> $mailConfirm,
                    'resetComplete'=>'No',
                    'authme'=> 0,
                    'havanaplux'=> 1,
                    'date'=> date('Y-m-d H:i:s')
                );
                //insert into database members table

                $this->db->insert('members',$insertReg);


                //send confirmation mail to the user
                require_once('action/confirm_reg_mail.php');

                $to = $emailAdd;
                $from = "HavanaPlux.com";
                $from_add = "HavanaPlux.com";

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
                $headers .= "From: =?UTF-8?B?". base64_encode($from) ."?= <$from_add>\r\n" .
                    'Reply-To: '.$from_add . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $subject = 'Havanaplux Account Confirmation';
                //mail($to,$subject,$mailBody.'</body></html>',$headers, '-f'.$from_add);


                $data['success'] ="<div class='alert alert-success no-border-radius text-white'><a class='close' data-dismiss='alert'>x</a>Registration successful!!! Please logon to your email (". $emailAdd . ") to confirm and activate your account</div>";

                $this->load->view('template/header', $data);
                $this->load->view('register', $data);
                $this->load->view('template/footer', $data);
            }
        }
    }




    public function logout(){

        if(isset($this->session->loginSession)){

            $this->session->unset_userdata(array('loginSession','loginEmail'));

            redirect(base_url('authentication/login'));

        }
        else{

            redirect(base_url('authentication/login'));
        }

    }


}