// --- JavaScript para o Cronômetro ---

// A variável deadlineDateStr é definida no HTML antes de este script ser carregado
// Definir a data final do cronômetro usando o timestamp PHP
var countDownDate = new Date(deadlineDateStr).getTime();

// Atualizar o cronômetro a cada 1 segundo
var x = setInterval(function() {

    // Obter a data e hora atuais
    var now = new Date().getTime();

    // Calcular a distância entre agora e a data do cronômetro
    var distance = countDownDate - now;

    // Cálculos de tempo para dias, horas, minutos e segundos
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Exibir o resultado no elemento com id="countdown"
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // Se o cronômetro terminar, exibir uma mensagem
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "PRAZO EXPIRADO!";
        document.getElementById("countdown").style.color = "#FFF";
        document.getElementById("countdown").style.textShadow = "none";
    }
}, 1000);