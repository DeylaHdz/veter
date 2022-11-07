
const filtro_tag = document.querySelector(".filtro-tag");
const filtros = document.querySelector(".filtros");

let show_hidd = true;

filtro_tag.addEventListener("click", () => {
    if (show_hidd) {
        filtros.style.display = "block";
        show_hidd = false
    } else {
        filtros.style.display = "none";
        show_hidd = true;
    }
})