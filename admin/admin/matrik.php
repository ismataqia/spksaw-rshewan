<?php
include_once("../library/koneksi.php");
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
$id=$_POST["nim"] ;
$tt=$_POST["tt"] ;
$ee=$_POST["ee"] ;
$rr=$_POST["rr"] ;
$rs=$_POST["rs"] ;
$rumah=$_POST["status"] ;

if($tt=='Nilai Gap 0,8'){
$khasiat='5';
} else if($tt=='Nilai Gap 0,45'){
$khasiat='4';
} else if($tt=='Nilai Gap 0,43'){
$khasiat='3';
} else if($tt=='Nilai Gap 0,4'){
$khasiat='2';
} else if($tt=='Nilai Gap 0,34'){
$khasiat='1';
} 

if($ee=='Nilai Gap 0,35'){
$t_pekerjaan='1';
} else if($ee=='Nilai Gap 0,39'){
$t_pekerjaan='2';
} else if($ee=='Nilai Gap 0,43'){
$t_pekerjaan='3';
} else if($ee=='Nilai Gap 0,52'){
$t_pekerjaan='5';
} else if($ee=='Nilai Gap 0,51'){
$t_pekerjaan='4';
}

if($rr=='Nilai Gap >= 0,74'){
$t_anak='5';
} else if($rr=='Nilai Gap >= 0,68'){
$t_anak='4';
} else if($rr=='Nilai Gap >= 0,66'){
$t_anak='3';
} else if($rr=='Nilai Gap >= 0,57'){
$t_anak='2';
} else if($rr=='Nilai Gap >= 0,46'){
$t_anak='1';
} 

if($rs=='Nilai Gap >= 0,94'){
$t_pendapatan='5';
} else if($rs=='Nilai Gap >= 0,57'){
$t_pendapatan='4';
} else if($rs=='Nilai Gap >= 0,54'){
$t_pendapatan='3';
} else if($rs=='Nilai Gap >= 0,46'){
$t_pendapatan='2';
} else if($rs=='Nilai Gap >= 0,35'){
$t_pendapatan='1';
}

if($rumah=='Nilai Gap >= 0,34'){
$t_rumah='2';
}  else if($rumah=='Nilai Gap >= 0,37'){
$t_rumah='3';
}  else if($rumah=='Nilai Gap >= 0,71'){
$t_rumah='4';
}  else if($rumah=='Nilai Gap >= 1'){
$t_rumah='5';
}

			mysql_query("insert into tbmatrik values('','$id','$khasiat','$t_pekerjaan','$t_anak','$t_pendapatan','$t_rumah','')");
			echo"<script>alert('Data Berhasil di Proses');window.location.href='index.php?menu=spk'</script>"; 
			echo("<script>
		

swal('Good Job!', 'Data anda sukses tersimpan', 'success');
				
		</script>");
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>
			
			";
			
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">

	<header>
		<h5>Data Matrik</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			

<div class="form-group">
							<label class="control-label col-lg-4">NAMA PEMILIK</label>
							<div class="col-lg-4">
								<select name="nim" id="nim" onchange="changeValue(this.value)" class="form-control" >
        <option value=0>-Pilih-</option>
        <?php
    $result = mysql_query("select * from keluarga");   
    $jsArray = "var dtMhs = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['Id_keluarga'] . '">' . $row['Nama'] . '</option>';   
        $jsArray .= "dtMhs['" . $row['Id_keluarga'] . "'] = {tt:'" . addslashes($row['Pendidikan_t']) . "',ee:'".addslashes($row['Pekerjaan'])."',rr:'".addslashes($row['Jumla_anak'])."',rs:'".addslashes($row['Pendapatan'])."',status:'".addslashes($row['Status_rumah'])."'};\n";   
    }     
    ?>   
        </select>   
							</div>
						</div>
					
					<div class="form-group">
							<label class="control-label col-lg-4">TANGIBILITY</label>
							<div class="col-lg-4">
								  <input type='text' data-field="x_username" id="tt" name='tt'  placeholder="Tangibility" class="form-control"> 
							</div>
						</div>
		<div class="form-group">
							<label class="control-label col-lg-4">EMPATHY</label>
							<div class="col-lg-4">
								 <input type='text' data-field="x_username" id="ee" name='ee' placeholder="Empathy" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">RELIABILITY</label>
							<div class="col-lg-4">
								<input type='text' data-field="x_username" id="rr" name='rr'  placeholder="Reliability" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">RESPONSIVENESS</label>
							<div class="col-lg-4">
							 <input type='text' data-field="x_username" id="rs" name='rs'  placeholder="Responsiveness" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">ASSURANCE</label>
							<div class="col-lg-4">
								<input type='text' data-field="x_username" id="status" name='status'  placeholder="Assurance" class="form-control">   
								
							</div>
						</div>
						
						
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Proses" class="btn btn-primary" /> <a href="?menu=index" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(Id_keluarga){ 
    document.getElementById('tt').value = dtMhs[Id_keluarga].tt; 
    document.getElementById('ee').value = dtMhs[Id_keluarga].ee; 
	 document.getElementById('rr').value = dtMhs[Id_keluarga].rr; 
	  document.getElementById('rs').value = dtMhs[Id_keluarga].rs; 
	  document.getElementById('status').value = dtMhs[Id_keluarga].status; 
    };  
    </script> 