const btnMobile = document.querySelector(".menu__mobile");
const menuList = document.querySelector(".menu__list");

function toggleMenu(event) {
  if (event.type === "touchstart") event.preventDefault();
  menuList.classList.toggle("active");
  const active = menuList.classList.contains("active");
  event.currentTarget.setAttribute("aria-expanded", active);

  if (active) {
    event.currentTarget.setAttribute("aria-label", "Fechar Menu");
  } else {
    event.currentTarget.setAttribute("aria-label", "Abrir Menu");
  }
}

btnMobile.addEventListener("click", toggleMenu);
btnMobile.addEventListener("touchstart", toggleMenu);
