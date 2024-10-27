
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<link rel="stylesheet" href="demo.css">

<header>
  
</header>
<body>
    <div class="container">
        <div class="image">
          <img src="EMS-3S2.jpeg" alt="Image">
        </div>
        <div class="content">
          <p>
            <h1>WEDDING CEREMONY</h1>
            <h4>A wedding planning event is a serene and magical occasion where soon-to-be-wed couples can explore a world of possibilities for their special day. Surrounded by a serene atmosphere, couples can meet with a variety of vendors and artisans who specialize in creating unforgettable weddings. It's a place where dreams take shape, and love is celebrated in the most divine of settings.</h4>
          </p>
          <button onclick="view_wc()">View Details</button>
        </div>
      </div>
     
      <div class="container">
        <div class="image">
          <img src="CE.jpeg" alt="Image">
        </div>
        <div class="content">
          <p>
            <h1>CORPORATE EVENTS</h1>   
            <h4>Corporate events are meticulously planned gatherings organized by businesses for purposes like networking, team building, or product launches. They provide opportunities for professionals to come together, achieve objectives, and strengthen relationships.</h4>       
        </p>
          <button onclick="view_ce()">View Details</button>
        </div>
      </div>
     
      <div class="container">
        <div class="image">
          <img src="BP.jpeg" alt="Image">
        </div>
        <div class="content">
          <p>
            <h1>BIRTHDAY PARTY</h1>
            <h4>Create Unforgettable Memories: Dive into the Joy of Birthday Parties with Our Tailored Celebrations! From themed decorations to delectable treats, let us make your special day truly magical.</h4>
          </p>
          <button  onclick="view_bp()">View Details</button>
        </div>
      </div>
      
      <div class="container">
        <div class="image">
          <img src="LE.jpeg" alt="Image">
        </div>
        <div class="content">
          <p>
            <h1>LIVE ENTERTAINMENT</h1>
            <h4>Live entertainment: Real-time performances ranging from music concerts and theater productions to stand-up comedy and dance shows, providing immersive and engaging experiences for audiences.</h4>
          </p>
          <button onclick="view_le()">View Details</button>
        </div>
      </div>
      
      
      
</body>
<script>
  function view_wc() {
      // Redirect to the view page 
      window.location.href = "details1.php";
  }
  function view_ce() {
    // Redirect to the view page 
    window.location.href = "details2.php";
  }
  function view_bp() {
      // Redirect to the view page 
      window.location.href = "details3.php";
  }
  function view_le() {
    // Redirect to the view page 
    window.location.href = "details4.php";
}
</script>
</html>      