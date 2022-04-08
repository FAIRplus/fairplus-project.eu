<?php
   $title = "Impact of the FAIRplus project| FAIRplus";
   $description = "How the  FAIRplus project has had an impact";
   $section = "impact";
   $page = "kpi-dashboard";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>
<main id="main-content">
    <div class="inner-container">
        <div class="flex-container">
            <div class="percent-75">
                <article>
                    <!--<h1> KPI Dashboard</h1>-->
                    <div class='tableauPlaceholder' id='viz1646513731817' style='position: relative'>
                        <object class='tableauViz'  style='display:none;'>
                            <param name='host_url' value='https://public.tableau.com/' />
                            <param name='embed_code_version' value='3' />
                            <param name='path' value='views&#47;FAIRplusKPIdashboard&#47;Dashboard2?:language=en-GB&amp;:embed=true&amp;publish=yes' />
                            <param name='toolbar' value='yes' />
                            <param name='animate_transition' value='yes' />
                            <param name='display_static_image' value='yes' />
                            <param name='display_spinner' value='yes' />
                            <param name='display_overlay' value='yes' />
                            <param name='display_count' value='yes' />
                            <param name='language' value='en-GB' />
                            <param name='filter' value='publish=yes' />
                        </object>
                    </div>
                    <script type='text/javascript'>
                        var divElement = document.getElementById('viz1646513731817');
                        var vizElement = divElement.getElementsByTagName('object')[0];
                        if ( divElement.offsetWidth > 800 )
                        {
                            vizElement.style.width='750px';
                            vizElement.style.height='3400px';
                        }
                        else if ( divElement.offsetWidth > 500 )
                        {
                            vizElement.style.width='750px';
                            vizElement.style.height='2727px';
                        }
                        else
                        {
                            vizElement.style.width='100%';
                            vizElement.style.height='3127px';
                        }
                        var scriptElement = document.createElement('script');
                        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                        vizElement.parentNode.insertBefore(scriptElement, vizElement);
                    </script>
                </article>
            </div>
            <div class="percent-25">
                <?php
                include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-impact.inc";
                ?>
            </div>
        </div>
    </div>
</main>
<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
