@extends('layouts.base')

@section('content')
    @vite('resources/scss/premium.scss')
    @vite('resources/js/premium-verify.js')
    @include('includes.title', ['h1' => "Thank You For Subscribing!"])
    <div class="row g-0">
        <div class="col-12 text-center p-5">
            <div class="alert alert-success w-75 m-auto">
                <i class="fa fa-exclamation-circle"></i> Verifying purchase.<br/><br/>
                <b>DO NOT CLICK THE BACK BUTTON OR CLOSE THIS WINDOW.</b><br /><br />
                If you are having problems, please contact us on our <a target="_blank" href="https://discord.gg/brainbox">Discord Support Server</a>.
            </div>
        </div>
    </div>
@endsection
