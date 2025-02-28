<div class="container">
    <div class="row">
		@foreach ($errors as $error)
			<p class="text-danger">{{ $error }}</p>
		@endforeach
    </div>
    @if ($organization != null)
        <div class="row">
            <h1>{{ $organization['name'] }} </h1>
            <p>
                <span class="text-primary">{{ $organization['type'] }}</span><br/>
                <a target="_blank" href="http://{{$organization['website']}}">{{ $organization['website'] }}</a>
            </p>
        </div>

        <ul class="nav nav-tabs">
			<li><a href="#about" data-toggle="tab">About</a></li>
            @if (count($activities) != 0)
                <li><a href="#activities" data-toggle="tab">Activities</a></li>
            @endif
            @if (count($experiences) != 0)
                <li class="active"><a href="#experiences" data-toggle="tab">Experiences</a></li>
            @endif
        </ul>

        <div id="myTabContent" class="tab-content">
		
			<div class="tab-pane fade" id="about">
				<p>
					<div id="about">
						<p>
							@if (isset($organization->getLocation()->streetname))
								{{ $organization->getLocation()->streetname }}<br/>
							@endif
							@if (isset($organization->getLocation()->number))
								{{ $organization->getLocation()->number }}<br/>
							@endif
							{{ $organization->getLocation()->city }}
							@if (isset($organization->getLocation()->zipcode))
								,{{ $organization->getLocation()->zipcode }}
							@endif
							<br/>{{ $organization->getLocation()->country }}
						</p>
						<p>
							{{ $organization['description'] }}<br/>
							@if (isset($organization['website'])) 
								{{ $organization['website'] }}
							@endif
						</p>
					</div>
				</p>
            </div>
			
            <div class="tab-pane fade" id="activities">
                @if (count($activities) != 0)
                    <p>
                        <div id="activities">
                            @foreach ($activities as $activity)
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
                                            {{$activity['description'] }}<br/>
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </p>
                @endif
            </div>
			
            <div class="tab-pane fade in active" id="experiences">
			
				<div class="panel-heading">		
					<a class="btn btn-success" href="#" onclick="load('{{ URL::route('Experience-upload-get', array($organization['id'])) }}','experience_cmsmenu'); return false;">Upload</a>
				</div>
		
                @if (count($experiences) != 0)
                    <p>
                        <div id="experiences">
                            @foreach ($experiences as $experience)
                                <div class="col-sm-6 col-md-4" id="thumbnailexperiences">
                                    <div>
                                        <h3 class="text-primary">{{$experience->getStudentName()}}</h3>
                                        @if ($experience['description'] != null)
                                        <p>
                                            {{$experience['description'] }}<br/>
                                        </p>
                                        @endif
                                    </div>
									<div>		
										<a class="btn btn-success" href="#" onclick="load('{{ URL::route('Experience-update-get', array($experience['id'])) }}','experience_cmsmenu'); return false;">Update</a>
									</div>
                                </div>
                            @endforeach
                        </div>
                    </p>
                @endif
            </div>
			
        </div>
    @endif
</div>