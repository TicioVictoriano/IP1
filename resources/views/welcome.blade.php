@extends('layouts.guest-app')
    
@section('carousel')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="div1"></div>
            </div>

            <div class="item">
                <div class="div2"></div>
            </div>

            <div class="item">
                <div class="div3"></div>
            </div>
        </div>

        <div id="welcome-message">
            
            <h2>Welcome to ALU student internship portfolio</h2>
            <br>
            <div id="search-bar">
                <form class="form-inline" action="" method="post" accept-charset="utf-8">
                    
                    <div class="form-group search">
                        <input type="text" class="form-control" name="" placeholder="Search for a student">
                    </div>

                    <div class="form-group search-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>        
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('container1-content')
        <br><br>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body subtitle"><b>Most searched</b></div>
            </div>
            <br>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                @foreach ($top_users->chunk(4) as $users)
                    <div class="row">
                            @foreach ($users as $user)
                                <div class="col-sm-2 col-md-3">
                                    
                                    <div class="thumbnail">
                                        <div class="back-image0">
                                            <img src="{{Storage::url($user->profile_path)}}" class="img-responsive" alt=""/>
                                        </div>
                                        <div>
                                            <a id="cart" class=" btn" role="button">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true">
                                            </span> {{ $user->name }}
                                          </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach        
                    </div>
                @endforeach
            </div>
        </div>
@endsection

@section('container2-content')
    
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body subtitle"><b>Interns daily diary posts</b></div>
            </div>
        </div>

        @foreach ($top_posts->chunk(3) as $posts)
            <br>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-1">
                        <div class="thumbnail">
                            @if($post->profile_path != "")
                                <img alt="image" class="img-responsive user-photo" src="{{Storage::url($post->profile_path)}}">
                            @else
                                <img alt="image" class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            @endif
                        </div>
                        <!-- /thumbnail -->
                    </div>
                    <!-- /col-sm-1 -->

                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading">
                                <strong>{{ $post->name }}</strong> 
                                
                                <span class="text-muted">commented 
                                    {{ 
                                        $post->created_at
                                      }}
                                </span>

                            </div>

                            <div class="panel-body">
                                <a href="" class="btn btn-sm btn-primary">Read more</a>
                            </div>
                            <!-- /panel-body -->

                        </div>
                        <!-- /panel panel-default -->
                    </div>
                    <!-- /col-sm-5 -->
                @endforeach
            </div>
        @endforeach
        <br><br>

@endsection
