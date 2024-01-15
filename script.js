function displayExplanations() {
    // Récupère le paragraphe à afficher
    const explications = document.getElementById("explications");
  
    // Change le style du paragraphe pour l'afficher
    explications.style.display = "block";
  }
  
  // Ajoute un écouteur d'événement au bouton "En savoir plus"
  document.getElementById("btn-explications").addEventListener("click",displayExplanations);