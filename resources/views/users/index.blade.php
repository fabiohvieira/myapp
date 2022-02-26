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
          <table class="table table-bordered">
              <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Last Access</td>
              </tr>

              @foreach ($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td></td>
                 </tr>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

@stop