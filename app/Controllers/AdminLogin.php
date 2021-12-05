<?php

namespace App\Controllers;
use App\Models\UserAccountModel;

class AdminLogin extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('sign-up/admin-login');
    }

    public function signin()
    {
        helper (['form']); 
        $session=session();
        $model=new UserAccountModel();

        $email= $this->request->getVar('login-email');
        $password= $this->request->getVar('login-password');

       
    

        $data= $model->where('email', $email)->first();

        if($data){
            $pass=$data['userPassword'];
            $userName=$data['userName'];
           //$pwd_verify=password_verify($password, $pass);

        //    var_dump($userName);
        //    var_dump($pass);
        //    var_dump($password);
        //    //var_dump($pwd_verify);

            if($pass==$password){
                $sessionData=[
                    'userID'=>$data['userID'],
                    'userName'=>$data['userName'],
                    'email'=>$data['email'],
                    'isSignedIn'=>TRUE

                ];

                $session->set($sessionData);
                return redirect()->to('/AdminDashboard');
            }else{
                //var_dump($session);
                $session->setFlashdata('msg','Wrong password. Please enter correct password');
                return view('sign-up/admin-login');
                
            }


        }else{
            $session->setFlashdata('msg','Email does not exist. Please enter correct Email!');
            return view('sign-up/admin-login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/AdminLogin');
    }
}