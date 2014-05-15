<a href="#" onClick="load('{{ URL::route('Organization-upload-get') }}', 'organization_cmsmenu'); return false;">Upload</a>
<br/>
<div class="panel-group" id="accordion">
	<div class="panel" id="organizationlist">
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
					<a href="#" onclick="load('{{ URL::route('Organization-update-get', array($organization['id'])) }}','organizationupdatemenu'); return false;">Update</a>
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