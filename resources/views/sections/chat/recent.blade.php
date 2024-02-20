
<ul class="tyn-aside-list">
                                    @if(count($Users))
									<input type="hidden" id="user_id" value="{{ $Users[0]->id }}"/>
                                    @foreach($Users as $User)
									<li class="tyn-aside-item js-toggle-main active">
										<div class="tyn-media-group chat-user" data-id="{{ $User->id}}">
											<div class="tyn-media tyn-size-lg">
											@include('components.image',[

											'image' => $User->image_url
											])
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">{{ $User->name}}</h6>
													@if(isset($User->message))
													<span class="message-typing-{{$User->id}}"></span>
													
													@endif
												</div>
												@if(isset($User->message))
												<div class="tyn-media-row has-dot-sap">
													<p class="content">{{ $User->message }}</p>
													<span class="meta">{{ $User->message_time }}</span>
												</div>
												@endif
											</div>
											<div class="addnew-btn"><a href="{{ prefix_route('chat.index',[
											'user_id' => $User->id
											]) }}">{{ trans('lang.open_chat')}}</a></div>
										<div class="clr"></div>
										</div>
										
									</li>
                                    @endforeach
										
                                    @endif
									<!-- .tyn-aside-item -->
									
									<!-- .tyn-aside-item -->
								</ul>
