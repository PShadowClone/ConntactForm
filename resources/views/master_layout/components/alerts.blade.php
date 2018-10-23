@if(session()->has(SUCCESS))
    <div class="alert alert-success">
        {{session()->get(SUCCESS)}}
    </div>
@elseif(session()->has(ERROR))
    <div class="alert alert-error">
        {{session()->get(ERROR)}}
    </div>
@endif