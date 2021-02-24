
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
    <meta charset="UTF-8" />
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
	
	    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="/dist/sweetalert.min.js"></script>
    <!--END GLOBAL STYLES -->
</head>
<body class="padTop53">
	<div id="wrap">
	<header>
	<div class="box">

	<header>
		<h5 align="center" >Input Data Pasien</h5>
	</header>
		<div class="body">
			<form action="tambah_r.php" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nama Pemilik</label>
							<div class="col-lg-4">
								<input type="text" name="nm" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Hewan</label>
							<div class="col-lg-4">
								<textarea name="al" autofocus required class="form-control" /></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Hp</label>
							<div class="col-lg-4">
								<input type="text" name="tel" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Kelamin</label>
							<div class="col-lg-4">
								<select name="jk" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option></select>
								
							</div>
						</div>
					<div class="form-group">
							<label class="control-label col-lg-4">Tangibility</label>
							<div class="col-lg-4">
								<select name="pd" class="form-control"><option value="">Silahkan Dipilih...</option>
								  <option value="Nilai Gap 0,8">Sangat Puas</option>
								  <option value="Nilai Gap 0,45">Puas</option>
								  <option value="Nilai Gap 0,43">Cukup</option>
								  <option value="Nilai Gap 0,34">Tidak Puas</option>
								  <option value="Nilai Gap 0,34">Sangat Tidak Puas</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Empathy</label>
							<div class="col-lg-4">
								<select name="pk" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Nilai Gap 0,35">Sangat Tidak Puas</option>
								<option value="Nilai Gap 0,39">Tidak Puas</option>
								<option value="Nilai Gap 0,43">Cukup</option>
								<option value="Nilai Gap 0,52">Sangat Puas</option>
								<option value="Nilai Gap 0,51">Puas</option>
								</select>
							</div>
						</div>
						
							<div class="form-group">
							<label class="control-label col-lg-4">Reliability</label>
							<div class="col-lg-4">
								<select name="jma" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Nilai Gap >= 0,74">Sangat Puas</option>
								<option value="Nilai Gap >= 0,68">Puas</option>
								<option value="Nilai Gap >= 0,66">Cukup</option>
								<option value="Nilai Gap >= 0,57">Tidak Puas</option>
								<option value="Nilai Gap >= 0,46">Sangat Tidak Puas</option></select>
							</div>
						</div>
						
		
						<div class="form-group">
							<label class="control-label col-lg-4">Responsiveness</label>
							<div class="col-lg-4">
								<select name="pdt" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Nilai Gap >= 0,94">Sangat Puas</option>
							    <option value="Nilai Gap >= 0,57">Puas</option>
								<option value="Nilai Gap >= 0,54">Cukup</option>
								<option value="Nilai Gap >= 0,46">Tidak Puas</option>
								<option value="Nilai Gap >= 0,35">Sangat Tidak Puas</option>
								</select>
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Assurance</label>
							<div class="col-lg-4">
								<select name="st" class="form-control"><option value="">Silahkan Dipilih...</option>
								  <option value="Nilai Gap >= 0,34">Tidak Puas</option>
								  <option value="Nilai Gap >= 0,37">Cukup</option>
								  <option value="Nilai Gap >= 0,71">Puas</option>
								  <option value="Nilai Gap >= 1">Sangat Puas</option>
								</select>
								
							</div>
						</div>
						
				
						
						
						
							<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit"  value="Simpan" class="btn btn-primary" /> <a href="index.php" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
<!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../js/jquery-2.0.3.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
