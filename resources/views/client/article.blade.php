@extends('client.layout.index')
@section('content')
<div class="container py-5" style="padding-left:10%; padding-right:10%">
<div class="post-header">
    <div class="mb-3 align-middle">
        <img src="/img/authors/ardianta.webp" data-src="/img/authors/ardianta.webp" class="rounded-circle mr-1 lazyload lazyloaded" width="32" height="32" alt="author">
            <a class="text-dark" href="https://www.petanikode.com/authors/ardianta/">{{$author->name}}</a>
<span class="small text-muted">•{{ date('j F, Y', strtotime($articles->created_at))}}</span>
</div>
<h1 class="card-title mb-3 post-title font-weight-bold">{{$articles->tittle}}</h1>
<hr>
<div>
<div class=" col-md-12 mb-5">
      <span class="mb-1 ml-1" style="display:inline-block; padding:10px; background-color:#f5f5f5;">
          <p font-size="12" class="sc-AxjAm bDnkkj" style="margin-bottom: 0px;">HTML &amp; CSS</p>
      </span>
      <span class="mb-1 ml-1" style="display:inline-block; padding:10px; background-color:#f5f5f5;">
          <p font-size="12" class="sc-AxjAm bDnkkj" style="margin-bottom: 0px;">JavaScript</p>
      </span>
      <span class="mb-1 ml-1"  style="display:inline-block; padding:10px; background-color:#f5f5f5;">
          <p font-size="12" class="sc-AxjAm bDnkkj" style="margin-bottom: 0px;">SQL</p>
      </span>
      <span class="mb-1 ml-1" style="display:inline-block;  padding:10px; background-color:#f5f5f5;">
          <p font-size="12" class="sc-AxjAm bDnkkj" style="margin-bottom: 0px;">Node.js</p>
      </span>
      <span class="mb-1 ml-1" style="display:inline-block; padding:10px; background-color:#f5f5f5;">
        <p font-size="12" class="sc-AxjAm bDnkkj" style="margin-bottom: 0px;">Git</p>
    </span>
  </div>


</div>
</div>

<p style="text-align: justify;" >
{!!$articles->article!!}

</div>
@stop