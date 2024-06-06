<div class="mainholder" style="width: 100%">

    <div id="content">
        <br>
        <div class="wrapper">
            <div class="postbody">
                <div class="bixbox seriesearch">
                    <div class="releases">
                        <h1>Manga Lists</h1>
                    </div>
                    <div class="mrgn">
                        {{-- <div class="advancedsearch">
                            <div class="quickfilter">
                                <form action="https://kiryuu.id/manga" class="filters" method="GET">
                                    <div class="filter dropdown">
                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">Genre <span id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu c4 genrez">
                                            <!-- List of genres -->
                                        </ul>
                                    </div>
                                    <div class="filter dropdown">
                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">Status <span id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu c1">
                                            <!-- List of status options -->
                                        </ul>
                                    </div>
                                    <div class="filter dropdown">
                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">Type <span id="filtercount">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu c1">
                                            <!-- List of type options -->
                                        </ul>
                                    </div>
                                    <div class="filter submit">
                                        <button type="submit" class="btn btn-custom-search"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                                    </div>
                                </form>
                            </div>
                            <div class="clear"></div>
                            <script>var ts_sf_exclusion = 0;</script>
                        </div> --}}
                        <div class="other-opts">
                            <div class="modex"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="listupd">
                            <!-- List of manga items -->
                            @php
$latestChapter = null;
@endphp
@foreach($komiks as $komik)
@php
    $chapter = $komik->chapters->sortByDesc('tanggal_rilis')->first();
    if (!$latestChapter) {
        $latestChapter = $chapter;
    }
@endphp
                            <div class="bs">
                                <div class="bsx">
                                    <a href="https://kiryuu.id/manga/honyaku-no-sainou-de-ore-dake-ga-sekai-wo-kaihen-dekiru-ken/" title="“Honyaku” no Sainou de Ore Dake ga Sekai wo Kaihen Dekiru Ken">
                                        <div class="limit">
                                            <div class="ply"></div>
                                            <span class="type Manga"></span>
                                            <img src="{{ $komik->gambar }}" class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" title="“Honyaku” no Sainou de Ore Dake ga Sekai wo Kaihen Dekiru Ken" alt="“Honyaku” no Sainou de Ore Dake ga Sekai wo Kaihen Dekiru Ken" width="212" height="300">
                                        </div>
                                        <div class="bigor">
                                            <div class="tt">
                                                {{ $komik->judul }}
                                            </div>
                                            <div class="adds">
                                                <div>Chapter. {{ $latestChapter->nomor_chapter }}</div>
                                                {{-- <div class="epxs">Chapter 20.2</div> --}}
                                                <div>Relased {{ $chapter->time_ago }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $komiks->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <script>$(".section .quickfilter").parent().remove()</script>
</div>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i&display=swap');


:focus {
    outline: none
}

*,::before,::after {
    box-sizing: border-box
}

blockquote,q {
    margin: 5px 0;
    quotes: none;
    background: #2f2f2f;
    border-left: 3px solid #353535;
    padding: 5px 10px;
}

blockquote:before,blockquote:after,q:before,q:after {
    content: '';
    content: none
}

.lightmode blockquote,.lightmode q {
    background: #FAFAFA;
    border-color: #DDD
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

hr {
    border-color: #555
}

a {
    color: #ddd;
    text-decoration: none;
    transition: color .1s linear;
    -moz-transition: color .1s linear;
    -webkit-transition: color .1s linear
}

:focus {
    outline: none
}

a:hover {
    color: #366ad3;
    text-decoration: none
}

.bxcl ul li .lchx a:visited,.listupd .utao .uta .luf ul li a:visited,.bs.stylefor .bsx a:visited .bigor .adds .epxs {
    color: #366ad3!important
}

.bs.stylefiv .bsx .chfiv li a:visited .fivchap,.stylesven .sveninner .svenbottom .svenmetabot .svenchapters li a:visited,.listupd .utao.stylegg .uta .luf ul li a:visited .eggchap {
    color: #366ad3
}

img {
    max-width: 100%;
    height: auto
}

.mainholder {
    position: relative;
}

.postbody p {
    margin: 10px 0
}

.clear {
    clear: both
}

body {
    background: #16151d;
    font-size: 14px;
    line-height: 1.5;
    color: #b8b8b8;
    margin: 0 auto;
    font-family: 'Poppins',sans-serif;
    -webkit-font-smoothing: antialiased!important;
    -moz-osx-font-smoothing: grayscale!important;
    position: relative;
    min-height: 100%;
}

.strip {
    margin-top: 5px;
    margin-bottom: 5px;
    border-bottom: 1px dashed #D0CDCD;
    box-shadow: 0 0 4px #FFF
}

.kln {
    overflow: hidden;
    position: relative;
    text-align: center
}

.blox.kln {
    margin: 0 auto;
    max-width: 1150px
}

.kln a.col {
    width: 50%;
    display: block;
    padding: 2px 4px;
    float: left
}

.klnrec {
    overflow: hidden;
    margin-bottom: 15px
}

.klnrec .kln {
    float: left;
    width: 70%;
    padding: 5px;
    margin-right: 5px;
    border: 1px solid #DDD
}

.klnrec .kln img,.klnrec .mini img {
    width: 100%;
    max-height: 90px
}

.klnrec .mini {
    overflow: hidden;
    margin-left: 10px;
    border: 1px solid #DDD;
    padding: 5px
}

.bixbox .kln,.singlex {
    float: left;
    margin-right: 15px
}

#floatcenter {
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 9999
}

#floatcenter .ctrx {
    width: 100%;
    max-width: 500px;
    margin: auto;
    padding-top: 20vh
}

#teaser1,#teaser2 {
    z-index: 2
}

.playerx {
    position: relative
}

#overplay {
    position: absolute;
    z-index: 200;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7)
}

#overplay .chain {
    width: 100%;
    max-width: 300px;
    margin: auto;
    padding-top: 50px
}

#content {
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
    margin-top: 35px;
    position: relative;
}

.wrapper {
    margin: 0 20px;
    position: relative
}

header {
    float: left;
    margin: 5px 20px 5px 0;
}

.logos img {
    max-height: 50px
}

.logos {
    margin: 0;
    min-height: 1px;
    max-width: 195px;
    display: block
}

.logos span.hdl {
    display: none;
    width: 1px;
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute
}

.th {
    background: #366ad3;
}

.th .centernav {
    margin: 0 auto;
    max-width: 1220px;
    padding: 0 20px
}

.shme {
    display: none
}

#main-menu {
    float: left;
}

#main-menu .centernav .logo img {
    width: 100%;
    height: auto
}

#main-menu .centernav {
    margin: 0 auto;
    max-width: 1220px;
    padding: 0 20px
}

#main-menu .centernav .logo {
    display: none;
    float: left;
    margin-top: 23px;
    margin-right: 30px;
    max-width: 190px
}

#main-menu .dashicons,#main-menu ._mi {
    line-height: inherit;
    width: auto;
    height: auto;
    font-size: 14px;
    padding-right: 2px
}

#main-menu ul {
    position: relative;
    float: left;
    list-style: none;
    padding: 0;
    margin: 0
}

#main-menu ul li {
    float: left;
    position: relative;
    margin: 0 5px;
}

#main-menu ul li a {
    display: block;
    text-align: center;
    line-height: 66px;
    height: 66px;
    padding: 0 10px;
    color: rgba(255,255,255,.5);
    border-left: 0;
    transition: color .5s;
    position: relative;
    font-weight: 500;
    font-size: 1rem;
}

#main-menu ul .menu-item-has-children>a:after {
    content: "\f140";
    padding: 0;
    display: none;
    width: auto;
    height: auto;
    padding-left: 5px;
    font-size: 19px;
    float: right;
    line-height: 35px;
    font-family: dashicons
}

#main-menu ul li a:hover {
    text-decoration: none;
    color: #FFF;
}

#main-menu ul li ul {
    position: absolute;
    top: 55px;
    min-width: 240px;
    padding: 10px;
    display: none;
    z-index: 9999;
    background: #333;
    border-radius: 5px;
    box-shadow: 0 4px 4px rgba(0,0,0,0.38);
    overflow: hidden;
}

#main-menu ul li:hover ul {
    display: block
}

#main-menu ul li ul li {
    float: none;
    margin: 0
}

#main-menu ul li:hover ul li ul {
    display: none
}

#main-menu ul li ul li a {
    margin: 0;
    height: auto;
    display: block;
    background: 0 0;
    line-height: normal;
    font-size: 14px;
    padding: 7px 15px;
    text-align: left;
    color: #999;
}

#main-menu ul li ul li a:hover {
    background: rgba(0,0,0,.32);
    border-radius: 5px;
}

#main-menu .random {
    float: right;
    color: #fff;
    cursor: pointer;
    text-transform: none;
    font-weight: 400;
    font-size: 14px;
    margin: 0;
    border-radius: 0;
    border: 0;
    line-height: 33px;
    background: #2866a7;
    padding: 0 10px
}

#main-menu .random:hover {
    background: #ececec;
    color: #333;
    text-decoration: none
}

.show-menu {
    display: none;
    color: #fff;
    line-height: 37px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    cursor: pointer
}

#main-menu input[type=checkbox] {
    display: none;
    -webkit-appearance: none
}

#main-menu input[type=checkbox]:checked~#menu-menu {
    display: block;
    z-index: 9999;
    float: none;
    background: #222;
    position: relative
}

.ms {
    border-radius: 3px;
    cursor: pointer;
    display: none;
    height: 34px;
    left: auto;
    position: absolute;
    text-align: center;
    top: 17px;
    width: 34px;
    color: #fff;
    right: 15px
}

#main-menu .ms .dashicons {
    display: block!important;
    font-size: 26px
}

.srcmob {
    display: none
}

.searchx {
    float: right;
    width: 270px;
    margin: 16px 0 16px 0;
    position: relative;
}

.searchx #form {
    padding: 0;
    position: relative
}

.searchx #form #s {
    font-weight: 300;
    background: #17151b;
    box-shadow: none!important;
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    padding-right: 30px;
    font-family: inherit;
    font-size: 14px;
    line-height: 1.42857143;
    color: #FFF;
    background-image: none;
    border: 0;
    border-radius: 50px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.searchx #form #sel {
    margin: 0;
    color: #888;
    border: 0;
    outline: 0;
    display: inline-block;
    font-family: open sans,sans-serif;
    background-color: #fff;
    border: 1px solid #e5e2e2;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border linear .2s,box-shadow linear .2s;
    -moz-transition: border linear .2s,box-shadow linear .2s;
    -o-transition: border linear .2s,box-shadow linear .2s;
    transition: border linear .2s,box-shadow linear .2s;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    padding: 4px 5px
}

.searchx #form #submit {
    position: absolute;
    background: none;
    color: #555;
    cursor: pointer;
    font-family: inherit;
    border: 0;
    padding: 0 7px;
    top: 0;
    font-size: medium;
    right: 2px;
    line-height: 36px
}

.searchx #form #submit .dashicons {
    display: block;
    font-size: 22px
}

.searchx #form #s:focus {
    outline: 0
}

.owl-dot.active span,.owl-dot.active:hover span {
    background: #FFD400!important
}

.owl-dot {
    background: none!important;
    border: 0!important;
    padding: 0!important
}

.hotslid .trending {
    overflow: hidden
}

.hotslid .trending .tdb {
    cursor: pointer;
    height: 280px;
    margin-left: 10px;
    position: relative
}

.hotslid .trending .tdb .crown {
    background-image: url(assets/images/crown.png);
    background-size: 100%;
    position: absolute;
    right: 5px;
    top: 10px;
    height: 40px;
    width: 40px;
    z-index: 3
}

.hotslid .trending .tdb .imgxa {
    height: 100%;
    width: 100%;
    overflow: hidden;
    background-size: auto 100%;
    background-position: top center
}

.hotslid .trending .tdb .imgxa .imgxb {
    height: 100%;
    width: 100%;
    background-position: center;
    background-size: cover
}

.hotslid .trending .tdb .textbg {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    transition: opacity .2s;
    z-index: 1;
    box-shadow: inset 0 0 40px #000
}

.hotslid .trending .tdb .textbg.blxc {
    color: #eee;
    background: url(assets/images/black.png)
}

.hotslid .trending .tdb .textbg .bghover {
    margin-top: 40%;
    padding: 0 5%;
    line-height: 19px;
    text-align: left;
    text-transform: uppercase
}

.hotslid .trending .tdb .textbg .bghover .numa {
    display: block;
    font-size: 16px
}

.hotslid .trending .tdb .textbg .bghover .numb {
    display: block;
    font-size: 17px;
    margin-top: 5px;
    height: 55px;
    overflow: hidden
}

.owl-nav {
    display: none
}

#header {
    overflow: hidden;
    margin-bottom: 20px
}

#header .logo {
    float: left
}

#header .logo img {
    max-width: 252px;
    height: auto
}

#header .headads {
    float: right;
    max-width: 728px;
    max-height: 90px
}

.th.headerni header {
    margin: 0;
    margin-right: 15px;
    margin-top: 5px
}

.th.headerni header .logos img {
    max-height: 30px
}

.th.headerni #main-menu ul li a {
    line-height: 42px;
    height: 42px;
    font-weight: 400;
    font-size: 14px;
    padding: 0 5px
}

.th.headerni header .logos {
    width: auto
}

.th.headerni .searchx {
    margin: 0;
    width: 200px;
    margin-top: 9px
}

.th.headerni .searchx #form #s {
    background: rgba(0,0,0,0.2);
    border-radius: 5px;
    height: 25px;
    font-size: 13px;
    color: #EDF0F1;
}

.th.headerni .searchx #form #submit {
    color: rgba(255,255,255,0.4);
    font-size: 12px;
    top: 0;
    line-height: 28px
}

.th.headerni #thememode {
    margin-top: 14px;
}

.th.headerni #thememode .xt {
    display: none
}

.th.headerni #main-menu ul li ul {
    top: 37px
}

.th.headerni #main-menu ul li ul li a {
    height: auto;
    line-height: normal;
    font-size: 14px;
    padding: 7px 15px
}

.th.headtree .centernav {
    max-width: unset;
}

.recommended {
    margin: 0 auto;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    background: #f3f3f3;
    margin-bottom: 20px;
    line-height: 28px;
    font-size: 13px;
    padding-right: 10px
}

.recommended h2 {
    background: #4d4d4d;
    color: #FFF;
    font-weight: 700;
    line-height: 28px;
    padding: 0 5px;
    margin: 0;
    font-size: 13px;
    display: inline-block
}

.recommended a {
    padding: 5px;
    color: #333
}

.postbody p.index {
    padding: 15px;
    margin: 0;
    margin-bottom: 18px;
    border-radius: 3px;
    line-height: 19px;
    background: #1d1b26;
    color: #DDD;
    text-align: center;
    font-size: 13px
}

.postbody p.index b {
    color: #FFF;
    font-weight: 500
}

.postbody p.ctn {
    margin: 0 5px;
    margin-bottom: 10px;
    font-size: 13px;
    padding: 10px;
    border-radius: 5px;
    background: #27222e
}

.postbody .ntf {
    margin: 10px;
    padding: 8px;
    background: #333;
    color: #CCC;
    font-size: 13px;
    border-radius: 5px
}

.postbody {
    margin: auto;
  width: 70%;
}

.postbody .ldr {
    margin: 0 -5px
}

.bixbox {
    background: #222;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    margin-bottom: 18px;
    overflow: hidden;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -khtml-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -ms-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -o-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    box-shadow: 0 2px 3px rgba(0,0,0,.1)
}

.postbody .box {
    overflow: hidden;
    margin-bottom: 20px
}

.releases {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    border-bottom: 1px solid #312f40;
    padding: 8px 15px
}

.releases:after {
    position: absolute;
    left: 0;
    bottom: 0;
    right: auto;
    top: auto;
    height: 1px;
    width: 100%;
    background-color: transparent;
    display: block;
    z-index: 1;
    transform: scaleY(0.5);
    opacity: .8;
    background-image: linear-gradient(90deg,rgba(0,0,0,0.01) 0,rgba(0,0,0,0.1) 10%,rgba(0,0,0,0.2) 20%,rgba(0,0,0,0.3) 30%,rgba(0,0,0,0.3) 70%,rgba(0,0,0,0.2) 80%,rgba(0,0,0,0.1) 90%,rgba(0,0,0,0.01) 100%)
}

.releases h1,.releases h2,.releases h3,#sidebar .section h4 {
    font-size: 15px;
    color: #FFF;
    line-height: 20px;
    font-weight: 600;
    margin: 0;
    position: relative
}

.releases .vl {
    font-size: .6em;
    text-transform: uppercase;
    color: #FFF;
    height: 18px;
    line-height: 18px;
    padding: 0 6px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    background: #366ad3;
    display: inline-block;
    float: right;
    margin-top: 1px;
    margin-right: -3px
}

.bixbox .bvlcen {
    text-align: center;
    overflow: hidden;
    border-top: 1px solid #353535;
}

.bixbox .bvlcen .bvl {
    display: block;
    padding: 10px;
    color: #aaa;
    font-weight: 500;
    background: #262626;
    line-height: 160%;
}

.bixbox .bvlcen .bvl:hover {
    background: #333;
}

.hothome .releases {
    background: #366ad3;
    padding: 0 15px;
    border: 0
}

.hothome .releases h2 {
    margin-top: 15px;
    padding: 5px 20px;
    background: #222;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    font-size: 15px
}

.postbody .box .rld {
    padding: 5px;
    position: relative;
    overflow: hidden
}

.postbody .ldr .outbx {
    float: left;
    width: 20%
}

.postbody .ldr .outbx .limit {
    overflow: hidden;
    position: relative;
    padding: 0 0 135%;
    background: #333
}

.postbody .box .rld img {
    width: 100%;
    height: auto;
    position: absolute
}

.postbody .box .rld h2 {
    background: linear-gradient(to bottom,rgba(0,0,0,0.05) 6%,rgba(0,0,0,0.85) 70%);
    text-shadow: rgba(0,0,0,0.8) 1px 1px 0;
    position: absolute;
    padding: 10px;
    width: 100%;
    color: #FFF;
    left: 0;
    bottom: 0;
    margin: 0;
    font-weight: 500;
    overflow: hidden;
    text-align: center;
    font-size: 13px;
    box-sizing: border-box
}

.postbody .boxed {
    overflow: hidden;
    margin-bottom: 15px
}

.postbody .boxed .left {
    float: left;
    margin-right: 10px
}

.postbody .boxed .right .lts {
    float: right;
    width: 470px
}

.postbody .boxed .right .lts h3 {
    text-transform: uppercase;
    padding: 5px 10px;
    font-size: 11px;
    border: 5px solid #EFF1F1
}

.postbody .boxed .right .lts ul {
    overflow: hidden
}

.postbody .boxed .right .lts ul li {
    overflow: hidden;
    margin: 5px 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #E2E5E5
}

