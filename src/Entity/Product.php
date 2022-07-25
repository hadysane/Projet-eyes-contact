<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $weight;

    /**
     * @ORM\Column(type="date")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="date")
     */
    private $updateDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=Supplier::class, inversedBy="products")
     */
    private $supplier;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=Image::class, inversedBy="products")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Variation::class, mappedBy="product")
     */
    private $variation;

    /**
     * @ORM\ManyToMany(targetEntity=Cart::class, inversedBy="products")
     */
    private $cart;

    public function __construct()
    {
        $this->image = new ArrayCollection();
        $this->variation = new ArrayCollection();
        $this->cart = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
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

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }

    public function setUpdateDate(\DateTimeInterface $updateDate): self
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Image $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        $this->image->removeElement($image);

        return $this;
    }

    /**
     * @return Collection<int, Variation>
     */
    public function getVariation(): Collection
    {
        return $this->variation;
    }

    public function addVariation(Variation $variation): self
    {
        if (!$this->variation->contains($variation)) {
            $this->variation[] = $variation;
            $variation->setProduct($this);
        }

        return $this;
    }

    public function removeVariation(Variation $variation): self
    {
        if ($this->variation->removeElement($variation)) {
            // set the owning side to null (unless already changed)
            if ($variation->getProduct() === $this) {
                $variation->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cart>
     */
    public function getCart(): Collection
    {
        return $this->cart;
    }

    public function addCart(Cart $cart): self
    {
        if (!$this->cart->contains($cart)) {
            $this->cart[] = $cart;
        }

        return $this;
    }

    public function removeCart(Cart $cart): self
    {
        $this->cart->removeElement($cart);

        return $this;
    }
}
