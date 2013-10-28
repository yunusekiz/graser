<br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:230px;">Başvuru Formu Detaylı Bilgi</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/news/updateItemDetail" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{item_detail}
							<br/>          					
              					<p>
									<label> İsim, Soyisim  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="name_surname" value="{name_surname}" />
								</p><br/>
              					
              					<p>
									<label> Email </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="email" value="{email}" />
								</p><br/>

              					<p>
									<label> Telefon  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="phone" value="{phone}" />
								</p><br/>

              					<p>
									<label>Pozisyon   </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="position" value="{position}" />
								</p><br/>																              					

              					<p>
									<label> Mesaj </label>
									<textarea class="text-input textarea" id="textarea" name="message"
									cols="79" rows="5" style="color:#000;">{message}</textarea>	
								</p></br>

							{/item_detail}

							</fieldset>  	

						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 