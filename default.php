<?php $this->inc('elements/header.php'); ?>

<div>
    <?php
    $a = new Area('contenu');
    $a->display($c);
    ?>
</div>

<?php $this->inc('elements/footer.php'); ?>
