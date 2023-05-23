<?php 

    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
    use Symfony\Component\HttpFoundation\Response; 
    use Symfony\Component\Routing\Annotation\Route; 
    class MailerController extends AbstractController 
    { #[Route('/mailler',name:'app_malekhamdi')] 
        public Function index(): Response
        {
            return $this->render('mailler/index.html.twig',[
                'controller_name'=>'MaillerController',
            ]);
        }
        
    }