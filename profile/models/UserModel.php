<?php

/* 
    UserModel: Deze klasse beheert gebruikersgegevens en interacties met de database.
    Het biedt methoden voor het creëren, ophalen, bijwerken en verwijderen van gebruikers. 
*/

class User {
    public $naam;
    public $leeftijd;
    public $beschrijving;

    // Constructor: Initialiseert de UserModel met naam, leeftijd en beschrijving 
    function __construct($naam, $leeftijd, $beschrijving)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->beschrijving = $beschrijving;
    }

    function get_name(): mixed {
        return $this->naam;
    }

    function get_age(): mixed {
        return $this->leeftijd;
    }

    function get_description(): mixed {
        return $this->beschrijving;
    }
}