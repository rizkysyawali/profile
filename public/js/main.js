const txtElement = ['Freelancer', 'Web Developer', 'Traveler', 'Youtuber'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik() {

    if (count == txtElement.length) {
        count = 0;

    }

    currentTxt = txtElement[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector(".efek-ngetik").textContent = words;

    if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;
    }
    setTimeout(ngetik, 300);


})();

// Js. top header animation
window.addEventListener('scroll', function () {
    var header = document.querySelector('nav');
    header.classList.toggle('sticky', window.scrollY > 0);
});



// jQuery Smooth Scroll
$(".navbar a").on("click", function (e) {
    if (this.hash !== "") {
        e.preventDefault();

        const hash = this.hash;
        $("html, body").animate({
                scrollTop: $(hash).offset().top
            },
            800
        );
    }
});