.postbody .boxed .right .lts ul li .thumb {
    float: left;
    border: 1px solid #E2E5E5;
    overflow: hidden;
    height: 55px
}

.postbody .boxed .right .lts ul li .thumb img {
    width: 100px;
    height: auto
}

.postbody .boxed .right .lts ul li .dtl {
    width: 350px;
    padding: 5px;
    background: #F5F4F4;
    height: 47px;
    float: right
}

.postbody .boxed .right .lts ul li .dtl h2 {
    color: #333;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.postbody .boxed .right .lts ul li .dtl h2 a {
    color: #333
}

.postbody .boxed .right .lts ul li .dtl h2 a:hover {
    text-decoration: none;
    color: #F13E3E
}

.postbody .boxed .right .lts ul li .dtl span {
    font-family: tahoma;
    color: #555;
    display: block;
    font-size: 11px
}

.postbody .boxed .right .lts ul li .dtl span a {
    color: #F13E3E
}

.postbody .epsc .boxed .right .lts {
    float: none;
    width: 100%
}

.postbody .epsc .boxed .right .lts ul li .dtl {
    width: 520px
}

.postbody .epsc .boxed {
    overflow: hidden;
    margin-bottom: 0
}

.postbody .boxed .right .lts ul li .dtl h1 {
    color: #333;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.listupd {
    padding: 10px;
    overflow: hidden
}

.listupd.cp {
    margin: -15px
}

.listupd .lexa {
    overflow: hidden;
    margin-bottom: 10px;
    border-bottom: 1px solid #DDD;
    padding-bottom: 10px
}

.listupd .lexa .thumb {
    float: left;
    overflow: hidden;
    max-height: 100px;
    margin-right: 15px
}

.listupd .lexa .dtl {
    overflow: hidden;
    padding: 10px;
    margin: 0;
    border-bottom: 0;
    background: #f7f7f7
}

.listupd .lexa .dtl h2 {
    font-size: 16px;
    margin: 0;
    margin-bottom: 5px
}

.listupd .lexa .dtl span {
    display: block;
    margin-bottom: 3px
}

.listupd .lexa .dtl h2 a {
    color: #000
}

.listupd .lexa .dtl h2 a:hover {
    text-decoration: none;
    color: #366ad3
}

.listupd .lexa .thumb img {
    max-width: 175px
}

.listupd .utao {
    float: left;
    width: 33.33333%;
    position: relative
}

.listupd .utao .uta {
    padding: 15px 10px;
    overflow: hidden;
    position: relative;
    border-bottom: 1px solid #312f40
}

.listupd .utao .uta .imgu {
    position: relative;
    float: left;
    overflow: hidden;
    height: 105px;
    margin-right: 10px;
    border-radius: 3px
}

.listupd .utao .uta .imgu img {
    width: 75px;
    height: auto
}

.listupd .utao .uta .imgu .hot {
    position: absolute;
    top: 3px;
    left: 3px;
    background: #ba291f;
    font-size: 11px;
    font-weight: 700;
    padding: 0 4px;
    padding-top: 2px;
    border-radius: 3px;
    line-height: 15px;
    color: #FFF
}

.listupd .utao .uta .imgu .new {
    position: absolute;
    top: 3px;
    right: 3px;
    background: #ff5e00;
    font-size: 11px;
    font-weight: 700;
    padding: 0 4px;
    padding-top: 2px;
    border-radius: 3px;
    line-height: 15px;
    color: #FFF
}

.listupd .utao.styletwo .uta .imgu .new {
    left: 3px;
    right: auto
}

.listupd .utao .uta .luf {
    overflow: hidden
}

.listupd .utao .uta .luf h4 {
    margin: 0;
    font-size: .98em;
    font-weight: 600;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}

.listupd .utao .uta .luf ul {
    margin: 0;
    margin-top: 8px;
    padding-left: 18px;
    font-family: 'Fira Sans',sans-serif;
}

.listupd .utao .uta .luf ul li {
    margin-bottom: 5px;
    font-size: 13px;
    color: #366ad3
}

.listupd .utao .uta .luf ul li a {
    display: block;
    float: left;
    max-width: 80px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.listupd .utao .uta .luf ul li span {
    float: right;
    color: #7e7e7e;
    font-size: 12px;
    margin-top: 1px;
}

.listupd .utao .uta .luf ul.Manhua li {
    color: #009688
}

.listupd .utao .uta .luf ul.Manhwa li {
    color: #9d4942
}

.listupd .utao.styletwo {
    width: 50%
}

.listupd .utao.styletwo .uta .imgu {
    height: 150px;
    border-radius: 0
}

.listupd .utao.styletwo .uta .imgu img {
    width: 110px;
}

.listupd .utao.styletwo .uta .luf h4 {
    font-size: 15px;
    font-weight: 600;
}

.listupd .utao.styletwo .uta .luf ul li {
    margin-bottom: 8px;
    font-size: 14px
}

.listupd .utao.styletwo .uta .luf ul li span {
    margin-top: 2px;
}

.listupd .utao.styletwo .uta .luf ul li a {
    color: #999;
    max-width: 110px;
}

.listupd .utao.styletwo .uta .luf ul li a:hover {
    color: #FFF
}

.bs, .full.seriestu .bs {
    float: left;
    width: 20%
}

.postbody.full {
    float: none;
    width: auto
}

.full .bs {
    width: 14.25%
}

.bs .bsx {
    position: relative;
    overflow: hidden;
    margin: 10px 10px;
    transition: all .2s;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
}

.bs .bsx .limit {
    padding: 137% 0 0;
    position: relative;
    overflow: hidden;
    background: #111;
}

.bs .bsx .limit .t {
    position: absolute;
    top: 0;
    z-index: 1;
    width: 100%;
    text-align: center;
    overflow: hidden
}

.bs .bsx .limit .b {
    position: absolute;
    bottom: -30px;
    color: #FFF;
    z-index: 1;
    padding: 8px 0;
    width: 100%;
    text-align: center;
    background: rgba(34,58,101,0.9);
    transition: all .2s;
    -webkit-transition: all .2s;
    -moz-transition: all .2s
}

.bs .bsx .limit img {
    width: 100%;
    height: auto;
    top: 0;
    position: absolute;
    transition: transform .2s;
}

.bs .bsx .limit .t .type {
    margin-top: 5px;
    margin-left: 5px;
    font-size: 11px;
    padding: 1px 5px;
    border-radius: 1px;
    float: left;
    color: #eee;
    background: #673ab7
}

.bs .bsx .limit .t .ept {
    margin-top: 5px;
    margin-right: 5px;
    font-size: 11px;
    padding: 1px 5px;
    border-radius: 1px;
    float: right;
    color: #222;
    background: rgba(255,255,255,0.9)
}

.bs .bsx .limit .t .type.TV {
    background: rgba(14,175,193,0.8);
    color: #FFF
}

.bs .bsx .limit .t .type.Movie {
    background: #218c4c
}

.bs .bsx .limit .t .type.OVA {
    background: #fb3a00
}

.bs .bsx .limit .b .bt {
    margin: 0 5px;
    font-family: Open Sans,sans-serif;
    font-size: 13px
}

.bs .bsx .limit .b .bt .tx {
    overflow: hidden;
    height: 36px;
    font-size: 12px
}

.bs .bsx .limit .b .bt .status {
    margin-top: 5px;
    overflow: hidden
}

.bs .bsx .limit .b .bt .status span {
    display: inline-block;
    color: #FFF;
    background: #0eafc1;
    padding: 2px 6px 2px 8px;
    border-radius: 2px;
    font-size: 12px
}

.bs .bsx:hover .limit .b {
    bottom: 0
}

.bs .bsx .limit .b .bt .tx b {
    font-weight: 400
}

.bs .bsx .limit .bt {
    position: absolute;
    bottom: 0;
    z-index: 2;
    width: 100%;
    background: rgba(34,58,101,0.9);
    color: #FFF;
    font-size: 11px;
    line-height: 20px;
    overflow: hidden
}

.bs .bsx .limit .bt span.epx {
    display: block;
    float: left;
    margin-left: 10px
}

.bs .bsx .limit .bt span.sb {
    display: block;
    float: right;
    padding: 0 5px;
    font-size: 11px;
    color: #111;
    text-transform: uppercase;
    background: #d9da17
}

.bs .bsx .limit .bt span.sb.RAW {
    background: rgba(14,175,193,0.8);
    color: #fff
}

.bs .bsx .tt {
    font-size: .95em;
    margin: 8px 0;
    margin-bottom: 3px;
    font-weight: 600;
    line-height: 20px;
    text-align: left;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2
}

.bs .bsx .limit .ply {
    display: none;
    position: absolute;
    width: 100%;
    z-index: 1;
    height: 100%;
    top: 0;
}

.bs .bsx .limit .ply .dashicons {
    background: rgba(14,175,193,0.8);
    border-radius: 20%;
    -webkit-border-radius: 20%;
    -moz-border-radius: 20%;
    width: 40px;
    height: 40px;
    font-size: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    display: inline-block;
    text-align: center;
    line-height: 38px;
    margin-top: -20px;
    margin-left: -20px;
    border: 2px solid #2fc5d9;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #fff;
    line-height: 38px;
    transition: all .3s ease 0;
    -webkit-transition: all .3s ease 0;
    -moz-transition: all .3s ease 0
}

.bs .bsx .limit .status {
    position: absolute;
    top: 13px;
    left: -22px;
    line-height: normal;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    z-index: 1;
    padding: 2px 18px;
    font-size: 9px;
    background: #de3b3b;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.bigor {
    height: 95px;
}

.bs .bsx .limit .hot {
    position: absolute;
    top: 3px;
    right: 3px;
    background: #F44336;
    font-size: 13px;
    font-weight: 700;
    padding: 0 5px;
    padding-top: 3px;
    border-radius: 3px;
    line-height: 17px;
    color: #FFF;
    z-index: 1
}

.bs .bsx:hover .limit .ply {
    display: block
}

.bs .bsx .adds {
    font-size: 13px;
    color: #999;
    font-family: 'Fira Sans',sans-serif;
}

.bs .bsx .adds .rating {
    overflow: hidden;
    font-size: 12px;
    margin-top: 5px
}

.bs .bsx .adds .rating .rtg {
    float: left
}

.bs .bsx .adds .rating .rtg a {
    font-size: 14px!important
}

.bs .bsx .adds .rating i {
    float: right;
    color: #555;
    font-size: 11px;
    margin-right: 2px
}

.bs .bsx .adds .rating .rtg a:after {
    color: #333
}

.bs .bsx .adds .rating .rtg a.br-selected:after {
    color: #EDB867
}

#main-menu ul li a:hover:before {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    display: block;
    width: 100%;
    height: 2px;
    background: #366ad3
}

.surprise {
    background: rgba(0,0,0,0.32);
    margin-top: 7px;
    color: #FFF
}

.surprise:hover {
    background: #FFF;
    color: #222!important
}

#main-menu .surprise .dashicons {
    display: block;
    float: left;
    line-height: 16px;
    font-size: 13px
}

.bs .bsx .limit .type,.listupd .utao.styletwo .uta .imgu .type {
    background-repeat: no-repeat;
    background-size: contain;
    position: absolute;
    top: 5px;
    right: 5px;
    z-index: 1;
    width: 25px;
    height: 17px;
    overflow: hidden;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

.bs .bsx .limit .type.Manga,.listupd .utao.styletwo .uta .imgu .type.Manga,.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta .type.Manga {
    background-image: url(assets/images/manga.png)
}

.bs .bsx .limit .type.Manhua,.listupd .utao.styletwo .uta .imgu .type.Manhua,.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta .type.Manhua {
    background-image: url(assets/images/manhua.png)
}

.bs .bsx .limit .type.Manhwa,.listupd .utao.styletwo .uta .imgu .type.Manhwa,.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta .type.Manhwa {
    background-image: url(assets/images/manhwa.png)
}

.typename {
    position: absolute;
    top: 5px;
    right: 5px;
    z-index: 1;
    padding: 2px 7px;
    font-size: 10px;
    text-transform: uppercase;
    border-radius: 3px;
    color: #efefef;
    background: #366ad3
}

.typename.Manhwa {
    background: #a12e24
}

.typename.Manhua {
    background: #009688
}

.typename.Comic {
    background: #7c3db5
}

.bs .bsx .limit .colored,.listupd .utao.styletwo .uta .imgu .colored,.main-info .info-left .thumb .colored,.seriestucon .seriestucont .seriestucontl .thumb .colored,#content .seriestere .seriestucontent .seriestucontl .thumb .colored {
    position: absolute;
    z-index: 1;
    bottom: 5px;
    left: 5px;
    background: #ebcf04;
    color: rgba(0,0,0,0.7);
    font-weight: 700;
    font-size: 10px;
    padding: 2px 5px;
    border-radius: 3px;
    text-transform: uppercase
}

.bs .bsx .limit .colored .fas, .bs .bsx .limit .novelabel .fas {
    font-size: 10px
}

.bs .bsx .limit .novelabel,.listupd .utao.styletwo .uta .imgu .novelabel {
    position: absolute;
    z-index: 1;
    bottom: 5px;
    left: 5px;
    background: #eb6404;
    color: rgba(255,255,255,0.8);
    font-weight: 700;
    font-size: 10px;
    padding: 2px 5px;
    border-radius: 3px;
    text-transform: uppercase
}

.bs .bsx .limit .hotx, .listupd .utao.styletwo .uta .imgu .hotx {
    position: absolute;
    bottom: 5px;
    right: 5px;
    z-index: 1;
    width: 25px;
    text-align: center;
    background: #F44336;
    border-radius: 50%
}

.bs .bsx .limit .hotx .fab, .listupd .utao.styletwo .uta .imgu .hotx .fab {
    line-height: 25px;
    color: #FFF
}

.bs .bsx .rating-prc .rtp .rtb {
    font-size: 13px;
    width: 73px;
    margin-right: 5px;
    height: 13px
}

.bs .bsx .numscore {
    line-height: normal
}

.bs.styletere .adds {
    color: #666
}

.bs.styletere .epxdate {
    font-size: 11px;
    margin-top: 3px
}

.bs.styletere .epxs {
    color: #6091f3;
}

.bs.styletere .bsx .tt {
    font-size: 13px
}

.bs.stylefor {
    width: 25%
}

.bs.stylefor .bsx {
    border: 1px solid #383838;
    border-radius: 5px
}

.bs.stylefor .bsx .limit {
    padding: 65% 0 0
}

.bs.stylefor .bsx .bigor {
    padding: 10px;
    height: auto
}

.bs.stylefor .bsx .bigor .tt {
    margin: 0;
    white-space: nowrap;
    font-size: 14px;
}

.bs.stylefor .bsx .bigor .epxdate {
    color: #999
}

.bs.stylefor .bsx .bigor .adds {
    margin-top: 8px
}

.bs.stylefor .bsx .bigor .adds .epxs {
    background: #333;
    text-align: center;
    border-radius: 5px;
    padding: 5px;
    color: #CCC
}

.bs.stylefiv {
    width: 25%;
}

.bs.stylefiv .bsx .limit {
    border-radius: 5px
}

.bs.stylefiv .bsx .tt {
    -webkit-line-clamp: 2;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    height: 42px;
}

.bs.stylefiv .bsx .chfiv {
    padding: 0;
    margin: 0;
    list-style: none
}

.bs.stylefiv .bsx .chfiv li {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-bottom: 5px;
    background: #333;
    border-radius: 5px;
}

.bs.stylefiv .bsx .chfiv li a {
    color: #ddd;
    font-size: 12px;
    font-weight: 500;
    position: relative;
    overflow: hidden;
    display: block;
    padding: 6px 10px;
}

.bs.stylefiv .bsx .chfiv li a:hover {
    background: #366ad3;
    color: #FFF
}

.bs.stylefiv .bsx .chfiv li .fivchap {
    float: left;
}

.bs.stylefiv .bsx .chfiv li a:hover .fivchap {
	color: #FFF;
}

.bs.stylefiv .bsx .chfiv li .fivtime {
    color: #ddd;
    float: right;
    font-size: 11px;
    font-weight: normal;
}

.bs.stylefiv .bsx .bigor {
    height: 125px;
}

.bs.stylefiv .bsx .limit:hover img {
    transform: scale(1.1);
}

.bs.stylefiv.stylesix {
    width: 20%;
}

.bs.stylesix .bsx .tt {
    -webkit-line-clamp: 1;
    height: unset;
    font-weight: 600;
    font-size: 13px;
    text-align: left;
    margin-bottom: 5px;
}

.bs.stylesix .bsx .bigor {
    height: 72px;
}

.bs.stylesix .bsx .chfiv li {
    background: none;
    font-family: 'Fira Sans',sans-serif;
    border-radius: none;
}

.bs.stylesix .bsx .chfiv li a {
    display: inline-block;
    padding: 0 7px;
    background: #283c5a;
    color: #799adc;
    border-radius: 10px;
    overflow: unset;
    margin-right: 5px;
}

.bs.stylesix .bsx .chfiv li .fivtime {
    font-size: 11px;
    font-weight: 500;
    color: #999;
    float: none;
}

.statusind {
    position: relative;
    display: inline-block;
    background: #333;
    padding: 3px 10px;
    border-radius: 5px;
    font-size: 11px;
    font-family: 'Fira Sans',sans-serif;
}

.statusind i {
    margin-right: 5px;
    font-size: 9px;
}

.statusind.Ongoing i {
    color: #e38801;
}

.statusind.Completed i {
    color: #d6291c;
}

.stylesven {
    width: 50%;
    float: left;
    overflow: hidden;
}

.stylesven .sveninner {
    margin: 10px;
    position: relative;
    background: #282828;
    padding: 15px;
}

.stylesven .sveninner .sventop {
    overflow: hidden;
    margin-bottom: 20px;
}

.stylesven .sveninner .sventop .sventhumb {
    float: left;
    width: 60px;
    height: 60px;
    overflow: hidden;
    margin-right: 15px;
    border-radius: 10px;
    background: #333;
}

.stylesven .sveninner .sventop .sveninfo {
    overflow: hidden;
}

.stylesven .sveninner .sventop .sveninfo .sventitle {
    margin-bottom: 5px;
}

