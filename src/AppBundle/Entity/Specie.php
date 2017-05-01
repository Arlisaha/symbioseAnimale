<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Specie
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecieRepository")
 * @ORM\Table(name="specie")
 */
class Specie
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(name="id", type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(name="label", type="string", length=255)
	 */
	private $label;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 *
	 * @return Specie
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLabel()
	{
		return $this->label;
	}

	/**
	 * @param mixed $label
	 *
	 * @return Specie
	 */
	public function setLabel($label)
	{
		$this->label = $label;

		return $this;
	}
}