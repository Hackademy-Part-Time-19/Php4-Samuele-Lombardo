<?php   

abstract class Continet {
     public $nameContinent;

public function __construct($_continent)
{
  $this->nameContinent = $_continent;
}

abstract public function getMyCurrentLocation();
}


 class Country extends Continet {
    public $nameCountry;

    public function __construct($_continent,$_Country){
        parent::__construct($_continent);
        $this->nameCountry = $_Country;
    }

    public function getMyCurrentLocation(){
        echo "Mi trovo in ". $this->nameContinent , " , " . $this->nameCountry;
    }

}


 class Region extends Country {
    public $nameRegion;


    public function __construct($_continent,$_Country,$_Region){
        parent::__construct($_continent,$_Country);        
        $this->nameRegion = $_Region;
    }

    public function getMyCurrentLocation(){
        echo "Mi trovo in ". $this->nameContinent , " , " . $this->nameCountry . " ,  " . $this ->nameRegion;
    }

}

 class Province extends Region {
    public $nameProvince;
    
    public function __construct($_continent,$_Country,$_Region,$_Province){
        parent::__construct($_continent,$_Country,$_Region);        
        $this->nameProvince = $_Province;
    }

     public function getMyCurrentLocation(){
        echo "Mi trovo in ". $this->nameContinent , " , " . $this->nameCountry . " ,  " . $this ->nameRegion . " ,". $this->nameProvince;
    }
}

class City extends Province {
    public $nameCity;

    public function __construct($_continent,$_Country,$_Region,$_Province,$_City){
        parent::__construct($_continent,$_Country,$_Region,$_Province);        
        $this->nameCity = $_City;
    }
    public function getMyCurrentLocation(){
        echo "Mi trovo in ". $this->nameContinent , " , " . $this->nameCountry . " ,  " . $this ->nameRegion . " ,". $this->nameProvince . " , " . $this->nameCity;
    }
}
class Street extends City {
    public  $nameStreet; 

    public function __construct($_continent,$_Country,$_Region,$_Province,$_City,$_Street){
        parent::__construct($_continent,$_Country,$_Region,$_Province,$_City);        
        $this->nameStreet = $_Street;
    }
    public function getMyCurrentLocation(){
        echo "Mi trovo in ". $this->nameContinent , " , " . $this->nameCountry . " ,  " . $this ->nameRegion . " ,". $this->nameProvince . " , " . $this->nameCity . " , " . $this->nameStreet;
    }
}


$myLocation= new Street('Europe','italia','Puglia','Ba','Bari','Strada San Giorgio Martire 2D');


$myLocation ->getMyCurrentLocation();




/* <!-- ,'puglia','ba','bari','strada San Giorgio Martire 2D' --> */





