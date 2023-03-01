<?php
require_once('models/Lottery.php');
require_once('models/Raffle.php');
require_once('models/Domino.php');

class LotteryController {
    public $giveaways;

    public function __construct() {
        $this -> giveaways = isset($_SESSION['giveaways']) ? $_SESSION['giveaways'] : [];
    }

    public function list() {
        $giveaways = $this -> giveaways;
        require('views/list.php');
    }

    public function formRaffles() {
        require('views/createRaffle.php');
    }

    public function formDomino() {
        require('views/createDomino.php');
    }

    public function createRaffles($title, $firstTicket, $lastTicket) {
        $newGiveaway = new Raffle($title, $firstTicket, $lastTicket);
        $this -> giveaways = $newGiveaway;
        $_SESSION['giveaways'][] = $newGiveaway;
        header('Location: /index.php/list');
    }

    public function createDomino($title, $number) {
        $newGiveaway = new Domino($title, $number);
        $this -> giveaways = $newGiveaway;
        $_SESSION['giveaways'][] = $newGiveaway;
        header('Location: /index.php/list');
    }

    public function delete($index) {
        array_splice($this -> giveaways, $index, 1);
        $_SESSION['giveaways'] = $this -> giveaways;
        header('Location: /index.php/list');
    }

    public function print($index) {
        $giveaways = $this -> giveaways;
        require('views/print.php');
    }
}
?>