<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doshin The Giant</title>
  <link rel="icon" type="image/png" href="https://i.imgur.com/iXNS5PZ.png">
  <link rel="stylesheet" href="style.css?v=7">
</head>
<body>

<div class="container">
  <header>
    <h1>Welcome to Doshin The Giant!</h1>
    <marquee>West Carolina Screamo :3 Live. Laugh. Love. Doshin. ✨</marquee>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="archives.php">Archives</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
  </nav>

  <div class="content" style="display: flex;">
    <div class="sidebar">
      <h3>Members</h3>
      <ul>
        <li><a href="#">Frontman ~ Cammy</a></li>
        <li><a href="#">Lead Guitar ~ Jarrett</a></li>
        <li><a href="#">Bassist ~ Oli</a></li>
        <li><a href="#">Keys/Rhythm ~ Sakboy</a></li>
        <li><a href="#">Drums ~ Vic</a></li>
      </ul>

      <div style="margin-top: 20px; text-align: center; font-family: 'Comic Sans MS', sans-serif; color: #000;">
        <strong>Online Now:</strong> 
        <span id="online-count">
          <?php
            // Show the current count directly if needed for initial page load
            if(file_exists("online.json")) {
                $data = json_decode(file_get_contents("online.json"), true);
                echo count($data);
            } else {
                echo "0";
            }
          ?>
        </span>
      </div>
    </div>

    <div class="main">
      <div class="post">
        <h2>🎉 Welcome!!</h2>
        <p><strong>October 14, 2005</strong></p>
        <p>Hello guys!! Welcome to the DoshintheGiant webpage XDDDD Come acquire some swag, see our future and past shows, photos, videos, and more! 💖</p>
      </div>

      <div class="post">
        <h2>🌐 Favorite Photo This Week</h2>
        <p><strong>October 21, 2005</strong></p>
        <img src="images/pic1.jpg" alt="Doshin at the Sober Space" class="favorite-photo">
        <p>"Live at the Sober Space in Greensboro -- October 7th, 2025"</p>
      </div>
    </div>
  </div>

  <div class="under-construction">
    <img src="https://i.imgur.com/iXNS5PZ.png" alt="Under Construction">
    <p>Under Construction - Check back soon very soon :></p>
  </div>

  <div class="footer">
    <p>&copy; 2025 D0shinth3Gi4nt. We love you.</p>
  </div>
</div>

<script>
function updateOnlineCount() {
  fetch('online.php')
    .then(res => res.text())
    .then(count => {
      const counter = document.getElementById('online-count');
      if(counter) counter.textContent = count;
    })
    .catch(err => console.error('Error fetching online count:', err));
}
updateOnlineCount();
setInterval(updateOnlineCount, 30000);
</script>

</body>
</html>
