<!-- footer.php -->
<?php
    require __DIR__ . '/version.php';
?>
<footer>
    <p class="footer-text">
    <?php 
        echo "&copy; " . date("Y") . " " . htmlspecialchars($config['callsign']) . " | <a href='https://github.com/ds2600/arwt-cms' target='_blank'>ARWT-CMS</a> ". VERSION;
    ?>
    </p>
</footer>
