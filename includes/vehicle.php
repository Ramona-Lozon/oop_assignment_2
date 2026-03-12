<?php

namespace OOP;

class vehicle {
    protected string $type;
    protected string $subType;
    protected string $definition;
    protected string $engineSize;
    protected string $characteristics;
    protected string $passengers;
    protected int $wheels;
    

    public function __construct(string $type, string $subType, string $definition, string $engineSize, string $characteristics, string $passengers, int $wheels) {
        $this->type = $type;
        $this->subType = $subType;
        $this->definition = $definition;
        $this->engineSize = $engineSize;
        $this->characteristics = $characteristics;
        $this->passengers = $passengers;
        $this->wheels = $wheels;
    }

    public function getClassName(): string {
    return $this->type;
    }

    public function getSubType(): string {
        return $this->subType;
    }

    public function getDefinition(): string {
        return $this->definition;
    }

    public function getEngineSize(): string {
        return $this->engineSize;
    }

    public function getCharacteristics(): string {
        return $this->characteristics;
    }
 
    public function getPassengers(): string {
        return $this->passengers;
    }

    public function getWheels(): int {
        return $this->wheels;
    }

    public function start(): string {
        return "it can start its engine";
    }

    public function drive(): string {
        return "it can drive!";
    }

    public function stop(): string {
        return "it can stop";
    }


    public function displayInfo(): string {
        return "
        <div>
            <p>Class: " . $this->getClassName() . "</p>
            <p>subtype: " . $this->getSubType() . "</p>
            <p>What Defines it?: " . $this->getDefinition() . "</p>
            <p>How big is the engine?: " . $this->getEngineSize() . "</p>
            <p>What can it do?: " . $this->getCharacteristics() . "</p>
            <p>how many passengers?: " . $this->getPassengers() . "</p>          
            <p>Wheels: " . $this->getWheels() . "</p>
        </div>";
    }
}