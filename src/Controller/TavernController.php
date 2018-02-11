<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-11
 * Time: 09:01
 */

namespace App\Controller;


use App\Entity\ActiveTask;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TavernController extends AbstractController
{
    public function isTaskActive(){
        $user_id = $this->get('session')->get('user_id');

        $query = $this->getDoctrine()
            ->getRepository(ActiveTask::class)
            ->findOneBy(array('user_id' => $user_id));

        return $query->task_id;
    }
}