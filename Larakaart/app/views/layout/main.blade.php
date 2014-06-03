<!--hoofd inlcudes-->
@include('layout/shared/head')
@include('layout/shared/map')

	<!--map-->
	<div id="mapClick" onclick="hideContent()"><span >&nbsp;</span></div>

@include('layout/shared/filter')
	
	<section id="section" class="rounded-top">
		
@include('layout/shared/header')
        <ul class="nav nav-pills">
            <li class="disabled">
                <a href="#" id="backButton" class="navbar-brand navigationButton"><span class="glyphicon glyphicon-chevron-left"></span></a>
            </li>
            <li class="disabled">
                <a href="#" id="forwardButton" class="navbar-brand navigationButton"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </li>
            <li>
                <a href="#" id="refreshButton" class="navbar-brand navigationButton"><span class="glyphicon glyphicon-refresh"></span></a>
            </li>
            <li>
                <span id="breadcrumb" class=""> </span>
            </li>
        </ul>
        
		<div id="content" class="scroll">

@yield('content')

		</div>
	</section>
	
@include('layout/shared/footer')