<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-11
 * Time: 09:20
 */

namespace App\Functions;


use App\Entity\ActiveTask;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TavernFunctions extends AbstractController
{
    public function isTaskActive($user_id){

        return $user_id;
    }
}