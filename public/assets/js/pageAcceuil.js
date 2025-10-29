function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

function openNcloseVoitChoice() {
  let div = document.getElementById("voitChoice");

  if (div.style.display === "none" || div.style.display === "") {
    div.style.display = "block"; // ouvrir
  } else {
    div.style.display = "none";  // fermer
  }
}