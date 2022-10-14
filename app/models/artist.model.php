<?php

class ArtistModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=circus;charset=utf8', 'root', '');
    }


    public function getAllArtists()
    {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM  `artist`");
        $query->execute();
        // 3. obtengo los resultados
        $artists = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $artists;
    }
    public function insertArtist($name, $type, $description)
    {
        $query = $this->db->prepare("INSERT INTO `artist` (name, type, description) VALUES (?, ?, ?)");
        $query->execute([$name, $type, $description]);
        return $this->db->lastInsertId();
    }
    function deleteArtistById($id_artist)
    {
        $query = $this->db->prepare('DELETE FROM `artist` WHERE `id_artist` = ?');
        $query->execute([$id_artist]);
    }
    function updateArtistById($name, $type, $description, $id_artist)
    {
        $query = $this->db->prepare("UPDATE `artist` SET `name`=?,`type`=?,`description`=? WHERE `id_artist`=?");
        $query->execute([$name, $type, $description, $id_artist]);
    }
}
?>