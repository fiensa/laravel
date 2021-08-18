<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<h1>Test Controller dan Database</h1>

<table class="table table-borderless">
    <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Name</th>
    </tr>
    <?php $no = 1; ?>
    @foreach($data as $row)
    <tr style="text-align:center;">
        <td><?= $no++; ?></td>
        <td>{{ $row->first_name }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>