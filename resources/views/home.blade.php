@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <!-- route outlet -->
                <router-view></router-view>

                <div class="panel-heading">Painel de controle</div>

                <div class="panel-body">
                    Navegue pelas opções do menu.
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/all.js"></script>
@endsection
