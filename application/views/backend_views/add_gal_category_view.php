			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;"> Galeri Kategorisi (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/gal_category/AddItem" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label> Kategori Adı (Türkçe)</label>               
									<input class="text-input large-input" type="text" style="color:#000;" id="large-input" name="gal_category_name_tr" />
									<br /><br /><br />
									<label> Kategori Adı (İngilizce)</label>               
									<input class="text-input large-input" type="text" style="color:#000;" id="large-input" name="gal_category_name_eng" />
									<br /><br />						
								</p>
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->