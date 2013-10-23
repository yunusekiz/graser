<br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:230px;">Ahşap Ev Tipi Projeler - Kayıt Güncelleme Formu</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/type_home/updateItemDetail" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{item_detail}
							<br/>          					
              					<p>
									<label> Kayıt --başlık--  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="reference_title" value="{type_home_title}" />
								</p><br/>
								<p>
									<input type="hidden" class="text-input large-input" name="id" value="{type_home_id}" /> 
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}

							</fieldset>  	

						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 