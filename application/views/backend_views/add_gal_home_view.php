			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ahşap Ev Galeri (yeni foto ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/gal_home/AddItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
              					<p>
                  					<label> fotoğraf yüklemek için bir dosya seçin</label>
                   					<input type="file" name="photo_field" accept="image/*" />
                   					           					
              					</p> <br/> <hr> <br/>																																	
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->