<?php
  $title = "FAIRplus | Home page";
  $description = "The FAIRplus project aims to help scientists make life science data FAIR (Findable, Accessible, Interoperable, Reusable) and improve data management.";
  $section = "home";
  $page = "home";
  include_once('includes/header.inc');
?>

<main id="main-content">
    <div class="inner-container">
        <div class="flex-container">
            <div class="percent-75">
                <article>
                      <figure>
                        <img src="images/fairplus-meeting-202001-group.jpg" alt="Group photo of the FAIRplus members" style="max-width: 100%;" class="low-top-margin" />
                    <figcaption>Members of the FAIRplus consortium at the FAIRplus General Assembly 30-31 January 2020 in Hinxton, UK.</figcaption>
                      </figure>
                        <h1 class="hidden">Introduction to the FAIRplus project</h1>
                        <p class="x-top-margin">The FAIRplus project aims to develop tools and guidelines for making life science data FAIR (Findable, Accessible, Interoperable, Reusable). The project has 21 partners from academia and industry, and runs from January 2019 to December 2022. See <a href="/about">About the project</a> and the <a href=" https://www.elixir-europe.org/news/fairplus-sets-out-improve-data-sharing-and-reuse-life-science-research">news story on the ELIXIR website</a>.</p>

                        <section class="tinted xx-top-margin inner-padding bottom-margin">
                            <h2 class="line-height-1 no-top-margin">Project overview</h2>
                            <h3>Management</h3>
                            <p><a href="https://www.elixir-europe.org">ELIXIR</a> and <a href="https://www.janssen.com">Janssen</a></p>
                            <h3>Goals</h3>
                            <ul class="no-top-margin">
                                <li>To establish a process for selecting and prioritising <a href="https://www.imi.europa.eu/projects-results">IMI project</a> databases for FAIRification. </li>
                                <li>To develop guidelines, tools and metrics needed to make data Findable, Accessible, Interoperable and Reusable (FAIR).</li>
                                <li>To deliver tailored training for data handlers (academia, SMEs and pharmaceuticals).</li>
                                <li>To change and sustain the data management culture in pharma, academia and SMEs.</li>
                                <li>To organise FAIR 'Innovation and SME Events' to foster an innovation ecosystem on FAIR open data to power future reuse, knowledge generation, and societal benefit.</li>
                            </ul>
                            <h3>Participants</h3>
                            <p>21 participants (12 academic, 6 EFPIA, 3 SME)</p>
                            <h3>Work Packages and their leaders</h3>
                            <ul class="low-top-margin">
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp1">WP1: Identification data sources for FAIRification</a></h4>
                              <p class="x-small-text no-bottom-margin">Philip Gribbon (Fraunhofer)<br />Ola Engkvist (AstraZeneca)<br />David Henderson (Bayer)</p></li>
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp2">WP2: Standards definition and process development</a></h4>
                              <p class="x-small-text no-bottom-margin">Susanna-Assunta Sansone (University of Oxford, ELIXIR UK)<br />Andrea Splendiani (Novartis)</p></li>
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp3">WP3: Implementation and infrastructure</a></h4>
                              <p class="x-small-text no-bottom-margin">Helen Parkinson (EMBL-EBI, ELIXIR)<br />Rudi Verbeeck (Janssen)</p></li>
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp4">WP4: Communication and outreach</a></h4>
                              <p class="x-small-text no-bottom-margin">Jan-Willem Boiten (Lygature)<br />Stefan Senger (GSK)<br />Colin Wood (AstraZeneca)</p></li>
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp5">WP5: Project management, coordination, dissemination and sustainability</a></h4>
                              <p class="x-small-text no-bottom-margin">Serena Scollen (ELIXIR Hub)<br />Herman Van Vlijmen (Janssen)</p></li>
                              <li><h4 class="plain"><a href="/about/how-project-organised#wp6">WP6: Ethics requirements</a></h4>
                              <p class="x-small-text no-bottom-margin">Anne Cambon-Thomsen (Universit&eacute; Paul Sabatier Toulouse III)<br />Herman Van Vlijmen (Janssen)</p></li>
                          </ul>
                            <h3>Duration</h3>
                            <p>48 months (January 2019 - December 2022)</p>
                            <h3>Budget</h3>
                            <p>&euro;8.23M (&euro;4M H2020 EC funding, &euro;4.23M EFPIA in-kind)</p>
                            <h3>Contact</h3>
                            <p><a href="mailto:&#070;&#065;&#073;&#082;&#112;&#108;&#117;&#115;&#045;&#080;&#077;&#064;&#101;&#108;&#105;&#120;&#105;&#114;&#045;&#101;&#117;&#114;&#111;&#112;&#101;&#046;&#111;&#114;&#103;&#032;">&#070;&#065;&#073;&#082;&#112;&#108;&#117;&#115;&#045;&#080;&#077;&#064;&#101;&#108;&#105;&#120;&#105;&#114;&#045;&#101;&#117;&#114;&#111;&#112;&#101;&#046;&#111;&#114;&#103;&#032;</a></p>
                            <p>See also the <a href="https://www.imi.europa.eu/projects-results/project-factsheets/fairplus">factsheet on the IMI website</a>.</p>
                        </section>
                        <!-- <div class="text-white float-left">
                          <a href="http://eepurl.com/ghuHeT" class="button subscribe newsletter fixed-13em">Subscribe to our newsletter</a>
                        </div>
                        <div class="no-margin text-white float-left">
                          <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Ffairplus-project.eu%2Fget-involved%2F&ref_src=twsrc%5Etfw&region=follow_link&screen_name=FAIRplus_eu&tw_p=followbutton" class="button subscribe twitter fixed-13em">Follow us on Twitter</a>
                        </div> -->
                    </article>
                </div>
                <div class="percent-25">
                  <?php
                    include_once('includes/twitter-feed.inc');
                  ?>
                  <div class="x-top-margin">
                  <?php
                     include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
                  ?>
                  </div>
                </div>
            </div>
        </div>
    </main>

<?php
  include_once('includes/footer.inc');
?>
