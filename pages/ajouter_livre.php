<?php
include 'conn.php';
$sql = "SELECT * FROM livres";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$livres = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($livres as $livre) {
    echo "ID: " . $livre['id'] . " - Name: " . $livre['titre'] . " - Author: " . $livre['auteur'] . " - Category: " . $livre['categorie'] . " - Date Added: " . $livre['date_ajout'] . " - Available: " . $livre['disponible'] . "<br>";
}
mysqli_close($conn);
?>