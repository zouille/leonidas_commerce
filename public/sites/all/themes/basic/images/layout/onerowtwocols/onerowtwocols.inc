<?php

// Plugin definition
$plugin = array(
  'title' => t('Une ligne deux colonne'),
  'category' => t('onerowtwocols'),
  'icon' => 'onerowtwocols.png',
  'theme' => 'panels_twocol',
  'css' => 'onerowtwocols.css',
  'regions' => array(
  	'top' => t('Top '),
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
