<?php

/**
 * Created by IntelliJ IDEA.
 * User: Samuel
 * Date: 03/07/2017
 * Time: 21:04
 */
trait Hydrator
{
    public function hydrator($objects)
    {
        $class_vars = array_keys(get_class_vars(__CLASS__));
        foreach ($objects as $name => $value) {
            if (in_array($name, $class_vars)) {
                $this->{$name} = $value;
            }
        }
    }
}