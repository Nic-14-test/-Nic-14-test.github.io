
<?php

Class OctoPrint extends Controller
{
    public function index()
    {

        $data['page_title'] = "Install OctoPrint";
        $this->view("pizze/OctoPrint",$data, );
    }
}