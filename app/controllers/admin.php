<?php

Class Admin extends Controller
{
    public function index()
    {
        $data['page_title'] = "Admin";
       $this->view("pizze/admin/index",$data);
    }


}