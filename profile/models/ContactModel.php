<?php

class Contact {
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function save(): bool {

        // zelfde hier voeg database toe
        $contact_data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message
        ];


        // return true voor nu
        return true;
    }
}
