<?php include 'header_lihat_produk.php'; ?>
<?php
$usern = sqlsrv_query($kon, "select * from admin where uname = '".$_SESSION['uname']."'");
$uu = sqlsrv_fetch_array($usern);
?>
	  
<link rel="stylesheet" href="../datatables/dataTables.bootstrap.css"/>
<h3><span class="glyphicon glyphicon-book"></span>  LIHAT PRODUK PO</h3>
    <div style="overflow-y:auto">

	<div style="width:100%">

<table id="lookup1" class="table table-nomargin table-bordered" width="100%">
<thead style="color:white;background:#00CED1;" >
	<tr>
		<th class="col-md-0 text-center">ID_StoreGrp</th>
		<th class="col-md-0 text-center">no_po</th>
		<th class="col-md-0 text-center">tgl_pesan</th>
		<th class="col-md-0 text-center">tgl_kirim</th>
		<th class="col-md-0 text-center">jam_pesan</th>
		<th class="col-md-0 text-center">Store_ID</th>
		<th class="col-md-0 text-center">cabang</th>
		<th class="col-md-0 text-center">status</th>
		<th class="col-md-0 text-center">Action</th>
	</tr>
</thead>
<tbody>
	<?php

		$brg=sqlsrv_query($kon, "select TOP 500 * from Alfamidi_PO_transaksi with(NOLOCK) where status='1' and ID_StoreGrp='070302004' order by tgl_pesan DESC");

	$no=1;
	while($b=sqlsrv_fetch_array($brg)){
		
		?>
	  <tr>
			<td class="text-center"><?php echo $b['ID_StoreGrp'] ?></td>
			<td class="text-center"><?php echo $b['no_po'] ?></td>
			<td class="text-center"><?php echo date_format($b["tgl_pesan"], 'd-m-Y')?></td>
			<td class="text-center"><?php echo date_format($b["tgl_kirim"], 'd-m-Y')?></td>
			<td class="text-center"><?php echo $b['jam_pesan'] ?></td>
			<td class="text-center"><?php echo $b['Store_ID'] ?></td>
			<td class="text-center"><?php echo $b['cabang'] ?></td>
			<td class="text-center"><?php echo $b['status'] ?></td>
			
			<td class="text-center">
				<a href="btn_edit_produk_po.php?id=<?php echo $b['no_po']; ?>" class="btn btn-primary">Edit</a>
			</td>
       
		</tr>

		<?php
	}
	?>
	</tbody>
</table>
</div>
</div>

	<script language='javascript'>
		function validAngka(angka)
		{
			if(!/^[0-9.]+$/.test(angka.value))
			{
				angka.value = angka.value.substring(0,angka.value.length-1000);
			}
		}
    </script>
	<?php include 'footer.php'; ?>
	<script src="../datatables/jquery.dataTables.js"></script>
	<script src=../"datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
$(function () {
					$("#lookup1").dataTable({
		});
	$("#lookup2").dataTable({

		});
			});
</script>

<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
    $(document).on("click", ".view", function() {
		var adminid = $(this).data('id');
		$("#showid").text(adminid);
		$('#confirm-delete').modal('show');
	});
    </script>
