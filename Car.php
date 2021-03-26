<?php

class Car {
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 5;

    private int $nbWheels = 4;

    private string $energyType;

    private int $energyLevel; 

    public function __construct(string $color, int $nbSeats, string $energyType) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function start(): string {
        if ($energyLevel > 0) {
            return 'The car is starting';
        }
    }

    public function forward(): string {
        $this->currentSpeed = 50;
        return 'Go!';
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void {
        $this->NbWheels = $nbWheels;
    }


    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void {
        $this->nbSeats = $nbSeats;
    }


    public function getEnergyType(): string {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): void {
        $this->energyType = $energyType;
    }


    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }
}
