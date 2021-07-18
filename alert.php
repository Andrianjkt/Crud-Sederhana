<?php 
	if (@$_GET['code']=='1') { ?>
		<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di Tambah.
		</div>
		<?php
		}
	if (@$_GET['code']=='2') { ?>
	  	<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di Edit.
		</div>
		<?php
		}
	if (@$_GET['code']=='3') { ?>
	  	<div class="alert alert-success">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Berhasil!</strong> Data User berhasil di Hapus.
		</div>
		<?php
		}
	if (@$_GET['code']=='4') { ?>
		<div class="alert alert-warning">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Error!</strong> Ada error, harap ulangi perintah.
	  	</div>
		<?php
		}

?>
