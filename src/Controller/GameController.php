<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-09
 * Time: 17:16
 */
namespace App\Controller;

use App\Entity\ActiveTask;
use App\Entity\TavernTask;
use App\Entity\Window_user_stats;
use App\Repository\TavernTaskRepository;
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

    /**
     * @Route("tavern_json", name="tavern_json")
     */
    public function tavernJson(){
        $user_id = $this->get('session')->get('user_id');
        $query = $this->getDoctrine()
            ->getRepository(Window_user_stats::class)
            ->findOneBy(array('id' => $user_id));

        $user_level = $query->level;

        $compar_from = $user_level;
        $compar_to = $user_level + 5;

        $query = $this->getDoctrine()
            ->getRepository(TavernTask::class)
            ->findByLvlCompar($compar_from, $compar_to);

        shuffle($query);

        $first_task_id = $query[0]->id;

        $taskArray = array(
            'task_id' => $query[0]->id,
            'task_content' => $query[0]->task_content,
            'task_time' => $query[0]->task_time,
            'task_reward' => $query[0]->task_reward,
            'task_gold_reward' => $query[0]->task_gold_reward,
            'task_item_reward' => $query[0]->task_item_reward,
            'task_special_reward' => $query[0]->task_special_reward,
            'task_title' => $query[0]->task_title
        );

        shuffle($query);

        $second_task_id = $query[0]->id;

        if($first_task_id == $second_task_id){
            while($first_task_id == $second_task_id){
                shuffle($query);
                $second_task_id = $query[0]->id;
            }
            $task2Array = array(
                'task_id' => $query[0]->id,
                'task_content' => $query[0]->task_content,
                'task_time' => $query[0]->task_time,
                'task_reward' => $query[0]->task_reward,
                'task_gold_reward' => $query[0]->task_gold_reward,
                'task_item_reward' => $query[0]->task_item_reward,
                'task_special_reward' => $query[0]->task_special_reward,
                'task_title' => $query[0]->task_title
            );
        } else {
            $task2Array = array(
                'task_id' => $query[0]->id,
                'task_content' => $query[0]->task_content,
                'task_time' => $query[0]->task_time,
                'task_reward' => $query[0]->task_reward,
                'task_gold_reward' => $query[0]->task_gold_reward,
                'task_item_reward' => $query[0]->task_item_reward,
                'task_special_reward' => $query[0]->task_special_reward,
                'task_title' => $query[0]->task_title
            );
        }




        $taskJson = array(
            'task_info' => $taskArray,
            'task2_info' => $task2Array
        );

        echo json_encode($taskJson);

        return new Response('');
    }


    /**
     * @Route("claim_task", name="claim_task")
     */
    public function clamTask(Request $request){

        $data = json_decode($request->getContent());

        $task_id = $data->task_id;
        $user_id = $this->get('session')->get('user_id');

        $query = new ActiveTask();

        $query->setTaskId($task_id);
        $query->setUserId($user_id);

        $do = $this->getDoctrine()->getManager();
        $do->persist($query);
        $do->flush();

        return new Response('');
    }

}