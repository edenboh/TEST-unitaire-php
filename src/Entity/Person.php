<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints\Date;

class Person
{
    private int $id;
    private \DateTimeImmutable $createAt;
    private string $firstName;
    private string $lastName;
    private int $age;
    private \DateTimeImmutable $birthDate;
    private array $tshirts;


    public function __construct()
    {
        $this->id = random_int(0,4000);
        $this->createAt=new \DateTimeImmutable('now',new \DateTimeZone("Europe/paris"));
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return \DateTimeImmutable
     */
    public function getCreateAt(): \DateTimeImmutable
    {
        return $this->createAt;
    }



    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getBirthDate(): \DateTimeImmutable
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTimeImmutable $birthDate
     */
    public function setBirthDate(\DateTimeImmutable $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return array
     */
    public function getTshirts(): array
    {
        return $this->tshirts;
    }

    /**
     * @param array $tshirts
     */
    public function setTshirts(array $tshirts): void
    {
        $this->tshirts = $tshirts;
    }
}