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
      <h1>LIVE ENTERTAINMENT</h1>
      <p></p>
      <p></p>
    </header>
    <div class="categories">
      <h2>Categories</h2>
      <ul>
        <li>
          <div class="category">
            <img src="concert.jpeg" alt="Category 1">
            <div class="category-info">
              <h3>Concerts and Music Festivals</h3>
              <p>Concerts and music festivals are live events where musicians perform for audiences. Concerts are single shows, while festivals span multiple days and feature multiple artists. They offer opportunities for fans to enjoy live music, connect with artists, and create lasting memories in vibrant atmospheres.</p>
              <button class="book-now" onclick="form3()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
          <div class="category">
            <img src="stp.jpeg" alt="Category 2">
            <div class="category-info">
              <h3>stand-up Comedy,Theater and Performing arts</h3>
              <p>Stand-up comedy: Comedians deliver humorous monologues to entertain audiences, aiming for laughter and light-hearted enjoyment.
                 Theater and performing arts: Live stage performances, including plays, musicals, and dance recitals, showcase artistic talent and storytelling through acting, dancing, and music in venues like theaters and concert halls.</p>
              <button class="book-now"  onclick="form3()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
            <div class="category">
              <img src="fff.jpeg" alt="Category 2">
              <div class="category-info">
                <h3>Fairs and Festivals</h3>
                <p>Fairs and festivals are community events that celebrate cultural heritage, traditions, or seasonal occasions. They typically feature entertainment, food vendors, games, and activities for attendees of all ages. These events provide opportunities for communities to come together, enjoy live music and performances, sample local cuisine, and participate in festive activities, creating a vibrant and enjoyable atmosphere for all.</p>
                <button class="book-now"  onclick="form3()">Book Now</button>
              </div>
            </div>
          </li>

          </li>
      </ul>
    </div>
  </div>
</body>
<script>
  function form3() {
    // Redirect to the form3 
    window.location.href = "form3.php";
}
</script>
</html>
