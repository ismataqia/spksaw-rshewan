       <div id="left">
            <ul id="menu" class="collapse">
                <li class="panel active"><a href="index.php"><i class="icon-home"></i> Home</a></li>
                <li><a href="?menu=spk"><i class="icon-refresh"></i> Proses Analisa</a></li>
                <li><a href="?menu=cetak"><i class="icon-print"></i> Hasil Analisa</a></li>
				
			
                 <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
             
            </ul>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <div class="row">
                    
                </div>
                <br/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												Tentang Sistem Aplikasi
											</div>
											<div class='panel-body'>
												<ul class='nav nav-tabs'>
													<li class='active'><a href='#home' data-toggle='tab'>Home</a>
													</li>
													
												</ul>

												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<h4>Selamat Datang di Sistem Pengukuran Kualitas Pelayanan </h4>
													<p> Sistem Analisa Kepuasan Pasien ini adalah sistem analisa yang mengukur kepuasan pasien berdasarkan kualitas pelayanan di Rumah Sakit Hewan Provinsi Sumatera Selatan. Sistem ini akan membantu pengambilan keputusan dengan memanfaatkan data dan model-model untuk menyelesaikan masalah-masalah yang tidak terstruktur.
Sistem Analisa Kepuasan Pasien ini didasar dari Sistem Pendukung Keputusan dengan Metode Simple Additive Weighting (SAW). Selain itu  sistem pendukung keputusan merupakan suatu perlengkapan dari sesorang atau instansi dalam proses pengambilan keputusan. Dimana sistem ini tidak ditunjukan untuk mengganti pengambil keputusan dalam pembuatan keputusan.
Sistem pendukung keputusan menggabungkan kemampuan komputer dalam pelayanan interaktif dengan pengolahan atau pemanipulasi data yang memanfaatkan model atau aturan penyelesaian yang tidak terstruktur. Sistem pendukung keputusan mempunyai beberapa sumber intelektual dengan kemempuan dari komputer untuk memperbaiki kualitas keputusan .
</p>
													</div>
													
												</div>
											</div>
										</div>
									</div>";
						}
						?>
					</div>
                </div>
                  <!--END BLOCK SECTION -->
               
            </div>
        </div>