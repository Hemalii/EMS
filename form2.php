<?php
//database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini";
 
//create connction
$conn = new mysqli($servername,$username,$password,$database);

//check connection
if($conn->connect_error){
  die("connection failed: " .$conn->connect_error);
}

//check if form is submitetd
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $stmt = $conn->prepare("INSERT INTO form2 (email,theme_preference,event_budget,date,style_preference,additional_service)VALUES(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$email,$theme_preference,$event_budget,$date,$style_preference,$additional_service);

  $email = $_POST["email"];
  $theme_preference = $_POST["theme_preference"];
  $event_budget = $_POST["event_budget"];
  $date = $_POST["date"];
  $style_preference = $_POST["style_preference"];
  $additional_service = $_POST["additional_service"];

  if ($stmt->execute()) {
    echo "<script>alert('Details have been saved.');</script>";
    exit();
} else {
    echo "Error: " . $stmt->error;
}

  
  //close statement
  $stmt->close();
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 135vh;
    background-image: url(form.png);
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 500px;
    width: 100%;
    box-sizing: border-box;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  select, input[type="number"], input[type="date"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  select, input[type= email], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 5px;
    box-sizing: border-box;
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
    width: 100%;
    box-sizing: border-box;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  textarea {
    resize: none;
    height: 100px;
    width: calc(100% - 22px);
    padding: 10px;
  }

  .checkbox-group {
    display: flex;
    flex-wrap: wrap;
    margin-top: 5px;
  }

  .checkbox-group label {
    margin-right: 20px;
    white-space: nowrap;
  }

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
  <form method = POST id="weddingForm">
  <div class="container animated fadeIn">
    <h2>Wedding Ceremony/ Birthday Party</h2>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>
      </div>
      <div class="form-group">
        <label for="theme_preference">Theme Preference</label>
        <select id="theme_preference" name="theme_preference">
          <option value="Beach Wedding">Beach Wedding</option>
          <option value="Vintage Wedding">Vintage Wedding</option>
          <option value="Fairytale Wedding">Fairytale Wedding</option>
          <option value="Royal Wedding">Royal Wedding</option>
          <option value="Beach Birthday Party">Beach Birthday Party</option>
          <option value="Vintage Birthday Party">Vintage Birthday Party</option>
          <option value="Pool Party">Pool Birthday Party</option>
          <option value="Pajama Party">Pajama Birthday Party</option>
        </select>
      </div>
      <div class="form-group">
        <label for="event_budget">Event Budget:</label>
        <input type="number" id="event_budget" name="event_budget" placeholder="Enter your budget">
      </div>
      <div class="form-group">
        <label for="date">Date of Event:</label>
        <input type="date" id="date" name="date">
      </div>
      
      <div class="form-group">
        <label for="style_preference">Theme/Style Preferences:</label>
        <textarea id="style_preference" name="style_preference" placeholder="Enter theme or style preferences"></textarea>
      </div>

      <div class="form-group">
        <label for="additional_service">Additional Services/Request </label>
        <textarea id="additional_service" name="additional_service" placeholder="enter if you have any additionL request"></textarea>
      </div>
      <input type="submit" value="Submit">
  </div>
  </form>
</body>
</html>
