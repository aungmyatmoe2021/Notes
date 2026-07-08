<?php

namespace Http\Form;
use Core\Validator;

class LoginForm{
    protected $errors = [];
    public function validate($email,$password){
        if(!Validator::checkEmail($email)){
            $this->errors['email'] = 'Please provide a Valid email adddress';
        }


        if(!Validator::checkValiation($password)){
            $this->errors['password'] = 'Please provide password with the min 7, max 255 character';
        }

        return empty($this->errors);
    } 

    public function getErrors(){
        return $this->errors;
    }
}