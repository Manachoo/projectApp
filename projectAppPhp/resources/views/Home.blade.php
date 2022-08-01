@extends('layaout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3 border-top-0">
                    <a href="/blog-1">
                        <img src="https://picsum.photos/400/400" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/blog-1">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 border-top-0">
                    <a href="/blog-2">
                        <img src="https://picsum.photos/450/500" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/blog-2">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 border-top-0">
                    <a href="/blog-3">
                        <img src="https://picsum.photos/450/600" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/blog-3">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3 border-top-0">
                    <a href="/blog-4">
                        <img src="https://picsum.photos/600/430" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/blog-4">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3 border-top-0">
                    <a href="/blog-5">
                        <img src="https://picsum.photos/500/700" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/blog-5">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .card {
        margin-top: 1rem
    }

    a,p,h5 {
        text-decoration: none;
        color: black;
    }
    img{
        height: 300px;
        object-fit: cover;
    }
</style>
