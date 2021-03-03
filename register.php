<?php
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
                  $row = mysqli_fetch_assoc($res);
            
                if($email==$row['email'])
                 // if($email = isset($row['email']) ? count($row['email']) : 0)
                 {
                      // echo "Email already exists";
                      echo' <script>alert
                   ("Email Already exists Try Again!");window.location.assign("sampleref.php");</script>';
            
                  }
                 else { //here you need to add else condition
                          // echo "alright";
       
                      $query    = "INSERT into register (email,password)
                     VALUES (  '$email','$password')";
                       $result   = mysqli_query($con, $query);
                    if ($result)
                     {
                        // to display in the form of a message
                      echo' <script>alert
                        ("Successfully registerd");window.location.assign("sampleref.php");</script>';
            
                      } else
                       {
                        echo'  <script>alert
                           ("Registration Failed");window.location.assign("sampleref.php");</script>' ;
                
                       }
                         } 
              }
          }
?>
 