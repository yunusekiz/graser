			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Listeler (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/lists/addItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Liste  Dosyası</label>
                                	<input type="file" name="photo_field"/>
                                </p>
								<label>(Bilgi : Word, Excell, veya Pdf dosyası ekleyebilirsiniz)</label> 
                                <br /><br />

								<p>
									<label>Liste Başlığı ( Türkçe ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_title" 
									/>
								</p>
								
								<p>
									<label>Liste Detay Bilgisi ( Türkçe ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_detail" 
									/>
								</p><br />
								<hr>
								<br />
								<p>
									<label>Liste Başlığı ( in English ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_title_eng" 
									/>
								</p>									
								
								<p>
									<label>Liste Detay Bilgisi ( in English ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_detail_eng" 
									/>
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