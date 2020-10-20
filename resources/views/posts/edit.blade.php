@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
<div class="card">
<div class="card-header">{{_('Options')}}</div>
<div class="card-body">
<a href="{{route('home')}}">Home</a>
<br>
<a href="{{route('category.index')}}">Category</a>

</div>
</div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h4 style="text-align: center;">Post</h4>

                            </div>
                            <div class="col-sm">
                                <a href="{{route('post.index')}}"><button type="button" class="btn btn-primary">View Posts</button></a>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('post.update', $posts->id) }}"  method="POST">

                                    @csrf

                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="first_name">Title:</label>
                                    <input type="text" class="form-control" name="title" value="{{$posts->title}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="category" >
                                            @foreach($category as $cats){
                                                <option value="{{$cats->name}}"  {{ $cat == $cats->name ? 'selected="selected"' : '' }}>{{$posts->category}}</option>

                                            }
                                            @endforeach
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Body</label>
                                      <textarea class="form-control" id="tiny" name="body"  rows="3">{{$posts->body}}</textarea>
                                      </div>
                                      <div class="form-group">
                                        <label for="image">Choose Image(if any)</label>
                                        <input id="image" type="file" name="image">
                                    </div>



                                    <button type="submit" class="btn btn-success">Update Post</button>                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