.stylesven .sveninner .sventop .sveninfo .sventitle h4 {
    margin: 0;
    font-weight: 600;
    font-size: 13px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.stylesven .sveninner .sventop .sveninfo .svendetop {
    font-size: 12px;
    color: #888;
    overflow: hidden;
}

.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta {
    float: left;
    margin-right: 20px;
}

.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta i {
    font-size: 11px;
    margin-right: 3px;
}

.stylesven .sveninner .svenbottom {
    overflow: hidden;
}

.stylesven .sveninner .svenbottom .svenmetabot {
    position: relative;
}

.stylesven .sveninner .svenbottom .svenmetabot .statusind {
    float: left;
}

.stylesven .sveninner .svenbottom .svenmetabot .svenchapters {
    float: right;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 12px;
    font-weight: 500;
}

.stylesven .sveninner .svenbottom .svenmetabot .svenchapters li {
    float: right;
    margin-left: 15px;
}

.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta .type {
    width: 15px;
    height: 10px;
    background-repeat: no-repeat;
    background-size: contain;
    display: block;
    float: left;
    margin-top: 4px;
    margin-right: 7px;
}

.stylesven .sveninner .svenbottom .svenmetabot .svenchapters li span {
    display: none;
}

.listupd .utao.stylegg .uta {
    border: 0;
    margin: 10px;
    position: relative;
    background: #282828;
    padding: 15px;
    height: 155px;
}

.listupd .utao.stylegg .uta .imgu {
    width: 90px;
    height: 125px;
    background: #333;
}

.listupd .utao.stylegg .uta .imgu img {
    width: 100%;
}

.listupd .utao.stylegg .uta .imgu .type {
    width: 20px;
    height: 14px;
}

.listupd .utao.stylegg .uta .luf {
    position: relative;
}

.listupd .utao.stylegg .uta .luf h4 {
    font-size: 14px;
    margin-bottom: 10px;
}

.listupd .utao.stylegg .uta .luf ul {
    list-style: none;
    padding: 0;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.listupd .utao.stylegg .uta .luf ul li {
    overflow: hidden;
    flex: 1 1 0%;
}

.listupd .utao.stylegg .uta .luf ul li span {
    float: none;
    display: block;
    text-align: center;
    margin: 0;
}

.listupd .utao.stylegg .uta .luf ul li a {
    float: none;
    border: 1px solid #3c3c3c;
    border-radius: 5px;
    max-width: unset;
    padding: 4px 3px;
}

.listupd .utao.stylegg .uta .luf ul li:nth-child(2) {
    margin-left: 5px;
}

.listupd .utao.stylegg .uta .luf ul li span.eggchap {
    color: #DDD;
}

.listupd .utao.stylegg .uta .luf ul li span.eggtime {
    font-size: 11px;
    margin-top: 2px;
}

.listupd .utao.stylegg .uta .luf ul li a:hover .eggchap {
    color: #FFF;
}

.listupd.popularslider {
    padding-bottom: 10px;
}

.listupd.popularslider .popconslide {
    white-space: nowrap;
    overflow: auto;
    padding-bottom: 5px;
    display: flex;
}

.listupd.popularslider .popconslide .bs {
    display: block;
    float: none !important;
    white-space: normal;
    flex: 1 0 165px;
}

.listupd.popularslider .popconslide::-webkit-scrollbar {
    height: 9px;
    background-color: #111;
    border-radius: 2px;
}

.listupd.popularslider .popconslide::-webkit-scrollbar-thumb {
    background-color: #333;
    border-radius: 2px;
}

ul.taxindex {
    list-style: none;
    padding: 0;
    margin: 0 -10px;
    overflow: hidden;
    flex-wrap: wrap;
    display: flex
}

ul.taxindex li {
    width: 25%
}

ul.taxindex li a {
    margin: 10px;
    padding: .5rem 1rem;
    display: block;
    font-weight: 500;
    border-radius: .25rem;
    background: #333;
    color: #999
}

ul.taxindex li a i {
    float: right;
    font-style: normal;
    color: #727579;
    font-weight: 400
}

ul.taxindex li a:hover {
    background: #e2e8f0;
    color: #727579
}

ul.taxindex li a span {
    display: inline-block;
    max-width: 70%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.restrictcontainer {
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 99999
}

.restrictcontainer .restrictcheck {
    height: 100%;
    display: -webkit-flexbox;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: rgba(0,0,0,0.8)
}

.restrictcontainer .restrictcheck .restrictmess {
    max-width: 600px;
    text-align: center;
    padding: 20px
}

.restrictcontainer .restrictcheck .restrictmess .restitle {
    font-size: 28px;
    font-weight: 700;
    color: #FFF;
    margin-bottom: 15px
}

.restrictcontainer .restrictcheck .restrictmess .resdescp {
    background: #dd5f05;
    color: #FFF;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 3px
}

.restrictcontainer .restrictcheck .restrictmess .resconfirm {
    display: flex;
    flex-wrap: nowrap;
    margin: 0 -10px
}

.restrictcontainer .restrictcheck .restrictmess .resconfirm .rescb {
    width: 50%;
    margin: 0 10px;
    padding: 7px 10px;
    background: #141414;
    color: #FFF;
    border-radius: 3px;
    border: 0;
    font-family: inherit;
    cursor: pointer
}

.restrictcontainer .restrictcheck .restrictmess .resconfirm .rescb.enterx {
    background: #d30000
}

.cts {
    font-size: 13px;
    line-height: 19px;
    overflow: hidden;
    height: 85px;
    overflow-y: scroll;
    padding: 5px;
    border: 1px solid #DDD
}

.cts p {
    margin: 0
}

.chapterbody .bs {
    width: 14.28%
}

#content.readercontent {
    overflow: auto;
    max-width: none
}

#content.readercontent .ts-breadcrumb {
    text-align: center;
    max-width: 1142px;
    margin: 0 auto
}

#content.readercontent .ts-breadcrumb a {
    color: #999
}

#content.readercontent .chdesc {
    text-align: center;
    margin: 0 auto;
    margin-bottom: 25px;
    max-width: 1142px
}

.page {
    padding: 15px;
}

.page h2,.page h3,.page h4 {
    margin: 0;
    font-weight: 500;
    margin-bottom: 5px
}

.page.blog {
    color: #DDD;
    font-size: 14px
}

.page.blog img {
    width: auto!important;
    max-width: 70%
}

.page .pagination {
    margin-top: 30px;
    margin-bottom: 9px;
}

.bigblogt {
    clear: both;
    overflow: hidden;
    margin-bottom: 15px
}

.bigblogt h1 {
    margin: 0;
    line-height: normal;
    font-size: 20px;
    font-weight: 400;
    color: #DDD;
    margin-bottom: 3px
}

.bigblogt span {
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase
}

.bigblogt span a {
    background: #366ad3;
    color: #ddd;
    padding: 0 5px;
    margin-left: 10px
}

.page.blog .thumb {
    margin: -15px;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    padding: 40% 0 0;
    border-bottom: 3px solid #366ad3
}

.page.blog .thumb img {
    width: 100%!important;
    max-width: 100%!important;
    top: 0;
    position: absolute;
    z-index: 1
}

.page.blog .thumb .shdwx {
    background: rgba(0,0,0,0.13);
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 2;
    top: 0;
    box-shadow: inset 0 0 150px #000
}

.alr {
    margin-bottom: 18px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -khtml-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -moz-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -ms-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    -o-box-shadow: 0 2px 3px rgba(0,0,0,.1);
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    border-radius: 3px;
    color: #FFF;
    background: #d7382d;
    font-size: 13px;
    padding: 15px
}

.postb {
    font-size: 15px;
    line-height: 22px;
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #DDD
}

.sosmed {
    position: absolute;
    right: 10px;
    bottom: 15px
}

.sosmed span {
    width: auto;
    height: auto;
    font-size: 16px;
    padding: 4px;
    border-radius: 15px;
    color: #FFF;
    background: #444;
    margin-right: 3px
}

.bixbox.mctn {
    padding: 15px;
    font-size: 13px;
    color: #777
}

.mctnx {
    margin: 15px
}

.listo {
    overflow: hidden;
    margin: -15px;
    font-size: 14px;
    padding: 15px;
    position: relative
}

.listo .bx {
    padding: 13px 0;
    border-bottom: 1px solid #262432;
    overflow: hidden
}

.listo .bx .imgx {
    width: 70px;
    min-height: 98px;
    float: left
}

.listo .bx .inx {
    overflow: hidden;
    padding-left: 15px
}

.listo .bx .inx h2 {
    font-size: 1em;
    font-weight: 500;
    margin: 0 0 3px;
    line-height: 1.2em
}

.listo .bx .inx span {
    font-size: .9em;
    margin-bottom: 5px;
    line-height: 18px
}

.listo .bx .inx span p {
    margin: 0
}

.lista {
    padding: 10px;
    margin: -15px;
    line-height: normal;
    text-align: center
}

.lista a {
    margin: 4px;
    border: 1px solid #366ad3;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    min-width: 32px;
    text-align: center;
    font-size: 14px;
    padding: 5px 8px;
    display: inline-block;
    color: #FFF;
    background: #366ad3
}

.lista a:hover {
    background: #292635;
    color: #CCC;
    border-color: #292635
}

.nextprev {
    overflow: hidden
}

.nextprev .prev {
    float: left
}

.nextprev .next {
    float: right
}

.postb img {
    max-width: 100%;
    height: auto
}

.postb .imgb {
    display: block;
    margin: 0 auto;
    margin-bottom: 15px;
    max-width: 75%
}

.postarea {
    overflow: hidden;
    margin-bottom: 10px;
    margin-top: 15px
}

.headpost {
    overflow: hidden;
    text-align: center;
    padding: 0 10px;
    margin: 0 auto;
    margin-bottom: 15px;
    max-width: 1142px
}

.headpost h1 {
    margin: 0;
    font-size: 21px;
    color: #DDD
}

.allc a {
    color: #ddd;
    font-weight: 500
}

.headpost .allc {
    font-size: 13px
}

.headpost .allc a {
    color: #366ad3
}

.headpost .allc a:hover {
    color: inherit
}

.chnav {
    overflow: hidden;
    margin: 0 auto;
    max-width: 1142px
}

.nextprev a {
    display: block;
    padding: 2px 15px;
    border-radius: 20px;
    color: #FFF;
    font-size: 13px;
    background: #366ad3;
    line-height: 25px
}

.nextprev a[rel=next] {
    float: right
}

.nextprev a[rel=prev] {
    float: left
}

.nextprev a:hover {
    background: #333!important;
    color: #FFF!important
}

.black{background:#16151d;color:#999}
.black a{color:#DDD}
.black .nextprev a{color:#FFF}
.black a:hover{color:#FFF}


.black .nextprev a.disabled {
    background: #222;
    color: #555
}

.black .nextprev a.disabled:hover {
    background: #222!important;
    color: #555!important;
    cursor: default
}

.readingnav {
    display: none;
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev a.disabled {
    cursor: default;
    color: #555
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev a:hover {
    background: none!important
}

.chnav.selectchp .npv {
    float: right
}

.chnav.selectchp .slc {
    float: left;
    margin-left: 10px
}

.chnav.selectchp .slc #chapter {
    background: #252428;
    color: #DDD;
    border: 1px solid #3e3949;
    font-family: inherit;
    padding: 3px 10px;
    font-size: 13px;
    border-radius: 2px;
    max-width: 300px
}

.chnav .dlx {
    float: right
}

.chnav .dlx a {
    display: block;
    padding: 2px 10px;
    font-size: 13px;
    border-radius: 20px;
    color: #FFF;
    line-height: 25px;
    margin-left: 5px;
    background: #d50f00;
    position: relative;
    z-index: 1
}

.chnav .dlx a:hover {
    background: #333
}

.chnav.selectchp .npv .nextprev {
    margin-left: 5px
}

.chnav .selector select {
    background: #333;
    border: 1px solid #333;
    font-family: inherit;
    display: block;
    color: #9b9b9b;
    padding: 5px 10px;
    padding-right: 25px;
    border-radius: 20px;
    font-size: 13px;
    -webkit-appearance: none;
}

.chnav .l .nvx,.chnav .pagedsel,.chnav .readingmode,.readingnav.rnavbot .readingnavbot .readingoption .selectorx.l .nvx,.readingnav.rnavbot .readingnavbot .readingoption .nextprev .pagedsel {
    position: relative
}

.chnav .l .nvx:after,.chnav .pagedsel:after,.chnav .readingmode:after,.mirror-select:after,.readingnav.rnavbot .readingnavbot .readingoption .selectorx.l .nvx:after,.readingnav.rnavbot .readingnavbot .readingoption .nextprev .pagedsel:after {
    position: absolute;
    top: 0;
    right: 7px;
    content: "\f0dc";
    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: 900;
    text-decoration: inherit;
    background: 0 0;
    width: 17px;
    top: 50%;
    font-size: 12px;
    transform: translateY(-50%);
    background: #333;
    text-align: center;
}

.readingnav.rnavbot .readingnavbot .readingoption .selectorx.l .nvx:after,.readingnav.rnavbot .readingnavbot .readingoption .mirror-select:after,.readingnav.rnavbot .readingnavbot .readingoption .nextprev .pagedsel:after {
    background: none;
}

.mirror-select {
    position: relative
}

.chnav .l {
    float: left;
    margin-right: 10px
}

.chnav .r {
    float: right;
    margin-left: 10px
}

.nextprev a[rel=next] {
    margin-left: 10px
}

.chnav.ctop {
    margin-bottom: 20px
}

.chnav.cbot {
    margin-top: 20px;
    margin-bottom: 20px
}

.readingnav {
    padding: 0 20px;
    width: 100%;
    position: fixed;
    left: 0;
    z-index: 1;
    background: rgba(0,0,0,.7);
    transition: all .8s ease
}

.readingnav.rnavtop {
    top: -44px;
}

.readingnav.rnavbot {
    bottom: -40px;
}

.readingnav.rnavtop .readingnavtop {
    max-width: 1142px;
    margin: 0 auto;
    display: flex;
    flex-wrap: nowrap
}

.readingnav.rnavtop .readingnavtop .daw {
    width: 33.33333%
}

.readingnav.rnavtop .readingnavtop .daw.chpnw {
    text-align: center;
    color: #FFF;
    line-height: 44px;
    font-size: 15px
}

.readingnav.rnavtop .readingnavtop .daw.backseries {
    font-size: 25px
}

.readingnav.rnavtop .readingnavtop .daw .fas {
    line-height: 43px
}

.readingnav.rnavtop .readingnavtop .daw.dl {
    text-align: right;
    font-size: 18px
}

.readingnav.rnavbot .readingnavbot {
    max-width: 1142px;
    margin: 0 auto
}

.readingnav.rnavbot .readingnavbot .readingbar {
    margin: 10px 0;
    height: 7px;
    background: #000
}

.readingnav.rnavbot .readingnavbot .readingbar .readingprogress {
    height: 7px;
    background: #366ad3
}

.readingnav.rnavbot .readingnavbot .readingoption {
    margin-bottom: 10px;
    overflow: hidden
}

.readingnav.rnavbot .readingnavbot .readingoption:after {
    clear: both
}

.readingnav.rnavbot .readingnavbot .readingoption .l {
    float: left
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev {
    float: right
}

.readingnav.rnavbot .readingnavbot .readingoption .selectorx select {
    font-family: inherit;
    background: #000;
    border: 1px solid #000;
    color: #ccc;
    padding: 5px 10px;
    border-radius: 20px;
    cursor: pointer;
    -webkit-appearance: none;
    padding-right: 25px;
}

.readingnav.rnavbot .readingnavbot .readingoption .selectorx.l {
    margin-right: 10px
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev a {
    background: 0;
    font-size: 19px;
    padding: 0;
    color: #ccc
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev a .fas {
    line-height: 29px
}

.readingnav.rnavbot .readingnavbot .readingoption .nextprev a[rel=prev] {
    margin-right: 10px
}

.hidenopt .readingnav.rnavbot {
    bottom: 0;
}

.hidenopt .readingnav.rnavtop {
    top: 0;
}

.customize-support.hidenopt .readingnav.rnavtop {
    top: 32px;
}

.readingnav.rnavtop.headerfor {
    top: 68px
}

.customize-support .readingnav.rnavtop.headerfor {
    top: 100px
}

.readingnav.rnavbot .minimizebar {
    position: absolute;
    top: -15px;
    left: 0;
    width: 100%;
    text-align: center;
}

.readingnav.rnavbot .minimizebar .icomin {
    display: inline-block;
    background: rgba(0,0,0,.7);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    padding: 5px 20px;
    cursor: pointer;
}

.readingnav.rnavbot .minimizebar .icomin .barip {
    height: 5px;
    width: 50px;
    background: #535353;
    border-radius: 10px
}

.fontSize {
    margin: 0 auto;
    max-width: 1142px;
    text-align: center;
    margin-bottom: 15px
}

.fontSize .setSize {
    display: inline-block;
    margin-left: 3px;
    margin-right: 3px;
    width: 35px;
    line-height: 35px;
    text-align: center;
    background: #333;
    border-radius: 50%;
    font-weight: 700
}

#readerarea {
    margin: 10px auto;
    text-align: center;
    position: relative;
    max-width: 1142px
}

#readerarea .preventclick {
    margin: 0;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%
}

#readerarea img {
    max-width: 100%;
    margin: 0 auto;
    display: block
}

#readerarea br {
    display: none
}

#readerarea p {
    margin: 0
}

#readerarea.rdminimal {
    text-align: left;
    line-height: 160%
}

#readerarea .gallery {
    overflow: hidden
}

.readingnav .rdnmx {
    position: absolute;
    width: 100%;
    height: 45px;
    left: 0;
    cursor: pointer
}

.readingnav .rdnmx.rdbot {
    bottom: 65px
}

.readingnav .rdnmx.rdtop {
    top: 44px
}

.hidenopt .readingnav .rdnmx {
    height: 25px
}

#content.readercontent .chaptertags {
    max-width: 1142px;
    margin: 0 auto;
    margin-bottom: 15px;
    background: #222;
    overflow: hidden;
    border-radius: 3px;
    padding: 0 15px;
    font-size: 13px
}

#content.readercontent .bixbox {
    margin: 0 auto;
    margin-bottom: 20px;
    max-width: 1142px
}

img.curleft {
    cursor: url(assets/img/arrow-left-circle.svg),auto
}

img.curright {
    cursor: url(assets/img/arrow-right-circle.svg),auto
}

img.curdown {
    cursor: url(assets/img/arrow-down-circle.svg),auto
}

.releases.series {
    display: block;
    margin-bottom: 15px
}

.releases.series h1 {
    font-weight: 500;
    font-size: 20px;
    display: block;
    padding: 0;
    margin: 0;
    color: #000;
    padding-bottom: 2px;
    font-family: inherit
}

.releases.series .alter {
    display: block;
    color: #999;
    font-size: 13px;
    padding-bottom: 5px
}

#content.manga-info {
    position: unset;
    max-width: 1100px;
    margin-top: 0
}

#content.manga-info .wrapper {
    position: unset
}

#content.manga-info .postbody.full {
    z-index: 1;
    position: relative;
    padding-top: 125px
}

.bigcover {
    position: absolute;
    left: 0;
    z-index: 0;
    width: 100%;
    height: 280px;
    overflow: hidden;
    background: #222
}

.bigcover img {
    width: 100%;
    min-height: 280px
}

.bigcover .img-blur {
    -webkit-filter: blur(60px);
    -moz-filter: blur(60px);
    -ms-filter: blur(60px);
    filter: blur(60px)
}

.bigcover .bigbanner {
    background-position: 50% 35%;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 280px
}

