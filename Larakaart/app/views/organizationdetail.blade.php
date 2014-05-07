<div class="container">
    <div class="row">
    @foreach ($errors as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    </div>
    @if ($organization != null)
        <div class="row">
            <h1>{{ $organization['name'] }}</h1>
            <p>
                {{ $organization['type'] }} <br/>
                <a target="_blank" href="http://{{$organization['website']}}">{{ $organization['website'] }}</a>
            </p>
        </div>

        <ul class="nav nav-tabs">
            @if (count($activities) != 0)
                <li class="active"><a href="#activities" data-toggle="tab">Activities</a></li>
            @endif
            @if (count($experiences) != 0)
                <li><a href="#experiences" data-toggle="tab">Experiences</a></li>
            @endif
        </ul>

        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="activities">
                @if (count($activities) != 0)
                    <p>
                        <div id="activities">
                            @foreach ($activities as $activity)
                                <div class="col-sm-6 col-md-4" id="thumbnailactivities">
                                    <div>
                                        <h3>{{ $activity['name'] }}</h3>
                                        <p>
                                            @if ($activity['status'] == 'Open')
                                                <b class="statusopen">{{ $activity['status'] }}</b>
                                            @else
                                                <b class="statusclosed">{{$activity['status']}}</b>
                                            @endif
                                            <br/>
                                            {{ $activity['type'] }} </br>
                                            @if ($activity->getStudyName() != null)
                                                {{ $activity->getStudyName()}} <br/>
                                            @endif
                                            @if ($activity['startdate'] != null)
                                                Start date: {{ $activity['startdate'] }}<br/>
                                            @endif
                                            @if ($activity['enddate'] != null)
                                                End date: {{ $activity['enddate'] }}<br/>
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
            <div class="tab-pane fade" id="experiences">
                @if (count($experiences) != 0)
                    <p>
                        <div id="experiences">
                            @foreach ($experiences as $experience)
                                <div class="col-sm-6 col-md-4" id="thumbnailexperiences">
                                    <div>
                                        <h3>{{$experience->getStudentName()}}</h3>
                                        @if ($experience['description'] != null)
                                        <p>
                                            {{$experience['description'] }}<br/>
                                        </p>
                                        @endif
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