<?= $this->extend('miseEnPage') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.9.3/dist/tailwind.min.css">
</head>
<body>

<main>
  <div style="diplay: flex; position: fixed; justify-content: center; right: 20px; bottom: 20px; padding: 10px; background-color: lightgreen; border: 2px solid #333; border-radius: 8px;">
    <a href="<?= url_to('Client\TESTAGE::pageTest') ?>">Test Page</a>
  </div>
  
    <section class="bg-gray-900 text-white rounded-xl p-10 mb-12">
    <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Bienvenue sur <span class="text-red-500">SuperCar</span>
        </h1>
        <p class="text-gray-300 text-lg mb-6">
            Découvrez, testez et vivez l’expérience des voitures de luxe.
        </p>
        <a href="#"
           class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            Voir les voitures
        </a>
    </div>
</section>

<!-- SECTIONS -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

    <!-- Carte 1 -->
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h2 class="text-xl font-bold mb-3">🚗 Marques prestigieuses</h2>
        <p class="text-gray-600">
            Audi, BMW, Mercedes, Porsche et bien plus encore.
        </p>
    </div>

    <!-- Carte 2 -->
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h2 class="text-xl font-bold mb-3">📅 Demande d’essai</h2>
        <p class="text-gray-600">
            Réservez un essai rapidement en quelques clics.
        </p>
    </div>

    <!-- Carte 3 -->
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <h2 class="text-xl font-bold mb-3">⭐ Expérience premium</h2>
        <p class="text-gray-600">
            Un service haut de gamme adapté à vos besoins.
        </p>
    </div>

</section>

<!-- APPEL À L'ACTION -->
<section class="bg-gray-100 rounded-xl p-8 text-center">
    <h2 class="text-2xl font-bold mb-4">
        Prêt à prendre le volant ?
    </h2>
    <p class="text-gray-600 mb-6">
        Connectez-vous pour faire une demande d’essai personnalisée.
    </p>

    <?php if (session()->get('status_connex')): ?>
        <button data-bs-toggle="modal" data-bs-target="#demandeEssaiModal"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold">
            Demander un essai
        </button>
    <?php else: ?>
        <a href="<?= url_to('Client\controllerConnexion::connexion') ?>"
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
            Se connecter
        </a>
    <?php endif; ?>
</section>

<!-- BOUTON FLOTTANT TEST -->
<div style="
    display: flex;
    position: fixed;
    right: 20px;
    bottom: 20px;
    padding: 10px 16px;
    background-color: lightgreen;
    border: 2px solid #333;
    border-radius: 8px;
    z-index: 50;
">
    <a href="<?= url_to('Client\TESTAGE::pageTest') ?>" class="font-semibold">
        Test Page
    </a>
</div>
</main>

<script src="<?= base_url('assets/js/pageAcceuil.js') ?>"></script>
</body>
</html>
<?= $this->endSection() ?>