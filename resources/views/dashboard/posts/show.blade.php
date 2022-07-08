@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my Posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x500/?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!!  $post->body !!}
                </article>
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
