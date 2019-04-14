<?php
    # cookie_bake.php
    # for lab 2

    # set up cookies
    setcookie("username", "BettyW", time() + 7200);
    setcookie("firstname", "Betty", time() + 7200);
    setcookie("lastname", "White", time() + 7200);

    # set up array cookie
    setcookie("cookie[institution]", "Clark", time() + 7200);
    setcookie("cookie[city]", "Vancouver", time() + 7200);
    setcookie("cookie[state]", "WA", time() + 7200);

    # display a message
    echo "<p>The cookies have been baked, hon!</p>";
?>