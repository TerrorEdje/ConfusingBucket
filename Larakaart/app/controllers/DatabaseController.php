<?php

class DatabaseController extends BaseController {

	public function vullenNieuw()
	{
        $L0019 = new Location;
		$L0019->country="France";
		$L0019->city="Tarbes Cedex";
		$L0019->streetname="avenue d'Azereix";
		$L0019->number="47";
		$L0019->zipcode="65016";
		$L0019->latitude= -22.2075244;
		$L0019->longitude= -49.6477946;
		$L0019->save();
		
		$L0019O = new Organization;
		$L0019O->name="Ecole Nationale d'Ingénieurs de Tarbes";
		$L0019O->type="School";
		$L0019O->description="Ecole Nationale d'Ingénieurs de Tarbes";
		$L0019O->status="Approved";
		$L0019O->location_id = $L0019->id;
		$L0019O->save();
        
		$L0011 = new Location;
		$L0011->country="Finland";
		$L0011->city="Sein&auml;joki";
		$L0011->streetname="Keskuskatu";
		$L0011->number="34";
		$L0011->zipcode="60101";
		$L0011->latitude= 61.92411;
		$L0011->longitude= 25.748151;
		$L0011->save();
		
		$L0011O = new Organization;
		$L0011O->name="Sein&auml;joen Ammattikorkeakoulu (Sein&auml;joki University of Applied Sciences)";
		$L0011O->type="School";
		$L0011O->description="Sein&auml;joen Ammattikorkeakoulu (Sein&auml;joki University of Applied Sciences)";
		$L0011O->status="Approved";
		$L0011O->location_id = $L0011->id;
		$L0011O->save();
		
        $L0020 = new Location;
		$L0020->country="France";
		$L0020->city="Nantes Cedex";
		$L0020->streetname="Rue du Maréchal Joffre";
		$L0020->number="3";
		$L0020->zipcode="34103";
		$L0020->latitude= -22.2075244;
		$L0020->longitude= -49.6477947;
		$L0020->save();
		
		$L0020O = new Organization;
		$L0020O->name="Institute Universitaire de Technolgie";
		$L0020O->type="School";
		$L0020O->description="Institute Universitaire de Technolgie";
		$L0020O->status="Approved";
		$L0020O->location_id = $L0020->id;
		$L0020O->save();
        
        $L0021 = new Location;
		$L0021->country="France";
		$L0021->city="Nantes Cedex";
		$L0021->streetname="Rue du Maréchal Joffre";
		$L0021->number="3";
		$L0021->zipcode="34103";
		$L0021->latitude= -22.2075244;
		$L0021->longitude= -49.6477948;
		$L0021->save();
		
		$L0021O = new Organization;
		$L0021O->name="IUT de Saint- Nazaire Institut Universitaire de Technologie";
		$L0021O->type="School";
		$L0021O->description="IUT de Saint- Nazaire Institut Universitaire de Technologie";
		$L0021O->status="Approved";
		$L0021O->location_id = $L0021->id;
		$L0021O->save();
        
        $L0022 = new Location;
		$L0022->country="France";
		$L0022->city="LA ROCHELLE CEDEX";
		$L0022->streetname="Avenue Albert Einstein";
		$L0022->number="23";
		$L0022->zipcode="17071";
		$L0022->latitude= 55.6617719;
		$L0022->longitude= 11.6216066;
		$L0022->save();
		
		$L0022O = new Organization;
		$L0022O->name="Université La Rochelle";
		$L0022O->type="School";
		$L0022O->description="Université La Rochelle";
		$L0022O->status="Approved";
		$L0022O->location_id = $L0022->id;
		$L0022O->save();
        
        $L0023 = new Location;
		$L0023->country="France";
		$L0023->city="Le Mans cedex";
		$L0023->streetname="Ave Olivier Messiaen";
		$L0023->zipcode="72085";
		$L0023->latitude= 48.016925;
		$L0023->longitude= 0.159578;
		$L0023->save();
		
		$L0023O = new Organization;
		$L0023O->name="IIUT GEA Le Mans";
		$L0023O->type="School";
		$L0023O->description="IIUT GEA Le Mans";
		$L0023O->status="Approved";
		$L0023O->location_id = $L0023->id;
		$L0023O->save();
        
        $L0024 = new Location;
		$L0024->country="Germany";
		$L0024->city="Eggenstein-Leopoldshafen";
		$L0024->streetname="Hermann-von-Helmholz-Platz";
		$L0024->number="1";
		$L0024->zipcode="76344";
		$L0024->latitude= 49.091741;
		$L0024->longitude= 8.4283849;
		$L0024->save();
        
		$L0024O = new Organization;
		$L0024O->name="Karlruher Institut für Technologie";
		$L0024O->type="School";
		$L0024O->description="Karlruher Institut für Technologie";
		$L0024O->status="Approved";
		$L0024O->location_id = $L0024->id;
		$L0024O->save();
        
        $L0025 = new Location;
		$L0025->country="Germany";
		$L0025->city="Berlin";
		$L0025->streetname="Luxemburger Straße";
		$L0025->number="10";
		$L0025->zipcode="13353";
		$L0025->latitude= 52.5411171;
		$L0025->longitude= 13.3509304;
		$L0025->save();
		
		$L0025O = new Organization;
		$L0025O->name="Beuth Hochschule für technik Berlin";
		$L0025O->type="School";
		$L0025O->description="Beuth Hochschule für technik Berlin";
		$L0025O->status="Approved";
		$L0025O->location_id = $L0025->id;
		$L0025O->save();
        
        $L0026 = new Location;
		$L0026->country="Germany";
		$L0026->city="Hamburn";
		$L0026->streetname="Berliner Tor";
		$L0026->number="5";
		$L0026->zipcode="20099";
		$L0026->latitude= 53.557079;
		$L0026->longitude= 10.023018;
		$L0026->save();
        
		$L0026O = new Organization;
		$L0026O->name="Hochschule für Angewandte Wissenschaften Hamburg";
		$L0026O->type="School";
		$L0026O->description="Hochschule für Angewandte Wissenschaften Hamburg";
		$L0026O->status="Approved";
		$L0026O->location_id = $L0026->id;
		$L0026O->save();
        
        $L0027 = new Location;
		$L0027->country="Germany";
		$L0027->city="Trier";
		$L0027->streetname="Schneiderhof";
		$L0027->number="1";
		$L0027->zipcode="54293";
		$L0027->latitude= 49.795724;
		$L0027->longitude= 6.6790269;
		$L0027->save();
		
		$L0027O = new Organization;
		$L0027O->name="Fachhochschule Trier";
		$L0027O->type="School";
		$L0027O->description="Fachhochschule Trier";
		$L0027O->status="Approved";
		$L0027O->location_id = $L0027->id;
		$L0027O->save();
        
		$L0028 = new Location;
		$L0028->country="Germany";
		$L0028->city="Fulda";
		$L0028->streetname="Marquardstrasse";
		$L0028->number="35";
		$L0028->zipcode="36039";
		$L0028->latitude= 50.5640812;
		$L0028->longitude= 9.6855138;
		$L0028->save();
		
		$L0028O = new Organization;
		$L0028O->name="Hochschule Fulda";
		$L0028O->type="School";
		$L0028O->description="Hochschule Fulda";
		$L0028O->status="Approved";
		$L0028O->location_id = $L0028->id;
		$L0028O->save();

		$L0029 = new Location;
		$L0029->country="Germany";
		$L0029->city="Kiel";
		$L0029->streetname="Grenzstraße";
		$L0029->number="5";
		$L0029->zipcode="24149";
		$L0029->latitude= 50.5640812;
		$L0029->longitude= 9.6855139;
		
		$L0029->save();
		
		$L0029O = new Organization;
		$L0029O->name="Kiel University of Applied Sciences";
		$L0029O->type="School";
		$L0029O->description="Kiel University of Applied Sciences";
		$L0029O->status="Approved";
		$L0029O->location_id = $L0029->id;
		$L0029O->save();

		$L0030 = new Location;
		$L0030->country="Germany";
		$L0030->city="Erfurt";
		$L0030->streetname="Altonaerstrasse";
		$L0030->number="25";
		$L0030->zipcode="99085";
		$L0030->latitude= 51.165691;
		$L0030->longitude= 10.451526;
		$L0030->save();
		
		$L0030O = new Organization;
		$L0030O->name="Fachhochschule Erfurt";
		$L0030O->type="School";
		$L0030O->description="Fachhochschule Erfurt";
		$L0030O->website="www.fh-erfurt.de";
		$L0030O->status="Approved";
		$L0030O->location_id = $L0030->id;
		$L0030O->save();

		$L0031 = new Location;
		$L0031->country="Germany";
		$L0031->city="Hamburg";
		$L0031->streetname="Stiftstrasse";
		$L0031->number="69";
		$L0031->zipcode="20099";
		$L0031->latitude= 53.5580847;
		$L0031->longitude= 10.0119789;
		$L0031->save();
		
		$L0031O = new Organization;
		$L0031O->name="Hochschule Fur Agewandte Wissenschaften";
		$L0031O->type="School";
		$L0031O->description="Hochschule Fur Agewandte Wissenschaften";
		$L0031O->status="Approved";
		$L0031O->location_id = $L0031->id;
		$L0031O->save();

		$L0032 = new Location;
		$L0032->country="Germany";
		$L0032->city="Konstanz";
		$L0032->streetname="Brauneggerstrasse";
		$L0032->number="55";
		$L0032->zipcode="D-78462";
		$L0032->latitude= 47.6610948;
		$L0032->longitude= 9.1764916;
		$L0032->save();
		
		$L0032O = new Organization;
		$L0032O->name="Fachhochschule Konstanz";
		$L0032O->type="School";
		$L0032O->description="Fachhochschule Konstanz";
		$L0032O->status="Approved";
		$L0032O->location_id = $L0032->id;
		$L0032O->save();

		$L0033 = new Location;
		$L0033->country="Germany";
		$L0033->city="Krefeld";
		$L0033->streetname="Reinarzstrasse";
		$L0033->number="49";
		$L0033->zipcode="D-47805";
		$L0033->latitude= 51.31681;
		$L0033->longitude= 6.5712;
		$L0033->save();
		
		$L0033O = new Organization;
		$L0033O->name="Fachhochschule Niederrhein";
		$L0033O->type="School";
		$L0033O->description="Fachhochschule Niederrhein";
		$L0033O->status="Approved";
		$L0033O->location_id = $L0033->id;
		$L0033O->save();

		$L0034 = new Location;
		$L0034->country="Germany";
		$L0034->city="Kiel";
		$L0034->streetname="Grentzstrasse";
		$L0034->number="3";
		$L0034->zipcode="D-24149";
		$L0034->latitude= 54.3299746;
		$L0034->longitude= 10.1790644;
		$L0034->save();
		
		$L0034O = new Organization;
		$L0034O->name="Faculty of Mechanical Engineering";
		$L0034O->type="School";
		$L0034O->description="Faculty of Mechanical Engineering";
		$L0034O->website="www.fh-kiel.de";
		$L0034O->status="Approved";
		$L0034O->location_id = $L0034->id;
		$L0034O->save();

		$L0035 = new Location;
		$L0035->country="Germany";
		$L0035->city="Heilbronn";
		$L0035->streetname="Max-Planck-Strasse";
		$L0035->number="39";
		$L0035->zipcode="D-74081";
		$L0035->latitude= 49.12194;
		$L0035->longitude= 9.21092;
		$L0035->save();
		
		$L0035O = new Organization;
		$L0035O->name="Hochschule Heilbronn";
		$L0035O->type="School";
		$L0035O->description="Hochschule Heilbronn";
		$L0035O->status="Approved";
		$L0035O->location_id = $L0035->id;
		$L0035O->save();

		$L0036 = new Location;
		$L0036->country="Germany";
		$L0036->city="Krefeld";
		$L0036->streetname="Reinartzstrasse";
		$L0036->number="49";
		$L0036->zipcode="47805";
		$L0036->latitude= 51.31681;
		$L0036->longitude= 6.5712;
		$L0036->save();
		
		$L0036O = new Organization;
		$L0036O->name="Hochschule Niederrhein";
		$L0036O->type="School";
		$L0036O->description="Hochschule Niederrhein";
		$L0036O->status="Approved";
		$L0036O->location_id = $L0036->id;
		$L0036O->save();
		
		
		
		
		
		
		
		$L0046 = new Location;
		$L0046->country="Polan";
		$L0046->city="Lodz";
		$L0046->streetname="Skorupki";
		$L0046->number="68";
		$L0046->zipcode="90-924";
		$L0046->latitude=51.7486936;
		$L0046->longitude=19.4554181;
		$L0046->save();
		
		$L0046O = new Organization;
		$L0046O->name="Technical University of Lodz";
		$L0046O->type="School";
		$L0046O->description="Technical University of Lodz";
		$L0046O->status="Approved";
		$L0046O->location_id = $L0046->id;
		$L0046O->save();
		
		$L0047 = new Location;
		$L0047->country="Portugal";
		$L0047->city="Lisboa";
		$L0047->streetname="Campus de Benfica do IPL";
		$L0047->number="1";
		$L0047->zipcode="1549-014";
		$L0047->latitude=38.7222524;
		$L0047->longitude=-9.1393366;
		$L0047->save();
		
		$L0047O = new Organization;
		$L0047O->name="Instituto Politécnico de Lisboa. Escola Superior de Comunicao Social";
		$L0047O->type="School";
		$L0047O->description="Instituto Politécnico de Lisboa. Escola Superior de Comunicao Social";
		$L0047O->status="Approved";
		$L0047O->location_id = $L0047->id;
		$L0047O->save();
		
		$L0048 = new Location;
		$L0048->country="Portugal";
		$L0048->city="Porto";
		$L0048->streetname="Rua Dr. Antonio Bernardino de Almeida";
		$L0048->number="431";
		$L0048->zipcode="4200-072";
		$L0048->latitude=31.9159271;
		$L0048->longitude=34.8654685;
		$L0048->save();
		
		$L0048O = new Organization;
		$L0048O->name="Instituto Superior de Engenharia do Porto";
		$L0048O->type="School";
		$L0048O->description="Instituto Superior de Engenharia do Porto";
		$L0048O->status="Approved";
		$L0048O->location_id = $L0048->id;
		$L0048O->save();
		
		$L0049 = new Location;
		$L0049->country="Spain";
		$L0049->city="Barcelona";
		$L0049->streetname="Carrer Jordi Girona";
		$L0049->number="31";
		$L0049->zipcode="8034";
		$L0049->latitude=41.3892001;
		$L0049->longitude=2.1175024;
		$L0049->save();
		
		$L0049O = new Organization;
		$L0049O->name="Universitat Politecnica de Catalunya (UPC). Terrassa";
		$L0049O->type="School";
		$L0049O->description="Universitat Politecnica de Catalunya (UPC). Terrassa";
		$L0049O->status="Approved";
		$L0049O->location_id = $L0049->id;
		$L0049O->save();
		
		$L0050 = new Location;
		$L0050->country="Spain";
		$L0050->city="Vilanova i la Geltru";
		$L0050->streetname="Av. Victor Balaguer";
		$L0050->number="1";
		$L0050->zipcode="8800";
		$L0050->latitude=22.321702;
		$L0050->longitude=114.177987;
		$L0050->save();
		
		$L0050O = new Organization;
		$L0050O->name="Escola Politecnica Superior denginyeria de Vilanova i la Geltru";
		$L0050O->type="School";
		$L0050O->description="Escola Politecnica Superior denginyeria de Vilanova i la Geltru";
		$L0050O->status="Approved";
		$L0050O->location_id = $L0050->id;
		$L0050O->save();
		
		$L0051 = new Location;
		$L0051->country="Spain";
		$L0051->city="Santandar";
		$L0051->streetname="Avda. de los Castros";
		$L0051->number="1";
		$L0051->zipcode="39005";
		$L0051->latitude=22.321702;
		$L0051->longitude=114.177987;
		$L0051->save();
		
		$L0051O = new Organization;
		$L0051O->name="Universidad de Cantabria";
		$L0051O->type="School";
		$L0051O->description="Universidad de Cantabria";
		$L0051O->status="Approved";
		$L0051O->location_id = $L0051->id;
		$L0051O->save();
		
		$L0052 = new Location;
		$L0052->country="Spain";
		$L0052->city="Valencia";
		$L0052->streetname="Camino de Vera";
		$L0052->number="1";
		$L0052->zipcode="46022";
		$L0052->latitude=22.321702;
		$L0052->longitude=114.177987;
		$L0052->save();
		
		$L0052O = new Organization;
		$L0052O->name="Universidad Politecnica de Valencia";
		$L0052O->type="School";
		$L0052O->description="Universidad Politecnica de Valencia";
		$L0052O->status="Approved";
		$L0052O->location_id = $L0052->id;
		$L0052O->save();
		
		$L0053 = new Location;
		$L0053->country="Spain";
		$L0053->city="Valladolid";
		$L0053->streetname="Casa del Estudiante Real de Burgos";
		$L0053->number="1";
		$L0053->zipcode="47011";
		$L0053->latitude=22.321702;
		$L0053->longitude=114.177987;
		$L0053->save();
		
		$L0053O = new Organization;
		$L0053O->name="Universidad de Valladolid";
		$L0053O->type="School";
		$L0053O->description="Universidad de Valladolid";
		$L0053O->status="Approved";
		$L0053O->location_id = $L0053->id;
		$L0053O->save();
		
		$L0054 = new Location;
		$L0054->country="Spain";
		$L0054->city="Valladolid";
		$L0054->streetname="C/Francisco Mendizabal";
		$L0054->number="1";
		$L0054->zipcode="8800";
		$L0054->latitude=41.6400908;
		$L0054->longitude=-4.7562159;
		$L0054->save();
		
		$L0054O = new Organization;
		$L0054O->name="Univ. Politechna Valladolid";
		$L0054O->type="School";
		$L0054O->description="Univ. Politechna Valladolid";
		$L0054O->status="Approved";
		$L0054O->location_id = $L0054->id;
		$L0054O->save();
		
		$L0055 = new Location;
		$L0055->country="Spain";
		$L0055->city="Santander";
		$L0055->streetname="Avda. Los Castros";
		$L0055->number="s&#47;n";
		$L0055->zipcode="39005";
		$L0055->latitude=43.4705812;
		$L0055->longitude=-3.8028812;
		$L0055->save();
		
		$L0055O = new Organization;
		$L0055O->name="Universidad de Cantabria";
		$L0055O->type="School";
		$L0055O->description="Universidad de Cantabria";
		$L0055O->status="Approved";
		$L0055O->location_id = $L0055->id;
		$L0055O->save();
		
		$L0056 = new Location;
		$L0056->country="Switzerland";
		$L0056->city="Yverdon&#45;Les&#45;Bains";
		$L0056->streetname="Route de Cheseaux";
		$L0056->number="1 CP";
		$L0056->zipcode="CH&#45;1401";
		$L0056->latitude=46.7782175;
		$L0056->longitude=6.6414898;
		$L0056->save();
		
		$L0056O = new Organization;
		$L0056O->name="Haute Ecole d&#39;Ing&eacute;nierie et de Gestion du Canton de Vaud";
		$L0056O->type="School";
		$L0056O->description="Haute Ecole d&#39;Ing&eacute;nierie et de Gestion du Canton de Vaud";
		$L0056O->status="Approved";
		$L0056O->location_id = $L0056->id;
		$L0056O->save();
		
		$L0057 = new Location;
		$L0057->country="Turkey";
		$L0057->city="Bornova Izmir";
		$L0057->streetname="Caddesi";
		$L0057->number="12";
		$L0057->zipcode="35040";
		$L0057->latitude=38.466414;
		$L0057->longitude=27.2192191;
		$L0057->save();
		
		$L0057O = new Organization;
		$L0057O->name="Ege University";
		$L0057O->type="School";
		$L0057O->description="Ege University";
		$L0057O->status="Approved";
		$L0057O->location_id = $L0057->id;
		$L0057O->save();
		
		$L0058 = new Location;
		$L0058->country="Turkey";
		$L0058->city="Bornova Izmir";
		$L0058->streetname="Caddesi";
		$L0058->number="35&#45;37";
		$L0058->zipcode="35040";
		$L0058->latitude=38.466414;
		$L0058->longitude=27.2192191;
		$L0058->save();
		
		$L0058O = new Organization;
		$L0058O->name="Yasar University";
		$L0058O->type="School";
		$L0058O->description="Yasar University";
		$L0058O->status="Approved";
		$L0058O->location_id = $L0058->id;
		$L0058O->save();

		$L0059 = new Location;
		$L0059->country="USA";
		$L0059->city="Houghton";
		$L0059->streetname="Townsend Drive";
		$L0059->number="1400";
		$L0059->zipcode="49931";
		$L0059->latitude=47.1177282;
		$L0059->longitude=-88.5420061;
		$L0059->save();
		
		$L0059O = new Organization;
		$L0059O->name="Michigan Technological University";
		$L0059O->type="School";
		$L0059O->description="Michigan Technological University";
		$L0059O->status="Approved";
		$L0059O->location_id = $L0059->id;
		$L0059O->save();

		$L0060 = new Location;
		$L0060->country="USA";
		$L0060->city="Rapid City";
		$L0060->streetname="St&#46; Joseph Street";
		$L0060->number="501 E&#46;";
		$L0060->zipcode="57701-3995";
		$L0060->latitude=44.0736727;
		$L0060->longitude=103.2062792;
		$L0060->save();
		
		$L0060O = new Organization;
		$L0060O->name="South Dakota School of Mines and Technology";
		$L0060O->type="School";
		$L0060O->description="South Dakota School of Mines and Technology";
		$L0060O->status="Approved";
		$L0060O->location_id = $L0060->id;
		$L0060O->save();

		$L0061 = new Location;
		$L0061->country="Romania";
		$L0061->city="Bucuresti";
		$L0061->streetname="Splaiul Independentei";
		$L0061->number="313";
		$L0061->zipcode="RO&#45;060042";
		$L0061->latitude=44.4438839;
		$L0061->longitude=26.0537875;
		$L0061->save();
		
		$L0061O = new Organization;
		$L0061O->name="University &quot;Politehnica&quot; of Bucharest";
		$L0061O->type="School";
		$L0061O->description="University &quot;Politehnica&quot; of Bucharest";
		$L0061O->status="Approved";
		$L0061O->location_id = $L0061->id;
		$L0061O->save();

		$L0062 = new Location;
		$L0062->country="Austria";
		$L0062->city="St. P&ouml;lten";
		$L0062->streetname="Matthias Corvinus&#45;Stra&szlig;e";
		$L0062->number="15";
		$L0062->zipcode="A&#45;3100";
		$L0062->latitude=47.516231;
		$L0062->longitude=14.550072;
		$L0062->save();
		
		$L0062O = new Organization;
		$L0062O->name="Fachhochschule St&#46; P&ouml;lten";
		$L0062O->type="School";
		$L0062O->description="Fachhochschule St&#46; P&ouml;lten";
		$L0062O->status="Approved";
		$L0062O->location_id = $L0062->id;
		$L0062O->save();

		$L0063 = new Location;
		$L0063->country="Germany";
		$L0063->city="Stuttgart";
		$L0063->streetname="Nobelstra&szlig;e";
		$L0063->number="1";
		$L0063->zipcode="70569";
		$L0063->latitude=47.516231;
		$L0063->longitude=14.550073;
		$L0063->save();
		
		$L0063O = new Organization;
		$L0063O->name="Fachhochschule der Medi&euml;n";
		$L0063O->type="School";
		$L0063O->description="Fachhochschule der Medi&euml;n";
		$L0063O->status="Approved";
		$L0063O->location_id = $L0063->id;
		$L0063O->save();

		$S1 = new Student;
		$S1->firstname="Erwin";
		$S1->surname="Roeters";
		$S1->save();
		
		$S2 = new Student;
		$S2->firstname="Yannik";
		$S2->surname="Hegge";
		$S2->save();
		
		$S3 = new Student;
		$S3->firstname="Karlijn";
		$S3->insertion="van den";
		$S3->surname="Hoogenhof";
		$S3->save();
		
		$S4 = new Student;
		$S4->firstname="Teun";
		$S4->insertion="van den";
		$S4->surname="Roosmalen";
		$S4->save();
		
		$S5 = new Student;
		$S5->firstname="Peter";
		$S5->surname="Balk";
		$S5->save();
		
		$S6 = new Student;
		$S6->firstname="Leander";
		$S6->insertion="van";
		$S6->surname="Ooijen";
		$S6->save();
		
		$S7 = new Student;
		$S7->firstname="Niek";
		$S7->surname="Groebb&eacute;";
		$S7->save();
		
		$S8 = new Student;
		$S8->firstname="Roel";
		$S8->surname="Schouten";
		$S8->save();
		
		$S9 = new Student;
		$S9->firstname="Nico";
		$S9->surname="Kranendonk";
		$S9->save();
		
		$S10 = new Student;
		$S10->firstname="Peter";
		$S10->surname="Manders";
		$S10->save();
		
		$S11 = new Student;
		$S11->firstname="Shamon";
		$S11->surname="Jansen";
		$S11->save();
		
		$S12 = new Student;
		$S12->firstname="Tonio";
		$S12->surname="Hendrikx";
		$S12->save();
		
		$S13 = new Student;
		$S13->firstname="Roy";
		$S13->insertion="van";
		$S13->surname="Vugt";
		$S13->save();
		
		$S14 = new Student;
		$S14->firstname="Nicolette";
		$S14->surname="Kramers";
		$S14->save();
		
		$S15 = new Student;
		$S15->firstname="Sander";
		$S15->surname="Peeters";
		$S15->save();
		
		$S16 = new Student;
		$S16->firstname="Max";
		$S16->insertion="van de";
		$S16->surname="Ven";
		$S16->save();
		
		$S17 = new Student;
		$S17->firstname="Vincent";
		$S17->surname="Ende";
		$S17->save();
		
		$S18 = new Student;
		$S18->firstname="Sharon";
		$S18->insertion="van der";
		$S18->surname="Geest";
		$S18->save();
		
		$S19 = new Student;
		$S19->firstname="Rutger";
		$S19->insertion="van";
		$S19->surname="Breugel";
		$S19->save();
		
		$S20 = new Student;
		$S20->firstname="John";
		$S20->surname="Huiskes";
		$S20->save();
		
		$S21 = new Student;
		$S21->firstname="Marijn";
		$S21->surname="Tax";
		$S21->save();
		
		$S22 = new Student;
		$S22->firstname="Willem";
		$S22->surname="Schuit";
		$S22->save();
		
		$S23 = new Student;
		$S23->firstname="Wesley";
		$S23->insertion="van den";
		$S23->surname="Wildenberg";
		$S23->save();
		
		$S24 = new Student;
		$S24->firstname="Maghaidy";
		$S24->surname="Dapauw";
		$S24->save();
		
		$S25 = new Student;
		$S25->firstname="Nikki";
		$S25->insertion="van";
		$S25->surname="Rosmalen";
		$S25->save();
		
		$S26 = new Student;
		$S26->firstname="Rens";
		$S26->insertion="van den";
		$S26->surname="Biggelaar";
		$S26->save();
		
		$S27 = new Student;
		$S27->firstname="Eli";
		$S27->surname="Rongen";
		$S27->save();
		
		$S28 = new Student;
		$S28->firstname="Maurits";
		$S28->surname="Smits";
		$S28->save();
		
		$A0001 = new Activity;
		$A0001->name="EPS bij Oslo University College";
		$A0001->description="EPS bij Oslo University College";
		$A0001->type=$eps->name;
		$A0001->organization_id = $L0045O->id;
		$A0001->save();
		
		$A0002 = new Activity;
		$A0002->name="EPS bij Novia University of Applied Sciences";
		$A0002->description="EPS bij Novia University of Applied Sciences";
		$A0002->type=$eps->name;
		$A0002->organization_id = $L0011O->id;
		$A0002->save();
		
		$A0003 = new Activity;
		$A0003->name="EPS bij Universidad Polit&eacute;cnica de Valencia";
		$A0003->description="EPS bij Universidad Polit&eacute;cnica de Valencia";
		$A0003->type=$eps->name;
		$A0003->organization_id = $L0052O->id;
		$A0003->save();
		
		$A0004 = new Activity;
		$A0004->name="EPS bij Ecole Nationale d&#39;Ing&eacute;nieurs de Tarbes";
		$A0004->description="EPS bij Ecole Nationale d&#39;Ing&eacute;nieurs de Tarbes";
		$A0004->type=$eps->name;
		$A0004->organization_id = $L0019O->id;
		$A0004->save();
		
		return View::make('gevuld');
	}

