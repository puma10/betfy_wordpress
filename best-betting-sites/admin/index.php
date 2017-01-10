<?php include 'header.php';
echo '<script LANGUAGE="JavaScript">
												function confirmSubmit()
												{
												var agree=confirm("Are you sure you wish to continue?");
												if (agree)
													return true ;
												else
													return false ;
												}
												</script>';

if(!empty($_POST['delete_data'])){
	DB::delete('tracking_table', "rec_use_topnumber=%i", $_POST['top_number']);
}
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome to your Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php
								$row = DB::queryFirstRow("SELECT COUNT(*) as count FROM top_listing WHERE active=1");
								$active_review=$row['count'];
								?>
                                    <div class="huge"><?php echo $active_review; ?></div>
                                    <div>Active top review</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
								$row = DB::queryFirstRow("SELECT count(*) as count FROM `tracking_table` ,top_listing WHERE top_listing.id=tracking_table.rec_use_topnumber AND active=1");
								$total_clic=$row['count'];
								?>
                                    <div class="huge"><?php echo $total_clic; ?></div>
                                    <div>Total clics!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php
								$row = DB::queryFirstRow("SELECT count(*) as count FROM `tracking_table` ,top_listing WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= rec_use_date	 AND top_listing.id=tracking_table.rec_use_topnumber AND active=1");
								$active_review=$row['count'];
								?>
                                    <div class="huge"><?php echo $active_review; ?></div>
                                    <div>Total clics last 30 days</div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

			<div class="row">
				<div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Clics last 30 days
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
									<thead>
                                        <tr>
                                            <th>Top #</th>
                                            <th>Name</th>
                                            <th>Click number last 30 days</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$results = DB::query("								
											SELECT name,rec_use_topnumber,rank,COUNT(*) as count
											FROM tracking_table 
											LEFT JOIN top_listing ON top_listing.id=tracking_table.rec_use_topnumber
											WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= rec_use_date																						
											AND active=1
											GROUP BY rec_use_topnumber ORDER BY count DESC;");
											
											foreach ($results as $row) {
												echo '<tr>
													<td>Top '. $row['rank'] .'</td>
													<td>'. $row['name'] .'</td>
													<td><b>'. $row['count'] .'</b> click(s) last 30 days</td>
												</tr>';
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
						</div>
                    </div>
                </div>
				<div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Total clics
                        </div>
                        <div class="panel-body">
							<div class="table-responsive">
                                <table class="table table-striped table-bordered">
									<thead>
                                        <tr>
                                            <th>Top #</th>
                                            <th>Name</th>
                                            <th>Total Click number</th>
											<th>Delete clic number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$results = DB::query("								
											SELECT name,rec_use_topnumber,rank,COUNT(*) as count
											FROM tracking_table 
											LEFT JOIN top_listing ON top_listing.id=tracking_table.rec_use_topnumber
											WHERE active=1
											GROUP BY rec_use_topnumber ORDER BY count DESC;");													
											
											foreach ($results as $row) {
												echo '<tr>
													<td>Top '. $row['rank'] .'</td>
													<td>'. $row['name'] .'</td>
													<td><b>'. $row['count'] .'</b> click(s)</td>
													<td>
														<form method="post">
															<input type="hidden" name="top_number" value="'.$row['rec_use_topnumber'].'">
															<input type="submit" name="delete_data" class="btn btn-default btn-primary btn-sm" value="Erase all data"
															onClick="return confirmSubmit()"
															/>
														</form>
													</td>
												</tr>';
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
						</div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

		
<?php include 'footer.php'; ?>