<?php

/*
	Easy Form Creator

	Form:
	Title
	File upload, 
*/

$Site = array("Title" => 'Easy Form Creator','Headline' => 'Easy Form Creator');

?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<script type="text/javascript">
var Field_Num = 1;
function AddField(Id)
{
	if (Id == 0)
	{
		$('#fieldSelect').html('<p>Which Field you would like to select?</p><a class="inputButton" onClick="AddField(1);">Text</a><a class="inputButton" onClick="AddField(2);">Password</a><a class="inputButton" onClick="AddField(3);">File</a>');
	}
	else
	{
		$('form').append('<br />');
		switch(Id)
		{
			case 1:
				//Text Field
				$('form').append('<label>Field_Text_' + Field_Num + '<input type="text" name="Field_Text_' + Field_Num + '" /></label>');
				break;
			case 2:
				//Password input
				$('form').append('<label>Field_Password_' + Field_Num + '<input type="password" name="Field_Password_' + Field_Num + '" /></label>');
				break;
			case 3:
				//Password input
				$('form').append('<label>Field_File_' + Field_Num + '<input type="file" name="Field_File_' + Field_Num + '" /></label>');
				break;
				
		}
		Field_Num++;
	}
}
</script>
<title><?=$Site['Title'];?></title>
</head>
<body>
<div id="ChangeText" style="display:none;position:absolute;top:200px;width:400px;height:100px;right:200px;"></div>
<div id="Wrap">
	<div id="Content">
		<div id="header">
			<h1><?=$Site['Headline'];?></h1>
		</div>
		<div id="mainbody">
		<a onClick="AddField(0);">Add Input to Form</a>
			<div id="fieldSelect"></div>
		<form>
			<label>Form Title: <input type="text" name="Title" /></label>
		</form>
		</div>
		<div id="footer"></div>
	</div>
</div>
<script type="text/javascript">
function closeSaveVal()
{
	$('#ChangeText').html('');
	$('#ChangeText').hide();
}

$("label").live("click", function() {  
    var old_val = $(this).text();

	if ( $('#ChangeText').is(':visible') ) 
	{
		//Do nothing
	}
	else
	{
		$('#ChangeText').append('Old Value : ' + old_val + '<br />');
		$('#ChangeText').append('New Value : <input type="text" id="newValue" name="newVal" />');
		$('#ChangeText').append('<p onClick="$(\'label\').text($(\'#newValue\').val());">Save</p><p onClick="closeSaveVal();">Close</p>');
		$('#ChangeText').fadeIn('slow');
	}

});
</script>
</body>
</html>