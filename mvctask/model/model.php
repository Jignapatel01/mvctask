<?php

class model
{
    public $connection="";
    public function __construct()
        {
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
    
//         public function joincity($table2,$table3,$where1)
//         {
//             $joinc="select * from $table2 join $table3 on $where1";
//             $exe=mysqli_query($this->connection,$joinc); 
//             while($fetch=mysqli_fetch_array($exe))
//             {
//                  $arr[]=$fetch;
//             }
//             return $arr;
//         }
 }




?>