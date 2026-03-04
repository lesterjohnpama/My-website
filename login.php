<?php
include "config.php";
include "header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["name"];
        header("Location: dashboard.php");
    } else {
        echo "<div class='alert alert-danger'>Invalid credentials</div>";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <button class="btn btn-primary">Login</button>
</form>

<?php include "footer.php"; ?>
