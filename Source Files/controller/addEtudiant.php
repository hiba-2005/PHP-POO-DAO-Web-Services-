<?php
include_once __DIR__ . '/../racine.php';
include_once RACINE . '/service/EtudiantService.php';

$method = $_SERVER['REQUEST_METHOD'] ?? '';

if ($method !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// Récupération des données
$data = [
    'nom'    => trim($_POST['nom'] ?? ''),
    'prenom' => trim($_POST['prenom'] ?? ''),
    'ville'  => trim($_POST['ville'] ?? ''),
    'sexe'   => trim($_POST['sexe'] ?? '')
];

// Vérification des champs vides
foreach ($data as $value) {
    if ($value === '') {
        header('Location: ../index.php');
        exit;
    }
}

// Insertion
$service = new EtudiantService();
$etudiant = new Etudiant(
    null,
    $data['nom'],
    $data['prenom'],
    $data['ville'],
    $data['sexe']
);

$service->create($etudiant);

// Redirection finale
header('Location: ../index.php');
exit;
