<label for="role" >{{ __('Assign Role') }}</label>
<div class="d-grid">

    <div class="d-flex align-items-center" >
          <i class="fa fa-angle-right mx-4" > </i>
          <input class=" mx-4" value="" type="checkbox" id="dashboard" name="roles[]" >      
          <label class="mxy-4  mx-4" for="dashboard" >{{ __('Dashboard') }}</label>
    </div>

    <div class="d-flex align-items-center" >
        <i class="fa fa-angle-right mx-4" > </i>
        <input class=" mx-4" type="checkbox" id="sellers" name="roles[]" >      
        <label class="mxy-4  mx-4" for="sellers" >{{ __('Sellers') }}</label>
    </div>

    <div>
        <div class="d-flex align-items-center" >
            <i class="fa fa-angle-right mx-4" > </i>
            <input class=" mx-4" type="checkbox" id="categories" name="roles[]" >      
            <label class="mxy-4  mx-4" for="categories" >{{ __('Categories') }}</label>
        </div>
    
        <div class="mx-4" >
                {{-- categories items started--}} 
                <div class="d-flex align-items-center" >
                    <i class="fa fa-angle-right mx-4" > </i>
                    <input class=" mx-4" type="checkbox" id="categories-add" name="roles[]" >      
                    <label class="mxy-4  mx-4" for="categories-add" >{{ __('Add Category') }}</label>
                </div>
                <div class="d-flex align-items-center" >
                    <i class="fa fa-angle-right mx-4" > </i>
                    <input class=" mx-4" type="checkbox" id="categories-edit" name="roles[]" >      
                    <label class="mxy-4  mx-4" for="categories-edit" >{{ __('Edit Category') }}</label>
                </div>
                <div class="d-flex align-items-center" >
                    <i class="fa fa-angle-right mx-4" > </i>
                    <input class=" mx-4" type="checkbox" id="categories-delete" name="roles[]" >      
                    <label class="mxy-4  mx-4" for="categories-delete" >{{ __('Delete Category') }}</label>
                </div>
                {{-- categories items ended--}}    
        </div>    
    </div>
    
    <div>
        <div class="d-flex align-items-center" >
            <i class="fa fa-angle-right mx-4" > </i>
            <input class=" mx-4" type="checkbox" id="requests" name="roles[]" >      
            <label class="mxy-4  mx-4" for="requests" >{{ __('Requests') }}</label>
        </div>
        <div class="mx-4">
             {{-- requests items started--}} 
            
            <div class="d-flex align-items-center" >
                <i class="fa fa-angle-right mx-4" > </i>
                <input class=" mx-4" type="checkbox" id="requests-delete" name="roles[]" >      
                <label class="mxy-4  mx-4" for="requests-delete" >{{ __('Delete Request') }}</label>
            </div>
            {{-- requests items ended--}}  
        </div>
    </div>

    <div>
        <div class="d-flex align-items-center" >
            <i class="fa fa-angle-right mx-4" > </i>
            <input class=" mx-4" type="checkbox" id="admins" name="roles[]" >      
            <label class="mxy-4  mx-4" for="admins" >{{ __('Admins') }}</label>
        </div>
        <div class="mx-4" >
            {{-- admins items started--}} 
            <div class="d-flex align-items-center" >
                <i class="fa fa-angle-right mx-4" > </i>
                <input class=" mx-4" type="checkbox" id="admins-add" name="roles[]" >      
                <label class="mxy-4  mx-4" for="admins-add" >{{ __('Add Admin') }}</label>
            </div>
            <div class="d-flex align-items-center" >
                <i class="fa fa-angle-right mx-4" > </i>
                <input class=" mx-4" type="checkbox" id="admins-edit" name="roles[]" >      
                <label class="mxy-4  mx-4" for="admins-edit" >{{ __('Edit Admin') }}</label>
            </div>
            <div class="d-flex align-items-center" >
                <i class="fa fa-angle-right mx-4" > </i>
                <input class=" mx-4" type="checkbox" id="admins-delete" name="roles[]" >      
                <label class="mxy-4  mx-4" for="admins-delete" >{{ __('Delete Admin') }}</label>
            </div>
            {{-- admins items ended--}}    
    </div>    
    </div>


</div>
<br>