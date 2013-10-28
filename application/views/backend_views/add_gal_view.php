			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Galeri (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/gal/addItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Galeri Kategorisi Seçenekleri </label>              
									<select name="cat_id" class="small-input" style="color:#000;">
										<option value="0">Kategori Seçiniz</option>
										{gal_cat_iteration}
										<option value="{gal_cat_id}">{title_tr}</option>
										{/gal_cat_iteration}
									</select> 
								</p><br /><br />
								<label>(Bilgi ::: yeni bir kayıt ekleyebilmek için önce kategori seçmelisiniz)</label> 
								<br /><hr><br />
								<p>
									<label>Galeri Fotoğrafı </label>
                                	<input type="file" name="photo_field" accept="image/*" />
                                </p><br /><hr><br />

								<p>
									<label>Galeri Başlık </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="title" 
									/>
								</p><br />

								<p>
									<label>Galeri Detay</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="detail"
									 style="color:#000;" cols="79" rows="5"></textarea>
								</p><br/>									

								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->