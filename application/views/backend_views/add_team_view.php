			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;"> Yönetim Kadromuz (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/team/AddItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Ad, Soyad</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="team_name" 
									/>
								</p><br />
								<p>
									<label>Yönetim kadrosundaki görevi ( Türkçe )</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="positon_title" 
									/>
								</p><br />

								<p>
									<label>Yönetim kadrosundaki görevi ( in English ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="positon_title_eng" 
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