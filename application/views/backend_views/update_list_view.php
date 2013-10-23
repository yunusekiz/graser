			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Listeler (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/lists/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							{item_detail}				
								<p>
									<label>Liste Başlığı ( Türkçe ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_title" value="{list_title}"
									/>
								</p>
								
								<p>
									<label>Liste Detay Bilgisi ( Türkçe ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_detail" value="{list_detail}"
									/>
								</p><br />
								<hr>
								<br />
								<p>
									<label>Liste Başlığı ( in English ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_title_eng" value="{list_title_eng}"
									/>
								</p>									
								
								<p>
									<label>Liste Detay Bilgisi ( in English ) </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="list_detail_eng" value="{list_detail_eng}"
									/>
								</p>	
								
								<p>
									<input type="hidden" name="id" value="{list_id}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}	
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->