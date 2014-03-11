<?php
	session_start();
	include 'views/shared/head.php';
	include 'views/shared/map.php'; ?>
	<div id="mapClick" onclick="hide()"><span >&nbsp;</span></div>
	<section id="section">
		<?php include 'views/shared/header.php'; ?>
		<div id="content">
			<?php include 'home.php'; ?>
		</div>
	</section>
<?php include 'views/shared/footer.php'; ?>