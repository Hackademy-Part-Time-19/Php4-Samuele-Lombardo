<?php

abstract class Vertebrates{
    public function __construct(){      
      
    }

    protected function Vertebrati(){
        return "Sono un animale Vertebrato \n";
    }
    // Chiamata al metodo protetto all'interno del costruttore
}


class WarmBloods extends Vertebrates{
    public function __construct(){

    }

    protected function SangueCaldo(){
        return "Sono un animale a sangue caldo \n";

    }

}


class Mammals extends WarmBloods{
    public function __construct(){
        parent::__construct();
        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "RRRR \n";
    }
}

Class Birds extends WarmBloods{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "Cip \n";
    }
}


class ColdBlood extends Vertebrates{
    public function __construct(){}

    protected function SangueFreddo(){
        return "Sono un animale a sangue freddo \n";
    }
}

class Fish extends ColdBlood{
    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Splash \n";
    }
}

Class Reptiles extends ColdBlood{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "pssss \n";
    }
}

Class Amphibians extends ColdBlood{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Grah \n";
    }
}

$Magikarp = new Fish();
$Tigre = new Mammals();
$Aquila= new Birds();
$Pitone = new Reptiles();
$Rana = new Amphibians();