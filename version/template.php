<ul class="nav nav-list sidebar-list">
	<li style="margin-bottom: 12px"><strong>Installed:</strong> Kirby <?php echo $kirby; ?></li>
	<li>
	<?php if(substr($latest, 6) == $kirby):
		echo '<strong style="color: #8dae28">You have the latest version installed!</strong>';
	else:
		echo '<a href="' . $link . '" style="padding-left: 0; color: #b3000a"><strong>New version available: </strong>' . $latest . ' <i class="icon fa fa-chain"></i></a>';
	endif; ?>
	</li>
</ul>
