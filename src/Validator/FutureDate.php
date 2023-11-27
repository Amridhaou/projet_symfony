<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class FutureDate extends Constraint
{
    public $message = 'La date doit être dans le futur.';
}