.side.infomanga {
    overflow: hidden;
    margin-bottom: 15px
}

.side.infomanga .imgprop {
    float: left;
    margin-right: 5px
}

.side.infomanga .imgprop img {
    float: left;
    max-width: 190px;
    height: auto
}

.side.infomanga table.listinfo {
    overflow: hidden
}

.side.infomanga table.listinfo tr {
    vertical-align: top
}

.side.infomanga table.listinfo tr th {
    display: block;
    font-weight: 700;
    text-align: left;
    padding: 3px 10px
}

.side.infomanga table.listinfo tr td {
    padding: 3px 10px 3px 0
}

.sny {
    overflow: hidden
}

.sny h2 {
    margin: 0;
    font-weight: 500;
    font-size: 16px
}

.main-info .info-desc h1 {
    margin: 0;
    font-size: 21px;
    font-weight: 700;
    line-height: 28px;
    color: #FFF;
}

.socialts {
    overflow: hidden;
    margin-bottom: 15px
}

.chapterbody .socialts {
    text-align: center
}

.socialts a {
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    background: #333;
    color: #FFF!important;
    padding: 0;
    line-height: 26px;
    font-size: 12px;
    border-radius: 3px;
}

.socialts a i {
    padding-left: 10px;
    padding-right: 2px;
}

.socialts a span {
    padding-right: 10px;
}

.socialts a.fb {
    background: #1877f2;
}

.socialts a.fb:hover {
    background: #2f477b
}

.socialts a.twt {
    background: #1DA1F2
}

.socialts a.twt:hover {
    background: #1781c3
}

.socialts a.wa {
    background: #01ba6d
}

.socialts a.wa:hover {
    background: #008f54
}

.socialts a.pntrs {
    background: #e81737
}

.socialts a.pntrs:hover {
    background: #b2132c
}

.main-info .info-desc .alter {
    display: block;
    margin-bottom: 5px;
    color: #555
}

.main-info .info-desc .spe {
    margin-bottom: 10px;
    overflow: hidden
}

.main-info .info-desc .spe span {
    width: 48%;
    margin-right: 2%;
    margin-bottom: 2px;
    float: left;
    padding-left: 14px;
    position: relative
}

.main-info .info-desc .spe span.split {
    overflow: hidden;
    white-space: nowrap
}

.main-info .info-desc .desc {
    line-height: 1.4em;
    color: #888
}

.main-info .info-desc .spe span:before {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    background: #366ad3;
    display: inline-block;
    position: absolute;
    left: 0;
    top: 4px
}

.rating-prc .rtp {
    overflow: hidden;
    display: inline-block;
    float: left
}

.rating-prc .rtp .rtb {
    position: relative;
    overflow: hidden;
    color: #ffc700;
    height: 15px;
    line-height: 1;
    width: 85px;
    font-size: 15px;
    margin: 0 auto
}

.rating-prc .rtp .rtb:before {
    content: "\f005\f005\f005\f005\f005";
    font-family: "Font Awesome 5 Free";
    position: absolute;
    top: 0;
    left: 0;
    color: #686868;
    height: 15px
}

.rating-prc .rtp .rtb span {
    overflow: hidden;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 15px
}

.rating-prc .rtp .rtb span:before {
    content: "\f005\f005\f005\f005\f005";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    top: 0;
    position: absolute;
    left: 0
}

.rating-prc .num {
    float: right;
    line-height: normal;
    font-size: 13px
}

.main-info .wd-full {
    margin-top: 15px;
}

.main-info .wd-full b,.main-info .info-desc .wd-full h2,.main-info .info-desc .flex-wrap .fmed b {
    margin: 0;
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
    color: #d9d9d9;
    font-weight: 500
}

.main-info .wd-full span {
    display: block
}

.main-info .wd-full p {
    margin: 0
}

.main-info .flex-wrap {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 10px
}

.main-info .flex-wrap .fmed {
    width: 50%
}

.main-info .wd-full .mgen {
    display: block;
    overflow: hidden
}

.main-info .wd-full .mgen a {
    display: inline-block;
    margin-right: 3px;
    margin-bottom: 6px;
    background: #343434;
    padding: 4px 12px;
    border-radius: 3px
}

.main-info .wd-full .entry-content.entry-content-single {
    line-height: 24px
}

.main-info {
    overflow: hidden
}

.main-info .info-left {
    float: left;
    width: 235px;
    margin-right: 15px
}

.main-info .info-right {
    overflow: hidden
}

.main-info .info-left .thumb {
    margin-bottom: 10px;
    position: relative
}

.main-info .info-left .thumb img {
    width: 100%
}

.main-info .info-left .rating {
    text-align: center;
    padding: 9px 10px;
    overflow: hidden;
    margin-top: 10px;
    margin-bottom: 10px
}

.main-info .info-left .tsinfo {
    margin-top: 10px
}

.info-desc {
    padding: 15px
}

.info-desc h1 {
    margin: 0;
    font-size: 21px;
    font-weight: 700;
    line-height: 28px;
    color: #FFF
}

.info-desc .alternative {
    margin-top: 5px;
    display: block;
    font-size: 13px;
    color: #999
}

.info-right .socialts {
    text-align: center
}

.imptdt {
    padding: 7px 10px;
    overflow: hidden;
    font-size: 13px;
}

.imptdt i,.imptdt a {
    font-style: normal;
    float: right;
    color: #999;
}

.animefull .bottom {
    background: rgba(34,58,101,0.02);
    padding: 12px 20px;
    font-size: .85em;
    border-top: 1px solid #312f40;
    text-transform: lowercase;
    font-weight: 300
}

.bookmark {
    text-align: center;
    background: #366ad3;
    font-size: 14px;
    color: #FFF;
    border-radius: 5px;
    padding: 8px 5px;
    cursor: pointer;
    font-weight: 600;
}

.bookmark .dashicons {
    width: auto;
    height: auto;
    font-size: 16px
}

.bookmark:hover {
    background: #222
}

.bookmark.marked {
    background: #be342a
}

.bmc {
    text-align: center;
    font-size: 12px;
    margin-top: 4px
}

.hapus {
    display: inline-block;
    padding: 2px 18px;
    font-size: 13px;
    line-height: 20px;
    border-radius: 3px;
    color: #FFF;
    background: #e53427;
    cursor: pointer
}

.delmark {
    position: absolute;
    z-index: 9;
    cursor: pointer;
    top: 0;
    right: 0;
    color: #FFF;
    font-size: 13px;
    padding: 2px 5px;
    border-bottom-left-radius: 5px;
    background: #e53427
}

.bixbox.trailer {
    overflow: hidden
}

.bixbox.trailer .tply {
    padding: 58% 0 0;
    position: relative
}

.bixbox.trailer .tply iframe {
    width: 100%;
    height: 100%;
    top: 0;
    position: absolute
}

#gallery.owl-loaded {
    margin: 15px;
    overflow: hidden;
    width: unset
}

#gallery.owl-loaded .owl-dots {
    position: relative;
    bottom: 0;
    margin-top: 10px
}

#gallery.owl-loaded .owl-dots span {
    box-shadow: none;
    background: #555;
    cursor: pointer
}

#gallery.owl-loaded .owl-item {
    max-height: 210px
}

#gallery.owl-loaded .owl-dots .owl-dot.active span {
    background: #366ad3!important
}

.lastend {
    overflow: hidden;
    position: relative;
    margin: 10px
}

.lastend .inepcx {
    width: 50%;
    float: left;
    text-align: center
}

.lastend .inepcx a {
    display: block;
    color: #fff;
    margin: 5px;
    padding: 15px;
    background: #366ad3;
    border-radius: 5px;
    line-height: normal
}

.lastend .inepcx a span {
    display: block;
    font-size: 15px
}

.lastend .inepcx a span.epcur {
    font-size: 20px;
    margin-top: 6px;
    font-weight: 700
}

.lastend .inepcx a:hover {
    background: #333
}

.search-chapter {
    overflow: hidden;
    position: relative;
    margin: 0 15px 15px
}

#searchchapter {
    width: 100%;
    color: #CCC;
    font-family: inherit;
    padding: 7px 10px;
    background: #343434;
    border: 1px solid #464357;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px
}

.bxcl {
    overflow: hidden
}

.bxcl ul {
    padding: 0;
    list-style: none;
    margin: 0;
    margin-left: -5px;
    overflow: auto;
    max-height: 297px
}

.bxcl ul li {
    float: left;
    width: 25%
}

.bxcl ul #lihide {
    float: none!important;
    width: auto!important
}

.bxcl ul li .rg {
    margin: 5px;
    padding: 10px;
    overflow: hidden;
    position: relative;
    background: #FAFAFA;
    border: 2px solid #e2e3e7
}

.bxcl ul li .rg .lch {
    float: left
}

.bxcl ul li .rg .dlx {
    position: absolute;
    right: 10px;
    top: 0
}

.bxcl ul li .rg .dlx a.dlxx {
    overflow: hidden;
    position: relative
}

.bxcl ul li .rg .dlx a.dlxx .dashicons {
    width: auto;
    height: auto;
    font-size: 22px;
    line-height: 38px;
    color: #888
}

.bxcl ul li .rg .dlx a.dlxx .dashicons:hover {
    color: #006400;
    text-decoration: none
}

.bxcl ul li .rg .dlx .ndlx {
    font-size: 22px;
    line-height: 36px;
    color: #c6c6c6
}

.bxcl ul li span.dt {
    float: right
}

.bxcl ul li .lchx {
    line-height: 26px
}

.bxcl ul li span.dt a {
    display: block;
    background: #366ad3;
    color: #DDD;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border: none;
    box-shadow: none;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    margin-left: 7px;
    float: left
}

.bxcl ul li span.dt a .dashicons {
    width: auto;
    height: auto;
    font-size: 16px;
    line-height: 18px;
    color: #DDD
}

.bxcl ul li span.dt a:hover {
    background: #222;
    color: #fff
}

.bxcl ul li span.dt a:hover .dashicons {
    color: #FFF
}

.bxcl ul li .chbox {
    overflow: hidden;
    padding: 5px 10px;
    border: 1px solid #333;
    font-size: 14px;
    margin: 0 5px;
    margin-bottom: 10px;
    position: relative;
    border-radius: 5px
}

.bxcl ul li .chbox:hover {
    background: #333
}

.bs .bsx .limit .bt span.sb .dashicons {
    width: auto;
    height: auto;
    font-size: 12px;
    line-height: 19px;
    color: rgba(34,58,101,0.9)
}

#chapterlist {
    margin: 15px;
    font-family: 'Fira Sans',sans-serif;
}

.bxcl ul::-webkit-scrollbar-thumb,.quickfilter .filters .filter .genrez::-webkit-scrollbar-thumb {
    background: #366ad3
}

.bxcl ul::-webkit-scrollbar-track,.quickfilter .filters .filter .genrez::-webkit-scrollbar-track {
    background: none
}

.bxcl ul::-webkit-scrollbar,.quickfilter .filters .filter .genrez::-webkit-scrollbar {
    width: 5px
}

.bxcl ul li .eph-num {
    float: left
}

.bxcl ul li .dt {
    float: right;
    font-size: 20px;
    margin-top: 8px;
    margin-right: 5px
}

.bxcl ul li .eph-num span {
    display: block
}

.bxcl ul li .eph-num span.chapternum {
    font-weight: 400
}

.bxcl ul li .eph-num span.chapterdate {
    font-size: 12px;
    color: #888
}

.bxcl ul li .eph-num a:visited {
    color: #366ad3
}

.bxcl ul li .dt a {
    color: #366ad3
}

.bxcl ul li .dt a:hover {
    color: #FFF
}

.bxcl .clstyle {
    margin-left: 0
}

.bxcl .clstyle li {
    float: none;
    width: auto
}

.bxcl .clstyle li .chbox {
    margin-left: 0
}

.bxcl .clstyle li .eph-num {
    width: 85%
}

.bxcl .clstyle li span.chapternum {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.page .auth {
    margin-bottom: 15px;
    display: block;
    color: #999;
    font-size: 11px;
    font-family: tahoma
}

.page .auth a {
    color: #999
}

.page img {
    width: 100%;
    height: auto;
    margin: 0 auto;
    margin-bottom: 10px;
    display: block;
    text-align: center
}

.page iframe {
    width: 100%;
    min-height: 350px
}

.bloglist {
    position: relative
}

.bloglist .bl {
    overflow: hidden;
    padding: 15px
}

.bloglist .bl:nth-child(odd) {
    background: #262432
}

.bloglist .bl .l {
    float: left;
    width: 80%
}

.bloglist .bl .r {
    overflow: hidden;
    padding-left: 10px;
    text-align: right
}

.bloglist .bl .r span {
    padding-top: 11px;
    display: block;
    color: #6a6a6a;
    font-size: 12px
}

.bloglist .bl .l h2 {
    margin: 0;
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 400
}

.bloglist .bl .l span {
    font-size: 13px
}

.genres {
    margin: 0;
    margin-bottom: 15px;
    background: #f7f7f7;
    padding: 10px;
    overflow: hidden;
    color: #999;
    border-radius: 5px
}

.genres li {
    width: 20%;
    margin-left: 25px;
    line-height: 24px;
    float: left
}

.genres li a {
    color: #333
}

.advancedsearch {
    position: relative
}

.advancedsearch .quickfilter .filters .filter,.advancedsearch .quickfilter .filters .filter.submit {
    width: 20%;
    position: static
}

.advancedsearch .quickfilter .filters .filter ul {
    right: 0;
    left: 0;
    top: auto;
    width: auto
}

.advancedsearch .quickfilter .filters .filter ul.dropdown-menu.c1 {
    max-width: none;
    float: none
}

.advancedsearch .quickfilter .filters .filter ul.dropdown-menu.c1 li {
    width: 20%;
    float: left;
}

.quickfilter .filters .filter .genrez {
    max-height: 240px;
    overflow: auto;
}

.quickfilter .filters .filter .genrez:hover {
    overflow-y: scroll
}

.advancedsearch .quickfilter .filters .filter ul li {
    width: 20%;
}

*,::before,::after {
    box-sizing: border-box
}

.genx {
    display: block;
    position: relative;
    padding: 3px 0;
    padding-left: 17px;
    margin-bottom: 0;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    float: left;
    width: 20%
}

.genx input {
    position: absolute;
    opacity: 0;
    cursor: pointer
}

.checkmark {
    position: absolute;
    top: 8px;
    left: 0;
    height: 6px;
    border-radius: 50%;
    width: 6px;
    background-color: #282635
}

.genx:hover input ~ .checkmark {
    background-color: #ccc
}

.genx input:checked ~ .checkmark {
    background-color: #e3eff2
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none
}

.genx input:checked ~ .checkmark:after {
    display: block
}

.genx .checkmark:after {
    left: 2px;
    top: -2px;
    width: 5px;
    height: 10px;
    border: solid #28a745;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
}

.radiox {
    display: block;
    position: relative;
    padding-left: 18px;
    margin-right: 15px;
    margin-bottom: 5px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.radiox input {
    position: absolute;
    opacity: 0;
    cursor: pointer
}

.checkmarkx {
    position: absolute;
    top: 3px;
    left: 0;
    height: 12px;
    width: 12px;
    background-color: #282635;
    border-radius: 50%
}

.radiox:hover input ~ .checkmarkx {
    background-color: #ccc
}

.radiox input:checked ~ .checkmarkx {
    background-color: #366ad3
}

.checkmarkx:after {
    content: "";
    position: absolute;
    display: none
}

.radiox input:checked ~ .checkmarkx:after {
    display: block
}

.radiox .checkmarkx:after {
    top: 3px;
    left: 3.5px;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #fff
}

.advancedsearch button.searchz {
    font-family: inherit;
    border: 1px solid #366ad3;
    color: #ddd;
    line-height: 30px;
    padding: 0 15px;
    border-radius: 30px;
    background: #366ad3;
    cursor: pointer;
    font-weight: 300;
    display: inline-block;
    font-size: 17px;
    margin: 2px
}

.btnx {
    text-align: center;
    overflow: hidden
}

.gnr {
    font-family: inherit;
    border: 1px solid #333041;
    color: #DDD;
    line-height: 30px;
    padding: 0 15px;
    border-radius: 30px;
    background: #333041;
    cursor: pointer;
    font-weight: 300;
    display: none;
    font-size: 17px;
    margin: 2px;
    cursor: pointer
}

.modex {
    margin: 0 15px;
    margin-bottom: 5px;
    text-align: right
}

.other-opts .modex {
    float: right
}

.modex a {
    cursor: pointer;
    color: #FFF;
    display: inline-block;
    line-height: 25px;
    padding: 0 10px;
    font-weight: 300;
    white-space: nowrap;
    font-size: 12px;
    background: #333;
    border-radius: 3px
}

.nav_apb {
    margin: 15px;
    margin-bottom: 5px;
    text-align: center
}

.nav_apb a {
    text-align: center;
    display: inline-block;
    background: #333;
    padding: 5px 12px!important;
    margin: 5px;
    border-radius: 3px
}

.nav_apb a:hover {
    background: #366ad3;
    color: #FFF
}

.soralist span {
    display: block;
    border-bottom: 4px solid #DDD
}

.soralist span a {
    font-weight: 700;
    font-size: 15px
}

.soralist span {
    display: block;
    padding: 0 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #312f40
}

.soralist ul {
    margin: 0;
    overflow: hidden;
    color: #366ad3;
    padding: 15px;
    font-weight: 400
}

.soralist ul li {
    margin-left: 15px;
    float: left;
    line-height: 20px;
    margin-bottom: 5px;
    width: 47%
}

.archx {
    overflow: hidden
}

.archx .arche {
    overflow: hidden;
    margin-bottom: 10px;
    border-bottom: 1px solid #DDD;
    padding-bottom: 10px
}

.archx .arche .imgx {
    float: left;
    margin-right: 15px;
    position: relative;
    overflow: hidden
}

.archx .arche .imgx span {
    top: 0;
    left: 0;
    color: #FFF;
    background: rgba(72,72,72,0.68);
    padding: 3px 7px;
    font-size: 13px;
    font-weight: 500;
    position: absolute
}

.archx .arche .imgx img {
    max-width: 110px;
    height: auto
}

.archx .arche .inx {
    overflow: hidden
}

.archx .arche .inx h2 {
    margin: 0;
    font-size: 16px;
    margin-bottom: 10px
}

.archx .arche .inx h2 a {
    color: #000
}

.archx .arche .inx h2 a:hover {
    text-decoration: none;
    color: #366ad3
}

.archx .arche .inx span {
    display: block;
    margin-bottom: 3px;
    color: #8f95a3;
    font-weight: 500;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden
}

.archx .arche .inx span a {
    color: #8f95a3
}

.archx .arche .inx span b {
    width: 90px;
    float: left
}

.seriestitle {
    display: block;
    font-size: 14px;
    font-weight: 700;
    background: #141414;
    color: #888;
    line-height: 30px;
    margin: -5px -9px 5px;
    padding: 0 7px
}

.seriestitle .score {
    margin: 3px;
    float: right;
    line-height: 23px;
    color: #888
}

.infseries {
    overflow: hidden;
    margin: 5px 0
}

.infseries img {
    float: left;
    width: 150px;
    height: 200px;
    padding: 1px;
    border: 1px solid #525151;
    margin-right: 10px
}

.infseries .right {
    font-size: 12px;
    line-height: 18px;
    color: #a2a2a2
}

.infseries .right span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.infseries .right b {
    color: #a2a2a2
}

.infseries .right a {
    color: #a2a2a2
}

.infseries .right .deskrip {
    border-top: 1px solid #515151;
    display: block;
    margin-top: 5px;
    padding-top: 5px;
    margin-left: 168px
}

.infseries .right .deskrip p {
    margin: 0
}

#sidebar {
    width: 30%;
    float: right;
    position: relative;
    z-index: 1
}

#sidebar .section {
    margin-left: 15px;
    background: #222;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    margin-bottom: 18px
}

