<?php 
include_once("header.php");
?>

<body onload="getAllUsers()">
    <div class="container my-5 d-flex flex-column align-items-center">
        <h1>Użytkownicy</h1>
        <hr>

        <div class="col-lg-8 px-0">
            <div id="msg"></div>
            <div id="table-container"></div>
            <a href="user.php">
                <button type="button" class="btn btn-primary btn-lg">Dodaj nowego użytkownika</button>
            </a>
            <a href="./groups/group.php">
                <button type="button" class="btn btn-primary btn-lg">Listy grup</button>
            </a>
        </div>
    </div>
    <script type="text/javascript" src="user-script.js"></script>
    <script type="text/javascript" src="submit-script.js"></script>
    <script type="text/javascript" src="delete-script.js"></script>
</body>