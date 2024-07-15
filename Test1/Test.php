<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form</title>
    <link rel ="stylesheet" href ="TestPhp.css">
</head> 
<body>
    <div class="container">
        <h1>User Form</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $name = htmlspecialchars($_POST['name']);
            $address = htmlspecialchars($_POST['address']);
            $email = htmlspecialchars($_POST['email']);
            $number = htmlspecialchars($_POST['number']);
            $gender = htmlspecialchars($_POST['gender']);
            $birthday = htmlspecialchars($_POST['birthday']);
            
            echo "<h3>Form Data Submitted:</h3>";
            echo "Name: " . $name . "<br>";
            echo "Address: " . $address . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Phone Number: " . $number . "<br>";
            echo "Gender: " . $gender . "<br>";
            echo "Birthday: " . $birthday . "<br>";
        }
        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="number">Phone number:</label>
            <input type="text" id="number" name="number" required>
            
            <label for="gender">Gender:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
            </div>
            
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>
            
            <input type="submit" value="Register">
        </form>
    </div>
    <script src = "TestPhp.js"></script>
</body>
</html>
