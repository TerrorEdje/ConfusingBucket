#Tests

#Template
##Testcase :

**Test:**

**Stappen:**

**Verwacht resultaat:**

##Testcase 1: Google maps API

**Test:**
Werkt de map

**Stappen:**
1. Open de website.

**Verwacht resultaat:**
De kaart moet in het browser venster verschijnen

##Testcase 2: Google maps API Markers

**Test:**
Werkt het uitlezen van de markers uit de database.

**Stappen:**
1. Vul de database met het vulscript
2. Open de website.

**Verwacht resultaat:**
Op de kaart staat een marker in Izmir (Turkije).

##Testcase 3.1: Data uit de database halen. (Repositories en Models)

**Test:**
Er wordt data uit de database gehaald.

**Stappen:**
1. Vul de database met het vulscript
2. Open de website.
3. Klik op Stories

**Verwacht resultaat:**
Controleer of de volgende record er staat: Afstudeerstage, Norway, Oslo, 2014-03-02, 2014-03-08, Robin Collard.

##Testcase 3.2: Data uit de database halen. (Repositories en Models)

**Test:**
Wordt data uit de database gehaald.

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op een marker met meer dan 1 story.

**Verwacht resultaat:**
Er wordt een tabel getoont met meerdere stories.

##Testcase 4.1: Detail story weergeven op de website (tabel)

**Test:**
Details van een story worden weergegeven.

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op Stories.
4. Klik op details bij 1 van de stories.

**Verwacht resultaat:**
Je komt op een pagina met de details van desbetreffende story.

##Testcase 4.2: Detail story weergeven op de website (marker)

**Test:**
Details van een story worden weergegeven

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op een marker met maar 1 story.

**Verwacht resultaat:**
Je komt op een pagina met de details van desbetreffende story.

##Testcase 5.1: Auth check

**Test:**
Kijken of de user herkend wordt

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Vul gebruiker id 1 in in de code

**Verwacht resultaat:**
Er word gezecht dat de user geen toegang heeft

##Testcase 5.2: Auth check

**Test:**
kijken de pagina en de crud werken

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Run vul en create script 3.3
3. Vul gebruiker id 1 in in de code en pagina ‘authtest’

**Verwacht resultaat:**
alles gaat goed en acces is granted

##Testcase 5.3: Auth check

**Test:**
kijken of datums werken

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Pas in de database bij acces de date time stamps aan naar 2013
3. Vul gebruiker id 1 in in de code en pagina ‘authtest’

**Verwacht resultaat:**
hij geeft aan dat acces denied is

##Testcase 6.1: Upload story

**Test:**
Kijken of een story geüpload kan worden

**Stappen:**
1. Open de website, ga naar de pagina om een story te uploaden
2. Vul minstens alle verplichte velden in
3. Upload de story

**Verwacht resultaat:**
Alle ingevulde gegevens staan in de database

##Testcase 6.2: Upload story

**Test:**
Kijken of de gebruiker een melding krijgt

**Stappen:**
1. Open de website, ga naar de pagina om een story te uploaden
2. Vul niet alle verplichte velden in
3. Upload de story

**Verwacht resultaat:**
De gebruiker krijgt een melding dat niet alle verplichte velden zijn ingevuld

##Testcase 7.1: Inloggen

**Test:**
Kijken of het inloggen werkt

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen
2. Vul een juiste gebruikersnaam en wachtwoord in
3. Log in

**Verwacht resultaat:**
De gebruiker is ingelogd en in het menu staat de optie op een story te uploaden.

##Testcase 7.2: Inloggen

**Test:**
Kijken of het inloggen werkt met verkeerd wachtwoord en/of gebruikersnaam

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen
2. Vul verkeerde gebruikersnaam en/of verkeerde wachtwoord in
3. Log in

**Verwacht resultaat:**
De gebruiker krijgt een melding over verkeerde inloggegevens.

##Testcase 7.3: Inloggen

**Test:**
Menu balk veranderd mee

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen
2. Log correct in

**Verwacht resultaat:**
Er staat een logout knop, en uploaden van user story

##Testcase 8: Markers groeperen

**Test:**
Kijken of de markers groeperen

**Stappen:**
1. Open de website, ga naar de kaart
2. Zoom uit tot er een groep ontstaat
3. Klik om de groep

**Verwacht resultaat:**
Het aantal op de groep komt overeen met het aantal stories in de lijst