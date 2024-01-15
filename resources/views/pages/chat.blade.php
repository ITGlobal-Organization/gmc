@extends('layouts.layoutv2')

@section('content')
<div class="tyn-root">
			<div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
				<div class="tyn-aside tyn-aside-base">
					<div class="tyn-aside-head">
						<div class="tyn-aside-head-text">
							<h3 class="tyn-aside-title">Chats</h3>
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
						<div class="tyn-aside-search">
							<div class="form-group tyn-pill">
								<div class="form-control-wrap">
									<div class="form-control-icon start">
										<!-- search -->
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
											<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
										</svg>
									</div>
									<input type="text" class="form-control form-control-solid" id="search" placeholder="Search contact / chat">
								</div>
							</div>
						</div>
						<!-- .tyn-aside-search -->
						<div class="tab-content">
							<div class="tab-pane show active" id="all-chats" tabindex="0" role="tabpanel">
								<ul class="tyn-aside-list">
									<li class="tyn-aside-item js-toggle-main active">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/1.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Jasmine Thompson</h6>
													<span class="typing">typing ...</span>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Had they visited Rome before</p>
													<span class="meta">45 min</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/2.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Konstantin Frank</h6>
													<div class="indicator varified">
														<!-- check-circle-fill -->
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
															<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
														</svg>
													</div>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Liked that disco music</p>
													<span class="meta">1 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main unread">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/3.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Mathias Devos</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Hey, how&#39;s it going?</p>
													<span class="meta">2 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/5.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Phillip Burke</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">It&#39;s been really fun so far</p>
													<span class="meta">4 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/6.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Romy Schulte</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">That&#39;s cool!</p>
													<span class="meta">1 week</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/7.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Frances Arnold</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Yeah, I&#39;ve been trying to paint</p>
													<span class="meta">2 weeks</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/8.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Nina Dubois</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">That&#39;s awesome! I&#39;d love to see</p>
													<span class="meta">1 month</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/9.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Albert Henderson</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Sounds good to me</p>
													<span class="meta">3 months</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/10.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Maxim Werner</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Definitely, let&#39;s plan on it</p>
													<span class="meta">1 year</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/11.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Nolan Etienne</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Not really, how about we try</p>
													<span class="meta">2 years</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
								</ul>
							</div>
							<!-- .tab-pane -->
							<div class="tab-pane" id="active-contacts" tabindex="0" role="tabpanel">
								<ul class="tyn-aside-list">
									<li class="tyn-aside-item js-toggle-main active">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/1.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Jasmine Thompson</h6>
													<span class="typing">typing ...</span>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Had they visited Rome before</p>
													<span class="meta">45 min</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/3.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Mathias Devos</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Hey, how&#39;s it going?</p>
													<span class="meta">2 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/4.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Marie George</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Same here. I&#39;ve been trying to keep myself occupied</p>
													<span class="meta">2 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/5.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Phillip Burke</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">It&#39;s been really fun so far</p>
													<span class="meta">4 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/6.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Romy Schulte</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">That&#39;s cool!</p>
													<span class="meta">1 week</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/10.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Maxim Werner</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Definitely, let&#39;s plan on it</p>
													<span class="meta">1 year</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
								</ul>
							</div>
							<!-- .tab-pane -->
							<div class="tab-pane" id="archived-chats" tabindex="0" role="tabpanel">
								<ul class="tyn-aside-list">
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/2.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Konstantin Frank</h6>
													<div class="indicator varified">
														<!-- check-circle-fill -->
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
															<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
														</svg>
													</div>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Liked that disco music</p>
													<span class="meta">1 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/4.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Marie George</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Same here. I&#39;ve been trying to keep myself occupied</p>
													<span class="meta">2 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/5.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Phillip Burke</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">It&#39;s been really fun so far</p>
													<span class="meta">4 days</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/9.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Albert Henderson</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Sounds good to me</p>
													<span class="meta">3 months</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/10.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Maxim Werner</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Definitely, let&#39;s plan on it</p>
													<span class="meta">1 year</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
								</ul>
							</div>
							<!-- .tab-pane -->
							<div class="tab-pane" id="spam-messages" tabindex="0" role="tabpanel">
								<ul class="tyn-aside-list">
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/9.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Albert Henderson</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Sounds good to me</p>
													<span class="meta">3 months</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
									<li class="tyn-aside-item js-toggle-main">
										<div class="tyn-media-group">
											<div class="tyn-media tyn-size-lg">
												<img src="/images/avatar/10.jpg" alt="">
											</div>
											<div class="tyn-media-col">
												<div class="tyn-media-row">
													<h6 class="name">Maxim Werner</h6>
												</div>
												<div class="tyn-media-row has-dot-sap">
													<p class="content">Definitely, let&#39;s plan on it</p>
													<span class="meta">1 year</span>
												</div>
											</div>
										</div>
									</li>
									<!-- .tyn-aside-item -->
								</ul>
							</div>
							<!-- .tab-pane -->
							<div class="tab-pane" id="trash-bin" tabindex="0" role="tabpanel">
								<div class="tyn-aside-row text-center">
									<h6>Nothing in trash</h6>
									<p> Lets delete someting to test it. </p>
								</div>
							</div>
							<!-- .tab-pane -->
						</div>
						<!-- .tab-content -->
					</div>
					<!-- .tyn-aside-body -->
				</div>
				<!-- .tyn-aside -->
				<div class="tyn-main tyn-chat-content" id="tynMain">
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
								<img src="/images/avatar/1.jpg" alt="">
							</div>
							<div class="tyn-media tyn-size-rg d-sm-none">
								<img src="/images/avatar/1.jpg" alt="">
							</div>
							<div class="tyn-media-col">
								<div class="tyn-media-row">
									<h6 class="name">Jasmine <span class="d-none d-sm-inline-block">Thompson</span></h6>
								</div>
								<div class="tyn-media-row has-dot-sap">
									<span class="meta">Active</span>
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
					<div class="tyn-chat-body js-scroll-to-end" id="tynChatBody">
						<div class="tyn-reply" id="tynReply">
							<div class="tyn-reply-separator">Aug 22, 2022, 3:05 PM</div>
							<div class="tyn-reply-item outgoing">
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> Do you know which App or feature it will require to set up. </div>
										<!-- tyn-reply-text -->
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
							<div class="tyn-reply-item incoming">
								<div class="tyn-reply-avatar">
									<div class="tyn-media tyn-size-md tyn-circle">
										<img src="/images/avatar/2.jpg" alt="">
									</div>
								</div>
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> I hope these article helps. </div>
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
						</div>
						<div class="tyn-reply" id="tynReply">
							<div class="tyn-reply-separator">Aug 22, 2022, 3:05 PM</div>
							<div class="tyn-reply-item outgoing">
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> Do you know which App or feature it will require to set up. </div>
										<!-- tyn-reply-text -->
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
							<div class="tyn-reply-item incoming">
								<div class="tyn-reply-avatar">
									<div class="tyn-media tyn-size-md tyn-circle">
										<img src="/images/avatar/2.jpg" alt="">
									</div>
								</div>
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> I hope these article helps. </div>
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
						</div>
						<div class="tyn-reply" id="tynReply">
							<div class="tyn-reply-separator">Aug 22, 2022, 3:05 PM</div>
							<div class="tyn-reply-item outgoing">
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> Do you know which App or feature it will require to set up. </div>
										<!-- tyn-reply-text -->
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
							<div class="tyn-reply-item incoming">
								<div class="tyn-reply-avatar">
									<div class="tyn-media tyn-size-md tyn-circle">
										<img src="/images/avatar/2.jpg" alt="">
									</div>
								</div>
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> I hope these article helps. </div>
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
						</div>
						<div class="tyn-reply" id="tynReply">
							<div class="tyn-reply-separator">Aug 22, 2022, 3:05 PM</div>
							<div class="tyn-reply-item outgoing">
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> Do you know which App or feature it will require to set up. </div>
										<!-- tyn-reply-text -->
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
							<div class="tyn-reply-item incoming">
								<div class="tyn-reply-avatar">
									<div class="tyn-media tyn-size-md tyn-circle">
										<img src="/images/avatar/2.jpg" alt="">
									</div>
								</div>
								<div class="tyn-reply-group">
									<div class="tyn-reply-bubble">
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
									<div class="tyn-reply-bubble">
										<div class="tyn-reply-text"> I hope these article helps. </div>
										<ul class="tyn-reply-tools">
											<li>
												<button class="btn btn-icon btn-sm btn-transparent btn-pill">
													<!-- emoji-smile-fill -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
														<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
													</svg>
												</button>
											</li>
											<!-- li -->
											<li class="dropup-center">
												<button class="btn btn-icon btn-sm btn-transparent btn-pill" data-bs-toggle="dropdown">
													<!-- three-dots -->
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
														<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
													</svg>
												</button>
												<div class="dropdown-menu dropdown-menu-xxs">
													<ul class="tyn-list-links">
														<li>
															<a href="#">
																<!-- pencil-square -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
																	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
																<span>Edit</span>
															</a>
														</li>
														<li>
															<a href="#">
																<!-- trash -->
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
																	<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
																</svg>
																<span>Delete</span>
															</a>
														</li>
													</ul>
													<!-- .tyn-list-links -->
												</div>
												<!-- .dropdown-menu -->
											</li>
											<!-- li -->
										</ul>
										<!-- .tyn-reply-tools -->
									</div>
									<!-- .tyn-reply-bubble -->
								</div>
								<!-- .tyn-reply-group -->
							</div>
							<!-- .tyn-reply-item -->
						</div>
						<!-- .tyn-reply -->
					</div>

					<!-- .End chat-head -->
					<!-- .tyn-chat-body -->
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
	
				</div>
				<!-- .tyn-chat-content -->
			</div>
</div>
@endsection
@section('scripts')
<script>
	$(document).on('click','#tynChatSend',function(){
		echo.channel('chat').whisper('typing', { user: "{{ auth()->user()->name }}" });
	})
</script>
@endsection