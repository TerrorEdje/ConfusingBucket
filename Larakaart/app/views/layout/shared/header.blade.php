<header>
	<div id="map_bar" class="rounded-top">
		<div id="menu_bar">
			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="show();">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{ URL::route('Home') }}" class="navbar-brand" onclick="">
							<!--<img id="avans_globe" src="images/Avans_globe.png" alt="avans_globe" />-->
							{{HTML::image('images/Avans_globe.png', 'avans_globe', array('id' => 'avans_globe'));}}
						</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav nav-stacked">
							<li class="organizationlistmenu organizationdetailmenu">
								<a href="#" onclick="load('{{ URL::route('organizationlist') }}', 'organizationlistmenu'); return false;">
									Organizations
								</a>
							</li>
                            <li class="activity_uploadmenu">
								<a href="#" onclick="load('{{ URL::route('Activity-upload-get') }}', 'activity_uploadmenu'); return false;">
									Upload Activity
								</a>
							</li>
                            <li class="experience_uploadmenu">
								<a href="#" onclick="load('{{ URL::route('Experience-upload-get') }}', 'experience_uploadmenu'); return false;">
									Upload Experience
								</a>
							</li>
							<!--<li class="authtestmenu">
								<a href="#" onclick="load('authtest.php'); return false;">
									Admin
								</a>
							</li>-->
							<?php 
							if(Auth::check()){
								echo '<li id="loginButton">
									<a href="' . URL::route('logout') .'">
										<span class="text-danger">Log out &nbsp;<span class="glyphicon glyphicon-log-out"></span></span>
									</a>
								</li>';
							}else{
								echo '<li class="loginmenu logoutmenu" id="loginButton">
									<a href="' . URL::route('login-get') .'">
										<span class="text-primary">Login &nbsp;<span class="glyphicon glyphicon-log-in"></span></span>
									</a>
								</li>';
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<a href="#">
			<div id="map_button" class="rounded-topright">
				<span id="showhide" class="glyphicon glyphicon-eject"></span>
			</div>
		</a>
	</div>
</header>
