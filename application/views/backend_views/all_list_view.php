			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><font style="margin-left:270px;">Listeler (tüm kayıtlar) </font></h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					<form action="{base}backend/gallery/update" method="post">
						
						<table>
							
							<thead>
								<tr>
								{all_items_header_css}
									<th>Düzenle</th>
								    <th><font style="margin-left:-2px; margin-right:20px;">Sil</font></th>
								    <th><font style="margin-left:-8px; margin-right:10px;">Dosya Güncelle</font></th>
								    <th><font style="margin-left:0px; margin-right:0px;">Liste Dosyası</font></th>
								    <th>Başlık</th>
								    <th></th>
								{/all_items_header_css}
								</tr>	
							</thead>
						 
						 
							<tbody>
								 {all_items}
								<tr>
									<td>
										<a href="updateItemDetailForm/{list_id}" title="Düzenle"><img src="{base}assets/backend_assets/images/icons/pencil.png" alt="Düzenle" /></a>
									</td>
									
									<td>
										<a href="deleteItem/{list_id}" title="Sil"><img src="{base}assets/backend_assets/images/icons/cross.png" alt="Sil" /></a>
									</td>

									<td>
										<a href="changeItemPhotoForm/{list_id}/{list_file_id}" title="Dosya Güncelle"><img src="{base}assets/backend_assets/images/icons/up_2.png" alt="Dosya Güncelle" /></a>
									</td>

									<td>
										<a href="{base}{list_file_path}" title="{list_title}">
										 	<img src="{base}assets/backend_assets/images/icons/file-icon.png" width="45" height="45" style="margin-bottom:-8px; margin-right:-5px;" title="Liste Dosyası" />
										</a>
									</td>
									<td>{list_title}</td>
									<td></td>
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