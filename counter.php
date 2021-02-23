
<?php
   $page_name = "Meine Projekte";
?>

<title><?php
   echo $page_name;
?></title>

<?php
   include "webcounter.php";
   $anzahl_zugriffe = besucher($page_name);
?>

<footer>
<p>
<?php
   echo "Besucher: ",$anzahl_zugriffe;
?>
</p>
</footer>
