<?php 
  $currentPage = "Home Page";
  include "inc/top.inc"; 
?>

<?php 
  $currentPage = "index";
  include "inc/nav.inc"; 
?>

<h2>Home Page - Major Accomplishments</h2>

<nav class="sub-menu">
	<ul>
		<li><a href="#tennis">Tennis</a></li>
		<li><a href="#first-job">First Job</a></li>
		<li><a href="#constellation">CBI</a></li>
		<li><a href="#car">My Car</a></li>
	</ul>
</nav>
<br>

<div class="section2">
	<ul>
		<li id="tennis">
			<img src="images/tennis.jpg" alt="Tennis pic">
			<h3>Tennis</h3>
			<p>I have been playing tennis since I was 8 years old. But my greatest achievement in this sport has been earning my spot to play for the varisty tennis team in the University of Rochester. This achievement gave me also my closest friends since the beginning of college. I started playing my Freshmen year, but decided to take a break to focus on school during my Junior year. Now, I'm back as a senior, ready to finish strong. I'm excited to see what the spring season brings.</p>
			<br>
			<hr>
		</li>

		<li id="first-job">
			<img src="images/brown.jpg" alt="Summer @ Brown">
			<h3>My First Job</h3>
			<p>During my first summer here in The United States, I got to be a Resident Advisor at Brown University. I was able to interact with kids that were still in high school, but that wanted to have the experience of living in a dorm, and having classes just like a normal college student. We got to spend time with all of them, have lunch, take them to trips, and show them what life in college is all about. They were very nervous and shy at the beginning, but they all left with a smile on their face. It was a great experience, and a great acheivement for me.</p>
			<br>
			<hr>
		</li>

		<li id="constellation">
			<img src="images/constellation.jpg" alt="Constellation Brands">
			<h3>Constellation Brands Inc.</h3>
			<p>Last summer, I applied for an internship in Constellation Brands Inc. and was able to experience working as a full time employee in an office. I even got to travel for work to Mexico. It was definitely hard to get used to the entire work environment, but at the end I was very happy working with all the managers in my team, they even asked me to stay for the fall semester, and now, I will be staying with them for another 4 months during the spring semester.</p>
			<br>
			<hr>
		</li>

		<li id="car">
			<img src="images/car.jpg" alt="Henry, my car">
			<h3>My Car</h3>
			<p>After getting the job with CBI, I realized I had to buy a car to be able to go to work. I was going to work 5 days a week, and a cab wasn't an option. For that reason, I decided to spend most of the money I had saved on a car. Henry is the first car I buy with my own money. It felt great to know that it was something I earned by myself. Of course I had help from my best friends, but the money came from my pocket. I feel like buying Henry has been one of the greatest achievements in my life.</p>
		</li>
	</ul>
</div>



<?php
	include "inc/bottom.inc";
?>