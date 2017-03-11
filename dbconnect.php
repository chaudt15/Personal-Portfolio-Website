<?php
if(!mysql_connect("localhost","tmc5614","ghost07rider"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("tristanprojects"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>