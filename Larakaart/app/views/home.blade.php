@extends((( !isset($_GET['nolayout'])) ? 'layout.main' : 'layout.empty' ))

@section('content')
	<h2>Welcome to <span class="text-primary">The Worldmap</span> of Confusing Bucket!</h2>
	<br />
	<h4>On this website you can read stories by students who went to do a minor, internship or graduation in foreign countries.
	You will find information about residence locations, classes and way more. 
	By using the map on the background you can find the stories of students.</h4>
    
    <script type="text/javascript">    
        $('#breadcrumb').html('Home');
    </script>
@stop

