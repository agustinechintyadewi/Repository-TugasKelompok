<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Form Addopt</title>
</head>
<body>
    <div class="head-addopt">
        <h2>Form Adopsi</h2>
    </div>
    <div class="form-addopt">
        <form class="row g-3">
            <div class="col-12">
                <label for="nama_hewan" class="form-label">Nama Hewan Adopsi</label>
                <input type="text" class="form-control" id="inputNamahewan">
            </div>
            <div class="col-12">
                <label for="inputNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNama">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="inputAddress2">
            </div>
            <div class="col-md-6">
                <label for="inputDeliver" class="form-label">Pengambilan</label>
                <select id="inputDeliver" class="form-select">
                <option selected>Ambil di tempat</option>
                <option>Kirim</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputBukti" class="form-label">Bukti foto lingkungan tempat tinggal</label>
                <input type="file" class="form-control" id="inputBukti">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('detailShelter') }}" class="btn btn-primary" role="button">Kirim</a>
                <a href="{{ route('detailShelter') }}" class="btn btn-danger" role="button">Batal</a>
            </div>
        </form>
    </div>
    
</body>
</html>