<?php
   $title = "Resources of the FAIRplus project| FAIRplus";
   $description = "Resources provided by the FAIRplus project";
   $section = "resources";
   $page = "resources";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Resources</h1>
                  <p>This page will bring together resources produced by the project. These will be added throughout the project, when each has been completed. </p>
                  <p class="no-bottom-margin">Other resources in this section include:</p>
                  <ul class="top-margin">
                    <li><a href="webinars">Webinars</a></li>
                    <li><a href="suggested-reading">Suggested reading</a></li>
                    <li><a href="publicity-materials">Publicity materials</a></li>
                    <li><a href="logos">Logos</a></li>
                  </ul>
                  <h2 class="top-margin">Resources from the project</h2>
                  <div class="tinted rounded inner-padding dark-background xx-top-margin">
                    <h2 class="no-top-margin">FAIR Cookbook</h2>
                    <a href="https://fairplus.github.io/the-fair-cookbook/content/home.html"><img src="/images/fair-cookbook.png" alt="FAIR cookbook screenshot" style="width: 100%;" class="border"/></a>
                  <p class="top-margin">The <a href="https://fairplus.github.io/the-fair-cookbook/content/home.html">FAIR Cookbook</a> is an online resource for the Life Sciences that help you to make and keep data and services Findable, Accessible, Interoperable and Reusable (FAIR). </p>
                  <p>The FAIR Cookbook offers a comprehensive set of recipes to deliver FAIR. The book covers how to assess and improve FAIRness levels and includes a wealth of advice about technologies, tools, maturity indicators and standards available. It also covers the skills required as well as some of the challenges around the practice of FAIR.</p>
                  <p><a href="/resources/webinars">Watch a webinar introducing the Cookbook</a>.</p>
                  </div>

                  <h3 class="smaller xx-top-margin">December 2019</h3>
                  <ul class="low-top-margin">
                    <li><a href="https://fairplus.github.io/the-fair-cookbook">FAIR Cookbook</a></li>
                    <li><a href="https://zenodo.org/record/3585510#.XfyJ5S2cZQI">FAIRplus handbook</a> (updated annually)</li>
                    <li><a href="https://zenodo.org/record/3596024#.XgtevC2cZQI">Selection criteria and guidelines for data sources</a></li>
                    <li><a href="https://zenodo.org/record/4428721#.X_htRen7TUI">Report on IMI projects for data types</a></li>
                  </ul>
                  <h3 class="smaller">December 2020</h3>
                  <ul class="low-top-margin">
                    <li><a href="https://zenodo.org/record/4354652#.X9zA7ar7RQI">Sustainability plan</a></li>
                  </ul>
                  <h3 class="smaller">December 2021</h3>
                  <ul class="low-top-margin">
                      <li><a href="https://fairplus.github.io/the-fair-cookbook/content/home.html">FAIRplus Cookbook</a></li>
                    <li>BYOD guidelines</li>
                    <li>Technical feasibility report</li>
                    <li>FAIRification guidance tool for IMI</li>
                    <li>Use case dissemination package</li>
                    <li><a href="https://datacatalog.elixir-luxembourg.org/">IMI FAIR data catalogue</a></li>
                  </ul>

                  <p class="x-top-margin">For more information about the project and the context of these resources, see <a href="/about/">About the project</a>.
                </article>
             </div>
             <div class="percent-25">
               <?php
               include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-resources.inc";
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
