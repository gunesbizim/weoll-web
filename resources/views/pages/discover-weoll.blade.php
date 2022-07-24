@extends('layouts.master', [
    'title' => 'Weoll’u Keşfet',
    'metadesc' => 'Dijital dönüşüm gerçekleştiren kurumların yeniden yapılanma süreçlerinde, onlara seçim özgürlüğü tanıyor; kurumların kendine has iş yapış biçimlerine uyum sağlıyor, kurumsal iş ve iletişim süreçlerinin verimliliğini artırıyoruz.',
])

@section('content')
    @include('components.discover-hero')

    @include('components.text-iconboxes')
    <div class="spacer-110"></div>
    @include('components.image-text')
    <div class="spacer-110"></div>
    @include('components.tab-only-icon')
    <div class="spacer-110"></div>
@endsection
