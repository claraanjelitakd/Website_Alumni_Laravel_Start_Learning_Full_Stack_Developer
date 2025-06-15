
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
    <!-- menggunakan asset dari css dan js kalau yang standar html tidak ada asset -->

    <title>.:Website-@yield('title').:</title>
  </head>
  <body>
    <!-- <h1>Halloooww</h1> -->
     <div class="container-fluid d-flex flex-column min-vh-100">
         <!-- Baris Pertama -->
        <div class="row">
            <div class="col-md-12 bg-primary py-2">
                <!-- Bikin Dropdown -->
                <div class="dropdown" align="right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                        User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">
                        <div class="media">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968672.png" class="align-self-center mr-3" alt="..." width="50" height="50">
                            <div class="media-body">
                              <h5 class="mt-0">{{Auth::user()->namalengkap ?? "No User"}}</h5>
                              <small><p class="mb-0"><i class="bi bi-clock-history"></i>{{ \Carbon\Carbon::now('Asia/Jakarta')->format('H:i:s') }}</p></small>
                            </div>
                          </div>
                      </a>
                      <a class="dropdown-item" href="/ubahpass"><i class="bi bi-gear"></i> Setting</a>
                      <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
                  </div>
            </div>
            <!-- col-md-12 digunakan untuk layar medium 1 column dengan ukuran lebar 12 column -->
            <!--  menggunakan class selecter karena bisa mengisikan lebih dari 1 -->
              <!-- py-3 digunakan untuk padding melebarkan sisi atas atau bawah -->

        </div>
        <!-- Baris Kedua -->
        <div class="row">
             <!--  Column Kiri
            <div class="col-md-3 bg-danger vh-100"></div>
            Column Kanan
            <div class="col-md-9 bg-info vh-100"></div> -->
            <div class="col-md-2 border">
                <div class="nav flex-column nav-pills" id="v-pills-tab pt-2" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{($key == 'home')?'active':''}}" href="/" role="tab">Home</a>
                    <a class="nav-link {{($key == 'alumni')?'active':''}}" href="/alumni" role="tab">Data Alumni</a>
                  </div>
            </div>
            <div class="col-md-10 border">
                @yield('content')
            </div>

        </div>
        <!-- Baris Ketiga -->
        <div class="row mt-auto">
            <div class="col-md-12 bg-primary py-3"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
    <script>
    new DataTable('#example')
    </script>
  </body>
</html>
