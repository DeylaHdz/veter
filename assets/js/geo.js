const btn_aceptar = document.querySelector("#btn_aceptar");
const btn_rechazar = document.querySelector("#btn_rechazar");

const showPosition = (position) => {
  alert("Latitude: " + position.coords.latitude + " and Longitude: " + position.coords.longitude);
}

btn_aceptar.addEventListener("click", () => {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Su aplicación o navegador Web no soporta la geolocalización.")
    }
});

btn_rechazar.addEventListener("click", () => {
    window.location.href("/vet-er");
});