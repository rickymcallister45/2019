<?php

echo "<div class='row carousel-holder'>
        <div class='col-md-12'>
          <div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>";

getActiveIndicator();
getSlideIndicator();

/*
              <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
              <li data-target='#carousel-example-generic' data-slide-to='1'></li>
              <li data-target='#carousel-example-generic' data-slide-to='2'></li>
              
*/              
        echo "</ol>
            <div class='carousel-inner'>";
              
getActiveSlide();
getSlides();

      echo "</div>
              <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>
                <span class='glyphicon glyphicon-chevron-left'></span>
              </a>
              <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>
                <span class='glyphicon glyphicon-chevron-right'></span>
              </a>
            </div>
          </div>
        </div>";
?>
