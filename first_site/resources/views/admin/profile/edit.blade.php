@extends('layout/admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="iq-edit-list usr-edit">
                            <ul class="iq-edit-profile d-flex nav nav-pills">
                                <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                        Change Password
                                    </a>
                                </li>
                                <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                        Manage Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.profile.update', $user->id) }}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <div class="crm-profile-img-edit">
                                                        <img class="crm-profile-pic rounded-circle avatar-100" alt="profile-pic" src={{ asset("admin_files/assets/images/user/1.jpg") }} >
                                                        <div class="crm-p-image bg-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                            <input class="file-upload" type="file" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row align-items-center">
                                            <div class="form-group col-sm-6">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name"  required="" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cpass">Current Password:</label>
                                            <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                            <input type="Password" class="form-control" id="cpass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password:</label>
                                            <input type="Password" class="form-control" id="npass" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="vpass">Verify Password:</label>
                                            <input type="Password" class="form-control" id="vpass" value="">
                                        </div>
                                        <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Email and SMS</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                            <div class="col-md-9 custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                                <label class="custom-control-label" for="emailnotification"></label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                            <div class="col-md-9 custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                                <label class="custom-control-label" for="smsnotification"></label>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">When To Email</label>
                                            <div class="col-md-9">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email01">
                                                    <label class="custom-control-label" for="email01">You have new notifications.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email02">
                                                    <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                    <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                            <div class="col-md-9">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email04">
                                                    <label class="custom-control-label" for="email04"> Upon new order.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email05">
                                                    <label class="custom-control-label" for="email05"> New membership approval</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                    <label class="custom-control-label" for="email06"> Member registration</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Manage Contact</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="cno">Contact Number:</label>
                                            <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="url">Url:</label>
                                            <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="{{ route('admin.profile.show') }}" class="btn btn-primary">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
