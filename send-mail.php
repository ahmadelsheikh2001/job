<!doctype html>
<html lang="en">

<head>
    <title>send mail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="card">
      <div class="card-body">
      <div class="card-title h3 text-center text-success">Mail Data</div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Field</th>
                    <th class="text-center">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">Name</td>
                    <td class="text-center"><?= $data['name'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">Email</td>
                    <td class="text-center"><?= $data['email'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">phone</td>
                    <td class="text-center"><?= $data['phone'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">whatsapp phone</td>
                    <td class="text-center"><?= $data['whatsapp_phone'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">address</td>
                    <td class="text-center"><?= $data['address'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">Company</td>
                    <td class="text-center"><?= $data['company'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">message</td>
                    <td class="text-center"><?= $data['message'] ?></td>
                </tr>
            </tbody>


        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>