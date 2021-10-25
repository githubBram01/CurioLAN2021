<?php
    include("../common/header.php");
    include("../common/database.php");
?>

<head>

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <font size="5">

        <title> Zoomvliet LAN-Party 2021 </title>

        <p1> Aanmelding </p1>

        <br>

        <form class="postformulier" method="POST">
            <!--Input naam-->
            <div>
                <b>Naam</b> <b style="color:red;">* &nbsp; </b>
                <input name="formName" type="text" placeholder="Naam" required>
            </div>

            <!--Input achternaam-->
            <div>
                    <b>Achternaam</b> <b style="color:red;">* &nbsp; </b>
                    <input name="formSurname" type="text" placeholder="Achternaam" required>
            </div>

            <!--Input e-mail-->
            <div>
                <b>E-mail</b> <b style="color:red;">* &nbsp; </b>
                    <input name="formEmail" type="email" placeholder="E-mail" required>
            </div>

            <!--Input telefoonnummer-->
            <div>
                <b>Mobiel nummer</b> <b style="color:red;">* &nbsp; </b>
                    <input name="formNumber" type="tel" placeholder="Mobiel nummer" required>
            </div>

            <!--Input overige info-->
            <div>
                <b>Overige informatie</b> &nbsp; </b>
                    <input name="formInfo" type="text" placeholder="Ananas op pizza is lekker.">
            </div>

            <!--Akoord Voorwaarden-->
                <center>
                    <b>Voorwaarden</b> <b style="color:red;">* &nbsp; </b> <br>
                    <b style="margin-top:5%;"> <brx2> Ik ga akoord met de regels. </b>
                    <input name="formOk" type="checkbox" required>
                </center>

            <!--Input button-->
            <div>
                <input class="verzend" name="formSubmit" type="submit" value="Verzend">
            </div>
        </form>
    </font>

</head>

<!-- Footer Credits -->
<footer>
    <center><h1>Credits</h1>
        <p>
            * Een evenement van studenten voor studenten.<br>
            * Vrijwilligers voor het meehelpen bij het evenement<br>
            * De docenten en betrokkenen voor de organisatie van het evenement<br>
        </p>
    </center>

    <div class="wrapper">

        <!-- Youtube -->
        <div class="button">
            <div class="icon">
                <a class="yt" href="https://www.youtube.com">
                <i class="fab fa-youtube"></i>
            </div>
                <span>YouTube</span>
                </a>
        </div>

        <!-- Discord -->
        <div class="button">
            <div class="icon">
                <a class="discord" href="https://discord.gg/VBs9c74Y">
                <i class="fab fa-discord"></i>
            </div>
            <span><b>Discord</b></span>
                </a>
        </div>

        <!-- Instagram -->
        <div class="button">
            <div class="icon">
                <a class="insta" href="https://www.instagram.com/">
                <i class="fab fa-instagram"></i>
            </div>
            <span><b>Instagram</b></span>
                </a>
        </div>

        <!-- Spotify -->
        <div class="button btnspoty">
            <div class="icon">
                <a class="insta" href="https://open.spotify.com/playlist/4hzdF6oyAi171dhUihyuvs?si=e50a5e3098bf4aed/">
                <img id="spotify" src="../img/spotifyicon1.png" alt="" width="30" height="30">
            </div>
            <span><b>spotify</b></span>
                </a>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script>
    var img = document.getElementById('spotify');
    var btn = document.querySelector('.btnspoty');
    btn.onmouseout = function () {
    img.src = '../img/spotifyicon1.png';
    img.style = ' transform: scale(1);'
    };

    btn.onmouseover = function () {
    img.src = '../img/spotifyicongreen.png';
    img.style = 'transform: scale(1.2)';
    };
</script>

<?php
    #Log-in / Input Database
    if(isset($_POST['formSubmit']))
    {
        try{
            $formName = $_REQUEST['formName'];
            $formSurname = $_REQUEST['formSurname'];
            $formEmail = $_REQUEST['formEmail'];
            $formNumber = $_REQUEST['formNumber'];
            $formInfo = $_REQUEST['formInfo'];
            $formOk = $_REQUEST['formOk'];

            $query = "INSERT INTO gegevens (firstName, lastName, email, number, info, agreement) VALUES".
            "('$formName', '$formSurname', '$formEmail', '$formNumber', '$formInfo', '$formOk')";

            $stm = $pdo->prepare($query);
            if($stm->execute()){

                }

            }catch(PDOException $ex) {
                echo $ex->getMessage();
                
                }
        
            //Message Box -> Doorverwijzing naar homepage
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Uw aanvraag is verzonden, wij proberen dit zsm te verwerken. Binnenkort krijgt u meer informatie per e-mail.');
            window.location.href='http://localhost/CurioLAN2021/pages/home.php';
            </script>");
                     
    }

?>

