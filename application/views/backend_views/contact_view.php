 <br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:290px;">İletişim Bilgilerini Düzenleme Formu</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/contact/updateContact" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->											

								<p>
									<label> Adres  </label>
									<!-- <input class="text-input large-input" type="text" style="color:black" id="large-input" name="address_field" value="{address}" /> -->
									<textarea class="text-input textarea wysiwyg" id="textarea" name="address_field" style="color:#000;" cols="79" rows="5">{address}</textarea>
								</p>
								
								</br>
								
								<p>
									<label> Telefon  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="phone_field" value="{phone}" />
								</p>
								
								</br>

								<p>
									<label> Faks  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="fax_field" value="{fax}" />
								</p>		
							
								</br>
								<p>
									<label> E-Posta   </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="email_field" value="{email}" />
								</p>
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
                            <div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 