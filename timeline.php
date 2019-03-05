<?php require_once("auth.php"); ?>

    <!-- extend header -->
    <?php
        include 'session_timeout.php';
        include 'templating/header.php';
    ?>

            <form action="upload.php" class="dropzone"></form></br>

            <?php for($i=0; $i < 2; $i++){ ?>
                <?php echo "Kamu telah mengupload file pada tanggal dengan ukuran"?></br>
            <?php } ?></br>

    <?php
        include 'templating/footer.php';
    ?>


</body>
</html>