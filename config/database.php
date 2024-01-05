<?php

    include_once 'config/config.php';

    class Database{

        public $host = HOST;
        public $user = USER;
        public $password = PASSWORD;
        public $database = DATABASE;

        public $link;
        public $error;

        public function __construct(){
            $this->connection();
        }

        public function connection(){
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            if(!$this->link){
                $this->error = "Database connection failed!";
                return false;
            }
        }

        // Insert function
        public function insertSong($query){
            $result = mysqli_query($this->link, $query);
            if($result) {
                return true;
            } else {
                echo "Error: " . mysqli_error($this->link);
                return false;
            }
        }

        // Select all songs
        public function selectSong($query){
            $result = mysqli_query($this->link, $query);
            if(mysqli_num_rows($result) > 0) {
                return $result;
            } else {
                echo "Error: " . mysqli_error($this->link);
                return false;
            }
        }

        // Update song 
        public function updateSong($query){
            $result = mysqli_query($this->link, $query);
            if($result) {
                return true;
            } else {
                echo "Error: " . mysqli_error($this->link);
                return false;
            }
        }

        // Delete song 
        public function deleteSong($query){
            $result = mysqli_query($this->link, $query);
            if($result) {
                return true;
            } else {
                echo "Error: " . mysqli_error($this->link);
                return false;
            }
        }
    }

?>