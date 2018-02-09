<?php

class Booking
{
    private $id;
    private $booking_from;
    private $booking_to;
    private $duration;


    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}


?>