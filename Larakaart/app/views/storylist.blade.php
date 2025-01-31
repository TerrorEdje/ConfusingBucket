{{--@extends('layout.main')--}}

{{--@section('content')--}}

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
			<td class="otherTDTH"><a href="#" onclick="load('{{ URL::route('storydetail', array($story['id'])) }}','storylist_detailmenu'); return false;">Detail</a></td>
		</tr>
	@endforeach
	</table>
	
	<?php
	if (count($stories) == 1)
	{
		?>
		<script type='text/javascript'>load('{{ URL::route('storydetail', array($stories[0]['id'])) }}','storylist_detailmenu');</script>
		<?php
	}
	?>
{{--@stop--}}