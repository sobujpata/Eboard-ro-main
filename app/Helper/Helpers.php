<?php

if (!function_exists('ordinal')) {
    function ordinal($number)
    {
        $lastTwo = $number % 100;

        if ($lastTwo >= 11 && $lastTwo <= 13) {
            return $number . "th";
        }

        switch ($number % 10) {
            case 1:
                return $number . "st";
            case 2:
                return $number . "nd";
            case 3:
                return $number . "rd";
            default:
                return $number . "th";
        }
    }
}

if (!function_exists('retairedDate')) {
    function retairedDate($enrolDate, $rank)
    {

        if ($rank == 'SWO') {
            $yearsToAdd = 31;
        } elseif ($rank == 'WO') {
            $yearsToAdd = 29;
        } elseif ($rank == 'SGT') {
            $yearsToAdd = 27;
        } else {
            $yearsToAdd = 20;
        }
        $enrolDateObj = new DateTime($enrolDate);
        return $enrolDateObj->modify("+$yearsToAdd years")->format('d.m.y');
    }
}
// Example:
// echo retairedDate("2015-03-14", "SWO");
if (!function_exists('serviceLength')) {
    function serviceLength($enrolDate, $presentDate = null)
    {
        // If present date is not given, use today's date
        if ($presentDate == null) {
            $presentDate = date('Y-m-d');
        }

        $start = new DateTime($enrolDate);
        $end = new DateTime($presentDate);

        $diff = $start->diff($end);

        return $diff->y . "y," . $diff->m . "m," . $diff->d . "d";
    }
}
if (!function_exists('formatDate')) {
    function formatDate($dateString) {
            $date = new DateTime($dateString, new DateTimeZone('Asia/Dhaka'));
            return $date->format('d M Y');
        }
}
