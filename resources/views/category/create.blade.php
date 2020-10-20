@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
<div class="card">
<div class="card-header">{{_('Options')}}</div>
<div class="card-body">
<a href="{{route('home')}}">Home</a>
</div>
</div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h4 style="text-align: center;">category</h4>

                            </div>
                            <div class="col-sm">
                                <a href="{{route('category.index')}}"><button type="button" class="btn btn-primary">View categories</button></a>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <form method="post" action="{{ route('category.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first_name">Name:</label>
                                        <input type="text" class="form-control" name="name"/>
                                    </div>


                                    <button type="submit" class="btn btn-success">create Category</button>                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
