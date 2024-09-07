@extends('layouts.base')

@section('content')
    @vite('resources/scss/premium.scss')
    <div class="float-end"><a class="btn btn-danger" href="/logout">Log Out</a></div>
    @include('includes.title', ['h1' => 'Manage Premium Subscription'])
    <div class="row g-0 mt-5">
        <table class="premiumSubs">
            <thead>
                <tr>
                    <th>Subscription ID</th>
                    <th>Plan Type</th>
                    <th style="width: 80px">Active?</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th style="width: 120px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->subscription_id }}</td>
                        <td>{{ $subscription->plan->name }}</td>
                        <td><i class="fa fa-fw {{ $subscription->active ? 'fa-check-circle success' : 'fa-times-circle danger' }}"></i></td>
                        <td>{{ (new \Carbon\Carbon($subscription->since))->format('d-M-Y') }}</td>
                        <td>{{ $subscription->cancel_date ? (new \Carbon\Carbon($subscription->cancel_date))->format('d-M-Y') : '-' }}</td>
                        <td>
                            @if ($subscription->active)
                                <a class="btn btn-primary" href="https://brainboxdotcc.chargebeeportal.com/">Manage</a>&nbsp;
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">You have no active subscriptions! <a href="/">Click here to subscribe</a>.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if (count($subscriptions) > 0)
        <!-- {{ count($subscriptions) }} -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new DataTable('.premiumSubs');
            });
        </script>
    @endif
@endsection