<?php
include "../server.php";

if (!isset($_SESSION['username'])) {
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>User Page - Settings</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="nav">
          <ul>
            <li><a href="map.php">Map</a></li>
            <li><a href="notifications.php">Notifications</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
      </nav>
      <nav class="nav" id="user_acc"><li><ul><a class="active" href="account.php"><?php echo $_SESSION['username']; ?></a></ul></li></nav>
      <nav class="nav" id="logout"><li><ul><a href="../logout.php">Logout</a></ul></li></nav>
    </header>
    <main>
      <nav class="profile">
        <a href="account.php">Account</a>
        <a href="">Security</a>
      </nav>
      <div class="subheader">
        <h2>Change Username</h2>
      </div>
      <button class="chg_btn" id="myBtn" onclick="pop_up()">Change Username</button>
      <div id="myModal" class="modal">
        <form action="" method="POST" class="modal-content">
          <span class="close">&times;</span>
          <label class="acct" for="cur_user">New Username</label>
          <input class="acct" type="text" name="new_user" required>

          <label class="acct" for="new_user">Confirm Username</label>
          <input class="acct" type="text" name="comf_user" required>
          
          <button type="submit" class="chg_btn_final" id="chg_btn_final" name="chg_btn_final">Change Username</button>
        </form>
      </div>
      <button class="chg_btn" id="myBtn2" onclick="pop_up()">Change Password</button>
      <div id="myModal2" class="modal">
        <form action="" method="POST" class="modal-content">
          <span class="close2">&times;</span>
          <label class="acct" for="cur_pass">New Password</label>
          <input class="acct" type="password" name="new_pass" required>

          <label class="acct" for="new_pass">Confirm Password</label>
          <input class="acct" type="password" name="comf_pass" required>
          
          <button  type="submit" class="chg_btn_final" id="chg_btn_pass" name="chg_btn_pass">Change Password</button>
        </form>
      </div>
      <button class="chg_btn" id="myBtn3" onclick="pop_up()">Change Name</button>
      <div id="myModal3" class="modal">
        <form action="" method="POST" class="modal-content">
          <span class="close3">&times;</span>
          <label class="acct" for="cur_fname">First Name</label>
          <input class="acct" type="text" name="new_fname" required>

          <label class="acct" for="cur_lname">Last Name</label>
          <input class="acct" type="text" name="new_lname" required>
          
          <button  type="submit" class="chg_btn_final" id="chg_btn_name" name="chg_btn_name">Change Name</button>
        </form>
      </div>
      <button class="chg_btn" id="myBtn4" onclick="pop_up()">Change Phone Number</button>
      <div id="myModal4" class="modal">
        <form action="" method="POST" class="modal-content">
          <span class="close4">&times;</span>
          <label class="acct" for="cur_phone">New Phone Number</label>
          <input class="acct" type="text" name="new_phone" required>

          <label class="acct" for="new_phone">Confirm Phone Number</label>
          <input class="acct" type="text" name="comf_phone" required>
          
          <button  type="submit" class="chg_btn_final" id="chg_btn_phone" name="chg_btn_phone">Change Phone Number</button>
        </form>
      </div>
    </main>
    <footer>
        <p><a href="mailto:akukuc@hawk.iit.edu">Email: akukuc@hawk.iit.edu</a></p>
        <p><a href="https://github.com/">Team4-2020r</a></p>
        <script src="../javascript/script.js"></script>
    </footer>
    <script>
          // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      // Get the modal
      var modal2 = document.getElementById("myModal2");

      // Get the button that opens the modal
      var btn2 = document.getElementById("myBtn2");

      // Get the <span> element that closes the modal
      var span2 = document.getElementsByClassName("close2")[0];

      // When the user clicks the button, open the modal 
      btn2.onclick = function() {
        modal2.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span2.onclick = function() {
        modal2.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window2.onclick = function(event2) {
        if (event2.target == modal2) {
          modal2.style.display = "none";
        }
      }
    </script>
    <script>
      // Get the modal
      var modal3 = document.getElementById("myModal3");

      // Get the button that opens the modal
      var btn3 = document.getElementById("myBtn3");

      // Get the <span> element that closes the modal
      var span3 = document.getElementsByClassName("close3")[0];

      // When the user clicks the button, open the modal 
      btn3.onclick = function() {
        modal3.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span3.onclick = function() {
        modal3.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window3.onclick = function(event3) {
        if (event3.target == modal3) {
          modal3.style.display = "none";
        }
      }
    </script>
    <script>
      // Get the modal
      var modal4 = document.getElementById("myModal4");

      // Get the button that opens the modal
      var btn4 = document.getElementById("myBtn4");

      // Get the <span> element that closes the modal
      var span4 = document.getElementsByClassName("close4")[0];

      // When the user clicks the button, open the modal 
      btn4.onclick = function() {
        modal4.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span4.onclick = function() {
        modal4.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window4.onclick = function(event4) {
        if (event4.target == modal4) {
          modal4.style.display = "none";
        }
      }
    </script>
  
  </body>
</html>
