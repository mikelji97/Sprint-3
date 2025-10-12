<?php
class OlympicGames {
    public function processOlympicData($athletesData, $eventsData, $resultsData) {
        echo "Olympic Games Results:\n";
        foreach ($this->events as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($this->results as $result) {
                if ($result['event'] === $event['event']) {
                    echo "- " . $result['athlete'] . " from " . $result['country'] . " won " . $result['medal'] . "\n";
                }
            }
        }
    }
}

?>
