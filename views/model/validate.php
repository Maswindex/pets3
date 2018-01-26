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
        global $f3;
        return ($string != "") && ( ctype_alpha($string));
    }

    if(!validColor($color)) {
        $errors['color'] = "Please enter  valid color";
    } else if(!validString($petname)) {
        $errors['petname'] = "Please enter  valid name";
    }

    $success = sizeof($errors) == 0;