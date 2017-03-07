<?php include_once 'session.php'; ?>
<?php include 'opendb.php'; ?>
<?php include 'header.php'; ?>
<?php
	if($_SERVER["HTTPS"] != "on") {
		header("Location: https://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit;
	}
?>
<br/>
<u>
<b>
   Information about this site:
</b>
</u> 

<br/>
<br/>
<br/>
This website aims to serve as a bridge of communication for current students, alumni of <a href="http://www.tamuc.edu/campusLife/CampusServices/default.aspx"><b> TAMUC</b></a> 
 and prospective undergraduates considering to attend Texas A & M Commerce.


<br/>
<br/>
At this websites, prospective students are able to <a href=""><b> view profiles </b></a> of current students or alumni. The benefit of this 
is that they may search up people who have gone to the same high school as them and understand how these people are
doing at TAMUC.

<br/>
<br/>
Both prospective students and current/alumni are able to  <a href=""><b> register with an account </b></a> at this website therefore being able to communicate
more freely with members already with accounts and getting regular updates regarding their goals, ambitions through blog posts.

<br/>
<br/>
Besides the provided TAMUC blog service, this website integrates Twitter, so that prospective students are also able to access updates from current members'
more personal life outside TAMUC.

 <br/>
 <br/>
 
 


<?php include 'rightcolumn.php'; ?>		
<?php include 'footer.php'; ?>
	
