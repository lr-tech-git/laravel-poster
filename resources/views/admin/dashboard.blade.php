@extends('layouts.app-admin')

@section('content')

    <!-- Content -->

    <div class="flex-grow-1 container-p-y container-fluid">

        <!-- Topic and Users -->
        <div class="row mb-4 g-4">
            <div class="col-12 col-xl-8">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">{{ __('admin-main.dashboard.top_categories') }}</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
                                <a class="dropdown-item" href="javascript:void(0);">{{ __('admin-main.dashboard.highest_views') }}</a>
                                <a class="dropdown-item" href="javascript:void(0);">{{ __('admin-main.dashboard.see_all') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body row g-3">
                        <div class="col-md-6" style="position: relative;">
                            <div id="horizontalBarChart" style="min-height: 285px;"><div id="apexchartsunyh4srk" class="apexcharts-canvas apexchartsunyh4srk apexcharts-theme-light" style="width: 522px; height: 270px;">
                                    <svg id="SvgjsSvg1687" width="522" height="270" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1689" class="apexcharts-inner apexcharts-graphical" transform="translate(32.296875, -5)"><defs id="SvgjsDefs1688"><linearGradient id="SvgjsLinearGradient1693" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1694" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1695" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1696" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskunyh4srk"><rect id="SvgjsRect1698" width="469.6875" height="247.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskunyh4srk"></clipPath><clipPath id="nonForecastMaskunyh4srk"></clipPath><clipPath id="gridRectMarkerMaskunyh4srk"><rect id="SvgjsRect1699" width="469.6875" height="251.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1697" width="0" height="247.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1693)" class="apexcharts-xcrosshairs" y2="247.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1760" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG1761" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(0, 0)"><text id="SvgjsText1762" font-family="Public Sans" x="-15" y="22.520909090909093" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1763">6</tspan><title>6</title></text><text id="SvgjsText1764" font-family="Public Sans" x="-15" y="63.80924242424243" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1765">5</tspan><title>5</title></text><text id="SvgjsText1766" font-family="Public Sans" x="-15" y="105.09757575757575" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1767">4</tspan><title>4</title></text><text id="SvgjsText1768" font-family="Public Sans" x="-15" y="146.38590909090908" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1769">3</tspan><title>3</title></text><text id="SvgjsText1770" font-family="Public Sans" x="-15" y="187.6742424242424" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1771">2</tspan><title>2</title></text><text id="SvgjsText1772" font-family="Public Sans" x="-15" y="228.96257575757573" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan1773">1</tspan><title>1</title></text></g></g><g id="SvgjsG1740" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG1741" class="apexcharts-xaxis-texts-g" transform="translate(0, -8.666666666666666)"><text id="SvgjsText1742" font-family="Helvetica, Arial, sans-serif" x="465.6875" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1744">35%</tspan><title>35%</title></text><text id="SvgjsText1745" font-family="Helvetica, Arial, sans-serif" x="372.45" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1747">28%</tspan><title>28%</title></text><text id="SvgjsText1748" font-family="Helvetica, Arial, sans-serif" x="279.21250000000003" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1750">21%</tspan><title>21%</title></text><text id="SvgjsText1751" font-family="Helvetica, Arial, sans-serif" x="185.97500000000002" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1753">14%</tspan><title>14%</title></text><text id="SvgjsText1754" font-family="Helvetica, Arial, sans-serif" x="92.73750000000001" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1756">7%</tspan><title>7%</title></text><text id="SvgjsText1757" font-family="Helvetica, Arial, sans-serif" x="-0.49999999999994316" y="277.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1759">0%</tspan><title>0%</title></text></g></g><g id="SvgjsG1774" class="apexcharts-grid"><g id="SvgjsG1775" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1776" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1777" x1="0" y1="0" x2="0" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1778" x1="93.4375" y1="0" x2="93.4375" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1779" x1="186.875" y1="0" x2="186.875" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1780" x1="280.3125" y1="0" x2="280.3125" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1781" x1="373.75" y1="0" x2="373.75" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1782" x1="467.1875" y1="0" x2="467.1875" y2="247.73" stroke="#eceef1" stroke-dasharray="10" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1784" x1="0" y1="247.73" x2="465.6875" y2="247.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1783" x1="0" y1="1" x2="0" y2="247.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1700" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1701" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1705" d="M 0.1 6.193250000000001L 458.7875 6.193250000000001Q 465.7875 6.193250000000001 465.7875 13.19325L 465.7875 28.095083333333335Q 465.7875 35.095083333333335 458.7875 35.095083333333335L 458.7875 35.095083333333335L 0.1 35.095083333333335L 0.1 35.095083333333335Q 0.1 35.095083333333335 0.1 35.095083333333335L 0.1 6.193250000000001Q 0.1 6.193250000000001 0.1 6.193250000000001z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 6.193250000000001L 458.7875 6.193250000000001Q 465.7875 6.193250000000001 465.7875 13.19325L 465.7875 28.095083333333335Q 465.7875 35.095083333333335 458.7875 35.095083333333335L 458.7875 35.095083333333335L 0.1 35.095083333333335L 0.1 35.095083333333335Q 0.1 35.095083333333335 0.1 35.095083333333335L 0.1 6.193250000000001Q 0.1 6.193250000000001 0.1 6.193250000000001z" pathFrom="M 0.1 6.193250000000001L 0.1 6.193250000000001L 0.1 35.095083333333335L 0.1 35.095083333333335L 0.1 35.095083333333335L 0.1 35.095083333333335L 0.1 35.095083333333335L 0.1 6.193250000000001" cy="47.48158333333333" cx="465.7875" j="0" val="35" barHeight="28.901833333333332" barWidth="465.6875"></path><path id="SvgjsPath1711" d="M 0.1 47.48158333333333L 259.2071428571429 47.48158333333333Q 266.2071428571429 47.48158333333333 266.2071428571429 54.48158333333333L 266.2071428571429 69.38341666666666Q 266.2071428571429 76.38341666666666 259.2071428571429 76.38341666666666L 259.2071428571429 76.38341666666666L 0.1 76.38341666666666L 0.1 76.38341666666666Q 0.1 76.38341666666666 0.1 76.38341666666666L 0.1 47.48158333333333Q 0.1 47.48158333333333 0.1 47.48158333333333z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 47.48158333333333L 259.2071428571429 47.48158333333333Q 266.2071428571429 47.48158333333333 266.2071428571429 54.48158333333333L 266.2071428571429 69.38341666666666Q 266.2071428571429 76.38341666666666 259.2071428571429 76.38341666666666L 259.2071428571429 76.38341666666666L 0.1 76.38341666666666L 0.1 76.38341666666666Q 0.1 76.38341666666666 0.1 76.38341666666666L 0.1 47.48158333333333Q 0.1 47.48158333333333 0.1 47.48158333333333z" pathFrom="M 0.1 47.48158333333333L 0.1 47.48158333333333L 0.1 76.38341666666666L 0.1 76.38341666666666L 0.1 76.38341666666666L 0.1 76.38341666666666L 0.1 76.38341666666666L 0.1 47.48158333333333" cy="88.76991666666666" cx="266.2071428571429" j="1" val="20" barHeight="28.901833333333332" barWidth="266.1071428571429"></path><path id="SvgjsPath1717" d="M 0.1 88.76991666666666L 179.375 88.76991666666666Q 186.375 88.76991666666666 186.375 95.76991666666666L 186.375 110.67174999999999Q 186.375 117.67174999999999 179.375 117.67174999999999L 179.375 117.67174999999999L 0.1 117.67174999999999L 0.1 117.67174999999999Q 0.1 117.67174999999999 0.1 117.67174999999999L 0.1 88.76991666666666Q 0.1 88.76991666666666 0.1 88.76991666666666z" fill="rgba(113,221,55,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 88.76991666666666L 179.375 88.76991666666666Q 186.375 88.76991666666666 186.375 95.76991666666666L 186.375 110.67174999999999Q 186.375 117.67174999999999 179.375 117.67174999999999L 179.375 117.67174999999999L 0.1 117.67174999999999L 0.1 117.67174999999999Q 0.1 117.67174999999999 0.1 117.67174999999999L 0.1 88.76991666666666Q 0.1 88.76991666666666 0.1 88.76991666666666z" pathFrom="M 0.1 88.76991666666666L 0.1 88.76991666666666L 0.1 117.67174999999999L 0.1 117.67174999999999L 0.1 117.67174999999999L 0.1 117.67174999999999L 0.1 117.67174999999999L 0.1 88.76991666666666" cy="130.05825" cx="186.375" j="2" val="14" barHeight="28.901833333333332" barWidth="186.275"></path><path id="SvgjsPath1723" d="M 0.1 130.05825L 152.7642857142857 130.05825Q 159.7642857142857 130.05825 159.7642857142857 137.05825L 159.7642857142857 151.96008333333333Q 159.7642857142857 158.96008333333333 152.7642857142857 158.96008333333333L 152.7642857142857 158.96008333333333L 0.1 158.96008333333333L 0.1 158.96008333333333Q 0.1 158.96008333333333 0.1 158.96008333333333L 0.1 130.05825Q 0.1 130.05825 0.1 130.05825z" fill="rgba(133,146,163,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 130.05825L 152.7642857142857 130.05825Q 159.7642857142857 130.05825 159.7642857142857 137.05825L 159.7642857142857 151.96008333333333Q 159.7642857142857 158.96008333333333 152.7642857142857 158.96008333333333L 152.7642857142857 158.96008333333333L 0.1 158.96008333333333L 0.1 158.96008333333333Q 0.1 158.96008333333333 0.1 158.96008333333333L 0.1 130.05825Q 0.1 130.05825 0.1 130.05825z" pathFrom="M 0.1 130.05825L 0.1 130.05825L 0.1 158.96008333333333L 0.1 158.96008333333333L 0.1 158.96008333333333L 0.1 158.96008333333333L 0.1 158.96008333333333L 0.1 130.05825" cy="171.3465833333333" cx="159.7642857142857" j="3" val="12" barHeight="28.901833333333332" barWidth="159.6642857142857"></path><path id="SvgjsPath1729" d="M 0.1 171.3465833333333L 126.15357142857144 171.3465833333333Q 133.15357142857144 171.3465833333333 133.15357142857144 178.3465833333333L 133.15357142857144 193.24841666666666Q 133.15357142857144 200.24841666666666 126.15357142857144 200.24841666666666L 126.15357142857144 200.24841666666666L 0.1 200.24841666666666L 0.1 200.24841666666666Q 0.1 200.24841666666666 0.1 200.24841666666666L 0.1 171.3465833333333Q 0.1 171.3465833333333 0.1 171.3465833333333z" fill="rgba(255,62,29,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 171.3465833333333L 126.15357142857144 171.3465833333333Q 133.15357142857144 171.3465833333333 133.15357142857144 178.3465833333333L 133.15357142857144 193.24841666666666Q 133.15357142857144 200.24841666666666 126.15357142857144 200.24841666666666L 126.15357142857144 200.24841666666666L 0.1 200.24841666666666L 0.1 200.24841666666666Q 0.1 200.24841666666666 0.1 200.24841666666666L 0.1 171.3465833333333Q 0.1 171.3465833333333 0.1 171.3465833333333z" pathFrom="M 0.1 171.3465833333333L 0.1 171.3465833333333L 0.1 200.24841666666666L 0.1 200.24841666666666L 0.1 200.24841666666666L 0.1 200.24841666666666L 0.1 200.24841666666666L 0.1 171.3465833333333" cy="212.63491666666664" cx="133.15357142857144" j="4" val="10" barHeight="28.901833333333332" barWidth="133.05357142857144"></path><path id="SvgjsPath1735" d="M 0.1 212.63491666666664L 112.84821428571428 212.63491666666664Q 119.84821428571428 212.63491666666664 119.84821428571428 219.63491666666664L 119.84821428571428 234.53674999999998Q 119.84821428571428 241.53674999999998 112.84821428571428 241.53674999999998L 112.84821428571428 241.53674999999998L 0.1 241.53674999999998L 0.1 241.53674999999998Q 0.1 241.53674999999998 0.1 241.53674999999998L 0.1 212.63491666666664Q 0.1 212.63491666666664 0.1 212.63491666666664z" fill="rgba(255,171,0,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskunyh4srk)" pathTo="M 0.1 212.63491666666664L 112.84821428571428 212.63491666666664Q 119.84821428571428 212.63491666666664 119.84821428571428 219.63491666666664L 119.84821428571428 234.53674999999998Q 119.84821428571428 241.53674999999998 112.84821428571428 241.53674999999998L 112.84821428571428 241.53674999999998L 0.1 241.53674999999998L 0.1 241.53674999999998Q 0.1 241.53674999999998 0.1 241.53674999999998L 0.1 212.63491666666664Q 0.1 212.63491666666664 0.1 212.63491666666664z" pathFrom="M 0.1 212.63491666666664L 0.1 212.63491666666664L 0.1 241.53674999999998L 0.1 241.53674999999998L 0.1 241.53674999999998L 0.1 241.53674999999998L 0.1 241.53674999999998L 0.1 212.63491666666664" cy="253.92324999999997" cx="119.84821428571428" j="5" val="9" barHeight="28.901833333333332" barWidth="119.74821428571428"></path><g id="SvgjsG1703" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1704" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1710" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1716" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1722" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1728" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1734" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1702" class="apexcharts-datalabels" data:realIndex="0"><g id="SvgjsG1707" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1709" font-family="Public Sans" x="232.94375000000002" y="25.144166666666663" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="232.94375000000002" cy="25.144166666666663" style="font-family: &quot;Public Sans&quot;;">Category 1</text></g><g id="SvgjsG1713" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1715" font-family="Public Sans" x="133.15357142857147" y="66.43249999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="133.15357142857147" cy="66.43249999999999" style="font-family: &quot;Public Sans&quot;;">Category 2</text></g><g id="SvgjsG1719" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1721" font-family="Public Sans" x="93.2375" y="107.72083333333333" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="93.2375" cy="107.72083333333333" style="font-family: &quot;Public Sans&quot;;">Category 3</text></g><g id="SvgjsG1725" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1727" font-family="Public Sans" x="79.93214285714285" y="149.00916666666666" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="79.93214285714285" cy="149.00916666666666" style="font-family: &quot;Public Sans&quot;;">Category 4</text></g><g id="SvgjsG1731" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1733" font-family="Public Sans" x="66.62678571428572" y="190.29749999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="66.62678571428572" cy="190.29749999999999" style="font-family: &quot;Public Sans&quot;;">Category 5</text></g><g id="SvgjsG1737" class="apexcharts-data-labels" transform="rotate(0)"><text id="SvgjsText1739" font-family="Public Sans" x="59.974107142857136" y="231.5858333333333" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="200" fill="#ffffff" class="apexcharts-datalabel" cx="59.974107142857136" cy="231.5858333333333" style="font-family: &quot;Public Sans&quot;;">Category 6</text></g></g></g><line id="SvgjsLine1785" x1="0" y1="0" x2="465.6875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1786" x1="0" y1="0" x2="465.6875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1787" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1788" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1789" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1690" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 135px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 539px; height: 286px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div class="col-md-6 d-flex justify-content-around align-items-center">
                            <div>
                                <div class="d-flex align-items-baseline">
                                    <span class="text-primary me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 1</p>
                                        <h5>35%</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline my-3">
                                    <span class="text-success me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 2</p>
                                        <h5>14%</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <span class="text-danger me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 4</p>
                                        <h5>10%</h5>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex align-items-baseline">
                                    <span class="text-info me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 2</p>
                                        <h5>20%</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline my-3">
                                    <span class="text-secondary me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 5</p>
                                        <h5>12%</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <span class="text-warning me-2"><i class="bx bxs-circle"></i></span>
                                    <div>
                                        <p class="mb-2">Category 6</p>
                                        <h5>9%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">{{ __('admin-main.dashboard.active_users') }}</h5>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="popularInstructors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless border-top">
                            <thead class="border-bottom">
                            <tr>
                                <th>Users</th>
                                <th class="text-end">Complaint count</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center mt-lg-4">
                                                <div class="avatar me-3">
                                                    <img src="{{ $user->getImgSrc() }}" alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-truncate">{{ $user->getFullName() }}</h6>
                                                    <small class="text-truncate text-muted">{{ $user->email }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="user-progress mt-lg-4">
                                                <h6 class="mb-0">{{ $user->complaints->count() }}</h6>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        <!-- Course datatable -->
        <div class="card mb-4">
            <div class="table-responsive mb-3">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex-column flex-md-row">
                        <div class="head-label text-center">
                            <h5 class="card-title mb-0 text-nowrap">{{ __('admin-main.dashboard.complaints_on_pending') }}</h5>
                        </div>
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Complaints" aria-controls="DataTables_Table_0"></label></div>
                    </div>
                    <table class="table datatables-academy-course dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1676px;">
                        <thead class="border-top">
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label="">
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 570px;" aria-label="Course Name: activate to sort column ascending" aria-sort="descending">{{ __('admin-main.dashboard.complaints.title') }}</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 118px;" aria-label="Time: activate to sort column ascending">{{ __('admin-main.dashboard.complaints.created_at') }}</th>
                                <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 373px;" aria-label="Progress: activate to sort column ascending">{{ __('admin-main.dashboard.complaints.statistics') }}</th>
                                <th class="w-25 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 373px;" aria-label="Status: activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($complaints as $complaint)
                                @php
                                    $complaintStats = \App\Helpers\ComplaintHelper::getReviewStats($complaint);
                                @endphp
                                <tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td>
                                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                    <td class="sorting_1">
                                        <a href="{{ $complaint->getUrl() }}" target="_blank">
                                            {{ $complaint->getTitle() }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $complaint->getCreatedAt() }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bx-user bx-xs me-2 text-primary"></i>{{ $complaintStats['review_count'] }}
                                            </div>
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bxs-book-open bx-xs me-2 text-info"></i>48
                                            </div>
                                            <div class="w-px-50 d-flex align-items-center">
                                                <i class="bx bx-comment bx-xs me-2 text-danger"></i>43
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ $complaint->getUrl() }}" class="btn btn-primary btn-sm" target="_blank">{{ __('admin-main.dashboard.complaints.show') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->

@endsection
