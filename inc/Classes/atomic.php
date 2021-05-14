<?php

class Atomic {

    public static function common ( $path, $args = [] ) {

        get_template_part( 'template-parts/components/' . $path, '', $args );
    }

    public static function atom ( $name, $args = [] ) {

        if ( self::has_slash( $name ) )
        {
            get_template_part( 'template-parts/components/atoms/' . $name, '', $args );

        }
        else
        {
            get_template_part( 'template-parts/components/atoms/' . $name . '/' . $name, '', $args );

        }

    }
    /**Testing Atomic Design for wordpress development theme :) */

    public static function molecule ( $name, $args = [] ) {

        if ( self::has_slash( $name ) )
        {
            get_template_part( 'template-parts/components/molecules/' . $name, '', $args );

        }
        else
        {
            get_template_part( 'template-parts/components/molecules/' . $name . '/' . $name, '', $args );

        }
    }

    public static function organism ( $name, $args = [] ) {

        if ( self::has_slash( $name ) )
        {
            get_template_part( 'template-parts/components/organisms/' . $name, '', $args );

        }
        else
        {
            get_template_part( 'template-parts/components/organisms/' . $name . '/' . $name, '', $args );

        }
    }

    public static function template ( $name, $args = [] ) {

        if ( self::has_slash( $name ) )
        {
            get_template_part( 'template-parts/components/templates/' . $name, '', $args );

        }
        else
        {
            get_template_part( 'template-parts/components/templates/' . $name . '/' . $name, '', $args );

        }
    }

    private static function has_slash( $string ) {

        if ( ( function_exists( 'str_contains' ) && ( str_contains( $string, '/' ) ) ) ||
            ( function_exists( 'strpos' ) && ( strpos( $string, '/' ) !== false ) ) )
        {
            return true;
        }

        return false;
    }
}