<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>User Registration | PHP</title>
</head>
<body>
   <div>
       <?php
         if(isset($_POST['create']))
         {
             echo 'User Submitted.';
         }

       ?>
   </div>

    <div>
        <form action="registration.php" methood="post"></form>
            <div class="container">
                <h1>Registration</h1>
                <p>Fill Up the Form</p>

                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" required>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastname" required>

                <label for="email"><b>Email Adress</b></label>
                <input type="email" name="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input type="text" name="phonenumber" required>

                <label for="password"><b>Password </b></label>
                <input type="password" name="password" required>


                <input type="submit" name="create" value="Sign Up">





            </div>
    </div>
    
</body>
</html>
