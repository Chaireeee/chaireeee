<?php

namespace Chaire\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * EventFrise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Chaire\EventBundle\Entity\EventFriseRepository")
 */
class EventFrise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="photolink", type="string", length=255)
     */
    private $photolink;

    /**
     * @var string
     *@Assert\NotNull
     * @Assert\Length(max=255)
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    //@Assert\File(maxSize="6000000")
// @Assert\NotNull
    /**
     *
     */
    private $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set photolink
     *
     * @param string $photolink
     * @return EventFrise
     */
    public function setPhotolink($photolink)
    {
        $this->photolink = $photolink;

        return $this;
    }

    /**
     * Get photolink
     *
     * @return string 
     */
    public function getPhotolink()
    {
        return $this->photolink;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return EventFrise
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    public function upload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
            return;
        }

        // On récupère le nom original du fichier de l'internaute
        $name = $this->file->getClientOriginalName();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $name);

        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->photolink = $name;

        // On crée également le futur attribut alt de notre balise <img>
        $this->alt = $name;
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'uploads/frise';
    }

    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}
