			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Konut Projeleri - Yeni Kayıt Ekleme Formu</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/project/controlItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label><b style="font-size:16px;">Proje Fotoğrafı</b> </label>
									<!--<input type="file" name="resimler[]" class="multi" accept="gif|jpg|png" /><br />-->
                                	<input type="file" name="photo_field" accept="image/*" />
                                </p><br /><hr><br />

								<p>
									<label>Proje --Başlık-- </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="reference_title" 
									/>
								</p><br />								

								<p>
									<label>Proje  --Detay-- </label>
<!-- 									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="fb_detail_field" 
									/> -->
									<textarea class="text-input textarea" id="textarea" name="reference_detail"
									 cols="79" rows="10" style="color:#000;"></textarea>										
								</p><br /><br />

								<p>
									<label>Proje Tarihi </label>
									<input class="text-input" type="text" name="reference_date" id="datepicker" style="color:#000;">																						
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