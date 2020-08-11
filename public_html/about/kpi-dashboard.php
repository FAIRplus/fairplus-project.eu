<?php
   $title = "KPI dashboard | FAIRplus";
   $description = "Key Performance indicators for the FAIRplus project";
   $section = "about";
   $page = "kpi-dashboard";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>KPI dashboard</h1>
                  <p>The goal of the FAIRplus project is to make datasets from IMI projects and EFPIA partners FAIR (Findable, Accessible, Interoparable, Reusable). The following data tracks the progress in this goal. Please note that the project started in January 2019 so the data here will be updated regularly until the end of the project (June 2022).</p>
                  <table class="vertical-headers">
                    <tr>
                      <th>Type of project</th>
                      <td>IMI</td>
                    </tr>
                    <tr>
                      <th>Preselected projects</th>
                      <td>114</td>
                    </tr>
                    <tr>
                      <th>Selected projects</th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th>Projects given an initial FAIR assessment</th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th colspan="2">Projects assessed for:</th>
                    </tr>
                    <tr>
                      <th class="indented">F<span class="normal-weight">indability</span></th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th class="indented">A<span class="normal-weight">ccessibility</th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th class="indented">I<span class="normal-weight">nteroperability</span></th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th class="indented">R<span class="normal-weight">eusability</span></th>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th>Projects published in the <a href="https://datacatalog.elixir-luxembourg.org/">IMI  catalog</a></th>
                      <td>4</td>
                    </tr>
                  </table>
                  <p class="top-margin grey">Last updated: 28 November 2019</p>
                  <ul class="inline-links x-top-margin">
                    <li><a href="/about">About the project</a></li>
                    <li><a href="#main-header">Back to the top</a></li>
                  </ul>
                </article>
             </div>
             <div class="percent-25">
               <?php
                 include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-about.inc";
               ?>
             </div>
          </div>
       </div>
    </main>

<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
