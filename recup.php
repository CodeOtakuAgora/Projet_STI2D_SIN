<!DOCTYPE html>

<html>

<head>

<?php
include("infos.php");
?>

<title>LOCALISATION</title>

</head>

<body id="fond_carte">

<?php
include("menu.php");
?>

<br/>

<!--création du bloc map -->
<div id="map"></div><br/><br/>
  <!--déclaration utilisation php-->
    <?php    
    //connection à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=tsti2d1;charset=utf8', 'root', '');
    //requete afin de récupérer tous les champs des id de la table trottinette
    $reponse1 = $bdd->query('SELECT * FROM trottinette where id ="1"');
    $reponse2 = $bdd->query('SELECT * FROM trottinette where id ="2"');
    $reponse3 = $bdd->query('SELECT * FROM trottinette where id ="3"');
    $donnees1 = $reponse1->fetch();
    $donnees2 = $reponse2->fetch();
    $donnees3 = $reponse3->fetch();
    //fin d'utilisation php
    ?>
      
      <!-- déclaration utilisation javascript-->
      <script>
      //on déclare la variable

      
      var map;
      //on lui attribu une fonction
      function initMap() {
        
        //on lui demande d'afficher les données de longitude et de latitude
        var myLatLng1 = {lat: <?php echo $donnees1['lon'] ?>, lng: <?php echo $donnees1['lat'] ?>};
        var myLatLng2 = {lat: <?php echo $donnees2['lon'] ?>, lng: <?php echo $donnees2['lat'] ?>};
        var myLatLng3 = {lat: <?php echo $donnees3['lon'] ?>, lng: <?php echo $donnees3['lat'] ?>};
        //on stock tous les éléments de l'attribut google maps dans la variable et on positionne les éléments
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: myLatLng1
        });
        //on ajoute un marquer pour chaque positions grâce à l'attribut new google.maps.Marker
        var marker = new google.maps.Marker({
          position: myLatLng1,
          map: map,
          title: 'The Scooter 1 is here !'
        });
       var marker2 = new google.maps.Marker({
          position: myLatLng2,
          map: map,
          title: 'The Scooter 2 is here !'
        });
        var marker3 = new google.maps.Marker({
          position: myLatLng3,
          map: map,
          title: 'The Scooter 3 is here !'
        });

          var rectangle = new google.maps.Rectangle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          bounds: {
            north: 48.9044,
            south: 48.9046,
            east: 2.3125,
            west: 2.31
          }
        });

      }

</script>  
  
    <!-- code d'activation de la clé Api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2yOmGl6-hTYIdw3h-Zz3OvJF20fl4NVg&callback=initMap" async defer></script>
   
<?php
include("footer.php");
?>

</body>

</html>