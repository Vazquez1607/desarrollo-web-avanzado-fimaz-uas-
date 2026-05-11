<?php
    require_once("../admin/template/header.php")
?>


<div class="mx-auto p-5">
    </div>
    <div class="card text-center">
    <div class="card-header">
        MENU
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        
        <div class="row mb-3">
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    CREAR TORNEO
                </div>
                <div class="card-body">
                    
                    <a href="frmTorneos.php" class="btm btm-primary">
                        <img src="../img/balon.png" alt="Crear un torneo." width="130"
                        height="160">
                    </a>

                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    LISTADO DE TORNEOS
                </div>
                <div class="card-body">
                    
                    <a href="readAllTorneos.php" class="btm btm-primary">
                        <img src="../img/list.png" alt="Listar torneos." width="130"
                        height="160">
                    </a>   

                </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    ESTADISTICAS
                </div>
                <div class="card-body">
                    
                    

                </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                <div class="card-header">
                    ANUNCIOS
                </div>
                <div class="card-body">
                    
                    

                </div>
                </div>
            </div>
            
        </div>

        </div>
    <div class="card-footer text-body-secondary">
        Configuarcion de torneos. Web App Basket-Ball.
    </div>
    </div>
</div>


<?php
    require_once("../admin/template/footer.php")
?>



