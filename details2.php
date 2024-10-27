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
      <h1>CORPORATE EVENTS</h1>
      <p></p>
      <p></p>
    </header>
    <div class="categories">
      <h2>Categories</h2>
      <ul>
        <li>
          <div class="category">
            <img src="awards.jpeg" alt="Category 1">
            <div class="category-info">
              <h3>Awards and Galas</h3>
              <p>Awards ceremonies and galas are elegant and formal events held to honor and celebrate the achievements of individuals or organizations within a specific industry or community. They feature glamorous settings, including upscale decor and formal attire, and typically include the presentation of awards in various categories. These events serve to inspire attendees, foster networking opportunities, and reinforce the values of the organization or industry hosting them.</p>
              <button class="book-now" onclick="form3()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
          <div class="category">
            <img src="charity.jpeg" alt="Category 2">
            <div class="category-info">
              <h3>Charity and Fundraising Events</h3>
              <p>Charity and fundraising events are organized to support charitable causes or raise funds for specific initiatives. These events bring together donors, sponsors, and supporters to contribute to meaningful causes, such as education, healthcare, or environmental conservation. They often include activities like auctions, raffles, or performances to encourage donations. The primary goal is to generate financial support while raising awareness and rallying community engagement around important social or humanitarian issues.</p>
              <button class="book-now" onclick="form3()">Book Now</button>
            </div>
          </div>
        </li>
        <li>
            <div class="category">
              <img src="pl.jpeg" alt="Category 2">
              <div class="category-info">
                <h3>Product Launches</h3>
                <p>Product launch events are organized to introduce new products or services to the market. These events aim to generate excitement, attract media attention, and engage potential customers. They often feature presentations, demonstrations, and interactive experiences to showcase the features and benefits of the new product. Product launch events provide an opportunity for companies to build buzz, gather feedback, and create positive brand associations, ultimately driving sales and market growth.</p>
                <button class="book-now" onclick="form3()">Book Now</button>
              </div>
            </div>
          </li>

         <div class="category">
              <img src="conference.jpg" alt="Category 2">
              <div class="category-info">
                <h3>Conferences,Seminars and Workshops</h3>
                <p>Conferences, seminars, and workshops are professional events for learning and networking. Conferences are broad gatherings with various speakers and topics. Seminars are more focused discussions on specific subjects. Workshops are interactive sessions for hands-on learning. These events offer opportunities to gain knowledge, share insights, and connect with peers in the industry.</p>
                <button class="book-now" onclick="form3()">Book Now</button>
              </div>
            </div>
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
