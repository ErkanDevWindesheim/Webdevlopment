<!-- Dit is user controller die verschillende functie krijgt -->]
<?php

// include('/profile/models/UserModel.php');

class UserController {

    // props
    public $userModel = [];

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    // User toevoegen
    function addUser($naam, $leeftijd, $beschrijving): void {
        $user = new User(naam: $naam, leeftijd: $leeftijd, beschrijving: $beschrijving);
    }

    // Get user
    function getUser($naam, $leeftijd, $beschrijving): User {
        $user = new User(naam: $naam, leeftijd: $leeftijd, beschrijving: $beschrijving);
        return $user;
    }

    // Display gebruiker informatie
    function displayUser($naam, $leeftijd, $beschrijving): void {
        $user = new User(naam: $naam, leeftijd: $leeftijd , beschrijving: $beschrijving);
        $html = "
        <div class='user-info'>
            <h2>User Information</h2>
            <p><strong>Naam:</strong> " . htmlspecialchars(string: $user->naam) . "</p>
            <p><strong>Leeftijd:</strong> " . htmlspecialchars(string: $user->leeftijd) . "</p>
            <p><strong>Beschrijving:</strong> " . htmlspecialchars(string: $user->beschrijving) . "</p>
        </div>
        ";
        echo $html; // Output de HTML
    }
}
