<?php

Class Signup extends Controller
{

    public function index()
    {



        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            show($_POST);

            $User = $this->load_model("User");
        }

        $this->view("pizze/signup");
        
    }
}