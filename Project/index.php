<?php
	session_start();

	include 'views/shared/head.php';
	include 'views/shared/map.php'; ?>
	<div id="mapClick" onclick="hideContent()"><span >&nbsp;</span></div>
	<?php include 'views/shared/filter.php'; ?>
	<section id="section" class="rounded-top">
		<?php include 'views/shared/header.php'; ?>
		<div id="content" class="scroll">
			<?php include 'home.php'; ?>
		</div>
	</section>
<?php include 'views/shared/footer.php'; ?>