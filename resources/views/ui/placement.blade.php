@extends('layouts.app')

@section('content')
    <div class="h-20"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('widgets.sidebar')
            </div>
            <div class="col-md-9">


                <div class="content-page-title">
                    <i class="fa fa-building"></i> Placement
                </div>

                    <div class="chat">

                      {!! Form::open(['action' => 'PlacementCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'onsubmit'=> 'ShowLoading()']) !!}
                      {{ csrf_field() }}

                           {{Form::textarea('placement',$z, ['id' => 'summernote','rows' => '8', 'class' => 'form-control', 'required', ])}}
                     <div class="col-md-6 col-xs-6">
                         <div class="text-right mrg-top-5">
                             {{ Form::hidden('uref', Crypt::encrypt(auth()->user()->id)) }}
                             <button class="btn btn-success" type="submit" name="submitbutton" value="save">Save changes</button>
                         </div>
                     </div>
                 </div>
                 {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>



@endsection


@section('footer')
@endsection
