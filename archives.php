<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doshin Archives</title>
  <link rel="icon" type="image/png" href="https://i.imgur.com/iXNS5PZ.png">
  <link rel="stylesheet" href="style.css?v=7">
</head>
<body>
  <div class="container">
    <header>
      <h1>Doshin Archives</h1>
      <marquee>Here lies the sacred collection of past shows, memories and Doshin Lore...</marquee>
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

        <div style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; font-family: 'Comic Sans MS', sans-serif; color: #000;">
          <strong>Online Now:</strong>
          <span id="online-count">
            <?php
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

      <div class="main" style="flex: 1; padding-left: 20px;">
        <div class="post">
          <h2 style="text-align: center; margin: -5px 0 30px 0;">Welcome to the Archive Page!</h2>

          <p style="margin-top: -15px;"><strong>April 6th, 2025: The Rise of a Giant</strong></p>
          <p style="margin-top: -10px;">This was Doshin The Giant's debut show at Backtable in Greensboro, NC. Supporting Flora in Silence, FearDorian, and Your Arms Are My Cocoon!</p>

          <div class="video-flyer" style="display: flex; align-items: flex-start; gap: 20px; margin-top: 20px;">
            <iframe width="360" height="315"
                    src="https://www.youtube.com/embed/ZlqwhWHKHjM?si=TWwk7ajhUyWEuxTo"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>

            <img src="images/firstshowflyer.jpg" width="265" height="331"
                 alt="Doshin's first show flyer"
                 class="favorite-photo"
                 style="margin-top:-3px;">
          </div>

          <p style="margin-top: -5px;"><strong>June 9th, 2025: Hoot's Beer Company in Winston Salem, NC</strong></p>
          <p style="margin-top: -10px;">Supported by Sheila Broflovski, Yet We Still Pray (FL), Victim Blamed (TX), and Rev3rent (CA)</p>

          <div class="video-flyer" style="display: flex; align-items: flex-start; gap: 20px; margin-top: 10px;">
            <div style="display: flex; flex-direction: column; align-items: center;">
              <video width="360" height="315" autoplay loop muted playsinline
                     style="border-radius: 8px; border: 3px solid #FFD700; object-fit: cover; box-shadow: 0 0 5px #FFD700, 0 0 10px #FFD700;">
                <source src="images/doshinpromo1.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div style="margin-top: 8px; font-size: 0.9rem; color: #000; text-align: center; font-family: 'Comic Sans MS', cursive, sans-serif;">
                Doshin Promo - June 6th, 2025
              </div>
            </div>

            <img src="images/rev3rentflyer.png" width="265" height="331"
                 class="favorite-photo"
                 style="margin-top:-3px;">
          </div>
        </div>
      </div>
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
