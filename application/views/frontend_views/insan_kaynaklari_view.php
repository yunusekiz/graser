<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{title}</title>
		<link href="{base}css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="{base}js/jquery-1.7.2.min.js"></script>
		<script src="{base}js/lightbox.js"></script>
		<link href="{base}css/lightbox.css" rel="stylesheet" />
	</head>
    <body>
	<div class="ortala">
		<div class="sol-menu">
		
		</div>
		<div class="sag-icerik">		
			<div id="header">
				<div id="logo">
					<h1><a href="{base}">GRASEL</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li><a href="{base}">ANASAYFA</a></li>
						<li><a href="{base}urunler">ÜRÜNLER</a></li>
						<li><a href="{base}galeri">GALERİ</a></li>
						<li><a href="{base}kurumsal" class="aktif">KURUMSAL</a></li>
						<li><a href="{base}iletisim">İLETİŞİM</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>		
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="ortala">
		<div class="sol-menu">
			<ul id="kurumsal-menu">
				<li><a href="{base}kurumsal">HAKKIMIZDA <span>ABOUT US</span></a></li>
				<li><a href="{base}kurumsal/insan_kaynaklari" class="aktif">İNSAN KAYNAKLARI<span>HUMAN RESOURCES</span></a></li>
			</ul>
		</div>
		<div class="sag-icerik">
			<div id="kurumsal">
				<div id="kurumsal-img"><p>Yüzlerce, binlerce parçayı anlamlı bir bütün oluşturma için bir araya getiririz... onları, şiirle birbirine yapıştırıp, üzerini müzikle kaplarız. <span>we brıng hundrends and thousands of pıeces togetger to compose a meanıngful whole. we brıng them togetger poetıcally and dress them wıth musıc.</span></p></div>
<!-- 				<div class="basvuru-form">
					<form action="" method="post">
						<label id="lab">İsim,Soyisim</label>
						<div id="form_text"><input type="text"></div>
						<label id="lab">Başvurulan Pozisyon</label>
						<input type="submit" value="Gönder">
					</form> 
			   </div> -->
				<div class="basvuru-form" style="margin-top:20px;">
					<form action="basvuru" method="post" enctype="multipart/form-data">
					<div id="f1">
						<div class="kutu">
							<span><b>Başvurulacak Departman/Pozisyon</b></span>
							<select style="width:235px" id="" name="position" required>
								<option value="">Seçiniz</option>
								<option value="Grasel Ustası">Grasel Ustası</option>
								<option value="Araç Taşıma">Araç Taşıma</option>
							</select>
						</div>
						<div class="kutu" style="margin-left:5px;">
							<span><b>Ad Soyad</b></span>
							<input type="text" style="width:200px;" name="contactname" required/>
						</div>
						<div class="kutu">
							<span><b>E-mail</b></span>
							<input type="text" style="width:215px;" name="email" required/>
						</div>
						<div class="kutu w85">
							<span><b>Telefon</b></span>
							<input type="text" style="width:200px;" name="phone" required/>
						</div>	
						<br/><br/><br/>
						
						<div class="clearfix"></div>
					</div>				

					<div id="f1">
						<div id="is-referans">
						<div class="kutu">
							<span><b>Cv / Özgeçmiş Dosyanız</b></span>
							<input type="file" style="width:200px;" name="cv_file_name" required/>
						</div>							
							<div id="eklemek-istenen">
								<div class="kutu" style="margin-left:40px;">
									<span><b>Eklemek İstediğiniz Diğer Hususlar</b></span>
									<textarea name="message" id="" cols="77" rows="6" required></textarea>
								</div>
							</div>
						</div>						
					</div>
					<input type="submit" value="Formu Gönder" 
					style="width:120px;height:30px;font-weight:bold;margin-left:710px;margin-top:25px;" />
				 </form>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
    <div id="footer">
        <div class="ortala">
            <div class="sol-menu"></div>
            <div class="sag-icerik">
                <div id="iletisim-bilgileri">
                    {iletisim_iteration}
                    <p>
                        <div id="address">{address}</div>
                    </p>
                    <p>
                        Tel&nbsp;&nbsp;&nbsp;&nbsp;: {phone}<br />
                        Faks&nbsp;&nbsp;: {fax}
                    </p>
                    {/iletisim_iteration}
                </div>
                <p id="p_444">444 44 59</p>
                <div id="copyright">
                    <p>Copyright © 2013 Graser All Rights Reserved.</p>
                </div>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>
	</body>
</html>