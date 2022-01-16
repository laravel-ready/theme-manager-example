@if (isset($errors) && $errors->any())
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="box">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
