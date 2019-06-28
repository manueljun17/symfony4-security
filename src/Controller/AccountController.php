<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Psr\Log\LoggerInterface;

/**
 * @IsGranted("ROLE_USER")
 */
class AccountController extends BaseController
{
    /**
     * @Route("/account", name="app_account")
     */
    public function index(LoggerInterface $logger)
    {
    	$logger->debug('Checking account page for '.$this->getUser()->getEmail());
    	// dd($this->getUser()->getFirstName());

        return $this->render('account/index.html.twig', [
        ]);
    }
}
