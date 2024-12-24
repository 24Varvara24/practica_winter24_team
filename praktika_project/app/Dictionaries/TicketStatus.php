<?php

namespace App\Dictionaries;

class TicketStatus
{   
    protected static $statuses = [ //Свойство
        'Неспользован',
        'Использован',
    ];

    static public function status($id) //Метод
    {
        return self::$statuses[$id];
    }

    static public function statuses()
    {
        return self::$statuses;
    }
}