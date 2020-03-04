<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    private $name;
    /**
     * @Route("/", name="learning")
     */
    public function aboutMe()
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    public function showMyName(){
       if (!isset($_POST['name'])){
         $_POST ['name'] = 'there! Angel of my nightmare 😇';
       }

        return $this->render('learning/showMyName.html.twig', [
            'controller_name' => 'LearningController', "name" => $_POST ['name']
        ]);
    }

    private function name() {
        return $this->name;
    }

    public function changeMyName() {
    if (!isset($_POST['name'])) {
        $_POST['name']= "undefined";
    }
    $this->name = $_POST['name'];
    return $this->render('learning/changeMyName.html.twig', [
        'controller_name' => 'LearningController',
        'name' => $this->name()
    ]);
}



}



