const toggle = document.getElementById('toggle');
const form = document.getElementById('loginForm');

let mode = 'client';

toggle.addEventListener('click', () => {
  if (mode === 'client') {
    mode = 'admin';
    toggle.classList.add('admin');
    toggle.textContent = 'Admin';
    form.action = '/verifAdmin'; // change la cible du formulaire
    console.log('Formulaire redirigé vers /admin');
  } else {
    mode = 'client';
    toggle.classList.remove('admin');
    toggle.textContent = 'Espace client';
    form.action = '/verifClient'; // change la cible du formulaire
    console.log('Formulaire redirigé vers /client');
  }
});