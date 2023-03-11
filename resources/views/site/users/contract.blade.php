@extends('layouts.site.master')

@section('title', 'Хянах самбар')

@section('css')
@endsection

@section('style')
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/settings.css">
<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/layers.css">
<!-- REVOLUTION NAVIGATION STYLES -->
<link rel="stylesheet" type="text/css" href="assets/vendor/revolution/css/navigation.css">
<!-- REVEAL ADD-ON FILES -->
<link rel='stylesheet' href='assets/vendor/revolution-addons/reveal/css/revolution.addon.revealer.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' href='assets/vendor/revolution-addons/reveal/css/revolution.addon.revealer.preloaders.css?ver=1.0.0' type='text/css' media='all' />
<!-- TYPEWRITER ADD-ON FILES -->
<link rel='stylesheet' href='assets/vendor/revolution-addons/typewriter/css/typewriter.css' type='text/css' media='all' />
@endsection

@section('hero')

<!-- Page Heading
		================================================== -->
		<div class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<h1 class="page-heading__title">{{ __('site.register_title') }}</h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">{{ __('site.home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('site.register') }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->

		<!-- Team Pages Filter -->
		@include('site.users.partials.section')
		<!-- Team Pages Filter / End -->

@endsection

@section('content')
<div class="col-lg-12">

	<!-- Personal Information -->
	<div class="card card--lg">
		<div class="card__header">
			<h4>{{ __("site.tp_contract") }}</h4>
		</div>
		<div class="card__content">
			<form action="#" class="df-personal-info">

				<div class="row">
					<div class="col-md-12">
						<div class="contract-wrap">
							<div class=WordSection1>

								<p class=MsoNormal><b><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><span style='mso-tab-count:3'>                                               </span><o:p></o:p></span></b></p>
								
								<p class=MsoNormal align=right style='text-align:right'><i><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1043;&#1199;&#1081;&#1094;&#1101;&#1090;&#1075;&#1101;&#1093;
								&#1079;&#1072;&#1093;&#1080;&#1088;&#1083;&#1099;&#1085; 2023
								&#1086;&#1085;&#1099; 03 &#1089;&#1072;&#1088;&#1099;&#1085; 10-&#1085;&#1099;
								&#1257;&#1076;&#1088;&#1080;&#1081;&#1085;<o:p></o:p></span></i></p>
								
								<p class=MsoNormal align=right style='text-align:right'><i><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'><span
								style='mso-spacerun:yes'> </span>&#1090;&#1086;&#1086;&#1090;
								&#1090;&#1091;&#1096;&#1072;&#1072;&#1083;&#1099;&#1085; 2 &#1076;&#1091;&#1075;aa&#1088;
								&#1093;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090;<o:p></o:p></span></i></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1041;&#1056;&#1054;&#1050;&#1045;&#1056;&#1058;
								&#1044;&#1040;&#1053;&#1057; &#1053;&#1069;&#1069;&#1061;
								&#1043;&#1069;&#1056;&#1069;&#1069;<o:p></o:p></span></b></p>
								
								<p class=MsoNormal><b><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN;mso-no-proof:yes'>20<span style='background:lime;
								mso-highlight:lime'>..</span> &#1086;&#1085;&#1099; <span style='background:
								lime;mso-highlight:lime'>.</span> &#1089;&#1072;&#1088;&#1099;&#1085; <span
								style='background:lime;mso-highlight:lime'>.</span> &#1257;&#1076;&#1257;&#1088;<span
								style='mso-spacerun:yes'>                                                       
								</span>&#1044;&#1091;&#1075;&#1072;&#1072;&#1088; <span style='background:lime;
								mso-highlight:lime'>…</span><span
								style='mso-spacerun:yes'>                                                              
								</span>&#1059;&#1083;&#1072;&#1072;&#1085;&#1073;&#1072;&#1072;&#1090;&#1072;&#1088;
								&#1093;&#1086;&#1090;</span><b><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'><o:p></o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><a name="_Hlk99547446"><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1053;&#1069;&#1043;.
								&#1053;&#1048;&#1049;&#1058;&#1051;&#1069;&#1043;
								&#1198;&#1053;&#1044;&#1069;&#1057;&#1051;&#1069;&#1051;<o:p></o:p></span></b></a></p>
								
								<p class=MsoNormal style='margin-left:18.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-18.0pt;mso-list:l20 level2 lfo2'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>1.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199;
								“&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1090; &#1076;&#1072;&#1085;&#1089;
								&#1085;&#1101;&#1101;&#1093; &#1075;&#1101;&#1088;&#1101;&#1101;”-&#1075;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1072;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1086;&#1088;&#1083;&#1086;&#1075;&#1086;,
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;&#1075;
								&#1199;&#1079;&#1199;&#1199;&#1083;&#1101;&#1093;, &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1093;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1101;&#1088;&#1093;&#1083;&#1101;&#1093;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;&#1099;&#1085;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1072;&#1076;
								&#1079;&#1091;&#1091;&#1095;&#1083;&#1072;&#1093;
								&#1079;&#1101;&#1088;&#1101;&#1075;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1086;&#1088; &#1052;&#1086;&#1085;&#1075;&#1086;&#1083;
								&#1059;&#1083;&#1089;&#1099;&#1085;
								&#1048;&#1088;&#1075;&#1101;&#1085;&#1080;&#1081;
								&#1093;&#1091;&#1091;&#1083;&#1100;, &#1198;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1079;&#1072;&#1093;
								&#1079;&#1101;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1093;&#1091;&#1091;&#1083;&#1100;, &#1057;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1079;&#1086;&#1093;&#1080;&#1094;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1093;&#1086;&#1088;&#1086;&#1086;, “&#1198;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;
								&#1090;&#1257;&#1074;&#1083;&#1257;&#1088;&#1089;&#1257;&#1085;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1090;&#1257;0&#1074;” &#1061;&#1061;&#1050;, “&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;&#1099;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1082;&#1083;&#1080;&#1088;&#1080;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1090;&#1257;&#1074;” &#1061;&#1061;&#1050;-&#1080;&#1081;&#1085;
								&#1076;&#1199;&#1088;&#1101;&#1084;, &#1078;&#1091;&#1088;&#1072;&#1084;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1093;
								&#1101;&#1088;&#1093; &#1079;&#1199;&#1081;&#1085;
								&#1072;&#1082;&#1090;&#1091;&#1091;&#1076;&#1099;&#1075;
								&#1199;&#1085;&#1076;&#1101;&#1089;&#1083;&#1101;&#1085; &#1053;&#1101;&#1075;
								&#1090;&#1072;&#1083;&#1072;&#1072;&#1089; “&#1043;&#1086;&#1083;&#1086;&#1084;&#1090;
								&#1082;&#1072;&#1087;&#1080;&#1090;&#1072;&#1083; &#1198;&#1062;&#1050;”
								&#1061;&#1061;&#1050; <i>/&#1094;&#1072;&#1072;&#1096;&#1080;&#1076;“&#1198;&#1062;&#1050;”
								&#1075;&#1101;&#1093; /,</i> &#1053;&#1257;&#1075;&#1257;&#1257; &#1090;&#1072;&#1083;&#1072;&#1072;&#1089;
								<span style='background:lime;mso-highlight:lime'>…</span> &#1086;&#1074;&#1086;&#1075;&#1090;&#1086;&#1081;</span></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'> <span style='background:lime;mso-highlight:lime'>…</span>
								<span style='color:black'>/&#1056;&#1044;:</span><span style='background:lime;
								mso-highlight:lime'>…</span></span></span><span style='mso-bookmark:_Hlk99547446'><span
								lang=MN style='color:black;mso-ansi-language:MN'>/</span></span><span
								style='mso-bookmark:_Hlk99547446'><b><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'> </span></b></span><span style='mso-bookmark:
								_Hlk99547446'><i><span lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:
								MN'>/&#1094;&#1072;&#1072;&#1096;&#1080;&#1076;
								“&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;”
								&#1075;&#1101;&#1093;</span></i></span><span style='mso-bookmark:_Hlk99547446'><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>/ </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1085;&#1072;&#1088; &#1076;&#1072;&#1088;&#1072;&#1072;&#1093;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083; &#1073;&#1086;&#1083;&#1079;&#1083;&#1086;&#1086;&#1088;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;&#1094;&#1086;&#1078;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1075;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1072;&#1074;.<o:p></o:p></span></span></p>
								
								<p class=MsoNormal><span style='mso-bookmark:_Hlk99547446'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><span
								style='mso-bookmark:_Hlk99547446'><b><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1061;&#1054;&#1025;&#1056;.
								&#1053;&#1069;&#1056; &#1058;&#1054;&#1052;&#1068;&#1025;&#1054;&#1053;&#1067;
								&#1058;&#1040;&#1049;&#1051;&#1041;&#1040;&#1056;<o:p></o:p></span></b></span></p>
								
								<p class=MsoNormal style='margin-left:18.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-18.0pt;mso-list:l29 level2 lfo1;tab-stops:list 45.0pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN'><span style='mso-list:Ignore'>2.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1083;&#1101;&#1089;&#1101;&#1085; &#1076;&#1072;&#1088;&#1072;&#1072;&#1093;
								&#1085;&#1101;&#1088; &#1090;&#1086;&#1084;&#1100;&#1105;&#1086;&#1075;
								&#1076;&#1086;&#1088; &#1076;&#1091;&#1088;&#1076;&#1089;&#1072;&#1085;
								&#1091;&#1090;&#1075;&#1072;&#1072;&#1088;
								&#1086;&#1081;&#1083;&#1075;&#1086;&#1085;&#1086;.
								&#1198;&#1199;&#1085;&#1076;:<b><o:p></o:p></b></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.1<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1198;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;
								&#1090;&#1257;&#1074;&#1083;&#1257;&#1088;&#1089;&#1257;&#1085;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1090;&#1257;&#1074;” &#1061;&#1061;&#1050; </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1099;&#1075; &#1085;&#1101;&#1101;&#1093;,
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1099;&#1075;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1093; &#1101;&#1088;&#1093;
								&#1073;&#1199;&#1093;&#1080;&#1081;
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;&#1080;&#1081;&#1075;; <o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.2<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;”</span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'> &#1075;&#1101;&#1078;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1199;&#1085;&#1076;&#1089;&#1101;&#1085; &#1076;&#1101;&#1101;&#1088;
								&#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;
								&#1257;&#1084;&#1095;&#1083;&#1257;&#1093;
								&#1101;&#1088;&#1093;&#1080;&#1081;&#1075;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1085;
								&#1072;&#1074;&#1072;&#1093;, &#1073;&#1091;&#1089;&#1076;&#1072;&#1076;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1101;&#1088;&#1084;&#1101;&#1083;&#1079;&#1101;&#1083;
								&#1073;&#1199;&#1093;&#1080;&#1081; &#1080;&#1088;&#1075;&#1101;&#1085;,
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085; &#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1073;&#1091;&#1102;&#1091; &#1101;&#1085;&#1101;
								&#1075;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081; 1.1-&#1090;
								&#1085;&#1101;&#1088;&#1083;&#1101;&#1089;&#1101;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;&#1080;&#1081;&#1075;; <o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.3<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1198;&#1062;&#1050;”</span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'> &#1075;&#1101;&#1078;
								&#1198;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1093;&#1091;&#1091;&#1083;&#1100;&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085; &#1073;&#1088;&#1086;&#1082;&#1077;&#1088;&#1099;&#1085;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;
								&#1103;&#1074;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1090;&#1091;&#1089;&#1075;&#1072;&#1081;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1257;&#1083;
								&#1073;&#1199;&#1093;&#1080;&#1081;
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076; &#1073;&#1091;&#1102;&#1091; &#1198;&#1062;&#1050;
								&#1073;&#1091;&#1102;&#1091; &#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;<b> </b>“&#1043;&#1086;&#1083;&#1086;&#1084;&#1090;
								&#1082;&#1072;&#1087;&#1080;&#1090;&#1072;&#1083; &#1198;&#1062;&#1050;”
								&#1061;&#1061;&#1050;-&#1080;&#1081;&#1075;; <o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.4<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1101;&#1088;&#1093;&#1083;&#1101;&#1093;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1072;” </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;,
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;&#1099;&#1085; &#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1073;&#1080;&#1088;&#1078;&#1080;&#1081;&#1075;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.5<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1057;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1101;&#1083;” </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;&#1099;&#1085; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1079;&#1072;&#1093;
								&#1079;&#1101;&#1101;&#1083;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1083;&#1072;&#1075;&#1076;&#1072;&#1078;
								&#1073;&#1091;&#1081; &#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;, &#1073;&#1199;&#1093;&#1080;&#1081;
								&#1083; &#1090;&#1257;&#1088;&#1083;&#1080;&#1081;&#1085;
								&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1101;&#1083;,
								&#1086;&#1087;&#1096;&#1080;&#1085;, &#1074;&#1072;&#1088;&#1088;&#1072;&#1085;&#1090;,
								&#1199;&#1199;&#1089;&#1084;&#1101;&#1083;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1083;&#1199;&#1199;&#1076;, &#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1073;&#1080;&#1095;&#1080;&#1075;,
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;&#1257;&#1088;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1078;&#1089;&#1072;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089; &#1075;&#1101;&#1093;
								&#1084;&#1101;&#1090;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.6<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;” </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; &#1059;&#1083;&#1089;&#1072;&#1072;&#1089;
								&#1073;&#1091;&#1089;&#1072;&#1076; &#1086;&#1088;&#1086;&#1085;&#1076;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;
								&#1103;&#1074;&#1091;&#1091;&#1083;&#1078; &#1073;&#1091;&#1081;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1101;&#1088;&#1093;&#1083;&#1101;&#1093;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;,
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085; &#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1083;&#1080;&#1081;&#1075;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1088;
								&#1079;&#1091;&#1091;&#1095;&#1083;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1093;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1199;&#1081;&#1083; &#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.7<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1044;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;” </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; &#1059;&#1083;&#1089;&#1072;&#1076;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;
								&#1103;&#1074;&#1091;&#1091;&#1083;&#1078; &#1073;&#1091;&#1081;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072; &#1101;&#1088;&#1093;&#1083;&#1101;&#1093;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1080;&#1088;&#1078;&#1080;&#1081;&#1085;
								&#1073;&#1091;&#1089; &#1079;&#1072;&#1093;
								&#1079;&#1101;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;, &#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1083;&#1080;&#1081;&#1075;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1088;
								&#1079;&#1091;&#1091;&#1095;&#1083;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1093;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1199;&#1081;&#1083; &#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.8<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1053;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;”</span></b></span><span style='mso-bookmark:_Hlk99547446'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'> &#1075;&#1101;&#1078;
								&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; &#1059;&#1083;&#1089;&#1099;&#1085;
								&#1198;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1093;&#1091;&#1091;&#1083;&#1100;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1075;
								&#1075;&#1199;&#1081;&#1094;&#1101;&#1090;&#1075;&#1101;&#1093;
								&#1079;&#1086;&#1088;&#1080;&#1091;&#1083;&#1072;&#1083;&#1090;
								&#1073;&#1199;&#1093;&#1080;&#1081; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 2-&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1076;&#1091;&#1088;&#1076;&#1089;&#1072;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1099;&#1075;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.9<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“&#1064;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;”
								</span></b></span><span style='mso-bookmark:_Hlk99547446'><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1093;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093;&#1072;&#1076; &#1198;&#1062;&#1050;-&#1080;&#1072;&#1089;
								&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1093;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1076;&#1199;&#1085;, &#1073;&#1086;&#1083;&#1086;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101; &#1093;&#1080;&#1081;&#1093;&#1090;&#1101;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								“&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;”-&#1076; &#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;
								&#1199;&#1079;&#1199;&#1199;&#1083;&#1089;&#1101;&#1085;&#1090;&#1101;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081; &#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1093;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1076;&#1199;&#1085;&#1075;;<b><o:p></o:p></b></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.10<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>“<b
								style='mso-bidi-font-weight:normal'>&#1058;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1095;&#1072;&#1076;&#1074;&#1072;&#1088;&#1075;&#1199;&#1081;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;</b>”
								&#1075;&#1101;&#1078;<span style='mso-spacerun:yes'> 
								</span>&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1093;&#1101;&#1083;&#1094;&#1083;&#1080;&#1081;&#1075;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1101;&#1076;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1075;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1072;&#1075;&#1199;&#1081;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;&#1080;&#1081;&#1075;;<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.11<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>“<b style='mso-bidi-font-weight:
								normal'><span style='color:black'>&#1061;&#1101;&#1083;&#1094;&#1101;&#1083;
								&#1073;&#1091;&#1094;&#1072;&#1093;</span></b><span style='color:black'>”
								&#1075;&#1101;&#1078;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1089;&#1086;&#1085;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072;&#1085;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1093;&#1101;&#1083;&#1094;&#1083;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1076;&#1199;&#1085;&#1075;&#1101;&#1101;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1072;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1089; &#1072;&#1074;&#1095;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1072;&#1088;&#1075;&#1072; &#1093;&#1101;&#1084;&#1078;&#1101;&#1101;&#1075;;<o:p></o:p></span></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>2.1.12<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><b><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>“&#1052;&#1072;&#1088;&#1078;&#1080;&#1085;”</span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'> &#1075;&#1101;&#1078;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1086;&#1088;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076; &#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1089;&#1072;&#1085;
								&#1091;&#1088;&#1100;&#1076;&#1095;&#1080;&#1083;&#1075;&#1072;&#1072;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075;;<span
								style='color:black'><o:p></o:p></span></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN'><span style='mso-list:Ignore'>2.1.13<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><b><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN;mso-fareast-language:JA'>“&#1052;&#1257;&#1085;&#1075;&#1257;
								&#1093;&#1199;&#1089;&#1101;&#1093;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1257;&#1083;”</span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN;mso-fareast-language:JA;mso-bidi-font-weight:bold'>
								&#1075;&#1101;&#1078; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089; &#1073;&#1091;&#1089;&#1072;&#1076;
								&#1079;&#1086;&#1088;&#1080;&#1091;&#1083;&#1072;&#1083;&#1090;&#1072;&#1072;&#1088;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101; &#1093;&#1080;&#1081;&#1093;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1086;&#1088;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1089;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1089;&#1072;&#1085;
								&#1084;&#1072;&#1103;&#1075;&#1090;&#1099;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1073;&#1080;&#1095;&#1075;&#1101;&#1101;&#1088;
								&#1101;&#1089;&#1093;&#1199;&#1083;
								&#1080;&#1085;&#1090;&#1077;&#1088;&#1085;&#1101;&#1090;
								&#1101;&#1088;&#1093;&#1101;&#1101;&#1088;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1089;&#1072;&#1085; &#1093;&#1199;&#1089;&#1101;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1086;&#1081;&#1083;&#1075;&#1086;&#1085;&#1086;.</span></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'><o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN'><span style='mso-list:Ignore'>2.1.14<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><b><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN;mso-fareast-language:JA'>“&#1044;&#1101;&#1076;
								&#1076;&#1072;&#1085;&#1089;”</span></b></span><span style='mso-bookmark:_Hlk99547446'><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN;mso-fareast-language:JA;
								mso-bidi-font-weight:bold'> &#1075;&#1101;&#1078; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1088; &#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1085;&#1101;&#1101;&#1083;&#1075;&#1101;&#1089;&#1101;&#1085;
								&#1257;&#1257;&#1088;&#1257;&#1257;
								&#1091;&#1076;&#1080;&#1088;&#1076;&#1072;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1090;&#1086;&#1081;
								&#1085;&#1101;&#1088;&#1080;&#1081;&#1085; &#1076;&#1072;&#1085;&#1089;
								&#1073;&#1072;&#1081;&#1085;&#1072;.</span></span><span style='mso-bookmark:
								_Hlk99547446'><span lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN'><span style='mso-list:Ignore'>2.1.15<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN;mso-fareast-language:JA;mso-bidi-font-weight:bold'><span
								style='mso-spacerun:yes'> </span></span></span><span style='mso-bookmark:_Hlk99547446'><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>“<b>&#1052;&#1198;&#1062;&#1050;&#1058;”
								</b>&#1075;&#1101;&#1078; &#1061;&#1061;&#1050;,
								“&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;&#1099;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1082;&#1083;&#1080;&#1088;&#1080;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1090;&#1257;&#1074;” &#1061;&#1061;&#1050;-&#1080;&#1081;&#1075;
								&#1086;&#1081;&#1083;&#1075;&#1086;&#1085;&#1086;.<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-list:l29 level3 lfo1;tab-stops:list 67.5pt'><span
								style='mso-bookmark:_Hlk99547446'><![if !supportLists]><span lang=MN
								style='font-size:9.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN'><span style='mso-list:Ignore'>2.1.16<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><b><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>“&#1041;&#1086;&#1083;&#1086;&#1084;&#1078;&#1080;&#1090;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083;” </span></b></span><span
								style='mso-bookmark:_Hlk99547446'><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1075;&#1101;&#1078;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1099; &#1085;&#1080;&#1081;&#1090;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1083;&#1101;&#1101;&#1089;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1072;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1093; &#1093;&#1199;&#1089;&#1101;&#1083;&#1090;
								&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1073;&#1080;&#1088;&#1078;&#1080;&#1081;&#1085;
								&#1080;&#1076;&#1101;&#1074;&#1093;&#1090;&#1101;&#1081; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1076;&#1199;&#1085;&#1075; &#1093;&#1072;&#1089;&#1089;&#1072;&#1085;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1076;&#1199;&#1085;&#1075;.<o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph'><span style='mso-bookmark:_Hlk99547446'><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph'><span style='mso-bookmark:_Hlk99547446'><b><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></span></p>
								
								<span style='mso-bookmark:_Hlk99547446'></span>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph'><span lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:
								MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1043;&#1059;&#1056;&#1040;&#1042;.
								&#1043;&#1069;&#1056;&#1069;&#1069;&#1053;&#1048;&#1049;
								&#1045;&#1056;&#1256;&#1053;&#1061;&#1048;&#1049; &#1047;&#1198;&#1049;&#1051;,
								&#1053;&#1054;&#1052;&#1048;&#1053;&#1040;&#1051; &#1044;&#1040;&#1053;&#1057;&#1053;&#1067;
								&#1043;&#1198;&#1049;&#1051;&#1043;&#1069;&#1069;<o:p></o:p></span></b></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";color:black;mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;
								&#1078;&#1091;&#1088;&#1084;&#1099;&#1085; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1072;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085; &#1086;&#1088;&#1083;&#1086;&#1075;&#1086;,
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101; &#1199;&#1079;&#1199;&#1199;&#1083;&#1101;&#1093;,
								&#1198;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1257;&#1084;&#1095;&#1083;&#1257;&#1093;
								&#1101;&#1088;&#1093;&#1080;&#1081;&#1085;
								&#1073;&#1199;&#1088;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;
								&#1199;&#1079;&#1199;&#1199;&#1083;&#1101;&#1075;&#1095;&#1080;&#1076;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1099;&#1075;
								&#1085;&#1101;&#1101;&#1083;&#1075;&#1101;&#1093;,
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;&#1076;&#1086;&#1086;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1076;&#1072;&#1085;&#1089; &#1085;&#1101;&#1101;&#1093;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;&#1075;
								&#1090;&#1091;&#1089; &#1090;&#1091;&#1089; &#1199;&#1079;&#1199;&#1199;&#1083;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:8.0pt;
								mso-bidi-font-size:10.0pt;mso-fareast-font-family:"Times New Roman";color:black;
								mso-ansi-language:MN'><span style='mso-list:Ignore'>3.2<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-bidi-font-size:12.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1094;&#1072;&#1093;&#1080;&#1084; &#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1101;&#1101;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1257;&#1257;&#1088;&#1257;&#1257;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1093;
								&#1101;&#1089;&#1074;&#1101;&#1083; &#1198;&#1062;&#1050; &#1085;&#1100;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1073;&#1199;&#1088;&#1090;&#1075;&#1101;&#1083;&#1090;&#1101;&#1081;
								&#1075;&#1072;&#1088; &#1091;&#1090;&#1072;&#1089;&#1085;&#1099; &#1076;&#1091;&#1075;&#1072;&#1072;&#1088;,
								&#1080;&#1084;&#1101;&#1081;&#1083; &#1093;&#1072;&#1103;&#1075;
								&#1073;&#1086;&#1083;&#1086;&#1085;/&#1101;&#1089;&#1093;&#1199;&#1083;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085; &#1073;&#1080;&#1077;&#1101;&#1088;
								&#1080;&#1088;&#1078; &#1257;&#1075;&#1089;&#1257;&#1085; &#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091; &#1076;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1075;
								&#1093;&#1080;&#1081;&#1078; &#1075;&#1199;&#1081;&#1094;&#1101;&#1090;&#1075;&#1101;&#1085;&#1101;.</span><span
								lang=MN style='font-size:8.0pt;mso-bidi-font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";color:black;mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.3<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1084;&#1072;&#1088;&#1078;&#1080;&#1085; &#1086;&#1083;&#1075;&#1086;&#1093;
								&#1101;&#1089;&#1101;&#1093;&#1080;&#1081;&#1075;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1101;&#1088;&#1093;&#1080;&#1081;&#1085;
								&#1093;&#1199;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;&#1083;&#1101;&#1078;,
								&#1084;&#1072;&#1088;&#1078;&#1080;&#1085; &#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1093;
								&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;,
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1101;&#1101;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1093; &#1073;&#1072;
								&#1084;&#1072;&#1088;&#1078;&#1080;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1257;&#1257;
								&#1090;&#1257;&#1083;&#1257;&#1257;&#1075;&#1199;&#1081;
								&#1079;&#1101;&#1088;&#1101;&#1075; &#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1101;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1052;&#1198;&#1062;&#1050;&#1058; &#1085;&#1100; &#1198;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1082;&#1083;&#1080;&#1088;&#1080;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1078;&#1091;&#1088;&#1072;&#1084;&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085; &#1072;&#1088;&#1075;&#1072;
								&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;&#1075; &#1072;&#1074;&#1095;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1078;&#1199;&#1199;&#1083;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.4<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1198;&#1062;&#1050; &#1085;&#1100; &#1101;&#1085;&#1101;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081; 3.2-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1084;&#1072;&#1088;&#1078;&#1080;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1093;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1083;&#1080;&#1081;&#1075;
								&#1086;&#1083;&#1075;&#1086;&#1089;&#1085;&#1086;&#1086;&#1089;
								&#1073;&#1091;&#1089;&#1072;&#1076; &#1199;&#1077;&#1076; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1093;&#1076;&#1101;&#1101; &#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075;
								&#1053;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083; &#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076;
								100 &#1093;&#1091;&#1074;&#1100;
								&#1091;&#1088;&#1100;&#1076;&#1095;&#1080;&#1083;&#1072;&#1085;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1085;&#1072;.</span><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>
								&#1058;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075; 100% <span
								style='mso-spacerun:yes'> </span>&#1091;&#1088;&#1100;&#1076;&#1095;&#1080;&#1083;&#1072;&#1085;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1093;&#1076;&#1072;&#1072;
								&#1101;&#1085;&#1101; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081; &#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090;
								2-&#1076; &#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1093;&#1091;&#1074;&#1100;
								&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;&#1075;&#1101;&#1101;&#1088;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1085;
								&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1085;&#1080;&#1081;&#1090; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1075;
								&#1090;&#1091;&#1089;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1093;&#1072;&#1084;&#1090;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.5<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1053;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089; &#1085;&#1100;
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;, &#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1040;&#1084;&#1077;&#1088;&#1080;&#1082;
								&#1076;&#1086;&#1083;&#1083;&#1072;&#1088;, &#1050;&#1072;&#1085;&#1072;&#1076;
								&#1076;&#1086;&#1083;&#1083;&#1072;&#1088;,
								&#1040;&#1085;&#1075;&#1083;&#1080;&#1081;&#1085; &#1092;&#1091;&#1085;&#1090;,</span><span
								lang=MN style='mso-ansi-language:MN'> </span><span lang=MN style='font-size:
								10.0pt;mso-ansi-language:MN'>&#1061;&#1086;&#1085;&#1075;&#1082;&#1086;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1076;&#1086;&#1083;&#1083;&#1072;&#1088;&#1099;&#1085;
								&#1076;&#1072;&#1085;&#1089; &#1073;&#1072;&#1081;&#1085;&#1072;.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1085;&#1100;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1074;&#1072;&#1083;&#1102;&#1090;&#1072;&#1072;&#1088;
								&#1086;&#1088;&#1083;&#1086;&#1075;&#1086; &#1073;&#1086;&#1083;&#1086;&#1085;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085; &#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;
								&#1093;&#1080;&#1081;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1198;&#1062;&#1050; &#1085;&#1100; &#1090;&#1091;&#1089;
								&#1076;&#1072;&#1085;&#1089; &#1073;&#1072;&#1081;&#1088;&#1096;&#1080;&#1078;
								&#1073;&#1091;&#1081; &#1043;&#1086;&#1083;&#1086;&#1084;&#1090;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1099;
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085;
								&#1257;&#1076;&#1088;&#1080;&#1081;&#1085; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1072;&#1096;&#1080;&#1075;&#1090;&#1072;&#1081;
								&#1093;&#1072;&#1085;&#1096;&#1072;&#1072;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1078;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101; &#1093;&#1080;&#1081;&#1093;&#1080;&#1081;&#1075;
								&#1101;&#1088;&#1084;&#1101;&#1083;&#1079;&#1101;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.6<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1073;&#1091;&#1089;&#1072;&#1076;
								&#1079;&#1086;&#1088;&#1080;&#1091;&#1083;&#1072;&#1083;&#1090;&#1072;&#1072;&#1088;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085; &#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;
								&#1093;&#1080;&#1081;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								“&#1052;&#1257;&#1085;&#1075;&#1257; &#1093;&#1199;&#1089;&#1101;&#1093;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1257;&#1083;”-&#1080;&#1081;&#1075;
								&#1073;&#1257;&#1075;&#1083;&#1257;&#1078; &#1198;&#1062;&#1050;-&#1076;
								&#1073;&#1080;&#1095;&#1075;&#1101;&#1101;&#1088;
								&#1101;&#1089;&#1093;&#1199;&#1083; &#1086;&#1085;&#1083;&#1072;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1080;&#1081;&#1085;
								&#1101;&#1088;&#1093;&#1101;&#1101;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1085;&#1072;.
								&#1041;&#1080;&#1095;&#1075;&#1101;&#1101;&#1088; &#1075;&#1072;&#1088;&#1075;&#1072;&#1093;&#1072;&#1076;
								&#1101;&#1085;&#1101; &#1075;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1079;&#1091;&#1088;&#1072;&#1075;&#1076;&#1089;&#1072;&#1085;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1090;
								&#1075;&#1072;&#1088;&#1099;&#1085; &#1199;&#1089;&#1075;&#1080;&#1081;&#1075;,
								&#1086;&#1085;&#1083;&#1072;&#1081;&#1085;&#1072;&#1072;&#1088;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1093;&#1072;&#1076;
								&#1198;&#1062;&#1050;-&#1072;&#1072;&#1089; &#1086;&#1083;&#1075;&#1086;&#1089;&#1086;&#1085;
								&#1085;&#1101;&#1074;&#1090;&#1088;&#1101;&#1093; &#1085;&#1101;&#1088;,
								&#1085;&#1091;&#1091;&#1094; &#1199;&#1075;&#1080;&#1081;&#1075;
								&#1072;&#1096;&#1080;&#1075;&#1083;&#1072;&#1085;<span
								style='mso-spacerun:yes'>  </span>&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081; &#1093;&#1199;&#1089;&#1101;&#1083;&#1090;&#1101;&#1101;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.7<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1084;&#1257;&#1085;&#1075;&#1257; &#1093;&#1199;&#1089;&#1101;&#1093;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1083;&#1080;&#1081;&#1075;
								&#1093;&#1103;&#1085;&#1072;&#1078;,
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1080;&#1090;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083;&#1076;
								&#1089;&#1091;&#1091;&#1088;&#1080;&#1083;&#1072;&#1085;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1257;&#1083;&#1076;
								&#1090;&#1091;&#1089;&#1075;&#1072;&#1089;&#1072;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1085;&#1101;&#1088; &#1076;&#1101;&#1101;&#1088;&#1093;
								&#1076;&#1072;&#1085;&#1089; &#1088;&#1091;&#1091;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1085;&#1101;. &#1048;&#1076;&#1101;&#1074;&#1093;&#1090;&#1101;&#1081;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1072;&#1074;&#1072;&#1093;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1101;&#1089;&#1101;&#1093;&#1080;&#1081;&#1075;
								&#1079;&#1086;&#1093;&#1080;&#1093; &#1105;&#1089;&#1086;&#1086;&#1088;
								&#1093;&#1103;&#1085;&#1072;&#1085;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1078;&#1091;&#1091;&#1083;&#1072;&#1072;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1096;&#1072;&#1083;&#1090;&#1075;&#1072;&#1072;&#1083;&#1072;&#1085;
								&#1073;&#1080;&#1081; &#1073;&#1086;&#1083;&#1086;&#1093; &#1199;&#1088;
								&#1076;&#1072;&#1075;&#1072;&#1074;&#1088;&#1099;&#1075;
								&#1073;&#1091;&#1088;&#1091;&#1091;&#1090;&#1072;&#1081;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;. <o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.8<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101; &#1093;&#1080;&#1081;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085; &#1199;&#1077;&#1076;
								&#1084;&#1257;&#1088;&#1076;&#1257;&#1075;&#1076;&#1257;&#1078;
								&#1073;&#1072;&#1081;&#1075;&#1072;&#1072;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								“&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;, &#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;” &#1073;&#1086;&#1083;&#1086;&#1085;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1099;
								&#1077;&#1088;&#1257;&#1085;&#1093;&#1080;&#1081;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1089;&#1086;&#1085;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1075;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1078;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085; &#1072;&#1074;&#1085;&#1072;.
								<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.9<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1095; &#1073;&#1091;&#1081; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1090;&#1257;&#1083;&#1073;&#1257;&#1088;<span
								style='mso-spacerun:yes'>  </span>&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1078;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1093; &#1073;&#1072;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1089;&#1072;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 1
								&#1073;&#1086;&#1083;&#1086;&#1085; 2-&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1198;&#1062;&#1050; &#1085;&#1100; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089; &#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1089;&#1072;&#1085;
								&#1199;&#1085;&#1101;&#1101;&#1089;
								&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.10<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1086;&#1085;&#1083;&#1072;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1080;&#1081;&#1075;
								&#1072;&#1096;&#1080;&#1075;&#1083;&#1072;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1085;&#1101;&#1074;&#1090;&#1088;&#1101;&#1093; &#1085;&#1101;&#1088;,
								&#1085;&#1091;&#1091;&#1094; &#1199;&#1075;&#1080;&#1081;&#1085;
								&#1072;&#1102;&#1091;&#1083;&#1075;&#1199;&#1081;
								&#1073;&#1072;&#1081;&#1076;&#1083;&#1099;&#1075;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1093;&#1072;&#1085;&#1075;&#1072;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081; &#1073;&#1072;
								&#1093;&#1072;&#1085;&#1075;&#1072;&#1072;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1076;&#1101;&#1085; &#1075;&#1072;&#1088;&#1072;&#1093;
								&#1093;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083; &#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1080;&#1081;&#1075;
								<span style='mso-spacerun:yes'> </span>&#1198;&#1062;&#1050;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;&#1075;&#1199;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.11<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;&#1072;&#1072;
								&#1084;&#1257;&#1085;&#1075;&#1257; &#1075;&#1072;&#1088;&#1075;&#1072;&#1093;
								&#1093;&#1199;&#1089;&#1101;&#1083;&#1090;&#1101;&#1101;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085; &#1084;&#1257;&#1085;&#1075;&#1257;
								&#1093;&#1199;&#1089;&#1101;&#1093;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1083;&#1080;&#1081;&#1085;
								&#1084;&#1072;&#1103;&#1075;&#1090;&#1099;&#1085; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1078;, &#1090;&#1199;&#1199;&#1085;&#1076;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1090;
								&#1075;&#1072;&#1088;&#1099;&#1085; &#1199;&#1089;&#1075;&#1101;&#1101; &#1079;&#1091;&#1088;&#1072;&#1093;
								&#1073;&#1072; &#1084;&#1257;&#1085;&#1075;&#1257;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085; &#1072;&#1074;&#1072;&#1093;
								&#1076;&#1072;&#1085;&#1089; &#1085;&#1100;
								&#1079;&#1257;&#1074;&#1093;&#1257;&#1085; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1085;&#1101;&#1088; &#1076;&#1101;&#1101;&#1088;&#1093;
								&#1076;&#1072;&#1085;&#1089; &#1073;&#1072;&#1081;&#1085;&#1072;.
								&#1052;&#1257;&#1085;&#1075;&#1257; &#1093;&#1199;&#1089;&#1101;&#1093;
								&#1257;&#1088;&#1075;&#1257;&#1076;&#1083;&#1080;&#1081;&#1075;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085; &#1073;&#1080;&#1077;&#1101;&#1088;
								&#1101;&#1089;&#1093;&#1199;&#1083;
								&#1089;&#1082;&#1072;&#1085;&#1077;&#1088;&#1076;&#1072;&#1078;,
								&#1073;&#1199;&#1088;&#1090;&#1075;&#1101;&#1083;&#1090;&#1101;&#1081;
								&#1080;-&#1084;&#1101;&#1081;&#1083; &#1093;&#1072;&#1103;&#1075; &#1101;&#1089;&#1074;&#1101;&#1083;/&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1073;&#1091;&#1089;&#1072;&#1076;
								&#1073;&#1199;&#1088;&#1090;&#1075;&#1199;&#1199;&#1083;&#1089;&#1101;&#1085;
								&#1091;&#1090;&#1072;&#1089;&#1085;&#1099;
								&#1076;&#1091;&#1075;&#1072;&#1072;&#1088; &#1073;&#1199;&#1093;&#1080;&#1081;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1072;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1085;&#1099;
								&#1093;&#1101;&#1088;&#1101;&#1075;c&#1083;&#1101;&#1101;&#1088; /viber,
								telegram, skype &#1075;&#1101;&#1093; &#1084;&#1101;&#1090;/ &#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1198;&#1062;&#1050;-&#1076;
								&#1093;&#1199;&#1088;&#1075;&#1199;&#1199;&#1083;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l21 level2 lfo14;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN'><span
								style='mso-list:Ignore'>3.12<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1084;&#1257;&#1085;&#1075;&#1257;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1093;&#1072;&#1076;
								&#1073;&#1091;&#1102;&#1091; &#1086;&#1088;&#1083;&#1086;&#1075;&#1099;&#1085;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101; &#1093;&#1080;&#1081;&#1078;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;&#1076;&#1101;&#1101;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1091;&#1090;&#1075;&#1072; &#1093;&#1101;&#1089;&#1101;&#1075;&#1090;
								&#1076;&#1086;&#1086;&#1088;&#1093;
								&#1078;&#1080;&#1096;&#1075;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1088;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1081;&#1085;
								&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;, &#1091;&#1090;&#1072;&#1089;&#1085;&#1099;
								&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;&#1072;&#1072;
								&#1090;&#1072;&#1089;&#1083;&#1072;&#1083; &#1072;&#1074;&#1095;
								&#1079;&#1072;&#1081;
								&#1072;&#1074;&#1072;&#1083;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1088;
								&#1076;&#1072;&#1088;&#1072;&#1072;&#1083;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1073;&#1080;&#1095;&#1085;&#1101;. &#1046;&#1080;&#1096;&#1101;&#1101;
								&#1085;&#1100;:<o:p></o:p></span></p>
								
								<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
								 style='margin-left:18.0pt;border-collapse:collapse;border:none;mso-border-alt:
								 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
									<td width=162 valign=top style='width:121.25pt;border:solid windowtext 1.0pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoListParagraph style='margin-left:0cm;text-align:justify;
									text-justify:inter-ideograph;tab-stops:45.0pt'><span lang=MN
									style='font-size:10.0pt;mso-ansi-language:MN'>&#1043;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
									&#1091;&#1090;&#1075;&#1072;<o:p></o:p></span></p>
									</td>
									<td width=274 valign=top style='width:205.85pt;border:solid windowtext 1.0pt;
									border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
									solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoListParagraph style='margin-left:0cm;text-align:justify;
									text-justify:inter-ideograph;tab-stops:45.0pt'><span lang=MN
									style='font-size:10.0pt;mso-ansi-language:MN'>&#1040;&#1040;90090909</span><span
									style='font-size:10.0pt;mso-ansi-language:EN-US'>, 99999999<o:p></o:p></span></p>
									</td>
								 </tr>
								</table>
								
								<p class=MsoNormal><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='margin-left:22.5pt;text-indent:-22.5pt;mso-pagination:
								none;text-autospace:none'><b><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
								"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>3.12. &#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1257;&#1093;</span></b><b><span style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:EN-US;mso-bidi-language:
								RU'>:<o:p></o:p></span></b></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt'><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'>3.12.1. <span style='mso-tab-count:1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1198;&#1062;&#1050;-&#1080;&#1072;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085; &#1085;&#1101;&#1101;&#1083;&#1075;&#1101;&#1089;&#1101;&#1085;
								&#1076;&#1101;&#1076; &#1076;&#1072;&#1085;&#1089;&#1072;&#1072;&#1088;&#1072;&#1072;</span><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:EN-US;mso-bidi-language:RU'> </span><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN'>&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1078; &#1073;&#1072;&#1081;&#1075;&#1072;&#1072;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1099;
								&#1199;&#1085;&#1101;&#1083;&#1075;&#1101;&#1101; 1</span><span
								style='font-size:10.0pt;mso-ansi-language:EN-US'>,000</span><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN'> &#1072;&#1084;&#1077;&#1088;&#1080;&#1082;
								&#1076;&#1086;&#1083;&#1083;&#1072;&#1088;&#1072;&#1072;&#1089;
								&#1076;&#1086;&#1086;&#1096; &#1073;&#1086;&#1083;
								&#1089;&#1072;&#1088;&#1099;&#1085;
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078; 1 &#1072;&#1084;&#1077;&#1088;&#1080;&#1082;
								&#1076;&#1086;&#1083;&#1083;&#1072;&#1088;&#1099;&#1075; &#1073;&#1088;&#1086;&#1082;&#1077;&#1088;&#1090;
								&#1090;&#1257;&#1083;&#1257;&#1093; &#1073;&#1072;
								&#1094;&#1072;&#1072;&#1096;&#1080;&#1076; &#1090;&#1091;&#1089;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1075;&#1076;&#1089;&#1257;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1076;&#1072;&#1075;&#1072;&#1078; &#1084;&#1257;&#1088;&#1076;&#1257;&#1085;&#1257;.
								</span><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'><o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.2.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1085;&#1100;
								&#1101;&#1085;&#1101; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081; 3.11-&#1076;
								&#1093;&#1101;&#1089;&#1101;&#1075;&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085; &#1094;&#1072;&#1093;&#1080;&#1084;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1076;
								&#1085;&#1101;&#1074;&#1090;&#1088;&#1101;&#1093;, &#1085;&#1101;&#1088;
								&#1085;&#1091;&#1091;&#1094; &#1199;&#1075;&#1080;&#1081;&#1085;
								&#1085;&#1091;&#1091;&#1094;&#1083;&#1072;&#1083;&#1099;&#1075;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.3. &#1198;&#1062;&#1050; &#1085;&#1100;
								&#1072;&#1078;&#1083;&#1099;&#1085;
								&#1257;&#1076;&#1088;&#1199;&#1199;&#1076;&#1101;&#1076; &#1076;&#1086;&#1086;&#1088;&#1093;
								&#1093;&#1199;&#1089;&#1085;&#1101;&#1075;&#1090;&#1101;&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1094;&#1072;&#1075;&#1080;&#1081;&#1085; &#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;,
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1072;&#1089;&#1091;&#1091;&#1083;&#1090;&#1091;&#1091;&#1076;&#1072;&#1076;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1083;&#1072;&#1093;, &#1073;&#1091;&#1089;&#1072;&#1076;
								&#1079;&#1257;&#1074;&#1083;&#1257;&#1075;&#1257;&#1257;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1101;&#1101;&#1088;
								&#1093;&#1072;&#1085;&#1075;&#1072;&#1078;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1085;&#1072;.
								&#1198;&#1199;&#1085;&#1076;:<o:p></o:p></span></p>
								
								<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
								mso-pagination:none;text-autospace:none'><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'><o:p>&nbsp;</o:p></span></p>
								
								<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
								 style='margin-left:31.5pt;border-collapse:collapse;border:none;mso-border-alt:
								 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
									<td width=240 valign=top style='width:179.75pt;border:solid windowtext 1.0pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
									mso-pagination:none;text-autospace:none'><span lang=MN style='font-size:10.0pt;
									mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
									RU'><o:p>&nbsp;</o:p></span></p>
									</td>
									<td width=198 valign=top style='width:148.5pt;border:solid windowtext 1.0pt;
									border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
									solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>&#1047;&#1091;&#1085;&#1099;
									&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
									&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;<o:p></o:p></span></p>
									</td>
									<td width=210 valign=top style='width:157.5pt;border:solid windowtext 1.0pt;
									border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
									solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>&#1256;&#1074;&#1083;&#1080;&#1081;&#1085;
									&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
									&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;<o:p></o:p></span></p>
									</td>
								 </tr>
								 <tr style='mso-yfti-irow:1'>
									<td width=240 valign=top style='width:179.75pt;border:solid windowtext 1.0pt;
									border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
									padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
									mso-pagination:none;text-autospace:none'><b><span lang=MN style='font-size:
									10.0pt;mso-ansi-language:MN'>&#1061;&#1086;&#1085;&#1082;&#1086;&#1085;&#1075;,
									&#1064;&#1072;&#1085;&#1093;&#1072;&#1081;,
									&#1040;&#1074;&#1089;&#1090;&#1088;&#1072;&#1083;&#1080;&#1081;&#1085;
									&#1073;&#1080;&#1088;&#1078;</span></b><span lang=MN style='font-size:10.0pt;
									mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
									RU'><o:p></o:p></span></p>
									</td>
									<td width=198 valign=top style='width:148.5pt;border-top:none;border-left:
									none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
									mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>0</span><span
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									EN-US;mso-bidi-language:RU'>8:00</span><span lang=MN style='font-size:10.0pt;
									mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
									RU'>-12</span><span style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
									mso-ansi-language:EN-US;mso-bidi-language:RU'>:00, </span><span lang=MN
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									MN;mso-bidi-language:RU'>13</span><span style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:EN-US;mso-bidi-language:RU'>:00-17:00<o:p></o:p></span></p>
									</td>
									<td width=210 valign=top style='width:157.5pt;border-top:none;border-left:
									none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
									mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>0</span><span
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									EN-US;mso-bidi-language:RU'>8:00</span><span lang=MN style='font-size:10.0pt;
									mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
									RU'>-12</span><span style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
									mso-ansi-language:EN-US;mso-bidi-language:RU'>:00, </span><span lang=MN
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									MN;mso-bidi-language:RU'>13</span><span style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:EN-US;mso-bidi-language:RU'>:00-17:00<o:p></o:p></span></p>
									</td>
								 </tr>
								 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
									<td width=240 valign=top style='width:179.75pt;border:solid windowtext 1.0pt;
									border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
									padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
									mso-pagination:none;text-autospace:none'><b><span lang=MN style='font-size:
									10.0pt;mso-ansi-language:MN'>&#1040;&#1084;&#1077;&#1088;&#1080;&#1082;,
									&#1050;&#1072;&#1085;&#1072;&#1076;&#1099;&#1085;
									&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1091;&#1089;&#1072;&#1076;
									&#1073;&#1080;&#1088;&#1078;&#1199;&#1199;&#1076;</span></b><span lang=MN
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									MN;mso-bidi-language:RU'><o:p></o:p></span></p>
									</td>
									<td width=198 valign=top style='width:148.5pt;border-top:none;border-left:
									none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
									mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'>1</span><span
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									EN-US;mso-bidi-language:RU'>3:00-18:00, </span><span lang=MN
									style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
									MN;mso-bidi-language:RU'>21</span><span style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:EN-US;mso-bidi-language:RU'>:30-23:59<o:p></o:p></span></p>
									</td>
									<td width=210 valign=top style='width:157.5pt;border-top:none;border-left:
									none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
									mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
									mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal align=center style='text-align:center;mso-pagination:none;
									text-autospace:none'><span style='font-size:10.0pt;mso-fareast-font-family:
									"Times New Roman";mso-ansi-language:EN-US;mso-bidi-language:RU'>13:00-18:00,
									22:00-23:59<o:p></o:p></span></p>
									</td>
								 </tr>
								</table>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.4.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1073;&#1088;&#1086;&#1082;&#1077;&#1088;&#1086;&#1086;&#1088;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1257;&#1093;&#1076;&#1257;&#1257;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1073;&#1199;&#1088;&#1090;&#1075;&#1101;&#1083;&#1090;&#1101;&#1081;
								&#1091;&#1090;&#1072;&#1089;&#1085;&#1099;
								&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;, &#1094;&#1072;&#1093;&#1080;&#1084;
								&#1093;&#1072;&#1103;&#1075;&#1072;&#1072;&#1089; &#1093;&#1072;&#1085;&#1076;&#1072;&#1093;
								&#1073;&#1072; &#1073;&#1088;&#1086;&#1082;&#1077;&#1088; &#1085;&#1100; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089; &#1076;&#1072;&#1093;&#1100; &#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083;,
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085; &#1090;&#1072;&#1083;&#1072;&#1072;&#1088;
								&#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075;
								&#1257;&#1075;&#1095; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								<span style='mso-spacerun:yes'> </span>&#1072;&#1074;&#1085;&#1072;.
								&#1048;&#1081;&#1085;&#1093;&#1199;&#1199;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1089;&#1257;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1085;&#1100; &#1198;&#1062;&#1050;-
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1093;&#1091;&#1091;&#1076;&#1089;&#1099;&#1075;
								&#1079;&#1072;&#1072;&#1074;&#1072;&#1083; &#1073;&#1257;&#1075;&#1083;&#1257;&#1085;
								&#1198;&#1062;&#1050;-&#1076;
								&#1093;&#1199;&#1088;&#1075;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:31.5pt;
								text-align:justify;text-justify:inter-ideograph;text-indent:-31.5pt;background:
								white'><span lang=MN style='font-size:10.0pt;color:black;mso-color-alt:windowtext;
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.5.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1085;&#1100; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072; &#1072;&#1074;&#1072;&#1093;
								&#1094;&#1072;&#1075;&#1072;&#1072;&#1089; </span><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>5-&#1072;&#1072;&#1089;
								&#1076;&#1086;&#1086;&#1096;&#1075;&#1199;&#1081;
								&#1084;&#1080;&#1085;&#1091;&#1090;&#1099;&#1085; &#1257;&#1084;&#1085;&#1257;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1072;
								&#1257;&#1075;&#1257;&#1093;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1073;&#1072; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1080;&#1088;&#1089;&#1101;&#1085;
								&#1076;&#1072;&#1088;&#1072;&#1072;&#1083;&#1083;&#1099;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1076; &#1096;&#1080;&#1074;&#1078;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1085;&#1072;. &#1041;&#1080;&#1088;&#1078;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1072;&#1072;&#1075;&#1076;&#1089;&#1072;&#1085;&#1072;&#1072;&#1089; <span
								style='mso-spacerun:yes'> </span>&#1199;&#1199;&#1076;&#1101;&#1085;
								&#1075;&#1072;&#1088;&#1072;&#1093; &#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1093;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;,
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075;
								&#1198;&#1062;&#1050;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;&#1075;&#1199;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>3.12.6.<span
								style='mso-tab-count:1'>  </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1076;&#1101;&#1076; &#1076;&#1072;&#1085;&#1089;
								&#1085;&#1101;&#1101;&#1083;&#1075;&#1101;&#1078;
								&#1094;&#1072;&#1093;&#1080;&#1084; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; </span><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>&#1073;&#1080;&#1077;
								&#1076;&#1072;&#1072;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1093;&#1080;&#1081;&#1075;
								&#1101;&#1088;&#1084;&#1101;&#1083;&#1079;&#1101;&#1093; &#1073;&#1072;
								&#1198;&#1062;&#1050; &#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1079;&#1257;&#1074;&#1083;&#1257;&#1075;&#1257;&#1257;,
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1101;&#1101;&#1088;
								&#1093;&#1072;&#1085;&#1075;&#1072;&#1078; &#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.7.<span style='mso-tab-count:
								1'>  </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1076;&#1101;&#1076;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1072;&#1088;&#1072;&#1072;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1085;
								&#1079;&#1101;&#1101;&#1083; &#1072;&#1074;&#1095;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1089;&#1101;&#1085;&#1090;&#1101;&#1081; &#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1072;&#1083;&#1090;&#1099;&#1085;
								&#1199;&#1088; &#1076;&#1072;&#1075;&#1072;&#1074;&#1088;&#1099;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;. <o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.8.<span style='mso-tab-count:
								1'>  </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1075;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081; 4.2.7-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091; &#1086;&#1087;&#1096;&#1080;&#1085;,
								&#1074;&#1072;&#1088;&#1088;&#1072;&#1085;&#1090;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1091;&#1089;&#1072;&#1076;
								&#1199;&#1199;&#1089;&#1084;&#1101;&#1083; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1072;&#1085;&#1076;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1072;&#1083;&#1090;
								&#1093;&#1080;&#1081;&#1089;&#1085;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1089;&#1101;&#1093;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1101;&#1101; &#1257;&#1257;&#1088;&#1257;&#1257;
								&#1076;&#1072;&#1085;&#1075;&#1072;&#1072;&#1088;
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.12.9.<span style='mso-tab-count:
								1'>  </span>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;&#1099;&#1085;
								&#1073;&#1080;&#1088;&#1078;&#1199;&#1199;&#1076;&#1101;&#1076;
								&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;
								&#1091;&#1083;&#1089;&#1099;&#1085; &#1093;&#1091;&#1091;&#1083;&#1100;, &#1079;&#1086;&#1093;&#1080;&#1094;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1099;&#1085;
								(&#1090;&#1091;&#1093;&#1072;&#1081;&#1083;&#1073;&#1072;&#1083; American
								Depository Receipts (ADRs),) &#1076;&#1199;&#1088;&#1101;&#1084;,
								&#1078;&#1091;&#1088;&#1072;&#1084; &#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1075;&#1076;&#1089;&#1257;&#1085;&#1090;&#1101;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1072;&#1083;&#1080;&#1074;&#1072;&#1072;
								&#1090;&#1072;&#1090;&#1074;&#1072;&#1088;,
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;,
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1089;&#1086;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								<span
								style='mso-spacerun:yes'> </span>&#1090;&#1091;&#1093;&#1072;&#1081;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1075;&#1076;&#1089;&#1257;&#1085;
								&#1076;&#1199;&#1085;&#1075;&#1101;&#1101;&#1088;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1090;&#1257;&#1083;&#1078;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1085;&#1086;. &#1052;&#1257;&#1085;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1083;&#1101;&#1101;&#1089; &#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075; &#1199;&#1083;
								&#1084;&#1072;&#1088;&#1075;&#1072;&#1093;
								&#1078;&#1091;&#1088;&#1084;&#1072;&#1072;&#1088; &#1198;&#1062;&#1050; &#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1093;&#1099;&#1075;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1199;&#1199;&#1075;&#1101;&#1101;&#1088;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1095; &#1073;&#1091;&#1081;
								&#1073;&#1086;&#1083;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
								mso-pagination:none;text-autospace:none'><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='mso-pagination:none;text-autospace:none'><b><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13. &#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1094;&#1091;&#1094;&#1083;&#1072;&#1093;:<o:p></o:p></span></b></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.1.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1085;&#1100;
								&#1072;&#1085;&#1093; &#1257;&#1075;&#1089;&#1257;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1072;
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1085;&#1100; &#1093;&#1080;&#1081;&#1075;&#1076;&#1101;&#1093;
								&#1073;&#1091;&#1102;&#1091;
								&#1073;&#1080;&#1077;&#1083;&#1101;&#1093;&#1101;&#1101;&#1089;
								&#1257;&#1084;&#1085;&#1257; &#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1094;&#1091;&#1094;&#1083;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081;
								&#1073;&#1257;&#1075;&#1257;&#1257;&#1076; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1093;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; <span
								style='mso-spacerun:yes'> </span>&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1089;&#1257;&#1085; &#1072;&#1088;&#1075;&#1072;,
								&#1093;&#1101;&#1083;&#1073;&#1101;&#1088;&#1101;&#1101;&#1088;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1101;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.2.
								&#1047;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1083;&#1090;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085; &#1072;&#1074;&#1072;&#1093; &#1101;&#1094;&#1089;&#1080;&#1081;&#1085;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072; &#1085;&#1100;
								&#1047;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085; &#1072;&#1074;&#1072;&#1093;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072;&#1090;&#1072;&#1081; &#1072;&#1076;&#1080;&#1083;
								&#1073;&#1072;&#1081;&#1085;&#1072;.
								&#1047;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1093;&#1080;&#1081;&#1093; &#1199;&#1077;&#1076; &#1090;&#1091;&#1093;&#1072;&#1081;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072; &#1085;&#1100;
								&#1073;&#1080;&#1077;&#1083;&#1101;&#1075;&#1076;&#1089;&#1101;&#1085;
								&#1073;&#1091;&#1102;&#1091; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1075;&#1076;&#1089;&#1101;&#1085; &#1073;&#1086;&#1083;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1083;&#1090;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1075;&#1199;&#1081;
								&#1075;&#1101;&#1078; &#1199;&#1079;&#1101;&#1093;
								&#1073;&#1257;&#1075;&#1257;&#1257;&#1076;
								&#1199;&#1199;&#1085;&#1101;&#1101;&#1089; &#1199;&#1199;&#1076;&#1101;&#1085;
								&#1075;&#1072;&#1088;&#1072;&#1093; &#1199;&#1088;
								&#1076;&#1072;&#1075;&#1072;&#1074;&#1088;&#1099;&#1075; &#1198;&#1062;&#1050; &#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;&#1075;&#1199;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.3. <span style='mso-tab-count:
								1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1257;&#1075;&#1089;&#1257;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085; &#1073;&#1080;&#1088;&#1078;
								&#1076;&#1101;&#1101;&#1088; &#1073;&#1072;&#1081;&#1075;&#1072;&#1072;
								&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;,
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1080;&#1076;&#1101;&#1074;&#1093;&#1101;&#1101;&#1089;
								&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1085;
								&#1093;&#1101;&#1089;&#1101;&#1075;&#1095;&#1083;&#1101;&#1085;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1073;&#1080;&#1077;&#1083;&#1101;&#1075;&#1076;&#1101;&#1093;&#1075;&#1199;&#1081;
								&#1073;&#1072;&#1081;&#1078; &#1073;&#1086;&#1083;&#1086;&#1093;&#1099;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1086;&#1081;&#1083;&#1075;&#1086;&#1085;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1095; &#1073;&#1091;&#1081;
								&#1073;&#1086;&#1083;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.4.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1257;&#1075;&#1089;&#1257;&#1085;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1073;&#1080;&#1077;&#1083;&#1101;&#1075;&#1076;&#1101;&#1093;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1089;&#1101;&#1093;
								&#1093;&#1072;&#1085;&#1096;&#1080;&#1081;&#1085;
								&#1072;&#1083;&#1076;&#1072;&#1075;&#1076;&#1083;&#1099;&#1075;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1093;&#1072;&#1085;&#1096;&#1080;&#1081;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;&#1080;&#1081;&#1085;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1080;&#1081;&#1075; &#1198;&#1062;&#1050;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1086;&#1093;&#1099;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1089;&#1257;&#1085;
								&#1073;&#1086;&#1083;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.5. <span style='mso-tab-count:
								1'> </span>&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085; &#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 1, 2-&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085; “&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;, &#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;”-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1085;&#1101;&#1075;&#1101;&#1085; &#1072;&#1076;&#1080;&#1083;
								&#1076;&#1072;&#1075;&#1072;&#1078; &#1084;&#1257;&#1088;&#1076;&#1257;&#1085;&#1257;.
								&#1198;&#1062;&#1050; &#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1075;&#1076;&#1257;&#1093;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1073;&#1199;&#1088; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1080;&#1090;
								&#1089;&#1091;&#1074;&#1075;&#1072;&#1072;&#1088;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1101;&#1093; &#1073;&#1257;&#1075;&#1257;&#1257;&#1076;
								&#1080;&#1081;&#1085;&#1093;&#1199;&#1199;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1089;&#1101;&#1085;&#1101;&#1101;&#1089;
								&#1093;&#1086;&#1081;&#1096; &#1093;&#1091;&#1072;&#1085;&#1083;&#1080;&#1081;&#1085;
								5 <span style='mso-spacerun:yes'> </span>&#1076;&#1072;&#1093;&#1100;
								&#1257;&#1076;&#1088;&#1257;&#1257;&#1089; &#1090;&#1091;&#1093;&#1072;&#1081;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1093;&#1199;&#1095;&#1080;&#1085;
								&#1090;&#1257;&#1075;&#1257;&#1083;&#1076;&#1257;&#1088;
								&#1073;&#1086;&#1083;&#1078; &#1084;&#1257;&#1088;&#1076;&#1257;&#1075;&#1076;&#1257;&#1078;
								&#1101;&#1093;&#1101;&#1083;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.6. &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083; &#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085; &#1076;&#1101;&#1076; &#1076;&#1072;&#1085;&#1089;
								&#1088;&#1091;&#1091;
								&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;&#1075;&#1072;&#1072;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1090;
								&#1080;-&#1084;&#1101;&#1081;&#1083; &#1093;&#1072;&#1103;&#1075;&#1072;&#1072;&#1089;,
								&#1101;&#1089;&#1093;&#1199;&#1083; &#1075;&#1072;&#1088;&#1072;&#1072;&#1088;
								&#1073;&#1080;&#1095;&#1089;&#1101;&#1085;
								&#1093;&#1199;&#1089;&#1101;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1078; &#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1075;&#1080;&#1081;&#1075;
								&#1093;&#1080;&#1081;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.7.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1093;&#1257;&#1096;&#1199;&#1199;&#1088;&#1101;&#1075;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1083;&#1101;&#1093;,
								&#1096;&#1086;&#1088;&#1090; &#1073;&#1086;&#1083;&#1086;&#1085; &#1079;&#1101;&#1101;&#1083;
								&#1072;&#1074;&#1095; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1093; &#1079;&#1101;&#1088;&#1101;&#1075;&#1090;
								&#1075;&#1072;&#1088;&#1095; &#1073;&#1086;&#1083;&#1086;&#1093;
								&#1085;&#1101;&#1084;&#1101;&#1083;&#1090; &#1079;&#1072;&#1088;&#1076;&#1072;&#1083;,
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1083;&#1078;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:31.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>3.13.8.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1074;&#1072;&#1083;&#1102;&#1090;&#1099;&#1085;
								&#1093;&#1257;&#1088;&#1074;&#1199;&#1199;&#1083;&#1101;&#1075;
								&#1093;&#1080;&#1081;&#1093;&#1076;&#1101;&#1101;
								&#1074;&#1072;&#1083;&#1102;&#1090;&#1099;&#1085; &#1093;&#1072;&#1085;&#1096;
								&#1076;&#1101;&#1101;&#1088; &#1198;&#1062;&#1050;-&#1090;&#1072;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;&#1094;&#1086;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1044;&#1256;&#1056;&#1256;&#1042;.
								&#1058;&#1040;&#1051;&#1059;&#1059;&#1044;&#1067;&#1053; &#1069;&#1056;&#1061;,
								&#1198;&#1198;&#1056;&#1069;&#1043;<o:p></o:p></span></b></p>
								
								<p class=MsoNormal style='margin-left:18.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-18.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.<span style='mso-tab-count:1'> </span>&#1198;&#1062;&#1050;
								&#1085;&#1100; &#1076;&#1086;&#1088;
								&#1076;&#1091;&#1088;&#1076;&#1089;&#1072;&#1085;
								&#1101;&#1088;&#1093;&#1080;&#1081;&#1075; &#1101;&#1076;&#1101;&#1083;&#1078;,
								&#1199;&#1199;&#1088;&#1075;&#1080;&#1081;&#1075; &#1093;&#1199;&#1083;&#1101;&#1101;&#1085;&#1101;.
								&#1198;&#1199;&#1085;&#1076;:<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.1.<span style='mso-tab-count:1'>  </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1257;&#1075;&#1089;&#1257;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1080;&#1088;&#1089;&#1101;&#1085;
								&#1076;&#1072;&#1088;&#1072;&#1072;&#1083;&#1083;&#1099;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093; &#1073;&#1072; </span><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1090;
								&#1091;&#1090;&#1072;&#1089;, &#1080;&#1084;&#1101;&#1081;&#1083;
								&#1093;&#1072;&#1103;&#1075;&#1072;&#1072;&#1089;
								&#1080;&#1088;&#1089;&#1101;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093; </span><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;;<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.2.<span style='mso-tab-count:1'>  </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1089;&#1072;&#1085; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1076;&#1072;&#1085;&#1089;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1084;&#1101;&#1076;&#1101;&#1101;,
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1078; &#1257;&#1075;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;;<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.3.<span style='mso-tab-count:1'>  </span><a
								name="_Hlk58404938">&#1198;&#1062;&#1050;</a>
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1080;&#1081;&#1075;
								&#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;&#1083;&#1078;,
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1093; &#1096;&#1080;&#1085;&#1101;&#1095;&#1083;&#1101;&#1085;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1078;
								&#1084;&#1257;&#1088;&#1076;&#1199;&#1199;&#1083;&#1101;&#1093; &#1101;&#1088;&#1093;&#1090;&#1101;&#1081;
								&#1073;&#1257;&#1075;&#1257;&#1257;&#1076; &#1101;&#1085;&#1101;
								&#1090;&#1072;&#1083;&#1072;&#1072;&#1088;&#1093;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1091;&#1088;&#1100;&#1076;&#1095;&#1080;&#1083;&#1072;&#1085;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1101;&#1093; &#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.3.<span style='mso-tab-count:1'>  </span>&#1064;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1257;&#1257; &#1257;&#1257;&#1088;&#1095;&#1080;&#1083;&#1089;&#1257;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.1.4.<span style='mso-tab-count:1'>  </span></span><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1075;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1079;&#1091;&#1091;&#1095;&#1080;&#1083;&#1089;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 1, 2-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1050;&#1086;&#1084;&#1087;&#1072;&#1085;&#1080; &#1199;&#1083;
								&#1084;&#1072;&#1088;&#1075;&#1072;&#1093;
								&#1078;&#1091;&#1088;&#1084;&#1072;&#1072;&#1088; &#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;
								&#1072;&#1074;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.</span><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'>1.5. <span style='mso-tab-count:1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072; &#1093;&#1080;&#1081;&#1078;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093;&#1072;&#1072;&#1088;
								&#1050;&#1086;&#1084;&#1087;&#1072;&#1085;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076; &#1084;&#1257;&#1085;&#1075;&#1257;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1084;&#1072;&#1075;&#1094;
								&#1050;&#1086;&#1084;&#1087;&#1072;&#1085;&#1080;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1075;&#1091;&#1081;&#1074;&#1091;&#1091;&#1083;&#1075;&#1099;&#1075;
								&#1093;&#1080;&#1081;&#1093; &#1073;&#1072;
								&#1080;&#1085;&#1075;&#1101;&#1089;&#1085;&#1101;&#1101;&#1088;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;&#1085;&#1257;&#1257;&#1089;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083; &#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090;
								1-&#1080;&#1081;&#1085; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1093;&#1072;&#1089;&#1072;&#1075;&#1076;&#1072;&#1085;&#1072;.
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089; &#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1072;&#1093;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1088;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1257;
								&#1073;&#1091;&#1094;&#1072;&#1072;&#1085; &#1072;&#1074;&#1072;&#1093;
								&#1093;&#1199;&#1089;&#1101;&#1083;&#1090;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1089;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1050;&#1086;&#1084;&#1087;&#1072;&#1085;&#1080;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076; &#1075;&#1091;&#1081;&#1074;&#1091;&#1091;&#1083;&#1075;&#1099;&#1075;
								&#1076;&#1072;&#1093;&#1080;&#1085; &#1093;&#1080;&#1081;&#1093; &#1073;&#1072;
								&#1101;&#1085;&#1101;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;&#1085;&#1257;&#1257;&#1089;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 1-&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1076;&#1072;&#1093;&#1080;&#1085; &#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1075;&#1076;&#1089;&#1072;&#1085;
								&#1076;&#1199;&#1085;&#1075;&#1101;&#1101;&#1088;
								&#1073;&#1091;&#1094;&#1072;&#1072;&#1085;
								&#1086;&#1083;&#1075;&#1086;&#1075;&#1076;&#1086;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>4.</span><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>1.7. <span style='mso-tab-count:
								1'> </span>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1073;&#1072;&#1085;&#1082;&#1085;&#1091;&#1091;&#1076;&#1072;&#1072;&#1089;
								&#1096;&#1072;&#1083;&#1090;&#1075;&#1072;&#1072;&#1083;&#1072;&#1085;
								&#1257;&#1257;&#1088;&#1095;&#1080;&#1083;&#1089;&#1257;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1101;&#1085;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1075;&#1072;&#1088;&#1075;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081;. <o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.1.8. &#1061;&#1091;&#1091;&#1083;&#1100;
								&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1075;&#1101;&#1088;&#1101;&#1101;&#1075;&#1101;&#1101;&#1088;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1089;&#1101;&#1085;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101; &#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1080;&#1081;&#1075;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-indent:-31.5pt'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.1.9.<span style='mso-tab-count:
								1'>    </span></span><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'>&#1198;&#1062;&#1050; &#1085;&#1100; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1075;&#1072;&#1076;&#1072;&#1072;&#1076;,
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1079;&#1091;&#1091;&#1095;&#1083;&#1072;&#1093;
								&#1103;&#1074;&#1094;&#1072;&#1076; &#1198;&#1062;&#1050;-&#1080;&#1072;&#1089;
								&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;&#1075;&#1199;&#1081;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;
								&#1073;&#1072;&#1081;&#1076;&#1083;&#1099;&#1085;
								&#1091;&#1083;&#1084;&#1072;&#1072;&#1089; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1073;&#1080;&#1077;&#1083;&#1101;&#1101;&#1075;&#1199;&#1081;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1072;&#1089;
								&#1199;&#1199;&#1076;&#1101;&#1085; &#1075;&#1072;&#1088;&#1072;&#1093;
								&#1093;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;,
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;&#1075;&#1199;&#1081;.4.1.10<span
								style='mso-tab-count:1'>         </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1073;&#1199;&#1088;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1089;&#1086;&#1085;
								&#1101;&#1089;&#1074;&#1101;&#1083;
								&#1096;&#1080;&#1085;&#1101;&#1095;&#1080;&#1083;&#1089;&#1101;&#1085;
								“&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;, &#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;”-&#1080;&#1081;&#1075;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1257;&#1257;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;<span
								style='mso-spacerun:yes'>  </span>&#1198;&#1062;&#1050; &#1085;&#1100; &#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1075; &#1076;&#1072;&#1085;&#1075;&#1072;&#1072;&#1088;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-indent:-31.5pt'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>4.2.<span
								style='mso-tab-count:1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1076;&#1086;&#1088;
								&#1076;&#1091;&#1088;&#1076;&#1089;&#1072;&#1085;
								&#1101;&#1088;&#1093;&#1080;&#1081;&#1075; &#1101;&#1076;&#1101;&#1083;&#1078;,
								&#1199;&#1199;&#1088;&#1075;&#1080;&#1081;&#1075;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;&#1101;.
								&#1198;&#1199;&#1085;&#1076;:<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.1. <span style='mso-tab-count:
								1'> </span>&#1198;&#1062;&#1050;-&#1089;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1089;&#1072;&#1085;
								&#1073;&#1080;&#1095;&#1080;&#1075;,
								&#1073;&#1072;&#1088;&#1080;&#1084;&#1090;&#1099;&#1075;
								&#1199;&#1085;&#1101;&#1085; &#1079;&#1257;&#1074;,
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1075;&#1199;&#1081;&#1094;&#1101;&#1076;
								&#1073;&#1199;&#1088;&#1076;&#1199;&#1199;&#1083;&#1078;
								&#1257;&#1075;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.2. <span style='mso-tab-count:
								1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;
								&#1072;&#1074;&#1072;&#1093; &#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1257;&#1093;&#1257;&#1257;&#1089; &#1257;&#1084;&#1085;&#1257; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
								&#1093;&#1080;&#1081;&#1093; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1076;&#1199;&#1085;&#1075;,
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1093;&#1072;&#1084;&#1090; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085; &#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076;
								&#1091;&#1088;&#1100;&#1076;&#1095;&#1080;&#1083;&#1072;&#1085;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1089;&#1072;&#1085;
								&#1073;&#1072;&#1081;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.3. <span style='mso-tab-count:
								1'> </span>&#1198;&#1062;&#1050;-&#1076; &#1076;&#1072;&#1085;&#1089;
								&#1085;&#1101;&#1101;&#1093; &#1199;&#1077;&#1076; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1075;&#1072;&#1088;&#1075;&#1072;&#1078; &#1257;&#1075;&#1089;&#1257;&#1085;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1199;&#1199;&#1076;&#1101;&#1076;
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1089;&#1086;&#1085; &#1090;&#1091;&#1093;&#1072;&#1081;
								&#1073;&#1199;&#1088; <span style='mso-spacerun:yes'> </span>&#1198;&#1062;&#1050;-&#1076;
								&#1084;&#1101;&#1076;&#1101;&#1075;&#1076;&#1101;&#1078;,
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075;
								&#1096;&#1080;&#1085;&#1101;&#1095;&#1080;&#1083;&#1078;
								&#1257;&#1075;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;.
								&#1256;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1089;&#1086;&#1085; &#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075;
								&#1096;&#1080;&#1085;&#1101;&#1095;&#1083;&#1101;&#1085;
								&#1257;&#1075;&#1257;&#1257;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1089;&#1101;&#1093; &#1072;&#1083;&#1080;&#1074;&#1072;&#1072;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1083;&#1072;&#1075;&#1099;&#1075;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1093;&#1199;&#1083;&#1101;&#1101;&#1085;&#1101;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.4. <span style='mso-tab-count:
								1'> </span>&#1044;&#1072;&#1085;&#1089; &#1076;&#1072;&#1093;&#1100; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;,
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1101;&#1083;, &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1075;
								&#1079;&#1072;&#1093;&#1080;&#1088;&#1072;&#1085;
								&#1079;&#1072;&#1088;&#1094;&#1091;&#1091;&#1083;&#1072;&#1093;,
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1257;&#1093; &#1101;&#1088;&#1093;
								&#1073;&#1199;&#1093;&#1080;&#1081; &#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1101;&#1088;&#1093;&#1101;&#1101;
								&#1073;&#1091;&#1089;&#1076;&#1072;&#1076;
								&#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072;&#1075;&#1072;&#1072;&#1088;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1078; &#1073;&#1091;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1048;&#1088;&#1075;&#1101;&#1085;&#1080;&#1081;
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085; 64.2-&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085; &#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1099;&#1075;
								&#1093;&#1072;&#1085;&#1075;&#1072;&#1089;&#1072;&#1085;
								&#1080;&#1090;&#1075;&#1101;&#1084;&#1078;&#1083;&#1101;&#1083;,
								&#1090;&#1257;&#1083;&#1257;&#1257;&#1083;&#1257;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1090;&#1072;&#1088;&#1080;&#1072;&#1090;&#1072;&#1072;&#1088;
								&#1075;&#1101;&#1088;&#1095;&#1083;&#1199;&#1199;&#1083;&#1089;&#1101;&#1085;
								&#1075;&#1072;&#1088;&#1099;&#1085; &#1199;&#1089;&#1075;&#1080;&#1081;&#1085;
								&#1084;&#1072;&#1103;&#1075;&#1090;, &#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1093;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;,
								&#1093;&#1199;&#1089;&#1101;&#1083;&#1090;&#1080;&#1081;&#1085;
								&#1093;&#1072;&#1084;&#1090; &#1198;&#1062;&#1050;-&#1076;
								&#1257;&#1075;&#1085;&#1257;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.5. <span style='mso-tab-count:
								1'> </span>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; 1
								&#1073;&#1086;&#1083;&#1086;&#1085; 2-&#1090;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1064;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1076; &#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1089;&#1086;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1085;&#1101;&#1075;&#1101;&#1085; &#1072;&#1076;&#1080;&#1083;
								&#1076;&#1072;&#1075;&#1072;&#1078; &#1084;&#1257;&#1088;&#1076;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081; &#1073;&#1072;
								&#1091;&#1075; &#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1101;&#1101;&#1089;
								&#1090;&#1072;&#1090;&#1075;&#1072;&#1083;&#1079;&#1089;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1043;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1093; &#1199;&#1085;&#1076;&#1101;&#1089;&#1083;&#1101;&#1083;
								&#1073;&#1086;&#1083;&#1085;&#1086;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.6. <span style='mso-tab-count:
								1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083; &#1076;&#1072;&#1085;&#1089;
								&#1076;&#1072;&#1093;&#1100; &#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1083;&#1080;&#1081;&#1085;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1089;&#1072;&#1085;,
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1089;&#1072;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;,
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1075;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1089;&#1083;&#1080;&#1081;&#1085;
								&#1083;&#1072;&#1074;&#1083;&#1072;&#1075;&#1072;&#1072;,
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091;
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;
								&#1093;&#1080;&#1081;&#1075;&#1076;&#1089;&#1101;&#1085;
								&#1090;&#1072;&#1083;&#1072;&#1072;&#1088; &#1198;&#1062;&#1050;-&#1080;&#1072;&#1089;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;
								&#1072;&#1074;&#1072;&#1093; &#1101;&#1088;&#1093;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.7. <span style='mso-tab-count:
								1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1075;&#1072;&#1076;&#1072;&#1072;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072;&#1090;&#1072;&#1081;
								&#1199;&#1199;&#1089;&#1084;&#1101;&#1083; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089; /option, warrant &#1075;&#1101;&#1093;
								&#1084;&#1101;&#1090;/-&#1080;&#1081;&#1075;
								&#1093;&#1091;&#1076;&#1072;&#1083;&#1076;&#1072;&#1085;
								&#1072;&#1074;&#1089;&#1072;&#1085; &#1073;&#1086;&#1083;
								&#1076;&#1091;&#1091;&#1089;&#1072;&#1093;
								&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1257;&#1089;&#1257;&#1083;&#1090;
								&#1073;&#1091;&#1091;&#1088;&#1072;&#1083;&#1090;&#1099;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1095;&#1072;&#1085;&#1076;
								&#1089;&#1072;&#1081;&#1085; &#1093;&#1103;&#1085;&#1072;&#1078;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076; &#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081; &#1073;&#1072; &#1091;&#1075;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101; &#1076;&#1072;&#1075;&#1072;&#1078;
								&#1084;&#1257;&#1088;&#1076;&#1257;&#1257;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1076;&#1101;&#1085; &#1075;&#1072;&#1088;&#1072;&#1093;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1080;&#1081;&#1075; &#1257;&#1257;&#1088;&#1257;&#1257;
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.8. <span style='mso-tab-count:
								1'> </span>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;&#1099;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1073;&#1080;&#1088;&#1078;&#1101;&#1101;&#1088;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1083;&#1072;&#1075;&#1076;&#1072;&#1078;
								&#1073;&#1091;&#1081; &#1079;&#1072;&#1088;&#1080;&#1084;
								&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;&#1085;&#1076;
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085; &#1091;&#1083;&#1089;&#1099;&#1085;
								&#1093;&#1091;&#1091;&#1083;&#1100; &#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1076;&#1072;&#1075;&#1091;&#1091; &#1085;&#1101;&#1084;&#1101;&#1083;&#1090;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1199;&#1199;&#1076;&#1080;&#1081;&#1075;
								&#1072;&#1074;&#1076;&#1072;&#1075; &#1073;&#1257;&#1075;&#1257;&#1257;&#1076;
								&#1090;&#1091;&#1089; &#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1090;&#1257;&#1083;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081; &#1073;&#1072; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083; &#1076;&#1072;&#1085;&#1089;
								&#1076;&#1072;&#1093;&#1100; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1083;&#1101;&#1101;&#1089;
								&#1199;&#1083; &#1084;&#1072;&#1088;&#1075;&#1072;&#1093;
								&#1078;&#1091;&#1088;&#1084;&#1072;&#1072;&#1088; &#1198;&#1062;&#1050;
								&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:45.0pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-27.0pt;mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>4.2.9. <span style='mso-tab-count:
								1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095; &#1094;&#1072;&#1093;&#1080;&#1084;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1076;
								&#1085;&#1101;&#1074;&#1090;&#1088;&#1101;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1101;&#1085;&#1101; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1085;&#1091;&#1091;&#1094;&#1083;&#1072;&#1083;&#1090;&#1072;&#1081;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1083;&#1080;&#1081;&#1075;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1073;&#1091;&#1088;&#1091;&#1091;&#1090;&#1072;&#1081;
								&#1199;&#1081;&#1083;&#1076;&#1083;&#1080;&#1081;&#1085;
								&#1091;&#1083;&#1084;&#1072;&#1072;&#1089;
								&#1072;&#1083;&#1076;&#1089;&#1072;&#1085;&#1072;&#1072;&#1089;
								&#1199;&#1199;&#1089;&#1089;&#1101;&#1085;
								&#1072;&#1083;&#1080;&#1074;&#1072;&#1072;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1093;&#1086;&#1093;&#1080;&#1088;&#1083;&#1099;&#1075;
								&#1257;&#1257;&#1088;&#1257;&#1257; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-indent:-31.5pt'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>4.2.10. <span
								style='mso-tab-count:1'> </span>&#1256;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1257;&#1075;&#1089;&#1257;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081; &#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1075; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1072;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-indent:-31.5pt'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>4.2.11. <span
								style='mso-tab-count:1'> </span>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1198;&#1062;&#1050;-&#1080;&#1081;&#1085;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1073;&#1199;&#1088;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1089;&#1086;&#1085; “&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;, &#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;”-&#1080;&#1081;&#1075;
								&#1076;&#1072;&#1075;&#1072;&#1078; &#1084;&#1257;&#1088;&#1076;&#1257;&#1093;
								&#1199;&#1199;&#1088;&#1101;&#1075;&#1090;&#1101;&#1081; &#1073;&#1072;
								&#1091;&#1075; &#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1080;&#1081;&#1075; &#1093;&#1199;&#1083;&#1101;&#1101;&#1085;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1257;&#1257;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; <span
								style='mso-spacerun:yes'> </span>&#1198;&#1062;&#1050; &#1085;&#1100; &#1075;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1094;&#1091;&#1094;&#1083;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081;.<o:p></o:p></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-align:justify;text-justify:
								inter-ideograph;text-indent:-31.5pt'><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>4.2.12. <span style='mso-tab-count:1'> </span></span><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								“&#1048;&#1085;&#1090;&#1077;&#1088;&#1072;&#1082;&#1090;&#1080;&#1074;
								&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1089;”-&#1080;&#1081;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1072;&#1087;&#1087;&#1083;&#1080;&#1082;&#1101;&#1081;&#1096;&#1085;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1074;&#1077;&#1073;
								&#1093;&#1091;&#1074;&#1080;&#1083;&#1073;&#1072;&#1088;&#1072;&#1072;&#1088; &#1073;&#1080;&#1077;
								&#1076;&#1072;&#1072;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1072;&#1093;,
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1103;&#1074;&#1094;&#1072;&#1076; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1085;&#1101;&#1088;,
								&#1090;&#1086;&#1086; &#1096;&#1080;&#1088;&#1093;&#1101;&#1075;,
								&#1093;&#1072;&#1085;&#1096; &#1073;&#1086;&#1083;&#1086;&#1085;
								&#1072;&#1074;&#1072;&#1093; &#1101;&#1089;&#1074;&#1101;&#1083;
								&#1079;&#1072;&#1088;&#1072;&#1093; &#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1080;&#1081;&#1075;
								&#1072;&#1083;&#1076;&#1072;&#1072;&#1090;&#1072;&#1081;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1089;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; &#1199;&#1199;&#1089;&#1101;&#1093;
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1072;&#1083;&#1076;&#1072;&#1075;&#1076;&#1083;&#1099;&#1075;
								&#1257;&#1257;&#1088;&#1257;&#1257;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;&#1101;.<span style='color:black'><o:p></o:p></span></span></p>
								
								<p class=MsoNormal style='margin-left:49.5pt;text-indent:-31.5pt'><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1058;&#1040;&#1042;.
								&#1058;&#1256;&#1051;&#1041;&#1256;&#1056;
								&#1041;&#1040;&#1056;&#1040;&#1043;&#1044;&#1059;&#1059;&#1051;&#1040;&#1061; <o:p></o:p></span></b></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l10 level2 lfo19;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";color:black;mso-ansi-language:MN'><span
								style='mso-list:Ignore'>5.1.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1093;&#1080;&#1081;&#1089;&#1101;&#1085;
								&#1073;&#1080;&#1088;&#1078;&#1080;&#1081;&#1085;
								&#1093;&#1101;&#1083;&#1094;&#1101;&#1083;,
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
								&#1199;&#1199;&#1089;&#1089;&#1101;&#1085;
								&#1072;&#1083;&#1080;&#1074;&#1072;&#1072; &#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1085;&#1099;
								&#1199;&#1199;&#1088;&#1075;&#1080;&#1081;&#1075;
								&#1073;&#1199;&#1088;&#1101;&#1085; &#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.
								.</span><span lang=MN style='font-size:10.0pt;color:#0070C0;mso-ansi-language:
								MN'><o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l10 level2 lfo19;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";color:black;mso-ansi-language:MN'><span
								style='mso-list:Ignore'>5.2.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1198;&#1062;&#1050;
								&#1085;&#1100;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1085;&#1099; &#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1080;&#1081;&#1075;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1072;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081; &#1073;&#1072; &#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1085;&#1099;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1101;&#1101;&#1089;
								&#1199;&#1085;&#1076;&#1101;&#1089;&#1083;&#1101;&#1083;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1088;
								&#1079;&#1072;&#1081;&#1083;&#1089;&#1093;&#1080;&#1081;&#1089;&#1101;&#1085;,
								&#1093;&#1086;&#1081;&#1096;&#1083;&#1091;&#1091;&#1083;&#1089;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; <span
								style='mso-spacerun:yes'> </span>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1093;&#1101;&#1083;&#1094;&#1083;&#1080;&#1081;&#1075;
								&#1073;&#1091;&#1094;&#1072;&#1072;&#1093;, &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1101;&#1079;&#1101;&#1084;&#1096;&#1080;&#1083;&#1076;
								&#1073;&#1072;&#1081;&#1075;&#1072;&#1072; &#1199;&#1085;&#1101;&#1090;
								&#1094;&#1072;&#1072;&#1089;&#1099;&#1075;
								&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1085; &#1072;&#1074;&#1095;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1093;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;
								&#1090;&#1086;&#1086;&#1094;&#1086;&#1086;&#1085;&#1099;
								&#1199;&#1199;&#1088;&#1075;&#1080;&#1081;&#1075; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1072;&#1072;&#1088; &#1093;&#1072;&#1085;&#1075;&#1091;&#1091;&#1083;&#1072;&#1093;,
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1101;&#1088;&#1093;&#1090;&#1101;&#1081; &#1073;&#1072;&#1081;&#1085;&#1072;</span><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN;mso-fareast-language:JA'>.</span><span
								lang=MN style='font-size:10.0pt;color:#0070C0;mso-ansi-language:MN'><o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l10 level2 lfo19;
								tab-stops:45.0pt'><![if !supportLists]><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";color:black;mso-ansi-language:MN'><span
								style='mso-list:Ignore'>5.3.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN;mso-fareast-language:JA'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1076;&#1086;&#1090;&#1086;&#1086;&#1076;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076; &#1084;&#1072;&#1088;&#1078;&#1080;&#1085;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1078;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1076;
								&#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1078; &#1199;&#1083;&#1076;&#1101;&#1075;&#1076;&#1101;&#1083;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1257;&#1257; &#1090;&#1257;&#1083;&#1257;&#1257;&#1075;&#1199;&#1081;&#1075;&#1101;&#1101;&#1089;
								&#1199;&#1199;&#1089;&#1089;&#1101;&#1085;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075;
								&#1085;&#1257;&#1093;&#1257;&#1085; &#1073;&#1072;&#1088;&#1072;&#1075;&#1076;&#1091;&#1091;&#1083;&#1072;&#1093;&#1072;&#1076;
								&#1052;&#1198;&#1062;&#1050;&#1058;-&#1080;&#1081;&#1085;
								“&#1198;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1082;&#1083;&#1080;&#1088;&#1080;&#1085;&#1075;&#1080;&#1081;&#1085;
								&#1078;&#1091;&#1088;&#1072;&#1084;”-&#1099;&#1075;
								&#1073;&#1072;&#1088;&#1080;&#1084;&#1090;&#1072;&#1083;&#1085;&#1072;.</span><span
								lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;tab-stops:45.0pt'><span lang=MN style='font-size:
								10.0pt;color:red;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal><b><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1047;&#1059;&#1056;&#1043;&#1040;&#1040;.
								&#1043;&#1069;&#1056;&#1069;&#1069;&#1043;
								&#1062;&#1059;&#1062;&#1051;&#1040;&#1061;,
								&#1053;&#1069;&#1052;&#1069;&#1051;&#1058;
								&#1256;&#1256;&#1056;&#1063;&#1051;&#1256;&#1051;&#1058;
								&#1054;&#1056;&#1059;&#1059;&#1051;&#1040;&#1061;,
								&#1061;&#1059;&#1043;&#1040;&#1062;&#1040;&#1040;<o:p></o:p></span></b></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l9 level2 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1044;&#1072;&#1088;&#1072;&#1072;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1072;&#1083;&#1100; &#1085;&#1101;&#1075; &#1090;&#1072;&#1083;&#1099;&#1085;
								&#1089;&#1072;&#1085;&#1072;&#1072;&#1095;&#1080;&#1083;&#1075;&#1072;&#1072;&#1088;
								&#1094;&#1091;&#1094;&#1072;&#1083;&#1085;&#1072;.
								&#1198;&#1199;&#1085;&#1076;: <b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:45.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-27.0pt;mso-list:l9 level3 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;,
								&#1085;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
								&#1076;&#1072;&#1085;&#1089;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1199;&#1081;&#1083;&#1095;&#1080;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
								&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1075;
								&#1090;&#1257;&#1083;&#1257;&#1257;&#1075;&#1199;&#1081;,
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1089;&#1101;&#1085;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101; &#1091;&#1076;&#1072;&#1072;
								&#1076;&#1072;&#1088;&#1072;&#1072; <span
								style='mso-spacerun:yes'> </span>&#1101;&#1089;&#1074;&#1101;&#1083;
								&#1079;&#1086;&#1093;&#1080;&#1093; &#1105;&#1089;&#1086;&#1086;&#1088; &#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1101;&#1075;&#1199;&#1081;;<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:45.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-27.0pt;mso-list:l9 level3 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;&#1090;&#1101;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;&#1075;&#1086;&#1086;&#1088;
								&#1198;&#1062;&#1050;-&#1080;&#1081;&#1085; &#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;&#1085;&#1076;
								&#1085;&#1086;&#1094;&#1090;&#1086;&#1081; &#1093;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;
								&#1199;&#1079;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;
								&#1073;&#1072;&#1081;&#1076;&#1072;&#1083; &#1073;&#1080;&#1081;
								&#1073;&#1086;&#1083;&#1089;&#1086;&#1085;;<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:45.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-27.0pt;mso-list:l9 level3 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1198;&#1062;&#1050; &#1085;&#1100;
								&#1093;&#1091;&#1091;&#1083;&#1100;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1084;&#1078;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1101;&#1088;&#1093;
								&#1073;&#1199;&#1093;&#1080;&#1081;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1096;&#1072;&#1072;&#1088;&#1076;&#1083;&#1072;&#1075;&#1099;&#1075;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1078;
								&#1095;&#1072;&#1076;&#1072;&#1093;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1089;&#1086;&#1085;,
								&#1094;&#1072;&#1072;&#1096;&#1080;&#1076;
								&#1073;&#1080;&#1077;&#1083;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1086;&#1093; &#1085;&#1100; &#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;
								&#1073;&#1086;&#1083;&#1089;&#1086;&#1085;,
								&#1090;&#1091;&#1089;&#1075;&#1072;&#1081;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1083;&#1080;&#1081;&#1075;
								&#1093;&#1199;&#1095;&#1080;&#1085;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1075;&#1086;&#1089;&#1086;&#1085;;<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:45.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-27.0pt;mso-list:l9 level3 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1073;&#1257;&#1075;&#1257;&#1257;&#1076; &#1094;&#1072;&#1072;&#1096;&#1080;&#1076;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;
								&#1103;&#1074;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1073;&#1086;&#1083;&#1086;&#1084;&#1078;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1089;&#1086;&#1085;;<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:45.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-27.0pt;mso-list:l9 level3 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.1.5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085; &#1101;&#1093;
								&#1199;&#1199;&#1089;&#1074;&#1101;&#1088; &#1093;&#1091;&#1091;&#1083;&#1100;
								&#1073;&#1091;&#1089; &#1073;&#1086;&#1083;&#1086;&#1093; &#1085;&#1100;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1075;&#1076;&#1089;&#1086;&#1085;,
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;, &#1090;&#1199;&#1199;&#1085;&#1080;&#1081;
								&#1091;&#1076;&#1080;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;,
								&#1072;&#1078;&#1080;&#1083;&#1090;&#1072;&#1085; &#1085;&#1100;
								&#1084;&#1257;&#1085;&#1075;&#1257; &#1091;&#1075;&#1072;&#1072;&#1093;,
								&#1090;&#1077;&#1088;&#1088;&#1086;&#1088;&#1080;&#1079;&#1084;&#1099;&#1075;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;&#1075; &#1076;&#1101;&#1084;&#1078;&#1076;&#1101;&#1075;
								&#1073;&#1091;&#1102;&#1091;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1076;&#1101;&#1075;,
								&#1090;&#1091;&#1093;&#1072;&#1081;&#1085; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257; &#1085;&#1100;
								&#1084;&#1257;&#1085;&#1075;&#1257; &#1091;&#1075;&#1072;&#1072;&#1093;,
								&#1090;&#1077;&#1088;&#1088;&#1086;&#1088;&#1080;&#1079;&#1084;&#1099;&#1075;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1090;&#1086;&#1081;
								&#1073;&#1086;&#1083;&#1086;&#1093; &#1085;&#1100;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1075;&#1076;&#1089;&#1086;&#1085;;<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l9 level2 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.2.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101; &#1085;&#1100; &#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1076;&#1072;&#1085;&#1089; &#1093;&#1072;&#1072;&#1093;
								&#1093;&#1199;&#1089;&#1101;&#1083;&#1090; &#1075;&#1072;&#1088;&#1075;&#1072;&#1089;&#1085;&#1072;&#1072;&#1088;
								&#1101;&#1089;&#1093;&#1199;&#1083; 6.1-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1072;&#1085;
								&#1199;&#1085;&#1076;&#1101;&#1089;&#1083;&#1101;&#1083;&#1101;&#1101;&#1088;
								&#1094;&#1091;&#1094;&#1072;&#1083;&#1089;&#1085;&#1072;&#1072;&#1088;
								&#1076;&#1091;&#1091;&#1089;&#1075;&#1072;&#1074;&#1072;&#1088;
								&#1073;&#1086;&#1083;&#1085;&#1086;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l9 level2 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.3.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1043;&#1101;&#1088;&#1101;&#1101;&#1075;&#1101;&#1101;&#1088;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1089;&#1101;&#1085;
								&#1199;&#1199;&#1088;&#1075;&#1101;&#1101;
								&#1079;&#1257;&#1088;&#1095;&#1089;&#1257;&#1085;&#1257;&#1257;&#1089;
								&#1085;&#1257;&#1075;&#1257;&#1257; &#1090;&#1072;&#1083;&#1076;&#1072;&#1072;
								&#1091;&#1095;&#1080;&#1088;&#1089;&#1072;&#1085; &#1093;&#1086;&#1093;&#1080;&#1088;&#1083;&#1099;&#1075;
								&#1073;&#1091;&#1088;&#1091;&#1091;&#1090;&#1072;&#1081; &#1090;&#1072;&#1083;
								&#1085;&#1100; &#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l9 level2 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.4.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1103;&#1074;&#1094;&#1072;&#1076; &#1096;&#1080;&#1085;&#1101;&#1101;&#1088;
								&#1199;&#1199;&#1089;&#1101;&#1093; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1072;,
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;&#1080;&#1081;&#1075;
								&#1079;&#1086;&#1093;&#1080;&#1094;&#1091;&#1091;&#1083;&#1072;&#1093;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1086;&#1088;
								&#1058;&#1072;&#1083;&#1091;&#1091;&#1076;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1085;
								&#1090;&#1086;&#1093;&#1080;&#1088;&#1086;&#1083;&#1094;&#1086;&#1078;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1075;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1085;&#1101;&#1084;&#1101;&#1083;&#1090;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1078; &#1073;&#1086;&#1083;&#1085;&#1086;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l9 level2 lfo21'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>6.5.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1085;&#1101;&#1084;&#1101;&#1083;&#1090;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1072;&#1093;&#1076;&#1072;&#1072;
								&#1058;&#1072;&#1083;&#1091;&#1091;&#1076;
								&#1085;&#1101;&#1084;&#1101;&#1083;&#1090;,
								&#1257;&#1257;&#1088;&#1095;&#1083;&#1257;&#1083;&#1090;&#1080;&#1081;&#1085;
								&#1075;&#1101;&#1088;&#1101;&#1101;
								&#1073;&#1080;&#1095;&#1075;&#1101;&#1101;&#1088;
								&#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1078;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1093;&#1072;&#1074;&#1089;&#1072;&#1088;&#1075;&#1072;&#1085;&#1072;.
								&#1069;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1093;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; &#1085;&#1100; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1089;&#1072;&#1083;&#1096;&#1075;&#1199;&#1081;
								&#1093;&#1101;&#1089;&#1101;&#1075; &#1073;&#1086;&#1083;&#1085;&#1086;.<span
								style='mso-spacerun:yes'>  </span><b><o:p></o:p></b></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1044;&#1054;&#1051;&#1054;&#1054;.
								&#1041;&#1040;&#1058;&#1040;&#1051;&#1043;&#1040;&#1040;<o:p></o:p></span></b></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l22 level2 lfo26'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN'><span style='mso-list:Ignore'>7.1<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; &#1199;&#1199;&#1075;&#1101;&#1101;&#1088;
								&#1257;&#1257;&#1088;&#1080;&#1081;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085; &#1101;&#1093;
								&#1199;&#1199;&#1089;&#1074;&#1101;&#1088; &#1085;&#1100; &#1093;&#1091;&#1091;&#1083;&#1100;
								&#1105;&#1089;&#1085;&#1099; &#1076;&#1072;&#1075;&#1091;&#1091;
								&#1073;&#1199;&#1088;&#1076;&#1089;&#1101;&#1085;,
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1085;&#1100; &#1079;&#1257;&#1074;&#1093;&#1257;&#1085;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;&#1076; &#1086;&#1088;&#1086;&#1083;&#1094;&#1086;&#1093;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1090;&#1086;&#1081;,
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;, &#1091;&#1076;&#1080;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;,
								&#1072;&#1078;&#1080;&#1083;&#1090;&#1072;&#1085; &#1085;&#1100;
								&#1084;&#1257;&#1085;&#1075;&#1257; &#1091;&#1075;&#1072;&#1072;&#1093;,
								&#1090;&#1077;&#1088;&#1088;&#1086;&#1088;&#1080;&#1079;&#1084;&#1099;&#1075;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;&#1075;
								&#1076;&#1101;&#1084;&#1078;&#1076;&#1101;&#1075;&#1075;&#1199;&#1081;,
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1076;&#1101;&#1075;&#1075;&#1199;&#1081;,
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1084;&#1257;&#1085;&#1075;&#1257;&#1085; &#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1085;&#1100; &#1084;&#1257;&#1085;&#1075;&#1257;
								&#1091;&#1075;&#1072;&#1072;&#1093;,
								&#1090;&#1077;&#1088;&#1088;&#1086;&#1088;&#1080;&#1079;&#1084;&#1099;&#1075;
								&#1089;&#1072;&#1085;&#1093;&#1199;&#1199;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1199;&#1081;&#1083;
								&#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;&#1085;&#1076;
								&#1079;&#1072;&#1088;&#1094;&#1091;&#1091;&#1083;&#1072;&#1075;&#1076;&#1072;&#1093;&#1075;&#1199;&#1081;,
								&#1072;&#1083;&#1080;&#1074;&#1072;&#1072;
								&#1093;&#1101;&#1083;&#1073;&#1101;&#1088;&#1101;&#1101;&#1088;
								&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1083;&#1075;&#1199;&#1081;
								&#1073;&#1086;&#1083;&#1086;&#1093;&#1099;&#1075;
								&#1199;&#1199;&#1075;&#1101;&#1101;&#1088; <b>&#1041;&#1040;&#1058;&#1040;&#1051;&#1046;</b>
								&#1073;&#1072;&#1081;&#1085;&#1072;. <o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l22 level2 lfo26'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN'><span style='mso-list:Ignore'>7.2<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1076;
								&#1198;&#1062;&#1050;-&#1080;&#1072;&#1089; &#1084;&#1072;&#1088;&#1078;&#1080;&#1085;
								&#1086;&#1083;&#1075;&#1086;&#1086;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
								&#1090;&#1257;&#1083;&#1073;&#1257;&#1088;&#1080;&#1081;&#1075; 100
								&#1093;&#1091;&#1074;&#1100;
								&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1089;&#1085;&#1099; &#1199;&#1085;&#1076;&#1089;&#1101;&#1085;
								&#1076;&#1101;&#1101;&#1088;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
								&#1257;&#1075;&#1085;&#1257; &#1075;&#1101;&#1076;&#1075;&#1101;&#1101;
								&#1199;&#1199;&#1075;&#1101;&#1101;&#1088; <b>&#1041;&#1040;&#1058;&#1040;&#1051;&#1046;</b>
								&#1073;&#1072;&#1081;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l22 level2 lfo26'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN'><span style='mso-list:Ignore'>7.3<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
								&#1085;&#1100; /&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;/
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1093;
								&#1050;&#1086;&#1084;&#1087;&#1072;&#1085;&#1080;&#1081;&#1085;
								&#1090;&#1091;&#1093;&#1072;&#1081; &#1093;&#1091;&#1091;&#1083;&#1100;&#1076;
								&#1085;&#1080;&#1081;&#1094;&#1089;&#1101;&#1085;
								&#1079;&#1086;&#1093;&#1080;&#1089;&#1090;&#1086;&#1081; &#1079;&#1072;&#1089;&#1072;&#1075;&#1083;&#1072;&#1083;&#1090;&#1072;&#1081;,
								&#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1080;&#1081;&#1085;
								&#1091;&#1076;&#1080;&#1088;&#1076;&#1083;&#1072;&#1075;&#1099;&#1085;
								&#1073;&#1086;&#1076;&#1083;&#1086;&#1075;&#1086;&#1090;&#1086;&#1081;,
								&#1101;&#1088;&#1093; &#1073;&#1199;&#1093;&#1080;&#1081; &#1073;&#1072;&#1081;&#1075;&#1091;&#1091;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;&#1089;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1089;&#1072;&#1085;
								&#1096;&#1072;&#1083;&#1075;&#1091;&#1091;&#1088;
								&#1199;&#1079;&#1199;&#1199;&#1083;&#1101;&#1083;&#1090;&#1080;&#1081;&#1075;
								&#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1085;&#1075;&#1072;&#1089;&#1072;&#1085;,
								&#1094;&#1072;&#1072;&#1096;&#1080;&#1076;
								&#1090;&#1086;&#1075;&#1090;&#1074;&#1086;&#1088;&#1090;&#1086;&#1081;
								&#1199;&#1081;&#1083; &#1072;&#1078;&#1080;&#1083;&#1083;&#1072;&#1075;&#1072;&#1072;
								&#1103;&#1074;&#1091;&#1091;&#1083;&#1072;&#1093;, &#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1101;&#1094;&#1089;&#1080;&#1081;&#1085;
								&#1257;&#1084;&#1095;&#1083;&#1257;&#1075;&#1095;&#1080;&#1081;&#1075; &#1198;&#1062;&#1050;-&#1076;
								&#1199;&#1085;&#1101;&#1085; &#1079;&#1257;&#1074; &#1090;&#1086;&#1076;&#1086;&#1088;&#1093;&#1086;&#1081;&#1083;&#1089;&#1086;&#1085;
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
								&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;
								&#1075;&#1101;&#1076;&#1075;&#1101;&#1101;
								&#1199;&#1199;&#1075;&#1101;&#1101;&#1088; <b>&#1041;&#1040;&#1058;&#1040;&#1051;&#1046;</b>
								&#1073;&#1072;&#1081;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l22 level2 lfo26'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN'><span style='mso-list:Ignore'>7.4<span
								style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
								lang=MN style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1198;&#1062;&#1050;
								&#1085;&#1100;
								&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1090;&#1072;&#1081;
								&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081; &#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;,
								&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1075;
								&#1090;&#1199;&#1088;&#1075;&#1101;&#1085;
								&#1096;&#1091;&#1091;&#1088;&#1093;&#1072;&#1081;,
								&#1072;&#1083;&#1076;&#1072;&#1072;&#1075;&#1199;&#1081;
								&#1075;&#1199;&#1081;&#1094;&#1101;&#1090;&#1075;&#1101;&#1078;,
								&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;,
								&#1085;&#1091;&#1091;&#1094;&#1083;&#1072;&#1083;&#1099;&#1075;
								&#1095;&#1072;&#1085;&#1076;
								&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1085; &#1257;&#1257;&#1088;
								&#1079;&#1086;&#1088;&#1080;&#1083;&#1075;&#1086;&#1086;&#1088;
								&#1072;&#1096;&#1080;&#1075;&#1083;&#1072;&#1093;&#1075;&#1199;&#1081;,
								&#1073;&#1091;&#1089;&#1076;&#1072;&#1076;
								&#1079;&#1072;&#1076;&#1088;&#1091;&#1091;&#1083;&#1072;&#1093;&#1075;&#1199;&#1081;
								&#1075;&#1101;&#1076;&#1075;&#1101;&#1101;
								&#1199;&#1199;&#1075;&#1101;&#1101;&#1088; <b>&#1041;&#1040;&#1058;&#1040;&#1051;&#1046;</b>
								&#1073;&#1072;&#1081;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoNormal><b><span lang=MN style='font-size:10.0pt;color:black;
								mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;color:black;mso-ansi-language:MN'>&#1053;&#1040;&#1049;&#1052;.
								&#1041;&#1059;&#1057;&#1040;&#1044; &#1047;&#1198;&#1049;&#1051;<o:p></o:p></span></b></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l25 level2 lfo27'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>8.1<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1072;&#1083;&#1100; &#1085;&#1101;&#1075; &#1079;&#1199;&#1081;&#1083;
								&#1079;&#1072;&#1072;&#1083;&#1090; &#1093;&#1199;&#1095;&#1080;&#1085;
								&#1090;&#1257;&#1075;&#1257;&#1083;&#1076;&#1257;&#1088; &#1073;&#1091;&#1089;
								&#1073;&#1072;&#1081;&#1093;, &#1093;&#1199;&#1095;&#1080;&#1085;
								&#1090;&#1257;&#1075;&#1257;&#1083;&#1076;&#1257;&#1088;
								&#1073;&#1091;&#1089;&#1076; &#1090;&#1086;&#1086;&#1094;&#1086;&#1075;&#1076;&#1086;&#1093;
								&#1085;&#1100; &#1075;&#1101;&#1088;&#1101;&#1101;&#1085;&#1080;&#1081;
								&#1073;&#1091;&#1089;&#1072;&#1076; &#1079;&#1199;&#1081;&#1083;,
								&#1093;&#1101;&#1089;&#1101;&#1075;, &#1079;&#1072;&#1072;&#1083;&#1090;&#1072;&#1076;
								&#1085;&#1257;&#1083;&#1257;&#1257;&#1083;&#1257;&#1093;&#1075;&#1199;&#1081;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l25 level2 lfo27'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>8.2<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1085;&#1076;
								&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; &#1059;&#1083;&#1089;&#1099;&#1085;
								&#1093;&#1091;&#1091;&#1083;&#1100;
								&#1090;&#1086;&#1075;&#1090;&#1086;&#1086;&#1084;&#1078;&#1080;&#1081;&#1075;
								&#1091;&#1076;&#1080;&#1088;&#1076;&#1083;&#1072;&#1075;&#1072;
								&#1073;&#1086;&#1083;&#1075;&#1086;&#1085;&#1086;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l25 level2 lfo27'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>8.3<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1075;
								2 &#1101;&#1093; &#1093;&#1091;&#1074;&#1100; &#1199;&#1081;&#1083;&#1076;&#1101;&#1078;
								&#1090;&#1072;&#1083;&#1091;&#1091;&#1076; &#1075;&#1072;&#1088;&#1099;&#1085;
								&#1199;&#1089;&#1101;&#1075; &#1079;&#1091;&#1088;&#1078;
								&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1078;&#1091;&#1091;&#1083;&#1089;&#1085;&#1072;&#1072;&#1088;
								&#1101;&#1089;&#1093;&#1199;&#1083;
								&#1048;&#1088;&#1075;&#1101;&#1085;&#1080;&#1081;
								&#1093;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085; 43.2.2-&#1076;
								&#1079;&#1072;&#1072;&#1089;&#1085;&#1072;&#1072;&#1088;
								&#1093;&#1199;&#1095;&#1080;&#1085; &#1090;&#1257;&#1075;&#1257;&#1083;&#1076;&#1257;&#1088;
								&#1084;&#1257;&#1088;&#1076;&#1257;&#1078;
								&#1101;&#1093;&#1101;&#1083;&#1085;&#1101;.
								&#1058;&#1072;&#1083;&#1091;&#1091;&#1076;
								&#1101;&#1085;&#1101;&#1093;&#1199;&#1199;
								&#1075;&#1101;&#1088;&#1101;&#1101;&#1075; &#1073;&#1091;&#1089;&#1072;&#1076;
								&#1093;&#1101;&#1083; &#1076;&#1101;&#1101;&#1088;
								&#1086;&#1088;&#1095;&#1091;&#1091;&#1083;&#1078;
								&#1073;&#1086;&#1083;&#1086;&#1093; &#1073;&#1257;&#1075;&#1257;&#1257;&#1076;
								&#1058;&#1072;&#1083;&#1091;&#1091;&#1076;&#1099;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1072;&#1085;&#1076;
								&#1073;&#1086;&#1083;&#1086;&#1085;
								&#1084;&#1072;&#1088;&#1075;&#1072;&#1072;&#1085;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;&#1083;&#1101;&#1093;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
								&#1079;&#1257;&#1074;&#1093;&#1257;&#1085;
								&#1052;&#1086;&#1085;&#1075;&#1086;&#1083; &#1093;&#1101;&#1083;
								&#1076;&#1101;&#1101;&#1088;&#1093; &#1101;&#1093;
								&#1093;&#1091;&#1074;&#1080;&#1081;&#1075;
								&#1073;&#1072;&#1088;&#1080;&#1084;&#1090;&#1072;&#1083;&#1085;&#1072;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoListParagraph style='margin-left:18.0pt;text-align:justify;
								text-justify:inter-ideograph;text-indent:-18.0pt;mso-list:l25 level2 lfo27'><![if !supportLists]><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								color:black;mso-ansi-language:MN;mso-bidi-font-weight:bold'><span
								style='mso-list:Ignore'>8.4<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
								</span></span></span><![endif]><span lang=MN style='font-size:10.0pt;
								color:black;mso-ansi-language:MN'>&#1069;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;&#1075;
								&#1093;&#1101;&#1088;&#1101;&#1075;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093;
								&#1103;&#1074;&#1094;&#1072;&#1076;
								&#1058;&#1072;&#1083;&#1091;&#1091;&#1076;&#1099;&#1085;
								&#1093;&#1086;&#1086;&#1088;&#1086;&#1085;&#1076;
								&#1199;&#1199;&#1089;&#1089;&#1101;&#1085; &#1199;&#1083;
								&#1086;&#1081;&#1083;&#1075;&#1086;&#1083;&#1094;&#1083;&#1099;&#1075;
								&#1079;&#1257;&#1074;&#1096;&#1080;&#1083;&#1094;&#1083;&#1080;&#1081;&#1085;
								&#1079;&#1072;&#1084;&#1072;&#1072;&#1088;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;&#1083;&#1101;&#1085;&#1101;.
								&#1048;&#1081;&#1085;&#1093;&#1199;&#1199; &#1084;&#1072;&#1088;&#1075;&#1072;&#1072;&#1085;&#1099;&#1075;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;&#1083;&#1101;&#1078;
								&#1095;&#1072;&#1076;&#1072;&#1072;&#1075;&#1199;&#1081;
								&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076; <span
								style='mso-spacerun:yes'> </span>&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;
								&#1059;&#1083;&#1089;&#1099;&#1085;
								&#1072;&#1088;&#1073;&#1080;&#1090;&#1088;&#1072;&#1072;&#1088;
								&#1096;&#1080;&#1081;&#1076;&#1074;&#1101;&#1088;&#1083;&#1199;&#1199;&#1083;&#1085;&#1101;.<b><o:p></o:p></b></span></p>
								
								<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
								mso-pagination:none;text-autospace:none'><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'><o:p>&nbsp;</o:p></span></p>
								
								<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=708
								 style='width:530.75pt;border-collapse:collapse;mso-yfti-tbllook:1184;
								 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
									<td width=30 valign=top style='width:22.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal><v:rect id="Rectangle_x0020_2" o:spid="_x0000_s2051"
									 style='position:absolute;margin-left:-1.1pt;margin-top:.85pt;width:16.4pt;
									 height:11.4pt;z-index:251659264;visibility:visible;mso-wrap-style:square;
									 mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
									 mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
									 mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
									 mso-position-vertical:absolute;mso-position-vertical-relative:text;
									 v-text-anchor:middle' o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
								90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
								0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
								OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
								SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
								JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
								bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
								JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
								22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
								OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
								IQCbk1CbRAIAAOMEAAAOAAAAZHJzL2Uyb0RvYy54bWysVMFu2zAMvQ/YPwi6r06MdkuNOkXQosOA
								og2aDj0rshQbk0WNUuJkXz9KdpyiK3YYdpEpkY8Unx59db1vDdsp9A3Ykk/PJpwpK6Fq7Kbk35/v
								Ps0480HYShiwquQH5fn1/OOHq84VKocaTKWQURLri86VvA7BFVnmZa1a4c/AKUtODdiKQFvcZBWK
								jrK3Jssnk89ZB1g5BKm8p9Pb3snnKb/WSoZHrb0KzJSc7hbSimldxzWbX4lig8LVjRyuIf7hFq1o
								LBUdU92KINgWmz9StY1E8KDDmYQ2A60bqVIP1M108qabVS2cSr0QOd6NNPn/l1Y+7FZuiURD53zh
								yYxd7DW28Uv3Y/tE1mEkS+0Dk3SYT2Z5fsmZJNf0/Hx2cRHJzE5ghz58VdCyaJQc6S0SRWJ370Mf
								egwh3Kl8ssLBqHgDY5+UZk0VCyZ0Uoa6Mch2gt60+jEdyqbICNGNMSNo+h7IhCNoiI0wldQyAifv
								AU/VxuhUEWwYgW1jAf8O1n38seu+19j2GqrDEhlCr1Pv5F1D5N0LH5YCSZgkYRq28EiLNtCVHAaL
								sxrw13vnMZ70Ql7OOhJ6yf3PrUDFmflmSUmX9HhxMtLm/OJLTht87Vm/9thtewPE+5TG2slkxvhg
								jqZGaF9oJhexKrmElVS75DLgcXMT+gGkqZZqsUhhNA1OhHu7cjImj6xGcTzvXwS6QUGBpPcAx6EQ
								xRsh9bERaWGxDaCbpLITrwPfNElJp8PUx1F9vU9Rp3/T/DcAAAD//wMAUEsDBBQABgAIAAAAIQDI
								4e8q3AAAAAYBAAAPAAAAZHJzL2Rvd25yZXYueG1sTI7NToNAFIX3Jn2HyW3irh1EpYoMjSExJrqS
								tovupswViMwdwkwp+PReV7o8Pznny7aT7cSIg28dKbhZRyCQKmdaqhXsdy+rBxA+aDK6c4QKZvSw
								zRdXmU6Nu9AHjmWoBY+QT7WCJoQ+ldJXDVrt165H4uzTDVYHlkMtzaAvPG47GUdRIq1uiR8a3WPR
								YPVVnq2C91mGcX9IHr/Hop1NeSxe37BQ6no5PT+BCDiFvzL84jM65Mx0cmcyXnQKVnHMTfY3IDi+
								jRIQJwXx3T3IPJP/8fMfAAAA//8DAFBLAQItABQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAAAAA
								AAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1sUEsBAi0AFAAGAAgAAAAhADj9If/WAAAAlAEA
								AAsAAAAAAAAAAAAAAAAALwEAAF9yZWxzLy5yZWxzUEsBAi0AFAAGAAgAAAAhAJuTUJtEAgAA4wQA
								AA4AAAAAAAAAAAAAAAAALgIAAGRycy9lMm9Eb2MueG1sUEsBAi0AFAAGAAgAAAAhAMjh7yrcAAAA
								BgEAAA8AAAAAAAAAAAAAAAAAngQAAGRycy9kb3ducmV2LnhtbFBLBQYAAAAABAAEAPMAAACnBQAA
								AAA=
								" fillcolor="white [3201]" strokecolor="black [3200]" strokeweight="2pt"/><span
									lang=MN style='font-size:11.0pt;mso-bidi-font-size:12.0pt;mso-ansi-language:
									MN'><o:p></o:p></span></p>
									</td>
									<td width=678 valign=top style='width:508.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoNormal><i><span lang=MN style='font-size:11.0pt;mso-bidi-font-size:
									12.0pt;mso-ansi-language:MN'>&#1043;&#1101;&#1088;&#1101;&#1101;&#1090;&#1101;&#1081;
									&#1091;&#1085;&#1096;&#1080;&#1078; &#1090;&#1072;&#1085;&#1080;&#1083;&#1094;&#1072;&#1074;.
									/&#1061;&#1072;&#1078;&#1091;&#1091; &#1090;&#1072;&#1083;&#1099;&#1085;
									&#1085;&#1199;&#1076;&#1101;&#1085;&#1076; &#1043;&#1101;&#1088;&#1101;&#1101;&#1090;&#1101;&#1081;
									&#1090;&#1072;&#1085;&#1080;&#1083;&#1094;&#1089;&#1072;&#1085;&#1072;&#1072;
									&#1073;&#1072;&#1090;&#1072;&#1090;&#1075;&#1072;&#1078; &#1095;&#1072;&#1075;&#1090;&#1083;&#1072;&#1085;&#1072;
									&#1091;&#1091;./<o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:11.0pt;mso-bidi-font-size:
									12.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									</td>
								 </tr>
								</table>
								
								<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph'><span
								lang=MN style='font-size:10.0pt;background:lime;mso-highlight:lime;mso-ansi-language:
								MN'>…</span><span lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>
								&#1086;&#1074;&#1086;&#1075;&#1090;&#1086;&#1081; <span style='background:lime;
								mso-highlight:lime'>…</span> &#1084;&#1080;&#1085;&#1080;&#1081;
								&#1073;&#1080;&#1077; &#1101;&#1085;&#1101;&#1093;&#1199;&#1199; &#1043;&#1101;&#1088;&#1101;&#1101;,
								&#1090;&#1199;&#1199;&#1085;&#1080;&#1081;
								&#1093;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090;&#1091;&#1091;&#1076;&#1090;&#1072;&#1081;
								&#1073;&#1199;&#1088;&#1101;&#1085;
								&#1090;&#1072;&#1085;&#1080;&#1083;&#1094;&#1072;&#1078;, &#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
								&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;
								&#1086;&#1088;&#1091;&#1091;&#1083;&#1072;&#1083;&#1090;
								&#1073;&#1086;&#1083;&#1086;&#1085; &#1093;&#1080;&#1081;&#1093;
								&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
								&#1091;&#1083;&#1084;&#1072;&#1072;&#1089; &#1091;&#1095;&#1080;&#1088;&#1095;
								&#1073;&#1086;&#1083;&#1086;&#1093; &#1101;&#1088;&#1089;&#1076;&#1101;&#1083;&#1090;&#1101;&#1081;
								&#1090;&#1072;&#1085;&#1080;&#1083;&#1094;&#1089;&#1072;&#1085;
								&#1073;&#1257;&#1075;&#1257;&#1257;&#1076; &#1199;&#1199;&#1089;&#1101;&#1093;
								&#1072;&#1083;&#1080;&#1074;&#1072;&#1072; &#1101;&#1088;&#1089;&#1076;&#1101;&#1083;,
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1083;&#1072;&#1075;&#1099;&#1075;
								&#1073;&#1199;&#1088;&#1101;&#1085;
								&#1093;&#1072;&#1088;&#1080;&#1091;&#1094;&#1085;&#1072;
								&#1075;&#1101;&#1076;&#1075;&#1101;&#1101;
								&#1093;&#1199;&#1083;&#1101;&#1101;&#1085;
								&#1079;&#1257;&#1074;&#1096;&#1257;&#1257;&#1088;&#1095; &#1073;&#1072;&#1081;&#1085;&#1072;.<o:p></o:p></span></p>
								
								<p class=MsoFooter align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN;mso-bidi-font-style:italic'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoFooter align=center style='text-align:center'><b><span lang=MN
								style='font-size:10.0pt;mso-ansi-language:MN;mso-bidi-font-style:italic'>&#1043;&#1069;&#1056;&#1069;&#1069;
								&#1041;&#1040;&#1049;&#1043;&#1059;&#1059;&#1051;&#1057;&#1040;&#1053;:<o:p></o:p></span></b></p>
								
								<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
								 style='border-collapse:collapse;border:none;mso-border-alt:solid #BFBFBF .5pt;
								 mso-border-themecolor:background1;mso-border-themeshade:191;mso-yfti-tbllook:
								 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
									<td width=348 valign=top style='width:260.75pt;border:solid #BFBFBF 1.0pt;
									mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
									solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
									191;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1198;&#1062;&#1050;-&#1080;&#1081;&#1075;
									&#1090;&#1257;&#1083;&#1257;&#1257;&#1083;&#1078;
									&#1073;&#1088;&#1086;&#1082;&#1077;&#1088;:<o:p></o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>..........................................
									/ <span style='mso-spacerun:yes'> </span><span style='background:lime;
									mso-highlight:lime'>…</span> . <span style='background:lime;mso-highlight:
									lime'>…</span> <span style='mso-spacerun:yes'> </span>/<o:p></o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><span
									style='mso-spacerun:yes'>        </span>&#1043;&#1072;&#1088;&#1099;&#1085;
									&#1199;&#1089;&#1101;&#1075;<span
									style='mso-spacerun:yes'>                   
									</span>&#1054;&#1074;&#1086;&#1075;/&#1053;&#1101;&#1088;<o:p></o:p></span></i></p>
									</td>
									<td width=348 valign=top style='width:260.75pt;border:solid #BFBFBF 1.0pt;
									mso-border-themecolor:background1;mso-border-themeshade:191;border-left:none;
									mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
									mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
									background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt'>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;:<o:p></o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'>...................................................<span
									style='mso-spacerun:yes'>  </span>/ <span style='background:lime;mso-highlight:
									lime'>…</span> . <span style='background:lime;mso-highlight:lime'>…</span> / <o:p></o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><span
									style='mso-spacerun:yes'>     
									</span>&#1041;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1090;
									&#1075;&#1072;&#1088;&#1099;&#1085; &#1199;&#1089;&#1101;&#1075;<span
									style='mso-spacerun:yes'>                </span>&#1054;&#1074;&#1086;&#1075;/&#1053;&#1101;&#1088;<o:p></o:p></span></i></p>
									<p class=MsoFooter style='text-align:justify;text-justify:inter-ideograph'><i><span
									lang=MN style='font-size:10.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									</td>
								 </tr>
								</table>
								
								<p class=MsoNormal style='text-align:justify;text-justify:inter-ideograph;
								mso-pagination:none;text-autospace:none'><span lang=MN style='font-size:10.0pt;
								mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;mso-bidi-language:
								RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal style='mso-pagination:none;text-autospace:none'><span
								lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=right style='text-align:right;mso-pagination:none;
								text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
								"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=right style='text-align:right;mso-pagination:none;
								text-autospace:none'><v:shapetype id="_x0000_t75" coordsize="21600,21600"
								 o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
								 stroked="f">
								 <v:stroke joinstyle="miter"/>
								 <v:formulas>
									<v:f eqn="if lineDrawn pixelLineWidth 0"/>
									<v:f eqn="sum @0 1 0"/>
									<v:f eqn="sum 0 0 @1"/>
									<v:f eqn="prod @2 1 2"/>
									<v:f eqn="prod @3 21600 pixelWidth"/>
									<v:f eqn="prod @3 21600 pixelHeight"/>
									<v:f eqn="sum @0 0 1"/>
									<v:f eqn="prod @6 1 2"/>
									<v:f eqn="prod @7 21600 pixelWidth"/>
									<v:f eqn="sum @8 21600 0"/>
									<v:f eqn="prod @7 21600 pixelHeight"/>
									<v:f eqn="sum @10 21600 0"/>
								 </v:formulas>
								 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
								 <o:lock v:ext="edit" aspectratio="t"/>
								</v:shapetype><v:shape id="Picture_x0020_1" o:spid="_x0000_s2050" type="#_x0000_t75"
								 style='position:absolute;left:0;text-align:left;margin-left:657.75pt;
								 margin-top:-89.5pt;width:111pt;height:112.55pt;z-index:-251655168;
								 visibility:visible;mso-wrap-style:square;mso-width-percent:0;
								 mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
								 mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
								 mso-position-horizontal:absolute;mso-position-horizontal-relative:margin;
								 mso-position-vertical:absolute;mso-position-vertical-relative:text;
								 mso-width-percent:0;mso-height-percent:0;mso-width-relative:margin;
								 mso-height-relative:margin'>
								 <v:imagedata src="&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1090;%20&#1076;&#1072;&#1085;&#1089;%20&#1085;&#1101;&#1101;&#1093;%20&#1075;&#1101;&#1088;&#1101;&#1101;%20Final%20(2)_files/image001.png"
									o:title=""/>
								 <w:wrap anchorx="margin"/>
								</v:shape><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";
								mso-ansi-language:MN;mso-bidi-language:RU'>“&#1041;&#1056;&#1054;&#1050;&#1045;&#1056;&#1058;
								&#1044;&#1040;&#1053;&#1057; &#1053;&#1069;&#1069;&#1061;
								&#1043;&#1069;&#1056;&#1069;&#1069;”-&#1085;&#1080;&#1081;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; &#8470;1<o:p></o:p></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='mso-ansi-language:MN'>&#1043;&#1040;&#1044;&#1040;&#1040;&#1044;
								&#1040;&#1056;&#1048;&#1051;&#1046;&#1040;&#1040;&#1053;&#1067;
								&#1064;&#1048;&#1052;&#1058;&#1043;&#1069;&#1051;,
								&#1061;&#1059;&#1056;&#1040;&#1040;&#1052;&#1046;<o:p></o:p></span></b></p>
								
								<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
								 style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:372.55pt'>
									<td width=371 valign=top style='width:278.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:372.55pt'>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></b></p>
									<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;
									mso-list:l1 level1 lfo31;tab-stops:375.55pt'><![if !supportLists]><b><i
									style='mso-bidi-font-style:normal'><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span></i></b><![endif]><b><i><span lang=MN style='font-size:
									8.0pt;mso-ansi-language:MN'>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076; &#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;,
									&#1085;&#1101;&#1075;&#1078; &#1101;&#1088;&#1093;,
									&#1086;&#1087;&#1094;&#1080;&#1086;&#1085;,
									&#1074;&#1072;&#1088;&#1088;&#1072;&#1085;&#1090;&#1099;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;, &#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
									&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;</span></i></b><b><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></b></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=333 style='width:250.0pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.75pt'>
										<td width=117 rowspan=2 style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:22.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>&#1061;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
										&#1073;&#1080;&#1088;&#1078;</span></b><b><span lang=MN style='font-size:
										8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 rowspan=2 style='width:67.95pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:22.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>&#1064;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
										&#1076;&#1086;&#1086;&#1076; &#1093;&#1101;&#1084;&#1078;&#1101;&#1101;</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=126 rowspan=2 style='width:94.6pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:22.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1064;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1085;
										&#1076;&#1086;&#1086;&#1076;
										&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;&#1085;&#1076;
										&#1085;&#1086;&#1075;&#1076;&#1086;&#1093;
										&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
										&#1093;&#1101;&#1084;&#1078;&#1101;&#1101;</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:22.75pt;border:none' width=0 height=30></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:17.55pt'>
										<![if !supportMisalignedRows]>
										<td style='height:17.55pt;border:none' width=0 height=23></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Canada<o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>CAD </span><span style='font-size:8.0pt;
										color:black;mso-ansi-language:EN-US'>1<o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>CAD 100<o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:3;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>United States</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>USD </span><span style='font-size:8.0pt;
										color:black;mso-ansi-language:EN-US'>1</span><span style='font-size:8.0pt;
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>USD 100</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:4;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Australia</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>AUD 10</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>AUD 1,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:5;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Hong Kong</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>HKD 80</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>HKD 8,000&nbsp;</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:6;height:4.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Shanghai</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>CNY 80</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>CNY 8,000&nbsp;</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:4.95pt;border:none' width=0 height=7></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:7;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>United Kingdom</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>GBP 10</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>GBP 1,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:8;height:2.5pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Japan</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>JPY 1,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>JPY 100,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.5pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:9;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Austria</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:10;height:4.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Baltic Region</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:4.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:4.95pt;border:none' width=0 height=7></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:11;height:6.4pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:6.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Belguim</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:6.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:6.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:6.4pt;border:none' width=0 height=9></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:12;height:7.4pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:7.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>France</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.4pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:7.4pt;border:none' width=0 height=10></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:13;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Germany</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:14;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Hungary</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>HUF 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>HUF 200,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:15;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>India</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>INR 240</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>INR 24,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:16;height:3.0pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.0pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Isreal</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>ILS 100</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>ILS 10,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.0pt;border:none' width=0 height=4></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:17;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Italy</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:18;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Mexico</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>MXN 250</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>MXN 25,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:19;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Netherlands</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:20;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Norway</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>NOK 1,800</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>NOK 180,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:21;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Poland</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>PLN 600</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>PLN 60,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:22;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Portugal</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:23;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Spain</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:24;height:3.95pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Sweden</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:3.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:3.95pt;border:none' width=0 height=5></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:25;height:2.45pt'>
										<td width=117 nowrap style='width:87.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=RU
										style='font-size:8.0pt;color:black'>Switzerland</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=91 nowrap style='width:67.95pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 20</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=126 nowrap style='width:94.6pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.45pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=RU
										style='font-size:8.0pt;color:black'>EUR 2,000</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.45pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:26;height:22.45pt'>
										<td width=333 nowrap colspan=3 style='width:250.0pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:22.45pt'>
										<p class=MsoNormal><span lang=MN style='font-size:8.0pt;color:black;
										mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1041;&#1080;&#1088;&#1078;&#1199;&#1199;&#1076;&#1080;&#1081;&#1085;
										&#1076;&#1086;&#1086;&#1076;
										&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1101;&#1101;&#1089;
										&#1076;&#1072;&#1074;&#1089;&#1072;&#1085;
										&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
										1%-&#1088; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
										&#1090;&#1086;&#1086;&#1094;&#1086;&#1078;
										&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:22.45pt;border:none' width=0 height=30></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:27;height:35.5pt'>
										<td width=333 nowrap colspan=3 style='width:250.0pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:35.5pt'>
										<p class=MsoNormal><span style='font-size:8.0pt;color:black;mso-ansi-language:
										EN-US;mso-fareast-language:EN-US'>United</span><span style='font-size:8.0pt;
										color:black;mso-fareast-language:EN-US'> </span><span style='font-size:
										8.0pt;color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>States</span><span
										lang=RU style='font-size:8.0pt;color:black;mso-fareast-language:EN-US'>-</span><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1085; &#1073;&#1080;&#1088;&#1078;&#1080;&#1081;&#1085;
										&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
										&#1101;&#1079;&#1101;&#1084;&#1096;&#1080;&#1078; &#1073;&#1091;&#1081;
										&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;&#1085;&#1076; American
										Depository Receipts (ADRs)
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;
										&#1072;&#1074;&#1089;&#1072;&#1085;
										&#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
										&#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1072;&#1072;&#1089;
										&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;&#1072;.<o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:35.5pt;border:none' width=0 height=47></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;height:25.15pt'>
										<td width=333 nowrap colspan=3 style='width:250.0pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:25.15pt'>
										<p class=MsoNormal><span lang=MN style='font-size:8.0pt;color:black;
										mso-ansi-language:MN'>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
										&#1074;&#1072;&#1083;&#1102;&#1090;&#1099;&#1085; &#1093;&#1257;&#1088;&#1074;&#1199;&#1199;&#1083;&#1101;&#1075;
										&#1093;&#1080;&#1081;&#1093;(forex)
										&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;
										&#1090;&#1091;&#1090;&#1072;&#1084;&#1076; USD 2
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075;
										&#1090;&#1086;&#1086;&#1094;&#1086;&#1078;
										&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085;&#1072;.</span><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:25.15pt;border:none' width=0 height=34></td>
										<![endif]>
									 </tr>
									</table>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>2. &#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
									&#1073;&#1086;&#1085;&#1076;&#1099;&#1085; &#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
									&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
									&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;<o:p></o:p></span></i></b></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=334 style='width:250.6pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:2.1pt'>
										<td width=191 nowrap style='width:143.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;padding:0cm 5.4pt 0cm 5.4pt;height:2.1pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;<o:p></o:p></span></b></p>
										</td>
										<td width=143 nowrap style='width:107.35pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.1pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>0</span><span
										style='font-size:8.0pt;color:black;mso-ansi-language:EN-US'>.1% /</span><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1040;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
										&#1076;&#1199;&#1085;&#1075;&#1080;&#1081;&#1085;</span><span
										style='font-size:8.0pt;color:black;mso-ansi-language:EN-US'>/<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:2.1pt'>
										<td width=191 nowrap style='width:143.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.1pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1050;&#1072;&#1089;&#1090;&#1086;&#1076;&#1080;&#1072;&#1085;
										&#1073;&#1072;&#1085;&#1082;&#1085;&#1099; &#1199;&#1085;&#1101;&#1090;
										&#1094;&#1072;&#1072;&#1089;
										&#1093;&#1072;&#1076;&#1075;&#1072;&#1083;&#1072;&#1093;
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=143 nowrap style='width:107.35pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.1pt'>
										<p class=MsoNormal align=center style='text-align:center'><span
										style='font-size:8.0pt;color:black;mso-ansi-language:EN-US'>0.</span><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN'>1</span><span
										style='font-size:8.0pt;color:black;mso-ansi-language:EN-US'>% /</span><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN'>12
										&#1089;&#1072;&#1088;</span><span style='font-size:8.0pt;color:black;
										mso-ansi-language:EN-US'>/</span><span style='font-size:8.0pt;color:black;
										mso-ansi-language:EN-US;mso-fareast-language:EN-US'><o:p></o:p></span></p>
										</td>
									 </tr>
									</table>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p></o:p></span></i></p>
									</td>
									<td width=281 rowspan=2 valign=top style='width:211.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:372.55pt'>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 align=left width=312 style='width:233.75pt;border-collapse:collapse;
									 border:none;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-table-overlap:never;mso-yfti-tbllook:1184;
									 mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:
									 6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:page;
									 mso-table-left:25.9pt;mso-table-top:24.1pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:7.55pt'>
										<td width=312 colspan=3 valign=top style='width:233.75pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1090;&#1086;&#1081;
										&#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1078;
										&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
										&#1257;&#1075;&#1257;&#1093;:</span></i></b><b><i><span style='font-size:
										8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></i></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:7.55pt'>
										<td width=108 rowspan=2 valign=top style='width:80.75pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:7.55pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1061;&#1086;&#1085;&#1082;&#1086;&#1085;&#1075;,
										&#1064;&#1072;&#1085;&#1093;&#1072;&#1081;,
										&#1040;&#1074;&#1089;&#1090;&#1088;&#1072;&#1083;&#1080;&#1081;&#1085;
										&#1073;&#1080;&#1088;&#1078;<o:p></o:p></span></i></p>
										</td>
										<td width=204 colspan=2 valign=top style='width:153.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>+976 </span></i><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>80069977<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>order@golomtcapital.com</span></i><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:7.55pt'>
										<td width=72 valign=top style='width:54.0pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1062;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;<o:p></o:p></span></i></p>
										</td>
										<td width=132 nowrap valign=top style='width:99.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><b><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1047;&#1091;&#1085;&#1099;
										&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;:<o:p></o:p></span></i></b></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>08:00-12:00,
										13:00-17:00<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><b><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1256;&#1074;&#1083;&#1080;&#1081;&#1085;
										&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;:<o:p></o:p></span></i></b></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>08:00-12:00,
										13:00-17:00<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;height:7.55pt'>
										<td width=108 rowspan=2 valign=top style='width:80.75pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:7.55pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1040;&#1084;&#1077;&#1088;&#1080;&#1082;,
										&#1050;&#1072;&#1085;&#1072;&#1076;&#1099;&#1085;
										&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1091;&#1089;&#1072;&#1076;
										&#1073;&#1080;&#1088;&#1078;&#1199;&#1199;&#1076;<o:p></o:p></span></i></p>
										</td>
										<td width=204 colspan=2 valign=top style='width:153.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>+976 </span></i><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>86103636<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><span
										lang=RU><a href="mailto:orders@golomtcapital.com"><i><span lang=EN-US
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>order@golomtcapital.com</span></i></a></span><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:7.55pt'>
										<td width=72 valign=top style='width:54.0pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1062;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;</span></i><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'><o:p></o:p></span></i></p>
										</td>
										<td width=132 nowrap valign=top style='width:99.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><b><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1047;&#1091;&#1085;&#1099;
										&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;</span></i></b><b><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>:<o:p></o:p></span></i></b></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>13:00-17:00,
										21:00-23:59<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><b><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1256;&#1074;&#1083;&#1080;&#1081;&#1085;
										&#1094;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;</span></i></b><b><i><span
										style='font-size:8.0pt;line-height:115%;mso-ansi-language:EN-US'>:<o:p></o:p></span></i></b></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>13:00-18:00,
										22:00-23:59</span></i><i><span style='font-size:8.0pt;line-height:115%;
										mso-ansi-language:EN-US'><o:p></o:p></span></i></p>
										</td>
									 </tr>
									</table>
									<p class=MsoNormal><b><i><span style='font-size:8.0pt;mso-ansi-language:EN-US'><span
									style='mso-spacerun:yes'>  </span></span></i></b><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>5</span></i></b><b><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'>. </span></i></b><b><i><span
									lang=MN style='font-size:8.0pt;mso-ansi-language:MN'>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
									&#1257;&#1075;&#1257;&#1093;</span></i></b><b><i><span style='font-size:8.0pt;
									mso-ansi-language:EN-US'>:</span></i></b><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></b></p>
									<p class=MsoNormal><i><span style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span style='font-size:8.0pt;mso-ansi-language:EN-US'><span
									style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span style='font-size:8.0pt;mso-ansi-language:EN-US'><span
									style='mso-spacerun:yes'> </span></span></i><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>&#1047;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1076;
									&#1079;&#1072;&#1072;&#1074;&#1072;&#1083;
									&#1090;&#1091;&#1089;&#1075;&#1072;&#1093;
									&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;</span></i><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'>:<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1198;&#1085;&#1101;&#1090;
									&#1094;&#1072;&#1072;&#1089;&#1085;&#1099; &#1085;&#1101;&#1088;</span></i><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'>/</span></i><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>&#1050;&#1086;&#1076;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1040;&#1074;&#1072;&#1093;</span></i><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'>/</span></i><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1058;&#1086;&#1086;
									&#1096;&#1080;&#1088;&#1093;&#1101;&#1075;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1061;&#1072;&#1085;&#1096;
									&#1073;&#1086;&#1083;&#1086;&#1085;
									&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
									&#1090;&#1257;&#1088;&#1257;&#1083;</span></i><i><span style='font-size:8.0pt;
									mso-ansi-language:EN-US'> (Limited, Market, Pre-Market, Stop loss, Take
									profit </span></i><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'>&#1075;&#1101;&#1093; &#1084;&#1101;&#1090;</span></i><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'>)</span></i><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1061;&#1199;&#1095;&#1080;&#1085;&#1090;&#1101;&#1081;
									&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072; (Day, GTD, GTC)<o:p></o:p></span></i></p>
									<p class=MsoListParagraph><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'>   </span>&#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1090;&#1072;&#1081;
									&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
									&#1079;&#1257;&#1074;&#1083;&#1257;&#1075;&#1257;&#1257;, &#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;
									&#1072;&#1074;&#1072;&#1093;:<o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> 
									</span>&#1061;&#1086;&#1083;&#1073;&#1086;&#1086;
									&#1073;&#1072;&#1088;&#1080;&#1093;</span></i><i><span style='font-size:8.0pt;
									mso-ansi-language:EN-US'>: 70121530, </span></i><span lang=RU><a
									href="mailto:traders@golomtcapital.com"><i><span lang=EN-US style='font-size:
									8.0pt;mso-ansi-language:EN-US'>traders@golomtcapital.com</span></i></a></span><i><span
									style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span style='font-size:8.0pt;mso-ansi-language:EN-US'><span
									style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
									<p class=MsoNormal><span style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:372.55pt;border:none' width=0 height=497></td>
									<![endif]>
								 </tr>
								 <tr style='mso-yfti-irow:1;height:16.1pt'>
									<td width=371 rowspan=2 valign=top style='width:278.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:16.1pt'>
									<p class=MsoBodyText style='margin-left:36.0pt'><b><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
									<p class=MsoBodyText style='margin-left:36.0pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></b></p>
									<p class=MsoBodyText><b><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'>3. &#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
									&#1073;&#1072;&#1085;&#1082;&#1085;&#1099; &#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
									&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
									&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;<o:p></o:p></span></i></b></p>
									<p class=MsoBodyText><b><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></b></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=373 style='width:279.4pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:29.25pt'>
										<td width=115 style='width:86.25pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1042;&#1072;&#1083;&#1102;&#1090;</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=63 style='width:47.35pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
										solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
										191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:29.25pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>USD</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=54 style='width:40.25pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
										solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
										191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:29.25pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>HKD</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=47 style='width:35.35pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
										solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
										191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:29.25pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>CAD<o:p></o:p></span></b></p>
										</td>
										<td width=47 style='width:35.1pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
										solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
										191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:29.25pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>GBP<o:p></o:p></span></b></p>
										</td>
										<td width=47 style='width:35.1pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
										solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
										191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:29.25pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:8.0pt;color:black;
										mso-ansi-language:MN'><span style='mso-spacerun:yes'> </span>AUD<o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:2.9pt'>
										<td width=115 nowrap valign=top style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>USD 2,000 &#1093;&#1199;&#1088;&#1090;&#1101;&#1083; <o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap valign=top style='width:47.35pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>USD 25<o:p></o:p></span></p>
										</td>
										<td width=54 nowrap valign=top style='width:40.25pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.35pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>USD 2,000.01 - 5,000<o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>USD 35<o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>USD 5,000.01 - 50,000</span></b><b><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>USD 38</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:4;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>USD 50,000.01 - 100,000</span></b><b><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>USD 40</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:5;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>USD 100,000.01 - &#1076;&#1101;&#1101;&#1096;</span></b><b><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>USD 45</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;</span><span
										lang=MN style='font-size:7.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:6;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>HKD, &#1076;&#1199;&#1085;
										&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;&#1075;&#1199;&#1081;
										<o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>HKD 275<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:7;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>CAD, &#1076;&#1199;&#1085;
										&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;&#1075;&#1199;&#1081;<o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>CAD 28<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:8;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>GBP, &#1076;&#1199;&#1085;
										&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;&#1075;&#1199;&#1081;<o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>&nbsp;<o:p></o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>GBP 20<o:p></o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:9;height:2.9pt'>
										<td width=115 nowrap style='width:86.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><b><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>AUD, &#1076;&#1199;&#1085;
										&#1093;&#1072;&#1084;&#1072;&#1072;&#1088;&#1072;&#1093;&#1075;&#1199;&#1081;<o:p></o:p></span></b></p>
										</td>
										<td width=63 nowrap style='width:47.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=54 nowrap style='width:40.25pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 style='width:35.35pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 style='width:35.1pt;border-top:none;border-left:none;
										border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
										</td>
										<td width=47 valign=top style='width:35.1pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:7.0pt;color:black;mso-ansi-language:MN'>AUD 35<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:2.9pt'>
										<td width=373 nowrap colspan=6 style='width:279.4pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.9pt'>
										<p class=MsoNormal><span lang=MN style='font-size:7.0pt;color:black;
										mso-ansi-language:MN'>&#1048;&#1085;&#1090;&#1077;&#1088;&#1072;&#1082;&#1090;&#1080;&#1074;
										&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1089;
										&#1087;&#1083;&#1072;&#1090;&#1092;&#1086;&#1088;&#1084;
										&#1076;&#1101;&#1101;&#1088;&#1093; &#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
										&#1085;&#1101;&#1088;&#1080;&#1081;&#1085;
										&#1076;&#1072;&#1085;&#1089;&#1072;&#1085;&#1076;
										&#1076;&#1072;&#1093;&#1100; &#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
										&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1075;
										&#1257;&#1257;&#1088;&#1080;&#1081;&#1085;
										&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
										&#1073;&#1072;&#1085;&#1082;&#1085;&#1099; &#1076;&#1072;&#1085;&#1089;
										&#1088;&#1091;&#1091;
										&#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1101;&#1093; &#1090;&#1086;&#1093;&#1080;&#1086;&#1083;&#1076;&#1086;&#1083;&#1076;
										&#1086;&#1083;&#1086;&#1085; &#1091;&#1083;&#1089;&#1099;&#1085;
										&#1076;&#1072;&#1084;&#1078;&#1091;&#1091;&#1083;&#1072;&#1075;&#1095;
										&#1073;&#1072;&#1085;&#1082;&#1085;&#1099; &#1075;&#1091;&#1081;&#1074;&#1091;&#1091;&#1083;&#1075;&#1099;&#1085;
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;
										&#1090;&#1257;&#1083;&#1085;&#1257;.<o:p></o:p></span></p>
										</td>
									 </tr>
									</table>
									<p class=MsoBodyText><b><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></b></p>
									<p class=MsoBodyText style='margin-left:36.0pt'><b><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
									<p class=MsoBodyText><b><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'>4. &#1043;&#1072;&#1076;&#1072;&#1072;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1084;&#1257;&#1085;&#1075;&#1257;
									&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1093;
									&#1076;&#1072;&#1085;&#1089;&#1085;&#1099; &#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;<o:p></o:p></span></i></b></p>
									<p class=MsoBodyText><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=335 style='width:251.35pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:9.7pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1041;&#1072;&#1085;&#1082;&#1085;&#1099; &#1085;&#1101;&#1088;: </span></i><b><i><span
										lang=MN style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></b></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1043;&#1086;&#1083;&#1086;&#1084;&#1090; &#1041;&#1072;&#1085;&#1082;</span></i><i><span
										lang=MN style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:9.7pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1044;&#1072;&#1085;&#1089;&#1085;&#1099;
										&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;:<o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>2005003533 USD<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>2005003536 HKD<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>2015126556 GBP<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>2015115155 CAD<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span style='font-size:
										8.0pt;mso-ansi-language:EN-US'>2015161603 AUD<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:8.0pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:8.0pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1044;&#1072;&#1085;&#1089;&#1085;&#1099;
										&#1101;&#1079;&#1101;&#1084;&#1096;&#1080;&#1075;&#1095;&#1080;&#1081;&#1085;
										&#1085;&#1101;&#1088;: <o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1043;&#1086;&#1083;&#1086;&#1084;&#1090;
										&#1050;&#1072;&#1087;&#1080;&#1090;&#1072;&#1083; &#1198;&#1062;&#1050;
										&#1061;&#1061;&#1050;<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:12.25pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:12.25pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1043;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
										&#1091;&#1090;&#1075;&#1072;: <o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1053;&#1101;&#1088; ,
										&#1056;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1081;&#1085;
										&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;,
										&#1059;&#1090;&#1072;&#1089;&#1085;&#1099;
										&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;&#1072;&#1072; &#1073;&#1080;&#1095;&#1085;&#1101;<o:p></o:p></span></i></p>
										</td>
									 </tr>
									</table>
									<p class=MsoBodyText style='margin-right:15.15pt;text-align:justify;
									text-justify:inter-ideograph;tab-stops:375.55pt'><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:16.1pt;border:none' width=0 height=21></td>
									<![endif]>
								 </tr>
								 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:26.55pt'>
									<td width=281 valign=top style='width:211.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:26.55pt'>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:26.55pt;border:none' width=0 height=35></td>
									<![endif]>
								 </tr>
								</table>
								
								<p class=MsoNormal align=right style='text-align:right;mso-pagination:none;
								text-autospace:none'><span lang=MN style='font-size:10.0pt;mso-fareast-font-family:
								"Times New Roman";mso-ansi-language:MN;mso-bidi-language:RU'><o:p>&nbsp;</o:p></span></p>
								
								<p class=MsoNormal align=right style='text-align:right'><span lang=MN
								style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
								MN;mso-bidi-language:RU'>“&#1041;&#1056;&#1054;&#1050;&#1045;&#1056;&#1058;
								&#1044;&#1040;&#1053;&#1057; &#1053;&#1069;&#1069;&#1061;
								&#1043;&#1069;&#1056;&#1069;&#1069;”-&#1085;&#1080;&#1081;
								&#1061;&#1072;&#1074;&#1089;&#1088;&#1072;&#1083;&#1090; &#8470;2<o:p></o:p></span></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
								style='mso-ansi-language:MN'>&#1044;&#1054;&#1058;&#1054;&#1054;&#1044;
								&#1040;&#1056;&#1048;&#1051;&#1046;&#1040;&#1040;&#1053;&#1067;
								&#1064;&#1048;&#1052;&#1058;&#1043;&#1069;&#1051;,
								&#1061;&#1059;&#1056;&#1040;&#1040;&#1052;&#1046;<o:p></o:p></span></b></p>
								
								<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
								 style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
								 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:271.35pt'>
									<td width=371 valign=top style='width:278.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:271.35pt'>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></b></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>1.
									&#1044;&#1086;&#1090;&#1086;&#1086;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1076;&#1072;&#1085;&#1089; &#1085;&#1101;&#1101;&#1093;
									&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;&#1080;&#1081;&#1085;
									&#1085;&#1257;&#1093;&#1094;&#1257;&#1083;</span></i></b><b><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></b></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=331 style='width:248.15pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.55pt'>
										<td width=186 rowspan=2 style='width:139.6pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1061;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
										&#1090;&#1257;&#1088;&#1257;&#1083;</span></b><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=145 rowspan=2 style='width:108.55pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:23.55pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1044;&#1072;&#1085;&#1089;
										&#1085;&#1101;&#1101;&#1093;
										&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078;</span></b><b><span
										lang=MN style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></b></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:23.55pt;border:none' width=0 height=31></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:13.8pt'>
										<![if !supportMisalignedRows]>
										<td style='height:13.8pt;border:none' width=0 height=18></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:2.5pt'>
										<td width=186 nowrap style='width:139.6pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>&#1048;&#1088;&#1075;&#1101;&#1085;<o:p></o:p></span></b></p>
										</td>
										<td width=145 nowrap style='width:108.55pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>5,000
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;<o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.5pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:2.5pt'>
										<td width=186 nowrap style='width:139.6pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1091;&#1091;&#1083;&#1080;&#1081;&#1085;
										&#1101;&#1090;&#1075;&#1101;&#1101;&#1076;<o:p></o:p></span></b></p>
										</td>
										<td width=145 nowrap style='width:108.55pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:2.5pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN'>50,000
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;</span><span lang=MN
										style='font-size:8.0pt;color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p></o:p></span></p>
										</td>
										<![if !supportMisalignedRows]>
										<td style='height:2.5pt;border:none' width=0 height=3></td>
										<![endif]>
									 </tr>
									</table>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'>2. &#1044;&#1086;&#1090;&#1086;&#1086;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;,
									&#1093;&#1091;&#1088;&#1072;&#1072;&#1084;&#1078; <o:p></o:p></span></i></b></p>
									<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=331
									 style='width:247.9pt;border-collapse:collapse;mso-yfti-tbllook:1184;
									 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.05pt'>
										<td width=85 nowrap rowspan=3 style='width:63.85pt;border:solid windowtext 1.0pt;
										mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
										background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
										height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=122 nowrap colspan=2 valign=bottom style='width:91.15pt;
										border:solid windowtext 1.0pt;border-left:none;mso-border-top-alt:solid windowtext .5pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
										height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1040;&#1085;&#1093;&#1076;&#1072;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=124 nowrap colspan=2 valign=bottom style='width:92.9pt;
										border:solid windowtext 1.0pt;border-left:none;mso-border-top-alt:solid windowtext .5pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
										height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:14.05pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:14.05pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>1%<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>1%<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>1%<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>1%<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;height:14.75pt'>
										<td width=85 nowrap rowspan=3 style='width:63.85pt;border:solid windowtext 1.0pt;
										border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
										solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1072;&#1072;&#1083;&#1090;&#1090;&#1072;&#1081;
										&#1073;&#1086;&#1085;&#1076;</span></b><b><span lang=MN style='font-size:
										8.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;
										mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=122 nowrap colspan=2 valign=bottom style='width:91.15pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1040;&#1085;&#1093;&#1076;&#1072;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=124 nowrap colspan=2 valign=bottom style='width:92.9pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:4;height:14.75pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:5;height:23.9pt'>
										<td width=245 colspan=4 style='width:184.05pt;border-top:none;border-left:
										none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:23.9pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>100
										&#1089;&#1072;&#1103; &#1093;&#1199;&#1088;&#1090;&#1101;&#1083;
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;&#1080;&#1081;&#1085;
										&#1199;&#1085;&#1080;&#1081;&#1085;
										&#1076;&#1199;&#1085;&#1075;&#1080;&#1081;&#1085; 0.1%,<br>
										100 &#1089;&#1072;&#1103;
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;&#1080;&#1081;&#1085;
										&#1199;&#1085;&#1080;&#1081;&#1085;
										&#1076;&#1199;&#1085;&#1075;&#1101;&#1101;&#1089;
										&#1076;&#1101;&#1101;&#1096; 0.05%<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:6;height:14.75pt'>
										<td width=85 rowspan=3 style='width:63.85pt;border:solid windowtext 1.0pt;
										border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
										solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1053;&#1101;&#1101;&#1083;&#1090;&#1090;&#1101;&#1081;
										&#1073;&#1086;&#1085;&#1076;</span></b><b><span lang=MN style='font-size:
										8.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:MN;
										mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=122 nowrap colspan=2 valign=bottom style='width:91.15pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1040;&#1085;&#1093;&#1076;&#1072;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=124 nowrap colspan=2 valign=bottom style='width:92.9pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:14.75pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:7;height:16.15pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:16.15pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:16.15pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:16.15pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:16.15pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:8;height:11.95pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.1%<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>-<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.1%<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.05%<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:9;height:11.95pt'>
										<td width=85 rowspan=3 style='width:63.85pt;border:solid windowtext 1.0pt;
										border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
										solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;&#1257;&#1088;
										&#1073;&#1072;&#1090;&#1072;&#1083;&#1075;&#1072;&#1072;&#1078;&#1089;&#1072;&#1085;
										&#1199;&#1085;&#1101;&#1090; &#1094;&#1072;&#1072;&#1089;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=122 nowrap colspan=2 valign=bottom style='width:91.15pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1040;&#1085;&#1093;&#1076;&#1072;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=124 nowrap colspan=2 valign=bottom style='width:92.9pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
										background1;padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1061;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:10;height:11.95pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:11;height:11.95pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.</span><span
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>1</span><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>%<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>-<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.</span><span
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>1</span><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>%<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>0.</span><span
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:EN-US;mso-fareast-language:EN-US'>1</span><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>%<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:12;height:11.95pt'>
										<td width=85 rowspan=3 style='width:63.85pt;border:solid windowtext 1.0pt;
										border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
										solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-color-alt:windowtext;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1047;&#1072;&#1089;&#1075;&#1080;&#1081;&#1085;
										&#1075;&#1072;&#1079;&#1088;&#1099;&#1085; &#1073;&#1086;&#1085;&#1076;</span></b><b><span
										lang=MN style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										mso-ansi-language:MN;mso-fareast-language:EN-US'><o:p></o:p></span></b></p>
										</td>
										<td width=122 nowrap colspan=2 valign=bottom style='width:91.15pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
										height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1085;&#1093;&#1076;&#1072;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;<o:p></o:p></span></b></p>
										</td>
										<td width=124 nowrap colspan=2 valign=bottom style='width:92.9pt;
										border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
										border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
										mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
										height:11.95pt'>
										<p class=MsoNormal align=center style='text-align:center'><b><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1061;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
										&#1079;&#1072;&#1093; &#1079;&#1101;&#1101;&#1083;<o:p></o:p></span></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:13;height:14.05pt'>
										<td width=62 nowrap style='width:46.4pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=60 nowrap style='width:44.75pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1040;&#1074;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
										<td width=62 nowrap style='width:46.45pt;border-top:none;border-left:none;
										border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:14.05pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:14;height:26.7pt'>
										<td width=245 colspan=4 style='width:184.05pt;border-top:none;border-left:
										none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
										mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
										mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
										padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt'>
										<p class=MsoNormal align=center style='text-align:center'><span lang=MN
										style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";
										color:black;mso-ansi-language:MN;mso-fareast-language:EN-US'>100
										&#1089;&#1072;&#1103; &#1093;&#1199;&#1088;&#1090;&#1101;&#1083;
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;&#1080;&#1081;&#1085;
										&#1199;&#1085;&#1080;&#1081;&#1085;
										&#1076;&#1199;&#1085;&#1075;&#1080;&#1081;&#1085; 0.1%,<br>
										100 &#1089;&#1072;&#1103;
										&#1090;&#1257;&#1075;&#1088;&#1257;&#1075;&#1080;&#1081;&#1085;
										&#1199;&#1085;&#1080;&#1081;&#1085;
										&#1076;&#1199;&#1085;&#1075;&#1101;&#1101;&#1089;
										&#1076;&#1101;&#1101;&#1096; 0.05% <o:p></o:p></span></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:26.7pt'>
										<td width=331 colspan=5 style='width:247.9pt;border:solid windowtext 1.0pt;
										border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
										solid windowtext .5pt;background:white;mso-background-themecolor:background1;
										padding:0cm 5.4pt 0cm 5.4pt;height:26.7pt'>
										<p class=MsoNormal><span lang=MN style='font-size:8.0pt;mso-fareast-font-family:
										"Times New Roman";color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'>&#1053;&#1086;&#1084;&#1080;&#1085;&#1072;&#1083;
										&#1076;&#1072;&#1085;&#1089;&#1085;&#1072;&#1072;&#1089;
										&#1079;&#1072;&#1088;&#1083;&#1072;&#1075;&#1099;&#1085;
										&#1075;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;
										&#1075;&#1072;&#1088;&#1075;&#1072;&#1093;&#1072;&#1076;
										&#1073;&#1072;&#1085;&#1082; &#1076;&#1086;&#1090;&#1086;&#1088;&#1093;
										&#1073;&#1086;&#1083;&#1086;&#1085; &#1073;&#1072;&#1085;&#1082;
										&#1093;&#1086;&#1086;&#1088;&#1086;&#1085;&#1076;
										&#1075;&#1072;&#1088;&#1072;&#1093; &#1096;&#1080;&#1083;&#1078;&#1199;&#1199;&#1083;&#1075;&#1080;&#1081;&#1085;
										&#1096;&#1080;&#1084;&#1090;&#1075;&#1101;&#1083;&#1080;&#1081;&#1075; &#1093;&#1072;&#1088;&#1080;&#1083;&#1094;&#1072;&#1075;&#1095;&#1080;&#1081;&#1085;
										&#1084;&#1257;&#1085;&#1075;&#1257;&#1085;
										&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1257;&#1257;&#1089;
										&#1089;&#1091;&#1091;&#1090;&#1075;&#1072;&#1085; &#1072;&#1074;&#1085;&#1072;.<o:p></o:p></span></p>
										<p class=MsoNormal><span lang=MN style='font-size:8.0pt;mso-fareast-font-family:
										"Times New Roman";color:black;mso-ansi-language:MN;mso-fareast-language:
										EN-US'><o:p>&nbsp;</o:p></span></p>
										</td>
									 </tr>
									</table>
									<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoBodyText><b><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'>3. &#1044;&#1086;&#1090;&#1086;&#1086;&#1076;&#1099;&#1085;
									&#1093;&#1091;&#1074;&#1100;&#1094;&#1072;&#1072;&#1085;&#1099; &#1093;&#1086;&#1105;&#1088;&#1076;&#1086;&#1075;&#1095;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099; &#1084;&#1257;&#1085;&#1075;&#1257;
									&#1073;&#1072;&#1081;&#1088;&#1096;&#1091;&#1091;&#1083;&#1072;&#1093;
									&#1076;&#1072;&#1085;&#1089;&#1085;&#1099;
									&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;<o:p></o:p></span></i></b></p>
									</td>
									<td width=281 rowspan=2 valign=top style='width:211.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:271.35pt'>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 align=left width=312 style='width:233.75pt;border-collapse:collapse;
									 border:none;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-table-overlap:never;mso-yfti-tbllook:1184;
									 mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:
									 6.75pt;mso-table-anchor-vertical:paragraph;mso-table-anchor-horizontal:page;
									 mso-table-left:25.9pt;mso-table-top:24.1pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:7.55pt'>
										<td width=312 colspan=3 valign=top style='width:233.75pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><b><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1041;&#1088;&#1086;&#1082;&#1077;&#1088;&#1090;&#1086;&#1081;
										&#1093;&#1086;&#1083;&#1073;&#1086;&#1075;&#1076;&#1086;&#1078;
										&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
										&#1257;&#1075;&#1257;&#1093;:</span></i></b><b><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></b></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:7.55pt'>
										<td width=90 rowspan=4 valign=top style='width:67.25pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:7.55pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></i></p>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;&#1099;&#1085;
										&#1093;&#1257;&#1088;&#1257;&#1085;&#1075;&#1080;&#1081;&#1085;
										&#1073;&#1080;&#1088;&#1078;<o:p></o:p></span></i></p>
										</td>
										<td width=222 colspan=2 valign=top style='width:166.5pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>+976 70121530<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>order@golomtcapital.com<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:7.55pt'>
										<td width=90 valign=top style='width:67.5pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1062;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;<o:p></o:p></span></i></p>
										</td>
										<td width=132 nowrap valign=top style='width:99.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>08:00-13:00,
										14:00-17:00<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;height:7.55pt'>
										<td width=222 colspan=2 valign=top style='width:166.5pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>+976 80037272<o:p></o:p></span></i></p>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>order@golomtcapital.com<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:7.55pt'>
										<td width=90 valign=top style='width:67.5pt;border-top:none;border-left:
										none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
										mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'>&#1062;&#1072;&#1075;&#1080;&#1081;&#1085;
										&#1093;&#1091;&#1074;&#1072;&#1072;&#1088;&#1100;<o:p></o:p></span></i></p>
										</td>
										<td width=132 nowrap valign=top style='width:99.0pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:7.55pt'>
										<p class=MsoBodyText style='line-height:115%;tab-stops:375.55pt'><i><span
										lang=MN style='font-size:8.0pt;line-height:115%;mso-ansi-language:MN'><span
										style='mso-spacerun:yes'>         </span>08:00-17:00<o:p></o:p></span></i></p>
										</td>
									 </tr>
									</table>
									<p class=MsoNormal><b><i><span lang=RU style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'> </span></span></i></b><b><i><span
									lang=MN style='font-size:8.0pt;mso-ansi-language:MN'>4. <span
									style='mso-spacerun:yes'> </span>&#1044;&#1086;&#1090;&#1086;&#1086;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1085;&#1099;
									&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;
									&#1257;&#1075;&#1257;&#1093;:<o:p></o:p></span></i></b></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span
									style='mso-spacerun:yes'> </span>&#1047;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1072;&#1076;
									&#1079;&#1072;&#1072;&#1074;&#1072;&#1083;
									&#1090;&#1091;&#1089;&#1075;&#1072;&#1093;
									&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083;:<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1198;&#1085;&#1101;&#1090;
									&#1094;&#1072;&#1072;&#1089;&#1085;&#1099;
									&#1085;&#1101;&#1088;/&#1050;&#1086;&#1076;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1040;&#1074;&#1072;&#1093;/&#1047;&#1072;&#1088;&#1072;&#1093;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1058;&#1086;&#1086;
									&#1096;&#1080;&#1088;&#1093;&#1101;&#1075;<o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1061;&#1072;&#1085;&#1096;
									&#1073;&#1086;&#1083;&#1086;&#1085;
									&#1079;&#1072;&#1093;&#1080;&#1072;&#1083;&#1075;&#1099;&#1085;
									&#1090;&#1257;&#1088;&#1257;&#1083; <o:p></o:p></span></i></p>
									<p class=MsoListParagraph style='text-indent:-18.0pt;mso-list:l14 level1 lfo28'><![if !supportLists]><span
									lang=MN style='font-size:8.0pt;font-family:Symbol;mso-fareast-font-family:
									Symbol;mso-bidi-font-family:Symbol;mso-ansi-language:MN;mso-bidi-font-style:
									italic'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</span></span></span><![endif]><i><span lang=MN style='font-size:8.0pt;
									mso-ansi-language:MN'>&#1061;&#1199;&#1095;&#1080;&#1085;&#1090;&#1101;&#1081;
									&#1093;&#1091;&#1075;&#1072;&#1094;&#1072;&#1072; (Day, GTD, GTC)<o:p></o:p></span></i></p>
									<p class=MsoListParagraph><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'>   </span>&#1044;&#1086;&#1090;&#1086;&#1086;&#1076;
									&#1072;&#1088;&#1080;&#1083;&#1078;&#1072;&#1072;&#1090;&#1072;&#1081;
									&#1093;&#1086;&#1083;&#1073;&#1086;&#1086;&#1090;&#1086;&#1081;
									&#1079;&#1257;&#1074;&#1083;&#1257;&#1075;&#1257;&#1257;,
									&#1084;&#1101;&#1076;&#1101;&#1101;&#1083;&#1101;&#1083; &#1072;&#1074;&#1072;&#1093;:<o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'>  
									</span>&#1061;&#1086;&#1083;&#1073;&#1086;&#1086;
									&#1073;&#1072;&#1088;&#1080;&#1093;: 70121530, </span></i><span lang=RU><a
									href="mailto:traders@golomtcapital.com"><i><span lang=MN style='font-size:
									8.0pt;mso-ansi-language:MN'>traders@golomtcapital.com</span></i></a></span><i><span
									lang=MN style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><span style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
									<p class=MsoNormal><span style='font-size:8.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:271.35pt;border:none' width=0 height=362></td>
									<![endif]>
								 </tr>
								 <tr style='mso-yfti-irow:1;height:16.1pt'>
									<td width=371 rowspan=2 valign=top style='width:278.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:16.1pt'>
									<p class=MsoBodyText style='margin-right:15.15pt;text-align:justify;
									text-justify:inter-ideograph;tab-stops:375.55pt'><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></p>
									<table class=MsoTableGridLight border=1 cellspacing=0 cellpadding=0
									 width=335 style='width:251.35pt;border-collapse:collapse;border:none;
									 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
									 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
									 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:9.7pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
										solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
										191;background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1041;&#1072;&#1085;&#1082;&#1085;&#1099; &#1085;&#1101;&#1088;: </span></i><b><i><span
										lang=MN style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></b></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-left:
										none;mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:
										background1;mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;background:
										#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
										217;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;color:black;mso-color-alt:windowtext;mso-ansi-language:
										MN'>&#1043;&#1086;&#1083;&#1086;&#1084;&#1090; &#1041;&#1072;&#1085;&#1082;</span></i><i><span
										lang=MN style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:1;height:9.7pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1044;&#1072;&#1085;&#1089;&#1085;&#1099;
										&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;:<o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:9.7pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>2015138413 </span></i><i><span
										style='font-size:8.0pt;mso-ansi-language:EN-US'>MNT<o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:2;height:8.0pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:8.0pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1044;&#1072;&#1085;&#1089;&#1085;&#1099;
										&#1101;&#1079;&#1101;&#1084;&#1096;&#1080;&#1075;&#1095;&#1080;&#1081;&#1085;
										&#1085;&#1101;&#1088;: <o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:8.0pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1043;&#1086;&#1083;&#1086;&#1084;&#1090;
										&#1050;&#1072;&#1087;&#1080;&#1090;&#1072;&#1083; &#1198;&#1062;&#1050;
										&#1061;&#1061;&#1050;<span style='mso-spacerun:yes'>  </span><o:p></o:p></span></i></p>
										</td>
									 </tr>
									 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:12.25pt'>
										<td width=137 nowrap valign=top style='width:102.5pt;border:solid #BFBFBF 1.0pt;
										mso-border-themecolor:background1;mso-border-themeshade:191;border-top:
										none;mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
										background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
										height:12.25pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1043;&#1199;&#1081;&#1083;&#1075;&#1101;&#1101;&#1085;&#1080;&#1081;
										&#1091;&#1090;&#1075;&#1072;: <o:p></o:p></span></i></p>
										</td>
										<td width=198 nowrap valign=top style='width:148.85pt;border-top:none;
										border-left:none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:
										background1;mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;
										mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
										mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
										mso-border-top-themeshade:191;mso-border-left-alt:solid #BFBFBF .5pt;
										mso-border-left-themecolor:background1;mso-border-left-themeshade:191;
										mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
										mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
										<p class=MsoBodyText style='tab-stops:375.55pt'><i><span lang=MN
										style='font-size:8.0pt;mso-ansi-language:MN'>&#1056;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1081;&#1085;
										&#1076;&#1091;&#1075;&#1072;&#1072;&#1088;<o:p></o:p></span></i></p>
										</td>
									 </tr>
									</table>
									<p class=MsoBodyText style='margin-right:15.15pt;text-align:justify;
									text-justify:inter-ideograph;tab-stops:375.55pt'><span lang=MN
									style='font-size:8.0pt;mso-ansi-language:MN'><o:p></o:p></span></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:16.1pt;border:none' width=0 height=21></td>
									<![endif]>
								 </tr>
								 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:26.55pt'>
									<td width=281 valign=top style='width:211.05pt;padding:0cm 5.4pt 0cm 5.4pt;
									height:26.55pt'>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									<p class=MsoNormal><i><span lang=MN style='font-size:8.0pt;mso-ansi-language:
									MN'><o:p>&nbsp;</o:p></span></i></p>
									</td>
									<![if !supportMisalignedRows]>
									<td style='height:26.55pt;border:none' width=0 height=35></td>
									<![endif]>
								 </tr>
								</table>
								
								<p class=MsoNormal><b><span lang=MN style='mso-ansi-language:MN'><o:p>&nbsp;</o:p></span></b></p>
								
								</div>
						</div>
						<div class="form-group">
							<label for="account-first-name">{{ __("site.lastname") }}:</label>
							<input type="text" class="form-control" value="" name="account-first-name" id="account-first-name" placeholder="{{ __("site.your_lastname") }}">
						</div>
					</div>
				</div>

				<div class="form-group--submit">
					<button type="submit" class="btn btn-default btn-lg btn-block">{{ __("site.continue") }}</button>
				</div>

			</form>
		</div>
	</div>
	<!-- Personal Information / End -->
</div>
@endsection

@section('modal')
@endsection

@section('script')
<!-- REVEAL ADD-ON FILES -->
<script type='text/javascript' src='assets/vendor/revolution-addons/reveal/js/revolution.addon.revealer.min.js?ver=1.0.0'></script>
	
<!-- TYPEWRITER ADD-ON FILES -->
<script type='text/javascript' src='assets/vendor/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js'></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
@endsection
