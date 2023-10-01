function bigImg(x) {
    if (window.innerWidth >= 870) {
        x.style.height = "auto";
        x.style.width = "400px";
        x.style.zIndex = "2";
    }
}

function normalImg(x) {
    if (window.innerWidth >= 870) {
        x.style.height = "auto";
        x.style.width = "100%";
        x.style.zIndex = "1";
    }
}