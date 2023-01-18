<?php

    $ats="";
    if ( isset($_POST['sk']) ){
        $sk=$_POST['sk'];
        $kubu=$sk**3;
        $ats="Pakelta kubu: $kubu";
    }

?>
<?php include "header.php"?>
                <div class="card">
                    <div class="card-header">
                        Kelimas kubu
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input class="form-control" type="text" name="sk"> <br>
                            <button class="btn btn-success">Kelti kubu</button>
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