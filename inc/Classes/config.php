<?php

class Atomic {

    public static function atom( $name ) {

        get_template_part( './template-parts/components/atoms/' . $name . '/' . $name );
    }

    public static function molecule( $name ) {

        get_template_part( './template-parts/components/molecules/' . $name . '/' . $name );
    }

    public static function organism( $name ) {

        get_template_part( './template-parts/components/organisms/' . $name . '/' . $name );
    }

    public static function template( $name ) {

        get_template_part( './template-parts/components/templates/' . $name . '/' . $name );
    }
}