#Coding guidelines Confusing Bucket

##1. Mappen en bestanden

####1.1 Mappenstructuur

Omdat we werken met het Laravel framework, werken we met het design pattern MVC. Dit houdt in dat we een map hebben voor controllers, een map voor models en een map voor views. Bestanden dienen dan ook op de juiste locatie opgeslagen te worden. Overige bestanden zoals JavaScript en Bootstrap bestanden horen in de 'assets' map.

##2. Commentaar

####2.1 Taal

Elk commentaar is in het Engels, de code is immers ook Engels.

####2.2 Doel commentaar

Elk onderdeel van de code met een apparte functie dient voorzien te worden van een regel commentaar met daarin het doel van de regels code.

####2.3 Complexe code

Code die niet voor elk groepslid makkelijk te begrijpen is moet voorzien worden van commentaar met uitleg wat de regels code precies doen.

##3. Coding stijl

####3.1 Algemene regels

- Curly brackets staan op de volgende regel (volgende regel inspringen):
```.php
if(conditie)
{
	regels met code
}
```
- Namen van klassen beginnen met een hoofdletter.
- Uit namen van variabalen is ongeveer op te maken wat de variabele is.
