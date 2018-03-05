<?php include 'includes/header.php'; ?>

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
                        Message Templates
                    </div>
                    <div class="desc">
                        Templates for mass Email/ Twitter campaigns
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <span>Message Templates</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="" onclick="window.location='add-message-template.php';" class="btn btn-primary">Add Template</button>
                            </div>
                        </div>

                        <div class="text-right results-count mt-4">
                            Displaying 1-10 of 2420 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-striped table-custom">
                                <thead>
                                <tr>
                                    <th scope="col">Date Time</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Template Type</th>
                                    <th scope="col">Created by</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>2018-01-29 07:38:08</td>
                                    <td>All channels</td>
                                    <td>All channels</td>
                                    <td>Mass Message</td>
                                    <td>Rebecca Thorn</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2017-11-13 09:46:07</td>
                                    <td>Digitalbox Testing</td>
                                    <td>Test Template</td>
                                    <td>Mass Message</td>
                                    <td>Elania Zito</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2017-07-04 08:14:40</td>
                                    <td>Test</td>
                                    <td>Test Description</td>
                                    <td>Mass Message</td>
                                    <td>Elania Zito</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2018-01-29 07:38:08</td>
                                    <td>All channels</td>
                                    <td>All channels</td>
                                    <td>Mass Message</td>
                                    <td>Rebecca Thorn</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2017-11-13 09:46:07</td>
                                    <td>Digitalbox Testing</td>
                                    <td>Test Template</td>
                                    <td>Mass Message</td>
                                    <td>Elania Zito</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2017-07-04 08:14:40</td>
                                    <td>Test</td>
                                    <td>Test Description</td>
                                    <td>Mass Message</td>
                                    <td>Elania Zito</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-message-template.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="">View Message Templates</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body edit-keyword">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="card">
                                                        <div class="card-header"><i class="fa fa-twitter profiles"></i> Twitter Message</div>
                                                        <div class="card-body">
                                                            <p>Test Twitter Campaign-DigitaleBox on behalf of Aruna Attanayake</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="card">
                                                        <div class="card-header"><i class="fa fa-envelope-o profiles"></i> SMS Message</div>
                                                        <div class="card-body">
                                                            <p>Test SMS Campaign-DigitaleBox</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">Email Template</div>
                                                        <div class="card-body">
                                                            <div class="email-template">
                                                                <table class="">
                                                                    <tr>
                                                                        <td>
                                                                            <img style="width: 100%;" src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/green.jpg">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <h4>Heading goes here</h4>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et nisi tincidunt, consequat diam ultricies, gravida ex. Aenean lectus lorem, tristique ut porta ut, sagittis vitae neque. Duis non rhoncus odio. Pellentesque tincidunt, ex in imperdiet fringilla, mi ipsum semper erat, a ornare nisi velit vitae tellus.</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <table>
                                                                                <tr>
                                                                                    <td class="text-center">
                                                                                        <img style="width: 100%" src="http://placehold.it/380x150">
                                                                                        <h5>Sub Heading 1</h5>
                                                                                        <p class="text-justify">Fusce risus ligula, pulvinar id pretium a, porta ut erat. Morbi condimentum rutrum augue, ut suscipit dui mattis nec. Pellentesque volutpat nec nulla sit amet pretium. Donec at massa quis ante interdum placerat vel sed purus. Quisque tincidunt tristique nunc, sit amet ultrices tortor consequat non. Aliquam erat volutpat. Duis ultrices fermentum sollicitudin. Etiam a molestie nunc, eget tincidunt felis. Sed quis placerat quam. Morbi porttitor ante velit, non pretium dolor finibus consectetur.</p>
                                                                                    </td>
                                                                                    <td style="width: 10px;">

                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <img style="width: 100%" src="http://placehold.it/380x150">
                                                                                        <h5>Sub Heading 1</h5>
                                                                                        <p class="text-justify">Fusce risus ligula, pulvinar id pretium a, porta ut erat. Morbi condimentum rutrum augue, ut suscipit dui mattis nec. Pellentesque volutpat nec nulla sit amet pretium. Donec at massa quis ante interdum placerat vel sed purus. Quisque tincidunt tristique nunc, sit amet ultrices tortor consequat non. Aliquam erat volutpat. Duis ultrices fermentum sollicitudin. Etiam a molestie nunc, eget tincidunt felis. Sed quis placerat quam. Morbi porttitor ante velit, non pretium dolor finibus consectetur.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- View Modal -->
                            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">View Message Templates</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <p>Email/ Facebook/ Twitter/ LinkedIn templates</p>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="">

                                                    </div>

                                                    <div class="table-wrap">
                                                        <table class="table table-striped table-custom">
                                                            <tr>
                                                                <td><strong>Name</strong></td>
                                                                <td class="text-right">All Channels</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Description</strong></td>
                                                                <td class="text-right">Sample Description</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Template Type</strong></td>
                                                                <td class="text-right">Mass Message</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created by</strong></td>
                                                                <td class="text-right">Rebecca Thorn</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created at</strong></td>
                                                                <td class="text-right">2015-01-20 05:44:25</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Twitter Message</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>SMS Message</strong></td>
                                                                <td class="text-right">Test SMS Campaign-DigitaleBox on behalf of Aruna Attanayake</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Zip</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>City</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>User Category</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Age</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created by</strong></td>
                                                                <td class="text-right">Elania Zito</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created at</strong></td>
                                                                <td class="text-right">2017-07-04 08:14:40</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row no-gutters d-flex flex-sm-row-reverse flex-sm-column-reverse flex-md-row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-md-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
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

        $('#end-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>