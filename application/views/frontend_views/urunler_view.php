<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{site_title}</title>
		<link href="{base}css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript">
			var imagePath = '{base}';
		</script>			
		<script src="{base}js/jquery-1.7.2.min.js"></script>
		<script src="{base}js/lightbox.js"></script>
		<link href="{base}css/lightbox.css" rel="stylesheet" />
		<style type="text/css">
		     .sol-menu ul li a:hover, #{pro_cat_css_switch}{background:url({base}img/sol-menu-li.png) no-repeat left top}
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
						<li><a href="{base}urunler" class="aktif">ÜRÜNLER</a></li>
						<li><a href="{base}galeri">GALERİ</a></li>
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
			<ul id="urun-menu">
			{urun_kategori_iteration}
				<li id="{pro_cat_css}"><a href="{base}urunler/kategori/{pro_cat_css}/{pro_cat_id}">{title_tr} <span>{title_eng}</span></a></li>
			{/urun_kategori_iteration}
			</ul>
		</div>
		<div class="sag-icerik">
			<div id="urunler">
				<div id="sol_tirnak"><img src="{base}img/sol_tirnak.png"></div>
				<div id="urun_cat_tr">{cat_name_tr}</div>
				<div id="tirnak_ana_div">
					<div id="float_left">
							{cat_name_eng}
						<img src="{base}img/sag_tirnak.png">
					</div>
				</div>
				<ul>
					{urun_iteration}
					<li><a href="{base}{product_big_photo}" rel="lightbox[roadtrip]" alt="{title}">
						<div class="urun-hover"><img src="{base}img/dogal-taslar/hover.png" alt="ürün fotoğrafı" /></div>
						<img src="{base}{product_thumb_photo}" alt="" /><span>{title}</span>
					</a>
					</li>
					{/urun_iteration}
				</ul>
				<div class="clearfix"></div>
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