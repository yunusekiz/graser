			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3><font style="margin-left:270px;">Galeri Kategorisi (tüm kayıtlar)</font></h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the hgal of this div's tab -->
					
					<form action="{base}backend/ourTeam/operation" method="post">
						
						<table>
							
							<thead>
								<tr>
								{all_items_header_css}
									<th></th>
								    <th>Düzenle<font style="margin-left:-2px; margin-right:20px;"></font></th>
								    <th></th>
								    <th></th>
								    <th></th>
								    <th>Kategori (Türkçe)</th>
								    <th>Kategori (İngilizce)</th>
								{/all_items_header_css}
								</tr>	
							</thead>
						 
						 
							<tbody>
								 {all_items}
								<tr>
									<td></td>
									
									<td>
										<a href="{backend_base}gal_category/updateItemDetailForm/{gal_cat_id}" title="Düzenle"><img src="{base}assets/backend_assets/images/icons/pencil.png" alt="Düzenle" /></a>
									</td>

									<td></td>

									<td class="cocukdiv_image"></td>
									<td></td>
									<td>{title_tr}</td>
									<td>{title_eng}</td>
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
										<!-- <a class="button" hgal="#">Seçili Eylemi Uygula</a> -->
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