#sidebar .section ul {
    margin: 0;
    padding: 0;
    list-style: none
}

#sidebar .section .textwidget {
    padding: 5px 15px;
    padding-bottom: 15px;
    line-height: normal;
    font-size: 13px
}

#sidebar .section ul>li {
    padding: 10px 15px;
    border-bottom: 1px solid #383838;
    font-size: .97em
}

#sidebar .section .tagcloud {
    padding: 10px 15px
}

#sidebar .section .screen-reader-text {
    display: none
}

#sidebar .section>select,#sidebar .section>form>select {
    width: 100%;
    font-family: inherit;
    background: #333;
    color: #CCC;
    border-color: #333;
    padding: 5px 15px
}

#sidebar .section #searchform {
    position: relative;
    padding: 10px 15px
}

#sidebar .section #searchform #s {
    font-family: inherit;
    color: #CCC;
    background: #333;
    border: 1px solid #333;
    padding: 5px;
    width: 80%;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

#sidebar .section #searchform #searchsubmit {
    -webkit-box-flex: 0;
    flex: 0 0 25%;
    max-width: 25%;
    font-family: inherit;
    cursor: pointer;
    background: #366ad3;
    color: #FFF;
    border: 1px solid #366ad3
}

#sidebar .section #searchform div {
    display: flex;
    flex-wrap: wrap
}

.quickfilter {
    padding: 9px
}

.quickfilter .filters {
    position: relative
}

.quickfilter .filters .filter {
    width: 50%;
    float: left;
    box-sizing: border-box;
    padding: 6px 5px;
    margin: 0;
    display: inline-block;
    position: relative;
    border-radius: 2px
}

.quickfilter .filters .filter button {
    width: 100%;
    color: #ccc;
    padding: 3px 6px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
    background-color: #333;
    border-color: #333;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    -webkit-appearance: button;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    overflow: visible;
    white-space: nowrap;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-family: inherit
}

.quickfilter .filters .filter ul {
    width: 500px;
    margin-top: 1px!important;
    padding: 10px!important;
    font-size: 13px;
    position: absolute;
    display: none;
    top: 100%;
    right: 0;
    left: auto;
    z-index: 2;
    min-width: 160px;
    text-align: left;
    background-color: #333;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 3px;
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    background-clip: padding-box;
    list-style: none
}

.quickfilter .filters .filter ul li {
    width: 25%;
    float: left;
    color: #3c3c3c;
    -khtml-transition: all .1s ease-in-out 0;
    -moz-transition: all .1s ease-in-out 0;
    -ms-transition: all .1s ease-in-out 0;
    -o-transition: all .1s ease-in-out 0;
    transition: all .1s ease-in-out 0;
    border: 0!important;
    padding: 0!important;
}

.quickfilter .filters .filter ul li input {
    display: none
}

.quickfilter .filters .filter ul li input,.quickfilter .filters .filter ul li label {
    position: inherit;
    cursor: pointer
}

.quickfilter .filters .filter ul label {
    display: block;
    color: #ccc;
    padding: 5px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.quickfilter .filters .filter ul li input+label:before,.quickfilter .filters .filter ul li input:not(:checked)+label:before {
    display: inline-block;
    content: '\f14a';
    top: 3px;
    left: 0;
    height: 12px;
    width: 12px;
    border-radius: 3px;
    margin-right: 5px;
    font-family: "Font Awesome 5 Free";
    color: #5d5d5d;
}

.quickfilter .filters .filter ul.c1 li input+label:before,.quickfilter .filters .filter ul.c1 li input:not(:checked)+label:before {
    border-radius: 50%
}

.quickfilter .filters .filter ul li input.include:checked+label:before {
    font-weight: 900;
    color: #28a745;
}

.quickfilter .filters .filter ul li input.exclude:checked+label:before {
    color: #ec0d2a !important;
    content: '\f057';
    font-weight: 900;
}

.quickfilter .filters .filter i {
    font-size: 12px;
    width: auto;
    height: auto;
    line-height: 18px;
    font-weight: 700
}

.quickfilter .filters .filter.submit {
    float: none;
    width: 100%
}

.quickfilter .filters .filter.submit button {
    background: #366ad3!important;
    color: #FFF!important
}

.quickfilter .filters .filter.submit button:hover {
    background: #333!important;
    color: #FFF!important;
    border-color: #333!important
}

.quickfilter .filters .filter.open button,.quickfilter .filters .filter button:hover {
    color: #333;
    background-color: #d0d0d0;
    border-color: #d0d0d0
}

.quickfilter .filters .filter.open ul {
    display: block
}

.quickfilter .filters .filter ul.dropdown-menu.c1 {
    max-width: 160px;
    float: right
}

.quickfilter .filters .filter ul.dropdown-menu.c1 li {
    width: 100%;
    float: none
}

.quickfilter .filters .filter ul li input:checked+label:before {
    font-weight: 900;
    color: #28a745 !important;
}

#sidebar .section .ts-wpop-series-gen .ts-wpop-nav-tabs {
    list-style: none;
    margin: 10px;
    padding: 6px;
    overflow: hidden;
    background: #333;
    border-radius: 3px;
    font-weight: 500;
}

#sidebar .section .ts-wpop-series-gen .ts-wpop-nav-tabs li.active a {
    display: block;
    background: #366ad3;
    border-radius: 3px;
    color: #FFF
}

#sidebar .section .ts-wpop-series-gen .ts-wpop-nav-tabs li {
    float: left;
    width: 33.3333333%;
    padding: 0;
    border: 0;
    text-align: center
}

.ts-wpop-series-gen .ts-wpop-nav-tabs li a {
    padding: 2px;
    display: block;
    font-size: 12px;
    cursor: pointer
}

#wpop-items .serieslist>div {
    display: none
}

.bloglist {
    padding: 15px 8px;
    overflow: hidden;
}

.bloglist .blogbox {
    float: left;
    width: 33.3333333%;
    overflow: hidden
}

.bloglist .blogbox .innerblog {
    margin: 7px
}

.bloglist .blogbox .innerblog .thumb {
    position: relative;
    overflow: hidden;
    padding-top: 55%;
    background: rgba(0,0,0,0.1);
    border-radius: 7px;
}

.bloglist .blogbox .innerblog .thumb img {
    width: 100%;
    position: absolute;
    top: 0;
    min-height: 139px
}

.bloglist .blogbox .innerblog .infoblog {
    overflow: hidden;
    margin-top: 10px;
    margin-bottom: 10px;
    height: 125px
}

.bloglist .blogbox .innerblog .infoblog .entry-header {
    margin: 0;
    margin-bottom: 5px;
    float: none;
    display: block
}

.bloglist .blogbox .innerblog .infoblog .entry-header h2 {
    margin: 0;
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 5px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

.bloglist .blogbox .innerblog .infoblog .entry-header .entry-meta {
    font-size: 12px;
    color: #888;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2
}

.bloglist .blogbox .innerblog .infoblog .entry-header .entry-meta a {
    color: #aaa
}

.bloglist .blogbox .innerblog .infoblog .entry-content {
    font-size: 12px;
    color: #777;
    line-height: 160%;
    font-family: 'Fira Sans',sans-serif;
}

.bloglist .blogbox .innerblog .infoblog .entry-content p {
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2
}

.bloglist .blogbox .innerblog .infoblog .entry-header .entry-meta b {
    font-weight: 500
}

.bloglist .blogbox .innerblog .infoblog .entry-header .entry-meta .hide {
    display: none
}

.blogpost .thumb {
    position: relative;
    overflow: hidden;
    text-align: center;
    margin-top: 15px;
}

.bixbox.blogpost .thumb img {
    max-width: 600px;
}

.blogpost .entry-header {
    padding: 15px;
    float: none;
    margin: 0;
    text-align: center;
    display: block;
}

.blogpost .entry-header h1 {
    margin: 0;
    margin-bottom: 5px;
    line-height: 27px;
    font-size: 19px;
    color: #FFF;
    font-weight: 500;
}

.blogpost .entry-header .entry-meta {
    font-size: 12px;
    color: #999;
}

.blogpost .entry-header .entry-meta .hide {
    display: none
}

.blogpost .entry-header .entry-meta b {
    font-weight: 500
}

.blogpost .entry-content {
    margin: 15px;
    overflow: hidden;
    font-size: 15px;
    line-height: 160%;
    font-family: 'Fira Sans',sans-serif;
}

.blogpost .entry-content .aligncenter {
    margin: 0 auto;
    display: block
}

.blogpost .entry-content img {
    margin-bottom: 15px
}

.blogpost .entry-content .alignright {
    display: block;
    float: right;
    margin-left: 15px
}

.blogpost .entry-content pre {
    white-space: pre-wrap
}

.blogpost .entry-header .entry-meta a {
    color: #999
}

.blogpost .entry-header .entry-meta .far,.blogpost .entry-header .entry-meta .fa {
    font-size: 10px;
    margin-right: 3px
}

.bloglist .blogbox .innerblog .infoblog .entry-meta {
    margin-top: 7px;
    font-size: 12px;
    color: #8f8f8f;
}

.bloglist .blogbox .innerblog .infoblog .entry-meta .far {
    font-size: 10px
}

.bloglist .blogbox .innerblog .infoblog .entry-meta .hide {
    display: none
}

.bloglist .blogbox .innerblog .thumb .btags {
    position: absolute;
    z-index: 4;
    bottom: 5px;
    left: 5px;
    background: #366ad3;
    opacity: 0.85;
    font-size: 12px;
    padding: 1px 5px;
    line-height: 16px;
    border-radius: 3px;
    color: #fff !important;
    font-weight: 500;
    text-transform: uppercase;
}

.blogpost .socialts {
    text-align: center;
    margin-left: 15px;
    margin-right: 15px
}

.serieslist {
    overflow: hidden
}

.serieslist ul {
    overflow: hidden
}

#sidebar .section .serieslist ul li {
    padding: 12px 15px;
    text-overflow: unset;
    white-space: unset;
    overflow: hidden;
    border-bottom: 1px solid #383838;
    position: relative
}

#sidebar .section .serieslist ul li:last-child {
    border: 0
}

.serieslist ul li .ctr {
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 25px;
    font-size: 1em;
    color: #888;
    position: absolute;
    top: 30px;
    left: 15px;
    border: .5px solid #888;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px
}

.serieslist.pop ul li {
    padding-left: 55px
}

.serieslist ul li .imgseries {
    float: left;
    overflow: hidden;
    width: 58px;
    max-height: 72px;
    margin-right: 10px;
    border-radius: 3px
}

#wpop-items .serieslist ul li .imgseries {
    margin-left: 37px
}

.serieslist ul li .imgseries img {
    width: 100%;
    height: auto;
    padding: 0;
    border: none;
    margin-bottom: 0;
    margin-right: 0;
    float: none
}

.serieslist ul li .leftseries span.bt {
    font-size: 11px;
    display: block;
    margin-top: 4px;
    float: left;
    padding: 2px 4px;
    background: #f5f5f5
}

.serieslist ul li .leftseries span span.lmt {
    float: left;
    max-width: 145px;
    margin-right: 3px
}

.serieslist ul li .leftseries {
    overflow: hidden;
    text-overflow: unset;
    white-space: unset
}

#sidebar .serieslist ul li .leftseries h2 {
    font-size: .98em;
    font-weight: 600;
    margin: 0 0 5px;
    line-height: 1.4em
}

#sidebar .serieslist ul li .leftseries h2 a {
    color: #ddd;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2
}

#sidebar .serieslist ul li .leftseries h2 a:hover {
    color: #366ad3
}

.serieslist ul li .leftseries span {
    white-space: unset;
    font-size: .9em;
    color: #888;
    margin-bottom: 8px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    font-family: 'Fira Sans',sans-serif;
}

.serieslist ul li .leftseries span b {
    font-weight: 500
}

#sidebar .section .serieslist.pop ul li.topone {
    padding: 0;
    position: relative
}

.serieslist.pop ul li.topone .limit {
    padding: 52% 0 0;
    position: relative;
    overflow: hidden
}

.serieslist.pop ul li.topone .limit>img {
    position: absolute;
    top: 0;
    min-height: 175px;
    height: auto;
    width: 100%;
    transform-style: preserve-3d
}

.serieslist.pop ul li.topone .limit .shadow {
    background-image: url(assets/images/pattern.png)!important;
    background-color: rgba(40,119,182,0.28)!important;
    z-index: 1;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0
}

.serieslist.pop ul li.topone .limit .bw {
    position: absolute;
    bottom: -2px;
    width: 100%;
    z-index: 1;
    padding: 10px 15px;
    padding-top: 30px;
    padding-left: 55px;
    background: url(assets/images/item-shadow.png) top center repeat
}

.serieslist.pop ul li.topone .limit .bw .ctr {
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border: none;
    background: #366ad3;
    color: #FFF;
    top: auto;
    bottom: 0;
    height: 52px;
    font-size: 1.2em
}

.serieslist.pop ul li.topone .limit .bw .imgseries {
    background: none;
    box-shadow: 0 1px 5px #000
}

.serieslist.pop ul li.topone .limit .bw a,.serieslist.pop ul li.topone .limit .bw span {
    color: #FFF;
    line-height: 15px
}

.serieslist .numscore {
    display: block;
    font-size: 12px;
    line-height: normal;
    font-style: italic;
    color: #999;
    overflow: hidden;
    padding-left: 5px;
    margin-top: -1px;
}

.serieslist .rating {
    overflow: hidden
}

.serieslist .rating .rating-prc {
    float: left
}

.serieslist .rating-prc .rtp .rtb {
    margin: 0;
    font-size: 12px;
    width: 67px;
    height: 14px
}

.serieslist .rating-prc .rtp .rtb span {
    margin: 0;
    font-size: inherit;
    color: inherit!important
}

.serieslist.pop ul li.topone .numscore {
    color: #FFF
}

#sidebar .section ul.genre {
    overflow: hidden;
    list-style: none;
    position: relative;
    padding: 5px 0 15px
}

#sidebar .section ul.genre li {
    float: left;
    width: 33.33%;
    overflow: hidden;
    text-overflow: ellipsis;
    border: 0;
    padding: 0
}

#sidebar .section ul.genre li a {
    font-size: 13px;
    padding: 4px 15px;
    display: inline-block;
    white-space: nowrap
}

#sidebar .section ul.genre:before,#sidebar .section ul.genre:after {
    content: "";
    position: absolute;
    width: 1px;
    height: 100%;
    top: 0;
    bottom: 0;
    left: 33.33%;
    background: #312f40
}

#sidebar .section ul.genre:after {
    left: 66.66%
}

#sidebar #bm-history {
    list-style: none;
    margin: 0 -15px;
    margin-top: -5px;
    margin-bottom: -16px;
    font-family: 'Fira Sans',sans-serif;
}

#sidebar #bm-history li {
    padding: 0;
    border-bottom: 1px solid #383838;
}

#sidebar #bm-history li a {
    padding: 7px 15px;
    font-size: 12.5px;
    display: block;
    line-height: 20px
}

#sidebar #bm-history li a:hover {
    background: #366ad3;
    color: #FFF;
    z-index: 99;
    box-shadow: 0 2px 5px #000
}

.ltslist {
    overflow: hidden
}

.ltslist li {
    border-left: 1px solid #EAEAEA;
    border-right: 1px solid #EAEAEA;
    border-bottom: 1px solid #EAEAEA;
    padding: 6px 10px;
    font-size: 12px
}

.ltslist li:nth-child(odd) {
    background: #FAFAFA
}

.ltslist li a {
    color: #333
}

.ppr {
    font-size: 12px;
    margin-bottom: 10px;
    padding: 1px;
    padding-bottom: 0;
    background: #EAEAEA
}

.ppr li {
    overflow: hidden;
    padding: 5px;
    border-bottom: 1px solid #EAEAEA;
    background: #fff
}

.ppr li .bor {
    float: left;
    padding: 1px;
    border: 1px solid #ddd
}

.ppr li .bor .limit {
    height: 39px;
    overflow: hidden
}

.ppr li .bor .limit img {
    width: 39px;
    height: auto
}

.ppr li .right {
    height: 41px;
    margin-left: 47px;
    padding: 1px 5px;
    font-size: 13px;
    background: #F5F5F5;
    line-height: 18px
}

.ppr li .right .title {
    display: block;
    font-weight: 700;
    color: #F13E3E;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

ppr li .right .title a {
    color: #F13E3E
}

.ppr li .right .latest {
    font-size: 12px;
    overflow: hidden;
    font-family: tahoma;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: block;
    color: #555
}

.ppr li .right .latest a {
    color: #555
}

div#live-search_sb {
    width: 270px!important;
    top: 60px !important;
}

.th.headerni ~ div#live-search_sb {
    top: 42px!important
}

#live-search_results {
    background: #222;
    border-radius: 5px;
    z-index: 550!important;
    overflow: hidden;
    -webkit-box-shadow: 0 4px 20px #000;
    -khtml-box-shadow: 0 4px 20px #000;
    -moz-box-shadow: 0 4px 20px #000;
    -ms-box-shadow: 0 4px 20px #000;
    -o-box-shadow: 0 4px 20px #000;
    box-shadow: 0 4px 20px #000;
}

.live-search_more {
    display: none
}

.live-search_header {
    display: none
}

.live-search_result_container ul {
    margin: 0;
    padding: 0;
    overflow: hidden
}

.live-search_result_container li {
    font-family: inherit!important;
    padding: 10px;
    color: #999;
    border-bottom: 1px solid #373543;
    overflow: hidden;
}

.live-search_result_container li:hover {
    background: #2f2f2f;
}

.live-search_result_container li a {
    display: block
}

.live-search_result_container .post-thumbnail {
    margin-right: 10px;
    float: left;
    width: 50px;
	max-height: 71px;
    overflow: hidden;
    display: inline-block;
    padding-bottom: 0;
}

.live-search_result_container .post-thumbnail img {
    width: 100%!important;
    height: auto!important
}

