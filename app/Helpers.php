<?php
if (!function_exists('format_date')) {
    function format_date($date): string
    {
        //return date('d-m-Y', strtotime($date));
        return $date->diffForHumans([
            'parts' => 3,
            'join' => ', ',
        ]);
    }
}
