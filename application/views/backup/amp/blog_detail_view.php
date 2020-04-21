<!doctype html>
<html ⚡>
 <head>
   <meta charset="utf-8">

<script async src="https://cdn.ampproject.org/v0.js"></script>

   <link rel="canonical" href="<?php echo base_url();?>blogs/<?php echo $blog['url']; ?>">

<title><?php echo isset($title)? "$title" : NULL; ?></title>

<meta name="description" content="<?php echo isset($description)? "$description": NULL; ?>">

  <meta name="keywords" content="<?php echo isset($keywords)? "$keywords": NULL; ?>">

<meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1">
   
   <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
   

<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
   <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/favico.ico">
<style amp-custom>

img,legend,textarea{max-width:100%}button,img,legend{border:0}body,button,legend{padding:0}.small-pull-1,.small-pull-10,.small-pull-11,.small-pull-2,.small-pull-3,.small-pull-4,.small-pull-5,.small-pull-6,.small-pull-7,.small-pull-8,.small-pull-9,.small-push-1,.small-push-10,.small-push-11,.small-push-2,.small-push-3,.small-push-4,.small-push-5,.small-push-7,.small-push-8,.small-push-9,sub,sup{position:relative}h1,h2,h3,h4,h5,h6,p{text-rendering:optimizeLegibility}img,textarea[rows]{height:auto}.dropdown-pane,.invisible{visibility:hidden}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,optgroup,strong{font-weight:700}dfn{font-style:italic}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}.orbit-caption,.sticky.is-anchored.is-at-bottom,.sticky.is-stuck.is-at-bottom{bottom:0}img{-ms-interpolation-mode:bicubic;display:inline-block;vertical-align:middle}svg:not(:root){overflow:hidden}figure{margin:1em 40px}pre,textarea{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}a,b,em,i,small,strong{line-height:inherit}dl,ol,p,ul{line-height:1.6}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}.foundation-mq{font-family:"small=0em&medium=40em&large=64em&xlarge=75em&xxlarge=90em"}body,h1,h2,h3,h4,h5,h6{font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-weight:400}html{font-size:100%;box-sizing:border-box}*,:after,:before{box-sizing:inherit}body{margin:0;line-height:1.5;color:#0a0a0a;background:#fefefe;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}select{width:100%}#map_canvas embed,#map_canvas img,#map_canvas object,.map_canvas embed,.map_canvas img,.map_canvas object,.mqa-display embed,.mqa-display img,.mqa-display object{max-width:none}button{overflow:visible;-webkit-appearance:none;-moz-appearance:none;background:0 0;border-radius:0;line-height:1}.is-visible{display:block}.is-hidden{display:none}.row{max-width:75rem;margin-left:auto;margin-right:auto}.row::after,.row::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.row::after{clear:both}.row.collapse>.column,.row.collapse>.columns{padding-left:0;padding-right:0}.row .row{margin-left:-.625rem;margin-right:-.625rem}@media screen and (min-width:40em){.row .row{margin-left:-.9375rem;margin-right:-.9375rem}}.row .row.collapse{margin-left:0;margin-right:0}.row.expanded{max-width:none}.row.expanded .row{margin-left:auto;margin-right:auto}.column,.columns{width:100%;float:left;padding-left:.625rem;padding-right:.625rem}@media screen and (min-width:40em){.column,.columns{padding-left:.9375rem;padding-right:.9375rem}}.column:last-child:not(:first-child),.columns:last-child:not(:first-child){float:right}.column.end:last-child:last-child,.end.columns:last-child:last-child{float:left}.column.row.row,.row.row.columns{float:none}.row .column.row.row,.row .row.row.columns{padding-left:0;padding-right:0;margin-left:0;margin-right:0}

@media screen and (min-width:64em){.large-2{width: 16.66667%;}.large-4{width: 33.33333%;}}


.breadcrumbs::after,.button-group::after,.clearfix::after,.menu.align-right::after,.pagination::after,.tabs::after,.title-bar::after,.top-bar::after,hr{clear:both}blockquote,dd,div,dl,dt,form,h1,h2,h3,h4,h5,h6,li,ol,p,pre,td,th,ul{margin:0;padding:0}ol,ul{margin-left:1.25rem}dl,ol,ul{margin-bottom:1rem}p{font-size:inherit;margin-bottom:.11rem}em,i{font-style:italic}h1,h2,h3,h4,h5,h6{font-style:normal;color:inherit;margin-top:0;margin-bottom:.5rem;line-height:1.4}code,kbd{color:#0a0a0a;font-family:Consolas,"Liberation Mono",Courier,monospace;background-color:#e6e6e6}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{color:#cacaca;line-height:0}h1{font-size:1.5rem}h2{font-size:1.25rem}h3{font-size:1.1875rem}h4{font-size:1.125rem}h5{font-size:1.0625rem}h6{font-size:1rem}@media screen and (min-width:40em){h1{font-size:3rem}h2{font-size:2.5rem}h3{font-size:1.9375rem}h4{font-size:1.5625rem}h5{font-size:1.25rem}h6{font-size:1rem}}a{background-color:transparent;color:#1585cf;text-decoration:none;cursor:pointer}a:focus,a:hover{color:#003659}a img{border:0}hr{box-sizing:content-box;max-width:75rem;height:0;border-right:0;border-top:0;border-bottom:1px solid #cacaca;border-left:0;margin:1.25rem auto}dl,ol,ul{list-style-position:outside}li{font-size:inherit}ul{list-style-type:disc}.accordion,.footer-links,.menu,.tabs{list-style-type:none}ol ol,ol ul,ul ol,ul ul{margin-left:1.25rem;margin-bottom:0}dl dt{margin-bottom:.3rem;font-weight:700}.banner h1,.footer h4,.subheader,code,label{font-weight:400}blockquote{margin:0 0 1rem;padding:.5625rem 1.25rem 0 1.1875rem;border-left:1px solid #cacaca}blockquote,blockquote p{line-height:1.6;color:#8a8a8a}cite{display:block;font-size:.8125rem;color:#8a8a8a}cite:before{content:'\2014 \0020'}abbr{color:#0a0a0a;cursor:help;border-bottom:1px dotted #0a0a0a}code{border:1px solid #cacaca;padding:.125rem .3125rem .0625rem}kbd{padding:.125rem .25rem 0;margin:0}.subheader{margin-top:.2rem;margin-bottom:.5rem;line-height:1.4;color:#8a8a8a}.lead{font-size:125%;line-height:1.6}.stat{font-size:2.5rem;line-height:1}p+.stat{margin-top:-1rem}.no-bullet{margin-left:0;list-style:none}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}@media screen and (min-width:40em){.medium-text-left{text-align:left}.medium-text-right{text-align:right}.medium-text-center{text-align:center}.medium-text-justify{text-align:justify}}@media screen and (min-width:64em){.large-text-left{text-align:left}.large-text-right{text-align:right}.large-text-center{text-align:center}.large-text-justify{text-align:justify}}.badge,.button,.input-group-label,.menu-centered,.menu.icon-top>li>a,.orbit-bullets{text-align:center}.show-for-print{display:none}@media print{blockquote,img,pre,tr{page-break-inside:avoid}*{background:0 0;color:#000;box-shadow:none;text-shadow:none}.show-for-print{display:block}.hide-for-print{display:none}table.show-for-print{display:table}thead.show-for-print{display:table-header-group}tbody.show-for-print{display:table-row-group}tr.show-for-print{display:table-row}td.show-for-print,th.show-for-print{display:table-cell}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}.ir a:after,a[href^='javascript:']:after,a[href^='#']:after{content:''}abbr[title]:after{content:" (" attr(title) ")"}blockquote,pre{border:1px solid #8a8a8a}thead{display:table-header-group}img{max-width:100%}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}}[type=text],[type=password],[type=date],[type=datetime],[type=datetime-local],[type=month],[type=week],[type=email],[type=number],[type=search],[type=tel],[type=time],[type=url],[type=color],textarea{display:block;box-sizing:border-box;width:100%;height:2rem;padding:.5rem;border:1px solid #cacaca;margin:0 0 1rem;font-family:inherit;font-size:1rem;color:#0a0a0a;background-color:#fefefe;box-shadow:inset 0 1px 2px rgba(10,10,10,.1);border-radius:0;transition:box-shadow .5s,border-color .25s ease-in-out;-webkit-appearance:none;-moz-appearance:none}[type=text]:focus,[type=password]:focus,[type=date]:focus,[type=datetime]:focus,[type=datetime-local]:focus,[type=month]:focus,[type=week]:focus,[type=email]:focus,[type=number]:focus,[type=search]:focus,[type=tel]:focus,[type=time]:focus,[type=url]:focus,[type=color]:focus,textarea:focus{border:1px solid #8a8a8a;background-color:#fefefe;outline:0;box-shadow:0 0 5px #cacaca;transition:box-shadow .5s,border-color .25s ease-in-out}.button.alert,.callout{box-shadow:0 .1rem .2rem rgba(0,0,0,.15)}textarea{min-height:50px}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#cacaca}input::-moz-placeholder,textarea::-moz-placeholder{color:#cacaca}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#cacaca}input::placeholder,textarea::placeholder{color:#cacaca}input:disabled,input[readonly],textarea:disabled,textarea[readonly]{background-color:#e6e6e6;cursor:default}[type=submit],[type=button]{border-radius:0;-webkit-appearance:none;-moz-appearance:none}input[type=search]{box-sizing:border-box}[type=file],[type=checkbox],[type=radio]{margin:0 0 1rem}[type=checkbox]+label,[type=radio]+label{display:inline-block;margin-left:.5rem;margin-right:1rem;margin-bottom:0;vertical-align:baseline}.button,.js-drilldown-back>a::before,.menu-icon,.menu>li,.menu>li>a i,.menu>li>a i+span,.menu>li>a img,.menu>li>a img+span{vertical-align:middle}label>[type=checkbox],label>[type=radio]{margin-right:.5rem}[type=file]{width:100%}label{display:block;margin:0;font-size:.875rem;line-height:1.8;color:#0a0a0a}label.middle{margin:0 0 1rem;padding:.5625rem 0}.help-text{margin-top:-.5rem;font-size:.8125rem;font-style:italic;color:#0a0a0a}.input-group{display:table;width:100%;margin-bottom:1rem}.input-group-button a,.input-group-button button,.input-group-button input,fieldset{margin:0}.input-group>:first-child,.input-group>:last-child>*{border-radius:0}.input-group>:first-child{border-radius:5px}.input-group-button,.input-group-field,.input-group-label{margin:0;display:table-cell;vertical-align:middle}.input-group-label{padding:0 1rem;background:#e6e6e6;color:#0a0a0a;border:1px solid #cacaca;white-space:nowrap;width:1%;height:100%}.input-group-label:first-child{border-right:0}.input-group-label:last-child{border-left:0}.input-group-field{border-radius:0;height:2.5rem}.fieldset,select{border:1px solid #cacaca}.input-group-button{padding-top:0;padding-bottom:0;text-align:center;height:100%;width:1%}.input-group .input-group-button{display:table-cell}fieldset{border:0;padding:0}legend{margin-bottom:.5rem}.fieldset{padding:1.25rem;margin:1.125rem 0}.fieldset legend{background:#fefefe;padding:0 .1875rem;margin:0 0 0 -.1875rem}select{height:2.4375rem;padding:.5rem;margin:0 0 1rem;font-size:1rem;font-family:inherit;line-height:normal;color:#0a0a0a;background-color:#fefefe;border-radius:0;-webkit-appearance:none;-moz-appearance:none;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="32" height="24" viewBox="0 0 32 24"><polygon points="0,0 32,0 16,24" style="fill: rgb%28138, 138, 138%29"></polygon></svg>');background-size:9px 6px;background-position:right center;background-origin:content-box;background-repeat:no-repeat}.button,.close-button,.label,.menu-text,.menu.simple li,.tabs-title>a{line-height:1}.form-error,.is-invalid-label{color:#ec5840}@media screen and (min-width:0\0){select{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAIpJREFUeNrEkckNgDAMBBfRkEt0ObRBBdsGXUDgmQfK4XhH2m8czQAAy27R3tsw4Qfe2x8uOO6oYLb6GlOor3GF+swURAOmUJ+RwtEJs9WvTGEYxBXqI1MQAZhCfUQKRzDMVj+TwrAIV6jvSUEkYAr1LSkcyTBb/V+KYfX7xAeusq3sLDtGH3kEGACPWIflNZfhRQAAAABJRU5ErkJggg==)}}select:disabled{background-color:#e6e6e6;cursor:default}select::-ms-expand{display:none}select[multiple]{height:auto}.is-invalid-input:not(:focus){background-color:rgba(236,88,64,.1);border-color:#ec5840}.form-error{display:none;margin-top:-.5rem;margin-bottom:1rem;font-size:.75rem;font-weight:700}.form-error.is-visible{display:block}.button{display:inline-block;cursor:pointer;-webkit-appearance:none;transition:background-color .25s ease-out,color .25s ease-out;border:1px solid transparent;border-radius:0;padding:.85em 1em;margin:0 0 1rem;font-size:.9rem;background-color:#0F3971;color:#fefefe}[data-whatinput=mouse] .button{outline:0}.button:focus,.button:hover{background-color:#1583cc;color:#fefefe}.button.tiny{font-size:.6rem}.button.small{font-size:.75rem}.button.large{font-size:1.25rem}.button.expanded{display:block;width:100%;margin-left:0;margin-right:0}.button.primary{background-color:#2199e8;color:#fefefe}.button.primary:focus,.button.primary:hover{background-color:#147cc0;color:#fefefe}.button.secondary{background-color:#777;color:#fefefe}.button.secondary:focus,.button.secondary:hover{background-color:#5f5f5f;color:#fefefe}.button.frost{background-color:#0078c1;color:#fefefe}.button.frost:focus,.button.frost:hover{background-color:#c89f00;background-color:#2199e8;color:#fefefe}.button.success{background-color:#3adb76;color:#fefefe}.button.success:focus,.button.success:hover{background-color:#22bb5b;color:#fefefe}.button.warning{background-color:#ffae00;color:#fefefe}.button.warning:focus,.button.warning:hover{background-color:#cc8b00;color:#fefefe}.button.alert{background-color:#ec5840;color:#fefefe;border:.1rem solid #f51f1f;border-radius:.3rem}.button.alert:focus,.button.alert:hover{background-color:#da3116;color:#fefefe}.button.hollow{border:1px solid #2199e8;color:#2199e8}.button.hollow,.button.hollow:focus,.button.hollow:hover{background-color:transparent}.button.hollow:focus,.button.hollow:hover{border-color:#0c4d78;color:#0c4d78}.button.hollow.primary{border:1px solid #2199e8;color:#2199e8}.button.hollow.primary:focus,.button.hollow.primary:hover{border-color:#0c4d78;color:#0c4d78}.button.hollow.secondary{border:1px solid #777;color:#777}.button.hollow.secondary:focus,.button.hollow.secondary:hover{border-color:#3c3c3c;color:#3c3c3c}.button.hollow.success{border:1px solid #3adb76;color:#3adb76}.button.hollow.success:focus,.button.hollow.success:hover{border-color:#157539;color:#157539}.button.hollow.warning{border:1px solid #ffae00;color:#ffae00}.button.hollow.warning:focus,.button.hollow.warning:hover{border-color:#805700;color:#805700}.button.hollow.alert{border:1px solid #ec5840;color:#ec5840}.button.hollow.alert:focus,.button.hollow.alert:hover{border-color:#881f0e;color:#881f0e}.button.disabled,.button[disabled]{opacity:.25;cursor:not-allowed;pointer-events:none}.button.dropdown::after{content:'';width:0;height:0;border:.4em inset;border-color:#fefefe transparent transparent;border-top-style:solid;border-bottom-width:0;position:relative;top:.4em;float:right;margin-left:1em;display:inline-block}.button.arrow-only::after{margin-left:0;float:none;top:-.1em}.accordion{background:#fefefe;border:1px solid #e6e6e6;border-bottom:0;border-radius:0;margin-left:0}.accordion-title{display:block;padding:1.25rem 1rem;line-height:1;font-size:.75rem;color:#2199e8;position:relative;border-bottom:1px solid #e6e6e6}.accordion-title:focus,.accordion-title:hover{background-color:#e6e6e6}.accordion-title::before{content:'+';position:absolute;right:1rem;top:50%;margin-top:-.5rem}.is-active>.accordion-title::before{content:'–'}.accordion-content{padding:1rem;display:none;border-bottom:1px solid #e6e6e6;background-color:#fefefe}.is-accordion-submenu-parent>a{position:relative}.is-accordion-submenu-parent>a::after{content:'';display:block;width:0;height:0;border:6px inset;border-color:#2199e8 transparent transparent;border-top-style:solid;border-bottom-width:0;position:absolute;top:50%;margin-top:-4px;right:1rem}.is-accordion-submenu-parent[aria-expanded=true]>a::after{-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transform:scaleY(-1);-ms-transform:scaleY(-1);transform:scaleY(-1)}.badge{display:inline-block;padding:.3em;min-width:2.1em;font-size:.6rem;border-radius:50%;background:#2199e8;color:#fefefe}.badge.secondary{background:#777;color:#fefefe}.badge.success{background:#3adb76;color:#fefefe}.badge.warning{background:#ffae00;color:#fefefe}.badge.alert{background:#ec5840;color:#fefefe}.breadcrumbs{list-style:none;margin:0 0 1rem}.breadcrumbs::after,.breadcrumbs::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.breadcrumbs li{float:left;color:#0a0a0a;font-size:.6875rem;cursor:default;text-transform:uppercase}.breadcrumbs li:not(:last-child)::after{color:#cacaca;content:">";margin:0 .35rem;position:relative;top:0;opacity:1}.breadcrumbs a{color:#003659}.breadcrumbs a:hover{text-decoration:underline}.breadcrumbs .disabled{color:#cacaca}.button-group{margin-bottom:1rem;font-size:0}.button-group::after,.button-group::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.button-group .button{margin:0;font-size:.9rem;float:left}.is-dropdown-menu.vertical.align-right,.menu.align-right>li{float:right}.button-group .button:not(:last-child){border-right:1px solid #fefefe}.button-group.tiny .button{font-size:.6rem}.button-group.small .button{font-size:.75rem}.button-group.large .button{font-size:1.25rem}.button-group.expanded{margin-right:-1px}.button-group.expanded::after,.button-group.expanded::before{display:none}.button-group.expanded .button:first-child:nth-last-child(2),.button-group.expanded .button:first-child:nth-last-child(2):first-child:nth-last-child(2)~.button{display:inline-block;width:calc(50% - 1px);margin-right:1px}.button-group.expanded .button:first-child:nth-last-child(3),.button-group.expanded .button:first-child:nth-last-child(3):first-child:nth-last-child(3)~.button{display:inline-block;width:calc(33.33333% - 1px);margin-right:1px}.button-group.expanded .button:first-child:nth-last-child(4),.button-group.expanded .button:first-child:nth-last-child(4):first-child:nth-last-child(4)~.button{display:inline-block;width:calc(25% - 1px);margin-right:1px}.button-group.expanded .button:first-child:nth-last-child(5),.button-group.expanded .button:first-child:nth-last-child(5):first-child:nth-last-child(5)~.button{display:inline-block;width:calc(20% - 1px);margin-right:1px}.button-group.expanded .button:first-child:nth-last-child(6),.button-group.expanded .button:first-child:nth-last-child(6):first-child:nth-last-child(6)~.button{display:inline-block;width:calc(16.66667% - 1px);margin-right:1px}.button-group.primary .button{background-color:#2199e8;color:#fefefe}.button-group.primary .button:focus,.button-group.primary .button:hover{background-color:#147cc0;color:#fefefe}.button-group.secondary .button{background-color:#777;color:#fefefe}.button-group.secondary .button:focus,.button-group.secondary .button:hover{background-color:#5f5f5f;color:#fefefe}.button-group.success .button{background-color:#3adb76;color:#fefefe}.button-group.success .button:focus,.button-group.success .button:hover{background-color:#22bb5b;color:#fefefe}.button-group.warning .button{background-color:#ffae00;color:#fefefe}.button-group.warning .button:focus,.button-group.warning .button:hover{background-color:#cc8b00;color:#fefefe}.button-group.alert .button{background-color:#ec5840;color:#fefefe}.button-group.alert .button:focus,.button-group.alert .button:hover{background-color:#da3116;color:#fefefe}.button-group.stacked .button,.button-group.stacked-for-medium .button,.button-group.stacked-for-small .button{width:100%}.button-group.stacked .button:not(:last-child),.button-group.stacked-for-medium .button:not(:last-child),.button-group.stacked-for-small .button:not(:last-child){margin-right:0}@media screen and (min-width:40em){.button-group.stacked-for-small .button{width:auto}.button-group.stacked-for-small .button:not(:last-child){margin-right:1px}}@media screen and (min-width:64em){.button-group.stacked-for-medium .button{width:auto}.button-group.stacked-for-medium .button:not(:last-child){margin-right:1px}}@media screen and (max-width:39.9375em){.button-group.stacked-for-small.expanded{display:block}.button-group.stacked-for-small.expanded .button{display:block;margin-right:0}}.callout{margin:0 0 1rem;padding:1rem;position:relative;color:#0a0a0a;background:#fff;border:.1rem solid #d2d2d2;border-radius:.3rem}.callout>:last-child,.menu a,.menu button,.menu input{margin-bottom:0}.callout>:first-child{margin-top:0}.callout.primary{background-color:#def0fc}.callout.secondary{background-color:#ebebeb}.callout.success{background-color:#e1faea}.callout.warning{background-color:#fff3d9}.callout.alert{background-color:#fce6e2}.callout.small{padding:.5rem}.callout.large{padding:3rem}.close-button{position:absolute;color:#8a8a8a;right:1rem;top:.5rem;font-size:2em;cursor:pointer}[data-whatinput=mouse] .close-button{outline:0}.close-button:focus,.close-button:hover{color:#0a0a0a}.menu{margin:0}[data-whatinput=mouse] .menu>li{outline:0}@media screen and (min-width:0px){.menu>li>a{display:block;padding:.5rem;line-height:1;font-size:90%}}@media screen and (min-width:400px){.menu>li>a{display:block;padding:.7rem;line-height:1;font-size:90%}}@media screen and (min-width:520px){.menu>li>a{display:block;padding:.7rem 1rem;line-height:1;font-size:100%}.menu>li>a.pad-left-0{padding-left:0px;}}.menu>li>a i,.menu>li>a img{margin-right:.25rem;display:inline-block}.menu>li{display:table-cell}.menu.vertical>li{display:block}@media screen and (min-width:40em){.menu.medium-horizontal>li{display:table-cell}.menu.medium-vertical>li{display:block}}@media screen and (min-width:64em){.menu.large-horizontal>li{display:table-cell}.menu.large-vertical>li{display:block}}.menu.simple li{display:inline-block;margin-right:1rem}.menu.simple a{padding:0}.menu.align-right::after,.menu.align-right::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.menu.expanded{width:100%;display:table;table-layout:fixed}.menu.expanded>li:first-child:last-child{width:100%}.menu.icon-top>li>a i,.menu.icon-top>li>a img{display:block;margin:0 auto .25rem}.menu.nested{margin-left:1rem}.menu .active>a{color:#fefefe;background:#2199e8}.menu-text{font-weight:700;color:inherit;padding:.7rem 1rem}.menu-centered>.menu{display:inline-block}


@media screen and (max-width:39.9375em){.media-object.stack-for-small .media-object-section{padding:0 0 1rem;display:block}.media-object.stack-for-small .media-object-section img{width:100%}}.media-object-section{display:table-cell;vertical-align:top}.media-object-section:first-child{padding-right:1rem}.media-object-section:last-child:not(:nth-child(2)){padding-left:1rem}.media-object-section.middle{vertical-align:middle}.media-object-section.bottom{vertical-align:bottom}body,html{height:100%}.off-canvas-wrapper{width:100%;overflow-x:hidden;position:relative;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-overflow-scrolling:auto}.off-canvas-wrapper-inner{position:relative;width:100%;transition:-webkit-transform .5s ease;transition:transform .5s ease}.off-canvas-wrapper-inner::after,.off-canvas-wrapper-inner::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.off-canvas-wrapper-inner::after{clear:both}.off-canvas-content{min-height:100%;background:#fefefe;transition:-webkit-transform .5s ease;transition:transform .5s ease;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1;padding-bottom:.1px;box-shadow:0 0 10px rgba(10,10,10,.5)}.js-off-canvas-exit{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(254,254,254,.25);cursor:pointer;transition:background .5s ease}.off-canvas{position:absolute;background:#e6e6e6;z-index:-1;max-height:100%;overflow-y:auto;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}.orbit-caption,.orbit-next:active,.orbit-next:focus,.orbit-next:hover,.orbit-previous:active,.orbit-previous:focus,.orbit-previous:hover{background-color:rgba(10,10,10,.5)}[data-whatinput=mouse] .off-canvas{outline:0}.off-canvas.position-left{left:-250px;top:0;width:250px}.is-open-left{-webkit-transform:translateX(250px);-ms-transform:translateX(250px);transform:translateX(250px)}.off-canvas.position-right{right:-250px;top:0;width:250px}.is-open-right{-webkit-transform:translateX(-250px);-ms-transform:translateX(-250px);transform:translateX(-250px)}@media screen and (min-width:40em){.position-left.reveal-for-medium{left:0;z-index:auto;position:fixed}.position-left.reveal-for-medium~.off-canvas-content{margin-left:250px}.position-right.reveal-for-medium{right:0;z-index:auto;position:fixed}.position-right.reveal-for-medium~.off-canvas-content{margin-right:250px}}@media screen and (min-width:64em){.position-left.reveal-for-large{left:0;z-index:auto;position:fixed}.position-left.reveal-for-large~.off-canvas-content{margin-left:250px}.position-right.reveal-for-large{right:0;z-index:auto;position:fixed}.position-right.reveal-for-large~.off-canvas-content{margin-right:250px}}.orbit,.orbit-container{position:relative}.orbit-container{margin:0;overflow:hidden;list-style:none}.orbit-caption,.orbit-next,.orbit-previous{position:absolute;padding:1rem;color:#fefefe}.orbit-slide{width:100%;max-height:100%}.orbit-slide.no-motionui.is-active{top:0;left:0}.orbit-figure{margin:0}.orbit-image{margin:0;width:100%;max-width:100%}.orbit-caption{width:100%;margin-bottom:0}.orbit-next,.orbit-previous{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);z-index:10}[data-whatinput=mouse] .orbit-next,[data-whatinput=mouse] .orbit-previous{outline:0}.orbit-previous{left:0}.orbit-next{left:auto;right:0}.orbit-bullets{position:relative;margin-top:.8rem;margin-bottom:.8rem}[data-whatinput=mouse] .orbit-bullets{outline:0}.orbit-bullets button{width:1.2rem;height:1.2rem;margin:.1rem;background-color:#cacaca;border-radius:50%}.orbit-bullets button.is-active,.orbit-bullets button:hover{background-color:#8a8a8a}.pagination{margin-left:0;margin-bottom:1rem}.pagination::after,.pagination::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.pagination li{font-size:.875rem;margin-right:.0625rem;border-radius:0;display:none}.pagination li:first-child,.pagination li:last-child{display:inline-block}@media screen and (min-width:40em){.pagination li{display:inline-block}.reveal{min-height:0}}.pagination a,.pagination button{color:#0a0a0a;display:block;padding:.1875rem .625rem;border-radius:0}.pagination a:hover,.pagination button:hover{background:#e6e6e6}.pagination .current{padding:.1875rem .625rem;background:#2199e8;color:#fefefe;cursor:default}.pagination .disabled{padding:.1875rem .625rem;color:#cacaca;cursor:default}.pagination .disabled:hover{background:0 0}.pagination .ellipsis::after{content:'\2026';padding:.1875rem .625rem;color:#0a0a0a}.progress-meter-text,.switch{color:#fefefe;font-weight:700}.pagination-previous a::before,.pagination-previous.disabled::before{content:'\00ab';display:inline-block;margin-right:.5rem}.pagination-next a::after,.pagination-next.disabled::after{content:'\00bb';display:inline-block;margin-left:.5rem}.progress{background-color:#cacaca;height:1rem;margin-bottom:1rem;border-radius:0}.progress.primary .progress-meter{background-color:#2199e8}.progress.secondary .progress-meter{background-color:#777}.progress.success .progress-meter{background-color:#3adb76}.progress.warning .progress-meter{background-color:#ffae00}.progress.alert .progress-meter{background-color:#ec5840}.progress-meter{position:relative;display:block;width:0;height:100%;background-color:#2199e8}.progress-meter-text{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);position:absolute;margin:0;font-size:.75rem;white-space:nowrap}.slider-fill,.slider-handle{left:0;display:inline-block}.slider{position:relative;height:.5rem;margin-top:1.25rem;margin-bottom:2.25rem;background-color:#e6e6e6;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:none;touch-action:none}.slider-fill{position:absolute;top:0;max-width:100%;height:.5rem;background-color:#cacaca;transition:all .2s ease-in-out}.slider-fill.is-dragging{transition:all 0s linear}.slider-handle{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);position:absolute;z-index:1;width:1.4rem;height:1.4rem;background-color:#2199e8;transition:all .2s ease-in-out;-ms-touch-action:manipulation;touch-action:manipulation;border-radius:0}[data-whatinput=mouse] .slider-handle{outline:0}.slider-handle:hover{background-color:#1583cc}.slider-handle.is-dragging{transition:all 0s linear}.slider.disabled,.slider[disabled]{opacity:.25;cursor:not-allowed}.slider.vertical{display:inline-block;width:.5rem;height:12.5rem;margin:0 1.25rem;-webkit-transform:scale(1,-1);-ms-transform:scale(1,-1);transform:scale(1,-1)}.slider.vertical .slider-fill{top:0;width:.5rem;max-height:100%}.slider.vertical .slider-handle{position:absolute;top:0;left:50%;width:1.4rem;height:1.4rem;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.sticky-container{position:relative}.sticky{z-index:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.sticky.is-stuck{position:fixed;z-index:5}.sticky.is-stuck.is-at-top{top:0}.sticky.is-anchored{position:absolute;left:auto;right:auto}body.is-reveal-open{overflow:hidden}.table-scroll,table.scroll{overflow-x:auto}.reveal-overlay{display:none;position:fixed;top:0;bottom:0;left:0;right:0;z-index:1005;background-color:rgba(10,10,10,.45);overflow-y:scroll}.reveal{display:none;z-index:1006;padding:1rem;border:1px solid #cacaca;background-color:#fefefe;border-radius:0;position:relative;top:100px;margin-left:auto;margin-right:auto;overflow-y:auto}.switch-paddle,.switch-paddle::after{display:block;transition:all .25s ease-out}[data-whatinput=mouse] .reveal{outline:0}.reveal .column,.reveal .columns{min-width:0}.reveal>:last-child{margin-bottom:0}.reveal.collapse{padding:0}table caption,table tbody td,table tbody th{padding:.5rem .625rem .625rem}@media screen and (min-width:40em){.reveal{width:600px;max-width:75rem}.reveal .reveal{left:auto;right:auto;margin:0 auto}.reveal.tiny{width:30%;max-width:75rem}.reveal.small{width:50%;max-width:75rem}.reveal.large{width:90%;max-width:75rem}}.reveal.full{top:0;left:0;width:100%;height:100%;height:100vh;min-height:100vh;max-width:none;margin-left:0;border:0}@media screen and (max-width:39.9375em){.reveal{top:0;left:0;width:100%;height:100%;height:100vh;min-height:100vh;max-width:none;margin-left:0;border:0}}.reveal.without-overlay{position:fixed}.switch{margin-bottom:1rem;outline:0;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;font-size:.875rem}.switch-input{opacity:0;position:absolute}.switch-paddle{background:#cacaca;cursor:pointer;position:relative;width:4rem;height:2rem;border-radius:0;color:inherit;font-weight:inherit}.has-tip,.title-bar-title,table caption{font-weight:700}input+.switch-paddle{margin:0}.switch-paddle::after{background:#fefefe;content:'';position:absolute;height:1.5rem;left:.25rem;top:.25rem;width:1.5rem;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);border-radius:0}.switch-active,.switch-inactive,.tooltip.left::before{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}input:checked~.switch-paddle{background:#2199e8}input:checked~.switch-paddle::after{left:2.25rem}[data-whatinput=mouse] input:focus~.switch-paddle{outline:0}.switch-active,.switch-inactive{position:absolute;top:50%;transform:translateY(-50%)}.switch-active{left:8%;display:none}input:checked+label>.switch-active{display:block}.switch-inactive{right:15%}input:checked+label>.switch-inactive{display:none}.switch.tiny .switch-paddle{width:3rem;height:1.5rem;font-size:.625rem}.switch.tiny .switch-paddle::after{width:1rem;height:1rem}.switch.tiny input:checked~.switch-paddle:after{left:1.75rem}.switch.small .switch-paddle{width:3.5rem;height:1.75rem;font-size:.75rem}.switch.small .switch-paddle::after{width:1.25rem;height:1.25rem}.switch.small input:checked~.switch-paddle:after{left:2rem}.switch.large .switch-paddle{width:5rem;height:2.5rem;font-size:1rem}.switch.large .switch-paddle::after{width:2rem;height:2rem}.switch.large input:checked~.switch-paddle:after{left:2.75rem}table{border-collapse:collapse;border-spacing:0;width:100%;margin-bottom:1rem;border-radius:0}table tbody,table tfoot,table thead{border:1px solid #f1f1f1;background-color:#fefefe}table tfoot,table thead{background:#f8f8f8;color:#0a0a0a}.tabs.primary>li>a,.title-bar,.tooltip{color:#fefefe}table tfoot tr,table thead tr{background:0 0}table tfoot td,table tfoot th,table thead td,table thead th{padding:.5rem .625rem .625rem;font-weight:700;text-align:left}table tbody tr:nth-child(even){background-color:#f1f1f1}@media screen and (max-width:63.9375em){table.stack tfoot,table.stack thead{display:none}table.stack td,table.stack th,table.stack tr{display:block}table.stack td{border-top:0}}.tabs,.tabs-content{border:1px solid #e6e6e6}table.scroll{display:block;width:100%}table.hover tr:hover{background-color:#f9f9f9}table.hover tr:nth-of-type(even):hover{background-color:#ececec}.table-scroll table{width:auto}.tabs{margin:0;background:#fefefe}.tabs::after,.tabs::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.tabs.vertical>li{width:auto;float:none;display:block}.tabs-title,.title-bar-left{float:left}.tabs.simple>li>a{padding:0}.tabs.simple>li>a:hover{background:0 0}.tabs.primary{background:#2199e8}.tabs.primary>li>a:focus,.tabs.primary>li>a:hover{background:#1893e4}.tabs-title>a{display:block;padding:1.25rem 1.5rem;font-size:.75rem}.tabs-title>a:hover{background:#fefefe}.tabs-title>a:focus,.tabs-title>a[aria-selected=true]{background:#e6e6e6}.tabs-content{background:#fefefe;transition:all .5s ease;border-top:0}.tabs-content.vertical{border:1px solid #e6e6e6;border-left:0}.tabs-panel{display:none;padding:1rem}.tabs-panel.is-active{display:block}.thumbnail{border:4px solid #fefefe;box-shadow:0 0 0 1px rgba(10,10,10,.2);display:inline-block;line-height:0;max-width:100%;transition:box-shadow .2s ease-out;border-radius:0;margin-bottom:1rem}.thumbnail:focus,.thumbnail:hover{box-shadow:0 0 6px 1px rgba(33,153,232,.5)}.title-bar{background:#0a0a0a;padding:.5rem}.title-bar::after,.title-bar::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.menu-icon.dark,.title-bar-title{display:inline-block;vertical-align:middle}.title-bar .menu-icon{margin-left:.25rem;margin-right:.5rem}.title-bar-right{float:right;text-align:right}.top-bar-left,.top-bar-title,ul#css3menu1 .column,ul#css3menu1 li{float:left}.menu-icon.dark{position:relative;cursor:pointer;width:20px;height:16px}.menu-icon.dark::after{content:'';position:absolute;display:block;width:100%;height:2px;background:#0a0a0a;top:0;left:0;box-shadow:0 7px 0 #0a0a0a,0 14px 0 #0a0a0a}.menu-icon.dark:hover::after{background:#8a8a8a;box-shadow:0 7px 0 #8a8a8a,0 14px 0 #8a8a8a}.has-tip{border-bottom:dotted 1px #8a8a8a;position:relative;display:inline-block;cursor:help}.tooltip.top::before,.tooltip::before{content:'';display:block;width:0;height:0}.tooltip{background-color:#0a0a0a;font-size:80%;padding:.75rem;position:absolute;z-index:10;top:calc(100% + .6495rem);max-width:10rem;border-radius:0}.tooltip::before{border:.75rem inset;border-color:transparent transparent #0a0a0a;border-bottom-style:solid;border-top-width:0;bottom:100%;position:absolute;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.tooltip.top::before{border:.75rem inset;border-color:#0a0a0a transparent transparent;border-top-style:solid;border-bottom-width:0;top:100%;bottom:auto}.tooltip.left::before,.tooltip.right::before{content:'';display:block;width:0;height:0;bottom:auto;top:50%}.tooltip.left::before{border:.75rem inset;border-color:transparent transparent transparent #0a0a0a;border-left-style:solid;border-right-width:0;left:100%;transform:translateY(-50%)}.tooltip.right::before{border:.75rem inset;border-color:transparent #0a0a0a transparent transparent;border-right-style:solid;border-left-width:0;left:auto;right:100%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.top-bar::after,.top-bar::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}.top-bar input{width:200px;margin-right:1rem}.top-bar .input-group-field{width:100%;margin-right:0}.top-bar input.button{width:auto}@media screen and (max-width:39.9375em){.stacked-for-small .top-bar-left,.stacked-for-small .top-bar-right{width:100%}.hide-for-small-only{display:none}}@media screen and (max-width:63.9375em){.stacked-for-medium .top-bar-left,.stacked-for-medium .top-bar-right{width:100%}.show-for-large{display:none}}@media screen and (max-width:74.9375em){.stacked-for-large .top-bar-left,.stacked-for-large .top-bar-right{width:100%}}.top-bar-left,.top-bar-right{width:100%}.top-bar-title{margin-right:1rem}.top-bar-right{float:right}.hide{display:none}@media screen and (max-width:0em),screen and (min-width:40em){.show-for-small-only{display:none}}@media screen and (min-width:40em){.top-bar-left,.top-bar-right{width:auto}.hide-for-medium{display:none}}@media screen and (max-width:39.9375em){.show-for-medium{display:none}}@media screen and (min-width:40em) and (max-width:63.9375em){.hide-for-medium-only{display:none}}@media screen and (max-width:39.9375em),screen and (min-width:64em){.show-for-medium-only{display:none}}@media screen and (min-width:64em){.hide-for-large{display:none}}@media screen and (min-width:64em) and (max-width:74.9375em){.hide-for-large-only{display:none}}@media screen and (max-width:63.9375em),screen and (min-width:75em){.show-for-large-only{display:none}}.show-for-sr,.show-on-focus{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0)}.show-on-focus:active,.show-on-focus:focus{position:static;height:auto;width:auto;overflow:visible;clip:auto}.hide-for-portrait,.show-for-landscape{display:block}@media screen and (orientation:landscape){.hide-for-portrait,.show-for-landscape{display:block}.hide-for-landscape,.show-for-portrait{display:none}}.hide-for-landscape,.show-for-portrait{display:none}@media screen and (orientation:portrait){.hide-for-portrait,.show-for-landscape{display:none}.hide-for-landscape,.show-for-portrait{display:block}}.float-left{float:left}.float-right{float:right}.float-center{display:block;margin-left:auto;margin-right:auto}.clearfix::after,.clearfix::before{content:' ';display:table;-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-order:1;-ms-flex-order:1;order:1}* html ul#css3menu1 li a,ul#css3menu1{display:inline-block}ul#css3menu1,ul#css3menu1 ul{margin:0;list-style:none;padding:0}ul#css3menu1,ul#css3menu1 .submenu{border-width:0;border-style:solid;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px}ul#css3menu1 .submenu{visibility:hidden;position:absolute;left:0;top:75px;opacity:0;-moz-transition:all .5s;-webkit-transition:opacity .5s;-o-transition:opacity .5s,visibility .5s;transition:opacity .5s;float:left;z-index:2;background-color:#0F3971;border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;-webkit-border-radius:0 0 6px 6px;padding:0 3px 3px}ul#css3menu1 li.topmenu>a,ul#css3menu1 ul a{-moz-transition:all .5s;-webkit-transition:all .5s;-o-transition:all .5s}ul#css3menu1 li.topmenu a.pressed,ul#css3menu1 li.topmenu:hover>a,ul#css3menu1 li.topmenu>a,ul#css3menu1 ul a{background-color:transparent}ul#css3menu1 li:hover>.submenu{visibility:visible;opacity:1}ul#css3menu1 li{position:relative;display:block;white-space:nowrap;font-size:0}ul#css3menu1 li:hover{z-index:1}ul#css3menu1 ul .submenu{position:absolute;left:100%;top:0;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;-moz-box-shadow:0 0 1px #bec6c7;-webkit-box-shadow:0 0 1px #bec6c7;box-shadow:0 0 1px #bec6c7}ul#css3menu1{font-size:0;z-index:999;position:relative;zoom:1;padding:0;padding-top: 12px;}.sidenav a,.sidenav li,ul#css3menu1 a{display:block}ul#css3menu1>li{margin:0}ul#css3menu1 a:active,ul#css3menu1 a:focus{outline-style:none}ul#css3menu1 a{vertical-align:middle;text-align:left;text-decoration:none;font-size:16px;color:#fff;cursor:pointer;padding:18px 10px;background-repeat:repeat;border-width:0;border-style:none}ul#css3menu1 ul li{float:none;margin:3px 0 0}ul#css3menu1 ul a{text-align:left;padding:7px;border-radius:0;-moz-border-radius:0;-webkit-border-radius:0;font-size:13px;color:#fff;text-decoration:none}ul#css3menu1 li a.pressed,ul#css3menu1 li:hover>a{border-style:none;color:#B7C5CE;text-decoration:none}ul#css3menu1 img{border:none;vertical-align:middle;}ul#css3menu1 span{display:block;overflow:visible;background-position:right center;background-repeat:no-repeat;padding-right:0}ul#css3menu1 ul span{background-image:url(arrowsub.gif);padding-right:12px}ul#css3menu1 ul li a.pressed,ul#css3menu1 ul li:hover>a{background-color:transparent;color:#B7C5CE;text-decoration:none}ul#css3menu1 li.topmenu>a{border-radius:0;-moz-border-radius:0;-webkit-border-radius:0}.submenu li{padding:10px;border-bottom:1px dotted #fff}.sub_menu li{padding-left:0}.sidenav{height:100%;width:0;position:fixed;z-index:1;top:0;left:0;background-color:#0F3971;overflow-x:hidden;transition:.5s;padding-top:20px}.sidenav a{padding:8px 8px 8px 32px;text-decoration:none;font-size:15px;color:#fff}.offcanvas a:focus,.sidenav a:hover{color:#f1f1f1}.sidenav .closebtn{position:absolute;top:0;right:25px;font-size:36px;margin-left:50px}@media screen and (max-height:450px){.sidenav{padding-top:15px}.sidenav a{font-size:18px}}@media screen and (max-width:800px){.mobileviewui{display:block}.mobilenav{color:#4176bd}}.bannerimg{height:360px;width:100%;overflow:hidden}.full{width:100%;float:left}.banner{position:relative}section{padding:0}.banner_contant{width:82%;position:absolute;top:30px;left:0;right:0;margin:0 auto}.banner h1{text-align:center;line-height:23px;padding:0 10px;color:#0F3971}@media only screen and (max-width:1100px){.bannerimg{height:auto}}@media only screen and (max-width:800px){.banner_contant{top:15px;ont-size:14px;width:90%}}@media only screen and (max-width:500px){.banner_contant{top:5px;font-size:7px;width:94%}.banner_contant h1{line-height:10px}}@media screen and (max-width:770px){.mobiluispan{display:inline;color:grey}.mobileuifont h3{color:#0F3971}.mobileuibtn .button{width:40%;font-size:.7rem}p.mobileuifont span{float:none}.mobileui{display:none}.mobileuifont,.mobileuifont h1,.mobileuifont h3,.mobileuifont h5,.mobileuifonthead{font-size:.6875rem}p.mobileuifont{font-size:7px}.top-bar-left img{width:10em;margin-left:5px}.mobileuilogodiv{width:60%}.mobileuidiv{width:40%}.mobileuidiv p{margin-top:-5px}.mobileuidiv ul.menu{height:1em}input.search{width:9em;font-size:12px;padding:11px}.mobile-menu{padding-top:1.2em}.footer{padding:2rem}.footer h4{padding-right:0;text-align:left}}.btncustominq,.btncustomreq{padding-left:0;padding-right:0;border-radius:1000px}.btncustomreq{background:#4F81BD;float:right;margin-bottom:0}.btncustomreq:hover{background:#4f6bbd}.btncustominq{background:#4BACC6}.btncustominq:hover{background:#4bc0c6}.rotate-90:before{-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg);font-size:12px;color:#2199e8}#back-top{margin-right:20px;bottom:20px;right:2%;float:right;z-index:100}.full-width{max-width:1400px}.footer{background-color:#e4e4e4;padding:2rem 4rem;text-align:center;color:#fff}.footer i{font-size:100px}.footer h4{color:#003659;font-size:1em;margin-top:2.5rem;margin-bottom:10px}.footer a,.footer p{font-weight:300;font-size:.8em;color:#003659}@media only screen and (min-width:40.063em){.footer .columns:nth-child(n+2){border-left:1px solid #b3b3b3;min-height:322px}}.footer-links li{margin-top:.5em}.card{font-family:Roboto,sans-serif;overflow:hidden;box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);color:#272727;border-radius:2px}.card .title{line-height:3rem;font-size:1.5rem;font-weight:300}.card .content{padding:1.3rem;font-weight:300;border-radius:0 0 2px 2px}.card .action{border-top:1px solid rgba(160,160,160,.2);padding:1.3rem}.card .image{position:relative}.card .image .title{position:absolute;bottom:0;left:0;padding:1.3rem;color:#fff}.card .image img{border-radius:2px 2px 0 0}

.top-bar{background: #ececec;}.h-contact{float:right}.h-menu-cust{float:right;}.pad-left-0{padding-left:0 ;}.top-head{color:#808080;font-size:15px;}.top-color{color:#808080;}.boby, .top-bar-left{background: #0F3971;}#css3menu1{padding-top:12px ;}a.main-menu-li{height:25px;line-height:25px;}.submenu-column-33{width:33%}.submenu-column-34{width:34%}.sub-menu-width{width:800px;}.sub-menu-span{margin-top:32px;width:100%;}.sub-menu-width-200{width:200px;}.sub-menu-top-border{border-top:1px solid #fff; width:100%;}.mob-serch-ul{padding-top: 1.68em;float: right;}.search-input-cust{border-radius:5px; padding: 0; padding-left: 8px; height: 1.93em;}.bord-bot-none{border-bottom:none;}.para-header{padding-left:10px;padding-right:10px;}.search-png{margin-top:8px;}.pad-top-10{padding-top: 10px;}.cust-card-main{padding-top: 18px; padding-bottom: 0px; margin-bottom: 0px;}h2.blog-main-title{font-size: 1.5625rem;}.blog-heading{text-align: justify; font-size: 18px; font-weight: bold; color: #0F3971;}.date-author{color: #808080}.flt-right{float:right;}a.mar-right-social{margin-right: 7px;}.mar-bot-1em{margin-bottom: 1em;}.div-justify{text-align:justify;}.div-center{text-align:center;}@media screen and (max-width: 770px){.mobileuifont h2 {font-size: 13px ;font-weight: bold;}hr {margin-top: 0px;}h6 {font-size: 0.7rem;}}.foot-col-1 h4{padding-right: 25%;}.foot-social-icon h4{padding-right: 3%;}.foot-social-icon ul li i{font-size: 15px;}.left-side{text-align:left;}.off-detail-phone{font-size:1em }a.off-detail-email{font-size:13px}.off-detail-h4{padding-left: 5%;text-align: left;}.foot-pad{padding-top: 2.6em;}.div-center{text-align: center;}.footer-label{float: left; padding-top: 8px;padding-left: 30px; font-weight: 300;font-size: 14px;}.foot-godaddy-div{float: inherit;padding-top: 1em;}.foot-godaddy{background: url(https://tracedseals.starfieldtech.com/siteseal/images/siteseal_base_lite.gif);width: 132px;padding: 11px;background-repeat: no-repeat;}.foot-godaddy span{color: rgb(106, 156, 186);font-size: 8px;font-weight: bold;margin-left: 22px;}.footer-links{text-align:justify}.footer a.off-detail-phone{font-size:1em}@media only screen and (max-width: 600px){span.social-share{float: none;display: block;text-align: right;margin-top: 15px;}}
span.span-font-18{font-size:18px}span.span-color-blue{color:#0000FF}ul.list-square-style{list-style-type:square}
@media only screen and (min-width:771px){nav.title-bar{display: none;}}
@media only screen and (max-width:770px){
nav.title-bar {
    border-bottom: 1px solid #ccc;
    padding: 0 10px;
    background: #0f3971;
}
nav.title-bar {
    font-size: 15px;
}
.menu-btn {
    display: block;
    background: #0f3971;
    border: none;
    float: left;
    padding: 10px 5px;
    margin-top: 5px;
float: right;
}

.menu-btn.close {
    padding: 10px 0;
    font-size: 20px;
    color: #999;
    background: transparent;
    float: right;
    width: 100%;
    margin-top: 0;
}
amp-sidebar{background-color:#0F3971;}
.sidemenu a{
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
display:block;
    color: #fff;
}
.sidemenu li{display:block}
}.box-cust-blog{border:1px solid #000; padding:10px; width:200px; display:inline-block; margin-right:20px;vertical-align:top;margin-bottom:10px}
        </style>
 </head>
 <body>
<amp-analytics type="googleanalytics" id="analytics1">
    <script type="application/json">
        {
            "vars": {
                "account": "UA-73449056-1"
            },
            "triggers": {
                "trackPageview": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>
</amp-analytics>

<div class="top-bar small-14">

            <div class="row">



              

                <div class="top-bar-right">

                    <div class="h-contact">
                       <ul class="dropdown menu" data-dropdown-menu="2z1axb-dropdown-menu" role="menubar">
                        <li role="menuitem" class="h-separator"><a href="tel:1-302-846-7766"><b class="top-color"> <i class="fi-telephone" class="top-color"></i>&nbsp;1-302-846-7766</b></a></li>
                         <li role="menuitem" ><a href="tel:1-888-689-0688" class="pad-left-0"><b class="top-color" >| &nbsp;&nbsp;1-888-689-0688</b></a></li>
                       </ul>  
                       </div>
                       
                  <div class="h-menu mobileui h-menu-cust">
                    <ul class="dropdown menu" data-dropdown-menu="2z1axb-dropdown-menu" role="menubar">
                        <li class="menu-text" role="menuitem"></li>
                     
                        <li role="menuitem">
                                <a href="<?php echo base_url('pressrelease'); ?>" class="top-head">Press Room</a>
                                </li>
                            <li role="menuitem"><a href="<?php echo base_url('careers'); ?>" class="top-head">Careers</a></li>
                            <li role="menuitem"><a  href="<?php echo base_url('contact-us'); ?>" class="top-head">Contact Us</a></li>
                        
                      </ul>
                    </div>

                </div></div></div>

                <div class="boby">

                <div class="row">

                <div class="top-bar-left mobileuilogodiv">

                

               <a href="<?php echo base_url(); ?>">

   <!--<amp-img class="logo-home" src="https://i.imgur.com/EYwkV8d.png" width="272" height="81" alt="Global Market Insights, Inc. - logo"></amp-img>-->
   	<amp-img class="logo-home" src="https://i.imgur.com/EYwkV8d.png" width="177" height="53" alt="Global Market Insights, Inc. - logo"></amp-img>
   	
   </a>

       

        </div>

 <div class="top-bar-right mobileuidiv ">
<div class="top-bar-left mobileui">
<ul id="css3menu1" class="topmenu" >
	<li class="topmenu"><a href="<?php echo base_url('industry-reports'); ?>" class="main-menu-li"><span><amp-img src="<?php echo base_url('assets/images/icons/fi-page-multiple.png');?>" height="14" width="14"></amp-img>&nbsp;Industry Reports&nbsp;<amp-img src="<?php echo base_url('assets/images/icons/fi-play-header.png');?>" height="6" width="9"></amp-img></span></a>
	<span class="sub-menu-span"></span>
	<div class="submenu sub_menu sub-menu-width">
	<span class="sub-menu-top-border"></span>
	<div class="column submenu-column-34"><ul>
		<li><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-elevator.png');?>" height="10" width="14"></amp-img>&nbsp; Automotive & Transportation</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/biomass-bioenergy-and-renewable-chemistry"><amp-img src="<?php echo base_url('assets/images/icons/fi-paint-bucket.png');?>" height="11" width="13"></amp-img>&nbsp;Biomass, Bioenergy & Renewable...</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/bulk-and-speciality-chemicals"><amp-img src="<?php echo base_url('assets/images/icons/fi-die-five.png');?>" height="9" width="10"></amp-img>&nbsp;Bulk & Specialty Chemicals</a></li>
		<li class="bord-bot-none"><a href="<?php echo base_url(''); ?>industry-reports/electronics-and-media"><amp-img src="<?php echo base_url('assets/images/icons/fi-power.png');?>" height="10" width="11"></amp-img>&nbsp;Electronics & Media</a></li>
	</ul></div>
	<div class="column submenu-column-33"><ul>
	<li><a href="<?php echo base_url(''); ?>industry-reports/energy-mining-oil-and-gas"><amp-img src="<?php echo base_url('assets/images/icons/fi-battery-half.png');?>" height="7" width="14"></amp-img>&nbsp;Energy, Mining, Oil & Gas</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/food-nutrition-and-animal-feed"><amp-img src="<?php echo base_url('assets/images/icons/fi-shopping-bag.png');?>" height="9" width="13"></amp-img>&nbsp;Food, Nutrition & Animal Feed</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/healthcare-and-medical-devices"><amp-img src="<?php echo base_url('assets/images/icons/fi-first-aid.png');?>" height="9" width="12"></amp-img>&nbsp;Healthcare & Medical Devices</a></li>
	</ul></div>
	<div class="column submenu-column-33"><ul>
	<li><a href="<?php echo base_url(''); ?>industry-reports/hvac-and-construction"><amp-img src="<?php echo base_url('assets/images/icons/fi-map.png');?>" height="12" width="14"></amp-img>&nbsp;HVAC & Construction</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/polymers-and-advanced-materials"><amp-img src="<?php echo base_url('assets/images/icons/fi-braille.png');?>" height="8" width="8"></amp-img>&nbsp;Polymers & Advanced Materials</a></li>
		<li><a href="<?php echo base_url(''); ?>industry-reports/sustainable-and-smart-technologies"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-joomla.png');?>" height="9" width="11"></amp-img>&nbsp;Sustainable & Smart Technologies</a></li>
	</ul></div></div>
</li>
	<li class="topmenu"><a href="<?php echo base_url(''); ?>upcomingreports"  class="main-menu-li"><amp-img src="<?php echo base_url('assets/images/icons/fi-eye.png');?>" height="8" width="13"></amp-img>&nbsp;Upcoming Reports</a></li>
	<li class="topmenu"><a href="<?php echo base_url(''); ?>blogs"  class="main-menu-li"><amp-img src="<?php echo base_url('assets/images/icons/fi-list.png');?>" height="10" width="12"></amp-img>&nbsp;Blog</a></li>
	<li class="topmenu"><a  href="<?php echo base_url(''); ?>about-us"  class="main-menu-li"><span><amp-img src="<?php echo base_url('assets/images/icons/fi-comment-quotes.png');?>" height="12" width="14"></amp-img>&nbsp;About Us&nbsp;<amp-img src="<?php echo base_url('assets/images/icons/fi-play-header.png');?>" height="6" width="9"></amp-img></span></a>
	<span class="sub-menu-span"></span>
	<div class="submenu sub_menu sub-menu-width-200">
	<span class="sub-menu-top-border"></span>
	<div class="column"><ul>
		<li><a href="<?php echo base_url(''); ?>research-methodology"><amp-img src="<?php echo base_url('assets/images/icons/fi-web.png');?>" height="10" width="12"></amp-img>&nbsp;Research Methodology</a></li>
		<li><a href="<?php echo base_url(''); ?>corporate-presentation"><amp-img src="<?php echo base_url('assets/images/icons/fi-projection-screen.png');?>" height="9" width="12"></amp-img>&nbsp;Corporate Presentation</a></li>
		<li class="bord-bot-none"><a href="<?php echo base_url(''); ?>our-services"><amp-img src="<?php echo base_url('assets/images/icons/fi-torsos.png');?>" height="9" width="12"></amp-img>&nbsp;Research Services</a></li>
	</ul></div></div>
</li>
	
</ul>

</div>


                              <ul class="menu mobile-menu mob-serch-ul">

                                <li>

    <form target="_top" action="<?php echo str_replace('http:','',base_url());?>filters" method="GET">
 <div class="input-group mobile-input" > 

                               <input type="text" id="search_data" class="search-input search search-input-cust" name="q" value="" placeholder="Search Report">
                  

                                  <div class="input-group-button btn-input-group-button">
                                  <button type="submit" class="btn-sub-header" value="Search"><p class="para-header"><amp-img class="search-png" src="<?php echo base_url('assets/images/icons/search.png');?>" width="17" height="17" alt="search"></amp-img></p></button>
                                    </div>
                                    </div>
                    </form>



</li></ul>


</div>

            </div>
            </div>

<amp-sidebar id='sidebar1' layout='nodisplay'>
<button class="menu-btn close" on="tap:sidebar1.close">&times; close</button>
<div class="sidemenu">

<a id="abc" href="<?php echo base_url('industry-reports'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-page-multiple.png');?>" height="14" width="14"></amp-img>&nbsp; Industry Reports</a>
    <ul>
      <li><a href="<?php echo base_url('industry-reports/automotive-and-transportation'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-elevator.png');?>" height="14" width="14"></amp-img>&nbsp; Automotive & Transportation</a></li>

      <li><a href="<?php echo base_url('industry-reports/biomass-bioenergy-and-renewable-chemistry'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-paint-bucket.png');?>" height="14" width="14"></amp-img>&nbsp; Biomass & Renewable Chemistry</a></li>

      <li><a href="<?php echo base_url('industry-reports/bulk-and-speciality-chemicals'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-die-five.png');?>" height="14" width="14"></amp-img>&nbsp; Bulk & Specialty Chemicals</a></li>

      <li><a href="<?php echo base_url('industry-reports/electronics-and-media'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-power.png');?>" height="14" width="14"></amp-img>&nbsp; Electronics & Media</a></li>

	  <li><a href="<?php echo base_url('industry-reports/energy-mining-oil-and-gas'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-battery-half.png');?>" height="14" width="14"></amp-img>&nbsp; Energy, Mining, Oil & Gas</a></li>

      <li><a href="<?php echo base_url('industry-reports/food-nutrition-and-animal-feed'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-shopping-bag.png');?>" height="14" width="14"></amp-img>&nbsp; Food, Nutrition & Animal Feed</a></li>

	  <li><a href="<?php echo base_url('industry-reports/healthcare-and-medical-devices'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-first-aid.png');?>" height="14" width="14"></amp-img>&nbsp; Healthcare & Medical Devices</a></li>

	  <li><a href="<?php echo base_url('industry-reports/hvac-and-construction'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-map.png');?>" height="14" width="14"></amp-img>&nbsp; HVAC & Construction</a></li>

	  <li><a href="<?php echo base_url('industry-reports/polymers-and-advanced-materials'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-braille.png');?>" height="14" width="14"></amp-img>&nbsp; Polymers & Advanced Materials</a></li>

	  <li><a href="<?php echo base_url('industry-reports/sustainable-and-smart-technologies'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-joomla.png');?>" height="14" width="14"></amp-img>&nbsp; Sustainable & Smart Technologies</a></li>

    </ul>

<a  id="abc" href="<?php echo base_url('upcomingreports'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-eye.png');?>" height="14" width="14"></amp-img>&nbsp; Upcoming Reports</a>

<a  id="abc" href="<?php echo base_url('pressrelease'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-calendar.png');?>" height="14" width="14"></amp-img>&nbsp; Press Room</a>

<a  id="abc" href="<?php echo base_url('blogs'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-list.png');?>" height="14" width="14"></amp-img>&nbsp; Blog</a>

<a  id="abc" href="<?php echo base_url('about-us'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-comment-quotes.png');?>" height="14" width="14"></amp-img>&nbsp; About Us</a>

	<ul>
      <li><a href="<?php echo base_url('research-methodology'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-web.png');?>" height="14" width="14"></amp-img>&nbsp; Research Methodology</a></li>

      <li><a href="<?php echo base_url('corporate-presentation'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-projection-screen.png');?>" height="14" width="14"></amp-img>&nbsp; Corporate Presentation</a></li>

      <li><a href="<?php echo base_url('our-services'); ?>"><amp-img src="<?php echo base_url('assets/images/icons/fi-torsos.png');?>" height="14" width="14"></amp-img>&nbsp; Research Services</a></li>
	</ul>


</div>
</amp-sidebar>
<nav class="title-bar">
    <button class="menu-btn" on="tap:sidebar1.open">&#9776; Menu</button>   
</nav>

<div class="row columns mobileui pad-top-10">
<nav aria-label="You are here:" role="navigation">
<ol vocab="https://schema.org/" typeof="BreadcrumbList">
<ul class="breadcrumbs">
<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url();?>">
<span property="name">Home </span></a>
<meta property="position" content="1" hidden>
</li>
<li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="<?php echo base_url();?>blogs"><span property="name">Blogs</span></a>
<meta property="position" content="2" hidden></li>
<li class="active" property="itemListElement" typeof="ListItem">

<span property="name"><?php echo $blog['name'];?></span>
<meta property="position" content="3" hidden></li>
</ul>
</ol>
</nav>

</div>
   
<div class="row" id="content">

 <div class="card cust-card-main">

            <div class="blog-post mobileuifont">

             <div class="medium-12 columns">

                       <h2 class="blog-main-title">Market Research Blogs</h2>  

                            <hr>  
 <h1 class="blog-heading"><?php echo $blog['name'];?></h1>


				<h6 class="date-author" itemprop="author" itemscope itemtype="https://schema.org/Person"> Published Date:&nbsp;<?php echo date('F j, Y',$blog['date']);?> &nbsp;  Author:<span itemprop="name"> <?php echo $blog['auther']; ?></span>
		
				<span class="social-share flt-right">
<a class="mar-right-social" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('blogs/'.$blog['url']); ?>" ><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-facebook.gif" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://twitter.com/home?status=<?php echo base_url('blogs/'.$blog['url']); ?>"><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-twitter.gif" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://plus.google.com/share?url=<?php echo base_url('blogs/'.$blog['url']); ?>"><amp-img src="<?php echo base_url(); ?>assets/images/follow_googleplus.png" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('blogs/'.$blog['url']); ?>&title=<?php echo $blog['name']; ?>&summary=<?php echo isset($description)? "$description": NULL; ?>&source=GLoba Market Insights Inc."><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-linkedin.gif" width="28" height="28"></amp-img></a>

</span>
		</h6>

				<br/>
                                    
<?php

$a=substr($blog['full_desc'], strpos($blog['full_desc'], '<img'));

$img_html = substr($blog['full_desc'], strpos($blog['full_desc'], '<img'), stripos($a, '" />')).'" />';
$bb=strpos($img_html , 'src="');
$cc=substr($img_html,$bb+5);
$filename_old=substr($cc,0,strpos($cc , '"'));

$filename=str_replace('https://www.gminsights.com/','./',trim($filename_old));
if(!empty($filename)){
$data = getimagesize(trim($filename));

$width = $data[0];
$height = $data[1];

$abc= str_replace('/>','width="'.$width.'" height="'.$height.'" layout="responsive"></amp-img>',str_replace('<img', '<amp-img',$img_html));?>

<p><?php echo str_replace('style="text-align: center;">','class="div-center">',str_replace('style="text-align: justify;">','class="div-justify">',str_replace("".$img_html."","".$abc."", str_replace('<p style="text-align:center">','<p class="div-center">',str_replace('style="text-align:justify">','class="div-justify">',$blog['full_desc'])))));?></p>
<?php } 
else { ?>
<p><?php echo str_replace('style="text-align: center;">','class="div-center">',str_replace('style="text-align: justify;">','class="div-justify">',str_replace('<p style="text-align:center">','<p class="div-center">',str_replace('style="text-align:justify">','class="div-justify">',$blog['full_desc']))));?></p>
<?php } ?>
<div class="flt-right mar-bot-1em">

<a class="mar-right-social" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('blogs/'.$blog['url']); ?>" ><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-facebook.gif" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://twitter.com/home?status=<?php echo base_url('blogs/'.$blog['url']); ?>"><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-twitter.gif" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://plus.google.com/share?url=<?php echo base_url('blogs/'.$blog['url']); ?>"><amp-img src="<?php echo base_url(); ?>assets/images/follow_googleplus.png" width="28" height="28"></amp-img></a>

				<a class="mar-right-social" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('blogs/'.$blog['url']); ?>&title=<?php echo $blog['name']; ?>&summary=<?php echo isset($description)? "$description": NULL; ?>&source=GLoba Market Insights Inc."><amp-img src="<?php echo base_url(); ?>assets/images/homefollow-linkedin.gif" width="28" height="28"></amp-img></a>

			
				</div>  

				    </div>

		    </div>

      

</div></div>
<?php if(!empty($filename)){
$schema_img=$filename_old;
$data = getimagesize(trim($filename));

$width11 = $data[0];
$height11 = $data[1];
}
else{
$schema_img= base_url('assets/images/gmi-logo');
$width11 = 200;
$height11=60;
}?>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Blog",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo base_url('blogs/'); echo $blog['url'];?>"
  },
  "headline": "<?php echo substr($blog['name'],0,109);?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php echo $schema_img;?>",
    "height": <?php echo $height11;?>,
    "width": <?php echo $width11;?>
  },
  "datePublished": "<?php echo date('F j, Y',$blog['date'])?>",
  "dateModified": "<?php echo date('F j, Y',$blog['date'])?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo $blog['auther'];?>"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Global Market Insights Inc.",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo base_url('assets/images/gmi-logo');?>",
      "width": 200,
      "height": 60
    }
  },
  "description": "<?php echo isset($description)? "$description": NULL; ?>"
}
</script>

<footer class="footer">
 
 <div class="row full-width">
       <div class="small-6 medium-3 large-2 columns foot-col-1">
      <h4><b>Information</b></h4>
      <ul class="footer-links" class="left-side">
 <li><a href="<?php echo base_url();?>customer-faq">FAQ</a></li>
 <li><a href="<?php echo base_url();?>terms-of-use">Terms of Use</a></li>
 <li><a href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li>
 <li><a href="<?php echo base_url();?>how-to-order">How To Order</a></li>
 <li><a href="<?php echo base_url();?>sitemap">Sitemap</a></li>
   <li><a href="<?php echo base_url();?>conference-and-events">Conferences and Events</a></li>
  </ul>
 </div>

<div class="small-6 medium-3 large-2 columns foot-social-icon">
 <h4><b>Connect with us</b></h4>
  <ul class="footer-links" class="left-side">
  <li><a target="_blank" href="https://www.facebook.com/globalmarketinsights/"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-facebook.png');?>" height="11" width="12"></amp-img>&nbsp;Facebook</a></li>
 <li><a target="_blank" href="https://twitter.com/gmi_us"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-twitter.png');?>" height="9" width="11"></amp-img>&nbsp;Twitter</a></li>
<li><a target="_blank" href="https://www.linkedin.com/company/global-market-insights-inc"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-linkedin.png');?>" height="11" width="12"></amp-img>&nbsp;LinkedIn</a></li>
 <li><a target="_blank" href="https://plus.google.com/+Gminsightsusa"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-google-plus.png');?>" height="11" width="12"></amp-img>&nbsp;Google+</a></li>
  <li><a target="_blank" href="https://gminsights.wordpress.com/"><amp-img src="<?php echo base_url('assets/images/icons/fi-social-blogger.png');?>" height="11" width="12"></amp-img>&nbsp;Blog</a></li>

 </ul>
 </div>
<div class="small-12 medium-3 large-4 columns">
  <h4 class="off-detail-h4"><b>Registered Address</b></h4>
 <ul class="footer-links">
 <p class="left-side">
 Global Market Insights, Inc.<br />
29L Atlantic Avenue,
Suite L 105, <br />
Ocean View Delaware 19970
United States<br>
Phone: <a class="off-detail-phone" href="tel:13028467766" >1-302-846-7766</a> </br>
Toll Free: <a class="off-detail-phone" href="tel:18886890688" >1-888-689-0688</a><br>
Email: <a class="off-detail-email" href="mailto:sales@gminsights.com">sales@gminsights.com</a>
</p></ul>
<h4 class="off-detail-h4"><b>Business Hours</b></h4>
<ul class="footer-links">
<p class="left-side">Monday to Saturday: 9 AM to 5 PM<br>Sunday: Closed</p>
 </ul>
</div>
<div class="small-12 medium-3 large-4 columns" class="foot-pad">
<!-- (c) 2005, 2016. Authorize.Net is a registered trademark of CyberSource Corporation --> 
<div class="div-center">

 <amp-img src="https://sealserver.trustwave.com/seal_image.php?customerId=2985049217b847c5a0bc91e77db98b16&size=105x54&style=" alt="This site is protected by Trustwave's Trusted Commerce program" width="105" height="53"></amp-img>
 <amp-img src="https://i.imgur.com/ko3eL87.png" alt="secure buy from global market insights" width="112" height="77"></amp-img>

<amp-img src="https://verify.authorize.net/anetseal/images/secure90x72.gif" width="90" height="72" alt="Authorize.Net Merchant - Click to Verify"></amp-img>



</div>

<br />
 <p>This website is secured by 256-Bit encryption, Comodo Firewall, Verified Sitelock Malware Protection</p>
 <amp-img src="//i.imgur.com/Fjh4ede.png" alt="secure socket layer in website" width="113" height="33"></amp-img>
 <amp-img src="//i.imgur.com/idO5mCQ.png" alt="malware free global market insights" width="75" height="48"></amp-img>
 <div class="foot-godaddy-div">
<div class="foot-godaddy"><span>2016-03-03</span>
    
</div>
</div>
 </div>
 </div>
</footer>
<footer>

<label class="footer-label"> &#169; <?php echo date("Y"); ?><a href="<?php echo base_url();?>"> Global Market Insights Inc.</a> All Rights Reserved</label>

</footer>

</body>
</html>