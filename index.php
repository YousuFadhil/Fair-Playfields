<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <main class="content">
      <section class="matches">
        <h2>Upcoming Matches</h2>
        <p><!-- Upcoming matches content here --></p>
      </section>
      <section class="matches">
        <h2>Current Matches</h2>
        <p><!-- Current matches content here --></p>
      </section>
      <section class="players">
        <h2>Top Players</h2>
        <p><!-- Top players content here --></p>
      </section>
    </main>
    <aside class="sidebar">
      <h3>Sidebar</h3>
      <ul>
        <li><a href="#">View Current Matches</a></li>
        <li><a href="create_match.php">Create New Matches</a></li>
        <li><a href="profile.php">My Profile</a></li>
      </ul>
    </aside>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
