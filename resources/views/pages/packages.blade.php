@extends('layouts.master')

@section('content')
    <div class="container packages">
        <div class="spacer-230"></div>
        <div class="row">
            <h1 class="text-center">{{ $packages->title }}</h1>
            <div class="spacer-80"></div>
        </div>
        <div class="row flex-v-center flex-h-center d-flex">
            <div class="col-md-6 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    @foreach ($packages->packages as $package)
                        <div class="col-md-6 col-xs-12 package">
                            <h2 class="{{ $loop->first ? 'blue' : 'purple' }}">{{ $package->title }}</h2>
                            <p>{{ $package->info1 }}</p>
                            <p>{{ $package->info2 }}</p>
                        </div>
                    @endforeach
                </div>

            </div>
            @foreach (collect($packages->allFeatures)->groupBy('mainFeature') as $mainFeatureId => $arr)
                <div class="row mainfeature">
                    <p>{{ $packages->mainFeatures->{$mainFeatureId} }}</p>
                </div>
                @foreach ($arr as $feature)
                    <div class="row no-padding">
                        <div class="col-md-6 subfeature"> {{ $feature->feature }}</div>
                        <div class="col-md-6 d-flex">
                            @php
                                $p1 = '1';
                                $p2 = '2';
                            @endphp
                            <div class="col-md-6 text-center subfeature width-fix spacing-fix">
                                {{ $feature->packageAvailibility->{$p1} ? 'check' : 'uncheck' }}</div>
                            <div class="col-md-6 text-center subfeature width-fix">
                                {{ $feature->packageAvailibility->{$p2} ? 'check' : 'uncheck' }}</div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
