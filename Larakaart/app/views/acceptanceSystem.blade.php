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
								<a class="btn btn-info" href="#" onclick="load('{{ URL::route('organizationdetail', array($organization['id'])) }}','organizationdetailmenu'); return false;">Learn more</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
        </div>
        <div class="tab-pane fade" id="activities">
			<div class="panel-group" id="accordion">
				<div class="panel accordionList" id="activitylist">
					@foreach ($activities as $activity)
						<div class="panel-heading">
							<h1 class="panel-title"> 
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $activity['id']}}">
									<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
									{{ $activity['name'] }}	
								</a>
							</h1>
						</div>
						<div id="{{ $activity['id']}}" class="panel-collapse collapse">
							<div class="panel-body">
								{{ $activity['description'] }}	
							</div>
						</div>
					@endforeach
				</div>
			</div>
        </div>
        <div class="tab-pane fade" id="experiences">
            @foreach ($experiences as $experience)
				{{ $experience['id'] }} <br>
			@endforeach
        </div>
    </div>

</div>

<script type="text/javascript">  
	$(document).ready(function(){
        $('#accordion').accordionChevrons();
    });
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> » Acceptance System');
</script>