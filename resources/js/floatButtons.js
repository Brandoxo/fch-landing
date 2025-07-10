    const scrollHeader = document.getElementById('scrollHeader');
    const mainHeader = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            scrollHeader.classList.remove('opacity-0', 'pointer-events-none');
            scrollHeader.classList.add('opacity-100');
        } else {
            scrollHeader.classList.add('opacity-0', 'pointer-events-none');
            scrollHeader.classList.remove('opacity-100');
        }
    });


    const btn_back = document.getElementById("btn-back-to-top");
    const btn_whatsapp = document.getElementById("btn-whatsapp");

function backToTop() {
  btn_back.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

window.addEventListener("scroll", backToTop);