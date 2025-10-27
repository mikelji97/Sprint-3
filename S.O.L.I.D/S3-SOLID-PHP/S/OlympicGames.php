<?php
require_once "ResultsData.php";
require_once "EventsData.php";
require_once "AthletesData.php";
class OlympicGames
{
    public function processOlympicData(AthletesData $athletesData, EventsData $eventsData, ResultsData $resultsData)
    {
        echo "Olympic Games Results:\n";
        foreach ($eventsData->getEvents() as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($resultsData->getResults() as $result) {
                if ($result['event'] === $event['event']) {
                    $athleteName = $result['athlete'];
                    $country = $athletesData->getCountryByName($athleteName);
                    echo "- " . $athleteName . " from " . $country . " won " . $result['medal'] . "\n";
                }
            }
        }
    }
}

?>
