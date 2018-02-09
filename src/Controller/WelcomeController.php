<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 15:14
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController
{
    /**
     * @Route("/", name="app_welcome")
     */
    public function welcome(){
        return new Response('<html><body>Yo!</body></html>');
    }
}