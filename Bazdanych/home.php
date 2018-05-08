
<?php
    require_once("db/DataBaseConnect.php");
    if(!((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)))
    {
        session_unset();
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="utf-8">

    <title>Bazy danych</title>
    <meta name="description" content="Bazy danych">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css" type="text/css" />



</head>

<body>
<?php
if ($_SESSION['type'] == 'teacher')
{?>
    <header class="nav sticky" id="nav">
        <div class="col-lg-2">
            <button class="btnNav btn button" id="buttonAddNewLesson" >Dodaj nowe zajęcia</button>
        </div>
        <div class="col-lg-2">
            <button class="btnNav btn button" id="buttonAddNewGroup" >Dodaj grupę</button>
        </div>
        <div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Dziennik</button>
        </div>
		<div class="col-lg-2">
            <button class="btnNav btn button" id="addMarkButton" >Dodaj ocenę</button>
        </div>
		<div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Obecności</button>
        </div>
		<div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Plan lekcji</button>
        </div>
    </header>
    <?php
}
?>
<?php
if ($_SESSION['type'] == 'student')
{?>
    <header class="nav sticky" id="nav">
        <div class="col-lg-4">
            <button class="btnNav btn button" id="buttonAddNewLesson" >Plan lekcji</button>
        </div>
        <div class="col-lg-2">
            <button class="btnNav btn button" id="buttonAddNewGroup" >Moja grupa</button>
        </div>
        <div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Moje oceny</button>
        </div>
		<div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Ogłoszenia</button>
        </div>
		<div class="col-lg-2">
            <button class="btnNav btn button" id="buttonSchoolDiary" >Zastępstwa</button>
        </div>
    </header>
    <?php

	}
	
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9" id="content" >
        </div>
        <div class="col-lg-3" id="personalInfo">
            <img src="images/profilowe.jpg" height="125" width="125" alt="test">
            <div class="col-lg-12">
                <p>Jestes zalogowany jako:
                    <?php
                    echo $_SESSION['name']. " ". $_SESSION['sur_name'];
                    ?>
                </p>
            </div>
            <div class="col-lg-12">
                <button id="getPersonalInfo" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >
                    Edytuj dane personalne
                </button>
                <button id="logout" class="btn btn-primary" onclick="location.href='scripts/logout.php'" type="submit" >Wyloguj sie</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edytuj Dane Personalne</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Login: <br/> <input id="modal-login" type="text"  name="login">
                Imie: <br/> <input id="modal-name" type="text"  name="login">
                Nazwisko: <br/> <input id="modal-surname" type="text"  name="login">
                Email: <br/> <input id="modal-email" type="text"  name="login">
                Nowe Haslo: <br/> <input id="modal-new-pass" type="password"  name="login">
                Aktualne haslo: <br/> <input id="modal-pass" type="password"  name="login">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="col-lg-12">
                    <button id="editPersonalInfo" class="approved" style="width: 100%"> Zatwierdz</button>
                <div class="col-lg-12">
                    <button type="button" style="margin-bottom: 10px; margin-top: 10px; width: 100%" class="btn btn-primary" data-dismiss="modal">Zamknij</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="libraries/jQuery/jquery-3.2.1.js"></script>
<script type="text/javascript" src="libraries/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="libraries/tether/tether_1.2.4.js"></script>
<script type="text/javascript" src="jsScripts/home.js"></script>
</body>
</html>