<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request)
    {

        return $this->json([
            'message' => $this->translator->trans('Symfony is great'),
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}
