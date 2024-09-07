<div class="col-xl col-md-6 col-sm-12 plan-outer">
    <div class="plan text-center">
        <h5>{{ $plan->name }}</h5>
        <div class="plan-price">
            {{ $plan->currency == 'GBP' ? '£' : '$' }} {{ sprintf("%0d", $plan->price) }}
        </div>
        <div class="plan-period">
            {{
                match($plan->period . $plan->period_unit) {
                    '1month' => 'per month',
                    '3month' => 'per quarter',
                    '1year' => 'per year',
                    '15year' => 'one-off payment',
                }
            }}
        </div>
        <div class="plan-blurb">
            Applies to <span class="plan-scans">your in-game user</span>, {{ $plan->period == 15 && $plan->period_unit == 'year' ? 'lasts forever!' : 'Continues until cancelled' }}
        </div>
        <div class="plan-subscribe text-center">
            @if(Auth::id())
                <button type="button" data-plan-id="{{ $plan->id }}" class="subscribe-button btn btn-success">
                    <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Subscribe Now
                </button>
            @else
                <form action="/sub-login" method="post">
                    @csrf
                    <button type="submit" class="subscribe-button btn btn-success">
                        <i class="fa-solid fa-sign-in-alt fa-fw"></i>&nbsp;&nbsp;Log In to Subscribe
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
