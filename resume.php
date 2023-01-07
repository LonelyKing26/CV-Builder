<!DOCTYPE html>
<html lang="en">
    <!-- Developed by Arun -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="https://www.pngmart.com/files/13/Avengers-A-Letter-Logo-PNG-Image.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
html{
    height: 100%;
}
</style>
<body>
    <a href="resume.php?process=step1"></a>
    <div class="container">
        <?php
            if(isset($_GET['start'])){
                echo '
                <div class="rgfs1">
                    <div class="col-lg-12 pt-5 pb-5 text-center">
                        <div class="heading pt-5">
                            <h4>Hiii.. Create Your Resume Simplly</h4>
                        </div>
                        <div class="para pb-5">
                            This is Resume Generator Created by <a href="http://arunpandiyan.in">Arunpandiyan</a>
                        </div>
                        <div class="start_btn">
                        <a href="resume.php?step1">
                            <input type="button" class="btn btn-primary" value="Start!">
                            </a>
                        </div>
                    </div>
                </div>
                ';
            }
            else if(isset($_GET['step1'])){
                echo '
                <div class="rgfs2">
                    <div class="head">
                        <h4>Step 01 --</h4>
                    </div>
                    <div class="form-head">
                        <h4>Personal Details</h4>
                    </div>
                        <div class="row form-body">
                            <div class="col-lg-6 form-group mt-3">
                                <label for="fname">First Name</label>
                                <input type="text" name="" id="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 form-group  mt-3">
                                <label for="fname">Last Name</label>
                                <input type="text" name="" id="lname" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-lg-3 form-group mt-3">
                                <label for="fname">Date of Birth</label>
                                <input type="date" name="" id="dob" class="form-control">
                            </div>
                            <div class="col-lg-3 form-group mt-3">
                                <label for="gender">Gender</label>
                                <select name="" id="gender" class="form-control">
                                    <option value="0" selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                            <div class="col-lg-3 form-group mt-3">
                                <label for="mail">Mail ID</label>
                                <input type="text" name="" id="mail" class="form-control">
                            </div>
                            <div class="col-lg-3 form-group mt-3">
                                <label for="mail">Mobile no.</label>
                                <input type="number" name="" id="mobile" class="form-control">
                            </div>
                            <div class="continue-btn-step-2 mt-5 text-center">
                            <a href="resume.php?step2">
                                <input type="button" name="" id="step2_btn" class="btn btn-primary" value="Continue">
                                </a>
                            </div>
                        </div>
                 </div>
                ';
            }

            else if(isset($_GET['step2'])){
                echo '
                <div class="rgfs3 mt-5">
            <div class="head">
                <h4>Step 03 --</h4>
            </div>
            <div class="form-head">
                <h4>Education</h4>
            </div>
            <div class="row form-body">
                <div class="col-lg-3 form-group mt-3">
                    <label for="fname">School/Clg Name</label>
                    <input type="text" name=""  class="form-control" placeholder="School/Clg Name">
                </div>
                <div class="col-lg-2 form-group  mt-3">
                    <label for="fname">Course</label>
                    <input type="text" name=""  class="form-control" placeholder="Course">
                </div>
                <div class="col-lg-2 form-group  mt-3">
                    <label for="fname">Location</label>
                    <input type="text" name=""  class="form-control" placeholder="location">
                </div>
                <div class="col-lg-2 form-group  mt-3">
                    <label for="fname">passed out</label>
                    <input type="date" name=""  class="form-control" placeholder="passedout year">
                </div>
                <div class="col-lg-2 form-group  mt-3">
                    <label for="fname">Percentage</label>
                    <input type="text" name=""  class="form-control" placeholder="percentage">
                </div>
                <div class="col-lg-1 form-group  mt-3">
                    <label for="fname"></label>
                    <button class="btn btn-primary mt-4" id="add-edu"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    
                </div>
            </div>
            <div class="clone-form col-lg-12">
            </div>
            
        </div>
                ';
            }
        ?>
        
        
        
    </div>
    <script src="https://arunpandiyan.in/assets/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#add-edu").click(function(){
                $(".clone-form").append(`
                <div class="row form-body">
                    <div class="col-lg-3 form-group mt-3">
                        <label for="fname">School/Clg Name</label>
                        <input type="text" name=""  class="form-control" placeholder="School/Clg Name">
                    </div>
                    <div class="col-lg-2 form-group  mt-3">
                        <label for="fname">Course</label>
                        <input type="text" name=""  class="form-control" placeholder="Course">
                    </div>
                    <div class="col-lg-2 form-group  mt-3">
                        <label for="fname">Location</label>
                        <input type="text" name=""  class="form-control" placeholder="location">
                    </div>
                    <div class="col-lg-2 form-group  mt-3">
                        <label for="fname">passed out</label>
                        <input type="date" name=""  class="form-control" placeholder="passedout year">
                    </div>
                    <div class="col-lg-2 form-group  mt-3">
                        <label for="fname">Percentage</label>
                        <input type="text" name=""  class="form-control" placeholder="percentage">
                    </div>
                    <div class="col-lg-1 form-group  mt-3">
                        <label for="fname"></label>
                        
                        <button class="btn btn-danger remove-edu" style="margin-top: 27px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>
                </div>
                `);
            });
            $(document).on('click', '.remove-edu', function(){
                $(this).closest(".form-body").remove();
            })
        });

    </script>

</body>
</html>