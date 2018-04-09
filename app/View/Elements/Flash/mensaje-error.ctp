<!-- <div class="alert alert-dismissible alert-danger border-radius0 margin-bottom0">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php //echo $message; ?>
</div> -->

<script>
$.notify({
	// options
	message: '<?php echo $message ?>'
},{
	// settings
  type: 'danger clasic-font',
  placement: {
		from: "top",
		align: "right"
  },
  offset: 20,
	spacing: 10,
	z_index: 1031,
	delay: 5000,
	timer: 1000,
  animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	}
});
</script>