<?php

namespace Hesam\ShamsiDate\Transformer;

use DateTime;
use Symfony\Component\Form\DataTransformerInterface;

class DateTimObjectTransformer implements DataTransformerInterface
{


    public function transform($object)
    {
        if ($object) {
            return $object->format('Y/m/d');
        }
        return null;

    }

    public function reverseTransform($string)
    {
        return new DateTime($string);
    }
}
