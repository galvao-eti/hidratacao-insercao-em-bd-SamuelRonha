<?php
/**
 * Created by IntelliJ IDEA.
 * User: samue
 * Date: 03/07/2017
 * Time: 21:04
 */

namespace Model\Traits;


trait Hydrator
{
    public function hydrator($objects){
        $class_vars = get_class_vars(get_class($objects));

        foreach ($class_vars as $name => $value) {
            echo "$name : $value\n";
        }
    }
}