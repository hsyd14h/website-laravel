@extends('layouts.main')

@section('container')

<div class="container">
   <div class="row justify-content-center mb-5">
      <div class="col-8-md">
         <h1 class="mb-3">{{$post->title }} </h1>

         <p>By, <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> in ,
            <a href="/blog?category={{  $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

         <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class='img-fluid'>

          <article class="my-3 fs-5">
            {!!  $post->body !!}
          </article>
      
       
          <a href="/blog" class="d-block mt-5">Back to Posts></a>
      </div>
   </div>
</div>

 
  

@endsection
