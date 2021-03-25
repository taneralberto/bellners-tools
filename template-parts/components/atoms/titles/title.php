<?php
class Title {
    public static function product ( $id ) {
        $json = requestApi( 'product', $id );

        $title = $json['title']['rendered'];
        return $title;
    }

    public static function page ( $id ) {
        $json = requestApi( 'pages', $id );

        $title = $json['title']['rendered'];
        return $title;
    }

    public static function post ( $id ) {
        $json = requestApi( 'posts', $id );

        $title = $json['title']['rendered'];
        return $title;
    }

    private function requestApi( $cpt, $id ) {
        $url = 'http://localhost/bellner-tools/wp-json/wp/v2/'. $cpt .'/' . $id;
        $file = @file_get_contents($url);
        $json = json_decode($file, true);

        return $json;
    }
}

?>