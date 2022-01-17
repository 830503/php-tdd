<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $bookedByUser;

    #[ORM\ManyToOne(targetEntity: Room::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $bookedRoom;

    #[ORM\Column(type: 'datetime')]
    private $startTime;

    #[ORM\Column(type: 'datetime')]
    private $endTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookedByUser(): ?User
    {
        return $this->bookedByUser;
    }

    public function setBookedByUser(?User $bookedByUser): self
    {
        $this->bookedByUser = $bookedByUser;

        return $this;
    }

    public function getBookedRoom(): ?Room
    {
        return $this->bookedRoom;
    }

    public function setBookedRoom(?Room $bookedRoom): self
    {
        $this->bookedRoom = $bookedRoom;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }
}
