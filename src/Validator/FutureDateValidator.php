<?php

namespace App\Validator;


namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class FutureDateValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value instanceof \DateTimeInterface) {
            $now = new \DateTime('today');

            if ($value < $now) {
                $this->context->buildViolation($constraint->message)
                    ->addViolation();
            }
        }
    }
}
