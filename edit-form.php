<?php 
include_once("header.php");
include_once("config.php")
?>

<body>
    <div class="container my-5">
        <h1>Edycja użytkownika</h1>
        <div class="col-lg-8 px-0">

            <form id="updateForm" method="POST">
                <input type="hidden" name="id" id="updateId">
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Nazwa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="inputName">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Hasło</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputUserName" class="col-sm-2 col-form-label">Imię</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserName" name="inputUserName">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSurname" class="col-sm-2 col-form-label">Nazwisko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSurname" name="inputSurname">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Data urodzenia</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputDate" name="inputDate">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Grupa użytkownika</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="autoSizingSelect" name="inputGroup">
                            <?php 
                                while ($group = mysqli_fetch_array($all_groups, MYSQLI_ASSOC)):;
                            ?>
                            <option value="<?php echo $group["id_group"]; ?>">
                                <?php echo $group["group_name"]; ?>
                            </option>
                            <?php
                            endwhile;
                            ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="name">Zaktualizuj</button>
            </form>
            <script type="text/javascript" src="submit-script.js"></script>
        </div>
    </div>

</body>