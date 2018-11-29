<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Update a Record - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Update Product</h1>
        </div>

        <!-- PHP read record by ID will be here -->
        <?php
        // get passed parameter value, in this case, the record ID
        // isset() is a PHP function used to verify if a value is there or not
        $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

        //include database connection
        include 'config/database.php';

        // read current record's data
        try {
            // prepare select query
            $query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";
            $stmt = $con->prepare( $query );

            // this is the first question mark
            $stmt->bind_param("i", $id);

            // execute our query
            $stmt->execute();

            $stmt->bind_result($id,$nombre,$desc,$precio);

            $stmt->fetch();

            // store retrieved row to a variable
            //$row = $stmt->fetch(PDO::FETCH_ASSOC);

            // values to fill up our form
            $name = $nombre;

            $description = $desc;

            $price = $precio;
        }

            // show error
        catch(Exception $exception){
            die('ERROR: ' . $exception->getMessage());
        }
        ?>

        <?php


        include 'config/database.php';
        // check if form was submitted
        if($_POST){

            try{

        // write update query
        // in this case, it seemed like we have so many fields to pass and 
        // it is better to label them and not use question marks
        // posted values




               $query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";


        // prepare query for excecution

                $stmt = $con->prepare($query);

                $stmt->bind_param("ssii",$nom,$des,$pre,$ida);

                $nom=htmlspecialchars(strip_tags($_POST['name']));
                $des=htmlspecialchars(strip_tags($_POST['description']));
                $pre=htmlspecialchars(strip_tags($_POST['price']));
        // bind the parameters
            /*    $stmt->bind_param(':name', $name);
                $stmt->bind_param(':description', $description);
                $stmt->bind_param(':price', $price);
                $stmt->bind_param(':id', $id);
                */

        // Execute the query
                if($stmt->execute()){
                    echo "<div class='alert alert-success'>Record was updated.</div>";
                }else{
                    echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
                }

            }

    // show errors
            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }
        ?>

        <!--we have our html form here where new record information can be updated-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='name' value="<?php echo htmlspecialchars($name, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name='description' class='form-control'><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></textarea></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type='text' name='price' value="<?php echo htmlspecialchars($price, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save Changes' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back to read products</a>
                    </td>
                </tr>
            </table>
        </form>

    </div> <!-- end .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>