	
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<% control Days(2) %>
					<div class="col-md-$ColSpan">
						<div class=" day day$DayNumber">
							<h3 class="day-title">$DayTitle</h3>
							<% if Events.Count %>
								<% control Events %>
								<div class="media $CategoryList">
									<div class="media-pad clearfix">
										<a class="pull-left" href="#">
											$VenueLogo

										</a>
										<div class="media-body">
											<h5 class="text-muted pull-right">$Time.Nice<h5>
											<h4 class="media-heading">$Venue.Title</h4>
											<small class="text-muted truncate">$Blurb</small>
										</div>
									</div>
									<div class="media-footer">
										<% if Venue.Email %>
											<a href="mailto:$Venue.Email" title="$Venue.Email" data-toggle="tooltip" class="btn btn-xs"><span class="glyphicon"><b>@</b></span></a>
										<% end_if %>
										<% if Venue.Website %>
											<a href="mailto:$Venue.Website" title="$Venue.Website" data-toggle="tooltip" class="btn btn-xs"><span class="glyphicon"><b>www</b></span></a>
										<% end_if %>
										<% if Venue.Map %>
											<a href="#" class="btn btn-xs"><span class="glyphicon glyphicon-map-marker"></span></a>
										<% end_if %>
										<% if FacebookLink %>
											<a href="$FacebookLink" class="btn btn-xs"><span class="glyphicon"><b>f</b></span></a>
										<% else_if Venue.FacebookLink %>
											<a href="$Venue.FacebookLink" class="btn btn-xs"><span class="glyphicon"><b>f</b></span></a>
										<% end_if %>
										<% if Venue.Phone %>
											<a class="btn btn-xs" data-toggle="tooltip" title="$Venue.Phone" ><span class="glyphicon glyphicon-earphone"></span></a>
										<% end_if %>

									</div>
								</div>
								<% end_control %>
							<% else %>
								<div class="media $CategoryList">
									<div class="media-pad">
										<h5 class="text-center">No Events</h5>
									</div>
								</div>
							<% end_if %>
						</div>
					</div>
					<% end_control %>
				</div>	
			</div>
			
			<div class="col-md-3">
				<h3 class="day-title">Coming Up</h3>
				<div class="filter">
					<div class="checkbox">
					<label>
					  <input type="checkbox" value="event"> Events
					</label>
					<div class="sub-filter">
						<label>
							<input type="checkbox" value="live"> Live Gigs
						</label>
						<label>
							<input type="checkbox" value="dj"> DJs
						</label>
					</div>
				  </div>
				</div>
			</div>