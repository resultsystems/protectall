@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <router-view></router-view>
            </div>
        </div>
    </div>

    @include("dashboard")

    @include("creditcard.list")
    @include("creditcard.new")

    @include("text.list")
    @include("text.new")

    @include("username.list")
    @include("username.new")

</div>
<script src="/js/all.js"></script>
@endsection
