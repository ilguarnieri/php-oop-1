<?php
class Movie {

    public $cover;
    public $title;
    public $year;
    public $genre;
    public $director;

    function __construct(
        $_cover,
        string $_title,
        int $_year,
        string $_genre,
        string $_director)
    {

        $this->cover = $_cover;
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
    }

    public function getMovie(){
        ?>
            <div class="movie-card">
                <figure class="movie-img">
                    <img src="
                    <?= $this->cover ?>">
                </figure>

                <div class="movie-info">
                    <h3 class="movie-title">
                        <?= $this->title ?>
                    </h3>
                    <p class="movie-genre">
                        <?= $this->genre ?>
                    </p>
                    <p class="movie-director">
                        Regista: 
                        <?= $this->director ?>
                    </p>
                </div>
            </div>
        <?php
    }
}