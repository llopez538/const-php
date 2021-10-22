<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $attack) {
        return round($attack->getDamage() * 2);
    }
}