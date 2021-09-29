<?php require APPROOT . '/views/inc/header.php'; ?>
    <h1><?php echo $data['title']; ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 form">
                <form action="">
                    <!-- start membership-info -->
                    <div class="form-group membership-info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="prc_license_no">PRC License No.</label>
                                        <input type="text" class="form-control" name="prc_license_no">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="registration_date" class="">Registration Date</label>
                                        <input type="date" class="form-control" name="registration_date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="expiry_date" class="">Expiry Date</label>
                                        <input type="date" class="form-control" name="expiry_date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="field_of_practice" class="">Field of Practice</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac1" value="General Practice">
                                            <label for="field_prac1">General Practice</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac2" value="Endodontics">
                                            <label for="field_prac2">Endodontics</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac3" value="Prosthodontics">
                                            <label for="field_prac3">Prosthodontics</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac4" value="Orthodontics">
                                            <label for="field_prac4">Orthodontics</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac5" value="Oral and maxillofacial surgery">
                                            <label for="field_prac5">Oral and maxillofacial surgery</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac6" value="Pedodontics">
                                            <label for="field_prac6">Pedodontics</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac7" value="Periodontics">
                                            <label for="field_prac7">Periodontics</label><br>
                                            <input type="checkbox" id="field_prac1" name="field_prac8" value="Other">
                                            <label for="field_prac8">Other</label><br>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="type_of_practice">Type of Practice</label><br>
                                            <input type="radio" id="practice_type1" name="practice_type" value="Government Dentist">
                                            <label for="practice_type1">Government Dentist</label><br>
                                            <input type="radio" id="practice_type2" name="practice_type" value="Clinic Owner">
                                            <label for="practice_type2">Clinic Owner</label><br>
                                            <input type="radio" id="practice_type3" name="practice_type" value="Dental Associate">
                                            <label for="practice_type3">Dental Associate</label><br>
                                            <input type="radio" id="practice_type4" name="practice_type" value="School Dentist">
                                            <label for="practice_type4">School Dentist</label><br>
                                            <input type="radio" id="practice_type5" name="practice_type" value="None Practicing">
                                            <label for="practice_type5">None Practicing</label><br>
                                            <input type="radio" id="practice_type6" name="practice_type" value="Other">
                                            <label for="practice_type6">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end membership-info -->
                    <!-- start personal-info -->
                    <div class="form-group personal-info">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="birthday">Date of Birth</label>
                                    <input type="date" class="form-control" name="birthday">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender" class="">Gender</label>
                                    <select name="gender" class="form-control" id="sex">
                                        <option value="">Click here</option>
                                        <option value="Male">Male</option>
                                        <option value="Male">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email_add">Email Address</label>
                                    <input type="text" class="form-control" name="email_add">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address">Home Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="facebook_acc">Facebook Account Name</label>
                                    <input type="text" class="form-control" name="facebook_acc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end personal-info -->
                    <!-- start clinic-info-->
                    <div class="form-group clinic-info">
                        <div class="row">
                            <div class="form-group">
                                <label for="registered_name">Registered Name</label>
                                <input type="text" class="form-control" name="registered_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rm. / Unit No. / Bldg. Name / Blk. / Lot / Street Name </label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Barangay / District</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">City / Municipality</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact_number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end clinic-info -->
                    <!-- start ICOE-info -->
                    <div class="form-group ICOE-info">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="contact_no">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact_no">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                    </div><br>
                    <!-- end ICOE-info -->
                    <button type="submit" class="btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>