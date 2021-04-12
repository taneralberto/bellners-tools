class Menu {

    constructor(){
        this.numerone = 1;
        this.hamburger = document.querySelector( '.hamburger' );
        this.menu = document.getElementById( 'menu-primary-menu' );
        this.menuChildren = [...this.menu.children];
        //this.menuChildren = Array.from(this.menu.children);

        this.createSubmenu();
        this.menuHamburgerHandle();
    }

    createSubmenu() {
        this.menuChildren.map( child => {

            if( child.classList.contains( 'menu-item-has-children' ) ){

                const dropdownButton = document.createElement( 'button' );
                dropdownButton.classList.add( 'menu-item__dropdown' );

                const dropdownArrow = document.createElement( 'span' );
                dropdownArrow.classList.add( 'menu-item__dropdown__arrow' );
                dropdownArrow.innerHTML = '<svg class="menu-item__dropdown__arrow__svg"><use xlink:href="#icon-arrow"/></svg>';

                dropdownButton.appendChild( dropdownArrow );
                child.appendChild( dropdownButton );

                dropdownButton.addEventListener( 'click', () => {
                    const submenu = child.children[1];
                    submenu.classList.toggle( 'sub-menu--show' );
                    dropdownArrow.classList.toggle( 'menu-item__dropdown__arrow--actived' );
                } );
            }
        } );
    }

    menuHamburgerHandle() {
        this.hamburger.addEventListener('click', () => {

            const navLinks = document.querySelector( '.site-header__navigation' );
            const links = document.querySelectorAll( '#menu-primary-menu li' );
            //const bodyContainer = document.querySelector( '.body-container' );
            //bodyContainer.classList.toggle( 'body-container--overflow-hidden' );

            //Animate Links
            navLinks.classList.toggle( 'open' );
            links.forEach(link => {
                link.classList.toggle( 'fade' );
            } );

            //Hamburger Animation
            this.hamburger.classList.toggle( 'toggle' );
        } );
    }
}

new Menu();

