<?php

include_once 'config/database.php';

class addSong{
    
    public $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function add_song($data){
        $title = $data['song_title'];
        $artist = $data['song_artist'];
        $lyrics = $data['song_lyrics'];

        if(empty($title) || empty($artist) || empty($lyrics)){
            $err_msg = "Fields should not be empty";
            return $err_msg;
        } else {
            $query = "INSERT INTO list (`song_name`, `artist`, `lyrics`) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($this->db->link, $query);
            mysqli_stmt_bind_param($stmt, 'sss', $title, $artist, $lyrics);
            $result = mysqli_stmt_execute($stmt);

            if($result) {
                $msg = "Song Added to the list";
                return $msg;
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
                
                $err_msg = "Song failed to add";
                return $err_msg;
            }
        }
    }

    public function show_songs(){
        $query = "SELECT * FROM list ORDER BY id DESC";
        $result = $this->db->selectSong($query);
        return $result;
    }

    public function view_song($id){
        $query = "SELECT * FROM list WHERE id = '$id'";
        $result = $this->db->selectSong($query);
        return $result;
    }

    public function update_song($data, $id){

        var_dump($id); 
        $title = $data['song_title'];
        $artist = $data['song_artist'];
        $lyrics = $data['song_lyrics'];

        if(empty($title) || empty($artist) || empty($lyrics)){
            $err_msg = "Fields should not be empty";
            return $err_msg;
        } else {
            $query = "UPDATE list SET song_name = ?, artist = ?, lyrics = ? WHERE id = ?";
            $stmt = mysqli_prepare($this->db->link, $query);
            mysqli_stmt_bind_param($stmt, 'sssi', $title, $artist, $lyrics, $id);
            $result = mysqli_stmt_execute($stmt);

            if($result) {
                $msg = "Song Updated";
                return $msg;
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
                
                $err_msg = "Song failed to Update";
                return $err_msg;
            }
        }
    }

    public function delete_song($id){
        $query = "DELETE FROM list WHERE id = '$id'";
        $result = $this->db->deleteSong($query);
        return $result;
    }
}

?>
