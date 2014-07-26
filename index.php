<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>PS4 Games Countdown</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/app.js"></script>
</head>

<body>

  <header id="header">
    <h1>PS4 Games Countdown</h1>
    <h2>Don't miss a thing</h2>
  </header>

  <div class="content">
    <section id="recent" class="content_block">
      <h3 class="content_title">Recently Released</h3>
      <div class="content_body">
        <?php include 'blocks/recent.php'; ?>
      </div>
    </section>

    <section id="closest" class="content_block">
      <h3 class="content_title">Closest Titles</h3>
      <div class="content_body">
        <?php include 'blocks/soon.php'; ?>
      </div>
    </section>

    <section id="community" class="content_block">
      <h3 class="content_title">Community Choice</h3>
      <div class="content_body">
        <?php include 'blocks/tba.php'; ?>
      </div>
    </section>

    <section id="upcoming" class="content_block">
      <h3 class="content_title">Upcoming Titles</h3>
      <div class="content_body">
        <?php include 'blocks/all.php'; ?>
      </div>
    </section>
  </div>

</body>

</html>
