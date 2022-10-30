<?php

class Car

{
    /*Propriétes*/
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energylevel;
    private bool $hasParkBrake;

    /*Methodes*/

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function forward(): string
    {
        if ($this->currentSpeed > 60) {
            $this->energyLevel -= 10;
            return 'Ralentissez vous consommez trop ! Votre niveau est de : ' . $this->getEnergyLevel() .  '<br>';
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 10;
            $sentence .= "ça freine !!!<br>";
        }
        $sentence .= "<br>Arrêt de votre véhicule !";
        return $sentence;
    }

    public function start(): void
    {
        try {
            if ($this->hasParkBrake === false) {
                echo 'OK pour démarrer, le frein à main est OFF <br>' . PHP_EOL;
            } else {
                throw new Exception('NOK pour démarrer, frein à main ON <br>');
            }
        } catch (Exception $e) {
            echo 'Problème: ' . $e->getMessage() . PHP_EOL;
            $this->setParkBrake(false);
            echo 'Résolu: Frein à main est OFF maintenant <br>';
        } finally {
            echo 'Ma voiture roule comme un donut!<br>' . PHP_EOL;
        }
    }
}
