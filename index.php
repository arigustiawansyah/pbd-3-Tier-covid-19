<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="fontawesome-free/css/all.css" rel="stylesheet"> <!--load all styles -->
    <style type="text/css">
              .box{
                padding-top:30px 40px;
                border-radius:5px;
                box-shadow: black 1px 1px 1px 1px ; 
              }
               .hr1{
                  background-color: black;
                }
                .hr2{
                  background-color: black;
                }
                body{
                 background-image: url(img/virus.png);
                  background-attachment: fixed;
                  background-size:cover;
                  background-position: 0 -100px;
                  min-height:660px;

                }
            </style>

    <title>Pantau Covid-19</title>
  </head>
  <body>

            <!--jumbotron-->
         <div class="container  text-center text-white mt-5">
              <h1 class="display-4 " style="font-family: arial" class="shadow p-3 mb-5 bg-black rounded">Covid-19</h1>
              <p class="lead">
                <h5 style="font-family: arial"> Pantau Virus Corona Terkini Di Dunia <i class="fas fa-globe-europe fa-sm"></i></h5>
                <br>
                <h3>Mari jaga kesehatan dan Patuhilah Aturan Pemerintah</h3>
              </p>
              <hr>
            </div>
            <div class="container text-white">
              <div class="row">
                <div class="col-md-4">
                    <div class="bg-danger box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Positif</h5>
                         <h5 id="data-kasus" style="font-family:italic" class="ml-2" class="count">...</h5>
                         <h5 style="font-family: italic" class="ml-2">Orang</h5>
                         
                       </div>
                       <div class="col-md-4 mt-3 ml-5">
                        <i class="fas fa-virus fa-4x fa-circle-o-notch fa-spin"></i>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-dark box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Meninggal</h5>
                         <h5 id="data-mati" style="font-family:italic">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                       <div class="col-md-4 mt-3 ml-5" align="center" >
                        <i class="far fa-sad-tear fa-4x "></i>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-success box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Sembuh</h5>
                         <h5 id="data-sembuh" style="font-family:italic" align="center" class="ml-2">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                       <div class="col-md-4 mt-3 ml-5" align="center">
                         <i class="fas fa-smile fa-4x fa-refresh fa-spin"></i>
                       </div>
                     </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            <br>
            <br>
              <h3 class="mt-5 text-white" align="center"><img src="img/indo.webp" width="30" height="30" style="border-radius:20px"> Pantauan Virus Corona Di Indonesia <img src="img/indo.webp" width="30" height="30" style="border-radius:20px"></h3>

              <hr width="300" class="hr1">
              <hr class="hr2" width="200">
              <br>
              <br>
         </div>
         <div class="container text-white">
              <div class="row">
                <div class="col-md-4">
                    <div class="bg-danger box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Positif</h5>
                         <h5 id="kasus-negara" style="font-family:italic" class="ml-2" class="tambah">...</h5>
                         <h5 style="font-family: italic" class="ml-2">Orang</h5>
                        
                       </div>
                       <div class="col-md-4 mt-3 ml-5">
                        <i class="fas fa-virus fa-4x fa-refresh fa-spin"></i>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-dark box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">jumlah Meninggal</h5>
                         <h5 id="mati-negara" style="font-family:italic">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                        <div class="col-md-4 mt-3 ml-5" align="center" >
                        <i class="far fa-sad-tear fa-4x"></i>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-info box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Meninggal Hariini</h5>
                         <h5 id="harimati-negara" style="font-family:italic">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                       <div class="col-md-4 mt-3 ml-5">
                        <i class="far fa-sad-tear fa-4x"></i>
                       </div>
                     </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="bg-success box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Sembuh</h5>
                         <h5 id="sembuh-negara" style="font-family:italic" align="center" class="ml-2">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                       <div class="col-md-4 mt-3 ml-5">
                         <i class="fas fa-smile fa-4x fa-refresh fa-spin"></i>
                       </div>
                     </div>
                    </div>
                </div>
                 <div class="col-md-4 mt-4">
                    <div class="bg-primary box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-2">Dirawat</h5>
                         <h5 id="rawat-negara" style="font-family:italic" class="ml-2">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                      <div class="col-md-4 mt-3 ml-5">
                        <img src="img/rumah.ico" width="80" >
                       </div>
                     </div>
                    </div>
                </div>
                 <div class="col-md-4 mt-4">
                    <div class="bg-warning box">
                     <div class="row">
                       <div class="col-md-6" align="center">
                         <h5 style="font-family:italic" class="ml-auto">Kasus Hari ini</h5>
                         <h5 id="hari-negara" style="font-family:italic" class="ml-2">...</h5>
                         <h5 style="font-family: italic">Orang</h5>
                       </div>
                       <div class="col-md-4 mt-4 ml-5">
                         <img src="img/calender.png" width="50" >
                       </div>
                     </div>
                    </div>
                </div>
              </div>
              <br>
         </div>
         <br>
      </div>
       <div class="container-fluid  col-8">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Data Kasus Corona DI Provinsi Indonesia</h6>
            </div>
            <div class="card-body">
           
            <br>
              <div class="table-responsive">
                <table class="table table-striped" id="DataTales" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <th>No.</th>
                    <th>Nama Provinsi</th>
                    <th>Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                  </thead>
                  <tbody id="table-data">   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     </body>

</html>
<script> 
  $(document).ready(function(){
    
    //Fungsi menampilakan & memanggil Data

    semuaData();
    dataNegara();
    dataProvinsi();
    
    //Auto update data
    setInterval(function(){
      semuaData();
      dataNegara();
    }, 3000);

    function semuaData(){
      $.ajax({
        url : 'https://coronavirus-19-api.herokuapp.com/all',
        success : function(data){
          try{
            var json = data;
            var kasus = data.cases;
            var Meninggal = data.deaths;
            var Sembuh = data.recovered;

            $('#data-kasus').html(kasus);
            $('#data-mati').html(Meninggal);
            $('#data-sembuh').html(Sembuh);
           

          }catch{
            alert('Errorr');
          }
        }

      }); 
    }

    function dataNegara(){
      $.ajax({
        url : 'https://coronavirus-19-api.herokuapp.com/countries',
        success : function(data){
          try{
            var json = data;
            var html = [];

            if(json.length > 0){
              var i;
              for(i = 0; i < json.length; i++){
                var dataNegara = json[i];
                var namaNegara = dataNegara.country;
              
              if(namaNegara === 'Indonesia'){
                var kasus = dataNegara.cases;
                var hari = dataNegara.todayCases;
                var mati = dataNegara.deaths;
                var harimati = dataNegara.todayDeaths;
                var Sembuh = dataNegara.recovered;
                var rawat = dataNegara.active;
                
                
                $('#kasus-negara').html(kasus);
                $('#hari-negara').html(hari);
                $('#mati-negara').html(mati);
                $('#harimati-negara').html(harimati);
                $('#sembuh-negara').html(Sembuh);
                $('#rawat-negara').html(rawat);
               

                }
              }
            }


          }catch{
            alert('salahhhh');
          }
        }

      }); 
    }
  }); 

  function dataProvinsi(){
      $.ajax({
        url : 'curl.php',
        type : 'GET' ,
        success : function(data){
          try{
           $('#table-data').html(data);

          }catch{
            alert('Errorr');
          }
        }

      }); 
    }
</script>
