<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container px-5 my-5 border border-2 border-dark rounded p-5">
    <h1 class="text-center mb-5">Form Registrasi</h1>
        <form method="POST" action="form_hasil.php">
            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control" name="nim" type="text" placeholder="NIM" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                <input class="form-control" name="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" value="Perempuan" data-sb-validations="required" />
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" value="Laki-Laki" data-sb-validations="required" />
                    <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jenisKelamin:required">Jenis Kelamin is required.</div>
            </div>

            <?php
            // Mengambil data program studi
            $ar_prodi = [
                "TI" => "Teknik Informatika",
                "SI" => "Sistem Informasi",
                "BD" => "Bisnis Digital"
            ];
            ?>

            <div class="mb-3">
                <label class="form-label" for="programStudi">Program Studi</label>
                <select class="form-select" id="programStudi" name="programStudi" aria-label="Program Studi" data-sb-validations="required">
                    <option value="">Pilih Program Studi</option>
                    <?php foreach($ar_prodi as $k => $v) : ?>
                        <option value="<?= $k ?>"><?= $v ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback" data-sb-feedback="programStudi:required">Program Studi is required.</div>
            </div>
                
            <?php
            // Define skills with their respective proficiency levels
            $ar_skill = [
                "HTML" => 20,
                "CSS" => 20,
                "JavaScript" => 20,
                "RWD Bootstrap" => 20,
                "PHP" => 30,
                "Python" => 30,
                "Java" => 50
            ];
            ?>

            <div class="mb-3">
                <label class="form-label d-block">Skill Web &amp; Programming</label>
                <?php foreach($ar_skill as $k => $v): ?>
                    <div class="form-check form-check-inline">
                        <input type='checkbox' class='form-check-input' name='skill[]' value='<?= $k ?>' data-sb-validations='required' />
                        <label class="form-check-label"><?= $k ?></label>
                    </div>
                <?php endforeach; ?>
                <div class="invalid-feedback" data-sb-feedback="skill[]:required">At least one skill is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="domisili">Domisili</label>
                <input class="form-control" name="domisili" type="text" placeholder="Domisili" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="domisili:required">Domisili is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email </label>
                    <input class="form-control" name="email" type="email" placeholder="Email " data-sb-validations="required,email" />
                <div class="invalid-feedback" data-sb-feedback="email:email">Please enter a valid email address.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>