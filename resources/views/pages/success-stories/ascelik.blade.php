@extends('layouts.master', [
    'title' => 'Asçelik',
    'metadesc' => 'Weoll ile departmanlar arası iletişimi artırılmış, ürün takibi hızlandırılmış, 2020 yılında %3,39 olan ıskarta oranı, 2021 yılında %2,14 e düşmüştür.',
])

@section('content')
    @include('components.successHero')
    <div class="spacer-80"></div>
    @include('components.success-needs')
@endsection
