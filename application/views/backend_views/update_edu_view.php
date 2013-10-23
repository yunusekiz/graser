<br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:230px;">Eğitim Sistemimiz (kayıt güncelleme formu)</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/edu/updateItemDetail" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{item_detail}     					
								<p>
									<label>Eğitim Sistemimiz Başlık ( Türkçe )</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="edu_sys_title" value="{edu_sys_title}"
									/>
								</p><br/>
								<p>
									<label> Eğitim Sistemimiz Detay ( Türkçe  )</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="edu_sys_detail" style="color:#000;" cols="79" rows="18">{edu_sys_detail}</textarea>
								</p><br /><hr><br />

								<p>
									<label>Eğitim Sistemimiz Başlık ( in English  )</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="edu_sys_title_eng" value="{edu_sys_title_eng}"
									/>
								</p><br/>							
								<p>
									<label> Eğitim Sistemimiz Detay ( in English )</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="edu_sys_detail_eng" style="color:#000;" cols="79" rows="18">{edu_sys_detail_eng}</textarea>
								</p>					
								
								<p>
									<input type="hidden" class="text-input large-input" name="id" value="{edu_id}" /> 
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}

							</fieldset>  	

						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 