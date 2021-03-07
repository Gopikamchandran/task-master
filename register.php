<?php
session_start();
    require_once('db.php');
    // When form submitted, insert values into the database. -->
    if (isset($_POST['register'])) {
      // it is used to connect with the table
      
        $email=$_POST['remail'];
        $password=$_POST['rpassword'];
        $email= stripslashes($email);
        $password= stripslashes($password);
        $email=mysqli_real_escape_string($con,$email);
        $password=mysqli_real_escape_string($con,$password);
        $salt="zennode";
        $password=sha1($password.$salt);
// echo "$password";
    

        $sql="SELECT * from register where (email='$email');";
            $res=mysqli_query($con,$sql);
            if ($res) 
            {

                  // output data of each row
                 //$row = mysqli_fetch_assoc($res);
           //$email= $row['email'];
           //  $_SESSION['user']=$email;
               // if($email==$row['email'])
                 // if($email = isset($row['email']) ? count($row['email']) : 0)
              if(mysqli_num_rows($res)>0)
                 {
                      // echo "Email already exists";
                      echo' <script>alert
                   ("Email Already exists Try Again!");window.location.assign("sampleref.php");</script>';
            
                  }
                 else { //here you need to add else condition
                          // echo "alright";
       
                      $query    = "INSERT into register (email,password)
                     VALUES (  '$email','$password')";
                    // $reg=mysqli_query($con,$query);
                     //$row=mysqli_fetch_assoc($reg);
                    // $email=$reg['email'];
                    // $_SESSION['user']=$email;
                       $result   = mysqli_query($con, $query);
                    //   return false;
                    if ($result)
                     {
                        // to display in the form of a message
                      echo' <script>alert
                        ("Successfully registerd");window.location.assign("time.php");</script>';
                        
                      } else
                       {
                        echo'  <script>alert
                           ("Registration Failed");window.location.assign("sampleref.php");</script>' ;
                
                       }
                         } 
              }
          }
?>
 