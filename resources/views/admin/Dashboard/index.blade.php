<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <div class="content py-4 d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 13-->
                        <div class="card card-xl-stretch mb-xl-10" style="background-color: #F7D9E3">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <!--begin::Title-->
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Total Orders</a>
                                    <!--end::Title-->
                                    <!--begin::Chart-->
                                    <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;">
                                        <div id="apexcharts1w3a9nm"
                                            class="apexcharts-canvas apexcharts1w3a9nm apexcharts-theme-light"
                                            style="width: 136px; height: 100px;"><svg id="SvgjsSvg1131" width="136"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1133" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1132">
                                                        <clipPath id="gridRectMask1w3a9nm">
                                                            <rect id="SvgjsRect1136" width="143" height="103" x="-3.5"
                                                                y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask1w3a9nm"></clipPath>
                                                        <clipPath id="nonForecastMask1w3a9nm"></clipPath>
                                                        <clipPath id="gridRectMarkerMask1w3a9nm">
                                                            <rect id="SvgjsRect1137" width="140" height="104" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1142" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1143" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.2">
                                                            </stop>
                                                            <stop id="SvgjsStop1144" stop-opacity="0"
                                                                stop-color="rgba(255,255,255,0)" offset="1.2"></stop>
                                                            <stop id="SvgjsStop1145" stop-opacity="0"
                                                                stop-color="rgba(255,255,255,0)" offset="1.2"></stop>
                                                            <stop id="SvgjsStop1146" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1.2">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1149" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1150" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1158" class="apexcharts-grid">
                                                        <g id="SvgjsG1159" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1161" x1="0" y1="0" x2="136" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1162" x1="0" y1="10" x2="136" y2="10"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1163" x1="0" y1="20" x2="136" y2="20"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1164" x1="0" y1="30" x2="136" y2="30"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1165" x1="0" y1="40" x2="136" y2="40"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1166" x1="0" y1="50" x2="136" y2="50"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1167" x1="0" y1="60" x2="136" y2="60"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1168" x1="0" y1="70" x2="136" y2="70"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1169" x1="0" y1="80" x2="136" y2="80"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1170" x1="0" y1="90" x2="136" y2="90"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1171" x1="0" y1="100" x2="136" y2="100"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1160" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1173" x1="0" y1="100" x2="136" y2="100"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1172" x1="0" y1="1" x2="0" y2="100"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1138"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1139" class="apexcharts-series"
                                                            seriesName="NetxProfit" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1147"
                                                                d="M 0 100L 0 75C 9.52 75 17.68 58.33333333333333 27.2 58.33333333333333C 36.72 58.33333333333333 44.879999999999995 75 54.4 75C 63.919999999999995 75 72.08 33.33333333333333 81.6 33.33333333333333C 91.11999999999999 33.33333333333333 99.28 66.66666666666666 108.8 66.66666666666666C 118.32 66.66666666666666 126.48 16.666666666666657 136 16.666666666666657C 136 16.666666666666657 136 16.666666666666657 136 100M 136 16.666666666666657z"
                                                                fill="url(#SvgjsLinearGradient1142)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask1w3a9nm)"
                                                                pathTo="M 0 100L 0 75C 9.52 75 17.68 58.33333333333333 27.2 58.33333333333333C 36.72 58.33333333333333 44.879999999999995 75 54.4 75C 63.919999999999995 75 72.08 33.33333333333333 81.6 33.33333333333333C 91.11999999999999 33.33333333333333 99.28 66.66666666666666 108.8 66.66666666666666C 118.32 66.66666666666666 126.48 16.666666666666657 136 16.666666666666657C 136 16.666666666666657 136 16.666666666666657 136 100M 136 16.666666666666657z"
                                                                pathFrom="M -1 100L -1 100L 27.2 100L 54.4 100L 81.6 100L 108.8 100L 136 100">
                                                            </path>
                                                            <path id="SvgjsPath1148"
                                                                d="M 0 75C 9.52 75 17.68 58.33333333333333 27.2 58.33333333333333C 36.72 58.33333333333333 44.879999999999995 75 54.4 75C 63.919999999999995 75 72.08 33.33333333333333 81.6 33.33333333333333C 91.11999999999999 33.33333333333333 99.28 66.66666666666666 108.8 66.66666666666666C 118.32 66.66666666666666 126.48 16.666666666666657 136 16.666666666666657"
                                                                fill="none" fill-opacity="1" stroke="#ffffff"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask1w3a9nm)"
                                                                pathTo="M 0 75C 9.52 75 17.68 58.33333333333333 27.2 58.33333333333333C 36.72 58.33333333333333 44.879999999999995 75 54.4 75C 63.919999999999995 75 72.08 33.33333333333333 81.6 33.33333333333333C 91.11999999999999 33.33333333333333 99.28 66.66666666666666 108.8 66.66666666666666C 118.32 66.66666666666666 126.48 16.666666666666657 136 16.666666666666657"
                                                                pathFrom="M -1 100L -1 100L 27.2 100L 54.4 100L 81.6 100L 108.8 100L 136 100">
                                                            </path>
                                                            <g id="SvgjsG1140" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1179" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wn1lcszge no-pointer-events"
                                                                        stroke="#e4e6ef" fill="#3f4254" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        default-marker-size="0">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1141" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1174" x1="0" y1="0" x2="136" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1175" x1="0" y1="0" x2="136" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1176" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1177" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1178" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1157" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1134" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Stats-->
                                <div class="pt-5">
                                    <!--begin::Symbol-->
                                    <span class="text-dark fw-bolder fs-2x lh-0">orders</span>
                                    <!--end::Symbol-->
                                    <!--begin::Number-->
                                    <span class="text-dark fw-bolder fs-3x lh-0 me-2">{{\App\Models\Order::count();}}</span>
                                    <!--end::Number-->
                                    <!--begin::Text-->

                                    <!--end::Text-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 13-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 14-->
                        <div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBF0F4">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <!--begin::Title-->
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Total Products</a>
                                    <!--end::Title-->
                                    <!--begin::Chart-->
                                    <div class="mixed-widget-14-chart" style="height: 100px; min-height: 115px;">
                                        <div id="apexcharts3ohqcd36"
                                            class="apexcharts-canvas apexcharts3ohqcd36 apexcharts-theme-light"
                                            style="width: 136px; height: 100px;"><svg id="SvgjsSvg1180" width="136"
                                                height="100" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1182" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 41)">
                                                    <defs id="SvgjsDefs1181">
                                                        <clipPath id="gridRectMask3ohqcd36">
                                                            <rect id="SvgjsRect1186" width="140" height="38" x="-2"
                                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask3ohqcd36"></clipPath>
                                                        <clipPath id="nonForecastMask3ohqcd36"></clipPath>
                                                        <clipPath id="gridRectMarkerMask3ohqcd36">
                                                            <rect id="SvgjsRect1187" width="140" height="42" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1222" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1223" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, 4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1240" class="apexcharts-grid">
                                                        <g id="SvgjsG1241" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1243" x1="0" y1="0" x2="136" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1244" x1="0" y1="9.5" x2="136" y2="9.5"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1245" x1="0" y1="19" x2="136" y2="19"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1246" x1="0" y1="28.5" x2="136" y2="28.5"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1247" x1="0" y1="38" x2="136" y2="38"
                                                                stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1242" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1249" x1="0" y1="38" x2="136" y2="38"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1248" x1="0" y1="1" x2="0" y2="38"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1188"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1189" class="apexcharts-series" rel="1"
                                                            seriesName="Inflation" data:realIndex="0">
                                                            <path id="SvgjsPath1193"
                                                                d="M 3.6266666666666665 38L 3.6266666666666665 35.75Q 3.6266666666666665 33.25 6.126666666666667 33.25L 2.9399999999999995 33.25Q 5.4399999999999995 33.25 5.4399999999999995 35.75L 5.4399999999999995 35.75L 5.4399999999999995 38L 5.4399999999999995 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 3.6266666666666665 38L 3.6266666666666665 35.75Q 3.6266666666666665 33.25 6.126666666666667 33.25L 2.9399999999999995 33.25Q 5.4399999999999995 33.25 5.4399999999999995 35.75L 5.4399999999999995 35.75L 5.4399999999999995 38L 5.4399999999999995 38z"
                                                                pathFrom="M 3.6266666666666665 38L 3.6266666666666665 38L 5.4399999999999995 38L 5.4399999999999995 38L 5.4399999999999995 38L 5.4399999999999995 38L 5.4399999999999995 38L 3.6266666666666665 38"
                                                                cy="33.25" cx="12.693333333333333" j="0" val="1"
                                                                barHeight="4.75" barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1195"
                                                                d="M 12.693333333333333 38L 12.693333333333333 30.525Q 12.693333333333333 28.025 15.193333333333333 28.025L 12.006666666666666 28.025Q 14.506666666666666 28.025 14.506666666666666 30.525L 14.506666666666666 30.525L 14.506666666666666 38L 14.506666666666666 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 12.693333333333333 38L 12.693333333333333 30.525Q 12.693333333333333 28.025 15.193333333333333 28.025L 12.006666666666666 28.025Q 14.506666666666666 28.025 14.506666666666666 30.525L 14.506666666666666 30.525L 14.506666666666666 38L 14.506666666666666 38z"
                                                                pathFrom="M 12.693333333333333 38L 12.693333333333333 38L 14.506666666666666 38L 14.506666666666666 38L 14.506666666666666 38L 14.506666666666666 38L 14.506666666666666 38L 12.693333333333333 38"
                                                                cy="28.025" cx="21.759999999999998" j="1" val="2.1"
                                                                barHeight="9.975000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <path id="SvgjsPath1197"
                                                                d="M 21.759999999999998 38L 21.759999999999998 35.75Q 21.759999999999998 33.25 24.259999999999998 33.25L 21.07333333333333 33.25Q 23.57333333333333 33.25 23.57333333333333 35.75L 23.57333333333333 35.75L 23.57333333333333 38L 23.57333333333333 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 21.759999999999998 38L 21.759999999999998 35.75Q 21.759999999999998 33.25 24.259999999999998 33.25L 21.07333333333333 33.25Q 23.57333333333333 33.25 23.57333333333333 35.75L 23.57333333333333 35.75L 23.57333333333333 38L 23.57333333333333 38z"
                                                                pathFrom="M 21.759999999999998 38L 21.759999999999998 38L 23.57333333333333 38L 23.57333333333333 38L 23.57333333333333 38L 23.57333333333333 38L 23.57333333333333 38L 21.759999999999998 38"
                                                                cy="33.25" cx="30.826666666666664" j="2" val="1"
                                                                barHeight="4.75" barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1199"
                                                                d="M 30.826666666666664 38L 30.826666666666664 30.525Q 30.826666666666664 28.025 33.32666666666667 28.025L 30.14 28.025Q 32.64 28.025 32.64 30.525L 32.64 30.525L 32.64 38L 32.64 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 30.826666666666664 38L 30.826666666666664 30.525Q 30.826666666666664 28.025 33.32666666666667 28.025L 30.14 28.025Q 32.64 28.025 32.64 30.525L 32.64 30.525L 32.64 38L 32.64 38z"
                                                                pathFrom="M 30.826666666666664 38L 30.826666666666664 38L 32.64 38L 32.64 38L 32.64 38L 32.64 38L 32.64 38L 30.826666666666664 38"
                                                                cy="28.025" cx="39.89333333333333" j="3" val="2.1"
                                                                barHeight="9.975000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <path id="SvgjsPath1201"
                                                                d="M 39.89333333333333 38L 39.89333333333333 21.025000000000002Q 39.89333333333333 18.525000000000002 42.39333333333333 18.525000000000002L 39.20666666666666 18.525000000000002Q 41.70666666666666 18.525000000000002 41.70666666666666 21.025000000000002L 41.70666666666666 21.025000000000002L 41.70666666666666 38L 41.70666666666666 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 39.89333333333333 38L 39.89333333333333 21.025000000000002Q 39.89333333333333 18.525000000000002 42.39333333333333 18.525000000000002L 39.20666666666666 18.525000000000002Q 41.70666666666666 18.525000000000002 41.70666666666666 21.025000000000002L 41.70666666666666 21.025000000000002L 41.70666666666666 38L 41.70666666666666 38z"
                                                                pathFrom="M 39.89333333333333 38L 39.89333333333333 38L 41.70666666666666 38L 41.70666666666666 38L 41.70666666666666 38L 41.70666666666666 38L 41.70666666666666 38L 39.89333333333333 38"
                                                                cy="18.525000000000002" cx="48.959999999999994" j="4"
                                                                val="4.1" barHeight="19.474999999999998"
                                                                barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1203"
                                                                d="M 48.959999999999994 38L 48.959999999999994 11.524999999999999Q 48.959999999999994 9.024999999999999 51.459999999999994 9.024999999999999L 48.273333333333326 9.024999999999999Q 50.773333333333326 9.024999999999999 50.773333333333326 11.524999999999999L 50.773333333333326 11.524999999999999L 50.773333333333326 38L 50.773333333333326 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 48.959999999999994 38L 48.959999999999994 11.524999999999999Q 48.959999999999994 9.024999999999999 51.459999999999994 9.024999999999999L 48.273333333333326 9.024999999999999Q 50.773333333333326 9.024999999999999 50.773333333333326 11.524999999999999L 50.773333333333326 11.524999999999999L 50.773333333333326 38L 50.773333333333326 38z"
                                                                pathFrom="M 48.959999999999994 38L 48.959999999999994 38L 50.773333333333326 38L 50.773333333333326 38L 50.773333333333326 38L 50.773333333333326 38L 50.773333333333326 38L 48.959999999999994 38"
                                                                cy="9.024999999999999" cx="58.02666666666666" j="5"
                                                                val="6.1" barHeight="28.975"
                                                                barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1205"
                                                                d="M 58.02666666666666 38L 58.02666666666666 21.025000000000002Q 58.02666666666666 18.525000000000002 60.52666666666666 18.525000000000002L 57.33999999999999 18.525000000000002Q 59.83999999999999 18.525000000000002 59.83999999999999 21.025000000000002L 59.83999999999999 21.025000000000002L 59.83999999999999 38L 59.83999999999999 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 58.02666666666666 38L 58.02666666666666 21.025000000000002Q 58.02666666666666 18.525000000000002 60.52666666666666 18.525000000000002L 57.33999999999999 18.525000000000002Q 59.83999999999999 18.525000000000002 59.83999999999999 21.025000000000002L 59.83999999999999 21.025000000000002L 59.83999999999999 38L 59.83999999999999 38z"
                                                                pathFrom="M 58.02666666666666 38L 58.02666666666666 38L 59.83999999999999 38L 59.83999999999999 38L 59.83999999999999 38L 59.83999999999999 38L 59.83999999999999 38L 58.02666666666666 38"
                                                                cy="18.525000000000002" cx="67.09333333333332" j="6"
                                                                val="4.1" barHeight="19.474999999999998"
                                                                barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1207"
                                                                d="M 67.09333333333332 38L 67.09333333333332 21.025000000000002Q 67.09333333333332 18.525000000000002 69.59333333333332 18.525000000000002L 66.40666666666665 18.525000000000002Q 68.90666666666665 18.525000000000002 68.90666666666665 21.025000000000002L 68.90666666666665 21.025000000000002L 68.90666666666665 38L 68.90666666666665 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 67.09333333333332 38L 67.09333333333332 21.025000000000002Q 67.09333333333332 18.525000000000002 69.59333333333332 18.525000000000002L 66.40666666666665 18.525000000000002Q 68.90666666666665 18.525000000000002 68.90666666666665 21.025000000000002L 68.90666666666665 21.025000000000002L 68.90666666666665 38L 68.90666666666665 38z"
                                                                pathFrom="M 67.09333333333332 38L 67.09333333333332 38L 68.90666666666665 38L 68.90666666666665 38L 68.90666666666665 38L 68.90666666666665 38L 68.90666666666665 38L 67.09333333333332 38"
                                                                cy="18.525000000000002" cx="76.15999999999998" j="7"
                                                                val="4.1" barHeight="19.474999999999998"
                                                                barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1209"
                                                                d="M 76.15999999999998 38L 76.15999999999998 30.525Q 76.15999999999998 28.025 78.65999999999998 28.025L 75.47333333333331 28.025Q 77.97333333333331 28.025 77.97333333333331 30.525L 77.97333333333331 30.525L 77.97333333333331 38L 77.97333333333331 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 76.15999999999998 38L 76.15999999999998 30.525Q 76.15999999999998 28.025 78.65999999999998 28.025L 75.47333333333331 28.025Q 77.97333333333331 28.025 77.97333333333331 30.525L 77.97333333333331 30.525L 77.97333333333331 38L 77.97333333333331 38z"
                                                                pathFrom="M 76.15999999999998 38L 76.15999999999998 38L 77.97333333333331 38L 77.97333333333331 38L 77.97333333333331 38L 77.97333333333331 38L 77.97333333333331 38L 76.15999999999998 38"
                                                                cy="28.025" cx="85.22666666666665" j="8" val="2.1"
                                                                barHeight="9.975000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <path id="SvgjsPath1211"
                                                                d="M 85.22666666666665 38L 85.22666666666665 21.025000000000002Q 85.22666666666665 18.525000000000002 87.72666666666665 18.525000000000002L 84.53999999999998 18.525000000000002Q 87.03999999999998 18.525000000000002 87.03999999999998 21.025000000000002L 87.03999999999998 21.025000000000002L 87.03999999999998 38L 87.03999999999998 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 85.22666666666665 38L 85.22666666666665 21.025000000000002Q 85.22666666666665 18.525000000000002 87.72666666666665 18.525000000000002L 84.53999999999998 18.525000000000002Q 87.03999999999998 18.525000000000002 87.03999999999998 21.025000000000002L 87.03999999999998 21.025000000000002L 87.03999999999998 38L 87.03999999999998 38z"
                                                                pathFrom="M 85.22666666666665 38L 85.22666666666665 38L 87.03999999999998 38L 87.03999999999998 38L 87.03999999999998 38L 87.03999999999998 38L 87.03999999999998 38L 85.22666666666665 38"
                                                                cy="18.525000000000002" cx="94.29333333333331" j="9"
                                                                val="4.1" barHeight="19.474999999999998"
                                                                barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1213"
                                                                d="M 94.29333333333331 38L 94.29333333333331 30.525Q 94.29333333333331 28.025 96.79333333333331 28.025L 93.60666666666664 28.025Q 96.10666666666664 28.025 96.10666666666664 30.525L 96.10666666666664 30.525L 96.10666666666664 38L 96.10666666666664 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 94.29333333333331 38L 94.29333333333331 30.525Q 94.29333333333331 28.025 96.79333333333331 28.025L 93.60666666666664 28.025Q 96.10666666666664 28.025 96.10666666666664 30.525L 96.10666666666664 30.525L 96.10666666666664 38L 96.10666666666664 38z"
                                                                pathFrom="M 94.29333333333331 38L 94.29333333333331 38L 96.10666666666664 38L 96.10666666666664 38L 96.10666666666664 38L 96.10666666666664 38L 96.10666666666664 38L 94.29333333333331 38"
                                                                cy="28.025" cx="103.35999999999997" j="10" val="2.1"
                                                                barHeight="9.975000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <path id="SvgjsPath1215"
                                                                d="M 103.35999999999997 38L 103.35999999999997 25.775Q 103.35999999999997 23.275 105.85999999999997 23.275L 102.6733333333333 23.275Q 105.1733333333333 23.275 105.1733333333333 25.775L 105.1733333333333 25.775L 105.1733333333333 38L 105.1733333333333 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 103.35999999999997 38L 103.35999999999997 25.775Q 103.35999999999997 23.275 105.85999999999997 23.275L 102.6733333333333 23.275Q 105.1733333333333 23.275 105.1733333333333 25.775L 105.1733333333333 25.775L 105.1733333333333 38L 105.1733333333333 38z"
                                                                pathFrom="M 103.35999999999997 38L 103.35999999999997 38L 105.1733333333333 38L 105.1733333333333 38L 105.1733333333333 38L 105.1733333333333 38L 105.1733333333333 38L 103.35999999999997 38"
                                                                cy="23.275" cx="112.42666666666663" j="11" val="3.1"
                                                                barHeight="14.725000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <path id="SvgjsPath1217"
                                                                d="M 112.42666666666663 38L 112.42666666666663 35.75Q 112.42666666666663 33.25 114.92666666666663 33.25L 111.73999999999997 33.25Q 114.23999999999997 33.25 114.23999999999997 35.75L 114.23999999999997 35.75L 114.23999999999997 38L 114.23999999999997 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 112.42666666666663 38L 112.42666666666663 35.75Q 112.42666666666663 33.25 114.92666666666663 33.25L 111.73999999999997 33.25Q 114.23999999999997 33.25 114.23999999999997 35.75L 114.23999999999997 35.75L 114.23999999999997 38L 114.23999999999997 38z"
                                                                pathFrom="M 112.42666666666663 38L 112.42666666666663 38L 114.23999999999997 38L 114.23999999999997 38L 114.23999999999997 38L 114.23999999999997 38L 114.23999999999997 38L 112.42666666666663 38"
                                                                cy="33.25" cx="121.4933333333333" j="12" val="1"
                                                                barHeight="4.75" barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1219"
                                                                d="M 121.4933333333333 38L 121.4933333333333 35.75Q 121.4933333333333 33.25 123.9933333333333 33.25L 120.80666666666663 33.25Q 123.30666666666663 33.25 123.30666666666663 35.75L 123.30666666666663 35.75L 123.30666666666663 38L 123.30666666666663 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 121.4933333333333 38L 121.4933333333333 35.75Q 121.4933333333333 33.25 123.9933333333333 33.25L 120.80666666666663 33.25Q 123.30666666666663 33.25 123.30666666666663 35.75L 123.30666666666663 35.75L 123.30666666666663 38L 123.30666666666663 38z"
                                                                pathFrom="M 121.4933333333333 38L 121.4933333333333 38L 123.30666666666663 38L 123.30666666666663 38L 123.30666666666663 38L 123.30666666666663 38L 123.30666666666663 38L 121.4933333333333 38"
                                                                cy="33.25" cx="130.55999999999997" j="13" val="1"
                                                                barHeight="4.75" barWidth="1.8133333333333332"></path>
                                                            <path id="SvgjsPath1221"
                                                                d="M 130.55999999999997 38L 130.55999999999997 30.525Q 130.55999999999997 28.025 133.05999999999997 28.025L 129.8733333333333 28.025Q 132.3733333333333 28.025 132.3733333333333 30.525L 132.3733333333333 30.525L 132.3733333333333 38L 132.3733333333333 38z"
                                                                fill="rgba(255,255,255,0.85)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-bar-area" index="0"
                                                                clip-path="url(#gridRectMask3ohqcd36)"
                                                                pathTo="M 130.55999999999997 38L 130.55999999999997 30.525Q 130.55999999999997 28.025 133.05999999999997 28.025L 129.8733333333333 28.025Q 132.3733333333333 28.025 132.3733333333333 30.525L 132.3733333333333 30.525L 132.3733333333333 38L 132.3733333333333 38z"
                                                                pathFrom="M 130.55999999999997 38L 130.55999999999997 38L 132.3733333333333 38L 132.3733333333333 38L 132.3733333333333 38L 132.3733333333333 38L 132.3733333333333 38L 130.55999999999997 38"
                                                                cy="28.025" cx="139.62666666666664" j="14" val="2.1"
                                                                barHeight="9.975000000000001"
                                                                barWidth="1.8133333333333332">
                                                            </path>
                                                            <g id="SvgjsG1191" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1192"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1194"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1196"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1198"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1200"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1202"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1204"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1206"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1208"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1210"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1212"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1214"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1216"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1218"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                                <g id="SvgjsG1220"
                                                                    className="apexcharts-bar-goals-groups">
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1190" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1250" x1="0" y1="0" x2="136" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1251" x1="0" y1="0" x2="136" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1252" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1253" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1254" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1239" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1183" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 50px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Stats-->
                                <div class="pt-5">
                                    <!--begin::Number-->
                                    <span class="text-dark fw-bolder fs-2x lh-0">products</span>
                                    <span class="text-dark fw-bolder fs-3x lh-0 me-2">{{\App\Models\Product::count()}} </span>
                                    <!--end::Number-->
                                    <!--begin::Text-->

                                    <!--end::Text-->
                                </div>
                                <!--end::Stats-->
                            </div>
                        </div>
                        <!--end::Mixed Widget 14-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 14-->
                        <div class="card card-xxl-stretch mb-xl-10 mb-5" style="background-color: #CBD4F4">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column mb-7">
                                    <!--begin::Title-->
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Categories</a>
                                    <!--end::Title-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">{{\App\Models\ParentCategory::count()}}</div>
                                                <div class="fs-7 fw-bold text-gray-600">Parent</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center mb-9 ms-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                            fill="black"></path>
                                                    </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">{{\App\Models\ChildCategory::count()}}</div>
                                                <div class="fs-7 fw-bold text-gray-600">Child</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs022.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z"
                                                            fill="black"></path>
                                                    </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">40</div>
                                                <div class="fs-7 fw-bold text-gray-600">Tasks</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <div class="d-flex align-items-center ms-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-3">
                                                <div class="symbol-label bg-white bg-opacity-50">
                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs045.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M2 11.7127L10 14.1127L22 11.7127L14 9.31274L2 11.7127Z"
                                                                fill="black"></path>
                                                            <path opacity="0.3"
                                                                d="M20.9 7.91274L2 11.7127V6.81275C2 6.11275 2.50001 5.61274 3.10001 5.51274L20.6 2.01274C21.3 1.91274 22 2.41273 22 3.11273V6.61273C22 7.21273 21.5 7.81274 20.9 7.91274ZM22 16.6127V11.7127L3.10001 15.5127C2.50001 15.6127 2 16.2127 2 16.8127V20.3127C2 21.0127 2.69999 21.6128 3.39999 21.4128L20.9 17.9128C21.5 17.8128 22 17.2127 22 16.6127Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-5 text-dark fw-bolder lh-1">${{\App\Models\order::sum('totalprice')}}</div>
                                                <div class="fs-7 fw-bold text-gray-600">Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                        </div>
                        <!--end::Mixed Widget 14-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Tables Widget 9-->
                <div class="card mb-xl-10 mb-5">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                            <span class="text-muted fw-bold fs-7 mt-1">Over 500 members</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
                            <a href="{{route('user.create')}}" class="btn btn-sm btn-light btn-active-primary"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                            transform="rotate(-90 11.364 20.364)" fill="black">
                                        </rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->New Member
                            </a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table-row-dashed table-row-gray-300 gs-0 gy-4 table align-middle">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    data-kt-check="true" data-kt-check-target=".widget-9-check">
                                            </div>
                                        </th>
                                        <th class="min-w-150px">Image</th>
                                        <th class="min-w-140px">Name</th>
                                        <th class="min-w-120px">Roles</th>
                                        <th class="min-w-100px text-end">Actions</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check" type="checkbox"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="symbol symbol-45px me-5">
                                                <img src="{{$user->getFirstMediaUrl('user.image')}}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$user->name}}</a>
                                            <span
                                                class="text-muted fw-bold text-muted d-block fs-7">{{$user['email']}}</span>
                                        </td>
                                        <td class="text-dark">@foreach($user->roles as $role)
                                            <span class="fs-7 fw-bold me-2">{{$role['name']}}</span>
                                            @if(!$loop->last), @endif
                                            @endforeach

                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{route('user.edit',$user['id'])}}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="{{route('user.delete',$user['id'])}}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                fill="black"></path>
                                                            <path opacity="0.5"
                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                fill="black"></path>
                                                            <path opacity="0.5"
                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    {{-- <div class="col-xxl-6">
                        <!--begin::List Widget 5-->
                        <div class="card card-xl-stretch mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header align-items-center mt-4 border-0">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark mb-2">Activities</span>
                                    <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                        id="kt_menu_61cf184017882">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_61cf184017882"
                                                        data-allow-clear="true" data-select2-id="select2-data-7-hcsr"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="select2-data-9-dls8"></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-8-sl44"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-99w2-container"
                                                                aria-controls="select2-99w2-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-99w2-container" role="textbox"
                                                                    aria-readonly="true" title="Select option"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        option</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1">
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2"
                                                            checked="checked">
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="notifications" checked="checked">
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Timeline-->
                                <div class="timeline-label">
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">08:42</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-warning fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you
                                            honest. And
                                            keep structure</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">10:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex">
                                            <span class="fw-bolder ps-3 text-gray-800">AEOL meeting</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">14:37</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bolder ps-3 text-gray-800">Make deposit
                                            <a href="#" class="text-primary">USD 700</a>. to ESL
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">16:50</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                            driving
                                            and keep structure keep great</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">21:03</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bold ps-3 text-gray-800">New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">16:50</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                            driving
                                            and keep structure keep great</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">21:03</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bold ps-3 text-gray-800">New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder fs-6 text-gray-800">10:30</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app
                                            launch
                                            preparion meeting</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div> --}}
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::List Widget 4-->
                        <div class="card card-xl-stretch mb-xl-10 mb-5">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Products</span>
                                    <span class="text-muted fw-bold fs-7 mt-1">Latest Products</span>
                                </h3>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            @php
                            // Fetch the latest 10 products
                            $product = \App\Models\Product::latest()->take(10)->get();
                        @endphp

                            <div class="card-body pt-5">

                                @foreach ($product as $products)
                               <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="{{$products->getFirstMediaUrl('product.image')}}"
                                                class="h-50 align-self-center" alt="{{$products['name']}}">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-hover-primary fs-6 fw-bolder text-gray-800">{{$products['name']}}</a>
                                            <span class="text-muted fw-bold d-block fs-7">Price, {{$products['price']}}, {{$products['availibility']}}</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2"> <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" readonly type="checkbox"
                                                {{$products['availability']=='on' ?'checked':''}} name="availability" value="" />

                                        </label></span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach


                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
