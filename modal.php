<?php 
    include_once 'index.php';
    include_once 'classes/addSong.php';

    $addsong = new addSong();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $add = $addsong->add_song($_POST);
    }
?>

<div class="modal fade" id="addSong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Add Song</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
        <div class="modal-body">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"><b>Song Title</b></label>
                <input type="text" name="song_title" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label"><b>Song Artist/Singer</b></label>
                <input type="text" name="song_artist" class="form-control" id="exampleFormControlInput2" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Song Lyrics</b></label>
                <textarea name="song_lyrics" class="form-control" id="exampleFormControlTextarea1" rows="10" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary btn-sm" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
