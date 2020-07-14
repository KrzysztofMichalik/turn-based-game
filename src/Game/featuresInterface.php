<?php 

namespace Emagia\Game;

interface featuresInterface 
{   
    // GETTERS
    public function getHealth() : int; 
    
    public function getStrength() : int;
    
    public function getDefence() : int;
    
    public function getSpeed() : int;
    
    public function getLuck() : int;
    
    public function getAttack() : bool;
    // SETTERS
    public function setAttack(bool $bool) :void;
    
    public function setHealth(int $hit) : void; 
} 