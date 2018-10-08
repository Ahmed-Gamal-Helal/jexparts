<?php

    global $jexparts;
    if ($jexparts['facebook'] == true):
        ?>
        <a href="<?php echo $jexparts['facebook']; ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <?php
    endif;

    if ($jexparts['twitter'] == true):
        ?>
        <a href="<?php echo $jexparts['twitter']; ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
        <?php
    endif;

    if ($jexparts['instagram'] == true):
        ?>
        <a href="<?php echo $jexparts['instagram']; ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
            <?php
        endif;

    if ($jexparts['google'] == true):
        ?>
        <a href="<?php echo $jexparts['google']; ?>" target="_blank" class="instagram"><i class="fab fa-google-plus-g"></i></a>
            <?php
        endif;



    ?>

