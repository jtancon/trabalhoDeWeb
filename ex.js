//Variáveis e Tipos de Dados:
var nome = "João"; // Variável de texto
var idade = 30;    // Variável numérica
var ativo = true;  // Variável booleana
//Estruturas de Controle:
if (idade >= 18) {
    console.log("É maior de idade");
  } else {
    console.log("É menor de idade");
  }
  
  for (var i = 0; i < 5; i++) {
    console.log("Número: " + i);
  }  
//Funções:
function saudacao(nome) {
    return "Olá, " + nome + "!";
  }
  
  console.log(saudacao("Maria")); // Saída: "Olá, Maria!"
// Eventos e Manipulação do DOM:
// HTML: <button id="meuBotao">Clique em mim</button>
var botao = document.getElementById("meuBotao");

botao.addEventListener("click", function() {
  alert("Botão clicado!");
});
//AJAX (Assíncrono):
// Requisição AJAX com jQuery
$.ajax({
    url: "https://exemplo.com/api/dados",
    method: "GET",
    success: function(response) {
      console.log(response);
    },
    error: function(error) {
      console.error("Erro na requisição: " + error);
    }
  });
//Bibliotecas e Frameworks:
import React from 'react';
import ReactDOM from 'react-dom';

function App() {
  return <h1>Olá, Mundo!</h1>;
}

ReactDOM.render(<App />, document.getElementById('root'));
//Programação Assíncrona e Promises:
function exemploPromise() {
    return new Promise(function(resolve, reject) {
      setTimeout(function() {
        resolve("Promessa resolvida");
      }, 2000);
    });
  }
  
  exemploPromise().then(function(resultado) {
    console.log(resultado); // Saída: "Promessa resolvida"
  });
//Escopo e Closures:
function criaContador() {
    var contador = 0;
    return function() {
      contador++;
      console.log(contador);
    };
  }
  
  var incrementa = criaContador();
  incrementa(); // Saída: 1
  incrementa(); // Saída: 2
  