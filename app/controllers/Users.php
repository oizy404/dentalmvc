<?php
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
        }
        public function register(){
            //Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process the form

                //Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //Init data
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_err' => '', //error variables
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                //Validate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }
                else{
                    //Check email
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['email_err'] = 'Email is already taken';
                    }
                }

                //Validate Name
                if(empty($data['name'])){
                    $data['name_err'] = 'Please enter name';
                }
                //Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter password';
                }
                elseif(strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must e atleast 6 characters';
                }
                //Validate Confirm Password
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please confirm_password';
                }
                else{
                    if($data['password'] != $data['confirm_password']){
                        $data['confirm_password'] = 'Password do not match';
                    }
                }

                //Make sure errors are empty
                if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                    //Validated
                    
                    //Hash the password/encrypt
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    //Register User
                    if($this->userModel->register($data)){
                        // header('location:' . URLROOT . '/users/login');
                        redirect('users/login');
                    }
                    else{
                        die('Something went wrong');
                    }
                }
                else{
                    //Load view with errors
                    $this->view('users/register', $data);
                }
            }
            else{
                //Load the form
                //Init data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '', //error variables
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
            //Load view
            $this->view('users/register', $data);
            }
        }

        public function login(){
            //Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process the form

                //Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //Init data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',//error variables
                    'password_err' => ''
                ];

                //Validate Email
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }
                
                //Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter valid password';
                }

                //Make sure errors are empty
                if(empty($data['email_err']) && empty($data['password_err'])){
                    //Validated
                    // die('SUCCESS');
                    // $this->view('pages/userhome');
                    return redirect('pages/userhome');
                }
                else{
                    //Load view with errors
                    $this->view('users/login', $data);
                }

            }
            else{
                //Load the form
                //Init data
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '', //error variables
                    'password_err' => ''
                ];
            //Load view
            $this->view('users/login', $data);
            }
        }
    }