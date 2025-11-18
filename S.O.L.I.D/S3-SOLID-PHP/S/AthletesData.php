<?php

class AthletesData
{
    private array $athletes = [];

    public function insertAthletes($athletesData)
    {
        foreach ($athletesData as $athlete) {
            $this->athletes[] = new Athlete($athlete['name'], $athlete['country']);
        }
    }

    public function getAthletes(): array
    {
        return $this->athletes;
    }

    public function getCountryByName(string $athleteName): string
    {
        foreach ($this->athletes as $athlete) {
            if ($athlete->getName() === $athleteName) {
                return $athlete->getCountry();
            }
        }
        
        return "Pais no encontrado";
    }
}
