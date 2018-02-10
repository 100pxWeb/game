<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-10
 * Time: 14:58
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Tavern_tasks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;
    /**
     * @ORM\Column(type="string")
     */
    public $task_content;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_time;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_reward;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_gold_reward;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_item_reward;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_special_reward;
    /**
     * @ORM\Column(type="string")
     */
    public $task_title;
    /**
     * @ORM\Column(type="string")
     */
    public $task_alternate_title;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_compar_from;
    /**
     * @ORM\Column(type="integer")
     */
    public $task_compar_to;



}