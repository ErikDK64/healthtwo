<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @route("/medicijnen/medicijn", name="lijstmedicijne")
     */
    public function showMedicijnenAction2($Entitymanagar){
        return $this->render('medicijnen/med.html.twig');
    }

}