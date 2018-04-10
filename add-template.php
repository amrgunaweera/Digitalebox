<?php include 'includes/header.php'; ?>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <?php include 'includes/config-panel.php'; ?>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Add Zip File
                    </div>
                    <div class="desc">
                        Import Mass people details via ".zip" file
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Advanced Bulk Insert</a> / <span>Add zip file</span>
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
                                    <label for="exampleFormControlSelect1">Country</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>France</option>
                                        <option>United states</option>
                                        <option>United Kingdom</option>
                                        <option>Sri Lanka</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Supporter</option>
                                        <option>Prospect</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Upload file</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#fileFormat">Sample Format</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-left text-md-right">
                                <div class="form-group col-md-12">
                                    <button type="submit" onclick="location.href='advanced-bulk-insert.php'" class="btn btn-primary">Upload</button>
                                    <button type="button" onclick="location.href='advanced-bulk-insert.php'" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="fileFormat" tabindex="-1" role="dialog" aria-labelledby="fileFormat" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Sample File Format</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <h6><strong>A CSV file should be zipped and uploaded with any of the below attributes.</strong></h6>
                                            <br>


                                            <p class="help-block">
                                                &lt;FIRST_NAME&gt;,&lt;LAST_NAME&gt;,&lt;EMAIL&gt;,&lt;MOBILE&gt;,&lt;STREET_ADDRESS&gt;,&lt;ZIP&gt;,&lt;CITY&gt;,&lt;GENDER&gt;,&lt;BIRTHDAY&gt;,&lt;NOTES&gt;,&lt;KEYWORDS&gt;<br>
                                                <strong>GENDER</strong>:Unknown-0, Female-1, Male-2.<br>
                                                <strong>MOBILE</strong>:Should be in international format<br>
                                                <strong>BIRTHDAY</strong>:YYYY-MM-DD<br>
                                                <strong>ZIP</strong>:14390<br>
                                                <strong>STREET_ADDRESS</strong>:27 Avenue Pasteur<br>
                                                <strong>CITY</strong>:Cabourg<br>
                                                <strong>NOTES</strong>: Text<br>
                                                <strong>KEYWORDS</strong>: Should be in CSV format. Ex: post,article,android,samsung<br>
                                                <strong>Unknown Fileds</strong>:Enter N/A if you don`t know exact value of it. Ex: Daniel,Vetori,aniel@yahoo.com,N/A,N/A,N/A,2,N/A<br>
                                                <strong>Maximum Number of Rows</strong>:25000
                                            </p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
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