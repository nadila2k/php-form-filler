<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form action="backend.php" method="post" class="mt-3">
        <div class="mb-3">
            <select name="status"  class="form-select" onchange="this.form.submit();">
                <option value="select">select</option>
                <option value="active">active</option>
                <option value="inactive">inactive</option>

            </select>
        </div>
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $name?></td>
                <td><?php echo $email?></td>
            </tr>
            
        </tbody>
    </table>

</body>
</html>