@extends('layout.main')

@section('content')

	<table class="tblUserStory" rules='cols'>
	<tr ><th>Type</th><th class="otherTDTH">Country</th><th class="otherTDTH">City</th><th class="otherTDTH">Startdate</th><th class="otherTDTH">Enddate</th><th class="otherTDTH">Name</th></tr>
	@foreach ($stories as $story)
		<tr>
			<td class="otherTDTH">{{ $story['type'] }}</td>
			<td class="otherTDTH">{{ $story['country'] }}</td>
			<td class="otherTDTH">{{ $story['city'] }}</td>
			<td class="otherTDTH">{{ $story['startdate'] }}</td>
			<td class="otherTDTH">{{ $story['enddate'] }}</td>
			<td class="otherTDTH">{{ $story['name'] }}</td>
			<td>&nbsp;{{ link_to_action('StoryController@storydetail', 'Detail', $parameters = array($story['id']), $attributes = array()); }}</td>
		</tr>
	@endforeach
	</table>
@stop