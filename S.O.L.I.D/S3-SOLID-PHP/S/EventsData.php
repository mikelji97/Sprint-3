<?php
class EventsData
{
    private array $events = [];

    public function insertEvents($eventsData)
    {
        foreach ($eventsData as $event) {
            $this->events[] = [
                'event' => $event['event'],
                'date' => $event['date']
            ];
        }
    }
}
