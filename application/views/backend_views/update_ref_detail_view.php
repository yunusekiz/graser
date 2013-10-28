			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ürünler (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/ref/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							
								<p>
									<label>Referans Kategorisi Seçenekleri </label>              
									<select name="cat_id" class="small-input" style="color:#000;">
										<option value="0">Kategori Seçiniz</option>
										{ref_cat_iteration}
										<option value="{ref_cat_id}">{title_tr}</option>
										{/ref_cat_iteration}
									</select> 
								</p><br />
								
							{item_detail}												
								<p>
									<label>Kayıtlı Olan Kategori </label>
									<input type="hidden" name="hidden_cat_id" value="{ref_cat_id}">
								 	<input class="text-input large-input" type="text" name="ref_cat_id" value="{title_tr}" style="color:#000;" readonly />             
								</p><br />												
								<p>
									<label>Referans Başlık </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="ref_title"  value="{title}"
									/>
								</p><br />

								<p>
									<label>Referans Detay</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="ref_detail"
									 style="color:#000;" cols="79" rows="5">{detail}</textarea>
								</p><br/>								
								
								<p>
									<input type="hidden" name="id" value="{ref_id}"/>
									<input type="hidden" name='hidden_cat_name' value="{title_tr}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}	
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->