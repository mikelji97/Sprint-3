<?php

class cardTransport implements Transport
{
    public function takeObject(): void
    {
        echo "take transport card, ";
    }
}
