function nextPrevButtons() {

    const $nextButton : HTMLElement | null = document.querySelector( '.next-button' );
    const $prevButton : HTMLElement | null = document.querySelector( '.prev-button' );
    const $productsSlider : HTMLElement | null = document.querySelector( '.products-slider' );

    if( $productsSlider ) {

        const $productCard : any = $productsSlider.querySelector('.product-card');
        let translate : number = 0;
        let width : number | undefined = $productCard?.offsetWidth;

        if ( $nextButton ) {

            $nextButton.onclick = () => {

                if ( width ) {
                    translate -= width;

                    if ( translate < -1299 ) {
                        translate = 0;
                    }
                }

                if ( $productsSlider ) {
                    $productsSlider.style.transform = `translateX(${translate}px)`;
                }

            };
        }

        if ( $prevButton ) {

            $prevButton.onclick = () => {

                if ( width ) {
                    translate += width;
                }

                if ( $productsSlider ) {
                    $productsSlider.style.transform = `translateX(${translate}px)`;
                }

            };
        }
    }
}

nextPrevButtons();
window.addEventListener( 'resize', nextPrevButtons );