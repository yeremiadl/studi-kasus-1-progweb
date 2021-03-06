<?php
// Create database connection using config file
include_once("databaseconnect.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM browser ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
			integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="stylesheet" href="style.css" />
		<title>Document</title>
	</head>
	<body>
		<ul class="nav justify-content-between py-4" style="padding: 0 8vw">
			<li class="nav-item">
				<a href="/index.html"
					><img src="/studi-kasus-1-Jagadwp/src/img/1_Primary_logo_on_transparent_234x66.png" alt="logo" class="logo-img"
				/></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-danger btn-block ml-auto" aria-current="page" href="/index.html">Sign Out</a>
			</li>
		</ul>

		<section id="dashboard-table" style="padding: 0 7vw;">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dt-buttons btn-group flex-wrap">
								<button
									class="btn btn-secondary buttons-copy buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Copy</span>
								</button>
								<button
									class="btn btn-secondary buttons-csv buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>CSV</span>
								</button>
								<button
									class="btn btn-secondary buttons-excel buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Excel</span>
								</button>
								<button
									class="btn btn-secondary buttons-pdf buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>PDF</span>
								</button>
								<button
									class="btn btn-secondary buttons-print"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Print</span>
								</button>
								<div class="btn-group">
									<button
										class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
										tabindex="0"
										aria-controls="example1"
										type="button"
										aria-haspopup="true"
										aria-expanded="false"
									>
										<span>Column visibility</span>
									</button>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pb-4" align="right">
							<div id="example1_filter" class="dataTables_filter">
								<label
									>Search:<input
										type="search"
										class="form-control form-control-sm"
										placeholder=""
										aria-controls="example1"
								/></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table
								id="example1"
								class="table table-bordered table-striped dataTable dtr-inline"
								role="grid"
								aria-describedby="example1_info"
							>
								<thead>
									<tr role="row" class="">
										<th
											class="sorting sorting_asc"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-sort="ascending"
											aria-label="Rendering engine: activate to sort column descending"
										>
											Rendering engine
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-label="Browser: activate to sort column ascending"
										>
											Browser
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-label="Platform(s): activate to sort column ascending"
										>
											Platform(s)
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-label="Engine version: activate to sort column ascending"
										>
											Engine version
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-label="CSS grade: activate to sort column ascending"
											style="color: inherit"
										>
											CSS grade
										</th>
									</tr>
								</thead>
								<tbody>
								<?php while( $data = mysqli_fetch_assoc($result) ) : ?>       
									<tr class="odd">
										<td class="dtr-control sorting_1" tabindex="0"><?= $data["name"] ?></td>
										<td><?= $data["name"] ?></td>
										<td><?= $data["platform"] ?></td>
										<td><?= $data["engine_version"] ?></td>
										<td style="color: inherit"><?= $data["css_grade"] ?></td>
									</tr>
								<?php endwhile; ?>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">Rendering engine</th>
										<th rowspan="1" colspan="1">Browser</th>
										<th rowspan="1" colspan="1">Platform(s)</th>
										<th rowspan="1" colspan="1">Engine version</th>
										<th rowspan="1" colspan="1" style="color: inherit">CSS grade</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
								Showing 1 to 10 of 57 entries
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="example1_previous">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="0"
											tabindex="0"
											class="page-link"
											>Previous</a
										>
									</li>
									<li class="paginate_button page-item active">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="1"
											tabindex="0"
											class="page-link"
											>1</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="2"
											tabindex="0"
											class="page-link"
											>2</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="3"
											tabindex="0"
											class="page-link"
											>3</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="4"
											tabindex="0"
											class="page-link"
											>4</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="5"
											tabindex="0"
											class="page-link"
											>5</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="6"
											tabindex="0"
											class="page-link"
											>6</a
										>
									</li>
									<li class="paginate_button page-item next" id="example1_next">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="7"
											tabindex="0"
											class="page-link"
											>Next</a
										>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>

