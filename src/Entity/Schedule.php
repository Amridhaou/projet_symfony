<?php

namespace App\Entity;

use App\Repository\ScheduleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScheduleRepository::class)]
class Schedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $monday = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $tuesday = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $wednesday = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $thursday = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $friday = null;

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $saturday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getMonday(): ?string
    {
        return $this->monday;
    }

    public function setMonday(?string $monday): void
    {
        $this->monday = $monday;
    }

    public function getTuesday(): ?string
    {
        return $this->tuesday;
    }

    public function setTuesday(?string $tuesday): void
    {
        $this->tuesday = $tuesday;
    }

    public function getWednesday(): ?string
    {
        return $this->wednesday;
    }

    public function setWednesday(?string $wednesday): void
    {
        $this->wednesday = $wednesday;
    }

    public function getThursday(): ?string
    {
        return $this->thursday;
    }

    public function setThursday(?string $thursday): void
    {
        $this->thursday = $thursday;
    }

    public function getFriday(): ?string
    {
        return $this->friday;
    }

    public function setFriday(?string $friday): void
    {
        $this->friday = $friday;
    }

    public function getSaturday(): ?string
    {
        return $this->saturday;
    }

    public function setSaturday(?string $saturday): void
    {
        $this->saturday = $saturday;
    }

    public function getSunday(): ?string
    {
        return $this->sunday;
    }

    public function setSunday(?string $sunday): void
    {
        $this->sunday = $sunday;
    }

    #[ORM\Column(length: 190, nullable: true)]
    private ?string $sunday = null;


    
}