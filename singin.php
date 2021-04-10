<?php

    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['pass']) ){
            $name=$user=$email=$pass="";
            $name=$_POST['name'];
            $email=$_POST['email'];
            $user=$_POST['user'];

            if(!preg_match("/[a-z A-Z ]/",$name)){
                exit ("name can be letter and wight space");
            }
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                exit("Enter vaild email format");
            }
            $name=filter_var($name,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            $user=filter_var($user,FILTER_SANITIZE_STRING);

            $host_name="localhost";
            $server_name="root";
            $passw="";
            $DB_name="truck";

            $conn=new mysqli($host_name,$server_name,$passw,$DB_name);

            if (mysqli_connect_error()) {
                die("Database connection failed: " . mysqli_connect_error());
              }

            $name=setData($name);
            $user=setData($user);
            $email=setData($email);
            $pass=md5(setData($_POST['pass']));

            $sql_user="SELECT * FROM loginfo WHERE username='$user'";
            $res_u=mysqli_query($conn,$sql_user);
            if(mysqli_num_rows($res_u)>0){
                exit("<div class= 'er'> username is taken</div>");  
            }

            $sql_email="SELECT * FROM loginfo WHERE email='$email'";
            $res_e=mysqli_query($conn,$sql_email);
            if(mysqli_num_rows($res_e)>0){
            exit ("<div class= 'er'> email is taken</div>");
            
            }
            else{

                $sql_singIn="INSERT INTO loginfo (password,email,username,name) VALUES ('$pass','$email','$user','$name') ";

                if(mysqli_query($conn,$sql_singIn)){
                    exit("success");
                }
                else{
                    echo"somthing want wrong sorry";
                }
            }
            mysqli_close($conn);
            }
            else{
                echo "<h3 style='color:red'> Enter your full information?</h3>";
            }
    }
function setData($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data); 
    $data =$GLOBALS['conn']->real_escape_string($data);
    return $data;
}
    
?>