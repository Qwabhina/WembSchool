<div class="row">
    <h4 class="center w_baseBlue_text">Upload File</h4>
    <form method="get" class="col s10 push-s1">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">File Name</label>
            </div>
        </div>

        <!-- Post Content -->
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">rate_review</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Description</label>
            </div>
            <!-- Submit Button -->
            <div class="col s10 offset-s1">
                <button type='button' id="form_btn" name='btn_login'
                    class='col m4 s8 w_btn btn-large waves-effect w_accentOrange_text w_baseBlue'>
                    <i class="material-icons">cloud_upload</i> Upload
                </button>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <h4 class="center w_baseBlue_text">Recent Uploads</h4>
    <div class="col s12">
    <table class="striped">
        <thead>
          <tr>
              <th>File Name</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Course Outline for Matematics</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis minus officiis omnis sunt voluptates voluptatibus.</td>
            <td>
                <i class="material-icons w_baseBlue_text">open_in_new</i>
                <i class="material-icons red-text text-darken-3">delete</i>
            </td>
          </tr>
          <tr>
            <td>Reading Material for AP-CHEm241</td>
            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis minus officiis omnis sunt voluptates voluptatibus.</td>
            <td>
                <i class="material-icons w_baseBlue_text">open_in_new</i>
                <i class="material-icons red-text text-darken-3">delete</i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>