<?php 
    if(strtolower($role) === "student"){
?>
<!-- List of Recent Uploads -->
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col m8 s12">
                <h4 class="w_baseBlue_text">Recent Notifications</h4>
                <div class="row" id="notifications">
                    <ul class="collapsible"></ul>
                </div>
            </div>
            <div class="col m4 s12 card -panel hoverable">
                <div class="" id="calendar"></div>
            </div>
        </div>

        <!-- List of Recent Uploads -->
        <div class="row">
            <div class="col s10 offset-s1 m12">
                <h4 class="w_baseBlue_text">Enrolled Courses</h4>

                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/ap-chem241.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=AP-CHEm241' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons  w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Applied Chemistry (AP-CHEm241)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/lit-eng246.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=Lit-ENG246' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Literature in English (Lit-ENG246)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/bs-mat248.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=BS-MAT248' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons  w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Mathematics (BS-MAT248)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
else{
?>
<div class="row">
            <div class="col m8 s12">
                <h4 class="w_baseBlue_text">Recent Notifications</h4>
                <div class="row">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header w_baseBlue_text">
                                <i class="material-icons">chevron_right</i>
                                A new lesson has been added for all students taking Applied Chemistry (AP-CHEm241)
                                <span class="badge">
                                    <i class="material-icons">delete</i>
                                </span>
                            </div>
                            <div class="collapsible-body w_accentOrange_text w_baseBlue">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum non rerum nihil
                                    nulla
                                    voluptas optio neque quaerat quod autem, a minus reiciendis suscipit eius provident
                                    id
                                    perferendis nesciunt tenetur. Cupiditate.</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header w_baseBlue_text">
                                <i class="material-icons">chevron_right</i>
                                The System is scheduled to undergo maintenance today.
                                <span class="badge">
                                    <i class="material-icons">delete</i>
                                </span>
                            </div>
                            <div class="collapsible-body w_accentOrange_text w_baseBlue">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum non rerum nihil
                                    nulla
                                    voluptas optio neque quaerat quod autem, a minus reiciendis suscipit eius provident
                                    id
                                    perferendis nesciunt tenetur. Cupiditate.</span>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header w_baseBlue_text">
                                <i class="material-icons">chevron_right</i>
                                Remember to keep your password safe!
                                <span class="badge">
                                    <i class="material-icons">delete</i>
                                </span>
                            </div>
                            <div class="collapsible-body w_accentOrange_text w_baseBlue">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum non rerum nihil
                                    nulla
                                    voluptas optio neque quaerat quod autem, a minus reiciendis suscipit eius provident
                                    id
                                    perferendis nesciunt tenetur. Cupiditate.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col m4 s12">
                <div id="calendar"></div>
            </div>
        </div>
<div class="row">
    <div class="col s10 offset-s1 m12">
        <h4 class="w_baseBlue_text">My Courses</h4>

        <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/ap-chem241.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=AP-CHEm241' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons  w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Applied Chemistry (AP-CHEm241)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/lit-eng246.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=Lit-ENG246' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Literature in English (Lit-ENG246)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="../../../page-includes/img/bs-mat248.jpg">
                                <a target='_blank' href='/members/dashboard/view-course.php?crs_code=BS-MAT248' class="btn-floating halfway-fab waves-effect waves-light w_baseBlue">
                                    <i class="material-icons  w_accentOrange_text">more_horiz</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <span class="card-title w_baseBlue_text"><b>Mathematics (BS-MAT248)</b></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

<?php
}
?>