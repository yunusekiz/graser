<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">Sanal Tur Düzenleme Formu</h3>
					
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				  <form action="{base}backend/tour/updateItemDetail" method="post">
						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<br />
								{tour_iteration}
								<p>
									<label>Sanal Tur Detay</label>
								
									<textarea class="text-input textarea wysiwyg" id="textarea" name="tour_detail" style="color:#000;" cols="79" rows="20">{tour_detail}</textarea>

								</p><br /><br />
								<p>
									<label>Sanal Tur Video</label>
									
									<textarea class="text-input textarea wysiwyg" id="textarea" name="tour_video" style="color:#000;" cols="79" rows="50">{tour_video}</textarea>
								</p>
								{/tour_iteration}
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							</fieldset>

				  </form>        
					
				</div> <!-- End .content-box-content -->
				
			</div>