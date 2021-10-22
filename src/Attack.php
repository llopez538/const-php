<?php

namespace Styde;

class Attack
{
    protected $damage;
    protected $magical;
    protected $description;

    public function __construct($damage, $magical, $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attaker, Unit $opponent)
    {
        echo "<h1>".$this->description."</h1>";
        return Traslate::get($this->description, [
           'unit' => $attaker->getName(), 
           'opponent' => $opponent->getName(), 
        ]);
    }

    public function getDamage(){
        return $this->damage;
    }

    public function isMagical(){
        return $this->magical;
    }

    public function isPhysical(){
        return ! $this->isMagical();
    }
}