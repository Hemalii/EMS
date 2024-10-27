<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Details</title>
  <link rel="stylesheet" href="details1.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>WEDDING CEREMONY</h1>
      <p></p>
      <p></p>
    </header>
    <div class="categories">
      <h2>Categories</h2>
      <ul>
        <li>
          <div class="category">
            <img src="dw.jpeg" alt="Category 1">
            <div class="category-info">
              <h3>Destination Wedding</h3>
              <p>A destination wedding is a romantic celebration held away from the couple's hometown, typically in a picturesque location such as a beach, historic city, countryside, or vineyard. It combines the joy of marriage with the adventure of travel, allowing couples and guests to create unforgettable memories in a stunning setting. From intimate gatherings to grand affairs, destination weddings offer couples a chance to escape the ordinary and embark on a romantic adventure.</p>
              <button class="book-now" onclick="form1()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
          <div class="category">
            <img src="tw.jpeg" alt="Category 2">
            <div class="category-info">
              <h3>Theme based Wedding</h3>
              <p>A themed wedding is a celebration where the entire event, from decor to attire, revolves around a specific theme chosen by the couple. Themes can range from vintage glamour and rustic charm to fairy tales or cultural inspirations. Each element, including decorations, attire, music, and even food, is carefully selected to reflect and enhance the chosen theme. Themed weddings offer couples a chance to infuse their personalities and interests into every aspect of the event, creating a cohesive and memorable experience for themselves and their guests.</p>
              <button class="book-now" onclick="form2()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
            <div class="category">
              <img src="pw.jpg" alt="Category 2">
              <div class="category-info">
                <h3>Partial Wedding</h3>
                <p>A partial wedding is a celebration where certain traditional aspects of a wedding are modified or omitted. This could involve skipping formalities like a sit-down dinner or a full bridal party, focusing instead on key elements like exchanging vows and celebrating with close family and friends. It allows couples to customize their celebration to reflect their preferences, budget, or cultural considerations while still honoring the significance of their union.</p>
                <button class="book-now" onclick="form2()">Book Now</button>
              </div>
            </div>
          </li>
        
      </ul>
    </div>
  </div>
</body>
<script>
  function form1() {
    // Redirect to the form1
    window.location.href = "form1.php";
}
function form2() {
  // Redirect to the form2 
  window.location.href = "form2.php";
}
</script>
</html>
