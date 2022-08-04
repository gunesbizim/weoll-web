@extends('layouts.master', [
    'title' => 'Toyzzshop',
    'metadesc' => 'Weoll ile çalışan gelişimini destekleyebilecek ve gelişimiş bir gözetim sağlayabilecek bir kurumsal portal kurmak, çalışanların değişim oranını azaltmada kilit faktör oldu.',
])

@section('content')
    @include('components.successHero')
    <div class="spacer-80"></div>
    @include('components.success-needs')
@endsection
