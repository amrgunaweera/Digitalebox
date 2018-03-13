<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/minimal.css">

    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="css/main.css">
    <style>
        body{
            padding: 20px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-md-12">

        <form>
            <div class="">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control">
                        <option>- Select -</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <div class="input-group date" id="dob" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#dob" placeholder="1990-01-01"/>
                        <div class="input-group-append" data-target="#dob" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Street Address</label>
                    <input type="text" class="form-control" id="" placeholder="Street Address">
                </div>
                <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" class="form-control" id="" placeholder="Postal Code">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control">
                        <option value="">- Select -</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>

        </form>

    </div>
</div>

<script src="js/vendor/jquery-3.3.1.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/vendor/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="js/moment.min.js"></script>
<script src="js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>

</body>
</html>




