function toggleNav() {
  let sidebar = document.getElementById("mySidenav");
  let main = document.getElementById("main");
  let navspan = document.getElementById("navspan");
  let sidebarWidth = window.getComputedStyle(sidebar).width;

  if (sidebarWidth === "264px") {
    // 🔹 Si déjà ouverte → fermer
    sidebar.style.width = "0";
    main.style.marginLeft = "0";
    navspan.style.display = "inline";
  } else {
    // 🔹 Sinon → ouvrir
    sidebar.style.width = "264px";
    main.style.marginLeft = "264px";
    navspan.style.display = "none";
  }
}

function openNcloseVoitChoice() {
  let div = document.getElementById("voitChoice");

  if (div.style.display === "none" || div.style.display === "") {
    div.style.display = "block"; // ouvrir
  } else {
    div.style.display = "none";  // fermer
  }
}

const div = document.getElementById('mySidenav');
let isScrolling;

div.addEventListener('scroll', () => {
  div.classList.add('scrolling');
  clearTimeout(isScrolling);
  isScrolling = setTimeout(() => {
    div.classList.remove('scrolling');
  }, 800); // cache la scrollbar 0.8s après le scroll
});