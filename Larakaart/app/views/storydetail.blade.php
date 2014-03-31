@extends('layout.main')

@section('content')	
	<table>
		<tr><td>Type: </td><td>{{ $story['type'] }}</td></tr>
		
		<tr><td style="width: 160pxpx;">Startdate: </td><td>{{ $story['startdate'] }}</td></tr>
		<tr><td style="width: 160px;">Enddate: </td><td>{{ $story['enddate'] }}</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td style="width: 160px;">Description: </td><td>{{ $story['description'] }}</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td style="width: 160px;">Student: </td><td>{{$student['firstname']}} {{$student['insertion']}} {{$student['surname']}}</td></tr>
		<tr><td style="width: 160px;">Study: </td><td>{{$study['name']}}</td></tr>
		<tr><td style="width: 160px;">Schoolyear: </td><td>{{ $story['schoolyear'] }}</td></tr>
		<tr><td style="width: 160px;">School: </td><td>{{$school['name']}}</td></tr>
		<tr><td style="width: 160px;">Email: </td><td>{{$student['email']}}</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td style="width: 160px;">Organization: </td><td>{{$organization['name']}}</td></tr>
		<tr><td style="width: 160px;">Organization description: </td><td>{{$organization['description']}}</td></tr>
		<tr><td style="width: 160px;">Website: </td><td><a href="http://{{$organization['website']}}" target=\"_blank\">{{$organization['website']}}</a></td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		@foreach($locations as $location)
			<tr><td class="tdTop">Locatie(s) story: </td><td><ul>
			<li>TYPE<br/>{{$location['streetname']}} {{$location['number']}}<br/>{{$location['zipcode']}} {{$location['city']}}<br/>{{$location['country']}}</li>
			</ul></td></tr>
		@endforeach
		
	</table>

	
@stop