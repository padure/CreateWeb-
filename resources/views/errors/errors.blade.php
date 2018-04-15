@if ($errors->any())
<style>
    .errors{
    list-style-type: none;
}
</style>
        <ul class="alert alert-dark errors alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    @endif