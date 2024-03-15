<?php

use Timber\Timber;

$context = Timber::context();

Timber::render('templates/home.twig', $context);
