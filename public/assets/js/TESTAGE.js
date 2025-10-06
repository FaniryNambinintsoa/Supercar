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

document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('car-360');
  const img = document.getElementById('car-image');
  let folder = container.dataset.folder || '';
  const filenamePattern = container.dataset.filename || 'car_{index}.webp';
  const total = parseInt(container.dataset.amount, 10) || 32;

  // assure trailing slash
  if (folder && !folder.endsWith('/')) folder += '/';

  // variables de drag
  let current = 1;
  let dragging = false;
  let lastX = 0;
  const threshold = 8; // px pour changer d'image (sensibilité)

  // préchargement (optionnel mais recommandé)
  const cache = new Array(total + 1);
  let loaded = 0;
  const loadingBadge = document.getElementById('ci-loading');

  function getUrl(i) {
    return folder + filenamePattern.replace('{index}', i);
  }

  for (let i = 1; i <= total; i++) {
    const im = new Image();
    im.src = getUrl(i);
    im.onload = () => {
      loaded++;
      // tant que la première image est prête, on l'affiche
      if (loaded === 1) {
        img.src = im.src;
        if (loadingBadge) loadingBadge.textContent = 'Chargé';
        setTimeout(() => loadingBadge && (loadingBadge.style.display = 'none'), 700);
      }
      // mettre à jour badge si besoin
      if (loadingBadge) loadingBadge.textContent = `Chargé ${loaded}/${total}`;
    };
    im.onerror = () => {
      // debug : afficher en console si une image ne se charge pas
      console.warn('Échec chargement image:', getUrl(i));
    };
    cache[i] = im;
  }

  function showImage(index) {
    if (index < 1) index = total;
    if (index > total) index = 1;
    current = index;
    // utiliser la version préchargée si disponible
    if (cache[current] && cache[current].src) img.src = cache[current].src;
    else img.src = getUrl(current);
  }

  // Pointer events unifiés (fonctionne pour souris + tactile)
  container.addEventListener('pointerdown', (e) => {
    dragging = true;
    lastX = e.clientX;
    try { container.setPointerCapture(e.pointerId); } catch (err) {}
  });

  container.addEventListener('pointermove', (e) => {
    if (!dragging) return;
    const diff = e.clientX - lastX;
    if (Math.abs(diff) >= threshold) {
      if (diff > 0) {
        // glissé vers la droite => montrer image précédente
        showImage(current + 1);
      } else {
        // glissé vers la gauche => montrer image suivante
        showImage(current - 1);
      }
      lastX = e.clientX;
    }
  });

  function releasePointer(e) {
    dragging = false;
    try { container.releasePointerCapture(e.pointerId); } catch (err) {}
  }
  container.addEventListener('pointerup', releasePointer);
  container.addEventListener('pointercancel', releasePointer);
  container.addEventListener('pointerleave', () => { dragging = false; });

  // support clavier
  window.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') showImage(current - 1);
    if (e.key === 'ArrowLeft') showImage(current + 1);
  });

  // helper: initial display
  showImage(1);
});