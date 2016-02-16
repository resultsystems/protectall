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

    @include("creditcard.list")
    @include("dashboard")
    @include("creditcard.decrypt")
    @include("creditcard.new")

    @include("text.list")
    @include("text.decrypt")
    @include("text.new")

</div>
<script src="/js/all.js"></script>
@endsection
