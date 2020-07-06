<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/contact.css" />
    
      
       <link rel="manifest" href="../manifest.json">
      <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../image/logo1.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
      
      
      
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <title>Contact us</title>
  </head>
  <body>
    <div class="container">
      <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Leave us a message:</p>
      </div>
      <div class="row">
        <div class="column">
          <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input
              type="text"
              id="fname"
              name="firstname"
              placeholder="Your name.."
            />
            <label for="lname">Last Name</label>
            <input
              type="text"
              id="lname"
              name="lastname"
              placeholder="Your last name.."
            />
            <label for="country">Country</label>
            <input type="text" />
            <label for="subject">Subject</label>
            <textarea
              id="subject"
              name="subject"
              placeholder="Write something.."
              style="height:170px"
            ></textarea>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
    <script src="../js/app.js"></script>
  </body>
</html>
