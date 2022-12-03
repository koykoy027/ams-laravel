<form id="settings-general">
    <h3>General information</h3>
    <hr/>

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="name">Name</label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
            <small class="text-muted">Help people discover your account by using the name you're known by: either your full name, nickname, or business name.</small>
        </div>
    </div>

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="email">Email</label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
            <small class="text-muted">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem sint odio ducimus labore! Obcaecati quasi qui corrupti aperiam.</small>
        </div>
    </div>

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="student-number">Student number</label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="student-number" value="" readonly>
            <small class="text-muted">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem sint odio ducimus labore! Obcaecati quasi qui corrupti aperiam.</small>
        </div>
    </div>    

    <div class="row mb-3"> 
        <div class="col-md-2">
            <label for="website">Website</label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="website" value="{{ Auth::user()->website }}">
            <small class="text-muted">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem sint odio ducimus labore! Obcaecati quasi qui corrupti aperiam.</small>
        </div>
    </div>    

    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#btnGeneralInformation">
        Save changes
    </button>    
</form>