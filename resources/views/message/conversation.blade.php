@extends('layouts.app')

@section('content')
    <div class="row chat-row">
        <div class="col-md-3">
            <div class="users">
                <h5>Users</h5>
                  
                <ul class="list-group list-chat-item">
                @if($users->count())
                    @foreach($users as $user)
                        <li class="chat-user-list @if($user->id == $friendInfo->id) active @endif">
                            <a href="">
                                <div class="name-image bg-primary">
                                       {!! makeImageFromName($user->name) !!}
                                </div>

                                <div class="chat-name font-weight-bold">
                                    {{$user->name}}
                                   
                                </div>
                             </a>
                        </li>
                    @endforeach  
                @endif  
                </ul>
            </div>
        </div> <!-- col -->
  

    <div class=" col-md-9  chat-section">
        <div class="chat-header">
             <div class="name-image bg-primary">
                {!! makeImageFromName($user->name) !!}
             </div>

             <div class="chat-name font-weight-bold">
             {{$user->name}}
             <i class="fa fa-circle user-status-head" title="away" id="userStatusHead{{$friendInfo->id}}"></i>
             </div>
        </div> <!-- chat header -->
        <div class="chat-body" id="chatBody">
                <div class="message-listing"  id="messageWrapper">
                    <div class="row message align-items-center mb-2">
                        <div class="col-md-12 user-info">
                            <div class="chat-image">
                                {!!makeImageFromName('wessam bauomy')!!}
                            </div>

                            <div class="chat-name  font-weight-bold">
                                wessam bauomy
                                <span class="small time text-gray-500" title="20-4-2021 11:32 PM">
                                    12:55 AM
                                </span>
                            </div>
                        </div> <!-- user info -->

                        <div class="col-md-12 message-content">
                            <div class="message-text">
                                Message Here
                            </div>

                        </div>
                    </div> <!-- row message -->
                </div>  <!-- message-listing -->
        </div> <!-- chat body -->

        <div class="chat-box">
            <div class="chat-input bg-whit" id="chatInput" contenteditable="">

            </div>
        </div>

        <div class="chat-input-toolbar">
            <button title="add file" class="btn btn-light bth-sm btn-file-upload">
                <i class="fa fa-paperclip"></i>
            </button>
            
            <button title="Bold" class="btn btn-light bth-sm tool-items" onclick="document.('bold' ,false, '');">
                <i class="fa fa-bold  tool-icon"></i>
            </button>

            <button title="Italic" class="btn btn-light bth-sm tool-items" onclick="document.('italic' ,false,'');">
                <i class="fa fa-italic tool-icon"></i>
            </button>

        </div>
          
    </div> <!-- chat section-->
</div> <!-- row -->
@endsection
