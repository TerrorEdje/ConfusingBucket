<h3>Schools</h3>

<div class="panel-group" id="accordion">
	<div class="panel accordionList" id="schoollist">
		<div class="panel-heading">		
			<a class="btn btn-success" href="#" onClick="load('{{ URL::route('School-upload-get') }}', 'school_cmsmenu'); return false;">Upload</a>
			<br> &nbsp;
		</div>		
		@foreach ($schools as $school)
			<div class="panel-heading">
				<h1 class="panel-title"> 
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $school['id']}}">
						<i class="indicator glyphicon glyphicon-chevron-down text-primary"></i>&nbsp;&nbsp;&nbsp;
						{{ $school['name'] }} 
					</a>
				</h1>
			</div>
			<div id="{{ $school['id']}}" class="panel-collapse collapse">
				<div class="panel-body">
					@if (isset($school['website']))
						<p> {{ $school['website'] }} </p>
					@endif
					<a class="btn btn-warning" href="#" onclick="load('{{ URL::route('School-update-get', array($school['id'])) }}','school_cmsmenu'); return false;">Update</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#accordion').accordionChevrons();
    });
    
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> » School CMS');
</script>