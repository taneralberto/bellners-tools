<?php
class Thumbnail {

    public static function product ( $id ) {

        $json = requestApi( 'products', $id );
        $image_id = $json['featured_media'];

        $json = requestApi( 'media', $image_id );
        $image_url = $json['media_details']['sizes'][$size]['source_url'];
        return $image_url;
    }

    public static function post ( $id , $size ) {

        $json = requestApi( 'posts', $id );
        $image_id = $json['featured_media'];

        $json = requestApi( 'media', $image_id );
        $image_url = $json['media_details']['sizes'][$size]['source_url'];
        return $image_url;
    }

    private function requestApi( $cpt, $id ) {

        $url = 'http://localhost/bellner-tools/wp-json/wp/v2/'. $cpt .'/' . $id;
        $file = @file_get_contents($url);
        $json = json_decode($file, true);

        return $json;
    }
}