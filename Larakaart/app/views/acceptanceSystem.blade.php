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
        </div>
        <div class="tab-pane fade" id="activities">
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