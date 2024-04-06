<?php
function checkNum($num) {
    if ($num < 1) {
        throw new Exception("Number cannot be below 1");
    }
    return true;
}
