document.addEventListener("DOMContentLoaded", function () {
  const navigationMenu = document.getElementById("navigation-menu");

  fetch("../html/nav2.html")
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
        cerrar.addEventListener("click", function () {
          nav.classList.remove("visible");
        });
      }

      const ButtonClose = document.getElementById("CloseButton");

      if (ButtonClose) {
        ButtonClose.addEventListener("click", function () {
          window.location.href = "../html/index.php";
        });
      }
    })
    .catch((error) => console.log(error));
});
