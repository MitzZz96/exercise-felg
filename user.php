<?php 
include_once("header.php");
include_once("config.php")
?>

<body>
    <div class="container my-5 d-flex flex-column align-items-center">
        <h1 class="col">Nowy użytkownik</h1>
        <div class="col-lg-8 px-0 ">

            <form id="userForm" method="POST">
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
                <button type="submit" class="btn btn-primary btn-lg">Dodaj</button>
            </form>
            <a href="index.php"><button class="btn btn-secondary btn-lg">Cofnij</button></a>
            <script type="text/javascript" src="user-script.js"></script>
        </div>
    </div>

</body>