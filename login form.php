<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="log in.css">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script>
       $(document).ready(function(){
        $("#log-form").submit(function(event){
                event.preventDefault();
                var user =$("#user").val();
                var pass =$("#pass").val();
              
                $.ajax({
                    url:"login.php",
                    method:"POST",
                    data:{
                        user:user,
                        pass:pass,
                        submit:1
                    },
                    success:function(response){
                        $("#log-message").html(response);
                        if(response == "success"){
                            alert("you are loged in successfully!!")
                            window.location="home.php";
                        }
                    }
                });
            });
        });
    </script>
    
</head>
<body>

     <!-- Header -->
     <?php
        include 'header.php';
    ?>
    <!-- log in form -->
   
    <div class="logInForm">
        <form id="log-form" action="logi.php" method="POST">
            <div>Username:
                <input type="text" name="user" id="user" placeholder="@Username" required>
            </div>
            <div>password:
                <input type="password" name="pass" id="pass" placeholder="password" required>
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="log in" required>    
                <a href="singin form.php">sing in</a>
            </div>
           
        </form>
        <p id="log-message"></p>
    </div>

    
  
    

</body>
</html>