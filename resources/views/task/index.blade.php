@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task -->
                <div class="card">
                    <div class="card-header">
                        @lang('viewTask.new')
                    </div>

                    <div class="card-body">
                        <!-- New Task Form -->
                        <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
                        @csrf

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">@lang('viewTask.task')</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-light">
                                    <i class="fa fa-btn fa-plus"></i> @lang('action.add') @lang('viewTask.task')
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <br>

                <!-- Current Tasks -->
                <div class="card">
                    @if (count($tasks) > 0)
                    <div class="card-header">
                        @lang('viewTask.current')
                    </div>

                    <div class="card-body">
                        <table class="table table-striped task-table">
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->name }}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i> @lang('action.delete')
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div>
                        <p>@lang('There is no task! Create the new one.')</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
