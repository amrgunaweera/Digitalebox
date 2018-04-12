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
                        Field Mapping
                    </div>
                    <div class="desc">
                        Preview File for Mapping
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Advanced Bulk Insert</a> / <span>Field Mapping</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <h6 class="mb-4">Please select the appropriate value from the list for mapping.</h6>

                        <form>

                            <div class="table-wrap">
                                <table class="table table-hover table-mapping">
                                    <thead>
                                    <tr>
                                        <th scope="col">Field From File</th>
                                        <th width="100" class="text-center"><i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i></th>
                                        <th scope="col">Map to</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">First Name <span class="form-feild-info">( ex: John )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Last Name <span class="form-feild-info">( ex: Smith )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Email <span class="form-feild-info">( ex: johnsmith@gmail.com )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Mobile <span class="form-feild-info">( ex: 000 000 0000 )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Street Address <span class="form-feild-info">( ex: Main road, Down town )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Zip Code <span class="form-feild-info">( ex: A00B2 )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">City <span class="form-feild-info">( ex: Paris )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Gender <span class="form-feild-info">( ex: Male )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Date of birth <span class="form-feild-info">( ex: 1990-12-31 )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Notes <span class="form-feild-info">( ex: Sample note )</span></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control mapping-field" id="">
                                                <option selected>- Select -</option>
                                                <option>FIRST_NAME</option>
                                                <option>LAST_NAME</option>
                                                <option>EMAIL</option>
                                                <option>MOBILE</option>
                                                <option>STREET_ADDRESS</option>
                                                <option>ZIP</option>
                                                <option>CITY</option>
                                                <option>GENDER</option>
                                                <option>BIRTHDAY</option>
                                                <option>NOTES</option>
                                                <option>KEYWORDS</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg mt-3"></i>
                                        </td>
                                        <td>
                                            <div class="mt-2 font14">Keywords <span class="form-feild-info">( ex: Keyword 1, Keyword 2, Keyword 3 )</span></div>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" data-target="#mapPreview" data-toggle="modal" class="btn btn-primary mb-3">Preview</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-left text-md-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" onclick="location.href='add-zip-file.php'" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="mapPreview" tabindex="-1" role="dialog" aria-labelledby="fileFormat" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Sample File Format</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="table-wrap">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Field From File</th>
                                                        <th scope="col">Sample data from 1st record</th>
                                                        <th width="100" class="text-center"><i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i></th>
                                                        <th scope="col">Map to</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td>
                                                            FIRST_NAME
                                                        </td>
                                                        <td>Eléonore</td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">First Name <span class="form-feild-info">( ex: John )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            LAST_NAME
                                                        </td>
                                                        <td>
                                                            ABAD HERRADA
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Last Name <span class="form-feild-info">( ex: Smith )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            EMAIL
                                                        </td>
                                                        <td>eléonore@gmail.com</td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Email <span class="form-feild-info">( ex: johnsmith@gmail.com )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            MOBILE
                                                        </td>
                                                        <td>
                                                            3354 5465 6546
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Mobile <span class="form-feild-info">( ex: 000 000 0000 )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            STREET_ADDRESS
                                                        </td>
                                                        <td>
                                                            33 Rue J. Catayée
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Street Address <span class="form-feild-info">( ex: Main road, Down town )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            ZIP_CODE
                                                        </td>
                                                        <td>
                                                            97299
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Zip Code <span class="form-feild-info">( ex: A00B2 )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            CITY
                                                        </td>
                                                        <td>
                                                            Cayenne
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">City <span class="form-feild-info">( ex: Paris )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            GENDER
                                                        </td>
                                                        <td>
                                                            Male
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Gender <span class="form-feild-info">( ex: Male )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            BIRTHDAY
                                                        </td>
                                                        <td>
                                                            1987-02-04
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Date of birth <span class="form-feild-info">( ex: 1990-12-31 )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            NOTES
                                                        </td>
                                                        <td>
                                                            N/A
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Notes <span class="form-feild-info">( ex: Sample note )</span></div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            KEYWORDS
                                                        </td>
                                                        <td>
                                                            API, Test, Digitalebox
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-long-arrow-right mapping-arrow fa-lg"></i>
                                                        </td>
                                                        <td>
                                                            <div class="font14">Keywords <span class="form-feild-info">( ex: Keyword 1, Keyword 2, Keyword 3 )</span></div>
                                                        </td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
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

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

    });
</script>