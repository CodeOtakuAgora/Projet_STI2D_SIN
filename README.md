*** Copyright By Hugo Fief ***
- Pour utiliser entierrement le projet, vous aller dans votre phpmyadmin et créer une base de données tsti2d1;
- Ensuite créer une table trottinette avec 3 champs : id (int, auto_incrment, primary key), lon(double), lat(double);
- Ensuite créer 4 id avec des longitude et latitudes de votre choix;
- Pour finir ouvrez le fichier localisation.php et à la ligne 107 : <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdYJDjvEjRu3abY6WbCVGYl7xjv4lN3oM&callback=initMap" async defer></script>;
-Allez sur le site google map api obtenez ensuite une clé API et modifer la ligne 107 avec votre clé API;
