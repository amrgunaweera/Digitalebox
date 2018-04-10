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
                        Create Role
                    </div>
                    <div class="desc">
                        Add new role to the system
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Manage Roles</a> / <span>Create Role</span>
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
                                <div class="form-group col-md-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" placeholder="Description">
                                </div>
                            </div>

                        </form>

                        <div class="text-right results-count mt-4">
                            Total 156 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-permissions">
                                <thead>
                                    <tr>
                                        <th scope="col">Permission</th>
                                        <th class="text-center enable" scope="col">
                                            <div class="switch switch-sm switch-secondary">
                                                <input type="checkbox" class="switch" id="toggle-all">
                                                <label for="toggle-all"></label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td colspan="2" class="table-subhead">A/B Testing</td>
                                    </tr>
                                    <tr>
                                        <td>A/B Testing</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm1">
                                                <label for="switch-sm1"></label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="table-subhead">ABTesting / CreateCamp</td>
                                    </tr>
                                    <tr>
                                        <td>A/B Testing Create</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm3">
                                                <label for="switch-sm3"></label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="table-subhead">Campaigns/Detail Statistics</td>
                                    </tr>
                                    <tr>
                                        <td>Campaign Users View People</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm4">
                                                <label for="switch-sm4"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Campaign Users Delete People</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm5">
                                                <label for="switch-sm5"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Campaign Users Update People</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm6">
                                                <label for="switch-sm6"></label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="table-subhead">System / Portal Settings</td>
                                    </tr>
                                    <tr>
                                        <td>Change Theme</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm7">
                                                <label for="switch-sm7"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Change Portal Texts</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm8">
                                                <label for="switch-sm8"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Change Front Images</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm9">
                                                <label for="switch-sm9"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manage Front Images</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm10">
                                                <label for="switch-sm10"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Change Background Image</td>
                                        <td class="text-center">
                                            <div class="switch switch-sm">
                                                <input type="checkbox" class="switch toggle-switch" id="switch-sm11">
                                                <label for="switch-sm11"></label>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                        </div>

                        <div class="form-row text-left text-md-right">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <button type="button" class="btn btn-secondary">Cancel</button>
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
        $('#toggle-all').change(function() {
            if(this.checked){
                $(".toggle-switch").prop("checked", true);
            }else{
                $(".toggle-switch").prop("checked", false);
            }
        });
    });
</script>