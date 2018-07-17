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
    
@endsection

@section('container2-content')
    
@endsection
