<?php 
    if(strtolower($role) === "student"){
?>

<div class="row">
    <h4 class="center w_baseBlue_text">My Assessments</h4>
    <div class="col s12">
        <ul class="collapsible z-depth-0">
            <li>
                <div class="collapsible-header">Mid-Semester Quiz
                    <span class="badge">
                        <i class="material-icons w_baseBlue_text right">open_in_new</i>
                    </span></div>
                <div class="collapsible-body">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur numquam architecto minima cupiditate earum rem quia iusto voluptates at magnam porro sit molestias explicabo quod ipsa, doloribus, deleniti atque sequi.</span>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    Assignment on Vectors 
                    <span class="badge">
                        <i class="material-icons w_baseBlue_text right">open_in_new</i>
                    </span>
                </div>
                <div class="collapsible-body">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur numquam architecto minima cupiditate earum rem quia iusto voluptates at magnam porro sit molestias explicabo quod ipsa, doloribus, deleniti atque sequi.</span>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php 
}elseif(strtolower($role) === "tutor"){
?>
<div class="row">
    <h4 class="center w_baseBlue_text">Create Assessment</h4>
    <form method="get" class="col s12">
        <div class="row">
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">mode_edit</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Assessment Name</label>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">list</i>
                <select>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Quiz</option>
                    <option value="2">Test</option>
                    <option value="3">Exam</option>
                    <option value="3">Take-Home</option>
                </select>
                <label>Type</label>
            </div>
        </div>

        <!-- Post Content -->
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">rate_review</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Assessment Description</label>
            </div>
            <!-- Submit Button -->
            <div class="col s10 offset-s1">
                <button type='button' id="form_btn" name='btn_login'
                    class='col m4 s8 w_btn btn-large waves-effect w_accentOrange_text w_baseBlue'>Create</button>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <h4 class="center w_baseBlue_text">Recent Assessments</h4>
    <div class="col s12">
        <ul class="collapsible z-depth-0">
            <li>
                <div class="collapsible-header">Mid-Semester Quiz
                    <span class="badge">
                        <i class="material-icons w_baseBlue_text right">open_in_new</i>
                    </span></div>
                <div class="collapsible-body">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur numquam architecto minima cupiditate earum rem quia iusto voluptates at magnam porro sit molestias explicabo quod ipsa, doloribus, deleniti atque sequi.</span>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    Assignment on Vectors 
                    <span class="badge">
                        <i class="material-icons w_baseBlue_text right">open_in_new</i>
                    </span>
                </div>
                <div class="collapsible-body">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur numquam architecto minima cupiditate earum rem quia iusto voluptates at magnam porro sit molestias explicabo quod ipsa, doloribus, deleniti atque sequi.</span>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php }else{ ?>
    
    
<?php } ?>