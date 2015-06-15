<body>

<div class="convention">
	<h2 class="title">Add Convention </h2>
	<form id="AddConventionForm" class="formInput">
		<input type="text" name="ConventionTitle" class="formInput" placeholder="ConventionTitle">
		<input type="date" placeholder="Start Date" class="inputForm" name="ConventionStart">
		<input type="date" placeholder="End Date" class="inputForm" name="ConventionEnd">
		<textarea placeholder="Description" name="ConventionDescription" class="inputForm"></textarea>
		<input type="button" value="Add Convention" class="inputForm" id="addConvention">
	</form>
</div>

<div class="competition">
	<h2 class="title">Add Competition </h2>
	<form id="AddCompetitionForm" class="formInput">
		<input type="text" name="CompetitionTitle" class="formInput" placeholder="CompetitionTitle">
		<input type="date" placeholder="Start Date" class="inputForm" name="CompetitionStart">
		<input type="date" placeholder="End Date" class="inputForm" name="CompetitionEnd">
		<textarea placeholder="Description" name="CompetitionDescription" class="inputForm"></textarea>
		<input type="button" value="Add Competition" class="inputForm" id="addCompetition">
	</form>
</div>

<div class="userList">
	<h2 class="title">User List</h2>
	<form id="ModifyUserList" class="formInput">
		<input type="text" name="FullName" placeholder="Name" value="<?php echo $user->firstName . ' ' . $user->lastName; ?>" class="formInput">
		<input type="text" name="Email" placeholder="Email" value="<?php echo $user->email; ?>" class="formInput">
		<input type="text" name="Address" placeholder="Address" value="<?php echo $user->address; ?>" class="formInput">
		<input type="text" name="Password" placeholder="Password" value="<?php echo $user->password; ?>" class="formInput">
		<select name="banned" class="formInput">
		<option value="Y">Yes</option>
		<option value="N">No</option>
		</select>
	</form>
</div>

</body>
