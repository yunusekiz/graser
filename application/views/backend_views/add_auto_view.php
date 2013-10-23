			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Kiralık Araçlar (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/auto/addItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Marka Seçenekleri </label>              
									<select name="brand_id" class="small-input" style="color:#000;">
										<option value="0">Marka Seçiniz</option>
										{brands_iteration}
										<option value="{brand_id}">{brand_name}</option>
										{/brands_iteration}
									</select> 
								</p><br /><br />
								<label>(Bilgi ::: yeni bir araç ekleyebilmek için önce marka seçmelisiniz)</label> 
								<br /><hr><br />
								<p>
									<label>Araç Fiyat Tablosu Fotoğrafı </label>
                                	<input type="file" name="photo_field" accept="image/*" />
                                </p><br /><hr><br />

								<p>
									<label>Araç Model Adı </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="auto_title" 
									/>
								</p><br />

								<p>
									<label>Araç Açıklaması </label>
									<textarea class="text-input textarea" id="textarea" name="auto_detail"
									 cols="79" rows="15" style="color:#000;"></textarea>	
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