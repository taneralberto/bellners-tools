const toIterateProductsCard = () => {
    const $productsSlider : HTMLElement | null = document.querySelector( '.products-slider' );

    if( $productsSlider ){
        const $$productsCard : Array<Element> | null = [...$productsSlider.querySelectorAll( '.product-card' )];

        $$productsCard.map( $card => {

            setHightToImageContent( $card );

        } );
    }
}

const setHightToImageContent = ( $card : any ) : void => {
    const $__image : HTMLElement | null = $card.querySelector( '.product-card__image' );
    const $wpPostImage : HTMLElement | null = $card.querySelector( '.wp-post-image' );
    let height;
    let wpPostImageHeight = $wpPostImage?.offsetHeight;


    if ( $__image ) {
        $__image.style.height = `${$wpPostImage?.offsetHeight}px`;
    }
}

// toIterateProductsCard();

// window.onresize = toIterateProductsCard;



