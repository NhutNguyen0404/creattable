@extends("install.configdata")
@section('content')
 @foreach($template as $template_item )
    @include("install.".$template_item)
 @endforeach
@endsection
