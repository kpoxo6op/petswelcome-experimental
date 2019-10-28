@extends('layouts.app')
@section('content')
    @include('partials.page-header')
    {!! get_search_form(false) !!}
    @include('partials.recently-added')
    @php echo "footer menu<br>\n"; @endphp
@endsection