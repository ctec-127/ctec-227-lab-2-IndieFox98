<?php
    # cookie_eat.php
    # for lab 2

    # echo cookies
    if (isset($_COOKIE["username"])) {
        echo "<p>Username: " . $_COOKIE["username"] . "</p>";
    } else {
        echo "<p>No username available.</p>";
    }
    if (isset($_COOKIE["firstname"])) {
        echo "<p>First Name: " . $_COOKIE["firstname"] . "</p>";
    } else {
        echo "<p>No first name available.</p>";
    }
    if (isset($_COOKIE["lastname"])) {
        echo "<p>Last Name: " . $_COOKIE["lastname"] . "</p>";
    } else {
        echo "<p>No last name available.</p>";
    }

    # echo array cookie contents
    if (isset($_COOKIE["cookie"])) {
        foreach ($_COOKIE["cookie"] as $key => $val) {
            echo $key . ' is ' . $val . "<br>\n";
        } # end foreach
    } # end if
?>