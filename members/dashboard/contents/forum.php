<div class="row">
    <h4 class="center w_baseBlue_text">Write Post</h4>
    <form method="get" class="col s12">
        <div class="row">
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">mode_edit</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Post Title</label>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">list</i>
                <select>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Question</option>
                    <option value="2">Information</option>
                    <option value="3">Opinion</option>
                </select>
                <label>Category</label>
            </div>
        </div>

        <!-- Post Content -->
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">rate_review</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Post Content</label>
            </div>
            <!-- Submit Button -->
            <div class="col s10 offset-s1">
                <button type='button' id="form_btn" name='btn_login'
                    class='col m4 s8 w_btn btn-large waves-effect w_accentOrange w_baseBlue_text'>Post</button>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <h4 class="center w_baseBlue_text">Recent Posts</h4>
    <div class="col s12">
        <ul class="collapsible z-depth-0">
            <li>
                <div class="collapsible-header"><i class="material-icons">help</i>What is Carbon Compound?</div>
                <div class="collapsible-body">
                    <span><i>Posted by <b>Student</b> on April 28, 2020, 8:32 am</i></span>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">info</i>A little notes on Literary Devices
                </div>
                <div class="collapsible-body">
                    <span><i>Posted by <b>Student</b> on April 27, 2020, 9:12 pm</i></span>
                </div>
            </li>
        </ul>
    </div>
</div>