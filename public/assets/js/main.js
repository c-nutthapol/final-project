AOS.init();

// const Scrollbar = window.Scrollbar;

// const options = {
//   damping: 0.06,
//   renderByPixels: true,
// };

// Scrollbar.init(document.querySelector("#main-scrollbar"), options);

// const btnLogin = document.getElementsByClassName("btn-loading");
// const loading = document.getElementsByClassName("btn-spinner");

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar")
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.remove("bg-white");
                navbar.classList.add("bg-gray-50/90");
                navbar.classList.add("backdrop-blur-md");
            } else {
                navbar.classList.add("bg-white");
                navbar.classList.remove("backdrop-blur-md");
                navbar.classList.remove("bg-gray-50/90");
            }
        }

    });
});

let timer;
const spinner = document.querySelector(".btn-spinner");
const text = document.querySelector(".btn-text");

function btnLoaded(e) {
    e.disabled = true;
    clearTimeout(timer);

    spinner.classList.remove("hidden");
    text.classList.add("hidden");

    timer = setTimeout(() => {
        spinner.classList.add("hidden");
        text.classList.remove("hidden");
        e.disabled = false;
    }, 3000);
}
