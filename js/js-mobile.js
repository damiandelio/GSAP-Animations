var lastScrollTop = 0;

window.onscroll = () => {

    // Animacion header
    if (window.scrollY > 1) {
        TweenMax.to("#header", 0.5, {y: -50});
        document.getElementById("header").style.boxShadow = "0 .5rem 1rem rgba(0,0,0,.15)";
        TweenMax.to("#miniatura", 0.5, {y: 25, x:-18, scale: 0.6}); //Miniatura
    } else {
       TweenMax.to("#header", 0.2, {y: 0});
       document.getElementById("header").style.boxShadow = "none";
    TweenMax.to("#miniatura", 0.2, {y: 0, x:0, scale: 1}); //Miniatura
    }

    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop && window.scrollY > 300){  // 300px desde el top es lo que tarda en desaparecer el header
        TweenMax.to("#header", 0.3, {y: -120}); // Scroll para abajo
    } else if (window.scrollY > 1) {
        TweenMax.to("#header", 0.3, {y: -50}); // Scroll para arriba
    }

    lastScrollTop = st;

    if (window.scrollY < 680) {
        TweenMax.to("#dl", 0.4, {y: window.scrollY/2});
    }
};

window.onload = () => {
    if (window.scrollY < 1) {
        TweenMax.from("#dl", 0.4, {scale: 1.5, opacity: 0, delay: 0.3, ease: Power2.easeInOut});
        TweenMax.from("#circulo-abc", 1, {y: 200, delay: 0.6, ease: Expo.easeOut});
        TweenMax.from("#circulo-abc-2", 1.2, {y: -260, delay: 0.8, ease: Expo.easeOut});
    }
};

TweenMax.to(".card", 0, {scale: 1, opacity: 1});
TweenMax.to("#div-01", 0, {x: 0, opacity: 1});