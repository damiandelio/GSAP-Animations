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
    if (st > lastScrollTop && window.scrollY > 150){
        TweenMax.to("#header", 0.3, {y: -120}); // Scroll para abajo
    } else if (window.scrollY > 1) {
        TweenMax.to("#header", 0.3, {y: -50}); // Scroll para arriba
    }
    lastScrollTop = st;

    if (window.scrollY < 620) {
        TweenMax.to("#dl", 0, {y: window.scrollY/2});
        TweenMax.to("#circulo-abc", 0, {y: -window.scrollY/6});
    }
};

/*document.getElementById('miniatura').onmouseover = () => {
    TweenMax.to("#header", 0, {scaleY: 2});
    TweenMax.to("#miniatura", 0, {scale: 2, scaleX: 4, x: 130});
}*/

//var abcW = document.getElementById('abc').innerWidth;
//TweenMax.from("#abc", 0.2, {opacity: 0.8, scale: 0, x: -abcW});