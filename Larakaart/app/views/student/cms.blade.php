<h3>Student CMS</h3>
<a class="btn btn-success" href="#" onclick="load('{{ URL::route('Student-upload') }}'); return false;">Add new Student</a>
<br />
<div class="studentCMS">
@foreach ($students as $student)
	<div class="studentRow">
		<a href="#" onClick="load('{{ URL::route('Student-update', $student['id']) }}'); return false;" id="text-primary">
			<h4> {{$student->firstname}} {{$student->insertion}} {{$student->surname}} </h4>
		</a>
	</div>
@endforeach
</div>



<script type="text/javascript"> 
    $('#breadcrumb').html('<a href="#" onclick="load(\'./?nolayout\', \'homemenu\'); return false;">Home</a> &raquo; Student CMS');
</script>