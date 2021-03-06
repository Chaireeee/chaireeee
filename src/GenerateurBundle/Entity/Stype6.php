<?php

namespace GenerateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stype1
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stype6 extends Slide
{



    /**
     * @var string
     *
     * @ORM\Column(name="texte1", type="string", length=3000)
     */
    private $texte1;

    /**
     * @var string
     *
     * @ORM\Column(name="texte2", type="string", length=3000)
     */
    private $texte2;

    /**
     * @var string
     *
     * @ORM\Column(name="texte3", type="string", length=3000)
     */
    private $texte3;

    /**
     * @param string $texte1
     */
    public function setTexte1($texte1)
    {
        $this->texte1 = $texte1;
    }

    /**
     * @return string
     */
    public function getTexte1()
    {
        return $this->texte1;
    }

    /**
     * @param string $texte2
     */
    public function setTexte2($texte2)
    {
        $this->texte2 = $texte2;
    }

    /**
     * @return string
     */
    public function getTexte2()
    {
        return $this->texte2;
    }

    /**
     * @param string $texte3
     */
    public function setTexte3($texte3)
    {
        $this->texte3 = $texte3;
    }

    /**
     * @return string
     */
    public function getTexte3()
    {
        return $this->texte3;
    }



    /**
     * @ORM\OneToOne(targetEntity="GenerateurBundle\Entity\Picture", cascade={"persist","remove"})
     */
    private $photo1;

    /**
     * @ORM\OneToOne(targetEntity="GenerateurBundle\Entity\Picture", cascade={"persist","remove"})
     */
    private $photo2;


    /**
     * @ORM\OneToOne(targetEntity="GenerateurBundle\Entity\Picture", cascade={"persist","remove"})
     */
    private $photo3;

    /**
     * @param mixed $photo3
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;
    }

    /**
     * @return mixed
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }


    /**
     * @param mixed $photo1
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;
    }

    /**
     * @return mixed
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * @param mixed $photo2
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;
    }

    /**
     * @return mixed
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }



}