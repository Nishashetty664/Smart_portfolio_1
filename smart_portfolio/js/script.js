function endorse(skill) {
  fetch("endorse.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "skill=" + encodeURIComponent(skill)
  })
  .then(response => response.text())
  .then(message => {
    alert(message);
    location.reload(); // refresh to update count
  });
}
