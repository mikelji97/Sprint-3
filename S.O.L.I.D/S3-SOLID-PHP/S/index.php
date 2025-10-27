<?php
require_once __DIR__ . '/OlympicGames.php';
require_once __DIR__ . '/EventsData.php';
require_once __DIR__ . '/AthletesData.php';
require_once __DIR__ . '/ResultsData.php';

$olympics = new OlympicGames();

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$olympics->processOlympicData($athletesData, $eventsData, $resultsData);


?>