<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
</style>

</head>
<body>

    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Mostrar Comunidades</h1>
        </div>

        <?php
        // include database connection
        include 'config/database.php';

        // delete message prompt will be here

        // select all data
        //$query = "SELECT cif, nombre, pais, direccion,control_de_ingresos,control_de_gastos,moneda,ver_cuenta,Notificaciones,Fecha_creacion FROM comunidades ORDER BY id DESC";

        $query = ("select * from comunidades");

        //$query = "SELECT id, name, description, price FROM products ORDER BY id DESC";

        $stmt = $conn->prepare($query);
        //$stmt = $con->pg_prepare($query);

        $stmt->execute();

        var_dump($stmt->fetch(PDO::FETCH_ASSOC));

        /*
        // this is how to get number of rows returned
        $num = $stmt->rowCount();

        // link to create record form
        echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";

        //check if more than 0 record found
        if($num>0){

        echo "<table class='table table-hover table-responsive table-bordered'>";//start table

    //creating our table heading
        echo "<tr>";
        echo "<th>CIF</th>";
        echo "<th>Nombre</th>";
        echo "<th>Pais</th>";
        echo "<th>Direccion</th>";
        echo "<th>control_de_ingresos</th>";
        echo "<th>control_de_gastos</th>";
        echo "<th>moneda</th>";
        echo "<th>ver_cuenta</th>";
        echo "<th>Notificaciones</th>";
        echo "<th>Fecha_creacion</th>";
        echo "</tr>";

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // extract row
    // this will make $row['firstname'] to
    // just $firstname only
            extract($row);

    // creating new table row per record
            echo "<tr>";
            echo "<td>{$cif}</td>";
            echo "<td>{$nombre}</td>";
            echo "<td>{$pais}</td>";
            echo "<td>{$direccion}</td>";
            echo "<td>{$control_de_ingresos}</td>";
            echo "<td>{$nomcontrol_de_gastosbre}</td>";
            echo "<td>{$moneda}</td>";
            echo "<td>{$ver_cuenta}</td>";
            echo "<td>{$Notificaciones}</td>";
            echo "<td>{$Fecha_creacion}</td>";

            echo "<td>";
            // read one record 
            echo "<a href='read_one.php?cif={$cif}' class='btn btn-info m-r-1em'>Read</a>";

            // we will use this links on next part of this post
            echo "<a href='update.php?cif={$cif}' class='btn btn-primary m-r-1em'>Edit</a>";

            // we will use this links on next part of this post
            echo "<a href='#' onclick='delete_user({$cif});'  class='btn btn-danger'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }

// end table
        echo "</table>";

    }

    // if no records found
    else{
        echo "<div class='alert alert-danger'>No records found.</div>";
    }
    */
    ?>

</div> <!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- confirm delete record will be here -->

</body>
</html>