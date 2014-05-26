
<div class="panel-group" id="accordion">
	<div class="panel accordionList" id="studylist">
		<div class="panel-heading">		
			<a class="btn btn-success" href="#" onClick="load('{{ URL::route('Study-upload-get') }}', 'study_cmsmenu'); return false;">Upload</a>
			<br> &nbsp;
		</div>		
		<?php $i=0; ?>
		@foreach ($sortedStudies as $sortedStudy)
			@if(count($sortedStudy['studies']) > 0)
				<div class="panel-heading">
					<h1 class="panel-title"> 
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $i }}">
							<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
							{{ $sortedStudy['school_name'] }} ({{ count($sortedStudy['studies']) }} {{ (count($sortedStudy['studies']) == 1) ? 'Study' : 'Studies'}}) 
						</a>
					</h1>
				</div>
				<div id="{{ $i }}" class="panel-collapse collapse">
					<div class="panel-body">
						@foreach($sortedStudy['studies'] as $study)
							<div class="col-sm-6 col-md-4" id="thumbnailstudies">
								<h3>{{ $study['name'] }}</h3>
								<a class="btn btn-warning" href="#" onclick="load('{{ URL::route('Study-update-get', array($study['id'])) }}','study_cmsmenu'); return false;">Update</a>
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