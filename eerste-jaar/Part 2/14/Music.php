<?php 

class Music {
    private string $name;

    private string $genre;

    private int $seen;


    
    /**
     * @param string $name
     * @param string $genre
     * @param int $seen
     */


    public function __construct(string $name, string $genre, int $seen) {
        $this -> name = $name;
        $this -> genre = $genre;
        $this -> seen = $seen;
    }

    public function getName() {
        return $this -> name;
    }

    public function getGenre() {
        return $this -> genre;
    }

    public function getSeen() {
        return $this -> seen;
    }
}

?>