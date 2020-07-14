<?php

namespace Emagia\Game;
class game 
{
    private $orderus;
    private $beast;    
    private $maxTurns; 
    
    public function __construct(orderus $orderus, beast $beast, int $maxTurns)
    {
        $this->orderus  = $orderus;
        $this->beast    = $beast; 
        $this->maxTurns = $maxTurns;

    }
  
/*
*   Counts the hit damage & set new health for the opponent  
*/
    private function battle() 
    {   
        switch ($this->orderus->getAttack()) {
            case true:                
                $hit = $this->orderus->getStrength() - $this->beast->getDefence(); 
                print "\n".$this->orderus->strike($hit, $this->beast);             
                $this->orderus->setAttack(false);
                $this->beast->setAttack(true);           
            break;
            case false:                
                $hit = $this->beast->getStrength() - $this->orderus->getDefence(); 
                $this->orderus->magicShield($hit);
                print "\nBeast attack, damege is: ".$hit ;                                
                $this->beast->setAttack(false);
                $this->orderus->setAttack(true);
                $this->orderus->setHealth($hit);
                print "\nHealth of the orders after the attack: \t" . $this->orderus->getHealth();
            break;                   
        }
    }
/*
*   Finds the player who starting the battle & run battle method until the fight to be resolve.
*/
    public function start(){
        print $this->orderus->printStats();
        print $this->beast->printStats();
        $orderusSpeed = $this->orderus->getSpeed();
        $beastSpeed  = $this->beast->getSpeed();
        
        if ($orderusSpeed > $beastSpeed) 
        {
            $this->orderus->setAttack(true);     
            print  "Orderus begin the battle \n";     

        } elseif ($orderusSpeed < $beastSpeed)
        {
            $this->beast->setAttack(true);
            print "Beast begin the battle \n";

        } 
        else 
        {
            $orderusLuck = $this->orderus->getLuck();
            $beastLuck = $this->beast->getLuck();

            if ($orderusLuck > $beastLuck) 
            {
                $this->orderus->setAttack(true);     
                print  "orderus begin the battle \n";
                
            } elseif ($orderusLuck < $beastLuck)
            {
                print "beast begin the battle \n";                
                $this->beast->setAttack(true);
                
            }
        }        
        
        while ($this->maxTurns > 0) {            
            $this->maxTurns--;            
            $this->battle();            
            sleep(1);
            if($this->orderus->getHealth() <= 0){
                print "\nBeast won a battle";
                die();
            } elseif($this->beast->getHealth() <= 0) {
                print "\nOrderus won a battle";
                die();
            }            
        }
    }

}