<?php

Class Shop extends Collator
{

  public function index()
  {
       $serch = false;
       if(isset($_GET['find']))
       {
               $find = addslashes($_GET['find']);
                $serch = true;
       }
       $User = $this->load_model('User');
       $image_class = $this->load_model('Image');
       $user_data = $User->check_login();

    

        if(is_object($user_data)){
          $data['user_data'] = $user_data;
        }
      
  }


}