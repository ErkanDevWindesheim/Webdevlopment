<?php

class AppointmentController {

    // public function showForm(): void {
    //     // This method displays the appointment form
    //     require __DIR__ . '/../../views/routes/appointment.view.php';
    // }

    // stuur form en maak een afspraak in database
    public function submitForm(): void {
        // Load the Appointment model
        require_once __DIR__ . '/../models/Appointment.php';

        // Create a new appointment instance
        $appointment = new Appointment();
        $appointment->title = $_POST['title'];
        $appointment->first_name = $_POST['first_name'];
        $appointment->last_name = $_POST['last_name'];
        $appointment->email = $_POST['email'];
        $appointment->phone = $_POST['phone'];
        $appointment->appointment_date = $_POST['appointment_date'];
        $appointment->appointment_time = $_POST['appointment_time'];
        $appointment->reason = $_POST['reason'];

        // sla de gegevens op. dit werkt nog niet. p.s hier moet ik nog aan werken
        if ($appointment->save()) {
            require(__DIR__ .'/');
            echo "Appointment successfully booked!";
        } else {
            echo "Error booking appointment.";
        }
    }

}