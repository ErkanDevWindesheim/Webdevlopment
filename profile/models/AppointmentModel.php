<?php

class Appointment { 
    public $title;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $appointment_date;
    public $appointment_time;
    public $reason;

    public function save(): bool {
        // database moet nog komen
        $appointment_data = [
            'title' => $this->title,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'appointment_date' => $this->appointment_date,
            'appointment_time' => $this->appointment_time,
            'reason' => $this->reason
        ];

        // return true voor nu
        return true;
    }
}