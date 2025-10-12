<?php

class ResultsData
{
    private array $results;

    function insertResults($resultsData)
    {
        foreach ($resultsData as $result) {
            $this->results[] = [
                'athlete' => $result['athlete'],
                'event' => $result['event'],
                'medal' => $result['medal']
            ];
        }
    }
}
