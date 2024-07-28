<script src="<?=base_url('js/jquery-3.4.1.min.js')?>"></script>
<script src="<?=base_url('js/jquery-migrate-3.1.0.min.html')?>"></script>
<script src="<?=base_url('js/mmenu.min.js')?>"></script>
<script src="<?=base_url('js/tippy.all.min.js')?>"></script>
<script src="<?=base_url('js/simplebar.min.js')?>"></script>
<script src="<?=base_url('js/bootstrap-slider.min.js')?>"></script>
<script src="<?=base_url('js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('js/snackbar.js')?>"></script>
<script src="<?=base_url('js/clipboard.min.js')?>"></script>
<script src="<?=base_url('js/counterup.min.js')?>"></script>
<script src="<?=base_url('js/magnific-popup.min.js')?>"></script>
<script src="<?=base_url('js/slick.min.js')?>"></script>
<script src="<?=base_url('js/custom.js')?>"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>