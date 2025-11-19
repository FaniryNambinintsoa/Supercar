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
$routes->get('/Voiture/detailVoiture', 'controllerVoiture::vitrineVoiture', ['as' => 'vitrineVoiture']);
$routes->get('/Voiture/vitrineVoiture/detailVoiture', 'controllerVoiture::detailVoiture', ['as' => 'detailVoiture']);
$routes->post('/Voiture/ajoutVoiture', 'controllerVoiture::ajoutVoiture', ['as' => 'ajoutVoiture']);

/* PAGE TEST */
$routes->match(['get', 'post'], '/TESTAGE', 'TESTAGE::pageTest', ['as' => 'test']);
$routes->get('/TESTAGE/hello', 'TESTAGE::hello', ['as' => 'hello']);
$routes->post('/TESTAGE/save', 'TESTAGE::save');


/* ADMIN */
$routes->get('/Admin', 'controllerAdmin::index' , ['as' => 'admin']);


/* CONNEXION */
$routes->get('/connexion', 'controllerConnexion::connexion', ['as' => 'connexion']);
/* $routes->post('/connexion/save', 'controllerConnexion::save'); */

$routes->match(['get', 'post'], '/controllerConnexion/choixEspace', 'controllerConnexion::choixEspace', ['as' => 'choixEspace']);


/* INSCRIPTION */
$routes->get('/Inscription', 'controllerClient::formInscription');
$routes->post('/Inscription', 'controllerClient::inscription', ['as' => 'inscription']);


/* CONTACT */
$routes->get('/contact', 'controllerContact::pageContact', ['as' => 'contact']);
