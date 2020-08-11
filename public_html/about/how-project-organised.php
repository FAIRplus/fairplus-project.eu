<?php
   $title = "How the FAIRplus project is organised| FAIRplus";
   $description = "How the FAIRplus project is organised";
   $section = "about";
   $page = "how-project-organised";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>How the project is organised</h1>
                  <p>Our work plan is designed around a workflow containing three components:</p>
                  <ol>
                    <li>Identify data sources</li>
                    <li>Define standards and develop processes to FAIRify the data</li>
                    <li>Implement an infrastructure to host the FAIRified data</li>
                  </ol>
                  <!--<p>While data flows through these three components, feedback is sent back up the chain, continuously improving the process.
                  Meanwhile, knowledge is stored, updated, and communicated to the FAIRplus community for reuse.</p>
                  <p>All this is overseen by a project management team, which also ensures long-term sustainability.</p>-->
                  <h2 class="no-top-margin">Overview</h2>
                  <figure class="top-margin percent-60">
                    <img src="/images/fairplus-squads.svg" alt="A summary of squads and Work Packages" />
                  </figure>
                  <p class="x-top-margin">Six <strong><a href="#wps">Work Packages (WPs)</a></strong> are responsible for the major activities of the projects, such as identifying datasets to FAIRify and developing processes and standards to FAIRify them. Two groups called <strong><a href="#squads">'Squads'</a></strong> are responsible for making sure these activities deliver positive outcomes for real world data. Squads draw expertise from each of the Work Packages, and work to develop and improve FAIRification techniques and tools. </p><p>Members of the Squads also organise <strong>Bring Your Own Data (BYOD)</strong> sessions for representatives from industry (EFPIA), where industry partners bring their own data and learn how to FAIRify it.</p> <p>Once a quarter, there is a <strong>Squad 'Face to Face'</strong> meeting. These meetings provide a focal point for iterating on FAIRification processes, through the exchange of experience and knowledge between Squads. After each Squad Face to Face, the latest progress is reported back to the rest of the FAIRplus consortium. </p>
                  <h2 id="wps">The Work Packages</h2>
                  <figure class="full-width">
                    <img src="/images/fairplus-wp-overview.png" alt="A summary of the Work Packages" />
                    <figcaption><strong>How WPs 1-5 work together.</strong> The red arrows represent the flow of data through the FAIRification process (WP1, WP2, WP3). The orange arrows represent the flow of feedback to continuously improve the process. The blue arrows represent the flow of knowledge and datasets for dissemination to the community (WP4). WP5 is responsible  for the overall management of the project.</figcaption>
                  </figure>
                  <div class="tinted inner-padding top-margin" id="wp1">
                    <h3 class="bottom-margin">WP1: Identification data sources for FAIRification</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To select datasets from IMI projects and industry to make FAIR, including three pilot IMI datasets. </li>
                        <li>To evaluate the relevance, ELSI (Ethical, Legal and Social Implications) requirements, and scientific value of these datasets for FAIRification.</li>
                        <li>To propose and implement selection criteria for dataset identification. These criteria will include societal impact and the specific requirements for metadata relevant to the EFPIA data sets, which will be used as use-case for WP2.</li>
                      </ul>
                    <h4>Deliverables</h4>
                    <ul class="low-top-margin">
                      <li><a href="https://zenodo.org/record/3274230#.XSRF4y2ZNTY">First three pilot datasets selected and available</a>. (June 2019)
                      <li><a href="https://zenodo.org/record/3596024#.XgtevC2cZQI">Selection criteria and guidelines for data sources from IMI projects and EFPIA internal databases</a>. A report describing the criteria, including the underlying rationale with respect to ELSI, scientific impact, societal impact, and ease of access. (December 2019)</li>
                      <li>The first 15 IMI datasets selected and available for inclusion in WP2-4 processes. (December 2020)</li>
                      <li>Finalised selection criteria and guidelines for data sources, taking into account the practical operational experiences of WP2 and WP3. This includes a description of all 20 IMI and EFPIA data sources selected. (December 2021)
                      </li>
                    </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left right-margin">
                      <img src="/images/people/philip-gribbon.jpg" alt="Philip Gribbon" width="150" class="border" />
                      <figcaption>Philip Gribbon <br />(Fraunhofer)<br /><a href="mailto:&#112;&#104;&#105;&#108;&#105;&#112;&#46;&#103;&#114;&#105;&#98;&#98;&#111;&#110;&#64;&#105;&#109;&#101;&#46;&#102;&#114;&#97;&#117;&#110;&#104;&#111;&#102;&#101;&#114;&#46;&#100;&#101;">&#112;&#104;&#105;&#108;&#105;&#112;&#46;&#103;&#114;&#105;&#98;&#98;&#111;&#110;&#64;&#105;&#109;&#101;&#46;&#102;&#114;&#97;&#117;&#110;&#104;&#111;&#102;&#101;&#114;&#46;&#100;&#101;</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/ola-engkvist.jpg" alt="Ola Engkvist" width="150" class="border" />
                      <figcaption>Ola Engkvist <br />(AstraZeneca)<br /><a href="mailto:&#111;&#108;&#97;&#46;&#101;&#110;&#103;&#107;&#118;&#105;&#115;&#116;&#64;&#97;&#115;&#116;&#114;&#97;&#122;&#101;&#110;&#101;&#99;&#97;&#46;&#99;&#111;&#109;">&#111;&#108;&#97;&#46;&#101;&#110;&#103;&#107;&#118;&#105;&#115;&#116;&#64;&#97;&#115;&#116;&#114;&#97;&#122;&#101;&#110;&#101;&#99;&#97;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <figure class="float-left">
                      <img src="/images/people/david-henderson.jpg" alt="David Henderson" width="150" class="border" />
                      <figcaption>David Henderson <br />(Bayer)<br /><a href="mailto:&#100;&#97;&#118;&#105;&#100;&#46;&#104;&#101;&#110;&#100;&#101;&#114;&#115;&#111;&#110;&#64;&#98;&#97;&#121;&#101;&#114;&#46;&#99;&#111;&#109;">&#100;&#97;&#118;&#105;&#100;&#46;&#104;&#101;&#110;&#100;&#101;&#114;&#115;&#111;&#110;&#64;&#98;&#97;&#121;&#101;&#114;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <h4 class="clear-left">Participants</h4>
                    <p>AstraZeneca, Bayer, Boehringer, BSC, Fraunhofer, GSK, IMIM (ELIXIR-ES), Janssen, Lilly, Novartis, SIB (ELIXIR-CH), University of Luxembourg (ELIXIR-LU), UPS.    </p>
                  </div>
                  <div class="tinted inner-padding x-top-margin" id="wp2">
                    <h3 class="bottom-margin">WP2: Standards definition and process development</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To define community standards to describe, identify and interlink key elements of the datasets.</li>
                        <li>To identify metrics to measure the level of FAIRness of the datasets, pre- and post FAIRification. </li>
                        <li>To define the FAIRification process by implementing the standards and the metrics through Bring Your Own Data (BYOD) workshops. </li>
                        <li>To provide methods for estimating the return on investment for FAIRified datasets.</li>
                      </ul>
                    <h4>Deliverables</h4>
                    <ul class="low-top-margin">
                      <li><a href="https://fairplus.github.io/the-fair-cookbook/intro.html">FAIR Cookbook</a>. This will be in the form of recipes containing guidance on how to use a stack of standards, metrics, and related services to FAIRifying datasets.  (December 2021)</li>
                      <li>BYOD Guidelines. This document will describe best practice for organising Bring Your Own Data events (BYODs), as well as explain how to FAIRify specific data types, for different maturation levels.  (December 2021)</li>
                      <li>Report on BYODs. This is a set of documents reporting on the work performed at each BYOD event, including inputs/outputs, exemplars and lesson learned.  (December 2021)</li>
                    </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left">
                      <img src="/images/people/susanna-assunta-sansone.jpg" alt="Susanna-Assunta Sansone" width="150" class="border" />
                      <figcaption>Susanna-Assunta Sansone<br />(University of Oxford, ELIXIR UK)<br /><a href="mailto:&#115;&#117;&#115;&#97;&#110;&#110;&#97;&#45;&#97;&#115;&#115;&#117;&#110;&#116;&#97;&#46;&#115;&#97;&#110;&#115;&#111;&#110;&#101;&#64;&#111;&#101;&#114;&#99;&#46;&#111;&#120;&#46;&#97;&#99;&#46;&#117;&#107;">su&#115;a&#110;na-a&#115;s&#117;n&#116;a&#46;san&#115;one&#64;oe&#114;c&#46;ox&#46;ac&#46;uk</a></figcaption>
                    </figure>
                    <figure class="float-left">
                      <img src="/images/people/andrea-splendiani.jpg" alt="Andrea splendiani" width="150" class="border" />
                      <figcaption>Andrea Splendiani<br />(Novartis)<br /><a href="mailto:&#97;&#110;&#100;&#114;&#101;&#97;&#46;&#115;&#112;&#108;&#101;&#110;&#100;&#105;&#97;&#110;&#105;&#64;&#110;&#111;&#118;&#97;&#114;&#116;&#105;&#115;&#46;&#99;&#111;&#109;">&#97;&#110;&#100;&#114;&#101;&#97;&#46;&#115;&#112;&#108;&#101;&#110;&#100;&#105;&#97;&#110;&#105;&#64;&#110;&#111;&#118;&#97;&#114;&#116;&#105;&#115;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <p class="clear-left"><strong>Deputy WP lead:</strong> Philippe Rocca-Serra (University of Oxford, ELIXIR UK; <a href="mailto:&#112;&#104;&#105;&#108;&#105;&#112;&#112;&#101;&#046;&#114;&#111;&#099;&#099;&#097;&#045;&#115;&#101;&#114;&#114;&#097;&#064;&#111;&#101;&#114;&#099;&#046;&#111;&#120;&#046;&#097;&#099;&#046;&#117;&#107;">&#112;&#104;&#105;&#108;&#105;&#112;&#112;&#101;&#046;&#114;&#111;&#099;&#099;&#097;&#045;&#115;&#101;&#114;&#114;&#097;&#064;&#111;&#101;&#114;&#099;&#046;&#111;&#120;&#046;&#097;&#099;&#046;&#117;&#107;</a>)</p>
                    <h4 class="clear-left">Participants</h4>
                    <p>AstraZeneca, BSC (ELIXIR-ES), EMBL-EBI, Fraunhofer, Heriot Watt University (ELIXIR-UK), IMIM (ELIXIR-ES), Imperial College London, Janssen, Lilly, Maastricht University (ELIXIR-NL), Novartis, University of Luxembourg (ELIXIR-LU),  University of Manchester (ELIXIR-UK), University of Oxford (ELIXIR-UK), UPS.</p>
                  </div>
                  <div class="tinted inner-padding x-top-margin" id="wp3">
                    <h3 class="bottom-margin">WP3: Implementation and infrastructure</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To determine and to test criteria for hosting solutions for IMI FAIR datasets.</li>
                        <li>To deliver and execute an iterative deployment plan using the identified hosting platforms, standards (WP2) and tools (WP3).</li>
                        <li>To apply and extend the FAIR tools stack.</li>
                        <li>To validate the progress of the FAIRification of datasets by using metrics for database interoperability.</li>
                        <li>To create a FAIRification sustainability plan with recommendations for future projects.</li>
                      </ul>
                    <h4>Deliverables</h4>
                      <ul class="low-top-margin">
                        <li><a href="https://zenodo.org/record/3587397#.XicVbBTnjmF">First phase exemplar IMI projects FAIRified</a>. A list of FAIRified datasets from exemplar IMI projects, indicating the level of FAIRness. (December 2019)</li>
                        <li>IMI FAIR metrics publication. (December 2020)
                        <li>A report on IMI projects for data types and current technical solutions detailing phasing of implementation. (December 2020)</li>
                        <li>Confidential report summarising the work on the FAIRification of the first EFPIA exemplar. (June 2021)</li>
                        <li>An IMI FAIR Data Catalogue for IMI data that supports data discovery and where IMI FAIRification progress and metrics can be publicly indicated. (December 2021)</li>
                        <li>A technical feasibility report with an exemplar for each data type outlining local, remote and cloud based options for FAIRification hosting. (December 2021)</li>
                        <li>A FAIRification guidance tool for IMI data that will allow users to select both community and project delivered tools and processes for specific FAIRification use cases. (December 2021)</li>
                        <li>Sustainability White Paper.(December 2021)
                      </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left right-margin">
                      <img src="/images/people/tony-burdett.jpg" alt="Helen Parkinson" width="150" class="border" />
                      <figcaption>Tony Burdett<br />(EMBL-EBI, ELIXIR)<br /><a href="mailto:tburdett@ebi.ac.uk">tburdett@ebi.ac.uk</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/karsten-quast.jpeg" alt="Rudi Verbeeck" width="150" class="border" />
                      <figcaption>Karsten Quast<br />(Boehringer Ingelheim)<br /><a href="mailto:karsten.quast@boehringer-ingelheim.com">karsten.quast@boehringer-ingelheim.com</a></figcaption>
                    </figure>
                    
                    <h4 class="clear-left">Participants</h4>
                    <p>AstraZeneca, Bayer, Boehringer, BSC (ELIXIR-ES), EMBL-EBI, GSK, IMIM (ELIXIR-ES), Imperial College London, Janssen, Lilly, PHACTS, The Hyve, University of Oxford (ELIXIR-UK), University of Manchester (ELIXIR-UK), Maastricht University (ELIXIR-NL), University of Luxembourg (ELIXIR-LU).</p>
                  </div>
                  <div class="tinted inner-padding x-top-margin" id="wp4">
                    <h3 class="bottom-margin">WP4: Communication and outreach</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To educate the next-generation of experts how to FAIRify data sets within IMI projects, EFPIA partners and beyond. </li>
                        <li>To reach out to the large community of stakeholders (SMEs, policy makers, and scientists) through various communication channels.</li>
                        <li>To demonstrate the value of the FAIRplus FAIRification process with convincing science cases (in collaboration with EFPIA).</li>
                        <li>To provide FAIRplus dissemination packages with guidelines for the FAIRification process.</li>
                      </ul>
                    <h4>Deliverables</h4>
                      <ul class="low-top-margin">
                        <li><a href="https://zenodo.org/record/3465652#.XZME-hSYV8Y">Description of the objective evaluation criteria</a> for the Fellowship Programme application review. The criteria will include a description of how equal treatment of all applications will be ensured for those receiving public funding. (September 2019)</li>
                        <li><a href="https://fairplus-project.eu/about/sme-forum-news">First FAIR Innovation and SME event</a>. (December 2019)</li>
                        <li><a href="http://fairplus-project.eu/get-involved/#fellowships">FAIRplus Fellowship Programme</a>. This includes a link to the documentation of the completed Fellowship Programme, including its structure, training modules, incentives, and legal framework. (March 2020)
                        <li><a href="https://zenodo.org/record/3733199#.XoH919NKhTY">Report on Policy-maker engagement strategy</a>. (March 2020)</li>
                        <li>A use case dissemination package. This will include three convincing use cases demonstrating the scientific value of FAIRification, and appealing to both researchers and research support staff. (December 2021)</li>
                      </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left right-margin">
                      <img src="/images/people/jan-willem-boiten.jpg" alt="Jan-Willem Boiten" width="150" class="border" />
                      <figcaption>Jan-Willem Boiten<br />(Lygature)<br /><a href="mailto:&#106;&#97;&#110;&#119;&#105;&#108;&#108;&#101;&#109;&#46;&#98;&#111;&#105;&#116;&#101;&#110;&#64;&#108;&#121;&#103;&#97;&#116;&#117;&#114;&#101;&#46;&#111;&#114;&#103;">&#106;&#97;&#110;&#119;&#105;&#108;&#108;&#101;&#109;&#46;&#98;&#111;&#105;&#116;&#101;&#110;&#64;&#108;&#121;&#103;&#97;&#116;&#117;&#114;&#101;&#46;&#111;&#114;&#103;</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/george-papadatos.jpg" alt="George Papadatos" width="150" class="border" />
                      <figcaption>George Papadatos<br />(GSK)<br /><a href="mailto:&#103;&#101;&#111;&#114;&#103;&#101;&#46;&#120;&#46;&#112;&#97;&#112;&#97;&#100;&#97;&#116;&#111;&#115;&#64;&#103;&#115;&#107;&#46;&#99;&#111;&#109;">&#103;&#101;&#111;&#114;&#103;&#101;&#46;&#120;&#46;&#112;&#97;&#112;&#97;&#100;&#97;&#116;&#111;&#115;&#64;&#103;&#115;&#107;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/colin-wood.jpg" alt="Colin Wood" width="150" class="border" />
                      <figcaption>Colin Wood<br />(AstraZeneca)<br /><a href="mailto:&#99;&#111;&#108;&#105;&#110;&#46;&#119;&#111;&#111;&#100;&#64;&#97;&#115;&#116;&#114;&#97;&#122;&#101;&#110;&#101;&#99;&#97;&#46;&#99;&#111;&#109;">colin&#46;w&#111;o&#100;&#64;ast&#114;a&#122;eneca&#46;com&#32;</a></figcaption>
                    </figure>
                    <h4 class="clear-left">Participants</h4>
                    <p>AstraZeneca, Bayer, Boehringer, BSC (ELIXIR-ES), ELIXIR Hub, Fraunhofer, GSK, IMIM (ELIXIR-ES), Janssen, Lilly, Lygature, The Hyve, University of Oxford (ELIXIR-UK), UPS.</p>
                  </div>
                  <div class="tinted inner-padding x-top-margin" id="wp5">
                    <h3 class="bottom-margin">WP5: Project management, coordination, dissemination and sustainability</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To establishment a governance structure with appropriate participation from public and EFPIA members and taking diversity into account. </li>
                        <li>To periodically monitor the project, including work plan execution, quality assurance, data management, finance execution, risks, communication and innovation management activities.</li>
                        <li>To define, implement and monitor the project dissemination and communication strategy. </li>
                        <li>To develop and update a data management plan along the project lifecycle.</li>
                        <li>To evaluate, develop and implement a sustainability plan for each relevant project result (in collaboration with WP2, WP3 and WP4).</li>
                      </ul>
                    <h4>Deliverables</h4>
                      <ul class="low-top-margin">
                        <li><a href="https://zenodo.org/record/2653565#.XSRE0C2ZNTY">Website, project governance and communication assets and guidelines available</a>. (April 2019)</li>
                        <li>Data Management Plan (DMP). Link to the confidential Data Management Plan which will include details about original data sources, tools and
