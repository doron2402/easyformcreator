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
function Save(Id)
{
	var InputDivId = [];
	var Id = parseInt(Id);
	switch(Id)
	{
		case 1:
			$('#Step1').hide();
			$('#Step2').fadeIn('slow');
			break;
		case 2:
			$('#Step2').hide();
			$(".container").children("#first");
			$("#DropBoard p").each(function()
			{
				InputDivId.push($(this).attr("id"));
				$('#Step3').html($(this).attr("id"));
			});
			//alert(InputDivId[0]);
			var Headline = $('input[name$="FormTitle"]').val();
			var HeadlineText = $('input[name$="FormPre"]').val();
			$('#Step3').append("<h1>" + Headline + "</h1>");
			$('#Step3').append("<summary>" + HeadlineText + "</summary>");
			
			$('#Step3').fadeIn('slow');
	}
}

//Drug and Drop
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}

var Input_Counter = 4;
function AddMore(Id)
{
	switch(Id)
	{
		case 0:
			$('#InputTypeChose').show();
			$('#InputTypeChose').html('<p onClick="AddMore(1);">Text Input</p><p onClick="AddMore(2);">Password Input</p><p onClick="AddMore(3);">File upload Input</p><br /><br />');
			break;
		case 1:
			$('#InputTypeChose').fadeOut();
			$('#InputTypeChose').hide();
			$('#InputType').append('<p id="drag' + Input_Counter +'" draggable="true" ondragstart="drag(event)">Text input</p>');
			Input_Counter++;
			break;
		case 2:
			$('#InputTypeChose').fadeOut();
			$('#InputTypeChose').hide();
			$('#InputType').append('<p id="drag' + Input_Counter +'" draggable="true" ondragstart="drag(event)">Password input</p>');
			Input_Counter++;
			break;
		case 3:
			$('#InputTypeChose').fadeOut();
			$('#InputTypeChose').hide();
			$('#InputType').append('<p id="drag' + Input_Counter +'" draggable="true" ondragstart="drag(event)">File Upload</p>');
			Input_Counter++;			
			break;
	}
}
</script>
<title><?=$Site['Title'];?></title>
<style type="text/css">
#DropBoard {width:350px;height:370px;padding:10px;border:1px solid #aaaaaa;}
p{cursor:pointer;}
#InputTypeChose
{clear:both;}
#InputTypeChose p
{float:left;margin-right:150px;}
</style>
</head>
<body>
<div id="Wrap">
	<div id="Content">
		<div id="header">
			<h1><?=$Site['Headline'];?></h1>
		</div>
		<div id="mainbody">
			<div id="Step1">
				<p>Choose a title for you form </p>
				<input type="text" name="FormTitle" />
				<p>Write something...</p>
				<input type="text" name="FormPre" />
				<a onClick="Save(1);">Continue</a>
			</div>
			<div id="Step2" style="display:none;">
				<p>Choose your Fields</p>
				<a onClick="Save(2);">Continue</a>
				<div id="DropBoard" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				<p onClick="AddMore(0);" draggable="false">Add More Fileds</p>
				<div id="InputTypeChose"></div>
				<div id="InputType">
					<p id="drag1" draggable="true" ondragstart="drag(event)">Text input</p>
					<p id="drag2" draggable="true" ondragstart="drag(event)">Password input</p>
					<p id="drag3" draggable="true" ondragstart="drag(event)">File Upload input</p>
				</div>
			</div>
			<div id="Step3" style="display:none;">
			</div>
		</div>
		<div id="footer"></div>
	</div>
</div>
<script type="text/javascript">

</script>
</body>
</html>