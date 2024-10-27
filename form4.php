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
    height: 100vh;
    background-image: url(form.png);
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
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
  <div class="container animated fadeIn">
    <h2>Birthday Party</h2>
    <form id="weddingForm">
      <div class="form-group">
        <label for="theme">Theme Preference</label>
        <select id="theme" name="theme">
          <option value="Beach">Beach</option>
          <option value="vintage">Vintage</option>
          <option value="pool party">pool PARTY</option>
          <option value="pajama party">pajama party</option>
        </select>
      </div>
      <div class="form-group">
        <label for="budget">Event Budget:</label>
        <input type="number" id="budget" name="budget" placeholder="Enter your budget">
      </div>
      <div class="form-group">
        <label for="date">event Date:</label>
        <input type="date" id="date" name="date">
      </div>
      
      <div class="form-group">
        <label for="theme">Decor Preference</label>
        <textarea id="theme" name="theme" placeholder="Enter theme or style preferences"></textarea>
      </div>

      <div class="form-group">
        <label for="theme">Additional Services/Request </label>
        <textarea id="services" name="services" placeholder="enter if you have any additionL request"></textarea>
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
