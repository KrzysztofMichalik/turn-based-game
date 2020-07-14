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

    // ORDERUS SKILLS
    public function strike(int $hit, beast $beast) :string
    {
        if (random_int(1,100) < 10) {
              $beast->setHealth($hit + $hit);                          
              return "\n Orderus use rapid strike skill and atack twice damage is:". " " . $hit ."\nHealth of the beast after the attack: \t" . $beast->getHealth();
              
        } else {              
            $beast->setHealth($hit);            
            return "\nOrderus atack and hits, damage is:". " " . $hit ."\nHealth of the beast after the attack: \t" . $beast->getHealth();
        }   
    }

    public function magicShield($hit) : int
    { 

        if (random_int(1,100) < 20) {            
            $hit = $hit /2;
            print "\nOrderus use magic shield skill and take only half of damage (". $hit.")";
            return $hit;
      } else {
          return $hit;
      }
    }
}

