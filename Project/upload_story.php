<?php

	# Moet een student ook zijn/haar gegevens (zoals naam, opleiding, leerjaar, school) invullen of gaat dat met inloggen?

	if (!isset($_POST['upload'])) {
		echo '<form action="upload_story.php" method="POST">'; 
		
		echo '<p>';
		echo '* Verplicht veld';
		echo '</p>';

		echo '<p>';
		echo 'Type: <input type="text" name="type"> *'; # Misschien selectbox als je maar uit een aantal kan kiezen
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
		echo 'Straat: <input type="text" name="recidence_streetname">';
		echo 'Huisnummer: <input type="text" name="recidence_number"><br>';
		echo 'Postcode: <input type="text" name="recidence_zipcode">';
		echo 'Woonplaats: <input type="text" name="recidence_city"><br>';
		echo 'Land: <input type="text" name="recidence_country"><br>';
		echo '</p>';
		
		echo '<p>';
		echo '<input type="submit" name="upload" value="Upload story">';
		echo '</p>';	
		
		echo '</form>';
	}
	else {
		echo '<p>';
		echo 'Story is geüpload';
		echo '</p>';
		
		echo '<p>';
		echo "Type: " .$_POST["type"]. "<br>";
		echo "Begindatum: " .$_POST["startdate"]. "<br>";
		echo "Einddatum: " .$_POST["enddate"]. "<br>";
                
		echo "Naam: " .$_POST["name"]. "<br>";
		echo "Omschrijving: " .$_POST["description"]. "<br>";
		echo "Straat: " .$_POST["streetname"]. "<br>";
		echo "Huisnummer: " .$_POST["number"]. "<br>";
		echo "Postcode: " .$_POST["zipcode"]. "<br>";
		echo "Woonplaats: " .$_POST["city"]. "<br>";
		echo "Land: " .$_POST["country"]. "<br>";
		echo "Website: " .$_POST["website"]. "<br>";
                
		echo "Story: " .$_POST["story"]. "<br>";
		echo "Link: " .$_POST["link"]. "<br>";
                
		echo "Straat: " .$_POST["recidence_streetname"]. "<br>";
		echo "Huisnummer: " .$_POST["recidence_number"]. "<br>";
		echo "Postcode: " .$_POST["recidence_zipcode"]. "<br>";
		echo "Woonplaats: " .$_POST["recidence_city"]. "<br>";
		echo "Land: " .$_POST["recidence_country"];
		echo '</p>';	
	}

?>