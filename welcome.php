<link rel="stylesheet" href="/public/css/page2.css">
<h3>you may now enter the website</h3>
<?php
function redirect($url, $statuscode = 303 ) {
    header('location: ' . $url, true,$statuscode);
    die();
}
?>
<meta http-equiv="refresh" content="3;url=website.php">