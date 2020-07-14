<?php

namespace Emagia\Game;

class charactersFactory 
{
    
    public static function factory(string $name) : featuresInterface 
    {
        $character = null;
        switch ($name){
            case 'orderus':
                $character = new orderus($name);
                break;
            case 'beast':
                $character = new beast($name);
                break;
            default:
                throw new \Exception('Could not recognise character');            
        }       
        return $character;
    }
}