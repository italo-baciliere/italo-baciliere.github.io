var teste


var paragrafo = document.getElementById("player");
// console.log(document.getElementById("#player"));
// seleciona o elemento "p" do html e atribui a variável "paragrafo"
paragrafo.addEventListener('click', getName);
// variável "paragrafo" escuta o evento 'click' e executa a função "novoNome"
function getName() {
  var nome = prompt('Entre com o novo nome!');
  // Função "getName" cria a variável "nome" e manda uma mensagem na tela para o usuário digitar um valor.
  paragrafo.textContent = 'Player1: ' + nome;
  //Variavél "paragrafo" imprime no Elemento "p" Player1 + "nome digido pela usuário".
  document.getElementById("player").classList.add("test_class");
}



/*---------------
| Manipulação do DOM
|----------------
*/

// 1° Atividade
function verify_fruit() {
  var fruitInsert = document.getElementById('input_fruit').value;
  fruitInsert = fruitInsert.toLowerCase();

  if (fruitInsert == "banana") {
    document.getElementById('img_fruit').src = "/resources/images/banana.png";
    document.querySelector("#fruit_resp").innerHTML = "Você acertou! :)";
  }
  else {
    document.getElementById('img_fruit').src = "/resources/images/banana.png";
    document.querySelector("#fruit_resp").innerHTML = "Você errou!";
  }
}

// 3° Atividade
function hourlyChange() {
  /*
  | Alterar os componentes e suas
  | classes em relação a hora atual.
  */

  // Capturar 
  var divLesson3 = document.getElementById("lesson_3_dom");
  var mensagem = divLesson3.getElementsByClassName("mensagem");
  var paragraf_hours = divLesson3.getElementsByClassName("hours");
  var imagem = document.getElementById("img_lesson_3");
  var div_daily = document.getElementById("daily_class");
  
  // Capturar as horas
  var date = new Date();
  var hours = date.getHours(); // Returns the hour (from 0-23)
  var min = date.getMinutes();

  // Realizar alterações em relação a hora
  if (hours >= 6 && hours <= 12) {
    mensagem[0].textContent = "Bom Dia!";
    imagem.classList.add("img_day");
    div_daily.classList.add("day");
  }
  else if (hours >= 13 && hours <= 17) {
    mensagem[0].textContent = "Bom Tarde!";
    imagem.classList.add("img_evening");
    div_daily.classList.add("evening");
  }
  else if (hours >= 18 && hours <= 23) {
    mensagem[0].textContent = "Bom Noite!";
    imagem.classList.add("img_night");
    div_daily.classList.add("night");
  }
  else {
    mensagem[0].textContent = "Bom Madrugada!";
    imagem.classList.add("img_dawn");
    div_daily.classList.add("dawn");
  }

  // Alterar o texto das horas atuais
  paragraf_hours[0].textContent = `Agora são ${hours}:${min}`; // template strings
}

// Camando a função
hourlyChange();