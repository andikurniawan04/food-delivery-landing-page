

// const icon = document.getElementById("icon");

// icon.addEventListener('click', () => {
//     icon.classList.toggle("fa-times")
// })

let menu = document.getElementById("menu");

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

AOS.init({
    offset: 120,
    delay: 0,
    duration: 900,
    // once: true
});