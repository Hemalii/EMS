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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $targetDirectory = "uploads/"; 
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]); 

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";

            // Retrieve other form data
            $orgName = $_POST["orgName"];
            $eventType = $_POST["eventType"];
            $offerings = $_POST["offerings"];
            $budget = $_POST["budget"];

            $stmt = $conn->prepare("INSERT INTO photos (orgName, eventType, offerings, budget, file) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $orgName, $eventType, $offerings, $budget, $targetFile);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<script>alert('File uploaded successfully.');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Organizer Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background-image: url(og.jpeg);
  }

  .container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-weight: bold;
    color: #555;
  }

  input[type="text"],
  input[type="email"],
  select,
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  textarea {
    resize: vertical;
    height: 100px;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  /* Animation */
  .animated {
    animation-duration: 1s;
    animation-fill-mode: both;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
  <div class="container animated fadeIn">
    <h2>Organizer Form</h2>
   
      <div class="form-group">
        <label for="orgName">Organization Name:</label>
        <input type="text" id="orgName" name="orgName"placeholder="enter your organization name" required>
      </div>
      <div class="form-group">
        <label for="eventType">Event Type:</label>
        <select id="eventType" name="eventType" required>
          <option value="">Select Event Type</option>
          <option value="Wedding">Wedding</option>
          <option value="Corporate Event">Corporate Event</option>
          <option value="Birthday Party">Birthday Party</option>
          <option value="Live Entertainment">Live Entertainment</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="offerings">What We Can Offer:</label>
        <textarea id="offerings" name="offerings" placeholder="Enter details of what your organization can offer" required></textarea>
      </div>
      <div class="form-group">
        <label for="budget">Budgeting (Range):</label>
        <select id="budget" name="budget" required>
          <option value="">Select Budget Range</option>
          <option value="0 - 5,000">0 - 50,000</option>
          <option value="50,000 - 1,00,000">50,000 - 1,00,000</option>
          <option value="1,00,000 - 10,00,000">1,00,000 - 10,00,000</option>
          <option value="10,00,000 - 50,00,000">10,00,000 - 50,00,000</option>
          <option value="50,00,000 - 10,000,000">50,00,000 - 10,000,000</option>
          <option value="10,000,000+">10,000,000+</option>
        </select>
      </div>
      <div class="form-group">
        <label for="file">Relevant Photos of Your Work:</label>
        <input type="file" id="file" name="file" required = "true">
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
