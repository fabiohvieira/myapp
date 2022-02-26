@extends('layouts.app')


@section('content')

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">@lang('users.users')</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 pb-3">
                    <a href="{{ route('users.create') }}" class="btn btn-success float-right"><i class="fa fa-eye"></i> @lang('users.new_user')</a>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>@lang('users.id')</td>
                    <td width="70%">@lang('users.name')</td>
                    <td></td>
                </tr>

                @foreach ($users as $user)
                     <tr>
                        <td align="center">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td align="center">
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> @lang('crud.view')</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> @lang('crud.edit')</a>
                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> @lang('crud.delete')</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {{$users->links()}}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

@stop