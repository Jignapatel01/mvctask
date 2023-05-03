<?php

require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        //logic 
       parent::__construct();
        //manage or show data

        $shwdata=$this->showdata('t_course');

        //join all data
        $join1=$this->joindata('t_student','t_course','t_student.course_id=t_course.course_id');


    //student insert data 
    if(isset($_POST["submit"]))
    {
        $fnm=$_POST["fnm"];
        $lnm=$_POST["lnm"];
        $email=$_POST["email"];
        $phn=$_POST["phn"];
        $course=$_POST["course"];
        
        $data=array("Firstname"=>$fnm,"Lastname"=>$lnm,"Email"=>$email,"Phone"=>$phn,"course_id"=>$course);
        $chk=$this->insertdata($data,'t_student');
        if($chk)
        {
            echo "<script> 
            alert('Record inserted successfully')
            window.location='';
            </script>";
        }
    }

    if(isset($_SERVER['PATH_INFO']))
    {
        switch($_SERVER['PATH_INFO'])
        {
            case '/':
                require_once('index.php');
                require_once('navigation.php');
                require_once('studentform.php');
                require_once('footer.php');
                break;
             
             default:   
                require_once('index.php');
                require_once('404.php');
                require_once('footer.php');
        }

    }
   
    }


   


}
$obj=new controller;


?>