<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a class="btn btn-primary btn-close" href="{{ route('pages.edit', $pages->id) }}">Back to Edit</a></li>
        </ul>
    </div>
    
</div>  
    
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ $pages->thumbnail }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $pages->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! $pages->details !!}
                </div>
            </div>
        </div>
    </article>


    <div id="copyright text-right">© Copyright 2020 Giantfocus</div>