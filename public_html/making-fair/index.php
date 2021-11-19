<?php
   $title = "Making data FAIR| FAIRplus";
   $description = "How the FAIRplus project is making data FAIR";
   $section = "making-fair";
   $page = "making-fair";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Making the data FAIR</h1>
                   <figure class="float-right percent-40">
                     <img src="../images/fairplus-wp3.jpg" alt="A panel discussion at the FAIRplus SME event" class="fill" />
                     <figcaption>A meeting of Work Package 3, who are looking at how to deploy FAIRified data sets.</figcaption>
                  </figure>
                  <p>Once datasets have been chosen for the project they will be made FAIR (Findable, Accessible, Interopeable, Reusable). There are two stages to this process:</p>
                  <ol>
                    <li>Design and implement a <strong>FAIRification process</strong>, which includes choosing standards to describe the data.</li>
                    <li>Develop and implement a <strong>deployment plan</strong> for the FAIRified datasets, which will include choosing appropriate hosting platforms and tools.</li>
                  </ol>
                  <h2>The FAIRification process</h2>
                  <p>We will:</p>
                  <ul>
                    <li>Define community standards to describe, identify and interlink key elements of the datasets.</li>
                    <li>Identify metrics to measure the level of FAIRness of the datasets, pre and post FAIRification.</li>
                    <li>Define the FAIRification process by implementing the standards and the metrics through Bring Your Own Data (BYOD) workshops. Workshops will target different stakeholder groups, employ data of different types and with different levels of FAIRness, and will involve using different tools.</li>
                    <li>Provide methods for estimating return on the FAIRification investment.</li>
                  </ul>
                  <div class="tinted inner-padding">
                    <h3 class="no-top-margin low-bottom-margin">Work completed</h3>
                    <table class="no-left-padding" style="width: 100%;">
                      <tr>
                        <td class="percent-20"><strong>December 2019</strong></td>
                        <td><a href="https://fairplus.github.io/the-fair-cookbook">FAIR cookbook infrastructure set up</a></td>
                      </tr>
                      <tr>
                        <td><strong>June 2021</strong></td>
                        <td><a href="https://www.zenodo.org/record/5040592#.YNr-ZTZKiAk">FAIR Data Maturity Framework</a></td>
                      </tr>
                    </table>
                  </div>
                  <p class="top-margin">This work is being done by WP2 in the FAIRplus project (see  <a href="/about/how-project-organised">How the project is organised</a>).</p>
                  <h2 id="deployment">Deployment plan and technical solutions</h2>
                  <p>We will:</p>
                  <ul>
                    <li>Determine and technical test criteria for hosting solutions for IMI FAIR databases.</li>
                    <li>Deliver and execute an iterative deployment plan using the identified hosting platforms, standards and tools.</li>
                    <li>Apply and extend the FAIR tools stack.</li>
                    <li>Validate the FAIRification progress and its success using metrics for intra and inter database interoperability.</li>
                    <li>Deliver a FAIRification sustainability plan for data types and projects, with recommendations for future and running projects aimed at IMI and EFPIA participants.</li>
                  </ul>
                  <div class="tinted inner-padding">
                    <h3 class="no-top-margin">Work completed</h3>
                    <table class="no-left-padding tm" style="width: 100%;">
                      <tr>
                        <td class="percent-20"><strong>December 2019</strong></td>
                        <td><a href="https://zenodo.org/record/3587397#.XicNPdb7QUE">First phase exemplar IMI projects FAIRified</a></td>
                      </tr>
                      <tr>
                        <td class="percent-20"><strong>December 2020</strong></td>
                        <td><a href=" https://zenodo.org/record/4428633#.X_hqzun7TUI">IMI FAIR metrics publication</a> </td>
                      </tr>
                      <tr>
                        <td class="percent-20"><strong>December 2020</strong></td>
                        <td><a href="https://zenodo.org/record/4428721#.X_htRen7TUI">A report on IMI projects for data types and current technical solutions detailing phasing of implementation</a></td>
                      </tr>
                    </table>
                  </div>
                  <p class="top-margin">This work is being done by WP3 in the FAIRplus project (see  <a href="/about/how-project-organised">How the project is organised</a>).</p>
                </article>
             </div>
             <div class="percent-25">
               <?php
                  include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
               ?>
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
