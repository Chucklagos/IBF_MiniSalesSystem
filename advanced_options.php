<?php include("header.php") ?>

<div style="text-align:center" class="container">
<br><p class="alert alert-danger" style="text-align:center"><img src="icon/alert.svg" width="24" height="24">¡Precaución!, Estas opciones afectan todo el sistema.</p><br><br>

    
    <dialog id="modal" class="bg-light">
    <form action="reset_database.php" method="post">
        <label>¿Esta seguro que quiere limpiar la base de datos?<br>Se borrarán todos los registros</label><br>
        <input type="submit" class="btn btn-danger" name="reset_database" value="Limpiar base de datos"><br><br>
        <a href="advanced_options.php" class="btn btn-warning">Cancelar</a>
    </form>
    </dialog>
    <button id="button" class="btn btn-danger">Limpiar base de datos</button>
    <br><br>
    <form action="index.php">
        <input type="submit" class="btn btn-warning" value="Volver">
    </form>
</div>
<script src="modalLauncher.js"></script>
</body>
</html>