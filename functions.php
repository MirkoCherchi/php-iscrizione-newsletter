<?php

function checkEmail($email)
{
    $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    return [
        'message' => $isValid ? 'Successo: la mail contiene un punto e una chiocciola' : 'Errore: la mail NON contiene un punto e una chiocciola',
        'alertClass' => $isValid ? 'alert-success' : 'alert-danger',
    ];
}
