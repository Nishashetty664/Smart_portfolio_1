<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $skill = $_POST['skill'];

  $stmt = $conn->prepare("UPDATE skills SET endorsements = endorsements + 1 WHERE name = ?");
  $stmt->bind_param("s", $skill);
  if ($stmt->execute()) {
    echo "Thanks for endorsing $skill!";
  } else {
    echo "Something went wrong.";
  }
  $stmt->close();
}
?>
