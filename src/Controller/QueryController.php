<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-10
 * Time: 15:18
 */

namespace App\Controller;


use App\Entity\TavernTask;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class QueryController extends AbstractController
{
    /**
     * @Route("new/task", name="query_only")
     */
    public function querys(){

        $query = new TavernTask();
        $query->setTaskContent('Tresc zadania szóśtego');
        $query->setTaskTime('10');
        $query->setTaskReward('120');
        $query->setTaskItemReward('');
        $query->setTaskSpecialReward('');
        $query->setTaskGoldReward('40');
        $query->setTaskTitle('Tytuł zadania szóśtego');
        $query->setTaskAlternateTitle('Tytuł alternatywny');
        $query->setTaskComparFrom('1');
        $query->setTaskComparTo('6');

        $do = $this->getDoctrine()->getManager();
        $do->persist($query);
        $do->flush();

        return new Response('Success');
}
}