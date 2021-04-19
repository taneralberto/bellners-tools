class Menu {

    numerone : number;
    hamburger : HTMLElement | null;
    menu : HTMLElement | null;
    menuChildren : Array<Element>;

    constructor(){
        this.numerone = 1;
        this.hamburger = document.querySelector( '.hamburger' );
        this.menu = document.getElementById( 'primary-menu' );
        this.menuChildren = this.menu ? [...this.menu.children] : [];

        this.createSubmenu();
        this.menuHamburgerHandle();
    }

    createSubmenu() {
        this.menuChildren.map( child => {

            if ( child.classList.contains( 'menu-item-has-children' ) ) {

                const dropdownButton : HTMLElement = document.createElement( 'button' );
                dropdownButton.classList.add( 'menu-item__dropdown' );

                const dropdownArrow = document.createElement( 'span' );
                dropdownArrow.classList.add( 'menu-item__dropdown__arrow' );
                dropdownArrow.innerHTML = '<img src="https://i.postimg.cc/SX30rdjX/icons8-expand-arrow-26.png" border="0" alt="icons8-expand-arrow-26"/>';

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

        if ( this.hamburger ) {

            this.hamburger.addEventListener('click', () => {

                const navLinks : HTMLElement | null = document.querySelector( '.header__menu' );

                //Animate Links
                if ( navLinks ) {
                    navLinks.classList.toggle( 'header__menu--show' );
                }

                //Hamburger Animation
                this.hamburger?.classList.toggle( 'toggle' );
            } );
        }
    }
}

new Menu();

