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
                        Message Box - Compose
                    </div>
                    <div class="desc">
                        Send message to a user or group of users
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                    <a href="">Home</a> / <a href="">Communication</a> / <a href="">Message Box</a> / <span>Compose</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="message-box-inbox.php">Message Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Compose</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="message-sent-items.php">Sent Items</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Message Details
                                </div>
                            </div>

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="criteria">Criteria</label>
                                        <select id="criteria" class="form-control">
                                            <option>- Select -</option>
                                            <option>Friends</option>
                                            <option>Office</option>
                                            <option>My List</option>
                                        </select>
                                        <div class="form-feild-info">
                                            Note: Message sent only to users with email.
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="d-none d-md-block">&nbsp;</label>
                                        <a href="advanced-search.php" class="btn btn-secondary">Define New Criteria</a>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="criteria">Receivers</label>
                                        <select data-placeholder="Type Name" class="form-control chosen-select" multiple>
                                            <option>Antonia</option>
                                            <option>Bonita</option>
                                            <option>Claudia</option>
                                            <option>Jimmie</option>
                                            <option>Wendi</option>
                                        </select>
                                        <div class="form-feild-info">
                                            Note: List only users with email.
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Subject</label>
                                        <input type="text" class="form-control" placeholder="Email Subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="message">Message</label>
                                        <textarea class="form-control text-editor" id="message" placeholder="Description"></textarea>
                                    </div>

                                </div>
                                <div class="form-row text-left text-md-right">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                        <button type="button" class="btn btn-secondary" onclick="location.href='message-box-inbox.php'">Cancel</button>
                                    </div>
                                </div>

                            </form>

                        </div>
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
        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();

    });
</script>