<?php

class ContactController {

    public function submitContact(): void {
        // De handeling van de form 
        require __DIR__ . '/../models/Contact.php';

        $contact = new Contact();
        $contact->name = $_POST['name'];
        $contact->email = $_POST['email'];
        $contact->phone = $_POST['phone'];
        $contact->subject = $_POST['subject'];
        $contact->message = $_POST['message'];

        if ($contact->save()) {
            echo "Appointment successfully booked!";
            require __DIR__ . '/views/contact/success.view.php';
        } else {
            // error handeling
            echo "Error submitting contact form!";
        }
    }
}