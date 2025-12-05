<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* ACCEUIL */
$routes->get('/', 'controllerAcceuil::index');
$routes->get('/Bienvenu', 'controllerAcceuil::index');
$routes->get('/Acceuil', 'controllerAcceuil::acceuil' , ['as' => 'acceuil']);




/* VOITURES */
$routes->get('/Voiture/ajoutVoiture', 'controllerVoiture::formVoiture', ['as' => 'formVoiture']);
$routes->get('/Voiture/ListeVoiture', 'controllerVoiture::affichageVoiture', ['as' => 'affichageVoiture']);

$routes->get('/Voiture/Liste/(:segment)', 'ControllerVoiture::vitrineVoiture/$1');


$routes->get('/Voiture/detailVoiture/(:num)', 'controllerVoiture::detailVoiture/$1', ['as' => 'detailVoiture']);
$routes->post('/Voiture/ajoutUneVoiture', 'controllerVoiture::ajoutVoiture', ['as' => 'ajoutVoiture']);

/* PAGE TEST */
$routes->match(['get', 'post'], '/TESTAGE', 'TESTAGE::pageTest', ['as' => 'test']);
$routes->get('/TESTAGE/hello', 'TESTAGE::hello', ['as' => 'hello']);
$routes->post('/TESTAGE/save', 'TESTAGE::save');


/* ADMIN */
$routes->get('/Admin', 'controllerAdmin::index' , ['as' => 'admin']);
$routes->get('/Admin/service', 'controllerService::adminService', ['as' => 'adminService']);


/* CONNEXION ET DECONNEXION */
$routes->get('/connexion', 'controllerConnexion::connexion', ['as' => 'connexion']);
$routes->post('/verifClient', 'controllerConnexion::client', ['as' => 'verifClient']);
$routes->post('/verifAdmin', 'controllerConnexion::admin', ['as' => 'verifAdmin']);
$routes->get('/deconnexion', 'controllerConnexion::deconnexion', ['as' => 'deconnexion']);
/* $routes->post('/connexion/save', 'controllerConnexion::save'); */

$routes->match(['get', 'post'], '/controllerConnexion/choixEspace', 'controllerConnexion::choixEspace', ['as' => 'choixEspace']);


/* INSCRIPTION */
$routes->get('/Inscription', 'controllerClient::formInscription');
$routes->post('/Inscription', 'controllerClient::inscription', ['as' => 'inscription']);


/* CONTACT */
$routes->get('/contact', 'controllerContact::contact', ['as' => 'contact']);


/* SERVICE */
$routes->get('/service', 'controllerService::service', ['as' => 'service']);