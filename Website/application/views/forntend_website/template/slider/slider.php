<div class="container-fluid">
              <!---slider -->
    <script src="slider/js/jssor.slider-26.9.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1140;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}

        .jssort111 .p {position:absolute;top:0;left:0;width:200px;height:100px;background-color:#000;}
        .jssort111 .p img {position:absolute;top:0;left:0;width:100%;height:100%;}
        .jssort111 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45;}
        .jssort111 .p:hover .t{opacity:.8;}
        .jssort111 .pav .t, .jssort111 .pdn .t, .jssort111 .p:hover.pdn .t{opacity:1;}
        .jssort111 .ti {position:absolute;bottom:0px;left:0px;width:100%;height:28px;line-height:28px;text-align:center;font-size:12px;color:#fff;background-color:rgba(0,0,0,.3)}
        .jssort111 .pav .ti, .jssort111 .pdn .ti, .jssort111 .p:hover.pdn .ti{color:#000;background-color:rgba(255,255,255,.6);}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:450px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Lemongrass1.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Lemongrass1.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Lotus Stem.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Lotus Stem.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Malabar Spinach.png" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Malabar Spinach.png" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Rice paddy herb.png" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Rice paddy herb.png" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/taprum.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/taprum.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/ss.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/ss.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Willughbeia.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Willughbeia.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Radish 1.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Radish 1.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Pitaya – dragon fruit.png" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Pitaya – dragon fruit.png" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/yam.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/yam.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Tomatoes-1.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Tomatoes-1.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="slider/img/Plum.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" src="slider/img/Plum.jpg" />
                    <div class="ti">Slide Description</div>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;cursor:default;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:162px;left:25px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:162px;right:25px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</div>
