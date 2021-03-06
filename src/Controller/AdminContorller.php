<?php


namespace App\Controller;
use App\Entity\Medicijnen;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AdminContorller extends AbstractController
{
    /**
     * @route("/medicijnen/lijst", name="lijstmedicijnen")
     */
    public function showMedicijnenAction(EntityManagerInterface $entitymanager){
        $medicijnen = $entitymanager->getRepository(Medicijnen::class)->findAll();
        return $this->render('medicijnen/show.html.twig',[
            'medicijnen' => $medicijnen
            ]);
    }
}