<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- EXTERNAL --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>From Mahasiswa - Tugas W9</title>
  </head>
  <body>
    <section class="form-mahasiswa">
        <div class="container">
            <h2>From HTML Pada PHP</h2>

            <div class="form">
                <form action="{{url('Mahasiswa/output_form')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label for="nama" class="col-4 col-form-label">Nama</label> 
                      <div class="col-8">
                        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-4 col-form-label">Email</label> 
                      <div class="col-8">
                        <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
                      <div class="col-8">
                        <select id="lokasi" name="lokasi" class="custom-select">
                          <option value="Depok">Depok</option>
                          <option value="Bogor">Bogor</option>
                          <option value="Jakarta">Jakarta</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Jenis Kelamin</label> 
                      <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
                          <label for="jk_0" class="custom-control-label">P</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
                          <label for="jk_1" class="custom-control-label">L</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Skill</label> 
                      <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="PHP"> 
                          <label for="skill_0" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="MySQL"> 
                          <label for="skill_1" class="custom-control-label">MySQL</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="Javascript"> 
                          <label for="skill_2" class="custom-control-label">Javascript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="HTML"> 
                          <label for="skill_3" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="CSS"> 
                          <label for="skill_4" class="custom-control-label">CSS</label>
                        </div>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                </form>
            </div>
            <div class="output">
                <h2>Hasil Input</h2>
                <ul> 
                    @if(isset($data))
                        <li>Nama : {{ $data['nama']}}</li>
                        <li>Email : {{ $data['email']}}</li>
                        <li>Lokasi : {{ $data['lokasi']}}</li>
                        <li>JK : {{ $data['jk']}}</li>
                        <li>Skill : {{ $data['skill']}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>