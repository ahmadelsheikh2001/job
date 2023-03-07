<?php

class Rule
{

    private $errorsBag = [];
    public function required($value, $attr)
    {
        if (empty($value)) {
            $this->errorsBag[$attr][] = "This {$attr} is required";
        }

        return $this;
    }

    public function email($value, $attr)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errorsBag[$attr][] = "{$value} is not a valid email address";
        }
        return $this;
    }

    public function min($value, $attr, int $min)
    {
        if (strlen($value) < $min) {
            $this->errorsBag[$attr][] = "this {$attr} Must be greater than {$min}  ";
        }
        return $this;
    }

    public function max($value, $attr, int $max)
    {
        if (strlen($value) > $max) {
            $this->errorsBag[$attr][] = "this {$attr} Must be Less than {$max} ";
        }
        return $this;
    }

    public function phone($value, $attr)
    {
        if (!filter_var($value, FILTER_SANITIZE_NUMBER_INT) || strlen($value) != 11) {
            $this->errorsBag[$attr][] = "{$value} is not a valid phone Number";
        }
        return $this;
    }

    public function getMassage()
    {
        return $this->errorsBag;
    }
}
