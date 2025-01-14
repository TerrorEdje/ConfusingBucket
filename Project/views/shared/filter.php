<div id="filter_container">
	<a href="#">
		<div id="filter_button" class="rounded-left">
			<span class="glyphicon glyphicon-search search-icon"></span>
		</div>
	</a>
	<div id="filter_bar" class="rounded-bottomleft scroll">
		<form class="form-horizontal" id="filter_form">
			<fieldset>
				<input type="text" class="form-control" id="filter_input" placeholder="Search" name="search"><br />

				<div class="form-group">
					<label class="col-md-6 control-label" for="searchFor">Search for</label>
					<div class="col-md-6">
						<div class="radio">
							<label for="search_for-0">
								<input type="radio" name="searchFor" id="filter-country" value="country" checked>
								Country
							</label>
						</div>
						<div class="radio">
							<label for="search_for-1">
								<input type="radio" name="searchFor" id="filter-city" value="city">
								City
							</label>
						</div>
						<div class="radio">
							<label for="search_for-2">
								<input type="radio" name="searchFor" id="filter-person" value="person">
								Person
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-6 control-label" for="filters">Type</label>
					<div class="col-md-6">
						<div class="checkbox">
							<label for="type-0">
								<input type="checkbox" name="filter-internship" id="filter-internship" value="internship" checked>
								Internship
							</label>
						</div>
						<div class="checkbox">
							<label for="type-1">
								<input type="checkbox" name="filter-graduation" id="filter-graduation" value="graduation" checked>
								Graduation
							</label>
						</div>
						<div class="checkbox">
							<label for="type-0">
								<input type="checkbox" name="filter-minor" id="filter-minor" value="minor" checked>
								Minor
							</label>
						</div>
						<div class="checkbox">
							<label for="type-1">
								<input type="checkbox" name="filter-eps" id="filter-eps" value="eps" checked>
								EPS
							</label>
						</div>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary filter_submit">Search</button>
			</fieldset>
		</form>
		<br />
		<button class="btn btn-primary filter_reset">Reset</button>
		
		<br />
		
		- opleiding<br />
	</div>
</div>