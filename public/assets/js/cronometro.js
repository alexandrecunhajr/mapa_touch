//CRONOMETRO e RELOAD APÓS 5 MIN
function startCountdown(tempo){
    // Se o tempo não for zerado
    if((tempo - 1) >= 0){

        // Pega a parte inteira dos minutos
        var min = parseInt(tempo/60);
        // Calcula os segundos restantes
        var seg = tempo%60;

        // Formata o número menor que dez, ex: 08, 07, ...
        if(min < 10){
            min = "0"+min;
            min = min.substr(0, 2);
        }
        if(seg <=9){
            seg = "0"+seg;
        }
        // Cria a variável para formatar no estilo hora/cronômetro
        horaImprimivel = '00:' + min + ':' + seg;
        //JQuery pra setar o valor
        $("#minhaDiv").html("<span class='red'>Atualizando em: <b>"+horaImprimivel+"</b></span>");
        // Define que a função será executada novamente em 1000ms = 1 segundo
        
        // diminui o tempo
        tempo--;
        setTimeout('startCountdown('+tempo+')',1000);
    // Quando o contador chegar a zero faz esta ação
    } else {
       // window.open('../controllers/logout.php', '_self');
       tempo=300;
       startCountdown(tempo);
       carrega_mapa();
    }
}
