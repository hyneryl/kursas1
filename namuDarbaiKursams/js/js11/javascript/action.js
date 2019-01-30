// getNumber values onclick above numbers//Récupérer les valeurs des clics sur les chiffres
function getNumber(number) {
  // stock clicked numbers into var to show them after all//Stocker le chiffre entré dans une variable pour ensuite l'afficher
  var newNumber = document.getElementById(number).textContent;
  // Add the number to show 'result' // Ajouter le chiffre à l'affichage 'result'
  document.getElementById('result').textContent = document.getElementById('result').textContent + newNumber;
};

// getValues on clicked operators buttons // Récupérer les valeurs des clics sur les opérateurs
function getOperate(operate) {
  // stock clicked operators into var to show them after all//Stocker l'opérateur entré dans une variable pour ensuite l'afficher	
  var signe = document.getElementById(operate).textContent;
  // Add operators to show 'result' Ajouter l'opérateur à l'affichage 'result'
  document.getElementById('result').textContent += signe;
};

// Resetting 'result' to the click // Reset de l'affichage 'result' au clic
function resetNumber() {
  //Delete the content of 'result'// Effacer le contenu de result
  document.getElementById('result').textContent = "";
};

//Evaluating the screening of 'result'// Evaluation de l'affichage 'result'
function calcul() {
  // Stocker le contenu de l'affichage 'result'
  var result = document.getElementById('result').textContent;
  // Evaluer le contenu de 'result' et l'afficher à la place du calcul
  document.getElementById('result').textContent = eval(result);
}