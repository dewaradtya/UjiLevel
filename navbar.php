<?php
// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Display confirmation message
    echo "<script>
            var confirmLogout = confirm('Are you sure you want to logout?');
            if (confirmLogout) {
                window.location.href = 'logout.php';
            } else {
                window.location.href = 'home.php';
            }
        </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lewa Drink & Eatery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-lKuwvrZotT/ElO5fEZ2WxM4e8xHKuRL8i2NpE2FjM9lF1v57bNp3lY3+jssV9QfN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="img/4.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#053B50;">
        <a class="navbar-brand" href="#">Lewa Drink & Eatery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <form method="post" action="">
                    <button type="submit" class="btn btn-danger" name="logout">Logout</button>
                </form>
            </ul>
        </div>
    </nav>
</body>

</html>