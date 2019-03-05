 
            <!-- <?php for($i=0; $i < 1; $i++){ ?> -->
                <div class="card mb-3">
                <div class="card-body text-center">
                    Copyright © <?php echo date("Y")?>
                </div>
            </div>
            <!-- <?php } ?> -->
            
        </div>
    
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#tabelAuthor').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "action/dataTables.php",
            "columnDefs": [ {
                "targets": -1,
                "data": null,
                "defaultContent": "<button class='btn btn-success btn-xs tblEdit'>Edit / Delete</button>"
            }]
        });
    
        $('#tabelAuthor tbody').on( 'click', '.tblEdit', function () {
            var data = table.row( $(this).parents('tr') ).data();
            window.location.href = "edit.php?id="+ data[4];
        } );
    });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>