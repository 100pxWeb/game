<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 17:16
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="app_game")
     */
    public function GameView(){
        if(!$this->get('session')->get('logged')){
            return $this->redirectToRoute('app_welcome');
        } 

        $request = Request::createFromGlobals();
        $test = $request->query->get('testing');


        $sejsa = $this->get('session')->get('logged');
        $user_id = $this->get('session')->get('user_id');

        return $this->render('main/game.html.twig', array(
            'test' => 'great to see you! ' . $test . ' SESJA: ' . $user_id
        ));
    }
}