<?php
    # cookie_monster.php
    # for lab 2

    # delete cookies by setting time expiration in past
    setcookie("username", "BettyW", time() - 3600);
    setcookie("firstname", "Betty", time() - 3600);
    setcookie("lastname", "White", time() - 3600);

    setcookie("cookie[institution]", "Clark", time() - 3600);
    setcookie("cookie[city]", "Vancouver", time() - 3600);
    setcookie("cookie[state]", "WA", time() - 3600);

    # display a message
    echo "<p>Me ate all your cookies. C is for cookie, that's good enough for meeeee!</p>";
?>