<h3>Organizations</h3>

<div class="panel-group" id="accordion">
	<div class="panel accordionList" id="organizationlist">
		<div class="panel-heading">		
			<a class="btn btn-success" href="#" onClick="load('{{ URL::route('Organization-upload-get') }}', 'organization_cmsmenu'); return false;">Upload</a>
			<br> &nbsp;
		</div>		
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
					<a class="btn btn-warning" href="#" onclick="load('{{ URL::route('Organization-update-get', array($organization['id'])) }}','organization_cmsmenu'); return false;">Update</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#accordion').accordionChevrons();
    });
    
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> &raquo; Organization CMS');
</script>