let buttonCounter = 0;
let score = 0;
let answers = [];










function showSolution () {

    for (let i in quizzContent) {
        if (quizzContent[i].korrekt === answers[i]) {
            $("#antwort-uebersicht").append("<div class='gestellte-frage'>" + quizzContent[i].frage + "</div>");
            $("#antwort-uebersicht").append("<div class='aufloesung-korrekt'>" + "Du hast recht, die korrekte Antwort ist " + quizzContent[i].korrekteAntwort + "." + "</div>");

            console.log("Du hast recht, die korrekte Antwort ist " + quizzContent[i].korrekteAntwort + ".")
        } else {
            $("#antwort-uebersicht").append("<div class='gestellte-frage'>" + quizzContent[i].frage + "</div>");
            $("#antwort-uebersicht").append("<div class='aufloesung-falsch'>" + "Das war leider nicht richtig, die korrekte Antwort ist " + quizzContent[i].korrekteAntwort + "." + "</div>");
            

            console.log("Das war leider nicht richtig. Die korrekte Antwort ist " + quizzContent[i].korrekteAntwort + ".")
        }
    }

}


function checkAnswer (){

    let selectedButton = $("input[name='quizz']:checked").val();

    if ( selectedButton === quizzContent[buttonCounter - 1].korrekt)  {
        console.log("richtig");
        score ++
   
    } else {
        console.log("falsch");
    }
    console.log("Dein aktueller Score ist " + score);
    answers.push(selectedButton);
}



