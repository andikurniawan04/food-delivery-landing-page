

// const icon = document.getElementById("icon");

// icon.addEventListener('click', () => {
//     icon.classList.toggle("fa-times")
// })

let menu = document.getElementById("menu");

// Change icon navbar
const changeIcon = (icon) => {
    icon.classList.toggle("fa-times")

    if (menu.classList.contains("active")) {
        menu.classList.remove("active")
        // menu.removeAttribute("data-aos");
        // menu.setAttribute("data-aos", "fade-right");
    } else {
        menu.classList.add("active");
        // menu.removeAttribute("data-aos");
        // menu.setAttribute("data-aos", "fade-left");
    }
}

scrollBtn = document.getElementById("scrollBtn");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollBtn.style.display = "flex";
    } else {
        scrollBtn.style.display = "none";
    }
}

function scrollUp() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

AOS.init({
    offset: window.innerWidth < 992 ? 400 : 90,
    delay: 0,
    duration: 900,
    once: true
});