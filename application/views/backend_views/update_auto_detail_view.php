			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Kiralık Araçlar (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/auto/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							{item_detail}				
								<p>              
									<input type="hidden" name="brand_id" value="{brand_id}"/>
								</p><br />												
								<p>
									<label>Araç Model Adı </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="auto_title"  value="{auto_title}"
									/>
								</p><br />

								<p>
									<label>Araç Açıklaması </label>
									<textarea class="text-input textarea" id="textarea" name="auto_detail"
									 cols="79" rows="15" style="color:#000;">{auto_detail}</textarea>	
								</p><br />
								
								<p>
									<input type="hidden" name="id" value="{auto_id}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}	
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->