<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Main')</li>
                <li>
                    <a href="{{ route ('admin')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Kriteria</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kriteria.index') }}">Data Kriteria</a></li>
                        <li><a href="{{ route('nilaiKriteria.index') }}">Nilai Kriteria</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-package"></i>
                        <span>Perhitungan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('hitungVariabel') }}">Variabel</a></li>
                        <li><a href="{{ route('aturan.index') }}">Aturan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-meditation"></i>
                        <span>Pemakai</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('pemakai.index') }}">Data Pemakai</a></li>
                        <li><a href="{{ route('nilaiPemakai.index') }}">Nilai Pemakai</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span>@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-morris">@lang('translation.Morris_Chart')</a></li>
                        <li><a href="charts-chartist">@lang('translation.Chartist_Chart')</a></li>
                        <li><a href="charts-chartjs">@lang('translation.Chartjs_Chart')</a></li>
                        <li><a href="charts-flot">@lang('translation.Flot_Chart')</a></li>
                        <li><a href="charts-knob">@lang('translation.Jquery_Knob_Chart')</a></li>
                        <li><a href="charts-sparkline">@lang('translation.Sparkline_Chart')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-view-grid"></i>
                        <span>@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic">@lang('translation.Basic_Tables')</a></li>
                        <li><a href="tables-datatable">@lang('translation.Data_Table')</a></li>
                        <li><a href="tables-responsive">@lang('translation.Responsive_Table')</a></li>
                        <li><a href="tables-editable">@lang('translation.Editable_Table')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-face-smile"></i>
                        <span>@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-material">@lang('translation.Material_Design')</a></li>
                        <li><a href="icons-fontawesome">@lang('translation.Font_Awesome')</a></li>
                        <li><a href="icons-ion">@lang('translation.Ion_Icons')</a></li>
                        <li><a href="icons-themify">@lang('translation.Themify_Icons')</a></li>
                        <li><a href="icons-dripicons">@lang('translation.Dripicons')</a></li>
                        <li><a href="icons-typicons">@lang('translation.Typicons_Icons')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-location-pin"></i>
                        <span class="badge badge-pill badge-danger float-right">2</span>
                        <span>@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google"> @lang('translation.Google_Map')</a></li>
                        <li><a href="maps-vector"> @lang('translation.Vector_Map')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Extras')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-layout"></i>
                        <span> @lang('translation.Layouts') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal">@lang('translation.Horizontal')</a></li>
                        <li><a href="layouts-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                        <li><a href="layouts-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                        <li><a href="layouts-boxed">@lang('translation.Boxed_Layout')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> @lang('translation.Authentication') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login">@lang('translation.Login_1')</a></li>
                        <li><a href="pages-login-2">@lang('translation.Login_2')</a></li>
                        <li><a href="pages-register">@lang('translation.Register_1')</a></li>
                        <li><a href="pages-register-2">@lang('translation.Register_2')</a></li>
                        <li><a href="pages-recoverpw">@lang('translation.Recover_Password_1')</a></li>
                        <li><a href="pages-recoverpw-2">@lang('translation.Recover_Password_2')</a></li>
                        <li><a href="pages-lock-screen">@lang('translation.Lock_Screen_1')</a></li>
                        <li><a href="pages-lock-screen-2">@lang('translation.Lock_Screen_2')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-support"></i>
                        <span> @lang('translation.Extra_Pages') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-invoice">@lang('translation.Invoice')</a></li>
                        <li><a href="pages-directory">@lang('translation.Directory')</a></li>
                        <li><a href="pages-blank">@lang('translation.Blank_Page')</a></li>
                        <li><a href="pages-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500">@lang('translation.Error_500')</a></li>
                        <li><a href="pages-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-gallery">@lang('translation.Gallery')</a></li>
                        <li><a href="pages-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-faq">@lang('translation.FAQs')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span>@lang('translation.Email_Templates') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-template-basic">@lang('translation.Basic_Action_Email')</a></li>
                        <li><a href="email-template-Alert">@lang('translation.Alert_Email')</a></li>
                        <li><a href="email-template-Billing">@lang('translation.Billing_Email')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-more"></i>
                        <span>@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">@lang('translation.Level_1.1')</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.1')</a></li>
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.2')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
