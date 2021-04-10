
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing in</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="log in.css">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("#singin-form").submit(function(event){
                event.preventDefault();
                var name =$("#name").val();
                var user =$("#user").val();
                var email =$("#email").val();
                var pass =$("#pass").val();
              
                $.ajax({
                    url:"singin.php",
                    method:"POST",
                    data:{
                        name:name,
                        user:user,
                        email:email,
                        pass:pass,
                        submit:1
                    },
                    success:function(response){
                        $("#singIn-message").html(response);
                        if(response == "success"){
                            alert("you are sing in successfully!!")
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
    <!-- sing in form -->
    <div class="logInForm">
        <form id="singin-form" action="singin.php" method="POST">
        <div>Name :
            <input type="text" name="name" id="name" placeholder="Name" required>
        </div>

            <div>Username:
                <input type="text" name="user" id="user" placeholder="@Username" required>
            </div>

            <div>Email:
                <input type="text" name="email" id="email" placeholder="example@example.com" required>
            </div>
            <div>password:
                <input type="password" name="pass" id="pass" placeholder="******" required>
            </div>

            <div>
                <input type="submit" name="submit" id="submit" value="Sing in" required>    
                
            </div>
           
        </form>
            <h3 style="margin-left:13%; color: red;" id="singIn-message"></h3>
    </div>
  
    

</body>
</html>



