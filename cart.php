<?php
session_start();

require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $cookie) {
                echo '<p>' . $cookie['name'] . '</p>';
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
