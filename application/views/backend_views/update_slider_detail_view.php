<br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:230px;">Slider Açıklaması Güncelleme Formu</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/slider/updateItemDetail" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{slider_detail}
                                <p>
									<label> <h3> Açıklama :</h3></label>
								</p>             					
              					<p>
									<label> Slider Açıklama --başlık--  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="slider_title" value="{slider_text_title}" />
								</p><br/>
              					
              					
              					<p>
									<label> Slider Açıklama --detay-- </label>
									<textarea class="text-input textarea" id="textarea" name="slider_detail"
									cols="79" rows="5" style="color:#000;">{slider_text_detail}</textarea>	
								</p></br>							
								
								<p>
									<input type="hidden" class="text-input large-input" name="id" value="{slider_id}" /> 
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/slider_detail}

							</fieldset>  	

						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 