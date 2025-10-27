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
}

