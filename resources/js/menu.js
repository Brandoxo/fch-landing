const aside = document.querySelector("#aside");
const lateralMenu = document.querySelector("#lateral-menu");
const closeNavBtn = document.querySelector("#closeNavBtn");
const openNavBtns = document.querySelectorAll(".open-nav-btn");

openNavBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        openNav();
    });
});

closeNavBtn.addEventListener("click", closeNav);

function openNav() {
    aside.classList.add("w-full");
    document.body.classList.add("overflow-hidden");
    lateralMenu.classList.add("w-72");
    lateralMenu.classList.remove("w-0");

    document.addEventListener("click", handleClickOutside);
}

function closeNav() {
    aside.classList.remove("w-full");
    document.body.classList.remove("overflow-hidden");
    lateralMenu.classList.remove("w-72");
    lateralMenu.classList.add("w-0");

    document.removeEventListener("click", handleClickOutside);
}

function handleClickOutside(event) {
    if (
        !lateralMenu.contains(event.target) &&
        ![...openNavBtns].some((btn) => btn.contains(event.target))
    ) {
        closeNav();
    }
}
