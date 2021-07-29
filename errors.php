<?php if (count($errors) > 0): ?>
		<div class="error">
			<?php foreach($errors as $error): ?>
				<p><?php echo $error; ?> </p>
					<?php endforeach ?>
		</div>
<?php endif  ?>

<?php if (isset($name_error)): ?>
  <span><?php echo $name_error; ?></span>
<?php endif ?>