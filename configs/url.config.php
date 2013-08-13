<?php

$urls = array(
    'contacto' => array('module' => 'frontend','controller' => 'Index', 'action' => 'contacto'),
    'home' => array('module' => 'frontend','controller' => 'Index', 'action' => 'index')
);

/* no eliminar esta linea */
Application::$urls = $urls;

