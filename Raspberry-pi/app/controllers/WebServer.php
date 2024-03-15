
<?php

Class WebServer extends Controller
{
    public function index()
    {

        $data['page_title'] = "Web server";
        $this->view("pizze/WEB-server",$data, );
    }
}