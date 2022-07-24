@extends('layouts.master', [
    'title' => 'Size En Uygun Paket Hangisi?',
    'metadesc' => 'Weoll olarak, kurumunuzun iş ve iletişim süreçleri ihtiyaçlarınızı keşfetmenizi sağlıyor, bu ihtiyaçlara en uygun dijital çözümleri seçebileceğiniz bir deneyim alanı açıyoruz.',
])

@section('content')
    <div class="container packages">
        <div class="spacer-230"></div>
        <div class="row">
            <h1 class="text-center">{{ $packages->title }}</h1>
            <div class="spacer-80"></div>
        </div>
        <div class="row flex-v-center flex-h-center d-flex packages-container">
            <div class="col-md-6 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    @foreach ($packages->packages as $package)
                        <div class="col-md-6 col-xs-12 package package-button {{ $loop->first ? 'selected btnone' : 'btntwo' }}"
                            data-id="{{ $loop->first ? '1' : '2' }}">
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
                        <div class="col-md-6 subfeature packages-mobile-col-1"> {{ $feature->feature }}</div>
                        <div class="col-md-6 d-flex packages-mobile-col-2">
                            @php
                                $p1 = '1';
                                $p2 = '2';
                            @endphp
                            <div
                                class="col-md-6 text-center subfeature width-fix spacing-fix {{ $feature->packageAvailibility->{$p1} ? 'package pone active' : ' package active pone' }}">
                                {!! $feature->packageAvailibility->{$p1}
                                    ? '<img src="/assets/img/icons/check.svg">'
                                    : '<div class="uncheck"></div>' !!}
                            </div>
                            <div
                                class="col-md-6 text-center subfeature width-fix {{ $feature->packageAvailibility->{$p2} ? 'package ptwo' : '' }}">
                                {!! $feature->packageAvailibility->{$p2}
                                    ? '<img src="/assets/img/icons/check-purple.svg">'
                                    : '<div class="uncheck"></div>' !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
            <div class="row no-padding">
                <div class="col-md-6"></div>
                <div class="col-md-6 d-flex no-padding-mobile">
                    <div class="col-md-6 text-center no-padding d-flex spacing-fix w40"> <a class="package-cta first-btn"
                            href="/try-now">Satın Al</a>
                    </div>
                    <div class="col-md-6 text-center no-padding d-flex w60"> <a
                            class="package-cta second-btn enterprise-btn" href="#footer-contact">Enterprise Paketi
                            İncele</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="spacer-110"></div>
@endsection
