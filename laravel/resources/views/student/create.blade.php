<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Pendaftaran Mahasiswa</title>
</head>

<body>
    <div class="container d-flex justify-content-center pt-4 bg-white">
        <div class="row">
            <div class="col-md-12 ">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>
                <a href="{{url()->previous()}}" class="btn btn-info mb-3 me-3 text-white">Back</a>
                <form action="" {{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="mb-2" for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                            value="{{ old('nim') }}">
                        @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                    value="L" {{
                  old('jenis_kelamin')=='L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                    value="P" {{
                  old('jenis_kelamin')=='P' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="jurusan" class="mb-2">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika"
                                {{ old('jurusan')=='Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi" {{ old('jurusan')=='Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi
                            </option>
                            <option value="Ilmu Komputer" {{ old('jurusan')=='Ilmu Komputer' ? 'selected' : '' }}>
                                Ilmu Komputer
                            </option>
                            <option value="Teknik Komputer" {{ old('jurusan')=='Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Komputer
                            </option>
                            <option value="Teknik Telekomunikasi"
                                {{ old('jurusan')=='Teknik Telekomunikasi' ? 'selected' : '' }}>
                                Teknik Telekomunikasi
                            </option>
                        </select>
                        @error('jurusan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="alamat" class="mb-2">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="mb-3" for="image">Gambar Profile</label></br>
                        <input type="file" class="form-control-file mb-3" id="image" name="image">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>