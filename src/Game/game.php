<?php

namespace Emagia\Game;
class game 
{
    private $orderus;
    private $beast;    
    static $maxTurns = 20; 
    
    public function __construct(orderus $orderus, beast $beast)
    {
        $this->orderus  = $orderus;
        $this->beast    = $beast; 
    }

  
    
    private function battle() 
    {   
        switch ($this->orderus->getAttack()) {
            case true:                
                $hit = $this->orderus->getStrength() - $this->beast->getDefence(); 
                print $this->orderus->strike($hit, $this->beast) . "\n";             
                $this->orderus->setAttack(false);
                $this->beast->setAttack(true);
                
            break;
            case false:                
                $hit = $this->beast->getStrength() - $this->orderus->getDefence(); 
                $this->orderus->magicShield($hit);
                print "Beast attack, damege is: ".$hit ."\n";                                
                $this->beast->setAttack(false);
                $this->orderus->setAttack(true);
                $this->orderus->setHealth($hit);
                break;        
            
        }
    }
    public function start(){
        print $this->orderus->printStats();
        print $this->beast->printStats();
        $orderusSpeed = $this->orderus->getSpeed();
        $beastSpeed  = $this->beast->getSpeed();
        
        if ($orderusSpeed > $beastSpeed) 
        {
            $this->orderus->setAttack(true);     
            print  "orderus begin the battle \n";     

        } elseif ($orderusSpeed < $beastSpeed)
        {
            $this->beast->setAttack(true);
            print "beast begin the battle \n";

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
        
        
        while (self::$maxTurns > 0) {
            self::$maxTurns--;            
            $this->battle();            
            sleep(1);
            if($this->orderus->getHealth() <= 0){
                print 'Orderus is dead';
                die();
            } elseif($this->beast->getHealth() <= 0) {
                print 'Beast is dead';
                die();
            }            
        }
    }

}