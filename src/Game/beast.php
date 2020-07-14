<?php 

namespace Emagia\Game;

class beast extends abstractCharacters
{   
    public function __construct() {
        $this->name      = 'Beast';
        $this->health    = random_int(60, 90);
        $this->strength  = random_int(60, 90);
        $this->defence   = random_int(40, 60);
        $this->speed     = random_int(40, 60);
        $this->luck      = random_int(25, 40);
        $this->attack    = false;
    }
}

