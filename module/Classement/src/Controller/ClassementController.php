<?php

namespace Classement\Controller;

use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ClassementController extends AbstractActionController
{

    /** @var EntityManager $entityManager */
    private $entityManager;


    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;

    }
       
    
    public function indexAction()
    {
        $all = $this->entityManager->getRepository('Application\Entity\Participant')->findBy(
            array(), 
            array('time' => 'ASC')
        );

        return new ViewModel(
            array(
                "all" => $all
            )
        );
    }

    public function menAction()
    {
        $men = $this->entityManager->getRepository('Application\Entity\Participant')->findBy(
            array('sex' => 'male'),
            array('time' => 'ASC')
        );
        
        return new ViewModel(
            array(
                "men" => $men
                )
            );
        }
     
    public function womenAction()
    {
        $women = $this->entityManager->getRepository('Application\Entity\Participant')->findBy(
            array('sex' => 'female'),
            array('time' => 'ASC')
        );

        return new ViewModel(
            array(
                "women" => $women
            )
        );
    } 
}
