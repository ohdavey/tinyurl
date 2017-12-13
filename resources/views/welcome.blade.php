@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-md">
            <h2>Simplify your links</h2>

            @include ('url.create')

            <p>Track your tinyurl here: <span class="text-info">{{ url('/') }}/url/{<code>code</code>}</span> </p>
        </div>
        <div class="panel panel-default hidden" id="url-results">
            <div class="panel-heading">
                <h2>
                    Here is your TinyUrl:
                </h2>
            </div>

            <div class="panel-body">
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>Original URL</th>
                        <th>Created</th>
                        <th>TinyUrl</th>
                        <th>Views</th>

                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
