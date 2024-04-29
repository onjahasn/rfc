<?php

namespace App\Controller;

use App\Repository\PrmRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrmController extends AbstractController
{
    #[Route('/rfc/api/prm', name: 'getPrm', methods: ["GET"])]
    public function index(PrmRepository $repository): Response
    {
        $prm = $repository->findAll();
        return $this->json($prm, 200, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }
    #[Route('/rfc/api/prm/{id}', name: 'app_prm', methods: ["GET"])]
    public function find(PrmRepository $repository, $id): Response
    {
        $prm = $repository->find($id);
        return $this->json($prm, 200, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }
    // #[Route('/prm', name: 'app_prm')]
    // public function index(): Response
    // {
    //     return $this->render('prm/index.html.twig', [
    //         'controller_name' => 'PrmController',
    //     ]);
    // }
}
