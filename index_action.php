<?php 

include('config.php');

$action=$_POST['action'];

if($action=='login'){

      $username=$_POST['username'];
      $password=$_POST['password'];    

      $sql="select * from tbluser where u_username='{$username}' and u_password='{$password}'";
      $result=mysqli_query($con,$sql);
     
      if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            $_SESSION['userid']=$row['u_id'];
            $_SESSION['username']=$row['u_username'];
            $_SESSION['password']=$row['u_password'];
            $_SESSION['usertype']=$row['u_usertype'];        
           
            echo 1;
      }else{
            session_unset();
            echo 0;
      }
  
}


if($action=="kill_session"){   
      unset($_SESSION["choose_division"]);
      unset($_SESSION["choose_city"]);
      unset($_SESSION["choose_quarter"]);
      
      echo 1;  
}


if($action=="logout"){   
 
      session_unset();
      echo 1;
     
      
}


?>