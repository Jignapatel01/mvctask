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
        public function joindata($table,$table1,$where)
        {
           $join="select * from $table join $table1 on $where";
            $exe=mysqli_query($this->connection,$join); 
            while($fetch=mysqli_fetch_array($exe))
            {
                 $arr[]=$fetch;
            }
            return $arr;
        }
    
}




?>