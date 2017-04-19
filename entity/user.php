<?php
/**
 * Created by PhpStorm.
 * User: nicol_000
 * Date: 19/04/2017
 * Time: 21:11
 */

namespace entity;


class user
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var integer
     */
    protected $statut;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * @param int $id
     * @return user
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return user
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     * @return user
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $this;
    }



}