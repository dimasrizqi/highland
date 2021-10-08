@extends('layouts.master')
@section('title','Beranda')

@push('upper-scripts')
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                            @foreach ($data_konfirmasi_camp as $no => $item)
                            
                                
                            @endforeach
                            <div id="jquery-script-menu">
                            <div class="jquery-script-center">
                            <ul>
                            <li><a href="https://www.jqueryscript.net/other/Highlight-Image-Areas-Hover-Mapoid.html">Download This Plugin</a></li>
                            <li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
                            </ul>
                            <div class="jquery-script-ads"><script type="text/javascript"><!--
                            google_ad_client = "ca-pub-2783044520727903";
                            /* jQuery_demo */
                            google_ad_slot = "2780937993";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            //-->
                            </script>
                            <script type="text/javascript"
                            src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                            <script src="http://ajax.googlespis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                            <script src="jquery.jquery.rwdImages.min.js"><script>
                            $(dcument).ready(function(e) {
                            	$('img').rwdImages({
                            
                            });
                            
                            </script>
                            </div>
                            <div class="jquery-script-clear"></div>
                            </div>
                            </div>
                            <div class="container">
                            <h1>jQuery Mapoid: Image Map Highlighter</h1>
                            <img alt="img" class="hmap8807" src="map.png" usemap="#hmap8807" style="display: block;" />
                            
                            <map name="hmap8807">
                            <map name="image-map">
                                <area class="harea tooltip" data-id="269" target="" alt="BATU TAPAK" title="BATU TAPAK" href="" coords="663,202,673,210,685,214,689,220,689,234,676,237,661,244,644,248,632,253,624,260,609,261,593,260,582,259,566,258,550,252,546,248,550,241,596,238" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="NIRMALA" title="NIRMALA" href="" coords="503,226,520,228,528,234,542,243,537,250,544,260,535,266,526,271,512,280,493,267,486,260" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="HALIMUN" title="HALIMUN" href="" coords="473,227,500,225,483,258,512,280,501,291,501,301,492,309,477,318,465,318,452,307,433,291,440,280,459,262,469,248" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="SITUHIANG 1" title="SITUHIANG 1" href="" coords="432,291,459,314,448,320,468,336,436,359,419,353,421,329,409,307,425,303" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="SITUHIANG 2" title="SITUHIANG 2" href="" coords="334,311,351,314,374,315,408,310,417,328,418,351,433,360,417,371,386,386,350,400,341,379,351,371,330,320" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="PARKIR AREA" title="PARKIR AREA" href="" coords="391,248,391,262,403,275,415,291,408,301,390,307,364,308,350,305,335,303,334,294,365,275" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="KENDENG" title="KENDENG" href="" coords="437,273,407,274,401,268,400,245,409,240,423,234,438,231,459,215,469,225,464,246,457,256" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="KIJABUD" title="KIJABUD" href="" coords="507,195,519,202,535,195,538,183,535,170,508,180" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="CIPUTRI" title="CIPUTRI" href="" coords="546,166,570,158,600,169,612,174,625,181,639,192,651,203,628,212,616,220,606,225,592,231,579,234,552,235,539,213,548,186" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="TAM" title="TAM" href="" coords="443,135,398,141,373,153,336,158,324,169,326,180,314,198,319,212,312,233,319,253,296,279,284,297,272,307,249,319,229,329,233,340,257,333,295,312,331,285,349,274,364,260,382,237,396,218,425,206,456,187,471,167,465,150" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="TAMAN KUNANG KUNANG" title="TAMAN KUNANG KUNANG" href="" coords="511,290,525,280,531,276,547,263,568,268,582,276,589,287,582,305,577,311,555,312,532,303,516,298" shape="poly">
                                <area class="harea tooltip" data-id="269" target="" alt="AREA HUTAN" title="AREA HUTAN" href="" coords="520,309,487,336,452,357,419,378,386,391,358,406,348,410,308,416,293,423,248,427,208,430,185,420,162,438,143,455,129,480,159,492,184,503,230,549,258,526,289,519,311,521,335,532,347,536,366,516,383,504,402,492,428,483,451,480,474,487,509,487,534,474,544,465,553,440,579,422,599,409,612,395,617,384,629,372,645,363,673,349,689,331,727,323,745,310,768,297,791,285,812,275,829,269,851,263,882,256,905,256,928,253,950,240,958,246,974,246,990,236,1005,218,1001,198,991,192,964,180,940,171,917,153,888,142,870,135,830,137,815,141,796,138,796,122,789,105,777,97,760,88,737,86,708,97,687,112,653,129,639,144,656,172,679,181,691,211,710,226,698,243,662,239,621,266,591,257,568,261,592,278,588,309,556,317" shape="poly">
                            </map>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
                            <script src="mapoid.js"></script>
                            <script>
                            $("map[name=hmap8807]").mapoid({click: function(){alert('click')}});
                            </script>
                            <script type="text/javascript">
                            
                              var _gaq = _gaq || [];
                              _gaq.push(['_setAccount', 'UA-36251023-1']);
                              _gaq.push(['_setDomainName', 'jqueryscript.net']);
                              _gaq.push(['_trackPageview']);
                            
                              (function() {
                                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                              })();
                            
                            </script>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('page-script')
    
@endpush
    

