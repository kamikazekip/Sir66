@section('content')
<div id="frontPage">
    <div id="mainFrontPage">
        {{View::make('partials/pages/post.posts')}}
    </div>
    <div class="loading"><img src="images/overig/loading.gif" class="loadingImage" /></div>
</div>

<script type="text/javascript">
    $( document ).ready(function() {
        fadeIn("#frontPage", 1000);
    });
    
    window.onscroll = function(evt){
        autoload('HalloffameComposer');
    };
</script>


@stop