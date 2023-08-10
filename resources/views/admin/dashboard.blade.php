@extends('admin.includes.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        @include('admin.includes.header')
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->
                <div class="row g-3 row-deck">
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$15K</h3>
                                <p class="text-muted">
                                    67% <i class="fa fa-level-up text-success"></i> Total income
                                </p>
                                <div id="apexspark_bar_1" style="min-height: 40px;">
                                    <div id="apexcharts3tgx34l8"
                                        class="apexcharts-canvas apexcharts3tgx34l8 apexcharts-theme-light"
                                        style="width: 100px; height: 40px;"><svg id="SvgjsSvg2025" width="100"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG2027" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2026">
                                                    <linearGradient id="SvgjsLinearGradient2031" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop2032" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop2033" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop2034" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask3tgx34l8">
                                                        <rect id="SvgjsRect2037" width="106" height="42"
                                                            x="-3" y="-1" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask3tgx34l8"></clipPath>
                                                    <clipPath id="nonForecastMask3tgx34l8"></clipPath>
                                                    <clipPath id="gridRectMarkerMask3tgx34l8">
                                                        <rect id="SvgjsRect2038" width="104" height="44"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine2036" x1="0" y1="0" x2="0"
                                                    y2="40" stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="40" fill="url(#SvgjsLinearGradient2031)"
                                                    filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                <g id="SvgjsG2065" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2066" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG2079" class="apexcharts-grid">
                                                    <g id="SvgjsG2080" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2082" x1="0" y1="0"
                                                            x2="100" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2083" x1="0" y1="8"
                                                            x2="100" y2="8" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2084" x1="0" y1="16"
                                                            x2="100" y2="16" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2085" x1="0" y1="24"
                                                            x2="100" y2="24" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2086" x1="0" y1="32"
                                                            x2="100" y2="32" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2087" x1="0" y1="40"
                                                            x2="100" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2081" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2089" x1="0" y1="40"
                                                        x2="100" y2="40" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2088" x1="0" y1="1"
                                                        x2="0" y2="40" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG2039" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG2040" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath2044"
                                                            d="M 0.9090909090909092 40L 0.9090909090909092 21.2Q 0.9090909090909092 21.2 0.9090909090909092 21.2L 6.181818181818183 21.2Q 6.181818181818183 21.2 6.181818181818183 21.2L 6.181818181818183 21.2L 6.181818181818183 40L 6.181818181818183 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 0.9090909090909092 40L 0.9090909090909092 21.2Q 0.9090909090909092 21.2 0.9090909090909092 21.2L 6.181818181818183 21.2Q 6.181818181818183 21.2 6.181818181818183 21.2L 6.181818181818183 21.2L 6.181818181818183 40L 6.181818181818183 40z"
                                                            pathFrom="M 0.9090909090909092 40L 0.9090909090909092 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 0.9090909090909092 40"
                                                            cy="21.2" cx="9" j="0" val="47"
                                                            barHeight="18.8" barWidth="7.272727272727273"></path>
                                                        <path id="SvgjsPath2046"
                                                            d="M 10 40L 10 22Q 10 22 10 22L 15.272727272727273 22Q 15.272727272727273 22 15.272727272727273 22L 15.272727272727273 22L 15.272727272727273 40L 15.272727272727273 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 10 40L 10 22Q 10 22 10 22L 15.272727272727273 22Q 15.272727272727273 22 15.272727272727273 22L 15.272727272727273 22L 15.272727272727273 40L 15.272727272727273 40z"
                                                            pathFrom="M 10 40L 10 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 10 40"
                                                            cy="22" cx="18.090909090909093" j="1"
                                                            val="45" barHeight="18" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2048"
                                                            d="M 19.090909090909093 40L 19.090909090909093 10.399999999999999Q 19.090909090909093 10.399999999999999 19.090909090909093 10.399999999999999L 24.363636363636367 10.399999999999999Q 24.363636363636367 10.399999999999999 24.363636363636367 10.399999999999999L 24.363636363636367 10.399999999999999L 24.363636363636367 40L 24.363636363636367 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 19.090909090909093 40L 19.090909090909093 10.399999999999999Q 19.090909090909093 10.399999999999999 19.090909090909093 10.399999999999999L 24.363636363636367 10.399999999999999Q 24.363636363636367 10.399999999999999 24.363636363636367 10.399999999999999L 24.363636363636367 10.399999999999999L 24.363636363636367 40L 24.363636363636367 40z"
                                                            pathFrom="M 19.090909090909093 40L 19.090909090909093 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 19.090909090909093 40"
                                                            cy="10.399999999999999" cx="27.181818181818187"
                                                            j="2" val="74" barHeight="29.6"
                                                            barWidth="7.272727272727273"></path>
                                                        <path id="SvgjsPath2050"
                                                            d="M 28.181818181818187 40L 28.181818181818187 34.4Q 28.181818181818187 34.4 28.181818181818187 34.4L 33.45454545454546 34.4Q 33.45454545454546 34.4 33.45454545454546 34.4L 33.45454545454546 34.4L 33.45454545454546 40L 33.45454545454546 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 28.181818181818187 40L 28.181818181818187 34.4Q 28.181818181818187 34.4 28.181818181818187 34.4L 33.45454545454546 34.4Q 33.45454545454546 34.4 33.45454545454546 34.4L 33.45454545454546 34.4L 33.45454545454546 40L 33.45454545454546 40z"
                                                            pathFrom="M 28.181818181818187 40L 28.181818181818187 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 28.181818181818187 40"
                                                            cy="34.4" cx="36.27272727272728" j="3"
                                                            val="14" barHeight="5.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2052"
                                                            d="M 37.27272727272728 40L 37.27272727272728 17.6Q 37.27272727272728 17.6 37.27272727272728 17.6L 42.545454545454554 17.6Q 42.545454545454554 17.6 42.545454545454554 17.6L 42.545454545454554 17.6L 42.545454545454554 40L 42.545454545454554 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 37.27272727272728 40L 37.27272727272728 17.6Q 37.27272727272728 17.6 37.27272727272728 17.6L 42.545454545454554 17.6Q 42.545454545454554 17.6 42.545454545454554 17.6L 42.545454545454554 17.6L 42.545454545454554 40L 42.545454545454554 40z"
                                                            pathFrom="M 37.27272727272728 40L 37.27272727272728 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 37.27272727272728 40"
                                                            cy="17.6" cx="45.363636363636374" j="4"
                                                            val="56" barHeight="22.4" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2054"
                                                            d="M 46.363636363636374 40L 46.363636363636374 10.399999999999999Q 46.363636363636374 10.399999999999999 46.363636363636374 10.399999999999999L 51.63636363636365 10.399999999999999Q 51.63636363636365 10.399999999999999 51.63636363636365 10.399999999999999L 51.63636363636365 10.399999999999999L 51.63636363636365 40L 51.63636363636365 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 46.363636363636374 40L 46.363636363636374 10.399999999999999Q 46.363636363636374 10.399999999999999 46.363636363636374 10.399999999999999L 51.63636363636365 10.399999999999999Q 51.63636363636365 10.399999999999999 51.63636363636365 10.399999999999999L 51.63636363636365 10.399999999999999L 51.63636363636365 40L 51.63636363636365 40z"
                                                            pathFrom="M 46.363636363636374 40L 46.363636363636374 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 46.363636363636374 40"
                                                            cy="10.399999999999999" cx="54.45454545454547" j="5"
                                                            val="74" barHeight="29.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2056"
                                                            d="M 55.45454545454547 40L 55.45454545454547 34.4Q 55.45454545454547 34.4 55.45454545454547 34.4L 60.72727272727274 34.4Q 60.72727272727274 34.4 60.72727272727274 34.4L 60.72727272727274 34.4L 60.72727272727274 40L 60.72727272727274 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 55.45454545454547 40L 55.45454545454547 34.4Q 55.45454545454547 34.4 55.45454545454547 34.4L 60.72727272727274 34.4Q 60.72727272727274 34.4 60.72727272727274 34.4L 60.72727272727274 34.4L 60.72727272727274 40L 60.72727272727274 40z"
                                                            pathFrom="M 55.45454545454547 40L 55.45454545454547 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 55.45454545454547 40"
                                                            cy="34.4" cx="63.54545454545456" j="6"
                                                            val="14" barHeight="5.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2058"
                                                            d="M 64.54545454545456 40L 64.54545454545456 35.6Q 64.54545454545456 35.6 64.54545454545456 35.6L 69.81818181818184 35.6Q 69.81818181818184 35.6 69.81818181818184 35.6L 69.81818181818184 35.6L 69.81818181818184 40L 69.81818181818184 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 64.54545454545456 40L 64.54545454545456 35.6Q 64.54545454545456 35.6 64.54545454545456 35.6L 69.81818181818184 35.6Q 69.81818181818184 35.6 69.81818181818184 35.6L 69.81818181818184 35.6L 69.81818181818184 40L 69.81818181818184 40z"
                                                            pathFrom="M 64.54545454545456 40L 64.54545454545456 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 64.54545454545456 40"
                                                            cy="35.6" cx="72.63636363636365" j="7"
                                                            val="11" barHeight="4.4" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2060"
                                                            d="M 73.63636363636365 40L 73.63636363636365 37.2Q 73.63636363636365 37.2 73.63636363636365 37.2L 78.90909090909093 37.2Q 78.90909090909093 37.2 78.90909090909093 37.2L 78.90909090909093 37.2L 78.90909090909093 40L 78.90909090909093 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 73.63636363636365 40L 73.63636363636365 37.2Q 73.63636363636365 37.2 73.63636363636365 37.2L 78.90909090909093 37.2Q 78.90909090909093 37.2 78.90909090909093 37.2L 78.90909090909093 37.2L 78.90909090909093 40L 78.90909090909093 40z"
                                                            pathFrom="M 73.63636363636365 40L 73.63636363636365 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 73.63636363636365 40"
                                                            cy="37.2" cx="81.72727272727275" j="8"
                                                            val="7" barHeight="2.8" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2062"
                                                            d="M 82.72727272727275 40L 82.72727272727275 24.4Q 82.72727272727275 24.4 82.72727272727275 24.4L 88.00000000000003 24.4Q 88.00000000000003 24.4 88.00000000000003 24.4L 88.00000000000003 24.4L 88.00000000000003 40L 88.00000000000003 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 82.72727272727275 40L 82.72727272727275 24.4Q 82.72727272727275 24.4 82.72727272727275 24.4L 88.00000000000003 24.4Q 88.00000000000003 24.4 88.00000000000003 24.4L 88.00000000000003 24.4L 88.00000000000003 40L 88.00000000000003 40z"
                                                            pathFrom="M 82.72727272727275 40L 82.72727272727275 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 82.72727272727275 40"
                                                            cy="24.4" cx="90.81818181818184" j="9"
                                                            val="39" barHeight="15.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath2064"
                                                            d="M 91.81818181818184 40L 91.81818181818184 7.200000000000003Q 91.81818181818184 7.200000000000003 91.81818181818184 7.200000000000003L 97.09090909090912 7.200000000000003Q 97.09090909090912 7.200000000000003 97.09090909090912 7.200000000000003L 97.09090909090912 7.200000000000003L 97.09090909090912 40L 97.09090909090912 40z"
                                                            fill="var(--theme-color2)" fill-opacity="1"
                                                            stroke="var(--theme-color2)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask3tgx34l8)"
                                                            pathTo="M 91.81818181818184 40L 91.81818181818184 7.200000000000003Q 91.81818181818184 7.200000000000003 91.81818181818184 7.200000000000003L 97.09090909090912 7.200000000000003Q 97.09090909090912 7.200000000000003 97.09090909090912 7.200000000000003L 97.09090909090912 7.200000000000003L 97.09090909090912 40L 97.09090909090912 40z"
                                                            pathFrom="M 91.81818181818184 40L 91.81818181818184 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 91.81818181818184 40"
                                                            cy="7.200000000000003" cx="99.90909090909093" j="10"
                                                            val="82" barHeight="32.8" barWidth="7.272727272727273">
                                                        </path>
                                                        <g id="SvgjsG2042" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG2043" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2045" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2047" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2049" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2051" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2053" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2055" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2057" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2059" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2061" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG2063" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2041" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2090" x1="0" y1="0" x2="100"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2091" x1="0" y1="0" x2="100"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2092" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2093" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2094" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect2035" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG2078" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2028" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--theme-color2);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$1258</h3>
                                <p class="text-muted">
                                    15% <i class="fa fa-level-up text-success"></i> Total
                                    Expense
                                </p>
                                <div id="apexspark_bar_2" style="min-height: 40px;">
                                    <div id="apexcharts7c8kfuo1"
                                        class="apexcharts-canvas apexcharts7c8kfuo1 apexcharts-theme-light"
                                        style="width: 100px; height: 40px;"><svg id="SvgjsSvg3582" width="100"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3584" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3583">
                                                    <linearGradient id="SvgjsLinearGradient3588" x1="0"
                                                        y1="0" x2="0" y2="1">
                                                        <stop id="SvgjsStop3589" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop3590" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3591" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask7c8kfuo1">
                                                        <rect id="SvgjsRect3594" width="106" height="42"
                                                            x="-3" y="-1" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask7c8kfuo1"></clipPath>
                                                    <clipPath id="nonForecastMask7c8kfuo1"></clipPath>
                                                    <clipPath id="gridRectMarkerMask7c8kfuo1">
                                                        <rect id="SvgjsRect3595" width="104" height="44"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine3593" x1="0" y1="0" x2="0"
                                                    y2="40" stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="40" fill="url(#SvgjsLinearGradient3588)"
                                                    filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                <g id="SvgjsG3622" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3623" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 4)"></g>
                                                </g>
                                                <g id="SvgjsG3636" class="apexcharts-grid">
                                                    <g id="SvgjsG3637" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine3639" x1="0" y1="0"
                                                            x2="100" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3640" x1="0" y1="8"
                                                            x2="100" y2="8" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3641" x1="0" y1="16"
                                                            x2="100" y2="16" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3642" x1="0" y1="24"
                                                            x2="100" y2="24" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3643" x1="0" y1="32"
                                                            x2="100" y2="32" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3644" x1="0" y1="40"
                                                            x2="100" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3638" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine3646" x1="0" y1="40"
                                                        x2="100" y2="40" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine3645" x1="0" y1="1"
                                                        x2="0" y2="40" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG3596" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG3597" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath3601"
                                                            d="M 0.9090909090909092 40L 0.9090909090909092 21.2Q 0.9090909090909092 21.2 0.9090909090909092 21.2L 6.181818181818183 21.2Q 6.181818181818183 21.2 6.181818181818183 21.2L 6.181818181818183 21.2L 6.181818181818183 40L 6.181818181818183 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 0.9090909090909092 40L 0.9090909090909092 21.2Q 0.9090909090909092 21.2 0.9090909090909092 21.2L 6.181818181818183 21.2Q 6.181818181818183 21.2 6.181818181818183 21.2L 6.181818181818183 21.2L 6.181818181818183 40L 6.181818181818183 40z"
                                                            pathFrom="M 0.9090909090909092 40L 0.9090909090909092 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 6.181818181818183 40L 0.9090909090909092 40"
                                                            cy="21.2" cx="9" j="0" val="47"
                                                            barHeight="18.8" barWidth="7.272727272727273"></path>
                                                        <path id="SvgjsPath3603"
                                                            d="M 10 40L 10 22Q 10 22 10 22L 15.272727272727273 22Q 15.272727272727273 22 15.272727272727273 22L 15.272727272727273 22L 15.272727272727273 40L 15.272727272727273 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 10 40L 10 22Q 10 22 10 22L 15.272727272727273 22Q 15.272727272727273 22 15.272727272727273 22L 15.272727272727273 22L 15.272727272727273 40L 15.272727272727273 40z"
                                                            pathFrom="M 10 40L 10 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 15.272727272727273 40L 10 40"
                                                            cy="22" cx="18.090909090909093" j="1"
                                                            val="45" barHeight="18" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3605"
                                                            d="M 19.090909090909093 40L 19.090909090909093 10.399999999999999Q 19.090909090909093 10.399999999999999 19.090909090909093 10.399999999999999L 24.363636363636367 10.399999999999999Q 24.363636363636367 10.399999999999999 24.363636363636367 10.399999999999999L 24.363636363636367 10.399999999999999L 24.363636363636367 40L 24.363636363636367 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 19.090909090909093 40L 19.090909090909093 10.399999999999999Q 19.090909090909093 10.399999999999999 19.090909090909093 10.399999999999999L 24.363636363636367 10.399999999999999Q 24.363636363636367 10.399999999999999 24.363636363636367 10.399999999999999L 24.363636363636367 10.399999999999999L 24.363636363636367 40L 24.363636363636367 40z"
                                                            pathFrom="M 19.090909090909093 40L 19.090909090909093 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 24.363636363636367 40L 19.090909090909093 40"
                                                            cy="10.399999999999999" cx="27.181818181818187"
                                                            j="2" val="74" barHeight="29.6"
                                                            barWidth="7.272727272727273"></path>
                                                        <path id="SvgjsPath3607"
                                                            d="M 28.181818181818187 40L 28.181818181818187 34.4Q 28.181818181818187 34.4 28.181818181818187 34.4L 33.45454545454546 34.4Q 33.45454545454546 34.4 33.45454545454546 34.4L 33.45454545454546 34.4L 33.45454545454546 40L 33.45454545454546 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 28.181818181818187 40L 28.181818181818187 34.4Q 28.181818181818187 34.4 28.181818181818187 34.4L 33.45454545454546 34.4Q 33.45454545454546 34.4 33.45454545454546 34.4L 33.45454545454546 34.4L 33.45454545454546 40L 33.45454545454546 40z"
                                                            pathFrom="M 28.181818181818187 40L 28.181818181818187 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 33.45454545454546 40L 28.181818181818187 40"
                                                            cy="34.4" cx="36.27272727272728" j="3"
                                                            val="14" barHeight="5.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3609"
                                                            d="M 37.27272727272728 40L 37.27272727272728 17.6Q 37.27272727272728 17.6 37.27272727272728 17.6L 42.545454545454554 17.6Q 42.545454545454554 17.6 42.545454545454554 17.6L 42.545454545454554 17.6L 42.545454545454554 40L 42.545454545454554 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 37.27272727272728 40L 37.27272727272728 17.6Q 37.27272727272728 17.6 37.27272727272728 17.6L 42.545454545454554 17.6Q 42.545454545454554 17.6 42.545454545454554 17.6L 42.545454545454554 17.6L 42.545454545454554 40L 42.545454545454554 40z"
                                                            pathFrom="M 37.27272727272728 40L 37.27272727272728 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 42.545454545454554 40L 37.27272727272728 40"
                                                            cy="17.6" cx="45.363636363636374" j="4"
                                                            val="56" barHeight="22.4" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3611"
                                                            d="M 46.363636363636374 40L 46.363636363636374 10.399999999999999Q 46.363636363636374 10.399999999999999 46.363636363636374 10.399999999999999L 51.63636363636365 10.399999999999999Q 51.63636363636365 10.399999999999999 51.63636363636365 10.399999999999999L 51.63636363636365 10.399999999999999L 51.63636363636365 40L 51.63636363636365 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 46.363636363636374 40L 46.363636363636374 10.399999999999999Q 46.363636363636374 10.399999999999999 46.363636363636374 10.399999999999999L 51.63636363636365 10.399999999999999Q 51.63636363636365 10.399999999999999 51.63636363636365 10.399999999999999L 51.63636363636365 10.399999999999999L 51.63636363636365 40L 51.63636363636365 40z"
                                                            pathFrom="M 46.363636363636374 40L 46.363636363636374 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 51.63636363636365 40L 46.363636363636374 40"
                                                            cy="10.399999999999999" cx="54.45454545454547" j="5"
                                                            val="74" barHeight="29.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3613"
                                                            d="M 55.45454545454547 40L 55.45454545454547 34.4Q 55.45454545454547 34.4 55.45454545454547 34.4L 60.72727272727274 34.4Q 60.72727272727274 34.4 60.72727272727274 34.4L 60.72727272727274 34.4L 60.72727272727274 40L 60.72727272727274 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 55.45454545454547 40L 55.45454545454547 34.4Q 55.45454545454547 34.4 55.45454545454547 34.4L 60.72727272727274 34.4Q 60.72727272727274 34.4 60.72727272727274 34.4L 60.72727272727274 34.4L 60.72727272727274 40L 60.72727272727274 40z"
                                                            pathFrom="M 55.45454545454547 40L 55.45454545454547 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 60.72727272727274 40L 55.45454545454547 40"
                                                            cy="34.4" cx="63.54545454545456" j="6"
                                                            val="14" barHeight="5.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3615"
                                                            d="M 64.54545454545456 40L 64.54545454545456 35.6Q 64.54545454545456 35.6 64.54545454545456 35.6L 69.81818181818184 35.6Q 69.81818181818184 35.6 69.81818181818184 35.6L 69.81818181818184 35.6L 69.81818181818184 40L 69.81818181818184 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 64.54545454545456 40L 64.54545454545456 35.6Q 64.54545454545456 35.6 64.54545454545456 35.6L 69.81818181818184 35.6Q 69.81818181818184 35.6 69.81818181818184 35.6L 69.81818181818184 35.6L 69.81818181818184 40L 69.81818181818184 40z"
                                                            pathFrom="M 64.54545454545456 40L 64.54545454545456 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 69.81818181818184 40L 64.54545454545456 40"
                                                            cy="35.6" cx="72.63636363636365" j="7"
                                                            val="11" barHeight="4.4" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3617"
                                                            d="M 73.63636363636365 40L 73.63636363636365 37.2Q 73.63636363636365 37.2 73.63636363636365 37.2L 78.90909090909093 37.2Q 78.90909090909093 37.2 78.90909090909093 37.2L 78.90909090909093 37.2L 78.90909090909093 40L 78.90909090909093 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 73.63636363636365 40L 73.63636363636365 37.2Q 73.63636363636365 37.2 73.63636363636365 37.2L 78.90909090909093 37.2Q 78.90909090909093 37.2 78.90909090909093 37.2L 78.90909090909093 37.2L 78.90909090909093 40L 78.90909090909093 40z"
                                                            pathFrom="M 73.63636363636365 40L 73.63636363636365 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 78.90909090909093 40L 73.63636363636365 40"
                                                            cy="37.2" cx="81.72727272727275" j="8"
                                                            val="7" barHeight="2.8" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3619"
                                                            d="M 82.72727272727275 40L 82.72727272727275 24.4Q 82.72727272727275 24.4 82.72727272727275 24.4L 88.00000000000003 24.4Q 88.00000000000003 24.4 88.00000000000003 24.4L 88.00000000000003 24.4L 88.00000000000003 40L 88.00000000000003 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 82.72727272727275 40L 82.72727272727275 24.4Q 82.72727272727275 24.4 82.72727272727275 24.4L 88.00000000000003 24.4Q 88.00000000000003 24.4 88.00000000000003 24.4L 88.00000000000003 24.4L 88.00000000000003 40L 88.00000000000003 40z"
                                                            pathFrom="M 82.72727272727275 40L 82.72727272727275 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 88.00000000000003 40L 82.72727272727275 40"
                                                            cy="24.4" cx="90.81818181818184" j="9"
                                                            val="39" barHeight="15.6" barWidth="7.272727272727273">
                                                        </path>
                                                        <path id="SvgjsPath3621"
                                                            d="M 91.81818181818184 40L 91.81818181818184 7.200000000000003Q 91.81818181818184 7.200000000000003 91.81818181818184 7.200000000000003L 97.09090909090912 7.200000000000003Q 97.09090909090912 7.200000000000003 97.09090909090912 7.200000000000003L 97.09090909090912 7.200000000000003L 97.09090909090912 40L 97.09090909090912 40z"
                                                            fill="var(--theme-color1)" fill-opacity="1"
                                                            stroke="var(--theme-color1)" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7c8kfuo1)"
                                                            pathTo="M 91.81818181818184 40L 91.81818181818184 7.200000000000003Q 91.81818181818184 7.200000000000003 91.81818181818184 7.200000000000003L 97.09090909090912 7.200000000000003Q 97.09090909090912 7.200000000000003 97.09090909090912 7.200000000000003L 97.09090909090912 7.200000000000003L 97.09090909090912 40L 97.09090909090912 40z"
                                                            pathFrom="M 91.81818181818184 40L 91.81818181818184 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 97.09090909090912 40L 91.81818181818184 40"
                                                            cy="7.200000000000003" cx="99.90909090909093" j="10"
                                                            val="82" barHeight="32.8" barWidth="7.272727272727273">
                                                        </path>
                                                        <g id="SvgjsG3599" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG3600" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3602" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3604" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3606" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3608" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3610" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3612" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3614" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3616" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3618" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG3620" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3598" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3647" x1="0" y1="0" x2="100"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3648" x1="0" y1="0" x2="100"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3649" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3650" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3651" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3592" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG3635" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3585" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: var(--theme-color1);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!--[ Start:: page footer link copywrite ]-->
        @include('admin.includes.footer')
    </div>
@endsection

@section('customJs')
@endsection
