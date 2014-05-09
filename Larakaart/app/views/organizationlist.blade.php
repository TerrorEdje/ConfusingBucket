
	<div class="panel-group" id="accordion">
		<div class="panel" id="organizationlist">
			@foreach ($organizations as $organization)
				<div class="panel-heading">
					<h1 class="panel-title"> 
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $organization['id']}}">
							<i class="indicator glyphicon glyphicon-chevron-down"></i>
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
						<a href="#" onclick="load('{{ URL::route('organizationdetail', array($organization['id'])) }}','organizationdetailmenu'); return false;">Learn more</a>
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



	<!-- <table class="tblUserStory" rules='cols'>
	<tr ><th>Name</th><th class="otherTDTH">Type</th><th class="otherTDTH">Website</th><th class="otherTDTH">Link</th></tr>
	@foreach ($organizations as $organization)
		<tr>
			<td class="otherTDTH">{{ $organization['name'] }}</td>
			<td class="otherTDTH">{{ $organization['type'] }}</td>
			<td class="otherTDTH">{{ $organization['website'] }}</td>
			<td class="otherTDTH"><a href="#" onclick="load('{{ URL::route('organizationdetail', array($organization['id'])) }}','organizationdetailmenu'); return false;">Detail</a></td>
		</tr>
	@endforeach
	</table> -->