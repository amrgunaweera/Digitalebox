<?php include 'includes/header.php'; ?>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.text-editor' });</script>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Create Message Template
                    </div>
                    <div class="desc">
                        Add Email/ Twitter/ Facebook message templates
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <a href="">Message Templates</a> / <span>Create Template</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">


                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Template Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Mass Message</option>
                                        <option>Single Message</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email Subject</label>
                                    <input type="text" class="form-control" id="" placeholder="Name">
                                </div>
                                <div class="form-group col-md-12 col-xl-9">
                                    <label>Email Content</label>
                                    <textarea class="form-control text-editor" placeholder="Description"></textarea>
                                    <div class="font10">Template for send Emails</div>
                                </div>
                                <div class="form-group pl-xl-3 pt-xl-4 col-md-12 col-xl-3">
                                    <label>Available Keywords</label>
                                    <div>
                                        <div class="badge badge-primary">{registrationUrl}</div> - Registration URL
                                    </div>
                                    <div>
                                        <div class="badge badge-primary">{prospectName}</div> - Prospector name
                                    </div>
                                    <div>
                                        <div class="badge badge-primary">{registrationUrl}</div> - Registration URL
                                    </div>
                                    <div>
                                        <div class="badge badge-primary">{prospectName}</div> - Prospector name
                                    </div>

                                    <label class="mt-3">Available Custom Keywords</label>
                                    <div>
                                        <div class="badge badge-primary">{cDropdown}</div>
                                        <div class="badge badge-primary">{cText Area}</div>
                                        <div class="badge badge-primary">{cMiddle Name}{}</div>
                                        <div class="badge badge-primary">{cDropdown}</div>
                                        <div class="badge badge-primary">{cText Area}</div>
                                        <div class="badge badge-primary">{cMiddle Name}{}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Twitter Message</label>
                                    <textarea class="form-control" placeholder="Twitter Message"></textarea>
                                    <div class="font10">[ 140 ]</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>SMS Message</label>
                                    <textarea class="form-control" placeholder="SMS Message"></textarea>
                                    <span class="font10">[ 160 ]</span>
                                    <span class="font10"><small>SMS are limited to 160 characters, if you use accents such as "é" "è" "à" "ù" "ô" SMS will be limited to 70 characters</small></span>
                                </div>
                            </div>
                            <div class="form-row text-left text-md-right">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="button" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

    });
</script>