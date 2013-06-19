<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional //EN">
<html>
        <head>
				<LINK REL="SHORTCUT ICON" href="logo.svg">
                <title>
                  Biocontrol
                </title>
                <link rel="stylesheet" type="text/css" href="css/biocontrol.css" />
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
				<script type="text/javascript"src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
				<script type="text/x-mathjax-config">
					MathJax.Hub.Config({
					 tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
					});
				</script>
				<script type="text/javascript" src="js/transition.js"></script>
        </head>
        <body>
			<div id = 'dna'></div>
			<div class="banner">
				<span id ='title1'><font color="yellow">Jack Baskin School of Engineering,</font> University of California Santa Cruz</span>
				<span id = 'title2'>Biomolecular Controls Laboratory</span>
				<div class="nav">
					<ul>
						<li id = "home" onclick = "openText(this)">Lab Home</li>
						<li id = "research" onclick = "openText(this)">Research</li>
						<li id = "members" onclick = "openText(this)">Members</li>
						<li id = "contact" onclick = "openText(this)">Contact</li>
					 </ul>
				</div>
			</div>
			<div id = "banner_backdrop"></div>
			<div id = "banner_slug">
				<embed width=500px height=500px src="slugbanner.svg" type="image/svg+xml" />
			</div>
			<div class="main">	
				<div id = "home_text"> 
					<span id = "first_word">We focus primarily on the application of systems and control theory
					to research problems in single-molecule instrumentation and biophysics.</span> 
					The image depicts a biological nanopore and a captured protein-bound DNA 
					complex under voltage control. In this simple configuration, feedback voltage control 
					enables rapid single-molecule manipulation and measurement. This research involves several 
					collaborators, including faculty, staff and students from Biomolecular Engineering, Computer 
					Engineering and Applied Mathematics and Statistics. Funding sources for research involving 
					biological and solid-state nanopores include NIH, NSF and the W.M. Keck Foundation. 
					<!--<div class = "math">
						</br>
						$\dot{x} = Ax + Bu$
						</br>
						$y = Cx + Du$
						</br>
					</div>-->
				</div>
				<div id = "research_text">
					<span id = "first_word">We focus primarily on the application of systems and control theory
					to research problems in single-molecule instrumentation and biophysics.</span> 
				</div>
				<div id = "members_text">
					<ul>
						<li class = "member_section">Principle Investigator</li>
							<ul>
								<li id = "bill">William Dunbar</li>
							</ul>
						<li class = "member_section">Graduate Students</li>
							<ul>
								<li id = "chris">Christopher O'Donnel</li>
								<li id = "shea">Shea Ellerson</li>
								<li id = "raj">Raj Maitra</li>
							</ul>
						<li class = "member_section">Undergraduate Students</li>
							<ul>
								<li id = "asma">Asma...</li>
								<li id = "daryl">Daryl Deo</li>
							</ul>
						<li class = "member_section">Alumni</li>
							<ul>
								<li id = "daniel">Daniel Geralde</li>
								<li id = "noah">Noah Wilson</li>
								<li id = "edolfo">Edolfo</li>
								<li id = "robin">Robin Abu-Shumays</li>
							</ul>
					</ul>
				</div>
				<div id = "raj_text">
					waddup
				</div>
				<div id = "bill_text">
					waddup
				</div>
				<div id = "shea_text">
					waddup
				</div>
				<div id = "contact_text">
					<span id = "first_word">Please contact principal investigator: William B. Dunbar at wdunbar at soe.ucsc.edu</span>
				</div>
				<div id="news_text"><h3>News:</h3>Raj has finished the lab wesbite!</div>
			</div>	
			<canvas id="canvas" width="1500" height="900"></canvas>
			<script type="text/javascript" src="js/vector_bg.js"></script>
			<script type="text/javascript" src="js/init_bg.js"></script>
        </body>
</html>
