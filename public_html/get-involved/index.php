<?php
   $title = "Get involved in the FAIRplus project| FAIRplus";
   $description = "Ways to get involved in the FAIRplus project";
   $section = "get-involved";
   $page = "get-involved";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Get involved</h1>
                   <figure class="float-right percent-40">
                     <img src="../images/delegates-fairplus-sme.jpg" alt="Delegates at the first FAIRplus SME event" class="fill" />
                     <figcaption>Delegates at the first 'FAIR Innovation and SME' event (January 2020, Hinxton, UK).</figcaption>
                  </figure>
                  <h2 id="sme" class="no-top-margin">Innovation and SME Forums</h2>

                  <p>The FAIRplus Innovation and SME Forums are aimed at biotech companies interested in making their data FAIR, technology companies offering on FAIRification services, and academic group interested in FAIRification for their data collections.</p>

                  <p>There will be a total of three Innovation and SME Forums organised by FAIRplus, the goal is to bring together researchers, IT managers and FAIR data experts to share their experience and provide feedback on the tools and resources developed by the FAIRplus project.</p>

                  <p><a href="/get-involved/innovation-sme-forum">Innovation and SME Forums page</a> &raquo;</p>
                  <div class="tinted rounded inner-padding dark-background xx-top-margin">
                    <h2 class="no-top-margin">Contribute to the FAIR Cookbook</h2>
                    <a href="https://fairplus.github.io/the-fair-cookbook/content/home.html"><img src="/images/fair-cookbook.png" alt="FAIR cookbook screenshot" style="width: 100%;" class="border"/></a>
                  <p class="top-margin"><strong>Join us to make the <a href="https://fairplus.github.io/the-fair-cookbook/content/home.html">FAIR Cookbook</a> better by contributing recipes, suggesting improvements, or just giving us new ideas.</strong></p><p> There are lots of ways you can contribute - we've tried to make it as easy as possible! Start with our <a href="https://fairplus.github.io/the-fair-cookbook/content/recipes/help.html">contribute page</a> or join one our monthly 'book dashes' on the last Wednesday of each month (contact <a href="mailto:fairplus-cookbook@elixir-europe.org">fairplus-cookbook@elixir-europe.org</a>).</p>
                  <p> The FAIR Cookbook is now a recommended resource for data management within EC-funded <a href="https://www.imi.europa.eu/projects-results">IMI projects</a>, so help us make it easier for everyone to have FAIR data.</p>
                  <p>Spot something amiss in the Cookbook? <a href="https://github.com/FAIRplus/the-fair-cookbook/issues/new?title=Issue%20on%20page%20%2Fcontent/home.html&body=Your%20issue%20content%20here">Report it on GitHub</a>.</p>
                  </div>

                  <h2 id="fellowships">Fellowship Programme</h2>
                  <p>The FAIRplus Fellowship Programme is a comprehensive training programme in FAIR data management. The programme will run for a period of approximately 8 months, starting in May 2021 and will guide its fellows through a series of modules combining online learning, 'training on the job' and short face-to-face meetings. After completing the programme, the fellows will have the confidence to lead, advise and initiate FAIR data processes in their respective companies and organisations.</p>


                  <p><a href="/get-involved/fellowship">Fellowship Programme page</a> &raquo;</p>

                  </p>

                  <ul class="inline-links x-top-margin">
                    <li><a href="#main-header">Back to the top</a></li>
                  </ul>
                </article>
             </div>
             <div class="percent-25">
               <?php
                 include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-get-involved.inc";
               ?>
				<div class="xx-top-margin">
	               <?php
	                  include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
	               ?>
			   </div>
               <div class="xx-top-margin">
                 <?php
                   include $_SERVER['DOCUMENT_ROOT']."/includes/twitter-feed.inc";
                 ?>
               </div>
             </div>
          </div>
       </div>
    </main>
<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
