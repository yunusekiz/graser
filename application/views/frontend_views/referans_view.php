<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{site_title}</title>
		<link rel="stylesheet" href="{base}css/css3.css" />
		<link href="{base}css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript">
			var imagePath = '{base}';
		</script>			
		
		<script src="{base}js/jquery-1.7.2.min.js"></script>
		<script src="{base}js/lightbox.js"></script>
		<link href="{base}css/lightbox2.css" rel="stylesheet" />
		<style type="text/css">
		     .sol-menu ul li a:hover, #{ref_cat_css_switch}{background:url({base}img/sol-menu-li.png) no-repeat left top}
		</style>		
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
				<li class="aktif">
					<a href="{base}galeri" class="aktif">REFERANSLAR <span>REFERENCES</span></a>
					<ul>
						{ref_kategori_iteration}
						<li id="{ref_cat_css}"><a href="{base}galeri/referanslar/{ref_cat_css}/{ref_cat_id}">{title_tr} <span>{title_eng}</span></a></li>
						{/ref_kategori_iteration}
						<li id="{ref_cat_css}"><a href="{base}galeri/referanslar/">HEPSİ<span>ALL</span></a></li>
					</ul>
					</li>
				<li><a href="{base}galeri/sanal_tur">SANAL TUR <span>VISUAL TOUR</span></a></li>
				{galeri_kategori_iteration}
				  <li><a href="{base}galeri/detay/{gal_cat_css}/{gal_cat_id}">{title_tr} <span>{title_eng}</span></a></li>
				{/galeri_kategori_iteration}
			</ul>
		</div>

   <div class="sag-icerik">
  	 <div id="wrapper">
    	 <div id="list">
      	  <div id="galeri">
        	 <div class="col1">
        	 {ref_iteration}
        	   <div class="item"><a href="{base}{ref_big_photo}" rel="lightbox[roadtrip]" title="<h2>{title}</h2>{detail}"><img src="{base}{ref_thumb_photo}" ></a></div>
        	 {/ref_iteration}
        	 </div>
        	
          </div> 
    	</div>
    	<div class="clearfix"></div>
	 </div>
  </div>
 </div> 
	<div class="clearfix"></div>
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