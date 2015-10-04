<?php include_once 'header.php'; ?>
<body class="skin-1">
  <div id="wrapper">
    <?php include_once 'nav_left.php'; ?>
    <div id="page-wrapper" class="gray-bg">
      <?php include_once 'nav_top.php'; ?>
      <div class="wrapper wrapper-content">
        <div class="row">
          <div class="col-lg-3">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <span class="label label-primary pull-right">정상</span>
                      <h5>인바운드</h5>
                  </div>
                  <div class="ibox-content">
                      <h1 class="no-margins">40 886,200</h1>
                      <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                      <small>/KB</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <span class="label label-danger pull-right">위험</span>
                      <h5>아웃바운드</h5>
                  </div>
                  <div class="ibox-content">
                      <h1 class="no-margins">275,800</h1>
                      <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                      <small>/KB</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <span class="label label-warning pull-right">경고</span>
                      <h5>패킷</h5>
                  </div>
                  <div class="ibox-content">
                      <h1 class="no-margins">106,120</h1>
                      <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                      <small>개</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>유저 수</h5>
                  </div>
                  <div class="ibox-content">
                      <h1 class="no-margins">150</h1>
                      <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                      <small>명</small>
                  </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>트래픽 양</h5>
                      <div class="pull-right">
                          <div class="btn-group">
                              <button type="button" class="btn btn-xs btn-white active">어제</button>
                              <button type="button" class="btn btn-xs btn-white">오늘</button>
                              <button type="button" class="btn btn-xs btn-white">이번 달</button>
                          </div>
                      </div>
                  </div>
                  <div class="ibox-content">
                      <div class="row">
                      <div class="col-lg-9">
                          <div class="flot-chart">
                              <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <ul class="stat-list">
                              <li>
                                  <h2 class="no-margins">2,346</h2>
                                  <small>Inbound</small>
                                  <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                  <div class="progress progress-mini">
                                      <div style="width: 48%;" class="progress-bar"></div>
                                  </div>
                              </li>
                              <li>
                                  <h2 class="no-margins ">4,422</h2>
                                  <small>OutBound</small>
                                  <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
                                  <div class="progress progress-mini">
                                      <div style="width: 60%;" class="progress-bar"></div>
                                  </div>
                              </li>
                              <li>
                                  <h2 class="no-margins ">9,180</h2>
                                  <small>Monthly income from orders</small>
                                  <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                  <div class="progress progress-mini">
                                      <div style="width: 22%;" class="progress-bar"></div>
                                  </div>
                              </li>
                              </ul>
                          </div>
                      </div>
                      </div>
  
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">
                          <h5>Messages</h5>
                          <div class="ibox-tools">
                              <a class="collapse-link">
                                  <i class="fa fa-chevron-up"></i>
                              </a>
                              <a class="close-link">
                                  <i class="fa fa-times"></i>
                              </a>
                          </div>
                      </div>
                      <div class="ibox-content ibox-heading">
                          <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                          <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.</small>
                      </div>
                      <div class="ibox-content">
                          <div class="feed-activity-list">
  
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right text-navy">1m ago</small>
                                      <strong>Monica Smith</strong>
                                      <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                      <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                  </div>
                              </div>
  
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">2m ago</small>
                                      <strong>Jogn Angel</strong>
                                      <div>There are many variations of passages of Lorem Ipsum available</div>
                                      <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                  </div>
                              </div>
  
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">5m ago</small>
                                      <strong>Jesica Ocean</strong>
                                      <div>Contrary to popular belief, Lorem Ipsum</div>
                                      <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                  </div>
                              </div>
  
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">5m ago</small>
                                      <strong>Monica Jackson</strong>
                                      <div>The generated Lorem Ipsum is therefore </div>
                                      <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                  </div>
                              </div>
  
  
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">5m ago</small>
                                      <strong>Anna Legend</strong>
                                      <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                                      <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                  </div>
                              </div>
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">5m ago</small>
                                      <strong>Damian Nowak</strong>
                                      <div>The standard chunk of Lorem Ipsum used </div>
                                      <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                  </div>
                              </div>
                              <div class="feed-element">
                                  <div>
                                      <small class="pull-right">5m ago</small>
                                      <strong>Gary Smith</strong>
                                      <div>200 Latin words, combined with a handful</div>
                                      <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                  </div>
                              </div>
  
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>User project list</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-hover no-margins">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><small>Pending...</small></td>
                                        <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                        <td>Samantha</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-warning">Canceled</span> </td>
                                        <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                        <td>Monica</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                        <td>John</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                        <td>Agnes</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                        <td>Janet</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-primary">Completed</span> </td>
                                        <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                        <td>Amelia</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                        <td>Damian</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Small todo list</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <ul class="todo-list m-t small-list">
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Buy a milk</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Go to shop and find some products.</span>

                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Send documents to Mike</span>
                                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                <span class="m-l-xs todo-completed">Plan vacation</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Create new stuff</span>
                                            </li>
                                            <li>
                                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                <span class="m-l-xs">Call to Anna for dinner</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>국가별 트래픽</h5>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="world-map" style="height: 300px;"></div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                </div>
        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active"><a data-toggle="tab" href="#tab-1">
                        Notes
                    </a></li>
                    <li><a data-toggle="tab" href="#tab-2">
                        Projects
                    </a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


    <!-- Socket.io -->
    <script src="/assets/lib/js/socket.io.js"></script>
  <script>
    var socket = io.connect('http://172.16.101.163:8888');
    socket.on('news', function (data) {
        console.log(data);
        socket.emit('my other event', { my: 'fuckkkkkkkkkkk' });
    });
  </script>
   <!-- Mainly scripts -->
    <script src="/assets/lib/js/jquery-2.1.4.min.js"></script>
    <script src="/assets/lib/js/bootstrap.min.js"></script>
    <script src="/assets/lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/assets/lib/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/assets/lib/js/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="/assets/lib/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="/assets/lib/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/assets/lib/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/assets/lib/js/inspinia.js"></script>
    <script src="/assets/lib/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/lib/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="/assets/lib/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/lib/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="/assets/lib/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="/assets/lib/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/assets/lib/js/demo/sparkline-demo.js"></script>
    
    <!-- Toastr -->
    <script src="/assets/lib/js/plugins/toastr/toastr.min.js"></script>

    <script src="/assets/js/main.js"></script>
    <script>
			    setTimeout(function() {
		      toastr.options = {
		          closeButton: true,
		          progressBar: true,
		          showMethod: 'slideDown',
		          timeOut: 1500
		      };
		      toastr.success('<?=$result["name"]?> 서버 관리자님 환영합니다.', 'KLP-Firewall');
		  }, 1300);
	 	</script>
	 	
  	<script src="/assets/js/common.js"></script>
</body>
</html>
