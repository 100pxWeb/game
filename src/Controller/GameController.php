<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 17:16
 */
namespace App\Controller;

use App\Entity\Window_user_stats;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

        return $this->render('game.html.twig', array(
            'test' => 'great to see you! ' . $test . ' SESJA: ' . $user_id
        ));
    }

    /**
     * @Route("/controll_json", name="controll_json")
     */
    public function controllJson(){
        // get users gold etc
        $user_id = $this->get('session')->get('user_id');
        $db_user = $this->getDoctrine()
            ->getRepository(Window_user_stats::class)
            ->findOneBy(array('id' => $user_id));

        $user_gold = $db_user->gold;
        $user_exp = $db_user->exp;
        $user_stamina = $db_user->stamina;

        $baseArray = array(
            'user_id' => $this->get('session')->get('user_id'),
            'logged' => $this->get('session')->get('logged')
        );

        $goldArray = array(
            'user_gold' => $user_gold,
            'user_exp' => $user_exp,
            'user_stamina' => $user_stamina
        );
        $newArray = array(
            'user_info' => $baseArray,
            'user_window_stats' => $goldArray
        );

        echo json_encode($newArray);

        return new Response('');
    }

}