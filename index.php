<DOCTYPE html>
<html lang="en">
    <head>
        <title>Display Server Information</title>
        <link rel="stylesheet" href="./styles.css" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <?php
        $server_infos = array(
            "File Name:" => "PHP_SELF", 
            "Host Header:" => "HTTP_HOST", 
            "Completer URL:" => "HTTP_REFERER", 
            "User Agent:" => "HTTP_USER_AGENT", 
            "Script Name:" => "SCRIPT_NAME", 
            "Version of The Common Gateway Interface:" => "GATEWAY_INTERFACE", 
            "Server Address:" => "SERVER_ADDR", 
            "Server Software:" => "SERVER_SOFTWARE", 
            "Server Protocol:" => "SERVER_PROTOCOL",
        );
        ?>
        <div>
            <ul>
            <?php
            foreach($server_infos as $key => $value) {
                echo "<li>" . $key . " " . $_SERVER[$value] . "</li>";
            }
            ?>
            </ul>
        </div>
    </body>
</html>