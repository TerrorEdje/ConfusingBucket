{{--@extends('layout.main')--}}

{{--@section('content')	--}}
	<table>
		<tr><td>Type: </td><td>{{ $story['type'] }}</td></tr>
		
		<tr><td>Startdate: </td><td>{{ $story['startdate'] }}</td></tr>
		<tr><td>Enddate: </td><td>{{ $story['enddate'] }}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Description: </td><td>{{ $story['description'] }}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Student: </td><td>{{$student['firstname']}} {{$student['insertion']}} {{$student['surname']}}</td></tr>
		<tr><td>Study: </td><td>{{$study['name']}}</td></tr>
		<tr><td>Schoolyear: </td><td>{{ $story['schoolyear'] }}</td></tr>
		<tr><td>School: </td><td>{{$school['name']}}</td></tr>
		<tr><td>Email: </td><td>{{$student['email']}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Organization: </td><td>{{$organization['name']}}</td></tr>
		<tr><td>Organization description: </td><td>{{$organization['description']}}</td></tr>
		<tr><td>Website: </td><td><a href="http://{{$organization['website']}}" target=\"_blank\">{{$organization['website']}}</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		@for ($i = 0; $i < count($locations); $i ++)
			<tr><td class="tdTop">Locatie(s) story: </td><td><ul><li>
			{{$storylocations[$i]['location_type']}}<br/>
			{{$locations[$i]['streetname']}} {{$locations[$i]['number']}}<br/>
			{{$locations[$i]['zipcode']}} {{$locations[$i]['city']}}<br/>
			{{$locations[$i]['country']}}</li>
			</ul></td></tr>
		@endfor
		
	</table>

	
{{--@stop--}}