function finalScore () {
    checkAnswer();
  
    let pointMessage = "Du hast "  + score +  " von 5 Punkten erreicht."

    $("#wrapper").html("<div id='ende'><div id='point-message'></div><div class='bild-text-wrapper'><div id='ergebnis-pic'></div><div class='ergebnis-text-box'><div id='ergebnis-name'></div><div id='ergebnis-text'></div></div></div>   <div class='sharemenu-quizz'><div class='share-text-quizz'>Ergebnis teilen</div><div class='badge-wrapper' id='badge-wrapper'></div> </div>   <div><a href='https://dailyimpact.earth/'><button type='button' class='pointer mehr-fakten-button'>Mehr Fakten</button></a><details class='details-antworten'><summary>Auflösung</summary><div id='antwort-uebersicht'></div></details></div></div>");

    $("#point-message").html(pointMessage);

    if (score >= 4 ) {
     
        $("#ergebnis-name").html(endText[2].Name);
        $("#ergebnis-text").html(endText[2].Text);
        $("#ergebnis-pic").html(endText[2].Bild);
        let shareFacebook = ("<a href='https://www.facebook.com/sharer/sharer.php?u=https://dailyimpact.earth/impact-quiz/quiz.html&amp;quote="+score + " von 5 Punkten. " + "Ich bin " + endText[2].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?' class='fbc-has-badge fbc-UID_10'><i class='fab fa-facebook-square' aria-hidden='true'></i></a>").toString();
        let shareLinkedin = ("<a href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https://dailyimpact.earth/impact-quiz/quiz.html&amp;title="+score + " von 5 Punkten. " + "Ich bin " + endText[2].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?'><i class='fab fa-linkedin' aria-hidden='true'></i></a>").toString();     
        let shareTwitter =("<a href='http://twitter.com/share?text=" +score + " von 5 Punkten. " + "Ich bin " + endText[2].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?" + "&amp;url=https://dailyimpact.earth/impact-quiz/quiz.html&amp;hashtags=dailyimpact,quizz,nachhaltig'><i class='fab fa-twitter-square' aria-hidden='true'></i></a>").toString();
        let shareWhatsapp = ("<a href='whatsapp://send?text="+score + " von 5 Punkten. " + "Ich bin " + endText[2].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?  --> https://dailyimpact.earth/impact-quiz/quiz.html data-action='share/whatsapp/share' title='Share on whatsapp'><i class='fab fa-whatsapp-square' aria-hidden='true'></i></a>").toString();
        $("#badge-wrapper").html(shareTwitter + shareLinkedin + shareWhatsapp + shareFacebook)


    } else if (score >= 2 ) {
        $("#ergebnis-name").html(endText[1].Name);
        $("#ergebnis-text").html(endText[1].Text);
        $("#ergebnis-pic").html(endText[1].Bild);
        let shareFacebook = ("<a href='https://www.facebook.com/sharer/sharer.php?u=https://dailyimpact.earth/impact-quiz/quiz.html&amp;quote="+score + " von 5 Punkten. " + "Ich bin " + endText[1].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?' class='fbc-has-badge fbc-UID_10'><i class='fab fa-facebook-square' aria-hidden='true'></i></a>").toString();
        let shareLinkedin = ("<a href='https://www.linkedin.com/shareArticle?mini=true&amp;url=https://dailyimpact.earth/impact-quiz/quiz.html&amp;title="+score + " von 5 Punkten. " + "Ich bin " + endText[1].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?'><i class='fab fa-linkedin' aria-hidden='true'></i></a>").toString();     
        let shareTwitter =("<a href='http://twitter.com/share?text=" +score + " von 5 Punkten. " + "Ich bin " + endText[1].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?" + "&amp;url=https://dailyimpact.earth/impact-quiz/quiz.html&amp;hashtags=dailyimpact,quizz,nachhaltig'><i class='fab fa-twitter-square' aria-hidden='true'></i></a>").toString();
        let shareWhatsapp = ("<a href='whatsapp://send?text="+score + " von 5 Punkten. " + "Ich bin " + endText[1].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?  --> https://dailyimpact.earth/impact-quiz/quiz.html data-action='share/whatsapp/share' title='Share on whatsapp'><i class='fab fa-whatsapp-square' aria-hidden='true'></i></a>").toString();
        $("#badge-wrapper").html(shareTwitter + shareLinkedin + shareWhatsapp + shareFacebook)


    } else {
        $("#ergebnis-name").html(endText[0].Name);
        $("#ergebnis-text").html(endText[0].Text);
        $("#ergebnis-pic").html(endText[0].Bild);
        let shareFacebook = ("<a href='https://www.facebook.com/sharer/sharer.php?u=https://dailyimpact.earth/impact-quiz/quiz.html&amp;quote="+score + " von 5 Punkten. " + "Ich bin " + endText[0].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?' class='fbc-has-badge fbc-UID_10'><i class='fab fa-facebook-square' aria-hidden='true'></i></a>").toString();
        let shareLinkedin = ("<a href='https://dailyimpact.earth/impact-quiz/quiz.html&amp;title="+score + " von 5 Punkten. " + "Ich bin " + endText[0].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?'><i class='fab fa-linkedin' aria-hidden='true'></i></a>").toString();     
        let shareTwitter =("<a href='http://twitter.com/share?text=" +score + " von 5 Punkten. " + "Ich bin " + endText[0].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?" + "&amp;url=https://dailyimpact.earth/impact-quiz/quiz.html&amp;hashtags=dailyimpact,quizz,nachhaltig'><i class='fab fa-twitter-square' aria-hidden='true'></i></a>").toString();
        let shareWhatsapp = ("<a href='whatsapp://send?text="+score + " von 5 Punkten. " + "Ich bin " + endText[0].Name + ". Schaffst du beim Umwelt-Quiz mehr Punkte als ich?  --> https://dailyimpact.earth/impact-quiz/quiz.html data-action='share/whatsapp/share' title='Share on whatsapp'><i class='fab fa-whatsapp-square' aria-hidden='true'></i></a>").toString();
        $("#badge-wrapper").html(shareTwitter + shareLinkedin + shareWhatsapp + shareFacebook)

    }

    console.log(answers);
    showSolution();
}



function nextQuestion () {
    checkAnswer();
    if (buttonCounter < quizzContent.length) {

        $("#frage").html(quizzContent[buttonCounter].frage);
            $("#lq1").html(quizzContent[buttonCounter].a1);
            $("#lq2").html(quizzContent[buttonCounter].a2);
            $("#lq3").html(quizzContent[buttonCounter].a3);
            buttonCounter ++;
            console.log("Button steht jetzt bei " + buttonCounter);

        if (buttonCounter === quizzContent.length)  {
        
            $("#button-container").html('<button type="button" id="next" onclick="finalScore()" class="pointer weiter-button">Ergebnis</button>');
           
        }
    }
} 




