			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><font style="margin-left:270px;">Kayıtlı Tüm İş Başvuruları </font></h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					<form action="{base}backend/catalog/update" method="post">
						
						<table>
							
							<thead>
								<tr>
								{all_items_header_css}
									<th>Detay</th>
								    <th><font style="margin-left:-2px; margin-right:20px;">Sil</font></th>
								    <th></th>
								    <th><font style="margin-left:0px; margin-right:0px;">Cv Dosyası</font></th>
								    <th>İsim</th>
								    <th>Pozisyon</th>
								{/all_items_header_css}
								</tr>	
							</thead>
						 
						 
							<tbody>
								 {all_items}
								<tr>
									<td>
										<a href="itemDetail/{record_id}" title="Detay"><img src="{base}assets/backend_assets/images/icons/pencil.png" alt="Düzenle" /></a>
									</td>
									
									<td>
										<a href="deleteItem/{record_id}" title="Sil"><img src="{base}assets/backend_assets/images/icons/cross.png" alt="Sil" /></a>
									</td>

									<td>
									</td>

									<td>
										<a href="{base}{cv_file_path}" title="{catalog_title}">
										 	<img src="{base}assets/backend_assets/images/icons/pdf-icon.png" width="45" height="45" style="margin-bottom:-8px; margin-right:-5px;" title="cv dosyası" />
										</a>
									</td>
									<td>{name_surname}</td>
									<td>{position}</td>
								</tr>
								 {/all_items}

							</tbody>
							
							<tfoot>
								<tr>
									<td colspan="6">
<!-- 										<div class="bulk-actions align-left">
											{submit_button_css}
											<input type="submit" class="button" value="Seçili Eylemi Uygula" />
											{/submit_button_css}
										</div> -->
										<!-- <a class="button" href="#">Seçili Eylemi Uygula</a> -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
									</td>
								</tr>
							</tfoot>							


						</table>

					  </form>	
						
					</div> <!-- End #tab1 -->
					     
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->