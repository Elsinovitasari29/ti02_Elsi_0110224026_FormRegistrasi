<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    h3 {
        text-align: center;
        margin-bottom: 30px;
        text-transform: uppercase;
        text-weight: bold;
    }

    p {
        margin: 10px;
        padding: 5px;
    }

    .container {
        margin: 40px auto;
        background-color: #fff;
        padding: 40px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

</style>
</head>
<body>
    <div class="container">
    <h3>Kartu Registrasi Mahasiswa</h3>
    <table class="table">
        <tbody>
            <tr>
            <th scope="row">NIM</th>
            <td><?php echo $_POST['nim']; ?></td>
            </tr>
            <tr>
            <th scope="row">Nama Lengkap</th>
            <td><?php echo $_POST['namaLengkap']; ?></td>
            </tr>
            <tr>
            <th scope="row">Jenis Kelamin</th>
            <td><?php echo $_POST['jenisKelamin']; ?></td>
            </tr>
            <tr>
            <th scope="row">Program Studi</th>
            <td><?php echo $_POST['programStudi']; ?></td>
            </tr>
            <tr>
            <th scope="row">Skill</th>
            <td><?php 
            $skill = $_POST['skill'];
            foreach ($skill as $s) {
                echo "$s, ";
            }
            ?> </td>            
            </tr>   
            </tr>
            <tr>
            <th scope="row">Domisili</th>
            <td><?php echo $_POST['domisili']; ?></td>
            </tr>
            <tr>
            <th scope="row">Email</th>
            <td><?php echo $_POST['email']; ?></td>
            </tr>
        </tbody>
    </table>
    
    </div>
</body>
</html>