	public function vullen()
	{	
		# Het toevoegen van admin types
		/*$admintype = new Admintype;
		$admintype->id = 0;
		$admintype->name = 'admin';
		$admintype->save();*/
/*-----------------------------------------------------------------*/
		/*# Het toevoegen van een status
		$needsapproval = new Status;
		$needsapproval->name = "Needsapproval";
		$needsapproval->save();	
		
		$removed = new Status;
		$removed->name = "Removed";
		$removed->save();	
		
		$approved = new Status;
		$approved->name = "Approved";
		$approved->save();	
		
		$declined = new Status;
		$declined->name = "Declined";
		$declined->save();	*/
/*-----------------------------------------------------------------*/		
		/*# Het toevoegen van organization types
		$school = new Organization_type;
		$school->name = "School";
		$school->save();
		
		$company = new Organization_type;
		$company->name = "Company";
		$company->save();*/
/*-----------------------------------------------------------------*/			
		/*# Het toevoegen van de Activity types
		$internship = new Activity_type;
		$internship->name = "Internship";
		$internship->save();
		
		$eps = new Activity_type;
		$eps->name = "EPS";
		$eps->save();
		
		$finalThesis = new Activity_type;
		$finalThesis->name = "Final thesis";
		$finalThesis->save();
		
		$minor = new Activity_type;
		$minor->name = "Minor";
		$minor->save();*/
/*-----------------------------------------------------------------*/		
		/*# Het toevoegen van Activity_status
		$open = new Activity_status;
		$open->name = "Open";
		$open->save();
		
		$closed = new Activity_status;
		$closed->name = "Closed";
		$closed->save();*/
/*-----------------------------------------------------------------*/			
		/*# Het toevoegen van scholen
		$avans = new School;
		$avans->name = "Avans Hogeschool";
		$avans->website = "www.avans.nl";
		$avans->save();*/
/*-----------------------------------------------------------------*/			
		# Het toevoegen van locaties: Afstuderen
		/*$herentals = new Location;
		$herentals->country = "Belgium";
		$herentals->city = "Herentals";
		$herentals->latitude = 51.17685;
		$herentals->longitude = 4.83559;
		$herentals->save();
		
		$wellington = new Location;
		$wellington->country = "New Zealand";
		$wellington->city = "Wellington";
		$wellington->latitude = -41.28646;
		$wellington->longitude = 174.77624;
		$wellington->save();

		# Het toevoegen van locaties: EPS
		$copenhagen = new Location;
		$copenhagen->country = "Denmark";
		$copenhagen->city = "Copenhagen";
		$copenhagen->latitude = 55.67610;
		$copenhagen->longitude = 12.56834;
		$copenhagen->save();
		
		$vaasa = new Location;
		$vaasa->country = "Finland";
		$vaasa->city = "Vaasa";
		$vaasa->latitude = 63.09514;
		$vaasa->longitude = 21.61651;
		$vaasa->save();
		
		# Het toevoegen van locaties: Minor
		$valencia = new Location;
		$valencia->country = "Spain";
		$valencia->city = "Valencia";
		$valencia->latitude = 39.46991;
		$valencia->longitude = -0.37629;
		$valencia->save();
		
		$kongsberg = new Location;
		$kongsberg->country = "Norway";
		$kongsberg->city = "Kongsberg";
		$kongsberg->latitude = 59.66888;
		$kongsberg->longitude =  	9.65019;
		$kongsberg->save();
		
		# Het toevoegen van locaties: Stage
		$sydney = new Location;
		$sydney->country = "Australia";
		$sydney->city = "Sydney";
		$sydney->latitude = -33.86749;
		$sydney->longitude =  	151.20699;
		$sydney->save();
		
		$paramaribo = new Location;
		$paramaribo->country = "Suriname";
		$paramaribo->city = "Paramaribo";
		$paramaribo->latitude = 5.85204;
		$paramaribo->longitude =  	-55.20383;
		$paramaribo->save();*/
/*-----------------------------------------------------------------*/			
		# Het toevoegen van de organisaties: Afstuderen
		/*$kraft = new Organization;
		$kraft->name = "Kraft Foods";
		$kraft->type = $company->name;
		$kraft->location_id = $herentals->id;
		$kraft->status=  $approved->name;
		$kraft->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$kraft->save();
		
		$weltec = new Organization;
		$weltec->name = "Weltec Centre for Smart Product";
		$weltec->type = $company->name;
		$weltec->location_id = $wellington->id;
		$weltec->status=  $approved->name;
		$weltec->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$weltec->save();
		
		# Het toevoegen van de organisaties: EPS
		$copenhagenUni = new Organization;
		$copenhagenUni->name = "Copenhagen University of Engineering";
		$copenhagenUni->type = $school->name;
		$copenhagenUni->location_id = $copenhagen->id;
		$copenhagenUni->status=  $approved->name;
		$copenhagenUni->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$copenhagenUni->save();
		
		$novia = new Organization;
		$novia->name = "Novia University of Applied Sciences";
		$novia->type = $school->name;
		$novia->location_id = $vaasa->id;
		$novia->status=  $approved->name;
		$novia->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$novia->save();
		
		# Het toevoegen van de organisaties: Minor
		$politecnica = new Organization;
		$politecnica->name = "Universidad Politecnica de Valencia";
		$politecnica->type = $school->name;
		$politecnica->location_id = $valencia->id;
		$politecnica->status=  $approved->name;
		$politecnica->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$politecnica->save();
		
		$buskerud = new Organization;
		$buskerud->name = "Noorwegen. Buskerud University";
		$buskerud->type = $school->name;
		$buskerud->location_id = $kongsberg->id;
		$buskerud->status=  $approved->name;
		$buskerud->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$buskerud->save();
		
		# Het toevoegen van de organisaties: Stage
		$robotics = new Organization;
		$robotics->name = "Australian Centre for Field Robotics";
		$robotics->type = $company->name;
		$robotics->location_id = $sydney->id;
		$robotics->status=  $approved->name;
		$robotics->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$robotics->save();
		
		$suralco = new Organization;
		$suralco->name = "Suralco LLC";
		$suralco->type = $company->name;
		$suralco->location_id = $paramaribo->id;
		$suralco->status=  $approved->name;
		$suralco->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$suralco->save();*/
/*-----------------------------------------------------------------*/		
		# Het toevoegen van opleidingen
		/*$ie = new Study;
		$ie->name = "Industrial Engineering";
		$ie->school_id = $avans->id;
		$ie->save();
		
		$me = new Study;
		$me->name = "Mechanical Engineering";
		$me->school_id = $avans->id;
		$me->save();

		$ce = new Study;
		$ce->name = "Computer Engineering";
		$ce->school_id = $avans->id;
		$ce->save();
		
		$cs = new Study;
		$cs->name = "Computer Science";
		$cs->school_id = $avans->id;
		$cs->save();
		
		$ee = new Study;
		$ee->name = "Electrical Engineering";
		$ee->school_id = $avans->id;
		$ee->save();
		
		$cmd = new Study;
		$cmd->name = "Communication and Multimedia Design";
		$cmd->school_id = $avans->id;
		$cmd->save();*/
/*-----------------------------------------------------------------*/			
		# Het toevoegen van studenten: Afstuderen
		/*$student1 = new Student;
		$student1->firstname = "Donald";
		$student1->surname = "Rutgers";
		$student1->study_id = $ie->id; 
		$student1->save();
		
		$student2 = new Student;	
		$student2->firstname = "Jorick";
		$student2->surname = "Dam";
		$student2->study_id = $ie->id; 
		$student2->save();
		
		$student3 = new Student;
		$student3->firstname = "Arthur";
		$student3->surname = "Kampschoer";
		$student3->study_id = $me->id;
		$student3->save();
	
		# Het toevoegen van studenten: EPS
		$student4 = new Student;
		$student4->firstname = "Bram";
		$student4->surname = "Bosch";
		$student4->study_id = $ce->id;
		$student4->save();
		
		$student5 = new Student;
		$student5->firstname = "Paul";
		$student5->surname = "Claessens";
		$student5->study_id = $ce->id;
		$student5->save();
		
		$student6 = new Student;
		$student6->firstname = "Rudy";
		$student6->surname = "Chambon";
		$student6->study_id = $cs->id;
		$student6->save();
		
		$student7 = new Student;
		$student7->firstname = "Rick";
		$student7->insertion = "van";
		$student7->surname = "Uden";
		$student7->study_id = $ee->id;
		$student7->save();
		
		# Het toevoegen van studenten: Minor
		$student8 = new Student;
		$student8->firstname = "Joey";
		$student8->insertion = "van der";
		$student8->surname = "Veeken";
		$student8->study_id = $cmd->id;
		$student8->save();
		
		$student9 = new Student;
		$student9->firstname = "Dominique";
		$student9->surname = "Lankheet";
		$student9->study_id = $cmd->id;
		$student9->save();
		
		$student10 = new Student;
		$student10->firstname = "Paul";
		$student10->surname = "Plantaz";
		$student10->study_id = $cmd->id;
		$student10->save();
		
		$student11 = new Student;
		$student11->firstname = "Linda";
		$student11->surname = "Janssen";
		$student11->study_id = $cmd->id;
		$student11->save();
		
		# Het toevoegen van studenten: Stage
		$student12 = new Student;
		$student12->firstname = "Luc";
		$student12->insertion = "de";
		$student12->surname = "Wolf";
		$student12->study_id = $me->id;
		$student12->save();
		
		$student13 = new Student;
		$student13->firstname = "Lukas";
		$student13->insertion = "van der";
		$student13->surname = "Linden";
		$student13->study_id = $me->id;
		$student13->save();
		
		$student14 = new Student;
		$student14->firstname = "Pepijn";
		$student14->surname = "Veldhuizen";
		$student14->study_id = $ie->id;
		$student14->save();
		
		$student15 = new Student;
		$student15->firstname = "Kevin";
		$student15->surname = "Tai-Tin-Woei";
		$student15->study_id = $ie->id;
		$student15->save();*/
/*-----------------------------------------------------------------*/			
		# Het toevoegen van Activity: Afstuderen
		/*$Activity1 = new Activity;
		$Activity1->name = "Final thesis Kraft Foods";
		$Activity1->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity1->type = $finalThesis->name;
		$Activity1->activity_status = $closed->name;
		$Activity1->organization_id = $kraft->id;
		$Activity1->startdate = '2012-01-01';
		$Activity1->enddate = '2013-01-01';
		$Activity1->study_id = $ie->id;
		$Activity1->status=  $approved->name;
		$Activity1->save();
		
		$Activity2 = new Activity;
		$Activity2->name = "Final thesis Weltec Centre for Smart Product";
		$Activity2->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity2->type = $finalThesis->name;
		$Activity2->activity_status = $closed->name;
		$Activity2->organization_id = $weltec->id;
		$Activity2->startdate = '2012-01-01';
		$Activity2->enddate = '2013-01-01';
		$Activity2->study_id = $me->id;
		$Activity2->status=  $approved->name;
		$Activity2->save();

		# Het toevoegen van Activity: EPS
		$Activity3 = new Activity;
		$Activity3->name = "EPS Copenhagen University of Engineering";
		$Activity3->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity3->type = $eps->name;
		$Activity3->activity_status = $closed->name;
		$Activity3->organization_id = $copenhagenUni->id;
		$Activity3->startdate = '2012-01-01';
		$Activity3->enddate = '2013-01-01';
		$Activity3->study_id = $ce->id;
		$Activity3->status=  $approved->name;
		$Activity3->save();
		
		$Activity4 = new Activity;
		$Activity4->name = "EPS Novia University of Applied Sciences";
		$Activity4->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity4->type = $eps->name;
		$Activity4->activity_status = $closed->name;
		$Activity4->organization_id = $novia->id;
		$Activity4->startdate = '2012-01-01';
		$Activity4->enddate = '2013-01-01';
		$Activity4->study_id = $cs->id;
		$Activity4->status=  $approved->name;
		$Activity4->save();
		
		# Het toevoegen van Activity: Minor
		$Activity5 = new Activity;
		$Activity5->name = "Minor Universidad Politecnica de Valencia";
		$Activity5->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity5->type = $minor->name;
		$Activity5->activity_status = $closed->name;
		$Activity5->organization_id = $politecnica->id;
		$Activity5->startdate = '2012-01-01';
		$Activity5->enddate = '2013-01-01';
		$Activity5->study_id = $cmd->id;
		$Activity5->status=  $approved->name;
		$Activity5->save();
		
		$Activity6 = new Activity;
		$Activity6->name = "Minor Noorwegen. Buskerud University";
		$Activity6->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity6->type = $minor->name;
		$Activity6->activity_status = $closed->name;
		$Activity6->organization_id = $buskerud->id;
		$Activity6->startdate = '2012-01-01';
		$Activity6->enddate = '2013-01-01';
		$Activity6->study_id = $cmd->id;
		$Activity6->status=  $approved->name;
		$Activity6->save();
		
		$Activity7 = new Activity;
		$Activity7->name = "Minor Copenhagen University of Engineering";
		$Activity7->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity7->type = $minor->name;
		$Activity7->activity_status = $closed->name;
		$Activity7->organization_id = $copenhagenUni->id;
		$Activity7->startdate = '2012-01-01';
		$Activity7->enddate = '2013-01-01';
		$Activity7->study_id = $cmd->id;
		$Activity7->status=  $approved->name;
		$Activity7->save();
		
		# Het toevoegen van Activity: Stage
		$Activity8 = new Activity;
		$Activity8->name = "Internship Australian Centre for Field Robotics";
		$Activity8->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity8->type = $internship->name;
		$Activity8->activity_status = $closed->name;
		$Activity8->organization_id = $robotics->id;
		$Activity8->startdate = '2012-01-01';
		$Activity8->enddate = '2013-01-01';
		$Activity8->study_id = $me->id;
		$Activity8->status=  $approved->name;
		$Activity8->save();
		
		$Activity9 = new Activity;
		$Activity9->name = "Internship Suralco LLC";
		$Activity9->description = "Lorem ipsum dolor sit amet. consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus. Donec quam felis. ultricies nec. pellentesque eu. pretium quis. sem. Nulla consequat massa quis enim. Donec pede justo. fringilla vel. aliquet nec. vulputate eget. arcu. In enim justo. rhoncus ut. imperdiet a. venenatis vitae. justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula. porttitor eu. consequat vitae. eleifend ac. enim. Aliquam lorem ante. dapibus in. viverra quis. feugiat a. tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity9->type = $internship->name;
		$Activity9->activity_status = $closed->name;
		$Activity9->organization_id = $suralco->id;
		$Activity9->startdate = '2012-01-01';
		$Activity9->enddate = '2013-01-01';
		$Activity9->study_id = $ie->id;
		$Activity9->status=  $approved->name;
		$Activity9->save();*/
/*-----------------------------------------------------------------*/		
		# Add experiences for final thesis'
		/*$experience1 = new Experience;
		$experience1->Activity_id=$Activity1->id;
		$experience1->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience1->accepted=1;
		$experience1->student_id=$student1->id;
		$experience1->status=  $approved->name;
		$experience1->save();
		
		$experience2 = new Experience;
		$experience2->Activity_id=$Activity1->id;
		$experience2->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience2->accepted=1;
		$experience2->student_id=$student2->id;
		$experience2->status=  $approved->name;
		$experience2->save();
		
		$experience3 = new Experience;
		$experience3->Activity_id=$Activity2->id;
		$experience3->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience3->accepted=1;
		$experience3->student_id=$student3->id;
		$experience3->status=  $approved->name;
		$experience3->save();
		
		# Add experiences for EPS
		$experience4 = new Experience;
		$experience4->Activity_id=$Activity3->id;
		$experience4->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience4->accepted=1;
		$experience4->student_id=$student4->id;
		$experience4->status=  $approved->name;
		$experience4->save();
		
		$experience5 = new Experience;
		$experience5->Activity_id=$Activity3->id;
		$experience5->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience5->accepted=1;
		$experience5->student_id=$student5->id;
		$experience5->status=  $approved->name;
		$experience5->save();
		
		$experience6 = new Experience;
		$experience6->Activity_id=$Activity4->id;
		$experience6->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience6->accepted=1;
		$experience6->student_id=$student6->id;
		$experience6->status=  $approved->name;
		$experience6->save();
		
		$experience7 = new Experience;
		$experience7->Activity_id=$Activity3->id;
		$experience7->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience7->accepted=1;
		$experience7->student_id=$student7->id;
		$experience7->status=  $approved->name;
		$experience7->save();
		
		# Add experiences for minors
		$experience8 = new Experience;
		$experience8->Activity_id=$Activity5->id;
		$experience8->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience8->accepted=1;
		$experience8->student_id=$student8->id;
		$experience8->status=  $approved->name;
		$experience8->save();
		
		$experience9 = new Experience;
		$experience9->Activity_id=$Activity5->id;
		$experience9->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience9->accepted=1;
		$experience9->student_id=$student9->id;
		$experience9->status=  $approved->name;
		$experience9->save();
		
		$experience10 = new Experience;
		$experience10->Activity_id=$Activity6->id;
		$experience10->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience10->accepted=1;
		$experience10->student_id=$student10->id;
		$experience10->status=  $approved->name;
		$experience10->save();
		
		$experience11 = new Experience;
		$experience11->Activity_id=$Activity7->id;
		$experience11->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience11->accepted=1;
		$experience11->student_id=$student11->id;
		$experience11->status=  $approved->name;
		$experience11->save();
		
		# Add experiences for internships
		$experience12 = new Experience;
		$experience12->Activity_id=$Activity8->id;
		$experience12->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience12->accepted=1;
		$experience12->student_id=$student12->id;
		$experience12->status=  $approved->name;
		$experience12->save();
		
		$experience13 = new Experience;
		$experience13->Activity_id=$Activity8->id;
		$experience13->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience13->accepted=1;
		$experience13->student_id=$student13->id;
		$experience13->status=  $approved->name;
		$experience13->save();
		
		$experience14 = new Experience;
		$experience14->Activity_id=$Activity9->id;
		$experience14->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience14->accepted=1;
		$experience14->student_id=$student14->id;
		$experience14->status=  $approved->name;
		$experience14->save();
		
		$experience15 = new Experience;
		$experience15->Activity_id=$Activity9->id;
		$experience15->description="Lorem ipsum dolor sit amet. consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus. vulputate ut ultricies quis. vestibulum interdum sem. Etiam dui ante. tempor quis justo in. pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla. pulvinar libero eget. dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis. dignissim velit eget. dapibus mauris. In sit amet sapien ultrices. commodo dui viverra. adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience15->accepted=1;
		$experience15->student_id= $student15->id;
		$experience15->status=  $approved->name;
		$experience15->save();*/
/*-----------------------------------------------------------------*/		
		# Add admin user'
		/*$user = new User;
		$user->username = "Confusing Bucket";
		$user->email = "confusingbucket07@gmail.com";
		$user->google_token = "117306537575775047088";
		$user->google_value = "4/eYVzta-VaSS90D8hmhxluOzLS7gU.4sC9XzBffS4SOl05ti8ZT3YRplBTjQI";
		$user->save();

		$admin = new Admin;
		$admin->firstname = "Confusing";
		$admin->surname = "Bucket";
		$admin->admintype_id = $admintype->id;
		$admin->save();

		$userType = new Usertype;
		$userType->user_id = $user->id;
		$userType->admin_id = $admin->id;
		$userType->save();	*/	

		vullenNieuw();
		return View::make('gevuld');	
	}
	
	
}
?>
