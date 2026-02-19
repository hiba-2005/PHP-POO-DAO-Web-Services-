<?php
class Etudiant {

  private ?int $id;
  private string $nom;
  private string $prenom;
  private string $ville;
  private string $sexe;

  public function __construct(
    ?int $id = null,
    string $nom = '',
    string $prenom = '',
    string $ville = '',
    string $sexe = ''
  ) {
    $this->id = $id;
    $this->nom = trim($nom);
    $this->prenom = trim($prenom);
    $this->ville = trim($ville);
    $this->sexe = trim($sexe);
  }

  // Accesseurs
  public function getId(): ?int {
    return $this->id;
  }

  public function getNom(): string {
    return $this->nom;
  }

  public function getPrenom(): string {
    return $this->prenom;
  }

  public function getVille(): string {
    return $this->ville;
  }

  public function getSexe(): string {
    return $this->sexe;
  }

  // Mutateurs
  public function setId(?int $id): void {
    $this->id = $id;
  }

  public function setNom(string $nom): void {
    $this->nom = trim($nom);
  }

  public function setPrenom(string $prenom): void {
    $this->prenom = trim($prenom);
  }

  public function setVille(string $ville): void {
    $this->ville = trim($ville);
  }

  public function setSexe(string $sexe): void {
    $this->sexe = trim($sexe);
  }

  public function __toString(): string {
    return "{$this->nom} {$this->prenom}";
  }
}
