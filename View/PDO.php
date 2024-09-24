<?php

function query($sql, $data = array()){
    $access=new pdo("mariaDB:host=localhost;dbname=projetfinal","root","","3307");
    $req = $access->prepare($sql);
    $req->execute($data);
    return $req->fetchAll(PDO::FETCH_OBJ);
}

