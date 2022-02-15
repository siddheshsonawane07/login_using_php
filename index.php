<?php
session_start();

$_SESSION;

?>

<!DOCTYPE html>
<html>
<head>
    <title> Blogify </title>
</head>

<body>
    <a href = "logout.php"> Logout </a>
    <h1> Index Page </h1>
    <h2> Hello ,<?php echo $user_data['email_id']??null; ?>
</body>



</html>