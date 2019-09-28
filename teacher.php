<?php 
  require_once "layouts/header.php";
?>

<div class="mt-top"></div>
    <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Courses</h5>
                            <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course-Icon</th>
                                            <th scope="col">Course-Title</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><button class="btn btn-info"><span>Edit</span></button></td>
                                            <td><button class="btn btn-danger"><span>Delete</span></button></td>
                                            </tr>
                                        
                                        </tbody>
                                        </table>

                        </div>
                    </div>
                    
                </div>
                <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Created Course</h5>
                                <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course-Title</th>
                                            <th scope="col">No-Student</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td><button class="btn btn-info"><span>Edit</span></button></td>
                                            <td><button class="btn btn-danger"><span>Delete</span></button></td>
                                            </tr>
                                        
                                        </tbody>
                                        </table>
                            </div>
                        </div>
                </div>
            </div>
    </div>




<?php 
  require_once "layouts/footer.php";
?>