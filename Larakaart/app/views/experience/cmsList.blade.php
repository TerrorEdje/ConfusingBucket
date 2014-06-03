<h3>Experiences</h3>

	<div class="panel-group" id="accordion">
		<div class="panel accordionList" id="organizationlist">
			@foreach ($organizations as $organization)
				<div class="panel-heading">
					<h1 class="panel-title"> 
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $organization['id']}}">
							<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
							{{ $organization['name'] }} ({{ $organization->getLocation()->city }}, {{ $organization->getLocation()->country }})		
						</a>
					</h1>
				</div>
				<div id="{{ $organization['id']}}" class="panel-collapse collapse">
					<div class="panel-body">
						<p> {{ $organization['type'] }} </p>
						<p> {{ $organization['description'] }} </p>
						@if (isset($organization['website']))
							<p> {{ $organization['website'] }} </p>
						@endif
						<a class="btn btn-info" href="#" onclick="load('{{ URL::route('Experience-cms-detail', array($organization['id'])) }}','experiencedetailmenu'); return false;">Learn more</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#accordion').accordionChevrons();
    });
</script>