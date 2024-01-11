<?php
include_once "Carros/Includes/db_connect.php";

$queryConsulta = "INSERT INTO carros (nome,modelo,ano) value ('Saveiro Cross','Picape','2014'),('Civic','Sedan','2020'),('X6','SUV','2022'),('Hilux','Camionete','2024')";

$queryInserindoNoBanco = mysqli_query($connect,$queryConsulta);

if($queryInserindoNoBanco){
    echo "Dados inseridos com sucesso";
    
}
else {
    echo "Erro";
}

