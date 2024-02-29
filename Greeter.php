<?php

class Greeter
{
    private $greetings = [
        "Welcome!",
        "Hello there!",
        "Greetings!"
    ];
    public function getGreeting() {
        $randomIndex = array_rand($this->greetings);
        return $this->greetings[$randomIndex];
    }
}