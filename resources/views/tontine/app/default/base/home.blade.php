@extends('tontine.app.default.base.layout')

@section('page-title', 'Ikimina Cyacu')

@section('section-title', __('tontine.menus.tontine'))

@section('sidebar')
          @include('tontine.app.default.parts.sidebar.menu', ['ajax' => true])
@endsection

@section('content')
          @include('tontine.app.default.pages.tontine.home')
@endsection

@section('script')
<script type="text/javascript">
</script>

@include('tontine.app.default.parts.footer.ajax', compact('jaxonJs', 'jaxonScript', 'jaxonCss'))
@endsection
