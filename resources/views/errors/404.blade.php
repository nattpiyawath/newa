@extends('layout.andro.app')

@section('title', 'Welcome Home Page')

@section('content')
<!-- Error -->
<div class="error-area">
    <div class="d-table">
        <div class="d-table-cell">

            <div class="error-item">
                <h1>404</h1>
                <h2>Sorry! You Page Not Found</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda possimus pariatur molestiae recusandae veritatis rerum modi obcaecati hic libero amet corrupti numquam cum facilis dolor error eos rem, ullam ipsum</p>
                <a class="common-btn" href="{{url('/')}}">
                    Go To Home
                    <span></span>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- End Error -->
@endsection