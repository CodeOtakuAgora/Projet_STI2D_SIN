*** Copyright By Hugo Fief ***
- Pour utiliser entierrement le projet, vous aller dans votre phpmyadmin et cr�er une base de donn�es tsti2d1;
- Ensuite cr�er une table trottinette avec 3 champs : id (int, auto_incrment, primary key), lon(double), lat(double);
- Ensuite cr�er 4 id avec des longitude et latitudes de votre choix;
- Puis, allez sur le site google map api obtenez ensuite une cl� API et modifer la ligne 107 du fichier localisation.php avec votre cl� API;
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>;

