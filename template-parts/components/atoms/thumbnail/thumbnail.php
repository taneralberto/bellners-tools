<?php
class Thumbnail {

    public static function post ( $id ) {

        $json = self::requestApi( 'posts', $id );
        $image_id = $json['featured_media'];

        $json = self::requestApi( 'media', $image_id );
        $image = $json['description']['rendered'];

        return $image;
    }

    public static function product ( $id ) {

        $json = self::requestApi( 'product', $id );
        $image_id = $json['featured_media'];

        $json = self::requestApi( 'media', $image_id );
        $image = $json['description']['rendered'];

        return $image;
    }

    private static function requestApi( $cpt, $id = '' ) {

        $url = get_site_url() . '/wp-json/wp/v2/'. $cpt .'/' . $id;
        $file = @file_get_contents($url);
        $json = json_decode($file, true);

        return $json;
    }
}