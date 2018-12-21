@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <form action="{{ url('cvs') }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group @if($errors->get('titre')) has-error @endif">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control" value="{{old('titre')}}">
                        @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $messag)
                                <li>{{$messag}}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group @if($errors->get('presentation')) has-error @endif">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control" rows="10">{{old('presentation')}}</textarea>
                        @if($errors->get('presentation'))
                            @foreach($errors->get('titre') as $messag)
                                <li>{{$messag}}</li>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control bt btn-primary" type="submit" name="datepublish" class="form-control"
                               value="Enrigistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
