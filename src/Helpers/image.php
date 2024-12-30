<?php

function img(string $path, string $alt = "") { ?>
    <img src="/assets/img/<?= $path?>" alt="<?= $alt ?>">
<?php }
