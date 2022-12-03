<form id="settings-password">
    <h3>Change password</h3>
    <hr/>

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="old-password">Old password</label>
        </div>
        <div class="col-md">
            <input type="password" class="form-control" id="old-password" value="">            
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2">
            <label for="new-password">New password</label>
        </div>
        <div class="col-md">
            <input type="password" class="form-control" id="new-password" value="">            
        </div>
    </div>

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="confirm-password">Confirm new password</label>
        </div>
        <div class="col-md">
            <input type="password" class="form-control" id="confirm-password" value="">            
        </div>
    </div>    

 

    
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#btnChangePassword">
        Submit changes
    </button>
</form>