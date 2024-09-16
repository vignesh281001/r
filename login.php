<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background: url(./assest/img/bg.jpg) center center fixed;
             background-repeat: no-repeat;
            background-size: cover;
             height: 100vh;
              width: 100%;
             display: flex;
             align-items: center;
           justify-content: center;
    /* flex-direction: column; */
}
@media(max-width: 768px){
    body{
        min-height: 30vh;
    }
}
.container{
  
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    border: 5px solid black;
    border-radius: 20px;
   width: 500px;
   height: 500px;
}
.row{
    padding-top: 70px;
}
.form-label{
    color: red;
    font-size: 20px;
   
}
.form-control{
    font-size: 20px;
    background: transparent;
    border: none;
    outline: none;
    text-shadow: white;
    border-bottom: 2px solid black;
    opacity: 0.8;
    box-shadow: 2px 2px black;
    
}
a{
    padding: 45px;
    color: red;
}
button{
    width:110px;
    height: 35px;
    text-align: center;
    border-radius: 15%;
    outline: none;
    padding: 5px;
   margin-left: 170px;
}
/* .image-fluid{
    background: url(./images/loginpic.avif);
} */

.bgimage{
    background-size: cover;
    min-height: 70vh;
    min-width: 70rem;
}
    </style>
</head>
<body>
  
   
    <div class="container">
        <div class="row">
            
         <form class="form" method="POST" action="index.php" onsubmit="return validateForm()">
                <label class="form-label">Email:</label><br><br>
                <input type="text" name="email" placeholder="Enter your email" required class="form-control"><br><br>
                <label  class="form-label">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" required class="form-control"><br>
                <a href="#">forgot password?</a>
                <a href="signup.php">create a new account</a><br><br>
                <button type="submit" class="btn btn-warning" name="btnsubmit">Submit</button><br><br>
            </form>
            
        </div>
    </div></div>
    <script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("pwd").value;

        // Email validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Invalid email format");
            return false;
        }

        // Password validation
        if (password.length < 8) {
            alert("Password must be at least 8 characters long");
            return false;
        }

        // If both email and password are valid, the form will be submitted
        return true;
    }
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <?php
    class form{
        public function submit()
        {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=(isset($_POST['password']));
        $con =mysqli_connect("localhost:3308","root","","register");//register is a DB name
$sql="insert into signup values('$name','$email','$password')";
$con->query($sql);// calling DB name and sending to the query
$con->close();
echo '<script>alert("REGISTER Successfully");</script>';
        }
    }
    $obj=new form();
if(isset($_POST['btnsubmit']) ==true)
{
$obj->submit();//calling class name using object name
}
?>
</body>
</html>
