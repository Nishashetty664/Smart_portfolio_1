<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Skills</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>My Skills</h1>
      <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="projects.html">Projects</a>
        <a href="skills.php">Skills</a>
        <a href="contact.html">Contact</a>
      </nav>
    </div>
  </header>

  <section class="skills-section">
    <div class="container">
      <h2>💼 Technical Skills</h2>
      <ul id="skills-list">
        <?php
        include 'connect.php';
        $result = $conn->query("SELECT * FROM skills");
        while($row = $result->fetch_assoc()) {
          echo "<li>
                  <span>{$row['name']} — {$row['endorsements']} endorsements</span>
                  <button onclick=\"endorse('{$row['name']}')\">👍 Endorse</button>
                </li>";
        }
        ?>
      </ul>
    </div>
  </section>

  <script src="js/script.js"></script>
</body>
</html>
