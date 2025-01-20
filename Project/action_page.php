<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/bootstrap-icons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background-color: #f0f0f0;
        }

        .navbar {
            background-color: #333;
            color: #fff;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-pills {
            background-color: #f0f0f0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .nav-link.active {
            background-color: #333;
            color: #fff;
        }

        .tab-content {
            padding: 0px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tab-pane {
            padding: 20px;
        }

        .d-flex {
            height: 100vh;
        }

        .nav-pills {
            height: 100%;
        }

        .tab-content {
            height: 100%;
            overflow-y: auto;
        }

        .d-flex>div {
            height: 100%;
        }

        .nav-pills {
            flex: 1;
        }

        .tab-content {
            flex: 3;
        }

        .navbar {
            height: 70px;
        }

        .navbar-brand img {
            width: 350px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="logo-image">
                <span style="color: #fff;">Company Name</span>
            </a>
        </div>
    </nav>

    <div class="d-flex align-items-start" style="margin-top: 0px; height: 100vh;">
        <div class="col-2" style="height: 100%; overflow-y: auto;">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          

                <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard"
                    aria-selected="true">
                    <i class="bi bi-graph-up"></i> Dashboard
                </button>


                <button class="nav-link" id="v-pills-User   -Master-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-User   -Master" type="button" role="tab"
                    aria-controls="v-pills-User   -Master" aria-selected="false">
                    <i class="bi bi-people"></i> User Master
                </button>
                <button class="nav-link" id="v-pills-Client-Master-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-Client-Master" type="button" role="tab"
                    aria-controls="v-pills-Client-Master" aria-selected="false">
                    <i class="bi bi-building"></i> Client Master
                </button>
                <button class="nav-link" id="v-pills-Invoice-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-Invoice" type="button" role="tab" aria-controls="v-pills-Invoice"
                    aria-selected="false">
                    <i class="bi bi-file-text"></i> Invoice
                </button>


               
            </div>
        </div>
        <div class="col-10" style="height: 100%; overflow-y: auto;">
            <div class="tab-content" id="v-pills-tabContent">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 20px;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-users-tab" data-bs-toggle="tab"
                            data-bs-target="#all-users" type="button" role="tab" aria-controls="users"
                            aria-selected="true">All Users</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="add-users-tab" data-bs-toggle="tab" data-bs-target="#add-users"
                            type="button" role="tab" aria-controls="add-users" aria-selected="false">Add users</button>
                    </li>
                </ul>



                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-users" role="tabpanel"
                        aria-labelledby="all-users-tab">

                        <form class="row gx-3 gy-2 align-items-center" id="add-user">
                            <div class="col-sm-3">
                                <label class="form-label">Name <span class="req-star"></span></label>
                                <input type="text" class="form-control form-control-sm" maxlength="50" name="name"
                                    id="name" />
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Email <span class="req-star"></span></label>
                                <input type="text" class="form-control form-control-sm" maxlength="50" name="email"
                                    id="email" />
                            </div>

                            <div class="col-sm-3">
                                <label class="form-label">Phone No <span class="req-star"></span></label>
                                <input type="text" class="form-control form-control-sm numeric" maxlength="10"
                                    name="phone_no" id="phone_no" />
                            </div>

                            <div class="col-auto">
                                <button type="reset" class="btn btn btn-secondary me-2"
                                    onclick="validationReset()">Reset</button>
                            </div>
                        </form>




                        <table class="table table-bordered">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col" style="min-width:120px !important">Action</th>
                                </tr>
                            </thead>
                            <tbody id="list_table">
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="add-users" role="tabpanel" aria-labelledby="add-users-tab">


                        <form id="addForm">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password" required>
                            </div>

                            <button type="button" onclick="senddata()" class="btn btn-primary">Add User</button>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="add-users" role="tabpanel" aria-labelledby="add-users-tab"></div>


                </div>
            </div>
        </div>
    </div>
    </div>







    <script>
        function tableList() {
            $.ajax({
                type: 'POST',
                url: 'crud.php',
                data: {
                    type: 'list'
                },
                dataType: "HTML",
                success: function (result) {
                    $('#list_table').html(result);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert('err');
                }
            });
        }

        function senddata(){
            let formData = new FormData(addForm);
            $.ajax({
                url: 'crud.php',
                type: 'POST',
                data: formData,
                contentType:false,
                processData :false,
                success: function (response) {
                    console.log(response);
                    // $('#add-user-response').html(response);
                    // tableList(); // Call tableList function to update table data
                }
            });
        }
            


    </script>






</body>

</html>










