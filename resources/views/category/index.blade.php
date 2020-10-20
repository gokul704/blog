@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">{{_('Options')}}</div>
            <div class="card-body">
                <a href="{{route('home')}}">home</a>
                <br>

                <a href="{{route('post.index')}}">Post</a>
            </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="col-sm">
                                    <h4 style="text-align: center;">Category</h4>

                                </div>
                                <div class="col-sm">
                                    <a href="{{route('category.create')}}"><button type="button" class="btn btn-primary">Create Category</button></a>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                          <td>ID</td>
                                          <td>Name</td>
                                          <td>Generated on</td>
                                          <td>Updated on</td>
                                          <td colspan = 2>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cat as $cats)
                                        <tr>
                                            <td>{{$cats->id}}</td>
                                            <td>{{$cats->name}} </td>
                                            <td>{{$cats->created_at->diffForHumans()}}</td>
                                            <td>{{$cats->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('category.edit',$cats->id)}}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('category.destroy', $cats->id)}}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
