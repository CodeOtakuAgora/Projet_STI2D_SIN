<!DOCTYPE html>

<html>

<head>


<title>LOCALISATION</title>

</head>

<body>

<?php include("infos.php"); ?>

<?php include("menu.php"); ?>

<br/>

<div id="map"></div><br/><br/>

<!-- ***CODE PHP*** -->
  
    <?php
  
$bdd = new PDO('mysql:host=localhost;dbname=tsti2d1;charset=utf8','root','');

    // $bdd = new PDO('mysql:host=localhost;dbname=tsti2d1;charset=utf8', 'root', '');

    $reponse1 = $bdd->query('SELECT * FROM trottinette where id ="1"');
    $reponse2 = $bdd->query('SELECT * FROM trottinette where id ="2"');
    $reponse3 = $bdd->query('SELECT * FROM trottinette where id ="3"');
    $reponse4 = $bdd->query('SELECT * FROM trottinette where id ="4"');
    $donnees1 = $reponse1->fetch();
    $donnees2 = $reponse2->fetch();
    $donnees3 = $reponse3->fetch();
    $donnees4 = $reponse4->fetch();
    
    ?>
      
<!-- ***CODE JAVASCRIPT*** -->
     
      <script>

      var labels = '123456789';
      var labelIndex = 0;
      var map;
      
      function initMap() {
        
      
        var myLatLng1 = {lat: <?php echo $donnees1['lon'] ?>, lng: <?php echo $donnees1['lat'] ?>};
        var myLatLng2 = {lat: <?php echo $donnees2['lon'] ?>, lng: <?php echo $donnees2['lat'] ?>};
        var myLatLng3 = {lat: <?php echo $donnees3['lon'] ?>, lng: <?php echo $donnees3['lat'] ?>};
        var myLatLng4 = {lat: <?php echo $donnees4['lon'] ?>, lng: <?php echo $donnees4['lat'] ?>};
       
        var map = new google.maps.Map(document.getElementById('map'),
         {
          zoom: 19,
          center: myLatLng4
        });

        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var beachMarker = new google.maps.Marker({
          icon: image,
          position: myLatLng4,
          map: map,
          title: "Vous êtes actuellement ici !"
        });
        
        var marker = new google.maps.Marker({
          position: myLatLng1,
          label: labels[labelIndex++ % labels.length],
          map: map,
          title: 'La Trottinette N°1 est ici !'
        });
       var marker2 = new google.maps.Marker({
          position: myLatLng2,
          label: labels[labelIndex++ % labels.length],
          map: map,
          title: 'La Trottinette N°2 est ici !'
        });
        var marker3 = new google.maps.Marker({
          position: myLatLng3,
          label: labels[labelIndex++ % labels.length],
          map: map,
          title: 'La Trottinette N°3 est ici !'
        });

          var rectangle = new google.maps.Rectangle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          bounds: 
          {
            north: 48.9048,//il faut augenter => (coté positf de l'axe Y)
            south: 48.9038,//il faut diminuer pour compenser => (coté négatif de l'axe Y)
            east: 2.3114,//il faut diminuer => (coté positif de l'axe X)
            west: 2.31//ne pas toucher pour compenser => (coté négatif de l'axe X)
          }
        });

      }

    </script>  
  
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
	async defer></script>

	<?php include("footer.php"); ?>

</body>

</html>

<!--
        var infoWindow = new google.maps.InfoWindow({map: map});
        AIzaSyAAFAkT5xTQMBWh8_Gf1Okn0liXsuAnl_g
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Localisation Trouvée');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
       
          handleLocationError(false, infoWindow, map.getCenter());
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
-->