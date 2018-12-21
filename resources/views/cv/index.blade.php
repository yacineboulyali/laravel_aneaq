@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif

                <table class="table">
                <h1>La liste de mes cvs</h1>
                    <div class="pull-right">
                        <a class="btn btn-default" href="{{url("cvs/create")}}">Nouveau CV</a>
                    </div>
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Presentation</th>
                    <th scope="col">date</th>
                    <th scope="col">actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cvs as $cv)
                <tr>
                    <th scope="row">{{$cv->id}}</th>
                    <td>{{$cv->titre}}</td>
                    <td>{{$cv->presentation}}</td>
                    <td>{{$cv->created_at}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Détails</a>
                        <a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-default">Editer</a>
                        <form style="display: inline" action="{{url('cvs/'.$cv->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                    @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
