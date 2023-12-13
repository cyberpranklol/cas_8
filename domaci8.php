<?php
    $stavke = ["Glavna", "Kontakti", "O nama"];
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>DOMACI 8</title>
    </head>

    <body>
        <nav>
            <?php foreach ($stavke as $stavka): ?>
                <a href="https://itmentorstva.com/"><?= $stavka ?></a>
            <?php endforeach; ?> 
        </nav>
    </body>

</html>