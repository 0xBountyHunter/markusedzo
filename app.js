/* const navSlide = () => {
    const burger = document.querySelector('.burger');
    const list = document.querySelector('.list');
    const links = document.querySelectorAll('.list li');

    
    burger.addEventListener('click', () => {
        // toggle nav
        list.classList.toggle('nav-active');
        list.classList.toggle('mobile-list');
        // animate links
        links.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 + .5}s`;
            }
        });
        //burger animation
        burger.classList.toggle('toggle');
    });

}
const app = () => {
    navSlide();
}
app(); */