<div class="tyn-aside tyn-aside-base">
					<div class="tyn-aside-head">
						<div class="tyn-aside-head-text">
							<h3 class="tyn-aside-title">{{ trans('lang.messages')}}</h3>
						</div>
						<div class="tyn-aside-head-tools">
							<ul class="link-group gap gx-3">
							</ul>
							<!-- .link-group -->
						</div>
						<!-- .tyn-aside-head-tools -->
					</div>
					<!-- .tyn-aside-head -->
					<div class="tyn-aside-body" data-simplebar>
                        @include('sections.chat.search')
						<!-- .tyn-aside-search -->
						<div class="tab-content">
							<div class="tab-pane show active" id="all-chats" tabindex="0" role="tabpanel">
								<ul class="tyn-aside-list">
                                    @if(count($Users))
									<input type="hidden" id="user_id" value="{{ request()->user_id?request()->user_id:$Users[0]->id }}"/>
                                    @foreach($Users as $key =>  $User)
									@php 
										$active = '';
										if(request()->user_id){
											if($User->id == request()->user_id)
												$active = 'active';
										}else if($key == 0){
											$active = 'active';
										}
									@endphp
									<li class="tyn-aside-item js-toggle-main {{ 
										$active
									}}">
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
													@if($User->unread_messages > 0)
														<span class="message-count message-count-{{ $User->id}}">{{ $User->unread_messages }}</span>
													@endif
													@endif
												</div>
												@if(isset($User->message))
												<div class="tyn-media-row has-dot-sap">
													<p class="content">{{ $User->message }}</p>
													<span class="meta">{{ $User->message_time }}</span>
												</div>
												@endif
											</div>
										</div>
									</li>
                                    @endforeach
										
                                    @endif
									<!-- .tyn-aside-item -->
									
									<!-- .tyn-aside-item -->
								</ul>
							</div>
							<!-- .tab-pane -->
							
							<!-- .tab-pane -->
						</div>
						<!-- .tab-content -->
					</div>
					<!-- .tyn-aside-body -->
				</div>