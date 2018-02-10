<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-02-10
 * Time: 14:30
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="window_user_stats")
 */
class Window_user_stats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    public $gold;
    /**
     * @ORM\Column(type="string")
     */
    public $exp;
    /**
     * @ORM\Column(type="string")
     */
    public $stamina;

    /**
     * @return mixed
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * @param mixed $gold
     */
    public function setGold($gold): void
    {
        $this->gold = $gold;
    }

    /**
     * @return mixed
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param mixed $exp
     */
    public function setExp($exp): void
    {
        $this->exp = $exp;
    }

    /**
     * @return mixed
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * @param mixed $stamina
     */
    public function setStamina($stamina): void
    {
        $this->stamina = $stamina;
    }




}