<?php
header ( "Content-type: text/html; charset=gb2312" ); 
include("conn/conn.php");
$username=$_POST['username'];
$userpwd=md5($_POST['userpwd']);

class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }
   function checkinput(){
     include("conn/conn.php");
     $sql=mysqli_query($conn,"select * from tb_user where name='".$this->name."'");
     $info=mysqli_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('not exist£¡');history.back();</script>";
          exit;
       }
      else{
	      if($info['dongjie']==1){
			   echo "<script language='javascript'>alert('has been concenled£¡');history.back();</script>";
               exit;
			}          
          if($info['pwd']==$this->pwd)
            {  
			   session_start();
	           $_SESSION['username']=$info['name'];
               header("location:index.php");
               exit;
            }
          else {
             echo "<script language='javascript'>alert('wrong paasword£¡');history.back();</script>";
             exit;
           }
      }    
   }
 }
    $obj=new chkinput(trim($username),trim($userpwd));
    $obj->checkinput();
?>