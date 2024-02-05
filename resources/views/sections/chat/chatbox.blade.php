<div class="tyn-chat-head">
   <ul class="tyn-list-inline d-md-none ms-n1">
      <li>
         <button class="btn btn-icon btn-md btn-pill btn-transparent js-toggle-main">
            <!-- arrow-left -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
         </button>
      </li>
   </ul>
   <div class="tyn-media-group">
      <div class="tyn-media tyn-size-lg d-none d-sm-inline-flex">
         @include('components.image',[

                                        'image' => $User->media[0]->image_url
                                    ])
      </div>
      <div class="tyn-media tyn-size-rg d-sm-none">
         @include('components.image',[

                                        'image' => $User->media[0]->image_url
                                    ])
      </div>
      <div class="tyn-media-col">
         <div class="tyn-media-row">
            @php 
               $heading = Helper::formatHeading($User->first_name," ","d-none d-sm-inline-block");
            @endphp
            <h6 class="name">{!! $heading !!}</h6>
         </div>
         <div class="tyn-media-row has-dot-sap">
            <span class="meta">{{ !$User->is_logout?trans('lang.active'):trans('lang.inactive')}}</span>
         </div>
      </div>
   </div>
   <div class="tyn-chat-search" id="tynChatSearch">
      <div class="flex-grow-1">
         <div class="form-group">
            <div class="form-control-wrap form-control-plaintext-wrap">
               <div class="form-control-icon start">
                  <!-- search -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                     <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg>
               </div>
               <input type="text" class="form-control form-control-plaintext" id="searchInThisChat" placeholder="Search in this chat">
            </div>
         </div>
      </div>
      <div class="d-flex align-items-center gap gap-3">
         <ul class="tyn-list-inline ">
            <li>
               <button class="btn btn-icon btn-sm btn-transparent">
                  <!-- chevron-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                  </svg>
               </button>
            </li>
            <li>
               <button class="btn btn-icon btn-sm btn-transparent">
                  <!-- chevron-down -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                  </svg>
               </button>
            </li>
         </ul>
         <ul class="tyn-list-inline ">
            <li>
               <button class="btn btn-icon btn-md btn-light js-toggle-chat-search">
                  <!-- x-lg -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                     <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
               </button>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- .Start chat-head -->

<div class="tyn-chat-body js-scroll-to-end chat-msg" id="tynChatBody">
@if(count($Messages) > 0)
   @foreach($Messages as $Msg)
   
      @include('sections.chat.message')
      <!-- .tyn-reply-item -->
   @endforeach
   <!-- .tyn-reply -->
   @endif
</div>

<div class="tyn-chat-form">
   <div class="tyn-chat-form-insert">
   </div>
   <div class="tyn-chat-form-enter">
      <div class="tyn-chat-form-input" id="tynChatInput" contenteditable></div>
      <ul class="tyn-list-inline me-n2 my-1">
         <li>
            <button class="btn btn-icon btn-white btn-md btn-pill" id="tynChatSend">
               <!-- send-fill -->
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
               </svg>
            </button>
         </li>
      </ul>
   </div>
</div>
<!-- .tyn-chat-form -->