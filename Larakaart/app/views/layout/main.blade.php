<!--hoofd inlcudes-->
@include('layout/shared/head')
@include('layout/shared/map')

	<!--map-->
	<div id="mapClick" onclick="hideContent()"><span >&nbsp;</span></div>

@include('layout/shared/filter')
	
	<section id="section" class="rounded-top">
		
@include('layout/shared/header')

        <a href="#" id="backButton" class="navbar-brand navigationButton">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#" id="forwardButton" class="navbar-brand navigationButton">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a href="#" id="refreshButton" class="navbar-brand navigationButton">
            <span class="glyphicon glyphicon-refresh"></span>
        </a>

		<div id="content" class="scroll">

@yield('content')

		</div>
	</section>
	
@include('layout/shared/footer')