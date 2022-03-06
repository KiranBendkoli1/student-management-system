<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#loginform").submit(function(){
                var regData = $('form').serialize();
                $.ajax({
                    type:"POST",
                    url: "check.php",
                    data:regData,
                    success:function(html){
                        if(html== 'true'){
                            $("#pt").html("Login successful");
                            window.location.href="homepage.php";

                        }else if(html=='pwd'){
                            $("#pt").html("You have entered wrong password");
                        }
                        else if(html=='no_std'){
                            $("#pt").html("Student not registared");
                        }else{
                            $("#pt").html("Error! please try again later");
                        }
                    },
                    beforeSend: function(){
                        $("#pt").html("loading...");
                    }
                });
                return false;

            });
        });
    </script>
    <style>
        
    </style>
</head>
<body>
    <div style="text-align: center; "><?php require_once 'nav.php'; ?></div>
    <h1 style="text-align: center; ">Student Login form</h1>
    <div id="pt"></div>
    <div>
        <form method="post" id="loginform" style=" margin-left : 40%;">
            <table>
                <tr>
                    <td>Enter Email Addess:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Enter Password: </td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="submit">login</button></td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>