<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Acceuil::index');
$routes->get('/Acceuil', 'Acceuil::index' , ['as' => 'Acceuil']);
$routes->get('/Voiture/ajoutVoiture', 'controllerVoiture::formVoiture', ['as' => 'formVoiture']);
$routes->get('/Voiture/ListeVoiture', 'controllerVoiture::affichageVoiture', ['as' => 'affichageVoiture']);
$routes->post('/Voiture/ajoutVoiture', 'controllerVoiture::ajoutVoiture', ['as' => 'ajoutVoiture']);
$routes->get('/Acceuil/test', 'TESTAGE::TESTAGE', ['as' => 'test']);
