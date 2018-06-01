<div class="main-section">
	<div class="row border-chat">
		<div class="col-md-12 col-sm-12 col-xs-12 first-section">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
					<p>Chat</p>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
					<a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row border-chat">
		<div class="col-md-12 col-sm-12 col-xs-12 second-section">
			<div class="chat-section">
				<ul>
					@for ($i = 0; $i < 4; $i++)
					<li>
						<div class="left-chat">
							<img src="https://placeimg.com/60/60/people">
							<p>Lorem ipsum dolor sit ameeserunt.
							</p>
							<span>2 min</span>
						</div>
					</li>
					<li>
						<div class="right-chat">
							<img src="https://placeimg.com/60/60/people">
							<p>Lorem ipsum dolor sit ameeserunt.</p>
							<span>2 min</span>
						</div>
					</li>
					<li>
						<div class="left-chat">
							<img src="https://placeimg.com/60/60/people">
							<p>Lorem ipsum dolor sit ameeserunt.</p>
							<span>2 min</span>
						</div>
					</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>
	<div class="row border-chat">
		<div class="col-md-12 col-sm-12 col-xs-12 third-section">
			<div class="text-bar">
				<input type="text" placeholder="Write messege"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
