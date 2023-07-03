<?php

    if (count($_GET) >= 1){
        foreach ($_GET as $key => $value) { ?>
            <p>
                <?php echo $key . ' ' . $value; ?>
            </p>
        <?php }
    }

?>