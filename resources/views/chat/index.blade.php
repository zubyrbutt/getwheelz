@include('layouts.chat.header')
<body class="light-layout">
    <!-- Start Create Group Modal -->
    <div class="modal create-group-modal fade" id="createGroup" tabindex="-1" role="dialog" aria-labelledby="createGroupTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createGroupTitle">Create Group</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="groupName" placeholder="Enter Group Name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="groupDesc" id="groupDesc" rows="3" placeholder="Enter Group Description"></textarea>
                        </div>
                        <p class="create-group-header">Add Users</p>
                        <div class="added-users">
                            <div class="avatar-group">
                                <div class="avatar">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emily Cook">
                                        <img src="assets/images/girl.svg" alt="avatar" class="rounded-circle">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lauren Gotlib">
                                        <img src="assets/images/men.svg" alt="avatar" class="rounded-circle">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Noir Ajkeban">
                                        <img src="assets/images/women.svg" alt="avatar" class="rounded-circle">
                                    </a>
                                </div>
                                <div class="avatar">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New User">
                                        <img src="assets/images/plus.svg" alt="avatar" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="add-users-search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="add-users-search-btn">
                                <div class="input-group-append">
                                    <button class="btn" type="submit" id="add-users-search-btn"><i class="feather icon-search"></i></button>
                                </div>
                            </div>
                        </div> 
                        <div class="add-users-list">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5><span>Emily Cook</span></h5>
                                        <p>Hey there. I am on Chalty.</p>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="userfirstAdd" checked>
                                        <label class="custom-control-label" for="userfirstAdd"></label>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="align-self-center rounded-circle" src="assets/images/boy.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5>James Simeron</h5>
                                        <p>Work mode ON !!</p>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersecondAdd">
                                        <label class="custom-control-label" for="usersecondAdd"></label>
                                    </div>
                                </li>
                                
                               								
                            </ul>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary"><i class="feather icon-plus mr-2"></i>Create Group</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <div class="modal error-screen-modal fade" id="errorScreen" tabindex="-1" role="dialog" aria-labelledby="errorScreenTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorScreenTitle">Connection Error</h5>
                </div>
                <div class="modal-body">
                    <img src="assets/images/connection_error.svg" class="img-fluid" alt="connection_error">
                    <h5>Computer not Connected</h5>
                    <p>Please, check internet connection this PC.</p>
                    <button type="button" class="btn btn-info"><i class="feather icon-repeat mr-2"></i>Try Again</button>
                </div>
            </div>
        </div>
    </div>
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
                                            <img class="align-self-center mr-2" src="assets/images/logo.svg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mb-0 mt-2">Chat</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-3">
                                    <a href="login.html" data-toggle="tooltip" data-placement="right" title="Logout"><i class="feather icon-log-out"></i></a>
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
                                <a class="nav-link active" id="chat-first-tab" data-toggle="pill" href="#chat-first" role="tab" aria-controls="chat-first" aria-selected="true">
                                    <div class="media active">
                                        <div class="user-status"></div>
                                        <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="User Image">
                                        <div class="media-body">
                                            <h5>Emily Cook<span class="chat-timing">02:30 pm</span></h5>
                                            <p>Waiting for module 1 to finish...</p>
                                        </div>
                                    </div>
                                </a>                                    
                             
                                                         
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
                                            <img class="align-self-center mr-2" src="assets/images/logo.svg" alt="Generic placeholder image">
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
                                            <img class="align-self-center mr-2" src="assets/images/logo.svg" alt="Generic placeholder image">
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
                                    <img class="align-self-center rounded-circle" src="assets/images/girl.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5>Emily Cook</h5>
                                        <p class="mb-0">Online</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item">
                                    <a href="#" data-toggle="modal" data-target="#incomingVoiceCall"><i class="feather icon-phone"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-toggle="modal" data-target="#incomingVideoCall"><i class="feather icon-video"></i></a>
                                </li>                                         
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <a href="#" class="" id="chatDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="chatDropdown">
                                            <a class="dropdown-item font-14" href="#" id="view-user-info">View User Info</a>
                                            <a class="dropdown-item font-14" href="#">Search</a>
                                            <a class="dropdown-item font-14" href="#">Archive</a>
                                            <a class="dropdown-item font-14" href="#">Mute</a>
                                            <a class="dropdown-item font-14" href="#">Export Chat</a>
                                            <a class="dropdown-item font-14" href="#">Clear Message</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="back-arrow"><i class="feather icon-x"></i></a>
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
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Hello! please, let me know the status about project after school.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>I have completed 4 stages 5 stages remaining.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Let me share video for detailed information</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <div class="message-video">
                                        <video width="210" controls>
                                          <source src="assets/images/video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <span>Demo.mp4</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Thanks for the video.</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>I am sharing images of project work done so far. <br />Please, have a look at images and let me know if changes required.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:30 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Could you share photos, please?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <ul class="list-inline message-media">
                                        <li class="list-inline-item">
                                            <img src="assets/images/media_01.png" class="img-fluid" alt="media">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/images/media_02.png" class="img-fluid" alt="media">
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="media-more">+07</p>
                                        </li>
                                    </ul>
                                    <span>Photos of product</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:32 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>I request you to schedule demo at 3 pm after 2 days for the better progress. <br />After that we are discussion of final confirmation this project.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <div class="message-audio">
                                        <audio controls>
                                          <source src="assets/images/audio.mp3" type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:38 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                           <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <ul class="list-unstyled message-document">
                                        <li class="media">
                                            <img class="align-self-center img-fluid mr-2" src="assets/images/pdf.svg" alt="pdf">
                                            <div class="media-body">
                                                <h5><a href="#">Document.pdf</a></h5>
                                                <p>50kb</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:40 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Please, refer this doc file for documentation.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:41 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Sure, I will prepare for the same.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:43 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Great. Thanks</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:45 pm<i class="feather icon-clock ml-2"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-second" role="tabpanel" aria-labelledby="chat-second-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-third" role="tabpanel" aria-labelledby="chat-third-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Hello! I got 95% in Semester 7</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Yay !!!</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Wow! That's great news. Where's the party?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <ul class="list-unstyled message-document">
                                        <li class="media">
                                            <img class="align-self-center img-fluid mr-2" src="assets/images/pdf.svg" alt="pdf">
                                            <div class="media-body">
                                                <h5><a href="#">Results.pdf</a></h5>
                                                <p>50kb</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:40 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Thanks I will check and get back.</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Wow!! great continuity.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:30 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Thank you for your nice words.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Continue process of improving everyday. <br />I will be there this weekend for further guidance.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                        
                            </div>
                        <div class="tab-pane fade" id="chat-fourth" role="tabpanel" aria-labelledby="chat-fourth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-fifth" role="tabpanel" aria-labelledby="chat-fifth-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Hi</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Hello</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>How was your day going?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <div class="message-video">
                                        <video width="210" controls>
                                          <source src="assets/images/video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <span>partytime.mp4</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:25 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Seems you are enjoying too much in Las Vegas.</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Be Responsible. <br />Don't drink and drive. Take the taxi for home.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:30 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>I never drink and drive, ma!!!</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
							<div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Send me photos of your hotelview as well.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <ul class="list-inline message-media">
                                        <li class="list-inline-item">
                                            <img src="assets/images/media_01.png" class="img-fluid" alt="media">
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="assets/images/media_02.png" class="img-fluid" alt="media">
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="media-more">+07</p>
                                        </li>
                                    </ul>
                                    <span>Photos of Nevada Trip</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:32 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Wow. That seems so much fun.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Wish, could you be there also.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:41 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>gotta go. See you soon. Take Care</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:43 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>You too. Have Fun.</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:45 pm<i class="feather icon-clock ml-2"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-sixth" role="tabpanel" aria-labelledby="chat-sixth-tab">
                            <div class="empty-screen">
                                <img src="assets/images/empty-logo.png" class="img-fluid" alt="empty-logo">
                                <h4 class="my-3">No Conversation Yet.</h4>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat-seventh" role="tabpanel" aria-labelledby="chat-seventh-tab">
                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary-inverse">Today</span>
                            </div>                                
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>I love you</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:18 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Lol</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>I need you in my life</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:22 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                                <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>lol</span>
                                </div>
                            </div>
                             <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>you are my everything. love you so much</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:30 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>LOL</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:31 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>iPhone X or iPhone XR</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>iPhone X</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>  
							<div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>Lol</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Are you going to buy me that phone?</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>  
							<div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>lol</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>     
							<div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Please, tell me yes</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>                            
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>LOL</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:33 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
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
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <a href="#" id="button-addonmic"><i class="feather icon-mic"></i></a>
                                </div>  
                                <input type="text" class="form-control" placeholder="Type a message..." aria-label="Text">
                                <div class="input-group-append">
                                    <a href="#" class="mr-3" id="button-addonlink"><i class="feather icon-paperclip"></i></a>
                                    <a href="#" id="button-addonsend"><i class="feather icon-send"></i></a>
                                </div>
                            </div>
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
                        <p class="user-detail-header">Media</p>
                        <div class="user-media">
                            <div class="user-media-slider">
                                <div class="user-media-slider-item">
                                    <img src="assets/images/media_01.png" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/media_02.png" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/media_03.png" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/media_04.png" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/pdf.svg" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/xls.svg" class="" alt="user-media">
                                </div>
                                <div class="user-media-slider-item">
                                    <img src="assets/images/doc.svg" class="" alt="user-media">
                                </div>
                            </div>
                        </div>                                        
                        <p class="user-detail-header">Settings</p>
                        <div class="user-setting">
                            <div class="row align-items-center pb-3">
                                <div class="col-9"><h6 class="mb-0">Mute Notifications</h6></div>
                                <div class="col-3 text-right">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="muteNotification" checked>
                                        <label class="custom-control-label" for="muteNotification"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center pb-3">
                                <div class="col-9"><h6 class="mb-0">Block Contact</h6></div>
                                <div class="col-3 text-right">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="blockContact">
                                        <label class="custom-control-label" for="blockContact"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
            <!-- End Chat User Info -->
        </div>
        <!-- End Chat Rightbar -->
    </div>
   
         
@include('layouts.chat.footer')