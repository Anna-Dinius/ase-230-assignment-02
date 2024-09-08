<?php
require_once('memberDetails.php');
require_once('functions.php');

$i = $_GET['index'];
$member = $members[$i];

$name = $member['firstname'].' '.$member['lastname'];

// Progress bar widths for Skills & Tools section
$widths = [
	98,
	94,
	96,
	92,
	96
]
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>
		<?= $name ?>'s Resume
	</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?= $name ?> resume">
	<meta name="author" content="<?= $name ?>">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
			
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="mb-4">
			<a href="index.php" class="btn btn-primary">Back to index</a>
		</div>

		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<!-- Image -->	
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img
							class="picture"
							src="<?= $member['image'] ?>"
							alt="Profile of <?= $name ?>"
						>
					</div><!--//col-->

					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									<?= $name ?>
								</h1>
								
								<div class="title mb-3">
									<?= $member['desiredJobTitle'] ?>
								</div>
								
								<ul class="list-unstyled">
									<li class="mb-2">
										<a class="text-link" href="#">
											<i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>
											<?= $member['email'] ?>
										</a>
									</li>
									
									<li>
										<a class="text-link" href="#">
											<i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>
											<?= $member['phone'] ?>
										</a>
									</li>
								</ul>
							</div><!--//primary-info-->
							
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3">
										<a class="text-link" href="<?= $member['linkedin'] ?>">
											<span class="fa-container text-center me-2">
												<i class="fab fa-linkedin-in fa-fw"></i>
											</span>
											<?= $member['linkedin'] ?>
										</a>
									</li>

									<li class="mb-3">
										<a class="text-link" href="<?= $member['github'] ?>">
											<span class="fa-container text-center me-2">
												<i class="fab fa-github-alt fa-fw"></i>
											</span>
											<?= $member['github'] ?>
										</a>
									</li>

									<?php
										if ($member['website']) {
									?>
									<li>
										<a class="text-link" href="<?= $member['website'] ?>">
											<span class="fa-container text-center me-2">
												<i class="fas fa-globe"></i>
											</span>
											<?= $member['website'] ?>
										</a>
									</li>
									<?php
										}
									?>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->
					</div><!--//col-->
				</div><!--//row-->
			</header>

			<div class="resume-body p-5">
				<!-- Summary -->
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					
					<div class="resume-section-content">
						<p class="mb-0">
							<?= $member['summary'] ?>
						</p>
					</div>
				</section><!--//summary-section-->

				<div class="row">
					<!-- Work Experience -->	
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<!-- PHP for loop for work exerpience-->
									<?php 
										foreach($members[$i]['workExperience'] as $work){
									?>
										<article class="resume-timeline-item position-relative pb-5">
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1"><?= $work['title']?></h3>
													
													<div class="resume-company-name ms-auto"><?= $work['company']?></div>
												</div><!--//row-->
												
												<div class="resume-position-time"><?= $work['time']?></div>
											</div><!--//resume-timeline-item-header-->
											
											<div class="resume-timeline-item-desc">
												<p><?= $work['description']?></p>
												
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
												
												<p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
												
												<ul>
													<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
													<li>At vero eos et accusamus et iusto odio dignissimos.</li>
													<li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
													<li>Maecenas tempus tellus eget.</li>
												</ul>
												
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												
												<ul class="list-inline">
													<?php foreach($work['technologies'] as $technology){ ?>
														<li class="list-inline-item">
															<span class="badge bg-secondary badge-pill">
																<?= $technology ?>
															</span>
														</li>
													<?php }?>
												</ul>
											</div><!--//resume-timeline-item-desc-->
										</article><!--//resume-timeline-item-->
									<?php
										}
									?>									
								</div><!--//resume-timeline-->
							</div>
						</section><!--//projects-section-->
					</div>

					<div class="col-lg-3">
						<!-- Skills & Tools -->
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php
											$max_index = 0;

											if (count($member['skillsTools']) > count($widths)) {
												$max_index = count($widths);
											}
											elseif (count($member['skillsTools']) < count($widths)) {
												$max_index = count($member['skillsTools']);
											}
											
											for ($i = 0; $i < $max_index; $i++) {
										?>
											<li class="mb-2">
												<div class="resume-skill-name">
													<?= $member['skillsTools'][$i] ?>
												</div>

												<div class="progress resume-progress">
													<div
														class="progress-bar theme-progress-bar-dark"
														role="progressbar"
														style="width: <?= $widths[$i] ?>%"
														aria-valuenow="25"
														aria-valuemin="0"
														aria-valuemax="100"
													></div>
												</div>
											</li>
										<?php
										}
										?>
									</ul>
								</div><!--//resume-skill-item-->
									
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									
									<ul class="list-inline">
										<?php
											for ($i = 0; $i < count($member['otherSkills']); $i++) {
										?>
												<li class="list-inline-item">
													<span class="badge badge-light">
														<?= $member['otherSkills'][$i] ?>
													</span>
												</li>
										<?php
											}
										?>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						
						<!-- Education -->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-2">
										<div class="resume-degree font-weight-bold">MSc in Computer Science</div>
										<div class="resume-degree-org">University College London</div>
										<div class="resume-degree-time">2013 - 2014</div>
									</li>

									<li>
										<div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
										<div class="resume-degree-org">Imperial College London</div>
										<div class="resume-degree-time">2010 - 2013</div>
									</li>
								</ul>
							</div>
						</section><!--//education-section-->

						<!-- Awards -->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<div class="resume-award-name">Award Name Lorem</div>
										<div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
									</li>
									
									<li class="mb-0 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<div class="resume-award-name">Award Name Ipsum</div>
										<div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
									</li>
								</ul>
							</div>
						</section><!--//interests-section-->

						<!-- Languages -->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<li class="mb-2">
										<span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small>
									</li>
									
									<li class="mb-2 align-middle">
										<span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small>
									</li>
									
									<li>
										<span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small>
									</li>
								</ul>
							</div>
						</section><!--//language-section-->
						
						<!-- Interests -->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-1">Climbing</li>
									<li class="mb-1">Snowboarding</li>
									<li class="mb-1">Cooking</li>
								</ul>
							</div>
						</section><!--//interests-section-->
					</div>
				</div><!--//row-->

				<!-- Projects -->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->
		</div>
	</article> 

	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">
			Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php listNames($members) ?>
		</small>
	</footer>
</body>
</html> 

