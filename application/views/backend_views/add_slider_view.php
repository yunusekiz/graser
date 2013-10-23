<br /><br /><br />
<div class="content-box"><!-- Start Content Box -->
				          
             <div class="content-box-header">
				<h3> <font style="margin-left:230px;">Slider İçin Fotoğraf Ekleme Formu</font></h3>
							 
			</div> <!-- End .content-box-header -->     
			
           		<div class="content-box-content">
            					
					<div class="tab-content default-tab" id="1">                 
					
						<form action="{base}backend/slider/controlSlider" method="post" enctype="multipart/form-data" >
						
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->											

							</fieldset>    
                                
<!--                                 <p>
									<label> <h3> Fotoğraf : </h3></label>
								</p>
                   -->
              					<p>
                  					<label> Slider' a yeni fotoğraf yüklemek için dosya seçin :  </label>
                   					<input type="file" name="photo_field" accept="image/*" />
                   					           					
              					</p> <br/> <hr> <br/>
              					
<!--                                 <p>
									<label> <h3> Açıklama :</h3></label>
								</p>             					
              					<p>
									<label> Slider Açıklama (başlık)  </label>
									<input class="text-input large-input" type="text" style="color:black" id="large-input" name="slider_title" />
								</p><br/>
              					
              					
              					<p>
									<label> Slider Açıklama (detay) </label>
									<textarea class="text-input textarea" id="textarea" name="slider_detail"
									cols="79" rows="5" style="color:#000;"></textarea>	
								</p></br>	 -->						
								
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>

						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                      
                
			</div> <!-- End .content-box --> 