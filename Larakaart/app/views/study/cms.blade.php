
<div class="panel-group" id="accordion">
	<div class="panel accordionList" id="studylist">
		<div class="panel-heading">		
			<a class="btn btn-success" href="#" onClick="load('{{ URL::route('Study-upload-get') }}', 'study_cmsmenu'); return false;">Upload</a>
			<br> &nbsp;
		</div>		
		@foreach ($studies as $study)
			<div class="panel-heading">
				<h1 class="panel-title"> 
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $study['id']}}">
						<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
						{{ $study['name'] }} 
					</a>
				</h1>
			</div>
			<div id="{{ $study['id']}}" class="panel-collapse collapse">
				<div class="panel-body">
					<a class="btn btn-warning" href="#" onclick="load('{{ URL::route('Study-update-get', array($study['id'])) }}','study_cmsmenu'); return false;">Update</a>
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