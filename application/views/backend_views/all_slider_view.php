			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><font style="margin-left:270px;">Kayıtlı Tüm Slider Resimleri</font></h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					<form action="{base}backend/slider/" method="post">
						
						<table>
							
							<thead>
								<tr>
								{all_sliders_header_css}
									<th></th>
									<!-- <th>Düzenle</th> -->
								    <th><font style="margin-left:-2px; margin-right:20px;">Sil</font></th>
								    <th></th>
								    <th><font style="margin-left:-8px; margin-right:10px;">Foto. Güncelle</font></th>
								    <th><font style="margin-left:0px; margin-right:0px;">Mevcut Foto.</font></th>
								    <th>Slider Başlık</th>
								    <!-- <th>Slider Açıklama</th> -->
								{/all_sliders_header_css}
								</tr>	
							</thead>
						 
						 
							<tbody>
								 {all_sliders}
								<tr>
<!-- 									<td>
										<a href="{backend_base}slider/updateItemDetailForm/{slider_id}" title="Düzenle"><img src="{base}assets/backend_assets/images/icons/pencil.png" alt="Düzenle" /></a>
									</td> -->
									<td></td>
									<td>
										<a href="{backend_base}slider/deleteItem/{slider_id}" title="Sil"><img src="{base}assets/backend_assets/images/icons/cross.png" alt="Sil" /></a>
									</td>
									<td></td>
									<td>
										<a href="{backend_base}slider/changeItemPhotoForm/{slider_id}/{photo_id}" title="Bu fotoğrafı güncellemek için tıklayın"><img src="{base}assets/backend_assets/images/icons/up_2.png" alt="Fotoğraf Yükle" /></a>
									</td>

									<td class="cocukdiv_image">
										<a href="{base}{slider_big_photo}" title="{slider_text_title}">
										 	<img src="{base}{slider_thumb_photo}" width="45" height="45" style="margin-bottom:-8px; margin-right:-5px;" title="mevcut fotoğraf" />
										</a>
									</td>
									<td>{slider_text_title}</td>
									<!-- <td>{slider_text_detail}</td> -->
								</tr>
								 {/all_sliders}

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