span.live-search_text {
    display: block;
    color: #FFF;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}

#live-search_loading {
    display: block!important;
    width: 100%;
    height: 31px!important
}

.live-search_result_container a:hover {
    text-decoration: none;
    color: #FFF
}

ul.live-search_main {
    margin: 0;
    padding: 0;
    list-style: none
}

.live-search_result_container .over {
    overflow: hidden
}

.live-search_result_container .over .autotitle {
    font-size: .95em;
    font-weight: 500;
    margin-bottom: 3px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

.live-search_result_container .over span {
    display: block;
    margin-bottom: 2px;
    font-size: 12px;
    color: #999;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    font-family: 'Fira Sans',sans-serif;
}

.live-search_result_container .over span i {
    display: inline-block;
    margin: 2px 5px;
    width: 4px;
    height: 4px;
    background: #777;
    border-radius: 50%
}

.notf {
    text-align: center;
    margin: 30px 0
}

.ts-breadcrumb {
    overflow: hidden;
    padding: 10px 15px;
    font-size: 13px
}

.ts-breadcrumb ol {
    list-style: none;
    margin: 0;
    padding: 0
}

.ts-breadcrumb ol li {
    display: inline-block;
    margin: 0 4px
}

.series-gen {
    position: relative;
    padding: 15px
}

.series-gen .nav-tabs {
    list-style: none;
    margin: 0;
    padding: 6px;
    overflow: hidden;
    background: #333;
    border-radius: 3px;
    font-weight: 500;
}

.series-gen .nav-tabs li {
    float: left;
    width: 20%
}

.series-gen .nav-tabs li a {
    display: block;
    text-align: center;
    padding: 4px;
    font-size: 13px
}

.series-gen .nav-tabs li.active a {
    background: #366ad3;
    border-radius: 3px;
    color: #FFF
}

.series-gen .tab-pane {
    display: none
}

.series-gen .tab-pane.active {
    display: block
}

.series-gen .listupd {
    padding: 10px 0;
    margin: 0 -7px
}

#content.manga-info .postbody.full.seriestu {
    max-width: 900px;
    margin: 0 auto
}

.seriestucon {
    background: #222;
    margin-bottom: 18px;
    overflow: hidden;
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0,0,0,.1)
}

.seriestucon .seriestuhead {
    margin: 15px
}

.seriestucon .seriestuhead h1 {
    font-size: 18px;
    font-weight: 600;
    color: #FFF
}

.seriestucon .seriestuhead .lastend {
    margin: 0;
    overflow: visible
}

.seriestucon .seriestuhead .lastend .inepcx {
    width: auto;
    display: inline-block;
    float: none
}

.seriestucon .seriestuhead .lastend .inepcx span {
    display: inline-block;
    font-size: 12px
}

.seriestucon .seriestuhead .lastend .inepcx .epcur {
    margin: 0;
    font-size: 15px
}

.seriestucon .seriestuhead .lastend .inepcx a {
    padding: 7px 15px;
    margin: 0;
    margin-right: 5px;
    background: #363636;
    box-shadow: 0 1px 2px #070707
}

.seriestucon .seriestucont {
    margin: 15px;
    overflow: hidden
}

.seriestucon .seriestucont .seriestucontl {
    float: left;
    width: 200px;
    margin-right: 15px
}

.seriestucon .seriestucont .seriestucontr {
    overflow: hidden
}

.seriestucon .seriestucont .seriestucontr .infotable {
    width: 100%;
    border-spacing: 2.5px;
    border-collapse: separate;
    text-indent: initial;
    margin-bottom: 15px;
}

.seriestucon .seriestucont .seriestucontr .infotable td {
    line-height: 20px;
    text-align: left;
    padding: 5px 7px;
    border: 1px solid #434343
}

.seriestucon .seriestucont .seriestucontr .infotable td:nth-child(1) {
    font-weight: 600;
    background: #2c2c2c
}

.seriestucon .seriestucont .seriestucontr .seriestugenre {
    display: block;
    overflow: hidden;
    font-size: 13px;
}

.seriestucon .seriestucont .seriestucontr .seriestugenre a {
    display: inline-block;
    margin-right: 3px;
    margin-bottom: 6px;
    background: #343434;
    padding: 4px 12px;
    border-radius: 6px;
}

.seriestucon .seriestucont .seriestucontl .thumb {
    margin-bottom: 10px;
    position: relative
}

.seriestucon .seriestucont .seriestucontl .rating.bixbox {
    margin-top: 10px;
    background: #333;
    padding: 10px
}

.seriestucon .seriestucont .seriestucontl img {
    width: 100%
}

.seriestu .socialts {
    margin: 15px;
    margin-bottom: 0;
    text-align: center
}

.seriestu .search-chapter {
    margin-top: 15px
}

.bixbox.seriesearch {
    overflow: unset
}

#content.mangatere {
    max-width: 1220px
}

#content.mangatere .terebody {
    padding-top: 150px
}

#content.mangatere .postbody.seriestu.seriestere {
    position: relative
}

#content .seriestere .seriestuheader {
    margin: 0 15px;
    margin-bottom: 15px
}

#content .seriestere .seriestuheader h1 {
    font-size: 18px;
    font-weight: 600;
    color: #FFF;
    margin-bottom: 7px
}

#content .seriestere .seriestuheader .seriestualt {
    font-size: 13px;
    color: #999
}

#content .seriestere .seriestucontent {
    overflow: hidden
}

#content .seriestere .seriestucontent .seriestucontl {
    width: 180px;
    float: left;
    margin-left: 15px
}

#content .seriestere .seriestucontent .seriestucontentr {
    overflow: hidden
}

#content .seriestere .seriestucontent .seriestucontentr .seriestuhead {
    margin-top: 0
}

#content .seriestere .seriestucontent .seriestucontl .thumb {
    margin-bottom: 10px;
    position: relative
}

#content .seriestere .seriestucontent .seriestucontl .thumb img {
    width: 100%;
}

#content .seriestere .seriestucontent .seriestucontl .rating {
    background: #343434;
    padding: 8px;
    box-shadow: none;
    margin-top: 9px;
    height: 31px;
}

#content .seriestere .seriestucontent .seriestucontentr tr {
    width: 50%;
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 5px
}

#content .seriestere .seriestucontent .seriestucontentr tbody {
    display: flex;
    flex-wrap: wrap
}

#content .seriestere .seriestucontent .seriestucontentr tr td {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 60%;
    flex: 0 0 59%;
    max-width: 59%;
    border: 0;
    border-bottom: 1px solid #393939
}

#content .seriestere .seriestucontent .seriestucontentr tr td:nth-child(1) {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 40%;
    max-width: 40%;
    border-right: 1px solid #393939;
    background: none;
    color: #CCC
}

.bixbox .additional-content {
    padding: 20px;
    line-height: 160%;
}

.bixbox .additional-content table {
    border-collapse: collapse;
    width: 100%;
}

.bixbox .additional-content td,.bixbox .additional-content th {
    border: 1px solid #444;
    text-align: left;
    padding: 8px
}

.bixbox .additional-content tr:nth-child(even) {
    background-color: #333
}

#footer {
    margin-top: 30px;
    text-align: center;
    line-height: 20px;
    padding: 0;
    font-size: 13px;
    color: #a3a3a3;
    background: #222;
    position: absolute;
    width: 100%;
    bottom: 0;
}

#footer .footermenu {
    text-align: center;
    background: #366ad3;
    font-size: 14px;
}

#footer .footermenu ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: block;
    overflow: hidden
}

#footer .footermenu ul li {
    padding: 10px 15px;
    display: inline-block
}

#footer .footermenu ul li a {
    color: #FFF
}

.footer-az {
    margin-bottom: 10px;
    margin-top: 30px;
    text-align: center;
    position: relative;
    z-index: 5;
}

.footer-az span.ftaz {
    display: inline-block;
    padding-right: 20px;
    margin-right: 20px;
    border-right: 1px solid rgba(255,255,255,0.3);
    line-height: 1em;
    font-size: 1.4em;
    font-weight: 600
}

.footer-az span.size-s {
    font-size: 13px;
}

.footer-az .az-list {
    font-size: 0;
    list-style: none;
    margin: 0;
    padding: 0;
    margin-top: 18px
}

.footer-az .az-list li {
    margin: 0 10px 10px 0;
    display: inline-block
}

.footer-az .az-list li a {
    font-size: 14px;
    padding: 4px 9px;
    display: inline-block;
    line-height: normal;
    color: #fff!important;
    background: #366ad3;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px
}

.footer-az .az-list li a:hover {
    color: #FFF!important
}

.footercopyright {
    max-width: 1220px;
    padding: 0 20px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    z-index: 1
}

.footercopyright p {
    margin: 0;
    margin-top: 5px;
    font-size: .9em;
    margin-bottom: 0;
    line-height: 20px;
    letter-spacing: .5px;
}

.footercopyright p i {
    font-style: normal;
    color: #FFF
}

.footercopyright .copyright {
    overflow: hidden;
    margin-bottom: 30px;
}

.footercopyright .copyright .footer-logo {
    float: left;
    margin-right: 20px;
    margin-bottom: 40px
}

.footercopyright .copyright .footer-logo img {
    height: 50px;
    width: auto
}

.footercopyright .copyright .txt {
    margin: 0 auto;
    max-width: 700px
}

.footercopyright .copyright.marx {
    padding-top: 20px;
    padding-bottom: 20px
}

.footercopyright .copyright.marx .footer-logo {
    float: none;
    margin: 0;
    margin-bottom: 5px
}

.footercopyright .copyright.marx .txt {
    float: none;
    width: auto;
    text-align: center
}

.footercopyright .copyright.marx .txt p {
    margin-top: 3px
}

.footercopyright .sosmedmrgn {
    margin-top: 30px;
}

.socialbutton {
    text-align: center;
    overflow: hidden
}

.socialbutton a {
    display: inline-block;
    margin: 0 2px;
    font-size: 15px;
    color: rgba(255,255,255,0.7);
    background: #2e2e2e;
    border-radius: 5px;
    width: 30px;
    border: 1px solid #4b4b4b
}

.socialbutton a .fab,.socialbutton a .fas {
    line-height: 28px
}

#footer .socialbutton {
    margin-bottom: 10px
}

#footer .socialbutton a {
    margin: 0 4px
}

.socialbutton a.scfb:hover {
    background: #1877f2!important;
    border-color: #1877f2!important;
    color: #FFF!important
}

.socialbutton a.sctw:hover {
    background: #1da1f2!important;
    border-color: #1da1f2!important;
    color: #FFF!important
}

.socialbutton a.scig:hover {
    background: linear-gradient(45deg,#405de6,#5851db,#833ab4,#c13584,#e1306c,#fd1d1d)!important;
    color: #FFF!important;
    border: 0
}

.socialbutton a.scig:hover .fab {
    line-height: 30px
}

.socialbutton a.scyt:hover {
    background: #c00!important;
    border-color: #c00!important;
    color: #FFF!important
}

.socialbutton a.scdc:hover {
    background: #404eed!important;
    border-color: #404eed!important;
    color: #FFF!important
}

.socialbutton a.scrss:hover {
    background: #ff8d00!important;
    border-color: #ff8d00!important;
    color: #FFF!important
}

.hothome .socialbutton {
    position: absolute;
    right: 15px;
    top: 10px;
    overflow: unset
}

.hothome .socialbutton a {
    width: 26px;
    font-size: 13px;
    background: rgba(0,0,0,0.3);
    border: 0;
    margin: 0 1px
}

.hothome .socialbutton a .fab,.hothome .socialbutton a .fas {
    line-height: 26px
}

.hothome .socialbutton a:hover {
    box-shadow: 0 0 5px rgba(0,0,0,0.3)
}

.hothome .socialbutton a.scig:hover .fab {
    line-height: 26px
}

.scrollToTop {
    z-index: 999;
    padding: 6px 12px;
    text-align: center;
    background: #366ad3;
    border-radius: 50%;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    position: fixed;
    bottom: 45px;
    right: 25px;
    display: none;
}

.scrollToTop:hover {
    color: #FFF
}

.pagination {
    overflow: hidden;
    line-height: normal;
    text-align: center;
    margin: 15px 0 30px
}

.pagination span.page-numbers.dots {
    color: #888;
    display: none
}

.pagination span.page-numbers.current {
    display: inline-block;
    background: #366ad3!important;
    padding: 8px 15px!important;
    margin: 2px;
    color: #DDD;
    border-radius: 3px
}

.pagination a {
    display: inline-block;
    background: #16151d;
    padding: 8px 15px!important;
    margin: 2px;
    border-radius: 3px
}

.hpage {
    clear: both;
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: center;
    overflow: hidden
}

.hpage a {
    display: inline-block;
    background: #366ad3;
    padding: 5px 10px;
    font-size: 13px;
    border-radius: 2px;
    color: #DDD;
    width: 110px;
    text-align: center
}

.hpage a .dashicons {
    width: auto;
    height: auto;
    font-size: 16px
}

.hpage a i {
    font-size: 11px;
}

.cmt {
    padding: 15px
}

.commentx h3 {
    margin: 0;
    margin-bottom: 1.5rem;
    color: #FFF;
    font-size: 16px;
    font-weight: 500
}

.commentx .navigation {
    display: none
}

.comment-list {
    list-style: none;
    padding: 0;
    margin: 0
}

.comment-list>li {
    border: 1px solid #312f40;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px
}

.comment-list .comment-body {
    margin-bottom: 10px;
    overflow: hidden
}

.comment-list .comment-body .comment-author .avatar {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin-right: 10px
}

.comment-list .comment-body .comment-author .fn {
    font-weight: 500;
    margin-top: 2px;
    display: block;
    font-style: normal
}

.comment-list .comment-body .comment-author .says {
    display: none
}

.comment-list .comment-body .comment-meta {
    color: #AAA;
    margin-bottom: 15px
}

.comment-list .comment-body .comment-meta a {
    color: #777;
    font-size: 12px
}

.comment-list .comment-body p {
    line-height: 22px
}

.comment-list .comment-body .reply {
    float: right
}

.comment-list .comment-body .reply a {
    display: block;
    border: 1px solid #366ad3;
    color: #366ad3;
    line-height: 25px;
    padding: 0 15px;
    border-radius: 50px
}

.comment-list .comment-body .reply a:hover {
    background: #366ad3;
    color: #FFF
}

.comment-list .children {
    list-style: none;
    border-left: 1px solid #312f40;
    padding-left: 20px;
    position: relative
}

.comment-list>li:hover {
    box-shadow: 0 0 8px 0 rgba(0,0,0,0.42)
}

.commentx #respond label {
    display: block;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 7px
}

.commentx textarea {
    width: 100%;
    box-sizing: border-box;
    color: #FFF;
    padding: 15px;
    font-family: inherit;
    font-size: 14px;
    background-color: #202020;
    border: 1px solid #343434;
    border-radius: 5px;
}

.commentx #submit,#readerarea .post-password-form input[type=submit] {
    background-color: #366ad3;
    border-color: transparent;
    border-width: 0;
    color: #FFF;
    cursor: pointer;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 8px 15px;
    text-align: center;
    white-space: nowrap;
    font-family: inherit;
    font-size: 14px;
    border-radius: 30px
}

.commentx #respond input[type="text"] {
    color: #FFF;
    padding: 10px;
    font-family: inherit;
    font-size: 15px;
    background-color: #202020;
    border: 1px solid #343434;
    border-radius: 5px;
}

.commentx #respond .comment-form-cookies-consent {
    display: block
}

.commentx #respond .comment-form-cookies-consent label {
    display: inline
}

p.comment-form-url {
    clear: both
}

p.comment-form-url input#url {
    width: 100%
}

p.comment-form-email,p.comment-form-author {
    float: left;
    width: 50%
}

p.comment-form-email input#email {
    width: 100%
}

p.comment-form-author input#author {
    width: 95%
}

.separator a {
    margin-left: 0!important;
    margin-right: 0!important
}

.switch {
    position: relative;
    display: inline-block;
    width: 32px;
    height: 17px;
    top: 0;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0
}

#thememode {
    float: right;
    position: relative;
    margin-top: 16px;
    margin-right: 10px;
    line-height: normal;
}

#thememode .xt {
    text-transform: uppercase;
    font-size: .7rem;
    display: block;
    color: rgba(255,255,255,.5);
    margin-bottom: 2px;
    text-align: center;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255,255,255,0.25);
    -webkit-transition: .4s;
    transition: .4s
}

.slider:before {
    position: absolute;
    content: "\f186";
    font-family: "Font Awesome 5 Free";
    font-size: 11px;
    color: rgb(255 255 255 / 25%);
    line-height: 15px;
    width: 15px;
    text-align: center;
    left: 1px;
    bottom: 1px;
    background-color: #223a65;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
    background-color: rgba(255,255,255,0.25)
}

input:focus + .slider {
    /* box-shadow:0 0 1px #2196F3 */
}

input:checked + .slider:before {
    -webkit-transform: translateX(15px);
    -ms-transform: translateX(15px);
    transform: translateX(15px);
    content: "\f185";
}

.slider.round {
    border-radius: 34px;
    background: rgba(0,0,0,.1)
}

.slider.round:before {
    border-radius: 50%
}

.mainslider {
    position: relative;
    overflow: hidden;
    cursor: grab
}

.mainslider:before {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    display: block;
    width: 100%;
    height: 100%;
    background: rgb(0 0 0 / 18%);
    content: "";
}

.mainslider .limit {
    position: relative;
    background: #222;
    overflow: hidden;
    height: 280px;
}

.mainslider .limit .bigbanner {
    background-position: 50% 35%;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 280px
}

.mainslider .limit img {
    position: absolute;
    top: 0;
    width: 100%;
    height: auto
}

