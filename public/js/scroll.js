//scroll effect
// reveals on scroll and load window
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

// reveal elemen on scroll
function reveal2(){
    var reveals = document.querySelectorAll(".reveal2");

    for (var i = 0; i < reveals.length; i++) {
        reveals[i].classList.add("active");
    }
}

// reveal elemen on windows load
window.onload = function() {
    reveal2();
}

window.addEventListener("scroll", reveal);
