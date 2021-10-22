<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class MissArmor extends Armor
{
    public function absorbDamage(Attack $attack) {
        $bingo = rand(1, 10);
        
        if ($bingo == 1 || $bingo == 3 || $bingo == 7 || $bingo == 4 || $bingo == 10) {
            echo "Fallaste el ataque";
            return;
        }
        return round($attack->getDamage());
    }
}