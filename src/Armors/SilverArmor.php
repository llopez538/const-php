<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return round($attack->getDamage() / 3);
    }
}