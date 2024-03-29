<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Anniversaire de BRUNEL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Anniversaire de BASSANG'NA YOMBI BRUNEL</h1>
  </header>
  <main>
    <section>
      <h2>Informations générales</h2>
      <p>
        <strong>16 MAI 2023 A 20h:</strong>
      </p>
      <p>
        <strong> Amour paix et prospérité:</strong> 
      </p>
      <p>
        <strong> Salle de fete :</strong>
        <a href="https://www.abcsalles.com/lieu/le-dome-72?v=prv">Le Dôme</a>
      </p>
    </section>
    <section>
      <h2>Confirmation de présence</h2>
      <form method="post" action="register.php" >
        <input type="text" name="Nom" placeholder="Votre Nom">
        <input type="number" name="Nombre" placeholder="Nombre de personnes">
        <input type="submit" value="S'inscrire">
      </form>
    </section>
    <section>
      <h2>En savoir plus sur le thème</h2>
      <p id="explications">
        Le thème "Amour, paix et prospérité" est un thème universel qui peut être interprété de différentes manières. Il est utilisé ici pour célébrer l'amour, la paix et la prospérité dans le monde, ou pour créer une ambiance chaleureuse et conviviale pour une soirée d'anniversaire.
      </p>
      <button id="btn-explications">En savoir plus</button>
    </section>
  </main>
  <script src="script.js"></script>
  <p>Total Guests: <?php include 'count_guests.php'; ?></p>
</body>
</html>