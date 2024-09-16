<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
            body{
            background: url(https://pin.it/5KrwUyODj) center center fixed;
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
h1{
    text-align: center;
    font-size: 20px;
    color: white;
}
.container{
  
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    border: 5px solid black;
    border-radius: 20px;
   width: 500px;
   height: 600px;
}
.row{
    padding-top:20px;
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
    margin-left: -30px;
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
<body>
    <div class="container">
        <div class="row">
            <h1>Signup Page</h1>
            <form class="form" method="POST" action="login.php" onsubmit="return validateForm()">
                    <label class="form-label">Name:</label><br>
                    <input type="text" name="name" placeholder="Enter your name"required class="form-control"><br>
                   <label class="form-label">Email:</label><br>
                   <input type="text" name="email" placeholder="Enter your email" required class="form-control"><br>
                   <label  class="form-label">Password:</label>
                   <input type="password" name="password" placeholder="Enter your password" required class="form-control"><br>
                   <label class="form-label">Confirm password</label><br>
                   <input type="password" name="cnpwd" placeholder="Enter your confirm password" required class="form-control"><br>
                   <a href="login.php">already have an account</a><br><br>
                   <button type="submit" class="btn btn-warning" name="btnsubmit">Submit</button><br>
               </form> 
           </div>
    </div>
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
</body>
</html>