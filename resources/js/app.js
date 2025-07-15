import "./bootstrap";
import "./menu";
import AOS from "aos";
import "aos/dist/aos.css";
import "./floatButtons";

// Inicializar AOS directamente (SIN función initAOS)
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 800,
        easing: "ease-in-out",
        once: true,
        offset: 100,
    });

    console.log("AOS inicializado correctamente");
});

const sidePosition1 = document.querySelector(".active1");
const sidePosition2 = document.querySelector('.active2');
const sidePosition3 = document.querySelector('.active3');
const sidePosition4 = document.querySelector('.active4');
const sidePosition5 = document.querySelector('.active5');

const path = window.location.pathname;

function userPosition()
{
    if (path === "/" ) {
        sidePosition1?.classList.remove('hidden', "hey");
    } else if (path === "/desing-and-art") {
        sidePosition2?.classList.remove('hidden');
    } else if (path === "/contact"){
        sidePosition4?.classList.remove("hidden");
    }
};

userPosition();
