

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Thapar Express | Home</title>
		<meta name="description" content="One stop for all of Thapar. THAPAR EXPRESS" />
		<meta name="keywords" content="thapar express,thapar university,thaparexpress,thapar,express,all,of,thapar,events,thapar,societies,timetable,food in patiala,restaurants in patiala " />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/timeline.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
	<?php	include('menu.php');?>

				<div class="content_main" >
                    <div class="row">
                         <div class="col-lg-12">
                             <h1 class="page-header">Home</h1>
							 
                        </div>
						
                </div>
				 <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">6</div>
                                    <div>New Notices!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Check 'em up!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Thaparlogs!</div>
                                </div>
                            </div>
                        </div>
                        <a href="articles">
                            <div class="panel-footer">
                                <span class="pull-left">Check 'em up!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">s2</div>
                                    <div>New Events!</div>
                                </div>
                            </div>
                        </div>
                        <a href="events_all">
                            <div class="panel-footer">
                                <span class="pull-left">Check 'em up!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-flag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Society Updates!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Check 'em up!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
			
		<div class="col-lg-4">
		<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right btn btn-primary">View all</a> <h4>Profiles</h4></div>
   			<div class="panel-body">
              
				<?php	include('timetable_include.php');?>
            </div>
         </div>

		<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right btn btn-primary">View all</a> <h4>Events</h4></div>
   			<div class="panel-body">
              
				<ul class="timeline">
												
												
													
														<div class="timeline-panel">
															<div class="timeline-heading">
																<h3 class="timeline-title"><?php echo $row['name']; ?></h3>
																</div>
															<div class="timeline-body">
																<p>
				                                             
																	<li><div class="timeline-badge danger"><i class=<"fa fa-graduation-cap"></i>
																</div>
														Algo-Rush</p><br>
											<ul> 
													<li><b>Venue </b> -  CSED Lab</li>
													<li><b>Time  </b> -  9:00- 11:00pm 12 Nov 2014</li>
													<li><b>Cost  </b> -  200/-</li>
												   
												</ul>
											
											<!-- <a class="btn btn-primary pull-right" href="event?id=12">View more></a> -->
															</div>
														</div>
													</li> 
													
													
												</ul>
            </div>
         </div>


</div>
		
				<div class="col-lg-8">
									
						<div class="panel panel-default">
           <div class="panel-heading"><a href="#" class="pull-right btn btn-primary">View all</a> <h4>Thaparlogs</h4></div>
   			<div class="panel-body">
						  <!--/stories-->
						  <div class="row">    
							<br>
							<div class="col-md-2 col-sm-3 text-center">
							  <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/men/58.jpg" style="width:100px;height:100px" class="img-circle"></a>
							</div>
							<div class="col-md-10 col-sm-9">
							  <h3>Google Developers' Fest </h3>
							  <div class="row">
								<div class="col-xs-9">
								  <h4><span class="label label-default">GDG Jalandhar</span></h4><h4>
								  <small style="font-family:courier,'new courier';" class="text-muted">Yesterday  • </small><br><br><a href="article?id=23" class="btn btn-primary">Read More</a>
								  </h4></div>
								<div class="col-xs-3"></div>
							  </div>
							  <br>
							</div>
						  </div>
						  <hr>
						  
						  <div class="row">    
							<br>
							<div class="col-md-2 col-sm-3 text-center">
							  <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/women/56.jpg" style="width:100px;height:100px" class="img-circle"></a>
							</div>
							<div class="col-md-10 col-sm-9">
							  <h3>14 Useful Sites for Designers</h3>
							  <div class="row">
								<div class="col-xs-9">
								  <h4><span class="label label-default">Computer Science Department</span></h4><h4>
								  <small style="font-family:courier,'new courier';" class="text-muted">Yesterday • </small><br><br><a href="#" class="btn btn-primary">Read More</a>
								  </h4></div>
								<div class="col-xs-3"></div>
							  </div>
							  <br>
							</div>
						  </div>
						  <hr>
						  <!--/stories-->
						  
						  
						<!--  <a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a> -->
						
										</div>
										<!-- /.panel-body -->
									</div>
									<!-- /.panel -->
								</div>
								<!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->

		
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
