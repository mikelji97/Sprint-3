<?php
require_once __DIR__ . '/OlympicGames.php';
require_once __DIR__ . '/EventsData.php';
require_once __DIR__ . '/AthletesData.php';
require_once __DIR__ . '/ResultsData.php';
require_once __DIR__ . '/Athlete.php';

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

$athletes = new AthletesData();
$events = new EventsData();
$results = new ResultsData();

// 3. Insertar los datos en los objetos (Ahora sí funciona)
$athletes->insertAthletes($athletesData); 
$events->insertEvents($eventsData);     
$results->insertResults($resultsData);   

// 4. Pasar los OBJETOS al método
$olympics->processOlympicData($athletes, $events, $results);
?>