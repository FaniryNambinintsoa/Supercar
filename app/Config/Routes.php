<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*CLIENT PUBLIC */
$routes->get('/', 'Client\controllerAcceuil::index');
$routes->get('/Bienvenu', 'Client\controllerAcceuil::index');
$routes->get('/connexion', 'Client\controllerConnexion::connexion', ['as' => 'connexion']);
$routes->post('/verifClient', 'Client\controllerConnexion::client', ['as' => 'verifClient']);


 /* CLIENT */
    $routes->get('/Voiture/ListeVoiture', 'Client\controllerVoiture::affichageVoiture', ['as' => 'affichageVoiture']);

    $routes->get('/Voiture/Liste/(:segment)', 'Client\controllerVoiture::vitrineVoiture/$1');


    $routes->get('/Voiture/detailVoiture/(:num)', 'Client\controllerVoiture::detailVoiture/$1', ['as' => 'detailVoiture']);

    
$routes->get('/Acceuil', 'Client\controllerAcceuil::acceuil' , ['as' => 'acceuil']);

$routes->group('', ['filter' => 'clientAuth'], function($routes) {
   

    /* PAGE TEST */
    $routes->match(['get', 'post'], '/TESTAGE', 'Client\TESTAGE::pageTest', ['as' => 'test']);
    $routes->get('/TESTAGE/hello', 'Client\TESTAGE::hello', ['as' => 'hello']);
    $routes->post('/TESTAGE/save', 'Client\TESTAGE::save');
$routes->get('/deconnexion', 'Client\controllerConnexion::deconnexion', ['as' => 'deconnexion']);
    /* $routes->post('/connexion/save', 'controllerConnexion::save'); */
    /* SERVICE */
$routes->get('/service', 'Client\controllerService::service', ['as' => 'service']);

/*DEMANDE D'ESSAI */
$routes->get('/formEssai', 'Client\controllerEssai::formEssai', ['as' => 'formEssai']);
$routes->post('/soumettreEssai', 'Client\controllerEssai::soumettre', ['as' => 'soumettreEssai']);
    
});


/* VOITURES */


/* CONNEXION ET DECONNEXION */







/* INSCRIPTION */
$routes->get('/Inscription', 'Client\controllerClient::formInscription');
$routes->post('/Inscription', 'Client\controllerClient::inscription', ['as' => 'inscription']);


/* CONTACT */
$routes->get('/contact', 'Client\controllerContact::contact', ['as' => 'contact']);
$routes->post('/envoyerMessage', 'Client\controllerContact::envoyerMessage', ['as' => 'envoyerMessage']);






/*ADMIN PUBLIC */



$routes->group('Admin', ['filter' => 'adminAuth'], function($routes) {
    /* ADMIN */
    $routes->get('TableauDeBord', 'Admin\controllerAdmin::index' , ['as' => 'admin']);
    $routes->get('service', 'Admin\controllerService::adminService', ['as' => 'adminService']);
    $routes->get('/deconnexion', 'Admin\controllerConnexion::deconnexion', ['as' => 'deconnexion']);
    $routes->get('listeCommentaires', 'Admin\controllerContact::listeComs', ['as' => 'listeCommentaires']);
    $routes->get('listeDemandes', 'Admin\controllerEssai::listeDmd', ['as' => 'listeDemandes']);
    $routes->post('ajoutUneVoiture', 'Admin\controllerVoiture::ajoutVoiture', ['as' => 'ajoutVoiture']);
    $routes->get('ajoutVoiture', 'Admin\controllerVoiture::formVoiture', ['as' => 'formVoiture']);
    
    
});

$routes->post('/verifAdmin', 'Admin\controllerConnexion::verifAdmin', ['as' => 'verifAdmin']);


/* ACCEUIL */
