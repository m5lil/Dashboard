@extends('backend.layout')



@section('content')


<div class="ui blue stacked segment">

  <transition name="slide-fade" mode="out-in">
    <keep-alive>
      <router-view class="container"></router-view>
    </keep-alive>
  </transition>
</div>


@endsection

@push('scripts')

{{-- <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
tinymce.init({
  selector: '#tinymce'
});
</script> --}}

<script src='/js/tinymce/tinymce.min.js'></script>
<script src='/js/tinymce/jquery.tinymce.min.js'></script>
<script>

tinymce.init({
  selector: '#mytextarea',
});


</script>



@endpush
