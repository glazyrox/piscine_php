<?php
    $auth = base64_encode($login . ':' . $pass);
    if ($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === "Ilovemylittlepone")
    {
        $file = (base64_encode(file_get_contents("../img/42.png")));
        echo ("<html><body>\nHello Zaz<br />\n<img src='data:image/png;");
        echo ("base64,"."$file"."'");
        echo ("</body></html>");
    }
    else if (!($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === "Ilovemylittleponey"))
    {
        header('WWW-Authenticate: Basic realm="Member area"');
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>That area is accessible for members only";
        echo "</body></html>\n";
        exit;
    }
?>

