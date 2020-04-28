<!-- Form Container -->
<div class="row">
    <h4 class="center w_baseBlue_text">Search Courses</h4>
    <div class="col card z-depth-0 white m10 offset-m1 s10 offset-s1">

        <!-- Search Form -->
        <form class="col offset-s1 s10" method="get" name="search-course-form" id="search-course-form">
            <div class='row'>
                <div class="col s12">
                    <!-- Search Field -->
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">search</i>
                        <input class='validate' type='search' name='search-term' id='search-term'
                            placeholder="Course Title or Code" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="search-results row">
    <div class="col s12">
        <h5>Search Results</h5>
        <ul class="collection search-results-content"></ul>
    </div>
</div>