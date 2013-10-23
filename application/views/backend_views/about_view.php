<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">Hakkımızda Metnini Düzenleme Formu</h3>
					
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				  <form action="{base}backend/about/controlAboutUs" method="post">
						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<br />
								{hakkimizda_iteration}
								<p>
									<label>Hakkımızda (Türkçe)</label>
								
									<textarea class="text-input textarea wysiwyg" id="textarea" name="about_detail_tr" style="color:#000;" cols="79" rows="20">{about_detail_tr}</textarea>

								</p><br /><br />
								<p>
									<label>Hakkımızda (İngilizce)</label>
									
									<textarea class="text-input textarea wysiwyg" id="textarea" name="about_detail_eng" style="color:#000;" cols="79" rows="20">{about_detail_eng}</textarea>
								</p>
								{/hakkimizda_iteration}
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							</fieldset>

				  </form>        
					
				</div> <!-- End .content-box-content -->
				
			</div>