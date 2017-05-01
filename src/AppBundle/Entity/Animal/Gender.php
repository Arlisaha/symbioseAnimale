<?php

namespace AppBundle\Entity\Animal;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Gender
 * @package AppBundle\Entity\Animal
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Animal\AnimalGenderRepository")
 * @ORM\Table(name="animal_gender")
 */
class Gender
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(name="id", type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(name="label", type="string", length=7)
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
	 * @return Gender
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
	 * @return Gender
	 */
	public function setLabel($label)
	{
		$this->label = $label;

		return $this;
	}
}