<script>
$.notify({
	// options
	message: '<?php echo $message ?>'
},{
	// settings
  type: 'info clasic-font',
  placement: {
		from: "top",
		align: "right"
  },
  offset: 20,
	z_index: 1031,
  animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	}
});
</script>