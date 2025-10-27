<?php

class AthletesData
{
    private array $athletes = [];

    public function insertAthletes($athletesData)
    {
        foreach ($athletesData as $athlete) {
            $this->athletes[] = [
                'name' => $athlete['name'],
                'country' => $athlete['country']
            ];
        }
    }
    public function getAthletes(){
        return $this->athletes;
    }
    public function getCountryByName(string $athleteName): string
    {
        // hago bucle para obtener pais
        foreach ($this->athletes as $athlete) {
            if ($athlete['name'] === $athleteName) {
                return $athlete['country']; // Devuelve el país si lo encuentra
            }
        }
        
        return "Pais no encontrado"; // Devuelve un valor por defecto si no
    }
}

