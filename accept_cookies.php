
<?php
$cookie_set = "<p id="."cookie"."></p>";


if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    setcookie("cookie_accept",$cookie_set, time()+ 256*24*3600, '/',null, false, true );
    header('location:'.$_SERVER['HTTP_REFERER']);
}else {
    header('location: /');
}



?>
<script src="cookiejs/cookies_set.js"></script> 
