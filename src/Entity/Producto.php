<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoRepository::class)]
#[ApiResource]
class Producto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 50)]
    private ?string $lote = null;

    #[ORM\Column(length: 50)]
    private ?string $codigo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(string $lote): static
    {
        $this->lote = $lote;

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): static
    {
        $this->codigo = $codigo;

        return $this;
    }
}
