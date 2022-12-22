<!-- Static Table Start -->

<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">

					<!-- Static Table Start -->
					<div class="data-table-area mg-b-15">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="sparkline13-list">
										<div class="sparkline13-hd">
											<div class="main-sparkline13-hd">
												<h1>Laporan</h1>
											</div>
										</div>
										<div class="sparkline13-graph">
											<div class="datatable-dashv1-list custom-datatable-overright">
												<div id="toolbar">
												</div>
												<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
													<thead>
														<tr>
															<th data-field="a">Kabupaten</th>
															<th data-field="b">Kecamatan</th>
															<th data-field="c">Desa</th>
															<th data-field="d">Rukun Warga</th>
															<th data-field="e">Penduduk</th>
														</tr>
													</thead>
													<tbody>
														<?php
															foreach ($tb_desa as $ts){
														?>
														<tr>
															<td><?= $ts->kabupaten_desa; ?></td>
															<td><?= $ts->kecamatan_desa; ?></td>
															<td><?= $ts->nama_desa; ?></td>
															<td>32</td>
															<td>2</td>
														</tr>
														<?php } ?>
														<tr>
															<td class="text-center bg-light" >Total</td>
															<td>12</td>
															<td>22</td>
															<td>32</td>
															<td>2</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Static Table End -->

				</div>

			</div>
		</div>
		<!-- Static Table End -->
