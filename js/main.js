$(document).ready(function () {
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

        navOpen.staggerTo(navItems, 1, {x: 0, opacity: 1}, 0.2);
        navOpen.duration(1.5).play()
        setTimeout(() => {
            ham.removeClass("pointer-events-none");
        }, 2000);


    } else {

        ham.addClass("pointer-events-none");


        navClose.staggerTo(navItems, 1, {x: 100, opacity: 0}, 0.2);

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

let modal = document.getElementById("myModal");

let btn = document.getElementById("triggerModalForm");

if (document.body.contains(btn)) {
    btn.onclick = function () {
        modal.style.display = "block";
        document.body.style.overflowY = 'hidden'
    }
}

window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
        document.body.style.overflowY = 'auto'
    }
}


var container = document.querySelector(".mainBlock");
var circle = document.querySelector(".circle");

TweenMax.set("section", {
  backgroundColor: function() {
    return Math.random() * 0xffffff;
  }
});

TweenMax.set(circle, { scale: 0, xPercent: -50, yPercent: -50 });

container.addEventListener("pointerenter", function(e) {
  TweenMax.to(circle, 0.3, { scale: 1, opacity: .5 });
  positionCircle(e);
});

container.addEventListener("pointerleave", function(e) {
  TweenMax.to(circle, 0.3, { scale: 0, opacity: 0 });
  positionCircle(e);
});

container.addEventListener("pointermove", function(e) {
  positionCircle(e);
});

function positionCircle(e) {
  var rect = container.getBoundingClientRect();
  var relX = e.pageX - container.offsetLeft;
  var relY = e.pageY - container.offsetTop;

  TweenMax.to(circle, 0.3, { x: relX, y: relY });
}