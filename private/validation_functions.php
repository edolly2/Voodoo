<?php

function is_blank($value) {
    return !isset($value) || trim($value) === '';
}

function has_value($value) {
    return !is_blank($value);
}

function has_length_greater_than($value, $min) {
    $length = strlen($value);
    return $length > $min;
}

function has_length_less_than($value, $max) {
    $length = strlen($value);
    return $length < $max;
}

function has_length_exact($value, $exact) {
    $length = strlen($value);
    return $length == $exact;
}

function has_length($value, $options) {
    if(isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
        return false;
    }
    else if(isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
        return false;
    }
    else if(isset($options['exact']) && !has_length_exact($value, $options['exact'])) {
        return false;
    }
    else {
        return true;
    }
}

function has_inclusion_of($value, $set) {
    return in_array($value, $set);
}

function has_exclusion_of($value, $set) {
    return !in_array($value, $set);
}

function has_string($value, $required_string) {
    return strpos($value, $required_string) !== false;
}

function has_valid_email($value) {
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $value) === 1;
}

$missing = '';
function validate_form($subject) {
    $errors = [];

    if(is_blank($subject['gfname']) || is_blank($subject['glname'])) {
        $missing = "Parent/Guardian First and Last Name";
        $errors[] = $missing . " Must Be Filled Out.";
    }

    if(is_blank($subject['pfname']) || is_blank($subject['plname'])) {
        $missing = "Player First and Last Name";
        $errors[] = $missing . " Must Be Filled Out.";
    }


    if(!isset($subject['throws'])) {
        $errors[] = "Must Click One Option For Throws.";
    }

    if(!isset($subject['bats'])) {
        $errors[] = "Must Click One Option For Bats.";
    }

    if(is_blank($subject['email']) || !has_valid_email($subject['email'])) {
        $errors[] = "Must Enter a Valid Email.";
    }

    if(is_blank($subject['number'])) {
        $errors[] = "Phone Number Must Be Filled Out.";
    }

    if(is_blank($subject['bday'])) {
        $errors[] = "A Valid Birthday Must Be Set.";
    }

    return $errors;
}

?>