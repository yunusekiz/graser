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
				<li><a href="{base}kurumsal" class="aktif">HAKKIMIZDA <span>ABOUT US</span></a></li>
				<li><a href="{base}kurumsal/insan_kaynaklari">İNSAN KAYNAKLARI <span>HUMAN RESOURCES</span></a></li>
			</ul>
		</div>
		<div class="sag-icerik">
			<div id="kurumsal">
				<div id="kurumsal-img"><p>Yüzlerce, binlerce parçayı anlamlı bir bütün oluşturma için bir araya getiririz... onları, şiirle birbirine yapıştırıp, üzerini müzikle kaplarız. <span> we brıng hundrends and thousands of pıeces togetger to compose a meanıngful whole. we brıng them togetger poetıcally and dress them wıth musıc.</span></p></div>
				{hakkimizda_iteration}
				<div id="kurumsal-tr">
					{about_detail_tr}
				</div>
				<div id="kurumsal-eng">
					{about_detail_eng}
				</div>
				{/hakkimizda_iteration}
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