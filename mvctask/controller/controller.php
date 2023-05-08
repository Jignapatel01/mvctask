<?php
// error_reporting(0);
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
        $join1=$this->joindata('t_student','t_course','tbl_state','tbl_city','t_student.course_id=t_course.course_id','t_student.state_id=tbl_state.state_id','t_student.city_id=tbl_city.city_id');
    
        //show state data
        $shwstate=$this->showdata('tbl_state');
        //show state data
        $shwcity=$this->showdata('tbl_city');

        //manage or show data for manage profile
        if(isset($_SESSION["s_id"]))        
        {
            $id=$_SESSION["s_id"];
            $prof=$this->managealldata('t_student','t_course','tbl_state','tbl_city','t_student.course_id=t_course.course_id','t_student.state_id=tbl_state.state_id','t_student.city_id=tbl_city.city_id','s_id',$id);
        }

        // userlogin data
        if(isset($_POST["log"]))
        {
            $em=$_POST["email"];
            $pass=$_POST["pass"];
            $log=$this->userlogin('t_student',$em,$pass);
            if($log)
            {
                echo "<script>
                alert('you are logged in succesfully')
                window.location='manage-profile';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Your email and password are wrong try again!')
                window.location='./';
                
                </script>";
            }
            
        }
      // logout here
        if(isset($_GET["logout-here"]))
        {
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('Logout successfully!')
                window.location='./';
                </script>"; 
            }

        
        }



    //student insert data 
    if(isset($_POST["submit"]))
    {
        date_default_timezone_set("Asia/calcutta");
        $fnm=$_POST["fnm"];
        $lnm=$_POST["lnm"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        
        //upload image or file
        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="upload/students/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        
        $gen=$_POST["gender"];
        $hb=implode(",",$_POST["chk"]);
        $phone=$_POST["phn"];
        $course=$_POST["course"];
        $st=$_POST["state"];
        $ct=$_POST["city"];
        $rdt=date("d/m/Y H:i:s a");
        

        $data=array("Firstname"=>$fnm,"Lastname"=>$lnm,"Email"=>$email,"Password"=>$pass,"Photo"=>$path,"Phone"=>$phone,
           "Gender"=>$gen,"Hobby"=>$hb,"course_id"=>$course,"state_id"=>$st,"city_id"=>$ct,"Registered_date_time"=>$rdt);        
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
                require_once('managestudent.php');
                require_once('studentform.php');
                require_once('footer.php');
                break;

            case '/login':
                require_once('index.php');
                require_once('navigation.php');
                require_once('login.php');
                require_once('footer.php');
                break;

            case '/manage-profile':
                require_once('index.php');
                require_once('navigation.php');
                require_once('manageprofile.php');
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