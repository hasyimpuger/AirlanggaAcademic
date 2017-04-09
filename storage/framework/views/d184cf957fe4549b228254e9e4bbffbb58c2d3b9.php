<?php $__env->startSection('htmlheader_title'); ?>
Edit Jurnal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Jurnal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-header'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	<?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
	<p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
	<?php echo Session::forget('alert-' . $msg); ?>

	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="row">
	<div class="col-md-12">
		<div class="">

			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<br>
			<form id="tambahjurnal" method="post" action="<?php echo e(url('/dosen/jurnal/'.$jurnal->id_jurnal.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama_jurnal" class="col-sm-2 control-label">Judul Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_jurnal" name="nama_jurnal" placeholder="Masukkan nama_jurnal" value="<?php echo e($jurnal->nama_jurnal); ?>" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="halaman_jurnal" class="col-sm-2 control-label">Halaman</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="halaman_jurnal" name="halaman_jurnal" placeholder="Masukkan Halaman" value="<?php echo e($jurnal->halaman_jurnal); ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="bidang_jurnal" class="col-sm-2 control-label">Bidang Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="bidang_jurnal" name="bidang_jurnal" placeholder="Masukkan bidang" value="<?php echo e($jurnal->bidang_jurnal); ?>" required>
					</div>
				</div>
				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_jurnal" class="col-sm-2 control-label">Tanggal Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_jurnal" placeholder="Masukkan Tanggal" value="<?php echo e($jurnal->tanggal_jurnal); ?>" required>
					</div>
				</div>
				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="volume_jurnal" class="col-sm-2 control-label">Volume Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="volume_jurnal" name="volume_jurnal" placeholder="Masukkan Volume" value="<?php echo e($jurnal->volume_jurnal); ?>" required>
					</div>
				</div>
				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="penulis_ke" class="col-sm-2 control-label">Penulis Ke</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="penulis_ke" name="penulis_ke" placeholder="Masukkan Penulis Ke" value="<?php echo e($jurnal->penulis_ke); ?>" required>
					</div>
				</div>


				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>