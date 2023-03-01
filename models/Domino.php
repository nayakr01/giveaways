<?php
class Domino extends Lottery {
    public $number;

    public function __construct($title, $number) {
        parent::__construct($title);
        $this->number = $number;
    }
}
?>