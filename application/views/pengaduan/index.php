<section>
<h2 class="heading text-center mb-sm-5 mb-4"> Get In Touch </h2>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJAUwlox5Wei4RgIpW43Z6AgU&key=AIzaSyDJa4PVCZU2lIDPNRrERZAisSjImmLglSg"></iframe>
            <div class="main_grid_contact ">    
        <div class="form">
				<h3 class="text-capitalize mb-2">Pengaduan</h3>
				<form action="<?php echo site_url('Pengaduanf/insert');?>" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="in_username" placeholder="Nama Lengkap">
                    </div>
					<div class="input-group">
						
					</div>
					<div class="input-group">
						<textarea rows="4" name="in_keluhan" cols="50" placeholder="Pesan"></textarea>
					</div>
					<div class="input-group1">
						<button class="submit btn" type="submit" onclick="alert('Aduan berhasil dikirim')">Kirim</button>
					</div>
				</form>
			</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3">Informasi Alamat</h3>
				<p class="">Desa Pendowoharjo</p>
				<address>
					<p class="mt-3"><span class="fa fa-map-marker"></span>Jl. Bantul Km. 8,5 Pendowoharjo Sewon Bantul <span>Kabupaten Sleman</span> </p>
					<p class="my-2"><span class="fa fa-phone"></span>0274-367228</p>
					<p class=""><span class="fa fa-envelope-open"></span> <a href="mailto:mail@example.com">mail@example.com</a> </p>
				</address>
            </div>
        </div>
        </div>
        </section>