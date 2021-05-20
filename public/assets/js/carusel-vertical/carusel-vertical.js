var firstval = 0;
var runSlider;

function Carousel() {
clearTimeout(runSlider);
    firstval += 2;
    parent = document.getElementById('container-carousel');
    parent.style.top = "-" + firstval + "px";
    if (!(firstval % 100)) {
        setTimeout(Carousel, 3000);
        firstval = 0;
        var firstChild = parent.firstElementChild;
        parent.appendChild(firstChild);
        parent.style.top= 0;
        return;
    }
    runCarousel = setTimeout(Carousel, 10);
}
Carousel();


function leftClick(){
firstval += 2;
    parent = document.getElementById('container-carousel');
    parent.style.top = "-" + firstval + "px";
    
    if (!(firstval % 130)) {
        
        firstval = 0;
        var firstChild = parent.firstElementChild;
        parent.appendChild(firstChild);
        parent.style.top= 0;
        return;
    }
    runSlider = setTimeout(leftClick, 10);
}

function rightClick(){
firstval += 2;
    parent = document.getElementById('container-carousel');
    parent.style.top =  firstval + "px";
    
    if (!(firstval % 130)) {
        
        firstval = 0;
        var firstChild = parent.firstElementChild;
        parent.appendChild(firstChild);
        parent.style.top= 0;
        return;
    }
    runSlider = setTimeout(rightClick, 10);
}