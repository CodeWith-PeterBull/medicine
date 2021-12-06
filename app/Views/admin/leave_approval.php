<?php include('sidemenu.php');
$lid=intval($leaveID);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Leave Approval</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="/css/leave_approval.css">
</head>
<body>
    <div class="position-absolute form">
        <h1 class="text-dark">Leave Approval</h1>
            <form class="row g-4" style="max-height: 600px" method="post" action="/register">
                <div class="row">
                    <div class="col-12">
                        <label for="staffid" class="text-dark form-label">Staff Number:</label>
                        <input type="text" class="form-control" id="staffid" name="staff_number" placeholder="" size="20"  value="<?= $staffID?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class=" text-dark mt-2 form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=""  value="<?= $firstName ." ".$lastName?>" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="department" class="text-dark mt-2 form-label">Department</label>
                        <input type="text" class="form-control" id="department"  name="department"  value="<?= $dept?>"  readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="leave_type" class="text-dark mt-2 form-label">Leave type</label>
                        <input type="text" class="form-control" id="leave_type" name="leave_type"  value="<?= $leavetype?>"  readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="duration" class="text-dark mt-2 form-label">Duration</label>
                        <input type="text"  class="form-control" id="duration" name="duration" value="<?= round((strtotime($end)- strtotime($start))/86400);?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="start_Date" class="text-dark mt-2 form-label">Start Date</label>
                        <input type="text"  class="form-control" id="start_date" name="start_date" value="<?= $start?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="end_date" class="text-dark mt-2 form-label">End Date</label>
                        <input type="text"  class="form-control" id="end_date" name="end_date" value="<?= $end?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-4 pt-4 from-wrapper">
                        <div class="button">
                            <a href="/Leave_approval/approve_leave/<?=$lid?>">
                                <button type="button" class="btn btn-success">Approve</button>
                            </a>
                            <a href="/Leave_approval/deny_leave/<?=$lid?>">
                                <button type="button" class="btn btn-danger">Deny</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>