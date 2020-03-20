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
            //hoverOnly: true,
        });
        parallaxItems.push(parallaxItem);
        console.log("parallax work")
    }
}

parallax();