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
              <form>
                <!-- Id (hidden field for editing existing items) -->
                <div class="form-group">
                    <label for="taskId">Identifiant</label>
                    <input type="text" class="form-control" id="taskId" name="taskId" placeholder="Enter Id" readonly>
                </div>
            
                <!-- Name -->
                <div class="form-group">
                    <label for="taskName">Nom<span class="text-red">*</span></label>
                    <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter Name">
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label for="taskDescription">Description</label>
                    <textarea id="description" name="description"></textarea>
                </div>   
          
            
                <!-- Tasks (optional, as it seems to be generated automatically) -->
                <!-- <div class="form-group">
                    <label for="tasks">Tasks</label>
                    <input type="text" class="form-control" id="tasks" name="tasks" placeholder="Enter Tasks">
                </div> -->
            
                <!-- Action buttons -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="button" href="GestionTaches.html" class="btn btn-secondary" id="clearForm">Clear</a>
                </div>
            </form>
            </div>
        </div>
        
    <!-- Footer (Optional) -->
    <footer class="main-footer">
        <!-- Add your footer content here -->
    </footer>
</div>
@endsection
