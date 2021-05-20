function nextPrevButtons() {

    const $productsSlider : HTMLElement | null = document.getElementById( 'slider-content' );
    const $nextButton : HTMLElement | null = document.querySelector( '.next-button' );
    const $prevButton : HTMLElement | null = document.querySelector( '.prev-button' );

    let $$products : NodeListOf<Element> | null = document.querySelectorAll( '.slider-section__card' );
    let index : number = 1;

    const $firstClone : HTMLElement = <HTMLElement> $$products[0].cloneNode( true );
    const $lastClone : HTMLElement = <HTMLElement> $$products[ $$products.length - 1 ].cloneNode( true );

    $firstClone.id = 'first-clone';
    $lastClone.id = 'last-clone';

    $productsSlider?.append( $firstClone );
    $productsSlider?.prepend( $lastClone );

    const productsTotalCount : number | undefined = $productsSlider?.childElementCount;

    const productWidth : number = $$products[index].clientWidth;

    if( $productsSlider ) {

        $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;

        const getProducts = () => document.querySelectorAll( '.slider-section__card' );

        $productsSlider.addEventListener( 'transitionend', () => {
            $$products = getProducts();

            if( $$products[index].id === $firstClone.id ) {
            //if( $$products[index] === $$products[4] ) {
                console.log($$products[index]);
                $productsSlider.style.transition = 'none';
                index = 1;
                $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;
            }

            if( $$products[index].id === $lastClone.id ) {
            //if( $$products[index] === $$products[4] ) {
                console.log($$products[index]);
                $productsSlider.style.transition = 'none';
                index = $$products.length - 2;
                $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;
            }
        } );

        const moveToNextProduct = () => {
            $$products = getProducts();
            if( index >= $$products.length - 1 ) return;
            //if( index >= $$products.length - 1 ) return;
            index++;
            $productsSlider.style.transition = '150ms ease-out';
            $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;
        }

        const moveToPrevProduct = () => {
            if( index <= 0 ) return;
            index--;
            $productsSlider.style.transition = '150ms ease-out';
            $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;
        }

        $nextButton?.addEventListener( 'click', moveToNextProduct );
        $prevButton?.addEventListener( 'click', moveToPrevProduct );
    }

}

const $productsSlider : HTMLElement | null = document.getElementById( 'slider-content' );

if ( $productsSlider ) {
    nextPrevButtons();
}
