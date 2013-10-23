			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ahşap Dış Mekan Ürünleri Galeri - Yeni Kayıt Ekleme Formu</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/gal_out/controlItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label><b style="font-size:16px;">Kayıt Fotoğrafı</b> </label>
									<!--<input type="file" name="resimler[]" class="multi" accept="gif|jpg|png" /><br />-->
                                	<input type="file" name="photo_field" accept="image/*" />
                                </p><br /><hr><br />

								<p>
									<label>Kayıt --Başlık-- </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="title" 
									/>
								</p><br />								

								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->