high level derived data (metadata) generated as a result of the FAIRification process, and how FAIR principles are guaranteed.(June 2019) </li>
                        <li><a href="https://zenodo.org/record/3585510#.XfyJ5S2cZQI">FAIRplus Handbook and project monitoring</a>. Link to the initial version of the project handbook including guidelines (i.e. governance, communication) and assets as well as project performance indicators. (December 2019)</li>
                        <li><a href="https://fairplus-project.eu/impact/kpi-dashboard">KPI Dashboard.</a> Key Performance Indicators of FAIRplus activities (July 2020).</li>
                        <li>Sustainability Plan. Consolidated sustainability plan that will incorporate inputs of all participants and specific work carried out by
other WPs. (December 2020)</li>
                        <li>Updated version of the Data Management Plan made available to the FAIRplus participants. (December 2020)</li>
                        <li>Updated FAIRplus Handbook and project monitoring, with a focus on lessons learnt. (December 2021)</li>
                        <li>FAIRplus overview of the scientific publications. Collective view of the scientific publications generated during the project time frame. (June 2022)</li>
                        <li>Data Management Plan updated. Updated version of the DMP made available to the FAIRplus participants. (June 2022)</li>
                      </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left right-margin">
                      <img src="/images/people/serena-scollen.jpg" alt="Serena Scollen" width="150" class="border" />
                      <figcaption>Serena Scollen<br />(ELIXIR Hub)<br /><a href="mailto:&#115;&#101;&#114;&#101;&#110;&#97;&#46;&#115;&#99;&#111;&#108;&#108;&#101;&#110;&#64;&#101;&#108;&#105;&#120;&#105;&#114;&#45;&#101;&#117;&#114;&#111;&#112;&#101;&#46;&#111;&#114;&#103;">&#115;&#101;&#114;&#101;&#110;&#97;&#46;&#115;&#99;&#111;&#108;&#108;&#101;&#110;&#64;&#101;&#108;&#105;&#120;&#105;&#114;&#45;&#101;&#117;&#114;&#111;&#112;&#101;&#46;&#111;&#114;&#103;</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/herman-van-vlijmen.jpg" alt="Herman Van Vlijmen" width="150" class="border" />
                      <figcaption>Herman Van Vlijmen<br />(Janssen)<br /><a href="mailto:&#104;&#118;&#118;&#108;&#105;&#106;&#109;&#101;&#64;&#105;&#116;&#115;&#46;&#106;&#110;&#106;&#46;&#99;&#111;&#109;">&#104;&#118;&#118;&#108;&#105;&#106;&#109;&#101;&#64;&#105;&#116;&#115;&#46;&#106;&#110;&#106;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <h4 class="clear-left">Participants</h4>
                    <p>AstraZeneca, Bayer, Boehringer, BSC (ELIXIR-ES), ELIXIR Hub, Fraunhofer, GSK, IMIM (ELIXIR-ES), Janssen, Lilly, Lygature, The Hyve, University of Oxford (ELIXIR-UK), University of Luxembourg (ELIXIR-LU), UPS.</p>
                  </div>
                  <div class="tinted inner-padding x-top-margin" id="wp6">
                    <h3 class="bottom-margin">WP6: Ethics Requirements</h3>
                    <h4>Tasks</h4>
                      <ul class="low-top-margin">
                        <li>To establish an Ethics Board to monitor the ethics and data protection issues raised by the project. </li>
                        <li>To evaluate the ethics/legal risks related to the data processing activities of the project. </li>
                        <li>To ensure that there is a lawful basis for processing the data used in the project and that the appropriate technical and organisational measures are in in place to safeguard the rights of the data subjects.</li>
                      </ul>
                    <h4>Deliverables</h4>
                      <ul class="low-top-margin">
                        <li>General ethics requirement. Ethics Board: an Ethics Board established, comprising one jurist, especially competent in data protection issues, one philosopher and one social scientist.  This is to ensure that all facets of the ethical aspects of the project can be addressed. (31 March 2019) </li>
                        <li>A procedure to identify ELSI issues and make sure data is processed lawfully, with appropriate safeguards for personal data in the selected datasets. (30 June 2019)</li>
                        <li>A set of measures that the various persons involved in data stewardship, data governance and data use need to document and respect when an IMI projects agrees to give access to their data. (31 March 2019)</li>
                      </ul>
                    <h4 class="low-bottom-margin">WP leaders</h4>
                    <figure class="float-left right-margin">
                      <img src="/images/people/anne-cambon-thomsen.jpg" alt="Anne Cambon-Thomsen" width="150" class="border" />
                      <figcaption>Anne Cambon-Thomsen<br />(Universit&eacute; Paul Sabatier Toulouse III)<br /><a href="mailto:&#97;&#110;&#110;&#101;&#46;&#99;&#97;&#109;&#98;&#111;&#110;&#45;&#116;&#104;&#111;&#109;&#115;&#101;&#110;&#64;&#117;&#110;&#105;&#118;&#45;&#116;&#108;&#115;&#101;&#51;&#46;&#102;&#114;">&#97;&#110;&#110;&#101;&#46;&#99;&#97;&#109;&#98;&#111;&#110;&#45;&#116;&#104;&#111;&#109;&#115;&#101;&#110;&#64;&#117;&#110;&#105;&#118;&#45;&#116;&#108;&#115;&#101;&#51;&#46;&#102;&#114;</a></figcaption>
                    </figure>
                    <figure class="float-left right-margin">
                      <img src="/images/people/herman-van-vlijmen.jpg" alt="Herman Van Vlijmen" width="150" class="border" />
                      <figcaption>Herman Van Vlijmen<br />(Janssen)<br /><a href="mailto:&#104;&#118;&#118;&#108;&#105;&#106;&#109;&#101;&#64;&#105;&#116;&#115;&#46;&#106;&#110;&#106;&#46;&#99;&#111;&#109;">&#104;&#118;&#118;&#108;&#105;&#106;&#109;&#101;&#64;&#105;&#116;&#115;&#46;&#106;&#110;&#106;&#46;&#99;&#111;&#109;</a></figcaption>
                    </figure>
                    <div class="clearfix"></div>
                  </div>
                  <h2 id="squads">The Squads</h2>
                  <p>The term 'Squad' comes from the agile methodology in software engineering, where squads are autonomous units cutting across the hierarchical structure. Squads in FAIRplus are  composed of key Work Package experts (both public and EFPIA). They bring the necessary expertise and technical skills required for individual dataset FAIRification. </p>
