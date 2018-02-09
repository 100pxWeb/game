<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 14:49
 */

namespace App\Controller;

use App\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{

    /**
     * @Route("users/new")
     */
    public function newAction(){
        $user = new Users();
        $user->setMail('mail@mail.com');

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new Response('<html><body>Sucess</body></html>');
    }


}