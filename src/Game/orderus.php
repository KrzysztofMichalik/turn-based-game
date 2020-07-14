<?php

namespace Emagia\Game;

class orderus extends abstractCharacters
{
    public function __construct() {
        $this->name      = 'Orderus';
        $this->health    = random_int(70, 100);
        $this->strength  = random_int(70, 80);
        $this->defence   = random_int(45, 55);
        $this->speed     = random_int(40, 50);
        $this->luck      = random_int(10, 30);
        $this->attack    = false;
     
    }

    public function strike(int $hit, beast $beast) :string
    {
        if (random_int(1,100) < 10) {
              $beast->setHealth($hit + $hit);                          
              return 'Orderus use rapid strike skill and atack twice damage is:'. " " . $hit;
              
        } else {              
            $beast->setHealth($hit);            
            return 'Orderus atack and hits, damage is:'. " " . $hit;
        }   
    }

    public function magicShield($hit) : int
    { 

        if (random_int(1,100) < 20) {            
            $hit = $hit /2;
            print "Orderus use magic shield skill and take only half of damage (". $hit.")\n";
            return $hit;
      } else {
          return $hit;
      }
    }
}

