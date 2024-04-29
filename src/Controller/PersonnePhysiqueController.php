<?php

namespace App\Controller;

use App\Entity\CanalDeContact;
use App\Entity\PersonnePhysique;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CanalDeContactRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PersonnePhysiqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PersonnePhysiqueController extends AbstractController
{
    #[Route('/rfc/api/personnes', name: 'get_personnes', methods: ["GET"])]
    public function index(PersonnePhysiqueRepository $repository): Response
    {
        $personnes = $repository->findAll();
        return $this->json($personnes, 200, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }
    #[Route('/rfc/api/personnes/{id}', name: 'app_personne_physique', methods: ["GET"])]
    public function find(PersonnePhysiqueRepository $repository, $id): Response
    {
        $personnes = $repository->find($id);   // Recherche de l'entité PersonnePhysique par ID.
        return $this->json($personnes, 200, ["Content-Type" => "application/json"], [  // Retourne l'entité trouvée en format JSON avec un code de statut HTTP 200.
            'groups' => ['personnes.index']
        ]);
    }

    #[Route('/rfc/api/personnes/{id}', name: 'deleteUser', methods: ["DELETE"])]
    public function delete(PersonnePhysiqueRepository $repository, EntityManagerInterface $em, $id): Response
    {
        $personne = $repository->find($id);
        if ($personne) {
            $em->remove($personne);  // Marquer l'entité pour suppression.
            $em->flush();            // Exécuter la suppression et toutes les autres opérations en attente.
            return $this->json(null, 204);
        } else {
            return $this->json(null, 404);
        }
    }

    #[Route('/rfc/api/personnes/{id}', name: 'update_personne_physique', methods: ["PUT"])]
    public function update(
        Request $request,
        EntityManagerInterface $em,
        PersonnePhysiqueRepository $repository,
        $id
    ): Response {
        $personne = $repository->find($id);

        if (!$personne) {
            return $this->json(null, 404);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['nom'])) {
            $personne->setNom($data['nom']);
        }

        if (isset($data['prenom'])) {
            $personne->setPrenom($data['prenom']);
        }

        // Gérer les canaux de contact
        if (isset($data['canaldeContact'])) {
            // Supprimer tous les canaux existants
            foreach ($personne->getCanaldeContact() as $existingCanal) {
                $personne->removeCanaldeContact($existingCanal);
                $em->remove($existingCanal);
            }
            $em->flush(); // Avec l'appel à flush, l'état de l'entité en mémoire est synchronisé avec la base de données.

            // Ajouter les nouveaux canaux
            foreach ($data['canaldeContact'] as $canalData) {
                $canal = new CanalDeContact();

                if (isset($canalData['type'])) {
                    $canal->setType($canalData['type']);
                }
                if (isset($canalData['valeur'])) {
                    $canal->setValeur($canalData['valeur']);
                }
                if (isset($canalData['ligne1'])) {
                    $canal->setLigne1($canalData['ligne1']);
                }
                if (isset($canalData['ligne2'])) {
                    $canal->setLigne2($canalData['ligne2']);
                }
                if (isset($canalData['ligne3'])) {
                    $canal->setLigne3($canalData['ligne3']);
                }
                if (isset($canalData['ligne4'])) {
                    $canal->setLigne4($canalData['ligne4']);
                }
                if (isset($canalData['ligne5'])) {
                    $canal->setLigne5($canalData['ligne5']);
                }
                if (isset($canalData['ligne6'])) {
                    $canal->setLigne6($canalData['ligne6']);
                }                
                $personne->addCanaldeContact($canal);
                $em->persist($canal);
            }
        }

        $em->persist($personne);
        $em->flush();

        return $this->json($personne, 200, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }
    #[Route('/rfc/api/personnes/{id}', name: 'patch_personne_physique', methods: ["PATCH"])]
    public function patch(
        Request $request,
        EntityManagerInterface $em,
        PersonnePhysiqueRepository $repository,
        $id
    ): Response {
        $personne = $repository->find($id);

        if (!$personne) {
            return $this->json(null, 404);
        }

        $data = json_decode($request->getContent(), true);

        if (array_key_exists('nom', $data)) {   // Mettre à jour uniquement les champs fournis
            $personne->setNom($data['nom']);
        }

        if (array_key_exists('prenom', $data)) {
            $personne->setPrenom($data['prenom']);
        }

        $em->persist($personne);
        $em->flush();

        return $this->json($personne, 200, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }

    #[Route('/rfc/api/personnes', methods: ["POST"])]
    public function create(
        #[MapRequestPayload( // Prends les données qui arrivent dans cette requête et utilise-les pour remplir automatiquement un objet
            serializationContext: [  // Utilise seulement les règles que j'ai définies pour 'personnes.create' quand tu prends les données de la requête et que tu les mets dans mon objet
                'groups' => ['personnes.create']
            ]
        )]
        PersonnePhysique $personne,
        EntityManagerInterface $em
    ) {

        $em->persist($personne);
        $em->flush();

        return $this->json($personne, 201, ["Content-Type" => "application/json"], [
            'groups' => ['personnes.index']
        ]);
    }
}
