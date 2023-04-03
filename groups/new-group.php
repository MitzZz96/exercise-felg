<?php 
include_once("../header.php");
?>

<body>
    <div class="container my-5 d-flex flex-column align-items-center">
        <h1 class="col">Nowa grupa</h1>
        <hr>
        <div class="col-lg-8 px-0 ">

            <form id="groupForm" method="POST">
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Nazwa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="inputName">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Dodaj</button>
            </form>
            <a href="group.php"><button class="btn btn-secondary btn-lg">Cofnij</button></a>
            <script type="text/javascript" src="group-script.js"></script>
        </div>
    </div>

</body>