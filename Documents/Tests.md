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
Op de kaart staat een marker in Vaasa (Finland).

##Testcase 3.1: Data uit de database halen. (Repositories en Models)

**Test:**
Er wordt data uit de database gehaald.

**Stappen:**
1. Vul de database met het vulscript
2. Open de website.
3. Klik op Organizations
4. Klik willekeurig op de organisaties

**Verwacht resultaat:**
Controleer of de volgende records er staan:
1. Kraft Foods (Herentals, Belgium)
2. Weltec Centre for Smart Product (Wellington, New Zealand)
3. Copenhagen University of Engineering (Copenhagen, Denmark)
4. Novia University of Applied Sciences (Vaasa, Finland)
5. Universidad Politecnica de Valencia (Valencia, Spain)
6. Noorwegen, Buskerud University (Kongsberg, Norway)
7. Australian Centre for Field Robotics (Sydney, Australia)
8. Suralco LLC (Paramaribo, Suriname)

Bij klikken op een organisatie wordt de accordion uitgevouwen voor die organisatie. Als er een andere al open stond, wordt die tegelijk gesloten.

Als er op een organisatie is geklikt, zijn de volgende dingen te zien:
1. Type van de organisatie (Company of School)
2. Een omschrijving van de organisatie (Lorem Ipsum)
3. Een link (Learn more)

##Testcase 3.2: Data uit de database halen. (Repositories en Models)

**Test:**
Wordt data uit de database gehaald.

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op de marker met een '3' erin.

**Verwacht resultaat:**
Er wordt een lijst met de volgende 3 records getoont:
1. Kraft Foods (Herentals, Belgium)
2. Copenhagen University of Engineering (Copenhagen, Denmark)
3. Noorwegen, Buskerud University (Kongsberg, Norway)

##Testcase 4.1: Detail organization weergeven op de website (accordion)

**Test:**
Details van een organization worden weergegeven.

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op Organizations.
4. Klik op de eerste organisatie.
5. Klik op Learn more
6. 1. Klik op about
   2. Klik op Activities
   3. Klik op Experiences


**Verwacht resultaat:**
1. About:
Je komt op een pagina met informatie van de organization Kraft Foods. Gegevens:
  1. Herentals
  2. Belgium.
2. Activities:
Je komt op een pagina met een activity van de organisatie Kraft Foods. Gegevens:
  1. Final thesis Kraft Foods
  2. closed
  3. Industrial Engineering
  4. Start: 01-01-2012
  5. End: 01-01-2013
3. Experiances:
Je komt op een pagina met twee experiences van studenten over Kraft Foods. Gegevens:
  1. Donald Rutgers
  2. Jorick Dam

##Testcase 4.2: Detail organization weergeven op de website (marker)

**Test:**
Details van een organization worden weergegeven

**Stappen:**
1. Vul de database met het vulscript.
2. Open de website.
3. Klik op de marker die in Vaasa staat.

**Verwacht resultaat:**
1. About:
Je komt op een pagina met informatie van de organization Novia University of Applied Sciences. Gegevens:
  1. Vaasa
  2. Finland.
2. Activities:
Je komt op een pagina met een activity van de organisatie Novia University of Applied Sciences. Gegevens:
  1. EPS Novia University of Applied Sciences
  2. closed
  3. EPS
  3. Computer Sience
  4. Start: 01-01-2012
  5. End: 01-01-2013
3. Experiences:
Je komt op een pagina met de experience van een student over Novia University of Applied Sciences. Gegevens:
  1. Rudy Chambon

##Testcase 5.1: Auth check -- OUD

**Test:**
Kijken of de user herkend wordt

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Vul gebruiker id 1 in in de code

**Verwacht resultaat:**
Er word gezecht dat de user geen toegang heeft

##Testcase 5.2: Auth check  -- OUD

**Test:**
kijken de pagina en de crud werken

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Run vul en create script 3.3
3. Vul gebruiker id 1 in in de code en pagina ‘authtest’

**Verwacht resultaat:**
alles gaat goed en acces is granted

##Testcase 5.3: Auth check  -- OUD

**Test:**
kijken of datums werken

**Stappen:**
1. Open de website, ga naar /authtest.php
2. Pas in de database bij acces de date time stamps aan naar 2013
3. Vul gebruiker id 1 in in de code en pagina ‘authtest’

**Verwacht resultaat:**
hij geeft aan dat acces denied is

##Testcase 6.1: Upload story  -- OUD

**Test:**
Kijken of een story geüpload kan worden

**Stappen:**
1. Open de website, ga naar de pagina om een story te uploaden
2. Vul minstens alle verplichte velden in
3. Upload de story

**Verwacht resultaat:**
Alle ingevulde gegevens staan in de database

##Testcase 6.2: Upload story  -- OUD

**Test:**
Kijken of de gebruiker een melding krijgt

**Stappen:**
1. Open de website, ga naar de pagina om een story te uploaden
2. Vul niet alle verplichte velden in
3. Upload de story

**Verwacht resultaat:**
De gebruiker krijgt een melding dat niet alle verplichte velden zijn ingevuld

##Testcase 7.1: Inloggen  -- OUD

**Test:**
Kijken of het inloggen werkt

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen
2. Vul een juiste gebruikersnaam en wachtwoord in
3. Log in

**Verwacht resultaat:**
De gebruiker is ingelogd en in het menu staat de optie op een story te uploaden.

##Testcase 7.2: Inloggen  -- OUD

**Test:**
Kijken of het inloggen werkt met verkeerd wachtwoord en/of gebruikersnaam

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen
2. Vul verkeerde gebruikersnaam en/of verkeerde wachtwoord in
3. Log in

**Verwacht resultaat:**
De gebruiker krijgt een melding over verkeerde inloggegevens.