.mainslider .limit:before {
    position: absolute;
    bottom: 0;
    display: block;
    width: 100%;
    height: 25%;
    content: "";
    background-color: rgba(255,255,255,0);
    background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0)),to(#1e2129));
    background-image: -webkit-linear-gradient(top,rgb(255 255 255 / 0%),#1e2129);
    background-image: -moz-linear-gradient(top,rgba(255,255,255,0),#1e2129);
    background-image: -ms-linear-gradient(top,rgba(255,255,255,0),#1e2129);
    background-image: -o-linear-gradient(top,rgba(255,255,255,0),#1e2129);
    background-image: linear-gradient(top,rgba(255,255,255,0),#1e2129);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='rgba(255,255,255,0)',endColorStr='#1e2129');
    z-index: 3;
}

.mainslider .limit .sliderinfo {
    position: absolute;
    bottom: 20%;
    z-index: 2;
    width: 100%;
    font-family: 'Poppins',sans-serif;
}

.mainslider .limit .sliderinfo .sliderinfolimit {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.mainslider .limit .sliderinfo .sliderinfolimit span.name {
    color: #FFF;
    font-weight: 400;
    font-size: 25px;
    margin-bottom: 10px;
    display: block;
    max-width: 700px;
    line-height: normal;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.mainslider .limit .sliderinfo .sliderinfolimit a.name:hover {
    color: #ccc
}

.mainslider .limit .sliderinfo .sliderinfolimit .meta {
    margin-bottom: 8px;
    box-shadow: none;
}

.mainslider .limit .sliderinfo .sliderinfolimit .meta .quality {
    display: inline-block;
    padding: 2px 7px;
    background: #ffffff;
    color: #333;
    vertical-align: top;
    font-weight: 700;
    font-size: 11px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    margin-right: 10px;
    text-transform: uppercase;
}

.mainslider .limit .sliderinfo .sliderinfolimit .meta span.text {
    margin-right: 15px;
    color: #FFF;
    font-weight: 300;
    font-size: 13px
}

.mainslider .limit .sliderinfo .sliderinfolimit .meta span.text a {
    color: #FFF;
    font-weight: 400
}

.mainslider .limit .sliderinfo .sliderinfolimit .desc {
    color: #FFF;
    max-width: 520px;
    max-height: 42px;
    overflow: hidden;
    line-height: 19px;
    font-size: 13px;
    font-weight: 300
}

.mainslider .limit .sliderinfo .sliderinfolimit .desc p {
    margin: 0
}

.big-slider .paging {
    position: absolute;
    overflow: hidden;
    bottom: 35px;
    height: 16px;
    width: 100%;
}

.big-slider .paging .centerpaging {
    max-width: 1180px;
    margin: 0 auto;
    position: relative;
}

.big-slider .paging .centerpaging .swiper-pagination {
    z-index: 5;
    right: 0;
}

.big-slider .paging .centerpaging .swiper-pagination span.swiper-pagination-bullet {
    margin: 0 4px;
    width: 10px;
    height: 10px;
    background: #fff;
    opacity: .3
}

.big-slider .paging .centerpaging .swiper-pagination span.swiper-pagination-bullet-active {
    background: #366ad3;
    opacity: 1;
    cursor: pointer
}

.mainslider .limit .sliderinfo .sliderinfolimit span.name, .mainslider .limit .sliderinfo .sliderinfolimit .meta span.text, .mainslider .limit .sliderinfo .sliderinfolimit .desc {
    text-shadow: 0 1px 10px #000;
}

.home-genres {
    position: relative;
    max-width: 1080px;
    margin: 0 auto;
    background: #f90;
    border-radius: 6px;
    padding: 0 40px;
    padding-left: 30px;
    margin-top: -25px;
    z-index: 1;
    overflow: hidden;
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    font-weight: 500;
}

.home-genres .genre-listx {
    width: 80%;
    text-overflow: initial;
    white-space: nowrap;
    overflow: hidden;
    float: left
}

.home-genres .genre-listx a {
    line-height: 50px;
    color: rgba(0,0,0,0.7);
    padding: 0 20px;
    font-size: 16px;
    display: inline-block;
}

.home-genres .alman {
    float: right;
    margin-top: 15px
}

.home-genres .alman a {
    background: #333;
    color: #f90;
    padding: 8px 30px;
    border-radius: 6px;
}

.slidernom2 .mainslider .limit {
    height: 400px;
}

.slidernom2 .mainslider .limit .bigbanner {
    min-height: 400px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
    font-weight: 500;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    white-space: normal;
    margin-bottom: 15px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .desc {
    font-size: 15px;
    line-height: 160%;
    max-height: 50px;
}


.slidernom2 .meta .metas-slider-genres {
    margin-top: 5px;
    overflow: hidden;
    max-height: 56px;
}

.slidernom2 .meta .metas-slider-genres a {
    display: inline-block;
    margin-right: 2px;
    margin-bottom: 5px;
    background: #222;
    color: #AAA;
    padding: 0 10px;
    font-size: 13px;
    line-height: 23px;
    border-radius: 3px;
}
.slidernom2 .meta .metas-slider-genres a:hover {
    background: rgba(255,255,255,0.8);
    color: #111;
}

.slidernom2 .mainslider .metas-slider-score, .slidernom2 .mainslider .metas-slider-type {
    display: inline-block;
    margin-right: 10px;
    overflow: hidden;
    height: 22px;
    border-radius: 3px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-score span, .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-type span {
    float: left;
    margin-right: 0;
    padding: 0 5px;
    background: #333;
    line-height: 22px;
    font-size: 12px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-score .meta-score-values {
    background: #ffc107;
    color: #111;
    text-shadow: none;
    padding: 0 10px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-type .meta-type-values {
    background: #366ad3;
    text-shadow: none;
    padding: 0 10px;
    color: #FFF;
}

.slidernom2 .mainslider .limit .sliderinfo {bottom: 0;top: 45%;-ms-transform: translateY(-50%);transform: translateY(-50%);z-index: 4;}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit {
    margin: 0;
    max-width: 500px;
    margin-left: 50px;
}

.slidernom2 .mainslider .limit:before {
    height: 100%;
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 15%, rgba(0,0,0,0) 100%);
}

.slidernom2 .mainslider:before {
    background: none;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading {
    margin-top: 10px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading span {
    display: inline-block;
    font-weight: 300;
    font-size: 17px;
    padding: 7px 25px;
    color: #FFF;
    border: 2px solid #555;
    border-radius: 20px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading span:hover {
    background: #366ad3;
    border-color: #366ad3;
    color: #FFF;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading span i {
    margin-left: 5px;
}

.slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .desc p {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

.home-genres.gennom2 {
    background: #16151d;
    border: 2px solid #f90;
}

.home-genres.gennom2 .alman a {
    background: #f90;
    color: #16151d;
}

.home-genres.gennom2 .genre-listx a {
    color: #828282;
    text-transform: none;
    font-weight: 500;
}

.home-genres.gennom2 .genre-listx a:hover {
    color: #FFF;
}

.wrapernum3 {
    max-width: 1220px;
    margin: 0 auto;
    margin-top: 30px;
    padding: 0 20px;
}

.slidernom3 {
}

.slidernom3 .mainslider .limit {
    height: 350px;
    background: none;
}

.slidernom3 .mainslider .limit .bigbanner {
    min-height: 350px;
    filter: blur(8px);
}

.slidernom3 .mainslider .limit:before {
    display: none;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
    font-weight: 600;
    font-size: 26px;
    text-shadow: none;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
    max-width: 48%;
    margin: 0;
    margin-left: 50px;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .slidlc {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 3px;
    color: #FFF;
}

.slidernom3 .paging {
    bottom: unset;
    bottom: 20px;
    right: 30px;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .desc {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 160%;
    max-height: 65px;
    text-shadow: none;
}

.slidernom3 .mainslider .limit .sliderinfo {
    bottom: 0;
    top: 44%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 4;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta {
    color: #FFF;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta>div {
    padding-right: 20px;
    height: 25px;
    overflow: hidden;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a {
    font-size: 11px;
    display: inline-block;
    padding: 2px 10px;
    border-radius: 5px;
    color: #FFF;
    border: 1px solid rgba(255,255,255, 0.6);
    margin-bottom: 4px;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a:hover {
    background: #FFF;
    color: #333;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .meta-type-values {
    font-size: 12px;
    font-weight: 300;
    background: #366ad3;
    display: inline-block;
    padding: 4px 10px;
    border-radius: 5px;
    text-align: center;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .meta-type-values.Manhwa, .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-type .meta-type-values.Manhwa {
    background: #a12e24;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .meta-type-values.Manhua, .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-type .meta-type-values.Manhua {
    background: #009688;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .meta-type-values.Comic, .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-type .meta-type-values.Comic {
    background: #7c3db5;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .meta-score-values {
    font-size: 12px;
    background: #e9b107;
    color: #111;
    font-weight: bold;
    display: inline-block;
    padding: 3px 10px;
    border-radius: 5px;
    text-align: center;
}

.slidernom3 .mainslider:before {
    background: #221630;
    opacity: .6;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading {
    margin-top: 15px;
}

.slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading span {
    display: inline-block;
    background: #ffd702;
    color: #111;
    font-weight: 500;
    font-size: 14px;
    line-height: 35px;
    padding: 0 20px;
    border-radius: 4px;
}

.slidernom3 .mainslider .slidtrithumb {
    position: absolute;
    top: -58px;
    right: 12%;
    z-index: 9;
    width: 390px;
    height: 538px;
    overflow: hidden;
    transform: rotate(12deg);
    box-shadow: 0 30px 30px rgba(0,0,0,.2);
}

.gennom3 {
    margin-top: 10px;
    max-width: 1180px;
}

.home-genres.gennom1 a:hover, .home-genres.gennom3  a:hover{
    color: #FFFFFF;
}

#series-history ul li .eph-num span.chapternum {
    float: left
}

#series-history ul li .eph-num span.chapterdate {
    float: right
}

#series-history .clstyle li .eph-num {
    width: 100%
}

#readerarea .post-password-form {
    padding: 20px;
    line-height: 160%;
    display: block;
    text-align: center;
    margin: 20px auto;
    color: #fff;
    max-width: 560px;
    background: #222
}

#readerarea .post-password-form p {
    margin: 5px 0
}

#readerarea .post-password-form label {
    display: block;
    max-width: 300px;
    margin: 10px auto;
    text-align: center;
    font-size: 0;
    line-height: 0
}

#readerarea .post-password-form label input[type=password] {
    display: block;
    width: 100%;
    line-height: 21px;
    background: #16151d;
    border: 1px solid #3b3b3b;
    padding: 5px 10px;
    border-radius: 3px;
    color: #DDD;
    text-align: center;
    font-size: 12px
}

.tsfront {
    padding: 0 20px;
    margin: 0;
    position: relative;
}

.tsfront .headfront {
    padding: 80px 0 30px;
    position: relative;
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.tsfront .headfront .fsearch {
    margin-bottom: 20px;
    position: relative;
}

.tsfront .headfront .fsearch input#s {
    width: 100%;
    background: #222;
    border: 0;
    font-family: inherit;
    border-radius: 10px;
    line-height: 60px;
    padding: 0 15px;
    font-size: 18px;
    color: #DDD;
    box-shadow: 0 3px 3px rgba(0,0,0,.05);
}

.tsfront .headfront .fsearch #submit {
    border: 0;
    background: #366ad3;
    color: #FFF;
    width: 90px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    font-size: 20px;
    line-height: 58px;
    position: absolute;
    right: 0;
    cursor: pointer;
}

.tsfront .headfront .fdesc {
    color: #aaa;
    margin-bottom: 20px;
}

.tsfront .headfront .fhomebutton a {
    font-size: 18px;
    padding: 12px 40px;
    color: #FFF;
    display: inline-block;
    border-radius: 5px;
    background: #366ad3;
}

.tsfront .frontcontainer {
    line-height: 160%;
    margin-bottom: 50px;
}

.tsfront .frontcontainer h2,.tsfront .frontcontainer strong {
    color: #DDD;
}

.tsfront .frontcontainer h2 {
    font-weight: 600;
}

.tsfront .frontcontainer ul li {
    margin-bottom: 10px;
}

.tsfront .frontcontainer .pagination {
    display: none;
}

.tsfront .frontcontainer .stylesven .sveninner .svenbottom .svenmetabot .svenchapters li {
    margin-bottom: 0;
}

.tsfront .frontcontainer .bs.stylefiv .bsx .chfiv {
    line-height: 1.5;
}

@media only screen and (max-width: 1096px) {
    .home-genres {
        border-radius:0
    }
    .gennom3 {
        border-radius: 10px;
    }
    .home-genres.gennom2 {
        border-right: 0;
        border-left: 0;
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
        margin-left: 25px;
    }
    .slidernom3 .mainslider .slidtrithumb {
        right: 5%;
    }
}

@media only screen and (max-width: 1080px) {
    .listupd .utao {
        width:50%
    }
}

@media only screen and (max-width: 1015px) {
    header {
        margin-right:10px
    }

    .searchx {
        width: 200px
    }

    #main-menu ul li {
        margin: 0
    }
}

@media only screen and (max-width: 1000px) {
    .full .bs {
        width:16.666666%
    }
}

@media only screen and (max-width: 978px) {
    .chapterbody .bs {
        width:20%
    }

    .chapterbody .bs:nth-child(6),.chapterbody .bs:nth-child(7) {
        display: none
    }

    #top-menu li a {
        color: #FFF
    }
}

@media only screen and (max-width: 950px) {
    .bxcl ul li {
        width:33.3333333%
    }
    .slidernom2 .mainslider .limit .sliderinfo {
        top: unset;
        bottom: 10%;
        transform: none;
    }

    .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit {
        margin: 0 auto;
        max-width: 100%;
        padding: 0 50px;
        text-align: center;
    }

    .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .desc {
        max-width: 100%;
    }

    .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
        max-width: 100%;
    }

    .slidernom2 .meta .metas-slider-genres {
        max-height: 28px;
    }

    .slidernom2 .mainslider .limit:before {
        background: linear-gradient(0deg, rgba(0,0,0,1) 10%, rgba(0,0,0,0) 100%) !important;
    }

    .big-slider .paging {
        display: none;
    }

    .home-genres.gennom2 {
        margin: 0;
    }

    .slidernom3 .mainslider .slidtrithumb {
        right: 0;
        top: 0;
        transform: none;
        width: 250px;
    }

    .slidernom3 .mainslider .slidtrithumb img {
        min-height: 350px;
    }
    .bs.stylefiv.stylesix {
        width: 25%;
    }
}

@media only screen and (max-width: 900px) {
    #sidebar .section ul.genre:before,#sidebar .section ul.genre:after {
        display:none
    }

    #sidebar .section ul.genre li {
        float: left;
        width: 50%
    }

    .loop {
        width: 100%!important;
        float: none!important
    }

    .slidtop .trending {
        display: none
    }

    .listupd .utao.stylegg .uta .luf ul {
        display: block;
    }

    .listupd .utao.stylegg .uta .luf ul li {
        flex: unset;
    }

    .listupd .utao.stylegg .uta .luf ul li:nth-child(2) {
        margin-left: 0;
    }

    .listupd .utao.stylegg .uta .luf ul li span {
        text-align: left;
    }

    .listupd .utao.stylegg .uta .luf ul li a {
        padding-left: 10px;
    }

    .listupd .utao.stylegg .uta .luf ul li span.eggtime {
        display: none;
    }

    .listupd .utao.stylegg .uta .luf .statusind {
        display: none;
    }
}

@media only screen and (max-width: 890px) {
    .shme {
        display:block;
        float: left;
        font-size: 24px;
        margin-top: 10px;
        margin-right: 10px;
        color: #FFF;
        cursor: pointer
    }

    #main-menu {
        display: none
    }

    .shwx {
        display: block!important
    }

    .logos {
        width: auto
    }

    header {
        margin: 3px !important;
    }

    .logos img {
        max-height: 40px !important;
    }

    .searchx {
        margin: 0;
        margin-top: 9px;
        margin-bottom: 9px;
    }

    #thememode {
        margin-top: 9px;
    }

    #main-menu.shwx {
        position: absolute;
        top: 52px;
        left: 0;
        z-index: 3;
        width: 100%;
        height: 100%;
        background: #222
    }

    #main-menu.shwx ul {
        float: none;
        margin: 0 20px;
        margin-top: 15px
    }

    #main-menu.shwx ul li {
        float: none
    }

    #main-menu.shwx ul li a {
        text-align: left;
        height: auto !important;
        line-height: 36px !important;
        border-radius: 5px;
        font-weight: 400;
        font-size: 15px !important;
        color: #d3d3d3;
        padding: 0 !important;
    }

    #main-menu.shwx ul li a:hover {
        color: #FFF
    }

    #main-menu.shwx ul li ul {
        top: unset !important;
        position: relative;
        display: block;
        min-width: unset;
        margin: 0;
        background: #2c2c2c;
        padding: 5px 15px;
    }

    #main-menu.shwx ul li ul li a {
        font-size: 14px
    }

    #main-menu.shwx ul li ul li a:hover {
        background: none
    }

    .th.headerni .searchx {
        margin-top: 14px
    }

    .th.headerni #thememode .xt {
        display: block
    }

    .th.headerni #thememode {
        margin-top: 9px
    }

    div#live-search_sb,.th.headerni ~ div#live-search_sb {
        top: 52px!important
    }
}

@media only screen and (max-width: 880px) {
    .postbody,#sidebar {
        float:none;
        width: auto
    }

    #sidebar .section {
        margin-left: 0;
        margin-bottom: 5px
    }

    .quickfilter .filters .filter {
        position: static
    }

    .quickfilter .filters .filter ul,.quickfilter .filters .filter ul.dropdown-menu.c1 {
        right: 0;
        left: 0;
        top: auto;
        width: auto;
        max-width: unset
    }

    .quickfilter .filters .filter ul.dropdown-menu.c1 li {
        float: left;
        width: 25%
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a {
        display: none;
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a:nth-child(1), .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a:nth-child(2), .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-genres-values a:nth-child(3) {
        display: inline-block;
        margin-right: 2px;
    }
	.listupd .utao.stylegg .uta .luf ul li span.eggtime{display:block;float:right;margin-right:5px}
	.listupd .utao.stylegg .uta .luf ul li span.eggchap{float:left}
}

@media only screen and (max-width: 850px) {
    .full .bs {
        width:20%
    }
}

@media only screen and (max-width: 800px) {
    .bloglist .blogbox {
        width:50%
    }

    .bigblogt {
        padding: 15px;
        padding-bottom: 0
    }

    .postbody,#sidebar {
        float: none;
        width: auto
    }

    #sidebar .section {
        margin-left: 0
    }

    .pd-expand.sxp {
        display: none
    }

    .megavid.xp {
        position: relative;
        top: 0;
        width: 100%
    }

    div#live-search_sb {
        width: 100%!important;
        left: 0!important;
        top: 52px!important;
        right: 0!important;
    }

    #live-search_results {
        box-shadow: none;
        border-radius: 0
    }

    #main-menu {
        display: none;
        position: absolute;
        top: 50px;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(28,28,28,0.95);
        height: 100%;
        overflow: auto;
        z-index: 999;
        width: auto;
        margin: 0
    }

    #main-menu ul li {
        float: none;
        position: relative;
        margin: 0
    }

    #main-menu ul li a,#main-menu ul li ul li a {
        text-align: left;
        color: #FFF
    }

    #main-menu ul {
        float: none
    }

    #main-menu ul li ul {
        display: block;
        position: relative;
        margin: 0;
        top: unset;
        min-width: unset;
        border-radius: 0;
        float: none;
        background: rgba(0,0,0,.32)
    }

    .wrapper {
        margin: 0
    }

    .loop {
        margin-bottom: 0
    }

    .bixbox {
        border-radius: 0;
        margin-bottom: 5px
    }

    .megavid,.meta {
        margin-bottom: 5px
    }

    .icol.expand {
        display: none
    }

    .headpost,#content.readercontent .bixbox,#content.readercontent .chdesc,.chnav,#content.readercontent .chaptertags {
        margin-left: 20px;
        margin-right: 20px
    }

    .footer-az {
        display: none
    }

    .footercopyright .copyright {
        overflow: hidden;
    }

    .footercopyright .copyright .footer-logo {
        margin: 0;
        float: none
    }

    .footercopyright .copyright .txt {
        float: none;
        width: auto;
        text-align: center;
        margin-top: 5px
    }

    .footercopyright p {
        margin-top: 0
    }

    .footercopyright .ftnaru {
        display: none
    }

    .chnav.ctop .slc {
        float: none;
        margin: 0;
        display: block;
        margin-bottom: 10px
    }

    .chnav .slc #chapter {
        width: 100%
    }

    #readerarea.rdminimal {
        margin: 10px 20px
    }

    .main-info .info-left {
        float: none !important;
        margin: 0px 20px !important;
        margin-bottom: 15px;
        width: auto;
    }

    .main-info .info-left .thumb {
        max-width: 200px;
        text-align: center;
        margin: 0 auto;
        border: 5px solid #16151d;
        border-radius: 5px;
        margin-bottom: 10px
    }

    .main-info .info-left #mobiletitle #titlemove {
        text-align: center;
        color: #FFF;
        margin-top: 10px;
        margin-bottom: 15px
    }

    .main-info .info-left #mobiletitle #titlemove .entry-title {
        font-size: 17px;
        font-weight: 500;
        margin: 0;
        margin-bottom: 3px
    }

    .main-info .info-left #mobiletitle #titlemove .alternative {
        font-size: 12px;
        color: #999;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2
    }

    .manga-info .bixbox,.seriestucon {
        margin: 0 20px;
        margin-bottom: 10px
    }

    .main-info .info-left .rating.bixbox,.main-info .info-left .tsinfo.bixbox {
        margin-right: 0;
        margin-left: 0
    }

    .alr {
        margin-right: 20px;
        margin-left: 20px
    }

    #footer .socialbutton {
        margin-top: 25px
    }

    .manga-info .seriestucon .seriestucont .seriestucontl .rating.bixbox,#content .seriestere .seriestucontent .seriestucontl .rating {
        margin-right: 0;
        margin-left: 0
    }
}

