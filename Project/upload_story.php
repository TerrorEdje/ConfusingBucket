<?php
	session_start();

	include_once 'db/connection.php';
	include_once 'repositories/typeRepository.php';
	include_once 'repositories/organizationRepository.php';
	include_once 'repositories/locationRepository.php';
	include_once 'repositories/storyRepository.php';
	?>

	<script>   
		$(function() {
			$( "#calendar" ).datepicker();
			$( "#calendar2" ).datepicker();   
		}); 
	</script>
	
	<?php
	$connection = openDB();
	
	if(isset($_SESSION["id"]))
	{
		include_once 'auth/check.php';

		$check = new Check();
		$error = $check->checkView($_SESSION["id"], 'upload_story');

		if($error['bool'] == 'true')
		{
		
			$types = getAllType($connection);
			
			# Moet een student ook zijn/haar gegevens (zoals naam, opleiding, leerjaar, school) invullen of gaat dat met inloggen?

				echo '<form id="upload-form" action="addStory.php" method="POST">'; 
				echo '<input type="hidden" name="usingAJAX" value="false" />';
				
				echo '<p>';
				echo '* Verplicht veld';
				echo '</p>';
			echo '<table class="uploadTable">';
			echo '<tr><td>Type:</td> <td><select name="type">';
				foreach ($types as $type) {
					echo '<option value ="' .$type->_get("id"). '">' .$type->_get("name"). '</option>';
				}
			echo '</select> *</td></tr>';
			echo '<tr><td>Begindatum:</td> <td> <input type="text" id="calendar" name="startdate" class="customtextbox"> *</td></tr>'; # Moet datepicker worden
			echo '<tr><td>Einddatum:</td> <td> <input type="text" id="calendar" name="enddate" class="customtextbox"> *</td></tr>'; # Moet datepicker worden
			echo '<tr><td>&nbsp;</td></tr>';
			echo '<tr><td>Gegevens over de organisatie:</td></tr>';
			echo '<tr><td>Naam:</td> <td> <input type="text" name="name" class="customtextbox"> *</td></tr>';
			echo '<tr><td>Omschrijving:</td> <td> <textarea name="description" class="customtextareadescription"></textarea></td></tr>';
			echo '<tr><td>Straat:</td> <td> <input type="text" name="streetname" class="customtextbox"></td></tr>';
			echo '<tr><td>Huisnummer:</td> <td> <input type="text" name="number" class="customtextbox"></td></tr>';
			echo '<tr><td>Postcode:</td> <td> <input type="text" name="zipcode" class="customtextbox"></td></tr>';
			echo '<tr><td>Woonplaats:</td> <td> <input type="text" name="city" class="customtextbox"> *</td></tr>';
			echo '<tr><td>Land:</td> <td> <input type="text" name="country" class="customtextbox"> *</td></tr>';
			echo '<tr><td>Website:</td> <td> <input type="text" name="website" class="customtextbox"></td></tr>';
			echo '<tr><td>&nbsp;</td></tr>';
			
			echo '<tr><td>Schrijf hier over je ervaring:</td></tr>';
			echo '<tr><td colspan="2"><textarea name="story" class="customtextareastory"></textarea> *</td></tr>';
			echo '<tr><td colspan="2">Website(s): <input type="text" name="link" class="customtextboxwebsite"></td></tr>'; # Er moeten meerdere links ingevuld kunnen worden
			echo '<tr><td>&nbsp;</td></tr>';
			
			# Er hoeft geen verblijfplaast ingvuld te worden, maar als je dat wel doet, dan moeten woonplaats en land verplicht zijn
			# Is het wel logisch om alleen een adres van de verblijfplaats in te vullen??
		
			echo '<tr><td>Gegevens over de verblijf locatie:</td></tr>';
			echo '<tr><td>Straat:</td> <td> <input type="text" name="residence_streetname" class="customtextbox"></td></tr>';
			echo '<tr><td>Huisnummer:</td> <td> <input type="text" name="residence_number" class="customtextbox"></td></tr>';
			echo '<tr><td>Postcode:</td> <td> <input type="text" name="residence_zipcode" class="customtextbox"></td></tr>';
			echo '<tr><td>Woonplaats:</td> <td> <input type="text" name="residence_city" class="customtextbox"></td></tr>';
			echo '<tr><td>Land:</td> <td> <input type="text" name="residence_country" class="customtextbox"></td></tr>';

			echo '<tr><td><input type="submit" name="upload" value="Upload story"></td></tr>';
			
			echo '</form>';
			
			echo "<script type=\"text/javascript\">$('#upload-form').submit(function(event){
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
				</script>";
			
		}
		else
		{
			echo("Access for this page is denied.");
		}
	}
	else
	{
		echo("Access for this page is denied, you are not logged in yet!");
	}

?>