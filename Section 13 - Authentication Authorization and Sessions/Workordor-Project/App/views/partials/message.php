<?php if (isset($_SESSION["flash_success_message"])) : ?>
    <div class="message bg-green-100 p-3 my-3"><?= $_SESSION["flash_success_message"] ?></div>
    <?php unset($_SESSION["flash_success_message"]); ?>
<?php endif; ?>

<?php if (isset($_SESSION["error_message"])) : ?>
    <div class="message bg-red-100 p-3 my-3"><?= $_SESSION["error_message"] ?></div>
    <?php unset($_SESSION["error_message"]); ?>
<?php endif; ?>