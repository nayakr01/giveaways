<?php
class Raffle extends Lottery {
    public $firstTicket;
    public $lastTicket;

    public function __construct($title, $firstTicket, $lastTicket) {
        parent::__construct($title);
        $this->firstTicket = $firstTicket;
        $this->lastTicket = $lastTicket;
    }
}
?>