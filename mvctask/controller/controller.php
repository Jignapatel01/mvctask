<?php
// error_reporting(0);
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
            $pass=base64_encode($_POST["pass"]);
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

        //chnage password
        if(isset($_POST["chngpass"]))
        {
            $id=$_SESSION["s_id"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $chngpass=$this->chngpassword('t_student',$opass,$npass,$cpass,'s_id',$id);
            if($chngpass)
            {
                // unset($_SESSION["s_id"]);
                // unset($_SESSION["email"]);
                // unset($_SESSION["fnm"]);
                // session_destroy();
                echo "<script>
                    alert('Your Password successfully changed')
                    window.location='login';
                    </script>";
            }
            else
            {   
                echo "<script>
                alert('Your new password and confirm password is not matched try again!')
                window.location='change-password';
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
        $pass=base64_encode($_POST["pass"]);
        
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

    //forget password logic
    if(isset($_POST["frgpwd"]))
    {
        require_once("PHPMailer/PHPMailer.php");
        require_once("PHPMailer/SMTP.php");
        require_once("PHPMailer/Exception.php");
        
        $em=$_POST["email"];
        
        try 
        {

             ob_start();    
             error_reporting(0);
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = true;                                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
            $mail->Password   = 'tmkhzxihfpumzbwv';                               //SMTP password
            $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($_POST["email"], 'Mail sending');
            $mail->addAddress($_POST["email"], 'Forget Password');     //Add a recipient                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Contact with Us email sending data';
            $chk=$this->forgetpassword('t_student','email',$em);
            $mail->Body="The password is :".$chk;
            $mail->send();

          if($chk)
            {
              echo "<script>
              alert('we will successfully send your password in your email please checked and logged in again!')
              window.location='login';
              </script>";
            }
            else 
            {
                echo "<script>
                alert('This email does not exist try with another registered email Id')
                window.location='forget-password';
                </script>";
            }
         
        } 
        catch(Exception $e) 
        {
            echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
        }
    }


    //Update profile 
    if(isset($_POST["update"]))
    {
        $id=$_SESSION["s_id"];
         
        //upload image or file
        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="upload/students/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        $email=$_POST["email"];
        $phone=$_POST["phn"];
        $hb=implode(",",$_POST["chk"]);
        $course=$_POST["course"];
        $st=$_POST["state"];
        $ct=$_POST["city"];
        
        $chk=$this->updatedata('t_student',$path,$email,$phone,$hb,$course,$st,$ct,'s_id',$id);
        if($chk)
        {
            echo "<script> 
            alert('Record updated successfully')
            window.location='manage-profile';
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

            case '/forget-password':
                require_once('index.php');
                require_once('navigation.php');
                require_once('frgtpassword.php');
                require_once('footer.php');
                break;

            case '/change-password':
                require_once('index.php');
                require_once('navigation.php');
                require_once('changepassword.php');
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