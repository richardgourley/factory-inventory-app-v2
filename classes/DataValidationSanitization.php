<?php
class DataValidationSanitization{
    public function __construct(){
        
    }

    public function is_blank( $field, $field_name ){
        if( $field == '' ){
            return "$field_name must not be left blank.<br>";
        }

        return '';
    }

    public function validate_string( $field, $field_name ){
        $pattern = "/[^a-zA-Z ]/";

        if( preg_match( $pattern, $field ) == 1 ){
            return "$field_name must only contain letters.";
        }

        return '';

    }

    public function validate_price( $field, $field_name ){
        $pattern = "/^\d+(\.\d{2})?$/";

        if( preg_match( $pattern, $field ) == 1 ){
            return '';
        }

        return "$field_name must be a whole number or a decimal number with two decimal places.";
    }

    public function validate_int( $field, $field_name ){
        if( is_numeric( $field ) && strpos( $field, '.') == false ){
            return '';
        }

        return "Your $field_name must be a whole number.";
    }

}