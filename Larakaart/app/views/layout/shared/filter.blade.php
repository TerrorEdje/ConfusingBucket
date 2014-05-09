<div id="filter_container">
	<a href="#">
		<div id="filter_button" class="rounded-left">
			<span class="glyphicon glyphicon-search search-icon"></span>
		</div>
	</a>
	<div id="filter_bar" class="rounded-bottomleft scroll">
		<form class="form-horizontal" id="filter_form">
			<fieldset>
				<input type="text" class="form-control" id="filter-input" placeholder="Search" name="search"><br />

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
								<input type="checkbox" name="filter-final_thesis" id="filter-final_thesis" value="final_thesis" checked>
								Final thesis
							</label>
						</div>
						<div class="checkbox">
							<label for="type-2">
								<input type="checkbox" name="filter-minor" id="filter-minor" value="minor" checked>
								Minor
							</label>
						</div>
						<div class="checkbox">
							<label for="type-3">
								<input type="checkbox" name="filter-eps" id="filter-eps" value="eps" checked>
								EPS
							</label>
						</div>
					</div>
				</div>
                <div class="form-group">
					<label class="col-md-6 control-label" for="filters">Year</label>
					<div class="col-md-6">
                        <input type="text" class="form-control" id="filter-year" placeholder="Year" name="year"><br />
                    </div>
				</div>
                
                <!--<div class="form-group">
                    <div class="col-md-12">
                        <select name="year" class="form-control" id="filter-year">
                            <option value="0">All years</option>
                        </select>
                    </div>
                </div>-->
                
                <div class="form-group">
                    <div class="col-md-12">
                        <select name="study" class="form-control" id="filter-study">
                            <option value="all">All studies</option>
                        </select>
                    </div>
                </div>
                
				<button type="submit" class="btn btn-primary filter_submit">Search</button>
			</fieldset>
		</form>
		<br />
		<button class="btn btn-primary filter_reset">Reset</button>
	</div>
</div>