<ul class="nav nav-list sidebar-list">
	<li><strong>Installed:</strong> Kirby <?php echo $kirby; ?></li>
	<li>
	<?php if(substr($latest, 6) == $kirby) {
		echo '<strong style= "color: #1abc9c">You have the latest version installed!</strong>';
	} else {
		echo '<a href="' . $link . '" style="padding-left: 0; color: #e90000"><strong>New version available: </strong>' . $latest . '</a>';
	}; ?>
	</li>
</ul>
