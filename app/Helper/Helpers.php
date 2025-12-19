<?php

use Carbon\Carbon;

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
        } elseif ($rank == 'SGT' || $rank == "Sgt") {
            $yearsToAdd = 27;
        } else {
            $yearsToAdd = 20;
        }

        $enrolDateObj = new DateTime($enrolDate);

        // Add years
        $enrolDateObj->modify("+{$yearsToAdd} years");

        // Subtract 1 day (1 day radius)
        $enrolDateObj->modify("-1 day");

        return $enrolDateObj->format('d.m.y');
    }
}
if (!function_exists('retairedYear')) {
    function retairedYear($enrolDate, $rank)
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
        return $enrolDateObj->modify("+$yearsToAdd years")->format('Y');
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

        return $diff->y . "y," . $diff->m . "m";
        // return $diff->y . "y," . $diff->m . "m," . $diff->d . "d";
    }
}
if (!function_exists('formatDate')) {
    function formatDate($dateString)
    {
        $date = new DateTime($dateString, new DateTimeZone('Asia/Dhaka'));
        return $date->format('d M Y');
    }
}
if (!function_exists('formatDateCustom')) {
    function formatDateCustom($rawDate)
    {
        $formattedDate = Carbon::parse($rawDate)->format('d.m.y');
        return $formattedDate;
    }
}


if (!function_exists('calculateTotalFromPercentage')) {
    function calculateTotalFromPercentage(float $value, float $percentage): float
    {
        if ($percentage <= 0 || $percentage > 100) {
            return 0;
        }

        return round($value / ($percentage / 100), 2);
    }
}
if (!function_exists('convertToFullPercentage')) {
    function convertToFullPercentage(float $value, float $currentPercent): float
    {
        if ($currentPercent <= 0) {
            throw new InvalidArgumentException('Percentage must be greater than 0');
        }

        return ($value * 100) / $currentPercent;
    }

}
