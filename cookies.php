<?php

    setcookie("user3", "Siddhesh", time() + 86400, "/");

    if (isset($_COOKIE["user3"])) {
        echo "Cookie is set<br>";
    } else {
        echo "Cookie is not set<br>";
    }

    setcookie("user3", "", time() - 86400, "/");
    if(isset($_COOKIE["user3"])){
        echo "Cookie is still set";
    }else{
        echo "Cookie is not set anymore";
    }

?>
