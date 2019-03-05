<?php
    // inactive in seconds
    $inactive = 600;
    if( !isset($_SESSION['timeout']) )
    $_SESSION['timeout'] = time() + $inactive; 

    $session_life = time() - $_SESSION['timeout'];

    if($session_life > $inactive)
    {  session_destroy(); header("Location:index.php");     }

    $_SESSION['timeout']=time();
?>