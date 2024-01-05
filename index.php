<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'modal.php';
    include_once 'classes/addSong.php';

    $addsong = new addSong();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $add = $addsong->update_song($_POST, id);
    }

    if(isset($_GET['delSong'])){
        $id = base64_decode($_GET['delSong']);
        $delete = $addsong->delete_song($id);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song List</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
        <div class="card mt-5 border border-dark-subtle shadow">
            <div class="card-header">
                <h4><b>Song List</b></h4>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#addSong">
                    <button class="btn btn-success btn-sm" type="button">Add Song</button>
                </div>
                    <?php
                    $allsong = $addsong->show_songs();
                    if($allsong){
                        echo '<div class="row">';
                        while($row = mysqli_fetch_assoc($allsong)){
                            ?> 
                                <div class="col-sm-6 mt-2">
                                    <div class="card">
                                    <div class="card-body">
                                        
                                        <h5 class="card-title"><?= $row['song_name'] ?></h5>
                                        <p class="card-text"><?= $row['artist'] ?></p>
                                        <div data-bs-toggle="modal" data-bs-target="#viewSong">
                                            <a href="editSong.php?id=<?= base64_encode($row['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="?delSong=<?= base64_encode($row['id']) ?>" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure, you want to delete this?')">Delete</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                            echo '</div>';
                        }
                    ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>