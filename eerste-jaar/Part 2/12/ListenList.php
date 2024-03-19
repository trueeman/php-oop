<?php 

class ListenList {
    public array $music = [];

    public function addMusic(Music $music) {
        $this -> music[] = $music;
    }

}

?>