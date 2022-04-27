const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav-menu_visible");

  if (navMenu.classList.contains("nav-menu_visible")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
  }
});

const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

var texto = document.getElementById("testimonio");
var boton = document.getElementById("button");
var categoriaCajonPublicar = document.getElementById("categoriasCajon");
var categoriaFinalCajon = categoriaCajonPublicar.value;
var teclaEnter = 13;
var resultado = document.getElementById("publicacionDeTestimonio");
boton.addEventListener("click", paraPublicarClick);
boton.addEventListener("keydown", paraPublicarTeclado);



function paraPublicarTeclado(teclaOprimida) {
    if(teclaOprimida.keyCode == teclaEnter) {
        resultado.textContent = texto.value;
    }
}
function paraPublicarClick() {
    resultado.textContent = texto.value;
} 