<?php include("header.php") ?>

<div style="text-align:center" class="container">
<br><p class="alert alert-danger" style="text-align:center"><img src="icon/alert.svg" width="24" height="24">¡Precaución!, Estas opciones afectan todo el sistema</p><br><br>

    <form action="reset_database.php" method="post">
        <input type="submit" class="btn btn-danger" name="reset_database" value="Limpiar base de datos">
    </form>
</div>
</body>
</html>