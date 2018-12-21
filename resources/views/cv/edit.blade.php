@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <form action="{{ url('cvs/'.$cv->id) }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control" value="{{$cv->titre}}">
                        @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $messag)
                                <li>{{$messag}}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control" rows="10" >{{$cv->presentation}}</textarea>
                        @if($errors->get('presentation'))
                            @foreach($errors->get('presentation') as $messag)
                                <li>{{$messag}}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control bt btn-danger" type="submit" name="datepublish" class="form-control" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
