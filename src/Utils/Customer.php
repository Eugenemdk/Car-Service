<?php
class Customer {
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $vehicleName;
    protected $regName;

    public function __construct($firstname,$lastname,$email,$vehicleName,$regName)
    {
      $this->firstname=$firstname;
      $this->lastname=$lastname;
      $this->email=$email;
      $this->vehicleName;
      $this->regName=$regName;  
    }
    public function __get($property){
        if(property_exists($this,$property)){
            return $this->$property;
        }
    }
    
    public function __set($property,$value){
        if(property_exists($this,$property)){
        $this->$property=$value;
        }
    }

    public function __isset($property)
    {
        return isset($this->$property);        
    }

    public function __unset($property){
        unset($this->$property);
    }

    public function __toString()
    {
        return $this->firstname." ".$this->lastname." ".$this->email." ".$this->vehicleName." ".$this->regName;
    }

}