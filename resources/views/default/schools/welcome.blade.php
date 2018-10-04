@extends('layouts.app_free')

@section('content')
    <div class="item">
            <div class="item-bg">
                    {!! Theme::img('assets/images/a1.jpg', 'Home screen', 'blur opacity-3' ); !!}
            </div>
            <div class="p-a-md">
              <div class="row m-t">
                <div class="col-sm-7">
                  <a href="" class="pull-left m-r-md">
                    <span class="avatar w-96">
                            {!! Theme::img('assets/images/a1.jpg' ); !!}
                      <i class="on b-white"></i>
                    </span>
                  </a>
                  <div class="clear m-b">
                    <h3 class="m-a-0 m-b-xs">Jean Reyes</h3>
                    <p class="text-muted"><span class="m-r">UX/UI Director</span> <small><i class="fa fa-map-marker m-r-xs"></i>London, UK</small></p>
                    <div class="block clearfix m-b">
                      <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook indigo"></i>
                      </a>
                      <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter light-blue"></i>
                      </a>
                      <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-google-plus red"></i>
                      </a>
                      <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-linkedin cyan-600"></i>
                      </a>
                    </div>
                    <a href="" class="btn btn-sm warn btn-rounded m-b">Follow</a>
                  </div>
                </div>
                <div class="col-sm-5">
                  <p class="text-md profile-status">I am feeling good!</p>
                  <button class="btn btn-sm white" data-toggle="collapse" data-target="#editor">Edit</button>
                  <div class="collapse box m-t-sm" id="editor">
                    <textarea class="form-control no-border" rows="2" placeholder="Type something..."></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <div class="padding">
            <div class="row">
              <div class="col-sm-8 col-md-9">
                <h4 class="m-0 m-b-sm text-md">Quick support</h4>
                <div class="m-b" id="accordion">
                  <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                      <span class="pull-right label text-sm">3214</span>
                      <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                        Q: How to create an icon like the demo app
                      </a>
                    </div>
                    <div id="c_1" class="collapse in">
                      <div class="box-body">
                        <p class="text-sm text-muted"><span class="text-md pull-left w-32 m-r rounded success">A</span> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, <br><br>raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                      <span class="pull-right label text-sm">430</span>
                      <a data-toggle="collapse" data-parent="#accordion" data-target="#c_2">
                        Q: How to build my custom color
                      </a>
                    </div>
                    <div id="c_2" class="collapse">
                      <div class="box-body">
                        <p class="text-sm text-muted"><span class="text-md pull-left w-32 m-r rounded info">A</span> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                      <span class="pull-right label text-sm">230</span>
                      <a data-toggle="collapse" data-parent="#accordion" data-target="#c_3">
                        Q: What is the app requriements
                      </a>
                    </div>
                    <div id="c_3" class="collapse">
                      <div class="box-body">
                        <span class="text-md pull-left w-32 m-r rounded warning">A</span> 
                        <p class="text-sm text-muted clear">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                      <span class="pull-right label text-sm">49</span>
                      <a data-toggle="collapse" data-parent="#accordion" data-target="#c_4">
                        Q: Where to find the API
                      </a>
                    </div>
                    <div id="c_4" class="collapse">
                      <div class="box-body">
                        <span class="text-md pull-left w-32 m-r rounded primary">A</span> 
                        <p class="text-sm text-muted clear">Vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. nesciunt you probably haven't heard of them accusamus labore sustainable
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                      <span class="pull-right label text-sm">6</span>
                      <a data-toggle="collapse" data-parent="#accordion" data-target="#c_5">
                        Q: How to add my router
                      </a>
                    </div>
                    <div id="c_5" class="collapse">
                      <div class="box-body">
                        <span class="text-md pull-left w-32 m-r rounded dark">A</span> 
                        <p class="text-sm text-muted clear">Vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. nesciunt you probably haven't heard of them accusamus labore sustainable
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <h4 class="m-0 m-b-sm text-md">Ask experts</h4>
                <div class="box">
                  <ul class="list inset">
                    <li class="list-item">
                      <a herf class="list-left">
                        <span class="w-40 circle avatar accent">
                          <span>C</span>
                          <i class="away b-white"></i>
                        </span>
                      </a>
                      <div class="list-body">
                        <div><a href>Chris Fox</a></div>
                        <small class="text-muted text-ellipsis">Designer, Blogger</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <a herf class="list-left">
                        <span class="w-40 circle avatar green">
                          <span>M</span>
                          <i class="off b-white"></i>
                        </span>
                      </a>
                      <div class="list-body">
                        <div><a href>Mogen Polish</a></div>
                        <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <a herf class="list-left">
                        <span class="w-40 circle avatar purple">
                          <span>J</span>
                          <i class="busy b-white"></i>
                        </span>
                      </a>
                      <div class="list-body">
                        <div><a href>Joge Lucky</a></div>
                        <small class="text-muted text-ellipsis">Art director, Movie Cut</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <a herf class="list-left">
                        <span class="w-40 circle avatar warn">
                          <span>F</span>
                          <i class="away b-white"></i>
                        </span>
                      </a>
                      <div class="list-body">
                        <div><a href>Folisise Chosielie</a></div>
                        <small class="text-muted text-ellipsis">Musician, Player</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <a herf class="list-left">
                        <span class="w-40 circle avatar green">
                          <span>P</span>
                          <i class="on b-white"></i>
                        </span>
                      </a>
                      <div class="list-body">
                        <div><a href>Peter</a></div>
                        <small class="text-muted text-ellipsis">Musician, Player</small>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-row align-items-center dark">
                <div class="padding row text-center">
                        <div class="col-sm-3">
                          <div class="box-color primary pos-rlt">
                            <span class="arrow top b-primary"></span>
                            <div class="box-body">
                              b-primary
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="box-color info pos-rlt">
                            <span class="arrow right b-info"></span>
                            <div class="box-body">
                              b-info
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="box-color success pos-rlt">
                            <span class="arrow bottom b-success"></span>
                            <div class="box-body">
                              b-success
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="box-color warning pos-rlt">
                            <span class="arrow left b-warning"></span>
                            <div class="box-body">
                              b-warning
                            </div>
                          </div>
                        </div>
                      </div>      
        </div>
