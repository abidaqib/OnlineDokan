<?php  if (count($error) > 0) : ?>
	<div class="error">
		<?php foreach ($error as $erro) : ?>
			<p><?php echo $erro; ?></p>
		<?php endforeach; ?>
	</div>
<?php  endif ?>
