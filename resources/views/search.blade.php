@extends('layouts.app')

@section('content')
<script type="text/javascript">
$(document).ready(function () {
    $("#search").keyup(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                            console.log(CSRF_TOKEN);
                            $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': CSRF_TOKEN
  }
});
        $.post('/home/search', { search: $('#search').val(), _token: CSRF_TOKEN }, function(data) {
                    console.log(data);
            $('.offer').html('');
            $.each(data, function(i, offer) {
                var c = '<div class="list-item-with-icon row">\n\
                             <div class="col-md-8">\n\
                               <h4><a href="/offer/'+offer.id+'">'+offer.price+'</a></h4>\n\
                             <div>'+offer.description+'</div>\n\
                           </div>';
                 $('.offer').append(c);
            });
        });
    })
});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="card-title">@lang('messages.search')</h4></div>
                <div class="card-body">
                    <input type="text" id="search">
                    <div class="card-text offer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
