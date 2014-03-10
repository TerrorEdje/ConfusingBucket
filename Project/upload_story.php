<?php
	
	include 'db/connection.php';
	include 'repositories/typeRepository.php';
	include 'repositories/organizationRepository.php';
	include 'repositories/locationRepository.php';
	include 'repositories/storyRepository.php';
	
	$connection = openDB();
	
	$types = getAllType($connection);
	
	# Moet een student ook zijn/haar gegevens (zoals naam, opleiding, leerjaar, school) invullen of gaat dat met inloggen?

		echo '<form id="upload-form" action="addStory.php" method="POST">'; 
        echo '<input type="hidden" name="usingAJAX" value="false" />';
		
		echo '<p>';
		echo '* Verplicht veld';
		echo '</p>';

		echo '<p>';
		echo 'Type: <select name="type">';
			foreach ($types as $type) {
				echo '<option value ="' .$type->_get("id"). '">' .$type->_get("name"). '</option>';
			}
		echo '</select> *';
		echo 'Begindatum: <input type="text" name="startdate"> *'; # Moet datepicker worden
		echo 'Einddatum: <input type="text" name="enddate"> *'; # Moet datepicker worden
		echo '</p>';
		
		echo '<p>';
		echo 'Gegevens over de organisatie:<br>';
		echo 'Naam: <input type="text" name="name"> *<br>';
		echo 'Omschrijving: <textarea name="description" ></textarea><br>';
		echo 'Straat: <input type="text" name="streetname">';
		echo 'Huisnummer: <input type="text" name="number"><br>';
		echo 'Postcode: <input type="text" name="zipcode">';
		echo 'Woonplaats: <input type="text" name="city"> *<br>';
		echo 'Land: <input type="text" name="country"> *<br>';
		echo 'Website: <input type="text" name="website">';
		echo '</p>';
		
		echo '<p>';
		echo 'Schrijf hier over je ervaring:<br>';
		echo '<textarea name="story" rows="10" cols="80"></textarea> *<br>';
		echo 'Website(s): <input type="text" name="link"><br>'; # Er moeten meerdere links ingevuld kunnen worden
		echo '</p>';
		
		# Er hoeft geen verblijfplaast ingvuld te worden, maar als je dat wel doet, dan moeten woonplaats en land verplicht zijn
		# Is het wel logisch om alleen een adres van de verblijfplaats in te vullen??
		echo '<p>';
		echo 'Gegevens over de verblijf locatie:<br>';
		echo 'Straat: <input type="text" name="residence_streetname">';
		echo 'Huisnummer: <input type="text" name="residence_number"><br>';
		echo 'Postcode: <input type="text" name="residence_zipcode">';
		echo 'Woonplaats: <input type="text" name="residence_city"><br>';
		echo 'Land: <input type="text" name="residence_country"><br>';
		echo '</p>';
		
		echo '<p>';
		echo '<input type="submit" name="upload" value="Upload story">';
		echo '</p>';	
		
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

?>