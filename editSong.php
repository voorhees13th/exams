<?php 
    include_once 'classes/addSong.php';

    $addsong = new addSong();

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $add = $addsong->update_song($_POST, $id);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <div class="card card w-75 mt-5 mx-auto border border-dark-subtle shadow">
            <div class="card-header">
                <h4><b>Edit Song</b></h4>
            </div>
            <div class="card-body">
                <?php 
                    $editsong = $addsong->view_song($id);
                    if($editsong){
                        while($row = mysqli_fetch_assoc($editsong)){
                            ?>
                                <form method="post">
                                    <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Song Title</b></label>
                                        <input type="text" value="<?= $row['song_name'] ?>" name="song_title" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label"><b>Song Artist/Singer</b></label>
                                        <input type="text" value="<?= $row['artist'] ?>" name="song_artist" class="form-control" id="exampleFormControlInput2" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"><b>Song Lyrics</b></label>
                                    <textarea name="song_lyrics" class="form-control" id="exampleFormControlTextarea1" rows="17" required>
                                        <?= $row['lyrics'] ?>
                                    </textarea>
                                    </div>
                                    <div class="text-end">
                                        <a href="index.php" class="btn btn-secondary btn-sm float-left">Back</a>
                                        <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                                    </div>
                                </form>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>