<?php
session_start();
if (isset($_SESSION["username"])) {
    // Nos aseguramos que el usuario sea administrador
    // Cogemos el tipo de la variable de sesión
    $tipo = $_SESSION["tipo"];
    if ($tipo == 1) {
        // incluimos el fichero de la bbdd
        require_once 'bbdd_user.php';
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Home Page Administrator</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
                <link href="cssMail.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
            <div class="container" style="width: 100%; padding-left: 0; padding-right: 0;">
                <div class="mail-box">
                    <aside class="sm-side">
                                  <div class="user-head" style="height: 15%;">
                                      <a class="inbox-avatar" href="javascript:;">
                                          <img  width="64" hieght="60" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg">
                                      </a>
                                      <div class="user-name">
                                          <h5><a href="#"><?php echo $_SESSION["name"];?> </a><span class="label label-info"> Admin</span></h5>
                                          <span><a href="#"><?php echo $_SESSION["username"];?>@stucom.com</a></span>
                                      </div><br><br>
                                      <ul class="inbox-nav">
                                          <li>
                                              <a href data-toggle="modal" data-target="#changePassword"><i class="fa fa-fw fa-key"></i> Change Password</a>
                                          </li>
                                          <li>
                                              <a href="logout.php"><i class=" fa fa-fw fa-sign-out"></i> Logout</a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="inbox-body">
                                      <a href="#myModal" data-toggle="modal"  title="New Email"    class="btn btn-danger btn-block">
                                          New Email
                                      </a>
                                      <!-- Modal -->
                                      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                          <div class="modal-dialog" style="width: 50%;">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button" tabindex="-1"><i class="fa fa-fw s fa-remove"></i></button>
                                                      <h4 class="modal-title">New Email</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="sendEmail.php" method="POST" role="form" class="form-horizontal">
                                                          <div class="form-group">
                                                              <label class="col-lg-2 control-label">To</label>
                                                              <div class="col-lg-10">
                                                                  <?php
                                                                  echo "<select name='usuario[]' class='js-example-placeholder-multiple form-control' multiple='multiple' tabindex='0' required>";
                                                                  // Llamamos al método que devuelve todos los datos de los usuarios
                                                                  $usuarios = selectUsernameUsers();
                                                                  // Mientras haya datos, leemos la fila y la mostramos
                                                                  while ($fila = mysqli_fetch_array($usuarios)) {
                                                                      extract($fila);
                                                                      // SIEMPRE después de un extract, las variables
                                                                      // tienen el nombre de los campos de la bbdd
                                                                      if ($type==1) $type="Admin";
                                                                      else $type="User";
                                                                      echo "<option value='$username'>$type: $username";
                                                                      echo "</option>";
                                                                  }
                                                                  echo "</select>";
                                                                  ?>
                                                              </div>
                                                          </div>
                                                          <div class="form-group">
                                                              <label class="col-lg-2 control-label">Subject</label>
                                                              <div class="col-lg-10">
                                                                  <input type="text" placeholder="Asunto" id="subject" name="subject" maxlenght="50" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="form-group">
                                                              <label class="col-lg-2 control-label">Message</label>
                                                              <div class="col-lg-10">
                                                                  <textarea rows="10" cols="30" class="form-control" id="message" name="message" required></textarea>
                                                              </div>
                                                          </div>
            
                                                          <div class="form-group">
                                                              <div class="col-lg-offset-2 col-lg-10">
                                                                  <button class="btn btn-send" type="submit" name="sendEmail">Send</button>
                                                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Discard</button>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                      </div><!-- /.modal -->
                                  </div>
                                  <ul class="inbox-nav inbox-divider">
                                      <li class="active">
                                          <a href="home_admin.php"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>
            
                                      </li>
                                      <li>
                                          <a href="sentEmail_admin.php"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                                      </li>
                                      <li>
                                          <a href="users.php"><i class="fa fa-users"></i> Users</a>
                                      </li>
                                      <li>
                                          <a href data-toggle="modal" data-target="#usuario"><i class="fa -square -circle fa-plus-square"></i> New User</a>
                                      </li>
                                      <li>
                                          <a href data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i> Delete User</a>
                                      </li>
                                      <li>
                                          <a href="usersInbox.php"><i class=" fa fa-external-link"></i> Users Inbox <span class="label label-info pull-right">30</span></a>
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
                                    <div class="message-wrap col-lg-8">
                                        <div class="msg-wrap">
                                            <div class="media msg ">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                                    <h5 class="media-heading">Naimish Sakhpara</h5>
                                                    <small class="col-lg-10">Location H-2, Ayojan Nagar, Near Gate-3, Near
                                                            Shreyas Crossing Dharnidhar Derasar,
                                                            Paldi, Ahmedabad 380007, Ahmedabad,
                                                            India
                                                            Phone 091 37 669307
                                                            Email aapamdavad.district@gmail.com</small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media msg">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                
                                                    <h5 class="media-heading">Naimish Sakhpara</h5>
                                                    <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                                </div>
                                            </div>
                                            <div class="media msg">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                
                                                    <h5 class="media-heading">Naimish Sakhpara</h5>
                                                    <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                                </div>
                                            </div>
                                
                                            <div class="media msg">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                                                </a>
                                                <div class="media-body">
                                                    <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                                                    <h5 class="media-heading">Naimish Sakhpara</h5>
                                
                                                    <small class="col-lg-10">Arnab Goswami: "Some people close to Congress Party and close to the government had a #secret #meeting in a farmhouse in Maharashtra in which Anna Hazare send some representatives and they had a meeting in the discussed how to go about this all fast and how eventually this will end."</small>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="send-wrap ">
                                            <textarea class="form-control send-message" rows="3" placeholder="Write a reply..."></textarea>
                                        </div>
                                        <div class="btn-panel">
                                            <a href="" class=" col-lg-3 btn   send-message-btn " role="button"><i class="fa fa-cloud-upload"></i> Add Files</a>
                                            <a href="" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Send Message</a>
                                        </div>
                                    </div>
                                    </aside>
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
                                            <input id="newPassword" name="newPassword" type="password" placeholder="New Password" class="form-control input-md" maxlenght="200" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Confirm New Password</label>
                                        <div class="col-md-5">
                                            <input id="newPassword2" name="newPassword2" type="password" placeholder="Confirm New Password" class="form-control input-md" maxlenght="200" required="">
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
            <div class="fade modal" id="usuario">
                <div class="modal-dialog">
                    <div class="modal-content" style="top: 68px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                            <h2 class="modal-title" id="myModalLabel">New User</h2>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php" method="post" role="form">
                                <fieldset>
                                    <!-- Form Name -->
                                    <!-- Prepended text-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="prependedtext">Username</label>
                                        <div class="col-md-5">
                                            <input id="username" name="username" class="form-control" placeholder="Username" type="text" maxlenght="10" required="">
                                        </div>
                                    </div>
                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Password</label>
                                        <div class="col-md-5">
                                            <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" maxlenght="200" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Confirm Password</label>
                                        <div class="col-md-5">
                                            <input id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password" class="form-control input-md" maxlenght="200" required="">
                                        </div>
                                    </div>
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Name</label>
                                        <div class="col-md-5">
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" maxlenght="20" required="">
                                        </div>
                                    </div>
                                    <!-- Surname input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="surname">Surname</label>
                                        <div class="col-md-5">
                                            <input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md" maxlenght="50" required="">
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="departamento">Type</label>
                                        <div class="col-md-5">
                                            <select id="tipo" name="tipo" class="form-control">
                                                    <option value="0">Usuario</option>
                                                    <option value="1">Admin</option>
                                                </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="saveUser">
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
            <div class="fade modal" id="delete">
                <div class="modal-dialog">
                    <?php
                    // Formulario que permite escoger usuario al admin
                    echo "<form action='login.php' method='POST'>";
                    ?>
                    <div class="modal-content" style="top: 68px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                            <h2 class="modal-title" id="myModalLabel">Delete Confirmation</h2>
                        </div>
                        <div class="modal-body">
                            <p class="error-text" style="display: inline-block;"><i class="fa fa-fw s fa-remove"></i>Are you sure you want to delete the user?</p>
                            <?php
                            echo "<select name='usuario' style='margin: 7px;'>";
                            // Llamamos al método que devuelve todos los datos de los usuarios
                            $usuarios = selectUsernameUsers();
                            // Mientras haya datos, leemos la fila y la mostramos
                            while ($fila = mysqli_fetch_array($usuarios)) {
                                extract($fila);
                                // SIEMPRE después de un extract, las variables
                                // tienen el nombre de los campos de la bbdd
                                if($username!="admin"){
                                    if ($type==1) $type="Admin";
                                    else $type="User";
                                    echo "<option value='$username'>$type: $username";
                                    echo "</option>";
                                }
                            }
                            echo "</select>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <?php echo "<button type='submit' class='btn btn-danger' name='delete'>Delete</button>";?>
                        </div>
                    </div>
                    <?php echo "</form>";?>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	        <script type="text/javascript">$(".js-example-placeholder-multiple").select2({placeholder: "Select Users"});</script>
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