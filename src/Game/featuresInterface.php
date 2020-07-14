<?php 

namespace Emagia\Game;

interface featuresInterface 
{
    public function getHealth() : int; 
    public function setHealth(int $hit) : void; 
    
    public function getStrength() : int;
    
    public function getDefence() : int;

    public function getSpeed() : int;
    
    public function getLuck() : int;
    
    public function getAttack() : bool;
    
} 