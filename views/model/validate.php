<?php
    $errors = array();

    /*
   * Validate a color
   *
   * @param String color
   * @return boolean
   */
    function validColor($color){
        global $f3;
        return in_array($color, $f3->get('colors'));
    }

    /*
    * Validate a string
    *
    * @param String string
    * @return boolean
    */
    function validString($string){
        return ($string !== '') && ( ctype_alpha($string));
    }

    if(!validColor($color)) {
        $errors['color'] = "Please enter a valid color";
    } else if(!validString($name)) {
        $errors['petname'] = "Please enter a valid name";
    }else if(!validString($animal)) {
        $errors['petname'] = "Please enter a valid type";
    }

    $success = sizeof($errors) == 0;
