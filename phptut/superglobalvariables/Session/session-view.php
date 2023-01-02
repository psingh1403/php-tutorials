<!-- How does it work? How does it know it's me? -->

<!-- Most sessions set a user-key on the user's computer that looks something like this: 
765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the 
computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session. -->



<?php
session_start();

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        if(isset($_SESSION["favcolor"])){
            echo "Favorite Color :" . $_SESSION["favcolor"];
            echo "Favorite Animal :" . $_SESSION["favanimal"];
        }
    ?>
</body>
</html>