@media only screen and (max-width: 760px) {
    #content .seriestere .seriestuheader h1 {
        text-align:center
    }

    #content .seriestere .seriestuheader .seriestualt {
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2
    }

    #content .seriestere .seriestucontent .seriestucontl {
        float: none;
        margin: 0 auto
    }
    .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit .start-reading {
        display: none;
    }

    .slidernom2 .mainslider .limit .sliderinfo {
        bottom: 10%;
    }

    .big-slider .paging {
        right: 15px;
        bottom: 15px;
    }
}

@media only screen and (max-width: 750px) {
    .home-genres {
        display: none;
    }
    .wrapernum3 {
        margin: 0;
        padding: 0;
    }
    .slidernom3 {
        border-radius: 0;
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
        padding: 0 30px;
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta {
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .meta .metas-slider-genres {
        display: none;
    }

    .slidernom3 .mainslider .limit {
        height: 280px;
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
        font-size: 20px;
    }

    .slidernom3 .mainslider .slidtrithumb img {
        min-height: 215px;
    }

    .slidernom3 .mainslider .slidtrithumb {
        width: 155px;
        top: 33px;
        right: 35px;
        height: 215px;
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .slidlc {
        font-size: 15px;
    }
}

@media only screen and (max-width: 715px) {
    ul.taxindex li {
        width:33.3333333%
    }

    .chapterbody .bs {
        width: 25%
    }

    .chapterbody .bs:nth-child(5) {
        display: none
    }

    .bs.stylefor,.bs.stylefiv {
        width: 33.333333%
    }

    .mainslider .limit .sliderinfo .sliderinfolimit span.name {
        font-size: 17px;
        margin-bottom: 5px;
        font-weight: 400
    }

    .mainslider .limit .sliderinfo .sliderinfolimit .desc {
        display: none
    }

    .mainslider .limit .sliderinfo {
        bottom: 10%
    }

    .mainslider .limit {
        height: 180px
    }

    .mainslider .limit .sliderinfo .sliderinfolimit .meta .quality {
        margin-right: 5px;
        text-shadow: none
    }

    .mainslider .limit .sliderinfo .sliderinfolimit .meta span.text {
        margin-right: 5px
    }

    .mainslider .limit .sliderinfo .sliderinfolimit {
        text-shadow: 0 2px 4px #000
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
        text-shadow: none;
    }
    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .desc {
        display: block;
    }
}

@media only screen and (max-width: 695px) {
    .slide-item.full .slide-content {
        padding:20px!important
    }

    .iconx {
        line-height: 4px
    }

    .bigcontent {
        padding: 10px
    }

    .bigcontent.nobigcover .thumbook {
        margin-top: 10px
    }

    .bigcontent .thumb {
        margin: 0 auto;
        margin-bottom: 20px;
        max-width: 110px;
        width: auto;
        height: auto;
        position: relative;
        top: auto;
        left: auto;
        float: none
    }

    .bigcontent .infox {
        overflow: hidden;
        padding-left: 0
    }

    .bigcontent .infox h1,.bigcontent .infox .alter {
        text-align: center;
        margin-bottom: 10px
    }

    .bigcontent .rt {
        position: relative;
        top: auto;
        right: auto;
        width: 100%;
        overflow: hidden
    }

    .bigcontent .thumbook {
        position: relative;
        left: auto;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
        margin-top: -50px;
        margin-bottom: 20px;
        top: 0
    }

    .socialts {
        text-align: center
    }

    .bigcontent .infox .flex-wrap .fmed {
        width: 100%;
        margin-bottom: 10px
    }

    .bigcontent .infox .flex-wrap {
        margin: 0
    }

	.stylesven .sveninner .sventop .sveninfo .svendetop .svenmeta:nth-child(3) {
		display: none;
	}
}

@media only screen and (max-width: 670px) {
    .quickfilter .filters .filter ul li,.quickfilter .filters .filter ul.dropdown-menu.c1 li,.advancedsearch .quickfilter .filters .filter ul li {
        width:33.3333333% !important
    }

    .advancedsearch .quickfilter .filters .filter {
        width: 50%
    }

    .advancedsearch .quickfilter .filters .filter.submit {
        width: 100%
    }

    .bs,.full.seriestu .bs {
        float: left;
        width: 33.333333%
    }

    .series-gen .tab-pane.active .bs:nth-child(4), .series-gen .tab-pane.active .bs:nth-child(5) {
        display: none
    }

    .listupd .utao.styletwo {
        float: none;
        width: auto
    }

    #content.mangatere .terebody {
        padding-top: 100px
    }

    .quickfilter .filters .filter.open ul {
        overflow-y: scroll;
    }

    .full.seriestu .bs:nth-child(4), .full.seriestu .bs:nth-child(5) {
        display: none;
    }

    .stylesven .sveninner .sventop .sveninfo .svendetop {
        display: none;
    }

    .stylesven .sveninner .svenbottom {
        margin-top: 5px;
    }

    .stylesven .sveninner .sventop {
        overflow: unset;
        margin: 0;
    }

    .stylesven .sveninner {
        overflow: hidden;
        height: 128px;
    }

    .stylesven .sveninner .svenbottom .svenmetabot .statusind {
        display: none;
    }

    .stylesven .sveninner .svenbottom .svenmetabot .svenchapters {float: none;overflow: hidden;list-style: disc;padding-left: 16px;}

    .stylesven .sveninner .svenbottom .svenmetabot .svenchapters li {
        float: none;
        margin: 0;
        margin-bottom: 5px;
    }

    .stylesven .sveninner .sventop .sventhumb {
        height: 80px;
    }

	.stylesven .sveninner .svenbottom .svenmetabot .svenchapters li span {
		display: block;
		float: right;
		font-size: 11px;
		font-weight: normal;
		color: #7e7e7e;
	}
}

@media only screen and (max-width: 650px) {
    .slidernom3 .mainslider .slidtrithumb {
        right: unset;
        left: 20px;
        width: 120px;
        height: 170px;
    }

    .slidernom3 .mainslider .slidtrithumb img {
        min-height: auto;
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
        max-width: unset;
        margin-left: 135px;
    }

    .slidlc {}

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .slidlc {
        display: none;
    }

    .slidernom3 .mainslider .limit .sliderinfo {
    }

    .slidernom3 .mainslider .limit {
        height: 245px;
    }

    .full .bs {
        width:25%
    }

    .side.infomanga .imgprop {
        float: none;
        margin-right: 0;
        display: block
    }

    .side.infomanga .imgprop img {
        float: none;
        max-width: 190px;
        display: block;
        margin: 0 auto;
        margin-bottom: 10px;
        height: auto
    }

    .side.infomanga table.listinfo tr th {
        text-align: right
    }

    .genx {
        width: 50%
    }

    .kln a.col {
        width: auto;
        display: block;
        padding: 2px 0;
        float: none
    }

    .klnrec .mini {
        display: none
    }

    .klnrec .kln {
        float: none;
        width: auto;
        margin-right: 0
    }

    .klnrec .kln img,.klnrec .mini img {
        width: auto
    }

    .gnr {
        display: inline-block
    }

    tr.gnrx {
        display: none
    }

    tr.gnrx.shwgx {
        display: block
    }

    #readerarea img {
        border: 0
    }

    #teaser1,#teaser2 {
        display: none
    }

    .chnav.ctop .navrig {
        display: block;
        overflow: hidden;
        margin-bottom: 10px
    }

    .chnav.ctop .navrig .mirror,.chnav.ctop .navrig .readingmode {
        margin: 0;
        float: left;
        display: block;
        width: 50%
    }

    .chnav.ctop .navrig select {
        width: 100%
    }

    .chnav.ctop .navrig select#mirror {
        width: 97%
    }

    .chnav.ctop .navlef {
        display: block;
        overflow: hidden
    }

    .chnav.ctop .navlef .dlx {
        float: none;
        display: block;
        margin: 0;
        text-align: center;
        overflow: hidden
    }

    .chnav.ctop .navlef .dlx a {
        margin: 0
    }

    .chnav.ctop .navlef .amob.nodlx {
        display: block;
        overflow: hidden
    }

    .chnav.ctop .navlef .amob.nodlx .pagedsel {
        float: none;
        display: block;
        margin: 0;
        overflow: hidden
    }

    .chnav.ctop .navlef .amob.nodlx .pagedsel select {
        width: 100%
    }

    .chnav.ctop.nomirror .slc {
        float: left;
        width: 50%
    }

    .chnav.ctop.nomirror .slc .nvx {
        margin-right: 5px
    }

    .chnav.ctop.nomirror .navrig {
        width: 50%
    }

    .chnav.ctop.nomirror .navrig .readingmode {
        float: none;
        width: auto
    }

    .chnav.ctop.nomirror .navlef {
        clear: both
    }

    .main-info .info-left .thumb {
        max-width: 100px
    }

    .bigcover {
        height: 170px
    }

    .manga-info .seriestucon .seriestucont .seriestucontl .rating.bixbox {
        margin-right: 0;
        margin-left: 0
    }

    .seriestucon .seriestucont .seriestucontl {
        float: none;
        width: 100%;
        max-width: 200px;
        text-align: center;
        margin: 0 auto;
        margin-bottom: 20px
    }

    .seriestucon .seriestuhead .lastend {
        text-align: center
    }

    .bs.stylefiv.stylesix {
        width: 33.333333%;
    }
}

@media only screen and (max-width: 600px) {
    #wpadminbar {
        position:fixed!important
    }

    #content .seriestere .seriestucontent .seriestucontentr tbody {
        flex: none;
        display: block
    }

    #content .seriestere .seriestucontent .seriestucontentr tr {
        width: 100%
    }

    #content .seriestere .seriestucontent .seriestucontentr tr td:nth-child(1) {
        -ms-flex: 0 0 35%;
        flex: 0 0 35%;
        max-width: 35%
    }
}

@media only screen and (max-width: 590px) {
    .sosmed {
        clear:both;
        position: relative;
        display: block;
        overflow: hidden;
        margin-top: 15px;
        top: 0;
        text-align: center;
        width: 100%;
        bottom: 0
    }

    .mobius {
        overflow: hidden;
        display: block
    }

    .iconx {
        float: right
    }

    .iconx .icol {
        margin: 0
    }

    .iconx .icol span {
        display: none
    }

    .naveps {
        float: none;
        padding: 0;
        margin: -15px;
        margin-top: 10px;
        overflow: hidden;
        position: relative;
        height: 38px
    }

    .naveps .nvs {
        display: block;
        width: 33.33333333%;
        text-align: center;
        min-height: 1px
    }

    .naveps .nvs.nvsc {
        margin: 0
    }

    .naveps .nvs a {
        border-radius: 0;
        padding: 8px 0
    }

    .slide-content .title a {
        font-size: 16px
    }

    .blogbox .boxlist .bma {
        width: 50%
    }

    .blogbox.homeblog .boxlist .bma:last-child {
        display: none
    }

    .series-gen .nav-tabs li {
        width: 33.333333%
    }

    .series-gen .nav-tabs li:nth-child(3),.series-gen .nav-tabs li:nth-child(4) {
        display: none
    }
}

@media only screen and (max-width: 570px) {
    .postbody .ldr .outbx:last-child {
        display:none
    }

    .postbody .ldr .outbx {
        float: left;
        width: 25%
    }

    .archx .arche .inx span b {
        width: auto;
        float: none
    }

    .soralist ul li {
        margin-left: 15px;
        float: none;
        line-height: 21px;
        width: auto
    }

    .genres li {
        width: 43%
    }

    ul.taxindex li,.bxcl ul li,.chapterbody .bs {
        width: 50%
    }

    .searchx {
        display: none
    }

    .srcmob {
        display: block!important;
        float: right;
        font-size: 14px;
        margin-top: 9px;
        color: #FFF;
        cursor: pointer;
        border-radius: 50%;
        width: 35px;
        text-align: center;
        background: rgba(0,0,0,.1);
    }

    .srcmob .fas {
        line-height: 35px
    }

    .searchx.minmbx {
        display: block;
        top: 0;
        left: 0;
        margin-top: 8px !important;
        width: 100% !important;
        position: absolute;
    }

    .searchx.minmbx #form {
        margin-right: 10px;
        margin-left: 10px;
        z-index: 1
    }

    .srcmob.srccls {
        position: absolute;
        top: 0;
        right: 8px;
        width: auto;
        margin: 0;
        font-size: 20px;
        color: #AAA
    }

    .searchx #form #submit {
        display: none
    }

    .th.headerni .searchx #form #s {
        background: #17151b;
        height: 34px
    }

    .stylesven {
        float:none;
        width:100%;
    }

    .stylesven .sveninner {
        height: auto;
    }
}

@media only screen and (max-width: 550px) {
    .full .bs {
        width:33.333333%
    }
    .slidernom2 .mainslider .limit {
        height: 275px;
    }

    .slidernom2 .mainslider .limit .bigbanner {
        min-height: 275px;
    }

    .slidernom2 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
        font-weight: 400;
    }
    .listupd.popularslider .popconslide .bs {
        flex: 1 0 140px;
    }
}

@media only screen and (max-width: 500px) {
    .slidernom3 .mainslider .slidtrithumb {width: 70px;height: 95px;border-radius: 10px;top: 38px;}

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit {
        margin-left: 80px;
    }

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit .desc {max-height: 48px;}

    .slidernom3 .mainslider .limit .sliderinfo .sliderinfolimit span.name {
        font-size: 18px;
    }

    .slidernom3 .mainslider .limit {
        height: 200px;
    }

    .slidernom3 .mainslider .slidtrithumb img {
        min-height: 95px;
    }

    .postbody .ldr .outbx {
        float:left;
        width: 50%
    }

    .bs.stylefiv {
        width: 50%;
    }

    .listupd .lexa .thumb {
        float: none;
        overflow: hidden;
        width: 100%;
        max-height: unset;
        margin-right: 0
    }

    .listupd .lexa .thumb img {
        max-width: unset;
        height: auto;
        width: 100%
    }

    .bigcontent .infox .spe span {
        width: auto;
        float: none;
        display: block
    }

    .listupd .utao {
        float: none;
        width: auto;
        position: relative
    }

    .quickfilter .filters .filter ul li,.quickfilter .filters .filter ul.dropdown-menu.c1 li,.advancedsearch .quickfilter .filters .filter ul li {
        width: 50% !important
    }

    .searchx {
        width: 74%
    }

    .searchx.topcon {
        width: 67%
    }

    .chnav.ctop .navlef .amob {
        display: block;
        overflow: hidden;
        margin-bottom: 10px
    }

    .chnav.ctop .navlef .amob .pagedsel {
        float: none;
        display: block;
        margin: 0
    }

    .chnav.ctop .navlef .amob .pagedsel select {
        width: 100%
    }

    .bs.stylefor {
        width: 50%
    }

    .bxcl ul li .eph-num span.chapternum {
        text-overflow: unset;
        white-space: unset
    }

    .bxcl .clstyle li .eph-num {
        width: 80%
    }
}

@media only screen and (max-width: 450px) {
    .series-gen .tab-pane.active .bs:nth-child(4),.full.seriestu .bs:nth-child(5) {
        display:none
    }

    .hpage a {
        width: 90px
    }

    .advancedsearch .quickfilter .filters .filter,.full.seriestu .bs {
        width: 50%
    }

    .chnav.cbot .slc {
        float: none;
        margin: 0;
        margin-bottom: 10px;
        overflow: hidden;
        display: block
    }

    .chnav.cbot .amob {
        display: block;
        overflow: hidden
    }

    .chnav.cbot .amob .pagedsel {
        float: none;
        margin: 0;
        display: block;
        overflow: hidden
    }

    .chnav.cbot .amob .pagedsel select {
        width: 100%
    }

    .readingnav.rnavbot .readingnavbot .readingoption .mirror {
        display: none
    }

    .imptdt i,.imptdt a {
        float: none;
        display: block;
        margin-top: 2px
    }

    .full.seriestu .bs:nth-child(3),.full.seriestu .bs:nth-child(4){
        display: block;
    }

    .bs.stylefiv.stylesix {
        width: 50%;
    }
}

@media only screen and (max-width: 380px) {
    .listupd .utao.styletwo .uta .luf ul li span{
        display:none;
    }
    .listupd .utao.stylegg .uta .luf ul li span.eggchap{
        display:block;
    }
}

@media only screen and (max-width: 320px) {
    #series-history ul li .eph-num span.chapternum,#series-history ul li .eph-num span.chapterdate {
        float:none
    }

    ul.taxindex li,.bxcl ul li {
        width: auto;
        float: none
    }
}

@media only screen and (max-width: 300px) {
    .bs,.full .bs,.full.seriestu .bs {
        float:left;
        width: 50%
    }

    .series-gen .tab-pane.active .bs:nth-child(3),.hothome.full .bs:nth-child(3),.bs.stylefiv .bsx .chfiv li .fivtime,.listupd .utao.styletwo .uta .luf ul li span {
        display: none
    }
}
                                        </style>
