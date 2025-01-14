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
						<a href="#" class="navbar-brand" onclick="load('./?nolayout', 'homemenu'); return false;">
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
                            <li class="dropdown activity_cmsmenu experience_uploadmenu organization_cmsmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CMS <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="activity_cmsmenu">
                                        <a href="#" onclick="load('{{ URL::route('Activity-cms') }}', 'activity_cmsmenu'); return false;">
                                            Activity
                                        </a>
                                    </li>
                                    <li class="organization_cmsmenu">
                                        <a href="#" onclick="load('{{ URL::route('Organization-cms') }}', 'organization_cmsmenu'); return false;">
                                            Organization
                                        </a>
                                    </li>
									<li class="school_cmsmenu">
                                        <a href="#" onclick="load('{{ URL::route('School-cms') }}', 'school_cmsmenu'); return false;">
                                            School
                                        </a>
                                    </li>
									<li class="study_cmsmenu">
                                        <a href="#" onclick="load('{{ URL::route('Study-cms') }}', 'study_cmsmenu'); return false;">
                                            Study
										</a>
									</li>
									<li class="experience_cmsmenu">
                                        <a href="#" onclick="load('{{ URL::route('Experience-cms-list') }}', 'experience_cmsmenu'); return false;">
                                            Experience
                                        </a>
                                    </li>
                                </ul>
                            </li>
							<!--<li class="authtestmenu">
								<a href="#" onclick="load('authtest.php'); return false;">
									Admin
								</a>
							</li>-->
							<?php 
							if(Auth::check()){
								echo '<li id="loginOutButton">
									<a href="' . URL::route('logout') .'">
										<span class="text-danger"><span class="glyphicon glyphicon-log-out">&nbsp;</span>Log out</span>
									</a>
								</li>';
							}else{
								echo '<li class="loginmenu logoutmenu" id="loginButton">
									<a href="' . URL::route('login-get') .'">
										<span class="text-primary"><span class="zocial google"></span>&nbsp; Login</span>
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
