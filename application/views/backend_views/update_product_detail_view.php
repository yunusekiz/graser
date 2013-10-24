			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ürünler (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/auto/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							
								<p>
									<label>Ürün Kategorisi Seçenekleri </label>              
									<select name="cat_id" class="small-input" style="color:#000;">
										<option value="0">Kategori Seçiniz</option>
										{pro_cat_iteration}
										<option value="{pro_cat_id}">{title_tr}</option>
										{/pro_cat_iteration}
									</select> 
								</p><br /><br />
								
							{item_detail}												
								<p>
									<label>Kayıtlı Olan Kategori </label>
								 	<input class="text-input large-input" type="text" name="pro_cat_id_" value="{title_tr}" style="color:#000;" readonly />             
								</p><br />												
								<p>
									<label>Ürün Adı </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="auto_title"  value="{title}"
									/>
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