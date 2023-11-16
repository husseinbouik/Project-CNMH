@extends('base')
@section('title','Task managment')
@section('content')
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> ajouter/modifier une tache</h3>
            </div>
            <div class="card-body">
              <form  method="POST" action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}">
                <!-- Id (hidden field for editing existing items) -->
                <div class="form-group">
                    <label for="taskId">Identifiant</label>
                    <input type="text" class="form-control" id="taskId" name="taskId" placeholder="Enter Id"  value="{{ isset($task) ? $task->id : old('id') }}"  readonly>
                </div>
            
                <!-- Name -->
                <div class="form-group">
                    <label for="taskName">Nom<span class="text-red">*</span></label>
                    <input type="text" class="form-control" id="taskName" name="name" placeholder="Enter Name" value="{{ isset($task) ? $task->name : old('name') }}">
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label for="taskDescription">Description</label>
                    <textarea id="description" name="description" >{{ isset($task) ? $task->description : old('description') }}</textarea>
                </div>   

                <!-- Action buttons -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ isset($task) ? 'Update Task' : 'Add Task' }}</button>
                    <a type="button" href="/" class="btn btn-secondary" id="clearForm">Clear</a>
                </div>
            </form>
            </div>
        </div>

</div>

@endsection
