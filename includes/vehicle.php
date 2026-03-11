<?php

namespace OOP;

class vehicle {
    protected string $type;
    protected int $wheels;

    public function __construct(string $type, int $wheels)
    {
        $this->type = $type;
        $this->wheels = $wheels;
    }

    public function getClassName(): string {
        $class = get_class($this);
        return str_replace('OOP\\', '', $class);
    }
      
    public function getWheels(): int {
        return $this->wheels;
    }

    public function canHaul(): string {
        return "Unknown";
    }

    public function canCommute(): string {
        return "Unknown";
    }

    public function canLaneSplit(): string {
        return "Unknown";
    }

    public function displayInfo(): string {
        return "
        <div>
            <p>Class: " . $this->getClassName() . "</p>
            <p>Wheels: " . $this->getWheels() . "</p>
            <p>Can it haul?: " . $this->canHaul() . "</p>
            <p>Can it commute?: " . $this->canCommute() . "</p>
            <p>Can it lane split?: " . $this->canLaneSplit() . "</p>
        </div>";
    }
}