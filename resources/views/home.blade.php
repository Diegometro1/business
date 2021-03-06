@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3>your list</h3>
                    if(count($listings))
                    <table>
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>

                        </tr>

                        @foreach($listings as $listing)
                            <tr>

                                <td>{{$list->name}}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>{{$listing->name}}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
