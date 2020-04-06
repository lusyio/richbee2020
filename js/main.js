$(document).ready(function() {
    const wow = new WOW({
        //offset: 200
    });

    wow.init();
})


const parallaxItems = [];

const parallax = () => {
    let items = document.querySelectorAll(".case__img");
    
    for (let item of items) {
        let parallaxItem = new Parallax(item, {
            hoverOnly: true,
        });
        parallaxItems.push(parallaxItem);
    }
}


var isActive = false;

const navToggle = () => {
     isActive = !isActive;

    const ham = $(".nav-toggle");
    const nav = $(".header__nav");
    const navItems = $(".header__nav ul li");

    const navOpen = new TimelineMax();
    const navClose = new TimelineMax();
    const page = $("body");

    if (isActive) {

        ham.addClass("pointer-events-none");
        
        nav.removeClass("header__nav--mobile-hidden")

        

        navOpen.to(nav, 1, {
            x: 0, 
            ease: Power3.easeInOut
        }, 0);
        navOpen.call(() => {
            ham.addClass("nav-toggle--active");
            page.addClass("sroll-prohibited")
        }, null, null, 0)

        navOpen.staggerTo(navItems, 1, {x:0, opacity: 1}, 0.2);
        navOpen.duration(1.5).play()
        setTimeout(() => {
            ham.removeClass("pointer-events-none");
        }, 2000);
        
        
    } else {

        ham.addClass("pointer-events-none");


        navClose.staggerTo(navItems, 1, {x:100, opacity: 0}, 0.2);

        navClose.to(nav, 1, {
            x: "100%", 
            ease: Power3.easeInOut
        }, 1);


        navClose.call(() => {
            ham.removeClass("nav-toggle--active");
        }, null, null, 1)

        navClose.call(() => {
            nav.addClass("header__nav--mobile-hidden");
            page.removeClass("sroll-prohibited");
        }, null, null, 1)
        navClose.duration(1.5).play()
        setTimeout(() => {
            ham.removeClass("pointer-events-none");
        }, 2000);
    }
}


if (window.innerWidth >= 992) {
    parallax();
}

