<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#regform").submit(function(){
                var regData = $('form').serialize();
                $.ajax({
                    type:"POST",
                    url: "add.php",
                    data:regData,
                    success:function(html){
                        if(html== 'true'){
                            $("#pt").html("Registration successful");
                            window.location.href="homepage.php";
                        }else if(html==false){
                            $("#pt").html("Student already registared");
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
</head>
<body>
    <h1>Student Form</h1>
    <div id="pt"></div>
    <div>
        <form method="post" id="regform">
            <table>
                <tr>
                    <td>Enter Name:</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>Enter Class:</td>
                    <td><input type="text" name="class" ></td>
                </tr>
                <tr>
                    <td>Enter Mobile No:</td>
                    <td><input type="text" name="mobile" ></td>
                </tr>
                <tr>
                    <td>Enter Address: </td>
                    <td><input type="text" name="address" ></td>
                </tr>
                <tr>
                    <td>Enter Email Addess:</td>
                    <td><input type="email" name="email" ></td>
                </tr>
                <tr>
                    <td>Enter Password: </td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="submit">Register</button></td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>