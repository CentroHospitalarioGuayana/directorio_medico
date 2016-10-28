@extends('layouts.admin')

@section('titulo'.'Perfil')

@section('titulo')
  <div class="row mailbox-wrapper">
      <div class="col-md-4">
          <div class="panel-layout">
              <div class="panel-box">
                  <div class="panel-content image-box">
                      <div class="ribbon">
                          <div class="bg-primary">Ribbon</div>
                      </div>
                      <div class="image-content font-white">
                          <div class="meta-box meta-box-bottom"><img src="../../assets/image-resources/gravatar.jpg" alt="" class="meta-image img-bordered img-circle">
                              <h3 class="meta-heading">Alex Rosenberg</h3>
                              <h4 class="meta-subheading">Ultimate backend programmer</h4></div>
                      </div><img src="../../assets/image-resources/blurred-bg/blurred-bg-13.jpg" alt=""></div>
                  <div class="panel-content pad15A bg-white radius-bottom-all-4">
                      <div class="clear profile-box">
                          <ul class="nav nav-pills nav-justified">
                              <li><a href="#" class="btn btn-sm bg-google"><span class="glyph-icon icon-separator"><i class="glyph-icon icon-google-plus"></i></span> <span class="button-content">Google+</span></a></li>
                              <li><a href="#" class="btn btn-sm bg-facebook"><span class="glyph-icon icon-separator"><i class="glyph-icon icon-facebook"></i></span> <span class="button-content">Facebook</span></a></li>
                              <li><a href="#" class="btn btn-sm bg-twitter"><span class="glyph-icon icon-separator"><i class="glyph-icon icon-twitter"></i></span> <span class="button-content">Twitter</span></a></li>
                          </ul>
                      </div>
                      <div class="mrg15T mrg15B"></div>
                      <blockquote class="font-gray">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Programmer at <cite title="Delight">Delight</cite></small></blockquote>
                  </div>
              </div>
          </div>
          <div class="content-box mrg15B">
              <h3 class="content-box-header clearfix">Friends online<div class="font-size-11 float-right"><a href="#" title=""><i class="glyph-icon mrg5R opacity-hover icon-plus"></i></a> <a href="#" title=""><i class="glyph-icon opacity-hover icon-cog"></i></a></div></h3>
              <div class="content-box-wrapper text-center clearfix">
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial1.jpg" alt="">
                      <div class="small-badge bg-red"></div>
                  </div>
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial2.jpg" alt="">
                      <div class="small-badge bg-orange"></div>
                  </div>
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial3.jpg" alt="">
                      <div class="small-badge bg-red"></div>
                  </div>
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial4.jpg" alt="">
                      <div class="small-badge bg-green"></div>
                  </div>
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial5.jpg" alt="">
                      <div class="small-badge bg-orange"></div>
                  </div>
                  <div class="status-badge mrg10A"><img class="img-circle" width="40" src="../../assets/image-resources/people/testimonial6.jpg" alt="">
                      <div class="small-badge bg-red"></div>
                  </div>
              </div>
          </div>
          <div class="content-box mrg15B">
              <h3 class="content-box-header clearfix">Recent activity<div class="font-size-11 float-right"><a href="#" title=""><i class="glyph-icon mrg5R opacity-hover icon-plus"></i></a> <a href="#" title=""><i class="glyph-icon opacity-hover icon-cog"></i></a></div></h3>
              <div class="content-box-wrapper text-center clearfix">
                  <div class="timeline-box timeline-box-right">
                      <div class="tl-row">
                          <div class="tl-item">
                              <div class="tl-icon bg-yellow"><i class="glyph-icon icon-eyedropper"></i></div>
                              <div class="popover left">
                                  <div class="arrow"></div>
                                  <div class="popover-content">
                                      <div class="tl-label bs-label label-success">Meeting</div>
                                      <p class="tl-content">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                      <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tl-row">
                          <div class="tl-item">
                              <div class="tl-icon bg-blue"><i class="glyph-icon icon-line-chart"></i></div>
                              <div class="popover left">
                                  <div class="arrow"></div>
                                  <div class="popover-content">
                                      <div class="tl-label bs-label label-danger">Audio</div>
                                      <p class="tl-content">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                      <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tl-row">
                          <div class="tl-item">
                              <div class="tl-icon bg-blue"><i class="glyph-icon icon-cab"></i></div>
                              <div class="popover left">
                                  <div class="arrow"></div>
                                  <div class="popover-content">
                                      <div class="tl-label bs-label label-warning">Video</div>
                                      <p class="tl-content">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                      <div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="content-box">
              <div class="mail-header clearfix"><span class="mail-title">My Profile</span>
                  <div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-default btn-small dropdown-toggle"><span class="glyph-icon icon-caret-down"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                      </ul>
                  </div>
                  <div class="float-right col-md-4 pad0A">
                      <div class="input-group">
                          <input type="text" class="form-control">
                          <div class="input-group-btn">
                              <button type="button" class="btn btn-default" tabindex="-1"><i class="glyph-icon icon-search"></i></button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="content-box bg-white post-box">
              <textarea name="" class="textarea-autosize" placeholder="What are you doing right now?"></textarea>
              <div class="button-pane"><a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-volume-down"></i></a> <a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-video-camera"></i></a> <a href="#"
                      class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-microphone"></i></a> <a href="#" class="btn btn-md btn-link hover-white" title=""><i class="glyph-icon icon-picture-o"></i></a> <a href="#" class="btn btn-md btn-post float-right btn-success"
                      title="">Share it!</a></div>
          </div>
          <div class="example-box-wrapper">
              <ul class="list-group row list-group-icons">
                  <li class="col-md-3 active"><a href="#tab-example-4" data-toggle="tab" class="list-group-item"><i class="glyph-icon font-red icon-bullhorn"></i> Personal Information</a></li>
                  <li class="col-md-3"><a href="#tab-example-1" data-toggle="tab" class="list-group-item"><i class="glyph-icon icon-dashboard"></i> Account Settings</a></li>
                  <li class="col-md-3"><a href="#tab-example-2" data-toggle="tab" class="list-group-item"><i class="glyph-icon font-primary icon-camera"></i> Messages Inbox</a></li>
                  <li class="col-md-3"><a href="#tab-example-3" data-toggle="tab" class="list-group-item"><i class="glyph-icon font-blue-alt icon-globe"></i> FAQ Section</a></li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane fade" id="tab-example-1">
                      <div class="alert alert-close alert-success">
                          <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
                          <div class="bg-green alert-icon"><i class="glyph-icon icon-check"></i></div>
                          <div class="alert-content">
                              <h4 class="alert-title">Example Infobox</h4>
                              <p>Lorem ipsum dolor sic amet dixit tu...</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="content-box">
                                  <form class="form-horizontal clearfix pad15L pad15R pad20B bordered-row">
                                      <div class="form-group remove-border">
                                          <label class="col-sm-7 control-label">Enable account:</label>
                                          <div class="col-sm-3">
                                              <input type="checkbox" class="input-switch-alt">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-7 control-label">Visible Profile</label>
                                          <div class="col-sm-3">
                                              <input type="checkbox" checked="checked" class="input-switch-alt">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-7 control-label">Hide timeline</label>
                                          <div class="col-sm-3">
                                              <input type="checkbox" data-on-color="danger" data-size="small" name="checkbox-example-1" class="input-switch" data-on-text="On" data-off-text="Off">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-7 control-label">Is it active?</label>
                                          <div class="col-sm-3">
                                              <input type="checkbox" data-on-color="info" data-size="small" name="checkbox-example-2" class="input-switch" data-on-text="On" data-off-text="Off">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-7 control-label">Radio example</label>
                                          <div class="col-sm-3">
                                              <input type="checkbox" data-on-color="success" data-size="small" name="checkbox-example-3" class="input-switch" checked="checked" data-on-text="On" data-off-text="Off">
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="content-box mrg15B">
                                  <h3 class="content-box-header clearfix">Change Password<div class="font-size-11 float-right"><a href="#" title=""><i class="glyph-icon mrg5R opacity-hover icon-plus"></i></a> <a href="#" title=""><i class="glyph-icon opacity-hover icon-cog"></i></a></div></h3>
                                  <div class="content-box-wrapper pad0T clearfix">
                                      <form class="form-horizontal pad15L pad15R bordered-row">
                                          <div class="form-group">
                                              <label class="col-sm-6 control-label">Old password:</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" id="" placeholder="">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-6 control-label">New password:</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" id="" placeholder="">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-6 control-label">Repeat password:</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" id="" placeholder="">
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                                  <div class="button-pane mrg20T">
                                      <button class="btn btn-success">Update Password</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="tab-example-2">
                      <div class="content-box pad25A">
                          <ul class="chat-box">
                              <li>
                                  <div class="chat-author"><img width="36" src="../../assets/image-resources/gravatar.jpg" alt=""></div>
                                  <div class="popover left no-shadow">
                                      <div class="arrow"></div>
                                      <div class="popover-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                                          <div
                                              class="chat-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                  </div>
                      </div>
                      </li>
                      <li class="float-left">
                          <div class="chat-author"><img width="36" src="../../assets/image-resources/gravatar.jpg" alt=""></div>
                          <div class="popover right no-shadow">
                              <div class="arrow"></div>
                              <div class="popover-content">
                                  <h3><a href="#" title="Horia Simon">Horia Simon</a><div class="float-right"><a href="#" class="btn glyph-icon icon-inbox font-gray tooltip-button" data-placement="bottom" title="This chat line was received in the mail."></a></div></h3>This comment line has a title (author name) and a right button panel.
                                  <div class="chat-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="chat-author"><img width="36" src="../../assets/image-resources/gravatar.jpg" alt=""></div>
                          <div class="popover left no-shadow">
                              <div class="arrow"></div>
                              <div class="popover-content">This comment line has a bottom button panel, box shadow and title.
                                  <div class="chat-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                                  <div class="divider"></div><a href="#" class="btn btn-sm btn-default font-bold text-transform-upr" title=""><span class="button-content">Reply</span></a> <a href="#" class="btn btn-sm btn-danger float-right tooltip-button" data-placement="left"
                                      title="Remove comment"><i class="glyph-icon icon-remove"></i></a></div>
                          </div>
                      </li>
                      <li>
                          <div class="chat-author"><img width="36" src="../../assets/image-resources/gravatar.jpg" alt=""></div>
                          <div class="popover left no-shadow">
                              <div class="arrow"></div>
                              <div class="popover-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                                  <div class="chat-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                              </div>
                          </div>
                      </li>
                      <li class="float-left">
                          <div class="chat-author"><img width="36" src="../../assets/image-resources/gravatar.jpg" alt=""></div>
                          <div class="popover right no-shadow">
                              <div class="arrow"></div>
                              <div class="popover-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                                  <div class="chat-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>
                              </div>
                          </div>
                      </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-pane fade" id="tab-example-3">
                  <div class="row">
                      <div class="col-md-3">
                          <ul class="list-group">
                              <li class="mrg10B"><a href="#faq-tab-1" data-toggle="tab" class="list-group-item">How to get paid <i class="glyph-icon icon-angle-right mrg0A"></i></a></li>
                              <li class="mrg10B"><a href="#faq-tab-2" data-toggle="tab" class="list-group-item">ThemeForest related <i class="glyph-icon font-green icon-angle-right mrg0A"></i></a></li>
                              <li class="mrg10B"><a href="#faq-tab-3" data-toggle="tab" class="list-group-item">Common questions <i class="glyph-icon icon-angle-right mrg0A"></i></a></li>
                              <li class="mrg10B"><a href="#faq-tab-4" data-toggle="tab" class="list-group-item">Terms of service <i class="glyph-icon icon-angle-right mrg0A"></i></a></li>
                          </ul>
                      </div>
                      <div class="col-md-9">
                          <div class="tab-content">
                              <div class="tab-pane fade active in pad0A" id="faq-tab-1">
                                  <div class="panel-group" id="accordion5">
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion5" href="#collapseOne">Collapsible Group Item #1</a></h4></div>
                                          <div id="collapseOne" class="panel-collapse collapse in">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo">Collapsible Group Item #2</a></h4></div>
                                          <div id="collapseTwo" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion5" href="#collapseThree">Collapsible Group Item #3</a></h4></div>
                                          <div id="collapseThree" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade pad0A" id="faq-tab-2">
                                  <div class="panel-group" id="accordion1">
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">Collapsible Group Item #1</a></h4></div>
                                          <div id="collapseOne1" class="panel-collapse collapse in">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">Collapsible Group Item #2</a></h4></div>
                                          <div id="collapseTwo1" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">Collapsible Group Item #3</a></h4></div>
                                          <div id="collapseThree1" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade pad0A" id="faq-tab-3">
                                  <div class="panel-group" id="accordion2">
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">Collapsible Group Item #1</a></h4></div>
                                          <div id="collapseOne2" class="panel-collapse collapse in">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">Collapsible Group Item #2</a></h4></div>
                                          <div id="collapseTwo2" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">Collapsible Group Item #3</a></h4></div>
                                          <div id="collapseThree2" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade pad0A" id="faq-tab-4">
                                  <div class="panel-group" id="accordion3">
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4">Collapsible Group Item #1</a></h4></div>
                                          <div id="collapseOne4" class="panel-collapse collapse in">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo4">Collapsible Group Item #2</a></h4></div>
                                          <div id="collapseTwo4" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                      <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4">Collapsible Group Item #3</a></h4></div>
                                          <div id="collapseThree4" class="panel-collapse collapse">
                                              <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                  eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                  sustainable VHS.</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane pad0A fade active in" id="tab-example-4">
                  <div class="content-box">
                      <form class="form-horizontal pad15L pad15R bordered-row">
                          <div class="form-group remove-border">
                              <label class="col-sm-3 control-label">First Name:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="" placeholder="First name...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Last Name:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="" placeholder="Last name...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Email:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="" placeholder="Email address...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Website:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="" placeholder="Website...">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">About me:</label>
                              <div class="col-sm-6">
                                  <textarea name="" rows="3" class="form-control textarea-autosize"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Profile Picture:</label>
                              <div class="col-sm-6">
                                  <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px"></div>
                                      <div><span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span> <span class="fileinput-exists">Change</span>
                                          <input type="file" name="...">
                                          </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a></div>
                                  </div>
                              </div>
                          </div>
                      </form>
                      <div class="button-pane mrg20T">
                          <button class="btn btn-info">Save</button>
                          <button class="btn btn-link font-gray-dark">Cancel</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
