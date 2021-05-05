<?
Atomic::atom('share-f');
if( get_post_type( )== 'post'){
    Atomic::atom('share-in');
}else{
    Atomic::atom('share-w');
}
Atomic::atom('share-t');