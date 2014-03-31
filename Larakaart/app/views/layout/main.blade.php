<!--hoofd inlcudes-->
@include('layout/shared/head')
@include('layout/shared/map')

	<!--map-->
	<div id="mapClick" onclick="hideContent()"><span >&nbsp;</span></div>

@include('layout/shared/filter')
	
	<section id="section" class="rounded-top">
		
@include('layout/shared/header')

		<div id="content" class="scroll">

@yield('content')

		</div>
	</section>
	
	@foreach ($locations as $location) 
					
				@endforeach
	
@include('layout/shared/footer')