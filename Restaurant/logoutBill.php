<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['name']=NULL;
        $_SESSION['pass']=NULL;
         echo "<META http-equiv=\"refresh\" content=\"0;empLogin\">";
        ?>
    </body>
</html>
