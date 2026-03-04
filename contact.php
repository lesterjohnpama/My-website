<?php include "header.php"; ?>

<h2>Contact Us</h2>

<form method="POST">
    <input type="text" name="message" class="form-control mb-2" placeholder="Your Message" required>
    <button class="btn btn-primary">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div class='alert alert-success mt-2'>Message sent successfully!</div>";
}
?>

<?php include "footer.php"; ?>
