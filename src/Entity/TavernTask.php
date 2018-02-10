<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TavernTaskRepository")
 */
class TavernTask
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */public $id;
    /**
     * @ORM\Column(type="string")
     */
    public $task_content;
    /**
     * @ORM\Column(type="string")
     */
    public $task_time;
    /**
     * @ORM\Column(type="string")
     */
    public $task_reward;
    /**
     * @ORM\Column(type="string")
     */
    public $task_gold_reward;
    /**
     * @ORM\Column(type="string")
     */
    public $task_item_reward;
    /**
     * @ORM\Column(type="string")
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
     * @ORM\Column(type="string")
     */
    public $task_compar_from;
    /**
     * @ORM\Column(type="string")
     */
    public $task_compar_to;

    /**
     * @return mixed
     */
    public function getTaskContent()
    {
        return $this->task_content;
    }

    /**
     * @param mixed $task_content
     */
    public function setTaskContent($task_content): void
    {
        $this->task_content = $task_content;
    }

    /**
     * @return mixed
     */
    public function getTaskTime()
    {
        return $this->task_time;
    }

    /**
     * @param mixed $task_time
     */
    public function setTaskTime($task_time): void
    {
        $this->task_time = $task_time;
    }

    /**
     * @return mixed
     */
    public function getTaskReward()
    {
        return $this->task_reward;
    }

    /**
     * @param mixed $task_reward
     */
    public function setTaskReward($task_reward): void
    {
        $this->task_reward = $task_reward;
    }

    /**
     * @return mixed
     */
    public function getTaskGoldReward()
    {
        return $this->task_gold_reward;
    }

    /**
     * @param mixed $task_gold_reward
     */
    public function setTaskGoldReward($task_gold_reward): void
    {
        $this->task_gold_reward = $task_gold_reward;
    }

    /**
     * @return mixed
     */
    public function getTaskItemReward()
    {
        return $this->task_item_reward;
    }

    /**
     * @param mixed $task_item_reward
     */
    public function setTaskItemReward($task_item_reward): void
    {
        $this->task_item_reward = $task_item_reward;
    }

    /**
     * @return mixed
     */
    public function getTaskSpecialReward()
    {
        return $this->task_special_reward;
    }

    /**
     * @param mixed $task_special_reward
     */
    public function setTaskSpecialReward($task_special_reward): void
    {
        $this->task_special_reward = $task_special_reward;
    }

    /**
     * @return mixed
     */
    public function getTaskTitle()
    {
        return $this->task_title;
    }

    /**
     * @param mixed $task_title
     */
    public function setTaskTitle($task_title): void
    {
        $this->task_title = $task_title;
    }

    /**
     * @return mixed
     */
    public function getTaskAlternateTitle()
    {
        return $this->task_alternate_title;
    }

    /**
     * @param mixed $task_alternate_title
     */
    public function setTaskAlternateTitle($task_alternate_title): void
    {
        $this->task_alternate_title = $task_alternate_title;
    }

    /**
     * @return mixed
     */
    public function getTaskComparFrom()
    {
        return $this->task_compar_from;
    }

    /**
     * @param mixed $task_compar_from
     */
    public function setTaskComparFrom($task_compar_from): void
    {
        $this->task_compar_from = $task_compar_from;
    }

    /**
     * @return mixed
     */
    public function getTaskComparTo()
    {
        return $this->task_compar_to;
    }

    /**
     * @param mixed $task_compar_to
     */
    public function setTaskComparTo($task_compar_to): void
    {
        $this->task_compar_to = $task_compar_to;
    }
}
