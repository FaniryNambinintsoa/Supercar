function showModal(id) {
  const modal = document.getElementById(id);
  modal.style.display = "flex";

  setTimeout(() => {
    modal.querySelector(".modal-content").style.animation = "fadeOut 0.5s forwards";
    setTimeout(() => {
      modal.style.display = "none";
      modal.querySelector(".modal-content").style.animation = "fadeIn 0.3s ease-in-out";
    }, 500);
  }, 2500);
}

// ✅ Exécution automatique après chargement du DOM
document.addEventListener("DOMContentLoaded", function () {
  // Exemple : afficher directement le modal "successModal"
  if (document.getElementById("successModal")) {
    showModal("successModal");
  }
  if (document.getElementById("errorModal")) {
    showModal("errorModal");
  }
});

/* ############################################################ */

