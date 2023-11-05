<?php if (isset($_SESSION['success_msg'])) : ?>
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close">×</button>
        <?php
        echo $_SESSION['success_msg'];
        unset($_SESSION['success_msg']);
        ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error_msg'])) : ?>
    <div class="alert alert-warning">
        <button type="button" aria-hidden="true" class="close">×</button>
        <?php
        echo $_SESSION['error_msg'];
        unset($_SESSION['error_msg']);
        ?>
    </div>
<?php endif; ?>