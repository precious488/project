
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="styles.css">

 
    <style>
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
    </style> 
</head>
<body>
<div class="wrap">
        <div class="login">
            <p>sign-up</p>
    
    <form id="signupForm"   action="logic.php" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="first">
            <span class="error" id="nameError">Name is required.</span>
        </div>
      
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <span class="error" id="emailError">Please enter a valid email address.</span>
        </div>
      
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span class="error" id="passwordError">Password must be at least 6 characters long.</span>
        </div>
        
        <div class="form-group">
            <label for="confirm">Confirm Password:</label>
            <input type="password" id="confirm" name="confirm">
            <span class="error" id="confirmError">Passwords do not match.</span>
        </div>
        <label for="confirm">show password:</label>
        <input type="checkbox" id="toggle" name="confirm" style="width:15px; height:15px;">

        <!-- <div class="form-group"style="height:100px; background:red;">
            <label for="show_password">show</label><br><br><br>
            <input type="checkbox" id="check" name="confirm" style="left:0">
          
        </div> -->
        <div style style =" margin:0;">
            <button type="submit" name="submit">Signup</button>
        </div>
        <div style =" margin:0;">
            <h4 style ="text-align:center; margin:0;">already have an account <a href="login.php">login</a></h4>
        </div>
    </form>
    </div>
    </div>
    
    <script>
        function validateForm() {
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirm').value.trim();

           
            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const confirmError = document.getElementById('confirmError');

            // Regular expression for email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            
            let isValid = true;

           
            if (name === "") {
                nameError.style.display = "block";
                isValid = false;
            } else {
                nameError.style.display = "none";
            }

            
            if (email === "") {
                emailError.textContent = "Email is required.";
                emailError.style.display = "block";
                isValid = false;
            } else if (!emailRegex.test(email)) {
                emailError.textContent = "Please enter a valid email address.";
                emailError.style.display = "block";
                isValid = false;
            } else {
                emailError.style.display = "none";
            }

            
            if (password === "") {
                passwordError.textContent = "Password is required.";
                passwordError.style.display = "block";
                isValid = false;
            } else if (password.length < 6) {
                passwordError.textContent = "Password must be at least 6 characters long.";
                passwordError.style.display = "block";
                isValid = false;
            } else {
                passwordError.style.display = "none";
            }

            
            if (confirmPassword === "") {
                confirmError.textContent = "Please confirm your password.";
                confirmError.style.display = "block";
                isValid = false;
            } else if (password !== confirmPassword) {
                confirmError.textContent = "Passwords do not match.";
                confirmError.style.display = "block";
                isValid = false;
            } else {
                confirmError.style.display = "none";
            }

            return isValid; 
        }

        document.getElementById("toggle").addEventListener("change", 
            function(){
                let passwd = document.getElementById("password");
                passwd.type = this.checked ? "text" : "password";

                let confirm = document.getElementById("confirm");
                confirm.type = this.checked ? "text" : "password";
            }
        );
    </script>




</body>
</html>