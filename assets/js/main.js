scrollTop();
menuControll();
sliderControll();
searchModalControll();


function searchModalControll() {

    let searchClose = document.querySelector('.ashare-search__close');

    let searchModal = document.querySelector('.ashare-search');

    let searchOpen = document.querySelector('.nav__search-btn');

    searchOpen.addEventListener('click', () => {

        searchModal.style.animation = 'menuOpen 2s';
        searchModal.classList.add('open');
        
    });

    searchClose.addEventListener('click', () => {
        searchModal.classList.remove('open');
    });

};

function menuControll() {

    let createCloseBtn = document.createElement('div');
    createCloseBtn.classList.add('nav__menu-list-close');
    createCloseBtn.tabIndex = 0;
    createCloseBtn.innerHTML = '<i class="far fa-window-close"></i>';

    let menuToggler = document.querySelector('.nav__menu-toggle');
    let menuList = document.querySelector('.nav__menu-list');
    if(menuList) {
        menuList.appendChild(createCloseBtn);
    }
    let menuClose = document.querySelector('.nav__menu-list-close');
    let menuItems = document.querySelectorAll('.nav__menu-list li');

    menuItems.forEach( item => {
        item.addEventListener('click', () => {
            menuList.classList.remove('active');
        });
    });
    
    menuToggler.addEventListener('click', () => {

        menuList.classList.add('active');
        menuList.style.animation = 'menuOpen 3s';
    
    });

    menuClose.addEventListener('click', () => {
        menuList.classList.remove('active');
    })

    if(menuList) {

        let childList = menuList.querySelectorAll('li');

        childList.forEach(element => {
            if(element.lastElementChild.localName == 'ul') {
                element.classList.add('has-child');
            }
        });
        
    }

};

function sliderControll() {

    let buttonContainer = document.querySelector('.slider__btns');
    if (buttonContainer) {
        buttonContainer.firstElementChild.classList.add('active');
    }
    let sliderContainer = document.querySelector('.slider__content');
    if (sliderContainer) {
        sliderContainer.firstElementChild.classList.add('active');
    }
    

    let slideBtns = document.querySelectorAll('.slider__btns > span');
    let slides = document.querySelectorAll('.slider__content > *');

    slideBtns.forEach( btn => {

        btn.addEventListener('click', (e) => {
            
            slideBtns.forEach( a => {
                a.classList.remove('active');
                e.currentTarget.classList.add('active');
            });

            slides.forEach( slide => {
                slide.classList.remove('active');

                if( slide.id === e.currentTarget.dataset.id) {
                    slide.classList.add('active');
                }
            });
        });
    })

};

function scrollTop() {

    let scrollBtn = document.querySelector('#scroll-up');

    window.onscroll = () => {

        if( document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
            scrollBtn.classList.add('scroll');
        }
    };

    scrollBtn.addEventListener('click', e => {
        //document.body.scrollTop = 0; // For Safari
        //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
}




    