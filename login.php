<?php

session_start();
if(!empty($_POST["submit"]) && $_SERVER['REQUEST_METHOD']== 'POST'){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){

        $user=$_POST["user"];
        $pass=$_POST["pass"];

        $host_name="localhost";
        $server_name="root";
        $passw="";
        $DB_name="truck";

        $conn=new mysqli($host_name,$server_name,$passw,$DB_name);

        if($conn->connect_error){
            die("failed to connection :".$conn->connect_error);
        }

        $stmt= $conn->prepare("SELECT name FROM loginfo WHERE username=?");
        $stmt->bind_param("s",$user);
        $stmt->execute();
        $result=$stmt->get_result();
        if($result->num_rows == 1){
            $row=mysqli_fetch_assoc($result);
            $cookie_name="user";
            $cookie_value=$row["name"];
            setcookie($cookie_name,$cookie_value,time() + 3600,'/');
        }

        $user=setData($user);
        $pass=md5(setData($pass));
        $stmt= $conn->prepare("SELECT id FROM loginfo WHERE username=? AND password=?");
        $stmt->bind_param("ss",$user,$pass);
        $stmt->execute();
        $info_res=$stmt->get_result();
        if($result->num_rows == 1){
            $_SESSION['loged']=1;
            $_SESSION['username']=$user;
            exit("success");
        }
        else{
            exit("<p style='color:red;margin-left:13%;'> Wrong password or username!</p>");
        }
        mysqli_close($conn);
    }
    else{
        echo"<h3 style='color:red'> Enter your Information?</h3>";
    }
     
}

function setData($data){
    $data = trim($data); //remove spaces
    $data = stripcslashes($data); //remove backslashes and clean up data retrieved from a database or from an HTML form
    $data = htmlspecialchars($data); //Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:
    $data =$GLOBALS['conn']->real_escape_string($data); //create a legal SQL string that can be used in an SQL statement
    return $data;
}

?>
