<?php

namespace Core;

class Authenticator{
    protected $errors = [];
    public function attempt($email,$password){  
        // check the credentials
        $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email=:email",[
            'email'=>$_POST['email']
        ])->find();

        if(!$user){
            $this->errors['email'] = 'You don\'t have account yet!, Please register your account first!';
            if(! empty($this->errors)){
                $this->redirectURL($this->errors);
            }
        }else{
            if (!password_verify($_POST['password'], $user['password'])) {
                $this->errors['password'] = 'Your password is incorrect!';
                
                if (!empty($this->errors)) {
                    $this->redirectURL($this->errors);
                }
            }
        }

        $this->login([
                'email'=> $_POST['email'],
                'user_id'=> $user['id']
            ]);
        header('location: /');
        exit();
    }

    public function login($user){
        $_SESSION['user'] = $user;
        session_regenerate_id(true);
    }

    public function logout(){
        $_SESSION = [];
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID','',time() - 3600, $params['path'],$params['domain']);
    }

    public function redirectURL($errors){
        return view("session/create.view.php",[
            "heading" => "Create Register",
            "errors"=> $errors
        ]);
    }
}