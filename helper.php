<?php 

function validLatLong($latitude, $longitude) {
    if (preg_match('/^(\d{2}(\.\d+)?)$/', $latitude) == 1 and preg_match('/^(\d{2}(\.\d+)?)$/', $longitude) == 1) {
        if ($latitude >= 23 and $latitude <= 41 and $longitude >= 43 and $longitude <= 64) {
            return true;
        } else
            return false;
    } else
        return false;
}