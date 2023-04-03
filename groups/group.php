<?php 
include_once("../header.php");
?>

<body onload="getAllGroups()">
    <div class="container my-5 d-flex flex-column align-items-center">
        <h1>Grupy</h1>
        <hr>

        <div class="col-lg-8 px-0">
            <div id="msg"></div>
            <div id="table-container"></div>
            <a href="new-group.php">
                <button type="button" class="btn btn-primary btn-lg">Dodaj nową grupę</button>
            </a>
            <a href="../index.php">
                <button type="button" class="btn btn-primary btn-lg">Lista użytkowników</button>
            </a>
        </div>
    </div>
    <script type="text/javascript" src="group-script.js"></script>
    <script type="text/javascript" src="delete-script.js"></script>
</body>