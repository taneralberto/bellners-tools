<?php

class Atomic {

    public static function common ( $path, $args = [] ) {

        get_template_part( 'template-parts/components/' . $path, '', $args );
    }

    public static function atom ( $name, $args = [] ) {

        get_template_part( 'template-parts/components/atoms/' . $name . '/' . $name, '', $args );
    }

    public static function molecule ( $name, $args = [] ) {

        get_template_part( 'template-parts/components/molecules/' . $name . '/' . $name, '', $args );
    }

    public static function organism ( $name, $args = [] ) {

        get_template_part( 'template-parts/components/organisms/' . $name . '/' . $name, '', $args );
    }

    public static function template ( $name, $args = [] ) {

        get_template_part( 'template-parts/components/templates/' . $name . '/' . $name, '', $args );
    }
}