<?php 
require("php/config.php");
require($files_path."header.php");
?>
 <h1 class="gl_title">Climat et géographique</h1>
    <hr class="global_hr">
    <div class="container">
        <section>
            <div class="gl_background">
                Le climat de la <span class="blue">Seine-et-Marne</span> connaît un régime climatique tempéré de type
                <span class="blue">atlantique</span>.<br>
                Caractérisé par des : <br>
                - <span class="blue">hivers doux</span> et humides<br>
                - des <span class="blue">étés</span> plus <span class="blue">frais</span> que pour les climats
                subtropicaux
            </div>
        </section>
        <section>
                <img id="carte" src="img/carte_seine_et_marne.png"  
                    alt="La carte de France en bleu avec en rouge la Seine-et-Marne" />
            <div class="gl_background sl">
                Situé ici en rouge et comme son nom l’indique le <span class="blue">département</span> de la <span
                    class="blue">Seine et Marne</span> est traversés par la <span class="blue">Seine</span> (fleuve) et
                la <span class="blue">Marne</span> (rivière).
            </div>
        </section>
    </div>
    <div class="container">
        <div id="pictures">
            <div id="left">
                <img id="img1" src="img/image1.png" alt="Illustration 1" />
                <img id="img3" src="img/image3.jpeg" alt="Illustration 3" />
            </div>
            <div id="right">
                <img id="img4" src="img/image4.png" alt="Illustration 4" />
                <img id="img2" src="img/image2.jpg" alt="Illustration 2" />
            </div>
            <span class="sous_text">Quatre illustrations de la <span class="blue">Seine-et-Marne</span></span>
        </div>
    </div>
    <h1 class="gl_title">Un brin d'Histoire </h1>
    <hr class="global_hr">
    <div class="gl_background fs">
        L’histoire de la <span class="blue">Seine-et-Marne</span> débute à la préhistoire, nous allons ici nous
        concentrer sur la période moderne, des <a href="wikipedia.com">informations supplémentaires pouvant être trouvé
            ici.</a><br>

        Le département de <span class="blue">Seine-et-Marne</span> est formé le <span class="blue">4 mars 1790</span>
        par assemblage de parties de l'Île-de-France, de la Brie, de la Champagne et du Gâtinais. <br>
        <br>
        Un des évènements <span class="blue">seine-et-marnais</span> de la Révolution française fut la détermination du
        mètre-étalon, à partir de la définition retenue du mètre par l'Assemblée constituant. <br>
        <br>
        Le département de <span class="blue">Seine-et-Marne</span>, et la Brie tout particulièrement, est à cette époque
        en pointe dans les questions de révolution agricole. <br>
        Les inventaires des outils et les rendements font état de progrès importants.<br>
        La découverte du traitement de la betterave sucrière pour produire du sucre est considérable pour le <span
            class="blue">département</span> qui adopte dès <span class="blue">1802</span> cette culture. <br>
        <br>
        Le département de <span class="blue">Seine-et-Marne</span> est particulièrement touché par les affres de la
        guerre de <span class="blue">1870</span> et de l'occupation prussienne.<br>
        <br>
        En <span class="blue">1914</span> le département se rendit célèbre par la bataille de la <span
            class="blue">Marne</span> où eut lieu aussi l'épisode des taxis de la <span class="blue">Marne</span>; cette
        bataille permit de repousser les armées allemandes qui menaçaient d'envahir Paris.<br>
    </div>
<?php
require($files_path."footer.php");
?>
