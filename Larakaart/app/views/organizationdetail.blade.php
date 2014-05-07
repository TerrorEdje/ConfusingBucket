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
			@if (count($activities) != 0)
				<div class="row">
					<h2 onClick="$('#activities').slideToggle();">Activities</h2>
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
				</div>
			@endif
			@if (count($experiences) != 0)
				<div class="row">
					<h2 onClick="$('#experiences').slideToggle();">Experiences</h2>
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
				</div>
			@endif
		@endif
	</div>
