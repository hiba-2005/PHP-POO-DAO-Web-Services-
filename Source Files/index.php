<?php
include_once __DIR__ . '/racine.php';
include_once RACINE . '/service/EtudiantService.php';

$es = new EtudiantService();
$etudiants = $es->findAll(); // doit être un tableau
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Gestion Etudiant</title>
<style>
body{
  font-family: 'Segoe UI', Arial, sans-serif;
  background: #f4f6f9;
  margin: 0;
  padding: 40px;
}

h2{
  color: #2c3e50;
  margin-bottom: 15px;
}

form{
  background: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  width: 420px;
  margin-bottom: 30px;
}

label{
  font-weight: 600;
  font-size: 14px;
}

input, select{
  width: 100%;
  padding: 10px;
  margin: 6px 0 12px 0;
  border: 1px solid #ddd;
  border-radius: 6px;
  transition: 0.2s;
}

input:focus, select:focus{
  border-color: #3498db;
  outline: none;
  box-shadow: 0 0 5px rgba(52,152,219,0.4);
}

.btn{
  padding: 10px 14px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.2s;
}

button[type="submit"]{
  background: #3498db;
  color: white;
}

button[type="submit"]:hover{
  background: #2980b9;
}

button[type="reset"]{
  background: #bdc3c7;
  color: white;
}

button[type="reset"]:hover{
  background: #95a5a6;
}

table{
  border-collapse: collapse;
  width: 100%;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

th{
  background: #2c3e50;
  color: white;
  text-align: left;
  padding: 12px;
}

td{
  padding: 12px;
  border-bottom: 1px solid #eee;
}

tr:hover{
  background: #f2f7ff;
}

.danger{
  color: #e74c3c;
  font-weight: 600;
  text-decoration: none;
}

.danger:hover{
  text-decoration: underline;
}
</style>

</head>

<body>

<h2>Ajouter un étudiant</h2>

<form action="controller/addEtudiant.php" method="post">
  <label>Nom</label>
  <input type="text" name="nom" required>

  <label>Prénom</label>
  <input type="text" name="prenom" required>

  <label>Ville</label>
  <input type="text" name="ville" required>

  <label>Sexe</label>
  <select name="sexe" required>
    <option value="M">M</option>
    <option value="F">F</option>
  </select>

  <button class="btn" type="submit">Ajouter</button>
  <button class="btn" type="reset">Vider</button>
</form>

<h2>Liste des étudiants</h2>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Ville</th>
      <th>Sexe</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
  <?php if (empty($etudiants)): ?>
    <tr>
      <td colspan="6">Aucun étudiant.</td>
    </tr>
  <?php else: ?>
    <?php foreach ($etudiants as $e): ?>
      <?php if ($e instanceof Etudiant): ?>
      <tr>
        <td><?= htmlspecialchars((string)$e->getId()) ?></td>
        <td><?= htmlspecialchars($e->getNom()) ?></td>
        <td><?= htmlspecialchars($e->getPrenom()) ?></td>
        <td><?= htmlspecialchars($e->getVille()) ?></td>
        <td><?= htmlspecialchars($e->getSexe()) ?></td>
        <td>
          <a class="danger"
             href="controller/deleteEtudiant.php?id=<?= urlencode((string)$e->getId()) ?>"
             onclick="return confirm('Supprimer cet étudiant ?');">
            Supprimer
          </a>
        </td>
      </tr>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
  </tbody>
</table>

</body>
</html>
