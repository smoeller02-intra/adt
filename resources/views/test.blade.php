@extends('layouts.layout')

@section('header')
    @include("layouts.header")
@endsection

@section('topmenu')
    @include("layouts.topmenu")
@endsection


@section('leftmenu')
    @include("layouts.leftmenu")
@endsection

@section('content')
<main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Blank <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">That feeling of delight when you start your awesome new project!</small>
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Generic</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Blank</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Your Content <small>Subtitle</small></h2>
                    <p>

                    </p>
                </div>
                <!-- END Page Content -->
            </main>
@endsection