<div class="padding">
        <h4 class="m-0 m-b-sm text-md">Quick support</h4>
        <div class="row">
        <div class="col-xs-3 col-sm-12 col-md-3 col-0">
                <div class="box">
                    <div class="item">
                        <div class="item-overlay active p-a">
                            <span class="pull-right label dark-white text-color"><i class="fa fa-plane fa-fw"></i> 5:30</span>
                            <a href="" class="pull-left text-u-c label label-md info">Travel</a>
                        </div>
                        {!! Theme::img('assets/images/c2.jpg', 'Post image', 'w-full' ); !!}
                    </div>
                    <div class="p-a">
                        <div class="text-muted m-b-xs">
                            <span class="m-r">May 12</span>
                            <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                            <a href=""><i class="fa fa-share"></i></a>
                        </div>
                        <div class="m-b h-2x"><a href="" class="_800">20 Beaches That Are Better in the Off-Season</a></div>
                        <p class="h-3x">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                        <div><a href="" class="btn btn-xs white">Read More</a></div>
                    </div>
                </div>
            </div>

            <div class="col-xs-3 col-sm-12 col-md-3 col-0">
                    <div class="box">
                        <div class="item">
                            <div class="item-overlay active p-a">
                                <span class="pull-right label dark-white text-color"><i class="fa fa-plane fa-fw"></i> 5:30</span>
                                <a href="" class="pull-left text-u-c label label-md info">Travel</a>
                            </div>
                            {!! Theme::img('assets/images/c2.jpg', 'Post image', 'w-full' ); !!}
                        </div>
                        <div class="p-a">
                            <div class="text-muted m-b-xs">
                                <span class="m-r">May 12</span>
                                <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                <a href=""><i class="fa fa-share"></i></a>
                            </div>
                            <div class="m-b h-2x"><a href="" class="_800">20 Beaches That Are Better in the Off-Season</a></div>
                            <p class="h-3x">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <div><a href="" class="btn btn-xs white">Read More</a></div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xs-3 col-sm-12 col-md-3 col-0">
                        <div class="box">
                            <div class="item">
                                <div class="item-overlay active p-a">
                                    <span class="pull-right label dark-white text-color"><i class="fa fa-plane fa-fw"></i> 5:30</span>
                                    <a href="" class="pull-left text-u-c label label-md info">Travel</a>
                                </div>
                                {!! Theme::img('assets/images/c2.jpg', 'Post image', 'w-full' ); !!}
                            </div>
                            <div class="p-a">
                                <div class="text-muted m-b-xs">
                                    <span class="m-r">May 12</span>
                                    <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                    <a href=""><i class="fa fa-share"></i></a>
                                </div>
                                <div class="m-b h-2x"><a href="" class="_800">20 Beaches That Are Better in the Off-Season</a></div>
                                <p class="h-3x">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <div><a href="" class="btn btn-xs white">Read More</a></div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xs-3 col-sm-12 col-md-3 col-0">
                            <div class="box">
                                <div class="item">
                                    <div class="item-overlay active p-a">
                                        <span class="pull-right label dark-white text-color"><i class="fa fa-plane fa-fw"></i> 5:30</span>
                                        <a href="" class="pull-left text-u-c label label-md info">Travel</a>
                                    </div>
                                    {!! Theme::img('assets/images/c2.jpg', 'Post image', 'w-full' ); !!}
                                </div>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <span class="m-r">May 12</span>
                                        <a href="" class="m-r"><i class="fa fa-heart-o"></i> 34</a>
                                        <a href=""><i class="fa fa-share"></i></a>
                                    </div>
                                    <div class="m-b h-2x"><a href="" class="_800">20 Beaches That Are Better in the Off-Season</a></div>
                                    <p class="h-3x">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                    <div><a href="" class="btn btn-xs white">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
