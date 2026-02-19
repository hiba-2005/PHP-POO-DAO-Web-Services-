<?php
include_once __DIR__ . '/../racine.php';
include_once RACINE . '/service/EtudiantService.php';

header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
  exit;
}

$fields = ['nom', 'prenom', 'ville', 'sexe'];
$data = [];

foreach ($fields as $f) {
  $data[$f] = trim($_POST[$f] ?? '');
}

foreach ($data as $v) {
  if ($v === '') {
    echo json_encode(['success' => false, 'message' => 'Champs manquants']);
    exit;
  }
}

$service = new EtudiantService();
$service->create(new Etudiant(null, $data['nom'], $data['prenom'], $data['ville'], $data['sexe']));

echo json_encode(['success' => true, 'message' => 'Etudiant inséré']);
exit;
