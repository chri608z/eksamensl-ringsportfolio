<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>PHP test</title>
    </head>
    <body>
        <h1>Dette er min første PHP-side</h1>
        <p>Dette er almindelig html</p>
        <?php 
            echo "<p>Hello World from PHP</p>";//phpinfo();
        ?>
        
        <p><?php 
            echo "<p>Hello World from PHP";
        ?></p>
    </body>
</html>