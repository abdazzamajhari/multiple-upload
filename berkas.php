<?php require_once("auth.php"); ?>

    <!-- extend header -->
    <?php
        include 'session_timeout.php';
        include 'templating/header.php';
    ?>

            <div id="content-wrapper">

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama File</th>
                            <th>Akses</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            //get connection in auth.php 

                            $res = $conn->query("SELECT * FROM file");
                            while($row = $res->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nama_file'] ?></td>
                                <td><?php
                                    if($row['id']==1){
                                        echo '<a class="btn btn-danger" href="#" role="button"><i class="fa fa-user"></i></a>';
                                    } else {
                                        echo '<a class="btn btn-success" href="#" role="button"><i class="fa fa-users"></i></a>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="#" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning" href="#" role="button"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger" href="#" role="button"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
        </div>

    <?php
        include 'templating/footer.php';
    ?>

</body>
</html>