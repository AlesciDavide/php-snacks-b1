<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$paragraph = "I primi padroni del Mondo Emerso erano gli elfi, creature che, secondo la credenza popolare dei secoli successivi, erano perfette e care agli dei, e sotto di loro la terra era unita e pacifica. Anche le ninfe e i folletti risalgono a quest'epoca arcaica. Successivamente il Mondo Emerso fu invaso dagli uomini e dagli gnomi, che se lo spartirono. Gli elfi si ritirarono al di là del Saar, nelle Terre Ignote. Di loro sono rimaste le leggende, antichi testi di magia e conoscenze, nonché il credo negli antichi dei, come Shevrar. Inoltre da un'unione tra elfi e uomini è stata originata la razza dei mezzelfi. Tutta via, la storia sembra avere perso alcune verità, riguardo la razza degli elfi: Le ninfe infatti, spiriti antichi e dell'acqua, raccontano che gli elfi erano un popolo crudele e vanitoso. Poiché si consideravano la razza preferita degli dei, consideravano tutte le altre inferiori. In un periodo non precisato, quando ancora gli elfi dominavano il Mondo Emerso, si scateno una terribile piaga che sterminò, la maggior parte degli elfi. Quando scoprirono che il sangue delle ninfe, aveva la capacità di curare tale morbo, gli elfi le cacciarono e ne uccisero la maggior parte.

I nuovi abitanti del Mondo Emerso si contesero il predominio nella terribile Guerra dei Duecento Anni. Alla fine prevalsero i mezzelfi della Terra dei Giorni, grazie alla loro abilità nel combattimento e alle capacità strategiche del loro re, Leven, il quale però morì poco prima della conclusione della guerra. Il suo figlio ed erede Nammen allora convocò i regnanti sconfitti e, stupendo il mondo, annunciò di voler rinunciare all'egemonia e restituire la libertà a ciascuna Terra; come condizioni decretò tuttavia che ognuno dei regnanti avrebbe dovuto rinunciare a una parte del proprio dominio, la cui riunione avrebbe dato origine alla Grande Terra, al centro del Mondo Emerso, e là avrebbero avuto sede il Consiglio dei Re, con il compito di decidere la politica comune del Mondo Emerso, e il Consiglio dei Maghi, che si sarebbe occupato della vita scientifica e culturale. Nei due Consigli avrebbero trovato posto i rappresentanti di ogni Terra, ognuna delle quali avrebbe poi contribuito all'esercito del Mondo Emerso. Nammen dichiarò infine decaduti i re in carica, affinché ciascun popolo scegliesse democraticamente il proprio nuovo regnante. Il re mezzelfo morì dieci anni dopo, ma per altri quarant'anni durò il periodo denominato Pace di Nammen, che gli abitanti del Mondo Emerso avrebbero fortemente rimpianto (e mitizzato) durante l'Era del Tiranno che le seguì.";


$paragraphDivisi = explode(".", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($paragraphDivisi as $key => $para){ ?>
            <li>
                <?php echo $para ?>
            </li>
            <?php } ?>
    </ul>
</body>
</html>