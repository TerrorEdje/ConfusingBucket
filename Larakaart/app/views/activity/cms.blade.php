
<div class="panel-group" id="accordion">
	<div class="panel accordionList" id="activitylist">
		<div class="panel-heading">		
			<a class="btn btn-success" href="#" onClick="load('{{ URL::route('Activity-upload-get') }}', 'activity_cmsmenu'); return false;">Upload</a>
			<br> &nbsp;
		</div>		
        <?php $i=0; ?>
		@foreach ($sortedActivities as $sortedActivity)
            @if (count($sortedActivity['activities']) > 0)
			<div class="panel-heading">
				<h1 class="panel-title"> 
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{$i}}">
						<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
						{{ $sortedActivity['organization_name'] }} ({{ count($sortedActivity['activities']) }} {{ (count($sortedActivity['activities']) == 1) ? 'Activity' : 'Activities'}})		
					</a>
				</h1>
			</div>
			<div id="{{$i}}" class="panel-collapse collapse">
				<div class="panel-body">
					@foreach ($sortedActivity['activities'] as $activity)
                        <div class="col-sm-6 col-md-4" id="thumbnailactivities">
                            <div>
                                <h3>{{ $activity['name'] }}</h3>
                                <p>
                                    @if ($activity['status'] == 'Open')
                                        <b class="text-success">{{ $activity['status'] }}</b>
                                    @else
                                        <b class="text-danger">{{$activity['status']}}</b>
                                    @endif
                                    <br/>
                                    {{ $activity['type'] }} </br>
                                    @if ($activity->getStudyName() != null)
                                        {{ $activity->getStudyName()}} <br/>
                                    @endif
                                    @if ($activity['startdate'] != null)
                                        Start: {{ date('d-m-Y', strtotime($activity['startdate'])) }}<br/>
                                    @endif
                                    @if ($activity['enddate'] != null)
                                        End: {{ date('d-m-Y', strtotime($activity['enddate'])) }}<br/>
                                    @endif
                                </p>
                                @if ($activity['description'] != null)
                                <p>
                                    <a class="btn btn-warning" href="#" onclick="load('{{ URL::route('Activity-update-get', array($activity['id'])) }}','activity_cmsmenu'); return false;">Update</a><br/>
                                </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
            <?php $i++; ?>
            @endif
		@endforeach
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#accordion').accordionChevrons();
    });
</script>