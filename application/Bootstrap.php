<?
// This is where we'd put in some code for our new feature

function foo($bar) {
	echo $bar;
}

function getGlossary($id) {
	return $glossary;
}

function showGlossary() {
	echo $glossary;
}

function deleteGlossary($id) {
	$glossary->Delete();
}

function editGlossary($id) {
	$glossary->edit();
}

function meow(){
	echo 'purrr!!!!!';
}