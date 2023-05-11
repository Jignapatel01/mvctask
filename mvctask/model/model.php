<?php

class model
{
    public $connection="";
    public function __construct()
        {
            session_start();
            try
            {
                $this->connection=new mysqli("localhost","root","","studentdata");
                //   echo "Connection successfully";
                 
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->connection));
            }
        }

        public function insertdata($data,$table)
        {
            $column=array_keys($data);
            $column1=implode(",",$column);

            $value=array_values($data);
            $value1=implode("','",$value);

            $insert="insert into $table($column1) values('$value1')"; 
            $exe=mysqli_query($this->connection,$insert);
            return $exe;
                
        }
        public function showdata($table)
        {
            $sel="select * from $table";
            $exe=mysqli_query($this->connection,$sel); 
            while($fetch=mysqli_fetch_array($exe))
            {
                 $arr[]=$fetch;
            }
             return $arr;
        }
        public function joindata($table,$table1,$table2,$table3,$where,$where2,$where3)
        {
           $join="select * from $table join $table1 on $where join $table2 on $where2 join $table3 on $where3";
            $exe=mysqli_query($this->connection,$join); 
            while($fetch=mysqli_fetch_array($exe))
            {
                 $arr[]=$fetch;
            }
            return $arr;
        }

        //create a member function to manage a data
        public function managealldata($table,$table1,$table2,$table3,$where,$where1,$where2,$column,$id)
        {
           $mngdata="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2 where $column='$id'";
            $exe=mysqli_query($this->connection,$mngdata); 
            while($fetch=mysqli_fetch_array($exe))
            {
                 $arr[]=$fetch;
            }
            return $arr;
        }
    
        //create a member function for user login
        public function userlogin($table,$em,$pass)
         {
            $sel="select * from $table where Email='$em' and Password='$pass'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
              $_SESSION["s_id"]=$fetch["s_id"];
              $_SESSION["email"]=$fetch["Email"];
              $_SESSION["fnm"]=$fetch["Firstname"];
              return true;
            }
            else 
            {
            return false;
            }
        } 

        //create a member function to forgetpassword
        public function forgetpassword($table,$column,$em)
         {
             $sel="select Password from $table where $column='$em'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
              $pass=base64_decode($fetch["Password"]);
              return $pass;
            }
            else 
            {
                 return false;
            }
        } 

        //member function for chnage password 
         public function chngpassword($table,$opass,$npass,$cpass,$column,$id)
         {
            $id=$_SESSION["s_id"];
            $sel="select Password from $table where $column='$id'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $pass=$fetch["Password"];
            if($pass==$opass && $npass==$cpass)
            {  
                $chng="update $table set Password='$npass' where $column='$id'";
                $exe=mysqli_query($this->connection,$chng);
                return $exe;
            }
            else
            {
                return false;
            }

         }

        // create a member function for update a data
        public function updatedata($table,$path,$email,$phone,$hb,$course,$st,$ct,$column,$id)
        {
            $upd="update $table set Photo='$path',Email='$email',Phone='$phone',Hobby='$hb',course_id='$course',state_id='$st',city_id='$ct' where s_id='$id'";
            $exe=mysqli_query($this->connection,$upd);
            return $exe;
        }


    
        // logout here to create a member function 
        public function logout()
        {
            unset($_SESSION["s_id"]);
            unset($_SESSION["email"]);
            unset($_SESSION["fnm"]);
            session_destroy();
            return true;
        }

 }




?>