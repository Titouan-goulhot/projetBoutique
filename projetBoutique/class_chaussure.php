<?

include_once('class_articles.php');
class chaussure extends article
    {
        private $pointure;
        private $matiere;
    }

    //public function __construct($id, $name, $description, $price, $picture, $weight, $quantity, $available,$pointure, $matiere )

    {
        parent:: __construct($id, $name, $description, $price,
                         $picture, $weight, $quantity, $available);

        $this->pointure= $pointure;
        $this->matiere = $matiere;
    }

    

    //public function getpointure()
    {
        return $this->pointure;
    }

    //public function getmatiere()
    {
        return $this->matiere;
    }

    ?>