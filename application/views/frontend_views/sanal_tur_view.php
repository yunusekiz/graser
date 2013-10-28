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
						<li><a href="{base}galeri" class="aktif">GALERİ</a></li>
						<li><a href="{base}kurumsal">KURUMSAL</a></li>
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
			<ul id="galeri-menu">
				<li><a href="{base}galeri">REFERANSLAR <span>REFERENCES</span></a></li>
				<li><a href="{base}galeri/sanal_tur" class="aktif">SANAL TUR<span>VISUAL TOUR</span></a></li>
				{galeri_kategori_iteration}
				<li class="{gal_cat_css}">
				  	<a href="{base}galeri/detay/{gal_cat_css}/{gal_cat_id}" >{title_tr} <span>{title_eng}</span></a>
				</li>
				{/galeri_kategori_iteration}
			</ul>
		</div>
		<div class="sag-icerik">
			<div id="sanal-tur">
				<div id="video">
				{sanal_tur_iteration}	
					{tour_video}
					{tour_detail}
				{/sanal_tur_iteration}	
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