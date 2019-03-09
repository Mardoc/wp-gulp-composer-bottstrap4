<?php
	/*
	Template Name: player-find
	*/
	get_header();
?>

<div class="container">
	<form class="was-validated" method="post" action="<?php echo admin_url('admin-ajax.php?action=playerfind'); ?>" enctype="multipart/form-data" >
		<h1>Поиск Игрока</h1>
		<div class="form-group">
			
			<div class="typeahead__container">
				<div class="typeahead__field">
					<div class="typeahead__query">
						<input class="js-typeahead-input" name="player" type="search" placeholder="Search" autocomplete="off">
					</div>
					<div class="typeahead__button">
						<button type="submit">
							<i class="typeahead__search-icon"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="cat_id" value="" required>
		<input type="hidden" name="cat_name" value="" required>
		<button class="btn btn-primary hide" type="submit">Submit form</button>
	</form>

</div>

<?php
	get_footer();