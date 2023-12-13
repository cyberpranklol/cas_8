<?php

    $imena = [
        "Petar",
        "Toma",
        "Vlada"
    ];

?>
<!DOCTYPE html>

<html lang="en">
    
    <body>
        <?php
            // ovako se nikad NE RADI!
            foreach($imena as $ime){
                echo "<p>$ime</p>";
            }
        ?>

        <?php foreach($imena as $ime): ?>
            <p><?= $ime ?></p>
        <?php endforeach; ?>
    </body>

</html>