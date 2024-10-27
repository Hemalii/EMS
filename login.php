<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to check if email and password match
    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $sql1 = "INSERT INTO login ( email, password) VALUES ('$email', '$password')";
        $result1 = $conn->query($sql1);
        // Redirect to dashboard
        header("Location: practise1.php"); 
        exit();
    } else {
        // error message
        echo "<script>alert('Invalid email or password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("BG2.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen flex justify-center items-center">
    <div class="w-full md:w-1/2">

        <div class="flex flex-col justify-center items-center pt-8 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl mb-8">Welcome.</p>
            <form method="POST" class="w-full max-w-md">
                <div class="flex flex-col mb-4">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" id="email" name="email" placeholder="abc@email.com" required="true" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col mb-4">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required="true" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>
              
                <input type="submit" value="Login" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8 w-full">
            </form>
           
        </div>

    </div>
</body>
</html>
