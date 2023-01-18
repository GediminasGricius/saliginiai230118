<?php
    require_once "funkcijos.php";
    $ats="";
    if ( isset($_POST['sk']) ){
        $sk=$_POST['sk'];
        $kvadratu=$sk**2;
        $ats="Pakelta kvadratu: $kvadratu";
    }

    $d=2;

    switch ($d){
        case 1:
            echo "Pirmadienis";
            break;
        case 2:
            echo "Antradienis";
            break;
        case 2:
            echo "Trečiadienis";
            break;
        case 4:
            echo "Ketvirtadienis";
            break;
        case 5:
            echo "Penktadienis";
            break;
        case 6:
        case 7:
            echo "Savaitgalis";
            break;
    }


?>
<?php include_once "header.php"?>
    <div class="card">
                    <div class="card-header">
                        Kelimas kvadratu
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input class="form-control" type="text" name="sk"> <br>
                            <button class="btn btn-success">Kelti kvadratu</button>
                        </form>
                        <?php if ($ats!=""){ ?>
                            <div>
                                <hr>
                                <?=$ats?>
                            </div>
                        <?php }else{ ?>
                            <div>
                                <hr>
                                Iveskite skaiciu ir paspauskite skaiciuoti
                            </div>
                        <?php } ?>
                    </div>
                </div>
<?php include "footer.php"?>