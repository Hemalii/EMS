<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // SQL query to check if email already exists
    $check_query = "SELECT * FROM organizer_register WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        // Email already exists, show popup message
        echo "<script> alert('This email is already registered. Please use a different email.'); </script>";
    } else {
        
        // SQL query to insert data into the table
        $sql = "INSERT INTO organizer_register (name, email, password, cpassword) VALUES ('$organization_name', '$email', '$password', '$cpassword')";

        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Registration successful.');</script>";
            header('Location:organizer_login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

exit(); 

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Register</title>
   
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        body {
            font-family: 'Karla', sans-serif;
            background-image: url("BG2.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 0.25rem;
        }

        .form-container label {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        .form-container input[type="submit"] {
            padding: 0.75rem;
            background-color: #000;
            color: #fff;
            font-size: 1.1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #333;
        }

        .form-container p {
            text-align: center;
            margin-top: 1rem;
            font-size: 1rem;
        }

        .form-container a {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .text-red-500 {
            color: #f56565;
        }

    </style>
</head>
<body>
    <form method="POST">
        <div class="container">
            <div class="form-container">
                <h2>Join Us</h2>
                <div class="form-group">
                    <label for="name">Organization Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your Organization name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password" required oninput="checkPasswordMatch()">
                    <span id="password_match" class="text-red-500"></span>
                </div>
                <input type="submit" value="Register" class="mt-4">
                <p>Already have an account? <a href="organizer_login.php">Log in here.</a></p>
            </div>
        </div>
    </form>

    <script>
       
        function checkPasswordMatch() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("cpassword").value;

            if (password != confirm_password) {
                document.getElementById("password_match").innerHTML = "Passwords do not match";
            } else {
                document.getElementById("password_match").innerHTML = "";
            }
        }
    </script>
</body>
</html>
