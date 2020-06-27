<?php

class Poll extends Controller
{

    function __construct()
    {

    }

    function index()
    {

        $this->view('index');
     }

     function getpoll($data=[]){

         if (isset($_POST['username'])){
             $this->model->getPoll($_POST);
             header('location:'.URL.'view/alert.php');
        }
     }

     function result(){
       $pollresults=$this->model->showResults();
       $count=$this->model->count();
       $data=['pollresults'=>$pollresults,'count'=>$count];
         $this->view('result',$data);
     }

}