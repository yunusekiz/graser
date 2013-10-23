			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Referanslar (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/reference/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{item_detail}
								<p>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="ref_detail" style="color:#000;" cols="99" rows="75">{ref_detail}</textarea>
								</p>
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->