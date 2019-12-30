@include('layouts.chat.header')
<body class="light-layout">
    <!-- Start Create Group Modal -->
   
    <!-- End Incoming Video Call Modal -->
    <!-- Start Incoming Video Call Modal -->
    <div class="modal incoming-video-modal fade" id="incomingVideoCall" tabindex="-1" role="dialog" aria-labelledby="incomingVideoCallTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="incomingVideoCallTitle">Incoming Video Call</h5>
                </div>
                <div class="modal-body">
                    <img src="assets/images/girl.svg" alt="avatar" class="rounded-circle">
                    <h5 class="text-white">Jessica Meir</h5>
                    <p class="text-white">Texas, USA</p>
                    <button type="button" class="btn btn-success mr-3"><i class="feather icon-check mr-2"></i>Accept</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="feather icon-x mr-2"></i>Reject</button>                    
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- End Incoming Video Call Modal -->
    <!-- Start Incoming Voice Call Modal -->
    <div class="modal incoming-voice-modal fade" id="incomingVoiceCall" tabindex="-1" role="dialog" aria-labelledby="incomingVoiceCallTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="incomingVoiceCallTitle">Incoming Voice Call</h5>
                </div>
                <div class="modal-body">
                    <img src="assets/images/men.svg" alt="avatar" class="rounded-circle">
                    <h5>Jessica Meir</h5>
                    <p>Texas, USA</p>
                    <button type="button" class="btn btn-success mr-3"><i class="feather icon-check mr-2"></i>Accept</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="feather icon-x mr-2"></i>Reject</button>                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Incoming Voice Call Modal -->
    <!-- Start Error Screen Modal -->
    
    <!-- End Incoming Voice Call Modal -->
    <!-- Start Chat Layout -->
    <div class="chat-layout">
        <!-- Start Chat Leftbar -->
        <div class="chat-leftbar">
            <div class="tab-content" id="pills-tab-justifiedContent">
                <!-- Start Chat Listbar -->
                <div class="tab-pane fade show active" id="pills-chat-justified" role="tabpanel" aria-labelledby="pills-chat-tab-justified">
                    <div class="chat-listbar">
                        <div class="chat-left-headbar">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <ul class="list-unstyled mb-0">
                                        <li class="media">
                                            <img class="align-self-center mr-2" src="{{ asset('uchat/assets/images/logo.svg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mb-0 mt-2">Chat</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>  
                        <div class="chat-left-search">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="chat-left-search-btn">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="chat-left-search-btn"><i class="feather icon-search"></i></button>
                                  </div>
                                </div>
                            </form>
                        </div>                                     
                        <div class="chat-left-body">       
                            <div class="nav flex-column nav-pills chat-userlist" id="chat-list-tab" role="tablist" aria-orientation="vertical">
                                
                                
                                
                                <span class="nav-link active" id="" data-toggle="pill" href="" role="tab" aria-controls="chat-first" aria-selected="true">
                                        <div class="media active">
                                            <div class="user-status"></div>
                                            <img class="align-self-center rounded-circle" src="{{ asset('uchat/assets/images/girl.svg') }}" alt="User Image">
                                            <div class="media-body">
                                                <h5>{{ $user->name }}<span class="chat-timing">02:30 pm</span></h5>
                                                <p></p>
                                            </div>
                                        </div>
                                    </span>
                                    
                                                                  
                                               
                            </div>
                        </div>                                       
                    </div>                                    
                </div>
                <!-- End Chat Listbar -->
                <!-- Start Chat Addbar -->
                <div class="tab-pane fade" id="pills-addchat-justified" role="tabpanel" aria-labelledby="pills-addchat-tab-justified">
                    <div class="chat-addbar">
                        <div class="chat-left-headbar">
                            <div class="row align-items-center">
                                <div class="col-9">                                                
                                    <ul class="list-unstyled mb-0">
                                        <li class="media">
                                            <img class="align-self-center mr-2" src="{{ asset('uchat/assets/images/logo.svg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mb-0 mt-2">New Chat</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-3">
                                    <a href="#" data-toggle="modal" data-target="#createGroup"><i class="feather icon-users"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-left-search">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="chat-left-search-user-btn">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="chat-left-search-user-btn"><i class="feather icon-search"></i></button>
                                  </div>
                                </div>
                            </form>
                        </div>                                     
                        <div class="chat-left-body">   
                            <div class="nav flex-column nav-pills chat-userlist" id="new-chat-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="new-chat-first-tab" data-toggle="pill" href="#" role="tab" aria-selected="true">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="{{ asset('uchat/assets/images/men.svg') }}" alt="User Image">
                                        <div class="media-body">
                                            <h5>John Doe</h5>
                                            <p>Hey there. I am on Chalty.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-second-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="{{ asset('uchat/assets/images/women.svg') }}" alt="User Image">
                                        <div class="media-body">
                                            <h5>Ema Star</h5>
                                            <p>Work mode ON !!</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-third-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="{{ asset('uchat/assets/images/boy.svg') }}" alt="User Image">
                                        <div class="media-body">
                                            <h5>Roger Day</h5>
                                            <p>Let's go hiking.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-fourth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/men.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Paul Taylor</h5>
                                            <p>Why so serious ?</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-fifth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Cary Peck</h5>
                                            <p> ** No Status **</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-sixth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/women.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Meghan Murphy</h5>
                                            <p>Feeling happy...</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-seventh-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/boy.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Sansa Smith</h5>
                                            <p>World is Selfish.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-eighth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Jelly Witherspoon</h5>
                                            <p>Best day of my life.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-ninth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/men.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Loy Diesel</h5>
                                            <p>Hoping for better tomorrow.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-tenth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/boy.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Sham Chaterjee</h5>
                                            <p>No Status</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-eleventh-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Krishna Nayar</h5>
                                            <p>Looking for Graphics Designer.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-twelth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/men.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Arjun Lohia</h5>
                                            <p>Mood Off</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-thirteenth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/boy.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Mike Spencer</h5>
                                            <p>It's School time</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="new-chat-fourthinth-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">
                                    <div class="media">
                                        <img class="align-self-center rounded-circle" src="assets/images/men.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Tom Cruz</h5>
                                            <p>New Job. New Asporations.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>                                        
                    </div>
                </div>
                <!-- End Chat Addbar -->
                <!-- Start Chat Profilebar -->
                <div class="tab-pane fade" id="pills-profile-justified" role="tabpanel" aria-labelledby="pills-profile-tab-justified">
                    <div class="chat-profilebar">
                        <div class="chat-left-headbar">
                            <div class="row align-items-center">
                                <div class="col-12">                                                
                                    <ul class="list-unstyled mb-0">
                                        <li class="media">
                                            <img class="align-self-center mr-2" src="{{ asset('uchat/assets/images/logo.svg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mb-0 mt-2">My Profile</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chat-left-body">
                            <div class="profilebar">
                                <img class="profile-pic img-fluid" src="assets/images/men.svg" alt="profile-pic">  
                                <div class="profile-edit">
                                    <i class="feather icon-camera upload-button"></i>
                                    <input class="profile-upload" type="file" accept="image/*"/>
                                </div>  
                                <h5>Will Patinson</h5>
                                <p class="mb-0">Florida, USA</p>                                            
                            </div> 
                            <div class="profile-detail">
                                <ul class="list-unstyled mb-0">
                                    <li class="media">
                                        <i class="feather icon-user align-self-center"></i>
                                        <div class="media-body">
                                            <p>Username</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="Will Patinson" aria-label="Will Patinson" aria-describedby="button-addon-group-username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-link" type="button" id="button-addon-group-username">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>  
                                    <li class="media">
                                        <i class="feather icon-map align-self-center"></i>
                                        <div class="media-body">
                                            <p>Location</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="Florida, USA" aria-label="Florida, USA" aria-describedby="button-addon-group-location">
                                                <div class="input-group-append">
                                                    <button class="btn btn-link" type="button" id="button-addon-group-location">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>  
                                    <li class="media">
                                        <i class="feather icon-message-square align-self-center"></i>
                                        <div class="media-body">
                                            <p>Status</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="I am on Gappa." aria-label="I am on Gappa" aria-describedby="button-addon-group-status">
                                                <div class="input-group-append">
                                                    <button class="btn btn-link" type="button" id="button-addon-group-status">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="feather icon-mail align-self-center"></i>
                                        <div class="media-body">
                                            <p>Email ID</p>
                                            <div class="input-group">
                                                <input type="email" class="form-control" value="demo@example.com" aria-label="demo@example.com" aria-describedby="button-addon-group-emailid">
                                                <div class="input-group-append">
                                                    <button class="btn btn-link" type="button" id="button-addon-group-emailid">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="media">
                                        <i class="feather icon-lock align-self-center"></i>
                                        <div class="media-body">
                                            <p>Password</p>
                                            <div class="input-group">
                                                <input type="password" class="form-control" value="********" aria-label="********" aria-describedby="button-addon-group-password">
                                                <div class="input-group-append">
                                                    <button class="btn btn-link" type="button" id="button-addon-group-password">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                   
                                </ul>
                            </div>                                            
                        </div>
                    </div>
                </div>
                <!-- End Chat Profilebar -->
                <!-- Start Chat Settingbar -->
                <div class="tab-pane fade" id="pills-setting-justified" role="tabpanel" aria-labelledby="pills-setting-tab-justified">
                    <div class="chat-settingbar">
                        <div class="chat-left-headbar">
                            <div class="row align-items-center">
                                <div class="col-9">                                                
                                    <ul class="list-unstyled mb-0">
                                        <li class="media">
                                            <img class="align-self-center mr-2" src="{{ asset('uchat/assets/images/logo.svg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mb-0 mt-2">Setting</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <a href="#" id="settingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingDropdown">
                                            <a class="dropdown-item font-14" href="#">Reset to Defaults</a>
                                            <a class="dropdown-item font-14" href="#">Backup</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-left-body">
                            <p class="setting-header">General Settings</p>
                            <div class="general-setting">
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">Notification Sounds</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="notificationSound" checked>
                                            <label class="custom-control-label" for="notificationSound"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">New Message Alerts</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newMessageAlerts">
                                            <label class="custom-control-label" for="newMessageAlerts"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">Show Mini Messages in Sidebar</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="showMiniMessages">
                                            <label class="custom-control-label" for="showMiniMessages"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="setting-header">Privacy Settings</p>
                            <div class="privacy-setting">                                                
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">Read Receipts</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="readReceipts" checked>
                                            <label class="custom-control-label" for="readReceipts"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">Show Profile Picture</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="showProfilePicture">
                                            <label class="custom-control-label" for="showProfilePicture"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-9"><h6 class="mb-0">Allow Messages from Strangers</h6></div>
                                    <div class="col-3 text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="allowMessageToStrangers">
                                            <label class="custom-control-label" for="allowMessageToStrangers"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="setting-header">Design Settings</p>
                            <div class="design-setting custom-checkbox-button">
                                <div class="form-check-inline checkbox-primary">
                                  <input type="checkbox" id="customCheckboxInline5" name="customCheckboxInline2" checked>
                                  <label for="customCheckboxInline5"></label>
                                </div>
                                <div class="form-check-inline checkbox-secondary">
                                  <input type="checkbox" id="customCheckboxInline6" name="customCheckboxInline2">
                                  <label for="customCheckboxInline6"></label>
                                </div>
                                <div class="form-check-inline checkbox-success">
                                  <input type="checkbox" id="customCheckboxInline7" name="customCheckboxInline2">
                                  <label for="customCheckboxInline7"></label>
                                </div>
                                <div class="form-check-inline checkbox-danger">
                                  <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline2">
                                  <label for="customCheckboxInline8"></label>
                                </div>
                                <div class="form-check-inline checkbox-warning">
                                  <input type="checkbox" id="customCheckboxInline9" name="customCheckboxInline2">
                                  <label for="customCheckboxInline9"></label>
                                </div>
                                <div class="form-check-inline checkbox-info">
                                  <input type="checkbox" id="customCheckboxInline10" name="customCheckboxInline2">
                                  <label for="customCheckboxInline10"></label>
                                </div>
                                <div class="form-check-inline checkbox-light">
                                  <input type="checkbox" id="customCheckboxInline11" name="customCheckboxInline2">
                                  <label for="customCheckboxInline11"></label>
                                </div>
                                <div class="form-check-inline checkbox-dark">
                                  <input type="checkbox" id="customCheckboxInline12" name="customCheckboxInline2">
                                  <label for="customCheckboxInline12"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Chat Settingbar -->
            </div>
            <div class="chat-menu">
                <ul class="nav nav-pills nav-justified mb-0" id="pills-tab-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-chat-tab-justified" data-toggle="pill" href="#pills-chat-justified" role="tab" aria-controls="pills-chat-justified" aria-selected="true"><i class="feather icon-message-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-addchat-tab-justified" data-toggle="pill" href="#pills-addchat-justified" role="tab" aria-controls="pills-addchat-justified" aria-selected="false"><i class="feather icon-edit-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-justified" data-toggle="pill" href="#pills-profile-justified" role="tab" aria-controls="pills-profile-justified" aria-selected="false"><i class="feather icon-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab-justified" data-toggle="pill" href="#pills-setting-justified" role="tab" aria-controls="pills-setting-justified" aria-selected="false"><i class="feather icon-settings"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Chat Leftbar -->
        <!-- Start Chat Rightbar -->  
        <div class="chat-rightbar">
            <!-- Start Chat Detail -->
            <div class="chat-detail">
                <div class="chat-head">
                    <div class="row align-items-center">
                        <div class="col-6">                                                
                            <ul class="list-unstyled mb-0">
                                <li class="media">
                                    <div class="user-status"></div>
                                    <img class="align-self-center rounded-circle" src="{{ asset('uchat/assets/images/girl.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5>Emily Cook</h5>
                                        <p class="mb-0">Online</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>                                    
                </div>
                <div class="chat-body">
                    <div class="tab-content" id="chat-listContent">
                        <div class="tab-pane fade show active" id="chat-first" role="tabpanel" aria-labelledby="chat-first-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>    
                            @foreach ($messages as $message)
                                
                                                       
                            <div class="chat-message {{ ($message->from  == Auth::id()) ? 'chat-message-left':'chat-message-right' }}">
                                <div class="chat-message-text">
                                    <span>{{ $message->message }}.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                                @endforeach 
                            </div>
                          
                                                      
                           
                        <div class="tab-pane fade" id="chat-fourth" role="tabpanel" aria-labelledby="chat-fourth-tab">
                            <div class="empty-screen">
                                <img src="{{ asset('uchat/assets/images/empty-logo.png') }}" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="chat-seventh" role="tabpanel" aria-labelledby="chat-seventh-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            
							<div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Why are so many lol</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>It's thunder from zambia fire.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                                                       
                        </div>
                        <div class="tab-pane fade" id="chat-eighth" role="tabpanel" aria-labelledby="chat-eighth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-ninth" role="tabpanel" aria-labelledby="chat-ninth-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>How you doin???</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>I watched F.R.I.E.N.D.S. compeletely.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Let's go party then</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Duh !!! Next time</span>
                                </div>
                            </div>
                            </div>
                        <div class="tab-pane fade" id="chat-tenth" role="tabpanel" aria-labelledby="chat-tenth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-eleventh" role="tabpanel" aria-labelledby="chat-eleventh-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Please, pay $100 to megan. I will give it to you when home.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Okay given. Now you owe me $110.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Why 10$ Extra?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Convenience Charge it is.</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>I am not gonna pay any damn charges.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>                            
							</div>
						</div>
                        <div class="tab-pane fade" id="chat-twelth" role="tabpanel" aria-labelledby="chat-twelth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-thirteenth" role="tabpanel" aria-labelledby="chat-thirteenth-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Ding dong. who is it?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Need some serif.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>We only have slabs.</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Do you have more height or width?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                                                
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>We are bold.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:41 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Fine with it.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:43 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                          </div>
                        <div class="tab-pane fade" id="chat-fourtinth" role="tabpanel" aria-labelledby="chat-fourtinth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="chat-bottom">
                    <div class="chat-messagebar">
                        <form action="{{ route('chat.post') }}" method="POST">
                            <div class="input-group">
                                @csrf
                                {{-- <div class="input-group-prepend">
                                    <a href="#" id="button-addonmic"><i class="feather icon-mic"></i></a>
                                </div>   --}}

                                <div class="input-text">
                                    <input type="hidden" name="to" value="{{request()->route('id')}}">
                                <input type="text" name="message"  placeholder="Type a message..." aria-label="Text">
                            </div>
                                {{-- <div class="input-group-append">
                                    <a href="#" class="mr-3" id="button-addonlink"><i class="feather icon-paperclip"></i></a>
                                    <a href="#" id="button-addonsend"><i class="feather icon-send"></i></a>
                                </div> --}}
                            </div>
                            <span><button type="submit" class="btn btn-primary pull-right">Send</button></span>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Chat Detail -->
            <!-- Start Chat User Info -->
            <div class="chat-user-info">
                <div class="chat-user-head">
                    <div class="row align-items-center">
                        <div class="col-9">                                                
                            <h5>User Info</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item">
                                    <a href="#" id="close-user-info"><i class="feather icon-x"></i></a>
                                </li>
                            </ul>                                            
                        </div>
                    </div>                                    
                </div>
                <div class="chat-user-body">
                    <div class="userbar">
                        <img class="user-pic img-fluid" src="assets/images/girl.svg" alt="user-pic"> 
                        <h5>Emily Cook</h5>
                        <p class="mb-0">New York, USA</p>
                    </div>
                    <div class="user-detail">
                        <p class="user-detail-header">About</p>
                        <div class="user-about">
                            <h6><i class="feather icon-heart mr-2"></i>Feeling good today.</h6>
                            <h6 class="my-3"><i class="feather icon-mail mr-2"></i>demo@example.com</h6>
                            <h6 class="mb-0"><i class="feather icon-phone-call mr-2"></i>+1 9876543210</h6>
                        </div>
                        <p class="user-detail-header">Social Profile</p>
                        <div class="user-social">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="facebook"><i class="feather icon-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="twitter"><i class="feather icon-twitter"></i></a>
                                </li>   
                                <li class="list-inline-item">
                                    <a href="#" class="instagram"><i class="feather icon-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                                                               
                        
                    </div>
                </div>                                
            </div>
            <!-- End Chat User Info -->
        </div>
        <!-- End Chat Rightbar -->
    </div>
    <!-- End Chat Layout -->
    <!-- Start js -->        
@include('layouts.chat.footer')