##Testcase 7.3: Inloggen  -- OUD

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
1. Vul de database met het vulscript.
2. In Europa staan 3 markers op elkaar.
  1. Kraft Foods (Herentals, Belgium)
  2. Copenhagen University of Engineering (Copenhagen, Denmark)
  3. Noorwegen, Buskerud University (Kongsberg, Norway)
3. Klik op de groep

**Verwacht resultaat:**
Het aantal op de groep komt overeen met het aantal stories in de lijst (accordion)

##Testcase 9: Zoek functionaliteit

**Test:**
Controleren of de zoekfunctie klopt

**Stappen:**
1. Vul de database met het vulscript.
2. Vul de volgende gegens in:  
Copenhagen  
City  
Type: Minor (rest niet)  
Year: 2015  
Study: Communication and Multimedia Designe
3. Het jaar en de study moeten een auto-aanvul suggestie krijgen. De zoekbalk moet een suggestie krijgen voor stad of land (gelijk aan de keuze)
4. Klik op Search

**Verwacht resultaat:**
Er staat 1 marker in Copenhagen. De rest van de markers zijn weg. 
Als je op reset klikt, moeten alle velden naar de stadaard gezet worden en alle markers moeten weer verschijnen.

##Testcase 10.1: Validatie Upload Activity (required fields)

**Test:**
Controleren of de required fields ingevuld moeten worden

**Stappen:**
1.	Open de site
2.	Klik op "Upload Activity"
3.	Vul helemaal niks in
4.	Klik op de groene knop - Upload Activity

**Verwacht resultaat:**
De pagina wordt opnieuw getoont met onder alle velden, behalve Study, Start date en End date, het bericht dat het een verplicht veld is.

##Testcase 10.2: Validatie Upload Activity (input type)

**Test:**
Controleren of de input type correct wordt gevalideerd

**Stappen:**
1.	Open de site
2.	Klik op "Upload Activity"
3.	Selecteer een Organization
4.	Selecteer een Type
5.	Vul een Name in
6.	Selecteer een Study
7.	Vul bij Start date iets in wat géén datum is
8.	Vul bij End date iets in wat géén datum is
9.	Selecteer een Status
10.	Vul een Description in
11.	Klik op de groene knop - Upload Activity

**Verwacht resultaat**
De pagina wordt getoont met onder de volgende velden het bijbehorende bericht:
1.	Start date:
	*	Start date should be a date
2.	End date:
	*	Start date should be a date

##Testcase 10.3: Validatie Upload Activity (Start date en End date)

**Test:**
Controleren of de End date een datum na de Start date moet zijn

**Stappen**
1.	Open de site
2.	Klik op "Upload Activity"
3.	Selecteer een Organization
4.	Selecteer een Type
5.	Vul een Name in
6.	Selecteer een Study
7.	Selecteer een Start date
8.	Selecteer een End date die een datum is vóór de Start date
9.	Selecteer een Status
10.	Vul een Description in
11.	Klik op de groene knop - Upload Activity

**Verwacht resultaat:**
De pagina wordt getoont met onder het End date veld het volgende bericht:
*	End date should be a date after the start date

##Testcase 10.4: Validatie Upload Acitvity (alles correct)

**Test:**
Controleren of data in de database komt te staan als alle velden correct zijn ingevuld

**Stappen:**
1.	Open de site
2.	Klik op "Upload Activity"
3.	Vul alle velden correct in
4.	Klik op de groene knop - Upload Activity
5.	Ga naar Organizations
6.	Klik op de Organization die je bij het upload hebt gekozen
7.	Klik op Learn more
8.	Klik op Activities
9.	Kijk of de net geüploade activity in de lijst staat

**Verwacht resultaat:**
De data wordt in de database opgeslagen en de nieuwe Activity is te vinden bij Organizations.

##Testcase 11.1: Validatie Upload Experience (required fields)

**Test:**
Controleren of de required fields ingevuld moeten worden

**Stappen:**
1.	Open de site
2.	Klik op "Upload Experience"
3.	Vul helemaal niks in
4.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder de velden Activity en Description komt een  bericht te staan dat het veld verplicht is.

##Testcase 11.2: Validate Upload Experience (input type numeric)

**Test:**
Controleren of de input type correct wordt gevalideerd

**Stappen:**
1.	Open de site
2.	Klik op "Upload Experience"
3.	Selecteer een activity
4.	Vul een description in
5.	Vul iets in (alles behalve alleen cijfers is goed)
6.	Selecteer een student
7.	Klik op de groene knop - Upload Experience

**Verwacht resultaat**
Onder het veld score komt een bericht dat het veld met enkel cijfers ingevuld mag worden.

##Testcase 11.3: Validatie Upload Experience (input value)

**Test:**
Controleren of de input van score bestaat uit cijfers van 1 tot 10

**Stappen**
1.	Open de site
2.	Klik op "Upload Experience"
3.	Selecteer een activity
4.	Vul een description in
5.	Vul een cijfer in (alles behalve de cijfers 1-10 mag)
6.	Selecteer een student
7.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder het veld score komt een bericht te staan dat het veld ingevuld moet worden met een cijfer tussen 1 en 10.

##Testcase 11.4: Validatie Upload Experience (alles correct)

**Test:**
Controleren of de data in de database wordt opgeslagen en alle velden correct zijn ingevuld

**Stappen:**
1.	Open de site
2.	Klik op "Upload Experience"
3.	Vul alle velden correct in
4.	Klik op de groene knop - Upload Experience
5.	Ga naar Organizations
6.	Klik op de Organization die je bij het upload hebt gekozen
7.	Klik op Learn more
8.	Klik op Experiences
9.	Kijk of de net geüploade experience in de lijst staat