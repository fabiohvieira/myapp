<form action="{{ route('users.store') }}" method="post" class="form-horizontal">
@csrf
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">@lang('users.name')</label>
                <div class="col-md-6">
                    <input type="text" name="name" id="" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">@lang('users.user')</label>
                <div class="col-md-3">
                    <input type="text" name="user" id="" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">@lang('users.password')</label>
                <div class="col-md-3">
                    <input type="password" name="password" id="" class="form-control">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>
