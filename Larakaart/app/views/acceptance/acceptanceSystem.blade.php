<div class="container">

	<h3>Acceptance System</h3>
	
    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
	
    <ul class="nav nav-tabs">
		@if (count($organizations) != 0)
            <li class="active"><a href="#organizations" data-toggle="tab">Organizations</a></li>
        @endif
        @if (count($activities) != 0)
            <li><a href="#activities" data-toggle="tab">Activities</a></li>
        @endif
        @if (count($experiences) != 0)
            <li><a href="#experiences" data-toggle="tab">Experiences</a></li>
        @endif
    </ul>

    <div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="organizations">
			@foreach ($organizations as $organization)
				<a href="#" onClick="load('{{ URL::route('Detail-organization', array($organization['id'])) }}'); return false;">
					{{ $organization['name'] }} ({{ $organization->getLocation()->city }}, {{ $organization->getLocation()->country }})
				</a><br>
			@endforeach
        </div>
        <div class="tab-pane fade" id="activities">
			@foreach ($activities as $activity)
				<a href="#" onClick="load('{{ URL::route('Detail-activity', array($activity['id'])) }}'); return false;">
					{{ $activity['name'] }}
				</a><br>
			@endforeach
        </div>
        <div class="tab-pane fade" id="experiences">
            @foreach ($experiences as $experience)
				{{ $experience['id'] }} <br>
			@endforeach
        </div>
    </div>

</div>

<script type="text/javascript"> 
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> » Acceptance System');
</script>