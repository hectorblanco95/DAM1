<?php
session_start();
if (isset($_SESSION["username"])) {
    // Nos aseguramos que el usuario sea administrador
    // Cogemos el tipo de la variable de sesión
    $tipo = $_SESSION["tipo"];
    if ($tipo == 0) {
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Home Page Usuario</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <link href="https://select2.github.io/dist/css/select2.min.css" rel="stylesheet">
                <link href="cssMail.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
            <div class="container">
                <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg">
                          </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $_SESSION["name"];?></a></h5>
                              <span><a href="#">Info.Ali.Pci@Gmail.com</a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="#" data-toggle="collapse" data-target="#toggleDemo0">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                          <div class="collapse" id="toggleDemo0" style="height: 0px;"><br><br>
                            <ul class="inbox-nav inbox-divider">
                              <li><a href="#" data-toggle="modal" data-target="#changePassword"><i class="fa fa-key"></i> Change Password</a></li>
                              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                          </div>
                      </div>
                      <div class="inbox-body">
                          <a href="#" data-toggle="modal" data-target="#myModal" title="New Email" class="btn btn-danger btn-block">New Email</a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" class="fade modal" id="myModal" style="display: none;">
		                    <div class="modal-dialog" style="width: 64%;">
		                    <div class="panel panel-default">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-fw s fa-remove"></i></button>
                                    <p class="text-center">New Message</p>
                                </div>
		                    	<div class="panel-body message">
		                    		<form class="form-horizontal" role="form">
		                    			<div class="form-group">
		                    		    	<label for="to" class="col-sm-1 control-label">To:</label>
		                    		    	<div class="col-sm-11">
                                                  <input type="email" class="form-control select2-offscreen" id="to" placeholder="Type email" tabindex="-1">
		                    		    	</div>
		                    		  	</div>
		                    			<div class="form-group">
		                    		    	<label for="cc" class="col-sm-1 control-label">CC:</label>
		                    		    	<div class="col-sm-11">
                                                  <input type="email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
		                    		    	</div>
		                    		  	</div>
		                    			<div class="form-group">
		                    		    	<label for="bcc" class="col-sm-1 control-label">BCC:</label>
		                    		    	<div class="col-sm-11">
                                                  <input type="email" class="form-control select2-offscreen" id="bcc" placeholder="Type email" tabindex="-1">
		                    		    	</div>
		                    		  	</div>
		                    		  
		                    		</form>
		                    		
		                    		<div class="col-sm-11 col-sm-offset-1">
		                    			
		                    			<div class="btn-toolbar" role="toolbar">
		                    				
		                    				<div class="btn-group">
		                    				  	<button class="btn btn-default"><span class="fa fa-bold"></span></button>
		                    				  	<button class="btn btn-default"><span class="fa fa-italic"></span></button>
		                    					<button class="btn btn-default"><span class="fa fa-underline"></span></button>
		                    				</div>

		                    				<div class="btn-group">
		                    				  	<button class="btn btn-default"><span class="fa fa-align-left"></span></button>
		                    				  	<button class="btn btn-default"><span class="fa fa-align-right"></span></button>
		                    				  	<button class="btn btn-default"><span class="fa fa-align-center"></span></button>
		                    					<button class="btn btn-default"><span class="fa fa-align-justify"></span></button>
		                    				</div>
		                    				
		                    				<div class="btn-group">
		                    				  	<button class="btn btn-default"><span class="fa fa-indent"></span></button>
		                    				  	<button class="btn btn-default"><span class="fa fa-outdent"></span></button>
		                    				</div>
		                    				
		                    				<div class="btn-group">
		                    				  	<button class="btn btn-default"><span class="fa fa-list-ul"></span></button>
		                    				  	<button class="btn btn-default"><span class="fa fa-list-ol"></span></button>
		                    				</div>
		                    				<button class="btn btn-default"><span class="fa fa-trash-o"></span></button>
		                    				<button class="btn btn-default"><span class="fa fa-paperclip"></span></button>
		                    				<div class="btn-group">
		                    					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tags"></span> <span class="caret"></span></button>
		                    					<ul class="dropdown-menu">
		                    						<li><a href="#">add label <span class="label label-danger"> Home</span></a></li>
		                    						<li><a href="#">add label <span class="label label-info">Job</span></a></li>
		                    						<li><a href="#">add label <span class="label label-success">Clients</span></a></li>
		                    						<li><a href="#">add label <span class="label label-warning">News</span></a></li>
		                    					</ul>
		                    				</div>
		                    			</div>
		                    			<br>	
		                    			
		                    			<div class="form-group">
		                    				<textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
		                    			</div>
		                    			
		                    			<div class="form-group">	
		                    				<button type="submit" class="btn btn-success">Send</button>
		                    				<button type="submit" class="btn btn-default">Draft</button>
		                    				<button type="submit" class="btn btn-danger">Discard</button>
		                    			</div>
		                    		</div>	
		                    	</div>	
		                    </div>	
	                        </div>
	                    </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

                          </li>
                          <li>
                              <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Labels</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info ">
                          <li> <h4>Buddy online</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-success"></i>Alireza Zare <p>I do not think</p></a>  </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-danger"></i>Dark Coders<p>Busy with coding</p></a> </li>
                          <li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Mentaalist <p>I out of control</p></a>
                          </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>H3s4m<p>I am not here</p></a>
                          </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i>Dead man<p>I do not think</p></a>
                          </li>
                      </ul>

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Inbox</h3>
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Search Mail">
                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                             <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group">
                                     <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                         All
                                         <i class="fa fa-angle-down "></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"> None</a></li>
                                         <li><a href="#"> Read</a></li>
                                         <li><a href="#"> Unread</a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>
                             <div class="btn-group hidden-phone">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue">
                                     Move to
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>

                             <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message  dont-show">PHPClass</td>
                                  <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                  <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message  text-right">9:27 AM</td>
                              </tr>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Google Webmaster </td>
                                  <td class="view-message">Improve the search presence of WebSite</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 15</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">JW Player</td>
                                  <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 15</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Tim Reid, S P N</td>
                                  <td class="view-message">Boost Your Website Traffic</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">April 01</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                  <td class="view-message">Stop wasting your visitors </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">May 23</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">WOW Slider </td>
                                  <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">March 14</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">LinkedIn Pulse</td>
                                  <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">Feb 19</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                  <td class="view-message view-message">Welcome to the Drupal Community</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 04</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Facebook</td>
                                  <td class="view-message view-message">Somebody requested a new password </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">June 13</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                  <td class="view-message view-message">Password successfully changed</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 24</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">Google+</td>
                                  <td class="view-message">alireza, do you know</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 09</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="dont-show">Zoosk </td>
                                  <td class="view-message">7 new singles we think you'll like</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">May 14</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">LinkedIn </td>
                                  <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">February 25</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="dont-show">Facebook</td>
                                  <td class="view-message view-message">Your account was recently logged into</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 14</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Twitter</td>
                                  <td class="view-message">Your Twitter password has been changed</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">April 07</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                  <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">July 14</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">AddMe.com</td>
                                  <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">August 10</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Terri Rexer, S P N</td>
                                  <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">April 14</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Bertina </td>
                                  <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">June 16</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                  <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                  <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">August 10</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Facebook</td>
                                  <td class="view-message view-message">Alireza Zare Login faild</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right">feb 14</td>
                              </tr>
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>
            </div>
            <div class="fade modal" id="changePassword">
                <div class="modal-dialog">
                    <div class="modal-content" style="top: 68px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                            <h2 class="modal-title" id="myModalLabel">New Password</h2>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php" method="POST">
                                <fieldset>
                                    <!-- Form Name -->
                                    <!-- Prepended text-->
                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Password</label>
                                        <div class="col-md-5">
                                            <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" maxlength="200" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">New Password</label>
                                        <div class="col-md-5">
                                            <input id="newPassword" name="newPassword" type="password" placeholder="New Password" class="form-control input-md" maxlength="200" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Confirm New Password</label>
                                        <div class="col-md-5">
                                            <input id="newPassword2" name="newPassword2" type="password" placeholder="Confirm New Password" class="form-control input-md" maxlength="200" required="">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="change-pass">
                                                <i class="fa fa-fw fa-save"></i>Save</button>
                                    </div>
                                    <!-- File Button -->
                                    <!-- Button -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript " src="jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	        <script src="https://select2.github.io/dist/js/select2.full.js"></script>
	        <script type="text/javascript " src="jsMail.js"></script>
            </body>
        </html>
        <?php
    } else {
        echo "<p>No tienes permisos para ver esta página.</p>";
    }
} else {
    echo "<p>No hay usuario validado</p>";
}
?>