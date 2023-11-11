document.addEventListener("DOMContentLoaded", function () {
  const navigationMenu = document.getElementById("navigation-menu");

  fetch("../html/nav.html")
    .then((response) => response.text())
    .then((data) => {
      navigationMenu.innerHTML = data;

      const nav = document.getElementById("Nav");
      const abrir = document.getElementById("ButtonOpen");
      const cerrar = document.getElementById("btn-cerrar");

      if (nav) {
        abrir.addEventListener("click", function () {
          nav.classList.add("visible");
        });
      }

      if (nav) {
        cerrar.addEventListener("click", function() {
            nav.classList.remove("visible");
        })
      }
      const ButtonRegister = document.getElementById("ButtonRegister");

      if (ButtonRegister) {
        ButtonRegister.addEventListener("click", function () {
          console.log("¡Botón de registro clicado!");
          window.location.href = "Registro.php";
        });
      }
    })
    .catch((error) => console.log(error));
});

document.addEventListener("DOMContentLoaded", function () {
  const RegisterButton = document.getElementById("RegisterButton");

  if (RegisterButton) {
    RegisterButton.addEventListener("click", function () {
      window.location.href = "Registro.php";
    });
  }
});
