			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><font style="margin-left:270px;">Referanslar (kategorilere göre) </font></h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					<form action="{base}backend/gallery/update" method="post">
						
						<table>
							
							<thead>
								<tr>
								{all_items_header_css}
									<th></th>
								    <th><font style="margin-left:-2px; margin-right:20px;">Görüntüle</font></th>
								    <th><font style="margin-left:-8px; margin-right:10px;"></font></th>
								    <th><font style="margin-left:0px; margin-right:0px;"></font></th>
								    <th>Kategori Adı</th>
								    <th></th>
								{/all_items_header_css}
								</tr>	
							</thead>
						 
						 
							<tbody>
								 {all_items_by_cat}
								<tr>
									<td>
										<!-- <a href="updateItemDetailForm/{auto_id}" title="Düzenle"><img src="{base}assets/backend_assets/images/icons/pencil.png" alt="Düzenle" /></a> -->
									</td>
									
									<td>
										<!-- <a href="deleteItem/{auto_id}" title="Sil"><img src="{base}assets/backend_assets/images/icons/cross.png" alt="Sil" /></a> -->
										<a href="allItemById/{ref_cat_id}/{ref_cat_css}" title="Görüntüle"><img src="{base}assets/backend_assets/images/icons/icon_file_1.jpg" alt="Sil" /></a>
									</td>

									<td>
										<!-- <a href="changeItemPhotoForm/{auto_id}/{auto_photo_id}" title="Fotoğraf Yükle"><img src="{base}assets/backend_assets/images/icons/up_2.png" alt="Fotoğraf Yükle" /></a> -->
									</td>

<!-- 									<td class="cocukdiv_image">
										<a href="{base}{auto_big_photo}" title="{auto_title}">
										 	<img src="{base}{auto_thumb_photo}" width="45" height="45" style="margin-bottom:-8px; margin-right:-5px;" title="mevcut fotoğraf" />
										</a>
									</td> -->
									<td></td>
									<td>{title_tr}</td>
									<td></td>
								</tr>
								 {/all_items_by_cat}

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