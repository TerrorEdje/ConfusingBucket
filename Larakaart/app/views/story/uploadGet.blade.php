@extends('layout.main')

@section('content')
	<h3>Upload Story</h3>

	<form id="upload-form" action="addStory.php" method="POST">
		<input type="hidden" name="usingAJAX" value="false" />
				
		<p>* Verplicht veld</p>
		<table class="uploadTable">
		<tr><td>Type:</td> <td><select name="type">

				@foreach ($types as $type) 
					<option value ="{{ $type->_get("id") }}">{{ $type->_get("name") }}</option>				
				@endforeach

		</select> *</td></tr>
			<tr><td>Begindatum:</td> <td> <input type="text" id="calendar" name="startdate" class="customtextbox"> *</td></tr>
			<tr><td>Einddatum:</td> <td> <input type="text" id="calendar" name="enddate" class="customtextbox"> *</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Gegevens over de organisatie:</td></tr>
			<tr><td>Naam:</td> <td> <input type="text" name="name" class="customtextbox"> *</td></tr>
			<tr><td>Omschrijving:</td> <td> <textarea name="description" class="customtextareadescription"></textarea></td></tr>
			<tr><td>Straat:</td> <td> <input type="text" name="streetname" class="customtextbox"></td></tr>
			<tr><td>Huisnummer:</td> <td> <input type="text" name="number" class="customtextbox"></td></tr>
			<tr><td>Postcode:</td> <td> <input type="text" name="zipcode" class="customtextbox"></td></tr>
			<tr><td>Woonplaats:</td> <td> <input type="text" name="city" class="customtextbox"> *</td></tr>
			<tr><td>Land:</td> <td> <input type="text" name="country" class="customtextbox"> *</td></tr>
			<tr><td>Website:</td> <td> <input type="text" name="website" class="customtextbox"></td></tr>
			<tr><td>&nbsp;</td></tr>
			
			<tr><td>Schrijf hier over je ervaring:</td></tr>
			<tr><td colspan="2"><textarea name="story" class="customtextareastory"></textarea> *</td></tr>
			<tr><td colspan="2">Website(s): <input type="text" name="link" class="customtextboxwebsite"></td></tr>
			<tr><td>&nbsp;</td></tr>
			
			<!-- Er hoeft geen verblijfplaast ingvuld te worden, maar als je dat wel doet, dan moeten woonplaats en land verplicht zijn
			# Is het wel logisch om alleen een adres van de verblijfplaats in te vullen??-->
		
			<tr><td>Gegevens over de verblijf locatie:</td></tr>
			<tr><td>Straat:</td> <td> <input type="text" name="residence_streetname" class="customtextbox"></td></tr>
			<tr><td>Huisnummer:</td> <td> <input type="text" name="residence_number" class="customtextbox"></td></tr>
			<tr><td>Postcode:</td> <td> <input type="text" name="residence_zipcode" class="customtextbox"></td></tr>
			<tr><td>Woonplaats:</td> <td> <input type="text" name="residence_city" class="customtextbox"></td></tr>
			<tr><td>Land:</td> <td> <input type="text" name="residence_country" class="customtextbox"></td></tr>

			<tr><td><input type="submit" name="upload" value="Upload Story"></td></tr>
			
			</form
			
			<script type=\"text/javascript\">$('#upload-form').submit(function(event){
					event.preventDefault();
					$('input[name=\"usingAJAX\"]',this).val( 'true' );
					
					var form = $(this);
					var url = form.attr('action')
					var data = form.serialize();
					var callback = function(response){
						$('#content').html(response);
					};
					
					var dataType = 'html';
					
					$.post(url, data, callback, dataType)
					
					
					return false;
				});
			</script>
@stop