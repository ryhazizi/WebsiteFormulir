<!DOCTYPE html>
<html>
<head>
	<title>Website Formulir</title>
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
	<style type="text/css">
    a {
        text-decoration:none;
    }

		.form_container,.data_container {
			width:80%;
			margin:100px auto 50px auto;
		}
	</style>
</head>
<body ng-app="app_ci7PNAtUonlv6r3yhpPS" ng-controller="controller_o7AZmZmFGd7S1P7vay8S">
   <div class="w3-container w3-red">
      <h1>Website Formulir</h1>
   </div>
   <div class="form_container">
   	  <div class="w3-container w3-deep-orange">
        <h2>Pengisian Data</h2>
      </div>
      <form class="w3-container" method="POST" name="form_URro7kperWtQ2Dgdm7k1">
         <p>
            <label>Nama Lengkap</label>
            <input class="w3-input" type="text" name="namalengkap" ng-model="namalengkap" ng-pattern="/^[a-zA-Z ]*$/" ng-minlength="5" ng-maxlength="25" required>
            <div ng-show="form_URro7kperWtQ2Dgdm7k1.namalengkap.$touched && form_URro7kperWtQ2Dgdm7k1.namalengkap.$error.required" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Nama lengkap harus diisi !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.namalengkap.$error.pattern" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Nama lengkap hanya boleh berisi huruf dan spasi !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.namalengkap.$error.minlength" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Nama lengkap minimal terdapat 5 huruf !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.namalengkap.$error.maxlength" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Nama lengkap maksimal terdapat 25 huruf !
 			</div> 
        </p>
        <p>
          <div class="w3-row-padding">
  			<div class="w3-third">
              <label>Tanggal Lahir</label>
                <select class="w3-select" name="tanggallahir" ng-model="tanggallahir" required>
                  <option value="" selected></option>
                	<?php 
 		 	             foreach ($tgl_lahir_arr as $tglkey => $tglvalue) {
 		 	    	?> <option value="<?=$tglvalue?>"><?=$tglvalue?></option><?php } ?>
                </select>
                <div ng-show="form_URro7kperWtQ2Dgdm7k1.tanggallahir.$touched && form_URro7kperWtQ2Dgdm7k1.tanggallahir.$error.required" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
                Tanggal lahir harus diisi !
 		        </div>
            </div>
            <div class="w3-third">
              <label>Bulan Lahir</label>
                <select class="w3-select" name="bulanlahir" ng-model="bulanlahir" required>
                  <option value="" selected></option>
                	<?php 
 		 	             foreach ($bln_lahir_arr as $blnkey => $blnvalue) {
 		 	    	?> <option value="<?=$blnvalue?>"><?=$blnvalue?></option><?php } ?>
                </select>
                <div ng-show="form_URro7kperWtQ2Dgdm7k1.bulanlahir.$touched && form_URro7kperWtQ2Dgdm7k1.bulanlahir.$error.required" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
                Bulan lahir harus diisi !
 		        </div>
            </div>
            <div class="w3-third">
              <label>Tahun Lahir</label>
                <select class="w3-select" name="tahunlahir" ng-model="tahunlahir" required>
                  <option value="" selected></option>
                	<?php 
 		 	             foreach ($thn_lahir_arr as $thkey => $thnvalue) {
 		 	    	?> <option value="<?=$thnvalue?>"><?=$thnvalue?></option><?php } ?>
                </select>
                <div ng-show="form_URro7kperWtQ2Dgdm7k1.tahunlahir.$touched && form_URro7kperWtQ2Dgdm7k1.tahunlahir.$error.required" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
                Tahun lahir harus diisi !
 		        </div>
            </div>
         </div>
        </p>
        <p>
            <label>Alamat</label>
            <input class="w3-input" type="text" name="alamat" ng-model="alamat" ng-pattern="/^[a-zA-Z-0-9 ]*$/" ng-minlength="10" ng-maxlength="50" required>
            <div ng-show="form_URro7kperWtQ2Dgdm7k1.alamat.$touched && form_URro7kperWtQ2Dgdm7k1.alamat.$error.required" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Alamat harus diisi !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.alamat.$error.pattern" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Nama lengkap hanya boleh berisi huruf, angka dan spasi !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.alamat.$error.minlength" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Alamat minimal terdapat 10 karakter !
 			</div>
 			<div ng-show="form_URro7kperWtQ2Dgdm7k1.alamat.$error.maxlength" class="w3-text-red w3-padding-16 w3-margin-16 w3-animate-opacity">
            Alamat maksimal terdapat 50 karakter !
 			</div> 
        </p>
        <p>
        	<button class="{{form_URro7kperWtQ2Dgdm7k1.$valid ? 'w3-btn w3-green' : 'w3-btn w3-green w3-disabled'}}" type="submit" ng-click="proses()">Simpan Data</button>
        </p>
      </form>
   </div>
   <div class="data_container">
   	  <div class="w3-container w3-green">
        <h2>Data yang Sudah Disimpan</h2>
      </div>
      <table class="w3-table">
        <tr>
          <th>Nama Lengkap</th>
          <th>Tanggal Lahir</th>
          <th>Bulan Lahir</th>
          <th>Tahun Lahir</th>
          <th>Alamat</th>
          <th>Konfigurasi</th>
        </tr>
        <tr ng-repeat="data in datas">
          <td>{{data.NamaLengkap}}</td>
          <td>{{data.TanggalLahir}}</td>
          <td>{{data.BulanLahir}}</td>
          <td>{{data.TahunLahir}}</td>
          <td>{{data.Alamat}}</td>
          <td><button class="w3-btn w3-red" type="submit" ng-click="hapus(data.ID)">Hapus Data</button></td>
        </tr>
        </table>
   </div>
   <div class="w3-container w3-red w3-padding-16">
      &copy; Website Formulir
   </div>
   <script>
 	var app_formulir = angular.module('app_ci7PNAtUonlv6r3yhpPS', []);

 	app_formulir.controller('controller_o7AZmZmFGd7S1P7vay8S', function($scope, $http, $interval) {

    $http.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

    $interval(function () {$http.get('<?=base_url('Home/AmbilData');?>').then(function(response){$scope.datas=response.data;});}, 1000);

    $scope.hapus = function(Data) {
      $http({
        method: "post",
        url: "<?=base_url('Home/HapusData');?>",
        data: {
                 ID : Data
        },
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).then(function (response) {
           var result = angular.fromJson(response.data);

           if (result == "1") {
              swal("Sukses", "Data Berhasil Dihapus", "success");  
           }
      });
    }

 		$scope.proses = function () {
 			$http({
 				method: "post",
 				url: "<?=base_url('Home/SimpanData');?>",
 				data: {
 						NamaLengkap   : $scope.namalengkap,
 						TanggalLahir  : $scope.tanggallahir,
 						BulanLahir    : $scope.bulanlahir,
 						TahunLahir    : $scope.tahunlahir,
 						Alamat        : $scope.alamat
 				},
 				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
 			}).then(function (response) {

 				var result = angular.fromJson(response.data);

 				if (result == "1") {
 					 swal("Kesalahan", "Nama lengkap masih kosong", "error");
 				}else if (result == "2") {
 				     swal("Kesalahan", "Tanggal lahir masih kosong", "error");
 				}else if (result == "3") {
 				     swal("Kesalahan", "Bulan lahir masih kosong", "error");
 				}else if (result == "4") {
 				     swal("Kesalahan", "Tahun lahir masih kosong", "error");
 				}else if (result == "5") {
 				     swal("Kesalahan", "Alamat lahir masih kosong", "error");
 				}else if (result == "6") {
 				     swal("Kesalahan", "Nama lengkap minimal terdapat 5 huruf", "error");
 				}else if (result == "7") {
 				     swal("Kesalahan", "Nama lengkap maksimal terdapat 25 huruf", "error");
 				}else if (result == "8") {
 				     swal("Kesalahan", "Alamat minimal terdapat 10 karakter", "error");
 				}else if (result == "9") {
 				     swal("Kesalahan", "Alamat maksimal terdapat 50 karakter", "error");
 				}else if (result == "10") {
 				     swal("Kesalahan", "Nama lengkap hanya boleh berisi huruf dan spasi", "error");
 				}else if (result == "11") {
 				     swal("Kesalahan", "Alamat hanya boleh berisi huruf, angka dan spasi", "error");
 				}else if (result == "12") {
 				     swal("Kesalahan", "Nama yang anda gunakan sudah tersimpan di sistem", "error");
 				}else if (result == "14") {
 				     swal("Kesalahan", "Terjadi kesalahan sistem yang membuat data anda tidak bisa disimpan. Silahkan ulangi kembali atau muat ulang laman ini dan mengisi data kembali", "error");
 				}else {
 					   $scope.namalengkap = "";
 					   $scope.tanggallahir = "";
 					   $scope.bulanlahir = "";
 					   $scope.tahunlahir = "";
 					   $scope.alamat = "";
 					   $scope.form_URro7kperWtQ2Dgdm7k1.$setPristine();
 					   $scope.form_URro7kperWtQ2Dgdm7k1.$setUntouched();
             $scope.data = $result;
 				     swal("Sukses", "Data Berhasil Disimpan", "success");    	
 				}

 			});
 		}
 	});
 </script>
</body>
</html>