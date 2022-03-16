<?php
    session_start();
?>
<html>
    <body>
        <?php
            //clean the variables
            session_unset();
            //close the session
            session_destroy();
           
            header("Location: ../acesso.php");
        ?>
    </body>
</html>