<?php

namespace Sunseeker\Controller;

use Maverick\Controller\ErrorController as MaverickErrorController,
    Twig_Environment;

class ErrorController extends MaverickErrorController {
    private $twig;

    public function __construct(Twig_Environment $twig) {
        $this->twig = $twig;
        parent::__construct();
    }

    public function show404ErrorAction() {
        return $this->twig->render('errors/pageNotFound.twig');
    }
}