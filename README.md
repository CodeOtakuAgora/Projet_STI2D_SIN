# PROJET A RENDRE POUR MON BAC STI2D SIN 

---

## ***Developed by Hugo Fief***

- Pour utiliser entierrement le projet, vous aller dans votre phpmyadmin et créer une base de données tsti2d1
- Ensuite créer une table trottinette avec 3 champs : id (int, auto_incrment, primary key), lon(double), lat(double)
- Ensuite créer 4 id avec des longitude et latitudes de votre choix
- Puis, allez sur le site google map api obtenez ensuite une clé API 
- Pour finir, modifer la ligne 107 du fichier localisation.php avec votre clé API

```html
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
```

