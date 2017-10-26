<?php 
require_once('layout/head.php'); 
require_once('layout/navbarmenu.php');
require_once('layout/sidebar.php');
?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li href="#">Papan Pengumuman</li>
						<li class="active">Biaya Pendaftaran</li>
					</ul>
				</div>
			</div>
			<!-- /page header -->

			<!-- Content area -->
			<div class="content">
				
				<div class="row">

					<div class="col-lg-12">
					
					<!-- Summernote click to edit -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Biaya Pendaftaran</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="form-group">
								<button type="button" id="edit" class="btn btn-primary"><i class="icon-pencil3 position-left"></i> Edit</button>
								<button type="button" id="save" class="btn btn-success"><i class="icon-checkmark3 position-left"></i> Save</button>
							</div>

							<div class="click2edit">
								<h2>Apollo 11</h2>
								<div class="pull-right" style="margin-left: 20px;"><img alt="Saturn V carrying Apollo 11" class="right" src="http://c.cksource.com/a/1/img/sample.jpg"></div>

								<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

								<p class="mb-15">Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

								<h5 class="text-semibold">Technical details</h5>
								<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
								<ol>
									<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
									<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
									<li><strong>Lunar Module</strong> for landing on the Moon.</li>
								</ol>
								<p class="mb-15">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

								<h5 class="text-semibold">Misson crew</h5>
								<div class="table-responsive mb-15">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Position</th>
												<th>Astronaut</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Commander</td>
												<td>Neil A. Armstrong</td>
											</tr>
											<tr>
												<td>Command Module Pilot</td>
												<td>Michael Collins</td>
											</tr>
											<tr>
												<td>Lunar Module Pilot</td>
												<td>Edwin "Buzz" E. Aldrin, Jr.</td>
											</tr>
										</tbody>
									</table>
								</div>

								Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
							</div>
						</div>
					</div>
					<!-- /summernote click to edit -->

						</div>
					</div>
				</div>

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->