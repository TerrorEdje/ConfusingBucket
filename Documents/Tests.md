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
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Upload"
7.	Vul helemaal niks in
8.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder de velden Activity en Description komt een  bericht te staan dat het veld verplicht is.

##Testcase 11.2: Validate Upload Experience (input type numeric)

**Test:**
Controleren of de input type correct wordt gevalideerd

**Stappen:**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Upload"
7.	Selecteer een activity
8.	Vul een description in
9.	Vul iets in (alles behalve alleen cijfers is goed)
10.	Selecteer een student
11.	Klik op de groene knop - Upload Experience

**Verwacht resultaat**
Onder het veld score komt een bericht dat het veld met enkel cijfers ingevuld mag worden.

##Testcase 11.3: Validatie Upload Experience (input value)

**Test:**
Controleren of de input van score bestaat uit cijfers van 1 tot 10

**Stappen**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Upload"
7.	Selecteer een activity
8.	Vul een description in
9.	Vul een cijfer in (alles behalve de cijfers 1-10 mag)
10.	Selecteer een student
11.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder het veld score komt een bericht te staan dat het veld ingevuld moet worden met een cijfer tussen 1 en 10.

##Testcase 11.4: Validatie Upload Experience (alles correct)

**Test:**
Controleren of de data in de database wordt opgeslagen en alle velden correct zijn ingevuld

**Stappen:**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Upload"
7.	Vul alle velden correct in
8.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
De data wordt in de database opgeslagen en de nieuwe Experience is te vinden bij Organizations.

##Testcase 12.1: Upload Organisatie
**Test:** Controleren of uploaden van een nieuwe organisatie werkt.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op organisatie.
2. Klik op de knop Upload.
3. Vul alle velden in.
4. Klik op Upload Organisatie.
5. Controlleer of de geüploade organisatie in de lijst van organisaties staat.

**Verwacht resultaat:** De geüploade organisatie staat in de lijst van organisaties met de opgegeven gegevens.

##Testcase 12.2: Validatie upload Organisatie
**Test:** Controleren of de validatie van het uploaden van een nieuwe organisatie werkt.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op organisatie.
2. Klik op de knop Upload.
3. Vul geen velden in.
4. Klik op Upload Organisatie.

**Verwacht resultaat:** Je komt op hetzelfde scherm terecht maar er staat bij de benodigde velden dat ze required zijn.

##Testcase 13.1: Update Organisatie
**Test:** Controleren of updaten van een nieuwe organisatie werkt.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op organisatie.
2. Klik op een organisatie en vervolgens op update.
3. Verander de description van de organisatie.
4. Klik op Update Organisatie.
5. Controlleer of de geüpdate organisatie in de lijst van organisaties staat.

**Verwacht resultaat:** De geüpdate organisatie staat in de lijst van organisaties met de nieuwe gegevens.

##Testcase 13.2: Validatie update Organisatie
**Test:** Controleren of de validatie van het uploaden van een nieuwe organisatie werkt.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op organisatie.
2. Klik op een organisatie en vervolgens op update.
3. Verwijder de description van de organisatie.
4. Klik op Update Organisatie.

**Verwacht resultaat:** Je komt op hetzelfde scherm terecht maar er staat bij de benodigde velden dat ze required zijn.

##Testcase 13.3: Organisatie CMS

**Test:**
Test of het organization CMS werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Organization"

**Verwacht resultaat:**
Je zult nu een scherm zien met organisaties, als je op een organisatie klikt dan zal je een update knop en beschrijving zien.

##Testcase 14.1: Inloggen

**Test:**
Zien of inloggen via google Oauth werkt. (Werkt alleen op de server)

**Stappen:**
1. Open de website, klik op login in het menu om in te loggen.
2. Kies een Google account op de verwijzingspagina.
3. Ga akkoord met de voorwaarden door op accepteren te drukken.

**Verwacht resultaat:**
Je wordt teruggestuurd naar de website van Confusing Bucket. Ben je een nieuwe gebruiker, dan wordt je in de tabel User in de database gezet, ben je een bestaande gebruiker dan wordt je bestaande data uit de user tabel gehaald.

##Testcase 14.2: Menu verandert na inloggen

**Test:**
Menu balk veranderd mee

**Stappen:**
1. Open de website, ga naar de pagina om in te loggen.
2. Log correct in. (Zie testcase 9)

**Verwacht resultaat:**
In de menu balk staat nu een logout link in plaats van een login link.

##Testcase 14.3: Uitloggen

**Test:**
Test of uitloggen werkt.

**Stappen:**
1. Login op de website. (Zie testcase 9)
2. Druk op de logout link in het menu.

**Verwacht resultaat:**
In de menu balk staat nu een login link in plaats van een logout link. En de sessie is verdwenen. (Dit is te zien door het niet kunnen uploaden van een experience of activity).

##Testcase 15.1: Activity update
**Test:** Controleren of updaten van een nieuwe organisatie werkt.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op activity.
2. Klik op een organisatie.
3. Kies een activity en klik daaronder op update.
4. Verander de description van de activity.
5. Klik op Update Activity.
6. Controlleer of de geüpdate velden met de nieuwe waarde in de database staat.

**Verwacht resultaat:** De activity heeft nu andere gegevens.

##Testcase 15.2: Activity update validatie 
**Test:** Controleren of de validatie werkt bij het updaten van een activity.

**Stappen:**
1. Open de website. Ga naar CMS en klik daar op activity.
2. Klik op een organisatie.
3. Kies een activity en klik daaronder op update.
4. Verwijder de description van de activity.
5. Klik op Update Organisatie.

