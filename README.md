
# LAB 5 — Accès aux Données avec PDO (CRUD sécurisé)
Cours : Ingénierie Logicielle Web avec PHP 7 : Architecture Multicouche et Accès aux Données Sécurisé
## l’arborescence suivante dans le projet:
````
project/
  bootstrap.php                 # (issu des LABs précédents ou minimal)
  config/
    db.php                      # configuration DB (DSN, user, pass)
  logs/
    pdo_errors.log              # journal d’erreurs PDO (sera créé si absent)
  src/
    Database/
      DBConnection.php
    Log/
      Logger.php
    Entity/
      Filiere.php
      Etudiant.php
    Dao/
      FiliereDao.php
      EtudiantDao.php
  test_dao.php                  # script console de tests CRUD + transactions
  sql/
    001_create_db.sql
````
<img width="1282" height="727" alt="image" src="https://github.com/user-attachments/assets/d229038c-6293-4cbb-b2fa-ac691e7c4f9f" />
<img width="1366" height="730" alt="image" src="https://github.com/user-attachments/assets/51818d97-c905-482a-890b-7309df4f3d2e" />

<img width="1366" height="690" alt="image" src="https://github.com/user-attachments/assets/1a6689d9-1cc7-4493-8584-b35b836860e8" />
