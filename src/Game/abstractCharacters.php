<?php 

namespace Emagia\Game;

abstract class AbstractCharacters implements featuresInterface
{
    protected $name;
    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck; 
    protected $attack;

    public function __construct(string $name) 
    {
        $this->name = $name;
    }    
    
    public function getHealth() : int
    {
        return $this->health;

    }

    public function setHealth(int $hit) : void
    {
        if (random_int(1,100) < $this->getLuck()) 
        {
            print $this->name. " " .  "was lucky and not injured! \n";
            
        } else 
        {
            $this->health -= $hit;        
      }
    }

    public function getStrength() : int
    {
        return $this->strength;
        
    }

    public function getDefence() : int
    {
        return $this->defence;

    }
    public function getSpeed() : int
    {
        return $this->speed;

    }
    public function getLuck() : int
    {
        return $this->luck;
    
    }
    
    public function getAttack() : bool
    {
        return $this->attack;

    }
    public function setAttack(bool $bool) : void
    {
        $this->attack = $bool;
    }
    public function printStats() : string
    {
        return $this->name . "statics: \n".
        "Health: \t" . $this->getHealth()."\n". 
        "Strength:\t" . $this->getStrength()."\n".
        "Defence:\t" . $this->getDefence()."\n".
        "Speed:\t" . $this->getSpeed()."\n".
        "Luck:\t" . $this->getLuck()."\n";

        
    }
}