**Verwacht resultaat:** Je komt op hetzelfde scherm terecht maar er staat bij de benodigde velden een error weergeven.

##Testcase 15.3: Activity CMS
**Test:** Controleren of het activity CMS werkt.

**Stappen:**
1. Open de website. 
2. Klik onder het kopje van CMS op "Activity".

**Verwacht resultaat:** Je zult nu een scherm zien met activities, als je op een activity klikt dan zal je gegevens en een update knop zien.

##Testcase 16.1: School Upload validatie

**Test:**
Test of de validatie van upload school werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "School"
3. Klik op "Upload"
4. Voer hier helemaal NIKS in
5. Klik op "Upload School"

**Verwacht resultaat:**
Je zult op de pagina blijven, maar onder de textvelden staan errors weergeven.

##Testcase 16.2: School upload

**Test:**
Test of het uploaden van een school werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "School"
3. Klik op "Upload"
4. Voer een naam en een website in.
5. Klik op "Upload School"

**Verwacht resultaat:**
Je zult nu een bericht krijgen dat de school is geüpload.

##Testcase 16.3: School CMS

**Test:**
Test of het school CMS werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "School"

**Verwacht resultaat:**
Je zult nu een scherm zien met scholen, als je op een school klikt dan zal je een update knop en website zien.

##Testcase 16.4: School update validatie

**Test:**
Test of de validatie van update school werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "School"
3. Klik op een school en daarna update
4. Voer hier helemaal NIKS in
5. Klik op "Update School"

**Verwacht resultaat:**
Je zult op de pagina blijven, maar onder de textvelden staan errors weergeven.

##Testcase 16.5: School update

**Test:**
Test of het updaten van een school werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "School"
3. Klik op een school en daarna update
4. Voer een naam en een website in.
5. Klik op "Update School"

**Verwacht resultaat:**
Je zult nu een bericht krijgen dat de school is geupdate.

##Testcase 17.1: Study Upload validatie

**Test:**
Test of de validatie van upload study werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Study"
3. Klik op "Upload"
4. Voer hier helemaal NIKS in
5. Klik op "Upload Study"

**Verwacht resultaat:**
Je zult op de pagina blijven, maar onder de textvelden staan errors weergeven.

##Testcase 17.2: Study Upload

**Test:**
Test of het uploaden van een study werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Study"
3. Klik op "Upload"
4. Voer een naam en selecteer een school in.
5. Klik op "Upload Study"

**Verwacht resultaat:**
Je zult nu een bericht krijgen dat de study is geüpload.

##Testcase 17.3: Study CMS

**Test:**
Test of het study CMS werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Study"

**Verwacht resultaat:**
Je zult nu een scherm zien met scholen, als je op een school klikt dan zal je bijbehorende studies zien met een update knop.

##Testcase 17.4: Study update validatie

**Test:**
Test of de validatie van update study werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Study"
3. Klik op een school, en kies daarna update bij een study
4. Voer hier helemaal NIKS in
5. Klik op "Update Study"

**Verwacht resultaat:**
Je zult op de pagina blijven, maar onder de textvelden staan errors weergeven.

##Testcase 17.5: Study update

**Test:**
Test of het updaten van een study werkt.

**Stappen:**
1. Open de website
2. Klik in het menu kopje CMS op "Study"
3. Klik op een school, en kies daarna update bij een study
4. Voer een naam en selecteer een school in.
5. Klik op "Update Study"

**Verwacht resultaat:**
Je zult nu een bericht krijgen dat de study is geupdate.
##Testcase 18.1: Validatie Update Experience (required fields)

**Test:**
Controleren of de required fields ingevuld moeten worden

**Stappen:**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Update" bij een experience
7.	Maak alle velden leeg (in zoverre het mogelijk is)
8.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder het veld Description komt een bericht te staan dat het veld verplicht is.

##Testcase 18.2: Validate Update Experience (input type numeric)

**Test:**
Controleren of de input type correct wordt gevalideerd

**Stappen:**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Update" bij een experience
7.	Pas de description aan
8.	Vul iets in bij score (alles behalve alleen cijfers is goed)
9.	Selecteer een student
10.	Klik op de groene knop - Upload Experience

**Verwacht resultaat**
Onder het veld score komt een bericht dat het veld met enkel cijfers ingevuld mag worden.

##Testcase 18.3: Validatie Update Experience (input value)

**Test:**
Controleren of de input van score bestaat uit cijfers van 1 tot 10

**Stappen**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Update" bij een experience
7.	Pas de description aan
8.	Vul een cijfer in bij score (alles behalve de cijfers 1-10 mag)
9.	Selecteer een student
10.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
Onder het veld score komt een bericht te staan dat het veld ingevuld moet worden met een cijfer tussen 1 en 10.

##Testcase 18.4: Validatie Update Experience (alles correct)

**Test:**
Controleren of de data in de database wordt opgeslagen en alle velden correct zijn ingevuld

**Stappen:**
1.	Open de site
2.	Klik op cms
3. 	Kies experience
4.	Selecteer een organisatie
5.	Klik op Learn more
6.	Klik bij het tabje Experiences op "Update" bij een experience
7.	Vul alle velden correct in
8.	Klik op de groene knop - Upload Experience

**Verwacht resultaat:**
De gewijzigde data wordt in de database opgeslagen en de gewijzigde Experience is te vinden bij Organizations.
