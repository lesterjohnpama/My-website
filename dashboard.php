<?php
include "config.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

include "header.php";
?>

<h2>Dashboard</h2>
<p>Welcome, <?php echo $_SESSION["user"]; ?> ðŸŽ‰</p>

<?php include "footer.php"; ?>
