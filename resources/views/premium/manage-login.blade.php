@extends('layouts.base')

@section('content')
    @vite('resources/scss/premium.scss')
    @if (!Auth::id())
        @include('includes.title', ['h1' => 'Premium Subscription - Please log in'])
        <div class="row g-0">
            <div class="text-center p-3 col-12">
                <div class="text-center mb-4">
                    <img src="/img/guard.png" style="border-radius: 5px; box-shadow: #333 2px 2px 2px" alt="Medieval fantasy guard Standing at gatehouse holding a torch" title="Who Goes There?" />
                </div>
                <div class="text-center w-50 ms-auto me-auto">
                    To manage your premium subscription, you must log in. Please click Log In below to access this section.
                </div>
            </div>
            <div class="col-12 text-center p-3">
                <a class="subscribe-button btn btn-primary" href="/login"><i class="fa-brands fa-discord"></i> Log In with Discord</a>
            </div>
        </div>
    @else
        <meta http-equiv="refresh" content="0; /manage-subscription"/>
    @endif
@endsection