<p>Both Squads  work independently to FAIRify datasets from the <a href="https://fairplus-project.eu/choosing-data/datasets">four pilot projects</a>, whilst sharing their experience and establishing generalised practices that should be applicable to subsequent FAIRification efforts. </p>
<p>Squads refine their approaches over three-month long release cycles, making their datasets incrementally more FAIR with each release. The Squad members may change after each release based on the expertise needed to swarm the new problem/use case.</p>
<p>The Squads operate through weekly calls and they meet face-to-face once in every cycle to discuss their approaches, review work done during that release cycle, and plan for the next release. The first two meetings took place in April 2019 in Hinxton and in July 2019 in London, UK. </p>
<h3 class="low-bottom-margin">Squad leaders</h3>
<figure class="float-left right-margin">
  <img src="/images/people/tony-burdett.jpg" alt="Tony Burdett" width="150" class="border" />
  <figcaption>Tony Burdett (EMBL-EBI, ELIXIR)<br />(Squads leader)<br /><a href='mai&#108;to&#58;t%&#54;2%&#55;5%72det&#116;&#64;e%6&#50;i&#46;a%6&#51;&#46;%75&#107;'>tburdett&#64;ebi&#46;ac&#46;u&#107;</a></figcaption>
</figure>
<figure class="float-left right-margin">
  <img src="/images/people/nick-juty.jpg" alt="Nick Juty" width="150" class="border" />
  <figcaption>Nick Juty (University of Manchester)<br />(Squad 1 leader)<br /><a href='m&#97;&#105;l&#116;o&#58;&#110;ic&#107;&#46;%6Au&#116;&#121;&#64;man&#99;h%65s&#116;e%72&#46;%61c&#46;u%&#54;B'>nick&#46;j&#117;ty&#64;manc&#104;&#101;st&#101;&#114;&#46;ac&#46;&#117;k</a></figcaption>
</figure>
<figure class="float-left">
  <img src="/images/people/j-strubel-hyve.jpg" alt="Jolanda Strubel" width="150" class="border" />
  <figcaption>Jolanda Strubel (The Hyve)<br />(Squad 2 leader)<br /><a href="mailto:jolanda@thehyve.nl">jolanda@thehyve.nl</a></figcaption>
</figure>
                  <ul class="inline-links x-top-margin clear-left">
                    <li><a href="/about">About the project</a></li>
                    <li><a href="#main-header">Back to the top</a></li>
                  </ul>
                </article>
             </div>
             <div class="percent-25">
               <?php
                 include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-about.inc";
               ?>
               <div class="xx-top-margin">
                 <ul class="inline-links x-top-margin">
                    <li><a href="/about">&laquo; Back to About</a></li>
                  </ul>
               </div>
             </div>
          </div>
       </div>
    </main>

<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>