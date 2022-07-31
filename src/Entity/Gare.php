<?php

namespace App\Entity;

use App\Repository\GareRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GareRepository::class)
 */
class Gare
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
    private $geoPoint;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $geoShape;

    /**
     * @ORM\Column(type="integer")
     */
    private $objectid;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRefZdl;

    /**
     * @ORM\Column(type="integer")
     */
    private $garesId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomGare;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomlong;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomIv;

    /**
     * @ORM\Column(type="integer")
     */
    private $numMod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mode;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $train;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metro;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tramway;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $navette;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $val;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $terfer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tertrain;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $terrer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $termetro;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tertram;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ternavette;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $terval;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idrefliga;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idrefligc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ligne;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $codLigf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ligneCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $indiceLig;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reseau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resCom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codResf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $res_stif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $exploitant;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numPsr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $principal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $x;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $y;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeoPoint(): ?string
    {
        return $this->geoPoint;
    }

    public function setGeoPoint(string $geoPoint): self
    {
        $this->geoPoint = $geoPoint;

        return $this;
    }

    public function getGeoShape(): ?string
    {
        return $this->geoShape;
    }

    public function setGeoShape(string $geoShape): self
    {
        $this->geoShape = $geoShape;

        return $this;
    }

    public function getObjectid(): ?int
    {
        return $this->objectid;
    }

    public function setObjectid(int $objectid): self
    {
        $this->objectid = $objectid;

        return $this;
    }

    public function getIdRefZdl(): ?int
    {
        return $this->idRefZdl;
    }

    public function setIdRefZdl(int $idRefZdl): self
    {
        $this->idRefZdl = $idRefZdl;

        return $this;
    }

    public function getGaresId(): ?int
    {
        return $this->garesId;
    }

    public function setGaresId(int $garesId): self
    {
        $this->garesId = $garesId;

        return $this;
    }

    public function getNomGare(): ?string
    {
        return $this->nomGare;
    }

    public function setNomGare(string $nomGare): self
    {
        $this->nomGare = $nomGare;

        return $this;
    }

    public function getNomlong(): ?string
    {
        return $this->nomlong;
    }

    public function setNomlong(string $nomlong): self
    {
        $this->nomlong = $nomlong;

        return $this;
    }

    public function getNomIv(): ?string
    {
        return $this->nomIv;
    }

    public function setNomIv(string $nomIv): self
    {
        $this->nomIv = $nomIv;

        return $this;
    }

    public function getNumMod(): ?int
    {
        return $this->numMod;
    }

    public function setNumMod(int $numMod): self
    {
        $this->numMod = $numMod;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getFer(): ?int
    {
        return $this->fer;
    }

    public function setFer(?int $fer): self
    {
        $this->fer = $fer;

        return $this;
    }

    public function getTrain(): ?int
    {
        return $this->train;
    }

    public function setTrain(?int $train): self
    {
        $this->train = $train;

        return $this;
    }

    public function getRer(): ?int
    {
        return $this->rer;
    }

    public function setRer(?int $rer): self
    {
        $this->rer = $rer;

        return $this;
    }

    public function getMetro(): ?int
    {
        return $this->metro;
    }

    public function setMetro(?int $metro): self
    {
        $this->metro = $metro;

        return $this;
    }

    public function getTramway(): ?int
    {
        return $this->tramway;
    }

    public function setTramway(?int $tramway): self
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getNavette(): ?int
    {
        return $this->navette;
    }

    public function setNavette(?int $navette): self
    {
        $this->navette = $navette;

        return $this;
    }

    public function getVal(): ?int
    {
        return $this->val;
    }

    public function setVal(?int $val): self
    {
        $this->val = $val;

        return $this;
    }

    public function getTerfer(): ?int
    {
        return $this->terfer;
    }

    public function setTerfer(?int $terfer): self
    {
        $this->terfer = $terfer;

        return $this;
    }

    public function getTertrain(): ?int
    {
        return $this->tertrain;
    }

    public function setTertrain(?int $tertrain): self
    {
        $this->tertrain = $tertrain;

        return $this;
    }

    public function getTerrer(): ?int
    {
        return $this->terrer;
    }

    public function setTerrer(?int $terrer): self
    {
        $this->terrer = $terrer;

        return $this;
    }

    public function getTermetro(): ?string
    {
        return $this->termetro;
    }

    public function setTermetro(?string $termetro): self
    {
        $this->termetro = $termetro;

        return $this;
    }

    public function getTertram(): ?int
    {
        return $this->tertram;
    }

    public function setTertram(?int $tertram): self
    {
        $this->tertram = $tertram;

        return $this;
    }

    public function getTernavette(): ?int
    {
        return $this->ternavette;
    }

    public function setTernavette(?int $ternavette): self
    {
        $this->ternavette = $ternavette;

        return $this;
    }

    public function getTerval(): ?int
    {
        return $this->terval;
    }

    public function setTerval(?int $terval): self
    {
        $this->terval = $terval;

        return $this;
    }

    public function getIdrefliga(): ?string
    {
        return $this->idrefliga;
    }

    public function setIdrefliga(?string $idrefliga): self
    {
        $this->idrefliga = $idrefliga;

        return $this;
    }

    public function getIdrefligc(): ?string
    {
        return $this->idrefligc;
    }

    public function setIdrefligc(?string $idrefligc): self
    {
        $this->idrefligc = $idrefligc;

        return $this;
    }

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(?string $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getCodLigf(): ?float
    {
        return $this->codLigf;
    }

    public function setCodLigf(?float $codLigf): self
    {
        $this->codLigf = $codLigf;

        return $this;
    }

    public function getLigneCode(): ?string
    {
        return $this->ligneCode;
    }

    public function setLigneCode(?string $ligneCode): self
    {
        $this->ligneCode = $ligneCode;

        return $this;
    }

    public function getIndiceLig(): ?int
    {
        return $this->indiceLig;
    }

    public function setIndiceLig(?string $indiceLig): self
    {
        $this->indiceLig = $indiceLig;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getResCom(): ?string
    {
        return $this->resCom;
    }

    public function setResCom(?string $resCom): self
    {
        $this->resCom = $resCom;

        return $this;
    }

    public function getCodResf(): ?string
    {
        return $this->codResf;
    }

    public function setCodResf(?string $codResf): self
    {
        $this->codResf = $codResf;

        return $this;
    }

    public function getResStif(): ?string
    {
        return $this->res_stif;
    }

    public function setResStif(?string $res_stif): self
    {
        $this->res_stif = $res_stif;

        return $this;
    }

    public function getExploitant(): ?string
    {
        return $this->exploitant;
    }

    public function setExploitant(?string $exploitant): self
    {
        $this->exploitant = $exploitant;

        return $this;
    }

    public function getNumPsr(): ?int
    {
        return $this->numPsr;
    }

    public function setNumPsr(?int $numPsr): self
    {
        $this->numPsr = $numPsr;

        return $this;
    }

    public function getIdf(): ?string
    {
        return $this->idf;
    }

    public function setIdf(?string $idf): self
    {
        $this->idf = $idf;

        return $this;
    }

    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getX(): ?string
    {
        return $this->x;
    }

    public function setX(?string $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(?string $y): self
    {
        $this->y = $y;

        return $this;
    }
}
