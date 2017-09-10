<html>
    <head>
            <title>PHP TEST</title>
    </head>
    <body>
        <?php
            
            echo $_SERVER['HTTP_USER_AGENT'];
            //underbar는 시스템관련

            if (strpos($_SERVER['HTTP_USER_AGENT'],'Chrome') == TRUE) {
                echo 'Now, you are in CHROME';
            } elseif (strpos($_SERVER['HTTP_USER_AGENT'],'Safari') == TRUE) {
                echo 'Now, you are in SAFARI';
            } else {

                echo 'Now, you are in MS IE';
            }
        ?>
    </body>
</html>