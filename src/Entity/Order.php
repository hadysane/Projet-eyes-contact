<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $billNumber;

    /**
     * @ORM\OneToOne(targetEntity=Cart::class, inversedBy="orderId", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cart;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getBillNumber(): ?string
    {
        return $this->billNumber;
    }

    public function setBillNumber(string $billNumber): self
    {
        $this->billNumber = $billNumber;

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
