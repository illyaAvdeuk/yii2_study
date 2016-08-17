<h1>Action Index</h1>
<p><?=  $hi ?></p>

		<?php if(!empty($id)){ ?>
		<p><?=  $id ?></p>
		<?php } ?>
<ul>
	<?php 
	foreach ($names as $name) {
		echo '<li>' . $name . '</li>';
	}

	?>
</ul>
