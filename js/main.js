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


// document.addEventListener('DOMContentLoaded', () => {
	let mouseX = 0, mouseY = 0, posX = 0, posY = 0;

	const container = document.querySelector('#mainBlock'),
		cursor = document.querySelector('.cursor'),
		follower = document.querySelector('.follower'),
        links = document.querySelectorAll('a'),
        allElements = document.querySelector('*');

	container.addEventListener('mousemove', (e) => {
        mouseCoords(e);
	});


	function mouseCoords(e) {
        mouseX = e.pageX;
		mouseY = e.pageY;
	}

	gsap.to({}, .01, {
        repeat: -1,

		onRepeat: () => {
            posX += (mouseX - posX) / 5;
			posY += (mouseY - posY) / 5;

			gsap.set(cursor, {
                css: {
                    left: mouseX,
					top: mouseY
				}
			})

			gsap.set(follower, {
                css: {
                    left: posX - 40,
					top: posY - 40
				}
			})
		}
	});

	links.forEach(item => {
		item.addEventListener('mouseover', () => {
            cursor.classList.add('active');
			follower.classList.add('active');
		});
		item.addEventListener('mouseout', () => {
            cursor.classList.remove('active');
			follower.classList.remove('active');
		});
	})

	container.addEventListener('mouseout', () => {
        cursor.classList.add('hidden');
        follower.classList.add('hidden');
        allElements.style.cursor = ''
    })

    container.addEventListener('mouseover', () => {
        cursor.classList.remove('hidden');
		follower.classList.remove('hidden');
        allElements.style.cursor = 'none'
	})

// })
