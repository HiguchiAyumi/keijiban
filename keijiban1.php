<!DOCTYPE html>
<!-- saved from url=(0035)https://portal.tech-base.net/editor -->
<html lang="ja"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="ace-twilight">.ace-twilight .ace_gutter {background: #232323;color: #E2E2E2}.ace-twilight .ace_print-margin {width: 1px;background: #232323}.ace-twilight {background-color: #141414;color: #F8F8F8}.ace-twilight .ace_cursor {color: #A7A7A7}.ace-twilight .ace_marker-layer .ace_selection {background: rgba(221, 240, 255, 0.20)}.ace-twilight.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px #141414;}.ace-twilight .ace_marker-layer .ace_step {background: rgb(102, 82, 0)}.ace-twilight .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgba(255, 255, 255, 0.25)}.ace-twilight .ace_marker-layer .ace_active-line {background: rgba(255, 255, 255, 0.031)}.ace-twilight .ace_gutter-active-line {background-color: rgba(255, 255, 255, 0.031)}.ace-twilight .ace_marker-layer .ace_selected-word {border: 1px solid rgba(221, 240, 255, 0.20)}.ace-twilight .ace_invisible {color: rgba(255, 255, 255, 0.25)}.ace-twilight .ace_keyword,.ace-twilight .ace_meta {color: #CDA869}.ace-twilight .ace_constant,.ace-twilight .ace_constant.ace_character,.ace-twilight .ace_constant.ace_character.ace_escape,.ace-twilight .ace_constant.ace_other,.ace-twilight .ace_heading,.ace-twilight .ace_markup.ace_heading,.ace-twilight .ace_support.ace_constant {color: #CF6A4C}.ace-twilight .ace_invalid.ace_illegal {color: #F8F8F8;background-color: rgba(86, 45, 86, 0.75)}.ace-twilight .ace_invalid.ace_deprecated {text-decoration: underline;font-style: italic;color: #D2A8A1}.ace-twilight .ace_support {color: #9B859D}.ace-twilight .ace_fold {background-color: #AC885B;border-color: #F8F8F8}.ace-twilight .ace_support.ace_function {color: #DAD085}.ace-twilight .ace_list,.ace-twilight .ace_markup.ace_list,.ace-twilight .ace_storage {color: #F9EE98}.ace-twilight .ace_entity.ace_name.ace_function,.ace-twilight .ace_meta.ace_tag,.ace-twilight .ace_variable {color: #AC885B}.ace-twilight .ace_string {color: #8F9D6A}.ace-twilight .ace_string.ace_regexp {color: #E9C062}.ace-twilight .ace_comment {font-style: italic;color: #5F5A60}.ace-twilight .ace_variable {color: #7587A6}.ace-twilight .ace_xml-pe {color: #494949}.ace-twilight .ace_indent-guide {background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQImWMQERFpYLC1tf0PAAgOAnPnhxyiAAAAAElFTkSuQmCC) right repeat-y}
/*# sourceURL=ace/css/ace-twilight */</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style id="ace_editor.css">.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_editor {position: relative;overflow: hidden;padding: 0;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;box-sizing: border-box;min-width: 100%;contain: style size layout;font-variant-ligatures: no-common-ligatures;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;contain: style size layout;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {position: absolute;top: 0;left: 0;right: 0;padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {contain: strict;position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;contain: strict;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: transparent;color: inherit;z-index: 1000;opacity: 1;}.ace_composition_placeholder { color: transparent }.ace_composition_marker { border-bottom: 1px solid;position: absolute;border-radius: 0;margin-top: 1px;}[ace_nocontext=true] {transform: none!important;filter: none!important;clip-path: none!important;mask : none!important;contain: none!important;perspective: none!important;mix-blend-mode: initial!important;z-index: auto;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;height: 1000000px;contain: style size layout;}.ace_text-layer {font: inherit !important;position: absolute;height: 1000000px;width: 1000000px;contain: style size layout;}.ace_text-layer > .ace_line, .ace_text-layer > .ace_line_group {contain: style size layout;position: absolute;top: 0;left: 0;right: 0;}.ace_hidpi .ace_text-layer,.ace_hidpi .ace_gutter-layer,.ace_hidpi .ace_content,.ace_hidpi .ace_gutter {contain: strict;will-change: transform;}.ace_hidpi .ace_text-layer > .ace_line, .ace_hidpi .ace_text-layer > .ace_line_group {contain: strict;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_hasPlaceholder .ace_hidden-cursors .ace_cursor {opacity: 0;}.ace_smooth-blinking .ace_cursor {transition: opacity 0.18s;}.ace_animate-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: step-end;animation-name: blink-ace-animate;animation-iteration-count: infinite;}.ace_animate-blinking.ace_smooth-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: ease-in-out;animation-name: blink-ace-animate-smooth;}@keyframes blink-ace-animate {from, to { opacity: 1; }60% { opacity: 0; }}@keyframes blink-ace-animate-smooth {from, to { opacity: 1; }45% { opacity: 1; }60% { opacity: 0; }85% { opacity: 0; }}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_error_bracket {position: absolute;border-bottom: 1px solid #DE5555;border-radius: 0;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;box-sizing: border-box;}.ace_line .ace_fold {box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_inline_button {border: 1px solid lightgray;display: inline-block;margin: -1px 8px;padding: 0 5px;pointer-events: auto;cursor: pointer;}.ace_inline_button:hover {border-color: gray;background: rgba(200,200,200,0.2);display: inline-block;pointer-events: auto;}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_mobile-menu {position: absolute;line-height: 1.5;border-radius: 4px;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;background: white;box-shadow: 1px 3px 2px grey;border: 1px solid #dcdcdc;color: black;}.ace_dark > .ace_mobile-menu {background: #333;color: #ccc;box-shadow: 1px 3px 2px grey;border: 1px solid #444;}.ace_mobile-button {padding: 2px;cursor: pointer;overflow: hidden;}.ace_mobile-button:hover {background-color: #eee;opacity:1;}.ace_mobile-button:active {background-color: #ddd;}.ace_placeholder {font-family: arial;transform: scale(0.9);transform-origin: left;white-space: pre;opacity: 0.7;margin: 0 10px;}
/*# sourceURL=ace/css/ace_editor.css */</style>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="52N27Wio6qIfhEBrab94WDLmUBjcdxnG3vtF8CTk">
  <title>TECH-BASEポータル</title>
  <link rel="stylesheet" href="./keijiban_files/app.css">
  <link rel="shortcut icon" href="https://portal.tech-base.net/favicon.ico">
<style type="text/css">@font-face {
  font-family: HackGenSubset;
  src: url(/fonts/HackGenSubset.ttf?bd26ea4fe5af6dbf9e02809b8783ba6b) format("truetype"), url(/fonts/HackGenSubset.woff?3051e14afe39fe7329ab6f430099f2f3) format("woff");
}
.ace_editor,
.ace_editor * {
  font-family: HackGenSubset, serif;
}</style><style type="text/css">/* MaterialDesignIcons.com */
@font-face {
  font-family: "Material Design Icons";
  src: url(/fonts/vendor/@mdi/materialdesignicons-webfont.eot?66dc854e8e6da281f8beee081d633d70);
  src: url(/fonts/vendor/@mdi/materialdesignicons-webfont.eot?66dc854e8e6da281f8beee081d633d70?#iefix&v=5.4.55) format("embedded-opentype"), url(/fonts/vendor/@mdi/materialdesignicons-webfont.woff2?c0f7978a13704c522aaf355a80a5d0b0) format("woff2"), url(/fonts/vendor/@mdi/materialdesignicons-webfont.woff?8ac434c848d34646f73544f35a903a67) format("woff"), url(/fonts/vendor/@mdi/materialdesignicons-webfont.ttf?8ed8f0719def123d77bf6ea8919b8d8a) format("truetype");
  font-weight: normal;
  font-style: normal;
}

.mdi:before,
.mdi-set {
  display: inline-block;
  font: normal normal normal 24px/1 "Material Design Icons";
  font-size: inherit;
  text-rendering: auto;
  line-height: inherit;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.mdi-ab-testing::before {
  content: "\F01C9";
}

.mdi-abjad-arabic::before {
  content: "\F1328";
}

.mdi-abjad-hebrew::before {
  content: "\F1329";
}

.mdi-abugida-devanagari::before {
  content: "\F132A";
}

.mdi-abugida-thai::before {
  content: "\F132B";
}

.mdi-access-point::before {
  content: "\F0003";
}

.mdi-access-point-check::before {
  content: "\F1538";
}

.mdi-access-point-minus::before {
  content: "\F1539";
}

.mdi-access-point-network::before {
  content: "\F0002";
}

.mdi-access-point-network-off::before {
  content: "\F0BE1";
}

.mdi-access-point-off::before {
  content: "\F1511";
}

.mdi-access-point-plus::before {
  content: "\F153A";
}

.mdi-access-point-remove::before {
  content: "\F153B";
}

.mdi-account::before {
  content: "\F0004";
}

.mdi-account-alert::before {
  content: "\F0005";
}

.mdi-account-alert-outline::before {
  content: "\F0B50";
}

.mdi-account-arrow-left::before {
  content: "\F0B51";
}

.mdi-account-arrow-left-outline::before {
  content: "\F0B52";
}

.mdi-account-arrow-right::before {
  content: "\F0B53";
}

.mdi-account-arrow-right-outline::before {
  content: "\F0B54";
}

.mdi-account-box::before {
  content: "\F0006";
}

.mdi-account-box-multiple::before {
  content: "\F0934";
}

.mdi-account-box-multiple-outline::before {
  content: "\F100A";
}

.mdi-account-box-outline::before {
  content: "\F0007";
}

.mdi-account-cancel::before {
  content: "\F12DF";
}

.mdi-account-cancel-outline::before {
  content: "\F12E0";
}

.mdi-account-cash::before {
  content: "\F1097";
}

.mdi-account-cash-outline::before {
  content: "\F1098";
}

.mdi-account-check::before {
  content: "\F0008";
}

.mdi-account-check-outline::before {
  content: "\F0BE2";
}

.mdi-account-child::before {
  content: "\F0A89";
}

.mdi-account-child-circle::before {
  content: "\F0A8A";
}

.mdi-account-child-outline::before {
  content: "\F10C8";
}

.mdi-account-circle::before {
  content: "\F0009";
}

.mdi-account-circle-outline::before {
  content: "\F0B55";
}

.mdi-account-clock::before {
  content: "\F0B56";
}

.mdi-account-clock-outline::before {
  content: "\F0B57";
}

.mdi-account-cog::before {
  content: "\F1370";
}

.mdi-account-cog-outline::before {
  content: "\F1371";
}

.mdi-account-convert::before {
  content: "\F000A";
}

.mdi-account-convert-outline::before {
  content: "\F1301";
}

.mdi-account-cowboy-hat::before {
  content: "\F0E9B";
}

.mdi-account-details::before {
  content: "\F0631";
}

.mdi-account-details-outline::before {
  content: "\F1372";
}

.mdi-account-edit::before {
  content: "\F06BC";
}

.mdi-account-edit-outline::before {
  content: "\F0FFB";
}

.mdi-account-group::before {
  content: "\F0849";
}

.mdi-account-group-outline::before {
  content: "\F0B58";
}

.mdi-account-hard-hat::before {
  content: "\F05B5";
}

.mdi-account-heart::before {
  content: "\F0899";
}

.mdi-account-heart-outline::before {
  content: "\F0BE3";
}

.mdi-account-key::before {
  content: "\F000B";
}

.mdi-account-key-outline::before {
  content: "\F0BE4";
}

.mdi-account-lock::before {
  content: "\F115E";
}

.mdi-account-lock-outline::before {
  content: "\F115F";
}

.mdi-account-minus::before {
  content: "\F000D";
}

.mdi-account-minus-outline::before {
  content: "\F0AEC";
}

.mdi-account-multiple::before {
  content: "\F000E";
}

.mdi-account-multiple-check::before {
  content: "\F08C5";
}

.mdi-account-multiple-check-outline::before {
  content: "\F11FE";
}

.mdi-account-multiple-minus::before {
  content: "\F05D3";
}

.mdi-account-multiple-minus-outline::before {
  content: "\F0BE5";
}

.mdi-account-multiple-outline::before {
  content: "\F000F";
}

.mdi-account-multiple-plus::before {
  content: "\F0010";
}

.mdi-account-multiple-plus-outline::before {
  content: "\F0800";
}

.mdi-account-multiple-remove::before {
  content: "\F120A";
}

.mdi-account-multiple-remove-outline::before {
  content: "\F120B";
}

.mdi-account-music::before {
  content: "\F0803";
}

.mdi-account-music-outline::before {
  content: "\F0CE9";
}

.mdi-account-network::before {
  content: "\F0011";
}

.mdi-account-network-outline::before {
  content: "\F0BE6";
}

.mdi-account-off::before {
  content: "\F0012";
}

.mdi-account-off-outline::before {
  content: "\F0BE7";
}

.mdi-account-outline::before {
  content: "\F0013";
}

.mdi-account-plus::before {
  content: "\F0014";
}

.mdi-account-plus-outline::before {
  content: "\F0801";
}

.mdi-account-question::before {
  content: "\F0B59";
}

.mdi-account-question-outline::before {
  content: "\F0B5A";
}

.mdi-account-reactivate::before {
  content: "\F152B";
}

.mdi-account-reactivate-outline::before {
  content: "\F152C";
}

.mdi-account-remove::before {
  content: "\F0015";
}

.mdi-account-remove-outline::before {
  content: "\F0AED";
}

.mdi-account-search::before {
  content: "\F0016";
}

.mdi-account-search-outline::before {
  content: "\F0935";
}

.mdi-account-settings::before {
  content: "\F0630";
}

.mdi-account-settings-outline::before {
  content: "\F10C9";
}

.mdi-account-star::before {
  content: "\F0017";
}

.mdi-account-star-outline::before {
  content: "\F0BE8";
}

.mdi-account-supervisor::before {
  content: "\F0A8B";
}

.mdi-account-supervisor-circle::before {
  content: "\F0A8C";
}

.mdi-account-supervisor-circle-outline::before {
  content: "\F14EC";
}

.mdi-account-supervisor-outline::before {
  content: "\F112D";
}

.mdi-account-switch::before {
  content: "\F0019";
}

.mdi-account-switch-outline::before {
  content: "\F04CB";
}

.mdi-account-tie::before {
  content: "\F0CE3";
}

.mdi-account-tie-outline::before {
  content: "\F10CA";
}

.mdi-account-tie-voice::before {
  content: "\F1308";
}

.mdi-account-tie-voice-off::before {
  content: "\F130A";
}

.mdi-account-tie-voice-off-outline::before {
  content: "\F130B";
}

.mdi-account-tie-voice-outline::before {
  content: "\F1309";
}

.mdi-account-voice::before {
  content: "\F05CB";
}

.mdi-adjust::before {
  content: "\F001A";
}

.mdi-adobe::before {
  content: "\F0936";
}

.mdi-adobe-acrobat::before {
  content: "\F0F9D";
}

.mdi-air-conditioner::before {
  content: "\F001B";
}

.mdi-air-filter::before {
  content: "\F0D43";
}

.mdi-air-horn::before {
  content: "\F0DAC";
}

.mdi-air-humidifier::before {
  content: "\F1099";
}

.mdi-air-humidifier-off::before {
  content: "\F1466";
}

.mdi-air-purifier::before {
  content: "\F0D44";
}

.mdi-airbag::before {
  content: "\F0BE9";
}

.mdi-airballoon::before {
  content: "\F001C";
}

.mdi-airballoon-outline::before {
  content: "\F100B";
}

.mdi-airplane::before {
  content: "\F001D";
}

.mdi-airplane-landing::before {
  content: "\F05D4";
}

.mdi-airplane-off::before {
  content: "\F001E";
}

.mdi-airplane-takeoff::before {
  content: "\F05D5";
}

.mdi-airport::before {
  content: "\F084B";
}

.mdi-alarm::before {
  content: "\F0020";
}

.mdi-alarm-bell::before {
  content: "\F078E";
}

.mdi-alarm-check::before {
  content: "\F0021";
}

.mdi-alarm-light::before {
  content: "\F078F";
}

.mdi-alarm-light-outline::before {
  content: "\F0BEA";
}

.mdi-alarm-multiple::before {
  content: "\F0022";
}

.mdi-alarm-note::before {
  content: "\F0E71";
}

.mdi-alarm-note-off::before {
  content: "\F0E72";
}

.mdi-alarm-off::before {
  content: "\F0023";
}

.mdi-alarm-plus::before {
  content: "\F0024";
}

.mdi-alarm-snooze::before {
  content: "\F068E";
}

.mdi-album::before {
  content: "\F0025";
}

.mdi-alert::before {
  content: "\F0026";
}

.mdi-alert-box::before {
  content: "\F0027";
}

.mdi-alert-box-outline::before {
  content: "\F0CE4";
}

.mdi-alert-circle::before {
  content: "\F0028";
}

.mdi-alert-circle-check::before {
  content: "\F11ED";
}

.mdi-alert-circle-check-outline::before {
  content: "\F11EE";
}

.mdi-alert-circle-outline::before {
  content: "\F05D6";
}

.mdi-alert-decagram::before {
  content: "\F06BD";
}

.mdi-alert-decagram-outline::before {
  content: "\F0CE5";
}

.mdi-alert-minus::before {
  content: "\F14BB";
}

.mdi-alert-minus-outline::before {
  content: "\F14BE";
}

.mdi-alert-octagon::before {
  content: "\F0029";
}

.mdi-alert-octagon-outline::before {
  content: "\F0CE6";
}

.mdi-alert-octagram::before {
  content: "\F0767";
}

.mdi-alert-octagram-outline::before {
  content: "\F0CE7";
}

.mdi-alert-outline::before {
  content: "\F002A";
}

.mdi-alert-plus::before {
  content: "\F14BA";
}

.mdi-alert-plus-outline::before {
  content: "\F14BD";
}

.mdi-alert-remove::before {
  content: "\F14BC";
}

.mdi-alert-remove-outline::before {
  content: "\F14BF";
}

.mdi-alert-rhombus::before {
  content: "\F11CE";
}

.mdi-alert-rhombus-outline::before {
  content: "\F11CF";
}

.mdi-alien::before {
  content: "\F089A";
}

.mdi-alien-outline::before {
  content: "\F10CB";
}

.mdi-align-horizontal-center::before {
  content: "\F11C3";
}

.mdi-align-horizontal-left::before {
  content: "\F11C2";
}

.mdi-align-horizontal-right::before {
  content: "\F11C4";
}

.mdi-align-vertical-bottom::before {
  content: "\F11C5";
}

.mdi-align-vertical-center::before {
  content: "\F11C6";
}

.mdi-align-vertical-top::before {
  content: "\F11C7";
}

.mdi-all-inclusive::before {
  content: "\F06BE";
}

.mdi-allergy::before {
  content: "\F1258";
}

.mdi-alpha::before {
  content: "\F002B";
}

.mdi-alpha-a::before {
  content: "\F0AEE";
}

.mdi-alpha-a-box::before {
  content: "\F0B08";
}

.mdi-alpha-a-box-outline::before {
  content: "\F0BEB";
}

.mdi-alpha-a-circle::before {
  content: "\F0BEC";
}

.mdi-alpha-a-circle-outline::before {
  content: "\F0BED";
}

.mdi-alpha-b::before {
  content: "\F0AEF";
}

.mdi-alpha-b-box::before {
  content: "\F0B09";
}

.mdi-alpha-b-box-outline::before {
  content: "\F0BEE";
}

.mdi-alpha-b-circle::before {
  content: "\F0BEF";
}

.mdi-alpha-b-circle-outline::before {
  content: "\F0BF0";
}

.mdi-alpha-c::before {
  content: "\F0AF0";
}

.mdi-alpha-c-box::before {
  content: "\F0B0A";
}

.mdi-alpha-c-box-outline::before {
  content: "\F0BF1";
}

.mdi-alpha-c-circle::before {
  content: "\F0BF2";
}

.mdi-alpha-c-circle-outline::before {
  content: "\F0BF3";
}

.mdi-alpha-d::before {
  content: "\F0AF1";
}

.mdi-alpha-d-box::before {
  content: "\F0B0B";
}

.mdi-alpha-d-box-outline::before {
  content: "\F0BF4";
}

.mdi-alpha-d-circle::before {
  content: "\F0BF5";
}

.mdi-alpha-d-circle-outline::before {
  content: "\F0BF6";
}

.mdi-alpha-e::before {
  content: "\F0AF2";
}

.mdi-alpha-e-box::before {
  content: "\F0B0C";
}

.mdi-alpha-e-box-outline::before {
  content: "\F0BF7";
}

.mdi-alpha-e-circle::before {
  content: "\F0BF8";
}

.mdi-alpha-e-circle-outline::before {
  content: "\F0BF9";
}

.mdi-alpha-f::before {
  content: "\F0AF3";
}

.mdi-alpha-f-box::before {
  content: "\F0B0D";
}

.mdi-alpha-f-box-outline::before {
  content: "\F0BFA";
}

.mdi-alpha-f-circle::before {
  content: "\F0BFB";
}

.mdi-alpha-f-circle-outline::before {
  content: "\F0BFC";
}

.mdi-alpha-g::before {
  content: "\F0AF4";
}

.mdi-alpha-g-box::before {
  content: "\F0B0E";
}

.mdi-alpha-g-box-outline::before {
  content: "\F0BFD";
}

.mdi-alpha-g-circle::before {
  content: "\F0BFE";
}

.mdi-alpha-g-circle-outline::before {
  content: "\F0BFF";
}

.mdi-alpha-h::before {
  content: "\F0AF5";
}

.mdi-alpha-h-box::before {
  content: "\F0B0F";
}

.mdi-alpha-h-box-outline::before {
  content: "\F0C00";
}

.mdi-alpha-h-circle::before {
  content: "\F0C01";
}

.mdi-alpha-h-circle-outline::before {
  content: "\F0C02";
}

.mdi-alpha-i::before {
  content: "\F0AF6";
}

.mdi-alpha-i-box::before {
  content: "\F0B10";
}

.mdi-alpha-i-box-outline::before {
  content: "\F0C03";
}

.mdi-alpha-i-circle::before {
  content: "\F0C04";
}

.mdi-alpha-i-circle-outline::before {
  content: "\F0C05";
}

.mdi-alpha-j::before {
  content: "\F0AF7";
}

.mdi-alpha-j-box::before {
  content: "\F0B11";
}

.mdi-alpha-j-box-outline::before {
  content: "\F0C06";
}

.mdi-alpha-j-circle::before {
  content: "\F0C07";
}

.mdi-alpha-j-circle-outline::before {
  content: "\F0C08";
}

.mdi-alpha-k::before {
  content: "\F0AF8";
}

.mdi-alpha-k-box::before {
  content: "\F0B12";
}

.mdi-alpha-k-box-outline::before {
  content: "\F0C09";
}

.mdi-alpha-k-circle::before {
  content: "\F0C0A";
}

.mdi-alpha-k-circle-outline::before {
  content: "\F0C0B";
}

.mdi-alpha-l::before {
  content: "\F0AF9";
}

.mdi-alpha-l-box::before {
  content: "\F0B13";
}

.mdi-alpha-l-box-outline::before {
  content: "\F0C0C";
}

.mdi-alpha-l-circle::before {
  content: "\F0C0D";
}

.mdi-alpha-l-circle-outline::before {
  content: "\F0C0E";
}

.mdi-alpha-m::before {
  content: "\F0AFA";
}

.mdi-alpha-m-box::before {
  content: "\F0B14";
}

.mdi-alpha-m-box-outline::before {
  content: "\F0C0F";
}

.mdi-alpha-m-circle::before {
  content: "\F0C10";
}

.mdi-alpha-m-circle-outline::before {
  content: "\F0C11";
}

.mdi-alpha-n::before {
  content: "\F0AFB";
}

.mdi-alpha-n-box::before {
  content: "\F0B15";
}

.mdi-alpha-n-box-outline::before {
  content: "\F0C12";
}

.mdi-alpha-n-circle::before {
  content: "\F0C13";
}

.mdi-alpha-n-circle-outline::before {
  content: "\F0C14";
}

.mdi-alpha-o::before {
  content: "\F0AFC";
}

.mdi-alpha-o-box::before {
  content: "\F0B16";
}

.mdi-alpha-o-box-outline::before {
  content: "\F0C15";
}

.mdi-alpha-o-circle::before {
  content: "\F0C16";
}

.mdi-alpha-o-circle-outline::before {
  content: "\F0C17";
}

.mdi-alpha-p::before {
  content: "\F0AFD";
}

.mdi-alpha-p-box::before {
  content: "\F0B17";
}

.mdi-alpha-p-box-outline::before {
  content: "\F0C18";
}

.mdi-alpha-p-circle::before {
  content: "\F0C19";
}

.mdi-alpha-p-circle-outline::before {
  content: "\F0C1A";
}

.mdi-alpha-q::before {
  content: "\F0AFE";
}

.mdi-alpha-q-box::before {
  content: "\F0B18";
}

.mdi-alpha-q-box-outline::before {
  content: "\F0C1B";
}

.mdi-alpha-q-circle::before {
  content: "\F0C1C";
}

.mdi-alpha-q-circle-outline::before {
  content: "\F0C1D";
}

.mdi-alpha-r::before {
  content: "\F0AFF";
}

.mdi-alpha-r-box::before {
  content: "\F0B19";
}

.mdi-alpha-r-box-outline::before {
  content: "\F0C1E";
}

.mdi-alpha-r-circle::before {
  content: "\F0C1F";
}

.mdi-alpha-r-circle-outline::before {
  content: "\F0C20";
}

.mdi-alpha-s::before {
  content: "\F0B00";
}

.mdi-alpha-s-box::before {
  content: "\F0B1A";
}

.mdi-alpha-s-box-outline::before {
  content: "\F0C21";
}

.mdi-alpha-s-circle::before {
  content: "\F0C22";
}

.mdi-alpha-s-circle-outline::before {
  content: "\F0C23";
}

.mdi-alpha-t::before {
  content: "\F0B01";
}

.mdi-alpha-t-box::before {
  content: "\F0B1B";
}

.mdi-alpha-t-box-outline::before {
  content: "\F0C24";
}

.mdi-alpha-t-circle::before {
  content: "\F0C25";
}

.mdi-alpha-t-circle-outline::before {
  content: "\F0C26";
}

.mdi-alpha-u::before {
  content: "\F0B02";
}

.mdi-alpha-u-box::before {
  content: "\F0B1C";
}

.mdi-alpha-u-box-outline::before {
  content: "\F0C27";
}

.mdi-alpha-u-circle::before {
  content: "\F0C28";
}

.mdi-alpha-u-circle-outline::before {
  content: "\F0C29";
}

.mdi-alpha-v::before {
  content: "\F0B03";
}

.mdi-alpha-v-box::before {
  content: "\F0B1D";
}

.mdi-alpha-v-box-outline::before {
  content: "\F0C2A";
}

.mdi-alpha-v-circle::before {
  content: "\F0C2B";
}

.mdi-alpha-v-circle-outline::before {
  content: "\F0C2C";
}

.mdi-alpha-w::before {
  content: "\F0B04";
}

.mdi-alpha-w-box::before {
  content: "\F0B1E";
}

.mdi-alpha-w-box-outline::before {
  content: "\F0C2D";
}

.mdi-alpha-w-circle::before {
  content: "\F0C2E";
}

.mdi-alpha-w-circle-outline::before {
  content: "\F0C2F";
}

.mdi-alpha-x::before {
  content: "\F0B05";
}

.mdi-alpha-x-box::before {
  content: "\F0B1F";
}

.mdi-alpha-x-box-outline::before {
  content: "\F0C30";
}

.mdi-alpha-x-circle::before {
  content: "\F0C31";
}

.mdi-alpha-x-circle-outline::before {
  content: "\F0C32";
}

.mdi-alpha-y::before {
  content: "\F0B06";
}

.mdi-alpha-y-box::before {
  content: "\F0B20";
}

.mdi-alpha-y-box-outline::before {
  content: "\F0C33";
}

.mdi-alpha-y-circle::before {
  content: "\F0C34";
}

.mdi-alpha-y-circle-outline::before {
  content: "\F0C35";
}

.mdi-alpha-z::before {
  content: "\F0B07";
}

.mdi-alpha-z-box::before {
  content: "\F0B21";
}

.mdi-alpha-z-box-outline::before {
  content: "\F0C36";
}

.mdi-alpha-z-circle::before {
  content: "\F0C37";
}

.mdi-alpha-z-circle-outline::before {
  content: "\F0C38";
}

.mdi-alphabet-aurebesh::before {
  content: "\F132C";
}

.mdi-alphabet-cyrillic::before {
  content: "\F132D";
}

.mdi-alphabet-greek::before {
  content: "\F132E";
}

.mdi-alphabet-latin::before {
  content: "\F132F";
}

.mdi-alphabet-piqad::before {
  content: "\F1330";
}

.mdi-alphabet-tengwar::before {
  content: "\F1337";
}

.mdi-alphabetical::before {
  content: "\F002C";
}

.mdi-alphabetical-off::before {
  content: "\F100C";
}

.mdi-alphabetical-variant::before {
  content: "\F100D";
}

.mdi-alphabetical-variant-off::before {
  content: "\F100E";
}

.mdi-altimeter::before {
  content: "\F05D7";
}

.mdi-amazon::before {
  content: "\F002D";
}

.mdi-amazon-alexa::before {
  content: "\F08C6";
}

.mdi-ambulance::before {
  content: "\F002F";
}

.mdi-ammunition::before {
  content: "\F0CE8";
}

.mdi-ampersand::before {
  content: "\F0A8D";
}

.mdi-amplifier::before {
  content: "\F0030";
}

.mdi-amplifier-off::before {
  content: "\F11B5";
}

.mdi-anchor::before {
  content: "\F0031";
}

.mdi-android::before {
  content: "\F0032";
}

.mdi-android-auto::before {
  content: "\F0A8E";
}

.mdi-android-debug-bridge::before {
  content: "\F0033";
}

.mdi-android-messages::before {
  content: "\F0D45";
}

.mdi-android-studio::before {
  content: "\F0034";
}

.mdi-angle-acute::before {
  content: "\F0937";
}

.mdi-angle-obtuse::before {
  content: "\F0938";
}

.mdi-angle-right::before {
  content: "\F0939";
}

.mdi-angular::before {
  content: "\F06B2";
}

.mdi-angularjs::before {
  content: "\F06BF";
}

.mdi-animation::before {
  content: "\F05D8";
}

.mdi-animation-outline::before {
  content: "\F0A8F";
}

.mdi-animation-play::before {
  content: "\F093A";
}

.mdi-animation-play-outline::before {
  content: "\F0A90";
}

.mdi-ansible::before {
  content: "\F109A";
}

.mdi-antenna::before {
  content: "\F1119";
}

.mdi-anvil::before {
  content: "\F089B";
}

.mdi-apache-kafka::before {
  content: "\F100F";
}

.mdi-api::before {
  content: "\F109B";
}

.mdi-api-off::before {
  content: "\F1257";
}

.mdi-apple::before {
  content: "\F0035";
}

.mdi-apple-airplay::before {
  content: "\F001F";
}

.mdi-apple-finder::before {
  content: "\F0036";
}

.mdi-apple-icloud::before {
  content: "\F0038";
}

.mdi-apple-ios::before {
  content: "\F0037";
}

.mdi-apple-keyboard-caps::before {
  content: "\F0632";
}

.mdi-apple-keyboard-command::before {
  content: "\F0633";
}

.mdi-apple-keyboard-control::before {
  content: "\F0634";
}

.mdi-apple-keyboard-option::before {
  content: "\F0635";
}

.mdi-apple-keyboard-shift::before {
  content: "\F0636";
}

.mdi-apple-safari::before {
  content: "\F0039";
}

.mdi-application::before {
  content: "\F0614";
}

.mdi-application-export::before {
  content: "\F0DAD";
}

.mdi-application-import::before {
  content: "\F0DAE";
}

.mdi-approximately-equal::before {
  content: "\F0F9E";
}

.mdi-approximately-equal-box::before {
  content: "\F0F9F";
}

.mdi-apps::before {
  content: "\F003B";
}

.mdi-apps-box::before {
  content: "\F0D46";
}

.mdi-arch::before {
  content: "\F08C7";
}

.mdi-archive::before {
  content: "\F003C";
}

.mdi-archive-alert::before {
  content: "\F14FD";
}

.mdi-archive-alert-outline::before {
  content: "\F14FE";
}

.mdi-archive-arrow-down::before {
  content: "\F1259";
}

.mdi-archive-arrow-down-outline::before {
  content: "\F125A";
}

.mdi-archive-arrow-up::before {
  content: "\F125B";
}

.mdi-archive-arrow-up-outline::before {
  content: "\F125C";
}

.mdi-archive-outline::before {
  content: "\F120E";
}

.mdi-arm-flex::before {
  content: "\F0FD7";
}

.mdi-arm-flex-outline::before {
  content: "\F0FD6";
}

.mdi-arrange-bring-forward::before {
  content: "\F003D";
}

.mdi-arrange-bring-to-front::before {
  content: "\F003E";
}

.mdi-arrange-send-backward::before {
  content: "\F003F";
}

.mdi-arrange-send-to-back::before {
  content: "\F0040";
}

.mdi-arrow-all::before {
  content: "\F0041";
}

.mdi-arrow-bottom-left::before {
  content: "\F0042";
}

.mdi-arrow-bottom-left-bold-outline::before {
  content: "\F09B7";
}

.mdi-arrow-bottom-left-thick::before {
  content: "\F09B8";
}

.mdi-arrow-bottom-right::before {
  content: "\F0043";
}

.mdi-arrow-bottom-right-bold-outline::before {
  content: "\F09B9";
}

.mdi-arrow-bottom-right-thick::before {
  content: "\F09BA";
}

.mdi-arrow-collapse::before {
  content: "\F0615";
}

.mdi-arrow-collapse-all::before {
  content: "\F0044";
}

.mdi-arrow-collapse-down::before {
  content: "\F0792";
}

.mdi-arrow-collapse-horizontal::before {
  content: "\F084C";
}

.mdi-arrow-collapse-left::before {
  content: "\F0793";
}

.mdi-arrow-collapse-right::before {
  content: "\F0794";
}

.mdi-arrow-collapse-up::before {
  content: "\F0795";
}

.mdi-arrow-collapse-vertical::before {
  content: "\F084D";
}

.mdi-arrow-decision::before {
  content: "\F09BB";
}

.mdi-arrow-decision-auto::before {
  content: "\F09BC";
}

.mdi-arrow-decision-auto-outline::before {
  content: "\F09BD";
}

.mdi-arrow-decision-outline::before {
  content: "\F09BE";
}

.mdi-arrow-down::before {
  content: "\F0045";
}

.mdi-arrow-down-bold::before {
  content: "\F072E";
}

.mdi-arrow-down-bold-box::before {
  content: "\F072F";
}

.mdi-arrow-down-bold-box-outline::before {
  content: "\F0730";
}

.mdi-arrow-down-bold-circle::before {
  content: "\F0047";
}

.mdi-arrow-down-bold-circle-outline::before {
  content: "\F0048";
}

.mdi-arrow-down-bold-hexagon-outline::before {
  content: "\F0049";
}

.mdi-arrow-down-bold-outline::before {
  content: "\F09BF";
}

.mdi-arrow-down-box::before {
  content: "\F06C0";
}

.mdi-arrow-down-circle::before {
  content: "\F0CDB";
}

.mdi-arrow-down-circle-outline::before {
  content: "\F0CDC";
}

.mdi-arrow-down-drop-circle::before {
  content: "\F004A";
}

.mdi-arrow-down-drop-circle-outline::before {
  content: "\F004B";
}

.mdi-arrow-down-thick::before {
  content: "\F0046";
}

.mdi-arrow-expand::before {
  content: "\F0616";
}

.mdi-arrow-expand-all::before {
  content: "\F004C";
}

.mdi-arrow-expand-down::before {
  content: "\F0796";
}

.mdi-arrow-expand-horizontal::before {
  content: "\F084E";
}

.mdi-arrow-expand-left::before {
  content: "\F0797";
}

.mdi-arrow-expand-right::before {
  content: "\F0798";
}

.mdi-arrow-expand-up::before {
  content: "\F0799";
}

.mdi-arrow-expand-vertical::before {
  content: "\F084F";
}

.mdi-arrow-horizontal-lock::before {
  content: "\F115B";
}

.mdi-arrow-left::before {
  content: "\F004D";
}

.mdi-arrow-left-bold::before {
  content: "\F0731";
}

.mdi-arrow-left-bold-box::before {
  content: "\F0732";
}

.mdi-arrow-left-bold-box-outline::before {
  content: "\F0733";
}

.mdi-arrow-left-bold-circle::before {
  content: "\F004F";
}

.mdi-arrow-left-bold-circle-outline::before {
  content: "\F0050";
}

.mdi-arrow-left-bold-hexagon-outline::before {
  content: "\F0051";
}

.mdi-arrow-left-bold-outline::before {
  content: "\F09C0";
}

.mdi-arrow-left-box::before {
  content: "\F06C1";
}

.mdi-arrow-left-circle::before {
  content: "\F0CDD";
}

.mdi-arrow-left-circle-outline::before {
  content: "\F0CDE";
}

.mdi-arrow-left-drop-circle::before {
  content: "\F0052";
}

.mdi-arrow-left-drop-circle-outline::before {
  content: "\F0053";
}

.mdi-arrow-left-right::before {
  content: "\F0E73";
}

.mdi-arrow-left-right-bold::before {
  content: "\F0E74";
}

.mdi-arrow-left-right-bold-outline::before {
  content: "\F09C1";
}

.mdi-arrow-left-thick::before {
  content: "\F004E";
}

.mdi-arrow-right::before {
  content: "\F0054";
}

.mdi-arrow-right-bold::before {
  content: "\F0734";
}

.mdi-arrow-right-bold-box::before {
  content: "\F0735";
}

.mdi-arrow-right-bold-box-outline::before {
  content: "\F0736";
}

.mdi-arrow-right-bold-circle::before {
  content: "\F0056";
}

.mdi-arrow-right-bold-circle-outline::before {
  content: "\F0057";
}

.mdi-arrow-right-bold-hexagon-outline::before {
  content: "\F0058";
}

.mdi-arrow-right-bold-outline::before {
  content: "\F09C2";
}

.mdi-arrow-right-box::before {
  content: "\F06C2";
}

.mdi-arrow-right-circle::before {
  content: "\F0CDF";
}

.mdi-arrow-right-circle-outline::before {
  content: "\F0CE0";
}

.mdi-arrow-right-drop-circle::before {
  content: "\F0059";
}

.mdi-arrow-right-drop-circle-outline::before {
  content: "\F005A";
}

.mdi-arrow-right-thick::before {
  content: "\F0055";
}

.mdi-arrow-split-horizontal::before {
  content: "\F093B";
}

.mdi-arrow-split-vertical::before {
  content: "\F093C";
}

.mdi-arrow-top-left::before {
  content: "\F005B";
}

.mdi-arrow-top-left-bold-outline::before {
  content: "\F09C3";
}

.mdi-arrow-top-left-bottom-right::before {
  content: "\F0E75";
}

.mdi-arrow-top-left-bottom-right-bold::before {
  content: "\F0E76";
}

.mdi-arrow-top-left-thick::before {
  content: "\F09C4";
}

.mdi-arrow-top-right::before {
  content: "\F005C";
}

.mdi-arrow-top-right-bold-outline::before {
  content: "\F09C5";
}

.mdi-arrow-top-right-bottom-left::before {
  content: "\F0E77";
}

.mdi-arrow-top-right-bottom-left-bold::before {
  content: "\F0E78";
}

.mdi-arrow-top-right-thick::before {
  content: "\F09C6";
}

.mdi-arrow-up::before {
  content: "\F005D";
}

.mdi-arrow-up-bold::before {
  content: "\F0737";
}

.mdi-arrow-up-bold-box::before {
  content: "\F0738";
}

.mdi-arrow-up-bold-box-outline::before {
  content: "\F0739";
}

.mdi-arrow-up-bold-circle::before {
  content: "\F005F";
}

.mdi-arrow-up-bold-circle-outline::before {
  content: "\F0060";
}

.mdi-arrow-up-bold-hexagon-outline::before {
  content: "\F0061";
}

.mdi-arrow-up-bold-outline::before {
  content: "\F09C7";
}

.mdi-arrow-up-box::before {
  content: "\F06C3";
}

.mdi-arrow-up-circle::before {
  content: "\F0CE1";
}

.mdi-arrow-up-circle-outline::before {
  content: "\F0CE2";
}

.mdi-arrow-up-down::before {
  content: "\F0E79";
}

.mdi-arrow-up-down-bold::before {
  content: "\F0E7A";
}

.mdi-arrow-up-down-bold-outline::before {
  content: "\F09C8";
}

.mdi-arrow-up-drop-circle::before {
  content: "\F0062";
}

.mdi-arrow-up-drop-circle-outline::before {
  content: "\F0063";
}

.mdi-arrow-up-thick::before {
  content: "\F005E";
}

.mdi-arrow-vertical-lock::before {
  content: "\F115C";
}

.mdi-artstation::before {
  content: "\F0B5B";
}

.mdi-aspect-ratio::before {
  content: "\F0A24";
}

.mdi-assistant::before {
  content: "\F0064";
}

.mdi-asterisk::before {
  content: "\F06C4";
}

.mdi-at::before {
  content: "\F0065";
}

.mdi-atlassian::before {
  content: "\F0804";
}

.mdi-atm::before {
  content: "\F0D47";
}

.mdi-atom::before {
  content: "\F0768";
}

.mdi-atom-variant::before {
  content: "\F0E7B";
}

.mdi-attachment::before {
  content: "\F0066";
}

.mdi-audio-video::before {
  content: "\F093D";
}

.mdi-audio-video-off::before {
  content: "\F11B6";
}

.mdi-augmented-reality::before {
  content: "\F0850";
}

.mdi-auto-download::before {
  content: "\F137E";
}

.mdi-auto-fix::before {
  content: "\F0068";
}

.mdi-auto-upload::before {
  content: "\F0069";
}

.mdi-autorenew::before {
  content: "\F006A";
}

.mdi-av-timer::before {
  content: "\F006B";
}

.mdi-aws::before {
  content: "\F0E0F";
}

.mdi-axe::before {
  content: "\F08C8";
}

.mdi-axis::before {
  content: "\F0D48";
}

.mdi-axis-arrow::before {
  content: "\F0D49";
}

.mdi-axis-arrow-info::before {
  content: "\F140E";
}

.mdi-axis-arrow-lock::before {
  content: "\F0D4A";
}

.mdi-axis-lock::before {
  content: "\F0D4B";
}

.mdi-axis-x-arrow::before {
  content: "\F0D4C";
}

.mdi-axis-x-arrow-lock::before {
  content: "\F0D4D";
}

.mdi-axis-x-rotate-clockwise::before {
  content: "\F0D4E";
}

.mdi-axis-x-rotate-counterclockwise::before {
  content: "\F0D4F";
}

.mdi-axis-x-y-arrow-lock::before {
  content: "\F0D50";
}

.mdi-axis-y-arrow::before {
  content: "\F0D51";
}

.mdi-axis-y-arrow-lock::before {
  content: "\F0D52";
}

.mdi-axis-y-rotate-clockwise::before {
  content: "\F0D53";
}

.mdi-axis-y-rotate-counterclockwise::before {
  content: "\F0D54";
}

.mdi-axis-z-arrow::before {
  content: "\F0D55";
}

.mdi-axis-z-arrow-lock::before {
  content: "\F0D56";
}

.mdi-axis-z-rotate-clockwise::before {
  content: "\F0D57";
}

.mdi-axis-z-rotate-counterclockwise::before {
  content: "\F0D58";
}

.mdi-babel::before {
  content: "\F0A25";
}

.mdi-baby::before {
  content: "\F006C";
}

.mdi-baby-bottle::before {
  content: "\F0F39";
}

.mdi-baby-bottle-outline::before {
  content: "\F0F3A";
}

.mdi-baby-buggy::before {
  content: "\F13E0";
}

.mdi-baby-carriage::before {
  content: "\F068F";
}

.mdi-baby-carriage-off::before {
  content: "\F0FA0";
}

.mdi-baby-face::before {
  content: "\F0E7C";
}

.mdi-baby-face-outline::before {
  content: "\F0E7D";
}

.mdi-backburger::before {
  content: "\F006D";
}

.mdi-backspace::before {
  content: "\F006E";
}

.mdi-backspace-outline::before {
  content: "\F0B5C";
}

.mdi-backspace-reverse::before {
  content: "\F0E7E";
}

.mdi-backspace-reverse-outline::before {
  content: "\F0E7F";
}

.mdi-backup-restore::before {
  content: "\F006F";
}

.mdi-bacteria::before {
  content: "\F0ED5";
}

.mdi-bacteria-outline::before {
  content: "\F0ED6";
}

.mdi-badge-account::before {
  content: "\F0DA7";
}

.mdi-badge-account-alert::before {
  content: "\F0DA8";
}

.mdi-badge-account-alert-outline::before {
  content: "\F0DA9";
}

.mdi-badge-account-horizontal::before {
  content: "\F0E0D";
}

.mdi-badge-account-horizontal-outline::before {
  content: "\F0E0E";
}

.mdi-badge-account-outline::before {
  content: "\F0DAA";
}

.mdi-badminton::before {
  content: "\F0851";
}

.mdi-bag-carry-on::before {
  content: "\F0F3B";
}

.mdi-bag-carry-on-check::before {
  content: "\F0D65";
}

.mdi-bag-carry-on-off::before {
  content: "\F0F3C";
}

.mdi-bag-checked::before {
  content: "\F0F3D";
}

.mdi-bag-personal::before {
  content: "\F0E10";
}

.mdi-bag-personal-off::before {
  content: "\F0E11";
}

.mdi-bag-personal-off-outline::before {
  content: "\F0E12";
}

.mdi-bag-personal-outline::before {
  content: "\F0E13";
}

.mdi-baguette::before {
  content: "\F0F3E";
}

.mdi-balloon::before {
  content: "\F0A26";
}

.mdi-ballot::before {
  content: "\F09C9";
}

.mdi-ballot-outline::before {
  content: "\F09CA";
}

.mdi-ballot-recount::before {
  content: "\F0C39";
}

.mdi-ballot-recount-outline::before {
  content: "\F0C3A";
}

.mdi-bandage::before {
  content: "\F0DAF";
}

.mdi-bandcamp::before {
  content: "\F0675";
}

.mdi-bank::before {
  content: "\F0070";
}

.mdi-bank-minus::before {
  content: "\F0DB0";
}

.mdi-bank-outline::before {
  content: "\F0E80";
}

.mdi-bank-plus::before {
  content: "\F0DB1";
}

.mdi-bank-remove::before {
  content: "\F0DB2";
}

.mdi-bank-transfer::before {
  content: "\F0A27";
}

.mdi-bank-transfer-in::before {
  content: "\F0A28";
}

.mdi-bank-transfer-out::before {
  content: "\F0A29";
}

.mdi-barcode::before {
  content: "\F0071";
}

.mdi-barcode-off::before {
  content: "\F1236";
}

.mdi-barcode-scan::before {
  content: "\F0072";
}

.mdi-barley::before {
  content: "\F0073";
}

.mdi-barley-off::before {
  content: "\F0B5D";
}

.mdi-barn::before {
  content: "\F0B5E";
}

.mdi-barrel::before {
  content: "\F0074";
}

.mdi-baseball::before {
  content: "\F0852";
}

.mdi-baseball-bat::before {
  content: "\F0853";
}

.mdi-bash::before {
  content: "\F1183";
}

.mdi-basket::before {
  content: "\F0076";
}

.mdi-basket-fill::before {
  content: "\F0077";
}

.mdi-basket-minus::before {
  content: "\F1523";
}

.mdi-basket-minus-outline::before {
  content: "\F1524";
}

.mdi-basket-off::before {
  content: "\F1525";
}

.mdi-basket-off-outline::before {
  content: "\F1526";
}

.mdi-basket-outline::before {
  content: "\F1181";
}

.mdi-basket-plus::before {
  content: "\F1527";
}

.mdi-basket-plus-outline::before {
  content: "\F1528";
}

.mdi-basket-remove::before {
  content: "\F1529";
}

.mdi-basket-remove-outline::before {
  content: "\F152A";
}

.mdi-basket-unfill::before {
  content: "\F0078";
}

.mdi-basketball::before {
  content: "\F0806";
}

.mdi-basketball-hoop::before {
  content: "\F0C3B";
}

.mdi-basketball-hoop-outline::before {
  content: "\F0C3C";
}

.mdi-bat::before {
  content: "\F0B5F";
}

.mdi-battery::before {
  content: "\F0079";
}

.mdi-battery-10::before {
  content: "\F007A";
}

.mdi-battery-10-bluetooth::before {
  content: "\F093E";
}

.mdi-battery-20::before {
  content: "\F007B";
}

.mdi-battery-20-bluetooth::before {
  content: "\F093F";
}

.mdi-battery-30::before {
  content: "\F007C";
}

.mdi-battery-30-bluetooth::before {
  content: "\F0940";
}

.mdi-battery-40::before {
  content: "\F007D";
}

.mdi-battery-40-bluetooth::before {
  content: "\F0941";
}

.mdi-battery-50::before {
  content: "\F007E";
}

.mdi-battery-50-bluetooth::before {
  content: "\F0942";
}

.mdi-battery-60::before {
  content: "\F007F";
}

.mdi-battery-60-bluetooth::before {
  content: "\F0943";
}

.mdi-battery-70::before {
  content: "\F0080";
}

.mdi-battery-70-bluetooth::before {
  content: "\F0944";
}

.mdi-battery-80::before {
  content: "\F0081";
}

.mdi-battery-80-bluetooth::before {
  content: "\F0945";
}

.mdi-battery-90::before {
  content: "\F0082";
}

.mdi-battery-90-bluetooth::before {
  content: "\F0946";
}

.mdi-battery-alert::before {
  content: "\F0083";
}

.mdi-battery-alert-bluetooth::before {
  content: "\F0947";
}

.mdi-battery-alert-variant::before {
  content: "\F10CC";
}

.mdi-battery-alert-variant-outline::before {
  content: "\F10CD";
}

.mdi-battery-bluetooth::before {
  content: "\F0948";
}

.mdi-battery-bluetooth-variant::before {
  content: "\F0949";
}

.mdi-battery-charging::before {
  content: "\F0084";
}

.mdi-battery-charging-10::before {
  content: "\F089C";
}

.mdi-battery-charging-100::before {
  content: "\F0085";
}

.mdi-battery-charging-20::before {
  content: "\F0086";
}

.mdi-battery-charging-30::before {
  content: "\F0087";
}

.mdi-battery-charging-40::before {
  content: "\F0088";
}

.mdi-battery-charging-50::before {
  content: "\F089D";
}

.mdi-battery-charging-60::before {
  content: "\F0089";
}

.mdi-battery-charging-70::before {
  content: "\F089E";
}

.mdi-battery-charging-80::before {
  content: "\F008A";
}

.mdi-battery-charging-90::before {
  content: "\F008B";
}

.mdi-battery-charging-high::before {
  content: "\F12A6";
}

.mdi-battery-charging-low::before {
  content: "\F12A4";
}

.mdi-battery-charging-medium::before {
  content: "\F12A5";
}

.mdi-battery-charging-outline::before {
  content: "\F089F";
}

.mdi-battery-charging-wireless::before {
  content: "\F0807";
}

.mdi-battery-charging-wireless-10::before {
  content: "\F0808";
}

.mdi-battery-charging-wireless-20::before {
  content: "\F0809";
}

.mdi-battery-charging-wireless-30::before {
  content: "\F080A";
}

.mdi-battery-charging-wireless-40::before {
  content: "\F080B";
}

.mdi-battery-charging-wireless-50::before {
  content: "\F080C";
}

.mdi-battery-charging-wireless-60::before {
  content: "\F080D";
}

.mdi-battery-charging-wireless-70::before {
  content: "\F080E";
}

.mdi-battery-charging-wireless-80::before {
  content: "\F080F";
}

.mdi-battery-charging-wireless-90::before {
  content: "\F0810";
}

.mdi-battery-charging-wireless-alert::before {
  content: "\F0811";
}

.mdi-battery-charging-wireless-outline::before {
  content: "\F0812";
}

.mdi-battery-heart::before {
  content: "\F120F";
}

.mdi-battery-heart-outline::before {
  content: "\F1210";
}

.mdi-battery-heart-variant::before {
  content: "\F1211";
}

.mdi-battery-high::before {
  content: "\F12A3";
}

.mdi-battery-low::before {
  content: "\F12A1";
}

.mdi-battery-medium::before {
  content: "\F12A2";
}

.mdi-battery-minus::before {
  content: "\F008C";
}

.mdi-battery-negative::before {
  content: "\F008D";
}

.mdi-battery-off::before {
  content: "\F125D";
}

.mdi-battery-off-outline::before {
  content: "\F125E";
}

.mdi-battery-outline::before {
  content: "\F008E";
}

.mdi-battery-plus::before {
  content: "\F008F";
}

.mdi-battery-positive::before {
  content: "\F0090";
}

.mdi-battery-unknown::before {
  content: "\F0091";
}

.mdi-battery-unknown-bluetooth::before {
  content: "\F094A";
}

.mdi-battlenet::before {
  content: "\F0B60";
}

.mdi-beach::before {
  content: "\F0092";
}

.mdi-beaker::before {
  content: "\F0CEA";
}

.mdi-beaker-alert::before {
  content: "\F1229";
}

.mdi-beaker-alert-outline::before {
  content: "\F122A";
}

.mdi-beaker-check::before {
  content: "\F122B";
}

.mdi-beaker-check-outline::before {
  content: "\F122C";
}

.mdi-beaker-minus::before {
  content: "\F122D";
}

.mdi-beaker-minus-outline::before {
  content: "\F122E";
}

.mdi-beaker-outline::before {
  content: "\F0690";
}

.mdi-beaker-plus::before {
  content: "\F122F";
}

.mdi-beaker-plus-outline::before {
  content: "\F1230";
}

.mdi-beaker-question::before {
  content: "\F1231";
}

.mdi-beaker-question-outline::before {
  content: "\F1232";
}

.mdi-beaker-remove::before {
  content: "\F1233";
}

.mdi-beaker-remove-outline::before {
  content: "\F1234";
}

.mdi-bed::before {
  content: "\F02E3";
}

.mdi-bed-double::before {
  content: "\F0FD4";
}

.mdi-bed-double-outline::before {
  content: "\F0FD3";
}

.mdi-bed-empty::before {
  content: "\F08A0";
}

.mdi-bed-king::before {
  content: "\F0FD2";
}

.mdi-bed-king-outline::before {
  content: "\F0FD1";
}

.mdi-bed-outline::before {
  content: "\F0099";
}

.mdi-bed-queen::before {
  content: "\F0FD0";
}

.mdi-bed-queen-outline::before {
  content: "\F0FDB";
}

.mdi-bed-single::before {
  content: "\F106D";
}

.mdi-bed-single-outline::before {
  content: "\F106E";
}

.mdi-bee::before {
  content: "\F0FA1";
}

.mdi-bee-flower::before {
  content: "\F0FA2";
}

.mdi-beehive-off-outline::before {
  content: "\F13ED";
}

.mdi-beehive-outline::before {
  content: "\F10CE";
}

.mdi-beekeeper::before {
  content: "\F14E2";
}

.mdi-beer::before {
  content: "\F0098";
}

.mdi-beer-outline::before {
  content: "\F130C";
}

.mdi-bell::before {
  content: "\F009A";
}

.mdi-bell-alert::before {
  content: "\F0D59";
}

.mdi-bell-alert-outline::before {
  content: "\F0E81";
}

.mdi-bell-cancel::before {
  content: "\F13E7";
}

.mdi-bell-cancel-outline::before {
  content: "\F13E8";
}

.mdi-bell-check::before {
  content: "\F11E5";
}

.mdi-bell-check-outline::before {
  content: "\F11E6";
}

.mdi-bell-circle::before {
  content: "\F0D5A";
}

.mdi-bell-circle-outline::before {
  content: "\F0D5B";
}

.mdi-bell-minus::before {
  content: "\F13E9";
}

.mdi-bell-minus-outline::before {
  content: "\F13EA";
}

.mdi-bell-off::before {
  content: "\F009B";
}

.mdi-bell-off-outline::before {
  content: "\F0A91";
}

.mdi-bell-outline::before {
  content: "\F009C";
}

.mdi-bell-plus::before {
  content: "\F009D";
}

.mdi-bell-plus-outline::before {
  content: "\F0A92";
}

.mdi-bell-remove::before {
  content: "\F13EB";
}

.mdi-bell-remove-outline::before {
  content: "\F13EC";
}

.mdi-bell-ring::before {
  content: "\F009E";
}

.mdi-bell-ring-outline::before {
  content: "\F009F";
}

.mdi-bell-sleep::before {
  content: "\F00A0";
}

.mdi-bell-sleep-outline::before {
  content: "\F0A93";
}

.mdi-beta::before {
  content: "\F00A1";
}

.mdi-betamax::before {
  content: "\F09CB";
}

.mdi-biathlon::before {
  content: "\F0E14";
}

.mdi-bicycle::before {
  content: "\F109C";
}

.mdi-bicycle-basket::before {
  content: "\F1235";
}

.mdi-bike::before {
  content: "\F00A3";
}

.mdi-bike-fast::before {
  content: "\F111F";
}

.mdi-billboard::before {
  content: "\F1010";
}

.mdi-billiards::before {
  content: "\F0B61";
}

.mdi-billiards-rack::before {
  content: "\F0B62";
}

.mdi-binoculars::before {
  content: "\F00A5";
}

.mdi-bio::before {
  content: "\F00A6";
}

.mdi-biohazard::before {
  content: "\F00A7";
}

.mdi-bitbucket::before {
  content: "\F00A8";
}

.mdi-bitcoin::before {
  content: "\F0813";
}

.mdi-black-mesa::before {
  content: "\F00A9";
}

.mdi-blender::before {
  content: "\F0CEB";
}

.mdi-blender-software::before {
  content: "\F00AB";
}

.mdi-blinds::before {
  content: "\F00AC";
}

.mdi-blinds-open::before {
  content: "\F1011";
}

.mdi-block-helper::before {
  content: "\F00AD";
}

.mdi-blogger::before {
  content: "\F00AE";
}

.mdi-blood-bag::before {
  content: "\F0CEC";
}

.mdi-bluetooth::before {
  content: "\F00AF";
}

.mdi-bluetooth-audio::before {
  content: "\F00B0";
}

.mdi-bluetooth-connect::before {
  content: "\F00B1";
}

.mdi-bluetooth-off::before {
  content: "\F00B2";
}

.mdi-bluetooth-settings::before {
  content: "\F00B3";
}

.mdi-bluetooth-transfer::before {
  content: "\F00B4";
}

.mdi-blur::before {
  content: "\F00B5";
}

.mdi-blur-linear::before {
  content: "\F00B6";
}

.mdi-blur-off::before {
  content: "\F00B7";
}

.mdi-blur-radial::before {
  content: "\F00B8";
}

.mdi-bolnisi-cross::before {
  content: "\F0CED";
}

.mdi-bolt::before {
  content: "\F0DB3";
}

.mdi-bomb::before {
  content: "\F0691";
}

.mdi-bomb-off::before {
  content: "\F06C5";
}

.mdi-bone::before {
  content: "\F00B9";
}

.mdi-book::before {
  content: "\F00BA";
}

.mdi-book-account::before {
  content: "\F13AD";
}

.mdi-book-account-outline::before {
  content: "\F13AE";
}

.mdi-book-alphabet::before {
  content: "\F061D";
}

.mdi-book-check::before {
  content: "\F14F3";
}

.mdi-book-check-outline::before {
  content: "\F14F4";
}

.mdi-book-cross::before {
  content: "\F00A2";
}

.mdi-book-information-variant::before {
  content: "\F106F";
}

.mdi-book-lock::before {
  content: "\F079A";
}

.mdi-book-lock-open::before {
  content: "\F079B";
}

.mdi-book-minus::before {
  content: "\F05D9";
}

.mdi-book-minus-multiple::before {
  content: "\F0A94";
}

.mdi-book-minus-multiple-outline::before {
  content: "\F090B";
}

.mdi-book-multiple::before {
  content: "\F00BB";
}

.mdi-book-multiple-outline::before {
  content: "\F0436";
}

.mdi-book-music::before {
  content: "\F0067";
}

.mdi-book-open::before {
  content: "\F00BD";
}

.mdi-book-open-blank-variant::before {
  content: "\F00BE";
}

.mdi-book-open-outline::before {
  content: "\F0B63";
}

.mdi-book-open-page-variant::before {
  content: "\F05DA";
}

.mdi-book-open-variant::before {
  content: "\F14F7";
}

.mdi-book-outline::before {
  content: "\F0B64";
}

.mdi-book-play::before {
  content: "\F0E82";
}

.mdi-book-play-outline::before {
  content: "\F0E83";
}

.mdi-book-plus::before {
  content: "\F05DB";
}

.mdi-book-plus-multiple::before {
  content: "\F0A95";
}

.mdi-book-plus-multiple-outline::before {
  content: "\F0ADE";
}

.mdi-book-remove::before {
  content: "\F0A97";
}

.mdi-book-remove-multiple::before {
  content: "\F0A96";
}

.mdi-book-remove-multiple-outline::before {
  content: "\F04CA";
}

.mdi-book-search::before {
  content: "\F0E84";
}

.mdi-book-search-outline::before {
  content: "\F0E85";
}

.mdi-book-variant::before {
  content: "\F00BF";
}

.mdi-book-variant-multiple::before {
  content: "\F00BC";
}

.mdi-bookmark::before {
  content: "\F00C0";
}

.mdi-bookmark-check::before {
  content: "\F00C1";
}

.mdi-bookmark-check-outline::before {
  content: "\F137B";
}

.mdi-bookmark-minus::before {
  content: "\F09CC";
}

.mdi-bookmark-minus-outline::before {
  content: "\F09CD";
}

.mdi-bookmark-multiple::before {
  content: "\F0E15";
}

.mdi-bookmark-multiple-outline::before {
  content: "\F0E16";
}

.mdi-bookmark-music::before {
  content: "\F00C2";
}

.mdi-bookmark-music-outline::before {
  content: "\F1379";
}

.mdi-bookmark-off::before {
  content: "\F09CE";
}

.mdi-bookmark-off-outline::before {
  content: "\F09CF";
}

.mdi-bookmark-outline::before {
  content: "\F00C3";
}

.mdi-bookmark-plus::before {
  content: "\F00C5";
}

.mdi-bookmark-plus-outline::before {
  content: "\F00C4";
}

.mdi-bookmark-remove::before {
  content: "\F00C6";
}

.mdi-bookmark-remove-outline::before {
  content: "\F137A";
}

.mdi-bookshelf::before {
  content: "\F125F";
}

.mdi-boom-gate::before {
  content: "\F0E86";
}

.mdi-boom-gate-alert::before {
  content: "\F0E87";
}

.mdi-boom-gate-alert-outline::before {
  content: "\F0E88";
}

.mdi-boom-gate-down::before {
  content: "\F0E89";
}

.mdi-boom-gate-down-outline::before {
  content: "\F0E8A";
}

.mdi-boom-gate-outline::before {
  content: "\F0E8B";
}

.mdi-boom-gate-up::before {
  content: "\F0E8C";
}

.mdi-boom-gate-up-outline::before {
  content: "\F0E8D";
}

.mdi-boombox::before {
  content: "\F05DC";
}

.mdi-boomerang::before {
  content: "\F10CF";
}

.mdi-bootstrap::before {
  content: "\F06C6";
}

.mdi-border-all::before {
  content: "\F00C7";
}

.mdi-border-all-variant::before {
  content: "\F08A1";
}

.mdi-border-bottom::before {
  content: "\F00C8";
}

.mdi-border-bottom-variant::before {
  content: "\F08A2";
}

.mdi-border-color::before {
  content: "\F00C9";
}

.mdi-border-horizontal::before {
  content: "\F00CA";
}

.mdi-border-inside::before {
  content: "\F00CB";
}

.mdi-border-left::before {
  content: "\F00CC";
}

.mdi-border-left-variant::before {
  content: "\F08A3";
}

.mdi-border-none::before {
  content: "\F00CD";
}

.mdi-border-none-variant::before {
  content: "\F08A4";
}

.mdi-border-outside::before {
  content: "\F00CE";
}

.mdi-border-right::before {
  content: "\F00CF";
}

.mdi-border-right-variant::before {
  content: "\F08A5";
}

.mdi-border-style::before {
  content: "\F00D0";
}

.mdi-border-top::before {
  content: "\F00D1";
}

.mdi-border-top-variant::before {
  content: "\F08A6";
}

.mdi-border-vertical::before {
  content: "\F00D2";
}

.mdi-bottle-soda::before {
  content: "\F1070";
}

.mdi-bottle-soda-classic::before {
  content: "\F1071";
}

.mdi-bottle-soda-classic-outline::before {
  content: "\F1363";
}

.mdi-bottle-soda-outline::before {
  content: "\F1072";
}

.mdi-bottle-tonic::before {
  content: "\F112E";
}

.mdi-bottle-tonic-outline::before {
  content: "\F112F";
}

.mdi-bottle-tonic-plus::before {
  content: "\F1130";
}

.mdi-bottle-tonic-plus-outline::before {
  content: "\F1131";
}

.mdi-bottle-tonic-skull::before {
  content: "\F1132";
}

.mdi-bottle-tonic-skull-outline::before {
  content: "\F1133";
}

.mdi-bottle-wine::before {
  content: "\F0854";
}

.mdi-bottle-wine-outline::before {
  content: "\F1310";
}

.mdi-bow-tie::before {
  content: "\F0678";
}

.mdi-bowl::before {
  content: "\F028E";
}

.mdi-bowl-mix::before {
  content: "\F0617";
}

.mdi-bowl-mix-outline::before {
  content: "\F02E4";
}

.mdi-bowl-outline::before {
  content: "\F02A9";
}

.mdi-bowling::before {
  content: "\F00D3";
}

.mdi-box::before {
  content: "\F00D4";
}

.mdi-box-cutter::before {
  content: "\F00D5";
}

.mdi-box-cutter-off::before {
  content: "\F0B4A";
}

.mdi-box-shadow::before {
  content: "\F0637";
}

.mdi-boxing-glove::before {
  content: "\F0B65";
}

.mdi-braille::before {
  content: "\F09D0";
}

.mdi-brain::before {
  content: "\F09D1";
}

.mdi-bread-slice::before {
  content: "\F0CEE";
}

.mdi-bread-slice-outline::before {
  content: "\F0CEF";
}

.mdi-bridge::before {
  content: "\F0618";
}

.mdi-briefcase::before {
  content: "\F00D6";
}

.mdi-briefcase-account::before {
  content: "\F0CF0";
}

.mdi-briefcase-account-outline::before {
  content: "\F0CF1";
}

.mdi-briefcase-check::before {
  content: "\F00D7";
}

.mdi-briefcase-check-outline::before {
  content: "\F131E";
}

.mdi-briefcase-clock::before {
  content: "\F10D0";
}

.mdi-briefcase-clock-outline::before {
  content: "\F10D1";
}

.mdi-briefcase-download::before {
  content: "\F00D8";
}

.mdi-briefcase-download-outline::before {
  content: "\F0C3D";
}

.mdi-briefcase-edit::before {
  content: "\F0A98";
}

.mdi-briefcase-edit-outline::before {
  content: "\F0C3E";
}

.mdi-briefcase-minus::before {
  content: "\F0A2A";
}

.mdi-briefcase-minus-outline::before {
  content: "\F0C3F";
}

.mdi-briefcase-outline::before {
  content: "\F0814";
}

.mdi-briefcase-plus::before {
  content: "\F0A2B";
}

.mdi-briefcase-plus-outline::before {
  content: "\F0C40";
}

.mdi-briefcase-remove::before {
  content: "\F0A2C";
}

.mdi-briefcase-remove-outline::before {
  content: "\F0C41";
}

.mdi-briefcase-search::before {
  content: "\F0A2D";
}

.mdi-briefcase-search-outline::before {
  content: "\F0C42";
}

.mdi-briefcase-upload::before {
  content: "\F00D9";
}

.mdi-briefcase-upload-outline::before {
  content: "\F0C43";
}

.mdi-briefcase-variant::before {
  content: "\F1494";
}

.mdi-briefcase-variant-outline::before {
  content: "\F1495";
}

.mdi-brightness-1::before {
  content: "\F00DA";
}

.mdi-brightness-2::before {
  content: "\F00DB";
}

.mdi-brightness-3::before {
  content: "\F00DC";
}

.mdi-brightness-4::before {
  content: "\F00DD";
}

.mdi-brightness-5::before {
  content: "\F00DE";
}

.mdi-brightness-6::before {
  content: "\F00DF";
}

.mdi-brightness-7::before {
  content: "\F00E0";
}

.mdi-brightness-auto::before {
  content: "\F00E1";
}

.mdi-brightness-percent::before {
  content: "\F0CF2";
}

.mdi-broom::before {
  content: "\F00E2";
}

.mdi-brush::before {
  content: "\F00E3";
}

.mdi-bucket::before {
  content: "\F1415";
}

.mdi-bucket-outline::before {
  content: "\F1416";
}

.mdi-buddhism::before {
  content: "\F094B";
}

.mdi-buffer::before {
  content: "\F0619";
}

.mdi-buffet::before {
  content: "\F0578";
}

.mdi-bug::before {
  content: "\F00E4";
}

.mdi-bug-check::before {
  content: "\F0A2E";
}

.mdi-bug-check-outline::before {
  content: "\F0A2F";
}

.mdi-bug-outline::before {
  content: "\F0A30";
}

.mdi-bugle::before {
  content: "\F0DB4";
}

.mdi-bulldozer::before {
  content: "\F0B22";
}

.mdi-bullet::before {
  content: "\F0CF3";
}

.mdi-bulletin-board::before {
  content: "\F00E5";
}

.mdi-bullhorn::before {
  content: "\F00E6";
}

.mdi-bullhorn-outline::before {
  content: "\F0B23";
}

.mdi-bullseye::before {
  content: "\F05DD";
}

.mdi-bullseye-arrow::before {
  content: "\F08C9";
}

.mdi-bulma::before {
  content: "\F12E7";
}

.mdi-bunk-bed::before {
  content: "\F1302";
}

.mdi-bunk-bed-outline::before {
  content: "\F0097";
}

.mdi-bus::before {
  content: "\F00E7";
}

.mdi-bus-alert::before {
  content: "\F0A99";
}

.mdi-bus-articulated-end::before {
  content: "\F079C";
}

.mdi-bus-articulated-front::before {
  content: "\F079D";
}

.mdi-bus-clock::before {
  content: "\F08CA";
}

.mdi-bus-double-decker::before {
  content: "\F079E";
}

.mdi-bus-marker::before {
  content: "\F1212";
}

.mdi-bus-multiple::before {
  content: "\F0F3F";
}

.mdi-bus-school::before {
  content: "\F079F";
}

.mdi-bus-side::before {
  content: "\F07A0";
}

.mdi-bus-stop::before {
  content: "\F1012";
}

.mdi-bus-stop-covered::before {
  content: "\F1013";
}

.mdi-bus-stop-uncovered::before {
  content: "\F1014";
}

.mdi-cable-data::before {
  content: "\F1394";
}

.mdi-cached::before {
  content: "\F00E8";
}

.mdi-cactus::before {
  content: "\F0DB5";
}

.mdi-cake::before {
  content: "\F00E9";
}

.mdi-cake-layered::before {
  content: "\F00EA";
}

.mdi-cake-variant::before {
  content: "\F00EB";
}

.mdi-calculator::before {
  content: "\F00EC";
}

.mdi-calculator-variant::before {
  content: "\F0A9A";
}

.mdi-calendar::before {
  content: "\F00ED";
}

.mdi-calendar-account::before {
  content: "\F0ED7";
}

.mdi-calendar-account-outline::before {
  content: "\F0ED8";
}

.mdi-calendar-alert::before {
  content: "\F0A31";
}

.mdi-calendar-arrow-left::before {
  content: "\F1134";
}

.mdi-calendar-arrow-right::before {
  content: "\F1135";
}

.mdi-calendar-blank::before {
  content: "\F00EE";
}

.mdi-calendar-blank-multiple::before {
  content: "\F1073";
}

.mdi-calendar-blank-outline::before {
  content: "\F0B66";
}

.mdi-calendar-check::before {
  content: "\F00EF";
}

.mdi-calendar-check-outline::before {
  content: "\F0C44";
}

.mdi-calendar-clock::before {
  content: "\F00F0";
}

.mdi-calendar-edit::before {
  content: "\F08A7";
}

.mdi-calendar-export::before {
  content: "\F0B24";
}

.mdi-calendar-heart::before {
  content: "\F09D2";
}

.mdi-calendar-import::before {
  content: "\F0B25";
}

.mdi-calendar-minus::before {
  content: "\F0D5C";
}

.mdi-calendar-month::before {
  content: "\F0E17";
}

.mdi-calendar-month-outline::before {
  content: "\F0E18";
}

.mdi-calendar-multiple::before {
  content: "\F00F1";
}

.mdi-calendar-multiple-check::before {
  content: "\F00F2";
}

.mdi-calendar-multiselect::before {
  content: "\F0A32";
}

.mdi-calendar-outline::before {
  content: "\F0B67";
}

.mdi-calendar-plus::before {
  content: "\F00F3";
}

.mdi-calendar-question::before {
  content: "\F0692";
}

.mdi-calendar-range::before {
  content: "\F0679";
}

.mdi-calendar-range-outline::before {
  content: "\F0B68";
}

.mdi-calendar-refresh::before {
  content: "\F01E1";
}

.mdi-calendar-refresh-outline::before {
  content: "\F0203";
}

.mdi-calendar-remove::before {
  content: "\F00F4";
}

.mdi-calendar-remove-outline::before {
  content: "\F0C45";
}

.mdi-calendar-search::before {
  content: "\F094C";
}

.mdi-calendar-star::before {
  content: "\F09D3";
}

.mdi-calendar-sync::before {
  content: "\F0E8E";
}

.mdi-calendar-sync-outline::before {
  content: "\F0E8F";
}

.mdi-calendar-text::before {
  content: "\F00F5";
}

.mdi-calendar-text-outline::before {
  content: "\F0C46";
}

.mdi-calendar-today::before {
  content: "\F00F6";
}

.mdi-calendar-week::before {
  content: "\F0A33";
}

.mdi-calendar-week-begin::before {
  content: "\F0A34";
}

.mdi-calendar-weekend::before {
  content: "\F0ED9";
}

.mdi-calendar-weekend-outline::before {
  content: "\F0EDA";
}

.mdi-call-made::before {
  content: "\F00F7";
}

.mdi-call-merge::before {
  content: "\F00F8";
}

.mdi-call-missed::before {
  content: "\F00F9";
}

.mdi-call-received::before {
  content: "\F00FA";
}

.mdi-call-split::before {
  content: "\F00FB";
}

.mdi-camcorder::before {
  content: "\F00FC";
}

.mdi-camcorder-off::before {
  content: "\F00FF";
}

.mdi-camera::before {
  content: "\F0100";
}

.mdi-camera-account::before {
  content: "\F08CB";
}

.mdi-camera-burst::before {
  content: "\F0693";
}

.mdi-camera-control::before {
  content: "\F0B69";
}

.mdi-camera-enhance::before {
  content: "\F0101";
}

.mdi-camera-enhance-outline::before {
  content: "\F0B6A";
}

.mdi-camera-front::before {
  content: "\F0102";
}

.mdi-camera-front-variant::before {
  content: "\F0103";
}

.mdi-camera-gopro::before {
  content: "\F07A1";
}

.mdi-camera-image::before {
  content: "\F08CC";
}

.mdi-camera-iris::before {
  content: "\F0104";
}

.mdi-camera-metering-center::before {
  content: "\F07A2";
}

.mdi-camera-metering-matrix::before {
  content: "\F07A3";
}

.mdi-camera-metering-partial::before {
  content: "\F07A4";
}

.mdi-camera-metering-spot::before {
  content: "\F07A5";
}

.mdi-camera-off::before {
  content: "\F05DF";
}

.mdi-camera-outline::before {
  content: "\F0D5D";
}

.mdi-camera-party-mode::before {
  content: "\F0105";
}

.mdi-camera-plus::before {
  content: "\F0EDB";
}

.mdi-camera-plus-outline::before {
  content: "\F0EDC";
}

.mdi-camera-rear::before {
  content: "\F0106";
}

.mdi-camera-rear-variant::before {
  content: "\F0107";
}

.mdi-camera-retake::before {
  content: "\F0E19";
}

.mdi-camera-retake-outline::before {
  content: "\F0E1A";
}

.mdi-camera-switch::before {
  content: "\F0108";
}

.mdi-camera-switch-outline::before {
  content: "\F084A";
}

.mdi-camera-timer::before {
  content: "\F0109";
}

.mdi-camera-wireless::before {
  content: "\F0DB6";
}

.mdi-camera-wireless-outline::before {
  content: "\F0DB7";
}

.mdi-campfire::before {
  content: "\F0EDD";
}

.mdi-cancel::before {
  content: "\F073A";
}

.mdi-candle::before {
  content: "\F05E2";
}

.mdi-candycane::before {
  content: "\F010A";
}

.mdi-cannabis::before {
  content: "\F07A6";
}

.mdi-caps-lock::before {
  content: "\F0A9B";
}

.mdi-car::before {
  content: "\F010B";
}

.mdi-car-2-plus::before {
  content: "\F1015";
}

.mdi-car-3-plus::before {
  content: "\F1016";
}

.mdi-car-arrow-left::before {
  content: "\F13B2";
}

.mdi-car-arrow-right::before {
  content: "\F13B3";
}

.mdi-car-back::before {
  content: "\F0E1B";
}

.mdi-car-battery::before {
  content: "\F010C";
}

.mdi-car-brake-abs::before {
  content: "\F0C47";
}

.mdi-car-brake-alert::before {
  content: "\F0C48";
}

.mdi-car-brake-hold::before {
  content: "\F0D5E";
}

.mdi-car-brake-parking::before {
  content: "\F0D5F";
}

.mdi-car-brake-retarder::before {
  content: "\F1017";
}

.mdi-car-child-seat::before {
  content: "\F0FA3";
}

.mdi-car-clutch::before {
  content: "\F1018";
}

.mdi-car-cog::before {
  content: "\F13CC";
}

.mdi-car-connected::before {
  content: "\F010D";
}

.mdi-car-convertible::before {
  content: "\F07A7";
}

.mdi-car-coolant-level::before {
  content: "\F1019";
}

.mdi-car-cruise-control::before {
  content: "\F0D60";
}

.mdi-car-defrost-front::before {
  content: "\F0D61";
}

.mdi-car-defrost-rear::before {
  content: "\F0D62";
}

.mdi-car-door::before {
  content: "\F0B6B";
}

.mdi-car-door-lock::before {
  content: "\F109D";
}

.mdi-car-electric::before {
  content: "\F0B6C";
}

.mdi-car-esp::before {
  content: "\F0C49";
}

.mdi-car-estate::before {
  content: "\F07A8";
}

.mdi-car-hatchback::before {
  content: "\F07A9";
}

.mdi-car-info::before {
  content: "\F11BE";
}

.mdi-car-key::before {
  content: "\F0B6D";
}

.mdi-car-lifted-pickup::before {
  content: "\F152D";
}

.mdi-car-light-dimmed::before {
  content: "\F0C4A";
}

.mdi-car-light-fog::before {
  content: "\F0C4B";
}

.mdi-car-light-high::before {
  content: "\F0C4C";
}

.mdi-car-limousine::before {
  content: "\F08CD";
}

.mdi-car-multiple::before {
  content: "\F0B6E";
}

.mdi-car-off::before {
  content: "\F0E1C";
}

.mdi-car-outline::before {
  content: "\F14ED";
}

.mdi-car-parking-lights::before {
  content: "\F0D63";
}

.mdi-car-pickup::before {
  content: "\F07AA";
}

.mdi-car-seat::before {
  content: "\F0FA4";
}

.mdi-car-seat-cooler::before {
  content: "\F0FA5";
}

.mdi-car-seat-heater::before {
  content: "\F0FA6";
}

.mdi-car-settings::before {
  content: "\F13CD";
}

.mdi-car-shift-pattern::before {
  content: "\F0F40";
}

.mdi-car-side::before {
  content: "\F07AB";
}

.mdi-car-sports::before {
  content: "\F07AC";
}

.mdi-car-tire-alert::before {
  content: "\F0C4D";
}

.mdi-car-traction-control::before {
  content: "\F0D64";
}

.mdi-car-turbocharger::before {
  content: "\F101A";
}

.mdi-car-wash::before {
  content: "\F010E";
}

.mdi-car-windshield::before {
  content: "\F101B";
}

.mdi-car-windshield-outline::before {
  content: "\F101C";
}

.mdi-carabiner::before {
  content: "\F14C0";
}

.mdi-caravan::before {
  content: "\F07AD";
}

.mdi-card::before {
  content: "\F0B6F";
}

.mdi-card-account-details::before {
  content: "\F05D2";
}

.mdi-card-account-details-outline::before {
  content: "\F0DAB";
}

.mdi-card-account-details-star::before {
  content: "\F02A3";
}

.mdi-card-account-details-star-outline::before {
  content: "\F06DB";
}

.mdi-card-account-mail::before {
  content: "\F018E";
}

.mdi-card-account-mail-outline::before {
  content: "\F0E98";
}

.mdi-card-account-phone::before {
  content: "\F0E99";
}

.mdi-card-account-phone-outline::before {
  content: "\F0E9A";
}

.mdi-card-bulleted::before {
  content: "\F0B70";
}

.mdi-card-bulleted-off::before {
  content: "\F0B71";
}

.mdi-card-bulleted-off-outline::before {
  content: "\F0B72";
}

.mdi-card-bulleted-outline::before {
  content: "\F0B73";
}

.mdi-card-bulleted-settings::before {
  content: "\F0B74";
}

.mdi-card-bulleted-settings-outline::before {
  content: "\F0B75";
}

.mdi-card-outline::before {
  content: "\F0B76";
}

.mdi-card-plus::before {
  content: "\F11FF";
}

.mdi-card-plus-outline::before {
  content: "\F1200";
}

.mdi-card-search::before {
  content: "\F1074";
}

.mdi-card-search-outline::before {
  content: "\F1075";
}

.mdi-card-text::before {
  content: "\F0B77";
}

.mdi-card-text-outline::before {
  content: "\F0B78";
}

.mdi-cards::before {
  content: "\F0638";
}

.mdi-cards-club::before {
  content: "\F08CE";
}

.mdi-cards-diamond::before {
  content: "\F08CF";
}

.mdi-cards-diamond-outline::before {
  content: "\F101D";
}

.mdi-cards-heart::before {
  content: "\F08D0";
}

.mdi-cards-outline::before {
  content: "\F0639";
}

.mdi-cards-playing-outline::before {
  content: "\F063A";
}

.mdi-cards-spade::before {
  content: "\F08D1";
}

.mdi-cards-variant::before {
  content: "\F06C7";
}

.mdi-carrot::before {
  content: "\F010F";
}

.mdi-cart::before {
  content: "\F0110";
}

.mdi-cart-arrow-down::before {
  content: "\F0D66";
}

.mdi-cart-arrow-right::before {
  content: "\F0C4E";
}

.mdi-cart-arrow-up::before {
  content: "\F0D67";
}

.mdi-cart-minus::before {
  content: "\F0D68";
}

.mdi-cart-off::before {
  content: "\F066B";
}

.mdi-cart-outline::before {
  content: "\F0111";
}

.mdi-cart-plus::before {
  content: "\F0112";
}

.mdi-cart-remove::before {
  content: "\F0D69";
}

.mdi-case-sensitive-alt::before {
  content: "\F0113";
}

.mdi-cash::before {
  content: "\F0114";
}

.mdi-cash-100::before {
  content: "\F0115";
}

.mdi-cash-check::before {
  content: "\F14EE";
}

.mdi-cash-lock::before {
  content: "\F14EA";
}

.mdi-cash-lock-open::before {
  content: "\F14EB";
}

.mdi-cash-marker::before {
  content: "\F0DB8";
}

.mdi-cash-minus::before {
  content: "\F1260";
}

.mdi-cash-multiple::before {
  content: "\F0116";
}

.mdi-cash-plus::before {
  content: "\F1261";
}

.mdi-cash-refund::before {
  content: "\F0A9C";
}

.mdi-cash-register::before {
  content: "\F0CF4";
}

.mdi-cash-remove::before {
  content: "\F1262";
}

.mdi-cash-usd::before {
  content: "\F1176";
}

.mdi-cash-usd-outline::before {
  content: "\F0117";
}

.mdi-cassette::before {
  content: "\F09D4";
}

.mdi-cast::before {
  content: "\F0118";
}

.mdi-cast-audio::before {
  content: "\F101E";
}

.mdi-cast-connected::before {
  content: "\F0119";
}

.mdi-cast-education::before {
  content: "\F0E1D";
}

.mdi-cast-off::before {
  content: "\F078A";
}

.mdi-castle::before {
  content: "\F011A";
}

.mdi-cat::before {
  content: "\F011B";
}

.mdi-cctv::before {
  content: "\F07AE";
}

.mdi-ceiling-light::before {
  content: "\F0769";
}

.mdi-cellphone::before {
  content: "\F011C";
}

.mdi-cellphone-android::before {
  content: "\F011D";
}

.mdi-cellphone-arrow-down::before {
  content: "\F09D5";
}

.mdi-cellphone-basic::before {
  content: "\F011E";
}

.mdi-cellphone-charging::before {
  content: "\F1397";
}

.mdi-cellphone-cog::before {
  content: "\F0951";
}

.mdi-cellphone-dock::before {
  content: "\F011F";
}

.mdi-cellphone-erase::before {
  content: "\F094D";
}

.mdi-cellphone-information::before {
  content: "\F0F41";
}

.mdi-cellphone-iphone::before {
  content: "\F0120";
}

.mdi-cellphone-key::before {
  content: "\F094E";
}

.mdi-cellphone-link::before {
  content: "\F0121";
}

.mdi-cellphone-link-off::before {
  content: "\F0122";
}

.mdi-cellphone-lock::before {
  content: "\F094F";
}

.mdi-cellphone-message::before {
  content: "\F08D3";
}

.mdi-cellphone-message-off::before {
  content: "\F10D2";
}

.mdi-cellphone-nfc::before {
  content: "\F0E90";
}

.mdi-cellphone-nfc-off::before {
  content: "\F12D8";
}

.mdi-cellphone-off::before {
  content: "\F0950";
}

.mdi-cellphone-play::before {
  content: "\F101F";
}

.mdi-cellphone-screenshot::before {
  content: "\F0A35";
}

.mdi-cellphone-settings::before {
  content: "\F0123";
}

.mdi-cellphone-sound::before {
  content: "\F0952";
}

.mdi-cellphone-text::before {
  content: "\F08D2";
}

.mdi-cellphone-wireless::before {
  content: "\F0815";
}

.mdi-celtic-cross::before {
  content: "\F0CF5";
}

.mdi-centos::before {
  content: "\F111A";
}

.mdi-certificate::before {
  content: "\F0124";
}

.mdi-certificate-outline::before {
  content: "\F1188";
}

.mdi-chair-rolling::before {
  content: "\F0F48";
}

.mdi-chair-school::before {
  content: "\F0125";
}

.mdi-charity::before {
  content: "\F0C4F";
}

.mdi-chart-arc::before {
  content: "\F0126";
}

.mdi-chart-areaspline::before {
  content: "\F0127";
}

.mdi-chart-areaspline-variant::before {
  content: "\F0E91";
}

.mdi-chart-bar::before {
  content: "\F0128";
}

.mdi-chart-bar-stacked::before {
  content: "\F076A";
}

.mdi-chart-bell-curve::before {
  content: "\F0C50";
}

.mdi-chart-bell-curve-cumulative::before {
  content: "\F0FA7";
}

.mdi-chart-box::before {
  content: "\F154D";
}

.mdi-chart-box-outline::before {
  content: "\F154E";
}

.mdi-chart-box-plus-outline::before {
  content: "\F154F";
}

.mdi-chart-bubble::before {
  content: "\F05E3";
}

.mdi-chart-donut::before {
  content: "\F07AF";
}

.mdi-chart-donut-variant::before {
  content: "\F07B0";
}

.mdi-chart-gantt::before {
  content: "\F066C";
}

.mdi-chart-histogram::before {
  content: "\F0129";
}

.mdi-chart-line::before {
  content: "\F012A";
}

.mdi-chart-line-stacked::before {
  content: "\F076B";
}

.mdi-chart-line-variant::before {
  content: "\F07B1";
}

.mdi-chart-multiline::before {
  content: "\F08D4";
}

.mdi-chart-multiple::before {
  content: "\F1213";
}

.mdi-chart-pie::before {
  content: "\F012B";
}

.mdi-chart-ppf::before {
  content: "\F1380";
}

.mdi-chart-sankey::before {
  content: "\F11DF";
}

.mdi-chart-sankey-variant::before {
  content: "\F11E0";
}

.mdi-chart-scatter-plot::before {
  content: "\F0E92";
}

.mdi-chart-scatter-plot-hexbin::before {
  content: "\F066D";
}

.mdi-chart-timeline::before {
  content: "\F066E";
}

.mdi-chart-timeline-variant::before {
  content: "\F0E93";
}

.mdi-chart-tree::before {
  content: "\F0E94";
}

.mdi-chat::before {
  content: "\F0B79";
}

.mdi-chat-alert::before {
  content: "\F0B7A";
}

.mdi-chat-alert-outline::before {
  content: "\F12C9";
}

.mdi-chat-minus::before {
  content: "\F1410";
}

.mdi-chat-minus-outline::before {
  content: "\F1413";
}

.mdi-chat-outline::before {
  content: "\F0EDE";
}

.mdi-chat-plus::before {
  content: "\F140F";
}

.mdi-chat-plus-outline::before {
  content: "\F1412";
}

.mdi-chat-processing::before {
  content: "\F0B7B";
}

.mdi-chat-processing-outline::before {
  content: "\F12CA";
}

.mdi-chat-remove::before {
  content: "\F1411";
}

.mdi-chat-remove-outline::before {
  content: "\F1414";
}

.mdi-chat-sleep::before {
  content: "\F12D1";
}

.mdi-chat-sleep-outline::before {
  content: "\F12D2";
}

.mdi-check::before {
  content: "\F012C";
}

.mdi-check-all::before {
  content: "\F012D";
}

.mdi-check-bold::before {
  content: "\F0E1E";
}

.mdi-check-box-multiple-outline::before {
  content: "\F0C51";
}

.mdi-check-box-outline::before {
  content: "\F0C52";
}

.mdi-check-circle::before {
  content: "\F05E0";
}

.mdi-check-circle-outline::before {
  content: "\F05E1";
}

.mdi-check-decagram::before {
  content: "\F0791";
}

.mdi-check-network::before {
  content: "\F0C53";
}

.mdi-check-network-outline::before {
  content: "\F0C54";
}

.mdi-check-outline::before {
  content: "\F0855";
}

.mdi-check-underline::before {
  content: "\F0E1F";
}

.mdi-check-underline-circle::before {
  content: "\F0E20";
}

.mdi-check-underline-circle-outline::before {
  content: "\F0E21";
}

.mdi-checkbook::before {
  content: "\F0A9D";
}

.mdi-checkbox-blank::before {
  content: "\F012E";
}

.mdi-checkbox-blank-circle::before {
  content: "\F012F";
}

.mdi-checkbox-blank-circle-outline::before {
  content: "\F0130";
}

.mdi-checkbox-blank-off::before {
  content: "\F12EC";
}

.mdi-checkbox-blank-off-outline::before {
  content: "\F12ED";
}

.mdi-checkbox-blank-outline::before {
  content: "\F0131";
}

.mdi-checkbox-intermediate::before {
  content: "\F0856";
}

.mdi-checkbox-marked::before {
  content: "\F0132";
}

.mdi-checkbox-marked-circle::before {
  content: "\F0133";
}

.mdi-checkbox-marked-circle-outline::before {
  content: "\F0134";
}

.mdi-checkbox-marked-outline::before {
  content: "\F0135";
}

.mdi-checkbox-multiple-blank::before {
  content: "\F0136";
}

.mdi-checkbox-multiple-blank-circle::before {
  content: "\F063B";
}

.mdi-checkbox-multiple-blank-circle-outline::before {
  content: "\F063C";
}

.mdi-checkbox-multiple-blank-outline::before {
  content: "\F0137";
}

.mdi-checkbox-multiple-marked::before {
  content: "\F0138";
}

.mdi-checkbox-multiple-marked-circle::before {
  content: "\F063D";
}

.mdi-checkbox-multiple-marked-circle-outline::before {
  content: "\F063E";
}

.mdi-checkbox-multiple-marked-outline::before {
  content: "\F0139";
}

.mdi-checkerboard::before {
  content: "\F013A";
}

.mdi-checkerboard-minus::before {
  content: "\F1202";
}

.mdi-checkerboard-plus::before {
  content: "\F1201";
}

.mdi-checkerboard-remove::before {
  content: "\F1203";
}

.mdi-cheese::before {
  content: "\F12B9";
}

.mdi-cheese-off::before {
  content: "\F13EE";
}

.mdi-chef-hat::before {
  content: "\F0B7C";
}

.mdi-chemical-weapon::before {
  content: "\F013B";
}

.mdi-chess-bishop::before {
  content: "\F085C";
}

.mdi-chess-king::before {
  content: "\F0857";
}

.mdi-chess-knight::before {
  content: "\F0858";
}

.mdi-chess-pawn::before {
  content: "\F0859";
}

.mdi-chess-queen::before {
  content: "\F085A";
}

.mdi-chess-rook::before {
  content: "\F085B";
}

.mdi-chevron-double-down::before {
  content: "\F013C";
}

.mdi-chevron-double-left::before {
  content: "\F013D";
}

.mdi-chevron-double-right::before {
  content: "\F013E";
}

.mdi-chevron-double-up::before {
  content: "\F013F";
}

.mdi-chevron-down::before {
  content: "\F0140";
}

.mdi-chevron-down-box::before {
  content: "\F09D6";
}

.mdi-chevron-down-box-outline::before {
  content: "\F09D7";
}

.mdi-chevron-down-circle::before {
  content: "\F0B26";
}

.mdi-chevron-down-circle-outline::before {
  content: "\F0B27";
}

.mdi-chevron-left::before {
  content: "\F0141";
}

.mdi-chevron-left-box::before {
  content: "\F09D8";
}

.mdi-chevron-left-box-outline::before {
  content: "\F09D9";
}

.mdi-chevron-left-circle::before {
  content: "\F0B28";
}

.mdi-chevron-left-circle-outline::before {
  content: "\F0B29";
}

.mdi-chevron-right::before {
  content: "\F0142";
}

.mdi-chevron-right-box::before {
  content: "\F09DA";
}

.mdi-chevron-right-box-outline::before {
  content: "\F09DB";
}

.mdi-chevron-right-circle::before {
  content: "\F0B2A";
}

.mdi-chevron-right-circle-outline::before {
  content: "\F0B2B";
}

.mdi-chevron-triple-down::before {
  content: "\F0DB9";
}

.mdi-chevron-triple-left::before {
  content: "\F0DBA";
}

.mdi-chevron-triple-right::before {
  content: "\F0DBB";
}

.mdi-chevron-triple-up::before {
  content: "\F0DBC";
}

.mdi-chevron-up::before {
  content: "\F0143";
}

.mdi-chevron-up-box::before {
  content: "\F09DC";
}

.mdi-chevron-up-box-outline::before {
  content: "\F09DD";
}

.mdi-chevron-up-circle::before {
  content: "\F0B2C";
}

.mdi-chevron-up-circle-outline::before {
  content: "\F0B2D";
}

.mdi-chili-hot::before {
  content: "\F07B2";
}

.mdi-chili-medium::before {
  content: "\F07B3";
}

.mdi-chili-mild::before {
  content: "\F07B4";
}

.mdi-chili-off::before {
  content: "\F1467";
}

.mdi-chip::before {
  content: "\F061A";
}

.mdi-christianity::before {
  content: "\F0953";
}

.mdi-christianity-outline::before {
  content: "\F0CF6";
}

.mdi-church::before {
  content: "\F0144";
}

.mdi-cigar::before {
  content: "\F1189";
}

.mdi-cigar-off::before {
  content: "\F141B";
}

.mdi-circle::before {
  content: "\F0765";
}

.mdi-circle-double::before {
  content: "\F0E95";
}

.mdi-circle-edit-outline::before {
  content: "\F08D5";
}

.mdi-circle-expand::before {
  content: "\F0E96";
}

.mdi-circle-half::before {
  content: "\F1395";
}

.mdi-circle-half-full::before {
  content: "\F1396";
}

.mdi-circle-medium::before {
  content: "\F09DE";
}

.mdi-circle-multiple::before {
  content: "\F0B38";
}

.mdi-circle-multiple-outline::before {
  content: "\F0695";
}

.mdi-circle-off-outline::before {
  content: "\F10D3";
}

.mdi-circle-outline::before {
  content: "\F0766";
}

.mdi-circle-slice-1::before {
  content: "\F0A9E";
}

.mdi-circle-slice-2::before {
  content: "\F0A9F";
}

.mdi-circle-slice-3::before {
  content: "\F0AA0";
}

.mdi-circle-slice-4::before {
  content: "\F0AA1";
}

.mdi-circle-slice-5::before {
  content: "\F0AA2";
}

.mdi-circle-slice-6::before {
  content: "\F0AA3";
}

.mdi-circle-slice-7::before {
  content: "\F0AA4";
}

.mdi-circle-slice-8::before {
  content: "\F0AA5";
}

.mdi-circle-small::before {
  content: "\F09DF";
}

.mdi-circular-saw::before {
  content: "\F0E22";
}

.mdi-city::before {
  content: "\F0146";
}

.mdi-city-variant::before {
  content: "\F0A36";
}

.mdi-city-variant-outline::before {
  content: "\F0A37";
}

.mdi-clipboard::before {
  content: "\F0147";
}

.mdi-clipboard-account::before {
  content: "\F0148";
}

.mdi-clipboard-account-outline::before {
  content: "\F0C55";
}

.mdi-clipboard-alert::before {
  content: "\F0149";
}

.mdi-clipboard-alert-outline::before {
  content: "\F0CF7";
}

.mdi-clipboard-arrow-down::before {
  content: "\F014A";
}

.mdi-clipboard-arrow-down-outline::before {
  content: "\F0C56";
}

.mdi-clipboard-arrow-left::before {
  content: "\F014B";
}

.mdi-clipboard-arrow-left-outline::before {
  content: "\F0CF8";
}

.mdi-clipboard-arrow-right::before {
  content: "\F0CF9";
}

.mdi-clipboard-arrow-right-outline::before {
  content: "\F0CFA";
}

.mdi-clipboard-arrow-up::before {
  content: "\F0C57";
}

.mdi-clipboard-arrow-up-outline::before {
  content: "\F0C58";
}

.mdi-clipboard-check::before {
  content: "\F014E";
}

.mdi-clipboard-check-multiple::before {
  content: "\F1263";
}

.mdi-clipboard-check-multiple-outline::before {
  content: "\F1264";
}

.mdi-clipboard-check-outline::before {
  content: "\F08A8";
}

.mdi-clipboard-edit::before {
  content: "\F14E5";
}

.mdi-clipboard-edit-outline::before {
  content: "\F14E6";
}

.mdi-clipboard-file::before {
  content: "\F1265";
}

.mdi-clipboard-file-outline::before {
  content: "\F1266";
}

.mdi-clipboard-flow::before {
  content: "\F06C8";
}

.mdi-clipboard-flow-outline::before {
  content: "\F1117";
}

.mdi-clipboard-list::before {
  content: "\F10D4";
}

.mdi-clipboard-list-outline::before {
  content: "\F10D5";
}

.mdi-clipboard-multiple::before {
  content: "\F1267";
}

.mdi-clipboard-multiple-outline::before {
  content: "\F1268";
}

.mdi-clipboard-outline::before {
  content: "\F014C";
}

.mdi-clipboard-play::before {
  content: "\F0C59";
}

.mdi-clipboard-play-multiple::before {
  content: "\F1269";
}

.mdi-clipboard-play-multiple-outline::before {
  content: "\F126A";
}

.mdi-clipboard-play-outline::before {
  content: "\F0C5A";
}

.mdi-clipboard-plus::before {
  content: "\F0751";
}

.mdi-clipboard-plus-outline::before {
  content: "\F131F";
}

.mdi-clipboard-pulse::before {
  content: "\F085D";
}

.mdi-clipboard-pulse-outline::before {
  content: "\F085E";
}

.mdi-clipboard-text::before {
  content: "\F014D";
}

.mdi-clipboard-text-multiple::before {
  content: "\F126B";
}

.mdi-clipboard-text-multiple-outline::before {
  content: "\F126C";
}

.mdi-clipboard-text-outline::before {
  content: "\F0A38";
}

.mdi-clipboard-text-play::before {
  content: "\F0C5B";
}

.mdi-clipboard-text-play-outline::before {
  content: "\F0C5C";
}

.mdi-clippy::before {
  content: "\F014F";
}

.mdi-clock::before {
  content: "\F0954";
}

.mdi-clock-alert::before {
  content: "\F0955";
}

.mdi-clock-alert-outline::before {
  content: "\F05CE";
}

.mdi-clock-check::before {
  content: "\F0FA8";
}

.mdi-clock-check-outline::before {
  content: "\F0FA9";
}

.mdi-clock-digital::before {
  content: "\F0E97";
}

.mdi-clock-end::before {
  content: "\F0151";
}

.mdi-clock-fast::before {
  content: "\F0152";
}

.mdi-clock-in::before {
  content: "\F0153";
}

.mdi-clock-out::before {
  content: "\F0154";
}

.mdi-clock-outline::before {
  content: "\F0150";
}

.mdi-clock-start::before {
  content: "\F0155";
}

.mdi-clock-time-eight::before {
  content: "\F1446";
}

.mdi-clock-time-eight-outline::before {
  content: "\F1452";
}

.mdi-clock-time-eleven::before {
  content: "\F1449";
}

.mdi-clock-time-eleven-outline::before {
  content: "\F1455";
}

.mdi-clock-time-five::before {
  content: "\F1443";
}

.mdi-clock-time-five-outline::before {
  content: "\F144F";
}

.mdi-clock-time-four::before {
  content: "\F1442";
}

.mdi-clock-time-four-outline::before {
  content: "\F144E";
}

.mdi-clock-time-nine::before {
  content: "\F1447";
}

.mdi-clock-time-nine-outline::before {
  content: "\F1453";
}

.mdi-clock-time-one::before {
  content: "\F143F";
}

.mdi-clock-time-one-outline::before {
  content: "\F144B";
}

.mdi-clock-time-seven::before {
  content: "\F1445";
}

.mdi-clock-time-seven-outline::before {
  content: "\F1451";
}

.mdi-clock-time-six::before {
  content: "\F1444";
}

.mdi-clock-time-six-outline::before {
  content: "\F1450";
}

.mdi-clock-time-ten::before {
  content: "\F1448";
}

.mdi-clock-time-ten-outline::before {
  content: "\F1454";
}

.mdi-clock-time-three::before {
  content: "\F1441";
}

.mdi-clock-time-three-outline::before {
  content: "\F144D";
}

.mdi-clock-time-twelve::before {
  content: "\F144A";
}

.mdi-clock-time-twelve-outline::before {
  content: "\F1456";
}

.mdi-clock-time-two::before {
  content: "\F1440";
}

.mdi-clock-time-two-outline::before {
  content: "\F144C";
}

.mdi-close::before {
  content: "\F0156";
}

.mdi-close-box::before {
  content: "\F0157";
}

.mdi-close-box-multiple::before {
  content: "\F0C5D";
}

.mdi-close-box-multiple-outline::before {
  content: "\F0C5E";
}

.mdi-close-box-outline::before {
  content: "\F0158";
}

.mdi-close-circle::before {
  content: "\F0159";
}

.mdi-close-circle-multiple::before {
  content: "\F062A";
}

.mdi-close-circle-multiple-outline::before {
  content: "\F0883";
}

.mdi-close-circle-outline::before {
  content: "\F015A";
}

.mdi-close-network::before {
  content: "\F015B";
}

.mdi-close-network-outline::before {
  content: "\F0C5F";
}

.mdi-close-octagon::before {
  content: "\F015C";
}

.mdi-close-octagon-outline::before {
  content: "\F015D";
}

.mdi-close-outline::before {
  content: "\F06C9";
}

.mdi-close-thick::before {
  content: "\F1398";
}

.mdi-closed-caption::before {
  content: "\F015E";
}

.mdi-closed-caption-outline::before {
  content: "\F0DBD";
}

.mdi-cloud::before {
  content: "\F015F";
}

.mdi-cloud-alert::before {
  content: "\F09E0";
}

.mdi-cloud-braces::before {
  content: "\F07B5";
}

.mdi-cloud-check::before {
  content: "\F0160";
}

.mdi-cloud-check-outline::before {
  content: "\F12CC";
}

.mdi-cloud-circle::before {
  content: "\F0161";
}

.mdi-cloud-download::before {
  content: "\F0162";
}

.mdi-cloud-download-outline::before {
  content: "\F0B7D";
}

.mdi-cloud-lock::before {
  content: "\F11F1";
}

.mdi-cloud-lock-outline::before {
  content: "\F11F2";
}

.mdi-cloud-off-outline::before {
  content: "\F0164";
}

.mdi-cloud-outline::before {
  content: "\F0163";
}

.mdi-cloud-print::before {
  content: "\F0165";
}

.mdi-cloud-print-outline::before {
  content: "\F0166";
}

.mdi-cloud-question::before {
  content: "\F0A39";
}

.mdi-cloud-refresh::before {
  content: "\F052A";
}

.mdi-cloud-search::before {
  content: "\F0956";
}

.mdi-cloud-search-outline::before {
  content: "\F0957";
}

.mdi-cloud-sync::before {
  content: "\F063F";
}

.mdi-cloud-sync-outline::before {
  content: "\F12D6";
}

.mdi-cloud-tags::before {
  content: "\F07B6";
}

.mdi-cloud-upload::before {
  content: "\F0167";
}

.mdi-cloud-upload-outline::before {
  content: "\F0B7E";
}

.mdi-clover::before {
  content: "\F0816";
}

.mdi-coach-lamp::before {
  content: "\F1020";
}

.mdi-coat-rack::before {
  content: "\F109E";
}

.mdi-code-array::before {
  content: "\F0168";
}

.mdi-code-braces::before {
  content: "\F0169";
}

.mdi-code-braces-box::before {
  content: "\F10D6";
}

.mdi-code-brackets::before {
  content: "\F016A";
}

.mdi-code-equal::before {
  content: "\F016B";
}

.mdi-code-greater-than::before {
  content: "\F016C";
}

.mdi-code-greater-than-or-equal::before {
  content: "\F016D";
}

.mdi-code-json::before {
  content: "\F0626";
}

.mdi-code-less-than::before {
  content: "\F016E";
}

.mdi-code-less-than-or-equal::before {
  content: "\F016F";
}

.mdi-code-not-equal::before {
  content: "\F0170";
}

.mdi-code-not-equal-variant::before {
  content: "\F0171";
}

.mdi-code-parentheses::before {
  content: "\F0172";
}

.mdi-code-parentheses-box::before {
  content: "\F10D7";
}

.mdi-code-string::before {
  content: "\F0173";
}

.mdi-code-tags::before {
  content: "\F0174";
}

.mdi-code-tags-check::before {
  content: "\F0694";
}

.mdi-codepen::before {
  content: "\F0175";
}

.mdi-coffee::before {
  content: "\F0176";
}

.mdi-coffee-maker::before {
  content: "\F109F";
}

.mdi-coffee-off::before {
  content: "\F0FAA";
}

.mdi-coffee-off-outline::before {
  content: "\F0FAB";
}

.mdi-coffee-outline::before {
  content: "\F06CA";
}

.mdi-coffee-to-go::before {
  content: "\F0177";
}

.mdi-coffee-to-go-outline::before {
  content: "\F130E";
}

.mdi-coffin::before {
  content: "\F0B7F";
}

.mdi-cog::before {
  content: "\F0493";
}

.mdi-cog-box::before {
  content: "\F0494";
}

.mdi-cog-clockwise::before {
  content: "\F11DD";
}

.mdi-cog-counterclockwise::before {
  content: "\F11DE";
}

.mdi-cog-off::before {
  content: "\F13CE";
}

.mdi-cog-off-outline::before {
  content: "\F13CF";
}

.mdi-cog-outline::before {
  content: "\F08BB";
}

.mdi-cog-refresh::before {
  content: "\F145E";
}

.mdi-cog-refresh-outline::before {
  content: "\F145F";
}

.mdi-cog-sync::before {
  content: "\F1460";
}

.mdi-cog-sync-outline::before {
  content: "\F1461";
}

.mdi-cog-transfer::before {
  content: "\F105B";
}

.mdi-cog-transfer-outline::before {
  content: "\F105C";
}

.mdi-cogs::before {
  content: "\F08D6";
}

.mdi-collage::before {
  content: "\F0640";
}

.mdi-collapse-all::before {
  content: "\F0AA6";
}

.mdi-collapse-all-outline::before {
  content: "\F0AA7";
}

.mdi-color-helper::before {
  content: "\F0179";
}

.mdi-comma::before {
  content: "\F0E23";
}

.mdi-comma-box::before {
  content: "\F0E2B";
}

.mdi-comma-box-outline::before {
  content: "\F0E24";
}

.mdi-comma-circle::before {
  content: "\F0E25";
}

.mdi-comma-circle-outline::before {
  content: "\F0E26";
}

.mdi-comment::before {
  content: "\F017A";
}

.mdi-comment-account::before {
  content: "\F017B";
}

.mdi-comment-account-outline::before {
  content: "\F017C";
}

.mdi-comment-alert::before {
  content: "\F017D";
}

.mdi-comment-alert-outline::before {
  content: "\F017E";
}

.mdi-comment-arrow-left::before {
  content: "\F09E1";
}

.mdi-comment-arrow-left-outline::before {
  content: "\F09E2";
}

.mdi-comment-arrow-right::before {
  content: "\F09E3";
}

.mdi-comment-arrow-right-outline::before {
  content: "\F09E4";
}

.mdi-comment-check::before {
  content: "\F017F";
}

.mdi-comment-check-outline::before {
  content: "\F0180";
}

.mdi-comment-edit::before {
  content: "\F11BF";
}

.mdi-comment-edit-outline::before {
  content: "\F12C4";
}

.mdi-comment-eye::before {
  content: "\F0A3A";
}

.mdi-comment-eye-outline::before {
  content: "\F0A3B";
}

.mdi-comment-multiple::before {
  content: "\F085F";
}

.mdi-comment-multiple-outline::before {
  content: "\F0181";
}

.mdi-comment-outline::before {
  content: "\F0182";
}

.mdi-comment-plus::before {
  content: "\F09E5";
}

.mdi-comment-plus-outline::before {
  content: "\F0183";
}

.mdi-comment-processing::before {
  content: "\F0184";
}

.mdi-comment-processing-outline::before {
  content: "\F0185";
}

.mdi-comment-question::before {
  content: "\F0817";
}

.mdi-comment-question-outline::before {
  content: "\F0186";
}

.mdi-comment-quote::before {
  content: "\F1021";
}

.mdi-comment-quote-outline::before {
  content: "\F1022";
}

.mdi-comment-remove::before {
  content: "\F05DE";
}

.mdi-comment-remove-outline::before {
  content: "\F0187";
}

.mdi-comment-search::before {
  content: "\F0A3C";
}

.mdi-comment-search-outline::before {
  content: "\F0A3D";
}

.mdi-comment-text::before {
  content: "\F0188";
}

.mdi-comment-text-multiple::before {
  content: "\F0860";
}

.mdi-comment-text-multiple-outline::before {
  content: "\F0861";
}

.mdi-comment-text-outline::before {
  content: "\F0189";
}

.mdi-compare::before {
  content: "\F018A";
}

.mdi-compare-horizontal::before {
  content: "\F1492";
}

.mdi-compare-vertical::before {
  content: "\F1493";
}

.mdi-compass::before {
  content: "\F018B";
}

.mdi-compass-off::before {
  content: "\F0B80";
}

.mdi-compass-off-outline::before {
  content: "\F0B81";
}

.mdi-compass-outline::before {
  content: "\F018C";
}

.mdi-compass-rose::before {
  content: "\F1382";
}

.mdi-concourse-ci::before {
  content: "\F10A0";
}

.mdi-console::before {
  content: "\F018D";
}

.mdi-console-line::before {
  content: "\F07B7";
}

.mdi-console-network::before {
  content: "\F08A9";
}

.mdi-console-network-outline::before {
  content: "\F0C60";
}

.mdi-consolidate::before {
  content: "\F10D8";
}

.mdi-contactless-payment::before {
  content: "\F0D6A";
}

.mdi-contactless-payment-circle::before {
  content: "\F0321";
}

.mdi-contactless-payment-circle-outline::before {
  content: "\F0408";
}

.mdi-contacts::before {
  content: "\F06CB";
}

.mdi-contacts-outline::before {
  content: "\F05B8";
}

.mdi-contain::before {
  content: "\F0A3E";
}

.mdi-contain-end::before {
  content: "\F0A3F";
}

.mdi-contain-start::before {
  content: "\F0A40";
}

.mdi-content-copy::before {
  content: "\F018F";
}

.mdi-content-cut::before {
  content: "\F0190";
}

.mdi-content-duplicate::before {
  content: "\F0191";
}

.mdi-content-paste::before {
  content: "\F0192";
}

.mdi-content-save::before {
  content: "\F0193";
}

.mdi-content-save-alert::before {
  content: "\F0F42";
}

.mdi-content-save-alert-outline::before {
  content: "\F0F43";
}

.mdi-content-save-all::before {
  content: "\F0194";
}

.mdi-content-save-all-outline::before {
  content: "\F0F44";
}

.mdi-content-save-cog::before {
  content: "\F145B";
}

.mdi-content-save-cog-outline::before {
  content: "\F145C";
}

.mdi-content-save-edit::before {
  content: "\F0CFB";
}

.mdi-content-save-edit-outline::before {
  content: "\F0CFC";
}

.mdi-content-save-move::before {
  content: "\F0E27";
}

.mdi-content-save-move-outline::before {
  content: "\F0E28";
}

.mdi-content-save-outline::before {
  content: "\F0818";
}

.mdi-content-save-settings::before {
  content: "\F061B";
}

.mdi-content-save-settings-outline::before {
  content: "\F0B2E";
}

.mdi-contrast::before {
  content: "\F0195";
}

.mdi-contrast-box::before {
  content: "\F0196";
}

.mdi-contrast-circle::before {
  content: "\F0197";
}

.mdi-controller-classic::before {
  content: "\F0B82";
}

.mdi-controller-classic-outline::before {
  content: "\F0B83";
}

.mdi-cookie::before {
  content: "\F0198";
}

.mdi-coolant-temperature::before {
  content: "\F03C8";
}

.mdi-copyright::before {
  content: "\F05E6";
}

.mdi-cordova::before {
  content: "\F0958";
}

.mdi-corn::before {
  content: "\F07B8";
}

.mdi-corn-off::before {
  content: "\F13EF";
}

.mdi-cosine-wave::before {
  content: "\F1479";
}

.mdi-counter::before {
  content: "\F0199";
}

.mdi-cow::before {
  content: "\F019A";
}

.mdi-cpu-32-bit::before {
  content: "\F0EDF";
}

.mdi-cpu-64-bit::before {
  content: "\F0EE0";
}

.mdi-crane::before {
  content: "\F0862";
}

.mdi-creation::before {
  content: "\F0674";
}

.mdi-creative-commons::before {
  content: "\F0D6B";
}

.mdi-credit-card::before {
  content: "\F0FEF";
}

.mdi-credit-card-check::before {
  content: "\F13D0";
}

.mdi-credit-card-check-outline::before {
  content: "\F13D1";
}

.mdi-credit-card-clock::before {
  content: "\F0EE1";
}

.mdi-credit-card-clock-outline::before {
  content: "\F0EE2";
}

.mdi-credit-card-marker::before {
  content: "\F06A8";
}

.mdi-credit-card-marker-outline::before {
  content: "\F0DBE";
}

.mdi-credit-card-minus::before {
  content: "\F0FAC";
}

.mdi-credit-card-minus-outline::before {
  content: "\F0FAD";
}

.mdi-credit-card-multiple::before {
  content: "\F0FF0";
}

.mdi-credit-card-multiple-outline::before {
  content: "\F019C";
}

.mdi-credit-card-off::before {
  content: "\F0FF1";
}

.mdi-credit-card-off-outline::before {
  content: "\F05E4";
}

.mdi-credit-card-outline::before {
  content: "\F019B";
}

.mdi-credit-card-plus::before {
  content: "\F0FF2";
}

.mdi-credit-card-plus-outline::before {
  content: "\F0676";
}

.mdi-credit-card-refund::before {
  content: "\F0FF3";
}

.mdi-credit-card-refund-outline::before {
  content: "\F0AA8";
}

.mdi-credit-card-remove::before {
  content: "\F0FAE";
}

.mdi-credit-card-remove-outline::before {
  content: "\F0FAF";
}

.mdi-credit-card-scan::before {
  content: "\F0FF4";
}

.mdi-credit-card-scan-outline::before {
  content: "\F019D";
}

.mdi-credit-card-settings::before {
  content: "\F0FF5";
}

.mdi-credit-card-settings-outline::before {
  content: "\F08D7";
}

.mdi-credit-card-wireless::before {
  content: "\F0802";
}

.mdi-credit-card-wireless-off::before {
  content: "\F057A";
}

.mdi-credit-card-wireless-off-outline::before {
  content: "\F057B";
}

.mdi-credit-card-wireless-outline::before {
  content: "\F0D6C";
}

.mdi-cricket::before {
  content: "\F0D6D";
}

.mdi-crop::before {
  content: "\F019E";
}

.mdi-crop-free::before {
  content: "\F019F";
}

.mdi-crop-landscape::before {
  content: "\F01A0";
}

.mdi-crop-portrait::before {
  content: "\F01A1";
}

.mdi-crop-rotate::before {
  content: "\F0696";
}

.mdi-crop-square::before {
  content: "\F01A2";
}

.mdi-crosshairs::before {
  content: "\F01A3";
}

.mdi-crosshairs-gps::before {
  content: "\F01A4";
}

.mdi-crosshairs-off::before {
  content: "\F0F45";
}

.mdi-crosshairs-question::before {
  content: "\F1136";
}

.mdi-crown::before {
  content: "\F01A5";
}

.mdi-crown-outline::before {
  content: "\F11D0";
}

.mdi-cryengine::before {
  content: "\F0959";
}

.mdi-crystal-ball::before {
  content: "\F0B2F";
}

.mdi-cube::before {
  content: "\F01A6";
}

.mdi-cube-off::before {
  content: "\F141C";
}

.mdi-cube-off-outline::before {
  content: "\F141D";
}

.mdi-cube-outline::before {
  content: "\F01A7";
}

.mdi-cube-scan::before {
  content: "\F0B84";
}

.mdi-cube-send::before {
  content: "\F01A8";
}

.mdi-cube-unfolded::before {
  content: "\F01A9";
}

.mdi-cup::before {
  content: "\F01AA";
}

.mdi-cup-off::before {
  content: "\F05E5";
}

.mdi-cup-off-outline::before {
  content: "\F137D";
}

.mdi-cup-outline::before {
  content: "\F130F";
}

.mdi-cup-water::before {
  content: "\F01AB";
}

.mdi-cupboard::before {
  content: "\F0F46";
}

.mdi-cupboard-outline::before {
  content: "\F0F47";
}

.mdi-cupcake::before {
  content: "\F095A";
}

.mdi-curling::before {
  content: "\F0863";
}

.mdi-currency-bdt::before {
  content: "\F0864";
}

.mdi-currency-brl::before {
  content: "\F0B85";
}

.mdi-currency-btc::before {
  content: "\F01AC";
}

.mdi-currency-cny::before {
  content: "\F07BA";
}

.mdi-currency-eth::before {
  content: "\F07BB";
}

.mdi-currency-eur::before {
  content: "\F01AD";
}

.mdi-currency-eur-off::before {
  content: "\F1315";
}

.mdi-currency-gbp::before {
  content: "\F01AE";
}

.mdi-currency-ils::before {
  content: "\F0C61";
}

.mdi-currency-inr::before {
  content: "\F01AF";
}

.mdi-currency-jpy::before {
  content: "\F07BC";
}

.mdi-currency-krw::before {
  content: "\F07BD";
}

.mdi-currency-kzt::before {
  content: "\F0865";
}

.mdi-currency-mnt::before {
  content: "\F1512";
}

.mdi-currency-ngn::before {
  content: "\F01B0";
}

.mdi-currency-php::before {
  content: "\F09E6";
}

.mdi-currency-rial::before {
  content: "\F0E9C";
}

.mdi-currency-rub::before {
  content: "\F01B1";
}

.mdi-currency-sign::before {
  content: "\F07BE";
}

.mdi-currency-try::before {
  content: "\F01B2";
}

.mdi-currency-twd::before {
  content: "\F07BF";
}

.mdi-currency-usd::before {
  content: "\F01C1";
}

.mdi-currency-usd-circle::before {
  content: "\F116B";
}

.mdi-currency-usd-circle-outline::before {
  content: "\F0178";
}

.mdi-currency-usd-off::before {
  content: "\F067A";
}

.mdi-current-ac::before {
  content: "\F1480";
}

.mdi-current-dc::before {
  content: "\F095C";
}

.mdi-cursor-default::before {
  content: "\F01C0";
}

.mdi-cursor-default-click::before {
  content: "\F0CFD";
}

.mdi-cursor-default-click-outline::before {
  content: "\F0CFE";
}

.mdi-cursor-default-gesture::before {
  content: "\F1127";
}

.mdi-cursor-default-gesture-outline::before {
  content: "\F1128";
}

.mdi-cursor-default-outline::before {
  content: "\F01BF";
}

.mdi-cursor-move::before {
  content: "\F01BE";
}

.mdi-cursor-pointer::before {
  content: "\F01BD";
}

.mdi-cursor-text::before {
  content: "\F05E7";
}

.mdi-data-matrix::before {
  content: "\F153C";
}

.mdi-data-matrix-edit::before {
  content: "\F153D";
}

.mdi-data-matrix-minus::before {
  content: "\F153E";
}

.mdi-data-matrix-plus::before {
  content: "\F153F";
}

.mdi-data-matrix-remove::before {
  content: "\F1540";
}

.mdi-data-matrix-scan::before {
  content: "\F1541";
}

.mdi-database::before {
  content: "\F01BC";
}

.mdi-database-check::before {
  content: "\F0AA9";
}

.mdi-database-edit::before {
  content: "\F0B86";
}

.mdi-database-export::before {
  content: "\F095E";
}

.mdi-database-import::before {
  content: "\F095D";
}

.mdi-database-lock::before {
  content: "\F0AAA";
}

.mdi-database-marker::before {
  content: "\F12F6";
}

.mdi-database-minus::before {
  content: "\F01BB";
}

.mdi-database-plus::before {
  content: "\F01BA";
}

.mdi-database-refresh::before {
  content: "\F05C2";
}

.mdi-database-remove::before {
  content: "\F0D00";
}

.mdi-database-search::before {
  content: "\F0866";
}

.mdi-database-settings::before {
  content: "\F0D01";
}

.mdi-database-sync::before {
  content: "\F0CFF";
}

.mdi-death-star::before {
  content: "\F08D8";
}

.mdi-death-star-variant::before {
  content: "\F08D9";
}

.mdi-deathly-hallows::before {
  content: "\F0B87";
}

.mdi-debian::before {
  content: "\F08DA";
}

.mdi-debug-step-into::before {
  content: "\F01B9";
}

.mdi-debug-step-out::before {
  content: "\F01B8";
}

.mdi-debug-step-over::before {
  content: "\F01B7";
}

.mdi-decagram::before {
  content: "\F076C";
}

.mdi-decagram-outline::before {
  content: "\F076D";
}

.mdi-decimal::before {
  content: "\F10A1";
}

.mdi-decimal-comma::before {
  content: "\F10A2";
}

.mdi-decimal-comma-decrease::before {
  content: "\F10A3";
}

.mdi-decimal-comma-increase::before {
  content: "\F10A4";
}

.mdi-decimal-decrease::before {
  content: "\F01B6";
}

.mdi-decimal-increase::before {
  content: "\F01B5";
}

.mdi-delete::before {
  content: "\F01B4";
}

.mdi-delete-alert::before {
  content: "\F10A5";
}

.mdi-delete-alert-outline::before {
  content: "\F10A6";
}

.mdi-delete-circle::before {
  content: "\F0683";
}

.mdi-delete-circle-outline::before {
  content: "\F0B88";
}

.mdi-delete-empty::before {
  content: "\F06CC";
}

.mdi-delete-empty-outline::before {
  content: "\F0E9D";
}

.mdi-delete-forever::before {
  content: "\F05E8";
}

.mdi-delete-forever-outline::before {
  content: "\F0B89";
}

.mdi-delete-off::before {
  content: "\F10A7";
}

.mdi-delete-off-outline::before {
  content: "\F10A8";
}

.mdi-delete-outline::before {
  content: "\F09E7";
}

.mdi-delete-restore::before {
  content: "\F0819";
}

.mdi-delete-sweep::before {
  content: "\F05E9";
}

.mdi-delete-sweep-outline::before {
  content: "\F0C62";
}

.mdi-delete-variant::before {
  content: "\F01B3";
}

.mdi-delta::before {
  content: "\F01C2";
}

.mdi-desk::before {
  content: "\F1239";
}

.mdi-desk-lamp::before {
  content: "\F095F";
}

.mdi-deskphone::before {
  content: "\F01C3";
}

.mdi-desktop-classic::before {
  content: "\F07C0";
}

.mdi-desktop-mac::before {
  content: "\F01C4";
}

.mdi-desktop-mac-dashboard::before {
  content: "\F09E8";
}

.mdi-desktop-tower::before {
  content: "\F01C5";
}

.mdi-desktop-tower-monitor::before {
  content: "\F0AAB";
}

.mdi-details::before {
  content: "\F01C6";
}

.mdi-dev-to::before {
  content: "\F0D6E";
}

.mdi-developer-board::before {
  content: "\F0697";
}

.mdi-deviantart::before {
  content: "\F01C7";
}

.mdi-devices::before {
  content: "\F0FB0";
}

.mdi-diabetes::before {
  content: "\F1126";
}

.mdi-dialpad::before {
  content: "\F061C";
}

.mdi-diameter::before {
  content: "\F0C63";
}

.mdi-diameter-outline::before {
  content: "\F0C64";
}

.mdi-diameter-variant::before {
  content: "\F0C65";
}

.mdi-diamond::before {
  content: "\F0B8A";
}

.mdi-diamond-outline::before {
  content: "\F0B8B";
}

.mdi-diamond-stone::before {
  content: "\F01C8";
}

.mdi-dice-1::before {
  content: "\F01CA";
}

.mdi-dice-1-outline::before {
  content: "\F114A";
}

.mdi-dice-2::before {
  content: "\F01CB";
}

.mdi-dice-2-outline::before {
  content: "\F114B";
}

.mdi-dice-3::before {
  content: "\F01CC";
}

.mdi-dice-3-outline::before {
  content: "\F114C";
}

.mdi-dice-4::before {
  content: "\F01CD";
}

.mdi-dice-4-outline::before {
  content: "\F114D";
}

.mdi-dice-5::before {
  content: "\F01CE";
}

.mdi-dice-5-outline::before {
  content: "\F114E";
}

.mdi-dice-6::before {
  content: "\F01CF";
}

.mdi-dice-6-outline::before {
  content: "\F114F";
}

.mdi-dice-d10::before {
  content: "\F1153";
}

.mdi-dice-d10-outline::before {
  content: "\F076F";
}

.mdi-dice-d12::before {
  content: "\F1154";
}

.mdi-dice-d12-outline::before {
  content: "\F0867";
}

.mdi-dice-d20::before {
  content: "\F1155";
}

.mdi-dice-d20-outline::before {
  content: "\F05EA";
}

.mdi-dice-d4::before {
  content: "\F1150";
}

.mdi-dice-d4-outline::before {
  content: "\F05EB";
}

.mdi-dice-d6::before {
  content: "\F1151";
}

.mdi-dice-d6-outline::before {
  content: "\F05ED";
}

.mdi-dice-d8::before {
  content: "\F1152";
}

.mdi-dice-d8-outline::before {
  content: "\F05EC";
}

.mdi-dice-multiple::before {
  content: "\F076E";
}

.mdi-dice-multiple-outline::before {
  content: "\F1156";
}

.mdi-digital-ocean::before {
  content: "\F1237";
}

.mdi-dip-switch::before {
  content: "\F07C1";
}

.mdi-directions::before {
  content: "\F01D0";
}

.mdi-directions-fork::before {
  content: "\F0641";
}

.mdi-disc::before {
  content: "\F05EE";
}

.mdi-disc-alert::before {
  content: "\F01D1";
}

.mdi-disc-player::before {
  content: "\F0960";
}

.mdi-discord::before {
  content: "\F066F";
}

.mdi-dishwasher::before {
  content: "\F0AAC";
}

.mdi-dishwasher-alert::before {
  content: "\F11B8";
}

.mdi-dishwasher-off::before {
  content: "\F11B9";
}

.mdi-disqus::before {
  content: "\F01D2";
}

.mdi-distribute-horizontal-center::before {
  content: "\F11C9";
}

.mdi-distribute-horizontal-left::before {
  content: "\F11C8";
}

.mdi-distribute-horizontal-right::before {
  content: "\F11CA";
}

.mdi-distribute-vertical-bottom::before {
  content: "\F11CB";
}

.mdi-distribute-vertical-center::before {
  content: "\F11CC";
}

.mdi-distribute-vertical-top::before {
  content: "\F11CD";
}

.mdi-diving-flippers::before {
  content: "\F0DBF";
}

.mdi-diving-helmet::before {
  content: "\F0DC0";
}

.mdi-diving-scuba::before {
  content: "\F0DC1";
}

.mdi-diving-scuba-flag::before {
  content: "\F0DC2";
}

.mdi-diving-scuba-tank::before {
  content: "\F0DC3";
}

.mdi-diving-scuba-tank-multiple::before {
  content: "\F0DC4";
}

.mdi-diving-snorkel::before {
  content: "\F0DC5";
}

.mdi-division::before {
  content: "\F01D4";
}

.mdi-division-box::before {
  content: "\F01D5";
}

.mdi-dlna::before {
  content: "\F0A41";
}

.mdi-dna::before {
  content: "\F0684";
}

.mdi-dns::before {
  content: "\F01D6";
}

.mdi-dns-outline::before {
  content: "\F0B8C";
}

.mdi-do-not-disturb::before {
  content: "\F0698";
}

.mdi-do-not-disturb-off::before {
  content: "\F0699";
}

.mdi-dock-bottom::before {
  content: "\F10A9";
}

.mdi-dock-left::before {
  content: "\F10AA";
}

.mdi-dock-right::before {
  content: "\F10AB";
}

.mdi-dock-top::before {
  content: "\F1513";
}

.mdi-dock-window::before {
  content: "\F10AC";
}

.mdi-docker::before {
  content: "\F0868";
}

.mdi-doctor::before {
  content: "\F0A42";
}

.mdi-dog::before {
  content: "\F0A43";
}

.mdi-dog-service::before {
  content: "\F0AAD";
}

.mdi-dog-side::before {
  content: "\F0A44";
}

.mdi-dolby::before {
  content: "\F06B3";
}

.mdi-dolly::before {
  content: "\F0E9E";
}

.mdi-domain::before {
  content: "\F01D7";
}

.mdi-domain-off::before {
  content: "\F0D6F";
}

.mdi-domain-plus::before {
  content: "\F10AD";
}

.mdi-domain-remove::before {
  content: "\F10AE";
}

.mdi-dome-light::before {
  content: "\F141E";
}

.mdi-domino-mask::before {
  content: "\F1023";
}

.mdi-donkey::before {
  content: "\F07C2";
}

.mdi-door::before {
  content: "\F081A";
}

.mdi-door-closed::before {
  content: "\F081B";
}

.mdi-door-closed-lock::before {
  content: "\F10AF";
}

.mdi-door-open::before {
  content: "\F081C";
}

.mdi-doorbell::before {
  content: "\F12E6";
}

.mdi-doorbell-video::before {
  content: "\F0869";
}

.mdi-dot-net::before {
  content: "\F0AAE";
}

.mdi-dots-horizontal::before {
  content: "\F01D8";
}

.mdi-dots-horizontal-circle::before {
  content: "\F07C3";
}

.mdi-dots-horizontal-circle-outline::before {
  content: "\F0B8D";
}

.mdi-dots-vertical::before {
  content: "\F01D9";
}

.mdi-dots-vertical-circle::before {
  content: "\F07C4";
}

.mdi-dots-vertical-circle-outline::before {
  content: "\F0B8E";
}

.mdi-douban::before {
  content: "\F069A";
}

.mdi-download::before {
  content: "\F01DA";
}

.mdi-download-box::before {
  content: "\F1462";
}

.mdi-download-box-outline::before {
  content: "\F1463";
}

.mdi-download-circle::before {
  content: "\F1464";
}

.mdi-download-circle-outline::before {
  content: "\F1465";
}

.mdi-download-lock::before {
  content: "\F1320";
}

.mdi-download-lock-outline::before {
  content: "\F1321";
}

.mdi-download-multiple::before {
  content: "\F09E9";
}

.mdi-download-network::before {
  content: "\F06F4";
}

.mdi-download-network-outline::before {
  content: "\F0C66";
}

.mdi-download-off::before {
  content: "\F10B0";
}

.mdi-download-off-outline::before {
  content: "\F10B1";
}

.mdi-download-outline::before {
  content: "\F0B8F";
}

.mdi-drag::before {
  content: "\F01DB";
}

.mdi-drag-horizontal::before {
  content: "\F01DC";
}

.mdi-drag-horizontal-variant::before {
  content: "\F12F0";
}

.mdi-drag-variant::before {
  content: "\F0B90";
}

.mdi-drag-vertical::before {
  content: "\F01DD";
}

.mdi-drag-vertical-variant::before {
  content: "\F12F1";
}

.mdi-drama-masks::before {
  content: "\F0D02";
}

.mdi-draw::before {
  content: "\F0F49";
}

.mdi-drawing::before {
  content: "\F01DE";
}

.mdi-drawing-box::before {
  content: "\F01DF";
}

.mdi-dresser::before {
  content: "\F0F4A";
}

.mdi-dresser-outline::before {
  content: "\F0F4B";
}

.mdi-drone::before {
  content: "\F01E2";
}

.mdi-dropbox::before {
  content: "\F01E3";
}

.mdi-drupal::before {
  content: "\F01E4";
}

.mdi-duck::before {
  content: "\F01E5";
}

.mdi-dumbbell::before {
  content: "\F01E6";
}

.mdi-dump-truck::before {
  content: "\F0C67";
}

.mdi-ear-hearing::before {
  content: "\F07C5";
}

.mdi-ear-hearing-off::before {
  content: "\F0A45";
}

.mdi-earth::before {
  content: "\F01E7";
}

.mdi-earth-arrow-right::before {
  content: "\F1311";
}

.mdi-earth-box::before {
  content: "\F06CD";
}

.mdi-earth-box-minus::before {
  content: "\F1407";
}

.mdi-earth-box-off::before {
  content: "\F06CE";
}

.mdi-earth-box-plus::before {
  content: "\F1406";
}

.mdi-earth-box-remove::before {
  content: "\F1408";
}

.mdi-earth-minus::before {
  content: "\F1404";
}

.mdi-earth-off::before {
  content: "\F01E8";
}

.mdi-earth-plus::before {
  content: "\F1403";
}

.mdi-earth-remove::before {
  content: "\F1405";
}

.mdi-egg::before {
  content: "\F0AAF";
}

.mdi-egg-easter::before {
  content: "\F0AB0";
}

.mdi-egg-off::before {
  content: "\F13F0";
}

.mdi-egg-off-outline::before {
  content: "\F13F1";
}

.mdi-egg-outline::before {
  content: "\F13F2";
}

.mdi-eight-track::before {
  content: "\F09EA";
}

.mdi-eject::before {
  content: "\F01EA";
}

.mdi-eject-outline::before {
  content: "\F0B91";
}

.mdi-electric-switch::before {
  content: "\F0E9F";
}

.mdi-electric-switch-closed::before {
  content: "\F10D9";
}

.mdi-electron-framework::before {
  content: "\F1024";
}

.mdi-elephant::before {
  content: "\F07C6";
}

.mdi-elevation-decline::before {
  content: "\F01EB";
}

.mdi-elevation-rise::before {
  content: "\F01EC";
}

.mdi-elevator::before {
  content: "\F01ED";
}

.mdi-elevator-down::before {
  content: "\F12C2";
}

.mdi-elevator-passenger::before {
  content: "\F1381";
}

.mdi-elevator-up::before {
  content: "\F12C1";
}

.mdi-ellipse::before {
  content: "\F0EA0";
}

.mdi-ellipse-outline::before {
  content: "\F0EA1";
}

.mdi-email::before {
  content: "\F01EE";
}

.mdi-email-alert::before {
  content: "\F06CF";
}

.mdi-email-alert-outline::before {
  content: "\F0D42";
}

.mdi-email-box::before {
  content: "\F0D03";
}

.mdi-email-check::before {
  content: "\F0AB1";
}

.mdi-email-check-outline::before {
  content: "\F0AB2";
}

.mdi-email-edit::before {
  content: "\F0EE3";
}

.mdi-email-edit-outline::before {
  content: "\F0EE4";
}

.mdi-email-lock::before {
  content: "\F01F1";
}

.mdi-email-mark-as-unread::before {
  content: "\F0B92";
}

.mdi-email-minus::before {
  content: "\F0EE5";
}

.mdi-email-minus-outline::before {
  content: "\F0EE6";
}

.mdi-email-multiple::before {
  content: "\F0EE7";
}

.mdi-email-multiple-outline::before {
  content: "\F0EE8";
}

.mdi-email-newsletter::before {
  content: "\F0FB1";
}

.mdi-email-off::before {
  content: "\F13E3";
}

.mdi-email-off-outline::before {
  content: "\F13E4";
}

.mdi-email-open::before {
  content: "\F01EF";
}

.mdi-email-open-multiple::before {
  content: "\F0EE9";
}

.mdi-email-open-multiple-outline::before {
  content: "\F0EEA";
}

.mdi-email-open-outline::before {
  content: "\F05EF";
}

.mdi-email-outline::before {
  content: "\F01F0";
}

.mdi-email-plus::before {
  content: "\F09EB";
}

.mdi-email-plus-outline::before {
  content: "\F09EC";
}

.mdi-email-receive::before {
  content: "\F10DA";
}

.mdi-email-receive-outline::before {
  content: "\F10DB";
}

.mdi-email-search::before {
  content: "\F0961";
}

.mdi-email-search-outline::before {
  content: "\F0962";
}

.mdi-email-send::before {
  content: "\F10DC";
}

.mdi-email-send-outline::before {
  content: "\F10DD";
}

.mdi-email-sync::before {
  content: "\F12C7";
}

.mdi-email-sync-outline::before {
  content: "\F12C8";
}

.mdi-email-variant::before {
  content: "\F05F0";
}

.mdi-ember::before {
  content: "\F0B30";
}

.mdi-emby::before {
  content: "\F06B4";
}

.mdi-emoticon::before {
  content: "\F0C68";
}

.mdi-emoticon-angry::before {
  content: "\F0C69";
}

.mdi-emoticon-angry-outline::before {
  content: "\F0C6A";
}

.mdi-emoticon-confused::before {
  content: "\F10DE";
}

.mdi-emoticon-confused-outline::before {
  content: "\F10DF";
}

.mdi-emoticon-cool::before {
  content: "\F0C6B";
}

.mdi-emoticon-cool-outline::before {
  content: "\F01F3";
}

.mdi-emoticon-cry::before {
  content: "\F0C6C";
}

.mdi-emoticon-cry-outline::before {
  content: "\F0C6D";
}

.mdi-emoticon-dead::before {
  content: "\F0C6E";
}

.mdi-emoticon-dead-outline::before {
  content: "\F069B";
}

.mdi-emoticon-devil::before {
  content: "\F0C6F";
}

.mdi-emoticon-devil-outline::before {
  content: "\F01F4";
}

.mdi-emoticon-excited::before {
  content: "\F0C70";
}

.mdi-emoticon-excited-outline::before {
  content: "\F069C";
}

.mdi-emoticon-frown::before {
  content: "\F0F4C";
}

.mdi-emoticon-frown-outline::before {
  content: "\F0F4D";
}

.mdi-emoticon-happy::before {
  content: "\F0C71";
}

.mdi-emoticon-happy-outline::before {
  content: "\F01F5";
}

.mdi-emoticon-kiss::before {
  content: "\F0C72";
}

.mdi-emoticon-kiss-outline::before {
  content: "\F0C73";
}

.mdi-emoticon-lol::before {
  content: "\F1214";
}

.mdi-emoticon-lol-outline::before {
  content: "\F1215";
}

.mdi-emoticon-neutral::before {
  content: "\F0C74";
}

.mdi-emoticon-neutral-outline::before {
  content: "\F01F6";
}

.mdi-emoticon-outline::before {
  content: "\F01F2";
}

.mdi-emoticon-poop::before {
  content: "\F01F7";
}

.mdi-emoticon-poop-outline::before {
  content: "\F0C75";
}

.mdi-emoticon-sad::before {
  content: "\F0C76";
}

.mdi-emoticon-sad-outline::before {
  content: "\F01F8";
}

.mdi-emoticon-tongue::before {
  content: "\F01F9";
}

.mdi-emoticon-tongue-outline::before {
  content: "\F0C77";
}

.mdi-emoticon-wink::before {
  content: "\F0C78";
}

.mdi-emoticon-wink-outline::before {
  content: "\F0C79";
}

.mdi-engine::before {
  content: "\F01FA";
}

.mdi-engine-off::before {
  content: "\F0A46";
}

.mdi-engine-off-outline::before {
  content: "\F0A47";
}

.mdi-engine-outline::before {
  content: "\F01FB";
}

.mdi-epsilon::before {
  content: "\F10E0";
}

.mdi-equal::before {
  content: "\F01FC";
}

.mdi-equal-box::before {
  content: "\F01FD";
}

.mdi-equalizer::before {
  content: "\F0EA2";
}

.mdi-equalizer-outline::before {
  content: "\F0EA3";
}

.mdi-eraser::before {
  content: "\F01FE";
}

.mdi-eraser-variant::before {
  content: "\F0642";
}

.mdi-escalator::before {
  content: "\F01FF";
}

.mdi-escalator-box::before {
  content: "\F1399";
}

.mdi-escalator-down::before {
  content: "\F12C0";
}

.mdi-escalator-up::before {
  content: "\F12BF";
}

.mdi-eslint::before {
  content: "\F0C7A";
}

.mdi-et::before {
  content: "\F0AB3";
}

.mdi-ethereum::before {
  content: "\F086A";
}

.mdi-ethernet::before {
  content: "\F0200";
}

.mdi-ethernet-cable::before {
  content: "\F0201";
}

.mdi-ethernet-cable-off::before {
  content: "\F0202";
}

.mdi-ev-plug-ccs1::before {
  content: "\F1519";
}

.mdi-ev-plug-ccs2::before {
  content: "\F151A";
}

.mdi-ev-plug-chademo::before {
  content: "\F151B";
}

.mdi-ev-plug-tesla::before {
  content: "\F151C";
}

.mdi-ev-plug-type1::before {
  content: "\F151D";
}

.mdi-ev-plug-type2::before {
  content: "\F151E";
}

.mdi-ev-station::before {
  content: "\F05F1";
}

.mdi-evernote::before {
  content: "\F0204";
}

.mdi-excavator::before {
  content: "\F1025";
}

.mdi-exclamation::before {
  content: "\F0205";
}

.mdi-exclamation-thick::before {
  content: "\F1238";
}

.mdi-exit-run::before {
  content: "\F0A48";
}

.mdi-exit-to-app::before {
  content: "\F0206";
}

.mdi-expand-all::before {
  content: "\F0AB4";
}

.mdi-expand-all-outline::before {
  content: "\F0AB5";
}

.mdi-expansion-card::before {
  content: "\F08AE";
}

.mdi-expansion-card-variant::before {
  content: "\F0FB2";
}

.mdi-exponent::before {
  content: "\F0963";
}

.mdi-exponent-box::before {
  content: "\F0964";
}

.mdi-export::before {
  content: "\F0207";
}

.mdi-export-variant::before {
  content: "\F0B93";
}

.mdi-eye::before {
  content: "\F0208";
}

.mdi-eye-check::before {
  content: "\F0D04";
}

.mdi-eye-check-outline::before {
  content: "\F0D05";
}

.mdi-eye-circle::before {
  content: "\F0B94";
}

.mdi-eye-circle-outline::before {
  content: "\F0B95";
}

.mdi-eye-minus::before {
  content: "\F1026";
}

.mdi-eye-minus-outline::before {
  content: "\F1027";
}

.mdi-eye-off::before {
  content: "\F0209";
}

.mdi-eye-off-outline::before {
  content: "\F06D1";
}

.mdi-eye-outline::before {
  content: "\F06D0";
}

.mdi-eye-plus::before {
  content: "\F086B";
}

.mdi-eye-plus-outline::before {
  content: "\F086C";
}

.mdi-eye-settings::before {
  content: "\F086D";
}

.mdi-eye-settings-outline::before {
  content: "\F086E";
}

.mdi-eyedropper::before {
  content: "\F020A";
}

.mdi-eyedropper-minus::before {
  content: "\F13DD";
}

.mdi-eyedropper-off::before {
  content: "\F13DF";
}

.mdi-eyedropper-plus::before {
  content: "\F13DC";
}

.mdi-eyedropper-remove::before {
  content: "\F13DE";
}

.mdi-eyedropper-variant::before {
  content: "\F020B";
}

.mdi-face::before {
  content: "\F0643";
}

.mdi-face-agent::before {
  content: "\F0D70";
}

.mdi-face-outline::before {
  content: "\F0B96";
}

.mdi-face-profile::before {
  content: "\F0644";
}

.mdi-face-profile-woman::before {
  content: "\F1076";
}

.mdi-face-recognition::before {
  content: "\F0C7B";
}

.mdi-face-woman::before {
  content: "\F1077";
}

.mdi-face-woman-outline::before {
  content: "\F1078";
}

.mdi-facebook::before {
  content: "\F020C";
}

.mdi-facebook-gaming::before {
  content: "\F07DD";
}

.mdi-facebook-messenger::before {
  content: "\F020E";
}

.mdi-facebook-workplace::before {
  content: "\F0B31";
}

.mdi-factory::before {
  content: "\F020F";
}

.mdi-fan::before {
  content: "\F0210";
}

.mdi-fan-alert::before {
  content: "\F146C";
}

.mdi-fan-chevron-down::before {
  content: "\F146D";
}

.mdi-fan-chevron-up::before {
  content: "\F146E";
}

.mdi-fan-minus::before {
  content: "\F1470";
}

.mdi-fan-off::before {
  content: "\F081D";
}

.mdi-fan-plus::before {
  content: "\F146F";
}

.mdi-fan-remove::before {
  content: "\F1471";
}

.mdi-fan-speed-1::before {
  content: "\F1472";
}

.mdi-fan-speed-2::before {
  content: "\F1473";
}

.mdi-fan-speed-3::before {
  content: "\F1474";
}

.mdi-fast-forward::before {
  content: "\F0211";
}

.mdi-fast-forward-10::before {
  content: "\F0D71";
}

.mdi-fast-forward-30::before {
  content: "\F0D06";
}

.mdi-fast-forward-5::before {
  content: "\F11F8";
}

.mdi-fast-forward-outline::before {
  content: "\F06D2";
}

.mdi-fax::before {
  content: "\F0212";
}

.mdi-feather::before {
  content: "\F06D3";
}

.mdi-feature-search::before {
  content: "\F0A49";
}

.mdi-feature-search-outline::before {
  content: "\F0A4A";
}

.mdi-fedora::before {
  content: "\F08DB";
}

.mdi-fencing::before {
  content: "\F14C1";
}

.mdi-ferris-wheel::before {
  content: "\F0EA4";
}

.mdi-ferry::before {
  content: "\F0213";
}

.mdi-file::before {
  content: "\F0214";
}

.mdi-file-account::before {
  content: "\F073B";
}

.mdi-file-account-outline::before {
  content: "\F1028";
}

.mdi-file-alert::before {
  content: "\F0A4B";
}

.mdi-file-alert-outline::before {
  content: "\F0A4C";
}

.mdi-file-cabinet::before {
  content: "\F0AB6";
}

.mdi-file-cad::before {
  content: "\F0EEB";
}

.mdi-file-cad-box::before {
  content: "\F0EEC";
}

.mdi-file-cancel::before {
  content: "\F0DC6";
}

.mdi-file-cancel-outline::before {
  content: "\F0DC7";
}

.mdi-file-certificate::before {
  content: "\F1186";
}

.mdi-file-certificate-outline::before {
  content: "\F1187";
}

.mdi-file-chart::before {
  content: "\F0215";
}

.mdi-file-chart-outline::before {
  content: "\F1029";
}

.mdi-file-check::before {
  content: "\F0216";
}

.mdi-file-check-outline::before {
  content: "\F0E29";
}

.mdi-file-clock::before {
  content: "\F12E1";
}

.mdi-file-clock-outline::before {
  content: "\F12E2";
}

.mdi-file-cloud::before {
  content: "\F0217";
}

.mdi-file-cloud-outline::before {
  content: "\F102A";
}

.mdi-file-code::before {
  content: "\F022E";
}

.mdi-file-code-outline::before {
  content: "\F102B";
}

.mdi-file-cog::before {
  content: "\F107B";
}

.mdi-file-cog-outline::before {
  content: "\F107C";
}

.mdi-file-compare::before {
  content: "\F08AA";
}

.mdi-file-delimited::before {
  content: "\F0218";
}

.mdi-file-delimited-outline::before {
  content: "\F0EA5";
}

.mdi-file-document::before {
  content: "\F0219";
}

.mdi-file-document-edit::before {
  content: "\F0DC8";
}

.mdi-file-document-edit-outline::before {
  content: "\F0DC9";
}

.mdi-file-document-multiple::before {
  content: "\F1517";
}

.mdi-file-document-multiple-outline::before {
  content: "\F1518";
}

.mdi-file-document-outline::before {
  content: "\F09EE";
}

.mdi-file-download::before {
  content: "\F0965";
}

.mdi-file-download-outline::before {
  content: "\F0966";
}

.mdi-file-edit::before {
  content: "\F11E7";
}

.mdi-file-edit-outline::before {
  content: "\F11E8";
}

.mdi-file-excel::before {
  content: "\F021B";
}

.mdi-file-excel-box::before {
  content: "\F021C";
}

.mdi-file-excel-box-outline::before {
  content: "\F102C";
}

.mdi-file-excel-outline::before {
  content: "\F102D";
}

.mdi-file-export::before {
  content: "\F021D";
}

.mdi-file-export-outline::before {
  content: "\F102E";
}

.mdi-file-eye::before {
  content: "\F0DCA";
}

.mdi-file-eye-outline::before {
  content: "\F0DCB";
}

.mdi-file-find::before {
  content: "\F021E";
}

.mdi-file-find-outline::before {
  content: "\F0B97";
}

.mdi-file-hidden::before {
  content: "\F0613";
}

.mdi-file-image::before {
  content: "\F021F";
}

.mdi-file-image-outline::before {
  content: "\F0EB0";
}

.mdi-file-import::before {
  content: "\F0220";
}

.mdi-file-import-outline::before {
  content: "\F102F";
}

.mdi-file-key::before {
  content: "\F1184";
}

.mdi-file-key-outline::before {
  content: "\F1185";
}

.mdi-file-link::before {
  content: "\F1177";
}

.mdi-file-link-outline::before {
  content: "\F1178";
}

.mdi-file-lock::before {
  content: "\F0221";
}

.mdi-file-lock-outline::before {
  content: "\F1030";
}

.mdi-file-move::before {
  content: "\F0AB9";
}

.mdi-file-move-outline::before {
  content: "\F1031";
}

.mdi-file-multiple::before {
  content: "\F0222";
}

.mdi-file-multiple-outline::before {
  content: "\F1032";
}

.mdi-file-music::before {
  content: "\F0223";
}

.mdi-file-music-outline::before {
  content: "\F0E2A";
}

.mdi-file-outline::before {
  content: "\F0224";
}

.mdi-file-pdf::before {
  content: "\F0225";
}

.mdi-file-pdf-box::before {
  content: "\F0226";
}

.mdi-file-pdf-box-outline::before {
  content: "\F0FB3";
}

.mdi-file-pdf-outline::before {
  content: "\F0E2D";
}

.mdi-file-percent::before {
  content: "\F081E";
}

.mdi-file-percent-outline::before {
  content: "\F1033";
}

.mdi-file-phone::before {
  content: "\F1179";
}

.mdi-file-phone-outline::before {
  content: "\F117A";
}

.mdi-file-plus::before {
  content: "\F0752";
}

.mdi-file-plus-outline::before {
  content: "\F0EED";
}

.mdi-file-powerpoint::before {
  content: "\F0227";
}

.mdi-file-powerpoint-box::before {
  content: "\F0228";
}

.mdi-file-powerpoint-box-outline::before {
  content: "\F1034";
}

.mdi-file-powerpoint-outline::before {
  content: "\F1035";
}

.mdi-file-presentation-box::before {
  content: "\F0229";
}

.mdi-file-question::before {
  content: "\F086F";
}

.mdi-file-question-outline::before {
  content: "\F1036";
}

.mdi-file-refresh::before {
  content: "\F0918";
}

.mdi-file-refresh-outline::before {
  content: "\F0541";
}

.mdi-file-remove::before {
  content: "\F0B98";
}

.mdi-file-remove-outline::before {
  content: "\F1037";
}

.mdi-file-replace::before {
  content: "\F0B32";
}

.mdi-file-replace-outline::before {
  content: "\F0B33";
}

.mdi-file-restore::before {
  content: "\F0670";
}

.mdi-file-restore-outline::before {
  content: "\F1038";
}

.mdi-file-search::before {
  content: "\F0C7C";
}

.mdi-file-search-outline::before {
  content: "\F0C7D";
}

.mdi-file-send::before {
  content: "\F022A";
}

.mdi-file-send-outline::before {
  content: "\F1039";
}

.mdi-file-settings::before {
  content: "\F1079";
}

.mdi-file-settings-outline::before {
  content: "\F107A";
}

.mdi-file-star::before {
  content: "\F103A";
}

.mdi-file-star-outline::before {
  content: "\F103B";
}

.mdi-file-swap::before {
  content: "\F0FB4";
}

.mdi-file-swap-outline::before {
  content: "\F0FB5";
}

.mdi-file-sync::before {
  content: "\F1216";
}

.mdi-file-sync-outline::before {
  content: "\F1217";
}

.mdi-file-table::before {
  content: "\F0C7E";
}

.mdi-file-table-box::before {
  content: "\F10E1";
}

.mdi-file-table-box-multiple::before {
  content: "\F10E2";
}

.mdi-file-table-box-multiple-outline::before {
  content: "\F10E3";
}

.mdi-file-table-box-outline::before {
  content: "\F10E4";
}

.mdi-file-table-outline::before {
  content: "\F0C7F";
}

.mdi-file-tree::before {
  content: "\F0645";
}

.mdi-file-tree-outline::before {
  content: "\F13D2";
}

.mdi-file-undo::before {
  content: "\F08DC";
}

.mdi-file-undo-outline::before {
  content: "\F103C";
}

.mdi-file-upload::before {
  content: "\F0A4D";
}

.mdi-file-upload-outline::before {
  content: "\F0A4E";
}

.mdi-file-video::before {
  content: "\F022B";
}

.mdi-file-video-outline::before {
  content: "\F0E2C";
}

.mdi-file-word::before {
  content: "\F022C";
}

.mdi-file-word-box::before {
  content: "\F022D";
}

.mdi-file-word-box-outline::before {
  content: "\F103D";
}

.mdi-file-word-outline::before {
  content: "\F103E";
}

.mdi-film::before {
  content: "\F022F";
}

.mdi-filmstrip::before {
  content: "\F0230";
}

.mdi-filmstrip-box::before {
  content: "\F0332";
}

.mdi-filmstrip-box-multiple::before {
  content: "\F0D18";
}

.mdi-filmstrip-off::before {
  content: "\F0231";
}

.mdi-filter::before {
  content: "\F0232";
}

.mdi-filter-menu::before {
  content: "\F10E5";
}

.mdi-filter-menu-outline::before {
  content: "\F10E6";
}

.mdi-filter-minus::before {
  content: "\F0EEE";
}

.mdi-filter-minus-outline::before {
  content: "\F0EEF";
}

.mdi-filter-off::before {
  content: "\F14EF";
}

.mdi-filter-off-outline::before {
  content: "\F14F0";
}

.mdi-filter-outline::before {
  content: "\F0233";
}

.mdi-filter-plus::before {
  content: "\F0EF0";
}

.mdi-filter-plus-outline::before {
  content: "\F0EF1";
}

.mdi-filter-remove::before {
  content: "\F0234";
}

.mdi-filter-remove-outline::before {
  content: "\F0235";
}

.mdi-filter-variant::before {
  content: "\F0236";
}

.mdi-filter-variant-minus::before {
  content: "\F1112";
}

.mdi-filter-variant-plus::before {
  content: "\F1113";
}

.mdi-filter-variant-remove::before {
  content: "\F103F";
}

.mdi-finance::before {
  content: "\F081F";
}

.mdi-find-replace::before {
  content: "\F06D4";
}

.mdi-fingerprint::before {
  content: "\F0237";
}

.mdi-fingerprint-off::before {
  content: "\F0EB1";
}

.mdi-fire::before {
  content: "\F0238";
}

.mdi-fire-extinguisher::before {
  content: "\F0EF2";
}

.mdi-fire-hydrant::before {
  content: "\F1137";
}

.mdi-fire-hydrant-alert::before {
  content: "\F1138";
}

.mdi-fire-hydrant-off::before {
  content: "\F1139";
}

.mdi-fire-truck::before {
  content: "\F08AB";
}

.mdi-firebase::before {
  content: "\F0967";
}

.mdi-firefox::before {
  content: "\F0239";
}

.mdi-fireplace::before {
  content: "\F0E2E";
}

.mdi-fireplace-off::before {
  content: "\F0E2F";
}

.mdi-firework::before {
  content: "\F0E30";
}

.mdi-fish::before {
  content: "\F023A";
}

.mdi-fish-off::before {
  content: "\F13F3";
}

.mdi-fishbowl::before {
  content: "\F0EF3";
}

.mdi-fishbowl-outline::before {
  content: "\F0EF4";
}

.mdi-fit-to-page::before {
  content: "\F0EF5";
}

.mdi-fit-to-page-outline::before {
  content: "\F0EF6";
}

.mdi-flag::before {
  content: "\F023B";
}

.mdi-flag-checkered::before {
  content: "\F023C";
}

.mdi-flag-minus::before {
  content: "\F0B99";
}

.mdi-flag-minus-outline::before {
  content: "\F10B2";
}

.mdi-flag-outline::before {
  content: "\F023D";
}

.mdi-flag-plus::before {
  content: "\F0B9A";
}

.mdi-flag-plus-outline::before {
  content: "\F10B3";
}

.mdi-flag-remove::before {
  content: "\F0B9B";
}

.mdi-flag-remove-outline::before {
  content: "\F10B4";
}

.mdi-flag-triangle::before {
  content: "\F023F";
}

.mdi-flag-variant::before {
  content: "\F0240";
}

.mdi-flag-variant-outline::before {
  content: "\F023E";
}

.mdi-flare::before {
  content: "\F0D72";
}

.mdi-flash::before {
  content: "\F0241";
}

.mdi-flash-alert::before {
  content: "\F0EF7";
}

.mdi-flash-alert-outline::before {
  content: "\F0EF8";
}

.mdi-flash-auto::before {
  content: "\F0242";
}

.mdi-flash-circle::before {
  content: "\F0820";
}

.mdi-flash-off::before {
  content: "\F0243";
}

.mdi-flash-outline::before {
  content: "\F06D5";
}

.mdi-flash-red-eye::before {
  content: "\F067B";
}

.mdi-flashlight::before {
  content: "\F0244";
}

.mdi-flashlight-off::before {
  content: "\F0245";
}

.mdi-flask::before {
  content: "\F0093";
}

.mdi-flask-empty::before {
  content: "\F0094";
}

.mdi-flask-empty-minus::before {
  content: "\F123A";
}

.mdi-flask-empty-minus-outline::before {
  content: "\F123B";
}

.mdi-flask-empty-off::before {
  content: "\F13F4";
}

.mdi-flask-empty-off-outline::before {
  content: "\F13F5";
}

.mdi-flask-empty-outline::before {
  content: "\F0095";
}

.mdi-flask-empty-plus::before {
  content: "\F123C";
}

.mdi-flask-empty-plus-outline::before {
  content: "\F123D";
}

.mdi-flask-empty-remove::before {
  content: "\F123E";
}

.mdi-flask-empty-remove-outline::before {
  content: "\F123F";
}

.mdi-flask-minus::before {
  content: "\F1240";
}

.mdi-flask-minus-outline::before {
  content: "\F1241";
}

.mdi-flask-off::before {
  content: "\F13F6";
}

.mdi-flask-off-outline::before {
  content: "\F13F7";
}

.mdi-flask-outline::before {
  content: "\F0096";
}

.mdi-flask-plus::before {
  content: "\F1242";
}

.mdi-flask-plus-outline::before {
  content: "\F1243";
}

.mdi-flask-remove::before {
  content: "\F1244";
}

.mdi-flask-remove-outline::before {
  content: "\F1245";
}

.mdi-flask-round-bottom::before {
  content: "\F124B";
}

.mdi-flask-round-bottom-empty::before {
  content: "\F124C";
}

.mdi-flask-round-bottom-empty-outline::before {
  content: "\F124D";
}

.mdi-flask-round-bottom-outline::before {
  content: "\F124E";
}

.mdi-fleur-de-lis::before {
  content: "\F1303";
}

.mdi-flip-horizontal::before {
  content: "\F10E7";
}

.mdi-flip-to-back::before {
  content: "\F0247";
}

.mdi-flip-to-front::before {
  content: "\F0248";
}

.mdi-flip-vertical::before {
  content: "\F10E8";
}

.mdi-floor-lamp::before {
  content: "\F08DD";
}

.mdi-floor-lamp-dual::before {
  content: "\F1040";
}

.mdi-floor-lamp-variant::before {
  content: "\F1041";
}

.mdi-floor-plan::before {
  content: "\F0821";
}

.mdi-floppy::before {
  content: "\F0249";
}

.mdi-floppy-variant::before {
  content: "\F09EF";
}

.mdi-flower::before {
  content: "\F024A";
}

.mdi-flower-outline::before {
  content: "\F09F0";
}

.mdi-flower-poppy::before {
  content: "\F0D08";
}

.mdi-flower-tulip::before {
  content: "\F09F1";
}

.mdi-flower-tulip-outline::before {
  content: "\F09F2";
}

.mdi-focus-auto::before {
  content: "\F0F4E";
}

.mdi-focus-field::before {
  content: "\F0F4F";
}

.mdi-focus-field-horizontal::before {
  content: "\F0F50";
}

.mdi-focus-field-vertical::before {
  content: "\F0F51";
}

.mdi-folder::before {
  content: "\F024B";
}

.mdi-folder-account::before {
  content: "\F024C";
}

.mdi-folder-account-outline::before {
  content: "\F0B9C";
}

.mdi-folder-alert::before {
  content: "\F0DCC";
}

.mdi-folder-alert-outline::before {
  content: "\F0DCD";
}

.mdi-folder-clock::before {
  content: "\F0ABA";
}

.mdi-folder-clock-outline::before {
  content: "\F0ABB";
}

.mdi-folder-cog::before {
  content: "\F107F";
}

.mdi-folder-cog-outline::before {
  content: "\F1080";
}

.mdi-folder-download::before {
  content: "\F024D";
}

.mdi-folder-download-outline::before {
  content: "\F10E9";
}

.mdi-folder-edit::before {
  content: "\F08DE";
}

.mdi-folder-edit-outline::before {
  content: "\F0DCE";
}

.mdi-folder-google-drive::before {
  content: "\F024E";
}

.mdi-folder-heart::before {
  content: "\F10EA";
}

.mdi-folder-heart-outline::before {
  content: "\F10EB";
}

.mdi-folder-home::before {
  content: "\F10B5";
}

.mdi-folder-home-outline::before {
  content: "\F10B6";
}

.mdi-folder-image::before {
  content: "\F024F";
}

.mdi-folder-information::before {
  content: "\F10B7";
}

.mdi-folder-information-outline::before {
  content: "\F10B8";
}

.mdi-folder-key::before {
  content: "\F08AC";
}

.mdi-folder-key-network::before {
  content: "\F08AD";
}

.mdi-folder-key-network-outline::before {
  content: "\F0C80";
}

.mdi-folder-key-outline::before {
  content: "\F10EC";
}

.mdi-folder-lock::before {
  content: "\F0250";
}

.mdi-folder-lock-open::before {
  content: "\F0251";
}

.mdi-folder-marker::before {
  content: "\F126D";
}

.mdi-folder-marker-outline::before {
  content: "\F126E";
}

.mdi-folder-move::before {
  content: "\F0252";
}

.mdi-folder-move-outline::before {
  content: "\F1246";
}

.mdi-folder-multiple::before {
  content: "\F0253";
}

.mdi-folder-multiple-image::before {
  content: "\F0254";
}

.mdi-folder-multiple-outline::before {
  content: "\F0255";
}

.mdi-folder-multiple-plus::before {
  content: "\F147E";
}

.mdi-folder-multiple-plus-outline::before {
  content: "\F147F";
}

.mdi-folder-music::before {
  content: "\F1359";
}

.mdi-folder-music-outline::before {
  content: "\F135A";
}

.mdi-folder-network::before {
  content: "\F0870";
}

.mdi-folder-network-outline::before {
  content: "\F0C81";
}

.mdi-folder-open::before {
  content: "\F0770";
}

.mdi-folder-open-outline::before {
  content: "\F0DCF";
}

.mdi-folder-outline::before {
  content: "\F0256";
}

.mdi-folder-plus::before {
  content: "\F0257";
}

.mdi-folder-plus-outline::before {
  content: "\F0B9D";
}

.mdi-folder-pound::before {
  content: "\F0D09";
}

.mdi-folder-pound-outline::before {
  content: "\F0D0A";
}

.mdi-folder-refresh::before {
  content: "\F0749";
}

.mdi-folder-refresh-outline::before {
  content: "\F0542";
}

.mdi-folder-remove::before {
  content: "\F0258";
}

.mdi-folder-remove-outline::before {
  content: "\F0B9E";
}

.mdi-folder-search::before {
  content: "\F0968";
}

.mdi-folder-search-outline::before {
  content: "\F0969";
}

.mdi-folder-settings::before {
  content: "\F107D";
}

.mdi-folder-settings-outline::before {
  content: "\F107E";
}

.mdi-folder-star::before {
  content: "\F069D";
}

.mdi-folder-star-multiple::before {
  content: "\F13D3";
}

.mdi-folder-star-multiple-outline::before {
  content: "\F13D4";
}

.mdi-folder-star-outline::before {
  content: "\F0B9F";
}

.mdi-folder-swap::before {
  content: "\F0FB6";
}

.mdi-folder-swap-outline::before {
  content: "\F0FB7";
}

.mdi-folder-sync::before {
  content: "\F0D0B";
}

.mdi-folder-sync-outline::before {
  content: "\F0D0C";
}

.mdi-folder-table::before {
  content: "\F12E3";
}

.mdi-folder-table-outline::before {
  content: "\F12E4";
}

.mdi-folder-text::before {
  content: "\F0C82";
}

.mdi-folder-text-outline::before {
  content: "\F0C83";
}

.mdi-folder-upload::before {
  content: "\F0259";
}

.mdi-folder-upload-outline::before {
  content: "\F10ED";
}

.mdi-folder-zip::before {
  content: "\F06EB";
}

.mdi-folder-zip-outline::before {
  content: "\F07B9";
}

.mdi-font-awesome::before {
  content: "\F003A";
}

.mdi-food::before {
  content: "\F025A";
}

.mdi-food-apple::before {
  content: "\F025B";
}

.mdi-food-apple-outline::before {
  content: "\F0C84";
}

.mdi-food-croissant::before {
  content: "\F07C8";
}

.mdi-food-drumstick::before {
  content: "\F141F";
}

.mdi-food-drumstick-off::before {
  content: "\F1468";
}

.mdi-food-drumstick-off-outline::before {
  content: "\F1469";
}

.mdi-food-drumstick-outline::before {
  content: "\F1420";
}

.mdi-food-fork-drink::before {
  content: "\F05F2";
}

.mdi-food-off::before {
  content: "\F05F3";
}

.mdi-food-steak::before {
  content: "\F146A";
}

.mdi-food-steak-off::before {
  content: "\F146B";
}

.mdi-food-variant::before {
  content: "\F025C";
}

.mdi-food-variant-off::before {
  content: "\F13E5";
}

.mdi-foot-print::before {
  content: "\F0F52";
}

.mdi-football::before {
  content: "\F025D";
}

.mdi-football-australian::before {
  content: "\F025E";
}

.mdi-football-helmet::before {
  content: "\F025F";
}

.mdi-forklift::before {
  content: "\F07C9";
}

.mdi-form-dropdown::before {
  content: "\F1400";
}

.mdi-form-select::before {
  content: "\F1401";
}

.mdi-form-textarea::before {
  content: "\F1095";
}

.mdi-form-textbox::before {
  content: "\F060E";
}

.mdi-form-textbox-lock::before {
  content: "\F135D";
}

.mdi-form-textbox-password::before {
  content: "\F07F5";
}

.mdi-format-align-bottom::before {
  content: "\F0753";
}

.mdi-format-align-center::before {
  content: "\F0260";
}

.mdi-format-align-justify::before {
  content: "\F0261";
}

.mdi-format-align-left::before {
  content: "\F0262";
}

.mdi-format-align-middle::before {
  content: "\F0754";
}

.mdi-format-align-right::before {
  content: "\F0263";
}

.mdi-format-align-top::before {
  content: "\F0755";
}

.mdi-format-annotation-minus::before {
  content: "\F0ABC";
}

.mdi-format-annotation-plus::before {
  content: "\F0646";
}

.mdi-format-bold::before {
  content: "\F0264";
}

.mdi-format-clear::before {
  content: "\F0265";
}

.mdi-format-color-fill::before {
  content: "\F0266";
}

.mdi-format-color-highlight::before {
  content: "\F0E31";
}

.mdi-format-color-marker-cancel::before {
  content: "\F1313";
}

.mdi-format-color-text::before {
  content: "\F069E";
}

.mdi-format-columns::before {
  content: "\F08DF";
}

.mdi-format-float-center::before {
  content: "\F0267";
}

.mdi-format-float-left::before {
  content: "\F0268";
}

.mdi-format-float-none::before {
  content: "\F0269";
}

.mdi-format-float-right::before {
  content: "\F026A";
}

.mdi-format-font::before {
  content: "\F06D6";
}

.mdi-format-font-size-decrease::before {
  content: "\F09F3";
}

.mdi-format-font-size-increase::before {
  content: "\F09F4";
}

.mdi-format-header-1::before {
  content: "\F026B";
}

.mdi-format-header-2::before {
  content: "\F026C";
}

.mdi-format-header-3::before {
  content: "\F026D";
}

.mdi-format-header-4::before {
  content: "\F026E";
}

.mdi-format-header-5::before {
  content: "\F026F";
}

.mdi-format-header-6::before {
  content: "\F0270";
}

.mdi-format-header-decrease::before {
  content: "\F0271";
}

.mdi-format-header-equal::before {
  content: "\F0272";
}

.mdi-format-header-increase::before {
  content: "\F0273";
}

.mdi-format-header-pound::before {
  content: "\F0274";
}

.mdi-format-horizontal-align-center::before {
  content: "\F061E";
}

.mdi-format-horizontal-align-left::before {
  content: "\F061F";
}

.mdi-format-horizontal-align-right::before {
  content: "\F0620";
}

.mdi-format-indent-decrease::before {
  content: "\F0275";
}

.mdi-format-indent-increase::before {
  content: "\F0276";
}

.mdi-format-italic::before {
  content: "\F0277";
}

.mdi-format-letter-case::before {
  content: "\F0B34";
}

.mdi-format-letter-case-lower::before {
  content: "\F0B35";
}

.mdi-format-letter-case-upper::before {
  content: "\F0B36";
}

.mdi-format-letter-ends-with::before {
  content: "\F0FB8";
}

.mdi-format-letter-matches::before {
  content: "\F0FB9";
}

.mdi-format-letter-starts-with::before {
  content: "\F0FBA";
}

.mdi-format-line-spacing::before {
  content: "\F0278";
}

.mdi-format-line-style::before {
  content: "\F05C8";
}

.mdi-format-line-weight::before {
  content: "\F05C9";
}

.mdi-format-list-bulleted::before {
  content: "\F0279";
}

.mdi-format-list-bulleted-square::before {
  content: "\F0DD0";
}

.mdi-format-list-bulleted-triangle::before {
  content: "\F0EB2";
}

.mdi-format-list-bulleted-type::before {
  content: "\F027A";
}

.mdi-format-list-checkbox::before {
  content: "\F096A";
}

.mdi-format-list-checks::before {
  content: "\F0756";
}

.mdi-format-list-numbered::before {
  content: "\F027B";
}

.mdi-format-list-numbered-rtl::before {
  content: "\F0D0D";
}

.mdi-format-list-text::before {
  content: "\F126F";
}

.mdi-format-overline::before {
  content: "\F0EB3";
}

.mdi-format-page-break::before {
  content: "\F06D7";
}

.mdi-format-paint::before {
  content: "\F027C";
}

.mdi-format-paragraph::before {
  content: "\F027D";
}

.mdi-format-pilcrow::before {
  content: "\F06D8";
}

.mdi-format-quote-close::before {
  content: "\F027E";
}

.mdi-format-quote-close-outline::before {
  content: "\F11A8";
}

.mdi-format-quote-open::before {
  content: "\F0757";
}

.mdi-format-quote-open-outline::before {
  content: "\F11A7";
}

.mdi-format-rotate-90::before {
  content: "\F06AA";
}

.mdi-format-section::before {
  content: "\F069F";
}

.mdi-format-size::before {
  content: "\F027F";
}

.mdi-format-strikethrough::before {
  content: "\F0280";
}

.mdi-format-strikethrough-variant::before {
  content: "\F0281";
}

.mdi-format-subscript::before {
  content: "\F0282";
}

.mdi-format-superscript::before {
  content: "\F0283";
}

.mdi-format-text::before {
  content: "\F0284";
}

.mdi-format-text-rotation-angle-down::before {
  content: "\F0FBB";
}

.mdi-format-text-rotation-angle-up::before {
  content: "\F0FBC";
}

.mdi-format-text-rotation-down::before {
  content: "\F0D73";
}

.mdi-format-text-rotation-down-vertical::before {
  content: "\F0FBD";
}

.mdi-format-text-rotation-none::before {
  content: "\F0D74";
}

.mdi-format-text-rotation-up::before {
  content: "\F0FBE";
}

.mdi-format-text-rotation-vertical::before {
  content: "\F0FBF";
}

.mdi-format-text-variant::before {
  content: "\F0E32";
}

.mdi-format-text-variant-outline::before {
  content: "\F150F";
}

.mdi-format-text-wrapping-clip::before {
  content: "\F0D0E";
}

.mdi-format-text-wrapping-overflow::before {
  content: "\F0D0F";
}

.mdi-format-text-wrapping-wrap::before {
  content: "\F0D10";
}

.mdi-format-textbox::before {
  content: "\F0D11";
}

.mdi-format-textdirection-l-to-r::before {
  content: "\F0285";
}

.mdi-format-textdirection-r-to-l::before {
  content: "\F0286";
}

.mdi-format-title::before {
  content: "\F05F4";
}

.mdi-format-underline::before {
  content: "\F0287";
}

.mdi-format-vertical-align-bottom::before {
  content: "\F0621";
}

.mdi-format-vertical-align-center::before {
  content: "\F0622";
}

.mdi-format-vertical-align-top::before {
  content: "\F0623";
}

.mdi-format-wrap-inline::before {
  content: "\F0288";
}

.mdi-format-wrap-square::before {
  content: "\F0289";
}

.mdi-format-wrap-tight::before {
  content: "\F028A";
}

.mdi-format-wrap-top-bottom::before {
  content: "\F028B";
}

.mdi-forum::before {
  content: "\F028C";
}

.mdi-forum-outline::before {
  content: "\F0822";
}

.mdi-forward::before {
  content: "\F028D";
}

.mdi-forwardburger::before {
  content: "\F0D75";
}

.mdi-fountain::before {
  content: "\F096B";
}

.mdi-fountain-pen::before {
  content: "\F0D12";
}

.mdi-fountain-pen-tip::before {
  content: "\F0D13";
}

.mdi-freebsd::before {
  content: "\F08E0";
}

.mdi-frequently-asked-questions::before {
  content: "\F0EB4";
}

.mdi-fridge::before {
  content: "\F0290";
}

.mdi-fridge-alert::before {
  content: "\F11B1";
}

.mdi-fridge-alert-outline::before {
  content: "\F11B2";
}

.mdi-fridge-bottom::before {
  content: "\F0292";
}

.mdi-fridge-off::before {
  content: "\F11AF";
}

.mdi-fridge-off-outline::before {
  content: "\F11B0";
}

.mdi-fridge-outline::before {
  content: "\F028F";
}

.mdi-fridge-top::before {
  content: "\F0291";
}

.mdi-fruit-cherries::before {
  content: "\F1042";
}

.mdi-fruit-cherries-off::before {
  content: "\F13F8";
}

.mdi-fruit-citrus::before {
  content: "\F1043";
}

.mdi-fruit-citrus-off::before {
  content: "\F13F9";
}

.mdi-fruit-grapes::before {
  content: "\F1044";
}

.mdi-fruit-grapes-outline::before {
  content: "\F1045";
}

.mdi-fruit-pineapple::before {
  content: "\F1046";
}

.mdi-fruit-watermelon::before {
  content: "\F1047";
}

.mdi-fuel::before {
  content: "\F07CA";
}

.mdi-fullscreen::before {
  content: "\F0293";
}

.mdi-fullscreen-exit::before {
  content: "\F0294";
}

.mdi-function::before {
  content: "\F0295";
}

.mdi-function-variant::before {
  content: "\F0871";
}

.mdi-furigana-horizontal::before {
  content: "\F1081";
}

.mdi-furigana-vertical::before {
  content: "\F1082";
}

.mdi-fuse::before {
  content: "\F0C85";
}

.mdi-fuse-alert::before {
  content: "\F142D";
}

.mdi-fuse-blade::before {
  content: "\F0C86";
}

.mdi-fuse-off::before {
  content: "\F142C";
}

.mdi-gamepad::before {
  content: "\F0296";
}

.mdi-gamepad-circle::before {
  content: "\F0E33";
}

.mdi-gamepad-circle-down::before {
  content: "\F0E34";
}

.mdi-gamepad-circle-left::before {
  content: "\F0E35";
}

.mdi-gamepad-circle-outline::before {
  content: "\F0E36";
}

.mdi-gamepad-circle-right::before {
  content: "\F0E37";
}

.mdi-gamepad-circle-up::before {
  content: "\F0E38";
}

.mdi-gamepad-down::before {
  content: "\F0E39";
}

.mdi-gamepad-left::before {
  content: "\F0E3A";
}

.mdi-gamepad-right::before {
  content: "\F0E3B";
}

.mdi-gamepad-round::before {
  content: "\F0E3C";
}

.mdi-gamepad-round-down::before {
  content: "\F0E3D";
}

.mdi-gamepad-round-left::before {
  content: "\F0E3E";
}

.mdi-gamepad-round-outline::before {
  content: "\F0E3F";
}

.mdi-gamepad-round-right::before {
  content: "\F0E40";
}

.mdi-gamepad-round-up::before {
  content: "\F0E41";
}

.mdi-gamepad-square::before {
  content: "\F0EB5";
}

.mdi-gamepad-square-outline::before {
  content: "\F0EB6";
}

.mdi-gamepad-up::before {
  content: "\F0E42";
}

.mdi-gamepad-variant::before {
  content: "\F0297";
}

.mdi-gamepad-variant-outline::before {
  content: "\F0EB7";
}

.mdi-gamma::before {
  content: "\F10EE";
}

.mdi-gantry-crane::before {
  content: "\F0DD1";
}

.mdi-garage::before {
  content: "\F06D9";
}

.mdi-garage-alert::before {
  content: "\F0872";
}

.mdi-garage-alert-variant::before {
  content: "\F12D5";
}

.mdi-garage-open::before {
  content: "\F06DA";
}

.mdi-garage-open-variant::before {
  content: "\F12D4";
}

.mdi-garage-variant::before {
  content: "\F12D3";
}

.mdi-gas-cylinder::before {
  content: "\F0647";
}

.mdi-gas-station::before {
  content: "\F0298";
}

.mdi-gas-station-off::before {
  content: "\F1409";
}

.mdi-gas-station-off-outline::before {
  content: "\F140A";
}

.mdi-gas-station-outline::before {
  content: "\F0EB8";
}

.mdi-gate::before {
  content: "\F0299";
}

.mdi-gate-and::before {
  content: "\F08E1";
}

.mdi-gate-arrow-right::before {
  content: "\F1169";
}

.mdi-gate-nand::before {
  content: "\F08E2";
}

.mdi-gate-nor::before {
  content: "\F08E3";
}

.mdi-gate-not::before {
  content: "\F08E4";
}

.mdi-gate-open::before {
  content: "\F116A";
}

.mdi-gate-or::before {
  content: "\F08E5";
}

.mdi-gate-xnor::before {
  content: "\F08E6";
}

.mdi-gate-xor::before {
  content: "\F08E7";
}

.mdi-gatsby::before {
  content: "\F0E43";
}

.mdi-gauge::before {
  content: "\F029A";
}

.mdi-gauge-empty::before {
  content: "\F0873";
}

.mdi-gauge-full::before {
  content: "\F0874";
}

.mdi-gauge-low::before {
  content: "\F0875";
}

.mdi-gavel::before {
  content: "\F029B";
}

.mdi-gender-female::before {
  content: "\F029C";
}

.mdi-gender-male::before {
  content: "\F029D";
}

.mdi-gender-male-female::before {
  content: "\F029E";
}

.mdi-gender-male-female-variant::before {
  content: "\F113F";
}

.mdi-gender-non-binary::before {
  content: "\F1140";
}

.mdi-gender-transgender::before {
  content: "\F029F";
}

.mdi-gentoo::before {
  content: "\F08E8";
}

.mdi-gesture::before {
  content: "\F07CB";
}

.mdi-gesture-double-tap::before {
  content: "\F073C";
}

.mdi-gesture-pinch::before {
  content: "\F0ABD";
}

.mdi-gesture-spread::before {
  content: "\F0ABE";
}

.mdi-gesture-swipe::before {
  content: "\F0D76";
}

.mdi-gesture-swipe-down::before {
  content: "\F073D";
}

.mdi-gesture-swipe-horizontal::before {
  content: "\F0ABF";
}

.mdi-gesture-swipe-left::before {
  content: "\F073E";
}

.mdi-gesture-swipe-right::before {
  content: "\F073F";
}

.mdi-gesture-swipe-up::before {
  content: "\F0740";
}

.mdi-gesture-swipe-vertical::before {
  content: "\F0AC0";
}

.mdi-gesture-tap::before {
  content: "\F0741";
}

.mdi-gesture-tap-box::before {
  content: "\F12A9";
}

.mdi-gesture-tap-button::before {
  content: "\F12A8";
}

.mdi-gesture-tap-hold::before {
  content: "\F0D77";
}

.mdi-gesture-two-double-tap::before {
  content: "\F0742";
}

.mdi-gesture-two-tap::before {
  content: "\F0743";
}

.mdi-ghost::before {
  content: "\F02A0";
}

.mdi-ghost-off::before {
  content: "\F09F5";
}

.mdi-gif::before {
  content: "\F0D78";
}

.mdi-gift::before {
  content: "\F0E44";
}

.mdi-gift-outline::before {
  content: "\F02A1";
}

.mdi-git::before {
  content: "\F02A2";
}

.mdi-github::before {
  content: "\F02A4";
}

.mdi-gitlab::before {
  content: "\F0BA0";
}

.mdi-glass-cocktail::before {
  content: "\F0356";
}

.mdi-glass-flute::before {
  content: "\F02A5";
}

.mdi-glass-mug::before {
  content: "\F02A6";
}

.mdi-glass-mug-variant::before {
  content: "\F1116";
}

.mdi-glass-pint-outline::before {
  content: "\F130D";
}

.mdi-glass-stange::before {
  content: "\F02A7";
}

.mdi-glass-tulip::before {
  content: "\F02A8";
}

.mdi-glass-wine::before {
  content: "\F0876";
}

.mdi-glasses::before {
  content: "\F02AA";
}

.mdi-globe-light::before {
  content: "\F12D7";
}

.mdi-globe-model::before {
  content: "\F08E9";
}

.mdi-gmail::before {
  content: "\F02AB";
}

.mdi-gnome::before {
  content: "\F02AC";
}

.mdi-go-kart::before {
  content: "\F0D79";
}

.mdi-go-kart-track::before {
  content: "\F0D7A";
}

.mdi-gog::before {
  content: "\F0BA1";
}

.mdi-gold::before {
  content: "\F124F";
}

.mdi-golf::before {
  content: "\F0823";
}

.mdi-golf-cart::before {
  content: "\F11A4";
}

.mdi-golf-tee::before {
  content: "\F1083";
}

.mdi-gondola::before {
  content: "\F0686";
}

.mdi-goodreads::before {
  content: "\F0D7B";
}

.mdi-google::before {
  content: "\F02AD";
}

.mdi-google-ads::before {
  content: "\F0C87";
}

.mdi-google-analytics::before {
  content: "\F07CC";
}

.mdi-google-assistant::before {
  content: "\F07CD";
}

.mdi-google-cardboard::before {
  content: "\F02AE";
}

.mdi-google-chrome::before {
  content: "\F02AF";
}

.mdi-google-circles::before {
  content: "\F02B0";
}

.mdi-google-circles-communities::before {
  content: "\F02B1";
}

.mdi-google-circles-extended::before {
  content: "\F02B2";
}

.mdi-google-circles-group::before {
  content: "\F02B3";
}

.mdi-google-classroom::before {
  content: "\F02C0";
}

.mdi-google-cloud::before {
  content: "\F11F6";
}

.mdi-google-controller::before {
  content: "\F02B4";
}

.mdi-google-controller-off::before {
  content: "\F02B5";
}

.mdi-google-downasaur::before {
  content: "\F1362";
}

.mdi-google-drive::before {
  content: "\F02B6";
}

.mdi-google-earth::before {
  content: "\F02B7";
}

.mdi-google-fit::before {
  content: "\F096C";
}

.mdi-google-glass::before {
  content: "\F02B8";
}

.mdi-google-hangouts::before {
  content: "\F02C9";
}

.mdi-google-home::before {
  content: "\F0824";
}

.mdi-google-keep::before {
  content: "\F06DC";
}

.mdi-google-lens::before {
  content: "\F09F6";
}

.mdi-google-maps::before {
  content: "\F05F5";
}

.mdi-google-my-business::before {
  content: "\F1048";
}

.mdi-google-nearby::before {
  content: "\F02B9";
}

.mdi-google-photos::before {
  content: "\F06DD";
}

.mdi-google-play::before {
  content: "\F02BC";
}

.mdi-google-plus::before {
  content: "\F02BD";
}

.mdi-google-podcast::before {
  content: "\F0EB9";
}

.mdi-google-spreadsheet::before {
  content: "\F09F7";
}

.mdi-google-street-view::before {
  content: "\F0C88";
}

.mdi-google-translate::before {
  content: "\F02BF";
}

.mdi-gradient::before {
  content: "\F06A0";
}

.mdi-grain::before {
  content: "\F0D7C";
}

.mdi-graph::before {
  content: "\F1049";
}

.mdi-graph-outline::before {
  content: "\F104A";
}

.mdi-graphql::before {
  content: "\F0877";
}

.mdi-grass::before {
  content: "\F1510";
}

.mdi-grave-stone::before {
  content: "\F0BA2";
}

.mdi-grease-pencil::before {
  content: "\F0648";
}

.mdi-greater-than::before {
  content: "\F096D";
}

.mdi-greater-than-or-equal::before {
  content: "\F096E";
}

.mdi-grid::before {
  content: "\F02C1";
}

.mdi-grid-large::before {
  content: "\F0758";
}

.mdi-grid-off::before {
  content: "\F02C2";
}

.mdi-grill::before {
  content: "\F0E45";
}

.mdi-grill-outline::before {
  content: "\F118A";
}

.mdi-group::before {
  content: "\F02C3";
}

.mdi-guitar-acoustic::before {
  content: "\F0771";
}

.mdi-guitar-electric::before {
  content: "\F02C4";
}

.mdi-guitar-pick::before {
  content: "\F02C5";
}

.mdi-guitar-pick-outline::before {
  content: "\F02C6";
}

.mdi-guy-fawkes-mask::before {
  content: "\F0825";
}

.mdi-hail::before {
  content: "\F0AC1";
}

.mdi-hair-dryer::before {
  content: "\F10EF";
}

.mdi-hair-dryer-outline::before {
  content: "\F10F0";
}

.mdi-halloween::before {
  content: "\F0BA3";
}

.mdi-hamburger::before {
  content: "\F0685";
}

.mdi-hammer::before {
  content: "\F08EA";
}

.mdi-hammer-screwdriver::before {
  content: "\F1322";
}

.mdi-hammer-wrench::before {
  content: "\F1323";
}

.mdi-hand::before {
  content: "\F0A4F";
}

.mdi-hand-heart::before {
  content: "\F10F1";
}

.mdi-hand-left::before {
  content: "\F0E46";
}

.mdi-hand-okay::before {
  content: "\F0A50";
}

.mdi-hand-peace::before {
  content: "\F0A51";
}

.mdi-hand-peace-variant::before {
  content: "\F0A52";
}

.mdi-hand-pointing-down::before {
  content: "\F0A53";
}

.mdi-hand-pointing-left::before {
  content: "\F0A54";
}

.mdi-hand-pointing-right::before {
  content: "\F02C7";
}

.mdi-hand-pointing-up::before {
  content: "\F0A55";
}

.mdi-hand-right::before {
  content: "\F0E47";
}

.mdi-hand-saw::before {
  content: "\F0E48";
}

.mdi-hand-water::before {
  content: "\F139F";
}

.mdi-handball::before {
  content: "\F0F53";
}

.mdi-handcuffs::before {
  content: "\F113E";
}

.mdi-handshake::before {
  content: "\F1218";
}

.mdi-hanger::before {
  content: "\F02C8";
}

.mdi-hard-hat::before {
  content: "\F096F";
}

.mdi-harddisk::before {
  content: "\F02CA";
}

.mdi-harddisk-plus::before {
  content: "\F104B";
}

.mdi-harddisk-remove::before {
  content: "\F104C";
}

.mdi-hat-fedora::before {
  content: "\F0BA4";
}

.mdi-hazard-lights::before {
  content: "\F0C89";
}

.mdi-hdr::before {
  content: "\F0D7D";
}

.mdi-hdr-off::before {
  content: "\F0D7E";
}

.mdi-head::before {
  content: "\F135E";
}

.mdi-head-alert::before {
  content: "\F1338";
}

.mdi-head-alert-outline::before {
  content: "\F1339";
}

.mdi-head-check::before {
  content: "\F133A";
}

.mdi-head-check-outline::before {
  content: "\F133B";
}

.mdi-head-cog::before {
  content: "\F133C";
}

.mdi-head-cog-outline::before {
  content: "\F133D";
}

.mdi-head-dots-horizontal::before {
  content: "\F133E";
}

.mdi-head-dots-horizontal-outline::before {
  content: "\F133F";
}

.mdi-head-flash::before {
  content: "\F1340";
}

.mdi-head-flash-outline::before {
  content: "\F1341";
}

.mdi-head-heart::before {
  content: "\F1342";
}

.mdi-head-heart-outline::before {
  content: "\F1343";
}

.mdi-head-lightbulb::before {
  content: "\F1344";
}

.mdi-head-lightbulb-outline::before {
  content: "\F1345";
}

.mdi-head-minus::before {
  content: "\F1346";
}

.mdi-head-minus-outline::before {
  content: "\F1347";
}

.mdi-head-outline::before {
  content: "\F135F";
}

.mdi-head-plus::before {
  content: "\F1348";
}

.mdi-head-plus-outline::before {
  content: "\F1349";
}

.mdi-head-question::before {
  content: "\F134A";
}

.mdi-head-question-outline::before {
  content: "\F134B";
}

.mdi-head-remove::before {
  content: "\F134C";
}

.mdi-head-remove-outline::before {
  content: "\F134D";
}

.mdi-head-snowflake::before {
  content: "\F134E";
}

.mdi-head-snowflake-outline::before {
  content: "\F134F";
}

.mdi-head-sync::before {
  content: "\F1350";
}

.mdi-head-sync-outline::before {
  content: "\F1351";
}

.mdi-headphones::before {
  content: "\F02CB";
}

.mdi-headphones-bluetooth::before {
  content: "\F0970";
}

.mdi-headphones-box::before {
  content: "\F02CC";
}

.mdi-headphones-off::before {
  content: "\F07CE";
}

.mdi-headphones-settings::before {
  content: "\F02CD";
}

.mdi-headset::before {
  content: "\F02CE";
}

.mdi-headset-dock::before {
  content: "\F02CF";
}

.mdi-headset-off::before {
  content: "\F02D0";
}

.mdi-heart::before {
  content: "\F02D1";
}

.mdi-heart-box::before {
  content: "\F02D2";
}

.mdi-heart-box-outline::before {
  content: "\F02D3";
}

.mdi-heart-broken::before {
  content: "\F02D4";
}

.mdi-heart-broken-outline::before {
  content: "\F0D14";
}

.mdi-heart-circle::before {
  content: "\F0971";
}

.mdi-heart-circle-outline::before {
  content: "\F0972";
}

.mdi-heart-flash::before {
  content: "\F0EF9";
}

.mdi-heart-half::before {
  content: "\F06DF";
}

.mdi-heart-half-full::before {
  content: "\F06DE";
}

.mdi-heart-half-outline::before {
  content: "\F06E0";
}

.mdi-heart-minus::before {
  content: "\F142F";
}

.mdi-heart-minus-outline::before {
  content: "\F1432";
}

.mdi-heart-multiple::before {
  content: "\F0A56";
}

.mdi-heart-multiple-outline::before {
  content: "\F0A57";
}

.mdi-heart-off::before {
  content: "\F0759";
}

.mdi-heart-off-outline::before {
  content: "\F1434";
}

.mdi-heart-outline::before {
  content: "\F02D5";
}

.mdi-heart-plus::before {
  content: "\F142E";
}

.mdi-heart-plus-outline::before {
  content: "\F1431";
}

.mdi-heart-pulse::before {
  content: "\F05F6";
}

.mdi-heart-remove::before {
  content: "\F1430";
}

.mdi-heart-remove-outline::before {
  content: "\F1433";
}

.mdi-helicopter::before {
  content: "\F0AC2";
}

.mdi-help::before {
  content: "\F02D6";
}

.mdi-help-box::before {
  content: "\F078B";
}

.mdi-help-circle::before {
  content: "\F02D7";
}

.mdi-help-circle-outline::before {
  content: "\F0625";
}

.mdi-help-network::before {
  content: "\F06F5";
}

.mdi-help-network-outline::before {
  content: "\F0C8A";
}

.mdi-help-rhombus::before {
  content: "\F0BA5";
}

.mdi-help-rhombus-outline::before {
  content: "\F0BA6";
}

.mdi-hexadecimal::before {
  content: "\F12A7";
}

.mdi-hexagon::before {
  content: "\F02D8";
}

.mdi-hexagon-multiple::before {
  content: "\F06E1";
}

.mdi-hexagon-multiple-outline::before {
  content: "\F10F2";
}

.mdi-hexagon-outline::before {
  content: "\F02D9";
}

.mdi-hexagon-slice-1::before {
  content: "\F0AC3";
}

.mdi-hexagon-slice-2::before {
  content: "\F0AC4";
}

.mdi-hexagon-slice-3::before {
  content: "\F0AC5";
}

.mdi-hexagon-slice-4::before {
  content: "\F0AC6";
}

.mdi-hexagon-slice-5::before {
  content: "\F0AC7";
}

.mdi-hexagon-slice-6::before {
  content: "\F0AC8";
}

.mdi-hexagram::before {
  content: "\F0AC9";
}

.mdi-hexagram-outline::before {
  content: "\F0ACA";
}

.mdi-high-definition::before {
  content: "\F07CF";
}

.mdi-high-definition-box::before {
  content: "\F0878";
}

.mdi-highway::before {
  content: "\F05F7";
}

.mdi-hiking::before {
  content: "\F0D7F";
}

.mdi-hinduism::before {
  content: "\F0973";
}

.mdi-history::before {
  content: "\F02DA";
}

.mdi-hockey-puck::before {
  content: "\F0879";
}

.mdi-hockey-sticks::before {
  content: "\F087A";
}

.mdi-hololens::before {
  content: "\F02DB";
}

.mdi-home::before {
  content: "\F02DC";
}

.mdi-home-account::before {
  content: "\F0826";
}

.mdi-home-alert::before {
  content: "\F087B";
}

.mdi-home-analytics::before {
  content: "\F0EBA";
}

.mdi-home-assistant::before {
  content: "\F07D0";
}

.mdi-home-automation::before {
  content: "\F07D1";
}

.mdi-home-circle::before {
  content: "\F07D2";
}

.mdi-home-circle-outline::before {
  content: "\F104D";
}

.mdi-home-city::before {
  content: "\F0D15";
}

.mdi-home-city-outline::before {
  content: "\F0D16";
}

.mdi-home-currency-usd::before {
  content: "\F08AF";
}

.mdi-home-edit::before {
  content: "\F1159";
}

.mdi-home-edit-outline::before {
  content: "\F115A";
}

.mdi-home-export-outline::before {
  content: "\F0F9B";
}

.mdi-home-flood::before {
  content: "\F0EFA";
}

.mdi-home-floor-0::before {
  content: "\F0DD2";
}

.mdi-home-floor-1::before {
  content: "\F0D80";
}

.mdi-home-floor-2::before {
  content: "\F0D81";
}

.mdi-home-floor-3::before {
  content: "\F0D82";
}

.mdi-home-floor-a::before {
  content: "\F0D83";
}

.mdi-home-floor-b::before {
  content: "\F0D84";
}

.mdi-home-floor-g::before {
  content: "\F0D85";
}

.mdi-home-floor-l::before {
  content: "\F0D86";
}

.mdi-home-floor-negative-1::before {
  content: "\F0DD3";
}

.mdi-home-group::before {
  content: "\F0DD4";
}

.mdi-home-heart::before {
  content: "\F0827";
}

.mdi-home-import-outline::before {
  content: "\F0F9C";
}

.mdi-home-lightbulb::before {
  content: "\F1251";
}

.mdi-home-lightbulb-outline::before {
  content: "\F1252";
}

.mdi-home-lock::before {
  content: "\F08EB";
}

.mdi-home-lock-open::before {
  content: "\F08EC";
}

.mdi-home-map-marker::before {
  content: "\F05F8";
}

.mdi-home-minus::before {
  content: "\F0974";
}

.mdi-home-minus-outline::before {
  content: "\F13D5";
}

.mdi-home-modern::before {
  content: "\F02DD";
}

.mdi-home-outline::before {
  content: "\F06A1";
}

.mdi-home-plus::before {
  content: "\F0975";
}

.mdi-home-plus-outline::before {
  content: "\F13D6";
}

.mdi-home-remove::before {
  content: "\F1247";
}

.mdi-home-remove-outline::before {
  content: "\F13D7";
}

.mdi-home-roof::before {
  content: "\F112B";
}

.mdi-home-search::before {
  content: "\F13B0";
}

.mdi-home-search-outline::before {
  content: "\F13B1";
}

.mdi-home-thermometer::before {
  content: "\F0F54";
}

.mdi-home-thermometer-outline::before {
  content: "\F0F55";
}

.mdi-home-variant::before {
  content: "\F02DE";
}

.mdi-home-variant-outline::before {
  content: "\F0BA7";
}

.mdi-hook::before {
  content: "\F06E2";
}

.mdi-hook-off::before {
  content: "\F06E3";
}

.mdi-hops::before {
  content: "\F02DF";
}

.mdi-horizontal-rotate-clockwise::before {
  content: "\F10F3";
}

.mdi-horizontal-rotate-counterclockwise::before {
  content: "\F10F4";
}

.mdi-horseshoe::before {
  content: "\F0A58";
}

.mdi-hospital::before {
  content: "\F0FF6";
}

.mdi-hospital-box::before {
  content: "\F02E0";
}

.mdi-hospital-box-outline::before {
  content: "\F0FF7";
}

.mdi-hospital-building::before {
  content: "\F02E1";
}

.mdi-hospital-marker::before {
  content: "\F02E2";
}

.mdi-hot-tub::before {
  content: "\F0828";
}

.mdi-hours-24::before {
  content: "\F1478";
}

.mdi-hubspot::before {
  content: "\F0D17";
}

.mdi-hulu::before {
  content: "\F0829";
}

.mdi-human::before {
  content: "\F02E6";
}

.mdi-human-baby-changing-table::before {
  content: "\F138B";
}

.mdi-human-child::before {
  content: "\F02E7";
}

.mdi-human-edit::before {
  content: "\F14E8";
}

.mdi-human-female::before {
  content: "\F0649";
}

.mdi-human-female-boy::before {
  content: "\F0A59";
}

.mdi-human-female-female::before {
  content: "\F0A5A";
}

.mdi-human-female-girl::before {
  content: "\F0A5B";
}

.mdi-human-greeting::before {
  content: "\F064A";
}

.mdi-human-handsdown::before {
  content: "\F064B";
}

.mdi-human-handsup::before {
  content: "\F064C";
}

.mdi-human-male::before {
  content: "\F064D";
}

.mdi-human-male-boy::before {
  content: "\F0A5C";
}

.mdi-human-male-child::before {
  content: "\F138C";
}

.mdi-human-male-female::before {
  content: "\F02E8";
}

.mdi-human-male-girl::before {
  content: "\F0A5D";
}

.mdi-human-male-height::before {
  content: "\F0EFB";
}

.mdi-human-male-height-variant::before {
  content: "\F0EFC";
}

.mdi-human-male-male::before {
  content: "\F0A5E";
}

.mdi-human-pregnant::before {
  content: "\F05CF";
}

.mdi-human-wheelchair::before {
  content: "\F138D";
}

.mdi-humble-bundle::before {
  content: "\F0744";
}

.mdi-hvac::before {
  content: "\F1352";
}

.mdi-hydraulic-oil-level::before {
  content: "\F1324";
}

.mdi-hydraulic-oil-temperature::before {
  content: "\F1325";
}

.mdi-hydro-power::before {
  content: "\F12E5";
}

.mdi-ice-cream::before {
  content: "\F082A";
}

.mdi-ice-cream-off::before {
  content: "\F0E52";
}

.mdi-ice-pop::before {
  content: "\F0EFD";
}

.mdi-id-card::before {
  content: "\F0FC0";
}

.mdi-identifier::before {
  content: "\F0EFE";
}

.mdi-ideogram-cjk::before {
  content: "\F1331";
}

.mdi-ideogram-cjk-variant::before {
  content: "\F1332";
}

.mdi-iframe::before {
  content: "\F0C8B";
}

.mdi-iframe-array::before {
  content: "\F10F5";
}

.mdi-iframe-array-outline::before {
  content: "\F10F6";
}

.mdi-iframe-braces::before {
  content: "\F10F7";
}

.mdi-iframe-braces-outline::before {
  content: "\F10F8";
}

.mdi-iframe-outline::before {
  content: "\F0C8C";
}

.mdi-iframe-parentheses::before {
  content: "\F10F9";
}

.mdi-iframe-parentheses-outline::before {
  content: "\F10FA";
}

.mdi-iframe-variable::before {
  content: "\F10FB";
}

.mdi-iframe-variable-outline::before {
  content: "\F10FC";
}

.mdi-image::before {
  content: "\F02E9";
}

.mdi-image-album::before {
  content: "\F02EA";
}

.mdi-image-area::before {
  content: "\F02EB";
}

.mdi-image-area-close::before {
  content: "\F02EC";
}

.mdi-image-auto-adjust::before {
  content: "\F0FC1";
}

.mdi-image-broken::before {
  content: "\F02ED";
}

.mdi-image-broken-variant::before {
  content: "\F02EE";
}

.mdi-image-edit::before {
  content: "\F11E3";
}

.mdi-image-edit-outline::before {
  content: "\F11E4";
}

.mdi-image-filter-black-white::before {
  content: "\F02F0";
}

.mdi-image-filter-center-focus::before {
  content: "\F02F1";
}

.mdi-image-filter-center-focus-strong::before {
  content: "\F0EFF";
}

.mdi-image-filter-center-focus-strong-outline::before {
  content: "\F0F00";
}

.mdi-image-filter-center-focus-weak::before {
  content: "\F02F2";
}

.mdi-image-filter-drama::before {
  content: "\F02F3";
}

.mdi-image-filter-frames::before {
  content: "\F02F4";
}

.mdi-image-filter-hdr::before {
  content: "\F02F5";
}

.mdi-image-filter-none::before {
  content: "\F02F6";
}

.mdi-image-filter-tilt-shift::before {
  content: "\F02F7";
}

.mdi-image-filter-vintage::before {
  content: "\F02F8";
}

.mdi-image-frame::before {
  content: "\F0E49";
}

.mdi-image-minus::before {
  content: "\F1419";
}

.mdi-image-move::before {
  content: "\F09F8";
}

.mdi-image-multiple::before {
  content: "\F02F9";
}

.mdi-image-multiple-outline::before {
  content: "\F02EF";
}

.mdi-image-off::before {
  content: "\F082B";
}

.mdi-image-off-outline::before {
  content: "\F11D1";
}

.mdi-image-outline::before {
  content: "\F0976";
}

.mdi-image-plus::before {
  content: "\F087C";
}

.mdi-image-remove::before {
  content: "\F1418";
}

.mdi-image-search::before {
  content: "\F0977";
}

.mdi-image-search-outline::before {
  content: "\F0978";
}

.mdi-image-size-select-actual::before {
  content: "\F0C8D";
}

.mdi-image-size-select-large::before {
  content: "\F0C8E";
}

.mdi-image-size-select-small::before {
  content: "\F0C8F";
}

.mdi-import::before {
  content: "\F02FA";
}

.mdi-inbox::before {
  content: "\F0687";
}

.mdi-inbox-arrow-down::before {
  content: "\F02FB";
}

.mdi-inbox-arrow-down-outline::before {
  content: "\F1270";
}

.mdi-inbox-arrow-up::before {
  content: "\F03D1";
}

.mdi-inbox-arrow-up-outline::before {
  content: "\F1271";
}

.mdi-inbox-full::before {
  content: "\F1272";
}

.mdi-inbox-full-outline::before {
  content: "\F1273";
}

.mdi-inbox-multiple::before {
  content: "\F08B0";
}

.mdi-inbox-multiple-outline::before {
  content: "\F0BA8";
}

.mdi-inbox-outline::before {
  content: "\F1274";
}

.mdi-incognito::before {
  content: "\F05F9";
}

.mdi-incognito-circle::before {
  content: "\F1421";
}

.mdi-incognito-circle-off::before {
  content: "\F1422";
}

.mdi-incognito-off::before {
  content: "\F0075";
}

.mdi-infinity::before {
  content: "\F06E4";
}

.mdi-information::before {
  content: "\F02FC";
}

.mdi-information-outline::before {
  content: "\F02FD";
}

.mdi-information-variant::before {
  content: "\F064E";
}

.mdi-instagram::before {
  content: "\F02FE";
}

.mdi-instrument-triangle::before {
  content: "\F104E";
}

.mdi-invert-colors::before {
  content: "\F0301";
}

.mdi-invert-colors-off::before {
  content: "\F0E4A";
}

.mdi-iobroker::before {
  content: "\F12E8";
}

.mdi-ip::before {
  content: "\F0A5F";
}

.mdi-ip-network::before {
  content: "\F0A60";
}

.mdi-ip-network-outline::before {
  content: "\F0C90";
}

.mdi-ipod::before {
  content: "\F0C91";
}

.mdi-islam::before {
  content: "\F0979";
}

.mdi-island::before {
  content: "\F104F";
}

.mdi-iv-bag::before {
  content: "\F10B9";
}

.mdi-jabber::before {
  content: "\F0DD5";
}

.mdi-jeepney::before {
  content: "\F0302";
}

.mdi-jellyfish::before {
  content: "\F0F01";
}

.mdi-jellyfish-outline::before {
  content: "\F0F02";
}

.mdi-jira::before {
  content: "\F0303";
}

.mdi-jquery::before {
  content: "\F087D";
}

.mdi-jsfiddle::before {
  content: "\F0304";
}

.mdi-judaism::before {
  content: "\F097A";
}

.mdi-jump-rope::before {
  content: "\F12FF";
}

.mdi-kabaddi::before {
  content: "\F0D87";
}

.mdi-karate::before {
  content: "\F082C";
}

.mdi-keg::before {
  content: "\F0305";
}

.mdi-kettle::before {
  content: "\F05FA";
}

.mdi-kettle-alert::before {
  content: "\F1317";
}

.mdi-kettle-alert-outline::before {
  content: "\F1318";
}

.mdi-kettle-off::before {
  content: "\F131B";
}

.mdi-kettle-off-outline::before {
  content: "\F131C";
}

.mdi-kettle-outline::before {
  content: "\F0F56";
}

.mdi-kettle-steam::before {
  content: "\F1319";
}

.mdi-kettle-steam-outline::before {
  content: "\F131A";
}

.mdi-kettlebell::before {
  content: "\F1300";
}

.mdi-key::before {
  content: "\F0306";
}

.mdi-key-arrow-right::before {
  content: "\F1312";
}

.mdi-key-change::before {
  content: "\F0307";
}

.mdi-key-link::before {
  content: "\F119F";
}

.mdi-key-minus::before {
  content: "\F0308";
}

.mdi-key-outline::before {
  content: "\F0DD6";
}

.mdi-key-plus::before {
  content: "\F0309";
}

.mdi-key-remove::before {
  content: "\F030A";
}

.mdi-key-star::before {
  content: "\F119E";
}

.mdi-key-variant::before {
  content: "\F030B";
}

.mdi-key-wireless::before {
  content: "\F0FC2";
}

.mdi-keyboard::before {
  content: "\F030C";
}

.mdi-keyboard-backspace::before {
  content: "\F030D";
}

.mdi-keyboard-caps::before {
  content: "\F030E";
}

.mdi-keyboard-close::before {
  content: "\F030F";
}

.mdi-keyboard-esc::before {
  content: "\F12B7";
}

.mdi-keyboard-f1::before {
  content: "\F12AB";
}

.mdi-keyboard-f10::before {
  content: "\F12B4";
}

.mdi-keyboard-f11::before {
  content: "\F12B5";
}

.mdi-keyboard-f12::before {
  content: "\F12B6";
}

.mdi-keyboard-f2::before {
  content: "\F12AC";
}

.mdi-keyboard-f3::before {
  content: "\F12AD";
}

.mdi-keyboard-f4::before {
  content: "\F12AE";
}

.mdi-keyboard-f5::before {
  content: "\F12AF";
}

.mdi-keyboard-f6::before {
  content: "\F12B0";
}

.mdi-keyboard-f7::before {
  content: "\F12B1";
}

.mdi-keyboard-f8::before {
  content: "\F12B2";
}

.mdi-keyboard-f9::before {
  content: "\F12B3";
}

.mdi-keyboard-off::before {
  content: "\F0310";
}

.mdi-keyboard-off-outline::before {
  content: "\F0E4B";
}

.mdi-keyboard-outline::before {
  content: "\F097B";
}

.mdi-keyboard-return::before {
  content: "\F0311";
}

.mdi-keyboard-settings::before {
  content: "\F09F9";
}

.mdi-keyboard-settings-outline::before {
  content: "\F09FA";
}

.mdi-keyboard-space::before {
  content: "\F1050";
}

.mdi-keyboard-tab::before {
  content: "\F0312";
}

.mdi-keyboard-variant::before {
  content: "\F0313";
}

.mdi-khanda::before {
  content: "\F10FD";
}

.mdi-kickstarter::before {
  content: "\F0745";
}

.mdi-klingon::before {
  content: "\F135B";
}

.mdi-knife::before {
  content: "\F09FB";
}

.mdi-knife-military::before {
  content: "\F09FC";
}

.mdi-kodi::before {
  content: "\F0314";
}

.mdi-kubernetes::before {
  content: "\F10FE";
}

.mdi-label::before {
  content: "\F0315";
}

.mdi-label-multiple::before {
  content: "\F1375";
}

.mdi-label-multiple-outline::before {
  content: "\F1376";
}

.mdi-label-off::before {
  content: "\F0ACB";
}

.mdi-label-off-outline::before {
  content: "\F0ACC";
}

.mdi-label-outline::before {
  content: "\F0316";
}

.mdi-label-percent::before {
  content: "\F12EA";
}

.mdi-label-percent-outline::before {
  content: "\F12EB";
}

.mdi-label-variant::before {
  content: "\F0ACD";
}

.mdi-label-variant-outline::before {
  content: "\F0ACE";
}

.mdi-ladybug::before {
  content: "\F082D";
}

.mdi-lambda::before {
  content: "\F0627";
}

.mdi-lamp::before {
  content: "\F06B5";
}

.mdi-lan::before {
  content: "\F0317";
}

.mdi-lan-check::before {
  content: "\F12AA";
}

.mdi-lan-connect::before {
  content: "\F0318";
}

.mdi-lan-disconnect::before {
  content: "\F0319";
}

.mdi-lan-pending::before {
  content: "\F031A";
}

.mdi-language-c::before {
  content: "\F0671";
}

.mdi-language-cpp::before {
  content: "\F0672";
}

.mdi-language-csharp::before {
  content: "\F031B";
}

.mdi-language-css3::before {
  content: "\F031C";
}

.mdi-language-fortran::before {
  content: "\F121A";
}

.mdi-language-go::before {
  content: "\F07D3";
}

.mdi-language-haskell::before {
  content: "\F0C92";
}

.mdi-language-html5::before {
  content: "\F031D";
}

.mdi-language-java::before {
  content: "\F0B37";
}

.mdi-language-javascript::before {
  content: "\F031E";
}

.mdi-language-kotlin::before {
  content: "\F1219";
}

.mdi-language-lua::before {
  content: "\F08B1";
}

.mdi-language-markdown::before {
  content: "\F0354";
}

.mdi-language-markdown-outline::before {
  content: "\F0F5B";
}

.mdi-language-php::before {
  content: "\F031F";
}

.mdi-language-python::before {
  content: "\F0320";
}

.mdi-language-r::before {
  content: "\F07D4";
}

.mdi-language-ruby::before {
  content: "\F0D2D";
}

.mdi-language-ruby-on-rails::before {
  content: "\F0ACF";
}

.mdi-language-swift::before {
  content: "\F06E5";
}

.mdi-language-typescript::before {
  content: "\F06E6";
}

.mdi-language-xaml::before {
  content: "\F0673";
}

.mdi-laptop::before {
  content: "\F0322";
}

.mdi-laptop-chromebook::before {
  content: "\F0323";
}

.mdi-laptop-mac::before {
  content: "\F0324";
}

.mdi-laptop-off::before {
  content: "\F06E7";
}

.mdi-laptop-windows::before {
  content: "\F0325";
}

.mdi-laravel::before {
  content: "\F0AD0";
}

.mdi-laser-pointer::before {
  content: "\F1484";
}

.mdi-lasso::before {
  content: "\F0F03";
}

.mdi-lastpass::before {
  content: "\F0446";
}

.mdi-latitude::before {
  content: "\F0F57";
}

.mdi-launch::before {
  content: "\F0327";
}

.mdi-lava-lamp::before {
  content: "\F07D5";
}

.mdi-layers::before {
  content: "\F0328";
}

.mdi-layers-minus::before {
  content: "\F0E4C";
}

.mdi-layers-off::before {
  content: "\F0329";
}

.mdi-layers-off-outline::before {
  content: "\F09FD";
}

.mdi-layers-outline::before {
  content: "\F09FE";
}

.mdi-layers-plus::before {
  content: "\F0E4D";
}

.mdi-layers-remove::before {
  content: "\F0E4E";
}

.mdi-layers-search::before {
  content: "\F1206";
}

.mdi-layers-search-outline::before {
  content: "\F1207";
}

.mdi-layers-triple::before {
  content: "\F0F58";
}

.mdi-layers-triple-outline::before {
  content: "\F0F59";
}

.mdi-lead-pencil::before {
  content: "\F064F";
}

.mdi-leaf::before {
  content: "\F032A";
}

.mdi-leaf-maple::before {
  content: "\F0C93";
}

.mdi-leaf-maple-off::before {
  content: "\F12DA";
}

.mdi-leaf-off::before {
  content: "\F12D9";
}

.mdi-leak::before {
  content: "\F0DD7";
}

.mdi-leak-off::before {
  content: "\F0DD8";
}

.mdi-led-off::before {
  content: "\F032B";
}

.mdi-led-on::before {
  content: "\F032C";
}

.mdi-led-outline::before {
  content: "\F032D";
}

.mdi-led-strip::before {
  content: "\F07D6";
}

.mdi-led-strip-variant::before {
  content: "\F1051";
}

.mdi-led-variant-off::before {
  content: "\F032E";
}

.mdi-led-variant-on::before {
  content: "\F032F";
}

.mdi-led-variant-outline::before {
  content: "\F0330";
}

.mdi-leek::before {
  content: "\F117D";
}

.mdi-less-than::before {
  content: "\F097C";
}

.mdi-less-than-or-equal::before {
  content: "\F097D";
}

.mdi-library::before {
  content: "\F0331";
}

.mdi-library-shelves::before {
  content: "\F0BA9";
}

.mdi-license::before {
  content: "\F0FC3";
}

.mdi-lifebuoy::before {
  content: "\F087E";
}

.mdi-light-switch::before {
  content: "\F097E";
}

.mdi-lightbulb::before {
  content: "\F0335";
}

.mdi-lightbulb-cfl::before {
  content: "\F1208";
}

.mdi-lightbulb-cfl-off::before {
  content: "\F1209";
}

.mdi-lightbulb-cfl-spiral::before {
  content: "\F1275";
}

.mdi-lightbulb-cfl-spiral-off::before {
  content: "\F12C3";
}

.mdi-lightbulb-group::before {
  content: "\F1253";
}

.mdi-lightbulb-group-off::before {
  content: "\F12CD";
}

.mdi-lightbulb-group-off-outline::before {
  content: "\F12CE";
}

.mdi-lightbulb-group-outline::before {
  content: "\F1254";
}

.mdi-lightbulb-multiple::before {
  content: "\F1255";
}

.mdi-lightbulb-multiple-off::before {
  content: "\F12CF";
}

.mdi-lightbulb-multiple-off-outline::before {
  content: "\F12D0";
}

.mdi-lightbulb-multiple-outline::before {
  content: "\F1256";
}

.mdi-lightbulb-off::before {
  content: "\F0E4F";
}

.mdi-lightbulb-off-outline::before {
  content: "\F0E50";
}

.mdi-lightbulb-on::before {
  content: "\F06E8";
}

.mdi-lightbulb-on-outline::before {
  content: "\F06E9";
}

.mdi-lightbulb-outline::before {
  content: "\F0336";
}

.mdi-lighthouse::before {
  content: "\F09FF";
}

.mdi-lighthouse-on::before {
  content: "\F0A00";
}

.mdi-lightning-bolt::before {
  content: "\F140B";
}

.mdi-lightning-bolt-outline::before {
  content: "\F140C";
}

.mdi-lingerie::before {
  content: "\F1476";
}

.mdi-link::before {
  content: "\F0337";
}

.mdi-link-box::before {
  content: "\F0D1A";
}

.mdi-link-box-outline::before {
  content: "\F0D1B";
}

.mdi-link-box-variant::before {
  content: "\F0D1C";
}

.mdi-link-box-variant-outline::before {
  content: "\F0D1D";
}

.mdi-link-lock::before {
  content: "\F10BA";
}

.mdi-link-off::before {
  content: "\F0338";
}

.mdi-link-plus::before {
  content: "\F0C94";
}

.mdi-link-variant::before {
  content: "\F0339";
}

.mdi-link-variant-minus::before {
  content: "\F10FF";
}

.mdi-link-variant-off::before {
  content: "\F033A";
}

.mdi-link-variant-plus::before {
  content: "\F1100";
}

.mdi-link-variant-remove::before {
  content: "\F1101";
}

.mdi-linkedin::before {
  content: "\F033B";
}

.mdi-linux::before {
  content: "\F033D";
}

.mdi-linux-mint::before {
  content: "\F08ED";
}

.mdi-lipstick::before {
  content: "\F13B5";
}

.mdi-litecoin::before {
  content: "\F0A61";
}

.mdi-loading::before {
  content: "\F0772";
}

.mdi-location-enter::before {
  content: "\F0FC4";
}

.mdi-location-exit::before {
  content: "\F0FC5";
}

.mdi-lock::before {
  content: "\F033E";
}

.mdi-lock-alert::before {
  content: "\F08EE";
}

.mdi-lock-check::before {
  content: "\F139A";
}

.mdi-lock-clock::before {
  content: "\F097F";
}

.mdi-lock-open::before {
  content: "\F033F";
}

.mdi-lock-open-alert::before {
  content: "\F139B";
}

.mdi-lock-open-check::before {
  content: "\F139C";
}

.mdi-lock-open-outline::before {
  content: "\F0340";
}

.mdi-lock-open-variant::before {
  content: "\F0FC6";
}

.mdi-lock-open-variant-outline::before {
  content: "\F0FC7";
}

.mdi-lock-outline::before {
  content: "\F0341";
}

.mdi-lock-pattern::before {
  content: "\F06EA";
}

.mdi-lock-plus::before {
  content: "\F05FB";
}

.mdi-lock-question::before {
  content: "\F08EF";
}

.mdi-lock-reset::before {
  content: "\F0773";
}

.mdi-lock-smart::before {
  content: "\F08B2";
}

.mdi-locker::before {
  content: "\F07D7";
}

.mdi-locker-multiple::before {
  content: "\F07D8";
}

.mdi-login::before {
  content: "\F0342";
}

.mdi-login-variant::before {
  content: "\F05FC";
}

.mdi-logout::before {
  content: "\F0343";
}

.mdi-logout-variant::before {
  content: "\F05FD";
}

.mdi-longitude::before {
  content: "\F0F5A";
}

.mdi-looks::before {
  content: "\F0344";
}

.mdi-loupe::before {
  content: "\F0345";
}

.mdi-lumx::before {
  content: "\F0346";
}

.mdi-lungs::before {
  content: "\F1084";
}

.mdi-magnet::before {
  content: "\F0347";
}

.mdi-magnet-on::before {
  content: "\F0348";
}

.mdi-magnify::before {
  content: "\F0349";
}

.mdi-magnify-close::before {
  content: "\F0980";
}

.mdi-magnify-minus::before {
  content: "\F034A";
}

.mdi-magnify-minus-cursor::before {
  content: "\F0A62";
}

.mdi-magnify-minus-outline::before {
  content: "\F06EC";
}

.mdi-magnify-plus::before {
  content: "\F034B";
}

.mdi-magnify-plus-cursor::before {
  content: "\F0A63";
}

.mdi-magnify-plus-outline::before {
  content: "\F06ED";
}

.mdi-magnify-remove-cursor::before {
  content: "\F120C";
}

.mdi-magnify-remove-outline::before {
  content: "\F120D";
}

.mdi-magnify-scan::before {
  content: "\F1276";
}

.mdi-mail::before {
  content: "\F0EBB";
}

.mdi-mailbox::before {
  content: "\F06EE";
}

.mdi-mailbox-open::before {
  content: "\F0D88";
}

.mdi-mailbox-open-outline::before {
  content: "\F0D89";
}

.mdi-mailbox-open-up::before {
  content: "\F0D8A";
}

.mdi-mailbox-open-up-outline::before {
  content: "\F0D8B";
}

.mdi-mailbox-outline::before {
  content: "\F0D8C";
}

.mdi-mailbox-up::before {
  content: "\F0D8D";
}

.mdi-mailbox-up-outline::before {
  content: "\F0D8E";
}

.mdi-map::before {
  content: "\F034D";
}

.mdi-map-check::before {
  content: "\F0EBC";
}

.mdi-map-check-outline::before {
  content: "\F0EBD";
}

.mdi-map-clock::before {
  content: "\F0D1E";
}

.mdi-map-clock-outline::before {
  content: "\F0D1F";
}

.mdi-map-legend::before {
  content: "\F0A01";
}

.mdi-map-marker::before {
  content: "\F034E";
}

.mdi-map-marker-alert::before {
  content: "\F0F05";
}

.mdi-map-marker-alert-outline::before {
  content: "\F0F06";
}

.mdi-map-marker-check::before {
  content: "\F0C95";
}

.mdi-map-marker-check-outline::before {
  content: "\F12FB";
}

.mdi-map-marker-circle::before {
  content: "\F034F";
}

.mdi-map-marker-distance::before {
  content: "\F08F0";
}

.mdi-map-marker-down::before {
  content: "\F1102";
}

.mdi-map-marker-left::before {
  content: "\F12DB";
}

.mdi-map-marker-left-outline::before {
  content: "\F12DD";
}

.mdi-map-marker-minus::before {
  content: "\F0650";
}

.mdi-map-marker-minus-outline::before {
  content: "\F12F9";
}

.mdi-map-marker-multiple::before {
  content: "\F0350";
}

.mdi-map-marker-multiple-outline::before {
  content: "\F1277";
}

.mdi-map-marker-off::before {
  content: "\F0351";
}

.mdi-map-marker-off-outline::before {
  content: "\F12FD";
}

.mdi-map-marker-outline::before {
  content: "\F07D9";
}

.mdi-map-marker-path::before {
  content: "\F0D20";
}

.mdi-map-marker-plus::before {
  content: "\F0651";
}

.mdi-map-marker-plus-outline::before {
  content: "\F12F8";
}

.mdi-map-marker-question::before {
  content: "\F0F07";
}

.mdi-map-marker-question-outline::before {
  content: "\F0F08";
}

.mdi-map-marker-radius::before {
  content: "\F0352";
}

.mdi-map-marker-radius-outline::before {
  content: "\F12FC";
}

.mdi-map-marker-remove::before {
  content: "\F0F09";
}

.mdi-map-marker-remove-outline::before {
  content: "\F12FA";
}

.mdi-map-marker-remove-variant::before {
  content: "\F0F0A";
}

.mdi-map-marker-right::before {
  content: "\F12DC";
}

.mdi-map-marker-right-outline::before {
  content: "\F12DE";
}

.mdi-map-marker-up::before {
  content: "\F1103";
}

.mdi-map-minus::before {
  content: "\F0981";
}

.mdi-map-outline::before {
  content: "\F0982";
}

.mdi-map-plus::before {
  content: "\F0983";
}

.mdi-map-search::before {
  content: "\F0984";
}

.mdi-map-search-outline::before {
  content: "\F0985";
}

.mdi-mapbox::before {
  content: "\F0BAA";
}

.mdi-margin::before {
  content: "\F0353";
}

.mdi-marker::before {
  content: "\F0652";
}

.mdi-marker-cancel::before {
  content: "\F0DD9";
}

.mdi-marker-check::before {
  content: "\F0355";
}

.mdi-mastodon::before {
  content: "\F0AD1";
}

.mdi-material-design::before {
  content: "\F0986";
}

.mdi-material-ui::before {
  content: "\F0357";
}

.mdi-math-compass::before {
  content: "\F0358";
}

.mdi-math-cos::before {
  content: "\F0C96";
}

.mdi-math-integral::before {
  content: "\F0FC8";
}

.mdi-math-integral-box::before {
  content: "\F0FC9";
}

.mdi-math-log::before {
  content: "\F1085";
}

.mdi-math-norm::before {
  content: "\F0FCA";
}

.mdi-math-norm-box::before {
  content: "\F0FCB";
}

.mdi-math-sin::before {
  content: "\F0C97";
}

.mdi-math-tan::before {
  content: "\F0C98";
}

.mdi-matrix::before {
  content: "\F0628";
}

.mdi-medal::before {
  content: "\F0987";
}

.mdi-medal-outline::before {
  content: "\F1326";
}

.mdi-medical-bag::before {
  content: "\F06EF";
}

.mdi-meditation::before {
  content: "\F117B";
}

.mdi-memory::before {
  content: "\F035B";
}

.mdi-menu::before {
  content: "\F035C";
}

.mdi-menu-down::before {
  content: "\F035D";
}

.mdi-menu-down-outline::before {
  content: "\F06B6";
}

.mdi-menu-left::before {
  content: "\F035E";
}

.mdi-menu-left-outline::before {
  content: "\F0A02";
}

.mdi-menu-open::before {
  content: "\F0BAB";
}

.mdi-menu-right::before {
  content: "\F035F";
}

.mdi-menu-right-outline::before {
  content: "\F0A03";
}

.mdi-menu-swap::before {
  content: "\F0A64";
}

.mdi-menu-swap-outline::before {
  content: "\F0A65";
}

.mdi-menu-up::before {
  content: "\F0360";
}

.mdi-menu-up-outline::before {
  content: "\F06B7";
}

.mdi-merge::before {
  content: "\F0F5C";
}

.mdi-message::before {
  content: "\F0361";
}

.mdi-message-alert::before {
  content: "\F0362";
}

.mdi-message-alert-outline::before {
  content: "\F0A04";
}

.mdi-message-arrow-left::before {
  content: "\F12F2";
}

.mdi-message-arrow-left-outline::before {
  content: "\F12F3";
}

.mdi-message-arrow-right::before {
  content: "\F12F4";
}

.mdi-message-arrow-right-outline::before {
  content: "\F12F5";
}

.mdi-message-bulleted::before {
  content: "\F06A2";
}

.mdi-message-bulleted-off::before {
  content: "\F06A3";
}

.mdi-message-cog::before {
  content: "\F06F1";
}

.mdi-message-cog-outline::before {
  content: "\F1172";
}

.mdi-message-draw::before {
  content: "\F0363";
}

.mdi-message-image::before {
  content: "\F0364";
}

.mdi-message-image-outline::before {
  content: "\F116C";
}

.mdi-message-lock::before {
  content: "\F0FCC";
}

.mdi-message-lock-outline::before {
  content: "\F116D";
}

.mdi-message-minus::before {
  content: "\F116E";
}

.mdi-message-minus-outline::before {
  content: "\F116F";
}

.mdi-message-outline::before {
  content: "\F0365";
}

.mdi-message-plus::before {
  content: "\F0653";
}

.mdi-message-plus-outline::before {
  content: "\F10BB";
}

.mdi-message-processing::before {
  content: "\F0366";
}

.mdi-message-processing-outline::before {
  content: "\F1170";
}

.mdi-message-reply::before {
  content: "\F0367";
}

.mdi-message-reply-text::before {
  content: "\F0368";
}

.mdi-message-settings::before {
  content: "\F06F0";
}

.mdi-message-settings-outline::before {
  content: "\F1171";
}

.mdi-message-text::before {
  content: "\F0369";
}

.mdi-message-text-clock::before {
  content: "\F1173";
}

.mdi-message-text-clock-outline::before {
  content: "\F1174";
}

.mdi-message-text-lock::before {
  content: "\F0FCD";
}

.mdi-message-text-lock-outline::before {
  content: "\F1175";
}

.mdi-message-text-outline::before {
  content: "\F036A";
}

.mdi-message-video::before {
  content: "\F036B";
}

.mdi-meteor::before {
  content: "\F0629";
}

.mdi-metronome::before {
  content: "\F07DA";
}

.mdi-metronome-tick::before {
  content: "\F07DB";
}

.mdi-micro-sd::before {
  content: "\F07DC";
}

.mdi-microphone::before {
  content: "\F036C";
}

.mdi-microphone-minus::before {
  content: "\F08B3";
}

.mdi-microphone-off::before {
  content: "\F036D";
}

.mdi-microphone-outline::before {
  content: "\F036E";
}

.mdi-microphone-plus::before {
  content: "\F08B4";
}

.mdi-microphone-settings::before {
  content: "\F036F";
}

.mdi-microphone-variant::before {
  content: "\F0370";
}

.mdi-microphone-variant-off::before {
  content: "\F0371";
}

.mdi-microscope::before {
  content: "\F0654";
}

.mdi-microsoft::before {
  content: "\F0372";
}

.mdi-microsoft-access::before {
  content: "\F138E";
}

.mdi-microsoft-azure::before {
  content: "\F0805";
}

.mdi-microsoft-azure-devops::before {
  content: "\F0FD5";
}

.mdi-microsoft-bing::before {
  content: "\F00A4";
}

.mdi-microsoft-dynamics-365::before {
  content: "\F0988";
}

.mdi-microsoft-edge::before {
  content: "\F01E9";
}

.mdi-microsoft-edge-legacy::before {
  content: "\F1250";
}

.mdi-microsoft-excel::before {
  content: "\F138F";
}

.mdi-microsoft-internet-explorer::before {
  content: "\F0300";
}

.mdi-microsoft-office::before {
  content: "\F03C6";
}

.mdi-microsoft-onedrive::before {
  content: "\F03CA";
}

.mdi-microsoft-onenote::before {
  content: "\F0747";
}

.mdi-microsoft-outlook::before {
  content: "\F0D22";
}

.mdi-microsoft-powerpoint::before {
  content: "\F1390";
}

.mdi-microsoft-sharepoint::before {
  content: "\F1391";
}

.mdi-microsoft-teams::before {
  content: "\F02BB";
}

.mdi-microsoft-visual-studio::before {
  content: "\F0610";
}

.mdi-microsoft-visual-studio-code::before {
  content: "\F0A1E";
}

.mdi-microsoft-windows::before {
  content: "\F05B3";
}

.mdi-microsoft-windows-classic::before {
  content: "\F0A21";
}

.mdi-microsoft-word::before {
  content: "\F1392";
}

.mdi-microsoft-xbox::before {
  content: "\F05B9";
}

.mdi-microsoft-xbox-controller::before {
  content: "\F05BA";
}

.mdi-microsoft-xbox-controller-battery-alert::before {
  content: "\F074B";
}

.mdi-microsoft-xbox-controller-battery-charging::before {
  content: "\F0A22";
}

.mdi-microsoft-xbox-controller-battery-empty::before {
  content: "\F074C";
}

.mdi-microsoft-xbox-controller-battery-full::before {
  content: "\F074D";
}

.mdi-microsoft-xbox-controller-battery-low::before {
  content: "\F074E";
}

.mdi-microsoft-xbox-controller-battery-medium::before {
  content: "\F074F";
}

.mdi-microsoft-xbox-controller-battery-unknown::before {
  content: "\F0750";
}

.mdi-microsoft-xbox-controller-menu::before {
  content: "\F0E6F";
}

.mdi-microsoft-xbox-controller-off::before {
  content: "\F05BB";
}

.mdi-microsoft-xbox-controller-view::before {
  content: "\F0E70";
}

.mdi-microsoft-yammer::before {
  content: "\F0789";
}

.mdi-microwave::before {
  content: "\F0C99";
}

.mdi-microwave-off::before {
  content: "\F1423";
}

.mdi-middleware::before {
  content: "\F0F5D";
}

.mdi-middleware-outline::before {
  content: "\F0F5E";
}

.mdi-midi::before {
  content: "\F08F1";
}

.mdi-midi-port::before {
  content: "\F08F2";
}

.mdi-mine::before {
  content: "\F0DDA";
}

.mdi-minecraft::before {
  content: "\F0373";
}

.mdi-mini-sd::before {
  content: "\F0A05";
}

.mdi-minidisc::before {
  content: "\F0A06";
}

.mdi-minus::before {
  content: "\F0374";
}

.mdi-minus-box::before {
  content: "\F0375";
}

.mdi-minus-box-multiple::before {
  content: "\F1141";
}

.mdi-minus-box-multiple-outline::before {
  content: "\F1142";
}

.mdi-minus-box-outline::before {
  content: "\F06F2";
}

.mdi-minus-circle::before {
  content: "\F0376";
}

.mdi-minus-circle-multiple::before {
  content: "\F035A";
}

.mdi-minus-circle-multiple-outline::before {
  content: "\F0AD3";
}

.mdi-minus-circle-off::before {
  content: "\F1459";
}

.mdi-minus-circle-off-outline::before {
  content: "\F145A";
}

.mdi-minus-circle-outline::before {
  content: "\F0377";
}

.mdi-minus-network::before {
  content: "\F0378";
}

.mdi-minus-network-outline::before {
  content: "\F0C9A";
}

.mdi-mirror::before {
  content: "\F11FD";
}

.mdi-mixed-martial-arts::before {
  content: "\F0D8F";
}

.mdi-mixed-reality::before {
  content: "\F087F";
}

.mdi-molecule::before {
  content: "\F0BAC";
}

.mdi-molecule-co::before {
  content: "\F12FE";
}

.mdi-molecule-co2::before {
  content: "\F07E4";
}

.mdi-monitor::before {
  content: "\F0379";
}

.mdi-monitor-cellphone::before {
  content: "\F0989";
}

.mdi-monitor-cellphone-star::before {
  content: "\F098A";
}

.mdi-monitor-clean::before {
  content: "\F1104";
}

.mdi-monitor-dashboard::before {
  content: "\F0A07";
}

.mdi-monitor-edit::before {
  content: "\F12C6";
}

.mdi-monitor-eye::before {
  content: "\F13B4";
}

.mdi-monitor-lock::before {
  content: "\F0DDB";
}

.mdi-monitor-multiple::before {
  content: "\F037A";
}

.mdi-monitor-off::before {
  content: "\F0D90";
}

.mdi-monitor-screenshot::before {
  content: "\F0E51";
}

.mdi-monitor-share::before {
  content: "\F1483";
}

.mdi-monitor-speaker::before {
  content: "\F0F5F";
}

.mdi-monitor-speaker-off::before {
  content: "\F0F60";
}

.mdi-monitor-star::before {
  content: "\F0DDC";
}

.mdi-moon-first-quarter::before {
  content: "\F0F61";
}

.mdi-moon-full::before {
  content: "\F0F62";
}

.mdi-moon-last-quarter::before {
  content: "\F0F63";
}

.mdi-moon-new::before {
  content: "\F0F64";
}

.mdi-moon-waning-crescent::before {
  content: "\F0F65";
}

.mdi-moon-waning-gibbous::before {
  content: "\F0F66";
}

.mdi-moon-waxing-crescent::before {
  content: "\F0F67";
}

.mdi-moon-waxing-gibbous::before {
  content: "\F0F68";
}

.mdi-moped::before {
  content: "\F1086";
}

.mdi-more::before {
  content: "\F037B";
}

.mdi-mother-heart::before {
  content: "\F1314";
}

.mdi-mother-nurse::before {
  content: "\F0D21";
}

.mdi-motion-sensor::before {
  content: "\F0D91";
}

.mdi-motion-sensor-off::before {
  content: "\F1435";
}

.mdi-motorbike::before {
  content: "\F037C";
}

.mdi-mouse::before {
  content: "\F037D";
}

.mdi-mouse-bluetooth::before {
  content: "\F098B";
}

.mdi-mouse-off::before {
  content: "\F037E";
}

.mdi-mouse-variant::before {
  content: "\F037F";
}

.mdi-mouse-variant-off::before {
  content: "\F0380";
}

.mdi-move-resize::before {
  content: "\F0655";
}

.mdi-move-resize-variant::before {
  content: "\F0656";
}

.mdi-movie::before {
  content: "\F0381";
}

.mdi-movie-edit::before {
  content: "\F1122";
}

.mdi-movie-edit-outline::before {
  content: "\F1123";
}

.mdi-movie-filter::before {
  content: "\F1124";
}

.mdi-movie-filter-outline::before {
  content: "\F1125";
}

.mdi-movie-open::before {
  content: "\F0FCE";
}

.mdi-movie-open-outline::before {
  content: "\F0FCF";
}

.mdi-movie-outline::before {
  content: "\F0DDD";
}

.mdi-movie-roll::before {
  content: "\F07DE";
}

.mdi-movie-search::before {
  content: "\F11D2";
}

.mdi-movie-search-outline::before {
  content: "\F11D3";
}

.mdi-muffin::before {
  content: "\F098C";
}

.mdi-multiplication::before {
  content: "\F0382";
}

.mdi-multiplication-box::before {
  content: "\F0383";
}

.mdi-mushroom::before {
  content: "\F07DF";
}

.mdi-mushroom-off::before {
  content: "\F13FA";
}

.mdi-mushroom-off-outline::before {
  content: "\F13FB";
}

.mdi-mushroom-outline::before {
  content: "\F07E0";
}

.mdi-music::before {
  content: "\F075A";
}

.mdi-music-accidental-double-flat::before {
  content: "\F0F69";
}

.mdi-music-accidental-double-sharp::before {
  content: "\F0F6A";
}

.mdi-music-accidental-flat::before {
  content: "\F0F6B";
}

.mdi-music-accidental-natural::before {
  content: "\F0F6C";
}

.mdi-music-accidental-sharp::before {
  content: "\F0F6D";
}

.mdi-music-box::before {
  content: "\F0384";
}

.mdi-music-box-multiple::before {
  content: "\F0333";
}

.mdi-music-box-multiple-outline::before {
  content: "\F0F04";
}

.mdi-music-box-outline::before {
  content: "\F0385";
}

.mdi-music-circle::before {
  content: "\F0386";
}

.mdi-music-circle-outline::before {
  content: "\F0AD4";
}

.mdi-music-clef-alto::before {
  content: "\F0F6E";
}

.mdi-music-clef-bass::before {
  content: "\F0F6F";
}

.mdi-music-clef-treble::before {
  content: "\F0F70";
}

.mdi-music-note::before {
  content: "\F0387";
}

.mdi-music-note-bluetooth::before {
  content: "\F05FE";
}

.mdi-music-note-bluetooth-off::before {
  content: "\F05FF";
}

.mdi-music-note-eighth::before {
  content: "\F0388";
}

.mdi-music-note-eighth-dotted::before {
  content: "\F0F71";
}

.mdi-music-note-half::before {
  content: "\F0389";
}

.mdi-music-note-half-dotted::before {
  content: "\F0F72";
}

.mdi-music-note-off::before {
  content: "\F038A";
}

.mdi-music-note-off-outline::before {
  content: "\F0F73";
}

.mdi-music-note-outline::before {
  content: "\F0F74";
}

.mdi-music-note-plus::before {
  content: "\F0DDE";
}

.mdi-music-note-quarter::before {
  content: "\F038B";
}

.mdi-music-note-quarter-dotted::before {
  content: "\F0F75";
}

.mdi-music-note-sixteenth::before {
  content: "\F038C";
}

.mdi-music-note-sixteenth-dotted::before {
  content: "\F0F76";
}

.mdi-music-note-whole::before {
  content: "\F038D";
}

.mdi-music-note-whole-dotted::before {
  content: "\F0F77";
}

.mdi-music-off::before {
  content: "\F075B";
}

.mdi-music-rest-eighth::before {
  content: "\F0F78";
}

.mdi-music-rest-half::before {
  content: "\F0F79";
}

.mdi-music-rest-quarter::before {
  content: "\F0F7A";
}

.mdi-music-rest-sixteenth::before {
  content: "\F0F7B";
}

.mdi-music-rest-whole::before {
  content: "\F0F7C";
}

.mdi-nail::before {
  content: "\F0DDF";
}

.mdi-nas::before {
  content: "\F08F3";
}

.mdi-nativescript::before {
  content: "\F0880";
}

.mdi-nature::before {
  content: "\F038E";
}

.mdi-nature-people::before {
  content: "\F038F";
}

.mdi-navigation::before {
  content: "\F0390";
}

.mdi-near-me::before {
  content: "\F05CD";
}

.mdi-necklace::before {
  content: "\F0F0B";
}

.mdi-needle::before {
  content: "\F0391";
}

.mdi-netflix::before {
  content: "\F0746";
}

.mdi-network::before {
  content: "\F06F3";
}

.mdi-network-off::before {
  content: "\F0C9B";
}

.mdi-network-off-outline::before {
  content: "\F0C9C";
}

.mdi-network-outline::before {
  content: "\F0C9D";
}

.mdi-network-strength-1::before {
  content: "\F08F4";
}

.mdi-network-strength-1-alert::before {
  content: "\F08F5";
}

.mdi-network-strength-2::before {
  content: "\F08F6";
}

.mdi-network-strength-2-alert::before {
  content: "\F08F7";
}

.mdi-network-strength-3::before {
  content: "\F08F8";
}

.mdi-network-strength-3-alert::before {
  content: "\F08F9";
}

.mdi-network-strength-4::before {
  content: "\F08FA";
}

.mdi-network-strength-4-alert::before {
  content: "\F08FB";
}

.mdi-network-strength-off::before {
  content: "\F08FC";
}

.mdi-network-strength-off-outline::before {
  content: "\F08FD";
}

.mdi-network-strength-outline::before {
  content: "\F08FE";
}

.mdi-new-box::before {
  content: "\F0394";
}

.mdi-newspaper::before {
  content: "\F0395";
}

.mdi-newspaper-minus::before {
  content: "\F0F0C";
}

.mdi-newspaper-plus::before {
  content: "\F0F0D";
}

.mdi-newspaper-variant::before {
  content: "\F1001";
}

.mdi-newspaper-variant-multiple::before {
  content: "\F1002";
}

.mdi-newspaper-variant-multiple-outline::before {
  content: "\F1003";
}

.mdi-newspaper-variant-outline::before {
  content: "\F1004";
}

.mdi-nfc::before {
  content: "\F0396";
}

.mdi-nfc-search-variant::before {
  content: "\F0E53";
}

.mdi-nfc-tap::before {
  content: "\F0397";
}

.mdi-nfc-variant::before {
  content: "\F0398";
}

.mdi-nfc-variant-off::before {
  content: "\F0E54";
}

.mdi-ninja::before {
  content: "\F0774";
}

.mdi-nintendo-game-boy::before {
  content: "\F1393";
}

.mdi-nintendo-switch::before {
  content: "\F07E1";
}

.mdi-nintendo-wii::before {
  content: "\F05AB";
}

.mdi-nintendo-wiiu::before {
  content: "\F072D";
}

.mdi-nix::before {
  content: "\F1105";
}

.mdi-nodejs::before {
  content: "\F0399";
}

.mdi-noodles::before {
  content: "\F117E";
}

.mdi-not-equal::before {
  content: "\F098D";
}

.mdi-not-equal-variant::before {
  content: "\F098E";
}

.mdi-note::before {
  content: "\F039A";
}

.mdi-note-multiple::before {
  content: "\F06B8";
}

.mdi-note-multiple-outline::before {
  content: "\F06B9";
}

.mdi-note-outline::before {
  content: "\F039B";
}

.mdi-note-plus::before {
  content: "\F039C";
}

.mdi-note-plus-outline::before {
  content: "\F039D";
}

.mdi-note-text::before {
  content: "\F039E";
}

.mdi-note-text-outline::before {
  content: "\F11D7";
}

.mdi-notebook::before {
  content: "\F082E";
}

.mdi-notebook-check::before {
  content: "\F14F5";
}

.mdi-notebook-check-outline::before {
  content: "\F14F6";
}

.mdi-notebook-edit::before {
  content: "\F14E7";
}

.mdi-notebook-edit-outline::before {
  content: "\F14E9";
}

.mdi-notebook-multiple::before {
  content: "\F0E55";
}

.mdi-notebook-outline::before {
  content: "\F0EBF";
}

.mdi-notification-clear-all::before {
  content: "\F039F";
}

.mdi-npm::before {
  content: "\F06F7";
}

.mdi-nuke::before {
  content: "\F06A4";
}

.mdi-null::before {
  content: "\F07E2";
}

.mdi-numeric::before {
  content: "\F03A0";
}

.mdi-numeric-0::before {
  content: "\F0B39";
}

.mdi-numeric-0-box::before {
  content: "\F03A1";
}

.mdi-numeric-0-box-multiple::before {
  content: "\F0F0E";
}

.mdi-numeric-0-box-multiple-outline::before {
  content: "\F03A2";
}

.mdi-numeric-0-box-outline::before {
  content: "\F03A3";
}

.mdi-numeric-0-circle::before {
  content: "\F0C9E";
}

.mdi-numeric-0-circle-outline::before {
  content: "\F0C9F";
}

.mdi-numeric-1::before {
  content: "\F0B3A";
}

.mdi-numeric-1-box::before {
  content: "\F03A4";
}

.mdi-numeric-1-box-multiple::before {
  content: "\F0F0F";
}

.mdi-numeric-1-box-multiple-outline::before {
  content: "\F03A5";
}

.mdi-numeric-1-box-outline::before {
  content: "\F03A6";
}

.mdi-numeric-1-circle::before {
  content: "\F0CA0";
}

.mdi-numeric-1-circle-outline::before {
  content: "\F0CA1";
}

.mdi-numeric-10::before {
  content: "\F0FE9";
}

.mdi-numeric-10-box::before {
  content: "\F0F7D";
}

.mdi-numeric-10-box-multiple::before {
  content: "\F0FEA";
}

.mdi-numeric-10-box-multiple-outline::before {
  content: "\F0FEB";
}

.mdi-numeric-10-box-outline::before {
  content: "\F0F7E";
}

.mdi-numeric-10-circle::before {
  content: "\F0FEC";
}

.mdi-numeric-10-circle-outline::before {
  content: "\F0FED";
}

.mdi-numeric-2::before {
  content: "\F0B3B";
}

.mdi-numeric-2-box::before {
  content: "\F03A7";
}

.mdi-numeric-2-box-multiple::before {
  content: "\F0F10";
}

.mdi-numeric-2-box-multiple-outline::before {
  content: "\F03A8";
}

.mdi-numeric-2-box-outline::before {
  content: "\F03A9";
}

.mdi-numeric-2-circle::before {
  content: "\F0CA2";
}

.mdi-numeric-2-circle-outline::before {
  content: "\F0CA3";
}

.mdi-numeric-3::before {
  content: "\F0B3C";
}

.mdi-numeric-3-box::before {
  content: "\F03AA";
}

.mdi-numeric-3-box-multiple::before {
  content: "\F0F11";
}

.mdi-numeric-3-box-multiple-outline::before {
  content: "\F03AB";
}

.mdi-numeric-3-box-outline::before {
  content: "\F03AC";
}

.mdi-numeric-3-circle::before {
  content: "\F0CA4";
}

.mdi-numeric-3-circle-outline::before {
  content: "\F0CA5";
}

.mdi-numeric-4::before {
  content: "\F0B3D";
}

.mdi-numeric-4-box::before {
  content: "\F03AD";
}

.mdi-numeric-4-box-multiple::before {
  content: "\F0F12";
}

.mdi-numeric-4-box-multiple-outline::before {
  content: "\F03B2";
}

.mdi-numeric-4-box-outline::before {
  content: "\F03AE";
}

.mdi-numeric-4-circle::before {
  content: "\F0CA6";
}

.mdi-numeric-4-circle-outline::before {
  content: "\F0CA7";
}

.mdi-numeric-5::before {
  content: "\F0B3E";
}

.mdi-numeric-5-box::before {
  content: "\F03B1";
}

.mdi-numeric-5-box-multiple::before {
  content: "\F0F13";
}

.mdi-numeric-5-box-multiple-outline::before {
  content: "\F03AF";
}

.mdi-numeric-5-box-outline::before {
  content: "\F03B0";
}

.mdi-numeric-5-circle::before {
  content: "\F0CA8";
}

.mdi-numeric-5-circle-outline::before {
  content: "\F0CA9";
}

.mdi-numeric-6::before {
  content: "\F0B3F";
}

.mdi-numeric-6-box::before {
  content: "\F03B3";
}

.mdi-numeric-6-box-multiple::before {
  content: "\F0F14";
}

.mdi-numeric-6-box-multiple-outline::before {
  content: "\F03B4";
}

.mdi-numeric-6-box-outline::before {
  content: "\F03B5";
}

.mdi-numeric-6-circle::before {
  content: "\F0CAA";
}

.mdi-numeric-6-circle-outline::before {
  content: "\F0CAB";
}

.mdi-numeric-7::before {
  content: "\F0B40";
}

.mdi-numeric-7-box::before {
  content: "\F03B6";
}

.mdi-numeric-7-box-multiple::before {
  content: "\F0F15";
}

.mdi-numeric-7-box-multiple-outline::before {
  content: "\F03B7";
}

.mdi-numeric-7-box-outline::before {
  content: "\F03B8";
}

.mdi-numeric-7-circle::before {
  content: "\F0CAC";
}

.mdi-numeric-7-circle-outline::before {
  content: "\F0CAD";
}

.mdi-numeric-8::before {
  content: "\F0B41";
}

.mdi-numeric-8-box::before {
  content: "\F03B9";
}

.mdi-numeric-8-box-multiple::before {
  content: "\F0F16";
}

.mdi-numeric-8-box-multiple-outline::before {
  content: "\F03BA";
}

.mdi-numeric-8-box-outline::before {
  content: "\F03BB";
}

.mdi-numeric-8-circle::before {
  content: "\F0CAE";
}

.mdi-numeric-8-circle-outline::before {
  content: "\F0CAF";
}

.mdi-numeric-9::before {
  content: "\F0B42";
}

.mdi-numeric-9-box::before {
  content: "\F03BC";
}

.mdi-numeric-9-box-multiple::before {
  content: "\F0F17";
}

.mdi-numeric-9-box-multiple-outline::before {
  content: "\F03BD";
}

.mdi-numeric-9-box-outline::before {
  content: "\F03BE";
}

.mdi-numeric-9-circle::before {
  content: "\F0CB0";
}

.mdi-numeric-9-circle-outline::before {
  content: "\F0CB1";
}

.mdi-numeric-9-plus::before {
  content: "\F0FEE";
}

.mdi-numeric-9-plus-box::before {
  content: "\F03BF";
}

.mdi-numeric-9-plus-box-multiple::before {
  content: "\F0F18";
}

.mdi-numeric-9-plus-box-multiple-outline::before {
  content: "\F03C0";
}

.mdi-numeric-9-plus-box-outline::before {
  content: "\F03C1";
}

.mdi-numeric-9-plus-circle::before {
  content: "\F0CB2";
}

.mdi-numeric-9-plus-circle-outline::before {
  content: "\F0CB3";
}

.mdi-numeric-negative-1::before {
  content: "\F1052";
}

.mdi-nut::before {
  content: "\F06F8";
}

.mdi-nutrition::before {
  content: "\F03C2";
}

.mdi-nuxt::before {
  content: "\F1106";
}

.mdi-oar::before {
  content: "\F067C";
}

.mdi-ocarina::before {
  content: "\F0DE0";
}

.mdi-oci::before {
  content: "\F12E9";
}

.mdi-ocr::before {
  content: "\F113A";
}

.mdi-octagon::before {
  content: "\F03C3";
}

.mdi-octagon-outline::before {
  content: "\F03C4";
}

.mdi-octagram::before {
  content: "\F06F9";
}

.mdi-octagram-outline::before {
  content: "\F0775";
}

.mdi-odnoklassniki::before {
  content: "\F03C5";
}

.mdi-offer::before {
  content: "\F121B";
}

.mdi-office-building::before {
  content: "\F0991";
}

.mdi-office-building-marker::before {
  content: "\F1520";
}

.mdi-office-building-marker-outline::before {
  content: "\F1521";
}

.mdi-office-building-outline::before {
  content: "\F151F";
}

.mdi-oil::before {
  content: "\F03C7";
}

.mdi-oil-lamp::before {
  content: "\F0F19";
}

.mdi-oil-level::before {
  content: "\F1053";
}

.mdi-oil-temperature::before {
  content: "\F0FF8";
}

.mdi-omega::before {
  content: "\F03C9";
}

.mdi-one-up::before {
  content: "\F0BAD";
}

.mdi-onepassword::before {
  content: "\F0881";
}

.mdi-opacity::before {
  content: "\F05CC";
}

.mdi-open-in-app::before {
  content: "\F03CB";
}

.mdi-open-in-new::before {
  content: "\F03CC";
}

.mdi-open-source-initiative::before {
  content: "\F0BAE";
}

.mdi-openid::before {
  content: "\F03CD";
}

.mdi-opera::before {
  content: "\F03CE";
}

.mdi-orbit::before {
  content: "\F0018";
}

.mdi-order-alphabetical-ascending::before {
  content: "\F020D";
}

.mdi-order-alphabetical-descending::before {
  content: "\F0D07";
}

.mdi-order-bool-ascending::before {
  content: "\F02BE";
}

.mdi-order-bool-ascending-variant::before {
  content: "\F098F";
}

.mdi-order-bool-descending::before {
  content: "\F1384";
}

.mdi-order-bool-descending-variant::before {
  content: "\F0990";
}

.mdi-order-numeric-ascending::before {
  content: "\F0545";
}

.mdi-order-numeric-descending::before {
  content: "\F0546";
}

.mdi-origin::before {
  content: "\F0B43";
}

.mdi-ornament::before {
  content: "\F03CF";
}

.mdi-ornament-variant::before {
  content: "\F03D0";
}

.mdi-outdoor-lamp::before {
  content: "\F1054";
}

.mdi-overscan::before {
  content: "\F1005";
}

.mdi-owl::before {
  content: "\F03D2";
}

.mdi-pac-man::before {
  content: "\F0BAF";
}

.mdi-package::before {
  content: "\F03D3";
}

.mdi-package-down::before {
  content: "\F03D4";
}

.mdi-package-up::before {
  content: "\F03D5";
}

.mdi-package-variant::before {
  content: "\F03D6";
}

.mdi-package-variant-closed::before {
  content: "\F03D7";
}

.mdi-page-first::before {
  content: "\F0600";
}

.mdi-page-last::before {
  content: "\F0601";
}

.mdi-page-layout-body::before {
  content: "\F06FA";
}

.mdi-page-layout-footer::before {
  content: "\F06FB";
}

.mdi-page-layout-header::before {
  content: "\F06FC";
}

.mdi-page-layout-header-footer::before {
  content: "\F0F7F";
}

.mdi-page-layout-sidebar-left::before {
  content: "\F06FD";
}

.mdi-page-layout-sidebar-right::before {
  content: "\F06FE";
}

.mdi-page-next::before {
  content: "\F0BB0";
}

.mdi-page-next-outline::before {
  content: "\F0BB1";
}

.mdi-page-previous::before {
  content: "\F0BB2";
}

.mdi-page-previous-outline::before {
  content: "\F0BB3";
}

.mdi-pail::before {
  content: "\F1417";
}

.mdi-pail-minus::before {
  content: "\F1437";
}

.mdi-pail-minus-outline::before {
  content: "\F143C";
}

.mdi-pail-off::before {
  content: "\F1439";
}

.mdi-pail-off-outline::before {
  content: "\F143E";
}

.mdi-pail-outline::before {
  content: "\F143A";
}

.mdi-pail-plus::before {
  content: "\F1436";
}

.mdi-pail-plus-outline::before {
  content: "\F143B";
}

.mdi-pail-remove::before {
  content: "\F1438";
}

.mdi-pail-remove-outline::before {
  content: "\F143D";
}

.mdi-palette::before {
  content: "\F03D8";
}

.mdi-palette-advanced::before {
  content: "\F03D9";
}

.mdi-palette-outline::before {
  content: "\F0E0C";
}

.mdi-palette-swatch::before {
  content: "\F08B5";
}

.mdi-palette-swatch-outline::before {
  content: "\F135C";
}

.mdi-palm-tree::before {
  content: "\F1055";
}

.mdi-pan::before {
  content: "\F0BB4";
}

.mdi-pan-bottom-left::before {
  content: "\F0BB5";
}

.mdi-pan-bottom-right::before {
  content: "\F0BB6";
}

.mdi-pan-down::before {
  content: "\F0BB7";
}

.mdi-pan-horizontal::before {
  content: "\F0BB8";
}

.mdi-pan-left::before {
  content: "\F0BB9";
}

.mdi-pan-right::before {
  content: "\F0BBA";
}

.mdi-pan-top-left::before {
  content: "\F0BBB";
}

.mdi-pan-top-right::before {
  content: "\F0BBC";
}

.mdi-pan-up::before {
  content: "\F0BBD";
}

.mdi-pan-vertical::before {
  content: "\F0BBE";
}

.mdi-panda::before {
  content: "\F03DA";
}

.mdi-pandora::before {
  content: "\F03DB";
}

.mdi-panorama::before {
  content: "\F03DC";
}

.mdi-panorama-fisheye::before {
  content: "\F03DD";
}

.mdi-panorama-horizontal::before {
  content: "\F03DE";
}

.mdi-panorama-vertical::before {
  content: "\F03DF";
}

.mdi-panorama-wide-angle::before {
  content: "\F03E0";
}

.mdi-paper-cut-vertical::before {
  content: "\F03E1";
}

.mdi-paper-roll::before {
  content: "\F1157";
}

.mdi-paper-roll-outline::before {
  content: "\F1158";
}

.mdi-paperclip::before {
  content: "\F03E2";
}

.mdi-parachute::before {
  content: "\F0CB4";
}

.mdi-parachute-outline::before {
  content: "\F0CB5";
}

.mdi-parking::before {
  content: "\F03E3";
}

.mdi-party-popper::before {
  content: "\F1056";
}

.mdi-passport::before {
  content: "\F07E3";
}

.mdi-passport-biometric::before {
  content: "\F0DE1";
}

.mdi-pasta::before {
  content: "\F1160";
}

.mdi-patio-heater::before {
  content: "\F0F80";
}

.mdi-patreon::before {
  content: "\F0882";
}

.mdi-pause::before {
  content: "\F03E4";
}

.mdi-pause-circle::before {
  content: "\F03E5";
}

.mdi-pause-circle-outline::before {
  content: "\F03E6";
}

.mdi-pause-octagon::before {
  content: "\F03E7";
}

.mdi-pause-octagon-outline::before {
  content: "\F03E8";
}

.mdi-paw::before {
  content: "\F03E9";
}

.mdi-paw-off::before {
  content: "\F0657";
}

.mdi-pdf-box::before {
  content: "\F0E56";
}

.mdi-peace::before {
  content: "\F0884";
}

.mdi-peanut::before {
  content: "\F0FFC";
}

.mdi-peanut-off::before {
  content: "\F0FFD";
}

.mdi-peanut-off-outline::before {
  content: "\F0FFF";
}

.mdi-peanut-outline::before {
  content: "\F0FFE";
}

.mdi-pen::before {
  content: "\F03EA";
}

.mdi-pen-lock::before {
  content: "\F0DE2";
}

.mdi-pen-minus::before {
  content: "\F0DE3";
}

.mdi-pen-off::before {
  content: "\F0DE4";
}

.mdi-pen-plus::before {
  content: "\F0DE5";
}

.mdi-pen-remove::before {
  content: "\F0DE6";
}

.mdi-pencil::before {
  content: "\F03EB";
}

.mdi-pencil-box::before {
  content: "\F03EC";
}

.mdi-pencil-box-multiple::before {
  content: "\F1144";
}

.mdi-pencil-box-multiple-outline::before {
  content: "\F1145";
}

.mdi-pencil-box-outline::before {
  content: "\F03ED";
}

.mdi-pencil-circle::before {
  content: "\F06FF";
}

.mdi-pencil-circle-outline::before {
  content: "\F0776";
}

.mdi-pencil-lock::before {
  content: "\F03EE";
}

.mdi-pencil-lock-outline::before {
  content: "\F0DE7";
}

.mdi-pencil-minus::before {
  content: "\F0DE8";
}

.mdi-pencil-minus-outline::before {
  content: "\F0DE9";
}

.mdi-pencil-off::before {
  content: "\F03EF";
}

.mdi-pencil-off-outline::before {
  content: "\F0DEA";
}

.mdi-pencil-outline::before {
  content: "\F0CB6";
}

.mdi-pencil-plus::before {
  content: "\F0DEB";
}

.mdi-pencil-plus-outline::before {
  content: "\F0DEC";
}

.mdi-pencil-remove::before {
  content: "\F0DED";
}

.mdi-pencil-remove-outline::before {
  content: "\F0DEE";
}

.mdi-pencil-ruler::before {
  content: "\F1353";
}

.mdi-penguin::before {
  content: "\F0EC0";
}

.mdi-pentagon::before {
  content: "\F0701";
}

.mdi-pentagon-outline::before {
  content: "\F0700";
}

.mdi-percent::before {
  content: "\F03F0";
}

.mdi-percent-outline::before {
  content: "\F1278";
}

.mdi-periodic-table::before {
  content: "\F08B6";
}

.mdi-perspective-less::before {
  content: "\F0D23";
}

.mdi-perspective-more::before {
  content: "\F0D24";
}

.mdi-pharmacy::before {
  content: "\F03F1";
}

.mdi-phone::before {
  content: "\F03F2";
}

.mdi-phone-alert::before {
  content: "\F0F1A";
}

.mdi-phone-alert-outline::before {
  content: "\F118E";
}

.mdi-phone-bluetooth::before {
  content: "\F03F3";
}

.mdi-phone-bluetooth-outline::before {
  content: "\F118F";
}

.mdi-phone-cancel::before {
  content: "\F10BC";
}

.mdi-phone-cancel-outline::before {
  content: "\F1190";
}

.mdi-phone-check::before {
  content: "\F11A9";
}

.mdi-phone-check-outline::before {
  content: "\F11AA";
}

.mdi-phone-classic::before {
  content: "\F0602";
}

.mdi-phone-classic-off::before {
  content: "\F1279";
}

.mdi-phone-forward::before {
  content: "\F03F4";
}

.mdi-phone-forward-outline::before {
  content: "\F1191";
}

.mdi-phone-hangup::before {
  content: "\F03F5";
}

.mdi-phone-hangup-outline::before {
  content: "\F1192";
}

.mdi-phone-in-talk::before {
  content: "\F03F6";
}

.mdi-phone-in-talk-outline::before {
  content: "\F1182";
}

.mdi-phone-incoming::before {
  content: "\F03F7";
}

.mdi-phone-incoming-outline::before {
  content: "\F1193";
}

.mdi-phone-lock::before {
  content: "\F03F8";
}

.mdi-phone-lock-outline::before {
  content: "\F1194";
}

.mdi-phone-log::before {
  content: "\F03F9";
}

.mdi-phone-log-outline::before {
  content: "\F1195";
}

.mdi-phone-message::before {
  content: "\F1196";
}

.mdi-phone-message-outline::before {
  content: "\F1197";
}

.mdi-phone-minus::before {
  content: "\F0658";
}

.mdi-phone-minus-outline::before {
  content: "\F1198";
}

.mdi-phone-missed::before {
  content: "\F03FA";
}

.mdi-phone-missed-outline::before {
  content: "\F11A5";
}

.mdi-phone-off::before {
  content: "\F0DEF";
}

.mdi-phone-off-outline::before {
  content: "\F11A6";
}

.mdi-phone-outgoing::before {
  content: "\F03FB";
}

.mdi-phone-outgoing-outline::before {
  content: "\F1199";
}

.mdi-phone-outline::before {
  content: "\F0DF0";
}

.mdi-phone-paused::before {
  content: "\F03FC";
}

.mdi-phone-paused-outline::before {
  content: "\F119A";
}

.mdi-phone-plus::before {
  content: "\F0659";
}

.mdi-phone-plus-outline::before {
  content: "\F119B";
}

.mdi-phone-remove::before {
  content: "\F152F";
}

.mdi-phone-remove-outline::before {
  content: "\F1530";
}

.mdi-phone-return::before {
  content: "\F082F";
}

.mdi-phone-return-outline::before {
  content: "\F119C";
}

.mdi-phone-ring::before {
  content: "\F11AB";
}

.mdi-phone-ring-outline::before {
  content: "\F11AC";
}

.mdi-phone-rotate-landscape::before {
  content: "\F0885";
}

.mdi-phone-rotate-portrait::before {
  content: "\F0886";
}

.mdi-phone-settings::before {
  content: "\F03FD";
}

.mdi-phone-settings-outline::before {
  content: "\F119D";
}

.mdi-phone-voip::before {
  content: "\F03FE";
}

.mdi-pi::before {
  content: "\F03FF";
}

.mdi-pi-box::before {
  content: "\F0400";
}

.mdi-pi-hole::before {
  content: "\F0DF1";
}

.mdi-piano::before {
  content: "\F067D";
}

.mdi-pickaxe::before {
  content: "\F08B7";
}

.mdi-picture-in-picture-bottom-right::before {
  content: "\F0E57";
}

.mdi-picture-in-picture-bottom-right-outline::before {
  content: "\F0E58";
}

.mdi-picture-in-picture-top-right::before {
  content: "\F0E59";
}

.mdi-picture-in-picture-top-right-outline::before {
  content: "\F0E5A";
}

.mdi-pier::before {
  content: "\F0887";
}

.mdi-pier-crane::before {
  content: "\F0888";
}

.mdi-pig::before {
  content: "\F0401";
}

.mdi-pig-variant::before {
  content: "\F1006";
}

.mdi-piggy-bank::before {
  content: "\F1007";
}

.mdi-pill::before {
  content: "\F0402";
}

.mdi-pillar::before {
  content: "\F0702";
}

.mdi-pin::before {
  content: "\F0403";
}

.mdi-pin-off::before {
  content: "\F0404";
}

.mdi-pin-off-outline::before {
  content: "\F0930";
}

.mdi-pin-outline::before {
  content: "\F0931";
}

.mdi-pine-tree::before {
  content: "\F0405";
}

.mdi-pine-tree-box::before {
  content: "\F0406";
}

.mdi-pine-tree-fire::before {
  content: "\F141A";
}

.mdi-pinterest::before {
  content: "\F0407";
}

.mdi-pinwheel::before {
  content: "\F0AD5";
}

.mdi-pinwheel-outline::before {
  content: "\F0AD6";
}

.mdi-pipe::before {
  content: "\F07E5";
}

.mdi-pipe-disconnected::before {
  content: "\F07E6";
}

.mdi-pipe-leak::before {
  content: "\F0889";
}

.mdi-pipe-wrench::before {
  content: "\F1354";
}

.mdi-pirate::before {
  content: "\F0A08";
}

.mdi-pistol::before {
  content: "\F0703";
}

.mdi-piston::before {
  content: "\F088A";
}

.mdi-pizza::before {
  content: "\F0409";
}

.mdi-play::before {
  content: "\F040A";
}

.mdi-play-box::before {
  content: "\F127A";
}

.mdi-play-box-multiple::before {
  content: "\F0D19";
}

.mdi-play-box-multiple-outline::before {
  content: "\F13E6";
}

.mdi-play-box-outline::before {
  content: "\F040B";
}

.mdi-play-circle::before {
  content: "\F040C";
}

.mdi-play-circle-outline::before {
  content: "\F040D";
}

.mdi-play-network::before {
  content: "\F088B";
}

.mdi-play-network-outline::before {
  content: "\F0CB7";
}

.mdi-play-outline::before {
  content: "\F0F1B";
}

.mdi-play-pause::before {
  content: "\F040E";
}

.mdi-play-protected-content::before {
  content: "\F040F";
}

.mdi-play-speed::before {
  content: "\F08FF";
}

.mdi-playlist-check::before {
  content: "\F05C7";
}

.mdi-playlist-edit::before {
  content: "\F0900";
}

.mdi-playlist-minus::before {
  content: "\F0410";
}

.mdi-playlist-music::before {
  content: "\F0CB8";
}

.mdi-playlist-music-outline::before {
  content: "\F0CB9";
}

.mdi-playlist-play::before {
  content: "\F0411";
}

.mdi-playlist-plus::before {
  content: "\F0412";
}

.mdi-playlist-remove::before {
  content: "\F0413";
}

.mdi-playlist-star::before {
  content: "\F0DF2";
}

.mdi-plex::before {
  content: "\F06BA";
}

.mdi-plus::before {
  content: "\F0415";
}

.mdi-plus-box::before {
  content: "\F0416";
}

.mdi-plus-box-multiple::before {
  content: "\F0334";
}

.mdi-plus-box-multiple-outline::before {
  content: "\F1143";
}

.mdi-plus-box-outline::before {
  content: "\F0704";
}

.mdi-plus-circle::before {
  content: "\F0417";
}

.mdi-plus-circle-multiple::before {
  content: "\F034C";
}

.mdi-plus-circle-multiple-outline::before {
  content: "\F0418";
}

.mdi-plus-circle-outline::before {
  content: "\F0419";
}

.mdi-plus-minus::before {
  content: "\F0992";
}

.mdi-plus-minus-box::before {
  content: "\F0993";
}

.mdi-plus-minus-variant::before {
  content: "\F14C9";
}

.mdi-plus-network::before {
  content: "\F041A";
}

.mdi-plus-network-outline::before {
  content: "\F0CBA";
}

.mdi-plus-one::before {
  content: "\F041B";
}

.mdi-plus-outline::before {
  content: "\F0705";
}

.mdi-plus-thick::before {
  content: "\F11EC";
}

.mdi-podcast::before {
  content: "\F0994";
}

.mdi-podium::before {
  content: "\F0D25";
}

.mdi-podium-bronze::before {
  content: "\F0D26";
}

.mdi-podium-gold::before {
  content: "\F0D27";
}

.mdi-podium-silver::before {
  content: "\F0D28";
}

.mdi-point-of-sale::before {
  content: "\F0D92";
}

.mdi-pokeball::before {
  content: "\F041D";
}

.mdi-pokemon-go::before {
  content: "\F0A09";
}

.mdi-poker-chip::before {
  content: "\F0830";
}

.mdi-polaroid::before {
  content: "\F041E";
}

.mdi-police-badge::before {
  content: "\F1167";
}

.mdi-police-badge-outline::before {
  content: "\F1168";
}

.mdi-poll::before {
  content: "\F041F";
}

.mdi-poll-box::before {
  content: "\F0420";
}

.mdi-poll-box-outline::before {
  content: "\F127B";
}

.mdi-polo::before {
  content: "\F14C3";
}

.mdi-polymer::before {
  content: "\F0421";
}

.mdi-pool::before {
  content: "\F0606";
}

.mdi-popcorn::before {
  content: "\F0422";
}

.mdi-post::before {
  content: "\F1008";
}

.mdi-post-outline::before {
  content: "\F1009";
}

.mdi-postage-stamp::before {
  content: "\F0CBB";
}

.mdi-pot::before {
  content: "\F02E5";
}

.mdi-pot-mix::before {
  content: "\F065B";
}

.mdi-pot-mix-outline::before {
  content: "\F0677";
}

.mdi-pot-outline::before {
  content: "\F02FF";
}

.mdi-pot-steam::before {
  content: "\F065A";
}

.mdi-pot-steam-outline::before {
  content: "\F0326";
}

.mdi-pound::before {
  content: "\F0423";
}

.mdi-pound-box::before {
  content: "\F0424";
}

.mdi-pound-box-outline::before {
  content: "\F117F";
}

.mdi-power::before {
  content: "\F0425";
}

.mdi-power-cycle::before {
  content: "\F0901";
}

.mdi-power-off::before {
  content: "\F0902";
}

.mdi-power-on::before {
  content: "\F0903";
}

.mdi-power-plug::before {
  content: "\F06A5";
}

.mdi-power-plug-off::before {
  content: "\F06A6";
}

.mdi-power-plug-off-outline::before {
  content: "\F1424";
}

.mdi-power-plug-outline::before {
  content: "\F1425";
}

.mdi-power-settings::before {
  content: "\F0426";
}

.mdi-power-sleep::before {
  content: "\F0904";
}

.mdi-power-socket::before {
  content: "\F0427";
}

.mdi-power-socket-au::before {
  content: "\F0905";
}

.mdi-power-socket-de::before {
  content: "\F1107";
}

.mdi-power-socket-eu::before {
  content: "\F07E7";
}

.mdi-power-socket-fr::before {
  content: "\F1108";
}

.mdi-power-socket-it::before {
  content: "\F14FF";
}

.mdi-power-socket-jp::before {
  content: "\F1109";
}

.mdi-power-socket-uk::before {
  content: "\F07E8";
}

.mdi-power-socket-us::before {
  content: "\F07E9";
}

.mdi-power-standby::before {
  content: "\F0906";
}

.mdi-powershell::before {
  content: "\F0A0A";
}

.mdi-prescription::before {
  content: "\F0706";
}

.mdi-presentation::before {
  content: "\F0428";
}

.mdi-presentation-play::before {
  content: "\F0429";
}

.mdi-printer::before {
  content: "\F042A";
}

.mdi-printer-3d::before {
  content: "\F042B";
}

.mdi-printer-3d-nozzle::before {
  content: "\F0E5B";
}

.mdi-printer-3d-nozzle-alert::before {
  content: "\F11C0";
}

.mdi-printer-3d-nozzle-alert-outline::before {
  content: "\F11C1";
}

.mdi-printer-3d-nozzle-outline::before {
  content: "\F0E5C";
}

.mdi-printer-alert::before {
  content: "\F042C";
}

.mdi-printer-check::before {
  content: "\F1146";
}

.mdi-printer-eye::before {
  content: "\F1458";
}

.mdi-printer-off::before {
  content: "\F0E5D";
}

.mdi-printer-pos::before {
  content: "\F1057";
}

.mdi-printer-search::before {
  content: "\F1457";
}

.mdi-printer-settings::before {
  content: "\F0707";
}

.mdi-printer-wireless::before {
  content: "\F0A0B";
}

.mdi-priority-high::before {
  content: "\F0603";
}

.mdi-priority-low::before {
  content: "\F0604";
}

.mdi-professional-hexagon::before {
  content: "\F042D";
}

.mdi-progress-alert::before {
  content: "\F0CBC";
}

.mdi-progress-check::before {
  content: "\F0995";
}

.mdi-progress-clock::before {
  content: "\F0996";
}

.mdi-progress-close::before {
  content: "\F110A";
}

.mdi-progress-download::before {
  content: "\F0997";
}

.mdi-progress-question::before {
  content: "\F1522";
}

.mdi-progress-upload::before {
  content: "\F0998";
}

.mdi-progress-wrench::before {
  content: "\F0CBD";
}

.mdi-projector::before {
  content: "\F042E";
}

.mdi-projector-screen::before {
  content: "\F042F";
}

.mdi-propane-tank::before {
  content: "\F1357";
}

.mdi-propane-tank-outline::before {
  content: "\F1358";
}

.mdi-protocol::before {
  content: "\F0FD8";
}

.mdi-publish::before {
  content: "\F06A7";
}

.mdi-pulse::before {
  content: "\F0430";
}

.mdi-pump::before {
  content: "\F1402";
}

.mdi-pumpkin::before {
  content: "\F0BBF";
}

.mdi-purse::before {
  content: "\F0F1C";
}

.mdi-purse-outline::before {
  content: "\F0F1D";
}

.mdi-puzzle::before {
  content: "\F0431";
}

.mdi-puzzle-check::before {
  content: "\F1426";
}

.mdi-puzzle-check-outline::before {
  content: "\F1427";
}

.mdi-puzzle-edit::before {
  content: "\F14D3";
}

.mdi-puzzle-edit-outline::before {
  content: "\F14D9";
}

.mdi-puzzle-heart::before {
  content: "\F14D4";
}

.mdi-puzzle-heart-outline::before {
  content: "\F14DA";
}

.mdi-puzzle-minus::before {
  content: "\F14D1";
}

.mdi-puzzle-minus-outline::before {
  content: "\F14D7";
}

.mdi-puzzle-outline::before {
  content: "\F0A66";
}

.mdi-puzzle-plus::before {
  content: "\F14D0";
}

.mdi-puzzle-plus-outline::before {
  content: "\F14D6";
}

.mdi-puzzle-remove::before {
  content: "\F14D2";
}

.mdi-puzzle-remove-outline::before {
  content: "\F14D8";
}

.mdi-puzzle-star::before {
  content: "\F14D5";
}

.mdi-puzzle-star-outline::before {
  content: "\F14DB";
}

.mdi-qi::before {
  content: "\F0999";
}

.mdi-qqchat::before {
  content: "\F0605";
}

.mdi-qrcode::before {
  content: "\F0432";
}

.mdi-qrcode-edit::before {
  content: "\F08B8";
}

.mdi-qrcode-minus::before {
  content: "\F118C";
}

.mdi-qrcode-plus::before {
  content: "\F118B";
}

.mdi-qrcode-remove::before {
  content: "\F118D";
}

.mdi-qrcode-scan::before {
  content: "\F0433";
}

.mdi-quadcopter::before {
  content: "\F0434";
}

.mdi-quality-high::before {
  content: "\F0435";
}

.mdi-quality-low::before {
  content: "\F0A0C";
}

.mdi-quality-medium::before {
  content: "\F0A0D";
}

.mdi-quora::before {
  content: "\F0D29";
}

.mdi-rabbit::before {
  content: "\F0907";
}

.mdi-racing-helmet::before {
  content: "\F0D93";
}

.mdi-racquetball::before {
  content: "\F0D94";
}

.mdi-radar::before {
  content: "\F0437";
}

.mdi-radiator::before {
  content: "\F0438";
}

.mdi-radiator-disabled::before {
  content: "\F0AD7";
}

.mdi-radiator-off::before {
  content: "\F0AD8";
}

.mdi-radio::before {
  content: "\F0439";
}

.mdi-radio-am::before {
  content: "\F0CBE";
}

.mdi-radio-fm::before {
  content: "\F0CBF";
}

.mdi-radio-handheld::before {
  content: "\F043A";
}

.mdi-radio-off::before {
  content: "\F121C";
}

.mdi-radio-tower::before {
  content: "\F043B";
}

.mdi-radioactive::before {
  content: "\F043C";
}

.mdi-radioactive-off::before {
  content: "\F0EC1";
}

.mdi-radiobox-blank::before {
  content: "\F043D";
}

.mdi-radiobox-marked::before {
  content: "\F043E";
}

.mdi-radiology-box::before {
  content: "\F14C5";
}

.mdi-radiology-box-outline::before {
  content: "\F14C6";
}

.mdi-radius::before {
  content: "\F0CC0";
}

.mdi-radius-outline::before {
  content: "\F0CC1";
}

.mdi-railroad-light::before {
  content: "\F0F1E";
}

.mdi-rake::before {
  content: "\F1544";
}

.mdi-raspberry-pi::before {
  content: "\F043F";
}

.mdi-ray-end::before {
  content: "\F0440";
}

.mdi-ray-end-arrow::before {
  content: "\F0441";
}

.mdi-ray-start::before {
  content: "\F0442";
}

.mdi-ray-start-arrow::before {
  content: "\F0443";
}

.mdi-ray-start-end::before {
  content: "\F0444";
}

.mdi-ray-vertex::before {
  content: "\F0445";
}

.mdi-react::before {
  content: "\F0708";
}

.mdi-read::before {
  content: "\F0447";
}

.mdi-receipt::before {
  content: "\F0449";
}

.mdi-record::before {
  content: "\F044A";
}

.mdi-record-circle::before {
  content: "\F0EC2";
}

.mdi-record-circle-outline::before {
  content: "\F0EC3";
}

.mdi-record-player::before {
  content: "\F099A";
}

.mdi-record-rec::before {
  content: "\F044B";
}

.mdi-rectangle::before {
  content: "\F0E5E";
}

.mdi-rectangle-outline::before {
  content: "\F0E5F";
}

.mdi-recycle::before {
  content: "\F044C";
}

.mdi-recycle-variant::before {
  content: "\F139D";
}

.mdi-reddit::before {
  content: "\F044D";
}

.mdi-redhat::before {
  content: "\F111B";
}

.mdi-redo::before {
  content: "\F044E";
}

.mdi-redo-variant::before {
  content: "\F044F";
}

.mdi-reflect-horizontal::before {
  content: "\F0A0E";
}

.mdi-reflect-vertical::before {
  content: "\F0A0F";
}

.mdi-refresh::before {
  content: "\F0450";
}

.mdi-refresh-circle::before {
  content: "\F1377";
}

.mdi-regex::before {
  content: "\F0451";
}

.mdi-registered-trademark::before {
  content: "\F0A67";
}

.mdi-relation-many-to-many::before {
  content: "\F1496";
}

.mdi-relation-many-to-one::before {
  content: "\F1497";
}

.mdi-relation-many-to-one-or-many::before {
  content: "\F1498";
}

.mdi-relation-many-to-only-one::before {
  content: "\F1499";
}

.mdi-relation-many-to-zero-or-many::before {
  content: "\F149A";
}

.mdi-relation-many-to-zero-or-one::before {
  content: "\F149B";
}

.mdi-relation-one-or-many-to-many::before {
  content: "\F149C";
}

.mdi-relation-one-or-many-to-one::before {
  content: "\F149D";
}

.mdi-relation-one-or-many-to-one-or-many::before {
  content: "\F149E";
}

.mdi-relation-one-or-many-to-only-one::before {
  content: "\F149F";
}

.mdi-relation-one-or-many-to-zero-or-many::before {
  content: "\F14A0";
}

.mdi-relation-one-or-many-to-zero-or-one::before {
  content: "\F14A1";
}

.mdi-relation-one-to-many::before {
  content: "\F14A2";
}

.mdi-relation-one-to-one::before {
  content: "\F14A3";
}

.mdi-relation-one-to-one-or-many::before {
  content: "\F14A4";
}

.mdi-relation-one-to-only-one::before {
  content: "\F14A5";
}

.mdi-relation-one-to-zero-or-many::before {
  content: "\F14A6";
}

.mdi-relation-one-to-zero-or-one::before {
  content: "\F14A7";
}

.mdi-relation-only-one-to-many::before {
  content: "\F14A8";
}

.mdi-relation-only-one-to-one::before {
  content: "\F14A9";
}

.mdi-relation-only-one-to-one-or-many::before {
  content: "\F14AA";
}

.mdi-relation-only-one-to-only-one::before {
  content: "\F14AB";
}

.mdi-relation-only-one-to-zero-or-many::before {
  content: "\F14AC";
}

.mdi-relation-only-one-to-zero-or-one::before {
  content: "\F14AD";
}

.mdi-relation-zero-or-many-to-many::before {
  content: "\F14AE";
}

.mdi-relation-zero-or-many-to-one::before {
  content: "\F14AF";
}

.mdi-relation-zero-or-many-to-one-or-many::before {
  content: "\F14B0";
}

.mdi-relation-zero-or-many-to-only-one::before {
  content: "\F14B1";
}

.mdi-relation-zero-or-many-to-zero-or-many::before {
  content: "\F14B2";
}

.mdi-relation-zero-or-many-to-zero-or-one::before {
  content: "\F14B3";
}

.mdi-relation-zero-or-one-to-many::before {
  content: "\F14B4";
}

.mdi-relation-zero-or-one-to-one::before {
  content: "\F14B5";
}

.mdi-relation-zero-or-one-to-one-or-many::before {
  content: "\F14B6";
}

.mdi-relation-zero-or-one-to-only-one::before {
  content: "\F14B7";
}

.mdi-relation-zero-or-one-to-zero-or-many::before {
  content: "\F14B8";
}

.mdi-relation-zero-or-one-to-zero-or-one::before {
  content: "\F14B9";
}

.mdi-relative-scale::before {
  content: "\F0452";
}

.mdi-reload::before {
  content: "\F0453";
}

.mdi-reload-alert::before {
  content: "\F110B";
}

.mdi-reminder::before {
  content: "\F088C";
}

.mdi-remote::before {
  content: "\F0454";
}

.mdi-remote-desktop::before {
  content: "\F08B9";
}

.mdi-remote-off::before {
  content: "\F0EC4";
}

.mdi-remote-tv::before {
  content: "\F0EC5";
}

.mdi-remote-tv-off::before {
  content: "\F0EC6";
}

.mdi-rename-box::before {
  content: "\F0455";
}

.mdi-reorder-horizontal::before {
  content: "\F0688";
}

.mdi-reorder-vertical::before {
  content: "\F0689";
}

.mdi-repeat::before {
  content: "\F0456";
}

.mdi-repeat-off::before {
  content: "\F0457";
}

.mdi-repeat-once::before {
  content: "\F0458";
}

.mdi-replay::before {
  content: "\F0459";
}

.mdi-reply::before {
  content: "\F045A";
}

.mdi-reply-all::before {
  content: "\F045B";
}

.mdi-reply-all-outline::before {
  content: "\F0F1F";
}

.mdi-reply-circle::before {
  content: "\F11AE";
}

.mdi-reply-outline::before {
  content: "\F0F20";
}

.mdi-reproduction::before {
  content: "\F045C";
}

.mdi-resistor::before {
  content: "\F0B44";
}

.mdi-resistor-nodes::before {
  content: "\F0B45";
}

.mdi-resize::before {
  content: "\F0A68";
}

.mdi-resize-bottom-right::before {
  content: "\F045D";
}

.mdi-responsive::before {
  content: "\F045E";
}

.mdi-restart::before {
  content: "\F0709";
}

.mdi-restart-alert::before {
  content: "\F110C";
}

.mdi-restart-off::before {
  content: "\F0D95";
}

.mdi-restore::before {
  content: "\F099B";
}

.mdi-restore-alert::before {
  content: "\F110D";
}

.mdi-rewind::before {
  content: "\F045F";
}

.mdi-rewind-10::before {
  content: "\F0D2A";
}

.mdi-rewind-30::before {
  content: "\F0D96";
}

.mdi-rewind-5::before {
  content: "\F11F9";
}

.mdi-rewind-outline::before {
  content: "\F070A";
}

.mdi-rhombus::before {
  content: "\F070B";
}

.mdi-rhombus-medium::before {
  content: "\F0A10";
}

.mdi-rhombus-medium-outline::before {
  content: "\F14DC";
}

.mdi-rhombus-outline::before {
  content: "\F070C";
}

.mdi-rhombus-split::before {
  content: "\F0A11";
}

.mdi-rhombus-split-outline::before {
  content: "\F14DD";
}

.mdi-ribbon::before {
  content: "\F0460";
}

.mdi-rice::before {
  content: "\F07EA";
}

.mdi-ring::before {
  content: "\F07EB";
}

.mdi-rivet::before {
  content: "\F0E60";
}

.mdi-road::before {
  content: "\F0461";
}

.mdi-road-variant::before {
  content: "\F0462";
}

.mdi-robber::before {
  content: "\F1058";
}

.mdi-robot::before {
  content: "\F06A9";
}

.mdi-robot-industrial::before {
  content: "\F0B46";
}

.mdi-robot-mower::before {
  content: "\F11F7";
}

.mdi-robot-mower-outline::before {
  content: "\F11F3";
}

.mdi-robot-vacuum::before {
  content: "\F070D";
}

.mdi-robot-vacuum-variant::before {
  content: "\F0908";
}

.mdi-rocket::before {
  content: "\F0463";
}

.mdi-rocket-launch::before {
  content: "\F14DE";
}

.mdi-rocket-launch-outline::before {
  content: "\F14DF";
}

.mdi-rocket-outline::before {
  content: "\F13AF";
}

.mdi-rodent::before {
  content: "\F1327";
}

.mdi-roller-skate::before {
  content: "\F0D2B";
}

.mdi-roller-skate-off::before {
  content: "\F0145";
}

.mdi-rollerblade::before {
  content: "\F0D2C";
}

.mdi-rollerblade-off::before {
  content: "\F002E";
}

.mdi-rollupjs::before {
  content: "\F0BC0";
}

.mdi-roman-numeral-1::before {
  content: "\F1088";
}

.mdi-roman-numeral-10::before {
  content: "\F1091";
}

.mdi-roman-numeral-2::before {
  content: "\F1089";
}

.mdi-roman-numeral-3::before {
  content: "\F108A";
}

.mdi-roman-numeral-4::before {
  content: "\F108B";
}

.mdi-roman-numeral-5::before {
  content: "\F108C";
}

.mdi-roman-numeral-6::before {
  content: "\F108D";
}

.mdi-roman-numeral-7::before {
  content: "\F108E";
}

.mdi-roman-numeral-8::before {
  content: "\F108F";
}

.mdi-roman-numeral-9::before {
  content: "\F1090";
}

.mdi-room-service::before {
  content: "\F088D";
}

.mdi-room-service-outline::before {
  content: "\F0D97";
}

.mdi-rotate-3d::before {
  content: "\F0EC7";
}

.mdi-rotate-3d-variant::before {
  content: "\F0464";
}

.mdi-rotate-left::before {
  content: "\F0465";
}

.mdi-rotate-left-variant::before {
  content: "\F0466";
}

.mdi-rotate-orbit::before {
  content: "\F0D98";
}

.mdi-rotate-right::before {
  content: "\F0467";
}

.mdi-rotate-right-variant::before {
  content: "\F0468";
}

.mdi-rounded-corner::before {
  content: "\F0607";
}

.mdi-router::before {
  content: "\F11E2";
}

.mdi-router-network::before {
  content: "\F1087";
}

.mdi-router-wireless::before {
  content: "\F0469";
}

.mdi-router-wireless-settings::before {
  content: "\F0A69";
}

.mdi-routes::before {
  content: "\F046A";
}

.mdi-routes-clock::before {
  content: "\F1059";
}

.mdi-rowing::before {
  content: "\F0608";
}

.mdi-rss::before {
  content: "\F046B";
}

.mdi-rss-box::before {
  content: "\F046C";
}

.mdi-rss-off::before {
  content: "\F0F21";
}

.mdi-rug::before {
  content: "\F1475";
}

.mdi-rugby::before {
  content: "\F0D99";
}

.mdi-ruler::before {
  content: "\F046D";
}

.mdi-ruler-square::before {
  content: "\F0CC2";
}

.mdi-ruler-square-compass::before {
  content: "\F0EBE";
}

.mdi-run::before {
  content: "\F070E";
}

.mdi-run-fast::before {
  content: "\F046E";
}

.mdi-rv-truck::before {
  content: "\F11D4";
}

.mdi-sack::before {
  content: "\F0D2E";
}

.mdi-sack-percent::before {
  content: "\F0D2F";
}

.mdi-safe::before {
  content: "\F0A6A";
}

.mdi-safe-square::before {
  content: "\F127C";
}

.mdi-safe-square-outline::before {
  content: "\F127D";
}

.mdi-safety-goggles::before {
  content: "\F0D30";
}

.mdi-sail-boat::before {
  content: "\F0EC8";
}

.mdi-sale::before {
  content: "\F046F";
}

.mdi-salesforce::before {
  content: "\F088E";
}

.mdi-sass::before {
  content: "\F07EC";
}

.mdi-satellite::before {
  content: "\F0470";
}

.mdi-satellite-uplink::before {
  content: "\F0909";
}

.mdi-satellite-variant::before {
  content: "\F0471";
}

.mdi-sausage::before {
  content: "\F08BA";
}

.mdi-saw-blade::before {
  content: "\F0E61";
}

.mdi-sawtooth-wave::before {
  content: "\F147A";
}

.mdi-saxophone::before {
  content: "\F0609";
}

.mdi-scale::before {
  content: "\F0472";
}

.mdi-scale-balance::before {
  content: "\F05D1";
}

.mdi-scale-bathroom::before {
  content: "\F0473";
}

.mdi-scale-off::before {
  content: "\F105A";
}

.mdi-scan-helper::before {
  content: "\F13D8";
}

.mdi-scanner::before {
  content: "\F06AB";
}

.mdi-scanner-off::before {
  content: "\F090A";
}

.mdi-scatter-plot::before {
  content: "\F0EC9";
}

.mdi-scatter-plot-outline::before {
  content: "\F0ECA";
}

.mdi-school::before {
  content: "\F0474";
}

.mdi-school-outline::before {
  content: "\F1180";
}

.mdi-scissors-cutting::before {
  content: "\F0A6B";
}

.mdi-scooter::before {
  content: "\F11E9";
}

.mdi-scoreboard::before {
  content: "\F127E";
}

.mdi-scoreboard-outline::before {
  content: "\F127F";
}

.mdi-screen-rotation::before {
  content: "\F0475";
}

.mdi-screen-rotation-lock::before {
  content: "\F0478";
}

.mdi-screw-flat-top::before {
  content: "\F0DF3";
}

.mdi-screw-lag::before {
  content: "\F0DF4";
}

.mdi-screw-machine-flat-top::before {
  content: "\F0DF5";
}

.mdi-screw-machine-round-top::before {
  content: "\F0DF6";
}

.mdi-screw-round-top::before {
  content: "\F0DF7";
}

.mdi-screwdriver::before {
  content: "\F0476";
}

.mdi-script::before {
  content: "\F0BC1";
}

.mdi-script-outline::before {
  content: "\F0477";
}

.mdi-script-text::before {
  content: "\F0BC2";
}

.mdi-script-text-outline::before {
  content: "\F0BC3";
}

.mdi-sd::before {
  content: "\F0479";
}

.mdi-seal::before {
  content: "\F047A";
}

.mdi-seal-variant::before {
  content: "\F0FD9";
}

.mdi-search-web::before {
  content: "\F070F";
}

.mdi-seat::before {
  content: "\F0CC3";
}

.mdi-seat-flat::before {
  content: "\F047B";
}

.mdi-seat-flat-angled::before {
  content: "\F047C";
}

.mdi-seat-individual-suite::before {
  content: "\F047D";
}

.mdi-seat-legroom-extra::before {
  content: "\F047E";
}

.mdi-seat-legroom-normal::before {
  content: "\F047F";
}

.mdi-seat-legroom-reduced::before {
  content: "\F0480";
}

.mdi-seat-outline::before {
  content: "\F0CC4";
}

.mdi-seat-passenger::before {
  content: "\F1249";
}

.mdi-seat-recline-extra::before {
  content: "\F0481";
}

.mdi-seat-recline-normal::before {
  content: "\F0482";
}

.mdi-seatbelt::before {
  content: "\F0CC5";
}

.mdi-security::before {
  content: "\F0483";
}

.mdi-security-network::before {
  content: "\F0484";
}

.mdi-seed::before {
  content: "\F0E62";
}

.mdi-seed-off::before {
  content: "\F13FD";
}

.mdi-seed-off-outline::before {
  content: "\F13FE";
}

.mdi-seed-outline::before {
  content: "\F0E63";
}

.mdi-segment::before {
  content: "\F0ECB";
}

.mdi-select::before {
  content: "\F0485";
}

.mdi-select-all::before {
  content: "\F0486";
}

.mdi-select-color::before {
  content: "\F0D31";
}

.mdi-select-compare::before {
  content: "\F0AD9";
}

.mdi-select-drag::before {
  content: "\F0A6C";
}

.mdi-select-group::before {
  content: "\F0F82";
}

.mdi-select-inverse::before {
  content: "\F0487";
}

.mdi-select-marker::before {
  content: "\F1280";
}

.mdi-select-multiple::before {
  content: "\F1281";
}

.mdi-select-multiple-marker::before {
  content: "\F1282";
}

.mdi-select-off::before {
  content: "\F0488";
}

.mdi-select-place::before {
  content: "\F0FDA";
}

.mdi-select-search::before {
  content: "\F1204";
}

.mdi-selection::before {
  content: "\F0489";
}

.mdi-selection-drag::before {
  content: "\F0A6D";
}

.mdi-selection-ellipse::before {
  content: "\F0D32";
}

.mdi-selection-ellipse-arrow-inside::before {
  content: "\F0F22";
}

.mdi-selection-marker::before {
  content: "\F1283";
}

.mdi-selection-multiple::before {
  content: "\F1285";
}

.mdi-selection-multiple-marker::before {
  content: "\F1284";
}

.mdi-selection-off::before {
  content: "\F0777";
}

.mdi-selection-search::before {
  content: "\F1205";
}

.mdi-semantic-web::before {
  content: "\F1316";
}

.mdi-send::before {
  content: "\F048A";
}

.mdi-send-check::before {
  content: "\F1161";
}

.mdi-send-check-outline::before {
  content: "\F1162";
}

.mdi-send-circle::before {
  content: "\F0DF8";
}

.mdi-send-circle-outline::before {
  content: "\F0DF9";
}

.mdi-send-clock::before {
  content: "\F1163";
}

.mdi-send-clock-outline::before {
  content: "\F1164";
}

.mdi-send-lock::before {
  content: "\F07ED";
}

.mdi-send-lock-outline::before {
  content: "\F1166";
}

.mdi-send-outline::before {
  content: "\F1165";
}

.mdi-serial-port::before {
  content: "\F065C";
}

.mdi-server::before {
  content: "\F048B";
}

.mdi-server-minus::before {
  content: "\F048C";
}

.mdi-server-network::before {
  content: "\F048D";
}

.mdi-server-network-off::before {
  content: "\F048E";
}

.mdi-server-off::before {
  content: "\F048F";
}

.mdi-server-plus::before {
  content: "\F0490";
}

.mdi-server-remove::before {
  content: "\F0491";
}

.mdi-server-security::before {
  content: "\F0492";
}

.mdi-set-all::before {
  content: "\F0778";
}

.mdi-set-center::before {
  content: "\F0779";
}

.mdi-set-center-right::before {
  content: "\F077A";
}

.mdi-set-left::before {
  content: "\F077B";
}

.mdi-set-left-center::before {
  content: "\F077C";
}

.mdi-set-left-right::before {
  content: "\F077D";
}

.mdi-set-merge::before {
  content: "\F14E0";
}

.mdi-set-none::before {
  content: "\F077E";
}

.mdi-set-right::before {
  content: "\F077F";
}

.mdi-set-split::before {
  content: "\F14E1";
}

.mdi-set-square::before {
  content: "\F145D";
}

.mdi-set-top-box::before {
  content: "\F099F";
}

.mdi-settings-helper::before {
  content: "\F0A6E";
}

.mdi-shaker::before {
  content: "\F110E";
}

.mdi-shaker-outline::before {
  content: "\F110F";
}

.mdi-shape::before {
  content: "\F0831";
}

.mdi-shape-circle-plus::before {
  content: "\F065D";
}

.mdi-shape-outline::before {
  content: "\F0832";
}

.mdi-shape-oval-plus::before {
  content: "\F11FA";
}

.mdi-shape-plus::before {
  content: "\F0495";
}

.mdi-shape-polygon-plus::before {
  content: "\F065E";
}

.mdi-shape-rectangle-plus::before {
  content: "\F065F";
}

.mdi-shape-square-plus::before {
  content: "\F0660";
}

.mdi-shape-square-rounded-plus::before {
  content: "\F14FA";
}

.mdi-share::before {
  content: "\F0496";
}

.mdi-share-all::before {
  content: "\F11F4";
}

.mdi-share-all-outline::before {
  content: "\F11F5";
}

.mdi-share-circle::before {
  content: "\F11AD";
}

.mdi-share-off::before {
  content: "\F0F23";
}

.mdi-share-off-outline::before {
  content: "\F0F24";
}

.mdi-share-outline::before {
  content: "\F0932";
}

.mdi-share-variant::before {
  content: "\F0497";
}

.mdi-share-variant-outline::before {
  content: "\F1514";
}

.mdi-sheep::before {
  content: "\F0CC6";
}

.mdi-shield::before {
  content: "\F0498";
}

.mdi-shield-account::before {
  content: "\F088F";
}

.mdi-shield-account-outline::before {
  content: "\F0A12";
}

.mdi-shield-airplane::before {
  content: "\F06BB";
}

.mdi-shield-airplane-outline::before {
  content: "\F0CC7";
}

.mdi-shield-alert::before {
  content: "\F0ECC";
}

.mdi-shield-alert-outline::before {
  content: "\F0ECD";
}

.mdi-shield-bug::before {
  content: "\F13DA";
}

.mdi-shield-bug-outline::before {
  content: "\F13DB";
}

.mdi-shield-car::before {
  content: "\F0F83";
}

.mdi-shield-check::before {
  content: "\F0565";
}

.mdi-shield-check-outline::before {
  content: "\F0CC8";
}

.mdi-shield-cross::before {
  content: "\F0CC9";
}

.mdi-shield-cross-outline::before {
  content: "\F0CCA";
}

.mdi-shield-edit::before {
  content: "\F11A0";
}

.mdi-shield-edit-outline::before {
  content: "\F11A1";
}

.mdi-shield-half::before {
  content: "\F1360";
}

.mdi-shield-half-full::before {
  content: "\F0780";
}

.mdi-shield-home::before {
  content: "\F068A";
}

.mdi-shield-home-outline::before {
  content: "\F0CCB";
}

.mdi-shield-key::before {
  content: "\F0BC4";
}

.mdi-shield-key-outline::before {
  content: "\F0BC5";
}

.mdi-shield-link-variant::before {
  content: "\F0D33";
}

.mdi-shield-link-variant-outline::before {
  content: "\F0D34";
}

.mdi-shield-lock::before {
  content: "\F099D";
}

.mdi-shield-lock-outline::before {
  content: "\F0CCC";
}

.mdi-shield-off::before {
  content: "\F099E";
}

.mdi-shield-off-outline::before {
  content: "\F099C";
}

.mdi-shield-outline::before {
  content: "\F0499";
}

.mdi-shield-plus::before {
  content: "\F0ADA";
}

.mdi-shield-plus-outline::before {
  content: "\F0ADB";
}

.mdi-shield-refresh::before {
  content: "\F00AA";
}

.mdi-shield-refresh-outline::before {
  content: "\F01E0";
}

.mdi-shield-remove::before {
  content: "\F0ADC";
}

.mdi-shield-remove-outline::before {
  content: "\F0ADD";
}

.mdi-shield-search::before {
  content: "\F0D9A";
}

.mdi-shield-star::before {
  content: "\F113B";
}

.mdi-shield-star-outline::before {
  content: "\F113C";
}

.mdi-shield-sun::before {
  content: "\F105D";
}

.mdi-shield-sun-outline::before {
  content: "\F105E";
}

.mdi-shield-sync::before {
  content: "\F11A2";
}

.mdi-shield-sync-outline::before {
  content: "\F11A3";
}

.mdi-ship-wheel::before {
  content: "\F0833";
}

.mdi-shoe-formal::before {
  content: "\F0B47";
}

.mdi-shoe-heel::before {
  content: "\F0B48";
}

.mdi-shoe-print::before {
  content: "\F0DFA";
}

.mdi-shopping::before {
  content: "\F049A";
}

.mdi-shopping-music::before {
  content: "\F049B";
}

.mdi-shopping-outline::before {
  content: "\F11D5";
}

.mdi-shopping-search::before {
  content: "\F0F84";
}

.mdi-shore::before {
  content: "\F14F9";
}

.mdi-shovel::before {
  content: "\F0710";
}

.mdi-shovel-off::before {
  content: "\F0711";
}

.mdi-shower::before {
  content: "\F09A0";
}

.mdi-shower-head::before {
  content: "\F09A1";
}

.mdi-shredder::before {
  content: "\F049C";
}

.mdi-shuffle::before {
  content: "\F049D";
}

.mdi-shuffle-disabled::before {
  content: "\F049E";
}

.mdi-shuffle-variant::before {
  content: "\F049F";
}

.mdi-shuriken::before {
  content: "\F137F";
}

.mdi-sigma::before {
  content: "\F04A0";
}

.mdi-sigma-lower::before {
  content: "\F062B";
}

.mdi-sign-caution::before {
  content: "\F04A1";
}

.mdi-sign-direction::before {
  content: "\F0781";
}

.mdi-sign-direction-minus::before {
  content: "\F1000";
}

.mdi-sign-direction-plus::before {
  content: "\F0FDC";
}

.mdi-sign-direction-remove::before {
  content: "\F0FDD";
}

.mdi-sign-pole::before {
  content: "\F14F8";
}

.mdi-sign-real-estate::before {
  content: "\F1118";
}

.mdi-sign-text::before {
  content: "\F0782";
}

.mdi-signal::before {
  content: "\F04A2";
}

.mdi-signal-2g::before {
  content: "\F0712";
}

.mdi-signal-3g::before {
  content: "\F0713";
}

.mdi-signal-4g::before {
  content: "\F0714";
}

.mdi-signal-5g::before {
  content: "\F0A6F";
}

.mdi-signal-cellular-1::before {
  content: "\F08BC";
}

.mdi-signal-cellular-2::before {
  content: "\F08BD";
}

.mdi-signal-cellular-3::before {
  content: "\F08BE";
}

.mdi-signal-cellular-outline::before {
  content: "\F08BF";
}

.mdi-signal-distance-variant::before {
  content: "\F0E64";
}

.mdi-signal-hspa::before {
  content: "\F0715";
}

.mdi-signal-hspa-plus::before {
  content: "\F0716";
}

.mdi-signal-off::before {
  content: "\F0783";
}

.mdi-signal-variant::before {
  content: "\F060A";
}

.mdi-signature::before {
  content: "\F0DFB";
}

.mdi-signature-freehand::before {
  content: "\F0DFC";
}

.mdi-signature-image::before {
  content: "\F0DFD";
}

.mdi-signature-text::before {
  content: "\F0DFE";
}

.mdi-silo::before {
  content: "\F0B49";
}

.mdi-silverware::before {
  content: "\F04A3";
}

.mdi-silverware-clean::before {
  content: "\F0FDE";
}

.mdi-silverware-fork::before {
  content: "\F04A4";
}

.mdi-silverware-fork-knife::before {
  content: "\F0A70";
}

.mdi-silverware-spoon::before {
  content: "\F04A5";
}

.mdi-silverware-variant::before {
  content: "\F04A6";
}

.mdi-sim::before {
  content: "\F04A7";
}

.mdi-sim-alert::before {
  content: "\F04A8";
}

.mdi-sim-off::before {
  content: "\F04A9";
}

.mdi-simple-icons::before {
  content: "\F131D";
}

.mdi-sina-weibo::before {
  content: "\F0ADF";
}

.mdi-sine-wave::before {
  content: "\F095B";
}

.mdi-sitemap::before {
  content: "\F04AA";
}

.mdi-size-l::before {
  content: "\F13A6";
}

.mdi-size-m::before {
  content: "\F13A5";
}

.mdi-size-s::before {
  content: "\F13A4";
}

.mdi-size-xl::before {
  content: "\F13A7";
}

.mdi-size-xs::before {
  content: "\F13A3";
}

.mdi-size-xxl::before {
  content: "\F13A8";
}

.mdi-size-xxs::before {
  content: "\F13A2";
}

.mdi-size-xxxl::before {
  content: "\F13A9";
}

.mdi-skate::before {
  content: "\F0D35";
}

.mdi-skateboard::before {
  content: "\F14C2";
}

.mdi-skew-less::before {
  content: "\F0D36";
}

.mdi-skew-more::before {
  content: "\F0D37";
}

.mdi-ski::before {
  content: "\F1304";
}

.mdi-ski-cross-country::before {
  content: "\F1305";
}

.mdi-ski-water::before {
  content: "\F1306";
}

.mdi-skip-backward::before {
  content: "\F04AB";
}

.mdi-skip-backward-outline::before {
  content: "\F0F25";
}

.mdi-skip-forward::before {
  content: "\F04AC";
}

.mdi-skip-forward-outline::before {
  content: "\F0F26";
}

.mdi-skip-next::before {
  content: "\F04AD";
}

.mdi-skip-next-circle::before {
  content: "\F0661";
}

.mdi-skip-next-circle-outline::before {
  content: "\F0662";
}

.mdi-skip-next-outline::before {
  content: "\F0F27";
}

.mdi-skip-previous::before {
  content: "\F04AE";
}

.mdi-skip-previous-circle::before {
  content: "\F0663";
}

.mdi-skip-previous-circle-outline::before {
  content: "\F0664";
}

.mdi-skip-previous-outline::before {
  content: "\F0F28";
}

.mdi-skull::before {
  content: "\F068C";
}

.mdi-skull-crossbones::before {
  content: "\F0BC6";
}

.mdi-skull-crossbones-outline::before {
  content: "\F0BC7";
}

.mdi-skull-outline::before {
  content: "\F0BC8";
}

.mdi-skull-scan::before {
  content: "\F14C7";
}

.mdi-skull-scan-outline::before {
  content: "\F14C8";
}

.mdi-skype::before {
  content: "\F04AF";
}

.mdi-skype-business::before {
  content: "\F04B0";
}

.mdi-slack::before {
  content: "\F04B1";
}

.mdi-slash-forward::before {
  content: "\F0FDF";
}

.mdi-slash-forward-box::before {
  content: "\F0FE0";
}

.mdi-sleep::before {
  content: "\F04B2";
}

.mdi-sleep-off::before {
  content: "\F04B3";
}

.mdi-slope-downhill::before {
  content: "\F0DFF";
}

.mdi-slope-uphill::before {
  content: "\F0E00";
}

.mdi-slot-machine::before {
  content: "\F1114";
}

.mdi-slot-machine-outline::before {
  content: "\F1115";
}

.mdi-smart-card::before {
  content: "\F10BD";
}

.mdi-smart-card-outline::before {
  content: "\F10BE";
}

.mdi-smart-card-reader::before {
  content: "\F10BF";
}

.mdi-smart-card-reader-outline::before {
  content: "\F10C0";
}

.mdi-smog::before {
  content: "\F0A71";
}

.mdi-smoke-detector::before {
  content: "\F0392";
}

.mdi-smoking::before {
  content: "\F04B4";
}

.mdi-smoking-off::before {
  content: "\F04B5";
}

.mdi-smoking-pipe::before {
  content: "\F140D";
}

.mdi-smoking-pipe-off::before {
  content: "\F1428";
}

.mdi-snake::before {
  content: "\F150E";
}

.mdi-snapchat::before {
  content: "\F04B6";
}

.mdi-snowboard::before {
  content: "\F1307";
}

.mdi-snowflake::before {
  content: "\F0717";
}

.mdi-snowflake-alert::before {
  content: "\F0F29";
}

.mdi-snowflake-melt::before {
  content: "\F12CB";
}

.mdi-snowflake-off::before {
  content: "\F14E3";
}

.mdi-snowflake-variant::before {
  content: "\F0F2A";
}

.mdi-snowman::before {
  content: "\F04B7";
}

.mdi-soccer::before {
  content: "\F04B8";
}

.mdi-soccer-field::before {
  content: "\F0834";
}

.mdi-sofa::before {
  content: "\F04B9";
}

.mdi-solar-panel::before {
  content: "\F0D9B";
}

.mdi-solar-panel-large::before {
  content: "\F0D9C";
}

.mdi-solar-power::before {
  content: "\F0A72";
}

.mdi-soldering-iron::before {
  content: "\F1092";
}

.mdi-solid::before {
  content: "\F068D";
}

.mdi-sony-playstation::before {
  content: "\F0414";
}

.mdi-sort::before {
  content: "\F04BA";
}

.mdi-sort-alphabetical-ascending::before {
  content: "\F05BD";
}

.mdi-sort-alphabetical-ascending-variant::before {
  content: "\F1148";
}

.mdi-sort-alphabetical-descending::before {
  content: "\F05BF";
}

.mdi-sort-alphabetical-descending-variant::before {
  content: "\F1149";
}

.mdi-sort-alphabetical-variant::before {
  content: "\F04BB";
}

.mdi-sort-ascending::before {
  content: "\F04BC";
}

.mdi-sort-bool-ascending::before {
  content: "\F1385";
}

.mdi-sort-bool-ascending-variant::before {
  content: "\F1386";
}

.mdi-sort-bool-descending::before {
  content: "\F1387";
}

.mdi-sort-bool-descending-variant::before {
  content: "\F1388";
}

.mdi-sort-calendar-ascending::before {
  content: "\F1547";
}

.mdi-sort-calendar-descending::before {
  content: "\F1548";
}

.mdi-sort-clock-ascending::before {
  content: "\F1549";
}

.mdi-sort-clock-ascending-outline::before {
  content: "\F154A";
}

.mdi-sort-clock-descending::before {
  content: "\F154B";
}

.mdi-sort-clock-descending-outline::before {
  content: "\F154C";
}

.mdi-sort-descending::before {
  content: "\F04BD";
}

.mdi-sort-numeric-ascending::before {
  content: "\F1389";
}

.mdi-sort-numeric-ascending-variant::before {
  content: "\F090D";
}

.mdi-sort-numeric-descending::before {
  content: "\F138A";
}

.mdi-sort-numeric-descending-variant::before {
  content: "\F0AD2";
}

.mdi-sort-numeric-variant::before {
  content: "\F04BE";
}

.mdi-sort-reverse-variant::before {
  content: "\F033C";
}

.mdi-sort-variant::before {
  content: "\F04BF";
}

.mdi-sort-variant-lock::before {
  content: "\F0CCD";
}

.mdi-sort-variant-lock-open::before {
  content: "\F0CCE";
}

.mdi-sort-variant-remove::before {
  content: "\F1147";
}

.mdi-soundcloud::before {
  content: "\F04C0";
}

.mdi-source-branch::before {
  content: "\F062C";
}

.mdi-source-branch-check::before {
  content: "\F14CF";
}

.mdi-source-branch-minus::before {
  content: "\F14CB";
}

.mdi-source-branch-plus::before {
  content: "\F14CA";
}

.mdi-source-branch-refresh::before {
  content: "\F14CD";
}

.mdi-source-branch-remove::before {
  content: "\F14CC";
}

.mdi-source-branch-sync::before {
  content: "\F14CE";
}

.mdi-source-commit::before {
  content: "\F0718";
}

.mdi-source-commit-end::before {
  content: "\F0719";
}

.mdi-source-commit-end-local::before {
  content: "\F071A";
}

.mdi-source-commit-local::before {
  content: "\F071B";
}

.mdi-source-commit-next-local::before {
  content: "\F071C";
}

.mdi-source-commit-start::before {
  content: "\F071D";
}

.mdi-source-commit-start-next-local::before {
  content: "\F071E";
}

.mdi-source-fork::before {
  content: "\F04C1";
}

.mdi-source-merge::before {
  content: "\F062D";
}

.mdi-source-pull::before {
  content: "\F04C2";
}

.mdi-source-repository::before {
  content: "\F0CCF";
}

.mdi-source-repository-multiple::before {
  content: "\F0CD0";
}

.mdi-soy-sauce::before {
  content: "\F07EE";
}

.mdi-soy-sauce-off::before {
  content: "\F13FC";
}

.mdi-spa::before {
  content: "\F0CD1";
}

.mdi-spa-outline::before {
  content: "\F0CD2";
}

.mdi-space-invaders::before {
  content: "\F0BC9";
}

.mdi-space-station::before {
  content: "\F1383";
}

.mdi-spade::before {
  content: "\F0E65";
}

.mdi-sparkles::before {
  content: "\F1545";
}

.mdi-speaker::before {
  content: "\F04C3";
}

.mdi-speaker-bluetooth::before {
  content: "\F09A2";
}

.mdi-speaker-multiple::before {
  content: "\F0D38";
}

.mdi-speaker-off::before {
  content: "\F04C4";
}

.mdi-speaker-wireless::before {
  content: "\F071F";
}

.mdi-speedometer::before {
  content: "\F04C5";
}

.mdi-speedometer-medium::before {
  content: "\F0F85";
}

.mdi-speedometer-slow::before {
  content: "\F0F86";
}

.mdi-spellcheck::before {
  content: "\F04C6";
}

.mdi-spider::before {
  content: "\F11EA";
}

.mdi-spider-thread::before {
  content: "\F11EB";
}

.mdi-spider-web::before {
  content: "\F0BCA";
}

.mdi-spirit-level::before {
  content: "\F14F1";
}

.mdi-spoon-sugar::before {
  content: "\F1429";
}

.mdi-spotify::before {
  content: "\F04C7";
}

.mdi-spotlight::before {
  content: "\F04C8";
}

.mdi-spotlight-beam::before {
  content: "\F04C9";
}

.mdi-spray::before {
  content: "\F0665";
}

.mdi-spray-bottle::before {
  content: "\F0AE0";
}

.mdi-sprinkler::before {
  content: "\F105F";
}

.mdi-sprinkler-variant::before {
  content: "\F1060";
}

.mdi-sprout::before {
  content: "\F0E66";
}

.mdi-sprout-outline::before {
  content: "\F0E67";
}

.mdi-square::before {
  content: "\F0764";
}

.mdi-square-circle::before {
  content: "\F1500";
}

.mdi-square-edit-outline::before {
  content: "\F090C";
}

.mdi-square-medium::before {
  content: "\F0A13";
}

.mdi-square-medium-outline::before {
  content: "\F0A14";
}

.mdi-square-off::before {
  content: "\F12EE";
}

.mdi-square-off-outline::before {
  content: "\F12EF";
}

.mdi-square-outline::before {
  content: "\F0763";
}

.mdi-square-root::before {
  content: "\F0784";
}

.mdi-square-root-box::before {
  content: "\F09A3";
}

.mdi-square-rounded::before {
  content: "\F14FB";
}

.mdi-square-rounded-outline::before {
  content: "\F14FC";
}

.mdi-square-small::before {
  content: "\F0A15";
}

.mdi-square-wave::before {
  content: "\F147B";
}

.mdi-squeegee::before {
  content: "\F0AE1";
}

.mdi-ssh::before {
  content: "\F08C0";
}

.mdi-stack-exchange::before {
  content: "\F060B";
}

.mdi-stack-overflow::before {
  content: "\F04CC";
}

.mdi-stackpath::before {
  content: "\F0359";
}

.mdi-stadium::before {
  content: "\F0FF9";
}

.mdi-stadium-variant::before {
  content: "\F0720";
}

.mdi-stairs::before {
  content: "\F04CD";
}

.mdi-stairs-box::before {
  content: "\F139E";
}

.mdi-stairs-down::before {
  content: "\F12BE";
}

.mdi-stairs-up::before {
  content: "\F12BD";
}

.mdi-stamper::before {
  content: "\F0D39";
}

.mdi-standard-definition::before {
  content: "\F07EF";
}

.mdi-star::before {
  content: "\F04CE";
}

.mdi-star-box::before {
  content: "\F0A73";
}

.mdi-star-box-multiple::before {
  content: "\F1286";
}

.mdi-star-box-multiple-outline::before {
  content: "\F1287";
}

.mdi-star-box-outline::before {
  content: "\F0A74";
}

.mdi-star-circle::before {
  content: "\F04CF";
}

.mdi-star-circle-outline::before {
  content: "\F09A4";
}

.mdi-star-face::before {
  content: "\F09A5";
}

.mdi-star-four-points::before {
  content: "\F0AE2";
}

.mdi-star-four-points-outline::before {
  content: "\F0AE3";
}

.mdi-star-half::before {
  content: "\F0246";
}

.mdi-star-half-full::before {
  content: "\F04D0";
}

.mdi-star-off::before {
  content: "\F04D1";
}

.mdi-star-outline::before {
  content: "\F04D2";
}

.mdi-star-three-points::before {
  content: "\F0AE4";
}

.mdi-star-three-points-outline::before {
  content: "\F0AE5";
}

.mdi-state-machine::before {
  content: "\F11EF";
}

.mdi-steam::before {
  content: "\F04D3";
}

.mdi-steering::before {
  content: "\F04D4";
}

.mdi-steering-off::before {
  content: "\F090E";
}

.mdi-step-backward::before {
  content: "\F04D5";
}

.mdi-step-backward-2::before {
  content: "\F04D6";
}

.mdi-step-forward::before {
  content: "\F04D7";
}

.mdi-step-forward-2::before {
  content: "\F04D8";
}

.mdi-stethoscope::before {
  content: "\F04D9";
}

.mdi-sticker::before {
  content: "\F1364";
}

.mdi-sticker-alert::before {
  content: "\F1365";
}

.mdi-sticker-alert-outline::before {
  content: "\F1366";
}

.mdi-sticker-check::before {
  content: "\F1367";
}

.mdi-sticker-check-outline::before {
  content: "\F1368";
}

.mdi-sticker-circle-outline::before {
  content: "\F05D0";
}

.mdi-sticker-emoji::before {
  content: "\F0785";
}

.mdi-sticker-minus::before {
  content: "\F1369";
}

.mdi-sticker-minus-outline::before {
  content: "\F136A";
}

.mdi-sticker-outline::before {
  content: "\F136B";
}

.mdi-sticker-plus::before {
  content: "\F136C";
}

.mdi-sticker-plus-outline::before {
  content: "\F136D";
}

.mdi-sticker-remove::before {
  content: "\F136E";
}

.mdi-sticker-remove-outline::before {
  content: "\F136F";
}

.mdi-stocking::before {
  content: "\F04DA";
}

.mdi-stomach::before {
  content: "\F1093";
}

.mdi-stop::before {
  content: "\F04DB";
}

.mdi-stop-circle::before {
  content: "\F0666";
}

.mdi-stop-circle-outline::before {
  content: "\F0667";
}

.mdi-store::before {
  content: "\F04DC";
}

.mdi-store-24-hour::before {
  content: "\F04DD";
}

.mdi-store-outline::before {
  content: "\F1361";
}

.mdi-storefront::before {
  content: "\F07C7";
}

.mdi-storefront-outline::before {
  content: "\F10C1";
}

.mdi-stove::before {
  content: "\F04DE";
}

.mdi-strategy::before {
  content: "\F11D6";
}

.mdi-stretch-to-page::before {
  content: "\F0F2B";
}

.mdi-stretch-to-page-outline::before {
  content: "\F0F2C";
}

.mdi-string-lights::before {
  content: "\F12BA";
}

.mdi-string-lights-off::before {
  content: "\F12BB";
}

.mdi-subdirectory-arrow-left::before {
  content: "\F060C";
}

.mdi-subdirectory-arrow-right::before {
  content: "\F060D";
}

.mdi-subtitles::before {
  content: "\F0A16";
}

.mdi-subtitles-outline::before {
  content: "\F0A17";
}

.mdi-subway::before {
  content: "\F06AC";
}

.mdi-subway-alert-variant::before {
  content: "\F0D9D";
}

.mdi-subway-variant::before {
  content: "\F04DF";
}

.mdi-summit::before {
  content: "\F0786";
}

.mdi-sunglasses::before {
  content: "\F04E0";
}

.mdi-surround-sound::before {
  content: "\F05C5";
}

.mdi-surround-sound-2-0::before {
  content: "\F07F0";
}

.mdi-surround-sound-3-1::before {
  content: "\F07F1";
}

.mdi-surround-sound-5-1::before {
  content: "\F07F2";
}

.mdi-surround-sound-7-1::before {
  content: "\F07F3";
}

.mdi-svg::before {
  content: "\F0721";
}

.mdi-swap-horizontal::before {
  content: "\F04E1";
}

.mdi-swap-horizontal-bold::before {
  content: "\F0BCD";
}

.mdi-swap-horizontal-circle::before {
  content: "\F0FE1";
}

.mdi-swap-horizontal-circle-outline::before {
  content: "\F0FE2";
}

.mdi-swap-horizontal-variant::before {
  content: "\F08C1";
}

.mdi-swap-vertical::before {
  content: "\F04E2";
}

.mdi-swap-vertical-bold::before {
  content: "\F0BCE";
}

.mdi-swap-vertical-circle::before {
  content: "\F0FE3";
}

.mdi-swap-vertical-circle-outline::before {
  content: "\F0FE4";
}

.mdi-swap-vertical-variant::before {
  content: "\F08C2";
}

.mdi-swim::before {
  content: "\F04E3";
}

.mdi-switch::before {
  content: "\F04E4";
}

.mdi-sword::before {
  content: "\F04E5";
}

.mdi-sword-cross::before {
  content: "\F0787";
}

.mdi-syllabary-hangul::before {
  content: "\F1333";
}

.mdi-syllabary-hiragana::before {
  content: "\F1334";
}

.mdi-syllabary-katakana::before {
  content: "\F1335";
}

.mdi-syllabary-katakana-halfwidth::before {
  content: "\F1336";
}

.mdi-symbol::before {
  content: "\F1501";
}

.mdi-symfony::before {
  content: "\F0AE6";
}

.mdi-sync::before {
  content: "\F04E6";
}

.mdi-sync-alert::before {
  content: "\F04E7";
}

.mdi-sync-circle::before {
  content: "\F1378";
}

.mdi-sync-off::before {
  content: "\F04E8";
}

.mdi-tab::before {
  content: "\F04E9";
}

.mdi-tab-minus::before {
  content: "\F0B4B";
}

.mdi-tab-plus::before {
  content: "\F075C";
}

.mdi-tab-remove::before {
  content: "\F0B4C";
}

.mdi-tab-unselected::before {
  content: "\F04EA";
}

.mdi-table::before {
  content: "\F04EB";
}

.mdi-table-account::before {
  content: "\F13B9";
}

.mdi-table-alert::before {
  content: "\F13BA";
}

.mdi-table-arrow-down::before {
  content: "\F13BB";
}

.mdi-table-arrow-left::before {
  content: "\F13BC";
}

.mdi-table-arrow-right::before {
  content: "\F13BD";
}

.mdi-table-arrow-up::before {
  content: "\F13BE";
}

.mdi-table-border::before {
  content: "\F0A18";
}

.mdi-table-cancel::before {
  content: "\F13BF";
}

.mdi-table-chair::before {
  content: "\F1061";
}

.mdi-table-check::before {
  content: "\F13C0";
}

.mdi-table-clock::before {
  content: "\F13C1";
}

.mdi-table-cog::before {
  content: "\F13C2";
}

.mdi-table-column::before {
  content: "\F0835";
}

.mdi-table-column-plus-after::before {
  content: "\F04EC";
}

.mdi-table-column-plus-before::before {
  content: "\F04ED";
}

.mdi-table-column-remove::before {
  content: "\F04EE";
}

.mdi-table-column-width::before {
  content: "\F04EF";
}

.mdi-table-edit::before {
  content: "\F04F0";
}

.mdi-table-eye::before {
  content: "\F1094";
}

.mdi-table-eye-off::before {
  content: "\F13C3";
}

.mdi-table-furniture::before {
  content: "\F05BC";
}

.mdi-table-headers-eye::before {
  content: "\F121D";
}

.mdi-table-headers-eye-off::before {
  content: "\F121E";
}

.mdi-table-heart::before {
  content: "\F13C4";
}

.mdi-table-key::before {
  content: "\F13C5";
}

.mdi-table-large::before {
  content: "\F04F1";
}

.mdi-table-large-plus::before {
  content: "\F0F87";
}

.mdi-table-large-remove::before {
  content: "\F0F88";
}

.mdi-table-lock::before {
  content: "\F13C6";
}

.mdi-table-merge-cells::before {
  content: "\F09A6";
}

.mdi-table-minus::before {
  content: "\F13C7";
}

.mdi-table-multiple::before {
  content: "\F13C8";
}

.mdi-table-network::before {
  content: "\F13C9";
}

.mdi-table-of-contents::before {
  content: "\F0836";
}

.mdi-table-off::before {
  content: "\F13CA";
}

.mdi-table-plus::before {
  content: "\F0A75";
}

.mdi-table-refresh::before {
  content: "\F13A0";
}

.mdi-table-remove::before {
  content: "\F0A76";
}

.mdi-table-row::before {
  content: "\F0837";
}

.mdi-table-row-height::before {
  content: "\F04F2";
}

.mdi-table-row-plus-after::before {
  content: "\F04F3";
}

.mdi-table-row-plus-before::before {
  content: "\F04F4";
}

.mdi-table-row-remove::before {
  content: "\F04F5";
}

.mdi-table-search::before {
  content: "\F090F";
}

.mdi-table-settings::before {
  content: "\F0838";
}

.mdi-table-split-cell::before {
  content: "\F142A";
}

.mdi-table-star::before {
  content: "\F13CB";
}

.mdi-table-sync::before {
  content: "\F13A1";
}

.mdi-table-tennis::before {
  content: "\F0E68";
}

.mdi-tablet::before {
  content: "\F04F6";
}

.mdi-tablet-android::before {
  content: "\F04F7";
}

.mdi-tablet-cellphone::before {
  content: "\F09A7";
}

.mdi-tablet-dashboard::before {
  content: "\F0ECE";
}

.mdi-tablet-ipad::before {
  content: "\F04F8";
}

.mdi-taco::before {
  content: "\F0762";
}

.mdi-tag::before {
  content: "\F04F9";
}

.mdi-tag-faces::before {
  content: "\F04FA";
}

.mdi-tag-heart::before {
  content: "\F068B";
}

.mdi-tag-heart-outline::before {
  content: "\F0BCF";
}

.mdi-tag-minus::before {
  content: "\F0910";
}

.mdi-tag-minus-outline::before {
  content: "\F121F";
}

.mdi-tag-multiple::before {
  content: "\F04FB";
}

.mdi-tag-multiple-outline::before {
  content: "\F12F7";
}

.mdi-tag-off::before {
  content: "\F1220";
}

.mdi-tag-off-outline::before {
  content: "\F1221";
}

.mdi-tag-outline::before {
  content: "\F04FC";
}

.mdi-tag-plus::before {
  content: "\F0722";
}

.mdi-tag-plus-outline::before {
  content: "\F1222";
}

.mdi-tag-remove::before {
  content: "\F0723";
}

.mdi-tag-remove-outline::before {
  content: "\F1223";
}

.mdi-tag-text::before {
  content: "\F1224";
}

.mdi-tag-text-outline::before {
  content: "\F04FD";
}

.mdi-tailwind::before {
  content: "\F13FF";
}

.mdi-tank::before {
  content: "\F0D3A";
}

.mdi-tanker-truck::before {
  content: "\F0FE5";
}

.mdi-tape-measure::before {
  content: "\F0B4D";
}

.mdi-target::before {
  content: "\F04FE";
}

.mdi-target-account::before {
  content: "\F0BD0";
}

.mdi-target-variant::before {
  content: "\F0A77";
}

.mdi-taxi::before {
  content: "\F04FF";
}

.mdi-tea::before {
  content: "\F0D9E";
}

.mdi-tea-outline::before {
  content: "\F0D9F";
}

.mdi-teach::before {
  content: "\F0890";
}

.mdi-teamviewer::before {
  content: "\F0500";
}

.mdi-telegram::before {
  content: "\F0501";
}

.mdi-telescope::before {
  content: "\F0B4E";
}

.mdi-television::before {
  content: "\F0502";
}

.mdi-television-ambient-light::before {
  content: "\F1356";
}

.mdi-television-box::before {
  content: "\F0839";
}

.mdi-television-classic::before {
  content: "\F07F4";
}

.mdi-television-classic-off::before {
  content: "\F083A";
}

.mdi-television-clean::before {
  content: "\F1110";
}

.mdi-television-guide::before {
  content: "\F0503";
}

.mdi-television-off::before {
  content: "\F083B";
}

.mdi-television-pause::before {
  content: "\F0F89";
}

.mdi-television-play::before {
  content: "\F0ECF";
}

.mdi-television-stop::before {
  content: "\F0F8A";
}

.mdi-temperature-celsius::before {
  content: "\F0504";
}

.mdi-temperature-fahrenheit::before {
  content: "\F0505";
}

.mdi-temperature-kelvin::before {
  content: "\F0506";
}

.mdi-tennis::before {
  content: "\F0DA0";
}

.mdi-tennis-ball::before {
  content: "\F0507";
}

.mdi-tent::before {
  content: "\F0508";
}

.mdi-terraform::before {
  content: "\F1062";
}

.mdi-terrain::before {
  content: "\F0509";
}

.mdi-test-tube::before {
  content: "\F0668";
}

.mdi-test-tube-empty::before {
  content: "\F0911";
}

.mdi-test-tube-off::before {
  content: "\F0912";
}

.mdi-text::before {
  content: "\F09A8";
}

.mdi-text-box::before {
  content: "\F021A";
}

.mdi-text-box-check::before {
  content: "\F0EA6";
}

.mdi-text-box-check-outline::before {
  content: "\F0EA7";
}

.mdi-text-box-minus::before {
  content: "\F0EA8";
}

.mdi-text-box-minus-outline::before {
  content: "\F0EA9";
}

.mdi-text-box-multiple::before {
  content: "\F0AB7";
}

.mdi-text-box-multiple-outline::before {
  content: "\F0AB8";
}

.mdi-text-box-outline::before {
  content: "\F09ED";
}

.mdi-text-box-plus::before {
  content: "\F0EAA";
}

.mdi-text-box-plus-outline::before {
  content: "\F0EAB";
}

.mdi-text-box-remove::before {
  content: "\F0EAC";
}

.mdi-text-box-remove-outline::before {
  content: "\F0EAD";
}

.mdi-text-box-search::before {
  content: "\F0EAE";
}

.mdi-text-box-search-outline::before {
  content: "\F0EAF";
}

.mdi-text-recognition::before {
  content: "\F113D";
}

.mdi-text-search::before {
  content: "\F13B8";
}

.mdi-text-shadow::before {
  content: "\F0669";
}

.mdi-text-short::before {
  content: "\F09A9";
}

.mdi-text-subject::before {
  content: "\F09AA";
}

.mdi-text-to-speech::before {
  content: "\F050A";
}

.mdi-text-to-speech-off::before {
  content: "\F050B";
}

.mdi-texture::before {
  content: "\F050C";
}

.mdi-texture-box::before {
  content: "\F0FE6";
}

.mdi-theater::before {
  content: "\F050D";
}

.mdi-theme-light-dark::before {
  content: "\F050E";
}

.mdi-thermometer::before {
  content: "\F050F";
}

.mdi-thermometer-alert::before {
  content: "\F0E01";
}

.mdi-thermometer-chevron-down::before {
  content: "\F0E02";
}

.mdi-thermometer-chevron-up::before {
  content: "\F0E03";
}

.mdi-thermometer-high::before {
  content: "\F10C2";
}

.mdi-thermometer-lines::before {
  content: "\F0510";
}

.mdi-thermometer-low::before {
  content: "\F10C3";
}

.mdi-thermometer-minus::before {
  content: "\F0E04";
}

.mdi-thermometer-off::before {
  content: "\F1531";
}

.mdi-thermometer-plus::before {
  content: "\F0E05";
}

.mdi-thermostat::before {
  content: "\F0393";
}

.mdi-thermostat-box::before {
  content: "\F0891";
}

.mdi-thought-bubble::before {
  content: "\F07F6";
}

.mdi-thought-bubble-outline::before {
  content: "\F07F7";
}

.mdi-thumb-down::before {
  content: "\F0511";
}

.mdi-thumb-down-outline::before {
  content: "\F0512";
}

.mdi-thumb-up::before {
  content: "\F0513";
}

.mdi-thumb-up-outline::before {
  content: "\F0514";
}

.mdi-thumbs-up-down::before {
  content: "\F0515";
}

.mdi-ticket::before {
  content: "\F0516";
}

.mdi-ticket-account::before {
  content: "\F0517";
}

.mdi-ticket-confirmation::before {
  content: "\F0518";
}

.mdi-ticket-confirmation-outline::before {
  content: "\F13AA";
}

.mdi-ticket-outline::before {
  content: "\F0913";
}

.mdi-ticket-percent::before {
  content: "\F0724";
}

.mdi-ticket-percent-outline::before {
  content: "\F142B";
}

.mdi-tie::before {
  content: "\F0519";
}

.mdi-tilde::before {
  content: "\F0725";
}

.mdi-timelapse::before {
  content: "\F051A";
}

.mdi-timeline::before {
  content: "\F0BD1";
}

.mdi-timeline-alert::before {
  content: "\F0F95";
}

.mdi-timeline-alert-outline::before {
  content: "\F0F98";
}

.mdi-timeline-check::before {
  content: "\F1532";
}

.mdi-timeline-check-outline::before {
  content: "\F1533";
}

.mdi-timeline-clock::before {
  content: "\F11FB";
}

.mdi-timeline-clock-outline::before {
  content: "\F11FC";
}

.mdi-timeline-help::before {
  content: "\F0F99";
}

.mdi-timeline-help-outline::before {
  content: "\F0F9A";
}

.mdi-timeline-minus::before {
  content: "\F1534";
}

.mdi-timeline-minus-outline::before {
  content: "\F1535";
}

.mdi-timeline-outline::before {
  content: "\F0BD2";
}

.mdi-timeline-plus::before {
  content: "\F0F96";
}

.mdi-timeline-plus-outline::before {
  content: "\F0F97";
}

.mdi-timeline-remove::before {
  content: "\F1536";
}

.mdi-timeline-remove-outline::before {
  content: "\F1537";
}

.mdi-timeline-text::before {
  content: "\F0BD3";
}

.mdi-timeline-text-outline::before {
  content: "\F0BD4";
}

.mdi-timer::before {
  content: "\F13AB";
}

.mdi-timer-10::before {
  content: "\F051C";
}

.mdi-timer-3::before {
  content: "\F051D";
}

.mdi-timer-off::before {
  content: "\F13AC";
}

.mdi-timer-off-outline::before {
  content: "\F051E";
}

.mdi-timer-outline::before {
  content: "\F051B";
}

.mdi-timer-sand::before {
  content: "\F051F";
}

.mdi-timer-sand-empty::before {
  content: "\F06AD";
}

.mdi-timer-sand-full::before {
  content: "\F078C";
}

.mdi-timetable::before {
  content: "\F0520";
}

.mdi-toaster::before {
  content: "\F1063";
}

.mdi-toaster-off::before {
  content: "\F11B7";
}

.mdi-toaster-oven::before {
  content: "\F0CD3";
}

.mdi-toggle-switch::before {
  content: "\F0521";
}

.mdi-toggle-switch-off::before {
  content: "\F0522";
}

.mdi-toggle-switch-off-outline::before {
  content: "\F0A19";
}

.mdi-toggle-switch-outline::before {
  content: "\F0A1A";
}

.mdi-toilet::before {
  content: "\F09AB";
}

.mdi-toolbox::before {
  content: "\F09AC";
}

.mdi-toolbox-outline::before {
  content: "\F09AD";
}

.mdi-tools::before {
  content: "\F1064";
}

.mdi-tooltip::before {
  content: "\F0523";
}

.mdi-tooltip-account::before {
  content: "\F000C";
}

.mdi-tooltip-edit::before {
  content: "\F0524";
}

.mdi-tooltip-edit-outline::before {
  content: "\F12C5";
}

.mdi-tooltip-image::before {
  content: "\F0525";
}

.mdi-tooltip-image-outline::before {
  content: "\F0BD5";
}

.mdi-tooltip-outline::before {
  content: "\F0526";
}

.mdi-tooltip-plus::before {
  content: "\F0BD6";
}

.mdi-tooltip-plus-outline::before {
  content: "\F0527";
}

.mdi-tooltip-text::before {
  content: "\F0528";
}

.mdi-tooltip-text-outline::before {
  content: "\F0BD7";
}

.mdi-tooth::before {
  content: "\F08C3";
}

.mdi-tooth-outline::before {
  content: "\F0529";
}

.mdi-toothbrush::before {
  content: "\F1129";
}

.mdi-toothbrush-electric::before {
  content: "\F112C";
}

.mdi-toothbrush-paste::before {
  content: "\F112A";
}

.mdi-tortoise::before {
  content: "\F0D3B";
}

.mdi-toslink::before {
  content: "\F12B8";
}

.mdi-tournament::before {
  content: "\F09AE";
}

.mdi-tow-truck::before {
  content: "\F083C";
}

.mdi-tower-beach::before {
  content: "\F0681";
}

.mdi-tower-fire::before {
  content: "\F0682";
}

.mdi-toy-brick::before {
  content: "\F1288";
}

.mdi-toy-brick-marker::before {
  content: "\F1289";
}

.mdi-toy-brick-marker-outline::before {
  content: "\F128A";
}

.mdi-toy-brick-minus::before {
  content: "\F128B";
}

.mdi-toy-brick-minus-outline::before {
  content: "\F128C";
}

.mdi-toy-brick-outline::before {
  content: "\F128D";
}

.mdi-toy-brick-plus::before {
  content: "\F128E";
}

.mdi-toy-brick-plus-outline::before {
  content: "\F128F";
}

.mdi-toy-brick-remove::before {
  content: "\F1290";
}

.mdi-toy-brick-remove-outline::before {
  content: "\F1291";
}

.mdi-toy-brick-search::before {
  content: "\F1292";
}

.mdi-toy-brick-search-outline::before {
  content: "\F1293";
}

.mdi-track-light::before {
  content: "\F0914";
}

.mdi-trackpad::before {
  content: "\F07F8";
}

.mdi-trackpad-lock::before {
  content: "\F0933";
}

.mdi-tractor::before {
  content: "\F0892";
}

.mdi-tractor-variant::before {
  content: "\F14C4";
}

.mdi-trademark::before {
  content: "\F0A78";
}

.mdi-traffic-cone::before {
  content: "\F137C";
}

.mdi-traffic-light::before {
  content: "\F052B";
}

.mdi-train::before {
  content: "\F052C";
}

.mdi-train-car::before {
  content: "\F0BD8";
}

.mdi-train-variant::before {
  content: "\F08C4";
}

.mdi-tram::before {
  content: "\F052D";
}

.mdi-tram-side::before {
  content: "\F0FE7";
}

.mdi-transcribe::before {
  content: "\F052E";
}

.mdi-transcribe-close::before {
  content: "\F052F";
}

.mdi-transfer::before {
  content: "\F1065";
}

.mdi-transfer-down::before {
  content: "\F0DA1";
}

.mdi-transfer-left::before {
  content: "\F0DA2";
}

.mdi-transfer-right::before {
  content: "\F0530";
}

.mdi-transfer-up::before {
  content: "\F0DA3";
}

.mdi-transit-connection::before {
  content: "\F0D3C";
}

.mdi-transit-connection-horizontal::before {
  content: "\F1546";
}

.mdi-transit-connection-variant::before {
  content: "\F0D3D";
}

.mdi-transit-detour::before {
  content: "\F0F8B";
}

.mdi-transit-skip::before {
  content: "\F1515";
}

.mdi-transit-transfer::before {
  content: "\F06AE";
}

.mdi-transition::before {
  content: "\F0915";
}

.mdi-transition-masked::before {
  content: "\F0916";
}

.mdi-translate::before {
  content: "\F05CA";
}

.mdi-translate-off::before {
  content: "\F0E06";
}

.mdi-transmission-tower::before {
  content: "\F0D3E";
}

.mdi-trash-can::before {
  content: "\F0A79";
}

.mdi-trash-can-outline::before {
  content: "\F0A7A";
}

.mdi-tray::before {
  content: "\F1294";
}

.mdi-tray-alert::before {
  content: "\F1295";
}

.mdi-tray-full::before {
  content: "\F1296";
}

.mdi-tray-minus::before {
  content: "\F1297";
}

.mdi-tray-plus::before {
  content: "\F1298";
}

.mdi-tray-remove::before {
  content: "\F1299";
}

.mdi-treasure-chest::before {
  content: "\F0726";
}

.mdi-tree::before {
  content: "\F0531";
}

.mdi-tree-outline::before {
  content: "\F0E69";
}

.mdi-trello::before {
  content: "\F0532";
}

.mdi-trending-down::before {
  content: "\F0533";
}

.mdi-trending-neutral::before {
  content: "\F0534";
}

.mdi-trending-up::before {
  content: "\F0535";
}

.mdi-triangle::before {
  content: "\F0536";
}

.mdi-triangle-outline::before {
  content: "\F0537";
}

.mdi-triangle-wave::before {
  content: "\F147C";
}

.mdi-triforce::before {
  content: "\F0BD9";
}

.mdi-trophy::before {
  content: "\F0538";
}

.mdi-trophy-award::before {
  content: "\F0539";
}

.mdi-trophy-broken::before {
  content: "\F0DA4";
}

.mdi-trophy-outline::before {
  content: "\F053A";
}

.mdi-trophy-variant::before {
  content: "\F053B";
}

.mdi-trophy-variant-outline::before {
  content: "\F053C";
}

.mdi-truck::before {
  content: "\F053D";
}

.mdi-truck-check::before {
  content: "\F0CD4";
}

.mdi-truck-check-outline::before {
  content: "\F129A";
}

.mdi-truck-delivery::before {
  content: "\F053E";
}

.mdi-truck-delivery-outline::before {
  content: "\F129B";
}

.mdi-truck-fast::before {
  content: "\F0788";
}

.mdi-truck-fast-outline::before {
  content: "\F129C";
}

.mdi-truck-outline::before {
  content: "\F129D";
}

.mdi-truck-trailer::before {
  content: "\F0727";
}

.mdi-trumpet::before {
  content: "\F1096";
}

.mdi-tshirt-crew::before {
  content: "\F0A7B";
}

.mdi-tshirt-crew-outline::before {
  content: "\F053F";
}

.mdi-tshirt-v::before {
  content: "\F0A7C";
}

.mdi-tshirt-v-outline::before {
  content: "\F0540";
}

.mdi-tumble-dryer::before {
  content: "\F0917";
}

.mdi-tumble-dryer-alert::before {
  content: "\F11BA";
}

.mdi-tumble-dryer-off::before {
  content: "\F11BB";
}

.mdi-tune::before {
  content: "\F062E";
}

.mdi-tune-variant::before {
  content: "\F1542";
}

.mdi-tune-vertical::before {
  content: "\F066A";
}

.mdi-tune-vertical-variant::before {
  content: "\F1543";
}

.mdi-turnstile::before {
  content: "\F0CD5";
}

.mdi-turnstile-outline::before {
  content: "\F0CD6";
}

.mdi-turtle::before {
  content: "\F0CD7";
}

.mdi-twitch::before {
  content: "\F0543";
}

.mdi-twitter::before {
  content: "\F0544";
}

.mdi-twitter-retweet::before {
  content: "\F0547";
}

.mdi-two-factor-authentication::before {
  content: "\F09AF";
}

.mdi-typewriter::before {
  content: "\F0F2D";
}

.mdi-ubisoft::before {
  content: "\F0BDA";
}

.mdi-ubuntu::before {
  content: "\F0548";
}

.mdi-ufo::before {
  content: "\F10C4";
}

.mdi-ufo-outline::before {
  content: "\F10C5";
}

.mdi-ultra-high-definition::before {
  content: "\F07F9";
}

.mdi-umbraco::before {
  content: "\F0549";
}

.mdi-umbrella::before {
  content: "\F054A";
}

.mdi-umbrella-closed::before {
  content: "\F09B0";
}

.mdi-umbrella-closed-outline::before {
  content: "\F13E2";
}

.mdi-umbrella-closed-variant::before {
  content: "\F13E1";
}

.mdi-umbrella-outline::before {
  content: "\F054B";
}

.mdi-undo::before {
  content: "\F054C";
}

.mdi-undo-variant::before {
  content: "\F054D";
}

.mdi-unfold-less-horizontal::before {
  content: "\F054E";
}

.mdi-unfold-less-vertical::before {
  content: "\F0760";
}

.mdi-unfold-more-horizontal::before {
  content: "\F054F";
}

.mdi-unfold-more-vertical::before {
  content: "\F0761";
}

.mdi-ungroup::before {
  content: "\F0550";
}

.mdi-unicode::before {
  content: "\F0ED0";
}

.mdi-unity::before {
  content: "\F06AF";
}

.mdi-unreal::before {
  content: "\F09B1";
}

.mdi-untappd::before {
  content: "\F0551";
}

.mdi-update::before {
  content: "\F06B0";
}

.mdi-upload::before {
  content: "\F0552";
}

.mdi-upload-lock::before {
  content: "\F1373";
}

.mdi-upload-lock-outline::before {
  content: "\F1374";
}

.mdi-upload-multiple::before {
  content: "\F083D";
}

.mdi-upload-network::before {
  content: "\F06F6";
}

.mdi-upload-network-outline::before {
  content: "\F0CD8";
}

.mdi-upload-off::before {
  content: "\F10C6";
}

.mdi-upload-off-outline::before {
  content: "\F10C7";
}

.mdi-upload-outline::before {
  content: "\F0E07";
}

.mdi-usb::before {
  content: "\F0553";
}

.mdi-usb-flash-drive::before {
  content: "\F129E";
}

.mdi-usb-flash-drive-outline::before {
  content: "\F129F";
}

.mdi-usb-port::before {
  content: "\F11F0";
}

.mdi-valve::before {
  content: "\F1066";
}

.mdi-valve-closed::before {
  content: "\F1067";
}

.mdi-valve-open::before {
  content: "\F1068";
}

.mdi-van-passenger::before {
  content: "\F07FA";
}

.mdi-van-utility::before {
  content: "\F07FB";
}

.mdi-vanish::before {
  content: "\F07FC";
}

.mdi-vanity-light::before {
  content: "\F11E1";
}

.mdi-variable::before {
  content: "\F0AE7";
}

.mdi-variable-box::before {
  content: "\F1111";
}

.mdi-vector-arrange-above::before {
  content: "\F0554";
}

.mdi-vector-arrange-below::before {
  content: "\F0555";
}

.mdi-vector-bezier::before {
  content: "\F0AE8";
}

.mdi-vector-circle::before {
  content: "\F0556";
}

.mdi-vector-circle-variant::before {
  content: "\F0557";
}

.mdi-vector-combine::before {
  content: "\F0558";
}

.mdi-vector-curve::before {
  content: "\F0559";
}

.mdi-vector-difference::before {
  content: "\F055A";
}

.mdi-vector-difference-ab::before {
  content: "\F055B";
}

.mdi-vector-difference-ba::before {
  content: "\F055C";
}

.mdi-vector-ellipse::before {
  content: "\F0893";
}

.mdi-vector-intersection::before {
  content: "\F055D";
}

.mdi-vector-line::before {
  content: "\F055E";
}

.mdi-vector-link::before {
  content: "\F0FE8";
}

.mdi-vector-point::before {
  content: "\F055F";
}

.mdi-vector-polygon::before {
  content: "\F0560";
}

.mdi-vector-polyline::before {
  content: "\F0561";
}

.mdi-vector-polyline-edit::before {
  content: "\F1225";
}

.mdi-vector-polyline-minus::before {
  content: "\F1226";
}

.mdi-vector-polyline-plus::before {
  content: "\F1227";
}

.mdi-vector-polyline-remove::before {
  content: "\F1228";
}

.mdi-vector-radius::before {
  content: "\F074A";
}

.mdi-vector-rectangle::before {
  content: "\F05C6";
}

.mdi-vector-selection::before {
  content: "\F0562";
}

.mdi-vector-square::before {
  content: "\F0001";
}

.mdi-vector-triangle::before {
  content: "\F0563";
}

.mdi-vector-union::before {
  content: "\F0564";
}

.mdi-vhs::before {
  content: "\F0A1B";
}

.mdi-vibrate::before {
  content: "\F0566";
}

.mdi-vibrate-off::before {
  content: "\F0CD9";
}

.mdi-video::before {
  content: "\F0567";
}

.mdi-video-3d::before {
  content: "\F07FD";
}

.mdi-video-3d-off::before {
  content: "\F13D9";
}

.mdi-video-3d-variant::before {
  content: "\F0ED1";
}

.mdi-video-4k-box::before {
  content: "\F083E";
}

.mdi-video-account::before {
  content: "\F0919";
}

.mdi-video-box::before {
  content: "\F00FD";
}

.mdi-video-box-off::before {
  content: "\F00FE";
}

.mdi-video-check::before {
  content: "\F1069";
}

.mdi-video-check-outline::before {
  content: "\F106A";
}

.mdi-video-high-definition::before {
  content: "\F152E";
}

.mdi-video-image::before {
  content: "\F091A";
}

.mdi-video-input-antenna::before {
  content: "\F083F";
}

.mdi-video-input-component::before {
  content: "\F0840";
}

.mdi-video-input-hdmi::before {
  content: "\F0841";
}

.mdi-video-input-scart::before {
  content: "\F0F8C";
}

.mdi-video-input-svideo::before {
  content: "\F0842";
}

.mdi-video-minus::before {
  content: "\F09B2";
}

.mdi-video-minus-outline::before {
  content: "\F02BA";
}

.mdi-video-off::before {
  content: "\F0568";
}

.mdi-video-off-outline::before {
  content: "\F0BDB";
}

.mdi-video-outline::before {
  content: "\F0BDC";
}

.mdi-video-plus::before {
  content: "\F09B3";
}

.mdi-video-plus-outline::before {
  content: "\F01D3";
}

.mdi-video-stabilization::before {
  content: "\F091B";
}

.mdi-video-switch::before {
  content: "\F0569";
}

.mdi-video-switch-outline::before {
  content: "\F0790";
}

.mdi-video-vintage::before {
  content: "\F0A1C";
}

.mdi-video-wireless::before {
  content: "\F0ED2";
}

.mdi-video-wireless-outline::before {
  content: "\F0ED3";
}

.mdi-view-agenda::before {
  content: "\F056A";
}

.mdi-view-agenda-outline::before {
  content: "\F11D8";
}

.mdi-view-array::before {
  content: "\F056B";
}

.mdi-view-array-outline::before {
  content: "\F1485";
}

.mdi-view-carousel::before {
  content: "\F056C";
}

.mdi-view-carousel-outline::before {
  content: "\F1486";
}

.mdi-view-column::before {
  content: "\F056D";
}

.mdi-view-column-outline::before {
  content: "\F1487";
}

.mdi-view-comfy::before {
  content: "\F0E6A";
}

.mdi-view-comfy-outline::before {
  content: "\F1488";
}

.mdi-view-compact::before {
  content: "\F0E6B";
}

.mdi-view-compact-outline::before {
  content: "\F0E6C";
}

.mdi-view-dashboard::before {
  content: "\F056E";
}

.mdi-view-dashboard-outline::before {
  content: "\F0A1D";
}

.mdi-view-dashboard-variant::before {
  content: "\F0843";
}

.mdi-view-dashboard-variant-outline::before {
  content: "\F1489";
}

.mdi-view-day::before {
  content: "\F056F";
}

.mdi-view-day-outline::before {
  content: "\F148A";
}

.mdi-view-grid::before {
  content: "\F0570";
}

.mdi-view-grid-outline::before {
  content: "\F11D9";
}

.mdi-view-grid-plus::before {
  content: "\F0F8D";
}

.mdi-view-grid-plus-outline::before {
  content: "\F11DA";
}

.mdi-view-headline::before {
  content: "\F0571";
}

.mdi-view-list::before {
  content: "\F0572";
}

.mdi-view-list-outline::before {
  content: "\F148B";
}

.mdi-view-module::before {
  content: "\F0573";
}

.mdi-view-module-outline::before {
  content: "\F148C";
}

.mdi-view-parallel::before {
  content: "\F0728";
}

.mdi-view-parallel-outline::before {
  content: "\F148D";
}

.mdi-view-quilt::before {
  content: "\F0574";
}

.mdi-view-quilt-outline::before {
  content: "\F148E";
}

.mdi-view-sequential::before {
  content: "\F0729";
}

.mdi-view-sequential-outline::before {
  content: "\F148F";
}

.mdi-view-split-horizontal::before {
  content: "\F0BCB";
}

.mdi-view-split-vertical::before {
  content: "\F0BCC";
}

.mdi-view-stream::before {
  content: "\F0575";
}

.mdi-view-stream-outline::before {
  content: "\F1490";
}

.mdi-view-week::before {
  content: "\F0576";
}

.mdi-view-week-outline::before {
  content: "\F1491";
}

.mdi-vimeo::before {
  content: "\F0577";
}

.mdi-violin::before {
  content: "\F060F";
}

.mdi-virtual-reality::before {
  content: "\F0894";
}

.mdi-virus::before {
  content: "\F13B6";
}

.mdi-virus-outline::before {
  content: "\F13B7";
}

.mdi-vk::before {
  content: "\F0579";
}

.mdi-vlc::before {
  content: "\F057C";
}

.mdi-voice-off::before {
  content: "\F0ED4";
}

.mdi-voicemail::before {
  content: "\F057D";
}

.mdi-volleyball::before {
  content: "\F09B4";
}

.mdi-volume-high::before {
  content: "\F057E";
}

.mdi-volume-low::before {
  content: "\F057F";
}

.mdi-volume-medium::before {
  content: "\F0580";
}

.mdi-volume-minus::before {
  content: "\F075E";
}

.mdi-volume-mute::before {
  content: "\F075F";
}

.mdi-volume-off::before {
  content: "\F0581";
}

.mdi-volume-plus::before {
  content: "\F075D";
}

.mdi-volume-source::before {
  content: "\F1120";
}

.mdi-volume-variant-off::before {
  content: "\F0E08";
}

.mdi-volume-vibrate::before {
  content: "\F1121";
}

.mdi-vote::before {
  content: "\F0A1F";
}

.mdi-vote-outline::before {
  content: "\F0A20";
}

.mdi-vpn::before {
  content: "\F0582";
}

.mdi-vuejs::before {
  content: "\F0844";
}

.mdi-vuetify::before {
  content: "\F0E6D";
}

.mdi-walk::before {
  content: "\F0583";
}

.mdi-wall::before {
  content: "\F07FE";
}

.mdi-wall-sconce::before {
  content: "\F091C";
}

.mdi-wall-sconce-flat::before {
  content: "\F091D";
}

.mdi-wall-sconce-flat-variant::before {
  content: "\F041C";
}

.mdi-wall-sconce-round::before {
  content: "\F0748";
}

.mdi-wall-sconce-round-variant::before {
  content: "\F091E";
}

.mdi-wallet::before {
  content: "\F0584";
}

.mdi-wallet-giftcard::before {
  content: "\F0585";
}

.mdi-wallet-membership::before {
  content: "\F0586";
}

.mdi-wallet-outline::before {
  content: "\F0BDD";
}

.mdi-wallet-plus::before {
  content: "\F0F8E";
}

.mdi-wallet-plus-outline::before {
  content: "\F0F8F";
}

.mdi-wallet-travel::before {
  content: "\F0587";
}

.mdi-wallpaper::before {
  content: "\F0E09";
}

.mdi-wan::before {
  content: "\F0588";
}

.mdi-wardrobe::before {
  content: "\F0F90";
}

.mdi-wardrobe-outline::before {
  content: "\F0F91";
}

.mdi-warehouse::before {
  content: "\F0F81";
}

.mdi-washing-machine::before {
  content: "\F072A";
}

.mdi-washing-machine-alert::before {
  content: "\F11BC";
}

.mdi-washing-machine-off::before {
  content: "\F11BD";
}

.mdi-watch::before {
  content: "\F0589";
}

.mdi-watch-export::before {
  content: "\F058A";
}

.mdi-watch-export-variant::before {
  content: "\F0895";
}

.mdi-watch-import::before {
  content: "\F058B";
}

.mdi-watch-import-variant::before {
  content: "\F0896";
}

.mdi-watch-variant::before {
  content: "\F0897";
}

.mdi-watch-vibrate::before {
  content: "\F06B1";
}

.mdi-watch-vibrate-off::before {
  content: "\F0CDA";
}

.mdi-water::before {
  content: "\F058C";
}

.mdi-water-alert::before {
  content: "\F1502";
}

.mdi-water-alert-outline::before {
  content: "\F1503";
}

.mdi-water-boiler::before {
  content: "\F0F92";
}

.mdi-water-boiler-alert::before {
  content: "\F11B3";
}

.mdi-water-boiler-off::before {
  content: "\F11B4";
}

.mdi-water-check::before {
  content: "\F1504";
}

.mdi-water-check-outline::before {
  content: "\F1505";
}

.mdi-water-minus::before {
  content: "\F1506";
}

.mdi-water-minus-outline::before {
  content: "\F1507";
}

.mdi-water-off::before {
  content: "\F058D";
}

.mdi-water-off-outline::before {
  content: "\F1508";
}

.mdi-water-outline::before {
  content: "\F0E0A";
}

.mdi-water-percent::before {
  content: "\F058E";
}

.mdi-water-percent-alert::before {
  content: "\F1509";
}

.mdi-water-plus::before {
  content: "\F150A";
}

.mdi-water-plus-outline::before {
  content: "\F150B";
}

.mdi-water-polo::before {
  content: "\F12A0";
}

.mdi-water-pump::before {
  content: "\F058F";
}

.mdi-water-pump-off::before {
  content: "\F0F93";
}

.mdi-water-remove::before {
  content: "\F150C";
}

.mdi-water-remove-outline::before {
  content: "\F150D";
}

.mdi-water-well::before {
  content: "\F106B";
}

.mdi-water-well-outline::before {
  content: "\F106C";
}

.mdi-watering-can::before {
  content: "\F1481";
}

.mdi-watering-can-outline::before {
  content: "\F1482";
}

.mdi-watermark::before {
  content: "\F0612";
}

.mdi-wave::before {
  content: "\F0F2E";
}

.mdi-waveform::before {
  content: "\F147D";
}

.mdi-waves::before {
  content: "\F078D";
}

.mdi-waze::before {
  content: "\F0BDE";
}

.mdi-weather-cloudy::before {
  content: "\F0590";
}

.mdi-weather-cloudy-alert::before {
  content: "\F0F2F";
}

.mdi-weather-cloudy-arrow-right::before {
  content: "\F0E6E";
}

.mdi-weather-fog::before {
  content: "\F0591";
}

.mdi-weather-hail::before {
  content: "\F0592";
}

.mdi-weather-hazy::before {
  content: "\F0F30";
}

.mdi-weather-hurricane::before {
  content: "\F0898";
}

.mdi-weather-lightning::before {
  content: "\F0593";
}

.mdi-weather-lightning-rainy::before {
  content: "\F067E";
}

.mdi-weather-night::before {
  content: "\F0594";
}

.mdi-weather-night-partly-cloudy::before {
  content: "\F0F31";
}

.mdi-weather-partly-cloudy::before {
  content: "\F0595";
}

.mdi-weather-partly-lightning::before {
  content: "\F0F32";
}

.mdi-weather-partly-rainy::before {
  content: "\F0F33";
}

.mdi-weather-partly-snowy::before {
  content: "\F0F34";
}

.mdi-weather-partly-snowy-rainy::before {
  content: "\F0F35";
}

.mdi-weather-pouring::before {
  content: "\F0596";
}

.mdi-weather-rainy::before {
  content: "\F0597";
}

.mdi-weather-snowy::before {
  content: "\F0598";
}

.mdi-weather-snowy-heavy::before {
  content: "\F0F36";
}

.mdi-weather-snowy-rainy::before {
  content: "\F067F";
}

.mdi-weather-sunny::before {
  content: "\F0599";
}

.mdi-weather-sunny-alert::before {
  content: "\F0F37";
}

.mdi-weather-sunny-off::before {
  content: "\F14E4";
}

.mdi-weather-sunset::before {
  content: "\F059A";
}

.mdi-weather-sunset-down::before {
  content: "\F059B";
}

.mdi-weather-sunset-up::before {
  content: "\F059C";
}

.mdi-weather-tornado::before {
  content: "\F0F38";
}

.mdi-weather-windy::before {
  content: "\F059D";
}

.mdi-weather-windy-variant::before {
  content: "\F059E";
}

.mdi-web::before {
  content: "\F059F";
}

.mdi-web-box::before {
  content: "\F0F94";
}

.mdi-web-clock::before {
  content: "\F124A";
}

.mdi-webcam::before {
  content: "\F05A0";
}

.mdi-webhook::before {
  content: "\F062F";
}

.mdi-webpack::before {
  content: "\F072B";
}

.mdi-webrtc::before {
  content: "\F1248";
}

.mdi-wechat::before {
  content: "\F0611";
}

.mdi-weight::before {
  content: "\F05A1";
}

.mdi-weight-gram::before {
  content: "\F0D3F";
}

.mdi-weight-kilogram::before {
  content: "\F05A2";
}

.mdi-weight-lifter::before {
  content: "\F115D";
}

.mdi-weight-pound::before {
  content: "\F09B5";
}

.mdi-whatsapp::before {
  content: "\F05A3";
}

.mdi-wheel-barrow::before {
  content: "\F14F2";
}

.mdi-wheelchair-accessibility::before {
  content: "\F05A4";
}

.mdi-whistle::before {
  content: "\F09B6";
}

.mdi-whistle-outline::before {
  content: "\F12BC";
}

.mdi-white-balance-auto::before {
  content: "\F05A5";
}

.mdi-white-balance-incandescent::before {
  content: "\F05A6";
}

.mdi-white-balance-iridescent::before {
  content: "\F05A7";
}

.mdi-white-balance-sunny::before {
  content: "\F05A8";
}

.mdi-widgets::before {
  content: "\F072C";
}

.mdi-widgets-outline::before {
  content: "\F1355";
}

.mdi-wifi::before {
  content: "\F05A9";
}

.mdi-wifi-off::before {
  content: "\F05AA";
}

.mdi-wifi-star::before {
  content: "\F0E0B";
}

.mdi-wifi-strength-1::before {
  content: "\F091F";
}

.mdi-wifi-strength-1-alert::before {
  content: "\F0920";
}

.mdi-wifi-strength-1-lock::before {
  content: "\F0921";
}

.mdi-wifi-strength-2::before {
  content: "\F0922";
}

.mdi-wifi-strength-2-alert::before {
  content: "\F0923";
}

.mdi-wifi-strength-2-lock::before {
  content: "\F0924";
}

.mdi-wifi-strength-3::before {
  content: "\F0925";
}

.mdi-wifi-strength-3-alert::before {
  content: "\F0926";
}

.mdi-wifi-strength-3-lock::before {
  content: "\F0927";
}

.mdi-wifi-strength-4::before {
  content: "\F0928";
}

.mdi-wifi-strength-4-alert::before {
  content: "\F0929";
}

.mdi-wifi-strength-4-lock::before {
  content: "\F092A";
}

.mdi-wifi-strength-alert-outline::before {
  content: "\F092B";
}

.mdi-wifi-strength-lock-outline::before {
  content: "\F092C";
}

.mdi-wifi-strength-off::before {
  content: "\F092D";
}

.mdi-wifi-strength-off-outline::before {
  content: "\F092E";
}

.mdi-wifi-strength-outline::before {
  content: "\F092F";
}

.mdi-wikipedia::before {
  content: "\F05AC";
}

.mdi-wind-turbine::before {
  content: "\F0DA5";
}

.mdi-window-close::before {
  content: "\F05AD";
}

.mdi-window-closed::before {
  content: "\F05AE";
}

.mdi-window-closed-variant::before {
  content: "\F11DB";
}

.mdi-window-maximize::before {
  content: "\F05AF";
}

.mdi-window-minimize::before {
  content: "\F05B0";
}

.mdi-window-open::before {
  content: "\F05B1";
}

.mdi-window-open-variant::before {
  content: "\F11DC";
}

.mdi-window-restore::before {
  content: "\F05B2";
}

.mdi-window-shutter::before {
  content: "\F111C";
}

.mdi-window-shutter-alert::before {
  content: "\F111D";
}

.mdi-window-shutter-open::before {
  content: "\F111E";
}

.mdi-wiper::before {
  content: "\F0AE9";
}

.mdi-wiper-wash::before {
  content: "\F0DA6";
}

.mdi-wizard-hat::before {
  content: "\F1477";
}

.mdi-wordpress::before {
  content: "\F05B4";
}

.mdi-wrap::before {
  content: "\F05B6";
}

.mdi-wrap-disabled::before {
  content: "\F0BDF";
}

.mdi-wrench::before {
  content: "\F05B7";
}

.mdi-wrench-outline::before {
  content: "\F0BE0";
}

.mdi-xamarin::before {
  content: "\F0845";
}

.mdi-xamarin-outline::before {
  content: "\F0846";
}

.mdi-xing::before {
  content: "\F05BE";
}

.mdi-xml::before {
  content: "\F05C0";
}

.mdi-xmpp::before {
  content: "\F07FF";
}

.mdi-y-combinator::before {
  content: "\F0624";
}

.mdi-yahoo::before {
  content: "\F0B4F";
}

.mdi-yeast::before {
  content: "\F05C1";
}

.mdi-yin-yang::before {
  content: "\F0680";
}

.mdi-yoga::before {
  content: "\F117C";
}

.mdi-youtube::before {
  content: "\F05C3";
}

.mdi-youtube-gaming::before {
  content: "\F0848";
}

.mdi-youtube-studio::before {
  content: "\F0847";
}

.mdi-youtube-subscription::before {
  content: "\F0D40";
}

.mdi-youtube-tv::before {
  content: "\F0448";
}

.mdi-yurt::before {
  content: "\F1516";
}

.mdi-z-wave::before {
  content: "\F0AEA";
}

.mdi-zend::before {
  content: "\F0AEB";
}

.mdi-zigbee::before {
  content: "\F0D41";
}

.mdi-zip-box::before {
  content: "\F05C4";
}

.mdi-zip-box-outline::before {
  content: "\F0FFA";
}

.mdi-zip-disk::before {
  content: "\F0A23";
}

.mdi-zodiac-aquarius::before {
  content: "\F0A7D";
}

.mdi-zodiac-aries::before {
  content: "\F0A7E";
}

.mdi-zodiac-cancer::before {
  content: "\F0A7F";
}

.mdi-zodiac-capricorn::before {
  content: "\F0A80";
}

.mdi-zodiac-gemini::before {
  content: "\F0A81";
}

.mdi-zodiac-leo::before {
  content: "\F0A82";
}

.mdi-zodiac-libra::before {
  content: "\F0A83";
}

.mdi-zodiac-pisces::before {
  content: "\F0A84";
}

.mdi-zodiac-sagittarius::before {
  content: "\F0A85";
}

.mdi-zodiac-scorpio::before {
  content: "\F0A86";
}

.mdi-zodiac-taurus::before {
  content: "\F0A87";
}

.mdi-zodiac-virgo::before {
  content: "\F0A88";
}

.mdi-blank::before {
  content: "\F68C";
  visibility: hidden;
}

.mdi-18px.mdi-set, .mdi-18px.mdi:before {
  font-size: 18px;
}

.mdi-24px.mdi-set, .mdi-24px.mdi:before {
  font-size: 24px;
}

.mdi-36px.mdi-set, .mdi-36px.mdi:before {
  font-size: 36px;
}

.mdi-48px.mdi-set, .mdi-48px.mdi:before {
  font-size: 48px;
}

.mdi-dark:before {
  color: rgba(0, 0, 0, 0.54);
}

.mdi-dark.mdi-inactive:before {
  color: rgba(0, 0, 0, 0.26);
}

.mdi-light:before {
  color: white;
}

.mdi-light.mdi-inactive:before {
  color: rgba(255, 255, 255, 0.3);
}

.mdi-rotate-45 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(45deg);
            transform: scaleX(-1) rotate(45deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: scaleY(-1) rotate(45deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-45:before {
  transform: rotate(45deg);
}

.mdi-rotate-90 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(90deg);
            transform: scaleX(-1) rotate(90deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: scaleY(-1) rotate(90deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-90:before {
  transform: rotate(90deg);
}

.mdi-rotate-135 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(135deg);
            transform: scaleX(-1) rotate(135deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: scaleY(-1) rotate(135deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-135:before {
  transform: rotate(135deg);
}

.mdi-rotate-180 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(180deg);
            transform: scaleX(-1) rotate(180deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: scaleY(-1) rotate(180deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-180:before {
  transform: rotate(180deg);
}

.mdi-rotate-225 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(225deg);
            transform: scaleX(-1) rotate(225deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(225deg);
            -ms-transform: rotate(225deg);
            transform: scaleY(-1) rotate(225deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-225:before {
  transform: rotate(225deg);
}

.mdi-rotate-270 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(270deg);
            transform: scaleX(-1) rotate(270deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: scaleY(-1) rotate(270deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-270:before {
  transform: rotate(270deg);
}

.mdi-rotate-315 {
  /*
        // Not included in production
        &.mdi-flip-h:before {
            -webkit-transform: scaleX(-1) rotate(315deg);
            transform: scaleX(-1) rotate(315deg);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        &.mdi-flip-v:before {
            -webkit-transform: scaleY(-1) rotate(315deg);
            -ms-transform: rotate(315deg);
            transform: scaleY(-1) rotate(315deg);
            filter: FlipV;
            -ms-filter: "FlipV";
        }
        */
}

.mdi-rotate-315:before {
  transform: rotate(315deg);
}

.mdi-flip-h:before {
  transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}

.mdi-flip-v:before {
  transform: scaleY(-1);
  filter: FlipV;
  -ms-filter: "FlipV";
}

.mdi-spin:before {
  animation: mdi-spin 2s infinite linear;
}

@keyframes mdi-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}</style><style type="text/css">@charset "UTF-8";
/*!
* Vuetify v2.3.7
* Forged by John Leider
* Released under the MIT License.
*/@keyframes v-shake{59%{margin-left:0}60%,80%{margin-left:2px}70%,90%{margin-left:-2px}}.v-application .black{background-color:#000!important;border-color:#000!important}.v-application .black--text{color:#000!important;caret-color:#000!important}.v-application .white{background-color:#fff!important;border-color:#fff!important}.v-application .white--text{color:#fff!important;caret-color:#fff!important}.v-application .transparent{background-color:transparent!important;border-color:transparent!important}.v-application .transparent--text{color:transparent!important;caret-color:transparent!important}.v-application .red{background-color:#f44336!important;border-color:#f44336!important}.v-application .red--text{color:#f44336!important;caret-color:#f44336!important}.v-application .red.lighten-5{background-color:#ffebee!important;border-color:#ffebee!important}.v-application .red--text.text--lighten-5{color:#ffebee!important;caret-color:#ffebee!important}.v-application .red.lighten-4{background-color:#ffcdd2!important;border-color:#ffcdd2!important}.v-application .red--text.text--lighten-4{color:#ffcdd2!important;caret-color:#ffcdd2!important}.v-application .red.lighten-3{background-color:#ef9a9a!important;border-color:#ef9a9a!important}.v-application .red--text.text--lighten-3{color:#ef9a9a!important;caret-color:#ef9a9a!important}.v-application .red.lighten-2{background-color:#e57373!important;border-color:#e57373!important}.v-application .red--text.text--lighten-2{color:#e57373!important;caret-color:#e57373!important}.v-application .red.lighten-1{background-color:#ef5350!important;border-color:#ef5350!important}.v-application .red--text.text--lighten-1{color:#ef5350!important;caret-color:#ef5350!important}.v-application .red.darken-1{background-color:#e53935!important;border-color:#e53935!important}.v-application .red--text.text--darken-1{color:#e53935!important;caret-color:#e53935!important}.v-application .red.darken-2{background-color:#d32f2f!important;border-color:#d32f2f!important}.v-application .red--text.text--darken-2{color:#d32f2f!important;caret-color:#d32f2f!important}.v-application .red.darken-3{background-color:#c62828!important;border-color:#c62828!important}.v-application .red--text.text--darken-3{color:#c62828!important;caret-color:#c62828!important}.v-application .red.darken-4{background-color:#b71c1c!important;border-color:#b71c1c!important}.v-application .red--text.text--darken-4{color:#b71c1c!important;caret-color:#b71c1c!important}.v-application .red.accent-1{background-color:#ff8a80!important;border-color:#ff8a80!important}.v-application .red--text.text--accent-1{color:#ff8a80!important;caret-color:#ff8a80!important}.v-application .red.accent-2{background-color:#ff5252!important;border-color:#ff5252!important}.v-application .red--text.text--accent-2{color:#ff5252!important;caret-color:#ff5252!important}.v-application .red.accent-3{background-color:#ff1744!important;border-color:#ff1744!important}.v-application .red--text.text--accent-3{color:#ff1744!important;caret-color:#ff1744!important}.v-application .red.accent-4{background-color:#d50000!important;border-color:#d50000!important}.v-application .red--text.text--accent-4{color:#d50000!important;caret-color:#d50000!important}.v-application .pink{background-color:#e91e63!important;border-color:#e91e63!important}.v-application .pink--text{color:#e91e63!important;caret-color:#e91e63!important}.v-application .pink.lighten-5{background-color:#fce4ec!important;border-color:#fce4ec!important}.v-application .pink--text.text--lighten-5{color:#fce4ec!important;caret-color:#fce4ec!important}.v-application .pink.lighten-4{background-color:#f8bbd0!important;border-color:#f8bbd0!important}.v-application .pink--text.text--lighten-4{color:#f8bbd0!important;caret-color:#f8bbd0!important}.v-application .pink.lighten-3{background-color:#f48fb1!important;border-color:#f48fb1!important}.v-application .pink--text.text--lighten-3{color:#f48fb1!important;caret-color:#f48fb1!important}.v-application .pink.lighten-2{background-color:#f06292!important;border-color:#f06292!important}.v-application .pink--text.text--lighten-2{color:#f06292!important;caret-color:#f06292!important}.v-application .pink.lighten-1{background-color:#ec407a!important;border-color:#ec407a!important}.v-application .pink--text.text--lighten-1{color:#ec407a!important;caret-color:#ec407a!important}.v-application .pink.darken-1{background-color:#d81b60!important;border-color:#d81b60!important}.v-application .pink--text.text--darken-1{color:#d81b60!important;caret-color:#d81b60!important}.v-application .pink.darken-2{background-color:#c2185b!important;border-color:#c2185b!important}.v-application .pink--text.text--darken-2{color:#c2185b!important;caret-color:#c2185b!important}.v-application .pink.darken-3{background-color:#ad1457!important;border-color:#ad1457!important}.v-application .pink--text.text--darken-3{color:#ad1457!important;caret-color:#ad1457!important}.v-application .pink.darken-4{background-color:#880e4f!important;border-color:#880e4f!important}.v-application .pink--text.text--darken-4{color:#880e4f!important;caret-color:#880e4f!important}.v-application .pink.accent-1{background-color:#ff80ab!important;border-color:#ff80ab!important}.v-application .pink--text.text--accent-1{color:#ff80ab!important;caret-color:#ff80ab!important}.v-application .pink.accent-2{background-color:#ff4081!important;border-color:#ff4081!important}.v-application .pink--text.text--accent-2{color:#ff4081!important;caret-color:#ff4081!important}.v-application .pink.accent-3{background-color:#f50057!important;border-color:#f50057!important}.v-application .pink--text.text--accent-3{color:#f50057!important;caret-color:#f50057!important}.v-application .pink.accent-4{background-color:#c51162!important;border-color:#c51162!important}.v-application .pink--text.text--accent-4{color:#c51162!important;caret-color:#c51162!important}.v-application .purple{background-color:#9c27b0!important;border-color:#9c27b0!important}.v-application .purple--text{color:#9c27b0!important;caret-color:#9c27b0!important}.v-application .purple.lighten-5{background-color:#f3e5f5!important;border-color:#f3e5f5!important}.v-application .purple--text.text--lighten-5{color:#f3e5f5!important;caret-color:#f3e5f5!important}.v-application .purple.lighten-4{background-color:#e1bee7!important;border-color:#e1bee7!important}.v-application .purple--text.text--lighten-4{color:#e1bee7!important;caret-color:#e1bee7!important}.v-application .purple.lighten-3{background-color:#ce93d8!important;border-color:#ce93d8!important}.v-application .purple--text.text--lighten-3{color:#ce93d8!important;caret-color:#ce93d8!important}.v-application .purple.lighten-2{background-color:#ba68c8!important;border-color:#ba68c8!important}.v-application .purple--text.text--lighten-2{color:#ba68c8!important;caret-color:#ba68c8!important}.v-application .purple.lighten-1{background-color:#ab47bc!important;border-color:#ab47bc!important}.v-application .purple--text.text--lighten-1{color:#ab47bc!important;caret-color:#ab47bc!important}.v-application .purple.darken-1{background-color:#8e24aa!important;border-color:#8e24aa!important}.v-application .purple--text.text--darken-1{color:#8e24aa!important;caret-color:#8e24aa!important}.v-application .purple.darken-2{background-color:#7b1fa2!important;border-color:#7b1fa2!important}.v-application .purple--text.text--darken-2{color:#7b1fa2!important;caret-color:#7b1fa2!important}.v-application .purple.darken-3{background-color:#6a1b9a!important;border-color:#6a1b9a!important}.v-application .purple--text.text--darken-3{color:#6a1b9a!important;caret-color:#6a1b9a!important}.v-application .purple.darken-4{background-color:#4a148c!important;border-color:#4a148c!important}.v-application .purple--text.text--darken-4{color:#4a148c!important;caret-color:#4a148c!important}.v-application .purple.accent-1{background-color:#ea80fc!important;border-color:#ea80fc!important}.v-application .purple--text.text--accent-1{color:#ea80fc!important;caret-color:#ea80fc!important}.v-application .purple.accent-2{background-color:#e040fb!important;border-color:#e040fb!important}.v-application .purple--text.text--accent-2{color:#e040fb!important;caret-color:#e040fb!important}.v-application .purple.accent-3{background-color:#d500f9!important;border-color:#d500f9!important}.v-application .purple--text.text--accent-3{color:#d500f9!important;caret-color:#d500f9!important}.v-application .purple.accent-4{background-color:#a0f!important;border-color:#a0f!important}.v-application .purple--text.text--accent-4{color:#a0f!important;caret-color:#a0f!important}.v-application .deep-purple{background-color:#673ab7!important;border-color:#673ab7!important}.v-application .deep-purple--text{color:#673ab7!important;caret-color:#673ab7!important}.v-application .deep-purple.lighten-5{background-color:#ede7f6!important;border-color:#ede7f6!important}.v-application .deep-purple--text.text--lighten-5{color:#ede7f6!important;caret-color:#ede7f6!important}.v-application .deep-purple.lighten-4{background-color:#d1c4e9!important;border-color:#d1c4e9!important}.v-application .deep-purple--text.text--lighten-4{color:#d1c4e9!important;caret-color:#d1c4e9!important}.v-application .deep-purple.lighten-3{background-color:#b39ddb!important;border-color:#b39ddb!important}.v-application .deep-purple--text.text--lighten-3{color:#b39ddb!important;caret-color:#b39ddb!important}.v-application .deep-purple.lighten-2{background-color:#9575cd!important;border-color:#9575cd!important}.v-application .deep-purple--text.text--lighten-2{color:#9575cd!important;caret-color:#9575cd!important}.v-application .deep-purple.lighten-1{background-color:#7e57c2!important;border-color:#7e57c2!important}.v-application .deep-purple--text.text--lighten-1{color:#7e57c2!important;caret-color:#7e57c2!important}.v-application .deep-purple.darken-1{background-color:#5e35b1!important;border-color:#5e35b1!important}.v-application .deep-purple--text.text--darken-1{color:#5e35b1!important;caret-color:#5e35b1!important}.v-application .deep-purple.darken-2{background-color:#512da8!important;border-color:#512da8!important}.v-application .deep-purple--text.text--darken-2{color:#512da8!important;caret-color:#512da8!important}.v-application .deep-purple.darken-3{background-color:#4527a0!important;border-color:#4527a0!important}.v-application .deep-purple--text.text--darken-3{color:#4527a0!important;caret-color:#4527a0!important}.v-application .deep-purple.darken-4{background-color:#311b92!important;border-color:#311b92!important}.v-application .deep-purple--text.text--darken-4{color:#311b92!important;caret-color:#311b92!important}.v-application .deep-purple.accent-1{background-color:#b388ff!important;border-color:#b388ff!important}.v-application .deep-purple--text.text--accent-1{color:#b388ff!important;caret-color:#b388ff!important}.v-application .deep-purple.accent-2{background-color:#7c4dff!important;border-color:#7c4dff!important}.v-application .deep-purple--text.text--accent-2{color:#7c4dff!important;caret-color:#7c4dff!important}.v-application .deep-purple.accent-3{background-color:#651fff!important;border-color:#651fff!important}.v-application .deep-purple--text.text--accent-3{color:#651fff!important;caret-color:#651fff!important}.v-application .deep-purple.accent-4{background-color:#6200ea!important;border-color:#6200ea!important}.v-application .deep-purple--text.text--accent-4{color:#6200ea!important;caret-color:#6200ea!important}.v-application .indigo{background-color:#3f51b5!important;border-color:#3f51b5!important}.v-application .indigo--text{color:#3f51b5!important;caret-color:#3f51b5!important}.v-application .indigo.lighten-5{background-color:#e8eaf6!important;border-color:#e8eaf6!important}.v-application .indigo--text.text--lighten-5{color:#e8eaf6!important;caret-color:#e8eaf6!important}.v-application .indigo.lighten-4{background-color:#c5cae9!important;border-color:#c5cae9!important}.v-application .indigo--text.text--lighten-4{color:#c5cae9!important;caret-color:#c5cae9!important}.v-application .indigo.lighten-3{background-color:#9fa8da!important;border-color:#9fa8da!important}.v-application .indigo--text.text--lighten-3{color:#9fa8da!important;caret-color:#9fa8da!important}.v-application .indigo.lighten-2{background-color:#7986cb!important;border-color:#7986cb!important}.v-application .indigo--text.text--lighten-2{color:#7986cb!important;caret-color:#7986cb!important}.v-application .indigo.lighten-1{background-color:#5c6bc0!important;border-color:#5c6bc0!important}.v-application .indigo--text.text--lighten-1{color:#5c6bc0!important;caret-color:#5c6bc0!important}.v-application .indigo.darken-1{background-color:#3949ab!important;border-color:#3949ab!important}.v-application .indigo--text.text--darken-1{color:#3949ab!important;caret-color:#3949ab!important}.v-application .indigo.darken-2{background-color:#303f9f!important;border-color:#303f9f!important}.v-application .indigo--text.text--darken-2{color:#303f9f!important;caret-color:#303f9f!important}.v-application .indigo.darken-3{background-color:#283593!important;border-color:#283593!important}.v-application .indigo--text.text--darken-3{color:#283593!important;caret-color:#283593!important}.v-application .indigo.darken-4{background-color:#1a237e!important;border-color:#1a237e!important}.v-application .indigo--text.text--darken-4{color:#1a237e!important;caret-color:#1a237e!important}.v-application .indigo.accent-1{background-color:#8c9eff!important;border-color:#8c9eff!important}.v-application .indigo--text.text--accent-1{color:#8c9eff!important;caret-color:#8c9eff!important}.v-application .indigo.accent-2{background-color:#536dfe!important;border-color:#536dfe!important}.v-application .indigo--text.text--accent-2{color:#536dfe!important;caret-color:#536dfe!important}.v-application .indigo.accent-3{background-color:#3d5afe!important;border-color:#3d5afe!important}.v-application .indigo--text.text--accent-3{color:#3d5afe!important;caret-color:#3d5afe!important}.v-application .indigo.accent-4{background-color:#304ffe!important;border-color:#304ffe!important}.v-application .indigo--text.text--accent-4{color:#304ffe!important;caret-color:#304ffe!important}.v-application .blue{background-color:#2196f3!important;border-color:#2196f3!important}.v-application .blue--text{color:#2196f3!important;caret-color:#2196f3!important}.v-application .blue.lighten-5{background-color:#e3f2fd!important;border-color:#e3f2fd!important}.v-application .blue--text.text--lighten-5{color:#e3f2fd!important;caret-color:#e3f2fd!important}.v-application .blue.lighten-4{background-color:#bbdefb!important;border-color:#bbdefb!important}.v-application .blue--text.text--lighten-4{color:#bbdefb!important;caret-color:#bbdefb!important}.v-application .blue.lighten-3{background-color:#90caf9!important;border-color:#90caf9!important}.v-application .blue--text.text--lighten-3{color:#90caf9!important;caret-color:#90caf9!important}.v-application .blue.lighten-2{background-color:#64b5f6!important;border-color:#64b5f6!important}.v-application .blue--text.text--lighten-2{color:#64b5f6!important;caret-color:#64b5f6!important}.v-application .blue.lighten-1{background-color:#42a5f5!important;border-color:#42a5f5!important}.v-application .blue--text.text--lighten-1{color:#42a5f5!important;caret-color:#42a5f5!important}.v-application .blue.darken-1{background-color:#1e88e5!important;border-color:#1e88e5!important}.v-application .blue--text.text--darken-1{color:#1e88e5!important;caret-color:#1e88e5!important}.v-application .blue.darken-2{background-color:#1976d2!important;border-color:#1976d2!important}.v-application .blue--text.text--darken-2{color:#1976d2!important;caret-color:#1976d2!important}.v-application .blue.darken-3{background-color:#1565c0!important;border-color:#1565c0!important}.v-application .blue--text.text--darken-3{color:#1565c0!important;caret-color:#1565c0!important}.v-application .blue.darken-4{background-color:#0d47a1!important;border-color:#0d47a1!important}.v-application .blue--text.text--darken-4{color:#0d47a1!important;caret-color:#0d47a1!important}.v-application .blue.accent-1{background-color:#82b1ff!important;border-color:#82b1ff!important}.v-application .blue--text.text--accent-1{color:#82b1ff!important;caret-color:#82b1ff!important}.v-application .blue.accent-2{background-color:#448aff!important;border-color:#448aff!important}.v-application .blue--text.text--accent-2{color:#448aff!important;caret-color:#448aff!important}.v-application .blue.accent-3{background-color:#2979ff!important;border-color:#2979ff!important}.v-application .blue--text.text--accent-3{color:#2979ff!important;caret-color:#2979ff!important}.v-application .blue.accent-4{background-color:#2962ff!important;border-color:#2962ff!important}.v-application .blue--text.text--accent-4{color:#2962ff!important;caret-color:#2962ff!important}.v-application .light-blue{background-color:#03a9f4!important;border-color:#03a9f4!important}.v-application .light-blue--text{color:#03a9f4!important;caret-color:#03a9f4!important}.v-application .light-blue.lighten-5{background-color:#e1f5fe!important;border-color:#e1f5fe!important}.v-application .light-blue--text.text--lighten-5{color:#e1f5fe!important;caret-color:#e1f5fe!important}.v-application .light-blue.lighten-4{background-color:#b3e5fc!important;border-color:#b3e5fc!important}.v-application .light-blue--text.text--lighten-4{color:#b3e5fc!important;caret-color:#b3e5fc!important}.v-application .light-blue.lighten-3{background-color:#81d4fa!important;border-color:#81d4fa!important}.v-application .light-blue--text.text--lighten-3{color:#81d4fa!important;caret-color:#81d4fa!important}.v-application .light-blue.lighten-2{background-color:#4fc3f7!important;border-color:#4fc3f7!important}.v-application .light-blue--text.text--lighten-2{color:#4fc3f7!important;caret-color:#4fc3f7!important}.v-application .light-blue.lighten-1{background-color:#29b6f6!important;border-color:#29b6f6!important}.v-application .light-blue--text.text--lighten-1{color:#29b6f6!important;caret-color:#29b6f6!important}.v-application .light-blue.darken-1{background-color:#039be5!important;border-color:#039be5!important}.v-application .light-blue--text.text--darken-1{color:#039be5!important;caret-color:#039be5!important}.v-application .light-blue.darken-2{background-color:#0288d1!important;border-color:#0288d1!important}.v-application .light-blue--text.text--darken-2{color:#0288d1!important;caret-color:#0288d1!important}.v-application .light-blue.darken-3{background-color:#0277bd!important;border-color:#0277bd!important}.v-application .light-blue--text.text--darken-3{color:#0277bd!important;caret-color:#0277bd!important}.v-application .light-blue.darken-4{background-color:#01579b!important;border-color:#01579b!important}.v-application .light-blue--text.text--darken-4{color:#01579b!important;caret-color:#01579b!important}.v-application .light-blue.accent-1{background-color:#80d8ff!important;border-color:#80d8ff!important}.v-application .light-blue--text.text--accent-1{color:#80d8ff!important;caret-color:#80d8ff!important}.v-application .light-blue.accent-2{background-color:#40c4ff!important;border-color:#40c4ff!important}.v-application .light-blue--text.text--accent-2{color:#40c4ff!important;caret-color:#40c4ff!important}.v-application .light-blue.accent-3{background-color:#00b0ff!important;border-color:#00b0ff!important}.v-application .light-blue--text.text--accent-3{color:#00b0ff!important;caret-color:#00b0ff!important}.v-application .light-blue.accent-4{background-color:#0091ea!important;border-color:#0091ea!important}.v-application .light-blue--text.text--accent-4{color:#0091ea!important;caret-color:#0091ea!important}.v-application .cyan{background-color:#00bcd4!important;border-color:#00bcd4!important}.v-application .cyan--text{color:#00bcd4!important;caret-color:#00bcd4!important}.v-application .cyan.lighten-5{background-color:#e0f7fa!important;border-color:#e0f7fa!important}.v-application .cyan--text.text--lighten-5{color:#e0f7fa!important;caret-color:#e0f7fa!important}.v-application .cyan.lighten-4{background-color:#b2ebf2!important;border-color:#b2ebf2!important}.v-application .cyan--text.text--lighten-4{color:#b2ebf2!important;caret-color:#b2ebf2!important}.v-application .cyan.lighten-3{background-color:#80deea!important;border-color:#80deea!important}.v-application .cyan--text.text--lighten-3{color:#80deea!important;caret-color:#80deea!important}.v-application .cyan.lighten-2{background-color:#4dd0e1!important;border-color:#4dd0e1!important}.v-application .cyan--text.text--lighten-2{color:#4dd0e1!important;caret-color:#4dd0e1!important}.v-application .cyan.lighten-1{background-color:#26c6da!important;border-color:#26c6da!important}.v-application .cyan--text.text--lighten-1{color:#26c6da!important;caret-color:#26c6da!important}.v-application .cyan.darken-1{background-color:#00acc1!important;border-color:#00acc1!important}.v-application .cyan--text.text--darken-1{color:#00acc1!important;caret-color:#00acc1!important}.v-application .cyan.darken-2{background-color:#0097a7!important;border-color:#0097a7!important}.v-application .cyan--text.text--darken-2{color:#0097a7!important;caret-color:#0097a7!important}.v-application .cyan.darken-3{background-color:#00838f!important;border-color:#00838f!important}.v-application .cyan--text.text--darken-3{color:#00838f!important;caret-color:#00838f!important}.v-application .cyan.darken-4{background-color:#006064!important;border-color:#006064!important}.v-application .cyan--text.text--darken-4{color:#006064!important;caret-color:#006064!important}.v-application .cyan.accent-1{background-color:#84ffff!important;border-color:#84ffff!important}.v-application .cyan--text.text--accent-1{color:#84ffff!important;caret-color:#84ffff!important}.v-application .cyan.accent-2{background-color:#18ffff!important;border-color:#18ffff!important}.v-application .cyan--text.text--accent-2{color:#18ffff!important;caret-color:#18ffff!important}.v-application .cyan.accent-3{background-color:#00e5ff!important;border-color:#00e5ff!important}.v-application .cyan--text.text--accent-3{color:#00e5ff!important;caret-color:#00e5ff!important}.v-application .cyan.accent-4{background-color:#00b8d4!important;border-color:#00b8d4!important}.v-application .cyan--text.text--accent-4{color:#00b8d4!important;caret-color:#00b8d4!important}.v-application .teal{background-color:#009688!important;border-color:#009688!important}.v-application .teal--text{color:#009688!important;caret-color:#009688!important}.v-application .teal.lighten-5{background-color:#e0f2f1!important;border-color:#e0f2f1!important}.v-application .teal--text.text--lighten-5{color:#e0f2f1!important;caret-color:#e0f2f1!important}.v-application .teal.lighten-4{background-color:#b2dfdb!important;border-color:#b2dfdb!important}.v-application .teal--text.text--lighten-4{color:#b2dfdb!important;caret-color:#b2dfdb!important}.v-application .teal.lighten-3{background-color:#80cbc4!important;border-color:#80cbc4!important}.v-application .teal--text.text--lighten-3{color:#80cbc4!important;caret-color:#80cbc4!important}.v-application .teal.lighten-2{background-color:#4db6ac!important;border-color:#4db6ac!important}.v-application .teal--text.text--lighten-2{color:#4db6ac!important;caret-color:#4db6ac!important}.v-application .teal.lighten-1{background-color:#26a69a!important;border-color:#26a69a!important}.v-application .teal--text.text--lighten-1{color:#26a69a!important;caret-color:#26a69a!important}.v-application .teal.darken-1{background-color:#00897b!important;border-color:#00897b!important}.v-application .teal--text.text--darken-1{color:#00897b!important;caret-color:#00897b!important}.v-application .teal.darken-2{background-color:#00796b!important;border-color:#00796b!important}.v-application .teal--text.text--darken-2{color:#00796b!important;caret-color:#00796b!important}.v-application .teal.darken-3{background-color:#00695c!important;border-color:#00695c!important}.v-application .teal--text.text--darken-3{color:#00695c!important;caret-color:#00695c!important}.v-application .teal.darken-4{background-color:#004d40!important;border-color:#004d40!important}.v-application .teal--text.text--darken-4{color:#004d40!important;caret-color:#004d40!important}.v-application .teal.accent-1{background-color:#a7ffeb!important;border-color:#a7ffeb!important}.v-application .teal--text.text--accent-1{color:#a7ffeb!important;caret-color:#a7ffeb!important}.v-application .teal.accent-2{background-color:#64ffda!important;border-color:#64ffda!important}.v-application .teal--text.text--accent-2{color:#64ffda!important;caret-color:#64ffda!important}.v-application .teal.accent-3{background-color:#1de9b6!important;border-color:#1de9b6!important}.v-application .teal--text.text--accent-3{color:#1de9b6!important;caret-color:#1de9b6!important}.v-application .teal.accent-4{background-color:#00bfa5!important;border-color:#00bfa5!important}.v-application .teal--text.text--accent-4{color:#00bfa5!important;caret-color:#00bfa5!important}.v-application .green{background-color:#4caf50!important;border-color:#4caf50!important}.v-application .green--text{color:#4caf50!important;caret-color:#4caf50!important}.v-application .green.lighten-5{background-color:#e8f5e9!important;border-color:#e8f5e9!important}.v-application .green--text.text--lighten-5{color:#e8f5e9!important;caret-color:#e8f5e9!important}.v-application .green.lighten-4{background-color:#c8e6c9!important;border-color:#c8e6c9!important}.v-application .green--text.text--lighten-4{color:#c8e6c9!important;caret-color:#c8e6c9!important}.v-application .green.lighten-3{background-color:#a5d6a7!important;border-color:#a5d6a7!important}.v-application .green--text.text--lighten-3{color:#a5d6a7!important;caret-color:#a5d6a7!important}.v-application .green.lighten-2{background-color:#81c784!important;border-color:#81c784!important}.v-application .green--text.text--lighten-2{color:#81c784!important;caret-color:#81c784!important}.v-application .green.lighten-1{background-color:#66bb6a!important;border-color:#66bb6a!important}.v-application .green--text.text--lighten-1{color:#66bb6a!important;caret-color:#66bb6a!important}.v-application .green.darken-1{background-color:#43a047!important;border-color:#43a047!important}.v-application .green--text.text--darken-1{color:#43a047!important;caret-color:#43a047!important}.v-application .green.darken-2{background-color:#388e3c!important;border-color:#388e3c!important}.v-application .green--text.text--darken-2{color:#388e3c!important;caret-color:#388e3c!important}.v-application .green.darken-3{background-color:#2e7d32!important;border-color:#2e7d32!important}.v-application .green--text.text--darken-3{color:#2e7d32!important;caret-color:#2e7d32!important}.v-application .green.darken-4{background-color:#1b5e20!important;border-color:#1b5e20!important}.v-application .green--text.text--darken-4{color:#1b5e20!important;caret-color:#1b5e20!important}.v-application .green.accent-1{background-color:#b9f6ca!important;border-color:#b9f6ca!important}.v-application .green--text.text--accent-1{color:#b9f6ca!important;caret-color:#b9f6ca!important}.v-application .green.accent-2{background-color:#69f0ae!important;border-color:#69f0ae!important}.v-application .green--text.text--accent-2{color:#69f0ae!important;caret-color:#69f0ae!important}.v-application .green.accent-3{background-color:#00e676!important;border-color:#00e676!important}.v-application .green--text.text--accent-3{color:#00e676!important;caret-color:#00e676!important}.v-application .green.accent-4{background-color:#00c853!important;border-color:#00c853!important}.v-application .green--text.text--accent-4{color:#00c853!important;caret-color:#00c853!important}.v-application .light-green{background-color:#8bc34a!important;border-color:#8bc34a!important}.v-application .light-green--text{color:#8bc34a!important;caret-color:#8bc34a!important}.v-application .light-green.lighten-5{background-color:#f1f8e9!important;border-color:#f1f8e9!important}.v-application .light-green--text.text--lighten-5{color:#f1f8e9!important;caret-color:#f1f8e9!important}.v-application .light-green.lighten-4{background-color:#dcedc8!important;border-color:#dcedc8!important}.v-application .light-green--text.text--lighten-4{color:#dcedc8!important;caret-color:#dcedc8!important}.v-application .light-green.lighten-3{background-color:#c5e1a5!important;border-color:#c5e1a5!important}.v-application .light-green--text.text--lighten-3{color:#c5e1a5!important;caret-color:#c5e1a5!important}.v-application .light-green.lighten-2{background-color:#aed581!important;border-color:#aed581!important}.v-application .light-green--text.text--lighten-2{color:#aed581!important;caret-color:#aed581!important}.v-application .light-green.lighten-1{background-color:#9ccc65!important;border-color:#9ccc65!important}.v-application .light-green--text.text--lighten-1{color:#9ccc65!important;caret-color:#9ccc65!important}.v-application .light-green.darken-1{background-color:#7cb342!important;border-color:#7cb342!important}.v-application .light-green--text.text--darken-1{color:#7cb342!important;caret-color:#7cb342!important}.v-application .light-green.darken-2{background-color:#689f38!important;border-color:#689f38!important}.v-application .light-green--text.text--darken-2{color:#689f38!important;caret-color:#689f38!important}.v-application .light-green.darken-3{background-color:#558b2f!important;border-color:#558b2f!important}.v-application .light-green--text.text--darken-3{color:#558b2f!important;caret-color:#558b2f!important}.v-application .light-green.darken-4{background-color:#33691e!important;border-color:#33691e!important}.v-application .light-green--text.text--darken-4{color:#33691e!important;caret-color:#33691e!important}.v-application .light-green.accent-1{background-color:#ccff90!important;border-color:#ccff90!important}.v-application .light-green--text.text--accent-1{color:#ccff90!important;caret-color:#ccff90!important}.v-application .light-green.accent-2{background-color:#b2ff59!important;border-color:#b2ff59!important}.v-application .light-green--text.text--accent-2{color:#b2ff59!important;caret-color:#b2ff59!important}.v-application .light-green.accent-3{background-color:#76ff03!important;border-color:#76ff03!important}.v-application .light-green--text.text--accent-3{color:#76ff03!important;caret-color:#76ff03!important}.v-application .light-green.accent-4{background-color:#64dd17!important;border-color:#64dd17!important}.v-application .light-green--text.text--accent-4{color:#64dd17!important;caret-color:#64dd17!important}.v-application .lime{background-color:#cddc39!important;border-color:#cddc39!important}.v-application .lime--text{color:#cddc39!important;caret-color:#cddc39!important}.v-application .lime.lighten-5{background-color:#f9fbe7!important;border-color:#f9fbe7!important}.v-application .lime--text.text--lighten-5{color:#f9fbe7!important;caret-color:#f9fbe7!important}.v-application .lime.lighten-4{background-color:#f0f4c3!important;border-color:#f0f4c3!important}.v-application .lime--text.text--lighten-4{color:#f0f4c3!important;caret-color:#f0f4c3!important}.v-application .lime.lighten-3{background-color:#e6ee9c!important;border-color:#e6ee9c!important}.v-application .lime--text.text--lighten-3{color:#e6ee9c!important;caret-color:#e6ee9c!important}.v-application .lime.lighten-2{background-color:#dce775!important;border-color:#dce775!important}.v-application .lime--text.text--lighten-2{color:#dce775!important;caret-color:#dce775!important}.v-application .lime.lighten-1{background-color:#d4e157!important;border-color:#d4e157!important}.v-application .lime--text.text--lighten-1{color:#d4e157!important;caret-color:#d4e157!important}.v-application .lime.darken-1{background-color:#c0ca33!important;border-color:#c0ca33!important}.v-application .lime--text.text--darken-1{color:#c0ca33!important;caret-color:#c0ca33!important}.v-application .lime.darken-2{background-color:#afb42b!important;border-color:#afb42b!important}.v-application .lime--text.text--darken-2{color:#afb42b!important;caret-color:#afb42b!important}.v-application .lime.darken-3{background-color:#9e9d24!important;border-color:#9e9d24!important}.v-application .lime--text.text--darken-3{color:#9e9d24!important;caret-color:#9e9d24!important}.v-application .lime.darken-4{background-color:#827717!important;border-color:#827717!important}.v-application .lime--text.text--darken-4{color:#827717!important;caret-color:#827717!important}.v-application .lime.accent-1{background-color:#f4ff81!important;border-color:#f4ff81!important}.v-application .lime--text.text--accent-1{color:#f4ff81!important;caret-color:#f4ff81!important}.v-application .lime.accent-2{background-color:#eeff41!important;border-color:#eeff41!important}.v-application .lime--text.text--accent-2{color:#eeff41!important;caret-color:#eeff41!important}.v-application .lime.accent-3{background-color:#c6ff00!important;border-color:#c6ff00!important}.v-application .lime--text.text--accent-3{color:#c6ff00!important;caret-color:#c6ff00!important}.v-application .lime.accent-4{background-color:#aeea00!important;border-color:#aeea00!important}.v-application .lime--text.text--accent-4{color:#aeea00!important;caret-color:#aeea00!important}.v-application .yellow{background-color:#ffeb3b!important;border-color:#ffeb3b!important}.v-application .yellow--text{color:#ffeb3b!important;caret-color:#ffeb3b!important}.v-application .yellow.lighten-5{background-color:#fffde7!important;border-color:#fffde7!important}.v-application .yellow--text.text--lighten-5{color:#fffde7!important;caret-color:#fffde7!important}.v-application .yellow.lighten-4{background-color:#fff9c4!important;border-color:#fff9c4!important}.v-application .yellow--text.text--lighten-4{color:#fff9c4!important;caret-color:#fff9c4!important}.v-application .yellow.lighten-3{background-color:#fff59d!important;border-color:#fff59d!important}.v-application .yellow--text.text--lighten-3{color:#fff59d!important;caret-color:#fff59d!important}.v-application .yellow.lighten-2{background-color:#fff176!important;border-color:#fff176!important}.v-application .yellow--text.text--lighten-2{color:#fff176!important;caret-color:#fff176!important}.v-application .yellow.lighten-1{background-color:#ffee58!important;border-color:#ffee58!important}.v-application .yellow--text.text--lighten-1{color:#ffee58!important;caret-color:#ffee58!important}.v-application .yellow.darken-1{background-color:#fdd835!important;border-color:#fdd835!important}.v-application .yellow--text.text--darken-1{color:#fdd835!important;caret-color:#fdd835!important}.v-application .yellow.darken-2{background-color:#fbc02d!important;border-color:#fbc02d!important}.v-application .yellow--text.text--darken-2{color:#fbc02d!important;caret-color:#fbc02d!important}.v-application .yellow.darken-3{background-color:#f9a825!important;border-color:#f9a825!important}.v-application .yellow--text.text--darken-3{color:#f9a825!important;caret-color:#f9a825!important}.v-application .yellow.darken-4{background-color:#f57f17!important;border-color:#f57f17!important}.v-application .yellow--text.text--darken-4{color:#f57f17!important;caret-color:#f57f17!important}.v-application .yellow.accent-1{background-color:#ffff8d!important;border-color:#ffff8d!important}.v-application .yellow--text.text--accent-1{color:#ffff8d!important;caret-color:#ffff8d!important}.v-application .yellow.accent-2{background-color:#ff0!important;border-color:#ff0!important}.v-application .yellow--text.text--accent-2{color:#ff0!important;caret-color:#ff0!important}.v-application .yellow.accent-3{background-color:#ffea00!important;border-color:#ffea00!important}.v-application .yellow--text.text--accent-3{color:#ffea00!important;caret-color:#ffea00!important}.v-application .yellow.accent-4{background-color:#ffd600!important;border-color:#ffd600!important}.v-application .yellow--text.text--accent-4{color:#ffd600!important;caret-color:#ffd600!important}.v-application .amber{background-color:#ffc107!important;border-color:#ffc107!important}.v-application .amber--text{color:#ffc107!important;caret-color:#ffc107!important}.v-application .amber.lighten-5{background-color:#fff8e1!important;border-color:#fff8e1!important}.v-application .amber--text.text--lighten-5{color:#fff8e1!important;caret-color:#fff8e1!important}.v-application .amber.lighten-4{background-color:#ffecb3!important;border-color:#ffecb3!important}.v-application .amber--text.text--lighten-4{color:#ffecb3!important;caret-color:#ffecb3!important}.v-application .amber.lighten-3{background-color:#ffe082!important;border-color:#ffe082!important}.v-application .amber--text.text--lighten-3{color:#ffe082!important;caret-color:#ffe082!important}.v-application .amber.lighten-2{background-color:#ffd54f!important;border-color:#ffd54f!important}.v-application .amber--text.text--lighten-2{color:#ffd54f!important;caret-color:#ffd54f!important}.v-application .amber.lighten-1{background-color:#ffca28!important;border-color:#ffca28!important}.v-application .amber--text.text--lighten-1{color:#ffca28!important;caret-color:#ffca28!important}.v-application .amber.darken-1{background-color:#ffb300!important;border-color:#ffb300!important}.v-application .amber--text.text--darken-1{color:#ffb300!important;caret-color:#ffb300!important}.v-application .amber.darken-2{background-color:#ffa000!important;border-color:#ffa000!important}.v-application .amber--text.text--darken-2{color:#ffa000!important;caret-color:#ffa000!important}.v-application .amber.darken-3{background-color:#ff8f00!important;border-color:#ff8f00!important}.v-application .amber--text.text--darken-3{color:#ff8f00!important;caret-color:#ff8f00!important}.v-application .amber.darken-4{background-color:#ff6f00!important;border-color:#ff6f00!important}.v-application .amber--text.text--darken-4{color:#ff6f00!important;caret-color:#ff6f00!important}.v-application .amber.accent-1{background-color:#ffe57f!important;border-color:#ffe57f!important}.v-application .amber--text.text--accent-1{color:#ffe57f!important;caret-color:#ffe57f!important}.v-application .amber.accent-2{background-color:#ffd740!important;border-color:#ffd740!important}.v-application .amber--text.text--accent-2{color:#ffd740!important;caret-color:#ffd740!important}.v-application .amber.accent-3{background-color:#ffc400!important;border-color:#ffc400!important}.v-application .amber--text.text--accent-3{color:#ffc400!important;caret-color:#ffc400!important}.v-application .amber.accent-4{background-color:#ffab00!important;border-color:#ffab00!important}.v-application .amber--text.text--accent-4{color:#ffab00!important;caret-color:#ffab00!important}.v-application .orange{background-color:#ff9800!important;border-color:#ff9800!important}.v-application .orange--text{color:#ff9800!important;caret-color:#ff9800!important}.v-application .orange.lighten-5{background-color:#fff3e0!important;border-color:#fff3e0!important}.v-application .orange--text.text--lighten-5{color:#fff3e0!important;caret-color:#fff3e0!important}.v-application .orange.lighten-4{background-color:#ffe0b2!important;border-color:#ffe0b2!important}.v-application .orange--text.text--lighten-4{color:#ffe0b2!important;caret-color:#ffe0b2!important}.v-application .orange.lighten-3{background-color:#ffcc80!important;border-color:#ffcc80!important}.v-application .orange--text.text--lighten-3{color:#ffcc80!important;caret-color:#ffcc80!important}.v-application .orange.lighten-2{background-color:#ffb74d!important;border-color:#ffb74d!important}.v-application .orange--text.text--lighten-2{color:#ffb74d!important;caret-color:#ffb74d!important}.v-application .orange.lighten-1{background-color:#ffa726!important;border-color:#ffa726!important}.v-application .orange--text.text--lighten-1{color:#ffa726!important;caret-color:#ffa726!important}.v-application .orange.darken-1{background-color:#fb8c00!important;border-color:#fb8c00!important}.v-application .orange--text.text--darken-1{color:#fb8c00!important;caret-color:#fb8c00!important}.v-application .orange.darken-2{background-color:#f57c00!important;border-color:#f57c00!important}.v-application .orange--text.text--darken-2{color:#f57c00!important;caret-color:#f57c00!important}.v-application .orange.darken-3{background-color:#ef6c00!important;border-color:#ef6c00!important}.v-application .orange--text.text--darken-3{color:#ef6c00!important;caret-color:#ef6c00!important}.v-application .orange.darken-4{background-color:#e65100!important;border-color:#e65100!important}.v-application .orange--text.text--darken-4{color:#e65100!important;caret-color:#e65100!important}.v-application .orange.accent-1{background-color:#ffd180!important;border-color:#ffd180!important}.v-application .orange--text.text--accent-1{color:#ffd180!important;caret-color:#ffd180!important}.v-application .orange.accent-2{background-color:#ffab40!important;border-color:#ffab40!important}.v-application .orange--text.text--accent-2{color:#ffab40!important;caret-color:#ffab40!important}.v-application .orange.accent-3{background-color:#ff9100!important;border-color:#ff9100!important}.v-application .orange--text.text--accent-3{color:#ff9100!important;caret-color:#ff9100!important}.v-application .orange.accent-4{background-color:#ff6d00!important;border-color:#ff6d00!important}.v-application .orange--text.text--accent-4{color:#ff6d00!important;caret-color:#ff6d00!important}.v-application .deep-orange{background-color:#ff5722!important;border-color:#ff5722!important}.v-application .deep-orange--text{color:#ff5722!important;caret-color:#ff5722!important}.v-application .deep-orange.lighten-5{background-color:#fbe9e7!important;border-color:#fbe9e7!important}.v-application .deep-orange--text.text--lighten-5{color:#fbe9e7!important;caret-color:#fbe9e7!important}.v-application .deep-orange.lighten-4{background-color:#ffccbc!important;border-color:#ffccbc!important}.v-application .deep-orange--text.text--lighten-4{color:#ffccbc!important;caret-color:#ffccbc!important}.v-application .deep-orange.lighten-3{background-color:#ffab91!important;border-color:#ffab91!important}.v-application .deep-orange--text.text--lighten-3{color:#ffab91!important;caret-color:#ffab91!important}.v-application .deep-orange.lighten-2{background-color:#ff8a65!important;border-color:#ff8a65!important}.v-application .deep-orange--text.text--lighten-2{color:#ff8a65!important;caret-color:#ff8a65!important}.v-application .deep-orange.lighten-1{background-color:#ff7043!important;border-color:#ff7043!important}.v-application .deep-orange--text.text--lighten-1{color:#ff7043!important;caret-color:#ff7043!important}.v-application .deep-orange.darken-1{background-color:#f4511e!important;border-color:#f4511e!important}.v-application .deep-orange--text.text--darken-1{color:#f4511e!important;caret-color:#f4511e!important}.v-application .deep-orange.darken-2{background-color:#e64a19!important;border-color:#e64a19!important}.v-application .deep-orange--text.text--darken-2{color:#e64a19!important;caret-color:#e64a19!important}.v-application .deep-orange.darken-3{background-color:#d84315!important;border-color:#d84315!important}.v-application .deep-orange--text.text--darken-3{color:#d84315!important;caret-color:#d84315!important}.v-application .deep-orange.darken-4{background-color:#bf360c!important;border-color:#bf360c!important}.v-application .deep-orange--text.text--darken-4{color:#bf360c!important;caret-color:#bf360c!important}.v-application .deep-orange.accent-1{background-color:#ff9e80!important;border-color:#ff9e80!important}.v-application .deep-orange--text.text--accent-1{color:#ff9e80!important;caret-color:#ff9e80!important}.v-application .deep-orange.accent-2{background-color:#ff6e40!important;border-color:#ff6e40!important}.v-application .deep-orange--text.text--accent-2{color:#ff6e40!important;caret-color:#ff6e40!important}.v-application .deep-orange.accent-3{background-color:#ff3d00!important;border-color:#ff3d00!important}.v-application .deep-orange--text.text--accent-3{color:#ff3d00!important;caret-color:#ff3d00!important}.v-application .deep-orange.accent-4{background-color:#dd2c00!important;border-color:#dd2c00!important}.v-application .deep-orange--text.text--accent-4{color:#dd2c00!important;caret-color:#dd2c00!important}.v-application .brown{background-color:#795548!important;border-color:#795548!important}.v-application .brown--text{color:#795548!important;caret-color:#795548!important}.v-application .brown.lighten-5{background-color:#efebe9!important;border-color:#efebe9!important}.v-application .brown--text.text--lighten-5{color:#efebe9!important;caret-color:#efebe9!important}.v-application .brown.lighten-4{background-color:#d7ccc8!important;border-color:#d7ccc8!important}.v-application .brown--text.text--lighten-4{color:#d7ccc8!important;caret-color:#d7ccc8!important}.v-application .brown.lighten-3{background-color:#bcaaa4!important;border-color:#bcaaa4!important}.v-application .brown--text.text--lighten-3{color:#bcaaa4!important;caret-color:#bcaaa4!important}.v-application .brown.lighten-2{background-color:#a1887f!important;border-color:#a1887f!important}.v-application .brown--text.text--lighten-2{color:#a1887f!important;caret-color:#a1887f!important}.v-application .brown.lighten-1{background-color:#8d6e63!important;border-color:#8d6e63!important}.v-application .brown--text.text--lighten-1{color:#8d6e63!important;caret-color:#8d6e63!important}.v-application .brown.darken-1{background-color:#6d4c41!important;border-color:#6d4c41!important}.v-application .brown--text.text--darken-1{color:#6d4c41!important;caret-color:#6d4c41!important}.v-application .brown.darken-2{background-color:#5d4037!important;border-color:#5d4037!important}.v-application .brown--text.text--darken-2{color:#5d4037!important;caret-color:#5d4037!important}.v-application .brown.darken-3{background-color:#4e342e!important;border-color:#4e342e!important}.v-application .brown--text.text--darken-3{color:#4e342e!important;caret-color:#4e342e!important}.v-application .brown.darken-4{background-color:#3e2723!important;border-color:#3e2723!important}.v-application .brown--text.text--darken-4{color:#3e2723!important;caret-color:#3e2723!important}.v-application .blue-grey{background-color:#607d8b!important;border-color:#607d8b!important}.v-application .blue-grey--text{color:#607d8b!important;caret-color:#607d8b!important}.v-application .blue-grey.lighten-5{background-color:#eceff1!important;border-color:#eceff1!important}.v-application .blue-grey--text.text--lighten-5{color:#eceff1!important;caret-color:#eceff1!important}.v-application .blue-grey.lighten-4{background-color:#cfd8dc!important;border-color:#cfd8dc!important}.v-application .blue-grey--text.text--lighten-4{color:#cfd8dc!important;caret-color:#cfd8dc!important}.v-application .blue-grey.lighten-3{background-color:#b0bec5!important;border-color:#b0bec5!important}.v-application .blue-grey--text.text--lighten-3{color:#b0bec5!important;caret-color:#b0bec5!important}.v-application .blue-grey.lighten-2{background-color:#90a4ae!important;border-color:#90a4ae!important}.v-application .blue-grey--text.text--lighten-2{color:#90a4ae!important;caret-color:#90a4ae!important}.v-application .blue-grey.lighten-1{background-color:#78909c!important;border-color:#78909c!important}.v-application .blue-grey--text.text--lighten-1{color:#78909c!important;caret-color:#78909c!important}.v-application .blue-grey.darken-1{background-color:#546e7a!important;border-color:#546e7a!important}.v-application .blue-grey--text.text--darken-1{color:#546e7a!important;caret-color:#546e7a!important}.v-application .blue-grey.darken-2{background-color:#455a64!important;border-color:#455a64!important}.v-application .blue-grey--text.text--darken-2{color:#455a64!important;caret-color:#455a64!important}.v-application .blue-grey.darken-3{background-color:#37474f!important;border-color:#37474f!important}.v-application .blue-grey--text.text--darken-3{color:#37474f!important;caret-color:#37474f!important}.v-application .blue-grey.darken-4{background-color:#263238!important;border-color:#263238!important}.v-application .blue-grey--text.text--darken-4{color:#263238!important;caret-color:#263238!important}.v-application .grey{background-color:#9e9e9e!important;border-color:#9e9e9e!important}.v-application .grey--text{color:#9e9e9e!important;caret-color:#9e9e9e!important}.v-application .grey.lighten-5{background-color:#fafafa!important;border-color:#fafafa!important}.v-application .grey--text.text--lighten-5{color:#fafafa!important;caret-color:#fafafa!important}.v-application .grey.lighten-4{background-color:#f5f5f5!important;border-color:#f5f5f5!important}.v-application .grey--text.text--lighten-4{color:#f5f5f5!important;caret-color:#f5f5f5!important}.v-application .grey.lighten-3{background-color:#eee!important;border-color:#eee!important}.v-application .grey--text.text--lighten-3{color:#eee!important;caret-color:#eee!important}.v-application .grey.lighten-2{background-color:#e0e0e0!important;border-color:#e0e0e0!important}.v-application .grey--text.text--lighten-2{color:#e0e0e0!important;caret-color:#e0e0e0!important}.v-application .grey.lighten-1{background-color:#bdbdbd!important;border-color:#bdbdbd!important}.v-application .grey--text.text--lighten-1{color:#bdbdbd!important;caret-color:#bdbdbd!important}.v-application .grey.darken-1{background-color:#757575!important;border-color:#757575!important}.v-application .grey--text.text--darken-1{color:#757575!important;caret-color:#757575!important}.v-application .grey.darken-2{background-color:#616161!important;border-color:#616161!important}.v-application .grey--text.text--darken-2{color:#616161!important;caret-color:#616161!important}.v-application .grey.darken-3{background-color:#424242!important;border-color:#424242!important}.v-application .grey--text.text--darken-3{color:#424242!important;caret-color:#424242!important}.v-application .grey.darken-4{background-color:#212121!important;border-color:#212121!important}.v-application .grey--text.text--darken-4{color:#212121!important;caret-color:#212121!important}.v-application .shades.black{background-color:#000!important;border-color:#000!important}.v-application .shades--text.text--black{color:#000!important;caret-color:#000!important}.v-application .shades.white{background-color:#fff!important;border-color:#fff!important}.v-application .shades--text.text--white{color:#fff!important;caret-color:#fff!important}.v-application .shades.transparent{background-color:transparent!important;border-color:transparent!important}.v-application .shades--text.text--transparent{color:transparent!important;caret-color:transparent!important}

/*!
 * ress.css • v2.0.4
 * MIT License
 * github.com/filipelinhares/ress
 */html{box-sizing:border-box;overflow-y:scroll;-webkit-text-size-adjust:100%;word-break:normal;tab-size:4}*,:after,:before{background-repeat:no-repeat;box-sizing:inherit}:after,:before{text-decoration:inherit;vertical-align:inherit}*{padding:0;margin:0}hr{overflow:visible;height:0}details,main{display:block}summary{display:list-item}small{font-size:80%}[hidden]{display:none}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}a{background-color:transparent}a:active,a:hover{outline-width:0}code,kbd,pre,samp{font-family:monospace,monospace}pre{font-size:1em}b,strong{font-weight:bolder}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}input{border-radius:0}[disabled]{cursor:default}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;resize:vertical}button,input,optgroup,select,textarea{font:inherit}optgroup{font-weight:700}button{overflow:visible}button,select{text-transform:none}[role=button],[type=button],[type=reset],[type=submit],button{cursor:pointer;color:inherit}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button:-moz-focusring{outline:1px dotted ButtonText}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}button,input,select,textarea{background-color:transparent;border-style:none}select{-moz-appearance:none;-webkit-appearance:none}select::-ms-expand{display:none}select::-ms-value{color:currentColor}legend{border:0;color:inherit;display:table;white-space:normal;max-width:100%}::-webkit-file-upload-button{-webkit-appearance:button;color:inherit;font:inherit}img{border-style:none}progress{vertical-align:baseline}@media screen{[hidden~=screen]{display:inherit}[hidden~=screen]:not(:active):not(:focus):not(:target){position:absolute!important;clip:rect(0 0 0 0)!important}}[aria-busy=true]{cursor:progress}[aria-controls]{cursor:pointer}[aria-disabled=true]{cursor:default}.v-application .elevation-24{box-shadow:0 11px 15px -7px rgba(0,0,0,.2),0 24px 38px 3px rgba(0,0,0,.14),0 9px 46px 8px rgba(0,0,0,.12)!important}.v-application .elevation-23{box-shadow:0 11px 14px -7px rgba(0,0,0,.2),0 23px 36px 3px rgba(0,0,0,.14),0 9px 44px 8px rgba(0,0,0,.12)!important}.v-application .elevation-22{box-shadow:0 10px 14px -6px rgba(0,0,0,.2),0 22px 35px 3px rgba(0,0,0,.14),0 8px 42px 7px rgba(0,0,0,.12)!important}.v-application .elevation-21{box-shadow:0 10px 13px -6px rgba(0,0,0,.2),0 21px 33px 3px rgba(0,0,0,.14),0 8px 40px 7px rgba(0,0,0,.12)!important}.v-application .elevation-20{box-shadow:0 10px 13px -6px rgba(0,0,0,.2),0 20px 31px 3px rgba(0,0,0,.14),0 8px 38px 7px rgba(0,0,0,.12)!important}.v-application .elevation-19{box-shadow:0 9px 12px -6px rgba(0,0,0,.2),0 19px 29px 2px rgba(0,0,0,.14),0 7px 36px 6px rgba(0,0,0,.12)!important}.v-application .elevation-18{box-shadow:0 9px 11px -5px rgba(0,0,0,.2),0 18px 28px 2px rgba(0,0,0,.14),0 7px 34px 6px rgba(0,0,0,.12)!important}.v-application .elevation-17{box-shadow:0 8px 11px -5px rgba(0,0,0,.2),0 17px 26px 2px rgba(0,0,0,.14),0 6px 32px 5px rgba(0,0,0,.12)!important}.v-application .elevation-16{box-shadow:0 8px 10px -5px rgba(0,0,0,.2),0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12)!important}.v-application .elevation-15{box-shadow:0 8px 9px -5px rgba(0,0,0,.2),0 15px 22px 2px rgba(0,0,0,.14),0 6px 28px 5px rgba(0,0,0,.12)!important}.v-application .elevation-14{box-shadow:0 7px 9px -4px rgba(0,0,0,.2),0 14px 21px 2px rgba(0,0,0,.14),0 5px 26px 4px rgba(0,0,0,.12)!important}.v-application .elevation-13{box-shadow:0 7px 8px -4px rgba(0,0,0,.2),0 13px 19px 2px rgba(0,0,0,.14),0 5px 24px 4px rgba(0,0,0,.12)!important}.v-application .elevation-12{box-shadow:0 7px 8px -4px rgba(0,0,0,.2),0 12px 17px 2px rgba(0,0,0,.14),0 5px 22px 4px rgba(0,0,0,.12)!important}.v-application .elevation-11{box-shadow:0 6px 7px -4px rgba(0,0,0,.2),0 11px 15px 1px rgba(0,0,0,.14),0 4px 20px 3px rgba(0,0,0,.12)!important}.v-application .elevation-10{box-shadow:0 6px 6px -3px rgba(0,0,0,.2),0 10px 14px 1px rgba(0,0,0,.14),0 4px 18px 3px rgba(0,0,0,.12)!important}.v-application .elevation-9{box-shadow:0 5px 6px -3px rgba(0,0,0,.2),0 9px 12px 1px rgba(0,0,0,.14),0 3px 16px 2px rgba(0,0,0,.12)!important}.v-application .elevation-8{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)!important}.v-application .elevation-7{box-shadow:0 4px 5px -2px rgba(0,0,0,.2),0 7px 10px 1px rgba(0,0,0,.14),0 2px 16px 1px rgba(0,0,0,.12)!important}.v-application .elevation-6{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)!important}.v-application .elevation-5{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 5px 8px 0 rgba(0,0,0,.14),0 1px 14px 0 rgba(0,0,0,.12)!important}.v-application .elevation-4{box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)!important}.v-application .elevation-3{box-shadow:0 3px 3px -2px rgba(0,0,0,.2),0 3px 4px 0 rgba(0,0,0,.14),0 1px 8px 0 rgba(0,0,0,.12)!important}.v-application .elevation-2{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)!important}.v-application .elevation-1{box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important}.v-application .elevation-0{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)!important}.v-application .carousel-transition-enter{transform:translate(100%)}.v-application .carousel-transition-leave,.v-application .carousel-transition-leave-to{position:absolute;top:0;transform:translate(-100%)}.carousel-reverse-transition-enter{transform:translate(-100%)}.carousel-reverse-transition-leave,.carousel-reverse-transition-leave-to{position:absolute;top:0;transform:translate(100%)}.dialog-transition-enter,.dialog-transition-leave-to{transform:scale(.5);opacity:0}.dialog-transition-enter-to,.dialog-transition-leave{opacity:1}.dialog-bottom-transition-enter,.dialog-bottom-transition-leave-to{transform:translateY(100%)}.picker-reverse-transition-enter-active,.picker-reverse-transition-leave-active,.picker-transition-enter-active,.picker-transition-leave-active{transition:.3s cubic-bezier(0,0,.2,1)}.picker-reverse-transition-enter,.picker-reverse-transition-leave-to,.picker-transition-enter,.picker-transition-leave-to{opacity:0}.picker-reverse-transition-leave,.picker-reverse-transition-leave-active,.picker-reverse-transition-leave-to,.picker-transition-leave,.picker-transition-leave-active,.picker-transition-leave-to{position:absolute!important}.picker-transition-enter{transform:translateY(100%)}.picker-reverse-transition-enter,.picker-transition-leave-to{transform:translateY(-100%)}.picker-reverse-transition-leave-to{transform:translateY(100%)}.picker-title-transition-enter-to,.picker-title-transition-leave{transform:translate(0)}.picker-title-transition-enter{transform:translate(-100%)}.picker-title-transition-leave-to{opacity:0;transform:translate(100%)}.picker-title-transition-leave,.picker-title-transition-leave-active,.picker-title-transition-leave-to{position:absolute!important}.tab-transition-enter{transform:translate(100%)}.tab-transition-leave,.tab-transition-leave-active{position:absolute;top:0}.tab-transition-leave-to{position:absolute}.tab-reverse-transition-enter,.tab-transition-leave-to{transform:translate(-100%)}.tab-reverse-transition-leave,.tab-reverse-transition-leave-to{top:0;position:absolute;transform:translate(100%)}.expand-transition-enter-active,.expand-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.expand-transition-move{transition:transform .6s}.expand-x-transition-enter-active,.expand-x-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.expand-x-transition-move{transition:transform .6s}.scale-transition-enter-active,.scale-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scale-transition-move{transition:transform .6s}.scale-transition-enter,.scale-transition-leave,.scale-transition-leave-to{opacity:0;transform:scale(0)}.scale-rotate-transition-enter-active,.scale-rotate-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scale-rotate-transition-move{transition:transform .6s}.scale-rotate-transition-enter,.scale-rotate-transition-leave,.scale-rotate-transition-leave-to{opacity:0;transform:scale(0) rotate(-45deg)}.scale-rotate-reverse-transition-enter-active,.scale-rotate-reverse-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scale-rotate-reverse-transition-move{transition:transform .6s}.scale-rotate-reverse-transition-enter,.scale-rotate-reverse-transition-leave,.scale-rotate-reverse-transition-leave-to{opacity:0;transform:scale(0) rotate(45deg)}.message-transition-enter-active,.message-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.message-transition-move{transition:transform .6s}.message-transition-enter,.message-transition-leave-to{opacity:0;transform:translateY(-15px)}.message-transition-leave,.message-transition-leave-active{position:absolute}.slide-y-transition-enter-active,.slide-y-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.slide-y-transition-move{transition:transform .6s}.slide-y-transition-enter,.slide-y-transition-leave-to{opacity:0;transform:translateY(-15px)}.slide-y-reverse-transition-enter-active,.slide-y-reverse-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.slide-y-reverse-transition-move{transition:transform .6s}.slide-y-reverse-transition-enter,.slide-y-reverse-transition-leave-to{opacity:0;transform:translateY(15px)}.scroll-y-transition-enter-active,.scroll-y-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scroll-y-transition-move{transition:transform .6s}.scroll-y-transition-enter,.scroll-y-transition-leave-to{opacity:0}.scroll-y-transition-enter{transform:translateY(-15px)}.scroll-y-transition-leave-to{transform:translateY(15px)}.scroll-y-reverse-transition-enter-active,.scroll-y-reverse-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scroll-y-reverse-transition-move{transition:transform .6s}.scroll-y-reverse-transition-enter,.scroll-y-reverse-transition-leave-to{opacity:0}.scroll-y-reverse-transition-enter{transform:translateY(15px)}.scroll-y-reverse-transition-leave-to{transform:translateY(-15px)}.scroll-x-transition-enter-active,.scroll-x-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scroll-x-transition-move{transition:transform .6s}.scroll-x-transition-enter,.scroll-x-transition-leave-to{opacity:0}.scroll-x-transition-enter{transform:translateX(-15px)}.scroll-x-transition-leave-to{transform:translateX(15px)}.scroll-x-reverse-transition-enter-active,.scroll-x-reverse-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.scroll-x-reverse-transition-move{transition:transform .6s}.scroll-x-reverse-transition-enter,.scroll-x-reverse-transition-leave-to{opacity:0}.scroll-x-reverse-transition-enter{transform:translateX(15px)}.scroll-x-reverse-transition-leave-to{transform:translateX(-15px)}.slide-x-transition-enter-active,.slide-x-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.slide-x-transition-move{transition:transform .6s}.slide-x-transition-enter,.slide-x-transition-leave-to{opacity:0;transform:translateX(-15px)}.slide-x-reverse-transition-enter-active,.slide-x-reverse-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.slide-x-reverse-transition-move{transition:transform .6s}.slide-x-reverse-transition-enter,.slide-x-reverse-transition-leave-to{opacity:0;transform:translateX(15px)}.fade-transition-enter-active,.fade-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.fade-transition-move{transition:transform .6s}.fade-transition-enter,.fade-transition-leave-to{opacity:0!important}.fab-transition-enter-active,.fab-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.fab-transition-move{transition:transform .6s}.fab-transition-enter,.fab-transition-leave-to{transform:scale(0) rotate(-45deg)}.v-application .blockquote{padding:16px 0 16px 24px;font-size:18px;font-weight:300}.v-application code,.v-application kbd{border-radius:3px;font-size:85%;font-weight:900}.v-application code{background-color:#fbe5e1;color:#c0341d;padding:0 .4rem}.v-application kbd{background:#212529;color:#fff;padding:.2rem .4rem}html{font-size:16px;overflow-x:hidden;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-tap-highlight-color:rgba(0,0,0,0)}html.overflow-y-hidden{overflow-y:hidden!important}.v-application{font-family:Roboto,sans-serif;line-height:1.5}.v-application ::-ms-clear,.v-application ::-ms-reveal{display:none}.v-application .theme--light.heading{color:rgba(0,0,0,.87)}.v-application .theme--dark.heading{color:#fff}.v-application ol,.v-application ul{padding-left:24px}.v-application .display-4{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .display-3,.v-application .display-4{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .display-3{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .display-2{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .display-1,.v-application .display-2{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .display-1{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .headline{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .headline,.v-application .title{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .title{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .subtitle-2{font-size:.875rem!important;font-weight:500;letter-spacing:.0071428571em!important;line-height:1.375rem;font-family:Roboto,sans-serif!important}.v-application .subtitle-1{font-size:1rem!important;letter-spacing:.009375em!important;line-height:1.75rem}.v-application .body-2,.v-application .subtitle-1{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .body-2{font-size:.875rem!important;letter-spacing:.0178571429em!important;line-height:1.25rem}.v-application .body-1{font-size:1rem!important;letter-spacing:.03125em!important;line-height:1.5rem}.v-application .body-1,.v-application .caption{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .caption{font-size:.75rem!important;letter-spacing:.0333333333em!important;line-height:1.25rem}.v-application .overline{font-size:.75rem!important;font-weight:500;letter-spacing:.1666666667em!important;line-height:2rem;text-transform:uppercase;font-family:Roboto,sans-serif!important}.v-application p{margin-bottom:16px}@media only print{.v-application .hidden-print-only{display:none!important}}@media only screen{.v-application .hidden-screen-only{display:none!important}}@media only screen and (max-width:599px){.v-application .hidden-xs-only{display:none!important}}@media only screen and (min-width:600px) and (max-width:959px){.v-application .hidden-sm-only{display:none!important}}@media only screen and (max-width:959px){.v-application .hidden-sm-and-down{display:none!important}}@media only screen and (min-width:600px){.v-application .hidden-sm-and-up{display:none!important}}@media only screen and (min-width:960px) and (max-width:1263px){.v-application .hidden-md-only{display:none!important}}@media only screen and (max-width:1263px){.v-application .hidden-md-and-down{display:none!important}}@media only screen and (min-width:960px){.v-application .hidden-md-and-up{display:none!important}}@media only screen and (min-width:1264px) and (max-width:1903px){.v-application .hidden-lg-only{display:none!important}}@media only screen and (max-width:1903px){.v-application .hidden-lg-and-down{display:none!important}}@media only screen and (min-width:1264px){.v-application .hidden-lg-and-up{display:none!important}}@media only screen and (min-width:1904px){.v-application .hidden-xl-only{display:none!important}}.d-sr-only,.d-sr-only-focusable:not(:focus){border:0!important;clip:rect(0,0,0,0)!important;height:1px!important;margin:-1px!important;overflow:hidden!important;padding:0!important;position:absolute!important;white-space:nowrap!important;width:1px!important}.v-application .font-weight-thin{font-weight:100!important}.v-application .font-weight-light{font-weight:300!important}.v-application .font-weight-regular{font-weight:400!important}.v-application .font-weight-medium{font-weight:500!important}.v-application .font-weight-bold{font-weight:700!important}.v-application .font-weight-black{font-weight:900!important}.v-application .font-italic{font-style:italic!important}.v-application .transition-fast-out-slow-in{transition:.3s cubic-bezier(.4,0,.2,1)!important}.v-application .transition-linear-out-slow-in{transition:.3s cubic-bezier(0,0,.2,1)!important}.v-application .transition-fast-out-linear-in{transition:.3s cubic-bezier(.4,0,1,1)!important}.v-application .transition-ease-in-out{transition:.3s cubic-bezier(.4,0,.6,1)!important}.v-application .transition-fast-in-fast-out{transition:.3s cubic-bezier(.25,.8,.25,1)!important}.v-application .transition-swing{transition:.3s cubic-bezier(.25,.8,.5,1)!important}.v-application .overflow-auto{overflow:auto!important}.v-application .overflow-hidden{overflow:hidden!important}.v-application .overflow-visible{overflow:visible!important}.v-application .overflow-x-auto{overflow-x:auto!important}.v-application .overflow-x-hidden{overflow-x:hidden!important}.v-application .overflow-y-auto{overflow-y:auto!important}.v-application .overflow-y-hidden{overflow-y:hidden!important}.v-application .d-none{display:none!important}.v-application .d-inline{display:inline!important}.v-application .d-inline-block{display:inline-block!important}.v-application .d-block{display:block!important}.v-application .d-table{display:table!important}.v-application .d-table-row{display:table-row!important}.v-application .d-table-cell{display:table-cell!important}.v-application .d-flex{display:flex!important}.v-application .d-inline-flex{display:inline-flex!important}.v-application .float-none{float:none!important}.v-application .float-left{float:left!important}.v-application .float-right{float:right!important}.v-application .flex-fill{flex:1 1 auto!important}.v-application .flex-row{flex-direction:row!important}.v-application .flex-column{flex-direction:column!important}.v-application .flex-row-reverse{flex-direction:row-reverse!important}.v-application .flex-column-reverse{flex-direction:column-reverse!important}.v-application .flex-grow-0{flex-grow:0!important}.v-application .flex-grow-1{flex-grow:1!important}.v-application .flex-shrink-0{flex-shrink:0!important}.v-application .flex-shrink-1{flex-shrink:1!important}.v-application .flex-wrap{flex-wrap:wrap!important}.v-application .flex-nowrap{flex-wrap:nowrap!important}.v-application .flex-wrap-reverse{flex-wrap:wrap-reverse!important}.v-application .justify-start{justify-content:flex-start!important}.v-application .justify-end{justify-content:flex-end!important}.v-application .justify-center{justify-content:center!important}.v-application .justify-space-between{justify-content:space-between!important}.v-application .justify-space-around{justify-content:space-around!important}.v-application .align-start{align-items:flex-start!important}.v-application .align-end{align-items:flex-end!important}.v-application .align-center{align-items:center!important}.v-application .align-baseline{align-items:baseline!important}.v-application .align-stretch{align-items:stretch!important}.v-application .align-content-start{align-content:flex-start!important}.v-application .align-content-end{align-content:flex-end!important}.v-application .align-content-center{align-content:center!important}.v-application .align-content-space-between{align-content:space-between!important}.v-application .align-content-space-around{align-content:space-around!important}.v-application .align-content-stretch{align-content:stretch!important}.v-application .align-self-auto{align-self:auto!important}.v-application .align-self-start{align-self:flex-start!important}.v-application .align-self-end{align-self:flex-end!important}.v-application .align-self-center{align-self:center!important}.v-application .align-self-baseline{align-self:baseline!important}.v-application .align-self-stretch{align-self:stretch!important}.v-application .order-first{order:-1!important}.v-application .order-0{order:0!important}.v-application .order-1{order:1!important}.v-application .order-2{order:2!important}.v-application .order-3{order:3!important}.v-application .order-4{order:4!important}.v-application .order-5{order:5!important}.v-application .order-6{order:6!important}.v-application .order-7{order:7!important}.v-application .order-8{order:8!important}.v-application .order-9{order:9!important}.v-application .order-10{order:10!important}.v-application .order-11{order:11!important}.v-application .order-12{order:12!important}.v-application .order-last{order:13!important}.v-application .ma-0{margin:0!important}.v-application .ma-1{margin:4px!important}.v-application .ma-2{margin:8px!important}.v-application .ma-3{margin:12px!important}.v-application .ma-4{margin:16px!important}.v-application .ma-5{margin:20px!important}.v-application .ma-6{margin:24px!important}.v-application .ma-7{margin:28px!important}.v-application .ma-8{margin:32px!important}.v-application .ma-9{margin:36px!important}.v-application .ma-10{margin:40px!important}.v-application .ma-11{margin:44px!important}.v-application .ma-12{margin:48px!important}.v-application .ma-13{margin:52px!important}.v-application .ma-14{margin:56px!important}.v-application .ma-15{margin:60px!important}.v-application .ma-16{margin:64px!important}.v-application .ma-auto{margin:auto!important}.v-application .mx-0{margin-right:0!important;margin-left:0!important}.v-application .mx-1{margin-right:4px!important;margin-left:4px!important}.v-application .mx-2{margin-right:8px!important;margin-left:8px!important}.v-application .mx-3{margin-right:12px!important;margin-left:12px!important}.v-application .mx-4{margin-right:16px!important;margin-left:16px!important}.v-application .mx-5{margin-right:20px!important;margin-left:20px!important}.v-application .mx-6{margin-right:24px!important;margin-left:24px!important}.v-application .mx-7{margin-right:28px!important;margin-left:28px!important}.v-application .mx-8{margin-right:32px!important;margin-left:32px!important}.v-application .mx-9{margin-right:36px!important;margin-left:36px!important}.v-application .mx-10{margin-right:40px!important;margin-left:40px!important}.v-application .mx-11{margin-right:44px!important;margin-left:44px!important}.v-application .mx-12{margin-right:48px!important;margin-left:48px!important}.v-application .mx-13{margin-right:52px!important;margin-left:52px!important}.v-application .mx-14{margin-right:56px!important;margin-left:56px!important}.v-application .mx-15{margin-right:60px!important;margin-left:60px!important}.v-application .mx-16{margin-right:64px!important;margin-left:64px!important}.v-application .mx-auto{margin-right:auto!important;margin-left:auto!important}.v-application .my-0{margin-top:0!important;margin-bottom:0!important}.v-application .my-1{margin-top:4px!important;margin-bottom:4px!important}.v-application .my-2{margin-top:8px!important;margin-bottom:8px!important}.v-application .my-3{margin-top:12px!important;margin-bottom:12px!important}.v-application .my-4{margin-top:16px!important;margin-bottom:16px!important}.v-application .my-5{margin-top:20px!important;margin-bottom:20px!important}.v-application .my-6{margin-top:24px!important;margin-bottom:24px!important}.v-application .my-7{margin-top:28px!important;margin-bottom:28px!important}.v-application .my-8{margin-top:32px!important;margin-bottom:32px!important}.v-application .my-9{margin-top:36px!important;margin-bottom:36px!important}.v-application .my-10{margin-top:40px!important;margin-bottom:40px!important}.v-application .my-11{margin-top:44px!important;margin-bottom:44px!important}.v-application .my-12{margin-top:48px!important;margin-bottom:48px!important}.v-application .my-13{margin-top:52px!important;margin-bottom:52px!important}.v-application .my-14{margin-top:56px!important;margin-bottom:56px!important}.v-application .my-15{margin-top:60px!important;margin-bottom:60px!important}.v-application .my-16{margin-top:64px!important;margin-bottom:64px!important}.v-application .my-auto{margin-top:auto!important;margin-bottom:auto!important}.v-application .mt-0{margin-top:0!important}.v-application .mt-1{margin-top:4px!important}.v-application .mt-2{margin-top:8px!important}.v-application .mt-3{margin-top:12px!important}.v-application .mt-4{margin-top:16px!important}.v-application .mt-5{margin-top:20px!important}.v-application .mt-6{margin-top:24px!important}.v-application .mt-7{margin-top:28px!important}.v-application .mt-8{margin-top:32px!important}.v-application .mt-9{margin-top:36px!important}.v-application .mt-10{margin-top:40px!important}.v-application .mt-11{margin-top:44px!important}.v-application .mt-12{margin-top:48px!important}.v-application .mt-13{margin-top:52px!important}.v-application .mt-14{margin-top:56px!important}.v-application .mt-15{margin-top:60px!important}.v-application .mt-16{margin-top:64px!important}.v-application .mt-auto{margin-top:auto!important}.v-application .mr-0{margin-right:0!important}.v-application .mr-1{margin-right:4px!important}.v-application .mr-2{margin-right:8px!important}.v-application .mr-3{margin-right:12px!important}.v-application .mr-4{margin-right:16px!important}.v-application .mr-5{margin-right:20px!important}.v-application .mr-6{margin-right:24px!important}.v-application .mr-7{margin-right:28px!important}.v-application .mr-8{margin-right:32px!important}.v-application .mr-9{margin-right:36px!important}.v-application .mr-10{margin-right:40px!important}.v-application .mr-11{margin-right:44px!important}.v-application .mr-12{margin-right:48px!important}.v-application .mr-13{margin-right:52px!important}.v-application .mr-14{margin-right:56px!important}.v-application .mr-15{margin-right:60px!important}.v-application .mr-16{margin-right:64px!important}.v-application .mr-auto{margin-right:auto!important}.v-application .mb-0{margin-bottom:0!important}.v-application .mb-1{margin-bottom:4px!important}.v-application .mb-2{margin-bottom:8px!important}.v-application .mb-3{margin-bottom:12px!important}.v-application .mb-4{margin-bottom:16px!important}.v-application .mb-5{margin-bottom:20px!important}.v-application .mb-6{margin-bottom:24px!important}.v-application .mb-7{margin-bottom:28px!important}.v-application .mb-8{margin-bottom:32px!important}.v-application .mb-9{margin-bottom:36px!important}.v-application .mb-10{margin-bottom:40px!important}.v-application .mb-11{margin-bottom:44px!important}.v-application .mb-12{margin-bottom:48px!important}.v-application .mb-13{margin-bottom:52px!important}.v-application .mb-14{margin-bottom:56px!important}.v-application .mb-15{margin-bottom:60px!important}.v-application .mb-16{margin-bottom:64px!important}.v-application .mb-auto{margin-bottom:auto!important}.v-application .ml-0{margin-left:0!important}.v-application .ml-1{margin-left:4px!important}.v-application .ml-2{margin-left:8px!important}.v-application .ml-3{margin-left:12px!important}.v-application .ml-4{margin-left:16px!important}.v-application .ml-5{margin-left:20px!important}.v-application .ml-6{margin-left:24px!important}.v-application .ml-7{margin-left:28px!important}.v-application .ml-8{margin-left:32px!important}.v-application .ml-9{margin-left:36px!important}.v-application .ml-10{margin-left:40px!important}.v-application .ml-11{margin-left:44px!important}.v-application .ml-12{margin-left:48px!important}.v-application .ml-13{margin-left:52px!important}.v-application .ml-14{margin-left:56px!important}.v-application .ml-15{margin-left:60px!important}.v-application .ml-16{margin-left:64px!important}.v-application .ml-auto{margin-left:auto!important}.v-application--is-ltr .ms-0{margin-left:0!important}.v-application--is-rtl .ms-0{margin-right:0!important}.v-application--is-ltr .ms-1{margin-left:4px!important}.v-application--is-rtl .ms-1{margin-right:4px!important}.v-application--is-ltr .ms-2{margin-left:8px!important}.v-application--is-rtl .ms-2{margin-right:8px!important}.v-application--is-ltr .ms-3{margin-left:12px!important}.v-application--is-rtl .ms-3{margin-right:12px!important}.v-application--is-ltr .ms-4{margin-left:16px!important}.v-application--is-rtl .ms-4{margin-right:16px!important}.v-application--is-ltr .ms-5{margin-left:20px!important}.v-application--is-rtl .ms-5{margin-right:20px!important}.v-application--is-ltr .ms-6{margin-left:24px!important}.v-application--is-rtl .ms-6{margin-right:24px!important}.v-application--is-ltr .ms-7{margin-left:28px!important}.v-application--is-rtl .ms-7{margin-right:28px!important}.v-application--is-ltr .ms-8{margin-left:32px!important}.v-application--is-rtl .ms-8{margin-right:32px!important}.v-application--is-ltr .ms-9{margin-left:36px!important}.v-application--is-rtl .ms-9{margin-right:36px!important}.v-application--is-ltr .ms-10{margin-left:40px!important}.v-application--is-rtl .ms-10{margin-right:40px!important}.v-application--is-ltr .ms-11{margin-left:44px!important}.v-application--is-rtl .ms-11{margin-right:44px!important}.v-application--is-ltr .ms-12{margin-left:48px!important}.v-application--is-rtl .ms-12{margin-right:48px!important}.v-application--is-ltr .ms-13{margin-left:52px!important}.v-application--is-rtl .ms-13{margin-right:52px!important}.v-application--is-ltr .ms-14{margin-left:56px!important}.v-application--is-rtl .ms-14{margin-right:56px!important}.v-application--is-ltr .ms-15{margin-left:60px!important}.v-application--is-rtl .ms-15{margin-right:60px!important}.v-application--is-ltr .ms-16{margin-left:64px!important}.v-application--is-rtl .ms-16{margin-right:64px!important}.v-application--is-ltr .ms-auto{margin-left:auto!important}.v-application--is-rtl .ms-auto{margin-right:auto!important}.v-application--is-ltr .me-0{margin-right:0!important}.v-application--is-rtl .me-0{margin-left:0!important}.v-application--is-ltr .me-1{margin-right:4px!important}.v-application--is-rtl .me-1{margin-left:4px!important}.v-application--is-ltr .me-2{margin-right:8px!important}.v-application--is-rtl .me-2{margin-left:8px!important}.v-application--is-ltr .me-3{margin-right:12px!important}.v-application--is-rtl .me-3{margin-left:12px!important}.v-application--is-ltr .me-4{margin-right:16px!important}.v-application--is-rtl .me-4{margin-left:16px!important}.v-application--is-ltr .me-5{margin-right:20px!important}.v-application--is-rtl .me-5{margin-left:20px!important}.v-application--is-ltr .me-6{margin-right:24px!important}.v-application--is-rtl .me-6{margin-left:24px!important}.v-application--is-ltr .me-7{margin-right:28px!important}.v-application--is-rtl .me-7{margin-left:28px!important}.v-application--is-ltr .me-8{margin-right:32px!important}.v-application--is-rtl .me-8{margin-left:32px!important}.v-application--is-ltr .me-9{margin-right:36px!important}.v-application--is-rtl .me-9{margin-left:36px!important}.v-application--is-ltr .me-10{margin-right:40px!important}.v-application--is-rtl .me-10{margin-left:40px!important}.v-application--is-ltr .me-11{margin-right:44px!important}.v-application--is-rtl .me-11{margin-left:44px!important}.v-application--is-ltr .me-12{margin-right:48px!important}.v-application--is-rtl .me-12{margin-left:48px!important}.v-application--is-ltr .me-13{margin-right:52px!important}.v-application--is-rtl .me-13{margin-left:52px!important}.v-application--is-ltr .me-14{margin-right:56px!important}.v-application--is-rtl .me-14{margin-left:56px!important}.v-application--is-ltr .me-15{margin-right:60px!important}.v-application--is-rtl .me-15{margin-left:60px!important}.v-application--is-ltr .me-16{margin-right:64px!important}.v-application--is-rtl .me-16{margin-left:64px!important}.v-application--is-ltr .me-auto{margin-right:auto!important}.v-application--is-rtl .me-auto{margin-left:auto!important}.v-application .ma-n1{margin:-4px!important}.v-application .ma-n2{margin:-8px!important}.v-application .ma-n3{margin:-12px!important}.v-application .ma-n4{margin:-16px!important}.v-application .ma-n5{margin:-20px!important}.v-application .ma-n6{margin:-24px!important}.v-application .ma-n7{margin:-28px!important}.v-application .ma-n8{margin:-32px!important}.v-application .ma-n9{margin:-36px!important}.v-application .ma-n10{margin:-40px!important}.v-application .ma-n11{margin:-44px!important}.v-application .ma-n12{margin:-48px!important}.v-application .ma-n13{margin:-52px!important}.v-application .ma-n14{margin:-56px!important}.v-application .ma-n15{margin:-60px!important}.v-application .ma-n16{margin:-64px!important}.v-application .mx-n1{margin-right:-4px!important;margin-left:-4px!important}.v-application .mx-n2{margin-right:-8px!important;margin-left:-8px!important}.v-application .mx-n3{margin-right:-12px!important;margin-left:-12px!important}.v-application .mx-n4{margin-right:-16px!important;margin-left:-16px!important}.v-application .mx-n5{margin-right:-20px!important;margin-left:-20px!important}.v-application .mx-n6{margin-right:-24px!important;margin-left:-24px!important}.v-application .mx-n7{margin-right:-28px!important;margin-left:-28px!important}.v-application .mx-n8{margin-right:-32px!important;margin-left:-32px!important}.v-application .mx-n9{margin-right:-36px!important;margin-left:-36px!important}.v-application .mx-n10{margin-right:-40px!important;margin-left:-40px!important}.v-application .mx-n11{margin-right:-44px!important;margin-left:-44px!important}.v-application .mx-n12{margin-right:-48px!important;margin-left:-48px!important}.v-application .mx-n13{margin-right:-52px!important;margin-left:-52px!important}.v-application .mx-n14{margin-right:-56px!important;margin-left:-56px!important}.v-application .mx-n15{margin-right:-60px!important;margin-left:-60px!important}.v-application .mx-n16{margin-right:-64px!important;margin-left:-64px!important}.v-application .my-n1{margin-top:-4px!important;margin-bottom:-4px!important}.v-application .my-n2{margin-top:-8px!important;margin-bottom:-8px!important}.v-application .my-n3{margin-top:-12px!important;margin-bottom:-12px!important}.v-application .my-n4{margin-top:-16px!important;margin-bottom:-16px!important}.v-application .my-n5{margin-top:-20px!important;margin-bottom:-20px!important}.v-application .my-n6{margin-top:-24px!important;margin-bottom:-24px!important}.v-application .my-n7{margin-top:-28px!important;margin-bottom:-28px!important}.v-application .my-n8{margin-top:-32px!important;margin-bottom:-32px!important}.v-application .my-n9{margin-top:-36px!important;margin-bottom:-36px!important}.v-application .my-n10{margin-top:-40px!important;margin-bottom:-40px!important}.v-application .my-n11{margin-top:-44px!important;margin-bottom:-44px!important}.v-application .my-n12{margin-top:-48px!important;margin-bottom:-48px!important}.v-application .my-n13{margin-top:-52px!important;margin-bottom:-52px!important}.v-application .my-n14{margin-top:-56px!important;margin-bottom:-56px!important}.v-application .my-n15{margin-top:-60px!important;margin-bottom:-60px!important}.v-application .my-n16{margin-top:-64px!important;margin-bottom:-64px!important}.v-application .mt-n1{margin-top:-4px!important}.v-application .mt-n2{margin-top:-8px!important}.v-application .mt-n3{margin-top:-12px!important}.v-application .mt-n4{margin-top:-16px!important}.v-application .mt-n5{margin-top:-20px!important}.v-application .mt-n6{margin-top:-24px!important}.v-application .mt-n7{margin-top:-28px!important}.v-application .mt-n8{margin-top:-32px!important}.v-application .mt-n9{margin-top:-36px!important}.v-application .mt-n10{margin-top:-40px!important}.v-application .mt-n11{margin-top:-44px!important}.v-application .mt-n12{margin-top:-48px!important}.v-application .mt-n13{margin-top:-52px!important}.v-application .mt-n14{margin-top:-56px!important}.v-application .mt-n15{margin-top:-60px!important}.v-application .mt-n16{margin-top:-64px!important}.v-application .mr-n1{margin-right:-4px!important}.v-application .mr-n2{margin-right:-8px!important}.v-application .mr-n3{margin-right:-12px!important}.v-application .mr-n4{margin-right:-16px!important}.v-application .mr-n5{margin-right:-20px!important}.v-application .mr-n6{margin-right:-24px!important}.v-application .mr-n7{margin-right:-28px!important}.v-application .mr-n8{margin-right:-32px!important}.v-application .mr-n9{margin-right:-36px!important}.v-application .mr-n10{margin-right:-40px!important}.v-application .mr-n11{margin-right:-44px!important}.v-application .mr-n12{margin-right:-48px!important}.v-application .mr-n13{margin-right:-52px!important}.v-application .mr-n14{margin-right:-56px!important}.v-application .mr-n15{margin-right:-60px!important}.v-application .mr-n16{margin-right:-64px!important}.v-application .mb-n1{margin-bottom:-4px!important}.v-application .mb-n2{margin-bottom:-8px!important}.v-application .mb-n3{margin-bottom:-12px!important}.v-application .mb-n4{margin-bottom:-16px!important}.v-application .mb-n5{margin-bottom:-20px!important}.v-application .mb-n6{margin-bottom:-24px!important}.v-application .mb-n7{margin-bottom:-28px!important}.v-application .mb-n8{margin-bottom:-32px!important}.v-application .mb-n9{margin-bottom:-36px!important}.v-application .mb-n10{margin-bottom:-40px!important}.v-application .mb-n11{margin-bottom:-44px!important}.v-application .mb-n12{margin-bottom:-48px!important}.v-application .mb-n13{margin-bottom:-52px!important}.v-application .mb-n14{margin-bottom:-56px!important}.v-application .mb-n15{margin-bottom:-60px!important}.v-application .mb-n16{margin-bottom:-64px!important}.v-application .ml-n1{margin-left:-4px!important}.v-application .ml-n2{margin-left:-8px!important}.v-application .ml-n3{margin-left:-12px!important}.v-application .ml-n4{margin-left:-16px!important}.v-application .ml-n5{margin-left:-20px!important}.v-application .ml-n6{margin-left:-24px!important}.v-application .ml-n7{margin-left:-28px!important}.v-application .ml-n8{margin-left:-32px!important}.v-application .ml-n9{margin-left:-36px!important}.v-application .ml-n10{margin-left:-40px!important}.v-application .ml-n11{margin-left:-44px!important}.v-application .ml-n12{margin-left:-48px!important}.v-application .ml-n13{margin-left:-52px!important}.v-application .ml-n14{margin-left:-56px!important}.v-application .ml-n15{margin-left:-60px!important}.v-application .ml-n16{margin-left:-64px!important}.v-application--is-ltr .ms-n1{margin-left:-4px!important}.v-application--is-rtl .ms-n1{margin-right:-4px!important}.v-application--is-ltr .ms-n2{margin-left:-8px!important}.v-application--is-rtl .ms-n2{margin-right:-8px!important}.v-application--is-ltr .ms-n3{margin-left:-12px!important}.v-application--is-rtl .ms-n3{margin-right:-12px!important}.v-application--is-ltr .ms-n4{margin-left:-16px!important}.v-application--is-rtl .ms-n4{margin-right:-16px!important}.v-application--is-ltr .ms-n5{margin-left:-20px!important}.v-application--is-rtl .ms-n5{margin-right:-20px!important}.v-application--is-ltr .ms-n6{margin-left:-24px!important}.v-application--is-rtl .ms-n6{margin-right:-24px!important}.v-application--is-ltr .ms-n7{margin-left:-28px!important}.v-application--is-rtl .ms-n7{margin-right:-28px!important}.v-application--is-ltr .ms-n8{margin-left:-32px!important}.v-application--is-rtl .ms-n8{margin-right:-32px!important}.v-application--is-ltr .ms-n9{margin-left:-36px!important}.v-application--is-rtl .ms-n9{margin-right:-36px!important}.v-application--is-ltr .ms-n10{margin-left:-40px!important}.v-application--is-rtl .ms-n10{margin-right:-40px!important}.v-application--is-ltr .ms-n11{margin-left:-44px!important}.v-application--is-rtl .ms-n11{margin-right:-44px!important}.v-application--is-ltr .ms-n12{margin-left:-48px!important}.v-application--is-rtl .ms-n12{margin-right:-48px!important}.v-application--is-ltr .ms-n13{margin-left:-52px!important}.v-application--is-rtl .ms-n13{margin-right:-52px!important}.v-application--is-ltr .ms-n14{margin-left:-56px!important}.v-application--is-rtl .ms-n14{margin-right:-56px!important}.v-application--is-ltr .ms-n15{margin-left:-60px!important}.v-application--is-rtl .ms-n15{margin-right:-60px!important}.v-application--is-ltr .ms-n16{margin-left:-64px!important}.v-application--is-rtl .ms-n16{margin-right:-64px!important}.v-application--is-ltr .me-n1{margin-right:-4px!important}.v-application--is-rtl .me-n1{margin-left:-4px!important}.v-application--is-ltr .me-n2{margin-right:-8px!important}.v-application--is-rtl .me-n2{margin-left:-8px!important}.v-application--is-ltr .me-n3{margin-right:-12px!important}.v-application--is-rtl .me-n3{margin-left:-12px!important}.v-application--is-ltr .me-n4{margin-right:-16px!important}.v-application--is-rtl .me-n4{margin-left:-16px!important}.v-application--is-ltr .me-n5{margin-right:-20px!important}.v-application--is-rtl .me-n5{margin-left:-20px!important}.v-application--is-ltr .me-n6{margin-right:-24px!important}.v-application--is-rtl .me-n6{margin-left:-24px!important}.v-application--is-ltr .me-n7{margin-right:-28px!important}.v-application--is-rtl .me-n7{margin-left:-28px!important}.v-application--is-ltr .me-n8{margin-right:-32px!important}.v-application--is-rtl .me-n8{margin-left:-32px!important}.v-application--is-ltr .me-n9{margin-right:-36px!important}.v-application--is-rtl .me-n9{margin-left:-36px!important}.v-application--is-ltr .me-n10{margin-right:-40px!important}.v-application--is-rtl .me-n10{margin-left:-40px!important}.v-application--is-ltr .me-n11{margin-right:-44px!important}.v-application--is-rtl .me-n11{margin-left:-44px!important}.v-application--is-ltr .me-n12{margin-right:-48px!important}.v-application--is-rtl .me-n12{margin-left:-48px!important}.v-application--is-ltr .me-n13{margin-right:-52px!important}.v-application--is-rtl .me-n13{margin-left:-52px!important}.v-application--is-ltr .me-n14{margin-right:-56px!important}.v-application--is-rtl .me-n14{margin-left:-56px!important}.v-application--is-ltr .me-n15{margin-right:-60px!important}.v-application--is-rtl .me-n15{margin-left:-60px!important}.v-application--is-ltr .me-n16{margin-right:-64px!important}.v-application--is-rtl .me-n16{margin-left:-64px!important}.v-application .pa-0{padding:0!important}.v-application .pa-1{padding:4px!important}.v-application .pa-2{padding:8px!important}.v-application .pa-3{padding:12px!important}.v-application .pa-4{padding:16px!important}.v-application .pa-5{padding:20px!important}.v-application .pa-6{padding:24px!important}.v-application .pa-7{padding:28px!important}.v-application .pa-8{padding:32px!important}.v-application .pa-9{padding:36px!important}.v-application .pa-10{padding:40px!important}.v-application .pa-11{padding:44px!important}.v-application .pa-12{padding:48px!important}.v-application .pa-13{padding:52px!important}.v-application .pa-14{padding:56px!important}.v-application .pa-15{padding:60px!important}.v-application .pa-16{padding:64px!important}.v-application .px-0{padding-right:0!important;padding-left:0!important}.v-application .px-1{padding-right:4px!important;padding-left:4px!important}.v-application .px-2{padding-right:8px!important;padding-left:8px!important}.v-application .px-3{padding-right:12px!important;padding-left:12px!important}.v-application .px-4{padding-right:16px!important;padding-left:16px!important}.v-application .px-5{padding-right:20px!important;padding-left:20px!important}.v-application .px-6{padding-right:24px!important;padding-left:24px!important}.v-application .px-7{padding-right:28px!important;padding-left:28px!important}.v-application .px-8{padding-right:32px!important;padding-left:32px!important}.v-application .px-9{padding-right:36px!important;padding-left:36px!important}.v-application .px-10{padding-right:40px!important;padding-left:40px!important}.v-application .px-11{padding-right:44px!important;padding-left:44px!important}.v-application .px-12{padding-right:48px!important;padding-left:48px!important}.v-application .px-13{padding-right:52px!important;padding-left:52px!important}.v-application .px-14{padding-right:56px!important;padding-left:56px!important}.v-application .px-15{padding-right:60px!important;padding-left:60px!important}.v-application .px-16{padding-right:64px!important;padding-left:64px!important}.v-application .py-0{padding-top:0!important;padding-bottom:0!important}.v-application .py-1{padding-top:4px!important;padding-bottom:4px!important}.v-application .py-2{padding-top:8px!important;padding-bottom:8px!important}.v-application .py-3{padding-top:12px!important;padding-bottom:12px!important}.v-application .py-4{padding-top:16px!important;padding-bottom:16px!important}.v-application .py-5{padding-top:20px!important;padding-bottom:20px!important}.v-application .py-6{padding-top:24px!important;padding-bottom:24px!important}.v-application .py-7{padding-top:28px!important;padding-bottom:28px!important}.v-application .py-8{padding-top:32px!important;padding-bottom:32px!important}.v-application .py-9{padding-top:36px!important;padding-bottom:36px!important}.v-application .py-10{padding-top:40px!important;padding-bottom:40px!important}.v-application .py-11{padding-top:44px!important;padding-bottom:44px!important}.v-application .py-12{padding-top:48px!important;padding-bottom:48px!important}.v-application .py-13{padding-top:52px!important;padding-bottom:52px!important}.v-application .py-14{padding-top:56px!important;padding-bottom:56px!important}.v-application .py-15{padding-top:60px!important;padding-bottom:60px!important}.v-application .py-16{padding-top:64px!important;padding-bottom:64px!important}.v-application .pt-0{padding-top:0!important}.v-application .pt-1{padding-top:4px!important}.v-application .pt-2{padding-top:8px!important}.v-application .pt-3{padding-top:12px!important}.v-application .pt-4{padding-top:16px!important}.v-application .pt-5{padding-top:20px!important}.v-application .pt-6{padding-top:24px!important}.v-application .pt-7{padding-top:28px!important}.v-application .pt-8{padding-top:32px!important}.v-application .pt-9{padding-top:36px!important}.v-application .pt-10{padding-top:40px!important}.v-application .pt-11{padding-top:44px!important}.v-application .pt-12{padding-top:48px!important}.v-application .pt-13{padding-top:52px!important}.v-application .pt-14{padding-top:56px!important}.v-application .pt-15{padding-top:60px!important}.v-application .pt-16{padding-top:64px!important}.v-application .pr-0{padding-right:0!important}.v-application .pr-1{padding-right:4px!important}.v-application .pr-2{padding-right:8px!important}.v-application .pr-3{padding-right:12px!important}.v-application .pr-4{padding-right:16px!important}.v-application .pr-5{padding-right:20px!important}.v-application .pr-6{padding-right:24px!important}.v-application .pr-7{padding-right:28px!important}.v-application .pr-8{padding-right:32px!important}.v-application .pr-9{padding-right:36px!important}.v-application .pr-10{padding-right:40px!important}.v-application .pr-11{padding-right:44px!important}.v-application .pr-12{padding-right:48px!important}.v-application .pr-13{padding-right:52px!important}.v-application .pr-14{padding-right:56px!important}.v-application .pr-15{padding-right:60px!important}.v-application .pr-16{padding-right:64px!important}.v-application .pb-0{padding-bottom:0!important}.v-application .pb-1{padding-bottom:4px!important}.v-application .pb-2{padding-bottom:8px!important}.v-application .pb-3{padding-bottom:12px!important}.v-application .pb-4{padding-bottom:16px!important}.v-application .pb-5{padding-bottom:20px!important}.v-application .pb-6{padding-bottom:24px!important}.v-application .pb-7{padding-bottom:28px!important}.v-application .pb-8{padding-bottom:32px!important}.v-application .pb-9{padding-bottom:36px!important}.v-application .pb-10{padding-bottom:40px!important}.v-application .pb-11{padding-bottom:44px!important}.v-application .pb-12{padding-bottom:48px!important}.v-application .pb-13{padding-bottom:52px!important}.v-application .pb-14{padding-bottom:56px!important}.v-application .pb-15{padding-bottom:60px!important}.v-application .pb-16{padding-bottom:64px!important}.v-application .pl-0{padding-left:0!important}.v-application .pl-1{padding-left:4px!important}.v-application .pl-2{padding-left:8px!important}.v-application .pl-3{padding-left:12px!important}.v-application .pl-4{padding-left:16px!important}.v-application .pl-5{padding-left:20px!important}.v-application .pl-6{padding-left:24px!important}.v-application .pl-7{padding-left:28px!important}.v-application .pl-8{padding-left:32px!important}.v-application .pl-9{padding-left:36px!important}.v-application .pl-10{padding-left:40px!important}.v-application .pl-11{padding-left:44px!important}.v-application .pl-12{padding-left:48px!important}.v-application .pl-13{padding-left:52px!important}.v-application .pl-14{padding-left:56px!important}.v-application .pl-15{padding-left:60px!important}.v-application .pl-16{padding-left:64px!important}.v-application--is-ltr .ps-0{padding-left:0!important}.v-application--is-rtl .ps-0{padding-right:0!important}.v-application--is-ltr .ps-1{padding-left:4px!important}.v-application--is-rtl .ps-1{padding-right:4px!important}.v-application--is-ltr .ps-2{padding-left:8px!important}.v-application--is-rtl .ps-2{padding-right:8px!important}.v-application--is-ltr .ps-3{padding-left:12px!important}.v-application--is-rtl .ps-3{padding-right:12px!important}.v-application--is-ltr .ps-4{padding-left:16px!important}.v-application--is-rtl .ps-4{padding-right:16px!important}.v-application--is-ltr .ps-5{padding-left:20px!important}.v-application--is-rtl .ps-5{padding-right:20px!important}.v-application--is-ltr .ps-6{padding-left:24px!important}.v-application--is-rtl .ps-6{padding-right:24px!important}.v-application--is-ltr .ps-7{padding-left:28px!important}.v-application--is-rtl .ps-7{padding-right:28px!important}.v-application--is-ltr .ps-8{padding-left:32px!important}.v-application--is-rtl .ps-8{padding-right:32px!important}.v-application--is-ltr .ps-9{padding-left:36px!important}.v-application--is-rtl .ps-9{padding-right:36px!important}.v-application--is-ltr .ps-10{padding-left:40px!important}.v-application--is-rtl .ps-10{padding-right:40px!important}.v-application--is-ltr .ps-11{padding-left:44px!important}.v-application--is-rtl .ps-11{padding-right:44px!important}.v-application--is-ltr .ps-12{padding-left:48px!important}.v-application--is-rtl .ps-12{padding-right:48px!important}.v-application--is-ltr .ps-13{padding-left:52px!important}.v-application--is-rtl .ps-13{padding-right:52px!important}.v-application--is-ltr .ps-14{padding-left:56px!important}.v-application--is-rtl .ps-14{padding-right:56px!important}.v-application--is-ltr .ps-15{padding-left:60px!important}.v-application--is-rtl .ps-15{padding-right:60px!important}.v-application--is-ltr .ps-16{padding-left:64px!important}.v-application--is-rtl .ps-16{padding-right:64px!important}.v-application--is-ltr .pe-0{padding-right:0!important}.v-application--is-rtl .pe-0{padding-left:0!important}.v-application--is-ltr .pe-1{padding-right:4px!important}.v-application--is-rtl .pe-1{padding-left:4px!important}.v-application--is-ltr .pe-2{padding-right:8px!important}.v-application--is-rtl .pe-2{padding-left:8px!important}.v-application--is-ltr .pe-3{padding-right:12px!important}.v-application--is-rtl .pe-3{padding-left:12px!important}.v-application--is-ltr .pe-4{padding-right:16px!important}.v-application--is-rtl .pe-4{padding-left:16px!important}.v-application--is-ltr .pe-5{padding-right:20px!important}.v-application--is-rtl .pe-5{padding-left:20px!important}.v-application--is-ltr .pe-6{padding-right:24px!important}.v-application--is-rtl .pe-6{padding-left:24px!important}.v-application--is-ltr .pe-7{padding-right:28px!important}.v-application--is-rtl .pe-7{padding-left:28px!important}.v-application--is-ltr .pe-8{padding-right:32px!important}.v-application--is-rtl .pe-8{padding-left:32px!important}.v-application--is-ltr .pe-9{padding-right:36px!important}.v-application--is-rtl .pe-9{padding-left:36px!important}.v-application--is-ltr .pe-10{padding-right:40px!important}.v-application--is-rtl .pe-10{padding-left:40px!important}.v-application--is-ltr .pe-11{padding-right:44px!important}.v-application--is-rtl .pe-11{padding-left:44px!important}.v-application--is-ltr .pe-12{padding-right:48px!important}.v-application--is-rtl .pe-12{padding-left:48px!important}.v-application--is-ltr .pe-13{padding-right:52px!important}.v-application--is-rtl .pe-13{padding-left:52px!important}.v-application--is-ltr .pe-14{padding-right:56px!important}.v-application--is-rtl .pe-14{padding-left:56px!important}.v-application--is-ltr .pe-15{padding-right:60px!important}.v-application--is-rtl .pe-15{padding-left:60px!important}.v-application--is-ltr .pe-16{padding-right:64px!important}.v-application--is-rtl .pe-16{padding-left:64px!important}.v-application .rounded-0{border-radius:0!important}.v-application .rounded-sm{border-radius:2px!important}.v-application .rounded{border-radius:4px!important}.v-application .rounded-lg{border-radius:8px!important}.v-application .rounded-xl{border-radius:24px!important}.v-application .rounded-pill{border-radius:9999px!important}.v-application .rounded-circle{border-radius:50%!important}.v-application .rounded-t-0{border-top-left-radius:0!important;border-top-right-radius:0!important}.v-application .rounded-t-sm{border-top-left-radius:2px!important;border-top-right-radius:2px!important}.v-application .rounded-t{border-top-left-radius:4px!important;border-top-right-radius:4px!important}.v-application .rounded-t-lg{border-top-left-radius:8px!important;border-top-right-radius:8px!important}.v-application .rounded-t-xl{border-top-left-radius:24px!important;border-top-right-radius:24px!important}.v-application .rounded-t-pill{border-top-left-radius:9999px!important;border-top-right-radius:9999px!important}.v-application .rounded-t-circle{border-top-left-radius:50%!important;border-top-right-radius:50%!important}.v-application .rounded-r-0{border-top-right-radius:0!important;border-bottom-right-radius:0!important}.v-application .rounded-r-sm{border-top-right-radius:2px!important;border-bottom-right-radius:2px!important}.v-application .rounded-r{border-top-right-radius:4px!important;border-bottom-right-radius:4px!important}.v-application .rounded-r-lg{border-top-right-radius:8px!important;border-bottom-right-radius:8px!important}.v-application .rounded-r-xl{border-top-right-radius:24px!important;border-bottom-right-radius:24px!important}.v-application .rounded-r-pill{border-top-right-radius:9999px!important;border-bottom-right-radius:9999px!important}.v-application .rounded-r-circle{border-top-right-radius:50%!important;border-bottom-right-radius:50%!important}.v-application .rounded-b-0{border-bottom-left-radius:0!important;border-bottom-right-radius:0!important}.v-application .rounded-b-sm{border-bottom-left-radius:2px!important;border-bottom-right-radius:2px!important}.v-application .rounded-b{border-bottom-left-radius:4px!important;border-bottom-right-radius:4px!important}.v-application .rounded-b-lg{border-bottom-left-radius:8px!important;border-bottom-right-radius:8px!important}.v-application .rounded-b-xl{border-bottom-left-radius:24px!important;border-bottom-right-radius:24px!important}.v-application .rounded-b-pill{border-bottom-left-radius:9999px!important;border-bottom-right-radius:9999px!important}.v-application .rounded-b-circle{border-bottom-left-radius:50%!important;border-bottom-right-radius:50%!important}.v-application .rounded-l-0{border-top-left-radius:0!important;border-bottom-left-radius:0!important}.v-application .rounded-l-sm{border-top-left-radius:2px!important;border-bottom-left-radius:2px!important}.v-application .rounded-l{border-top-left-radius:4px!important;border-bottom-left-radius:4px!important}.v-application .rounded-l-lg{border-top-left-radius:8px!important;border-bottom-left-radius:8px!important}.v-application .rounded-l-xl{border-top-left-radius:24px!important;border-bottom-left-radius:24px!important}.v-application .rounded-l-pill{border-top-left-radius:9999px!important;border-bottom-left-radius:9999px!important}.v-application .rounded-l-circle{border-top-left-radius:50%!important;border-bottom-left-radius:50%!important}.v-application .rounded-tl-0{border-top-left-radius:0!important}.v-application .rounded-tl-sm{border-top-left-radius:2px!important}.v-application .rounded-tl{border-top-left-radius:4px!important}.v-application .rounded-tl-lg{border-top-left-radius:8px!important}.v-application .rounded-tl-xl{border-top-left-radius:24px!important}.v-application .rounded-tl-pill{border-top-left-radius:9999px!important}.v-application .rounded-tl-circle{border-top-left-radius:50%!important}.v-application .rounded-tr-0{border-top-right-radius:0!important}.v-application .rounded-tr-sm{border-top-right-radius:2px!important}.v-application .rounded-tr{border-top-right-radius:4px!important}.v-application .rounded-tr-lg{border-top-right-radius:8px!important}.v-application .rounded-tr-xl{border-top-right-radius:24px!important}.v-application .rounded-tr-pill{border-top-right-radius:9999px!important}.v-application .rounded-tr-circle{border-top-right-radius:50%!important}.v-application .rounded-br-0{border-bottom-right-radius:0!important}.v-application .rounded-br-sm{border-bottom-right-radius:2px!important}.v-application .rounded-br{border-bottom-right-radius:4px!important}.v-application .rounded-br-lg{border-bottom-right-radius:8px!important}.v-application .rounded-br-xl{border-bottom-right-radius:24px!important}.v-application .rounded-br-pill{border-bottom-right-radius:9999px!important}.v-application .rounded-br-circle{border-bottom-right-radius:50%!important}.v-application .rounded-bl-0{border-bottom-left-radius:0!important}.v-application .rounded-bl-sm{border-bottom-left-radius:2px!important}.v-application .rounded-bl{border-bottom-left-radius:4px!important}.v-application .rounded-bl-lg{border-bottom-left-radius:8px!important}.v-application .rounded-bl-xl{border-bottom-left-radius:24px!important}.v-application .rounded-bl-pill{border-bottom-left-radius:9999px!important}.v-application .rounded-bl-circle{border-bottom-left-radius:50%!important}.v-application .text-left{text-align:left!important}.v-application .text-right{text-align:right!important}.v-application .text-center{text-align:center!important}.v-application .text-justify{text-align:justify!important}.v-application .text-start{text-align:start!important}.v-application .text-end{text-align:end!important}.v-application .text-decoration-line-through{text-decoration:line-through!important}.v-application .text-decoration-none{text-decoration:none!important}.v-application .text-decoration-overline{text-decoration:overline!important}.v-application .text-decoration-underline{text-decoration:underline!important}.v-application .text-wrap{white-space:normal!important}.v-application .text-no-wrap{white-space:nowrap!important}.v-application .text-break{overflow-wrap:break-word!important;word-break:break-word!important}.v-application .text-truncate{white-space:nowrap!important;overflow:hidden!important;text-overflow:ellipsis!important}.v-application .text-none{text-transform:none!important}.v-application .text-capitalize{text-transform:capitalize!important}.v-application .text-lowercase{text-transform:lowercase!important}.v-application .text-uppercase{text-transform:uppercase!important}.v-application .text-h1{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .text-h1,.v-application .text-h2{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .text-h2{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .text-h3{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .text-h3,.v-application .text-h4{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .text-h4{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .text-h5{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .text-h5,.v-application .text-h6{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .text-h6{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .text-subtitle-1{font-size:1rem!important;font-weight:400;line-height:1.75rem;letter-spacing:.009375em!important;font-family:Roboto,sans-serif!important}.v-application .text-subtitle-2{font-size:.875rem!important;font-weight:500;line-height:1.375rem;letter-spacing:.0071428571em!important;font-family:Roboto,sans-serif!important}.v-application .text-body-1{font-size:1rem!important;font-weight:400;line-height:1.5rem;letter-spacing:.03125em!important;font-family:Roboto,sans-serif!important}.v-application .text-body-2{font-weight:400;line-height:1.25rem;letter-spacing:.0178571429em!important}.v-application .text-body-2,.v-application .text-button{font-size:.875rem!important;font-family:Roboto,sans-serif!important}.v-application .text-button{font-weight:500;line-height:2.25rem;letter-spacing:.0892857143em!important;text-transform:uppercase!important}.v-application .text-caption{font-weight:400;line-height:1.25rem;letter-spacing:.0333333333em!important}.v-application .text-caption,.v-application .text-overline{font-size:.75rem!important;font-family:Roboto,sans-serif!important}.v-application .text-overline{font-weight:500;line-height:2rem;letter-spacing:.1666666667em!important;text-transform:uppercase!important}@media (min-width:600px){.v-application .d-sm-none{display:none!important}.v-application .d-sm-inline{display:inline!important}.v-application .d-sm-inline-block{display:inline-block!important}.v-application .d-sm-block{display:block!important}.v-application .d-sm-table{display:table!important}.v-application .d-sm-table-row{display:table-row!important}.v-application .d-sm-table-cell{display:table-cell!important}.v-application .d-sm-flex{display:flex!important}.v-application .d-sm-inline-flex{display:inline-flex!important}.v-application .float-sm-none{float:none!important}.v-application .float-sm-left{float:left!important}.v-application .float-sm-right{float:right!important}.v-application .flex-sm-fill{flex:1 1 auto!important}.v-application .flex-sm-row{flex-direction:row!important}.v-application .flex-sm-column{flex-direction:column!important}.v-application .flex-sm-row-reverse{flex-direction:row-reverse!important}.v-application .flex-sm-column-reverse{flex-direction:column-reverse!important}.v-application .flex-sm-grow-0{flex-grow:0!important}.v-application .flex-sm-grow-1{flex-grow:1!important}.v-application .flex-sm-shrink-0{flex-shrink:0!important}.v-application .flex-sm-shrink-1{flex-shrink:1!important}.v-application .flex-sm-wrap{flex-wrap:wrap!important}.v-application .flex-sm-nowrap{flex-wrap:nowrap!important}.v-application .flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.v-application .justify-sm-start{justify-content:flex-start!important}.v-application .justify-sm-end{justify-content:flex-end!important}.v-application .justify-sm-center{justify-content:center!important}.v-application .justify-sm-space-between{justify-content:space-between!important}.v-application .justify-sm-space-around{justify-content:space-around!important}.v-application .align-sm-start{align-items:flex-start!important}.v-application .align-sm-end{align-items:flex-end!important}.v-application .align-sm-center{align-items:center!important}.v-application .align-sm-baseline{align-items:baseline!important}.v-application .align-sm-stretch{align-items:stretch!important}.v-application .align-content-sm-start{align-content:flex-start!important}.v-application .align-content-sm-end{align-content:flex-end!important}.v-application .align-content-sm-center{align-content:center!important}.v-application .align-content-sm-space-between{align-content:space-between!important}.v-application .align-content-sm-space-around{align-content:space-around!important}.v-application .align-content-sm-stretch{align-content:stretch!important}.v-application .align-self-sm-auto{align-self:auto!important}.v-application .align-self-sm-start{align-self:flex-start!important}.v-application .align-self-sm-end{align-self:flex-end!important}.v-application .align-self-sm-center{align-self:center!important}.v-application .align-self-sm-baseline{align-self:baseline!important}.v-application .align-self-sm-stretch{align-self:stretch!important}.v-application .order-sm-first{order:-1!important}.v-application .order-sm-0{order:0!important}.v-application .order-sm-1{order:1!important}.v-application .order-sm-2{order:2!important}.v-application .order-sm-3{order:3!important}.v-application .order-sm-4{order:4!important}.v-application .order-sm-5{order:5!important}.v-application .order-sm-6{order:6!important}.v-application .order-sm-7{order:7!important}.v-application .order-sm-8{order:8!important}.v-application .order-sm-9{order:9!important}.v-application .order-sm-10{order:10!important}.v-application .order-sm-11{order:11!important}.v-application .order-sm-12{order:12!important}.v-application .order-sm-last{order:13!important}.v-application .ma-sm-0{margin:0!important}.v-application .ma-sm-1{margin:4px!important}.v-application .ma-sm-2{margin:8px!important}.v-application .ma-sm-3{margin:12px!important}.v-application .ma-sm-4{margin:16px!important}.v-application .ma-sm-5{margin:20px!important}.v-application .ma-sm-6{margin:24px!important}.v-application .ma-sm-7{margin:28px!important}.v-application .ma-sm-8{margin:32px!important}.v-application .ma-sm-9{margin:36px!important}.v-application .ma-sm-10{margin:40px!important}.v-application .ma-sm-11{margin:44px!important}.v-application .ma-sm-12{margin:48px!important}.v-application .ma-sm-13{margin:52px!important}.v-application .ma-sm-14{margin:56px!important}.v-application .ma-sm-15{margin:60px!important}.v-application .ma-sm-16{margin:64px!important}.v-application .ma-sm-auto{margin:auto!important}.v-application .mx-sm-0{margin-right:0!important;margin-left:0!important}.v-application .mx-sm-1{margin-right:4px!important;margin-left:4px!important}.v-application .mx-sm-2{margin-right:8px!important;margin-left:8px!important}.v-application .mx-sm-3{margin-right:12px!important;margin-left:12px!important}.v-application .mx-sm-4{margin-right:16px!important;margin-left:16px!important}.v-application .mx-sm-5{margin-right:20px!important;margin-left:20px!important}.v-application .mx-sm-6{margin-right:24px!important;margin-left:24px!important}.v-application .mx-sm-7{margin-right:28px!important;margin-left:28px!important}.v-application .mx-sm-8{margin-right:32px!important;margin-left:32px!important}.v-application .mx-sm-9{margin-right:36px!important;margin-left:36px!important}.v-application .mx-sm-10{margin-right:40px!important;margin-left:40px!important}.v-application .mx-sm-11{margin-right:44px!important;margin-left:44px!important}.v-application .mx-sm-12{margin-right:48px!important;margin-left:48px!important}.v-application .mx-sm-13{margin-right:52px!important;margin-left:52px!important}.v-application .mx-sm-14{margin-right:56px!important;margin-left:56px!important}.v-application .mx-sm-15{margin-right:60px!important;margin-left:60px!important}.v-application .mx-sm-16{margin-right:64px!important;margin-left:64px!important}.v-application .mx-sm-auto{margin-right:auto!important;margin-left:auto!important}.v-application .my-sm-0{margin-top:0!important;margin-bottom:0!important}.v-application .my-sm-1{margin-top:4px!important;margin-bottom:4px!important}.v-application .my-sm-2{margin-top:8px!important;margin-bottom:8px!important}.v-application .my-sm-3{margin-top:12px!important;margin-bottom:12px!important}.v-application .my-sm-4{margin-top:16px!important;margin-bottom:16px!important}.v-application .my-sm-5{margin-top:20px!important;margin-bottom:20px!important}.v-application .my-sm-6{margin-top:24px!important;margin-bottom:24px!important}.v-application .my-sm-7{margin-top:28px!important;margin-bottom:28px!important}.v-application .my-sm-8{margin-top:32px!important;margin-bottom:32px!important}.v-application .my-sm-9{margin-top:36px!important;margin-bottom:36px!important}.v-application .my-sm-10{margin-top:40px!important;margin-bottom:40px!important}.v-application .my-sm-11{margin-top:44px!important;margin-bottom:44px!important}.v-application .my-sm-12{margin-top:48px!important;margin-bottom:48px!important}.v-application .my-sm-13{margin-top:52px!important;margin-bottom:52px!important}.v-application .my-sm-14{margin-top:56px!important;margin-bottom:56px!important}.v-application .my-sm-15{margin-top:60px!important;margin-bottom:60px!important}.v-application .my-sm-16{margin-top:64px!important;margin-bottom:64px!important}.v-application .my-sm-auto{margin-top:auto!important;margin-bottom:auto!important}.v-application .mt-sm-0{margin-top:0!important}.v-application .mt-sm-1{margin-top:4px!important}.v-application .mt-sm-2{margin-top:8px!important}.v-application .mt-sm-3{margin-top:12px!important}.v-application .mt-sm-4{margin-top:16px!important}.v-application .mt-sm-5{margin-top:20px!important}.v-application .mt-sm-6{margin-top:24px!important}.v-application .mt-sm-7{margin-top:28px!important}.v-application .mt-sm-8{margin-top:32px!important}.v-application .mt-sm-9{margin-top:36px!important}.v-application .mt-sm-10{margin-top:40px!important}.v-application .mt-sm-11{margin-top:44px!important}.v-application .mt-sm-12{margin-top:48px!important}.v-application .mt-sm-13{margin-top:52px!important}.v-application .mt-sm-14{margin-top:56px!important}.v-application .mt-sm-15{margin-top:60px!important}.v-application .mt-sm-16{margin-top:64px!important}.v-application .mt-sm-auto{margin-top:auto!important}.v-application .mr-sm-0{margin-right:0!important}.v-application .mr-sm-1{margin-right:4px!important}.v-application .mr-sm-2{margin-right:8px!important}.v-application .mr-sm-3{margin-right:12px!important}.v-application .mr-sm-4{margin-right:16px!important}.v-application .mr-sm-5{margin-right:20px!important}.v-application .mr-sm-6{margin-right:24px!important}.v-application .mr-sm-7{margin-right:28px!important}.v-application .mr-sm-8{margin-right:32px!important}.v-application .mr-sm-9{margin-right:36px!important}.v-application .mr-sm-10{margin-right:40px!important}.v-application .mr-sm-11{margin-right:44px!important}.v-application .mr-sm-12{margin-right:48px!important}.v-application .mr-sm-13{margin-right:52px!important}.v-application .mr-sm-14{margin-right:56px!important}.v-application .mr-sm-15{margin-right:60px!important}.v-application .mr-sm-16{margin-right:64px!important}.v-application .mr-sm-auto{margin-right:auto!important}.v-application .mb-sm-0{margin-bottom:0!important}.v-application .mb-sm-1{margin-bottom:4px!important}.v-application .mb-sm-2{margin-bottom:8px!important}.v-application .mb-sm-3{margin-bottom:12px!important}.v-application .mb-sm-4{margin-bottom:16px!important}.v-application .mb-sm-5{margin-bottom:20px!important}.v-application .mb-sm-6{margin-bottom:24px!important}.v-application .mb-sm-7{margin-bottom:28px!important}.v-application .mb-sm-8{margin-bottom:32px!important}.v-application .mb-sm-9{margin-bottom:36px!important}.v-application .mb-sm-10{margin-bottom:40px!important}.v-application .mb-sm-11{margin-bottom:44px!important}.v-application .mb-sm-12{margin-bottom:48px!important}.v-application .mb-sm-13{margin-bottom:52px!important}.v-application .mb-sm-14{margin-bottom:56px!important}.v-application .mb-sm-15{margin-bottom:60px!important}.v-application .mb-sm-16{margin-bottom:64px!important}.v-application .mb-sm-auto{margin-bottom:auto!important}.v-application .ml-sm-0{margin-left:0!important}.v-application .ml-sm-1{margin-left:4px!important}.v-application .ml-sm-2{margin-left:8px!important}.v-application .ml-sm-3{margin-left:12px!important}.v-application .ml-sm-4{margin-left:16px!important}.v-application .ml-sm-5{margin-left:20px!important}.v-application .ml-sm-6{margin-left:24px!important}.v-application .ml-sm-7{margin-left:28px!important}.v-application .ml-sm-8{margin-left:32px!important}.v-application .ml-sm-9{margin-left:36px!important}.v-application .ml-sm-10{margin-left:40px!important}.v-application .ml-sm-11{margin-left:44px!important}.v-application .ml-sm-12{margin-left:48px!important}.v-application .ml-sm-13{margin-left:52px!important}.v-application .ml-sm-14{margin-left:56px!important}.v-application .ml-sm-15{margin-left:60px!important}.v-application .ml-sm-16{margin-left:64px!important}.v-application .ml-sm-auto{margin-left:auto!important}.v-application--is-ltr .ms-sm-0{margin-left:0!important}.v-application--is-rtl .ms-sm-0{margin-right:0!important}.v-application--is-ltr .ms-sm-1{margin-left:4px!important}.v-application--is-rtl .ms-sm-1{margin-right:4px!important}.v-application--is-ltr .ms-sm-2{margin-left:8px!important}.v-application--is-rtl .ms-sm-2{margin-right:8px!important}.v-application--is-ltr .ms-sm-3{margin-left:12px!important}.v-application--is-rtl .ms-sm-3{margin-right:12px!important}.v-application--is-ltr .ms-sm-4{margin-left:16px!important}.v-application--is-rtl .ms-sm-4{margin-right:16px!important}.v-application--is-ltr .ms-sm-5{margin-left:20px!important}.v-application--is-rtl .ms-sm-5{margin-right:20px!important}.v-application--is-ltr .ms-sm-6{margin-left:24px!important}.v-application--is-rtl .ms-sm-6{margin-right:24px!important}.v-application--is-ltr .ms-sm-7{margin-left:28px!important}.v-application--is-rtl .ms-sm-7{margin-right:28px!important}.v-application--is-ltr .ms-sm-8{margin-left:32px!important}.v-application--is-rtl .ms-sm-8{margin-right:32px!important}.v-application--is-ltr .ms-sm-9{margin-left:36px!important}.v-application--is-rtl .ms-sm-9{margin-right:36px!important}.v-application--is-ltr .ms-sm-10{margin-left:40px!important}.v-application--is-rtl .ms-sm-10{margin-right:40px!important}.v-application--is-ltr .ms-sm-11{margin-left:44px!important}.v-application--is-rtl .ms-sm-11{margin-right:44px!important}.v-application--is-ltr .ms-sm-12{margin-left:48px!important}.v-application--is-rtl .ms-sm-12{margin-right:48px!important}.v-application--is-ltr .ms-sm-13{margin-left:52px!important}.v-application--is-rtl .ms-sm-13{margin-right:52px!important}.v-application--is-ltr .ms-sm-14{margin-left:56px!important}.v-application--is-rtl .ms-sm-14{margin-right:56px!important}.v-application--is-ltr .ms-sm-15{margin-left:60px!important}.v-application--is-rtl .ms-sm-15{margin-right:60px!important}.v-application--is-ltr .ms-sm-16{margin-left:64px!important}.v-application--is-rtl .ms-sm-16{margin-right:64px!important}.v-application--is-ltr .ms-sm-auto{margin-left:auto!important}.v-application--is-rtl .ms-sm-auto{margin-right:auto!important}.v-application--is-ltr .me-sm-0{margin-right:0!important}.v-application--is-rtl .me-sm-0{margin-left:0!important}.v-application--is-ltr .me-sm-1{margin-right:4px!important}.v-application--is-rtl .me-sm-1{margin-left:4px!important}.v-application--is-ltr .me-sm-2{margin-right:8px!important}.v-application--is-rtl .me-sm-2{margin-left:8px!important}.v-application--is-ltr .me-sm-3{margin-right:12px!important}.v-application--is-rtl .me-sm-3{margin-left:12px!important}.v-application--is-ltr .me-sm-4{margin-right:16px!important}.v-application--is-rtl .me-sm-4{margin-left:16px!important}.v-application--is-ltr .me-sm-5{margin-right:20px!important}.v-application--is-rtl .me-sm-5{margin-left:20px!important}.v-application--is-ltr .me-sm-6{margin-right:24px!important}.v-application--is-rtl .me-sm-6{margin-left:24px!important}.v-application--is-ltr .me-sm-7{margin-right:28px!important}.v-application--is-rtl .me-sm-7{margin-left:28px!important}.v-application--is-ltr .me-sm-8{margin-right:32px!important}.v-application--is-rtl .me-sm-8{margin-left:32px!important}.v-application--is-ltr .me-sm-9{margin-right:36px!important}.v-application--is-rtl .me-sm-9{margin-left:36px!important}.v-application--is-ltr .me-sm-10{margin-right:40px!important}.v-application--is-rtl .me-sm-10{margin-left:40px!important}.v-application--is-ltr .me-sm-11{margin-right:44px!important}.v-application--is-rtl .me-sm-11{margin-left:44px!important}.v-application--is-ltr .me-sm-12{margin-right:48px!important}.v-application--is-rtl .me-sm-12{margin-left:48px!important}.v-application--is-ltr .me-sm-13{margin-right:52px!important}.v-application--is-rtl .me-sm-13{margin-left:52px!important}.v-application--is-ltr .me-sm-14{margin-right:56px!important}.v-application--is-rtl .me-sm-14{margin-left:56px!important}.v-application--is-ltr .me-sm-15{margin-right:60px!important}.v-application--is-rtl .me-sm-15{margin-left:60px!important}.v-application--is-ltr .me-sm-16{margin-right:64px!important}.v-application--is-rtl .me-sm-16{margin-left:64px!important}.v-application--is-ltr .me-sm-auto{margin-right:auto!important}.v-application--is-rtl .me-sm-auto{margin-left:auto!important}.v-application .ma-sm-n1{margin:-4px!important}.v-application .ma-sm-n2{margin:-8px!important}.v-application .ma-sm-n3{margin:-12px!important}.v-application .ma-sm-n4{margin:-16px!important}.v-application .ma-sm-n5{margin:-20px!important}.v-application .ma-sm-n6{margin:-24px!important}.v-application .ma-sm-n7{margin:-28px!important}.v-application .ma-sm-n8{margin:-32px!important}.v-application .ma-sm-n9{margin:-36px!important}.v-application .ma-sm-n10{margin:-40px!important}.v-application .ma-sm-n11{margin:-44px!important}.v-application .ma-sm-n12{margin:-48px!important}.v-application .ma-sm-n13{margin:-52px!important}.v-application .ma-sm-n14{margin:-56px!important}.v-application .ma-sm-n15{margin:-60px!important}.v-application .ma-sm-n16{margin:-64px!important}.v-application .mx-sm-n1{margin-right:-4px!important;margin-left:-4px!important}.v-application .mx-sm-n2{margin-right:-8px!important;margin-left:-8px!important}.v-application .mx-sm-n3{margin-right:-12px!important;margin-left:-12px!important}.v-application .mx-sm-n4{margin-right:-16px!important;margin-left:-16px!important}.v-application .mx-sm-n5{margin-right:-20px!important;margin-left:-20px!important}.v-application .mx-sm-n6{margin-right:-24px!important;margin-left:-24px!important}.v-application .mx-sm-n7{margin-right:-28px!important;margin-left:-28px!important}.v-application .mx-sm-n8{margin-right:-32px!important;margin-left:-32px!important}.v-application .mx-sm-n9{margin-right:-36px!important;margin-left:-36px!important}.v-application .mx-sm-n10{margin-right:-40px!important;margin-left:-40px!important}.v-application .mx-sm-n11{margin-right:-44px!important;margin-left:-44px!important}.v-application .mx-sm-n12{margin-right:-48px!important;margin-left:-48px!important}.v-application .mx-sm-n13{margin-right:-52px!important;margin-left:-52px!important}.v-application .mx-sm-n14{margin-right:-56px!important;margin-left:-56px!important}.v-application .mx-sm-n15{margin-right:-60px!important;margin-left:-60px!important}.v-application .mx-sm-n16{margin-right:-64px!important;margin-left:-64px!important}.v-application .my-sm-n1{margin-top:-4px!important;margin-bottom:-4px!important}.v-application .my-sm-n2{margin-top:-8px!important;margin-bottom:-8px!important}.v-application .my-sm-n3{margin-top:-12px!important;margin-bottom:-12px!important}.v-application .my-sm-n4{margin-top:-16px!important;margin-bottom:-16px!important}.v-application .my-sm-n5{margin-top:-20px!important;margin-bottom:-20px!important}.v-application .my-sm-n6{margin-top:-24px!important;margin-bottom:-24px!important}.v-application .my-sm-n7{margin-top:-28px!important;margin-bottom:-28px!important}.v-application .my-sm-n8{margin-top:-32px!important;margin-bottom:-32px!important}.v-application .my-sm-n9{margin-top:-36px!important;margin-bottom:-36px!important}.v-application .my-sm-n10{margin-top:-40px!important;margin-bottom:-40px!important}.v-application .my-sm-n11{margin-top:-44px!important;margin-bottom:-44px!important}.v-application .my-sm-n12{margin-top:-48px!important;margin-bottom:-48px!important}.v-application .my-sm-n13{margin-top:-52px!important;margin-bottom:-52px!important}.v-application .my-sm-n14{margin-top:-56px!important;margin-bottom:-56px!important}.v-application .my-sm-n15{margin-top:-60px!important;margin-bottom:-60px!important}.v-application .my-sm-n16{margin-top:-64px!important;margin-bottom:-64px!important}.v-application .mt-sm-n1{margin-top:-4px!important}.v-application .mt-sm-n2{margin-top:-8px!important}.v-application .mt-sm-n3{margin-top:-12px!important}.v-application .mt-sm-n4{margin-top:-16px!important}.v-application .mt-sm-n5{margin-top:-20px!important}.v-application .mt-sm-n6{margin-top:-24px!important}.v-application .mt-sm-n7{margin-top:-28px!important}.v-application .mt-sm-n8{margin-top:-32px!important}.v-application .mt-sm-n9{margin-top:-36px!important}.v-application .mt-sm-n10{margin-top:-40px!important}.v-application .mt-sm-n11{margin-top:-44px!important}.v-application .mt-sm-n12{margin-top:-48px!important}.v-application .mt-sm-n13{margin-top:-52px!important}.v-application .mt-sm-n14{margin-top:-56px!important}.v-application .mt-sm-n15{margin-top:-60px!important}.v-application .mt-sm-n16{margin-top:-64px!important}.v-application .mr-sm-n1{margin-right:-4px!important}.v-application .mr-sm-n2{margin-right:-8px!important}.v-application .mr-sm-n3{margin-right:-12px!important}.v-application .mr-sm-n4{margin-right:-16px!important}.v-application .mr-sm-n5{margin-right:-20px!important}.v-application .mr-sm-n6{margin-right:-24px!important}.v-application .mr-sm-n7{margin-right:-28px!important}.v-application .mr-sm-n8{margin-right:-32px!important}.v-application .mr-sm-n9{margin-right:-36px!important}.v-application .mr-sm-n10{margin-right:-40px!important}.v-application .mr-sm-n11{margin-right:-44px!important}.v-application .mr-sm-n12{margin-right:-48px!important}.v-application .mr-sm-n13{margin-right:-52px!important}.v-application .mr-sm-n14{margin-right:-56px!important}.v-application .mr-sm-n15{margin-right:-60px!important}.v-application .mr-sm-n16{margin-right:-64px!important}.v-application .mb-sm-n1{margin-bottom:-4px!important}.v-application .mb-sm-n2{margin-bottom:-8px!important}.v-application .mb-sm-n3{margin-bottom:-12px!important}.v-application .mb-sm-n4{margin-bottom:-16px!important}.v-application .mb-sm-n5{margin-bottom:-20px!important}.v-application .mb-sm-n6{margin-bottom:-24px!important}.v-application .mb-sm-n7{margin-bottom:-28px!important}.v-application .mb-sm-n8{margin-bottom:-32px!important}.v-application .mb-sm-n9{margin-bottom:-36px!important}.v-application .mb-sm-n10{margin-bottom:-40px!important}.v-application .mb-sm-n11{margin-bottom:-44px!important}.v-application .mb-sm-n12{margin-bottom:-48px!important}.v-application .mb-sm-n13{margin-bottom:-52px!important}.v-application .mb-sm-n14{margin-bottom:-56px!important}.v-application .mb-sm-n15{margin-bottom:-60px!important}.v-application .mb-sm-n16{margin-bottom:-64px!important}.v-application .ml-sm-n1{margin-left:-4px!important}.v-application .ml-sm-n2{margin-left:-8px!important}.v-application .ml-sm-n3{margin-left:-12px!important}.v-application .ml-sm-n4{margin-left:-16px!important}.v-application .ml-sm-n5{margin-left:-20px!important}.v-application .ml-sm-n6{margin-left:-24px!important}.v-application .ml-sm-n7{margin-left:-28px!important}.v-application .ml-sm-n8{margin-left:-32px!important}.v-application .ml-sm-n9{margin-left:-36px!important}.v-application .ml-sm-n10{margin-left:-40px!important}.v-application .ml-sm-n11{margin-left:-44px!important}.v-application .ml-sm-n12{margin-left:-48px!important}.v-application .ml-sm-n13{margin-left:-52px!important}.v-application .ml-sm-n14{margin-left:-56px!important}.v-application .ml-sm-n15{margin-left:-60px!important}.v-application .ml-sm-n16{margin-left:-64px!important}.v-application--is-ltr .ms-sm-n1{margin-left:-4px!important}.v-application--is-rtl .ms-sm-n1{margin-right:-4px!important}.v-application--is-ltr .ms-sm-n2{margin-left:-8px!important}.v-application--is-rtl .ms-sm-n2{margin-right:-8px!important}.v-application--is-ltr .ms-sm-n3{margin-left:-12px!important}.v-application--is-rtl .ms-sm-n3{margin-right:-12px!important}.v-application--is-ltr .ms-sm-n4{margin-left:-16px!important}.v-application--is-rtl .ms-sm-n4{margin-right:-16px!important}.v-application--is-ltr .ms-sm-n5{margin-left:-20px!important}.v-application--is-rtl .ms-sm-n5{margin-right:-20px!important}.v-application--is-ltr .ms-sm-n6{margin-left:-24px!important}.v-application--is-rtl .ms-sm-n6{margin-right:-24px!important}.v-application--is-ltr .ms-sm-n7{margin-left:-28px!important}.v-application--is-rtl .ms-sm-n7{margin-right:-28px!important}.v-application--is-ltr .ms-sm-n8{margin-left:-32px!important}.v-application--is-rtl .ms-sm-n8{margin-right:-32px!important}.v-application--is-ltr .ms-sm-n9{margin-left:-36px!important}.v-application--is-rtl .ms-sm-n9{margin-right:-36px!important}.v-application--is-ltr .ms-sm-n10{margin-left:-40px!important}.v-application--is-rtl .ms-sm-n10{margin-right:-40px!important}.v-application--is-ltr .ms-sm-n11{margin-left:-44px!important}.v-application--is-rtl .ms-sm-n11{margin-right:-44px!important}.v-application--is-ltr .ms-sm-n12{margin-left:-48px!important}.v-application--is-rtl .ms-sm-n12{margin-right:-48px!important}.v-application--is-ltr .ms-sm-n13{margin-left:-52px!important}.v-application--is-rtl .ms-sm-n13{margin-right:-52px!important}.v-application--is-ltr .ms-sm-n14{margin-left:-56px!important}.v-application--is-rtl .ms-sm-n14{margin-right:-56px!important}.v-application--is-ltr .ms-sm-n15{margin-left:-60px!important}.v-application--is-rtl .ms-sm-n15{margin-right:-60px!important}.v-application--is-ltr .ms-sm-n16{margin-left:-64px!important}.v-application--is-rtl .ms-sm-n16{margin-right:-64px!important}.v-application--is-ltr .me-sm-n1{margin-right:-4px!important}.v-application--is-rtl .me-sm-n1{margin-left:-4px!important}.v-application--is-ltr .me-sm-n2{margin-right:-8px!important}.v-application--is-rtl .me-sm-n2{margin-left:-8px!important}.v-application--is-ltr .me-sm-n3{margin-right:-12px!important}.v-application--is-rtl .me-sm-n3{margin-left:-12px!important}.v-application--is-ltr .me-sm-n4{margin-right:-16px!important}.v-application--is-rtl .me-sm-n4{margin-left:-16px!important}.v-application--is-ltr .me-sm-n5{margin-right:-20px!important}.v-application--is-rtl .me-sm-n5{margin-left:-20px!important}.v-application--is-ltr .me-sm-n6{margin-right:-24px!important}.v-application--is-rtl .me-sm-n6{margin-left:-24px!important}.v-application--is-ltr .me-sm-n7{margin-right:-28px!important}.v-application--is-rtl .me-sm-n7{margin-left:-28px!important}.v-application--is-ltr .me-sm-n8{margin-right:-32px!important}.v-application--is-rtl .me-sm-n8{margin-left:-32px!important}.v-application--is-ltr .me-sm-n9{margin-right:-36px!important}.v-application--is-rtl .me-sm-n9{margin-left:-36px!important}.v-application--is-ltr .me-sm-n10{margin-right:-40px!important}.v-application--is-rtl .me-sm-n10{margin-left:-40px!important}.v-application--is-ltr .me-sm-n11{margin-right:-44px!important}.v-application--is-rtl .me-sm-n11{margin-left:-44px!important}.v-application--is-ltr .me-sm-n12{margin-right:-48px!important}.v-application--is-rtl .me-sm-n12{margin-left:-48px!important}.v-application--is-ltr .me-sm-n13{margin-right:-52px!important}.v-application--is-rtl .me-sm-n13{margin-left:-52px!important}.v-application--is-ltr .me-sm-n14{margin-right:-56px!important}.v-application--is-rtl .me-sm-n14{margin-left:-56px!important}.v-application--is-ltr .me-sm-n15{margin-right:-60px!important}.v-application--is-rtl .me-sm-n15{margin-left:-60px!important}.v-application--is-ltr .me-sm-n16{margin-right:-64px!important}.v-application--is-rtl .me-sm-n16{margin-left:-64px!important}.v-application .pa-sm-0{padding:0!important}.v-application .pa-sm-1{padding:4px!important}.v-application .pa-sm-2{padding:8px!important}.v-application .pa-sm-3{padding:12px!important}.v-application .pa-sm-4{padding:16px!important}.v-application .pa-sm-5{padding:20px!important}.v-application .pa-sm-6{padding:24px!important}.v-application .pa-sm-7{padding:28px!important}.v-application .pa-sm-8{padding:32px!important}.v-application .pa-sm-9{padding:36px!important}.v-application .pa-sm-10{padding:40px!important}.v-application .pa-sm-11{padding:44px!important}.v-application .pa-sm-12{padding:48px!important}.v-application .pa-sm-13{padding:52px!important}.v-application .pa-sm-14{padding:56px!important}.v-application .pa-sm-15{padding:60px!important}.v-application .pa-sm-16{padding:64px!important}.v-application .px-sm-0{padding-right:0!important;padding-left:0!important}.v-application .px-sm-1{padding-right:4px!important;padding-left:4px!important}.v-application .px-sm-2{padding-right:8px!important;padding-left:8px!important}.v-application .px-sm-3{padding-right:12px!important;padding-left:12px!important}.v-application .px-sm-4{padding-right:16px!important;padding-left:16px!important}.v-application .px-sm-5{padding-right:20px!important;padding-left:20px!important}.v-application .px-sm-6{padding-right:24px!important;padding-left:24px!important}.v-application .px-sm-7{padding-right:28px!important;padding-left:28px!important}.v-application .px-sm-8{padding-right:32px!important;padding-left:32px!important}.v-application .px-sm-9{padding-right:36px!important;padding-left:36px!important}.v-application .px-sm-10{padding-right:40px!important;padding-left:40px!important}.v-application .px-sm-11{padding-right:44px!important;padding-left:44px!important}.v-application .px-sm-12{padding-right:48px!important;padding-left:48px!important}.v-application .px-sm-13{padding-right:52px!important;padding-left:52px!important}.v-application .px-sm-14{padding-right:56px!important;padding-left:56px!important}.v-application .px-sm-15{padding-right:60px!important;padding-left:60px!important}.v-application .px-sm-16{padding-right:64px!important;padding-left:64px!important}.v-application .py-sm-0{padding-top:0!important;padding-bottom:0!important}.v-application .py-sm-1{padding-top:4px!important;padding-bottom:4px!important}.v-application .py-sm-2{padding-top:8px!important;padding-bottom:8px!important}.v-application .py-sm-3{padding-top:12px!important;padding-bottom:12px!important}.v-application .py-sm-4{padding-top:16px!important;padding-bottom:16px!important}.v-application .py-sm-5{padding-top:20px!important;padding-bottom:20px!important}.v-application .py-sm-6{padding-top:24px!important;padding-bottom:24px!important}.v-application .py-sm-7{padding-top:28px!important;padding-bottom:28px!important}.v-application .py-sm-8{padding-top:32px!important;padding-bottom:32px!important}.v-application .py-sm-9{padding-top:36px!important;padding-bottom:36px!important}.v-application .py-sm-10{padding-top:40px!important;padding-bottom:40px!important}.v-application .py-sm-11{padding-top:44px!important;padding-bottom:44px!important}.v-application .py-sm-12{padding-top:48px!important;padding-bottom:48px!important}.v-application .py-sm-13{padding-top:52px!important;padding-bottom:52px!important}.v-application .py-sm-14{padding-top:56px!important;padding-bottom:56px!important}.v-application .py-sm-15{padding-top:60px!important;padding-bottom:60px!important}.v-application .py-sm-16{padding-top:64px!important;padding-bottom:64px!important}.v-application .pt-sm-0{padding-top:0!important}.v-application .pt-sm-1{padding-top:4px!important}.v-application .pt-sm-2{padding-top:8px!important}.v-application .pt-sm-3{padding-top:12px!important}.v-application .pt-sm-4{padding-top:16px!important}.v-application .pt-sm-5{padding-top:20px!important}.v-application .pt-sm-6{padding-top:24px!important}.v-application .pt-sm-7{padding-top:28px!important}.v-application .pt-sm-8{padding-top:32px!important}.v-application .pt-sm-9{padding-top:36px!important}.v-application .pt-sm-10{padding-top:40px!important}.v-application .pt-sm-11{padding-top:44px!important}.v-application .pt-sm-12{padding-top:48px!important}.v-application .pt-sm-13{padding-top:52px!important}.v-application .pt-sm-14{padding-top:56px!important}.v-application .pt-sm-15{padding-top:60px!important}.v-application .pt-sm-16{padding-top:64px!important}.v-application .pr-sm-0{padding-right:0!important}.v-application .pr-sm-1{padding-right:4px!important}.v-application .pr-sm-2{padding-right:8px!important}.v-application .pr-sm-3{padding-right:12px!important}.v-application .pr-sm-4{padding-right:16px!important}.v-application .pr-sm-5{padding-right:20px!important}.v-application .pr-sm-6{padding-right:24px!important}.v-application .pr-sm-7{padding-right:28px!important}.v-application .pr-sm-8{padding-right:32px!important}.v-application .pr-sm-9{padding-right:36px!important}.v-application .pr-sm-10{padding-right:40px!important}.v-application .pr-sm-11{padding-right:44px!important}.v-application .pr-sm-12{padding-right:48px!important}.v-application .pr-sm-13{padding-right:52px!important}.v-application .pr-sm-14{padding-right:56px!important}.v-application .pr-sm-15{padding-right:60px!important}.v-application .pr-sm-16{padding-right:64px!important}.v-application .pb-sm-0{padding-bottom:0!important}.v-application .pb-sm-1{padding-bottom:4px!important}.v-application .pb-sm-2{padding-bottom:8px!important}.v-application .pb-sm-3{padding-bottom:12px!important}.v-application .pb-sm-4{padding-bottom:16px!important}.v-application .pb-sm-5{padding-bottom:20px!important}.v-application .pb-sm-6{padding-bottom:24px!important}.v-application .pb-sm-7{padding-bottom:28px!important}.v-application .pb-sm-8{padding-bottom:32px!important}.v-application .pb-sm-9{padding-bottom:36px!important}.v-application .pb-sm-10{padding-bottom:40px!important}.v-application .pb-sm-11{padding-bottom:44px!important}.v-application .pb-sm-12{padding-bottom:48px!important}.v-application .pb-sm-13{padding-bottom:52px!important}.v-application .pb-sm-14{padding-bottom:56px!important}.v-application .pb-sm-15{padding-bottom:60px!important}.v-application .pb-sm-16{padding-bottom:64px!important}.v-application .pl-sm-0{padding-left:0!important}.v-application .pl-sm-1{padding-left:4px!important}.v-application .pl-sm-2{padding-left:8px!important}.v-application .pl-sm-3{padding-left:12px!important}.v-application .pl-sm-4{padding-left:16px!important}.v-application .pl-sm-5{padding-left:20px!important}.v-application .pl-sm-6{padding-left:24px!important}.v-application .pl-sm-7{padding-left:28px!important}.v-application .pl-sm-8{padding-left:32px!important}.v-application .pl-sm-9{padding-left:36px!important}.v-application .pl-sm-10{padding-left:40px!important}.v-application .pl-sm-11{padding-left:44px!important}.v-application .pl-sm-12{padding-left:48px!important}.v-application .pl-sm-13{padding-left:52px!important}.v-application .pl-sm-14{padding-left:56px!important}.v-application .pl-sm-15{padding-left:60px!important}.v-application .pl-sm-16{padding-left:64px!important}.v-application--is-ltr .ps-sm-0{padding-left:0!important}.v-application--is-rtl .ps-sm-0{padding-right:0!important}.v-application--is-ltr .ps-sm-1{padding-left:4px!important}.v-application--is-rtl .ps-sm-1{padding-right:4px!important}.v-application--is-ltr .ps-sm-2{padding-left:8px!important}.v-application--is-rtl .ps-sm-2{padding-right:8px!important}.v-application--is-ltr .ps-sm-3{padding-left:12px!important}.v-application--is-rtl .ps-sm-3{padding-right:12px!important}.v-application--is-ltr .ps-sm-4{padding-left:16px!important}.v-application--is-rtl .ps-sm-4{padding-right:16px!important}.v-application--is-ltr .ps-sm-5{padding-left:20px!important}.v-application--is-rtl .ps-sm-5{padding-right:20px!important}.v-application--is-ltr .ps-sm-6{padding-left:24px!important}.v-application--is-rtl .ps-sm-6{padding-right:24px!important}.v-application--is-ltr .ps-sm-7{padding-left:28px!important}.v-application--is-rtl .ps-sm-7{padding-right:28px!important}.v-application--is-ltr .ps-sm-8{padding-left:32px!important}.v-application--is-rtl .ps-sm-8{padding-right:32px!important}.v-application--is-ltr .ps-sm-9{padding-left:36px!important}.v-application--is-rtl .ps-sm-9{padding-right:36px!important}.v-application--is-ltr .ps-sm-10{padding-left:40px!important}.v-application--is-rtl .ps-sm-10{padding-right:40px!important}.v-application--is-ltr .ps-sm-11{padding-left:44px!important}.v-application--is-rtl .ps-sm-11{padding-right:44px!important}.v-application--is-ltr .ps-sm-12{padding-left:48px!important}.v-application--is-rtl .ps-sm-12{padding-right:48px!important}.v-application--is-ltr .ps-sm-13{padding-left:52px!important}.v-application--is-rtl .ps-sm-13{padding-right:52px!important}.v-application--is-ltr .ps-sm-14{padding-left:56px!important}.v-application--is-rtl .ps-sm-14{padding-right:56px!important}.v-application--is-ltr .ps-sm-15{padding-left:60px!important}.v-application--is-rtl .ps-sm-15{padding-right:60px!important}.v-application--is-ltr .ps-sm-16{padding-left:64px!important}.v-application--is-rtl .ps-sm-16{padding-right:64px!important}.v-application--is-ltr .pe-sm-0{padding-right:0!important}.v-application--is-rtl .pe-sm-0{padding-left:0!important}.v-application--is-ltr .pe-sm-1{padding-right:4px!important}.v-application--is-rtl .pe-sm-1{padding-left:4px!important}.v-application--is-ltr .pe-sm-2{padding-right:8px!important}.v-application--is-rtl .pe-sm-2{padding-left:8px!important}.v-application--is-ltr .pe-sm-3{padding-right:12px!important}.v-application--is-rtl .pe-sm-3{padding-left:12px!important}.v-application--is-ltr .pe-sm-4{padding-right:16px!important}.v-application--is-rtl .pe-sm-4{padding-left:16px!important}.v-application--is-ltr .pe-sm-5{padding-right:20px!important}.v-application--is-rtl .pe-sm-5{padding-left:20px!important}.v-application--is-ltr .pe-sm-6{padding-right:24px!important}.v-application--is-rtl .pe-sm-6{padding-left:24px!important}.v-application--is-ltr .pe-sm-7{padding-right:28px!important}.v-application--is-rtl .pe-sm-7{padding-left:28px!important}.v-application--is-ltr .pe-sm-8{padding-right:32px!important}.v-application--is-rtl .pe-sm-8{padding-left:32px!important}.v-application--is-ltr .pe-sm-9{padding-right:36px!important}.v-application--is-rtl .pe-sm-9{padding-left:36px!important}.v-application--is-ltr .pe-sm-10{padding-right:40px!important}.v-application--is-rtl .pe-sm-10{padding-left:40px!important}.v-application--is-ltr .pe-sm-11{padding-right:44px!important}.v-application--is-rtl .pe-sm-11{padding-left:44px!important}.v-application--is-ltr .pe-sm-12{padding-right:48px!important}.v-application--is-rtl .pe-sm-12{padding-left:48px!important}.v-application--is-ltr .pe-sm-13{padding-right:52px!important}.v-application--is-rtl .pe-sm-13{padding-left:52px!important}.v-application--is-ltr .pe-sm-14{padding-right:56px!important}.v-application--is-rtl .pe-sm-14{padding-left:56px!important}.v-application--is-ltr .pe-sm-15{padding-right:60px!important}.v-application--is-rtl .pe-sm-15{padding-left:60px!important}.v-application--is-ltr .pe-sm-16{padding-right:64px!important}.v-application--is-rtl .pe-sm-16{padding-left:64px!important}.v-application .text-sm-left{text-align:left!important}.v-application .text-sm-right{text-align:right!important}.v-application .text-sm-center{text-align:center!important}.v-application .text-sm-justify{text-align:justify!important}.v-application .text-sm-start{text-align:start!important}.v-application .text-sm-end{text-align:end!important}.v-application .text-sm-h1{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .text-sm-h1,.v-application .text-sm-h2{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .text-sm-h2{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .text-sm-h3{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .text-sm-h3,.v-application .text-sm-h4{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .text-sm-h4{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .text-sm-h5{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .text-sm-h5,.v-application .text-sm-h6{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .text-sm-h6{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .text-sm-subtitle-1{font-size:1rem!important;font-weight:400;line-height:1.75rem;letter-spacing:.009375em!important;font-family:Roboto,sans-serif!important}.v-application .text-sm-subtitle-2{font-size:.875rem!important;font-weight:500;line-height:1.375rem;letter-spacing:.0071428571em!important;font-family:Roboto,sans-serif!important}.v-application .text-sm-body-1{font-size:1rem!important;font-weight:400;line-height:1.5rem;letter-spacing:.03125em!important;font-family:Roboto,sans-serif!important}.v-application .text-sm-body-2{font-weight:400;line-height:1.25rem;letter-spacing:.0178571429em!important}.v-application .text-sm-body-2,.v-application .text-sm-button{font-size:.875rem!important;font-family:Roboto,sans-serif!important}.v-application .text-sm-button{font-weight:500;line-height:2.25rem;letter-spacing:.0892857143em!important;text-transform:uppercase!important}.v-application .text-sm-caption{font-weight:400;line-height:1.25rem;letter-spacing:.0333333333em!important}.v-application .text-sm-caption,.v-application .text-sm-overline{font-size:.75rem!important;font-family:Roboto,sans-serif!important}.v-application .text-sm-overline{font-weight:500;line-height:2rem;letter-spacing:.1666666667em!important;text-transform:uppercase!important}}@media (min-width:960px){.v-application .d-md-none{display:none!important}.v-application .d-md-inline{display:inline!important}.v-application .d-md-inline-block{display:inline-block!important}.v-application .d-md-block{display:block!important}.v-application .d-md-table{display:table!important}.v-application .d-md-table-row{display:table-row!important}.v-application .d-md-table-cell{display:table-cell!important}.v-application .d-md-flex{display:flex!important}.v-application .d-md-inline-flex{display:inline-flex!important}.v-application .float-md-none{float:none!important}.v-application .float-md-left{float:left!important}.v-application .float-md-right{float:right!important}.v-application .flex-md-fill{flex:1 1 auto!important}.v-application .flex-md-row{flex-direction:row!important}.v-application .flex-md-column{flex-direction:column!important}.v-application .flex-md-row-reverse{flex-direction:row-reverse!important}.v-application .flex-md-column-reverse{flex-direction:column-reverse!important}.v-application .flex-md-grow-0{flex-grow:0!important}.v-application .flex-md-grow-1{flex-grow:1!important}.v-application .flex-md-shrink-0{flex-shrink:0!important}.v-application .flex-md-shrink-1{flex-shrink:1!important}.v-application .flex-md-wrap{flex-wrap:wrap!important}.v-application .flex-md-nowrap{flex-wrap:nowrap!important}.v-application .flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.v-application .justify-md-start{justify-content:flex-start!important}.v-application .justify-md-end{justify-content:flex-end!important}.v-application .justify-md-center{justify-content:center!important}.v-application .justify-md-space-between{justify-content:space-between!important}.v-application .justify-md-space-around{justify-content:space-around!important}.v-application .align-md-start{align-items:flex-start!important}.v-application .align-md-end{align-items:flex-end!important}.v-application .align-md-center{align-items:center!important}.v-application .align-md-baseline{align-items:baseline!important}.v-application .align-md-stretch{align-items:stretch!important}.v-application .align-content-md-start{align-content:flex-start!important}.v-application .align-content-md-end{align-content:flex-end!important}.v-application .align-content-md-center{align-content:center!important}.v-application .align-content-md-space-between{align-content:space-between!important}.v-application .align-content-md-space-around{align-content:space-around!important}.v-application .align-content-md-stretch{align-content:stretch!important}.v-application .align-self-md-auto{align-self:auto!important}.v-application .align-self-md-start{align-self:flex-start!important}.v-application .align-self-md-end{align-self:flex-end!important}.v-application .align-self-md-center{align-self:center!important}.v-application .align-self-md-baseline{align-self:baseline!important}.v-application .align-self-md-stretch{align-self:stretch!important}.v-application .order-md-first{order:-1!important}.v-application .order-md-0{order:0!important}.v-application .order-md-1{order:1!important}.v-application .order-md-2{order:2!important}.v-application .order-md-3{order:3!important}.v-application .order-md-4{order:4!important}.v-application .order-md-5{order:5!important}.v-application .order-md-6{order:6!important}.v-application .order-md-7{order:7!important}.v-application .order-md-8{order:8!important}.v-application .order-md-9{order:9!important}.v-application .order-md-10{order:10!important}.v-application .order-md-11{order:11!important}.v-application .order-md-12{order:12!important}.v-application .order-md-last{order:13!important}.v-application .ma-md-0{margin:0!important}.v-application .ma-md-1{margin:4px!important}.v-application .ma-md-2{margin:8px!important}.v-application .ma-md-3{margin:12px!important}.v-application .ma-md-4{margin:16px!important}.v-application .ma-md-5{margin:20px!important}.v-application .ma-md-6{margin:24px!important}.v-application .ma-md-7{margin:28px!important}.v-application .ma-md-8{margin:32px!important}.v-application .ma-md-9{margin:36px!important}.v-application .ma-md-10{margin:40px!important}.v-application .ma-md-11{margin:44px!important}.v-application .ma-md-12{margin:48px!important}.v-application .ma-md-13{margin:52px!important}.v-application .ma-md-14{margin:56px!important}.v-application .ma-md-15{margin:60px!important}.v-application .ma-md-16{margin:64px!important}.v-application .ma-md-auto{margin:auto!important}.v-application .mx-md-0{margin-right:0!important;margin-left:0!important}.v-application .mx-md-1{margin-right:4px!important;margin-left:4px!important}.v-application .mx-md-2{margin-right:8px!important;margin-left:8px!important}.v-application .mx-md-3{margin-right:12px!important;margin-left:12px!important}.v-application .mx-md-4{margin-right:16px!important;margin-left:16px!important}.v-application .mx-md-5{margin-right:20px!important;margin-left:20px!important}.v-application .mx-md-6{margin-right:24px!important;margin-left:24px!important}.v-application .mx-md-7{margin-right:28px!important;margin-left:28px!important}.v-application .mx-md-8{margin-right:32px!important;margin-left:32px!important}.v-application .mx-md-9{margin-right:36px!important;margin-left:36px!important}.v-application .mx-md-10{margin-right:40px!important;margin-left:40px!important}.v-application .mx-md-11{margin-right:44px!important;margin-left:44px!important}.v-application .mx-md-12{margin-right:48px!important;margin-left:48px!important}.v-application .mx-md-13{margin-right:52px!important;margin-left:52px!important}.v-application .mx-md-14{margin-right:56px!important;margin-left:56px!important}.v-application .mx-md-15{margin-right:60px!important;margin-left:60px!important}.v-application .mx-md-16{margin-right:64px!important;margin-left:64px!important}.v-application .mx-md-auto{margin-right:auto!important;margin-left:auto!important}.v-application .my-md-0{margin-top:0!important;margin-bottom:0!important}.v-application .my-md-1{margin-top:4px!important;margin-bottom:4px!important}.v-application .my-md-2{margin-top:8px!important;margin-bottom:8px!important}.v-application .my-md-3{margin-top:12px!important;margin-bottom:12px!important}.v-application .my-md-4{margin-top:16px!important;margin-bottom:16px!important}.v-application .my-md-5{margin-top:20px!important;margin-bottom:20px!important}.v-application .my-md-6{margin-top:24px!important;margin-bottom:24px!important}.v-application .my-md-7{margin-top:28px!important;margin-bottom:28px!important}.v-application .my-md-8{margin-top:32px!important;margin-bottom:32px!important}.v-application .my-md-9{margin-top:36px!important;margin-bottom:36px!important}.v-application .my-md-10{margin-top:40px!important;margin-bottom:40px!important}.v-application .my-md-11{margin-top:44px!important;margin-bottom:44px!important}.v-application .my-md-12{margin-top:48px!important;margin-bottom:48px!important}.v-application .my-md-13{margin-top:52px!important;margin-bottom:52px!important}.v-application .my-md-14{margin-top:56px!important;margin-bottom:56px!important}.v-application .my-md-15{margin-top:60px!important;margin-bottom:60px!important}.v-application .my-md-16{margin-top:64px!important;margin-bottom:64px!important}.v-application .my-md-auto{margin-top:auto!important;margin-bottom:auto!important}.v-application .mt-md-0{margin-top:0!important}.v-application .mt-md-1{margin-top:4px!important}.v-application .mt-md-2{margin-top:8px!important}.v-application .mt-md-3{margin-top:12px!important}.v-application .mt-md-4{margin-top:16px!important}.v-application .mt-md-5{margin-top:20px!important}.v-application .mt-md-6{margin-top:24px!important}.v-application .mt-md-7{margin-top:28px!important}.v-application .mt-md-8{margin-top:32px!important}.v-application .mt-md-9{margin-top:36px!important}.v-application .mt-md-10{margin-top:40px!important}.v-application .mt-md-11{margin-top:44px!important}.v-application .mt-md-12{margin-top:48px!important}.v-application .mt-md-13{margin-top:52px!important}.v-application .mt-md-14{margin-top:56px!important}.v-application .mt-md-15{margin-top:60px!important}.v-application .mt-md-16{margin-top:64px!important}.v-application .mt-md-auto{margin-top:auto!important}.v-application .mr-md-0{margin-right:0!important}.v-application .mr-md-1{margin-right:4px!important}.v-application .mr-md-2{margin-right:8px!important}.v-application .mr-md-3{margin-right:12px!important}.v-application .mr-md-4{margin-right:16px!important}.v-application .mr-md-5{margin-right:20px!important}.v-application .mr-md-6{margin-right:24px!important}.v-application .mr-md-7{margin-right:28px!important}.v-application .mr-md-8{margin-right:32px!important}.v-application .mr-md-9{margin-right:36px!important}.v-application .mr-md-10{margin-right:40px!important}.v-application .mr-md-11{margin-right:44px!important}.v-application .mr-md-12{margin-right:48px!important}.v-application .mr-md-13{margin-right:52px!important}.v-application .mr-md-14{margin-right:56px!important}.v-application .mr-md-15{margin-right:60px!important}.v-application .mr-md-16{margin-right:64px!important}.v-application .mr-md-auto{margin-right:auto!important}.v-application .mb-md-0{margin-bottom:0!important}.v-application .mb-md-1{margin-bottom:4px!important}.v-application .mb-md-2{margin-bottom:8px!important}.v-application .mb-md-3{margin-bottom:12px!important}.v-application .mb-md-4{margin-bottom:16px!important}.v-application .mb-md-5{margin-bottom:20px!important}.v-application .mb-md-6{margin-bottom:24px!important}.v-application .mb-md-7{margin-bottom:28px!important}.v-application .mb-md-8{margin-bottom:32px!important}.v-application .mb-md-9{margin-bottom:36px!important}.v-application .mb-md-10{margin-bottom:40px!important}.v-application .mb-md-11{margin-bottom:44px!important}.v-application .mb-md-12{margin-bottom:48px!important}.v-application .mb-md-13{margin-bottom:52px!important}.v-application .mb-md-14{margin-bottom:56px!important}.v-application .mb-md-15{margin-bottom:60px!important}.v-application .mb-md-16{margin-bottom:64px!important}.v-application .mb-md-auto{margin-bottom:auto!important}.v-application .ml-md-0{margin-left:0!important}.v-application .ml-md-1{margin-left:4px!important}.v-application .ml-md-2{margin-left:8px!important}.v-application .ml-md-3{margin-left:12px!important}.v-application .ml-md-4{margin-left:16px!important}.v-application .ml-md-5{margin-left:20px!important}.v-application .ml-md-6{margin-left:24px!important}.v-application .ml-md-7{margin-left:28px!important}.v-application .ml-md-8{margin-left:32px!important}.v-application .ml-md-9{margin-left:36px!important}.v-application .ml-md-10{margin-left:40px!important}.v-application .ml-md-11{margin-left:44px!important}.v-application .ml-md-12{margin-left:48px!important}.v-application .ml-md-13{margin-left:52px!important}.v-application .ml-md-14{margin-left:56px!important}.v-application .ml-md-15{margin-left:60px!important}.v-application .ml-md-16{margin-left:64px!important}.v-application .ml-md-auto{margin-left:auto!important}.v-application--is-ltr .ms-md-0{margin-left:0!important}.v-application--is-rtl .ms-md-0{margin-right:0!important}.v-application--is-ltr .ms-md-1{margin-left:4px!important}.v-application--is-rtl .ms-md-1{margin-right:4px!important}.v-application--is-ltr .ms-md-2{margin-left:8px!important}.v-application--is-rtl .ms-md-2{margin-right:8px!important}.v-application--is-ltr .ms-md-3{margin-left:12px!important}.v-application--is-rtl .ms-md-3{margin-right:12px!important}.v-application--is-ltr .ms-md-4{margin-left:16px!important}.v-application--is-rtl .ms-md-4{margin-right:16px!important}.v-application--is-ltr .ms-md-5{margin-left:20px!important}.v-application--is-rtl .ms-md-5{margin-right:20px!important}.v-application--is-ltr .ms-md-6{margin-left:24px!important}.v-application--is-rtl .ms-md-6{margin-right:24px!important}.v-application--is-ltr .ms-md-7{margin-left:28px!important}.v-application--is-rtl .ms-md-7{margin-right:28px!important}.v-application--is-ltr .ms-md-8{margin-left:32px!important}.v-application--is-rtl .ms-md-8{margin-right:32px!important}.v-application--is-ltr .ms-md-9{margin-left:36px!important}.v-application--is-rtl .ms-md-9{margin-right:36px!important}.v-application--is-ltr .ms-md-10{margin-left:40px!important}.v-application--is-rtl .ms-md-10{margin-right:40px!important}.v-application--is-ltr .ms-md-11{margin-left:44px!important}.v-application--is-rtl .ms-md-11{margin-right:44px!important}.v-application--is-ltr .ms-md-12{margin-left:48px!important}.v-application--is-rtl .ms-md-12{margin-right:48px!important}.v-application--is-ltr .ms-md-13{margin-left:52px!important}.v-application--is-rtl .ms-md-13{margin-right:52px!important}.v-application--is-ltr .ms-md-14{margin-left:56px!important}.v-application--is-rtl .ms-md-14{margin-right:56px!important}.v-application--is-ltr .ms-md-15{margin-left:60px!important}.v-application--is-rtl .ms-md-15{margin-right:60px!important}.v-application--is-ltr .ms-md-16{margin-left:64px!important}.v-application--is-rtl .ms-md-16{margin-right:64px!important}.v-application--is-ltr .ms-md-auto{margin-left:auto!important}.v-application--is-rtl .ms-md-auto{margin-right:auto!important}.v-application--is-ltr .me-md-0{margin-right:0!important}.v-application--is-rtl .me-md-0{margin-left:0!important}.v-application--is-ltr .me-md-1{margin-right:4px!important}.v-application--is-rtl .me-md-1{margin-left:4px!important}.v-application--is-ltr .me-md-2{margin-right:8px!important}.v-application--is-rtl .me-md-2{margin-left:8px!important}.v-application--is-ltr .me-md-3{margin-right:12px!important}.v-application--is-rtl .me-md-3{margin-left:12px!important}.v-application--is-ltr .me-md-4{margin-right:16px!important}.v-application--is-rtl .me-md-4{margin-left:16px!important}.v-application--is-ltr .me-md-5{margin-right:20px!important}.v-application--is-rtl .me-md-5{margin-left:20px!important}.v-application--is-ltr .me-md-6{margin-right:24px!important}.v-application--is-rtl .me-md-6{margin-left:24px!important}.v-application--is-ltr .me-md-7{margin-right:28px!important}.v-application--is-rtl .me-md-7{margin-left:28px!important}.v-application--is-ltr .me-md-8{margin-right:32px!important}.v-application--is-rtl .me-md-8{margin-left:32px!important}.v-application--is-ltr .me-md-9{margin-right:36px!important}.v-application--is-rtl .me-md-9{margin-left:36px!important}.v-application--is-ltr .me-md-10{margin-right:40px!important}.v-application--is-rtl .me-md-10{margin-left:40px!important}.v-application--is-ltr .me-md-11{margin-right:44px!important}.v-application--is-rtl .me-md-11{margin-left:44px!important}.v-application--is-ltr .me-md-12{margin-right:48px!important}.v-application--is-rtl .me-md-12{margin-left:48px!important}.v-application--is-ltr .me-md-13{margin-right:52px!important}.v-application--is-rtl .me-md-13{margin-left:52px!important}.v-application--is-ltr .me-md-14{margin-right:56px!important}.v-application--is-rtl .me-md-14{margin-left:56px!important}.v-application--is-ltr .me-md-15{margin-right:60px!important}.v-application--is-rtl .me-md-15{margin-left:60px!important}.v-application--is-ltr .me-md-16{margin-right:64px!important}.v-application--is-rtl .me-md-16{margin-left:64px!important}.v-application--is-ltr .me-md-auto{margin-right:auto!important}.v-application--is-rtl .me-md-auto{margin-left:auto!important}.v-application .ma-md-n1{margin:-4px!important}.v-application .ma-md-n2{margin:-8px!important}.v-application .ma-md-n3{margin:-12px!important}.v-application .ma-md-n4{margin:-16px!important}.v-application .ma-md-n5{margin:-20px!important}.v-application .ma-md-n6{margin:-24px!important}.v-application .ma-md-n7{margin:-28px!important}.v-application .ma-md-n8{margin:-32px!important}.v-application .ma-md-n9{margin:-36px!important}.v-application .ma-md-n10{margin:-40px!important}.v-application .ma-md-n11{margin:-44px!important}.v-application .ma-md-n12{margin:-48px!important}.v-application .ma-md-n13{margin:-52px!important}.v-application .ma-md-n14{margin:-56px!important}.v-application .ma-md-n15{margin:-60px!important}.v-application .ma-md-n16{margin:-64px!important}.v-application .mx-md-n1{margin-right:-4px!important;margin-left:-4px!important}.v-application .mx-md-n2{margin-right:-8px!important;margin-left:-8px!important}.v-application .mx-md-n3{margin-right:-12px!important;margin-left:-12px!important}.v-application .mx-md-n4{margin-right:-16px!important;margin-left:-16px!important}.v-application .mx-md-n5{margin-right:-20px!important;margin-left:-20px!important}.v-application .mx-md-n6{margin-right:-24px!important;margin-left:-24px!important}.v-application .mx-md-n7{margin-right:-28px!important;margin-left:-28px!important}.v-application .mx-md-n8{margin-right:-32px!important;margin-left:-32px!important}.v-application .mx-md-n9{margin-right:-36px!important;margin-left:-36px!important}.v-application .mx-md-n10{margin-right:-40px!important;margin-left:-40px!important}.v-application .mx-md-n11{margin-right:-44px!important;margin-left:-44px!important}.v-application .mx-md-n12{margin-right:-48px!important;margin-left:-48px!important}.v-application .mx-md-n13{margin-right:-52px!important;margin-left:-52px!important}.v-application .mx-md-n14{margin-right:-56px!important;margin-left:-56px!important}.v-application .mx-md-n15{margin-right:-60px!important;margin-left:-60px!important}.v-application .mx-md-n16{margin-right:-64px!important;margin-left:-64px!important}.v-application .my-md-n1{margin-top:-4px!important;margin-bottom:-4px!important}.v-application .my-md-n2{margin-top:-8px!important;margin-bottom:-8px!important}.v-application .my-md-n3{margin-top:-12px!important;margin-bottom:-12px!important}.v-application .my-md-n4{margin-top:-16px!important;margin-bottom:-16px!important}.v-application .my-md-n5{margin-top:-20px!important;margin-bottom:-20px!important}.v-application .my-md-n6{margin-top:-24px!important;margin-bottom:-24px!important}.v-application .my-md-n7{margin-top:-28px!important;margin-bottom:-28px!important}.v-application .my-md-n8{margin-top:-32px!important;margin-bottom:-32px!important}.v-application .my-md-n9{margin-top:-36px!important;margin-bottom:-36px!important}.v-application .my-md-n10{margin-top:-40px!important;margin-bottom:-40px!important}.v-application .my-md-n11{margin-top:-44px!important;margin-bottom:-44px!important}.v-application .my-md-n12{margin-top:-48px!important;margin-bottom:-48px!important}.v-application .my-md-n13{margin-top:-52px!important;margin-bottom:-52px!important}.v-application .my-md-n14{margin-top:-56px!important;margin-bottom:-56px!important}.v-application .my-md-n15{margin-top:-60px!important;margin-bottom:-60px!important}.v-application .my-md-n16{margin-top:-64px!important;margin-bottom:-64px!important}.v-application .mt-md-n1{margin-top:-4px!important}.v-application .mt-md-n2{margin-top:-8px!important}.v-application .mt-md-n3{margin-top:-12px!important}.v-application .mt-md-n4{margin-top:-16px!important}.v-application .mt-md-n5{margin-top:-20px!important}.v-application .mt-md-n6{margin-top:-24px!important}.v-application .mt-md-n7{margin-top:-28px!important}.v-application .mt-md-n8{margin-top:-32px!important}.v-application .mt-md-n9{margin-top:-36px!important}.v-application .mt-md-n10{margin-top:-40px!important}.v-application .mt-md-n11{margin-top:-44px!important}.v-application .mt-md-n12{margin-top:-48px!important}.v-application .mt-md-n13{margin-top:-52px!important}.v-application .mt-md-n14{margin-top:-56px!important}.v-application .mt-md-n15{margin-top:-60px!important}.v-application .mt-md-n16{margin-top:-64px!important}.v-application .mr-md-n1{margin-right:-4px!important}.v-application .mr-md-n2{margin-right:-8px!important}.v-application .mr-md-n3{margin-right:-12px!important}.v-application .mr-md-n4{margin-right:-16px!important}.v-application .mr-md-n5{margin-right:-20px!important}.v-application .mr-md-n6{margin-right:-24px!important}.v-application .mr-md-n7{margin-right:-28px!important}.v-application .mr-md-n8{margin-right:-32px!important}.v-application .mr-md-n9{margin-right:-36px!important}.v-application .mr-md-n10{margin-right:-40px!important}.v-application .mr-md-n11{margin-right:-44px!important}.v-application .mr-md-n12{margin-right:-48px!important}.v-application .mr-md-n13{margin-right:-52px!important}.v-application .mr-md-n14{margin-right:-56px!important}.v-application .mr-md-n15{margin-right:-60px!important}.v-application .mr-md-n16{margin-right:-64px!important}.v-application .mb-md-n1{margin-bottom:-4px!important}.v-application .mb-md-n2{margin-bottom:-8px!important}.v-application .mb-md-n3{margin-bottom:-12px!important}.v-application .mb-md-n4{margin-bottom:-16px!important}.v-application .mb-md-n5{margin-bottom:-20px!important}.v-application .mb-md-n6{margin-bottom:-24px!important}.v-application .mb-md-n7{margin-bottom:-28px!important}.v-application .mb-md-n8{margin-bottom:-32px!important}.v-application .mb-md-n9{margin-bottom:-36px!important}.v-application .mb-md-n10{margin-bottom:-40px!important}.v-application .mb-md-n11{margin-bottom:-44px!important}.v-application .mb-md-n12{margin-bottom:-48px!important}.v-application .mb-md-n13{margin-bottom:-52px!important}.v-application .mb-md-n14{margin-bottom:-56px!important}.v-application .mb-md-n15{margin-bottom:-60px!important}.v-application .mb-md-n16{margin-bottom:-64px!important}.v-application .ml-md-n1{margin-left:-4px!important}.v-application .ml-md-n2{margin-left:-8px!important}.v-application .ml-md-n3{margin-left:-12px!important}.v-application .ml-md-n4{margin-left:-16px!important}.v-application .ml-md-n5{margin-left:-20px!important}.v-application .ml-md-n6{margin-left:-24px!important}.v-application .ml-md-n7{margin-left:-28px!important}.v-application .ml-md-n8{margin-left:-32px!important}.v-application .ml-md-n9{margin-left:-36px!important}.v-application .ml-md-n10{margin-left:-40px!important}.v-application .ml-md-n11{margin-left:-44px!important}.v-application .ml-md-n12{margin-left:-48px!important}.v-application .ml-md-n13{margin-left:-52px!important}.v-application .ml-md-n14{margin-left:-56px!important}.v-application .ml-md-n15{margin-left:-60px!important}.v-application .ml-md-n16{margin-left:-64px!important}.v-application--is-ltr .ms-md-n1{margin-left:-4px!important}.v-application--is-rtl .ms-md-n1{margin-right:-4px!important}.v-application--is-ltr .ms-md-n2{margin-left:-8px!important}.v-application--is-rtl .ms-md-n2{margin-right:-8px!important}.v-application--is-ltr .ms-md-n3{margin-left:-12px!important}.v-application--is-rtl .ms-md-n3{margin-right:-12px!important}.v-application--is-ltr .ms-md-n4{margin-left:-16px!important}.v-application--is-rtl .ms-md-n4{margin-right:-16px!important}.v-application--is-ltr .ms-md-n5{margin-left:-20px!important}.v-application--is-rtl .ms-md-n5{margin-right:-20px!important}.v-application--is-ltr .ms-md-n6{margin-left:-24px!important}.v-application--is-rtl .ms-md-n6{margin-right:-24px!important}.v-application--is-ltr .ms-md-n7{margin-left:-28px!important}.v-application--is-rtl .ms-md-n7{margin-right:-28px!important}.v-application--is-ltr .ms-md-n8{margin-left:-32px!important}.v-application--is-rtl .ms-md-n8{margin-right:-32px!important}.v-application--is-ltr .ms-md-n9{margin-left:-36px!important}.v-application--is-rtl .ms-md-n9{margin-right:-36px!important}.v-application--is-ltr .ms-md-n10{margin-left:-40px!important}.v-application--is-rtl .ms-md-n10{margin-right:-40px!important}.v-application--is-ltr .ms-md-n11{margin-left:-44px!important}.v-application--is-rtl .ms-md-n11{margin-right:-44px!important}.v-application--is-ltr .ms-md-n12{margin-left:-48px!important}.v-application--is-rtl .ms-md-n12{margin-right:-48px!important}.v-application--is-ltr .ms-md-n13{margin-left:-52px!important}.v-application--is-rtl .ms-md-n13{margin-right:-52px!important}.v-application--is-ltr .ms-md-n14{margin-left:-56px!important}.v-application--is-rtl .ms-md-n14{margin-right:-56px!important}.v-application--is-ltr .ms-md-n15{margin-left:-60px!important}.v-application--is-rtl .ms-md-n15{margin-right:-60px!important}.v-application--is-ltr .ms-md-n16{margin-left:-64px!important}.v-application--is-rtl .ms-md-n16{margin-right:-64px!important}.v-application--is-ltr .me-md-n1{margin-right:-4px!important}.v-application--is-rtl .me-md-n1{margin-left:-4px!important}.v-application--is-ltr .me-md-n2{margin-right:-8px!important}.v-application--is-rtl .me-md-n2{margin-left:-8px!important}.v-application--is-ltr .me-md-n3{margin-right:-12px!important}.v-application--is-rtl .me-md-n3{margin-left:-12px!important}.v-application--is-ltr .me-md-n4{margin-right:-16px!important}.v-application--is-rtl .me-md-n4{margin-left:-16px!important}.v-application--is-ltr .me-md-n5{margin-right:-20px!important}.v-application--is-rtl .me-md-n5{margin-left:-20px!important}.v-application--is-ltr .me-md-n6{margin-right:-24px!important}.v-application--is-rtl .me-md-n6{margin-left:-24px!important}.v-application--is-ltr .me-md-n7{margin-right:-28px!important}.v-application--is-rtl .me-md-n7{margin-left:-28px!important}.v-application--is-ltr .me-md-n8{margin-right:-32px!important}.v-application--is-rtl .me-md-n8{margin-left:-32px!important}.v-application--is-ltr .me-md-n9{margin-right:-36px!important}.v-application--is-rtl .me-md-n9{margin-left:-36px!important}.v-application--is-ltr .me-md-n10{margin-right:-40px!important}.v-application--is-rtl .me-md-n10{margin-left:-40px!important}.v-application--is-ltr .me-md-n11{margin-right:-44px!important}.v-application--is-rtl .me-md-n11{margin-left:-44px!important}.v-application--is-ltr .me-md-n12{margin-right:-48px!important}.v-application--is-rtl .me-md-n12{margin-left:-48px!important}.v-application--is-ltr .me-md-n13{margin-right:-52px!important}.v-application--is-rtl .me-md-n13{margin-left:-52px!important}.v-application--is-ltr .me-md-n14{margin-right:-56px!important}.v-application--is-rtl .me-md-n14{margin-left:-56px!important}.v-application--is-ltr .me-md-n15{margin-right:-60px!important}.v-application--is-rtl .me-md-n15{margin-left:-60px!important}.v-application--is-ltr .me-md-n16{margin-right:-64px!important}.v-application--is-rtl .me-md-n16{margin-left:-64px!important}.v-application .pa-md-0{padding:0!important}.v-application .pa-md-1{padding:4px!important}.v-application .pa-md-2{padding:8px!important}.v-application .pa-md-3{padding:12px!important}.v-application .pa-md-4{padding:16px!important}.v-application .pa-md-5{padding:20px!important}.v-application .pa-md-6{padding:24px!important}.v-application .pa-md-7{padding:28px!important}.v-application .pa-md-8{padding:32px!important}.v-application .pa-md-9{padding:36px!important}.v-application .pa-md-10{padding:40px!important}.v-application .pa-md-11{padding:44px!important}.v-application .pa-md-12{padding:48px!important}.v-application .pa-md-13{padding:52px!important}.v-application .pa-md-14{padding:56px!important}.v-application .pa-md-15{padding:60px!important}.v-application .pa-md-16{padding:64px!important}.v-application .px-md-0{padding-right:0!important;padding-left:0!important}.v-application .px-md-1{padding-right:4px!important;padding-left:4px!important}.v-application .px-md-2{padding-right:8px!important;padding-left:8px!important}.v-application .px-md-3{padding-right:12px!important;padding-left:12px!important}.v-application .px-md-4{padding-right:16px!important;padding-left:16px!important}.v-application .px-md-5{padding-right:20px!important;padding-left:20px!important}.v-application .px-md-6{padding-right:24px!important;padding-left:24px!important}.v-application .px-md-7{padding-right:28px!important;padding-left:28px!important}.v-application .px-md-8{padding-right:32px!important;padding-left:32px!important}.v-application .px-md-9{padding-right:36px!important;padding-left:36px!important}.v-application .px-md-10{padding-right:40px!important;padding-left:40px!important}.v-application .px-md-11{padding-right:44px!important;padding-left:44px!important}.v-application .px-md-12{padding-right:48px!important;padding-left:48px!important}.v-application .px-md-13{padding-right:52px!important;padding-left:52px!important}.v-application .px-md-14{padding-right:56px!important;padding-left:56px!important}.v-application .px-md-15{padding-right:60px!important;padding-left:60px!important}.v-application .px-md-16{padding-right:64px!important;padding-left:64px!important}.v-application .py-md-0{padding-top:0!important;padding-bottom:0!important}.v-application .py-md-1{padding-top:4px!important;padding-bottom:4px!important}.v-application .py-md-2{padding-top:8px!important;padding-bottom:8px!important}.v-application .py-md-3{padding-top:12px!important;padding-bottom:12px!important}.v-application .py-md-4{padding-top:16px!important;padding-bottom:16px!important}.v-application .py-md-5{padding-top:20px!important;padding-bottom:20px!important}.v-application .py-md-6{padding-top:24px!important;padding-bottom:24px!important}.v-application .py-md-7{padding-top:28px!important;padding-bottom:28px!important}.v-application .py-md-8{padding-top:32px!important;padding-bottom:32px!important}.v-application .py-md-9{padding-top:36px!important;padding-bottom:36px!important}.v-application .py-md-10{padding-top:40px!important;padding-bottom:40px!important}.v-application .py-md-11{padding-top:44px!important;padding-bottom:44px!important}.v-application .py-md-12{padding-top:48px!important;padding-bottom:48px!important}.v-application .py-md-13{padding-top:52px!important;padding-bottom:52px!important}.v-application .py-md-14{padding-top:56px!important;padding-bottom:56px!important}.v-application .py-md-15{padding-top:60px!important;padding-bottom:60px!important}.v-application .py-md-16{padding-top:64px!important;padding-bottom:64px!important}.v-application .pt-md-0{padding-top:0!important}.v-application .pt-md-1{padding-top:4px!important}.v-application .pt-md-2{padding-top:8px!important}.v-application .pt-md-3{padding-top:12px!important}.v-application .pt-md-4{padding-top:16px!important}.v-application .pt-md-5{padding-top:20px!important}.v-application .pt-md-6{padding-top:24px!important}.v-application .pt-md-7{padding-top:28px!important}.v-application .pt-md-8{padding-top:32px!important}.v-application .pt-md-9{padding-top:36px!important}.v-application .pt-md-10{padding-top:40px!important}.v-application .pt-md-11{padding-top:44px!important}.v-application .pt-md-12{padding-top:48px!important}.v-application .pt-md-13{padding-top:52px!important}.v-application .pt-md-14{padding-top:56px!important}.v-application .pt-md-15{padding-top:60px!important}.v-application .pt-md-16{padding-top:64px!important}.v-application .pr-md-0{padding-right:0!important}.v-application .pr-md-1{padding-right:4px!important}.v-application .pr-md-2{padding-right:8px!important}.v-application .pr-md-3{padding-right:12px!important}.v-application .pr-md-4{padding-right:16px!important}.v-application .pr-md-5{padding-right:20px!important}.v-application .pr-md-6{padding-right:24px!important}.v-application .pr-md-7{padding-right:28px!important}.v-application .pr-md-8{padding-right:32px!important}.v-application .pr-md-9{padding-right:36px!important}.v-application .pr-md-10{padding-right:40px!important}.v-application .pr-md-11{padding-right:44px!important}.v-application .pr-md-12{padding-right:48px!important}.v-application .pr-md-13{padding-right:52px!important}.v-application .pr-md-14{padding-right:56px!important}.v-application .pr-md-15{padding-right:60px!important}.v-application .pr-md-16{padding-right:64px!important}.v-application .pb-md-0{padding-bottom:0!important}.v-application .pb-md-1{padding-bottom:4px!important}.v-application .pb-md-2{padding-bottom:8px!important}.v-application .pb-md-3{padding-bottom:12px!important}.v-application .pb-md-4{padding-bottom:16px!important}.v-application .pb-md-5{padding-bottom:20px!important}.v-application .pb-md-6{padding-bottom:24px!important}.v-application .pb-md-7{padding-bottom:28px!important}.v-application .pb-md-8{padding-bottom:32px!important}.v-application .pb-md-9{padding-bottom:36px!important}.v-application .pb-md-10{padding-bottom:40px!important}.v-application .pb-md-11{padding-bottom:44px!important}.v-application .pb-md-12{padding-bottom:48px!important}.v-application .pb-md-13{padding-bottom:52px!important}.v-application .pb-md-14{padding-bottom:56px!important}.v-application .pb-md-15{padding-bottom:60px!important}.v-application .pb-md-16{padding-bottom:64px!important}.v-application .pl-md-0{padding-left:0!important}.v-application .pl-md-1{padding-left:4px!important}.v-application .pl-md-2{padding-left:8px!important}.v-application .pl-md-3{padding-left:12px!important}.v-application .pl-md-4{padding-left:16px!important}.v-application .pl-md-5{padding-left:20px!important}.v-application .pl-md-6{padding-left:24px!important}.v-application .pl-md-7{padding-left:28px!important}.v-application .pl-md-8{padding-left:32px!important}.v-application .pl-md-9{padding-left:36px!important}.v-application .pl-md-10{padding-left:40px!important}.v-application .pl-md-11{padding-left:44px!important}.v-application .pl-md-12{padding-left:48px!important}.v-application .pl-md-13{padding-left:52px!important}.v-application .pl-md-14{padding-left:56px!important}.v-application .pl-md-15{padding-left:60px!important}.v-application .pl-md-16{padding-left:64px!important}.v-application--is-ltr .ps-md-0{padding-left:0!important}.v-application--is-rtl .ps-md-0{padding-right:0!important}.v-application--is-ltr .ps-md-1{padding-left:4px!important}.v-application--is-rtl .ps-md-1{padding-right:4px!important}.v-application--is-ltr .ps-md-2{padding-left:8px!important}.v-application--is-rtl .ps-md-2{padding-right:8px!important}.v-application--is-ltr .ps-md-3{padding-left:12px!important}.v-application--is-rtl .ps-md-3{padding-right:12px!important}.v-application--is-ltr .ps-md-4{padding-left:16px!important}.v-application--is-rtl .ps-md-4{padding-right:16px!important}.v-application--is-ltr .ps-md-5{padding-left:20px!important}.v-application--is-rtl .ps-md-5{padding-right:20px!important}.v-application--is-ltr .ps-md-6{padding-left:24px!important}.v-application--is-rtl .ps-md-6{padding-right:24px!important}.v-application--is-ltr .ps-md-7{padding-left:28px!important}.v-application--is-rtl .ps-md-7{padding-right:28px!important}.v-application--is-ltr .ps-md-8{padding-left:32px!important}.v-application--is-rtl .ps-md-8{padding-right:32px!important}.v-application--is-ltr .ps-md-9{padding-left:36px!important}.v-application--is-rtl .ps-md-9{padding-right:36px!important}.v-application--is-ltr .ps-md-10{padding-left:40px!important}.v-application--is-rtl .ps-md-10{padding-right:40px!important}.v-application--is-ltr .ps-md-11{padding-left:44px!important}.v-application--is-rtl .ps-md-11{padding-right:44px!important}.v-application--is-ltr .ps-md-12{padding-left:48px!important}.v-application--is-rtl .ps-md-12{padding-right:48px!important}.v-application--is-ltr .ps-md-13{padding-left:52px!important}.v-application--is-rtl .ps-md-13{padding-right:52px!important}.v-application--is-ltr .ps-md-14{padding-left:56px!important}.v-application--is-rtl .ps-md-14{padding-right:56px!important}.v-application--is-ltr .ps-md-15{padding-left:60px!important}.v-application--is-rtl .ps-md-15{padding-right:60px!important}.v-application--is-ltr .ps-md-16{padding-left:64px!important}.v-application--is-rtl .ps-md-16{padding-right:64px!important}.v-application--is-ltr .pe-md-0{padding-right:0!important}.v-application--is-rtl .pe-md-0{padding-left:0!important}.v-application--is-ltr .pe-md-1{padding-right:4px!important}.v-application--is-rtl .pe-md-1{padding-left:4px!important}.v-application--is-ltr .pe-md-2{padding-right:8px!important}.v-application--is-rtl .pe-md-2{padding-left:8px!important}.v-application--is-ltr .pe-md-3{padding-right:12px!important}.v-application--is-rtl .pe-md-3{padding-left:12px!important}.v-application--is-ltr .pe-md-4{padding-right:16px!important}.v-application--is-rtl .pe-md-4{padding-left:16px!important}.v-application--is-ltr .pe-md-5{padding-right:20px!important}.v-application--is-rtl .pe-md-5{padding-left:20px!important}.v-application--is-ltr .pe-md-6{padding-right:24px!important}.v-application--is-rtl .pe-md-6{padding-left:24px!important}.v-application--is-ltr .pe-md-7{padding-right:28px!important}.v-application--is-rtl .pe-md-7{padding-left:28px!important}.v-application--is-ltr .pe-md-8{padding-right:32px!important}.v-application--is-rtl .pe-md-8{padding-left:32px!important}.v-application--is-ltr .pe-md-9{padding-right:36px!important}.v-application--is-rtl .pe-md-9{padding-left:36px!important}.v-application--is-ltr .pe-md-10{padding-right:40px!important}.v-application--is-rtl .pe-md-10{padding-left:40px!important}.v-application--is-ltr .pe-md-11{padding-right:44px!important}.v-application--is-rtl .pe-md-11{padding-left:44px!important}.v-application--is-ltr .pe-md-12{padding-right:48px!important}.v-application--is-rtl .pe-md-12{padding-left:48px!important}.v-application--is-ltr .pe-md-13{padding-right:52px!important}.v-application--is-rtl .pe-md-13{padding-left:52px!important}.v-application--is-ltr .pe-md-14{padding-right:56px!important}.v-application--is-rtl .pe-md-14{padding-left:56px!important}.v-application--is-ltr .pe-md-15{padding-right:60px!important}.v-application--is-rtl .pe-md-15{padding-left:60px!important}.v-application--is-ltr .pe-md-16{padding-right:64px!important}.v-application--is-rtl .pe-md-16{padding-left:64px!important}.v-application .text-md-left{text-align:left!important}.v-application .text-md-right{text-align:right!important}.v-application .text-md-center{text-align:center!important}.v-application .text-md-justify{text-align:justify!important}.v-application .text-md-start{text-align:start!important}.v-application .text-md-end{text-align:end!important}.v-application .text-md-h1{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .text-md-h1,.v-application .text-md-h2{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .text-md-h2{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .text-md-h3{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .text-md-h3,.v-application .text-md-h4{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .text-md-h4{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .text-md-h5{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .text-md-h5,.v-application .text-md-h6{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .text-md-h6{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .text-md-subtitle-1{font-size:1rem!important;font-weight:400;line-height:1.75rem;letter-spacing:.009375em!important;font-family:Roboto,sans-serif!important}.v-application .text-md-subtitle-2{font-size:.875rem!important;font-weight:500;line-height:1.375rem;letter-spacing:.0071428571em!important;font-family:Roboto,sans-serif!important}.v-application .text-md-body-1{font-size:1rem!important;font-weight:400;line-height:1.5rem;letter-spacing:.03125em!important;font-family:Roboto,sans-serif!important}.v-application .text-md-body-2{font-weight:400;line-height:1.25rem;letter-spacing:.0178571429em!important}.v-application .text-md-body-2,.v-application .text-md-button{font-size:.875rem!important;font-family:Roboto,sans-serif!important}.v-application .text-md-button{font-weight:500;line-height:2.25rem;letter-spacing:.0892857143em!important;text-transform:uppercase!important}.v-application .text-md-caption{font-weight:400;line-height:1.25rem;letter-spacing:.0333333333em!important}.v-application .text-md-caption,.v-application .text-md-overline{font-size:.75rem!important;font-family:Roboto,sans-serif!important}.v-application .text-md-overline{font-weight:500;line-height:2rem;letter-spacing:.1666666667em!important;text-transform:uppercase!important}}@media (min-width:1264px){.v-application .d-lg-none{display:none!important}.v-application .d-lg-inline{display:inline!important}.v-application .d-lg-inline-block{display:inline-block!important}.v-application .d-lg-block{display:block!important}.v-application .d-lg-table{display:table!important}.v-application .d-lg-table-row{display:table-row!important}.v-application .d-lg-table-cell{display:table-cell!important}.v-application .d-lg-flex{display:flex!important}.v-application .d-lg-inline-flex{display:inline-flex!important}.v-application .float-lg-none{float:none!important}.v-application .float-lg-left{float:left!important}.v-application .float-lg-right{float:right!important}.v-application .flex-lg-fill{flex:1 1 auto!important}.v-application .flex-lg-row{flex-direction:row!important}.v-application .flex-lg-column{flex-direction:column!important}.v-application .flex-lg-row-reverse{flex-direction:row-reverse!important}.v-application .flex-lg-column-reverse{flex-direction:column-reverse!important}.v-application .flex-lg-grow-0{flex-grow:0!important}.v-application .flex-lg-grow-1{flex-grow:1!important}.v-application .flex-lg-shrink-0{flex-shrink:0!important}.v-application .flex-lg-shrink-1{flex-shrink:1!important}.v-application .flex-lg-wrap{flex-wrap:wrap!important}.v-application .flex-lg-nowrap{flex-wrap:nowrap!important}.v-application .flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.v-application .justify-lg-start{justify-content:flex-start!important}.v-application .justify-lg-end{justify-content:flex-end!important}.v-application .justify-lg-center{justify-content:center!important}.v-application .justify-lg-space-between{justify-content:space-between!important}.v-application .justify-lg-space-around{justify-content:space-around!important}.v-application .align-lg-start{align-items:flex-start!important}.v-application .align-lg-end{align-items:flex-end!important}.v-application .align-lg-center{align-items:center!important}.v-application .align-lg-baseline{align-items:baseline!important}.v-application .align-lg-stretch{align-items:stretch!important}.v-application .align-content-lg-start{align-content:flex-start!important}.v-application .align-content-lg-end{align-content:flex-end!important}.v-application .align-content-lg-center{align-content:center!important}.v-application .align-content-lg-space-between{align-content:space-between!important}.v-application .align-content-lg-space-around{align-content:space-around!important}.v-application .align-content-lg-stretch{align-content:stretch!important}.v-application .align-self-lg-auto{align-self:auto!important}.v-application .align-self-lg-start{align-self:flex-start!important}.v-application .align-self-lg-end{align-self:flex-end!important}.v-application .align-self-lg-center{align-self:center!important}.v-application .align-self-lg-baseline{align-self:baseline!important}.v-application .align-self-lg-stretch{align-self:stretch!important}.v-application .order-lg-first{order:-1!important}.v-application .order-lg-0{order:0!important}.v-application .order-lg-1{order:1!important}.v-application .order-lg-2{order:2!important}.v-application .order-lg-3{order:3!important}.v-application .order-lg-4{order:4!important}.v-application .order-lg-5{order:5!important}.v-application .order-lg-6{order:6!important}.v-application .order-lg-7{order:7!important}.v-application .order-lg-8{order:8!important}.v-application .order-lg-9{order:9!important}.v-application .order-lg-10{order:10!important}.v-application .order-lg-11{order:11!important}.v-application .order-lg-12{order:12!important}.v-application .order-lg-last{order:13!important}.v-application .ma-lg-0{margin:0!important}.v-application .ma-lg-1{margin:4px!important}.v-application .ma-lg-2{margin:8px!important}.v-application .ma-lg-3{margin:12px!important}.v-application .ma-lg-4{margin:16px!important}.v-application .ma-lg-5{margin:20px!important}.v-application .ma-lg-6{margin:24px!important}.v-application .ma-lg-7{margin:28px!important}.v-application .ma-lg-8{margin:32px!important}.v-application .ma-lg-9{margin:36px!important}.v-application .ma-lg-10{margin:40px!important}.v-application .ma-lg-11{margin:44px!important}.v-application .ma-lg-12{margin:48px!important}.v-application .ma-lg-13{margin:52px!important}.v-application .ma-lg-14{margin:56px!important}.v-application .ma-lg-15{margin:60px!important}.v-application .ma-lg-16{margin:64px!important}.v-application .ma-lg-auto{margin:auto!important}.v-application .mx-lg-0{margin-right:0!important;margin-left:0!important}.v-application .mx-lg-1{margin-right:4px!important;margin-left:4px!important}.v-application .mx-lg-2{margin-right:8px!important;margin-left:8px!important}.v-application .mx-lg-3{margin-right:12px!important;margin-left:12px!important}.v-application .mx-lg-4{margin-right:16px!important;margin-left:16px!important}.v-application .mx-lg-5{margin-right:20px!important;margin-left:20px!important}.v-application .mx-lg-6{margin-right:24px!important;margin-left:24px!important}.v-application .mx-lg-7{margin-right:28px!important;margin-left:28px!important}.v-application .mx-lg-8{margin-right:32px!important;margin-left:32px!important}.v-application .mx-lg-9{margin-right:36px!important;margin-left:36px!important}.v-application .mx-lg-10{margin-right:40px!important;margin-left:40px!important}.v-application .mx-lg-11{margin-right:44px!important;margin-left:44px!important}.v-application .mx-lg-12{margin-right:48px!important;margin-left:48px!important}.v-application .mx-lg-13{margin-right:52px!important;margin-left:52px!important}.v-application .mx-lg-14{margin-right:56px!important;margin-left:56px!important}.v-application .mx-lg-15{margin-right:60px!important;margin-left:60px!important}.v-application .mx-lg-16{margin-right:64px!important;margin-left:64px!important}.v-application .mx-lg-auto{margin-right:auto!important;margin-left:auto!important}.v-application .my-lg-0{margin-top:0!important;margin-bottom:0!important}.v-application .my-lg-1{margin-top:4px!important;margin-bottom:4px!important}.v-application .my-lg-2{margin-top:8px!important;margin-bottom:8px!important}.v-application .my-lg-3{margin-top:12px!important;margin-bottom:12px!important}.v-application .my-lg-4{margin-top:16px!important;margin-bottom:16px!important}.v-application .my-lg-5{margin-top:20px!important;margin-bottom:20px!important}.v-application .my-lg-6{margin-top:24px!important;margin-bottom:24px!important}.v-application .my-lg-7{margin-top:28px!important;margin-bottom:28px!important}.v-application .my-lg-8{margin-top:32px!important;margin-bottom:32px!important}.v-application .my-lg-9{margin-top:36px!important;margin-bottom:36px!important}.v-application .my-lg-10{margin-top:40px!important;margin-bottom:40px!important}.v-application .my-lg-11{margin-top:44px!important;margin-bottom:44px!important}.v-application .my-lg-12{margin-top:48px!important;margin-bottom:48px!important}.v-application .my-lg-13{margin-top:52px!important;margin-bottom:52px!important}.v-application .my-lg-14{margin-top:56px!important;margin-bottom:56px!important}.v-application .my-lg-15{margin-top:60px!important;margin-bottom:60px!important}.v-application .my-lg-16{margin-top:64px!important;margin-bottom:64px!important}.v-application .my-lg-auto{margin-top:auto!important;margin-bottom:auto!important}.v-application .mt-lg-0{margin-top:0!important}.v-application .mt-lg-1{margin-top:4px!important}.v-application .mt-lg-2{margin-top:8px!important}.v-application .mt-lg-3{margin-top:12px!important}.v-application .mt-lg-4{margin-top:16px!important}.v-application .mt-lg-5{margin-top:20px!important}.v-application .mt-lg-6{margin-top:24px!important}.v-application .mt-lg-7{margin-top:28px!important}.v-application .mt-lg-8{margin-top:32px!important}.v-application .mt-lg-9{margin-top:36px!important}.v-application .mt-lg-10{margin-top:40px!important}.v-application .mt-lg-11{margin-top:44px!important}.v-application .mt-lg-12{margin-top:48px!important}.v-application .mt-lg-13{margin-top:52px!important}.v-application .mt-lg-14{margin-top:56px!important}.v-application .mt-lg-15{margin-top:60px!important}.v-application .mt-lg-16{margin-top:64px!important}.v-application .mt-lg-auto{margin-top:auto!important}.v-application .mr-lg-0{margin-right:0!important}.v-application .mr-lg-1{margin-right:4px!important}.v-application .mr-lg-2{margin-right:8px!important}.v-application .mr-lg-3{margin-right:12px!important}.v-application .mr-lg-4{margin-right:16px!important}.v-application .mr-lg-5{margin-right:20px!important}.v-application .mr-lg-6{margin-right:24px!important}.v-application .mr-lg-7{margin-right:28px!important}.v-application .mr-lg-8{margin-right:32px!important}.v-application .mr-lg-9{margin-right:36px!important}.v-application .mr-lg-10{margin-right:40px!important}.v-application .mr-lg-11{margin-right:44px!important}.v-application .mr-lg-12{margin-right:48px!important}.v-application .mr-lg-13{margin-right:52px!important}.v-application .mr-lg-14{margin-right:56px!important}.v-application .mr-lg-15{margin-right:60px!important}.v-application .mr-lg-16{margin-right:64px!important}.v-application .mr-lg-auto{margin-right:auto!important}.v-application .mb-lg-0{margin-bottom:0!important}.v-application .mb-lg-1{margin-bottom:4px!important}.v-application .mb-lg-2{margin-bottom:8px!important}.v-application .mb-lg-3{margin-bottom:12px!important}.v-application .mb-lg-4{margin-bottom:16px!important}.v-application .mb-lg-5{margin-bottom:20px!important}.v-application .mb-lg-6{margin-bottom:24px!important}.v-application .mb-lg-7{margin-bottom:28px!important}.v-application .mb-lg-8{margin-bottom:32px!important}.v-application .mb-lg-9{margin-bottom:36px!important}.v-application .mb-lg-10{margin-bottom:40px!important}.v-application .mb-lg-11{margin-bottom:44px!important}.v-application .mb-lg-12{margin-bottom:48px!important}.v-application .mb-lg-13{margin-bottom:52px!important}.v-application .mb-lg-14{margin-bottom:56px!important}.v-application .mb-lg-15{margin-bottom:60px!important}.v-application .mb-lg-16{margin-bottom:64px!important}.v-application .mb-lg-auto{margin-bottom:auto!important}.v-application .ml-lg-0{margin-left:0!important}.v-application .ml-lg-1{margin-left:4px!important}.v-application .ml-lg-2{margin-left:8px!important}.v-application .ml-lg-3{margin-left:12px!important}.v-application .ml-lg-4{margin-left:16px!important}.v-application .ml-lg-5{margin-left:20px!important}.v-application .ml-lg-6{margin-left:24px!important}.v-application .ml-lg-7{margin-left:28px!important}.v-application .ml-lg-8{margin-left:32px!important}.v-application .ml-lg-9{margin-left:36px!important}.v-application .ml-lg-10{margin-left:40px!important}.v-application .ml-lg-11{margin-left:44px!important}.v-application .ml-lg-12{margin-left:48px!important}.v-application .ml-lg-13{margin-left:52px!important}.v-application .ml-lg-14{margin-left:56px!important}.v-application .ml-lg-15{margin-left:60px!important}.v-application .ml-lg-16{margin-left:64px!important}.v-application .ml-lg-auto{margin-left:auto!important}.v-application--is-ltr .ms-lg-0{margin-left:0!important}.v-application--is-rtl .ms-lg-0{margin-right:0!important}.v-application--is-ltr .ms-lg-1{margin-left:4px!important}.v-application--is-rtl .ms-lg-1{margin-right:4px!important}.v-application--is-ltr .ms-lg-2{margin-left:8px!important}.v-application--is-rtl .ms-lg-2{margin-right:8px!important}.v-application--is-ltr .ms-lg-3{margin-left:12px!important}.v-application--is-rtl .ms-lg-3{margin-right:12px!important}.v-application--is-ltr .ms-lg-4{margin-left:16px!important}.v-application--is-rtl .ms-lg-4{margin-right:16px!important}.v-application--is-ltr .ms-lg-5{margin-left:20px!important}.v-application--is-rtl .ms-lg-5{margin-right:20px!important}.v-application--is-ltr .ms-lg-6{margin-left:24px!important}.v-application--is-rtl .ms-lg-6{margin-right:24px!important}.v-application--is-ltr .ms-lg-7{margin-left:28px!important}.v-application--is-rtl .ms-lg-7{margin-right:28px!important}.v-application--is-ltr .ms-lg-8{margin-left:32px!important}.v-application--is-rtl .ms-lg-8{margin-right:32px!important}.v-application--is-ltr .ms-lg-9{margin-left:36px!important}.v-application--is-rtl .ms-lg-9{margin-right:36px!important}.v-application--is-ltr .ms-lg-10{margin-left:40px!important}.v-application--is-rtl .ms-lg-10{margin-right:40px!important}.v-application--is-ltr .ms-lg-11{margin-left:44px!important}.v-application--is-rtl .ms-lg-11{margin-right:44px!important}.v-application--is-ltr .ms-lg-12{margin-left:48px!important}.v-application--is-rtl .ms-lg-12{margin-right:48px!important}.v-application--is-ltr .ms-lg-13{margin-left:52px!important}.v-application--is-rtl .ms-lg-13{margin-right:52px!important}.v-application--is-ltr .ms-lg-14{margin-left:56px!important}.v-application--is-rtl .ms-lg-14{margin-right:56px!important}.v-application--is-ltr .ms-lg-15{margin-left:60px!important}.v-application--is-rtl .ms-lg-15{margin-right:60px!important}.v-application--is-ltr .ms-lg-16{margin-left:64px!important}.v-application--is-rtl .ms-lg-16{margin-right:64px!important}.v-application--is-ltr .ms-lg-auto{margin-left:auto!important}.v-application--is-rtl .ms-lg-auto{margin-right:auto!important}.v-application--is-ltr .me-lg-0{margin-right:0!important}.v-application--is-rtl .me-lg-0{margin-left:0!important}.v-application--is-ltr .me-lg-1{margin-right:4px!important}.v-application--is-rtl .me-lg-1{margin-left:4px!important}.v-application--is-ltr .me-lg-2{margin-right:8px!important}.v-application--is-rtl .me-lg-2{margin-left:8px!important}.v-application--is-ltr .me-lg-3{margin-right:12px!important}.v-application--is-rtl .me-lg-3{margin-left:12px!important}.v-application--is-ltr .me-lg-4{margin-right:16px!important}.v-application--is-rtl .me-lg-4{margin-left:16px!important}.v-application--is-ltr .me-lg-5{margin-right:20px!important}.v-application--is-rtl .me-lg-5{margin-left:20px!important}.v-application--is-ltr .me-lg-6{margin-right:24px!important}.v-application--is-rtl .me-lg-6{margin-left:24px!important}.v-application--is-ltr .me-lg-7{margin-right:28px!important}.v-application--is-rtl .me-lg-7{margin-left:28px!important}.v-application--is-ltr .me-lg-8{margin-right:32px!important}.v-application--is-rtl .me-lg-8{margin-left:32px!important}.v-application--is-ltr .me-lg-9{margin-right:36px!important}.v-application--is-rtl .me-lg-9{margin-left:36px!important}.v-application--is-ltr .me-lg-10{margin-right:40px!important}.v-application--is-rtl .me-lg-10{margin-left:40px!important}.v-application--is-ltr .me-lg-11{margin-right:44px!important}.v-application--is-rtl .me-lg-11{margin-left:44px!important}.v-application--is-ltr .me-lg-12{margin-right:48px!important}.v-application--is-rtl .me-lg-12{margin-left:48px!important}.v-application--is-ltr .me-lg-13{margin-right:52px!important}.v-application--is-rtl .me-lg-13{margin-left:52px!important}.v-application--is-ltr .me-lg-14{margin-right:56px!important}.v-application--is-rtl .me-lg-14{margin-left:56px!important}.v-application--is-ltr .me-lg-15{margin-right:60px!important}.v-application--is-rtl .me-lg-15{margin-left:60px!important}.v-application--is-ltr .me-lg-16{margin-right:64px!important}.v-application--is-rtl .me-lg-16{margin-left:64px!important}.v-application--is-ltr .me-lg-auto{margin-right:auto!important}.v-application--is-rtl .me-lg-auto{margin-left:auto!important}.v-application .ma-lg-n1{margin:-4px!important}.v-application .ma-lg-n2{margin:-8px!important}.v-application .ma-lg-n3{margin:-12px!important}.v-application .ma-lg-n4{margin:-16px!important}.v-application .ma-lg-n5{margin:-20px!important}.v-application .ma-lg-n6{margin:-24px!important}.v-application .ma-lg-n7{margin:-28px!important}.v-application .ma-lg-n8{margin:-32px!important}.v-application .ma-lg-n9{margin:-36px!important}.v-application .ma-lg-n10{margin:-40px!important}.v-application .ma-lg-n11{margin:-44px!important}.v-application .ma-lg-n12{margin:-48px!important}.v-application .ma-lg-n13{margin:-52px!important}.v-application .ma-lg-n14{margin:-56px!important}.v-application .ma-lg-n15{margin:-60px!important}.v-application .ma-lg-n16{margin:-64px!important}.v-application .mx-lg-n1{margin-right:-4px!important;margin-left:-4px!important}.v-application .mx-lg-n2{margin-right:-8px!important;margin-left:-8px!important}.v-application .mx-lg-n3{margin-right:-12px!important;margin-left:-12px!important}.v-application .mx-lg-n4{margin-right:-16px!important;margin-left:-16px!important}.v-application .mx-lg-n5{margin-right:-20px!important;margin-left:-20px!important}.v-application .mx-lg-n6{margin-right:-24px!important;margin-left:-24px!important}.v-application .mx-lg-n7{margin-right:-28px!important;margin-left:-28px!important}.v-application .mx-lg-n8{margin-right:-32px!important;margin-left:-32px!important}.v-application .mx-lg-n9{margin-right:-36px!important;margin-left:-36px!important}.v-application .mx-lg-n10{margin-right:-40px!important;margin-left:-40px!important}.v-application .mx-lg-n11{margin-right:-44px!important;margin-left:-44px!important}.v-application .mx-lg-n12{margin-right:-48px!important;margin-left:-48px!important}.v-application .mx-lg-n13{margin-right:-52px!important;margin-left:-52px!important}.v-application .mx-lg-n14{margin-right:-56px!important;margin-left:-56px!important}.v-application .mx-lg-n15{margin-right:-60px!important;margin-left:-60px!important}.v-application .mx-lg-n16{margin-right:-64px!important;margin-left:-64px!important}.v-application .my-lg-n1{margin-top:-4px!important;margin-bottom:-4px!important}.v-application .my-lg-n2{margin-top:-8px!important;margin-bottom:-8px!important}.v-application .my-lg-n3{margin-top:-12px!important;margin-bottom:-12px!important}.v-application .my-lg-n4{margin-top:-16px!important;margin-bottom:-16px!important}.v-application .my-lg-n5{margin-top:-20px!important;margin-bottom:-20px!important}.v-application .my-lg-n6{margin-top:-24px!important;margin-bottom:-24px!important}.v-application .my-lg-n7{margin-top:-28px!important;margin-bottom:-28px!important}.v-application .my-lg-n8{margin-top:-32px!important;margin-bottom:-32px!important}.v-application .my-lg-n9{margin-top:-36px!important;margin-bottom:-36px!important}.v-application .my-lg-n10{margin-top:-40px!important;margin-bottom:-40px!important}.v-application .my-lg-n11{margin-top:-44px!important;margin-bottom:-44px!important}.v-application .my-lg-n12{margin-top:-48px!important;margin-bottom:-48px!important}.v-application .my-lg-n13{margin-top:-52px!important;margin-bottom:-52px!important}.v-application .my-lg-n14{margin-top:-56px!important;margin-bottom:-56px!important}.v-application .my-lg-n15{margin-top:-60px!important;margin-bottom:-60px!important}.v-application .my-lg-n16{margin-top:-64px!important;margin-bottom:-64px!important}.v-application .mt-lg-n1{margin-top:-4px!important}.v-application .mt-lg-n2{margin-top:-8px!important}.v-application .mt-lg-n3{margin-top:-12px!important}.v-application .mt-lg-n4{margin-top:-16px!important}.v-application .mt-lg-n5{margin-top:-20px!important}.v-application .mt-lg-n6{margin-top:-24px!important}.v-application .mt-lg-n7{margin-top:-28px!important}.v-application .mt-lg-n8{margin-top:-32px!important}.v-application .mt-lg-n9{margin-top:-36px!important}.v-application .mt-lg-n10{margin-top:-40px!important}.v-application .mt-lg-n11{margin-top:-44px!important}.v-application .mt-lg-n12{margin-top:-48px!important}.v-application .mt-lg-n13{margin-top:-52px!important}.v-application .mt-lg-n14{margin-top:-56px!important}.v-application .mt-lg-n15{margin-top:-60px!important}.v-application .mt-lg-n16{margin-top:-64px!important}.v-application .mr-lg-n1{margin-right:-4px!important}.v-application .mr-lg-n2{margin-right:-8px!important}.v-application .mr-lg-n3{margin-right:-12px!important}.v-application .mr-lg-n4{margin-right:-16px!important}.v-application .mr-lg-n5{margin-right:-20px!important}.v-application .mr-lg-n6{margin-right:-24px!important}.v-application .mr-lg-n7{margin-right:-28px!important}.v-application .mr-lg-n8{margin-right:-32px!important}.v-application .mr-lg-n9{margin-right:-36px!important}.v-application .mr-lg-n10{margin-right:-40px!important}.v-application .mr-lg-n11{margin-right:-44px!important}.v-application .mr-lg-n12{margin-right:-48px!important}.v-application .mr-lg-n13{margin-right:-52px!important}.v-application .mr-lg-n14{margin-right:-56px!important}.v-application .mr-lg-n15{margin-right:-60px!important}.v-application .mr-lg-n16{margin-right:-64px!important}.v-application .mb-lg-n1{margin-bottom:-4px!important}.v-application .mb-lg-n2{margin-bottom:-8px!important}.v-application .mb-lg-n3{margin-bottom:-12px!important}.v-application .mb-lg-n4{margin-bottom:-16px!important}.v-application .mb-lg-n5{margin-bottom:-20px!important}.v-application .mb-lg-n6{margin-bottom:-24px!important}.v-application .mb-lg-n7{margin-bottom:-28px!important}.v-application .mb-lg-n8{margin-bottom:-32px!important}.v-application .mb-lg-n9{margin-bottom:-36px!important}.v-application .mb-lg-n10{margin-bottom:-40px!important}.v-application .mb-lg-n11{margin-bottom:-44px!important}.v-application .mb-lg-n12{margin-bottom:-48px!important}.v-application .mb-lg-n13{margin-bottom:-52px!important}.v-application .mb-lg-n14{margin-bottom:-56px!important}.v-application .mb-lg-n15{margin-bottom:-60px!important}.v-application .mb-lg-n16{margin-bottom:-64px!important}.v-application .ml-lg-n1{margin-left:-4px!important}.v-application .ml-lg-n2{margin-left:-8px!important}.v-application .ml-lg-n3{margin-left:-12px!important}.v-application .ml-lg-n4{margin-left:-16px!important}.v-application .ml-lg-n5{margin-left:-20px!important}.v-application .ml-lg-n6{margin-left:-24px!important}.v-application .ml-lg-n7{margin-left:-28px!important}.v-application .ml-lg-n8{margin-left:-32px!important}.v-application .ml-lg-n9{margin-left:-36px!important}.v-application .ml-lg-n10{margin-left:-40px!important}.v-application .ml-lg-n11{margin-left:-44px!important}.v-application .ml-lg-n12{margin-left:-48px!important}.v-application .ml-lg-n13{margin-left:-52px!important}.v-application .ml-lg-n14{margin-left:-56px!important}.v-application .ml-lg-n15{margin-left:-60px!important}.v-application .ml-lg-n16{margin-left:-64px!important}.v-application--is-ltr .ms-lg-n1{margin-left:-4px!important}.v-application--is-rtl .ms-lg-n1{margin-right:-4px!important}.v-application--is-ltr .ms-lg-n2{margin-left:-8px!important}.v-application--is-rtl .ms-lg-n2{margin-right:-8px!important}.v-application--is-ltr .ms-lg-n3{margin-left:-12px!important}.v-application--is-rtl .ms-lg-n3{margin-right:-12px!important}.v-application--is-ltr .ms-lg-n4{margin-left:-16px!important}.v-application--is-rtl .ms-lg-n4{margin-right:-16px!important}.v-application--is-ltr .ms-lg-n5{margin-left:-20px!important}.v-application--is-rtl .ms-lg-n5{margin-right:-20px!important}.v-application--is-ltr .ms-lg-n6{margin-left:-24px!important}.v-application--is-rtl .ms-lg-n6{margin-right:-24px!important}.v-application--is-ltr .ms-lg-n7{margin-left:-28px!important}.v-application--is-rtl .ms-lg-n7{margin-right:-28px!important}.v-application--is-ltr .ms-lg-n8{margin-left:-32px!important}.v-application--is-rtl .ms-lg-n8{margin-right:-32px!important}.v-application--is-ltr .ms-lg-n9{margin-left:-36px!important}.v-application--is-rtl .ms-lg-n9{margin-right:-36px!important}.v-application--is-ltr .ms-lg-n10{margin-left:-40px!important}.v-application--is-rtl .ms-lg-n10{margin-right:-40px!important}.v-application--is-ltr .ms-lg-n11{margin-left:-44px!important}.v-application--is-rtl .ms-lg-n11{margin-right:-44px!important}.v-application--is-ltr .ms-lg-n12{margin-left:-48px!important}.v-application--is-rtl .ms-lg-n12{margin-right:-48px!important}.v-application--is-ltr .ms-lg-n13{margin-left:-52px!important}.v-application--is-rtl .ms-lg-n13{margin-right:-52px!important}.v-application--is-ltr .ms-lg-n14{margin-left:-56px!important}.v-application--is-rtl .ms-lg-n14{margin-right:-56px!important}.v-application--is-ltr .ms-lg-n15{margin-left:-60px!important}.v-application--is-rtl .ms-lg-n15{margin-right:-60px!important}.v-application--is-ltr .ms-lg-n16{margin-left:-64px!important}.v-application--is-rtl .ms-lg-n16{margin-right:-64px!important}.v-application--is-ltr .me-lg-n1{margin-right:-4px!important}.v-application--is-rtl .me-lg-n1{margin-left:-4px!important}.v-application--is-ltr .me-lg-n2{margin-right:-8px!important}.v-application--is-rtl .me-lg-n2{margin-left:-8px!important}.v-application--is-ltr .me-lg-n3{margin-right:-12px!important}.v-application--is-rtl .me-lg-n3{margin-left:-12px!important}.v-application--is-ltr .me-lg-n4{margin-right:-16px!important}.v-application--is-rtl .me-lg-n4{margin-left:-16px!important}.v-application--is-ltr .me-lg-n5{margin-right:-20px!important}.v-application--is-rtl .me-lg-n5{margin-left:-20px!important}.v-application--is-ltr .me-lg-n6{margin-right:-24px!important}.v-application--is-rtl .me-lg-n6{margin-left:-24px!important}.v-application--is-ltr .me-lg-n7{margin-right:-28px!important}.v-application--is-rtl .me-lg-n7{margin-left:-28px!important}.v-application--is-ltr .me-lg-n8{margin-right:-32px!important}.v-application--is-rtl .me-lg-n8{margin-left:-32px!important}.v-application--is-ltr .me-lg-n9{margin-right:-36px!important}.v-application--is-rtl .me-lg-n9{margin-left:-36px!important}.v-application--is-ltr .me-lg-n10{margin-right:-40px!important}.v-application--is-rtl .me-lg-n10{margin-left:-40px!important}.v-application--is-ltr .me-lg-n11{margin-right:-44px!important}.v-application--is-rtl .me-lg-n11{margin-left:-44px!important}.v-application--is-ltr .me-lg-n12{margin-right:-48px!important}.v-application--is-rtl .me-lg-n12{margin-left:-48px!important}.v-application--is-ltr .me-lg-n13{margin-right:-52px!important}.v-application--is-rtl .me-lg-n13{margin-left:-52px!important}.v-application--is-ltr .me-lg-n14{margin-right:-56px!important}.v-application--is-rtl .me-lg-n14{margin-left:-56px!important}.v-application--is-ltr .me-lg-n15{margin-right:-60px!important}.v-application--is-rtl .me-lg-n15{margin-left:-60px!important}.v-application--is-ltr .me-lg-n16{margin-right:-64px!important}.v-application--is-rtl .me-lg-n16{margin-left:-64px!important}.v-application .pa-lg-0{padding:0!important}.v-application .pa-lg-1{padding:4px!important}.v-application .pa-lg-2{padding:8px!important}.v-application .pa-lg-3{padding:12px!important}.v-application .pa-lg-4{padding:16px!important}.v-application .pa-lg-5{padding:20px!important}.v-application .pa-lg-6{padding:24px!important}.v-application .pa-lg-7{padding:28px!important}.v-application .pa-lg-8{padding:32px!important}.v-application .pa-lg-9{padding:36px!important}.v-application .pa-lg-10{padding:40px!important}.v-application .pa-lg-11{padding:44px!important}.v-application .pa-lg-12{padding:48px!important}.v-application .pa-lg-13{padding:52px!important}.v-application .pa-lg-14{padding:56px!important}.v-application .pa-lg-15{padding:60px!important}.v-application .pa-lg-16{padding:64px!important}.v-application .px-lg-0{padding-right:0!important;padding-left:0!important}.v-application .px-lg-1{padding-right:4px!important;padding-left:4px!important}.v-application .px-lg-2{padding-right:8px!important;padding-left:8px!important}.v-application .px-lg-3{padding-right:12px!important;padding-left:12px!important}.v-application .px-lg-4{padding-right:16px!important;padding-left:16px!important}.v-application .px-lg-5{padding-right:20px!important;padding-left:20px!important}.v-application .px-lg-6{padding-right:24px!important;padding-left:24px!important}.v-application .px-lg-7{padding-right:28px!important;padding-left:28px!important}.v-application .px-lg-8{padding-right:32px!important;padding-left:32px!important}.v-application .px-lg-9{padding-right:36px!important;padding-left:36px!important}.v-application .px-lg-10{padding-right:40px!important;padding-left:40px!important}.v-application .px-lg-11{padding-right:44px!important;padding-left:44px!important}.v-application .px-lg-12{padding-right:48px!important;padding-left:48px!important}.v-application .px-lg-13{padding-right:52px!important;padding-left:52px!important}.v-application .px-lg-14{padding-right:56px!important;padding-left:56px!important}.v-application .px-lg-15{padding-right:60px!important;padding-left:60px!important}.v-application .px-lg-16{padding-right:64px!important;padding-left:64px!important}.v-application .py-lg-0{padding-top:0!important;padding-bottom:0!important}.v-application .py-lg-1{padding-top:4px!important;padding-bottom:4px!important}.v-application .py-lg-2{padding-top:8px!important;padding-bottom:8px!important}.v-application .py-lg-3{padding-top:12px!important;padding-bottom:12px!important}.v-application .py-lg-4{padding-top:16px!important;padding-bottom:16px!important}.v-application .py-lg-5{padding-top:20px!important;padding-bottom:20px!important}.v-application .py-lg-6{padding-top:24px!important;padding-bottom:24px!important}.v-application .py-lg-7{padding-top:28px!important;padding-bottom:28px!important}.v-application .py-lg-8{padding-top:32px!important;padding-bottom:32px!important}.v-application .py-lg-9{padding-top:36px!important;padding-bottom:36px!important}.v-application .py-lg-10{padding-top:40px!important;padding-bottom:40px!important}.v-application .py-lg-11{padding-top:44px!important;padding-bottom:44px!important}.v-application .py-lg-12{padding-top:48px!important;padding-bottom:48px!important}.v-application .py-lg-13{padding-top:52px!important;padding-bottom:52px!important}.v-application .py-lg-14{padding-top:56px!important;padding-bottom:56px!important}.v-application .py-lg-15{padding-top:60px!important;padding-bottom:60px!important}.v-application .py-lg-16{padding-top:64px!important;padding-bottom:64px!important}.v-application .pt-lg-0{padding-top:0!important}.v-application .pt-lg-1{padding-top:4px!important}.v-application .pt-lg-2{padding-top:8px!important}.v-application .pt-lg-3{padding-top:12px!important}.v-application .pt-lg-4{padding-top:16px!important}.v-application .pt-lg-5{padding-top:20px!important}.v-application .pt-lg-6{padding-top:24px!important}.v-application .pt-lg-7{padding-top:28px!important}.v-application .pt-lg-8{padding-top:32px!important}.v-application .pt-lg-9{padding-top:36px!important}.v-application .pt-lg-10{padding-top:40px!important}.v-application .pt-lg-11{padding-top:44px!important}.v-application .pt-lg-12{padding-top:48px!important}.v-application .pt-lg-13{padding-top:52px!important}.v-application .pt-lg-14{padding-top:56px!important}.v-application .pt-lg-15{padding-top:60px!important}.v-application .pt-lg-16{padding-top:64px!important}.v-application .pr-lg-0{padding-right:0!important}.v-application .pr-lg-1{padding-right:4px!important}.v-application .pr-lg-2{padding-right:8px!important}.v-application .pr-lg-3{padding-right:12px!important}.v-application .pr-lg-4{padding-right:16px!important}.v-application .pr-lg-5{padding-right:20px!important}.v-application .pr-lg-6{padding-right:24px!important}.v-application .pr-lg-7{padding-right:28px!important}.v-application .pr-lg-8{padding-right:32px!important}.v-application .pr-lg-9{padding-right:36px!important}.v-application .pr-lg-10{padding-right:40px!important}.v-application .pr-lg-11{padding-right:44px!important}.v-application .pr-lg-12{padding-right:48px!important}.v-application .pr-lg-13{padding-right:52px!important}.v-application .pr-lg-14{padding-right:56px!important}.v-application .pr-lg-15{padding-right:60px!important}.v-application .pr-lg-16{padding-right:64px!important}.v-application .pb-lg-0{padding-bottom:0!important}.v-application .pb-lg-1{padding-bottom:4px!important}.v-application .pb-lg-2{padding-bottom:8px!important}.v-application .pb-lg-3{padding-bottom:12px!important}.v-application .pb-lg-4{padding-bottom:16px!important}.v-application .pb-lg-5{padding-bottom:20px!important}.v-application .pb-lg-6{padding-bottom:24px!important}.v-application .pb-lg-7{padding-bottom:28px!important}.v-application .pb-lg-8{padding-bottom:32px!important}.v-application .pb-lg-9{padding-bottom:36px!important}.v-application .pb-lg-10{padding-bottom:40px!important}.v-application .pb-lg-11{padding-bottom:44px!important}.v-application .pb-lg-12{padding-bottom:48px!important}.v-application .pb-lg-13{padding-bottom:52px!important}.v-application .pb-lg-14{padding-bottom:56px!important}.v-application .pb-lg-15{padding-bottom:60px!important}.v-application .pb-lg-16{padding-bottom:64px!important}.v-application .pl-lg-0{padding-left:0!important}.v-application .pl-lg-1{padding-left:4px!important}.v-application .pl-lg-2{padding-left:8px!important}.v-application .pl-lg-3{padding-left:12px!important}.v-application .pl-lg-4{padding-left:16px!important}.v-application .pl-lg-5{padding-left:20px!important}.v-application .pl-lg-6{padding-left:24px!important}.v-application .pl-lg-7{padding-left:28px!important}.v-application .pl-lg-8{padding-left:32px!important}.v-application .pl-lg-9{padding-left:36px!important}.v-application .pl-lg-10{padding-left:40px!important}.v-application .pl-lg-11{padding-left:44px!important}.v-application .pl-lg-12{padding-left:48px!important}.v-application .pl-lg-13{padding-left:52px!important}.v-application .pl-lg-14{padding-left:56px!important}.v-application .pl-lg-15{padding-left:60px!important}.v-application .pl-lg-16{padding-left:64px!important}.v-application--is-ltr .ps-lg-0{padding-left:0!important}.v-application--is-rtl .ps-lg-0{padding-right:0!important}.v-application--is-ltr .ps-lg-1{padding-left:4px!important}.v-application--is-rtl .ps-lg-1{padding-right:4px!important}.v-application--is-ltr .ps-lg-2{padding-left:8px!important}.v-application--is-rtl .ps-lg-2{padding-right:8px!important}.v-application--is-ltr .ps-lg-3{padding-left:12px!important}.v-application--is-rtl .ps-lg-3{padding-right:12px!important}.v-application--is-ltr .ps-lg-4{padding-left:16px!important}.v-application--is-rtl .ps-lg-4{padding-right:16px!important}.v-application--is-ltr .ps-lg-5{padding-left:20px!important}.v-application--is-rtl .ps-lg-5{padding-right:20px!important}.v-application--is-ltr .ps-lg-6{padding-left:24px!important}.v-application--is-rtl .ps-lg-6{padding-right:24px!important}.v-application--is-ltr .ps-lg-7{padding-left:28px!important}.v-application--is-rtl .ps-lg-7{padding-right:28px!important}.v-application--is-ltr .ps-lg-8{padding-left:32px!important}.v-application--is-rtl .ps-lg-8{padding-right:32px!important}.v-application--is-ltr .ps-lg-9{padding-left:36px!important}.v-application--is-rtl .ps-lg-9{padding-right:36px!important}.v-application--is-ltr .ps-lg-10{padding-left:40px!important}.v-application--is-rtl .ps-lg-10{padding-right:40px!important}.v-application--is-ltr .ps-lg-11{padding-left:44px!important}.v-application--is-rtl .ps-lg-11{padding-right:44px!important}.v-application--is-ltr .ps-lg-12{padding-left:48px!important}.v-application--is-rtl .ps-lg-12{padding-right:48px!important}.v-application--is-ltr .ps-lg-13{padding-left:52px!important}.v-application--is-rtl .ps-lg-13{padding-right:52px!important}.v-application--is-ltr .ps-lg-14{padding-left:56px!important}.v-application--is-rtl .ps-lg-14{padding-right:56px!important}.v-application--is-ltr .ps-lg-15{padding-left:60px!important}.v-application--is-rtl .ps-lg-15{padding-right:60px!important}.v-application--is-ltr .ps-lg-16{padding-left:64px!important}.v-application--is-rtl .ps-lg-16{padding-right:64px!important}.v-application--is-ltr .pe-lg-0{padding-right:0!important}.v-application--is-rtl .pe-lg-0{padding-left:0!important}.v-application--is-ltr .pe-lg-1{padding-right:4px!important}.v-application--is-rtl .pe-lg-1{padding-left:4px!important}.v-application--is-ltr .pe-lg-2{padding-right:8px!important}.v-application--is-rtl .pe-lg-2{padding-left:8px!important}.v-application--is-ltr .pe-lg-3{padding-right:12px!important}.v-application--is-rtl .pe-lg-3{padding-left:12px!important}.v-application--is-ltr .pe-lg-4{padding-right:16px!important}.v-application--is-rtl .pe-lg-4{padding-left:16px!important}.v-application--is-ltr .pe-lg-5{padding-right:20px!important}.v-application--is-rtl .pe-lg-5{padding-left:20px!important}.v-application--is-ltr .pe-lg-6{padding-right:24px!important}.v-application--is-rtl .pe-lg-6{padding-left:24px!important}.v-application--is-ltr .pe-lg-7{padding-right:28px!important}.v-application--is-rtl .pe-lg-7{padding-left:28px!important}.v-application--is-ltr .pe-lg-8{padding-right:32px!important}.v-application--is-rtl .pe-lg-8{padding-left:32px!important}.v-application--is-ltr .pe-lg-9{padding-right:36px!important}.v-application--is-rtl .pe-lg-9{padding-left:36px!important}.v-application--is-ltr .pe-lg-10{padding-right:40px!important}.v-application--is-rtl .pe-lg-10{padding-left:40px!important}.v-application--is-ltr .pe-lg-11{padding-right:44px!important}.v-application--is-rtl .pe-lg-11{padding-left:44px!important}.v-application--is-ltr .pe-lg-12{padding-right:48px!important}.v-application--is-rtl .pe-lg-12{padding-left:48px!important}.v-application--is-ltr .pe-lg-13{padding-right:52px!important}.v-application--is-rtl .pe-lg-13{padding-left:52px!important}.v-application--is-ltr .pe-lg-14{padding-right:56px!important}.v-application--is-rtl .pe-lg-14{padding-left:56px!important}.v-application--is-ltr .pe-lg-15{padding-right:60px!important}.v-application--is-rtl .pe-lg-15{padding-left:60px!important}.v-application--is-ltr .pe-lg-16{padding-right:64px!important}.v-application--is-rtl .pe-lg-16{padding-left:64px!important}.v-application .text-lg-left{text-align:left!important}.v-application .text-lg-right{text-align:right!important}.v-application .text-lg-center{text-align:center!important}.v-application .text-lg-justify{text-align:justify!important}.v-application .text-lg-start{text-align:start!important}.v-application .text-lg-end{text-align:end!important}.v-application .text-lg-h1{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .text-lg-h1,.v-application .text-lg-h2{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .text-lg-h2{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .text-lg-h3{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .text-lg-h3,.v-application .text-lg-h4{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .text-lg-h4{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .text-lg-h5{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .text-lg-h5,.v-application .text-lg-h6{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .text-lg-h6{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .text-lg-subtitle-1{font-size:1rem!important;font-weight:400;line-height:1.75rem;letter-spacing:.009375em!important;font-family:Roboto,sans-serif!important}.v-application .text-lg-subtitle-2{font-size:.875rem!important;font-weight:500;line-height:1.375rem;letter-spacing:.0071428571em!important;font-family:Roboto,sans-serif!important}.v-application .text-lg-body-1{font-size:1rem!important;font-weight:400;line-height:1.5rem;letter-spacing:.03125em!important;font-family:Roboto,sans-serif!important}.v-application .text-lg-body-2{font-weight:400;line-height:1.25rem;letter-spacing:.0178571429em!important}.v-application .text-lg-body-2,.v-application .text-lg-button{font-size:.875rem!important;font-family:Roboto,sans-serif!important}.v-application .text-lg-button{font-weight:500;line-height:2.25rem;letter-spacing:.0892857143em!important;text-transform:uppercase!important}.v-application .text-lg-caption{font-weight:400;line-height:1.25rem;letter-spacing:.0333333333em!important}.v-application .text-lg-caption,.v-application .text-lg-overline{font-size:.75rem!important;font-family:Roboto,sans-serif!important}.v-application .text-lg-overline{font-weight:500;line-height:2rem;letter-spacing:.1666666667em!important;text-transform:uppercase!important}}@media (min-width:1904px){.v-application .d-xl-none{display:none!important}.v-application .d-xl-inline{display:inline!important}.v-application .d-xl-inline-block{display:inline-block!important}.v-application .d-xl-block{display:block!important}.v-application .d-xl-table{display:table!important}.v-application .d-xl-table-row{display:table-row!important}.v-application .d-xl-table-cell{display:table-cell!important}.v-application .d-xl-flex{display:flex!important}.v-application .d-xl-inline-flex{display:inline-flex!important}.v-application .float-xl-none{float:none!important}.v-application .float-xl-left{float:left!important}.v-application .float-xl-right{float:right!important}.v-application .flex-xl-fill{flex:1 1 auto!important}.v-application .flex-xl-row{flex-direction:row!important}.v-application .flex-xl-column{flex-direction:column!important}.v-application .flex-xl-row-reverse{flex-direction:row-reverse!important}.v-application .flex-xl-column-reverse{flex-direction:column-reverse!important}.v-application .flex-xl-grow-0{flex-grow:0!important}.v-application .flex-xl-grow-1{flex-grow:1!important}.v-application .flex-xl-shrink-0{flex-shrink:0!important}.v-application .flex-xl-shrink-1{flex-shrink:1!important}.v-application .flex-xl-wrap{flex-wrap:wrap!important}.v-application .flex-xl-nowrap{flex-wrap:nowrap!important}.v-application .flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.v-application .justify-xl-start{justify-content:flex-start!important}.v-application .justify-xl-end{justify-content:flex-end!important}.v-application .justify-xl-center{justify-content:center!important}.v-application .justify-xl-space-between{justify-content:space-between!important}.v-application .justify-xl-space-around{justify-content:space-around!important}.v-application .align-xl-start{align-items:flex-start!important}.v-application .align-xl-end{align-items:flex-end!important}.v-application .align-xl-center{align-items:center!important}.v-application .align-xl-baseline{align-items:baseline!important}.v-application .align-xl-stretch{align-items:stretch!important}.v-application .align-content-xl-start{align-content:flex-start!important}.v-application .align-content-xl-end{align-content:flex-end!important}.v-application .align-content-xl-center{align-content:center!important}.v-application .align-content-xl-space-between{align-content:space-between!important}.v-application .align-content-xl-space-around{align-content:space-around!important}.v-application .align-content-xl-stretch{align-content:stretch!important}.v-application .align-self-xl-auto{align-self:auto!important}.v-application .align-self-xl-start{align-self:flex-start!important}.v-application .align-self-xl-end{align-self:flex-end!important}.v-application .align-self-xl-center{align-self:center!important}.v-application .align-self-xl-baseline{align-self:baseline!important}.v-application .align-self-xl-stretch{align-self:stretch!important}.v-application .order-xl-first{order:-1!important}.v-application .order-xl-0{order:0!important}.v-application .order-xl-1{order:1!important}.v-application .order-xl-2{order:2!important}.v-application .order-xl-3{order:3!important}.v-application .order-xl-4{order:4!important}.v-application .order-xl-5{order:5!important}.v-application .order-xl-6{order:6!important}.v-application .order-xl-7{order:7!important}.v-application .order-xl-8{order:8!important}.v-application .order-xl-9{order:9!important}.v-application .order-xl-10{order:10!important}.v-application .order-xl-11{order:11!important}.v-application .order-xl-12{order:12!important}.v-application .order-xl-last{order:13!important}.v-application .ma-xl-0{margin:0!important}.v-application .ma-xl-1{margin:4px!important}.v-application .ma-xl-2{margin:8px!important}.v-application .ma-xl-3{margin:12px!important}.v-application .ma-xl-4{margin:16px!important}.v-application .ma-xl-5{margin:20px!important}.v-application .ma-xl-6{margin:24px!important}.v-application .ma-xl-7{margin:28px!important}.v-application .ma-xl-8{margin:32px!important}.v-application .ma-xl-9{margin:36px!important}.v-application .ma-xl-10{margin:40px!important}.v-application .ma-xl-11{margin:44px!important}.v-application .ma-xl-12{margin:48px!important}.v-application .ma-xl-13{margin:52px!important}.v-application .ma-xl-14{margin:56px!important}.v-application .ma-xl-15{margin:60px!important}.v-application .ma-xl-16{margin:64px!important}.v-application .ma-xl-auto{margin:auto!important}.v-application .mx-xl-0{margin-right:0!important;margin-left:0!important}.v-application .mx-xl-1{margin-right:4px!important;margin-left:4px!important}.v-application .mx-xl-2{margin-right:8px!important;margin-left:8px!important}.v-application .mx-xl-3{margin-right:12px!important;margin-left:12px!important}.v-application .mx-xl-4{margin-right:16px!important;margin-left:16px!important}.v-application .mx-xl-5{margin-right:20px!important;margin-left:20px!important}.v-application .mx-xl-6{margin-right:24px!important;margin-left:24px!important}.v-application .mx-xl-7{margin-right:28px!important;margin-left:28px!important}.v-application .mx-xl-8{margin-right:32px!important;margin-left:32px!important}.v-application .mx-xl-9{margin-right:36px!important;margin-left:36px!important}.v-application .mx-xl-10{margin-right:40px!important;margin-left:40px!important}.v-application .mx-xl-11{margin-right:44px!important;margin-left:44px!important}.v-application .mx-xl-12{margin-right:48px!important;margin-left:48px!important}.v-application .mx-xl-13{margin-right:52px!important;margin-left:52px!important}.v-application .mx-xl-14{margin-right:56px!important;margin-left:56px!important}.v-application .mx-xl-15{margin-right:60px!important;margin-left:60px!important}.v-application .mx-xl-16{margin-right:64px!important;margin-left:64px!important}.v-application .mx-xl-auto{margin-right:auto!important;margin-left:auto!important}.v-application .my-xl-0{margin-top:0!important;margin-bottom:0!important}.v-application .my-xl-1{margin-top:4px!important;margin-bottom:4px!important}.v-application .my-xl-2{margin-top:8px!important;margin-bottom:8px!important}.v-application .my-xl-3{margin-top:12px!important;margin-bottom:12px!important}.v-application .my-xl-4{margin-top:16px!important;margin-bottom:16px!important}.v-application .my-xl-5{margin-top:20px!important;margin-bottom:20px!important}.v-application .my-xl-6{margin-top:24px!important;margin-bottom:24px!important}.v-application .my-xl-7{margin-top:28px!important;margin-bottom:28px!important}.v-application .my-xl-8{margin-top:32px!important;margin-bottom:32px!important}.v-application .my-xl-9{margin-top:36px!important;margin-bottom:36px!important}.v-application .my-xl-10{margin-top:40px!important;margin-bottom:40px!important}.v-application .my-xl-11{margin-top:44px!important;margin-bottom:44px!important}.v-application .my-xl-12{margin-top:48px!important;margin-bottom:48px!important}.v-application .my-xl-13{margin-top:52px!important;margin-bottom:52px!important}.v-application .my-xl-14{margin-top:56px!important;margin-bottom:56px!important}.v-application .my-xl-15{margin-top:60px!important;margin-bottom:60px!important}.v-application .my-xl-16{margin-top:64px!important;margin-bottom:64px!important}.v-application .my-xl-auto{margin-top:auto!important;margin-bottom:auto!important}.v-application .mt-xl-0{margin-top:0!important}.v-application .mt-xl-1{margin-top:4px!important}.v-application .mt-xl-2{margin-top:8px!important}.v-application .mt-xl-3{margin-top:12px!important}.v-application .mt-xl-4{margin-top:16px!important}.v-application .mt-xl-5{margin-top:20px!important}.v-application .mt-xl-6{margin-top:24px!important}.v-application .mt-xl-7{margin-top:28px!important}.v-application .mt-xl-8{margin-top:32px!important}.v-application .mt-xl-9{margin-top:36px!important}.v-application .mt-xl-10{margin-top:40px!important}.v-application .mt-xl-11{margin-top:44px!important}.v-application .mt-xl-12{margin-top:48px!important}.v-application .mt-xl-13{margin-top:52px!important}.v-application .mt-xl-14{margin-top:56px!important}.v-application .mt-xl-15{margin-top:60px!important}.v-application .mt-xl-16{margin-top:64px!important}.v-application .mt-xl-auto{margin-top:auto!important}.v-application .mr-xl-0{margin-right:0!important}.v-application .mr-xl-1{margin-right:4px!important}.v-application .mr-xl-2{margin-right:8px!important}.v-application .mr-xl-3{margin-right:12px!important}.v-application .mr-xl-4{margin-right:16px!important}.v-application .mr-xl-5{margin-right:20px!important}.v-application .mr-xl-6{margin-right:24px!important}.v-application .mr-xl-7{margin-right:28px!important}.v-application .mr-xl-8{margin-right:32px!important}.v-application .mr-xl-9{margin-right:36px!important}.v-application .mr-xl-10{margin-right:40px!important}.v-application .mr-xl-11{margin-right:44px!important}.v-application .mr-xl-12{margin-right:48px!important}.v-application .mr-xl-13{margin-right:52px!important}.v-application .mr-xl-14{margin-right:56px!important}.v-application .mr-xl-15{margin-right:60px!important}.v-application .mr-xl-16{margin-right:64px!important}.v-application .mr-xl-auto{margin-right:auto!important}.v-application .mb-xl-0{margin-bottom:0!important}.v-application .mb-xl-1{margin-bottom:4px!important}.v-application .mb-xl-2{margin-bottom:8px!important}.v-application .mb-xl-3{margin-bottom:12px!important}.v-application .mb-xl-4{margin-bottom:16px!important}.v-application .mb-xl-5{margin-bottom:20px!important}.v-application .mb-xl-6{margin-bottom:24px!important}.v-application .mb-xl-7{margin-bottom:28px!important}.v-application .mb-xl-8{margin-bottom:32px!important}.v-application .mb-xl-9{margin-bottom:36px!important}.v-application .mb-xl-10{margin-bottom:40px!important}.v-application .mb-xl-11{margin-bottom:44px!important}.v-application .mb-xl-12{margin-bottom:48px!important}.v-application .mb-xl-13{margin-bottom:52px!important}.v-application .mb-xl-14{margin-bottom:56px!important}.v-application .mb-xl-15{margin-bottom:60px!important}.v-application .mb-xl-16{margin-bottom:64px!important}.v-application .mb-xl-auto{margin-bottom:auto!important}.v-application .ml-xl-0{margin-left:0!important}.v-application .ml-xl-1{margin-left:4px!important}.v-application .ml-xl-2{margin-left:8px!important}.v-application .ml-xl-3{margin-left:12px!important}.v-application .ml-xl-4{margin-left:16px!important}.v-application .ml-xl-5{margin-left:20px!important}.v-application .ml-xl-6{margin-left:24px!important}.v-application .ml-xl-7{margin-left:28px!important}.v-application .ml-xl-8{margin-left:32px!important}.v-application .ml-xl-9{margin-left:36px!important}.v-application .ml-xl-10{margin-left:40px!important}.v-application .ml-xl-11{margin-left:44px!important}.v-application .ml-xl-12{margin-left:48px!important}.v-application .ml-xl-13{margin-left:52px!important}.v-application .ml-xl-14{margin-left:56px!important}.v-application .ml-xl-15{margin-left:60px!important}.v-application .ml-xl-16{margin-left:64px!important}.v-application .ml-xl-auto{margin-left:auto!important}.v-application--is-ltr .ms-xl-0{margin-left:0!important}.v-application--is-rtl .ms-xl-0{margin-right:0!important}.v-application--is-ltr .ms-xl-1{margin-left:4px!important}.v-application--is-rtl .ms-xl-1{margin-right:4px!important}.v-application--is-ltr .ms-xl-2{margin-left:8px!important}.v-application--is-rtl .ms-xl-2{margin-right:8px!important}.v-application--is-ltr .ms-xl-3{margin-left:12px!important}.v-application--is-rtl .ms-xl-3{margin-right:12px!important}.v-application--is-ltr .ms-xl-4{margin-left:16px!important}.v-application--is-rtl .ms-xl-4{margin-right:16px!important}.v-application--is-ltr .ms-xl-5{margin-left:20px!important}.v-application--is-rtl .ms-xl-5{margin-right:20px!important}.v-application--is-ltr .ms-xl-6{margin-left:24px!important}.v-application--is-rtl .ms-xl-6{margin-right:24px!important}.v-application--is-ltr .ms-xl-7{margin-left:28px!important}.v-application--is-rtl .ms-xl-7{margin-right:28px!important}.v-application--is-ltr .ms-xl-8{margin-left:32px!important}.v-application--is-rtl .ms-xl-8{margin-right:32px!important}.v-application--is-ltr .ms-xl-9{margin-left:36px!important}.v-application--is-rtl .ms-xl-9{margin-right:36px!important}.v-application--is-ltr .ms-xl-10{margin-left:40px!important}.v-application--is-rtl .ms-xl-10{margin-right:40px!important}.v-application--is-ltr .ms-xl-11{margin-left:44px!important}.v-application--is-rtl .ms-xl-11{margin-right:44px!important}.v-application--is-ltr .ms-xl-12{margin-left:48px!important}.v-application--is-rtl .ms-xl-12{margin-right:48px!important}.v-application--is-ltr .ms-xl-13{margin-left:52px!important}.v-application--is-rtl .ms-xl-13{margin-right:52px!important}.v-application--is-ltr .ms-xl-14{margin-left:56px!important}.v-application--is-rtl .ms-xl-14{margin-right:56px!important}.v-application--is-ltr .ms-xl-15{margin-left:60px!important}.v-application--is-rtl .ms-xl-15{margin-right:60px!important}.v-application--is-ltr .ms-xl-16{margin-left:64px!important}.v-application--is-rtl .ms-xl-16{margin-right:64px!important}.v-application--is-ltr .ms-xl-auto{margin-left:auto!important}.v-application--is-rtl .ms-xl-auto{margin-right:auto!important}.v-application--is-ltr .me-xl-0{margin-right:0!important}.v-application--is-rtl .me-xl-0{margin-left:0!important}.v-application--is-ltr .me-xl-1{margin-right:4px!important}.v-application--is-rtl .me-xl-1{margin-left:4px!important}.v-application--is-ltr .me-xl-2{margin-right:8px!important}.v-application--is-rtl .me-xl-2{margin-left:8px!important}.v-application--is-ltr .me-xl-3{margin-right:12px!important}.v-application--is-rtl .me-xl-3{margin-left:12px!important}.v-application--is-ltr .me-xl-4{margin-right:16px!important}.v-application--is-rtl .me-xl-4{margin-left:16px!important}.v-application--is-ltr .me-xl-5{margin-right:20px!important}.v-application--is-rtl .me-xl-5{margin-left:20px!important}.v-application--is-ltr .me-xl-6{margin-right:24px!important}.v-application--is-rtl .me-xl-6{margin-left:24px!important}.v-application--is-ltr .me-xl-7{margin-right:28px!important}.v-application--is-rtl .me-xl-7{margin-left:28px!important}.v-application--is-ltr .me-xl-8{margin-right:32px!important}.v-application--is-rtl .me-xl-8{margin-left:32px!important}.v-application--is-ltr .me-xl-9{margin-right:36px!important}.v-application--is-rtl .me-xl-9{margin-left:36px!important}.v-application--is-ltr .me-xl-10{margin-right:40px!important}.v-application--is-rtl .me-xl-10{margin-left:40px!important}.v-application--is-ltr .me-xl-11{margin-right:44px!important}.v-application--is-rtl .me-xl-11{margin-left:44px!important}.v-application--is-ltr .me-xl-12{margin-right:48px!important}.v-application--is-rtl .me-xl-12{margin-left:48px!important}.v-application--is-ltr .me-xl-13{margin-right:52px!important}.v-application--is-rtl .me-xl-13{margin-left:52px!important}.v-application--is-ltr .me-xl-14{margin-right:56px!important}.v-application--is-rtl .me-xl-14{margin-left:56px!important}.v-application--is-ltr .me-xl-15{margin-right:60px!important}.v-application--is-rtl .me-xl-15{margin-left:60px!important}.v-application--is-ltr .me-xl-16{margin-right:64px!important}.v-application--is-rtl .me-xl-16{margin-left:64px!important}.v-application--is-ltr .me-xl-auto{margin-right:auto!important}.v-application--is-rtl .me-xl-auto{margin-left:auto!important}.v-application .ma-xl-n1{margin:-4px!important}.v-application .ma-xl-n2{margin:-8px!important}.v-application .ma-xl-n3{margin:-12px!important}.v-application .ma-xl-n4{margin:-16px!important}.v-application .ma-xl-n5{margin:-20px!important}.v-application .ma-xl-n6{margin:-24px!important}.v-application .ma-xl-n7{margin:-28px!important}.v-application .ma-xl-n8{margin:-32px!important}.v-application .ma-xl-n9{margin:-36px!important}.v-application .ma-xl-n10{margin:-40px!important}.v-application .ma-xl-n11{margin:-44px!important}.v-application .ma-xl-n12{margin:-48px!important}.v-application .ma-xl-n13{margin:-52px!important}.v-application .ma-xl-n14{margin:-56px!important}.v-application .ma-xl-n15{margin:-60px!important}.v-application .ma-xl-n16{margin:-64px!important}.v-application .mx-xl-n1{margin-right:-4px!important;margin-left:-4px!important}.v-application .mx-xl-n2{margin-right:-8px!important;margin-left:-8px!important}.v-application .mx-xl-n3{margin-right:-12px!important;margin-left:-12px!important}.v-application .mx-xl-n4{margin-right:-16px!important;margin-left:-16px!important}.v-application .mx-xl-n5{margin-right:-20px!important;margin-left:-20px!important}.v-application .mx-xl-n6{margin-right:-24px!important;margin-left:-24px!important}.v-application .mx-xl-n7{margin-right:-28px!important;margin-left:-28px!important}.v-application .mx-xl-n8{margin-right:-32px!important;margin-left:-32px!important}.v-application .mx-xl-n9{margin-right:-36px!important;margin-left:-36px!important}.v-application .mx-xl-n10{margin-right:-40px!important;margin-left:-40px!important}.v-application .mx-xl-n11{margin-right:-44px!important;margin-left:-44px!important}.v-application .mx-xl-n12{margin-right:-48px!important;margin-left:-48px!important}.v-application .mx-xl-n13{margin-right:-52px!important;margin-left:-52px!important}.v-application .mx-xl-n14{margin-right:-56px!important;margin-left:-56px!important}.v-application .mx-xl-n15{margin-right:-60px!important;margin-left:-60px!important}.v-application .mx-xl-n16{margin-right:-64px!important;margin-left:-64px!important}.v-application .my-xl-n1{margin-top:-4px!important;margin-bottom:-4px!important}.v-application .my-xl-n2{margin-top:-8px!important;margin-bottom:-8px!important}.v-application .my-xl-n3{margin-top:-12px!important;margin-bottom:-12px!important}.v-application .my-xl-n4{margin-top:-16px!important;margin-bottom:-16px!important}.v-application .my-xl-n5{margin-top:-20px!important;margin-bottom:-20px!important}.v-application .my-xl-n6{margin-top:-24px!important;margin-bottom:-24px!important}.v-application .my-xl-n7{margin-top:-28px!important;margin-bottom:-28px!important}.v-application .my-xl-n8{margin-top:-32px!important;margin-bottom:-32px!important}.v-application .my-xl-n9{margin-top:-36px!important;margin-bottom:-36px!important}.v-application .my-xl-n10{margin-top:-40px!important;margin-bottom:-40px!important}.v-application .my-xl-n11{margin-top:-44px!important;margin-bottom:-44px!important}.v-application .my-xl-n12{margin-top:-48px!important;margin-bottom:-48px!important}.v-application .my-xl-n13{margin-top:-52px!important;margin-bottom:-52px!important}.v-application .my-xl-n14{margin-top:-56px!important;margin-bottom:-56px!important}.v-application .my-xl-n15{margin-top:-60px!important;margin-bottom:-60px!important}.v-application .my-xl-n16{margin-top:-64px!important;margin-bottom:-64px!important}.v-application .mt-xl-n1{margin-top:-4px!important}.v-application .mt-xl-n2{margin-top:-8px!important}.v-application .mt-xl-n3{margin-top:-12px!important}.v-application .mt-xl-n4{margin-top:-16px!important}.v-application .mt-xl-n5{margin-top:-20px!important}.v-application .mt-xl-n6{margin-top:-24px!important}.v-application .mt-xl-n7{margin-top:-28px!important}.v-application .mt-xl-n8{margin-top:-32px!important}.v-application .mt-xl-n9{margin-top:-36px!important}.v-application .mt-xl-n10{margin-top:-40px!important}.v-application .mt-xl-n11{margin-top:-44px!important}.v-application .mt-xl-n12{margin-top:-48px!important}.v-application .mt-xl-n13{margin-top:-52px!important}.v-application .mt-xl-n14{margin-top:-56px!important}.v-application .mt-xl-n15{margin-top:-60px!important}.v-application .mt-xl-n16{margin-top:-64px!important}.v-application .mr-xl-n1{margin-right:-4px!important}.v-application .mr-xl-n2{margin-right:-8px!important}.v-application .mr-xl-n3{margin-right:-12px!important}.v-application .mr-xl-n4{margin-right:-16px!important}.v-application .mr-xl-n5{margin-right:-20px!important}.v-application .mr-xl-n6{margin-right:-24px!important}.v-application .mr-xl-n7{margin-right:-28px!important}.v-application .mr-xl-n8{margin-right:-32px!important}.v-application .mr-xl-n9{margin-right:-36px!important}.v-application .mr-xl-n10{margin-right:-40px!important}.v-application .mr-xl-n11{margin-right:-44px!important}.v-application .mr-xl-n12{margin-right:-48px!important}.v-application .mr-xl-n13{margin-right:-52px!important}.v-application .mr-xl-n14{margin-right:-56px!important}.v-application .mr-xl-n15{margin-right:-60px!important}.v-application .mr-xl-n16{margin-right:-64px!important}.v-application .mb-xl-n1{margin-bottom:-4px!important}.v-application .mb-xl-n2{margin-bottom:-8px!important}.v-application .mb-xl-n3{margin-bottom:-12px!important}.v-application .mb-xl-n4{margin-bottom:-16px!important}.v-application .mb-xl-n5{margin-bottom:-20px!important}.v-application .mb-xl-n6{margin-bottom:-24px!important}.v-application .mb-xl-n7{margin-bottom:-28px!important}.v-application .mb-xl-n8{margin-bottom:-32px!important}.v-application .mb-xl-n9{margin-bottom:-36px!important}.v-application .mb-xl-n10{margin-bottom:-40px!important}.v-application .mb-xl-n11{margin-bottom:-44px!important}.v-application .mb-xl-n12{margin-bottom:-48px!important}.v-application .mb-xl-n13{margin-bottom:-52px!important}.v-application .mb-xl-n14{margin-bottom:-56px!important}.v-application .mb-xl-n15{margin-bottom:-60px!important}.v-application .mb-xl-n16{margin-bottom:-64px!important}.v-application .ml-xl-n1{margin-left:-4px!important}.v-application .ml-xl-n2{margin-left:-8px!important}.v-application .ml-xl-n3{margin-left:-12px!important}.v-application .ml-xl-n4{margin-left:-16px!important}.v-application .ml-xl-n5{margin-left:-20px!important}.v-application .ml-xl-n6{margin-left:-24px!important}.v-application .ml-xl-n7{margin-left:-28px!important}.v-application .ml-xl-n8{margin-left:-32px!important}.v-application .ml-xl-n9{margin-left:-36px!important}.v-application .ml-xl-n10{margin-left:-40px!important}.v-application .ml-xl-n11{margin-left:-44px!important}.v-application .ml-xl-n12{margin-left:-48px!important}.v-application .ml-xl-n13{margin-left:-52px!important}.v-application .ml-xl-n14{margin-left:-56px!important}.v-application .ml-xl-n15{margin-left:-60px!important}.v-application .ml-xl-n16{margin-left:-64px!important}.v-application--is-ltr .ms-xl-n1{margin-left:-4px!important}.v-application--is-rtl .ms-xl-n1{margin-right:-4px!important}.v-application--is-ltr .ms-xl-n2{margin-left:-8px!important}.v-application--is-rtl .ms-xl-n2{margin-right:-8px!important}.v-application--is-ltr .ms-xl-n3{margin-left:-12px!important}.v-application--is-rtl .ms-xl-n3{margin-right:-12px!important}.v-application--is-ltr .ms-xl-n4{margin-left:-16px!important}.v-application--is-rtl .ms-xl-n4{margin-right:-16px!important}.v-application--is-ltr .ms-xl-n5{margin-left:-20px!important}.v-application--is-rtl .ms-xl-n5{margin-right:-20px!important}.v-application--is-ltr .ms-xl-n6{margin-left:-24px!important}.v-application--is-rtl .ms-xl-n6{margin-right:-24px!important}.v-application--is-ltr .ms-xl-n7{margin-left:-28px!important}.v-application--is-rtl .ms-xl-n7{margin-right:-28px!important}.v-application--is-ltr .ms-xl-n8{margin-left:-32px!important}.v-application--is-rtl .ms-xl-n8{margin-right:-32px!important}.v-application--is-ltr .ms-xl-n9{margin-left:-36px!important}.v-application--is-rtl .ms-xl-n9{margin-right:-36px!important}.v-application--is-ltr .ms-xl-n10{margin-left:-40px!important}.v-application--is-rtl .ms-xl-n10{margin-right:-40px!important}.v-application--is-ltr .ms-xl-n11{margin-left:-44px!important}.v-application--is-rtl .ms-xl-n11{margin-right:-44px!important}.v-application--is-ltr .ms-xl-n12{margin-left:-48px!important}.v-application--is-rtl .ms-xl-n12{margin-right:-48px!important}.v-application--is-ltr .ms-xl-n13{margin-left:-52px!important}.v-application--is-rtl .ms-xl-n13{margin-right:-52px!important}.v-application--is-ltr .ms-xl-n14{margin-left:-56px!important}.v-application--is-rtl .ms-xl-n14{margin-right:-56px!important}.v-application--is-ltr .ms-xl-n15{margin-left:-60px!important}.v-application--is-rtl .ms-xl-n15{margin-right:-60px!important}.v-application--is-ltr .ms-xl-n16{margin-left:-64px!important}.v-application--is-rtl .ms-xl-n16{margin-right:-64px!important}.v-application--is-ltr .me-xl-n1{margin-right:-4px!important}.v-application--is-rtl .me-xl-n1{margin-left:-4px!important}.v-application--is-ltr .me-xl-n2{margin-right:-8px!important}.v-application--is-rtl .me-xl-n2{margin-left:-8px!important}.v-application--is-ltr .me-xl-n3{margin-right:-12px!important}.v-application--is-rtl .me-xl-n3{margin-left:-12px!important}.v-application--is-ltr .me-xl-n4{margin-right:-16px!important}.v-application--is-rtl .me-xl-n4{margin-left:-16px!important}.v-application--is-ltr .me-xl-n5{margin-right:-20px!important}.v-application--is-rtl .me-xl-n5{margin-left:-20px!important}.v-application--is-ltr .me-xl-n6{margin-right:-24px!important}.v-application--is-rtl .me-xl-n6{margin-left:-24px!important}.v-application--is-ltr .me-xl-n7{margin-right:-28px!important}.v-application--is-rtl .me-xl-n7{margin-left:-28px!important}.v-application--is-ltr .me-xl-n8{margin-right:-32px!important}.v-application--is-rtl .me-xl-n8{margin-left:-32px!important}.v-application--is-ltr .me-xl-n9{margin-right:-36px!important}.v-application--is-rtl .me-xl-n9{margin-left:-36px!important}.v-application--is-ltr .me-xl-n10{margin-right:-40px!important}.v-application--is-rtl .me-xl-n10{margin-left:-40px!important}.v-application--is-ltr .me-xl-n11{margin-right:-44px!important}.v-application--is-rtl .me-xl-n11{margin-left:-44px!important}.v-application--is-ltr .me-xl-n12{margin-right:-48px!important}.v-application--is-rtl .me-xl-n12{margin-left:-48px!important}.v-application--is-ltr .me-xl-n13{margin-right:-52px!important}.v-application--is-rtl .me-xl-n13{margin-left:-52px!important}.v-application--is-ltr .me-xl-n14{margin-right:-56px!important}.v-application--is-rtl .me-xl-n14{margin-left:-56px!important}.v-application--is-ltr .me-xl-n15{margin-right:-60px!important}.v-application--is-rtl .me-xl-n15{margin-left:-60px!important}.v-application--is-ltr .me-xl-n16{margin-right:-64px!important}.v-application--is-rtl .me-xl-n16{margin-left:-64px!important}.v-application .pa-xl-0{padding:0!important}.v-application .pa-xl-1{padding:4px!important}.v-application .pa-xl-2{padding:8px!important}.v-application .pa-xl-3{padding:12px!important}.v-application .pa-xl-4{padding:16px!important}.v-application .pa-xl-5{padding:20px!important}.v-application .pa-xl-6{padding:24px!important}.v-application .pa-xl-7{padding:28px!important}.v-application .pa-xl-8{padding:32px!important}.v-application .pa-xl-9{padding:36px!important}.v-application .pa-xl-10{padding:40px!important}.v-application .pa-xl-11{padding:44px!important}.v-application .pa-xl-12{padding:48px!important}.v-application .pa-xl-13{padding:52px!important}.v-application .pa-xl-14{padding:56px!important}.v-application .pa-xl-15{padding:60px!important}.v-application .pa-xl-16{padding:64px!important}.v-application .px-xl-0{padding-right:0!important;padding-left:0!important}.v-application .px-xl-1{padding-right:4px!important;padding-left:4px!important}.v-application .px-xl-2{padding-right:8px!important;padding-left:8px!important}.v-application .px-xl-3{padding-right:12px!important;padding-left:12px!important}.v-application .px-xl-4{padding-right:16px!important;padding-left:16px!important}.v-application .px-xl-5{padding-right:20px!important;padding-left:20px!important}.v-application .px-xl-6{padding-right:24px!important;padding-left:24px!important}.v-application .px-xl-7{padding-right:28px!important;padding-left:28px!important}.v-application .px-xl-8{padding-right:32px!important;padding-left:32px!important}.v-application .px-xl-9{padding-right:36px!important;padding-left:36px!important}.v-application .px-xl-10{padding-right:40px!important;padding-left:40px!important}.v-application .px-xl-11{padding-right:44px!important;padding-left:44px!important}.v-application .px-xl-12{padding-right:48px!important;padding-left:48px!important}.v-application .px-xl-13{padding-right:52px!important;padding-left:52px!important}.v-application .px-xl-14{padding-right:56px!important;padding-left:56px!important}.v-application .px-xl-15{padding-right:60px!important;padding-left:60px!important}.v-application .px-xl-16{padding-right:64px!important;padding-left:64px!important}.v-application .py-xl-0{padding-top:0!important;padding-bottom:0!important}.v-application .py-xl-1{padding-top:4px!important;padding-bottom:4px!important}.v-application .py-xl-2{padding-top:8px!important;padding-bottom:8px!important}.v-application .py-xl-3{padding-top:12px!important;padding-bottom:12px!important}.v-application .py-xl-4{padding-top:16px!important;padding-bottom:16px!important}.v-application .py-xl-5{padding-top:20px!important;padding-bottom:20px!important}.v-application .py-xl-6{padding-top:24px!important;padding-bottom:24px!important}.v-application .py-xl-7{padding-top:28px!important;padding-bottom:28px!important}.v-application .py-xl-8{padding-top:32px!important;padding-bottom:32px!important}.v-application .py-xl-9{padding-top:36px!important;padding-bottom:36px!important}.v-application .py-xl-10{padding-top:40px!important;padding-bottom:40px!important}.v-application .py-xl-11{padding-top:44px!important;padding-bottom:44px!important}.v-application .py-xl-12{padding-top:48px!important;padding-bottom:48px!important}.v-application .py-xl-13{padding-top:52px!important;padding-bottom:52px!important}.v-application .py-xl-14{padding-top:56px!important;padding-bottom:56px!important}.v-application .py-xl-15{padding-top:60px!important;padding-bottom:60px!important}.v-application .py-xl-16{padding-top:64px!important;padding-bottom:64px!important}.v-application .pt-xl-0{padding-top:0!important}.v-application .pt-xl-1{padding-top:4px!important}.v-application .pt-xl-2{padding-top:8px!important}.v-application .pt-xl-3{padding-top:12px!important}.v-application .pt-xl-4{padding-top:16px!important}.v-application .pt-xl-5{padding-top:20px!important}.v-application .pt-xl-6{padding-top:24px!important}.v-application .pt-xl-7{padding-top:28px!important}.v-application .pt-xl-8{padding-top:32px!important}.v-application .pt-xl-9{padding-top:36px!important}.v-application .pt-xl-10{padding-top:40px!important}.v-application .pt-xl-11{padding-top:44px!important}.v-application .pt-xl-12{padding-top:48px!important}.v-application .pt-xl-13{padding-top:52px!important}.v-application .pt-xl-14{padding-top:56px!important}.v-application .pt-xl-15{padding-top:60px!important}.v-application .pt-xl-16{padding-top:64px!important}.v-application .pr-xl-0{padding-right:0!important}.v-application .pr-xl-1{padding-right:4px!important}.v-application .pr-xl-2{padding-right:8px!important}.v-application .pr-xl-3{padding-right:12px!important}.v-application .pr-xl-4{padding-right:16px!important}.v-application .pr-xl-5{padding-right:20px!important}.v-application .pr-xl-6{padding-right:24px!important}.v-application .pr-xl-7{padding-right:28px!important}.v-application .pr-xl-8{padding-right:32px!important}.v-application .pr-xl-9{padding-right:36px!important}.v-application .pr-xl-10{padding-right:40px!important}.v-application .pr-xl-11{padding-right:44px!important}.v-application .pr-xl-12{padding-right:48px!important}.v-application .pr-xl-13{padding-right:52px!important}.v-application .pr-xl-14{padding-right:56px!important}.v-application .pr-xl-15{padding-right:60px!important}.v-application .pr-xl-16{padding-right:64px!important}.v-application .pb-xl-0{padding-bottom:0!important}.v-application .pb-xl-1{padding-bottom:4px!important}.v-application .pb-xl-2{padding-bottom:8px!important}.v-application .pb-xl-3{padding-bottom:12px!important}.v-application .pb-xl-4{padding-bottom:16px!important}.v-application .pb-xl-5{padding-bottom:20px!important}.v-application .pb-xl-6{padding-bottom:24px!important}.v-application .pb-xl-7{padding-bottom:28px!important}.v-application .pb-xl-8{padding-bottom:32px!important}.v-application .pb-xl-9{padding-bottom:36px!important}.v-application .pb-xl-10{padding-bottom:40px!important}.v-application .pb-xl-11{padding-bottom:44px!important}.v-application .pb-xl-12{padding-bottom:48px!important}.v-application .pb-xl-13{padding-bottom:52px!important}.v-application .pb-xl-14{padding-bottom:56px!important}.v-application .pb-xl-15{padding-bottom:60px!important}.v-application .pb-xl-16{padding-bottom:64px!important}.v-application .pl-xl-0{padding-left:0!important}.v-application .pl-xl-1{padding-left:4px!important}.v-application .pl-xl-2{padding-left:8px!important}.v-application .pl-xl-3{padding-left:12px!important}.v-application .pl-xl-4{padding-left:16px!important}.v-application .pl-xl-5{padding-left:20px!important}.v-application .pl-xl-6{padding-left:24px!important}.v-application .pl-xl-7{padding-left:28px!important}.v-application .pl-xl-8{padding-left:32px!important}.v-application .pl-xl-9{padding-left:36px!important}.v-application .pl-xl-10{padding-left:40px!important}.v-application .pl-xl-11{padding-left:44px!important}.v-application .pl-xl-12{padding-left:48px!important}.v-application .pl-xl-13{padding-left:52px!important}.v-application .pl-xl-14{padding-left:56px!important}.v-application .pl-xl-15{padding-left:60px!important}.v-application .pl-xl-16{padding-left:64px!important}.v-application--is-ltr .ps-xl-0{padding-left:0!important}.v-application--is-rtl .ps-xl-0{padding-right:0!important}.v-application--is-ltr .ps-xl-1{padding-left:4px!important}.v-application--is-rtl .ps-xl-1{padding-right:4px!important}.v-application--is-ltr .ps-xl-2{padding-left:8px!important}.v-application--is-rtl .ps-xl-2{padding-right:8px!important}.v-application--is-ltr .ps-xl-3{padding-left:12px!important}.v-application--is-rtl .ps-xl-3{padding-right:12px!important}.v-application--is-ltr .ps-xl-4{padding-left:16px!important}.v-application--is-rtl .ps-xl-4{padding-right:16px!important}.v-application--is-ltr .ps-xl-5{padding-left:20px!important}.v-application--is-rtl .ps-xl-5{padding-right:20px!important}.v-application--is-ltr .ps-xl-6{padding-left:24px!important}.v-application--is-rtl .ps-xl-6{padding-right:24px!important}.v-application--is-ltr .ps-xl-7{padding-left:28px!important}.v-application--is-rtl .ps-xl-7{padding-right:28px!important}.v-application--is-ltr .ps-xl-8{padding-left:32px!important}.v-application--is-rtl .ps-xl-8{padding-right:32px!important}.v-application--is-ltr .ps-xl-9{padding-left:36px!important}.v-application--is-rtl .ps-xl-9{padding-right:36px!important}.v-application--is-ltr .ps-xl-10{padding-left:40px!important}.v-application--is-rtl .ps-xl-10{padding-right:40px!important}.v-application--is-ltr .ps-xl-11{padding-left:44px!important}.v-application--is-rtl .ps-xl-11{padding-right:44px!important}.v-application--is-ltr .ps-xl-12{padding-left:48px!important}.v-application--is-rtl .ps-xl-12{padding-right:48px!important}.v-application--is-ltr .ps-xl-13{padding-left:52px!important}.v-application--is-rtl .ps-xl-13{padding-right:52px!important}.v-application--is-ltr .ps-xl-14{padding-left:56px!important}.v-application--is-rtl .ps-xl-14{padding-right:56px!important}.v-application--is-ltr .ps-xl-15{padding-left:60px!important}.v-application--is-rtl .ps-xl-15{padding-right:60px!important}.v-application--is-ltr .ps-xl-16{padding-left:64px!important}.v-application--is-rtl .ps-xl-16{padding-right:64px!important}.v-application--is-ltr .pe-xl-0{padding-right:0!important}.v-application--is-rtl .pe-xl-0{padding-left:0!important}.v-application--is-ltr .pe-xl-1{padding-right:4px!important}.v-application--is-rtl .pe-xl-1{padding-left:4px!important}.v-application--is-ltr .pe-xl-2{padding-right:8px!important}.v-application--is-rtl .pe-xl-2{padding-left:8px!important}.v-application--is-ltr .pe-xl-3{padding-right:12px!important}.v-application--is-rtl .pe-xl-3{padding-left:12px!important}.v-application--is-ltr .pe-xl-4{padding-right:16px!important}.v-application--is-rtl .pe-xl-4{padding-left:16px!important}.v-application--is-ltr .pe-xl-5{padding-right:20px!important}.v-application--is-rtl .pe-xl-5{padding-left:20px!important}.v-application--is-ltr .pe-xl-6{padding-right:24px!important}.v-application--is-rtl .pe-xl-6{padding-left:24px!important}.v-application--is-ltr .pe-xl-7{padding-right:28px!important}.v-application--is-rtl .pe-xl-7{padding-left:28px!important}.v-application--is-ltr .pe-xl-8{padding-right:32px!important}.v-application--is-rtl .pe-xl-8{padding-left:32px!important}.v-application--is-ltr .pe-xl-9{padding-right:36px!important}.v-application--is-rtl .pe-xl-9{padding-left:36px!important}.v-application--is-ltr .pe-xl-10{padding-right:40px!important}.v-application--is-rtl .pe-xl-10{padding-left:40px!important}.v-application--is-ltr .pe-xl-11{padding-right:44px!important}.v-application--is-rtl .pe-xl-11{padding-left:44px!important}.v-application--is-ltr .pe-xl-12{padding-right:48px!important}.v-application--is-rtl .pe-xl-12{padding-left:48px!important}.v-application--is-ltr .pe-xl-13{padding-right:52px!important}.v-application--is-rtl .pe-xl-13{padding-left:52px!important}.v-application--is-ltr .pe-xl-14{padding-right:56px!important}.v-application--is-rtl .pe-xl-14{padding-left:56px!important}.v-application--is-ltr .pe-xl-15{padding-right:60px!important}.v-application--is-rtl .pe-xl-15{padding-left:60px!important}.v-application--is-ltr .pe-xl-16{padding-right:64px!important}.v-application--is-rtl .pe-xl-16{padding-left:64px!important}.v-application .text-xl-left{text-align:left!important}.v-application .text-xl-right{text-align:right!important}.v-application .text-xl-center{text-align:center!important}.v-application .text-xl-justify{text-align:justify!important}.v-application .text-xl-start{text-align:start!important}.v-application .text-xl-end{text-align:end!important}.v-application .text-xl-h1{font-size:6rem!important;line-height:6rem;letter-spacing:-.015625em!important}.v-application .text-xl-h1,.v-application .text-xl-h2{font-weight:300;font-family:Roboto,sans-serif!important}.v-application .text-xl-h2{font-size:3.75rem!important;line-height:3.75rem;letter-spacing:-.0083333333em!important}.v-application .text-xl-h3{font-size:3rem!important;line-height:3.125rem;letter-spacing:normal!important}.v-application .text-xl-h3,.v-application .text-xl-h4{font-weight:400;font-family:Roboto,sans-serif!important}.v-application .text-xl-h4{font-size:2.125rem!important;line-height:2.5rem;letter-spacing:.0073529412em!important}.v-application .text-xl-h5{font-size:1.5rem!important;font-weight:400;letter-spacing:normal!important}.v-application .text-xl-h5,.v-application .text-xl-h6{line-height:2rem;font-family:Roboto,sans-serif!important}.v-application .text-xl-h6{font-size:1.25rem!important;font-weight:500;letter-spacing:.0125em!important}.v-application .text-xl-subtitle-1{font-size:1rem!important;font-weight:400;line-height:1.75rem;letter-spacing:.009375em!important;font-family:Roboto,sans-serif!important}.v-application .text-xl-subtitle-2{font-size:.875rem!important;font-weight:500;line-height:1.375rem;letter-spacing:.0071428571em!important;font-family:Roboto,sans-serif!important}.v-application .text-xl-body-1{font-size:1rem!important;font-weight:400;line-height:1.5rem;letter-spacing:.03125em!important;font-family:Roboto,sans-serif!important}.v-application .text-xl-body-2{font-weight:400;line-height:1.25rem;letter-spacing:.0178571429em!important}.v-application .text-xl-body-2,.v-application .text-xl-button{font-size:.875rem!important;font-family:Roboto,sans-serif!important}.v-application .text-xl-button{font-weight:500;line-height:2.25rem;letter-spacing:.0892857143em!important;text-transform:uppercase!important}.v-application .text-xl-caption{font-weight:400;line-height:1.25rem;letter-spacing:.0333333333em!important}.v-application .text-xl-caption,.v-application .text-xl-overline{font-size:.75rem!important;font-family:Roboto,sans-serif!important}.v-application .text-xl-overline{font-weight:500;line-height:2rem;letter-spacing:.1666666667em!important;text-transform:uppercase!important}}@media print{.v-application .d-print-none{display:none!important}.v-application .d-print-inline{display:inline!important}.v-application .d-print-inline-block{display:inline-block!important}.v-application .d-print-block{display:block!important}.v-application .d-print-table{display:table!important}.v-application .d-print-table-row{display:table-row!important}.v-application .d-print-table-cell{display:table-cell!important}.v-application .d-print-flex{display:flex!important}.v-application .d-print-inline-flex{display:inline-flex!important}.v-application .float-print-none{float:none!important}.v-application .float-print-left{float:left!important}.v-application .float-print-right{float:right!important}}.theme--light.v-application{background:#fff;color:rgba(0,0,0,.87)}.theme--light.v-application .text--primary{color:rgba(0,0,0,.87)!important}.theme--light.v-application .text--secondary{color:rgba(0,0,0,.6)!important}.theme--light.v-application .text--disabled{color:rgba(0,0,0,.38)!important}.theme--dark.v-application{background:#121212;color:#fff}.theme--dark.v-application .text--primary{color:#fff!important}.theme--dark.v-application .text--secondary{color:hsla(0,0%,100%,.7)!important}.theme--dark.v-application .text--disabled{color:hsla(0,0%,100%,.5)!important}.v-application{display:flex}.v-application a{cursor:pointer}.v-application--is-rtl{direction:rtl}.v-application--wrap{flex:1 1 auto;backface-visibility:hidden;display:flex;flex-direction:column;min-height:100vh;max-width:100%;position:relative}@-moz-document url-prefix(){@media print{.v-application,.v-application--wrap{display:block}}}.theme--light.v-app-bar.v-toolbar.v-sheet{background-color:#f5f5f5}.theme--dark.v-app-bar.v-toolbar.v-sheet{background-color:#272727}.v-sheet.v-app-bar.v-toolbar{border-radius:0}.v-sheet.v-app-bar.v-toolbar:not(.v-sheet--outlined){box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-sheet.v-app-bar.v-toolbar.v-sheet--shaped{border-radius:24px 0}.v-app-bar:not([data-booted=true]){transition:none!important}.v-app-bar.v-app-bar--fixed{position:fixed;top:0;z-index:5}.v-app-bar.v-app-bar--hide-shadow{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)!important}.v-app-bar--fade-img-on-scroll .v-toolbar__image .v-image__image{transition:opacity .4s cubic-bezier(.4,0,.2,1)}.v-app-bar.v-toolbar--prominent.v-app-bar--shrink-on-scroll .v-toolbar__content{will-change:height}.v-app-bar.v-toolbar--prominent.v-app-bar--shrink-on-scroll .v-toolbar__image{will-change:opacity}.v-app-bar.v-toolbar--prominent.v-app-bar--shrink-on-scroll.v-app-bar--collapse-on-scroll .v-toolbar__extension{display:none}.v-app-bar.v-toolbar--prominent.v-app-bar--shrink-on-scroll.v-app-bar--is-scrolled .v-toolbar__title{padding-top:9px}.v-app-bar.v-toolbar--prominent.v-app-bar--shrink-on-scroll.v-app-bar--is-scrolled:not(.v-app-bar--bottom) .v-toolbar__title{padding-bottom:9px}.v-app-bar.v-app-bar--shrink-on-scroll .v-toolbar__title{font-size:inherit}.theme--light.v-toolbar.v-sheet{background-color:#fff}.theme--dark.v-toolbar.v-sheet{background-color:#272727}.v-sheet.v-toolbar{border-radius:0}.v-sheet.v-toolbar:not(.v-sheet--outlined){box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-sheet.v-toolbar.v-sheet--shaped{border-radius:24px 0}.v-toolbar{contain:layout;display:block;flex:1 1 auto;max-width:100%;transition:transform .2s cubic-bezier(.4,0,.2,1),background-color .2s cubic-bezier(.4,0,.2,1),left .2s cubic-bezier(.4,0,.2,1),right .2s cubic-bezier(.4,0,.2,1),box-shadow .28s cubic-bezier(.4,0,.2,1),max-width .25s cubic-bezier(.4,0,.2,1),width .25s cubic-bezier(.4,0,.2,1);position:relative;box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-toolbar .v-input{padding-top:0;margin-top:0}.v-toolbar__content,.v-toolbar__extension{padding:4px 16px}.v-toolbar__content .v-btn.v-btn--icon.v-size--default,.v-toolbar__extension .v-btn.v-btn--icon.v-size--default{height:48px;width:48px}.v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:first-child,.v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:first-child{margin-left:-12px}.v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:first-child,.v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:first-child{margin-right:-12px}.v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:first-child+.v-toolbar__title,.v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:first-child+.v-toolbar__title{padding-left:20px}.v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:first-child+.v-toolbar__title,.v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:first-child+.v-toolbar__title{padding-right:20px}.v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:last-child,.v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:last-child{margin-right:-12px}.v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:last-child,.v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:last-child{margin-left:-12px}.v-toolbar__content>.v-tabs,.v-toolbar__extension>.v-tabs{height:inherit;margin-top:-4px;margin-bottom:-4px}.v-toolbar__content>.v-tabs>.v-slide-group.v-tabs-bar,.v-toolbar__extension>.v-tabs>.v-slide-group.v-tabs-bar{background-color:inherit;height:inherit}.v-toolbar__content>.v-tabs:first-child,.v-toolbar__extension>.v-tabs:first-child{margin-left:-16px}.v-toolbar__content>.v-tabs:last-child,.v-toolbar__extension>.v-tabs:last-child{margin-right:-16px}.v-toolbar__content,.v-toolbar__extension{align-items:center;display:flex;position:relative;z-index:0}.v-toolbar__image{position:absolute;top:0;bottom:0;width:100%;z-index:0;contain:strict}.v-toolbar__image,.v-toolbar__image .v-image{border-radius:inherit}.v-toolbar__items{display:flex;height:inherit}.v-toolbar__items>.v-btn{border-radius:0;height:100%!important;max-height:none}.v-toolbar__title{font-size:1.25rem;line-height:1.5;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.v-toolbar.v-toolbar--absolute{position:absolute;top:0;z-index:1}.v-toolbar.v-toolbar--bottom{top:auto;bottom:0}.v-toolbar.v-toolbar--collapse .v-toolbar__title{white-space:nowrap}.v-toolbar.v-toolbar--collapsed{max-width:112px;overflow:hidden}.v-application--is-ltr .v-toolbar.v-toolbar--collapsed{border-bottom-right-radius:24px}.v-application--is-rtl .v-toolbar.v-toolbar--collapsed{border-bottom-left-radius:24px}.v-toolbar.v-toolbar--collapsed .v-toolbar__extension,.v-toolbar.v-toolbar--collapsed .v-toolbar__title{display:none}.v-toolbar--dense .v-toolbar__content,.v-toolbar--dense .v-toolbar__extension{padding-top:0;padding-bottom:0}.v-toolbar--flat{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)!important}.v-toolbar--floating{display:inline-flex}.v-toolbar--prominent .v-toolbar__content{align-items:flex-start}.v-toolbar--prominent .v-toolbar__title{font-size:1.5rem;padding-top:6px}.v-toolbar--prominent:not(.v-toolbar--bottom) .v-toolbar__title{align-self:flex-end;padding-bottom:6px;padding-top:0}.theme--light.v-sheet{background-color:#fff;border-color:#fff;color:rgba(0,0,0,.87)}.theme--light.v-sheet--outlined{border:thin solid rgba(0,0,0,.12)}.theme--dark.v-sheet{background-color:#1e1e1e;border-color:#1e1e1e;color:#fff}.theme--dark.v-sheet--outlined{border:thin solid hsla(0,0%,100%,.12)}.v-sheet{border-radius:0}.v-sheet:not(.v-sheet--outlined){box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-sheet.v-sheet--shaped{border-radius:24px 0}.theme--light.v-image{color:rgba(0,0,0,.87)}.theme--dark.v-image{color:#fff}.v-image{z-index:0}.v-image__image,.v-image__placeholder{z-index:-1;position:absolute;top:0;left:0;width:100%;height:100%}.v-image__image{background-repeat:no-repeat}.v-image__image--preload{filter:blur(2px)}.v-image__image--contain{background-size:contain}.v-image__image--cover{background-size:cover}.v-responsive{position:relative;overflow:hidden;flex:1 0 auto;max-width:100%;display:flex}.v-responsive__content{flex:1 0 0px;max-width:100%}.v-application--is-ltr .v-responsive__sizer~.v-responsive__content{margin-left:-100%}.v-application--is-rtl .v-responsive__sizer~.v-responsive__content{margin-right:-100%}.v-responsive__sizer{transition:padding-bottom .2s cubic-bezier(.25,.8,.5,1);flex:1 0 0px}.v-btn:not(.v-btn--outlined).accent,.v-btn:not(.v-btn--outlined).error,.v-btn:not(.v-btn--outlined).info,.v-btn:not(.v-btn--outlined).primary,.v-btn:not(.v-btn--outlined).secondary,.v-btn:not(.v-btn--outlined).success,.v-btn:not(.v-btn--outlined).warning{color:#fff}.theme--light.v-btn{color:rgba(0,0,0,.87)}.theme--light.v-btn.v-btn--disabled,.theme--light.v-btn.v-btn--disabled .v-btn__loading,.theme--light.v-btn.v-btn--disabled .v-icon{color:rgba(0,0,0,.26)!important}.theme--light.v-btn.v-btn--disabled:not(.v-btn--flat):not(.v-btn--text):not(.v-btn--outlined){background-color:rgba(0,0,0,.12)!important}.theme--light.v-btn:not(.v-btn--flat):not(.v-btn--text):not(.v-btn--outlined){background-color:#f5f5f5}.theme--light.v-btn.v-btn--outlined.v-btn--text{border-color:rgba(0,0,0,.12)}.theme--light.v-btn.v-btn--icon{color:rgba(0,0,0,.54)}.theme--light.v-btn:hover:before{opacity:.04}.theme--light.v-btn--active:before,.theme--light.v-btn--active:hover:before,.theme--light.v-btn:focus:before{opacity:.12}.theme--light.v-btn--active:focus:before{opacity:.16}.theme--dark.v-btn{color:#fff}.theme--dark.v-btn.v-btn--disabled,.theme--dark.v-btn.v-btn--disabled .v-btn__loading,.theme--dark.v-btn.v-btn--disabled .v-icon{color:hsla(0,0%,100%,.3)!important}.theme--dark.v-btn.v-btn--disabled:not(.v-btn--flat):not(.v-btn--text):not(.v-btn--outlined){background-color:hsla(0,0%,100%,.12)!important}.theme--dark.v-btn:not(.v-btn--flat):not(.v-btn--text):not(.v-btn--outlined){background-color:#272727}.theme--dark.v-btn.v-btn--outlined.v-btn--text{border-color:hsla(0,0%,100%,.12)}.theme--dark.v-btn.v-btn--icon{color:#fff}.theme--dark.v-btn:hover:before{opacity:.08}.theme--dark.v-btn--active:before,.theme--dark.v-btn--active:hover:before,.theme--dark.v-btn:focus:before{opacity:.24}.theme--dark.v-btn--active:focus:before{opacity:.32}.v-btn{align-items:center;border-radius:4px;display:inline-flex;flex:0 0 auto;font-weight:500;letter-spacing:.0892857143em;justify-content:center;outline:0;position:relative;text-decoration:none;text-indent:.0892857143em;text-transform:uppercase;transition-duration:.28s;transition-property:box-shadow,transform,opacity;transition-timing-function:cubic-bezier(.4,0,.2,1);user-select:none;vertical-align:middle;white-space:nowrap}.v-btn.v-size--x-small{font-size:.625rem}.v-btn.v-size--small{font-size:.75rem}.v-btn.v-size--default,.v-btn.v-size--large{font-size:.875rem}.v-btn.v-size--x-large{font-size:1rem}.v-btn:before{border-radius:inherit;bottom:0;color:inherit;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:opacity .2s cubic-bezier(.4,0,.6,1);background-color:currentColor}.v-btn:not(.v-btn--disabled){will-change:box-shadow}.v-btn:not(.v-btn--round).v-size--x-small{height:20px;min-width:36px;padding:0 8.8888888889px}.v-btn:not(.v-btn--round).v-size--small{height:28px;min-width:50px;padding:0 12.4444444444px}.v-btn:not(.v-btn--round).v-size--default{height:36px;min-width:64px;padding:0 16px}.v-btn:not(.v-btn--round).v-size--large{height:44px;min-width:78px;padding:0 19.5555555556px}.v-btn:not(.v-btn--round).v-size--x-large{height:52px;min-width:92px;padding:0 23.1111111111px}.v-btn>.v-btn__content .v-icon{color:inherit}.v-btn__content{align-items:center;color:inherit;display:flex;flex:1 0 auto;justify-content:inherit;line-height:normal;position:relative}.v-btn__content .v-icon--left,.v-btn__content .v-icon--right{font-size:18px;height:18px;width:18px}.v-application--is-ltr .v-btn__content .v-icon--left{margin-left:-4px;margin-right:8px}.v-application--is-ltr .v-btn__content .v-icon--right,.v-application--is-rtl .v-btn__content .v-icon--left{margin-left:8px;margin-right:-4px}.v-application--is-rtl .v-btn__content .v-icon--right{margin-left:-4px;margin-right:8px}.v-btn__loader{align-items:center;display:flex;height:100%;justify-content:center;left:0;position:absolute;top:0;width:100%}.v-btn:not(.v-btn--text):not(.v-btn--outlined).v-btn--active:before{opacity:.18}.v-btn:not(.v-btn--text):not(.v-btn--outlined):hover:before{opacity:.08}.v-btn:not(.v-btn--text):not(.v-btn--outlined):focus:before{opacity:.24}.v-btn--absolute,.v-btn--fixed{position:absolute}.v-btn--absolute.v-btn--right,.v-btn--fixed.v-btn--right{right:16px}.v-btn--absolute.v-btn--left,.v-btn--fixed.v-btn--left{left:16px}.v-btn--absolute.v-btn--top,.v-btn--fixed.v-btn--top{top:16px}.v-btn--absolute.v-btn--bottom,.v-btn--fixed.v-btn--bottom{bottom:16px}.v-btn--block{display:flex;flex:1 0 auto;min-width:100%!important;max-width:auto}.v-btn--contained{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-btn--contained:after{box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-btn--contained:active{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)}.v-btn--depressed{box-shadow:none!important}.v-btn--disabled{box-shadow:none;pointer-events:none}.v-btn--fab,.v-btn--icon{min-height:0;min-width:0;padding:0}.v-btn--fab.v-size--x-small .v-icon,.v-btn--icon.v-size--x-small .v-icon{height:18px;font-size:18px;width:18px}.v-btn--fab.v-size--default .v-icon,.v-btn--fab.v-size--small .v-icon,.v-btn--icon.v-size--default .v-icon,.v-btn--icon.v-size--small .v-icon{height:24px;font-size:24px;width:24px}.v-btn--fab.v-size--large .v-icon,.v-btn--icon.v-size--large .v-icon{height:28px;font-size:28px;width:28px}.v-btn--fab.v-size--x-large .v-icon,.v-btn--icon.v-size--x-large .v-icon{height:32px;font-size:32px;width:32px}.v-btn--icon.v-size--x-small{height:20px;width:20px}.v-btn--icon.v-size--small{height:28px;width:28px}.v-btn--icon.v-size--default{height:36px;width:36px}.v-btn--icon.v-size--large{height:44px;width:44px}.v-btn--icon.v-size--x-large{height:52px;width:52px}.v-btn--fab.v-btn--contained{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)}.v-btn--fab.v-btn--contained:after{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)}.v-btn--fab.v-btn--contained:active{box-shadow:0 7px 8px -4px rgba(0,0,0,.2),0 12px 17px 2px rgba(0,0,0,.14),0 5px 22px 4px rgba(0,0,0,.12)}.v-btn--fab.v-btn--absolute,.v-btn--fab.v-btn--fixed{z-index:4}.v-btn--fab.v-size--x-small{height:32px;width:32px}.v-btn--fab.v-size--x-small.v-btn--absolute.v-btn--bottom{bottom:-16px}.v-btn--fab.v-size--x-small.v-btn--absolute.v-btn--top{top:-16px}.v-btn--fab.v-size--small{height:40px;width:40px}.v-btn--fab.v-size--small.v-btn--absolute.v-btn--bottom{bottom:-20px}.v-btn--fab.v-size--small.v-btn--absolute.v-btn--top{top:-20px}.v-btn--fab.v-size--default{height:56px;width:56px}.v-btn--fab.v-size--default.v-btn--absolute.v-btn--bottom{bottom:-28px}.v-btn--fab.v-size--default.v-btn--absolute.v-btn--top{top:-28px}.v-btn--fab.v-size--large{height:64px;width:64px}.v-btn--fab.v-size--large.v-btn--absolute.v-btn--bottom{bottom:-32px}.v-btn--fab.v-size--large.v-btn--absolute.v-btn--top{top:-32px}.v-btn--fab.v-size--x-large{height:72px;width:72px}.v-btn--fab.v-size--x-large.v-btn--absolute.v-btn--bottom{bottom:-36px}.v-btn--fab.v-size--x-large.v-btn--absolute.v-btn--top{top:-36px}.v-btn--fixed{position:fixed}.v-btn--loading{pointer-events:none;transition:none}.v-btn--loading .v-btn__content{opacity:0}.v-btn--outlined{border:thin solid}.v-btn--outlined .v-btn__content .v-icon,.v-btn--round .v-btn__content .v-icon{color:currentColor}.v-btn--flat,.v-btn--outlined,.v-btn--text{background-color:transparent}.v-btn--outlined:before,.v-btn--round:before,.v-btn--rounded:before{border-radius:inherit}.v-btn--round{border-radius:50%}.v-btn--rounded{border-radius:28px}.v-btn--tile{border-radius:0}.v-ripple__container{border-radius:inherit;width:100%;height:100%;z-index:0;contain:strict}.v-ripple__animation,.v-ripple__container{color:inherit;position:absolute;left:0;top:0;overflow:hidden;pointer-events:none}.v-ripple__animation{border-radius:50%;background:currentColor;opacity:0;will-change:transform,opacity}.v-ripple__animation--enter{transition:none}.v-ripple__animation--in{transition:transform .25s cubic-bezier(.4,0,.2,1),opacity .1s cubic-bezier(.4,0,.2,1)}.v-ripple__animation--out{transition:opacity .3s cubic-bezier(.4,0,.2,1)}.v-progress-circular{position:relative;display:inline-flex;vertical-align:middle;justify-content:center;align-items:center}.v-progress-circular>svg{width:100%;height:100%;margin:auto;position:absolute;top:0;bottom:0;left:0;right:0;z-index:0}.v-progress-circular--indeterminate>svg{animation:progress-circular-rotate 1.4s linear infinite;transform-origin:center center;transition:all .2s ease-in-out}.v-progress-circular--indeterminate .v-progress-circular__overlay{animation:progress-circular-dash 1.4s ease-in-out infinite;stroke-linecap:round;stroke-dasharray:80,200;stroke-dashoffset:0px}.v-progress-circular__info{align-items:center;display:flex;justify-content:center}.v-progress-circular__underlay{stroke:rgba(0,0,0,.1);z-index:1}.v-progress-circular__overlay{stroke:currentColor;z-index:2;transition:all .6s ease-in-out}@keyframes progress-circular-dash{0%{stroke-dasharray:1,200;stroke-dashoffset:0px}50%{stroke-dasharray:100,200;stroke-dashoffset:-15px}to{stroke-dasharray:100,200;stroke-dashoffset:-125px}}@keyframes progress-circular-rotate{to{transform:rotate(1turn)}}.theme--light.v-icon{color:rgba(0,0,0,.54)}.theme--light.v-icon:focus:after{opacity:.12}.theme--light.v-icon.v-icon.v-icon--disabled{color:rgba(0,0,0,.38)!important}.theme--dark.v-icon{color:#fff}.theme--dark.v-icon:focus:after{opacity:.24}.theme--dark.v-icon.v-icon.v-icon--disabled{color:hsla(0,0%,100%,.5)!important}.v-icon.v-icon{align-items:center;display:inline-flex;font-feature-settings:"liga";font-size:24px;justify-content:center;letter-spacing:normal;line-height:1;position:relative;text-indent:0;transition:.3s cubic-bezier(.25,.8,.5,1),visibility 0s;vertical-align:middle;user-select:none}.v-icon.v-icon:after{background-color:currentColor;border-radius:50%;content:"";display:inline-block;height:100%;left:0;opacity:0;pointer-events:none;position:absolute;top:0;transform:scale(1.3);width:100%;transition:opacity .2s cubic-bezier(.4,0,.6,1)}.v-icon.v-icon--dense{font-size:20px}.v-icon--right{margin-left:8px}.v-icon--left{margin-right:8px}.v-icon.v-icon.v-icon--link{cursor:pointer;outline:none}.v-icon--disabled{pointer-events:none}.v-icon--is-component,.v-icon--svg{height:24px;width:24px}.v-icon--svg{fill:currentColor}.v-icon--dense--is-component{height:20px}.theme--light.v-alert .v-alert--prominent .v-alert__icon:after{background:rgba(0,0,0,.12)}.theme--dark.v-alert .v-alert--prominent .v-alert__icon:after{background:hsla(0,0%,100%,.12)}.v-sheet.v-alert{border-radius:4px}.v-sheet.v-alert:not(.v-sheet--outlined){box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-sheet.v-alert.v-sheet--shaped{border-radius:24px 4px}.v-alert{display:block;font-size:16px;margin-bottom:16px;padding:16px;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-alert:not(.v-sheet--tile){border-radius:4px}.v-application--is-ltr .v-alert>.v-alert__content,.v-application--is-ltr .v-alert>.v-icon{margin-right:16px}.v-application--is-rtl .v-alert>.v-alert__content,.v-application--is-rtl .v-alert>.v-icon{margin-left:16px}.v-application--is-ltr .v-alert>.v-icon+.v-alert__content{margin-right:0}.v-application--is-rtl .v-alert>.v-icon+.v-alert__content{margin-left:0}.v-application--is-ltr .v-alert>.v-alert__content+.v-icon{margin-right:0}.v-application--is-rtl .v-alert>.v-alert__content+.v-icon{margin-left:0}.v-alert__border{border-style:solid;border-width:4px;content:"";position:absolute}.v-alert__border:not(.v-alert__border--has-color){opacity:.26}.v-alert__border--left,.v-alert__border--right{bottom:0;top:0}.v-alert__border--bottom,.v-alert__border--top{left:0;right:0}.v-alert__border--bottom{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit;bottom:0}.v-application--is-ltr .v-alert__border--left{border-top-left-radius:inherit;border-bottom-left-radius:inherit;left:0}.v-application--is-ltr .v-alert__border--right,.v-application--is-rtl .v-alert__border--left{border-top-right-radius:inherit;border-bottom-right-radius:inherit;right:0}.v-application--is-rtl .v-alert__border--right{border-top-left-radius:inherit;border-bottom-left-radius:inherit;left:0}.v-alert__border--top{border-top-left-radius:inherit;border-top-right-radius:inherit;top:0}.v-alert__content{flex:1 1 auto}.v-application--is-ltr .v-alert__dismissible{margin:-16px -8px -16px 8px}.v-application--is-rtl .v-alert__dismissible{margin:-16px 8px -16px -8px}.v-alert__icon{align-self:flex-start;border-radius:50%;height:24px;min-width:24px;position:relative}.v-application--is-ltr .v-alert__icon{margin-right:16px}.v-application--is-rtl .v-alert__icon{margin-left:16px}.v-alert__icon.v-icon{font-size:24px}.v-alert__wrapper{align-items:center;border-radius:inherit;display:flex}.v-alert--dense{padding-top:8px;padding-bottom:8px}.v-alert--dense .v-alert__border{border-width:medium}.v-alert--outlined{background:transparent!important;border:thin solid!important}.v-alert--outlined .v-alert__icon{color:inherit!important}.v-alert--prominent .v-alert__icon{align-self:center;height:48px;min-width:48px}.v-alert--prominent .v-alert__icon:after{background:currentColor!important;border-radius:50%;bottom:0;content:"";left:0;opacity:.16;position:absolute;right:0;top:0}.v-alert--prominent .v-alert__icon.v-icon{font-size:32px}.v-alert--text{background:transparent!important}.v-alert--text:before{background-color:currentColor;border-radius:inherit;bottom:0;content:"";left:0;opacity:.12;position:absolute;pointer-events:none;right:0;top:0}.v-autocomplete.v-input>.v-input__control>.v-input__slot{cursor:text}.v-autocomplete input{align-self:center}.v-autocomplete.v-select.v-input--is-focused input{min-width:64px}.v-autocomplete:not(.v-input--is-focused).v-select--chips input{max-height:0;padding:0}.v-autocomplete--is-selecting-index input{opacity:0}.v-autocomplete.v-text-field--enclosed:not(.v-text-field--solo):not(.v-text-field--single-line):not(.v-text-field--outlined) .v-select__slot>input{margin-top:24px}.v-autocomplete.v-text-field--enclosed:not(.v-text-field--solo):not(.v-text-field--single-line):not(.v-text-field--outlined).v-input--dense .v-select__slot>input{margin-top:20px}.v-autocomplete:not(.v-input--is-disabled).v-select.v-text-field input{pointer-events:inherit}.v-autocomplete__content.v-menu__content,.v-autocomplete__content.v-menu__content .v-card{border-radius:0}.theme--light.v-text-field>.v-input__control>.v-input__slot:before{border-color:rgba(0,0,0,.42)}.theme--light.v-text-field:not(.v-input--has-state):hover>.v-input__control>.v-input__slot:before{border-color:rgba(0,0,0,.87)}.theme--light.v-text-field.v-input--is-disabled .v-input__slot:before{border-image:repeating-linear-gradient(90deg,rgba(0,0,0,.38) 0,rgba(0,0,0,.38) 2px,transparent 0,transparent 4px) 1 repeat}.theme--light.v-text-field--filled>.v-input__control>.v-input__slot{background:rgba(0,0,0,.06)}.theme--light.v-text-field--filled:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover{background:rgba(0,0,0,.12)}.theme--light.v-text-field--solo>.v-input__control>.v-input__slot{background:#fff}.theme--light.v-text-field--solo-inverted>.v-input__control>.v-input__slot{background:rgba(0,0,0,.06)}.theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot{background:#424242}.theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input{color:#fff}.theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::placeholder{color:hsla(0,0%,100%,.5)}.theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot .v-label{color:hsla(0,0%,100%,.7)}.theme--light.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot fieldset{color:rgba(0,0,0,.38)}.theme--light.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state):not(.v-input--is-disabled)>.v-input__control>.v-input__slot:hover fieldset{color:rgba(0,0,0,.86)}.theme--light.v-text-field--outlined:not(.v-input--is-focused).v-input--is-disabled>.v-input__control>.v-input__slot fieldset{color:rgba(0,0,0,.26)}.theme--dark.v-text-field>.v-input__control>.v-input__slot:before{border-color:hsla(0,0%,100%,.7)}.theme--dark.v-text-field:not(.v-input--has-state):hover>.v-input__control>.v-input__slot:before{border-color:#fff}.theme--dark.v-text-field.v-input--is-disabled .v-input__slot:before{border-image:repeating-linear-gradient(90deg,hsla(0,0%,100%,.5) 0,hsla(0,0%,100%,.5) 2px,transparent 0,transparent 4px) 1 repeat}.theme--dark.v-text-field--filled>.v-input__control>.v-input__slot{background:hsla(0,0%,100%,.08)}.theme--dark.v-text-field--filled:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover{background:hsla(0,0%,100%,.16)}.theme--dark.v-text-field--solo>.v-input__control>.v-input__slot{background:#1e1e1e}.theme--dark.v-text-field--solo-inverted>.v-input__control>.v-input__slot{background:hsla(0,0%,100%,.16)}.theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot{background:#fff}.theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input{color:rgba(0,0,0,.87)}.theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::placeholder{color:rgba(0,0,0,.38)}.theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot .v-label{color:rgba(0,0,0,.6)}.theme--dark.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot fieldset{color:hsla(0,0%,100%,.24)}.theme--dark.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state):not(.v-input--is-disabled)>.v-input__control>.v-input__slot:hover fieldset{color:#fff}.theme--dark.v-text-field--outlined:not(.v-input--is-focused).v-input--is-disabled>.v-input__control>.v-input__slot fieldset{color:hsla(0,0%,100%,.16)}.v-text-field{padding-top:12px;margin-top:4px}.v-text-field input{flex:1 1 auto;line-height:20px;padding:8px 0;max-width:100%;min-width:0;width:100%}.v-text-field .v-input__control,.v-text-field .v-input__slot,.v-text-field fieldset{border-radius:inherit}.v-text-field.v-input--has-state .v-input__control>.v-text-field__details>.v-counter,.v-text-field.v-input--is-disabled .v-input__control>.v-text-field__details>.v-counter,.v-text-field.v-input--is-disabled .v-input__control>.v-text-field__details>.v-messages,.v-text-field .v-input__control,.v-text-field fieldset{color:inherit}.v-text-field.v-input--dense{padding-top:0}.v-text-field.v-input--dense:not(.v-text-field--outlined) input{padding:4px 0 2px}.v-text-field.v-input--dense[type=text]::-ms-clear{display:none}.v-text-field.v-input--dense .v-input__append-inner,.v-text-field.v-input--dense .v-input__prepend-inner{margin-top:0}.v-text-field.v-input--dense:not(.v-text-field--enclosed):not(.v-text-field--full-width) .v-input__append-inner .v-input__icon>.v-icon,.v-text-field.v-input--dense:not(.v-text-field--enclosed):not(.v-text-field--full-width) .v-input__prepend-inner .v-input__icon>.v-icon{margin-top:8px}.v-text-field .v-input__append-inner,.v-text-field .v-input__prepend-inner{align-self:flex-start;display:inline-flex;margin-top:4px;line-height:1;user-select:none}.v-application--is-ltr .v-text-field .v-input__prepend-inner{margin-right:auto;padding-right:4px}.v-application--is-ltr .v-text-field .v-input__append-inner,.v-application--is-rtl .v-text-field .v-input__prepend-inner{margin-left:auto;padding-left:4px}.v-application--is-rtl .v-text-field .v-input__append-inner{margin-right:auto;padding-right:4px}.v-text-field .v-counter{white-space:nowrap}.v-application--is-ltr .v-text-field .v-counter{margin-left:8px}.v-application--is-rtl .v-text-field .v-counter{margin-right:8px}.v-text-field .v-label{max-width:90%;overflow:hidden;text-overflow:ellipsis;top:6px;white-space:nowrap;pointer-events:none}.v-application--is-ltr .v-text-field .v-label{transform-origin:top left}.v-application--is-rtl .v-text-field .v-label{transform-origin:top right}.v-text-field .v-label--active{max-width:133%;transform:translateY(-18px) scale(.75)}.v-text-field>.v-input__control>.v-input__slot{cursor:text;transition:background .3s cubic-bezier(.25,.8,.5,1)}.v-text-field>.v-input__control>.v-input__slot:after,.v-text-field>.v-input__control>.v-input__slot:before{bottom:-1px;content:"";left:0;position:absolute;transition:.3s cubic-bezier(.25,.8,.5,1);width:100%}.v-text-field>.v-input__control>.v-input__slot:before{border-color:inherit;border-style:solid;border-width:thin 0 0}.v-text-field>.v-input__control>.v-input__slot:after{border-color:currentcolor;border-style:solid;border-width:thin 0;transform:scaleX(0)}.v-text-field__details{display:flex;flex:1 0 auto;max-width:100%;min-height:14px;overflow:hidden}.v-text-field__prefix,.v-text-field__suffix{align-self:center;cursor:default;transition:color .3s cubic-bezier(.25,.8,.5,1);white-space:nowrap}.v-application--is-ltr .v-text-field__prefix{text-align:right;padding-right:4px}.v-application--is-rtl .v-text-field__prefix{text-align:left;padding-left:4px}.v-text-field__suffix{white-space:nowrap}.v-application--is-ltr .v-text-field__suffix{padding-left:4px}.v-application--is-rtl .v-text-field__suffix{padding-right:4px}.v-application--is-ltr .v-text-field--reverse .v-text-field__prefix{text-align:left;padding-right:0;padding-left:4px}.v-application--is-rtl .v-text-field--reverse .v-text-field__prefix{text-align:right;padding-right:4px;padding-left:0}.v-application--is-ltr .v-text-field--reverse .v-text-field__suffix{padding-left:0;padding-right:4px}.v-application--is-rtl .v-text-field--reverse .v-text-field__suffix{padding-left:4px;padding-right:0}.v-text-field>.v-input__control>.v-input__slot>.v-text-field__slot{display:flex;flex:1 1 auto;position:relative}.v-text-field:not(.v-text-field--is-booted) .v-label,.v-text-field:not(.v-text-field--is-booted) legend{transition:none}.v-text-field--filled,.v-text-field--full-width,.v-text-field--outlined{position:relative}.v-text-field--filled>.v-input__control>.v-input__slot,.v-text-field--full-width>.v-input__control>.v-input__slot,.v-text-field--outlined>.v-input__control>.v-input__slot{align-items:stretch;min-height:56px}.v-text-field--filled.v-input--dense>.v-input__control>.v-input__slot,.v-text-field--full-width.v-input--dense>.v-input__control>.v-input__slot,.v-text-field--outlined.v-input--dense>.v-input__control>.v-input__slot{min-height:52px}.v-text-field--filled.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,.v-text-field--filled.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,.v-text-field--filled.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot,.v-text-field--full-width.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,.v-text-field--full-width.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,.v-text-field--full-width.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot,.v-text-field--outlined.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,.v-text-field--outlined.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,.v-text-field--outlined.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot{min-height:40px}.v-text-field--outlined{border-radius:4px}.v-text-field--enclosed .v-input__append-inner,.v-text-field--enclosed .v-input__append-outer,.v-text-field--enclosed .v-input__prepend-inner,.v-text-field--enclosed .v-input__prepend-outer,.v-text-field--full-width .v-input__append-inner,.v-text-field--full-width .v-input__append-outer,.v-text-field--full-width .v-input__prepend-inner,.v-text-field--full-width .v-input__prepend-outer{margin-top:17px}.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__append-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__append-outer,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__prepend-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__prepend-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__append-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__append-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__prepend-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__prepend-outer{margin-top:14px}.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-outer,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-outer{margin-top:9px}.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-outer,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-inner,.v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-outer,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-inner,.v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-outer{margin-top:8px}.v-text-field--filled .v-label,.v-text-field--full-width .v-label{top:18px}.v-text-field--filled .v-label--active,.v-text-field--full-width .v-label--active{transform:translateY(-6px) scale(.75)}.v-text-field--filled.v-input--dense .v-label,.v-text-field--full-width.v-input--dense .v-label{top:17px}.v-text-field--filled.v-input--dense .v-label--active,.v-text-field--full-width.v-input--dense .v-label--active{transform:translateY(-10px) scale(.75)}.v-text-field--filled.v-input--dense.v-text-field--single-line .v-label,.v-text-field--full-width.v-input--dense.v-text-field--single-line .v-label{top:11px}.v-text-field--filled{border-radius:4px 4px 0 0}.v-text-field--filled:not(.v-text-field--single-line) input{margin-top:22px}.v-text-field--filled.v-input--dense:not(.v-text-field--single-line).v-text-field--outlined input{margin-top:0}.v-text-field--filled .v-text-field__prefix,.v-text-field--filled .v-text-field__suffix{max-height:32px;margin-top:20px}.v-text-field--full-width{border-radius:0}.v-text-field--outlined .v-text-field__slot,.v-text-field--single-line .v-text-field__slot{align-items:center}.v-text-field.v-text-field--enclosed{margin:0;padding:0}.v-text-field.v-text-field--enclosed.v-text-field--single-line .v-text-field__prefix,.v-text-field.v-text-field--enclosed.v-text-field--single-line .v-text-field__suffix{margin-top:0}.v-text-field.v-text-field--enclosed:not(.v-text-field--filled) .v-progress-linear__background{display:none}.v-text-field.v-text-field--enclosed .v-text-field__details,.v-text-field.v-text-field--enclosed:not(.v-text-field--rounded)>.v-input__control>.v-input__slot{padding:0 12px}.v-text-field.v-text-field--enclosed .v-text-field__details{margin-bottom:8px}.v-application--is-ltr .v-text-field--reverse input{text-align:right}.v-application--is-rtl .v-text-field--reverse input{text-align:left}.v-application--is-ltr .v-text-field--reverse .v-label{transform-origin:top right}.v-application--is-rtl .v-text-field--reverse .v-label{transform-origin:top left}.v-text-field--reverse .v-text-field__slot,.v-text-field--reverse>.v-input__control>.v-input__slot{flex-direction:row-reverse}.v-text-field--outlined>.v-input__control>.v-input__slot:after,.v-text-field--outlined>.v-input__control>.v-input__slot:before,.v-text-field--rounded>.v-input__control>.v-input__slot:after,.v-text-field--rounded>.v-input__control>.v-input__slot:before,.v-text-field--solo>.v-input__control>.v-input__slot:after,.v-text-field--solo>.v-input__control>.v-input__slot:before{display:none}.v-text-field--outlined,.v-text-field--solo{border-radius:4px}.v-text-field--outlined{margin-bottom:16px;transition:border .3s cubic-bezier(.25,.8,.5,1)}.v-text-field--outlined .v-label{top:18px}.v-text-field--outlined .v-label--active{transform:translateY(-24px) scale(.75)}.v-text-field--outlined.v-input--dense .v-label{top:10px}.v-text-field--outlined.v-input--dense .v-label--active{transform:translateY(-16px) scale(.75)}.v-text-field--outlined fieldset{border-collapse:collapse;border:1px solid;bottom:0;left:0;pointer-events:none;position:absolute;right:0;top:-5px;transition-duration:.3s;transition-property:color,border-width;transition-timing-function:cubic-bezier(.25,.8,.25,1)}.v-application--is-ltr .v-text-field--outlined fieldset{padding-left:8px}.v-application--is-ltr .v-text-field--outlined.v-text-field--reverse fieldset,.v-application--is-rtl .v-text-field--outlined fieldset{padding-right:8px}.v-application--is-rtl .v-text-field--outlined.v-text-field--reverse fieldset{padding-left:8px}.v-text-field--outlined legend{line-height:11px;padding:0;transition:width .3s cubic-bezier(.25,.8,.5,1)}.v-application--is-ltr .v-text-field--outlined legend{text-align:left}.v-application--is-ltr .v-text-field--outlined.v-text-field--reverse legend,.v-application--is-rtl .v-text-field--outlined legend{text-align:right}.v-application--is-rtl .v-text-field--outlined.v-text-field--reverse legend{text-align:left}.v-application--is-ltr .v-text-field--outlined.v-text-field--rounded legend{margin-left:12px}.v-application--is-rtl .v-text-field--outlined.v-text-field--rounded legend{margin-right:12px}.v-text-field--outlined>.v-input__control>.v-input__slot{background:transparent}.v-text-field--outlined .v-text-field__prefix{max-height:32px}.v-text-field--outlined .v-input__append-outer,.v-text-field--outlined .v-input__prepend-outer{margin-top:18px}.v-text-field--outlined.v-input--has-state fieldset,.v-text-field--outlined.v-input--is-focused fieldset{border:2px solid}.v-text-field--rounded{border-radius:28px}.v-text-field--rounded>.v-input__control>.v-input__slot{padding:0 24px}.v-text-field--shaped{border-radius:16px 16px 0 0}.v-text-field.v-text-field--solo .v-label{top:calc(50% - 9px)}.v-text-field.v-text-field--solo .v-input__control{min-height:48px;padding:0}.v-text-field.v-text-field--solo .v-input__control input{caret-color:auto}.v-text-field.v-text-field--solo.v-input--dense>.v-input__control{min-height:38px}.v-text-field.v-text-field--solo:not(.v-text-field--solo-flat)>.v-input__control>.v-input__slot{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-text-field.v-text-field--solo .v-input__append-inner,.v-text-field.v-text-field--solo .v-input__prepend-inner{align-self:center;margin-top:0}.v-text-field.v-text-field--solo .v-input__append-outer,.v-text-field.v-text-field--solo .v-input__prepend-outer{margin-top:12px}.v-text-field.v-text-field--solo.v-input--dense .v-input__append-outer,.v-text-field.v-text-field--solo.v-input--dense .v-input__prepend-outer{margin-top:7px}.v-text-field.v-input--is-focused>.v-input__control>.v-input__slot:after{transform:scaleX(1)}.v-text-field.v-input--has-state>.v-input__control>.v-input__slot:before{border-color:currentColor}.theme--light.v-select .v-select__selection--comma{color:rgba(0,0,0,.87)}.theme--light.v-select .v-select__selection--disabled{color:rgba(0,0,0,.38)}.theme--dark.v-select .v-select__selection--comma,.theme--light.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selection--comma{color:#fff}.theme--dark.v-select .v-select__selection--disabled{color:hsla(0,0%,100%,.5)}.theme--dark.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selection--comma{color:rgba(0,0,0,.87)}.v-select{position:relative}.v-select:not(.v-select--is-multi).v-text-field--single-line .v-select__selections{flex-wrap:nowrap}.v-select>.v-input__control>.v-input__slot{cursor:pointer}.v-select .v-chip{flex:0 1 auto;margin:4px}.v-select .v-chip--selected:after{opacity:.22}.v-select .fade-transition-leave-active{position:absolute;left:0}.v-select.v-input--is-dirty ::placeholder{color:transparent!important}.v-select:not(.v-input--is-dirty):not(.v-input--is-focused) .v-text-field__prefix{line-height:20px;top:7px;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-select.v-text-field--enclosed:not(.v-text-field--single-line):not(.v-text-field--outlined) .v-select__selections{padding-top:20px}.v-select.v-text-field--outlined:not(.v-text-field--single-line) .v-select__selections{padding:8px 0}.v-select.v-text-field--outlined:not(.v-text-field--single-line).v-input--dense .v-select__selections{padding:4px 0}.v-select.v-text-field input{flex:1 1;margin-top:0;min-width:0;pointer-events:none;position:relative}.v-select.v-select--is-menu-active .v-input__icon--append .v-icon{transform:rotate(180deg)}.v-select.v-select--chips input{margin:0}.v-select.v-select--chips .v-select__selections{min-height:42px}.v-select.v-select--chips.v-input--dense .v-select__selections{min-height:40px}.v-select.v-select--chips .v-chip--select.v-chip--active:before{opacity:.2}.v-select.v-select--chips.v-select--chips--small .v-select__selections{min-height:26px}.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box .v-select__selections,.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed .v-select__selections{min-height:68px}.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-input--dense .v-select__selections,.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-input--dense .v-select__selections{min-height:40px}.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small .v-select__selections,.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small .v-select__selections{min-height:26px}.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small.v-input--dense .v-select__selections,.v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small.v-input--dense .v-select__selections{min-height:38px}.v-select.v-text-field--reverse .v-select__selections,.v-select.v-text-field--reverse .v-select__slot{flex-direction:row-reverse}.v-select__selections{align-items:center;display:flex;flex:1 1;flex-wrap:wrap;line-height:18px;max-width:100%;min-width:0}.v-select__selection{max-width:90%}.v-select__selection--comma{margin:7px 4px 7px 0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.v-select.v-input--dense .v-select__selection--comma{margin:5px 4px 3px 0}.v-select.v-input--dense .v-chip{margin:0 4px}.v-select__slot{position:relative;align-items:center;display:flex;max-width:100%;min-width:0;width:100%}.v-select:not(.v-text-field--single-line):not(.v-text-field--outlined) .v-select__slot>input{align-self:flex-end}.theme--light.v-input,.theme--light.v-input input,.theme--light.v-input textarea{color:rgba(0,0,0,.87)}.theme--light.v-input input::placeholder,.theme--light.v-input textarea::placeholder{color:rgba(0,0,0,.38)}.theme--light.v-input--is-disabled,.theme--light.v-input--is-disabled input,.theme--light.v-input--is-disabled textarea{color:rgba(0,0,0,.38)}.theme--dark.v-input,.theme--dark.v-input input,.theme--dark.v-input textarea{color:#fff}.theme--dark.v-input input::placeholder,.theme--dark.v-input textarea::placeholder{color:hsla(0,0%,100%,.5)}.theme--dark.v-input--is-disabled,.theme--dark.v-input--is-disabled input,.theme--dark.v-input--is-disabled textarea{color:hsla(0,0%,100%,.5)}.v-input{align-items:flex-start;display:flex;flex:1 1 auto;font-size:16px;letter-spacing:normal;max-width:100%;text-align:left}.v-input .v-progress-linear{top:calc(100% - 1px);left:0}.v-input input{max-height:32px}.v-input input:invalid,.v-input textarea:invalid{box-shadow:none}.v-input input:active,.v-input input:focus,.v-input textarea:active,.v-input textarea:focus{outline:none}.v-input .v-label{height:20px;line-height:20px}.v-input__append-outer,.v-input__prepend-outer{display:inline-flex;margin-bottom:4px;margin-top:4px;line-height:1}.v-input__append-outer .v-icon,.v-input__prepend-outer .v-icon{user-select:none}.v-application--is-ltr .v-input__append-outer{margin-left:9px}.v-application--is-ltr .v-input__prepend-outer,.v-application--is-rtl .v-input__append-outer{margin-right:9px}.v-application--is-rtl .v-input__prepend-outer{margin-left:9px}.v-input__control{display:flex;flex-direction:column;height:auto;flex-grow:1;flex-wrap:wrap;min-width:0;width:100%}.v-input__icon{align-items:center;display:inline-flex;height:24px;flex:1 0 auto;justify-content:center;min-width:24px;width:24px}.v-input__icon--clear{border-radius:50%}.v-input__icon--clear .v-icon--disabled{visibility:hidden}.v-input__slot{align-items:center;color:inherit;display:flex;margin-bottom:8px;min-height:inherit;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1);width:100%}.v-input--dense>.v-input__control>.v-input__slot{margin-bottom:4px}.v-input--is-disabled:not(.v-input--is-readonly){pointer-events:none}.v-input--is-loading>.v-input__control>.v-input__slot:after,.v-input--is-loading>.v-input__control>.v-input__slot:before{display:none}.v-input--hide-details>.v-input__control>.v-input__slot{margin-bottom:0}.v-input--has-state.error--text .v-label{animation:v-shake .6s cubic-bezier(.25,.8,.5,1)}.theme--light.v-label{color:rgba(0,0,0,.6)}.theme--light.v-label--is-disabled{color:rgba(0,0,0,.38)}.theme--dark.v-label{color:hsla(0,0%,100%,.7)}.theme--dark.v-label--is-disabled{color:hsla(0,0%,100%,.5)}.v-label{font-size:16px;line-height:1;min-height:8px;transition:.3s cubic-bezier(.25,.8,.5,1)}.theme--light.v-messages{color:rgba(0,0,0,.6)}.theme--dark.v-messages{color:hsla(0,0%,100%,.7)}.v-messages{flex:1 1 auto;font-size:12px;min-height:14px;min-width:1px;position:relative}.v-application--is-ltr .v-messages{text-align:left}.v-application--is-rtl .v-messages{text-align:right}.v-messages__message{line-height:12px;word-break:break-word;overflow-wrap:break-word;word-wrap:break-word;hyphens:auto}.theme--light.v-progress-linear{color:rgba(0,0,0,.87)}.theme--dark.v-progress-linear{color:#fff}.v-progress-linear{background:transparent;overflow:hidden;position:relative;transition:.2s cubic-bezier(.4,0,.6,1);width:100%}.v-progress-linear__buffer{height:inherit;left:0;position:absolute;top:0;transition:inherit;width:100%;z-index:1}.v-progress-linear--reverse .v-progress-linear__buffer{left:auto;right:0}.v-progress-linear__background{bottom:0;left:0;position:absolute;top:0;transition:inherit}.v-progress-linear--reverse .v-progress-linear__background{left:auto;right:0}.v-progress-linear__content{align-items:center;display:flex;height:100%;left:0;justify-content:center;position:absolute;top:0;width:100%;z-index:2}.v-progress-linear--reverse .v-progress-linear__content{left:auto;right:0}.v-progress-linear__determinate{height:inherit;left:0;position:absolute;transition:inherit}.v-progress-linear--reverse .v-progress-linear__determinate{left:auto;right:0}.v-progress-linear .v-progress-linear__indeterminate .long,.v-progress-linear .v-progress-linear__indeterminate .short{background-color:inherit;bottom:0;height:inherit;left:0;position:absolute;right:auto;top:0;width:auto;will-change:left,right}.v-progress-linear .v-progress-linear__indeterminate--active .long{animation-name:indeterminate-ltr;animation-duration:2.2s;animation-iteration-count:infinite}.v-progress-linear .v-progress-linear__indeterminate--active .short{animation-name:indeterminate-short-ltr;animation-duration:2.2s;animation-iteration-count:infinite}.v-progress-linear--reverse .v-progress-linear__indeterminate .long,.v-progress-linear--reverse .v-progress-linear__indeterminate .short{left:auto;right:0}.v-progress-linear--reverse .v-progress-linear__indeterminate--active .long{animation-name:indeterminate-rtl}.v-progress-linear--reverse .v-progress-linear__indeterminate--active .short{animation-name:indeterminate-short-rtl}.v-progress-linear__stream{animation:stream-ltr .25s linear infinite;border-color:currentColor;border-top:4px dotted;bottom:0;left:auto;right:-8px;opacity:.3;pointer-events:none;position:absolute;top:calc(50% - 2px);transition:inherit}.v-progress-linear--reverse .v-progress-linear__stream{animation:stream-rtl .25s linear infinite;left:-8px;right:auto}.v-progress-linear__wrapper{overflow:hidden;position:relative;transition:inherit}.v-progress-linear--absolute,.v-progress-linear--fixed{left:0;z-index:1}.v-progress-linear--absolute{position:absolute}.v-progress-linear--fixed{position:fixed}.v-progress-linear--reactive .v-progress-linear__content{pointer-events:none}.v-progress-linear--rounded{border-radius:4px}.v-progress-linear--striped .v-progress-linear__determinate{background-image:linear-gradient(135deg,hsla(0,0%,100%,.25) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.25) 0,hsla(0,0%,100%,.25) 75%,transparent 0,transparent);background-size:40px 40px;background-repeat:repeat}.v-progress-linear--query .v-progress-linear__indeterminate--active .long{animation-name:query-ltr;animation-duration:2s;animation-iteration-count:infinite}.v-progress-linear--query .v-progress-linear__indeterminate--active .short{animation-name:query-short-ltr;animation-duration:2s;animation-iteration-count:infinite}.v-progress-linear--query.v-progress-linear--reverse .v-progress-linear__indeterminate--active .long{animation-name:query-rtl}.v-progress-linear--query.v-progress-linear--reverse .v-progress-linear__indeterminate--active .short{animation-name:query-short-rtl}@keyframes indeterminate-ltr{0%{left:-90%;right:100%}60%{left:-90%;right:100%}to{left:100%;right:-35%}}@keyframes indeterminate-rtl{0%{left:100%;right:-90%}60%{left:100%;right:-90%}to{left:-35%;right:100%}}@keyframes indeterminate-short-ltr{0%{left:-200%;right:100%}60%{left:107%;right:-8%}to{left:107%;right:-8%}}@keyframes indeterminate-short-rtl{0%{left:100%;right:-200%}60%{left:-8%;right:107%}to{left:-8%;right:107%}}@keyframes query-ltr{0%{right:-90%;left:100%}60%{right:-90%;left:100%}to{right:100%;left:-35%}}@keyframes query-rtl{0%{right:100%;left:-90%}60%{right:100%;left:-90%}to{right:-35%;left:100%}}@keyframes query-short-ltr{0%{right:-200%;left:100%}60%{right:107%;left:-8%}to{right:107%;left:-8%}}@keyframes query-short-rtl{0%{right:100%;left:-200%}60%{right:-8%;left:107%}to{right:-8%;left:107%}}@keyframes stream-ltr{to{transform:translateX(-8px)}}@keyframes stream-rtl{to{transform:translateX(8px)}}.theme--light.v-counter{color:rgba(0,0,0,.6)}.theme--dark.v-counter{color:hsla(0,0%,100%,.7)}.v-counter{flex:0 1 auto;font-size:12px;min-height:12px;line-height:12px}.theme--light.v-list-item--disabled{color:rgba(0,0,0,.38)}.theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled){color:rgba(0,0,0,.87)!important}.theme--light.v-list-item .v-list-item__mask{color:rgba(0,0,0,.38);background:#eee}.theme--light.v-list-item .v-list-item__action-text,.theme--light.v-list-item .v-list-item__subtitle{color:rgba(0,0,0,.6)}.theme--light.v-list-item:hover:before{opacity:.04}.theme--light.v-list-item--active:before,.theme--light.v-list-item--active:hover:before,.theme--light.v-list-item:focus:before{opacity:.12}.theme--light.v-list-item--active:focus:before,.theme--light.v-list-item.v-list-item--highlighted:before{opacity:.16}.theme--dark.v-list-item--disabled{color:hsla(0,0%,100%,.5)}.theme--dark.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled){color:#fff!important}.theme--dark.v-list-item .v-list-item__mask{color:hsla(0,0%,100%,.5);background:#494949}.theme--dark.v-list-item .v-list-item__action-text,.theme--dark.v-list-item .v-list-item__subtitle{color:hsla(0,0%,100%,.7)}.theme--dark.v-list-item:hover:before{opacity:.08}.theme--dark.v-list-item--active:before,.theme--dark.v-list-item--active:hover:before,.theme--dark.v-list-item:focus:before{opacity:.24}.theme--dark.v-list-item--active:focus:before,.theme--dark.v-list-item.v-list-item--highlighted:before{opacity:.32}.v-list-item{align-items:center;display:flex;flex:1 1 100%;letter-spacing:normal;min-height:48px;outline:none;padding:0 16px;position:relative;text-decoration:none}.v-list-item--disabled{pointer-events:none}.v-list-item--selectable{user-select:auto}.v-list-item:after{content:"";min-height:inherit;font-size:0}.v-list-item__action{align-self:center;margin:12px 0}.v-list-item__action .v-input,.v-list-item__action .v-input--selection-controls__input,.v-list-item__action .v-input__control,.v-list-item__action .v-input__slot{margin:0!important}.v-list-item__action .v-input{padding:0}.v-list-item__action .v-input .v-messages{display:none}.v-list-item__action-text{font-size:.75rem}.v-list-item__avatar{align-self:center;justify-content:flex-start}.v-list-item__avatar,.v-list-item__avatar.v-list-item__avatar--horizontal{margin-bottom:8px;margin-top:8px}.v-application--is-ltr .v-list-item__avatar.v-list-item__avatar--horizontal:first-child{margin-left:-16px}.v-application--is-rtl .v-list-item__avatar.v-list-item__avatar--horizontal:first-child{margin-right:-16px}.v-application--is-ltr .v-list-item__avatar.v-list-item__avatar--horizontal:last-child{margin-left:-16px}.v-application--is-rtl .v-list-item__avatar.v-list-item__avatar--horizontal:last-child{margin-right:-16px}.v-list-item__content{align-items:center;align-self:center;display:flex;flex-wrap:wrap;flex:1 1;overflow:hidden;padding:12px 0}.v-list-item__content>*{line-height:1.1;flex:1 0 100%}.v-list-item__content>:not(:last-child){margin-bottom:2px}.v-list-item__icon{align-self:flex-start;margin:16px 0}.v-application--is-ltr .v-list-item__action:last-of-type:not(:only-child),.v-application--is-ltr .v-list-item__avatar:last-of-type:not(:only-child),.v-application--is-ltr .v-list-item__icon:last-of-type:not(:only-child){margin-left:16px}.v-application--is-ltr .v-list-item__avatar:first-child,.v-application--is-rtl .v-list-item__action:last-of-type:not(:only-child),.v-application--is-rtl .v-list-item__avatar:last-of-type:not(:only-child),.v-application--is-rtl .v-list-item__icon:last-of-type:not(:only-child){margin-right:16px}.v-application--is-rtl .v-list-item__avatar:first-child{margin-left:16px}.v-application--is-ltr .v-list-item__action:first-child,.v-application--is-ltr .v-list-item__icon:first-child{margin-right:32px}.v-application--is-rtl .v-list-item__action:first-child,.v-application--is-rtl .v-list-item__icon:first-child{margin-left:32px}.v-list-item__action,.v-list-item__avatar,.v-list-item__icon{display:inline-flex;min-width:24px}.v-list-item .v-list-item__subtitle,.v-list-item .v-list-item__title{line-height:1.2}.v-list-item__subtitle,.v-list-item__title{flex:1 1 100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.v-list-item__title{align-self:center;font-size:1rem}.v-list-item__title>.v-badge{margin-top:16px}.v-list-item__subtitle{font-size:.875rem}.v-list--dense .v-list-item,.v-list-item--dense{min-height:40px}.v-list--dense .v-list-item .v-list-item__icon,.v-list-item--dense .v-list-item__icon{height:24px;margin-top:8px;margin-bottom:8px}.v-list--dense .v-list-item .v-list-item__content,.v-list-item--dense .v-list-item__content{padding:8px 0}.v-list--dense .v-list-item .v-list-item__subtitle,.v-list--dense .v-list-item .v-list-item__title,.v-list-item--dense .v-list-item__subtitle,.v-list-item--dense .v-list-item__title{font-size:.8125rem;font-weight:500;line-height:1rem}.v-list--dense .v-list-item.v-list-item--two-line,.v-list-item--dense.v-list-item--two-line{min-height:60px}.v-list--dense .v-list-item.v-list-item--three-line,.v-list-item--dense.v-list-item--three-line{min-height:76px}.v-list-item--link{cursor:pointer;user-select:none}.v-list-item--link:before{background-color:currentColor;bottom:0;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-list .v-list-item--active,.v-list .v-list-item--active .v-icon{color:inherit}.v-list-item__action--stack{align-items:flex-end;align-self:stretch;justify-content:space-between;white-space:nowrap;flex-direction:column}.v-list--three-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal),.v-list--three-line .v-list-item .v-list-item__icon,.v-list--two-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal),.v-list--two-line .v-list-item .v-list-item__icon,.v-list-item--three-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal),.v-list-item--three-line .v-list-item__icon,.v-list-item--two-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal),.v-list-item--two-line .v-list-item__icon{margin-bottom:16px;margin-top:16px}.v-list--two-line .v-list-item,.v-list-item--two-line{min-height:64px}.v-list--two-line .v-list-item .v-list-item__icon,.v-list-item--two-line .v-list-item__icon{margin-bottom:32px}.v-list--three-line .v-list-item,.v-list-item--three-line{min-height:88px}.v-list--three-line .v-list-item .v-list-item__action,.v-list--three-line .v-list-item .v-list-item__avatar,.v-list-item--three-line .v-list-item__action,.v-list-item--three-line .v-list-item__avatar{align-self:flex-start;margin-top:16px;margin-bottom:16px}.v-list--three-line .v-list-item .v-list-item__content,.v-list-item--three-line .v-list-item__content{align-self:stretch}.v-list--three-line .v-list-item .v-list-item__subtitle,.v-list-item--three-line .v-list-item__subtitle{white-space:normal;-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box}.v-simple-checkbox{align-self:center;line-height:normal;position:relative;user-select:none;cursor:pointer}.v-simple-checkbox--disabled{cursor:default}.theme--light.v-divider{border-color:rgba(0,0,0,.12)}.theme--dark.v-divider{border-color:hsla(0,0%,100%,.12)}.v-divider{display:block;flex:1 1 0px;max-width:100%;height:0;max-height:0;border:solid;border-width:thin 0 0;transition:inherit}.v-divider--inset:not(.v-divider--vertical){max-width:calc(100% - 72px)}.v-application--is-ltr .v-divider--inset:not(.v-divider--vertical){margin-left:72px}.v-application--is-rtl .v-divider--inset:not(.v-divider--vertical){margin-right:72px}.v-divider--vertical{align-self:stretch;border:solid;border-width:0 thin 0 0;display:inline-flex;height:inherit;min-height:100%;max-height:100%;max-width:0;width:0;vertical-align:text-bottom}.v-divider--vertical.v-divider--inset{margin-top:8px;min-height:0;max-height:calc(100% - 16px)}.theme--light.v-subheader{color:rgba(0,0,0,.6)}.theme--dark.v-subheader{color:hsla(0,0%,100%,.7)}.v-subheader{align-items:center;display:flex;height:48px;font-size:.875rem;font-weight:400;padding:0 16px}.v-subheader--inset{margin-left:56px}.v-list.accent>.v-list-item,.v-list.error>.v-list-item,.v-list.info>.v-list-item,.v-list.primary>.v-list-item,.v-list.secondary>.v-list-item,.v-list.success>.v-list-item,.v-list.warning>.v-list-item{color:#fff}.theme--light.v-list{background:#fff;color:rgba(0,0,0,.87)}.theme--light.v-list .v-list--disabled{color:rgba(0,0,0,.38)}.theme--light.v-list .v-list-group--active:after,.theme--light.v-list .v-list-group--active:before{background:rgba(0,0,0,.12)}.theme--dark.v-list{background:#1e1e1e;color:#fff}.theme--dark.v-list .v-list--disabled{color:hsla(0,0%,100%,.5)}.theme--dark.v-list .v-list-group--active:after,.theme--dark.v-list .v-list-group--active:before{background:hsla(0,0%,100%,.12)}.v-sheet.v-list{border-radius:0}.v-sheet.v-list:not(.v-sheet--outlined){box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-sheet.v-list.v-sheet--shaped{border-radius:0}.v-list{display:block;padding:8px 0;position:static;transition:box-shadow .28s cubic-bezier(.4,0,.2,1);will-change:box-shadow}.v-list--disabled{pointer-events:none}.v-list--flat .v-list-item:before{display:none}.v-list--dense .v-subheader{font-size:.75rem;height:40px;padding:0 8px}.v-list--nav .v-list-item:not(:last-child):not(:only-child),.v-list--rounded .v-list-item:not(:last-child):not(:only-child){margin-bottom:8px}.v-list--nav.v-list--dense .v-list-item:not(:last-child):not(:only-child),.v-list--nav .v-list-item--dense:not(:last-child):not(:only-child),.v-list--rounded.v-list--dense .v-list-item:not(:last-child):not(:only-child),.v-list--rounded .v-list-item--dense:not(:last-child):not(:only-child){margin-bottom:4px}.v-list--nav{padding-left:8px;padding-right:8px}.v-list--nav .v-list-item{padding:0 8px}.v-list--nav .v-list-item,.v-list--nav .v-list-item:before{border-radius:4px}.v-application--is-ltr .v-list.v-sheet--shaped .v-list-item,.v-application--is-ltr .v-list.v-sheet--shaped .v-list-item:before,.v-application--is-ltr .v-list.v-sheet--shaped .v-list-item>.v-ripple__container{border-bottom-right-radius:32px!important;border-top-right-radius:32px!important}.v-application--is-rtl .v-list.v-sheet--shaped .v-list-item,.v-application--is-rtl .v-list.v-sheet--shaped .v-list-item:before,.v-application--is-rtl .v-list.v-sheet--shaped .v-list-item>.v-ripple__container{border-bottom-left-radius:32px!important;border-top-left-radius:32px!important}.v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item,.v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item:before,.v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item>.v-ripple__container{border-bottom-right-radius:42.6666666667px!important;border-top-right-radius:42.6666666667px!important}.v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item,.v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item:before,.v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item>.v-ripple__container{border-bottom-left-radius:42.6666666667px!important;border-top-left-radius:42.6666666667px!important}.v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item,.v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item:before,.v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item>.v-ripple__container{border-bottom-right-radius:58.6666666667px!important;border-top-right-radius:58.6666666667px!important}.v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item,.v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item:before,.v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item>.v-ripple__container{border-bottom-left-radius:58.6666666667px!important;border-top-left-radius:58.6666666667px!important}.v-application--is-ltr .v-list.v-sheet--shaped{padding-right:8px}.v-application--is-rtl .v-list.v-sheet--shaped{padding-left:8px}.v-list--rounded{padding:8px}.v-list--rounded .v-list-item,.v-list--rounded .v-list-item:before,.v-list--rounded .v-list-item>.v-ripple__container{border-radius:32px!important}.v-list--rounded.v-list--two-line .v-list-item,.v-list--rounded.v-list--two-line .v-list-item:before,.v-list--rounded.v-list--two-line .v-list-item>.v-ripple__container{border-radius:42.6666666667px!important}.v-list--rounded.v-list--three-line .v-list-item,.v-list--rounded.v-list--three-line .v-list-item:before,.v-list--rounded.v-list--three-line .v-list-item>.v-ripple__container{border-radius:58.6666666667px!important}.v-list--subheader{padding-top:0}.v-list-group .v-list-group__header .v-list-item__icon.v-list-group__header__append-icon{align-self:center;margin:0;min-width:48px;justify-content:flex-end}.v-list-group--sub-group{align-items:center;display:flex;flex-wrap:wrap}.v-list-group__header.v-list-item--active:not(:hover):not(:focus):before{opacity:0}.v-list-group__items{flex:1 1 auto}.v-list-group__items .v-list-group__items,.v-list-group__items .v-list-item{overflow:hidden}.v-list-group--active>.v-list-group__header.v-list-group__header--sub-group>.v-list-group__header__prepend-icon .v-icon,.v-list-group--active>.v-list-group__header>.v-list-group__header__append-icon .v-icon{transform:rotate(-180deg)}.v-list-group--active>.v-list-group__header .v-list-group__header__prepend-icon .v-icon,.v-list-group--active>.v-list-group__header .v-list-item,.v-list-group--active>.v-list-group__header .v-list-item__content{color:inherit}.v-application--is-ltr .v-list-group--sub-group .v-list-item__action:first-child,.v-application--is-ltr .v-list-group--sub-group .v-list-item__avatar:first-child,.v-application--is-ltr .v-list-group--sub-group .v-list-item__icon:first-child{margin-right:16px}.v-application--is-rtl .v-list-group--sub-group .v-list-item__action:first-child,.v-application--is-rtl .v-list-group--sub-group .v-list-item__avatar:first-child,.v-application--is-rtl .v-list-group--sub-group .v-list-item__icon:first-child{margin-left:16px}.v-application--is-ltr .v-list-group--sub-group .v-list-group__header{padding-left:32px}.v-application--is-rtl .v-list-group--sub-group .v-list-group__header{padding-right:32px}.v-application--is-ltr .v-list-group--sub-group .v-list-group__items .v-list-item{padding-left:40px}.v-application--is-rtl .v-list-group--sub-group .v-list-group__items .v-list-item{padding-right:40px}.v-list-group--sub-group.v-list-group--active .v-list-item__icon.v-list-group__header__prepend-icon .v-icon{transform:rotate(-180deg)}.v-application--is-ltr .v-list-group--no-action>.v-list-group__items>.v-list-item{padding-left:72px}.v-application--is-rtl .v-list-group--no-action>.v-list-group__items>.v-list-item{padding-right:72px}.v-application--is-ltr .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item{padding-left:88px}.v-application--is-rtl .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item{padding-right:88px}.v-application--is-ltr .v-list--dense .v-list-group--sub-group .v-list-group__header{padding-left:24px}.v-application--is-rtl .v-list--dense .v-list-group--sub-group .v-list-group__header{padding-right:24px}.v-application--is-ltr .v-list--dense.v-list--nav .v-list-group--no-action>.v-list-group__items>.v-list-item{padding-left:64px}.v-application--is-rtl .v-list--dense.v-list--nav .v-list-group--no-action>.v-list-group__items>.v-list-item{padding-right:64px}.v-application--is-ltr .v-list--dense.v-list--nav .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item{padding-left:80px}.v-application--is-rtl .v-list--dense.v-list--nav .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item{padding-right:80px}.v-avatar{align-items:center;border-radius:50%;display:inline-flex;justify-content:center;line-height:normal;position:relative;text-align:center;vertical-align:middle;overflow:hidden}.v-avatar .v-icon,.v-avatar .v-image,.v-avatar .v-responsive__content,.v-avatar img,.v-avatar svg{border-radius:inherit;display:inline-flex;height:inherit;width:inherit}.v-list-item-group .v-list-item--active{color:inherit}.v-item-group{flex:0 1 auto;position:relative;max-width:100%;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-chip:not(.v-chip--outlined).accent,.v-chip:not(.v-chip--outlined).error,.v-chip:not(.v-chip--outlined).info,.v-chip:not(.v-chip--outlined).primary,.v-chip:not(.v-chip--outlined).secondary,.v-chip:not(.v-chip--outlined).success,.v-chip:not(.v-chip--outlined).warning{color:#fff}.theme--light.v-chip{border-color:rgba(0,0,0,.12);color:rgba(0,0,0,.87)}.theme--light.v-chip:not(.v-chip--active){background:#e0e0e0}.theme--light.v-chip:hover:before{opacity:.04}.theme--light.v-chip--active:before,.theme--light.v-chip--active:hover:before,.theme--light.v-chip:focus:before{opacity:.12}.theme--light.v-chip--active:focus:before{opacity:.16}.theme--dark.v-chip{border-color:hsla(0,0%,100%,.12);color:#fff}.theme--dark.v-chip:not(.v-chip--active){background:#555}.theme--dark.v-chip:hover:before{opacity:.08}.theme--dark.v-chip--active:before,.theme--dark.v-chip--active:hover:before,.theme--dark.v-chip:focus:before{opacity:.24}.theme--dark.v-chip--active:focus:before{opacity:.32}.v-chip{align-items:center;cursor:default;display:inline-flex;line-height:20px;max-width:100%;outline:none;overflow:hidden;padding:0 12px;position:relative;text-decoration:none;transition-duration:.28s;transition-property:box-shadow,opacity;transition-timing-function:cubic-bezier(.4,0,.2,1);vertical-align:middle;white-space:nowrap}.v-chip:before{background-color:currentColor;bottom:0;border-radius:inherit;content:"";left:0;opacity:0;position:absolute;pointer-events:none;right:0;top:0}.v-chip .v-avatar{height:24px!important;min-width:24px!important;width:24px!important}.v-chip .v-icon{font-size:24px}.v-application--is-ltr .v-chip .v-avatar--left,.v-application--is-ltr .v-chip .v-icon--left{margin-left:-6px;margin-right:6px}.v-application--is-ltr .v-chip .v-avatar--right,.v-application--is-ltr .v-chip .v-icon--right,.v-application--is-rtl .v-chip .v-avatar--left,.v-application--is-rtl .v-chip .v-icon--left{margin-left:6px;margin-right:-6px}.v-application--is-rtl .v-chip .v-avatar--right,.v-application--is-rtl .v-chip .v-icon--right{margin-left:-6px;margin-right:6px}.v-chip:not(.v-chip--no-color) .v-icon{color:inherit}.v-chip .v-chip__close.v-icon{font-size:18px;max-height:18px;max-width:18px;user-select:none}.v-application--is-ltr .v-chip .v-chip__close.v-icon.v-icon--right{margin-right:-4px}.v-application--is-rtl .v-chip .v-chip__close.v-icon.v-icon--right{margin-left:-4px}.v-chip .v-chip__close.v-icon:active,.v-chip .v-chip__close.v-icon:focus,.v-chip .v-chip__close.v-icon:hover{opacity:.72}.v-chip .v-chip__content{align-items:center;display:inline-flex;height:100%;max-width:100%}.v-chip--active .v-icon{color:inherit}.v-chip--link:before{transition:opacity .3s cubic-bezier(.25,.8,.5,1)}.v-chip--link:focus:before{opacity:.32}.v-chip--clickable{cursor:pointer;user-select:none}.v-chip--clickable:active{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-chip--disabled{opacity:.4;pointer-events:none;user-select:none}.v-chip__filter{max-width:24px}.v-chip__filter.v-icon{color:inherit}.v-chip__filter.expand-x-transition-enter,.v-chip__filter.expand-x-transition-leave-active{margin:0}.v-chip--pill .v-chip__filter{margin-right:0 16px 0 0}.v-chip--pill .v-avatar{height:32px!important;width:32px!important}.v-application--is-ltr .v-chip--pill .v-avatar--left{margin-left:-12px}.v-application--is-ltr .v-chip--pill .v-avatar--right,.v-application--is-rtl .v-chip--pill .v-avatar--left{margin-right:-12px}.v-application--is-rtl .v-chip--pill .v-avatar--right{margin-left:-12px}.v-chip--label{border-radius:4px!important}.v-chip.v-chip--outlined{border-width:thin;border-style:solid}.v-chip.v-chip--outlined.v-chip--active:before{opacity:.08}.v-chip.v-chip--outlined .v-icon{color:inherit}.v-chip.v-chip--outlined.v-chip.v-chip{background-color:transparent!important}.v-chip.v-chip--selected{background:transparent}.v-chip.v-chip--selected:after{opacity:.28}.v-chip.v-size--x-small{border-radius:8px;font-size:10px;height:16px}.v-chip.v-size--small{border-radius:12px;font-size:12px;height:24px}.v-chip.v-size--default{border-radius:16px;font-size:14px;height:32px}.v-chip.v-size--large{border-radius:27px;font-size:16px;height:54px}.v-chip.v-size--x-large{border-radius:33px;font-size:18px;height:66px}.v-menu{display:none}.v-menu--attached{display:inline}.v-menu__content{position:absolute;display:inline-block;max-width:80%;overflow-y:auto;overflow-x:hidden;contain:content;will-change:transform;box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12);border-radius:4px}.v-menu__content--active{pointer-events:none}.v-menu__content--auto .v-list-item{transition-property:transform,opacity;transition-duration:.3s;transition-timing-function:cubic-bezier(.25,.8,.25,1)}.v-menu__content--fixed{position:fixed}.v-menu__content>.card{contain:content;backface-visibility:hidden}.v-menu>.v-menu__content{max-width:none}.v-menu-transition-enter .v-list-item{min-width:0;pointer-events:none}.v-menu-transition-enter-to .v-list-item{pointer-events:auto;transition-delay:.1s}.v-menu-transition-leave-active,.v-menu-transition-leave-to{pointer-events:none}.v-menu-transition-enter,.v-menu-transition-leave-to{opacity:0}.v-menu-transition-enter-active,.v-menu-transition-leave-active{transition:all .3s cubic-bezier(.25,.8,.25,1)}.v-menu-transition-enter.v-menu__content--auto{transition:none!important}.v-menu-transition-enter.v-menu__content--auto .v-list-item{opacity:0;transform:translateY(-15px)}.v-menu-transition-enter.v-menu__content--auto .v-list-item--active{opacity:1;transform:none!important;pointer-events:auto}.theme--light.v-badge .v-badge__badge:after{border-color:#fff}.theme--dark.v-badge .v-badge__badge:after{border-color:#1e1e1e}.v-badge{position:relative}.v-badge,.v-badge__badge{display:inline-block;line-height:1}.v-badge__badge{border-radius:10px;color:#fff;font-size:12px;height:20px;letter-spacing:0;min-width:20px;padding:4px 6px;pointer-events:auto;position:absolute;text-align:center;text-indent:0;top:auto;transition:.3s cubic-bezier(.25,.8,.5,1);white-space:nowrap}.v-application--is-ltr .v-badge__badge{right:auto}.v-application--is-rtl .v-badge__badge{left:auto}.v-badge__badge .v-icon{color:inherit;font-size:12px;margin:0 -2px}.v-badge__badge .v-img{height:12px;width:12px}.v-badge__wrapper{flex:0 1;height:100%;left:0;pointer-events:none;position:absolute;top:0;width:100%}.v-badge--avatar .v-badge__badge{padding:0}.v-badge--avatar .v-badge__badge .v-avatar{height:20px!important;min-width:0!important;max-width:20px!important}.v-badge--bordered .v-badge__badge:after{border-radius:inherit;border-width:2px;border-style:solid;bottom:0;content:"";left:0;position:absolute;right:0;top:0;transform:scale(1.15)}.v-badge--dot .v-badge__badge{border-radius:4.5px;height:9px;min-width:0;padding:0;width:9px}.v-badge--dot .v-badge__badge:after{border-width:1.5px}.v-badge--icon .v-badge__badge{padding:4px 6px}.v-badge--inline{align-items:center;display:inline-flex;justify-content:center}.v-badge--inline .v-badge__badge,.v-badge--inline .v-badge__wrapper{position:relative}.v-badge--inline .v-badge__wrapper{margin:0 4px}.v-badge--tile .v-badge__badge{border-radius:0}.theme--light.v-banner.v-sheet{background-color:transparent}.theme--light.v-banner.v-sheet .v-banner__wrapper{border-bottom:thin solid rgba(0,0,0,.12)}.theme--dark.v-banner.v-sheet{background-color:transparent}.theme--dark.v-banner.v-sheet .v-banner__wrapper{border-bottom:thin solid hsla(0,0%,100%,.12)}.v-sheet.v-banner{border-radius:0}.v-sheet.v-banner:not(.v-sheet--outlined){box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-sheet.v-banner.v-sheet--shaped{border-radius:24px 0}.v-banner{position:relative;transition:box-shadow .28s cubic-bezier(.4,0,.2,1);will-change:box-shadow}.v-banner__actions{align-items:center;align-self:flex-end;display:flex;flex:1 0 auto;justify-content:flex-end;margin-bottom:-8px}.v-application--is-ltr .v-banner__actions{margin-left:90px}.v-application--is-rtl .v-banner__actions{margin-right:90px}.v-application--is-ltr .v-banner__actions>*{margin-left:8px}.v-application--is-rtl .v-banner__actions>*{margin-right:8px}.v-banner__content{align-items:center;display:flex;flex:1 1 auto;overflow:hidden}.v-banner__text{flex:1 1 auto;line-height:20px;max-width:100%}.v-banner__icon{display:inline-flex;flex:0 0 auto}.v-application--is-ltr .v-banner__icon{margin-right:24px}.v-application--is-rtl .v-banner__icon{margin-left:24px}.v-banner__wrapper{align-items:center;display:flex;flex:1 1 auto}.v-application--is-ltr .v-banner__wrapper{padding:16px 8px 16px 24px}.v-application--is-rtl .v-banner__wrapper{padding:16px 24px 16px 8px}.v-banner--single-line .v-banner__actions{margin-bottom:0;align-self:center}.v-banner--single-line .v-banner__text{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.v-banner--single-line .v-banner__wrapper{padding-top:8px;padding-bottom:8px}.v-application--is-ltr .v-banner--has-icon .v-banner__wrapper{padding-left:16px}.v-application--is-rtl .v-banner--has-icon .v-banner__wrapper{padding-right:16px}.v-banner--is-mobile .v-banner__actions{flex:1 0 100%;margin-left:0;margin-right:0;padding-top:12px}.v-banner--is-mobile .v-banner__wrapper{flex-wrap:wrap;padding-top:16px}.v-application--is-ltr .v-banner--is-mobile .v-banner__wrapper{padding-left:16px}.v-application--is-rtl .v-banner--is-mobile .v-banner__wrapper{padding-right:16px}.v-banner--is-mobile.v-banner--has-icon .v-banner__wrapper{padding-top:24px}.v-banner--is-mobile.v-banner--single-line .v-banner__actions{flex:initial;padding-top:0}.v-application--is-ltr .v-banner--is-mobile.v-banner--single-line .v-banner__actions{margin-left:36px}.v-application--is-rtl .v-banner--is-mobile.v-banner--single-line .v-banner__actions{margin-right:36px}.v-banner--is-mobile.v-banner--single-line .v-banner__wrapper{flex-wrap:nowrap;padding-top:10px}.v-application--is-ltr .v-banner--is-mobile .v-banner__icon{margin-right:16px}.v-application--is-rtl .v-banner--is-mobile .v-banner__icon{margin-left:16px}.v-application--is-ltr .v-banner--is-mobile .v-banner__content{padding-right:8px}.v-application--is-rtl .v-banner--is-mobile .v-banner__content{padding-left:8px}.v-banner--is-mobile .v-banner__content .v-banner__wrapper{flex-wrap:nowrap;padding-top:10px}.theme--light.v-bottom-navigation{background-color:#fff;color:rgba(0,0,0,.87)}.theme--light.v-bottom-navigation .v-btn:not(.v-btn--active){color:rgba(0,0,0,.6)!important}.theme--dark.v-bottom-navigation{background-color:#2e2e2e;color:#fff}.theme--dark.v-bottom-navigation .v-btn:not(.v-btn--active){color:hsla(0,0%,100%,.7)!important}.v-item-group.v-bottom-navigation{bottom:0;display:flex;left:0;justify-content:center;width:100%;box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-item-group.v-bottom-navigation .v-btn:not(.v-btn--flat):not(.v-btn--text):not(.v-btn--outlined){background-color:transparent}.v-item-group.v-bottom-navigation .v-btn{border-radius:0;box-shadow:none;flex:0 1 auto;font-size:.75rem;height:inherit;max-width:168px;min-width:80px;position:relative;text-transform:none}.v-item-group.v-bottom-navigation .v-btn:after{content:none}.v-item-group.v-bottom-navigation .v-btn .v-btn__content{flex-direction:column-reverse;height:inherit}.v-item-group.v-bottom-navigation .v-btn .v-btn__content>:not(.v-icon){line-height:1.2}.v-item-group.v-bottom-navigation .v-btn.v-btn--active{color:inherit}.v-item-group.v-bottom-navigation .v-btn.v-btn--active:not(:hover):before{opacity:0}.v-item-group.v-bottom-navigation--absolute,.v-item-group.v-bottom-navigation--fixed{z-index:4}.v-item-group.v-bottom-navigation--absolute{position:absolute}.v-item-group.v-bottom-navigation--active{transform:translate(0)}.v-item-group.v-bottom-navigation--fixed{position:fixed}.v-item-group.v-bottom-navigation--grow .v-btn{width:100%}.v-item-group.v-bottom-navigation--horizontal .v-btn>.v-btn__content{flex-direction:row-reverse}.v-item-group.v-bottom-navigation--horizontal .v-btn>.v-btn__content>.v-icon{margin-bottom:0;margin-right:16px}.v-item-group.v-bottom-navigation--shift .v-btn .v-btn__content>:not(.v-icon){opacity:0;position:absolute;top:calc(100% - 12px);transform:scale(.9);transition:.3s cubic-bezier(.25,.8,.5,1)}.v-item-group.v-bottom-navigation--shift .v-btn--active .v-btn__content>.v-icon{transform:translateY(-8px)}.v-item-group.v-bottom-navigation--shift .v-btn--active .v-btn__content>:not(.v-icon){opacity:1;top:calc(100% - 22px);transform:scale(1)}.bottom-sheet-transition-enter,.bottom-sheet-transition-leave-to{transform:translateY(100%)}.v-bottom-sheet.v-dialog{align-self:flex-end;border-radius:0;flex:0 1 auto;margin:0;overflow:visible}.v-bottom-sheet.v-dialog.v-bottom-sheet--inset{max-width:70%}@media only screen and (max-width:599px){.v-bottom-sheet.v-dialog.v-bottom-sheet--inset{max-width:none}}.v-dialog{border-radius:4px;margin:24px;overflow-y:auto;pointer-events:auto;transition:.3s cubic-bezier(.25,.8,.25,1);width:100%;z-index:inherit;box-shadow:0 11px 15px -7px rgba(0,0,0,.2),0 24px 38px 3px rgba(0,0,0,.14),0 9px 46px 8px rgba(0,0,0,.12)}.v-dialog:not(.v-dialog--fullscreen){max-height:90%}.v-dialog>*{width:100%}.v-dialog>.v-card>.v-card__title{font-size:1.25rem;font-weight:500;letter-spacing:.0125em;padding:16px 24px 10px}.v-dialog>.v-card>.v-card__subtitle,.v-dialog>.v-card>.v-card__text{padding:0 24px 20px}.v-dialog__content{align-items:center;display:flex;height:100%;justify-content:center;left:0;pointer-events:none;position:fixed;top:0;transition:.2s cubic-bezier(.25,.8,.25,1),z-index 1ms;width:100%;z-index:6;outline:none}.v-dialog__container{display:none}.v-dialog__container--attached{display:inline}.v-dialog--animated{animation-duration:.15s;animation-name:animate-dialog;animation-timing-function:cubic-bezier(.25,.8,.25,1)}.v-dialog--fullscreen{border-radius:0;margin:0;height:100%;position:fixed;overflow-y:auto;top:0;left:0}.v-dialog--fullscreen>.v-card{min-height:100%;min-width:100%;margin:0!important;padding:0!important}.v-dialog--scrollable,.v-dialog--scrollable>form{display:flex}.v-dialog--scrollable>.v-card,.v-dialog--scrollable>form>.v-card{display:flex;flex:1 1 100%;flex-direction:column;max-height:100%;max-width:100%}.v-dialog--scrollable>.v-card>.v-card__actions,.v-dialog--scrollable>.v-card>.v-card__title,.v-dialog--scrollable>form>.v-card>.v-card__actions,.v-dialog--scrollable>form>.v-card>.v-card__title{flex:0 0 auto}.v-dialog--scrollable>.v-card>.v-card__text,.v-dialog--scrollable>form>.v-card>.v-card__text{backface-visibility:hidden;flex:1 1 auto;overflow-y:auto}@keyframes animate-dialog{0%{transform:scale(1)}50%{transform:scale(1.03)}to{transform:scale(1)}}.theme--light.v-overlay{color:rgba(0,0,0,.87)}.theme--dark.v-overlay{color:#fff}.v-overlay{align-items:center;border-radius:inherit;display:flex;justify-content:center;position:fixed;top:0;left:0;right:0;bottom:0;pointer-events:none;transition:.3s cubic-bezier(.25,.8,.5,1),z-index 1ms}.v-overlay__content{position:relative}.v-overlay__scrim{border-radius:inherit;bottom:0;height:100%;left:0;position:absolute;right:0;top:0;transition:inherit;width:100%;will-change:opacity}.v-overlay--absolute{position:absolute}.v-overlay--active{pointer-events:auto}.theme--light.v-breadcrumbs .v-breadcrumbs__divider,.theme--light.v-breadcrumbs .v-breadcrumbs__item--disabled{color:rgba(0,0,0,.38)}.theme--dark.v-breadcrumbs .v-breadcrumbs__divider,.theme--dark.v-breadcrumbs .v-breadcrumbs__item--disabled{color:hsla(0,0%,100%,.5)}.v-breadcrumbs{align-items:center;display:flex;flex-wrap:wrap;flex:0 1 auto;list-style-type:none;margin:0;padding:18px 12px}.v-breadcrumbs li{align-items:center;display:inline-flex;font-size:14px}.v-breadcrumbs li .v-icon{font-size:16px}.v-breadcrumbs li:nth-child(2n){padding:0 12px}.v-breadcrumbs__item{align-items:center;display:inline-flex;text-decoration:none;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-breadcrumbs__item--disabled{pointer-events:none}.v-breadcrumbs--large li,.v-breadcrumbs--large li .v-icon{font-size:16px}.theme--light.v-btn-toggle:not(.v-btn-toggle--group){background:#fff;color:rgba(0,0,0,.87)}.theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn{border-color:rgba(0,0,0,.12)!important}.theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn:focus:not(:active){border-color:rgba(0,0,0,.26)}.theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn .v-icon{color:#000}.theme--dark.v-btn-toggle:not(.v-btn-toggle--group){background:#1e1e1e;color:#fff}.theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn{border-color:hsla(0,0%,100%,.12)!important}.theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn:focus:not(:active){border-color:hsla(0,0%,100%,.3)}.theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn .v-icon{color:#fff}.v-btn-toggle{border-radius:4px;display:inline-flex;max-width:100%}.v-btn-toggle>.v-btn.v-btn{border-radius:0;border-style:solid;border-width:thin;box-shadow:none;opacity:.8;padding:0 12px}.v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:first-child{border-top-left-radius:inherit;border-bottom-left-radius:inherit}.v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:last-child,.v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:first-child{border-top-right-radius:inherit;border-bottom-right-radius:inherit}.v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:last-child{border-top-left-radius:inherit;border-bottom-left-radius:inherit}.v-btn-toggle>.v-btn.v-btn--active{color:inherit;opacity:1}.v-btn-toggle>.v-btn.v-btn:after{display:none}.v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:not(:first-child),.v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:not(:last-child){border-left-width:0}.v-btn-toggle:not(.v-btn-toggle--dense) .v-btn.v-btn.v-size--default{height:48px;min-height:0;min-width:48px}.v-btn-toggle--borderless>.v-btn.v-btn{border-width:0}.v-btn-toggle--dense>.v-btn.v-btn{padding:0 8px}.v-btn-toggle--group{border-radius:0}.v-btn-toggle--group>.v-btn.v-btn{background-color:transparent!important;border-color:transparent;margin:4px;min-width:auto}.v-btn-toggle--rounded{border-radius:24px}.v-btn-toggle--shaped{border-radius:24px 4px}.v-btn-toggle--tile{border-radius:0}.theme--light.v-calendar-events .v-event-timed{border:1px solid!important}.theme--light.v-calendar-events .v-event-more{background-color:#fff}.theme--light.v-calendar-events .v-event-more.v-outside{background-color:#f7f7f7}.theme--dark.v-calendar-events .v-event-timed{border:1px solid!important}.theme--dark.v-calendar-events .v-event-more{background-color:#303030}.theme--dark.v-calendar-events .v-event-more.v-outside{background-color:#202020}.v-calendar .v-event{line-height:20px;margin-right:-1px;border-radius:4px}.v-calendar .v-event,.v-calendar .v-event-more{position:relative;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-size:12px;cursor:pointer;z-index:1}.v-calendar .v-event-more{font-weight:700}.v-calendar .v-event-timed-container{position:absolute;top:0;bottom:0;left:0;right:0;margin-right:10px;pointer-events:none}.v-calendar .v-event-timed{position:absolute;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:12px;cursor:pointer;border-radius:4px;pointer-events:all}.v-calendar.v-calendar-events .v-calendar-weekly__head-weekday{margin-right:-1px}.v-calendar.v-calendar-events .v-calendar-weekly__day{overflow:visible;margin-right:-1px}.theme--light.v-calendar-weekly{background-color:#fff;border-top:1px solid #e0e0e0;border-left:1px solid #e0e0e0}.theme--light.v-calendar-weekly .v-calendar-weekly__head-weekday{border-right:1px solid #e0e0e0;color:#000}.theme--light.v-calendar-weekly .v-calendar-weekly__head-weekday.v-past{color:rgba(0,0,0,.38)}.theme--light.v-calendar-weekly .v-calendar-weekly__head-weekday.v-outside{background-color:#f7f7f7}.theme--light.v-calendar-weekly .v-calendar-weekly__head-weeknumber{background-color:#f1f3f4;border-right:1px solid #e0e0e0}.theme--light.v-calendar-weekly .v-calendar-weekly__day{border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;color:#000}.theme--light.v-calendar-weekly .v-calendar-weekly__day.v-outside{background-color:#f7f7f7}.theme--light.v-calendar-weekly .v-calendar-weekly__weeknumber{background-color:#f1f3f4;border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;color:#000}.theme--dark.v-calendar-weekly{background-color:#303030;border-top:1px solid #9e9e9e;border-left:1px solid #9e9e9e}.theme--dark.v-calendar-weekly .v-calendar-weekly__head-weekday{border-right:1px solid #9e9e9e;color:#fff}.theme--dark.v-calendar-weekly .v-calendar-weekly__head-weekday.v-past{color:hsla(0,0%,100%,.5)}.theme--dark.v-calendar-weekly .v-calendar-weekly__head-weekday.v-outside{background-color:#202020}.theme--dark.v-calendar-weekly .v-calendar-weekly__head-weeknumber{background-color:#202020;border-right:1px solid #9e9e9e}.theme--dark.v-calendar-weekly .v-calendar-weekly__day{border-right:1px solid #9e9e9e;border-bottom:1px solid #9e9e9e;color:#fff}.theme--dark.v-calendar-weekly .v-calendar-weekly__day.v-outside{background-color:#202020}.theme--dark.v-calendar-weekly .v-calendar-weekly__weeknumber{background-color:#202020;border-right:1px solid #9e9e9e;border-bottom:1px solid #9e9e9e;color:#fff}.v-calendar-weekly{width:100%;height:100%;display:flex;flex-direction:column;min-height:0}.v-calendar-weekly__head{display:flex}.v-calendar-weekly__head,.v-calendar-weekly__head-weekday{user-select:none}.v-calendar-weekly__head-weekday{flex:1 0 20px;padding:0 4px;font-size:11px;overflow:hidden;text-align:center;text-overflow:ellipsis;text-transform:uppercase;white-space:nowrap}.v-calendar-weekly__head-weeknumber{position:relative;flex:0 0 24px}.v-calendar-weekly__week{display:flex;flex:1;height:unset;min-height:0}.v-calendar-weekly__weeknumber{display:flex;flex:0 0 24px;height:unset;min-height:0;padding-top:14.5px;text-align:center}.v-calendar-weekly__weeknumber>small{width:100%!important}.v-calendar-weekly__day{flex:1;width:0;overflow:hidden;user-select:none;position:relative;padding:0;min-width:0}.v-calendar-weekly__day.v-present .v-calendar-weekly__day-month{color:currentColor}.v-calendar-weekly__day-label{text-decoration:none;user-select:none;cursor:pointer;box-shadow:none;text-align:center;margin:4px 0 0}.v-calendar-weekly__day-label .v-btn{font-size:12px;text-transform:none}.v-calendar-weekly__day-month{position:absolute;text-decoration:none;user-select:none;box-shadow:none;top:0;left:36px;height:32px;line-height:32px}.theme--light.v-calendar-daily{background-color:#fff;border-left:1px solid #e0e0e0;border-top:1px solid #e0e0e0}.theme--light.v-calendar-daily .v-calendar-daily__intervals-head{border-right:1px solid #e0e0e0}.theme--light.v-calendar-daily .v-calendar-daily__intervals-head:after{background:#e0e0e0;background:linear-gradient(90deg,transparent,#e0e0e0)}.theme--light.v-calendar-daily .v-calendar-daily_head-day{border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;color:#000}.theme--light.v-calendar-daily .v-calendar-daily_head-day.v-past .v-calendar-daily_head-day-label,.theme--light.v-calendar-daily .v-calendar-daily_head-day.v-past .v-calendar-daily_head-weekday{color:rgba(0,0,0,.38)}.theme--light.v-calendar-daily .v-calendar-daily__intervals-body{border-right:1px solid #e0e0e0}.theme--light.v-calendar-daily .v-calendar-daily__intervals-body .v-calendar-daily__interval-text{color:#424242}.theme--light.v-calendar-daily .v-calendar-daily__day{border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0}.theme--light.v-calendar-daily .v-calendar-daily__day-interval{border-top:1px solid #e0e0e0}.theme--light.v-calendar-daily .v-calendar-daily__day-interval:first-child{border-top:none!important}.theme--light.v-calendar-daily .v-calendar-daily__interval:after{border-top:1px solid #e0e0e0}.theme--dark.v-calendar-daily{background-color:#303030;border-left:1px solid #9e9e9e;border-top:1px solid #9e9e9e}.theme--dark.v-calendar-daily .v-calendar-daily__intervals-head{border-right:1px solid #9e9e9e}.theme--dark.v-calendar-daily .v-calendar-daily__intervals-head:after{background:#9e9e9e;background:linear-gradient(90deg,transparent,#9e9e9e)}.theme--dark.v-calendar-daily .v-calendar-daily_head-day{border-right:1px solid #9e9e9e;border-bottom:1px solid #9e9e9e;color:#fff}.theme--dark.v-calendar-daily .v-calendar-daily_head-day.v-past .v-calendar-daily_head-day-label,.theme--dark.v-calendar-daily .v-calendar-daily_head-day.v-past .v-calendar-daily_head-weekday{color:hsla(0,0%,100%,.5)}.theme--dark.v-calendar-daily .v-calendar-daily__intervals-body{border-right:1px solid #9e9e9e}.theme--dark.v-calendar-daily .v-calendar-daily__intervals-body .v-calendar-daily__interval-text{color:#eee}.theme--dark.v-calendar-daily .v-calendar-daily__day{border-right:1px solid #9e9e9e;border-bottom:1px solid #9e9e9e}.theme--dark.v-calendar-daily .v-calendar-daily__day-interval{border-top:1px solid #9e9e9e}.theme--dark.v-calendar-daily .v-calendar-daily__day-interval:first-child{border-top:none!important}.theme--dark.v-calendar-daily .v-calendar-daily__interval:after{border-top:1px solid #9e9e9e}.v-calendar-daily{display:flex;flex-direction:column;overflow:hidden;height:100%}.v-calendar-daily__head{flex:none;display:flex}.v-calendar-daily__intervals-head{flex:none;position:relative}.v-calendar-daily__intervals-head:after{position:absolute;bottom:0;height:1px;left:0;right:0;content:""}.v-calendar-daily_head-day{flex:1 1 auto;width:0;position:relative}.v-calendar-daily_head-weekday{padding:3px 0 0;font-size:11px;text-transform:uppercase}.v-calendar-daily_head-day-label,.v-calendar-daily_head-weekday{user-select:none;text-align:center}.v-calendar-daily_head-day-label{padding:0 0 3px;cursor:pointer}.v-calendar-daily__body{flex:1 1 60%;overflow:hidden;display:flex;position:relative;flex-direction:column}.v-calendar-daily__scroll-area{overflow-y:scroll;flex:1 1 auto;display:flex;align-items:flex-start}.v-calendar-daily__pane{width:100%;overflow-y:hidden;flex:none;display:flex;align-items:flex-start}.v-calendar-daily__day-container{display:flex;flex:1;width:100%;height:100%}.v-calendar-daily__intervals-body{flex:none;user-select:none}.v-calendar-daily__interval{text-align:right;padding-right:8px;border-bottom:none;position:relative}.v-calendar-daily__interval:after{width:8px;position:absolute;height:1px;display:block;content:"";right:0;bottom:-1px}.v-calendar-daily__interval-text{display:block;position:relative;top:-6px;font-size:10px;padding-right:4px}.v-calendar-daily__day{flex:1;width:0;position:relative}.theme--light.v-calendar-category .v-calendar-category__column,.theme--light.v-calendar-category .v-calendar-category__column-header{border-right:1px solid #e0e0e0}.theme--dark.v-calendar-category .v-calendar-category__column,.theme--dark.v-calendar-category .v-calendar-category__column-header{border-right:1px solid #9e9e9e}.v-calendar-category .v-calendar-category__category{text-align:center}.v-calendar-category .v-calendar-daily__day-container .v-calendar-category__columns{position:absolute;height:100%;width:100%;top:0}.v-calendar-category .v-calendar-category__columns{display:flex}.v-calendar-category .v-calendar-category__columns .v-calendar-category__column,.v-calendar-category .v-calendar-category__columns .v-calendar-category__column-header{flex:1 1 auto;width:0;position:relative}.theme--light.v-card{background-color:#fff;color:rgba(0,0,0,.87)}.theme--light.v-card .v-card__subtitle,.theme--light.v-card>.v-card__text{color:rgba(0,0,0,.6)}.theme--dark.v-card{background-color:#1e1e1e;color:#fff}.theme--dark.v-card .v-card__subtitle,.theme--dark.v-card>.v-card__text{color:hsla(0,0%,100%,.7)}.v-sheet.v-card{border-radius:4px}.v-sheet.v-card:not(.v-sheet--outlined){box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-sheet.v-card.v-sheet--shaped{border-radius:24px 4px}.v-card{border-width:thin;display:block;max-width:100%;outline:none;text-decoration:none;transition-property:box-shadow,opacity;overflow-wrap:break-word;position:relative;white-space:normal}.v-card>.v-card__progress+:not(.v-btn):not(.v-chip),.v-card>:first-child:not(.v-btn):not(.v-chip){border-top-left-radius:inherit;border-top-right-radius:inherit}.v-card>:last-child:not(.v-btn):not(.v-chip){border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}.v-card__progress{top:0;left:0;right:0;overflow:hidden}.v-card__subtitle+.v-card__text{padding-top:0}.v-card__subtitle,.v-card__text{font-size:.875rem;font-weight:400;line-height:1.375rem;letter-spacing:.0071428571em}.v-card__subtitle,.v-card__text,.v-card__title{padding:16px}.v-card__title{align-items:center;display:flex;flex-wrap:wrap;font-size:1.25rem;font-weight:500;letter-spacing:.0125em;line-height:2rem;word-break:break-all}.v-card__title+.v-card__subtitle,.v-card__title+.v-card__text{padding-top:0}.v-card__title+.v-card__subtitle{margin-top:-16px}.v-card__text{width:100%}.v-card__actions{align-items:center;display:flex;padding:8px}.v-card__actions>.v-btn.v-btn{padding:0 8px}.v-application--is-ltr .v-card__actions>.v-btn.v-btn+.v-btn{margin-left:8px}.v-application--is-ltr .v-card__actions>.v-btn.v-btn .v-icon--left{margin-left:4px}.v-application--is-ltr .v-card__actions>.v-btn.v-btn .v-icon--right{margin-right:4px}.v-application--is-rtl .v-card__actions>.v-btn.v-btn+.v-btn{margin-right:8px}.v-application--is-rtl .v-card__actions>.v-btn.v-btn .v-icon--left{margin-right:4px}.v-application--is-rtl .v-card__actions>.v-btn.v-btn .v-icon--right{margin-left:4px}.v-card--flat{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)!important}.v-card--hover{cursor:pointer;transition:box-shadow .4s cubic-bezier(.25,.8,.25,1)}.v-card--hover:focus,.v-card--hover:hover{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)}.v-card--link,.v-card--link .v-chip{cursor:pointer}.v-card--link:focus:before{opacity:.08}.v-card--link:before{background:currentColor;bottom:0;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:opacity .2s}.v-card--disabled{pointer-events:none;user-select:none}.v-card--disabled>:not(.v-card__progress){opacity:.6;transition:inherit}.v-card--loading{overflow:hidden}.v-card--raised{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)}.v-carousel{overflow:hidden;position:relative;width:100%}.v-carousel__controls{align-items:center;background:rgba(0,0,0,.3);bottom:0;display:flex;height:50px;justify-content:center;list-style-type:none;position:absolute;width:100%;z-index:1}.v-carousel__controls>.v-item-group{flex:0 1 auto}.v-carousel__controls__item{margin:0 8px}.v-carousel__controls__item .v-icon{opacity:.5}.v-carousel__controls__item--active .v-icon{opacity:1;vertical-align:middle}.v-carousel__controls__item:hover{background:none}.v-carousel__controls__item:hover .v-icon{opacity:.8}.v-carousel__progress{margin:0;position:absolute;bottom:0;left:0;right:0}.v-carousel .v-window-item{display:block;height:inherit;text-decoration:none}.v-carousel--hide-delimiter-background .v-carousel__controls{background:transparent}.v-carousel--vertical-delimiters .v-carousel__controls{height:100%!important;width:50px}.v-window__container{height:inherit;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-window__container--is-active{overflow:hidden}.v-window__next,.v-window__prev{background:rgba(0,0,0,.3);border-radius:50%;position:absolute;margin:0 16px;top:calc(50% - 20px);z-index:1}.v-window__next .v-btn:hover,.v-window__prev .v-btn:hover{background:none}.v-application--is-ltr .v-window__prev{left:0}.v-application--is-ltr .v-window__next,.v-application--is-rtl .v-window__prev{right:0}.v-application--is-rtl .v-window__next{left:0}.v-window--show-arrows-on-hover{overflow:hidden}.v-window--show-arrows-on-hover .v-window__next,.v-window--show-arrows-on-hover .v-window__prev{transition:transform .2s cubic-bezier(.25,.8,.5,1)}.v-application--is-ltr .v-window--show-arrows-on-hover .v-window__prev{transform:translateX(-200%)}.v-application--is-ltr .v-window--show-arrows-on-hover .v-window__next,.v-application--is-rtl .v-window--show-arrows-on-hover .v-window__prev{transform:translateX(200%)}.v-application--is-rtl .v-window--show-arrows-on-hover .v-window__next{transform:translateX(-200%)}.v-window--show-arrows-on-hover:hover .v-window__next,.v-window--show-arrows-on-hover:hover .v-window__prev{transform:translateX(0)}.v-window-x-reverse-transition-enter-active,.v-window-x-reverse-transition-leave-active,.v-window-x-transition-enter-active,.v-window-x-transition-leave-active,.v-window-y-reverse-transition-enter-active,.v-window-y-reverse-transition-leave-active,.v-window-y-transition-enter-active,.v-window-y-transition-leave-active{transition:.3s cubic-bezier(.25,.8,.5,1)}.v-window-x-reverse-transition-leave,.v-window-x-reverse-transition-leave-to,.v-window-x-transition-leave,.v-window-x-transition-leave-to,.v-window-y-reverse-transition-leave,.v-window-y-reverse-transition-leave-to,.v-window-y-transition-leave,.v-window-y-transition-leave-to{position:absolute!important;top:0;width:100%}.v-window-x-transition-enter{transform:translateX(100%)}.v-window-x-reverse-transition-enter,.v-window-x-transition-leave-to{transform:translateX(-100%)}.v-window-x-reverse-transition-leave-to{transform:translateX(100%)}.v-window-y-transition-enter{transform:translateY(100%)}.v-window-y-reverse-transition-enter,.v-window-y-transition-leave-to{transform:translateY(-100%)}.v-window-y-reverse-transition-leave-to{transform:translateY(100%)}.v-input--checkbox.v-input--indeterminate.v-input--is-disabled{opacity:.6}.theme--light.v-input--selection-controls.v-input--is-disabled:not(.v-input--indeterminate) .v-icon{color:rgba(0,0,0,.26)!important}.theme--dark.v-input--selection-controls.v-input--is-disabled:not(.v-input--indeterminate) .v-icon{color:hsla(0,0%,100%,.3)!important}.v-input--selection-controls{margin-top:16px;padding-top:4px}.v-input--selection-controls>.v-input__append-outer,.v-input--selection-controls>.v-input__prepend-outer{margin-top:0;margin-bottom:0}.v-input--selection-controls:not(.v-input--hide-details)>.v-input__slot{margin-bottom:12px}.v-input--selection-controls .v-input__slot,.v-input--selection-controls .v-radio{cursor:pointer}.v-input--selection-controls .v-input__slot>.v-label,.v-input--selection-controls .v-radio>.v-label{align-items:center;display:inline-flex;flex:1 1 auto;height:auto}.v-input--selection-controls__input{color:inherit;display:inline-flex;flex:0 0 auto;height:24px;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1);transition-property:transform;width:24px;user-select:none}.v-input--selection-controls__input .v-icon{width:100%}.v-application--is-ltr .v-input--selection-controls__input{margin-right:8px}.v-application--is-rtl .v-input--selection-controls__input{margin-left:8px}.v-input--selection-controls__input input[role=checkbox],.v-input--selection-controls__input input[role=radio],.v-input--selection-controls__input input[role=switch]{position:absolute;opacity:0;width:100%;height:100%;cursor:pointer;user-select:none}.v-input--selection-controls__input+.v-label{cursor:pointer;user-select:none}.v-input--selection-controls__ripple{border-radius:50%;cursor:pointer;height:34px;position:absolute;transition:inherit;width:34px;left:-12px;top:calc(50% - 24px);margin:7px}.v-input--selection-controls__ripple:before{border-radius:inherit;bottom:0;content:"";position:absolute;opacity:.2;left:0;right:0;top:0;transform-origin:center center;transform:scale(.2);transition:inherit}.v-input--selection-controls__ripple>.v-ripple__container{transform:scale(1.2)}.v-input--selection-controls.v-input--dense .v-input--selection-controls__ripple{width:28px;height:28px;left:-9px}.v-input--selection-controls.v-input--dense:not(.v-input--switch) .v-input--selection-controls__ripple{top:calc(50% - 21px)}.v-input--selection-controls.v-input{flex:0 1 auto}.v-input--selection-controls.v-input--is-focused .v-input--selection-controls__ripple:before,.v-input--selection-controls .v-radio--is-focused .v-input--selection-controls__ripple:before{background:currentColor;transform:scale(1.2)}.v-input--selection-controls .v-input--selection-controls__input:hover .v-input--selection-controls__ripple:before{background:currentColor;transform:scale(1.2);transition:none}.v-chip-group .v-chip{margin:4px 8px 4px 0}.v-chip-group .v-chip--active{color:inherit}.v-chip-group .v-chip--active.v-chip--no-color:after{opacity:.22}.v-chip-group .v-chip--active.v-chip--no-color:focus:after{opacity:.32}.v-chip-group .v-slide-group__content{padding:4px 0}.v-chip-group--column .v-slide-group__content{white-space:normal;flex-wrap:wrap;max-width:100%}.v-slide-group{display:flex}.v-slide-group:not(.v-slide-group--has-affixes)>.v-slide-group__next,.v-slide-group:not(.v-slide-group--has-affixes)>.v-slide-group__prev{display:none}.v-slide-group.v-item-group>.v-slide-group__next,.v-slide-group.v-item-group>.v-slide-group__prev{cursor:pointer}.v-slide-item{display:inline-flex;flex:0 1 auto}.v-slide-group__next,.v-slide-group__prev{align-items:center;display:flex;flex:0 1 52px;justify-content:center;min-width:52px}.v-slide-group__content{display:flex;flex:1 0 auto;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1);white-space:nowrap}.v-slide-group__wrapper{contain:content;display:flex;flex:1 1 auto;overflow:hidden;touch-action:none}.v-slide-group__next--disabled,.v-slide-group__prev--disabled{pointer-events:none}.theme--light.v-color-picker .v-color-picker__input input{border:thin solid rgba(0,0,0,.12)}.theme--light.v-color-picker span{color:rgba(0,0,0,.6)}.theme--light.v-color-picker .v-color-picker__color,.theme--light.v-color-picker .v-color-picker__dot{background-color:hsla(0,0%,100%,0)}.theme--dark.v-color-picker .v-color-picker__input input{border:thin solid hsla(0,0%,100%,.12)}.theme--dark.v-color-picker span{color:hsla(0,0%,100%,.7)}.theme--dark.v-color-picker .v-color-picker__color,.theme--dark.v-color-picker .v-color-picker__dot{background-color:hsla(0,0%,100%,.12)}.v-color-picker{align-self:flex-start;border-radius:4px;contain:content;box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-color-picker__controls{display:flex;flex-direction:column;padding:16px}.v-color-picker--flat,.v-color-picker--flat .v-color-picker__track:not(.v-input--is-disabled) .v-slider__thumb{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-color-picker__edit{margin-top:24px;display:flex}.v-color-picker__input{width:100%;display:flex;flex-wrap:wrap;justify-content:center;text-align:center}.v-application--is-ltr .v-color-picker__input:not(:last-child){margin-right:8px}.v-application--is-rtl .v-color-picker__input:not(:last-child){margin-left:8px}.v-color-picker__input input{border-radius:4px;margin-bottom:8px;min-width:0;outline:none;text-align:center;width:100%;height:28px}.v-color-picker__input span{font-size:.75rem}.v-color-picker__canvas{position:relative;overflow:hidden;contain:strict}.v-color-picker__canvas-dot{position:absolute;top:0;left:0;width:15px;height:15px;background:transparent;border-radius:50%;box-shadow:0 0 0 1.5px #fff,inset 0 0 1px 1.5px rgba(0,0,0,.3)}.v-color-picker__canvas-dot--disabled{box-shadow:0 0 0 1.5px hsla(0,0%,100%,.7),inset 0 0 1px 1.5px rgba(0,0,0,.3)}.v-color-picker__canvas:hover .v-color-picker__canvas-dot{will-change:transform}.v-color-picker .v-input__slider{border-radius:5px}.v-color-picker .v-input__slider .v-slider{margin:0}.v-color-picker__alpha:not(.v-input--is-disabled) .v-slider{border-radius:5px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGElEQVQYlWNgYGCQwoKxgqGgcJA5h3yFAAs8BRWVSwooAAAAAElFTkSuQmCC) repeat}.v-color-picker__sliders{display:flex;flex:1 0 auto;flex-direction:column}.v-color-picker__dot{position:relative;height:30px;width:30px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGElEQVQYlWNgYGCQwoKxgqGgcJA5h3yFAAs8BRWVSwooAAAAAElFTkSuQmCC) repeat;border-radius:50%;overflow:hidden}.v-application--is-ltr .v-color-picker__dot{margin-right:24px}.v-application--is-rtl .v-color-picker__dot{margin-left:24px}.v-color-picker__dot>div{width:100%;height:100%}.v-application--is-ltr .v-color-picker__hue:not(.v-input--is-disabled){background:linear-gradient(90deg,red 0,#ff0 16.66%,#0f0 33.33%,#0ff 50%,#00f 66.66%,#f0f 83.33%,red)}.v-application--is-rtl .v-color-picker__hue:not(.v-input--is-disabled){background:linear-gradient(270deg,red 0,#ff0 16.66%,#0f0 33.33%,#0ff 50%,#00f 66.66%,#f0f 83.33%,red)}.v-color-picker__track{position:relative;width:100%}.v-color-picker__preview{align-items:center;display:flex}.v-color-picker__preview .v-slider{min-height:10px}.v-color-picker__preview .v-slider:not(.v-slider--disabled) .v-slider__thumb{box-shadow:0 3px 3px -2px rgba(0,0,0,.2),0 3px 4px 0 rgba(0,0,0,.14),0 1px 8px 0 rgba(0,0,0,.12)}.v-color-picker__preview .v-slider:not(.v-slider--disabled) .v-slider__track-container{opacity:0}.v-color-picker__preview:not(.v-color-picker__preview--hide-alpha) .v-color-picker__hue{margin-bottom:24px}.theme--light.v-slider .v-slider__thumb,.theme--light.v-slider .v-slider__track-background,.theme--light.v-slider .v-slider__track-fill{background:rgba(0,0,0,.26)}.theme--dark.v-slider .v-slider__thumb,.theme--dark.v-slider .v-slider__track-background,.theme--dark.v-slider .v-slider__track-fill{background:hsla(0,0%,100%,.2)}.v-slider{cursor:default;display:flex;align-items:center;position:relative;flex:1;user-select:none}.v-slider input{cursor:default;padding:0;width:100%;display:none}.v-slider__track-container{position:absolute;border-radius:0}.v-slider__thumb-container,.v-slider__track-background,.v-slider__track-fill{position:absolute;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-slider__thumb-container{outline:none;top:50%}.v-slider__thumb-container:hover .v-slider__thumb:before{transform:scale(1)}.v-slider__thumb{width:12px;height:12px;left:-6px;top:50%;transform:translateY(-50%);user-select:none}.v-slider__thumb,.v-slider__thumb:before{position:absolute;border-radius:50%;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-slider__thumb:before{content:"";color:inherit;width:36px;height:36px;background:currentColor;opacity:.3;left:-12px;top:-12px;transform:scale(.1);pointer-events:none}.v-slider__tick,.v-slider__ticks-container{position:absolute}.v-slider__tick{opacity:0;background-color:rgba(0,0,0,.5);transition:.3s cubic-bezier(.25,.8,.5,1);border-radius:0}.v-slider__tick--filled{background-color:hsla(0,0%,100%,.5)}.v-application--is-ltr .v-slider__tick:first-child .v-slider__tick-label{transform:none}.v-application--is-rtl .v-slider__tick:first-child .v-slider__tick-label{transform:translateX(100%)}.v-application--is-ltr .v-slider__tick:last-child .v-slider__tick-label{transform:translateX(-100%)}.v-application--is-rtl .v-slider__tick:last-child .v-slider__tick-label{transform:none}.v-slider__tick-label{position:absolute;user-select:none;white-space:nowrap}.v-slider__thumb-label-container{top:0}.v-slider__thumb-label,.v-slider__thumb-label-container{position:absolute;left:0;transition:.3s cubic-bezier(.25,.8,.25,1)}.v-slider__thumb-label{display:flex;align-items:center;justify-content:center;font-size:.75rem;color:#fff;width:32px;height:32px;border-radius:50% 50% 0;bottom:100%;user-select:none}.v-slider--horizontal{min-height:32px;margin-left:8px;margin-right:8px}.v-slider--horizontal .v-slider__track-container{width:100%;height:2px;left:0;top:50%;transform:translateY(-50%)}.v-slider--horizontal .v-slider__track-background,.v-slider--horizontal .v-slider__track-fill{height:100%}.v-slider--horizontal .v-slider__ticks-container{left:0;height:2px;width:100%}.v-application--is-ltr .v-slider--horizontal .v-slider__tick:first-child .v-slider__tick-label,.v-application--is-rtl .v-slider--horizontal .v-slider__tick:first-child .v-slider__tick-label{transform:translateX(0)}.v-application--is-ltr .v-slider--horizontal .v-slider__tick:last-child .v-slider__tick-label{transform:translateX(-100%)}.v-application--is-rtl .v-slider--horizontal .v-slider__tick:last-child .v-slider__tick-label{transform:translateX(100%)}.v-slider--horizontal .v-slider__tick .v-slider__tick-label{top:8px}.v-application--is-ltr .v-slider--horizontal .v-slider__tick .v-slider__tick-label{transform:translateX(-50%)}.v-application--is-rtl .v-slider--horizontal .v-slider__tick .v-slider__tick-label{transform:translateX(50%)}.v-slider--horizontal .v-slider__thumb-label{transform:translateY(-20%) translateY(-12px) translateX(-50%) rotate(45deg)}.v-slider--horizontal .v-slider__thumb-label>*{transform:rotate(-45deg)}.v-slider--vertical{min-height:150px;margin-top:12px;margin-bottom:12px}.v-slider--vertical .v-slider__track-container{height:100%;width:2px;left:50%;top:0;transform:translateX(-50%)}.v-slider--vertical .v-slider__track-background,.v-slider--vertical .v-slider__track-fill{width:100%}.v-slider--vertical .v-slider__thumb-container{left:50%}.v-slider--vertical .v-slider__ticks-container{top:0;width:2px;height:100%;left:50%;transform:translateX(-50%)}.v-application--is-ltr .v-slider--vertical .v-slider__tick .v-slider__tick-label,.v-application--is-ltr .v-slider--vertical .v-slider__tick:first-child .v-slider__tick-label,.v-application--is-ltr .v-slider--vertical .v-slider__tick:last-child .v-slider__tick-label{transform:translateY(-50%);left:12px}.v-application--is-rtl .v-slider--vertical .v-slider__tick .v-slider__tick-label,.v-application--is-rtl .v-slider--vertical .v-slider__tick:first-child .v-slider__tick-label,.v-application--is-rtl .v-slider--vertical .v-slider__tick:last-child .v-slider__tick-label{transform:translateY(-50%);right:12px}.v-slider--vertical .v-slider__thumb-label>*{transform:rotate(-135deg)}.v-slider__thumb-container--focused .v-slider__thumb:before{transform:scale(1)}.v-slider--active .v-slider__tick{opacity:1}.v-slider__thumb-container--active .v-slider__thumb:before{transform:scale(1.5)!important}.v-slider--disabled{pointer-events:none}.v-slider--disabled .v-slider__thumb{width:8px;height:8px;left:-4px}.v-slider--disabled .v-slider__thumb:before{display:none}.v-slider__ticks-container--always-show .v-slider__tick{opacity:1}.v-input__slider.v-input--is-readonly>.v-input__control{pointer-events:none}.v-application--is-ltr .v-input__slider .v-input__slot .v-label{margin-left:0;margin-right:12px}.v-application--is-ltr .v-input__slider--inverse-label .v-input__slot .v-label,.v-application--is-rtl .v-input__slider .v-input__slot .v-label{margin-right:0;margin-left:12px}.v-application--is-rtl .v-input__slider--inverse-label .v-input__slot .v-label{margin-left:0;margin-right:12px}.v-input__slider--vertical{align-items:center}.v-application--is-ltr .v-input__slider--vertical{flex-direction:column-reverse}.v-application--is-rtl .v-input__slider--vertical{flex-direction:column}.v-input__slider--vertical .v-input__append-outer,.v-input__slider--vertical .v-input__prepend-outer,.v-input__slider--vertical .v-input__slot{margin:0}.v-input__slider--vertical .v-messages{display:none}.v-input--has-state .v-slider__track-background{opacity:.4}.v-color-picker__swatches{overflow-y:auto}.v-color-picker__swatches>div{display:flex;flex-wrap:wrap;justify-content:center;padding:8px}.v-color-picker__swatch{display:flex;flex-direction:column;margin-bottom:10px}.v-color-picker__color{position:relative;height:18px;max-height:18px;width:45px;margin:2px 4px;border-radius:2px;user-select:none;overflow:hidden;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGElEQVQYlWNgYGCQwoKxgqGgcJA5h3yFAAs8BRWVSwooAAAAAElFTkSuQmCC) repeat;cursor:pointer}.v-color-picker__color>div{display:flex;align-items:center;justify-content:center;width:100%;height:100%}.v-main{display:flex;flex:1 0 auto;max-width:100%;transition:.2s cubic-bezier(.4,0,.2,1)}.v-main:not([data-booted=true]){transition:none!important}.v-main__wrap{flex:1 1 auto;max-width:100%;position:relative}@-moz-document url-prefix(){@media print{.v-main{display:block}}}.v-data-footer{display:flex;flex-wrap:wrap;justify-content:flex-end;align-items:center;font-size:.75rem;padding:0 8px}.v-data-footer .v-btn{color:inherit}.v-application--is-ltr .v-data-footer__icons-before .v-btn:last-child{margin-right:7px}.v-application--is-ltr .v-data-footer__icons-after .v-btn:first-child,.v-application--is-rtl .v-data-footer__icons-before .v-btn:last-child{margin-left:7px}.v-application--is-rtl .v-data-footer__icons-after .v-btn:first-child{margin-right:7px}.v-data-footer__pagination{display:block;text-align:center}.v-application--is-ltr .v-data-footer__pagination{margin:0 32px 0 24px}.v-application--is-rtl .v-data-footer__pagination{margin:0 24px 0 32px}.v-data-footer__select{display:flex;align-items:center;flex:0 0 0;justify-content:flex-end;white-space:nowrap}.v-application--is-ltr .v-data-footer__select{margin-right:14px}.v-application--is-rtl .v-data-footer__select{margin-left:14px}.v-data-footer__select .v-select{flex:0 1 0;padding:0;position:static}.v-application--is-ltr .v-data-footer__select .v-select{margin:13px 0 13px 34px}.v-application--is-rtl .v-data-footer__select .v-select{margin:13px 34px 13px 0}.v-data-footer__select .v-select__selections{flex-wrap:nowrap}.v-data-footer__select .v-select__selections .v-select__selection--comma{font-size:.75rem}.theme--light.v-data-table tbody tr.v-data-table__selected{background:#f5f5f5}.theme--light.v-data-table .v-row-group__header,.theme--light.v-data-table .v-row-group__summary{background:#eee}.theme--light.v-data-table .v-data-footer{border-top:thin solid rgba(0,0,0,.12)}.theme--light.v-data-table .v-data-table__empty-wrapper{color:rgba(0,0,0,.38)}.theme--dark.v-data-table tbody tr.v-data-table__selected{background:#505050}.theme--dark.v-data-table .v-row-group__header,.theme--dark.v-data-table .v-row-group__summary{background:#616161}.theme--dark.v-data-table .v-data-footer{border-top:thin solid hsla(0,0%,100%,.12)}.theme--dark.v-data-table .v-data-table__empty-wrapper{color:hsla(0,0%,100%,.5)}.v-data-table{border-radius:4px}.v-data-table tbody tr.v-data-table__expanded{border-bottom:0}.v-data-table tbody tr.v-data-table__expanded__content{box-shadow:inset 0 4px 8px -5px rgba(50,50,50,.75),inset 0 -4px 8px -5px rgba(50,50,50,.75)}.v-data-table .v-data-table__mobile-table-row{display:initial}.v-data-table .v-data-table__mobile-row{height:auto;min-height:48px}.v-data-table__empty-wrapper{text-align:center}.v-data-table__mobile-row{align-items:center;display:flex;justify-content:space-between}.v-data-table__mobile-row__header{font-weight:600}.v-application--is-ltr .v-data-table__mobile-row__cell{text-align:right}.v-application--is-rtl .v-data-table__mobile-row__cell{text-align:left}.v-row-group__header td,.v-row-group__summary td{height:35px}.v-data-table__expand-icon{user-select:none;cursor:pointer}.v-data-table__expand-icon--active{transform:rotate(-180deg)}.theme--light.v-data-table .v-data-table-header th.sortable .v-data-table-header__icon{color:rgba(0,0,0,.38)}.theme--light.v-data-table .v-data-table-header th.sortable.active,.theme--light.v-data-table .v-data-table-header th.sortable.active .v-data-table-header__icon,.theme--light.v-data-table .v-data-table-header th.sortable:hover{color:rgba(0,0,0,.87)}.theme--light.v-data-table .v-data-table-header__sort-badge{background-color:rgba(0,0,0,.12);color:rgba(0,0,0,.87)}.theme--dark.v-data-table .v-data-table-header th.sortable .v-data-table-header__icon{color:hsla(0,0%,100%,.5)}.theme--dark.v-data-table .v-data-table-header th.sortable.active,.theme--dark.v-data-table .v-data-table-header th.sortable.active .v-data-table-header__icon,.theme--dark.v-data-table .v-data-table-header th.sortable:hover{color:#fff}.theme--dark.v-data-table .v-data-table-header__sort-badge{background-color:hsla(0,0%,100%,.12);color:#fff}.v-data-table-header th.sortable{pointer-events:auto;cursor:pointer;outline:0}.v-data-table-header th.active .v-data-table-header__icon,.v-data-table-header th:hover .v-data-table-header__icon{transform:none;opacity:1}.v-data-table-header th.desc .v-data-table-header__icon{transform:rotate(-180deg)}.v-data-table-header__icon{display:inline-block;opacity:0;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-data-table-header__sort-badge{display:inline-flex;justify-content:center;align-items:center;border:0;border-radius:50%;min-width:18px;min-height:18px;height:18px;width:18px}.v-data-table-header-mobile th{height:auto}.v-data-table-header-mobile__wrapper{display:flex}.v-data-table-header-mobile__wrapper .v-select{margin-bottom:8px}.v-data-table-header-mobile__wrapper .v-select .v-chip{height:24px}.v-data-table-header-mobile__wrapper .v-select .v-chip__close.desc .v-icon{transform:rotate(-180deg)}.v-data-table-header-mobile__select{min-width:56px;display:flex;align-items:center;justify-content:center}.theme--light.v-data-table{background-color:#fff;color:rgba(0,0,0,.87)}.theme--light.v-data-table .v-data-table__divider{border-right:thin solid rgba(0,0,0,.12)}.theme--light.v-data-table.v-data-table--fixed-header thead th{background:#fff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.12)}.theme--light.v-data-table>.v-data-table__wrapper>table>thead>tr>th{color:rgba(0,0,0,.6)}.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:last-child,.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:not(.v-data-table__mobile-row),.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:last-child,.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:not(.v-data-table__mobile-row),.theme--light.v-data-table>.v-data-table__wrapper>table>thead>tr:last-child>th{border-bottom:thin solid rgba(0,0,0,.12)}.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr.active{background:#f5f5f5}.theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:hover:not(.v-data-table__expanded__content):not(.v-data-table__empty-wrapper){background:#eee}.theme--dark.v-data-table{background-color:#1e1e1e;color:#fff}.theme--dark.v-data-table .v-data-table__divider{border-right:thin solid hsla(0,0%,100%,.12)}.theme--dark.v-data-table.v-data-table--fixed-header thead th{background:#1e1e1e;box-shadow:inset 0 -1px 0 hsla(0,0%,100%,.12)}.theme--dark.v-data-table>.v-data-table__wrapper>table>thead>tr>th{color:hsla(0,0%,100%,.7)}.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:last-child,.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:not(.v-data-table__mobile-row),.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:last-child,.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:not(.v-data-table__mobile-row),.theme--dark.v-data-table>.v-data-table__wrapper>table>thead>tr:last-child>th{border-bottom:thin solid hsla(0,0%,100%,.12)}.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr.active{background:#505050}.theme--dark.v-data-table>.v-data-table__wrapper>table>tbody>tr:hover:not(.v-data-table__expanded__content):not(.v-data-table__empty-wrapper){background:#616161}.v-data-table{line-height:1.5;max-width:100%}.v-data-table>.v-data-table__wrapper>table{width:100%;border-spacing:0}.v-data-table>.v-data-table__wrapper>table>tbody>tr>td,.v-data-table>.v-data-table__wrapper>table>tbody>tr>th,.v-data-table>.v-data-table__wrapper>table>tfoot>tr>td,.v-data-table>.v-data-table__wrapper>table>tfoot>tr>th,.v-data-table>.v-data-table__wrapper>table>thead>tr>td,.v-data-table>.v-data-table__wrapper>table>thead>tr>th{padding:0 16px;transition:height .2s cubic-bezier(.4,0,.6,1)}.v-data-table>.v-data-table__wrapper>table>tbody>tr>th,.v-data-table>.v-data-table__wrapper>table>tfoot>tr>th,.v-data-table>.v-data-table__wrapper>table>thead>tr>th{user-select:none;font-size:.75rem;height:48px}.v-application--is-ltr .v-data-table>.v-data-table__wrapper>table>tbody>tr>th,.v-application--is-ltr .v-data-table>.v-data-table__wrapper>table>tfoot>tr>th,.v-application--is-ltr .v-data-table>.v-data-table__wrapper>table>thead>tr>th{text-align:left}.v-application--is-rtl .v-data-table>.v-data-table__wrapper>table>tbody>tr>th,.v-application--is-rtl .v-data-table>.v-data-table__wrapper>table>tfoot>tr>th,.v-application--is-rtl .v-data-table>.v-data-table__wrapper>table>thead>tr>th{text-align:right}.v-data-table>.v-data-table__wrapper>table>tbody>tr>td,.v-data-table>.v-data-table__wrapper>table>tfoot>tr>td,.v-data-table>.v-data-table__wrapper>table>thead>tr>td{font-size:.875rem;height:48px}.v-data-table__wrapper{overflow-x:auto;overflow-y:hidden}.v-data-table__progress{height:auto!important}.v-data-table__progress th{height:auto!important;border:none!important;padding:0;position:relative}.v-data-table--dense>.v-data-table__wrapper>table>tbody>tr>td,.v-data-table--dense>.v-data-table__wrapper>table>tbody>tr>th,.v-data-table--dense>.v-data-table__wrapper>table>tfoot>tr>td,.v-data-table--dense>.v-data-table__wrapper>table>tfoot>tr>th,.v-data-table--dense>.v-data-table__wrapper>table>thead>tr>td,.v-data-table--dense>.v-data-table__wrapper>table>thead>tr>th{height:32px}.v-data-table--fixed-header>.v-data-table__wrapper,.v-data-table--fixed-height .v-data-table__wrapper{overflow-y:auto}.v-data-table--fixed-header>.v-data-table__wrapper>table>thead>tr>th{border-bottom:0!important;position:sticky;top:0;z-index:2}.v-data-table--fixed-header>.v-data-table__wrapper>table>thead>tr:nth-child(2)>th{top:48px}.v-application--is-ltr .v-data-table--fixed-header .v-data-footer{margin-right:17px}.v-application--is-rtl .v-data-table--fixed-header .v-data-footer{margin-left:17px}.v-data-table--fixed-header.v-data-table--dense>.v-data-table__wrapper>table>thead>tr:nth-child(2)>th{top:32px}.theme--light.v-small-dialog__actions,.theme--light.v-small-dialog__menu-content{background:#fff}.theme--dark.v-small-dialog__actions,.theme--dark.v-small-dialog__menu-content{background:#1e1e1e}.v-small-dialog{display:block}.v-small-dialog__activator{cursor:pointer}.v-small-dialog__activator__content{display:inline-block}.v-small-dialog__content{padding:0 16px}.v-small-dialog__actions{padding:8px;text-align:right;white-space:pre}.v-virtual-table{position:relative}.v-virtual-table__wrapper{display:flex}.v-virtual-table__table{width:100%;height:100%;overflow-x:auto}.theme--light.v-picker__title{background:#e0e0e0}.theme--dark.v-picker__title{background:#616161}.theme--light.v-picker__body{background:#fff}.theme--dark.v-picker__body{background:#424242}.v-picker{border-radius:4px;contain:layout style;display:inline-flex;flex-direction:column;font-size:1rem;vertical-align:top;position:relative}.v-picker--full-width{display:flex;width:100%}.v-picker--full-width>.v-picker__body{margin:initial}.v-picker__title{color:#fff;border-top-left-radius:4px;border-top-right-radius:4px;padding:16px}.v-picker__title__btn{transition:.3s cubic-bezier(.25,.8,.5,1)}.v-picker__title__btn:not(.v-picker__title__btn--active){opacity:.6;cursor:pointer}.v-picker__title__btn:not(.v-picker__title__btn--active):hover:not(:focus){opacity:1}.v-picker__title__btn--readonly{pointer-events:none}.v-picker__title__btn--active{opacity:1}.v-picker__body{height:auto;overflow:hidden;position:relative;z-index:0;flex:1 0 auto;display:flex;flex-direction:column;align-items:center;margin:0 auto}.v-picker__body>div{width:100%}.v-picker__body>div.fade-transition-leave-active{position:absolute}.v-picker--landscape .v-picker__title{border-top-right-radius:0;border-bottom-right-radius:0;width:170px;position:absolute;top:0;height:100%;z-index:1}.v-application--is-ltr .v-picker--landscape .v-picker__title{left:0}.v-application--is-rtl .v-picker--landscape .v-picker__title{right:0}.v-application--is-ltr .v-picker--landscape .v-picker__actions:not(.v-picker__actions--no-title),.v-application--is-ltr .v-picker--landscape .v-picker__body:not(.v-picker__body--no-title){margin-left:170px;margin-right:0}.v-application--is-rtl .v-picker--landscape .v-picker__actions:not(.v-picker__actions--no-title),.v-application--is-rtl .v-picker--landscape .v-picker__body:not(.v-picker__body--no-title){margin-right:170px;margin-left:0}.v-picker--flat{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-date-picker-title{display:flex;justify-content:space-between;flex-direction:column;flex-wrap:wrap;line-height:1}.v-application--is-ltr .v-date-picker-title .v-picker__title__btn{text-align:left}.v-application--is-rtl .v-date-picker-title .v-picker__title__btn{text-align:right}.v-date-picker-title__year{align-items:center;display:inline-flex;font-size:14px;font-weight:500;margin-bottom:8px}.v-date-picker-title__date{font-size:34px;text-align:left;font-weight:500;position:relative;overflow:hidden;padding-bottom:8px;margin-bottom:-8px}.v-date-picker-title__date>div{position:relative}.v-date-picker-title--disabled{pointer-events:none}.theme--light.v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) button:not(:hover):not(:focus){color:rgba(0,0,0,.87)}.theme--light.v-date-picker-header .v-date-picker-header__value--disabled button{color:rgba(0,0,0,.38)}.theme--dark.v-date-picker-header .v-date-picker-header__value:not(.v-date-picker-header__value--disabled) button:not(:hover):not(:focus){color:#fff}.theme--dark.v-date-picker-header .v-date-picker-header__value--disabled button{color:hsla(0,0%,100%,.5)}.v-date-picker-header{padding:4px 16px;align-items:center;display:flex;justify-content:space-between;position:relative}.v-date-picker-header .v-btn{margin:0;z-index:auto}.v-date-picker-header .v-icon{cursor:pointer;user-select:none}.v-date-picker-header__value{flex:1;text-align:center;position:relative;overflow:hidden}.v-date-picker-header__value div{transition:.3s cubic-bezier(.25,.8,.5,1);width:100%}.v-date-picker-header__value button{cursor:pointer;font-weight:700;outline:none;padding:.5rem;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-date-picker-header--disabled{pointer-events:none}.theme--light.v-date-picker-table .v-date-picker-table--date__week,.theme--light.v-date-picker-table th{color:rgba(0,0,0,.38)}.theme--dark.v-date-picker-table .v-date-picker-table--date__week,.theme--dark.v-date-picker-table th{color:hsla(0,0%,100%,.5)}.v-date-picker-table{position:relative;padding:0 12px;height:242px}.v-date-picker-table table{transition:.3s cubic-bezier(.25,.8,.5,1);top:0;table-layout:fixed;width:100%}.v-date-picker-table td,.v-date-picker-table th{text-align:center;position:relative}.v-date-picker-table th{font-size:12px}.v-date-picker-table--date .v-btn{height:32px;width:32px}.v-date-picker-table .v-btn{z-index:auto;margin:0;font-size:12px}.v-date-picker-table .v-btn.v-btn--active{color:#fff}.v-date-picker-table--month td{width:33.333333%;height:56px;vertical-align:middle;text-align:center}.v-date-picker-table--month td .v-btn{margin:0 auto;max-width:140px;min-width:40px;width:100%}.v-date-picker-table--date th{padding:8px 0;font-weight:600}.v-date-picker-table--date td{width:45px}.v-date-picker-table__events{height:8px;left:0;position:absolute;text-align:center;white-space:pre;width:100%}.v-date-picker-table__events>div{border-radius:50%;display:inline-block;height:8px;margin:0 1px;width:8px}.v-date-picker-table--date .v-date-picker-table__events{bottom:6px}.v-date-picker-table--month .v-date-picker-table__events{bottom:8px}.v-date-picker-table__current .v-date-picker-table__events{margin-bottom:-1px}.v-date-picker-table--disabled{pointer-events:none}.v-date-picker-years{font-size:16px;font-weight:400;height:290px;list-style-type:none;overflow:auto;text-align:center}.v-date-picker-years.v-date-picker-years{padding:0}.v-date-picker-years li{cursor:pointer;padding:8px 0;transition:none}.v-date-picker-years li.active{font-size:26px;font-weight:500;padding:10px 0}.v-date-picker-years li:hover{background:rgba(0,0,0,.12)}.v-picker--landscape .v-date-picker-years{padding:0;height:290px}.theme--light.v-expansion-panels .v-expansion-panel{background-color:#fff;color:rgba(0,0,0,.87)}.theme--light.v-expansion-panels .v-expansion-panel--disabled{color:rgba(0,0,0,.38)}.theme--light.v-expansion-panels .v-expansion-panel:not(:first-child):after{border-color:rgba(0,0,0,.12)}.theme--light.v-expansion-panels .v-expansion-panel-header .v-expansion-panel-header__icon .v-icon{color:rgba(0,0,0,.54)}.theme--light.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header:hover:before{opacity:.04}.theme--light.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:before,.theme--light.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:hover:before,.theme--light.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header:focus:before{opacity:.12}.theme--light.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:focus:before{opacity:.16}.theme--light.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover:hover:before{opacity:.04}.theme--light.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:before,.theme--light.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:hover:before,.theme--light.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover:focus:before{opacity:.12}.theme--light.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:focus:before{opacity:.16}.theme--dark.v-expansion-panels .v-expansion-panel{background-color:#1e1e1e;color:#fff}.theme--dark.v-expansion-panels .v-expansion-panel--disabled{color:hsla(0,0%,100%,.5)}.theme--dark.v-expansion-panels .v-expansion-panel:not(:first-child):after{border-color:hsla(0,0%,100%,.12)}.theme--dark.v-expansion-panels .v-expansion-panel-header .v-expansion-panel-header__icon .v-icon{color:#fff}.theme--dark.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header:hover:before{opacity:.08}.theme--dark.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:before,.theme--dark.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:hover:before,.theme--dark.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header:focus:before{opacity:.24}.theme--dark.v-expansion-panels.v-expansion-panels--focusable .v-expansion-panel-header--active:focus:before{opacity:.32}.theme--dark.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover:hover:before{opacity:.08}.theme--dark.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:before,.theme--dark.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:hover:before,.theme--dark.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover:focus:before{opacity:.24}.theme--dark.v-expansion-panels.v-expansion-panels--hover>.v-expansion-panel>.v-expansion-panel-header:hover--active:focus:before{opacity:.32}.v-expansion-panels{border-radius:4px;display:flex;flex-wrap:wrap;justify-content:center;list-style-type:none;padding:0;width:100%;z-index:1}.v-expansion-panels>*{cursor:auto}.v-expansion-panels>:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.v-expansion-panels>:last-child{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}.v-expansion-panels:not(.v-expansion-panels--accordion):not(.v-expansion-panels--tile)>.v-expansion-panel--active{border-radius:4px}.v-expansion-panels:not(.v-expansion-panels--accordion):not(.v-expansion-panels--tile)>.v-expansion-panel--active+.v-expansion-panel{border-top-left-radius:4px;border-top-right-radius:4px}.v-expansion-panels:not(.v-expansion-panels--accordion):not(.v-expansion-panels--tile)>.v-expansion-panel--next-active{border-bottom-left-radius:4px;border-bottom-right-radius:4px}.v-expansion-panels:not(.v-expansion-panels--accordion):not(.v-expansion-panels--tile)>.v-expansion-panel--next-active .v-expansion-panel-header{border-bottom-left-radius:inherit;border-bottom-right-radius:inherit}.v-expansion-panel{flex:1 0 100%;max-width:100%;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-expansion-panel:before{border-radius:inherit;bottom:0;content:"";left:0;position:absolute;right:0;top:0;z-index:-1;transition:box-shadow .28s cubic-bezier(.4,0,.2,1);will-change:box-shadow;box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-expansion-panel:not(:first-child):after{border-top:thin solid;content:"";left:0;position:absolute;right:0;top:0;transition:border-color .2s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1)}.v-expansion-panel--disabled .v-expansion-panel-header{pointer-events:none}.v-expansion-panel--active+.v-expansion-panel,.v-expansion-panel--active:not(:first-child){margin-top:16px}.v-expansion-panel--active+.v-expansion-panel:after,.v-expansion-panel--active:not(:first-child):after{opacity:0}.v-expansion-panel--active>.v-expansion-panel-header{min-height:64px}.v-expansion-panel--active>.v-expansion-panel-header--active .v-expansion-panel-header__icon:not(.v-expansion-panel-header__icon--disable-rotate) .v-icon{transform:rotate(-180deg)}.v-expansion-panel-header__icon{display:inline-flex;margin-bottom:-4px;margin-top:-4px;user-select:none}.v-application--is-ltr .v-expansion-panel-header__icon{margin-left:auto}.v-application--is-rtl .v-expansion-panel-header__icon{margin-right:auto}.v-expansion-panel-header{align-items:center;border-top-left-radius:inherit;border-top-right-radius:inherit;display:flex;font-size:.9375rem;line-height:1;min-height:48px;outline:none;padding:16px 24px;position:relative;transition:min-height .3s cubic-bezier(.25,.8,.5,1);width:100%}.v-application--is-ltr .v-expansion-panel-header{text-align:left}.v-application--is-rtl .v-expansion-panel-header{text-align:right}.v-expansion-panel-header:not(.v-expansion-panel-header--mousedown):focus:before{opacity:.12}.v-expansion-panel-header:before{background-color:currentColor;border-radius:inherit;bottom:0;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:opacity .3s cubic-bezier(.25,.8,.5,1)}.v-expansion-panel-header>:not(.v-expansion-panel-header__icon){flex:1 1 auto}.v-expansion-panel-content{display:flex}.v-expansion-panel-content__wrap{padding:0 24px 16px;flex:1 1 auto;max-width:100%}.v-expansion-panels--accordion>.v-expansion-panel{margin-top:0}.v-expansion-panels--accordion>.v-expansion-panel:after{opacity:1}.v-expansion-panels--popout>.v-expansion-panel{max-width:calc(100% - 32px)}.v-expansion-panels--popout>.v-expansion-panel--active{max-width:calc(100% + 16px)}.v-expansion-panels--inset>.v-expansion-panel{max-width:100%}.v-expansion-panels--inset>.v-expansion-panel--active{max-width:calc(100% - 32px)}.v-expansion-panels--flat>.v-expansion-panel:after{border-top:none}.v-expansion-panels--flat>.v-expansion-panel:before{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-expansion-panels--tile,.v-expansion-panels--tile>.v-expansion-panel:before{border-radius:0}.theme--light.v-file-input .v-file-input__text{color:rgba(0,0,0,.87)}.theme--light.v-file-input .v-file-input__text--placeholder{color:rgba(0,0,0,.6)}.theme--light.v-file-input.v-input--is-disabled .v-file-input__text,.theme--light.v-file-input.v-input--is-disabled .v-file-input__text .v-file-input__text--placeholder{color:rgba(0,0,0,.38)}.theme--dark.v-file-input .v-file-input__text{color:#fff}.theme--dark.v-file-input .v-file-input__text--placeholder{color:hsla(0,0%,100%,.7)}.theme--dark.v-file-input.v-input--is-disabled .v-file-input__text,.theme--dark.v-file-input.v-input--is-disabled .v-file-input__text .v-file-input__text--placeholder{color:hsla(0,0%,100%,.5)}.v-file-input input[type=file]{left:0;opacity:0;position:absolute;max-width:0;width:0}.v-file-input .v-file-input__text{align-items:center;align-self:stretch;display:flex;flex-wrap:wrap;width:100%}.v-file-input .v-file-input__text.v-file-input__text--chips{flex-wrap:wrap}.v-file-input .v-file-input__text .v-chip{margin:4px}.v-file-input .v-text-field__slot{min-height:32px}.v-file-input.v-text-field--filled:not(.v-text-field--single-line) .v-file-input__text{padding-top:22px}.v-file-input.v-text-field--outlined .v-text-field__slot{padding:6px 0}.v-file-input.v-text-field--outlined.v-input--dense .v-text-field__slot{padding:3px 0}.theme--light.v-footer{background-color:#f5f5f5;color:rgba(0,0,0,.87)}.theme--dark.v-footer{background-color:#272727;color:#fff}.v-sheet.v-footer{border-radius:0}.v-sheet.v-footer:not(.v-sheet--outlined){box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.v-sheet.v-footer.v-sheet--shaped{border-radius:24px 0}.v-footer{align-items:center;display:flex;flex:0 1 auto!important;flex-wrap:wrap;padding:6px 16px;position:relative;transition-duration:.2s;transition-property:background-color,left,right;transition-timing-function:cubic-bezier(.4,0,.2,1)}.v-footer:not([data-booted=true]){transition:none!important}.v-footer--absolute,.v-footer--fixed{z-index:3}.v-footer--absolute{position:absolute}.v-footer--absolute:not(.v-footer--inset){width:100%}.v-footer--fixed{position:fixed}.v-footer--padless{padding:0}.container.grow-shrink-0{flex-grow:0;flex-shrink:0}.container.fill-height{align-items:center;display:flex;flex-wrap:wrap}.container.fill-height>.row{flex:1 1 100%;max-width:calc(100% + 24px)}.container.fill-height>.layout{height:100%;flex:1 1 auto}.container.fill-height>.layout.grow-shrink-0{flex-grow:0;flex-shrink:0}.container.grid-list-xs .layout .flex{padding:1px}.container.grid-list-xs .layout:only-child{margin:-1px}.container.grid-list-xs .layout:not(:only-child){margin:auto -1px}.container.grid-list-xs :not(:only-child) .layout:first-child{margin-top:-1px}.container.grid-list-xs :not(:only-child) .layout:last-child{margin-bottom:-1px}.container.grid-list-sm .layout .flex{padding:2px}.container.grid-list-sm .layout:only-child{margin:-2px}.container.grid-list-sm .layout:not(:only-child){margin:auto -2px}.container.grid-list-sm :not(:only-child) .layout:first-child{margin-top:-2px}.container.grid-list-sm :not(:only-child) .layout:last-child{margin-bottom:-2px}.container.grid-list-md .layout .flex{padding:4px}.container.grid-list-md .layout:only-child{margin:-4px}.container.grid-list-md .layout:not(:only-child){margin:auto -4px}.container.grid-list-md :not(:only-child) .layout:first-child{margin-top:-4px}.container.grid-list-md :not(:only-child) .layout:last-child{margin-bottom:-4px}.container.grid-list-lg .layout .flex{padding:8px}.container.grid-list-lg .layout:only-child{margin:-8px}.container.grid-list-lg .layout:not(:only-child){margin:auto -8px}.container.grid-list-lg :not(:only-child) .layout:first-child{margin-top:-8px}.container.grid-list-lg :not(:only-child) .layout:last-child{margin-bottom:-8px}.container.grid-list-xl .layout .flex{padding:12px}.container.grid-list-xl .layout:only-child{margin:-12px}.container.grid-list-xl .layout:not(:only-child){margin:auto -12px}.container.grid-list-xl :not(:only-child) .layout:first-child{margin-top:-12px}.container.grid-list-xl :not(:only-child) .layout:last-child{margin-bottom:-12px}.layout{display:flex;flex:1 1 auto;flex-wrap:nowrap;min-width:0}.layout.reverse{flex-direction:row-reverse}.layout.column{flex-direction:column}.layout.column.reverse{flex-direction:column-reverse}.layout.column>.flex{max-width:100%}.layout.wrap{flex-wrap:wrap}.layout.grow-shrink-0{flex-grow:0;flex-shrink:0}@media (min-width:0){.flex.xs12{flex-basis:100%;flex-grow:0;max-width:100%}.flex.order-xs12{order:12}.flex.xs11{flex-basis:91.6666666667%;flex-grow:0;max-width:91.6666666667%}.flex.order-xs11{order:11}.flex.xs10{flex-basis:83.3333333333%;flex-grow:0;max-width:83.3333333333%}.flex.order-xs10{order:10}.flex.xs9{flex-basis:75%;flex-grow:0;max-width:75%}.flex.order-xs9{order:9}.flex.xs8{flex-basis:66.6666666667%;flex-grow:0;max-width:66.6666666667%}.flex.order-xs8{order:8}.flex.xs7{flex-basis:58.3333333333%;flex-grow:0;max-width:58.3333333333%}.flex.order-xs7{order:7}.flex.xs6{flex-basis:50%;flex-grow:0;max-width:50%}.flex.order-xs6{order:6}.flex.xs5{flex-basis:41.6666666667%;flex-grow:0;max-width:41.6666666667%}.flex.order-xs5{order:5}.flex.xs4{flex-basis:33.3333333333%;flex-grow:0;max-width:33.3333333333%}.flex.order-xs4{order:4}.flex.xs3{flex-basis:25%;flex-grow:0;max-width:25%}.flex.order-xs3{order:3}.flex.xs2{flex-basis:16.6666666667%;flex-grow:0;max-width:16.6666666667%}.flex.order-xs2{order:2}.flex.xs1{flex-basis:8.3333333333%;flex-grow:0;max-width:8.3333333333%}.flex.order-xs1{order:1}.v-application--is-ltr .flex.offset-xs12{margin-left:100%}.v-application--is-rtl .flex.offset-xs12{margin-right:100%}.v-application--is-ltr .flex.offset-xs11{margin-left:91.6666666667%}.v-application--is-rtl .flex.offset-xs11{margin-right:91.6666666667%}.v-application--is-ltr .flex.offset-xs10{margin-left:83.3333333333%}.v-application--is-rtl .flex.offset-xs10{margin-right:83.3333333333%}.v-application--is-ltr .flex.offset-xs9{margin-left:75%}.v-application--is-rtl .flex.offset-xs9{margin-right:75%}.v-application--is-ltr .flex.offset-xs8{margin-left:66.6666666667%}.v-application--is-rtl .flex.offset-xs8{margin-right:66.6666666667%}.v-application--is-ltr .flex.offset-xs7{margin-left:58.3333333333%}.v-application--is-rtl .flex.offset-xs7{margin-right:58.3333333333%}.v-application--is-ltr .flex.offset-xs6{margin-left:50%}.v-application--is-rtl .flex.offset-xs6{margin-right:50%}.v-application--is-ltr .flex.offset-xs5{margin-left:41.6666666667%}.v-application--is-rtl .flex.offset-xs5{margin-right:41.6666666667%}.v-application--is-ltr .flex.offset-xs4{margin-left:33.3333333333%}.v-application--is-rtl .flex.offset-xs4{margin-right:33.3333333333%}.v-application--is-ltr .flex.offset-xs3{margin-left:25%}.v-application--is-rtl .flex.offset-xs3{margin-right:25%}.v-application--is-ltr .flex.offset-xs2{margin-left:16.6666666667%}.v-application--is-rtl .flex.offset-xs2{margin-right:16.6666666667%}.v-application--is-ltr .flex.offset-xs1{margin-left:8.3333333333%}.v-application--is-rtl .flex.offset-xs1{margin-right:8.3333333333%}.v-application--is-ltr .flex.offset-xs0{margin-left:0}.v-application--is-rtl .flex.offset-xs0{margin-right:0}}@media (min-width:600px){.flex.sm12{flex-basis:100%;flex-grow:0;max-width:100%}.flex.order-sm12{order:12}.flex.sm11{flex-basis:91.6666666667%;flex-grow:0;max-width:91.6666666667%}.flex.order-sm11{order:11}.flex.sm10{flex-basis:83.3333333333%;flex-grow:0;max-width:83.3333333333%}.flex.order-sm10{order:10}.flex.sm9{flex-basis:75%;flex-grow:0;max-width:75%}.flex.order-sm9{order:9}.flex.sm8{flex-basis:66.6666666667%;flex-grow:0;max-width:66.6666666667%}.flex.order-sm8{order:8}.flex.sm7{flex-basis:58.3333333333%;flex-grow:0;max-width:58.3333333333%}.flex.order-sm7{order:7}.flex.sm6{flex-basis:50%;flex-grow:0;max-width:50%}.flex.order-sm6{order:6}.flex.sm5{flex-basis:41.6666666667%;flex-grow:0;max-width:41.6666666667%}.flex.order-sm5{order:5}.flex.sm4{flex-basis:33.3333333333%;flex-grow:0;max-width:33.3333333333%}.flex.order-sm4{order:4}.flex.sm3{flex-basis:25%;flex-grow:0;max-width:25%}.flex.order-sm3{order:3}.flex.sm2{flex-basis:16.6666666667%;flex-grow:0;max-width:16.6666666667%}.flex.order-sm2{order:2}.flex.sm1{flex-basis:8.3333333333%;flex-grow:0;max-width:8.3333333333%}.flex.order-sm1{order:1}.v-application--is-ltr .flex.offset-sm12{margin-left:100%}.v-application--is-rtl .flex.offset-sm12{margin-right:100%}.v-application--is-ltr .flex.offset-sm11{margin-left:91.6666666667%}.v-application--is-rtl .flex.offset-sm11{margin-right:91.6666666667%}.v-application--is-ltr .flex.offset-sm10{margin-left:83.3333333333%}.v-application--is-rtl .flex.offset-sm10{margin-right:83.3333333333%}.v-application--is-ltr .flex.offset-sm9{margin-left:75%}.v-application--is-rtl .flex.offset-sm9{margin-right:75%}.v-application--is-ltr .flex.offset-sm8{margin-left:66.6666666667%}.v-application--is-rtl .flex.offset-sm8{margin-right:66.6666666667%}.v-application--is-ltr .flex.offset-sm7{margin-left:58.3333333333%}.v-application--is-rtl .flex.offset-sm7{margin-right:58.3333333333%}.v-application--is-ltr .flex.offset-sm6{margin-left:50%}.v-application--is-rtl .flex.offset-sm6{margin-right:50%}.v-application--is-ltr .flex.offset-sm5{margin-left:41.6666666667%}.v-application--is-rtl .flex.offset-sm5{margin-right:41.6666666667%}.v-application--is-ltr .flex.offset-sm4{margin-left:33.3333333333%}.v-application--is-rtl .flex.offset-sm4{margin-right:33.3333333333%}.v-application--is-ltr .flex.offset-sm3{margin-left:25%}.v-application--is-rtl .flex.offset-sm3{margin-right:25%}.v-application--is-ltr .flex.offset-sm2{margin-left:16.6666666667%}.v-application--is-rtl .flex.offset-sm2{margin-right:16.6666666667%}.v-application--is-ltr .flex.offset-sm1{margin-left:8.3333333333%}.v-application--is-rtl .flex.offset-sm1{margin-right:8.3333333333%}.v-application--is-ltr .flex.offset-sm0{margin-left:0}.v-application--is-rtl .flex.offset-sm0{margin-right:0}}@media (min-width:960px){.flex.md12{flex-basis:100%;flex-grow:0;max-width:100%}.flex.order-md12{order:12}.flex.md11{flex-basis:91.6666666667%;flex-grow:0;max-width:91.6666666667%}.flex.order-md11{order:11}.flex.md10{flex-basis:83.3333333333%;flex-grow:0;max-width:83.3333333333%}.flex.order-md10{order:10}.flex.md9{flex-basis:75%;flex-grow:0;max-width:75%}.flex.order-md9{order:9}.flex.md8{flex-basis:66.6666666667%;flex-grow:0;max-width:66.6666666667%}.flex.order-md8{order:8}.flex.md7{flex-basis:58.3333333333%;flex-grow:0;max-width:58.3333333333%}.flex.order-md7{order:7}.flex.md6{flex-basis:50%;flex-grow:0;max-width:50%}.flex.order-md6{order:6}.flex.md5{flex-basis:41.6666666667%;flex-grow:0;max-width:41.6666666667%}.flex.order-md5{order:5}.flex.md4{flex-basis:33.3333333333%;flex-grow:0;max-width:33.3333333333%}.flex.order-md4{order:4}.flex.md3{flex-basis:25%;flex-grow:0;max-width:25%}.flex.order-md3{order:3}.flex.md2{flex-basis:16.6666666667%;flex-grow:0;max-width:16.6666666667%}.flex.order-md2{order:2}.flex.md1{flex-basis:8.3333333333%;flex-grow:0;max-width:8.3333333333%}.flex.order-md1{order:1}.v-application--is-ltr .flex.offset-md12{margin-left:100%}.v-application--is-rtl .flex.offset-md12{margin-right:100%}.v-application--is-ltr .flex.offset-md11{margin-left:91.6666666667%}.v-application--is-rtl .flex.offset-md11{margin-right:91.6666666667%}.v-application--is-ltr .flex.offset-md10{margin-left:83.3333333333%}.v-application--is-rtl .flex.offset-md10{margin-right:83.3333333333%}.v-application--is-ltr .flex.offset-md9{margin-left:75%}.v-application--is-rtl .flex.offset-md9{margin-right:75%}.v-application--is-ltr .flex.offset-md8{margin-left:66.6666666667%}.v-application--is-rtl .flex.offset-md8{margin-right:66.6666666667%}.v-application--is-ltr .flex.offset-md7{margin-left:58.3333333333%}.v-application--is-rtl .flex.offset-md7{margin-right:58.3333333333%}.v-application--is-ltr .flex.offset-md6{margin-left:50%}.v-application--is-rtl .flex.offset-md6{margin-right:50%}.v-application--is-ltr .flex.offset-md5{margin-left:41.6666666667%}.v-application--is-rtl .flex.offset-md5{margin-right:41.6666666667%}.v-application--is-ltr .flex.offset-md4{margin-left:33.3333333333%}.v-application--is-rtl .flex.offset-md4{margin-right:33.3333333333%}.v-application--is-ltr .flex.offset-md3{margin-left:25%}.v-application--is-rtl .flex.offset-md3{margin-right:25%}.v-application--is-ltr .flex.offset-md2{margin-left:16.6666666667%}.v-application--is-rtl .flex.offset-md2{margin-right:16.6666666667%}.v-application--is-ltr .flex.offset-md1{margin-left:8.3333333333%}.v-application--is-rtl .flex.offset-md1{margin-right:8.3333333333%}.v-application--is-ltr .flex.offset-md0{margin-left:0}.v-application--is-rtl .flex.offset-md0{margin-right:0}}@media (min-width:1264px){.flex.lg12{flex-basis:100%;flex-grow:0;max-width:100%}.flex.order-lg12{order:12}.flex.lg11{flex-basis:91.6666666667%;flex-grow:0;max-width:91.6666666667%}.flex.order-lg11{order:11}.flex.lg10{flex-basis:83.3333333333%;flex-grow:0;max-width:83.3333333333%}.flex.order-lg10{order:10}.flex.lg9{flex-basis:75%;flex-grow:0;max-width:75%}.flex.order-lg9{order:9}.flex.lg8{flex-basis:66.6666666667%;flex-grow:0;max-width:66.6666666667%}.flex.order-lg8{order:8}.flex.lg7{flex-basis:58.3333333333%;flex-grow:0;max-width:58.3333333333%}.flex.order-lg7{order:7}.flex.lg6{flex-basis:50%;flex-grow:0;max-width:50%}.flex.order-lg6{order:6}.flex.lg5{flex-basis:41.6666666667%;flex-grow:0;max-width:41.6666666667%}.flex.order-lg5{order:5}.flex.lg4{flex-basis:33.3333333333%;flex-grow:0;max-width:33.3333333333%}.flex.order-lg4{order:4}.flex.lg3{flex-basis:25%;flex-grow:0;max-width:25%}.flex.order-lg3{order:3}.flex.lg2{flex-basis:16.6666666667%;flex-grow:0;max-width:16.6666666667%}.flex.order-lg2{order:2}.flex.lg1{flex-basis:8.3333333333%;flex-grow:0;max-width:8.3333333333%}.flex.order-lg1{order:1}.v-application--is-ltr .flex.offset-lg12{margin-left:100%}.v-application--is-rtl .flex.offset-lg12{margin-right:100%}.v-application--is-ltr .flex.offset-lg11{margin-left:91.6666666667%}.v-application--is-rtl .flex.offset-lg11{margin-right:91.6666666667%}.v-application--is-ltr .flex.offset-lg10{margin-left:83.3333333333%}.v-application--is-rtl .flex.offset-lg10{margin-right:83.3333333333%}.v-application--is-ltr .flex.offset-lg9{margin-left:75%}.v-application--is-rtl .flex.offset-lg9{margin-right:75%}.v-application--is-ltr .flex.offset-lg8{margin-left:66.6666666667%}.v-application--is-rtl .flex.offset-lg8{margin-right:66.6666666667%}.v-application--is-ltr .flex.offset-lg7{margin-left:58.3333333333%}.v-application--is-rtl .flex.offset-lg7{margin-right:58.3333333333%}.v-application--is-ltr .flex.offset-lg6{margin-left:50%}.v-application--is-rtl .flex.offset-lg6{margin-right:50%}.v-application--is-ltr .flex.offset-lg5{margin-left:41.6666666667%}.v-application--is-rtl .flex.offset-lg5{margin-right:41.6666666667%}.v-application--is-ltr .flex.offset-lg4{margin-left:33.3333333333%}.v-application--is-rtl .flex.offset-lg4{margin-right:33.3333333333%}.v-application--is-ltr .flex.offset-lg3{margin-left:25%}.v-application--is-rtl .flex.offset-lg3{margin-right:25%}.v-application--is-ltr .flex.offset-lg2{margin-left:16.6666666667%}.v-application--is-rtl .flex.offset-lg2{margin-right:16.6666666667%}.v-application--is-ltr .flex.offset-lg1{margin-left:8.3333333333%}.v-application--is-rtl .flex.offset-lg1{margin-right:8.3333333333%}.v-application--is-ltr .flex.offset-lg0{margin-left:0}.v-application--is-rtl .flex.offset-lg0{margin-right:0}}@media (min-width:1904px){.flex.xl12{flex-basis:100%;flex-grow:0;max-width:100%}.flex.order-xl12{order:12}.flex.xl11{flex-basis:91.6666666667%;flex-grow:0;max-width:91.6666666667%}.flex.order-xl11{order:11}.flex.xl10{flex-basis:83.3333333333%;flex-grow:0;max-width:83.3333333333%}.flex.order-xl10{order:10}.flex.xl9{flex-basis:75%;flex-grow:0;max-width:75%}.flex.order-xl9{order:9}.flex.xl8{flex-basis:66.6666666667%;flex-grow:0;max-width:66.6666666667%}.flex.order-xl8{order:8}.flex.xl7{flex-basis:58.3333333333%;flex-grow:0;max-width:58.3333333333%}.flex.order-xl7{order:7}.flex.xl6{flex-basis:50%;flex-grow:0;max-width:50%}.flex.order-xl6{order:6}.flex.xl5{flex-basis:41.6666666667%;flex-grow:0;max-width:41.6666666667%}.flex.order-xl5{order:5}.flex.xl4{flex-basis:33.3333333333%;flex-grow:0;max-width:33.3333333333%}.flex.order-xl4{order:4}.flex.xl3{flex-basis:25%;flex-grow:0;max-width:25%}.flex.order-xl3{order:3}.flex.xl2{flex-basis:16.6666666667%;flex-grow:0;max-width:16.6666666667%}.flex.order-xl2{order:2}.flex.xl1{flex-basis:8.3333333333%;flex-grow:0;max-width:8.3333333333%}.flex.order-xl1{order:1}.v-application--is-ltr .flex.offset-xl12{margin-left:100%}.v-application--is-rtl .flex.offset-xl12{margin-right:100%}.v-application--is-ltr .flex.offset-xl11{margin-left:91.6666666667%}.v-application--is-rtl .flex.offset-xl11{margin-right:91.6666666667%}.v-application--is-ltr .flex.offset-xl10{margin-left:83.3333333333%}.v-application--is-rtl .flex.offset-xl10{margin-right:83.3333333333%}.v-application--is-ltr .flex.offset-xl9{margin-left:75%}.v-application--is-rtl .flex.offset-xl9{margin-right:75%}.v-application--is-ltr .flex.offset-xl8{margin-left:66.6666666667%}.v-application--is-rtl .flex.offset-xl8{margin-right:66.6666666667%}.v-application--is-ltr .flex.offset-xl7{margin-left:58.3333333333%}.v-application--is-rtl .flex.offset-xl7{margin-right:58.3333333333%}.v-application--is-ltr .flex.offset-xl6{margin-left:50%}.v-application--is-rtl .flex.offset-xl6{margin-right:50%}.v-application--is-ltr .flex.offset-xl5{margin-left:41.6666666667%}.v-application--is-rtl .flex.offset-xl5{margin-right:41.6666666667%}.v-application--is-ltr .flex.offset-xl4{margin-left:33.3333333333%}.v-application--is-rtl .flex.offset-xl4{margin-right:33.3333333333%}.v-application--is-ltr .flex.offset-xl3{margin-left:25%}.v-application--is-rtl .flex.offset-xl3{margin-right:25%}.v-application--is-ltr .flex.offset-xl2{margin-left:16.6666666667%}.v-application--is-rtl .flex.offset-xl2{margin-right:16.6666666667%}.v-application--is-ltr .flex.offset-xl1{margin-left:8.3333333333%}.v-application--is-rtl .flex.offset-xl1{margin-right:8.3333333333%}.v-application--is-ltr .flex.offset-xl0{margin-left:0}.v-application--is-rtl .flex.offset-xl0{margin-right:0}}.child-flex>*,.flex{flex:1 1 auto;max-width:100%}.child-flex>.grow-shrink-0,.flex.grow-shrink-0{flex-grow:0;flex-shrink:0}.grow,.spacer{flex-grow:1!important}.grow{flex-shrink:0!important}.shrink{flex-grow:0!important;flex-shrink:1!important}.fill-height{height:100%}.container{width:100%;padding:12px;margin-right:auto;margin-left:auto}@media (min-width:960px){.container{max-width:900px}}@media (min-width:1264px){.container{max-width:1185px}}@media (min-width:1904px){.container{max-width:1785px}}.container--fluid{max-width:100%}.row{display:flex;flex-wrap:wrap;flex:1 1 auto;margin-right:-12px;margin-left:-12px}.row--dense{margin-right:-4px;margin-left:-4px}.row--dense>.col,.row--dense>[class*=col-]{padding:4px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding:0}.col,.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col-auto,.col-lg,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-auto,.col-md,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md-auto,.col-sm,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-auto{width:100%;padding:12px}.col{flex-basis:0;flex-grow:1;max-width:100%}.col-auto{flex:0 0 auto;width:auto;max-width:100%}.col-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-3{flex:0 0 25%;max-width:25%}.col-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-6{flex:0 0 50%;max-width:50%}.col-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-9{flex:0 0 75%;max-width:75%}.col-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-12{flex:0 0 100%;max-width:100%}.v-application--is-ltr .offset-1{margin-left:8.3333333333%}.v-application--is-rtl .offset-1{margin-right:8.3333333333%}.v-application--is-ltr .offset-2{margin-left:16.6666666667%}.v-application--is-rtl .offset-2{margin-right:16.6666666667%}.v-application--is-ltr .offset-3{margin-left:25%}.v-application--is-rtl .offset-3{margin-right:25%}.v-application--is-ltr .offset-4{margin-left:33.3333333333%}.v-application--is-rtl .offset-4{margin-right:33.3333333333%}.v-application--is-ltr .offset-5{margin-left:41.6666666667%}.v-application--is-rtl .offset-5{margin-right:41.6666666667%}.v-application--is-ltr .offset-6{margin-left:50%}.v-application--is-rtl .offset-6{margin-right:50%}.v-application--is-ltr .offset-7{margin-left:58.3333333333%}.v-application--is-rtl .offset-7{margin-right:58.3333333333%}.v-application--is-ltr .offset-8{margin-left:66.6666666667%}.v-application--is-rtl .offset-8{margin-right:66.6666666667%}.v-application--is-ltr .offset-9{margin-left:75%}.v-application--is-rtl .offset-9{margin-right:75%}.v-application--is-ltr .offset-10{margin-left:83.3333333333%}.v-application--is-rtl .offset-10{margin-right:83.3333333333%}.v-application--is-ltr .offset-11{margin-left:91.6666666667%}.v-application--is-rtl .offset-11{margin-right:91.6666666667%}@media (min-width:600px){.col-sm{flex-basis:0;flex-grow:1;max-width:100%}.col-sm-auto{flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-sm-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-sm-3{flex:0 0 25%;max-width:25%}.col-sm-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-sm-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-sm-6{flex:0 0 50%;max-width:50%}.col-sm-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-sm-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-sm-9{flex:0 0 75%;max-width:75%}.col-sm-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-sm-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-sm-12{flex:0 0 100%;max-width:100%}.v-application--is-ltr .offset-sm-0{margin-left:0}.v-application--is-rtl .offset-sm-0{margin-right:0}.v-application--is-ltr .offset-sm-1{margin-left:8.3333333333%}.v-application--is-rtl .offset-sm-1{margin-right:8.3333333333%}.v-application--is-ltr .offset-sm-2{margin-left:16.6666666667%}.v-application--is-rtl .offset-sm-2{margin-right:16.6666666667%}.v-application--is-ltr .offset-sm-3{margin-left:25%}.v-application--is-rtl .offset-sm-3{margin-right:25%}.v-application--is-ltr .offset-sm-4{margin-left:33.3333333333%}.v-application--is-rtl .offset-sm-4{margin-right:33.3333333333%}.v-application--is-ltr .offset-sm-5{margin-left:41.6666666667%}.v-application--is-rtl .offset-sm-5{margin-right:41.6666666667%}.v-application--is-ltr .offset-sm-6{margin-left:50%}.v-application--is-rtl .offset-sm-6{margin-right:50%}.v-application--is-ltr .offset-sm-7{margin-left:58.3333333333%}.v-application--is-rtl .offset-sm-7{margin-right:58.3333333333%}.v-application--is-ltr .offset-sm-8{margin-left:66.6666666667%}.v-application--is-rtl .offset-sm-8{margin-right:66.6666666667%}.v-application--is-ltr .offset-sm-9{margin-left:75%}.v-application--is-rtl .offset-sm-9{margin-right:75%}.v-application--is-ltr .offset-sm-10{margin-left:83.3333333333%}.v-application--is-rtl .offset-sm-10{margin-right:83.3333333333%}.v-application--is-ltr .offset-sm-11{margin-left:91.6666666667%}.v-application--is-rtl .offset-sm-11{margin-right:91.6666666667%}}@media (min-width:960px){.col-md{flex-basis:0;flex-grow:1;max-width:100%}.col-md-auto{flex:0 0 auto;width:auto;max-width:100%}.col-md-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-md-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-md-3{flex:0 0 25%;max-width:25%}.col-md-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-md-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-md-6{flex:0 0 50%;max-width:50%}.col-md-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-md-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-md-9{flex:0 0 75%;max-width:75%}.col-md-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-md-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-md-12{flex:0 0 100%;max-width:100%}.v-application--is-ltr .offset-md-0{margin-left:0}.v-application--is-rtl .offset-md-0{margin-right:0}.v-application--is-ltr .offset-md-1{margin-left:8.3333333333%}.v-application--is-rtl .offset-md-1{margin-right:8.3333333333%}.v-application--is-ltr .offset-md-2{margin-left:16.6666666667%}.v-application--is-rtl .offset-md-2{margin-right:16.6666666667%}.v-application--is-ltr .offset-md-3{margin-left:25%}.v-application--is-rtl .offset-md-3{margin-right:25%}.v-application--is-ltr .offset-md-4{margin-left:33.3333333333%}.v-application--is-rtl .offset-md-4{margin-right:33.3333333333%}.v-application--is-ltr .offset-md-5{margin-left:41.6666666667%}.v-application--is-rtl .offset-md-5{margin-right:41.6666666667%}.v-application--is-ltr .offset-md-6{margin-left:50%}.v-application--is-rtl .offset-md-6{margin-right:50%}.v-application--is-ltr .offset-md-7{margin-left:58.3333333333%}.v-application--is-rtl .offset-md-7{margin-right:58.3333333333%}.v-application--is-ltr .offset-md-8{margin-left:66.6666666667%}.v-application--is-rtl .offset-md-8{margin-right:66.6666666667%}.v-application--is-ltr .offset-md-9{margin-left:75%}.v-application--is-rtl .offset-md-9{margin-right:75%}.v-application--is-ltr .offset-md-10{margin-left:83.3333333333%}.v-application--is-rtl .offset-md-10{margin-right:83.3333333333%}.v-application--is-ltr .offset-md-11{margin-left:91.6666666667%}.v-application--is-rtl .offset-md-11{margin-right:91.6666666667%}}@media (min-width:1264px){.col-lg{flex-basis:0;flex-grow:1;max-width:100%}.col-lg-auto{flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-lg-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-lg-3{flex:0 0 25%;max-width:25%}.col-lg-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-lg-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-lg-6{flex:0 0 50%;max-width:50%}.col-lg-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-lg-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-lg-9{flex:0 0 75%;max-width:75%}.col-lg-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-lg-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-lg-12{flex:0 0 100%;max-width:100%}.v-application--is-ltr .offset-lg-0{margin-left:0}.v-application--is-rtl .offset-lg-0{margin-right:0}.v-application--is-ltr .offset-lg-1{margin-left:8.3333333333%}.v-application--is-rtl .offset-lg-1{margin-right:8.3333333333%}.v-application--is-ltr .offset-lg-2{margin-left:16.6666666667%}.v-application--is-rtl .offset-lg-2{margin-right:16.6666666667%}.v-application--is-ltr .offset-lg-3{margin-left:25%}.v-application--is-rtl .offset-lg-3{margin-right:25%}.v-application--is-ltr .offset-lg-4{margin-left:33.3333333333%}.v-application--is-rtl .offset-lg-4{margin-right:33.3333333333%}.v-application--is-ltr .offset-lg-5{margin-left:41.6666666667%}.v-application--is-rtl .offset-lg-5{margin-right:41.6666666667%}.v-application--is-ltr .offset-lg-6{margin-left:50%}.v-application--is-rtl .offset-lg-6{margin-right:50%}.v-application--is-ltr .offset-lg-7{margin-left:58.3333333333%}.v-application--is-rtl .offset-lg-7{margin-right:58.3333333333%}.v-application--is-ltr .offset-lg-8{margin-left:66.6666666667%}.v-application--is-rtl .offset-lg-8{margin-right:66.6666666667%}.v-application--is-ltr .offset-lg-9{margin-left:75%}.v-application--is-rtl .offset-lg-9{margin-right:75%}.v-application--is-ltr .offset-lg-10{margin-left:83.3333333333%}.v-application--is-rtl .offset-lg-10{margin-right:83.3333333333%}.v-application--is-ltr .offset-lg-11{margin-left:91.6666666667%}.v-application--is-rtl .offset-lg-11{margin-right:91.6666666667%}}@media (min-width:1904px){.col-xl{flex-basis:0;flex-grow:1;max-width:100%}.col-xl-auto{flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{flex:0 0 8.3333333333%;max-width:8.3333333333%}.col-xl-2{flex:0 0 16.6666666667%;max-width:16.6666666667%}.col-xl-3{flex:0 0 25%;max-width:25%}.col-xl-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-xl-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-xl-6{flex:0 0 50%;max-width:50%}.col-xl-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-xl-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-xl-9{flex:0 0 75%;max-width:75%}.col-xl-10{flex:0 0 83.3333333333%;max-width:83.3333333333%}.col-xl-11{flex:0 0 91.6666666667%;max-width:91.6666666667%}.col-xl-12{flex:0 0 100%;max-width:100%}.v-application--is-ltr .offset-xl-0{margin-left:0}.v-application--is-rtl .offset-xl-0{margin-right:0}.v-application--is-ltr .offset-xl-1{margin-left:8.3333333333%}.v-application--is-rtl .offset-xl-1{margin-right:8.3333333333%}.v-application--is-ltr .offset-xl-2{margin-left:16.6666666667%}.v-application--is-rtl .offset-xl-2{margin-right:16.6666666667%}.v-application--is-ltr .offset-xl-3{margin-left:25%}.v-application--is-rtl .offset-xl-3{margin-right:25%}.v-application--is-ltr .offset-xl-4{margin-left:33.3333333333%}.v-application--is-rtl .offset-xl-4{margin-right:33.3333333333%}.v-application--is-ltr .offset-xl-5{margin-left:41.6666666667%}.v-application--is-rtl .offset-xl-5{margin-right:41.6666666667%}.v-application--is-ltr .offset-xl-6{margin-left:50%}.v-application--is-rtl .offset-xl-6{margin-right:50%}.v-application--is-ltr .offset-xl-7{margin-left:58.3333333333%}.v-application--is-rtl .offset-xl-7{margin-right:58.3333333333%}.v-application--is-ltr .offset-xl-8{margin-left:66.6666666667%}.v-application--is-rtl .offset-xl-8{margin-right:66.6666666667%}.v-application--is-ltr .offset-xl-9{margin-left:75%}.v-application--is-rtl .offset-xl-9{margin-right:75%}.v-application--is-ltr .offset-xl-10{margin-left:83.3333333333%}.v-application--is-rtl .offset-xl-10{margin-right:83.3333333333%}.v-application--is-ltr .offset-xl-11{margin-left:91.6666666667%}.v-application--is-rtl .offset-xl-11{margin-right:91.6666666667%}}.theme--light.v-navigation-drawer{background-color:#fff}.theme--light.v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border{background-color:rgba(0,0,0,.12)}.theme--light.v-navigation-drawer .v-divider{border-color:rgba(0,0,0,.12)}.theme--dark.v-navigation-drawer{background-color:#363636}.theme--dark.v-navigation-drawer:not(.v-navigation-drawer--floating) .v-navigation-drawer__border{background-color:hsla(0,0%,100%,.12)}.theme--dark.v-navigation-drawer .v-divider{border-color:hsla(0,0%,100%,.12)}.v-navigation-drawer{-webkit-overflow-scrolling:touch;display:flex;flex-direction:column;left:0;max-width:100%;overflow:hidden;pointer-events:auto;top:0;transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);will-change:transform;transition-property:transform,visibility,width}.v-navigation-drawer:not([data-booted=true]){transition:none!important}.v-navigation-drawer.v-navigation-drawer--right:after{left:0;right:auto}.v-navigation-drawer .v-list:not(.v-select-list){background:inherit}.v-navigation-drawer__border{position:absolute;right:0;top:0;height:100%;width:1px}.v-navigation-drawer__content{height:100%;overflow-y:auto;overflow-x:hidden}.v-navigation-drawer__image{border-radius:inherit;height:100%;position:absolute;top:0;bottom:0;z-index:-1;contain:strict;width:100%}.v-navigation-drawer__image .v-image{border-radius:inherit}.v-navigation-drawer--bottom.v-navigation-drawer--is-mobile{max-height:50%;top:auto;bottom:0;min-width:100%}.v-navigation-drawer--right{left:auto;right:0}.v-navigation-drawer--right>.v-navigation-drawer__border{right:auto;left:0}.v-navigation-drawer--absolute{z-index:1}.v-navigation-drawer--fixed{z-index:6}.v-navigation-drawer--absolute{position:absolute}.v-navigation-drawer--clipped:not(.v-navigation-drawer--temporary):not(.v-navigation-drawer--is-mobile){z-index:4}.v-navigation-drawer--fixed{position:fixed}.v-navigation-drawer--floating:after{display:none}.v-navigation-drawer--mini-variant{overflow:hidden}.v-navigation-drawer--mini-variant .v-list-item>:first-child{margin-left:0;margin-right:0}.v-navigation-drawer--mini-variant .v-list-item>:not(:first-child){position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);white-space:nowrap;display:initial}.v-navigation-drawer--mini-variant .v-list-group--no-action .v-list-group__items,.v-navigation-drawer--mini-variant .v-list-group--sub-group{display:none}.v-navigation-drawer--mini-variant.v-navigation-drawer--custom-mini-variant .v-list-item{justify-content:center}.v-navigation-drawer--temporary{z-index:7}.v-navigation-drawer--mobile{z-index:6}.v-navigation-drawer--close{visibility:hidden}.v-navigation-drawer--is-mobile:not(.v-navigation-drawer--close),.v-navigation-drawer--temporary:not(.v-navigation-drawer--close){box-shadow:0 8px 10px -5px rgba(0,0,0,.2),0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12)}.theme--light.v-overflow-btn.theme--light.v-overflow-btn>.v-input__control>.v-input__slot{border-color:rgba(0,0,0,.12)}.theme--light.v-overflow-btn:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover{background:#fff}.theme--light.v-overflow-btn.v-overflow-btn--segmented .v-input__append-inner{border-left:thin solid rgba(0,0,0,.12)}.theme--dark.v-overflow-btn.theme--dark.v-overflow-btn>.v-input__control>.v-input__slot{border-color:hsla(0,0%,100%,.12)}.theme--dark.v-overflow-btn:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover{background:#1e1e1e}.theme--dark.v-overflow-btn.v-overflow-btn--segmented .v-input__append-inner{border-left:thin solid hsla(0,0%,100%,.12)}.v-autocomplete__content.v-menu__content{box-shadow:0 4px 6px 0 rgba(32,33,36,.28)}.v-autocomplete__content.v-menu__content .v-select-list{border-radius:0 0 4px 4px}.v-overflow-btn{margin-top:12px;padding-top:0}.v-overflow-btn:not(.v-overflow-btn--editable)>.v-input__control>.v-input__slot{cursor:pointer}.v-overflow-btn .v-input__slot{border-width:2px 0;border-style:solid}.v-overflow-btn .v-input__slot:before{display:none}.v-overflow-btn .v-select__slot{height:48px}.v-overflow-btn.v-input--dense .v-select__slot{height:38px}.v-overflow-btn.v-input--dense input{cursor:pointer}.v-application--is-ltr .v-overflow-btn.v-input--dense input{margin-left:16px}.v-application--is-rtl .v-overflow-btn.v-input--dense input{margin-right:16px}.v-application--is-ltr .v-overflow-btn .v-select__selection--comma:first-child{margin-left:16px}.v-application--is-rtl .v-overflow-btn .v-select__selection--comma:first-child{margin-right:16px}.v-overflow-btn .v-input__slot{transition:.3s cubic-bezier(.25,.8,.5,1)}.v-overflow-btn .v-input__slot:after,.v-overflow-btn .v-input__slot:before{display:none}.v-overflow-btn .v-label{top:calc(50% - 10px)}.v-application--is-ltr .v-overflow-btn .v-label{margin-left:16px}.v-application--is-rtl .v-overflow-btn .v-label{margin-right:16px}.v-overflow-btn .v-input__append-inner{align-items:center;align-self:auto;flex-shrink:0;height:48px;margin-top:0;padding:0 4px;width:42px}.v-overflow-btn .v-input__append-outer,.v-overflow-btn .v-input__prepend-outer{margin-bottom:12px;margin-top:12px}.v-overflow-btn .v-input__control:before{height:1px;top:-1px;content:"";left:0;position:absolute;transition:.3s cubic-bezier(.25,.8,.5,1);width:100%}.v-overflow-btn.v-input--is-focused .v-input__slot,.v-overflow-btn.v-select--is-menu-active .v-input__slot{border-color:transparent!important;box-shadow:0 1px 6px 0 rgba(32,33,36,.28)}.v-overflow-btn.v-input--is-focused .v-input__slot{border-radius:4px}.v-overflow-btn.v-select--is-menu-active .v-input__slot{border-radius:4px 4px 0 0}.v-overflow-btn .v-select__selections{width:0}.v-overflow-btn--segmented .v-input__slot{border-width:thin 0}.v-overflow-btn--segmented .v-select__selections{flex-wrap:nowrap}.v-overflow-btn--segmented .v-select__selections .v-btn{border-radius:0;margin:0;height:48px;width:100%}.v-application--is-ltr .v-overflow-btn--segmented .v-select__selections .v-btn{margin-right:-16px}.v-application--is-rtl .v-overflow-btn--segmented .v-select__selections .v-btn{margin-left:-16px}.v-overflow-btn--segmented .v-select__selections .v-btn__content{justify-content:start}.v-overflow-btn--segmented .v-select__selections .v-btn__content:before{background-color:transparent}.v-overflow-btn--editable .v-select__slot input{cursor:text;padding:8px 16px}.v-overflow-btn--editable .v-input__append-inner,.v-overflow-btn--editable .v-input__append-inner *{cursor:pointer}.theme--light.v-pagination .v-pagination__item{background:#fff;color:rgba(0,0,0,.87)}.theme--light.v-pagination .v-pagination__item--active{color:#fff}.theme--light.v-pagination .v-pagination__navigation{background:#fff}.theme--dark.v-pagination .v-pagination__item{background:#1e1e1e;color:#fff}.theme--dark.v-pagination .v-pagination__item--active{color:#fff}.theme--dark.v-pagination .v-pagination__navigation{background:#1e1e1e}.v-pagination{align-items:center;display:inline-flex;list-style-type:none;justify-content:center;margin:0;max-width:100%;width:100%}.v-pagination.v-pagination{padding-left:0}.v-pagination>li{align-items:center;display:flex}.v-pagination--circle .v-pagination__item,.v-pagination--circle .v-pagination__more,.v-pagination--circle .v-pagination__navigation{border-radius:50%}.v-pagination--disabled{pointer-events:none;opacity:.6}.v-pagination__item{background:transparent;border-radius:4px;font-size:1rem;height:34px;margin:.3rem;min-width:34px;padding:0 5px;text-decoration:none;transition:.3s cubic-bezier(0,0,.2,1);width:auto;box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-pagination__item--active{box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-pagination__navigation{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12);border-radius:4px;display:inline-flex;justify-content:center;align-items:center;text-decoration:none;height:32px;width:32px;margin:.3rem 10px}.v-pagination__navigation .v-icon{transition:.2s cubic-bezier(.4,0,.6,1);vertical-align:middle}.v-pagination__navigation--disabled{opacity:.6;pointer-events:none}.v-pagination__more{margin:.3rem;display:inline-flex;align-items:flex-end;justify-content:center;height:32px;width:32px}.v-parallax{position:relative;overflow:hidden;z-index:0}.v-parallax__image-container{position:absolute;top:0;left:0;right:0;bottom:0;z-index:1;contain:strict}.v-parallax__image{position:absolute;bottom:0;left:50%;min-width:100%;min-height:100%;display:none;transform:translate(-50%);will-change:transform;transition:opacity .3s cubic-bezier(.25,.8,.5,1);z-index:1}.v-parallax__content{color:#fff;height:100%;z-index:2;position:relative;display:flex;flex-direction:column;justify-content:center;padding:0 1rem}.v-input--radio-group__input{border:none;display:flex;width:100%}.v-input--radio-group--column .v-input--radio-group__input>.v-label{padding-bottom:8px}.v-input--radio-group--row .v-input--radio-group__input>.v-label{padding-right:8px}.v-input--radio-group--row legend{align-self:center;display:inline-block}.v-input--radio-group--row .v-input--radio-group__input{flex-direction:row;flex-wrap:wrap}.v-input--radio-group--column .v-radio:not(:last-child):not(:only-child){margin-bottom:8px}.v-input--radio-group--column .v-input--radio-group__input{flex-direction:column}.theme--light.v-radio--is-disabled label{color:rgba(0,0,0,.38)}.theme--light.v-radio--is-disabled .v-icon{color:rgba(0,0,0,.26)!important}.theme--dark.v-radio--is-disabled label{color:hsla(0,0%,100%,.5)}.theme--dark.v-radio--is-disabled .v-icon{color:hsla(0,0%,100%,.3)!important}.v-radio{align-items:center;display:flex;height:auto;outline:none}.v-radio--is-disabled{pointer-events:none}.v-input--radio-group.v-input--radio-group--row .v-radio{margin-right:16px}.theme--light.v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb{background:#fafafa}.theme--dark.v-input--range-slider.v-input--slider.v-input--is-disabled .v-slider.v-slider .v-slider__thumb{background:#424242}.v-input--range-slider.v-input--is-disabled .v-slider__track-fill{display:none}.v-input--range-slider.v-input--is-disabled.v-input--slider .v-slider.v-slider .v-slider__thumb{border-color:transparent}.v-rating{max-width:100%;white-space:nowrap}.v-rating .v-icon{padding:.5rem;border-radius:50%;user-select:none;outline:none}.v-rating .v-icon:after{display:none}.v-application--is-ltr .v-rating .v-icon{transform:scaleX(1)}.v-application--is-rtl .v-rating .v-icon{transform:scaleX(-1)}.v-rating--readonly .v-icon{pointer-events:none}.v-rating--dense .v-icon{padding:.1rem}.theme--light.v-skeleton-loader .v-skeleton-loader__bone:after{background:linear-gradient(90deg,hsla(0,0%,100%,0),hsla(0,0%,100%,.3),hsla(0,0%,100%,0))}.theme--light.v-skeleton-loader .v-skeleton-loader__avatar,.theme--light.v-skeleton-loader .v-skeleton-loader__button,.theme--light.v-skeleton-loader .v-skeleton-loader__chip,.theme--light.v-skeleton-loader .v-skeleton-loader__divider,.theme--light.v-skeleton-loader .v-skeleton-loader__heading,.theme--light.v-skeleton-loader .v-skeleton-loader__image,.theme--light.v-skeleton-loader .v-skeleton-loader__text{background:rgba(0,0,0,.12)}.theme--light.v-skeleton-loader .v-skeleton-loader__actions,.theme--light.v-skeleton-loader .v-skeleton-loader__article,.theme--light.v-skeleton-loader .v-skeleton-loader__card-heading,.theme--light.v-skeleton-loader .v-skeleton-loader__card-text,.theme--light.v-skeleton-loader .v-skeleton-loader__date-picker,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-avatar,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-avatar-three-line,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-avatar-two-line,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-text,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-three-line,.theme--light.v-skeleton-loader .v-skeleton-loader__list-item-two-line,.theme--light.v-skeleton-loader .v-skeleton-loader__table-heading,.theme--light.v-skeleton-loader .v-skeleton-loader__table-tbody,.theme--light.v-skeleton-loader .v-skeleton-loader__table-tfoot,.theme--light.v-skeleton-loader .v-skeleton-loader__table-thead{background:#fff}.theme--dark.v-skeleton-loader .v-skeleton-loader__bone:after{background:linear-gradient(90deg,hsla(0,0%,100%,0),hsla(0,0%,100%,.05),hsla(0,0%,100%,0))}.theme--dark.v-skeleton-loader .v-skeleton-loader__avatar,.theme--dark.v-skeleton-loader .v-skeleton-loader__button,.theme--dark.v-skeleton-loader .v-skeleton-loader__chip,.theme--dark.v-skeleton-loader .v-skeleton-loader__divider,.theme--dark.v-skeleton-loader .v-skeleton-loader__heading,.theme--dark.v-skeleton-loader .v-skeleton-loader__image,.theme--dark.v-skeleton-loader .v-skeleton-loader__text{background:hsla(0,0%,100%,.12)}.theme--dark.v-skeleton-loader .v-skeleton-loader__actions,.theme--dark.v-skeleton-loader .v-skeleton-loader__article,.theme--dark.v-skeleton-loader .v-skeleton-loader__card-heading,.theme--dark.v-skeleton-loader .v-skeleton-loader__card-text,.theme--dark.v-skeleton-loader .v-skeleton-loader__date-picker,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-avatar,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-avatar-three-line,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-avatar-two-line,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-text,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-three-line,.theme--dark.v-skeleton-loader .v-skeleton-loader__list-item-two-line,.theme--dark.v-skeleton-loader .v-skeleton-loader__table-heading,.theme--dark.v-skeleton-loader .v-skeleton-loader__table-tbody,.theme--dark.v-skeleton-loader .v-skeleton-loader__table-tfoot,.theme--dark.v-skeleton-loader .v-skeleton-loader__table-thead{background:#1e1e1e}.v-skeleton-loader{border-radius:4px;position:relative;vertical-align:top}.v-skeleton-loader__actions{padding:16px 16px 8px;text-align:right}.v-skeleton-loader__actions .v-skeleton-loader__button{display:inline-block}.v-application--is-ltr .v-skeleton-loader__actions .v-skeleton-loader__button:first-child{margin-right:12px}.v-application--is-rtl .v-skeleton-loader__actions .v-skeleton-loader__button:first-child{margin-left:12px}.v-skeleton-loader .v-skeleton-loader__list-item,.v-skeleton-loader .v-skeleton-loader__list-item-avatar,.v-skeleton-loader .v-skeleton-loader__list-item-avatar-three-line,.v-skeleton-loader .v-skeleton-loader__list-item-avatar-two-line,.v-skeleton-loader .v-skeleton-loader__list-item-text,.v-skeleton-loader .v-skeleton-loader__list-item-three-line,.v-skeleton-loader .v-skeleton-loader__list-item-two-line{border-radius:4px}.v-skeleton-loader .v-skeleton-loader__actions:after,.v-skeleton-loader .v-skeleton-loader__article:after,.v-skeleton-loader .v-skeleton-loader__card-avatar:after,.v-skeleton-loader .v-skeleton-loader__card-heading:after,.v-skeleton-loader .v-skeleton-loader__card-text:after,.v-skeleton-loader .v-skeleton-loader__card:after,.v-skeleton-loader .v-skeleton-loader__date-picker-days:after,.v-skeleton-loader .v-skeleton-loader__date-picker-options:after,.v-skeleton-loader .v-skeleton-loader__date-picker:after,.v-skeleton-loader .v-skeleton-loader__list-item-avatar-three-line:after,.v-skeleton-loader .v-skeleton-loader__list-item-avatar-two-line:after,.v-skeleton-loader .v-skeleton-loader__list-item-avatar:after,.v-skeleton-loader .v-skeleton-loader__list-item-text:after,.v-skeleton-loader .v-skeleton-loader__list-item-three-line:after,.v-skeleton-loader .v-skeleton-loader__list-item-two-line:after,.v-skeleton-loader .v-skeleton-loader__list-item:after,.v-skeleton-loader .v-skeleton-loader__paragraph:after,.v-skeleton-loader .v-skeleton-loader__sentences:after,.v-skeleton-loader .v-skeleton-loader__table-cell:after,.v-skeleton-loader .v-skeleton-loader__table-heading:after,.v-skeleton-loader .v-skeleton-loader__table-row-divider:after,.v-skeleton-loader .v-skeleton-loader__table-row:after,.v-skeleton-loader .v-skeleton-loader__table-tbody:after,.v-skeleton-loader .v-skeleton-loader__table-tfoot:after,.v-skeleton-loader .v-skeleton-loader__table-thead:after,.v-skeleton-loader .v-skeleton-loader__table:after{display:none}.v-application--is-ltr .v-skeleton-loader__article .v-skeleton-loader__heading{margin:16px 0 16px 16px}.v-application--is-rtl .v-skeleton-loader__article .v-skeleton-loader__heading{margin:16px 16px 0}.v-skeleton-loader__article .v-skeleton-loader__paragraph{padding:16px}.v-skeleton-loader__bone{border-radius:inherit;overflow:hidden;position:relative}.v-skeleton-loader__bone:after{animation:loading 1.5s infinite;content:"";height:100%;left:0;position:absolute;right:0;top:0;transform:translateX(-100%);z-index:1}.v-skeleton-loader__avatar{border-radius:50%;height:48px;width:48px}.v-skeleton-loader__button{border-radius:4px;height:36px;width:64px}.v-skeleton-loader__card .v-skeleton-loader__image{border-radius:0}.v-skeleton-loader__card-heading .v-skeleton-loader__heading{margin:16px}.v-skeleton-loader__card-text{padding:16px}.v-skeleton-loader__chip{border-radius:16px;height:32px;width:96px}.v-skeleton-loader__date-picker{border-radius:inherit}.v-skeleton-loader__date-picker .v-skeleton-loader__list-item:first-child .v-skeleton-loader__text{max-width:88px;width:20%}.v-skeleton-loader__date-picker .v-skeleton-loader__heading{max-width:256px;width:40%}.v-skeleton-loader__date-picker-days{display:flex;flex-wrap:wrap;padding:0 12px;margin:0 auto}.v-skeleton-loader__date-picker-days .v-skeleton-loader__avatar{border-radius:4px;flex:1 1 auto;margin:4px;height:40px;width:40px}.v-skeleton-loader__date-picker-options{align-items:center;display:flex;padding:16px}.v-skeleton-loader__date-picker-options .v-skeleton-loader__avatar{height:40px;width:40px}.v-skeleton-loader__date-picker-options .v-skeleton-loader__avatar:nth-child(2){margin-left:auto}.v-application--is-ltr .v-skeleton-loader__date-picker-options .v-skeleton-loader__avatar:nth-child(2){margin-right:8px}.v-application--is-rtl .v-skeleton-loader__date-picker-options .v-skeleton-loader__avatar:nth-child(2){margin-left:8px}.v-skeleton-loader__date-picker-options .v-skeleton-loader__text.v-skeleton-loader__bone:first-child{margin-bottom:0;max-width:50%;width:456px}.v-skeleton-loader__divider{border-radius:1px;height:2px}.v-skeleton-loader__heading{border-radius:12px;height:24px;width:45%}.v-skeleton-loader__image{height:200px;border-radius:0}.v-skeleton-loader__image~.v-skeleton-loader__card-heading{border-radius:0}.v-skeleton-loader__image::first-child,.v-skeleton-loader__image::last-child{border-radius:inherit}.v-skeleton-loader__list-item{height:48px}.v-skeleton-loader__list-item-three-line{flex-wrap:wrap}.v-skeleton-loader__list-item-three-line>*{flex:1 0 100%;width:100%}.v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__avatar,.v-skeleton-loader__list-item-avatar-two-line .v-skeleton-loader__avatar,.v-skeleton-loader__list-item-avatar .v-skeleton-loader__avatar{height:40px;width:40px}.v-skeleton-loader__list-item-avatar{height:48px}.v-skeleton-loader__list-item-avatar-two-line,.v-skeleton-loader__list-item-two-line{height:72px}.v-skeleton-loader__list-item-avatar-three-line,.v-skeleton-loader__list-item-three-line{height:88px}.v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__avatar{align-self:flex-start}.v-skeleton-loader__list-item,.v-skeleton-loader__list-item-avatar,.v-skeleton-loader__list-item-avatar-three-line,.v-skeleton-loader__list-item-avatar-two-line,.v-skeleton-loader__list-item-three-line,.v-skeleton-loader__list-item-two-line{align-content:center;align-items:center;display:flex;flex-wrap:wrap;padding:0 16px}.v-application--is-ltr .v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__avatar,.v-application--is-ltr .v-skeleton-loader__list-item-avatar-two-line .v-skeleton-loader__avatar,.v-application--is-ltr .v-skeleton-loader__list-item-avatar .v-skeleton-loader__avatar,.v-application--is-ltr .v-skeleton-loader__list-item-three-line .v-skeleton-loader__avatar,.v-application--is-ltr .v-skeleton-loader__list-item-two-line .v-skeleton-loader__avatar,.v-application--is-ltr .v-skeleton-loader__list-item .v-skeleton-loader__avatar{margin-right:16px}.v-application--is-rtl .v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__avatar,.v-application--is-rtl .v-skeleton-loader__list-item-avatar-two-line .v-skeleton-loader__avatar,.v-application--is-rtl .v-skeleton-loader__list-item-avatar .v-skeleton-loader__avatar,.v-application--is-rtl .v-skeleton-loader__list-item-three-line .v-skeleton-loader__avatar,.v-application--is-rtl .v-skeleton-loader__list-item-two-line .v-skeleton-loader__avatar,.v-application--is-rtl .v-skeleton-loader__list-item .v-skeleton-loader__avatar{margin-left:16px}.v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item-avatar-three-line .v-skeleton-loader__text:only-child,.v-skeleton-loader__list-item-avatar-two-line .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item-avatar-two-line .v-skeleton-loader__text:only-child,.v-skeleton-loader__list-item-avatar .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item-avatar .v-skeleton-loader__text:only-child,.v-skeleton-loader__list-item-three-line .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item-three-line .v-skeleton-loader__text:only-child,.v-skeleton-loader__list-item-two-line .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item-two-line .v-skeleton-loader__text:only-child,.v-skeleton-loader__list-item .v-skeleton-loader__text:last-child,.v-skeleton-loader__list-item .v-skeleton-loader__text:only-child{margin-bottom:0}.v-skeleton-loader__paragraph,.v-skeleton-loader__sentences{flex:1 0 auto}.v-skeleton-loader__paragraph:not(:last-child){margin-bottom:6px}.v-skeleton-loader__paragraph .v-skeleton-loader__text:first-child{max-width:100%}.v-skeleton-loader__paragraph .v-skeleton-loader__text:nth-child(2){max-width:50%}.v-skeleton-loader__paragraph .v-skeleton-loader__text:nth-child(3),.v-skeleton-loader__sentences .v-skeleton-loader__text:nth-child(2){max-width:70%}.v-skeleton-loader__sentences:not(:last-child){margin-bottom:6px}.v-skeleton-loader__table-heading{align-items:center;display:flex;justify-content:space-between;padding:16px}.v-skeleton-loader__table-heading .v-skeleton-loader__heading{max-width:15%}.v-skeleton-loader__table-heading .v-skeleton-loader__text{max-width:40%}.v-skeleton-loader__table-thead{display:flex;justify-content:space-between;padding:16px}.v-skeleton-loader__table-thead .v-skeleton-loader__heading{max-width:5%}.v-skeleton-loader__table-tbody{padding:16px 16px 0}.v-skeleton-loader__table-tfoot{align-items:center;display:flex;justify-content:flex-end;padding:16px}.v-application--is-ltr .v-skeleton-loader__table-tfoot>*{margin-left:8px}.v-application--is-rtl .v-skeleton-loader__table-tfoot>*{margin-right:8px}.v-skeleton-loader__table-tfoot .v-skeleton-loader__avatar{height:40px;width:40px}.v-skeleton-loader__table-tfoot .v-skeleton-loader__text{margin-bottom:0}.v-skeleton-loader__table-tfoot .v-skeleton-loader__text:first-child{max-width:128px}.v-skeleton-loader__table-tfoot .v-skeleton-loader__text:nth-child(2){max-width:64px}.v-skeleton-loader__table-row{display:flex;justify-content:space-between}.v-skeleton-loader__table-cell{align-items:center;display:flex;height:48px;width:88px}.v-skeleton-loader__table-cell .v-skeleton-loader__text{margin-bottom:0}.v-skeleton-loader__text{border-radius:6px;flex:1 0 auto;height:12px;margin-bottom:6px}.v-skeleton-loader--boilerplate .v-skeleton-loader__bone:after{display:none}.v-skeleton-loader--is-loading{overflow:hidden}.v-skeleton-loader--tile,.v-skeleton-loader--tile .v-skeleton-loader__bone{border-radius:0}@keyframes loading{to{transform:translateX(100%)}}.theme--light.v-snack__wrapper{color:rgba(0,0,0,.87)}.theme--dark.v-snack__wrapper{color:#fff}.v-sheet.v-snack__wrapper{border-radius:4px}.v-sheet.v-snack__wrapper:not(.v-sheet--outlined){box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)}.v-sheet.v-snack__wrapper.v-sheet--shaped{border-radius:24px 4px}.v-snack{bottom:0;display:flex;font-size:.875rem;justify-content:center;left:0;pointer-events:none;right:0;top:0;width:100%}.v-snack:not(.v-snack--absolute){height:100vh;position:fixed;z-index:1000}.v-snack:not(.v-snack--centered):not(.v-snack--top){align-items:flex-end}.v-snack__wrapper{align-items:center;border-color:currentColor!important;display:flex;margin:8px;max-width:672px;min-height:48px;min-width:344px;padding:0;pointer-events:auto;position:relative;transition-duration:.15s;transition-property:opacity,transform;transition-timing-function:cubic-bezier(0,0,.2,1)}.v-snack__wrapper.theme--dark{background-color:#333;color:hsla(0,0%,100%,.87)}.v-snack__content{flex-grow:1;font-size:.875rem;font-weight:400;letter-spacing:.0178571429em;line-height:1.25rem;margin-right:auto;padding:14px 16px;text-align:initial}.v-snack__action{align-items:center;align-self:center;display:flex}.v-snack__action .v-ripple__container{display:none}.v-application--is-ltr .v-snack__action{margin-right:8px}.v-application--is-rtl .v-snack__action{margin-left:8px}.v-snack__action>.v-snack__btn.v-btn{padding:0 8px}.v-snack__btn{margin:0;min-width:auto}.v-snack--absolute{height:100%;position:absolute;z-index:1}.v-snack--centered{align-items:center}.v-snack--left{justify-content:flex-start}.v-snack--multi-line .v-snack__wrapper{min-height:68px}.v-snack--right{justify-content:flex-end}.v-snack:not(.v-snack--has-background) .v-snack__wrapper{box-shadow:none!important}.v-snack--text .v-snack__wrapper:before{background-color:currentColor;border-radius:inherit;bottom:0;content:"";left:0;opacity:.12;pointer-events:none;position:absolute;right:0;top:0}.v-snack--top{align-items:flex-start}.v-snack--vertical .v-snack__wrapper{flex-direction:column}.v-snack--vertical .v-snack__wrapper .v-snack__action{align-self:flex-end;margin-bottom:8px}.v-snack-transition-enter.v-snack__wrapper{transform:scale(.8)}.v-snack-transition-enter.v-snack__wrapper,.v-snack-transition-leave-to.v-snack__wrapper{opacity:0}.v-speed-dial{position:relative;z-index:1}.v-speed-dial--absolute{position:absolute}.v-speed-dial--fixed{position:fixed}.v-speed-dial--absolute,.v-speed-dial--fixed{z-index:4}.v-speed-dial--absolute>.v-btn--floating,.v-speed-dial--fixed>.v-btn--floating{margin:0}.v-speed-dial--top{top:16px}.v-speed-dial--bottom{bottom:16px}.v-speed-dial--left{left:16px}.v-speed-dial--right{right:16px}.v-speed-dial--direction-left .v-speed-dial__list,.v-speed-dial--direction-right .v-speed-dial__list{height:100%;top:0;padding:0 16px}.v-speed-dial--direction-bottom .v-speed-dial__list,.v-speed-dial--direction-top .v-speed-dial__list{left:0;width:100%}.v-speed-dial--direction-top .v-speed-dial__list{flex-direction:column-reverse;bottom:100%}.v-speed-dial--direction-right .v-speed-dial__list{flex-direction:row;left:100%}.v-speed-dial--direction-bottom .v-speed-dial__list{flex-direction:column;top:100%}.v-speed-dial--direction-left .v-speed-dial__list{flex-direction:row-reverse;right:100%}.v-speed-dial__list{align-items:center;display:flex;justify-content:center;padding:16px 0;position:absolute}.v-speed-dial__list .v-btn{margin:6px}.v-speed-dial:not(.v-speed-dial--is-active) .v-speed-dial__list{pointer-events:none}.theme--light.v-stepper{background:#fff}.theme--light.v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step{background:rgba(0,0,0,.38)}.theme--light.v-stepper .v-stepper__step__step,.theme--light.v-stepper .v-stepper__step__step .v-icon{color:#fff}.theme--light.v-stepper .v-stepper__header .v-divider{border-color:rgba(0,0,0,.12)}.theme--light.v-stepper .v-stepper__step--active .v-stepper__label{text-shadow:0 0 0 #000}.theme--light.v-stepper .v-stepper__step--editable:hover{background:rgba(0,0,0,.06)}.theme--light.v-stepper .v-stepper__step--editable:hover .v-stepper__label{text-shadow:0 0 0 #000}.theme--light.v-stepper .v-stepper__step--complete .v-stepper__label{color:rgba(0,0,0,.87)}.theme--light.v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step{background:rgba(0,0,0,.54)}.theme--light.v-stepper .v-stepper__label{color:rgba(0,0,0,.38)}.theme--light.v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,.theme--light.v-stepper .v-stepper__label small{color:rgba(0,0,0,.6)}.v-application--is-ltr .theme--light.v-stepper--vertical .v-stepper__content:not(:last-child){border-left:1px solid rgba(0,0,0,.12)}.v-application--is-rtl .theme--light.v-stepper--vertical .v-stepper__content:not(:last-child){border-right:1px solid rgba(0,0,0,.12)}.theme--dark.v-stepper{background:#303030}.theme--dark.v-stepper .v-stepper__step:not(.v-stepper__step--active):not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__step__step{background:hsla(0,0%,100%,.5)}.theme--dark.v-stepper .v-stepper__step__step,.theme--dark.v-stepper .v-stepper__step__step .v-icon{color:#fff}.theme--dark.v-stepper .v-stepper__header .v-divider{border-color:hsla(0,0%,100%,.12)}.theme--dark.v-stepper .v-stepper__step--active .v-stepper__label{text-shadow:0 0 0 #fff}.theme--dark.v-stepper .v-stepper__step--editable:hover{background:hsla(0,0%,100%,.06)}.theme--dark.v-stepper .v-stepper__step--editable:hover .v-stepper__label{text-shadow:0 0 0 #fff}.theme--dark.v-stepper .v-stepper__step--complete .v-stepper__label{color:hsla(0,0%,100%,.87)}.theme--dark.v-stepper .v-stepper__step--inactive.v-stepper__step--editable:not(.v-stepper__step--error):hover .v-stepper__step__step{background:hsla(0,0%,100%,.75)}.theme--dark.v-stepper .v-stepper__label{color:hsla(0,0%,100%,.5)}.theme--dark.v-stepper--non-linear .v-stepper__step:not(.v-stepper__step--complete):not(.v-stepper__step--error) .v-stepper__label,.theme--dark.v-stepper .v-stepper__label small{color:hsla(0,0%,100%,.7)}.v-application--is-ltr .theme--dark.v-stepper--vertical .v-stepper__content:not(:last-child){border-left:1px solid hsla(0,0%,100%,.12)}.v-application--is-rtl .theme--dark.v-stepper--vertical .v-stepper__content:not(:last-child){border-right:1px solid hsla(0,0%,100%,.12)}.v-stepper{border-radius:4px;overflow:hidden;position:relative}.v-stepper,.v-stepper__header{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.v-stepper__header{height:72px;align-items:stretch;display:flex;flex-wrap:wrap;justify-content:space-between}.v-stepper__header .v-divider{align-self:center;margin:0 -16px}.v-stepper__items{position:relative;overflow:hidden}.v-stepper__step__step{align-items:center;border-radius:50%;display:inline-flex;font-size:.75rem;justify-content:center;height:24px;min-width:24px;width:24px;transition:.3s cubic-bezier(.25,.8,.25,1)}.v-application--is-ltr .v-stepper__step__step{margin-right:8px}.v-application--is-rtl .v-stepper__step__step{margin-left:8px}.v-stepper__step__step .v-icon.v-icon{font-size:1.25rem}.v-stepper__step__step .v-icon.v-icon.v-icon--svg{height:1.25rem;width:1.25rem}.v-stepper__step{align-items:center;display:flex;flex-direction:row;padding:24px;position:relative}.v-stepper__step--active .v-stepper__label{transition:.3s cubic-bezier(.4,0,.6,1)}.v-stepper__step--editable{cursor:pointer}.v-stepper__step.v-stepper__step--error .v-stepper__step__step{background:transparent;color:inherit}.v-stepper__step.v-stepper__step--error .v-stepper__step__step .v-icon{font-size:1.5rem;color:inherit}.v-stepper__step.v-stepper__step--error .v-stepper__label{color:inherit;text-shadow:none;font-weight:500}.v-stepper__step.v-stepper__step--error .v-stepper__label small{color:inherit}.v-stepper__label{align-items:flex-start;display:flex;flex-direction:column;line-height:1}.v-application--is-ltr .v-stepper__label{text-align:left}.v-application--is-rtl .v-stepper__label{text-align:right}.v-stepper__label small{font-size:.75rem;font-weight:300;text-shadow:none}.v-stepper__wrapper{overflow:hidden;transition:none}.v-stepper__content{top:0;padding:24px 24px 16px;flex:1 0 auto;width:100%}.v-stepper__content>.v-btn{margin:24px 8px 8px 0}.v-stepper--is-booted .v-stepper__content,.v-stepper--is-booted .v-stepper__wrapper{transition:.3s cubic-bezier(.25,.8,.5,1)}.v-stepper--vertical{padding-bottom:36px}.v-stepper--vertical .v-stepper__content{padding:16px 60px 16px 23px;width:auto}.v-application--is-ltr .v-stepper--vertical .v-stepper__content{margin:-8px -36px -16px 36px}.v-application--is-rtl .v-stepper--vertical .v-stepper__content{margin:-8px 36px -16px -36px}.v-stepper--vertical .v-stepper__step{padding:24px 24px 16px}.v-application--is-ltr .v-stepper--vertical .v-stepper__step__step{margin-right:12px}.v-application--is-rtl .v-stepper--vertical .v-stepper__step__step{margin-left:12px}.v-stepper--alt-labels .v-stepper__header{height:auto}.v-stepper--alt-labels .v-stepper__header .v-divider{margin:35px -67px 0;align-self:flex-start}.v-stepper--alt-labels .v-stepper__step{flex-direction:column;justify-content:flex-start;align-items:center;flex-basis:175px}.v-stepper--alt-labels .v-stepper__step small{align-self:center}.v-stepper--alt-labels .v-stepper__step__step{margin-bottom:11px;margin-left:0;margin-right:0}@media only screen and (max-width:959px){.v-stepper:not(.v-stepper--vertical) .v-stepper__label{display:none}.v-stepper:not(.v-stepper--vertical) .v-stepper__step__step{margin-left:0;margin-right:0}}.theme--light.v-input--switch .v-input--switch__thumb{color:#fff}.theme--light.v-input--switch .v-input--switch__track{color:rgba(0,0,0,.38)}.theme--light.v-input--switch.v-input--is-disabled:not(.v-input--is-dirty) .v-input--switch__thumb{color:#fafafa!important}.theme--light.v-input--switch.v-input--is-disabled:not(.v-input--is-dirty) .v-input--switch__track{color:rgba(0,0,0,.12)!important}.theme--dark.v-input--switch .v-input--switch__thumb{color:#bdbdbd}.theme--dark.v-input--switch .v-input--switch__track{color:hsla(0,0%,100%,.3)}.theme--dark.v-input--switch.v-input--is-disabled:not(.v-input--is-dirty) .v-input--switch__thumb{color:#424242!important}.theme--dark.v-input--switch.v-input--is-disabled:not(.v-input--is-dirty) .v-input--switch__track{color:hsla(0,0%,100%,.1)!important}.v-input--switch__thumb,.v-input--switch__track{background-color:currentColor;pointer-events:none;transition:inherit}.v-input--switch__track{border-radius:8px;width:36px;height:14px;left:2px;position:absolute;opacity:.6;right:2px;top:calc(50% - 7px)}.v-input--switch__thumb{border-radius:50%;top:calc(50% - 10px);height:20px;position:relative;width:20px;display:flex;justify-content:center;align-items:center;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-input--switch .v-input--selection-controls__input{width:38px}.v-input--switch .v-input--selection-controls__ripple{top:calc(50% - 24px)}.v-input--switch.v-input--dense .v-input--switch__thumb{width:18px;height:18px}.v-input--switch.v-input--dense .v-input--switch__track{height:12px;width:32px}.v-input--switch.v-input--dense.v-input--switch--inset .v-input--switch__track{height:22px;width:44px;top:calc(50% - 12px);left:-3px}.v-input--switch.v-input--dense .v-input--selection-controls__ripple{top:calc(50% - 22px)}.v-input--switch.v-input--is-dirty.v-input--is-disabled{opacity:.6}.v-application--is-ltr .v-input--switch .v-input--selection-controls__ripple{left:-14px}.v-application--is-ltr .v-input--switch.v-input--dense .v-input--selection-controls__ripple{left:-12px}.v-application--is-ltr .v-input--switch.v-input--is-dirty .v-input--selection-controls__ripple,.v-application--is-ltr .v-input--switch.v-input--is-dirty .v-input--switch__thumb{transform:translate(20px)}.v-application--is-rtl .v-input--switch .v-input--selection-controls__ripple{right:-14px}.v-application--is-rtl .v-input--switch.v-input--dense .v-input--selection-controls__ripple{right:-12px}.v-application--is-rtl .v-input--switch.v-input--is-dirty .v-input--selection-controls__ripple,.v-application--is-rtl .v-input--switch.v-input--is-dirty .v-input--switch__thumb{transform:translate(-20px)}.v-input--switch:not(.v-input--switch--flat):not(.v-input--switch--inset) .v-input--switch__thumb{box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.v-input--switch--inset .v-input--selection-controls__input,.v-input--switch--inset .v-input--switch__track{width:48px}.v-input--switch--inset .v-input--switch__track{border-radius:14px;height:28px;left:-4px;opacity:.32;top:calc(50% - 14px)}.v-application--is-ltr .v-input--switch--inset .v-input--selection-controls__ripple,.v-application--is-ltr .v-input--switch--inset .v-input--switch__thumb{transform:translate(0)!important}.v-application--is-rtl .v-input--switch--inset .v-input--selection-controls__ripple,.v-application--is-rtl .v-input--switch--inset .v-input--switch__thumb{transform:translate(-6px)!important}.v-application--is-ltr .v-input--switch--inset.v-input--is-dirty .v-input--selection-controls__ripple,.v-application--is-ltr .v-input--switch--inset.v-input--is-dirty .v-input--switch__thumb{transform:translate(20px)!important}.v-application--is-rtl .v-input--switch--inset.v-input--is-dirty .v-input--selection-controls__ripple,.v-application--is-rtl .v-input--switch--inset.v-input--is-dirty .v-input--switch__thumb{transform:translate(-26px)!important}.theme--light.v-system-bar{background-color:#e0e0e0;color:rgba(0,0,0,.6)}.theme--light.v-system-bar .v-icon{color:rgba(0,0,0,.6)}.theme--light.v-system-bar--lights-out{background-color:hsla(0,0%,100%,.7)!important}.theme--dark.v-system-bar{background-color:#000;color:hsla(0,0%,100%,.7)}.theme--dark.v-system-bar .v-icon{color:hsla(0,0%,100%,.7)}.theme--dark.v-system-bar--lights-out{background-color:rgba(0,0,0,.2)!important}.v-system-bar{align-items:center;display:flex;font-size:.875rem;font-weight:400;padding:0 8px}.v-system-bar .v-icon{font-size:1rem;margin-right:4px}.v-system-bar--absolute,.v-system-bar--fixed{left:0;top:0;width:100%;z-index:3}.v-system-bar--fixed{position:fixed}.v-system-bar--absolute{position:absolute}.v-system-bar--window .v-icon{font-size:1.25rem;margin-right:8px}.theme--light.v-tabs>.v-tabs-bar{background-color:#fff}.theme--light.v-tabs>.v-tabs-bar .v-tab--disabled,.theme--light.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active),.theme--light.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active)>.v-btn,.theme--light.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active)>.v-icon{color:rgba(0,0,0,.54)}.theme--light.v-tabs .v-tab:hover:before{opacity:.04}.theme--light.v-tabs .v-tab--active:before,.theme--light.v-tabs .v-tab--active:hover:before,.theme--light.v-tabs .v-tab:focus:before{opacity:.12}.theme--light.v-tabs .v-tab--active:focus:before{opacity:.16}.theme--dark.v-tabs>.v-tabs-bar{background-color:#1e1e1e}.theme--dark.v-tabs>.v-tabs-bar .v-tab--disabled,.theme--dark.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active),.theme--dark.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active)>.v-btn,.theme--dark.v-tabs>.v-tabs-bar .v-tab:not(.v-tab--active)>.v-icon{color:hsla(0,0%,100%,.6)}.theme--dark.v-tabs .v-tab:hover:before{opacity:.08}.theme--dark.v-tabs .v-tab--active:before,.theme--dark.v-tabs .v-tab--active:hover:before,.theme--dark.v-tabs .v-tab:focus:before{opacity:.24}.theme--dark.v-tabs .v-tab--active:focus:before{opacity:.32}.theme--light.v-tabs-items{background-color:#fff}.theme--dark.v-tabs-items{background-color:#1e1e1e}.v-tabs-bar.accent .v-tab,.v-tabs-bar.accent .v-tabs-slider,.v-tabs-bar.error .v-tab,.v-tabs-bar.error .v-tabs-slider,.v-tabs-bar.info .v-tab,.v-tabs-bar.info .v-tabs-slider,.v-tabs-bar.primary .v-tab,.v-tabs-bar.primary .v-tabs-slider,.v-tabs-bar.secondary .v-tab,.v-tabs-bar.secondary .v-tabs-slider,.v-tabs-bar.success .v-tab,.v-tabs-bar.success .v-tabs-slider,.v-tabs-bar.warning .v-tab,.v-tabs-bar.warning .v-tabs-slider{color:#fff}.v-tabs{flex:1 1 auto;width:100%}.v-tabs .v-menu__activator{height:100%}.v-tabs:not(.v-tabs--vertical) .v-tab{white-space:normal}.v-tabs:not(.v-tabs--vertical).v-tabs--right>.v-slide-group--is-overflowing.v-tabs-bar--is-mobile:not(.v-slide-group--has-affixes) .v-slide-group__next,.v-tabs:not(.v-tabs--vertical):not(.v-tabs--right)>.v-slide-group--is-overflowing.v-tabs-bar--is-mobile:not(.v-slide-group--has-affixes) .v-slide-group__prev{display:initial;visibility:hidden}.v-tabs-bar{border-radius:inherit;height:48px}.v-tabs-bar.v-item-group>*{cursor:auto}.v-tab{align-items:center;display:flex;flex:0 1 auto;font-size:.875rem;font-weight:500;justify-content:center;letter-spacing:.0892857143em;line-height:normal;min-width:90px;max-width:360px;outline:none;padding:0 16px;position:relative;text-align:center;text-decoration:none;text-transform:uppercase;transition:none;user-select:none}.v-tab.v-tab{color:inherit}.v-tab:before{background-color:currentColor;bottom:0;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-tab:not(.v-tab-disabled){cursor:pointer}.v-tabs-slider{background-color:currentColor;height:100%;width:100%}.v-tabs-slider-wrapper{bottom:0;margin:0!important;position:absolute;transition:.3s cubic-bezier(.25,.8,.5,1);z-index:1}.v-application--is-ltr .v-tabs--align-with-title>.v-tabs-bar:not(.v-tabs-bar--show-arrows):not(.v-slide-group--is-overflowing)>.v-slide-group__wrapper>.v-tabs-bar__content>.v-tab:first-child,.v-application--is-ltr .v-tabs--align-with-title>.v-tabs-bar:not(.v-tabs-bar--show-arrows):not(.v-slide-group--is-overflowing)>.v-slide-group__wrapper>.v-tabs-bar__content>.v-tabs-slider-wrapper+.v-tab{margin-left:42px}.v-application--is-rtl .v-tabs--align-with-title>.v-tabs-bar:not(.v-tabs-bar--show-arrows):not(.v-slide-group--is-overflowing)>.v-slide-group__wrapper>.v-tabs-bar__content>.v-tab:first-child,.v-application--is-rtl .v-tabs--align-with-title>.v-tabs-bar:not(.v-tabs-bar--show-arrows):not(.v-slide-group--is-overflowing)>.v-slide-group__wrapper>.v-tabs-bar__content>.v-tabs-slider-wrapper+.v-tab{margin-right:42px}.v-application--is-ltr .v-tabs--centered>.v-tabs-bar .v-tabs-bar__content>:last-child,.v-application--is-ltr .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-bar__content>:last-child{margin-right:auto}.v-application--is-ltr .v-tabs--centered>.v-tabs-bar .v-tabs-bar__content>:first-child:not(.v-tabs-slider-wrapper),.v-application--is-ltr .v-tabs--centered>.v-tabs-bar .v-tabs-slider-wrapper+*,.v-application--is-ltr .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-bar__content>:first-child:not(.v-tabs-slider-wrapper),.v-application--is-ltr .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-slider-wrapper+*,.v-application--is-rtl .v-tabs--centered>.v-tabs-bar .v-tabs-bar__content>:last-child,.v-application--is-rtl .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-bar__content>:last-child{margin-left:auto}.v-application--is-rtl .v-tabs--centered>.v-tabs-bar .v-tabs-bar__content>:first-child:not(.v-tabs-slider-wrapper),.v-application--is-rtl .v-tabs--centered>.v-tabs-bar .v-tabs-slider-wrapper+*,.v-application--is-rtl .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-bar__content>:first-child:not(.v-tabs-slider-wrapper),.v-application--is-rtl .v-tabs--fixed-tabs>.v-tabs-bar .v-tabs-slider-wrapper+*{margin-right:auto}.v-tabs--fixed-tabs>.v-tabs-bar .v-tab{flex:1 1 auto;width:100%}.v-tabs--grow>.v-tabs-bar .v-tab{flex:1 0 auto;max-width:none}.v-tabs--icons-and-text>.v-tabs-bar{height:72px}.v-tabs--icons-and-text>.v-tabs-bar .v-tab{flex-direction:column-reverse}.v-tabs--icons-and-text>.v-tabs-bar .v-tab>:first-child{margin-bottom:6px}.v-tabs--overflow>.v-tabs-bar .v-tab{flex:1 0 auto}.v-application--is-ltr .v-tabs--right>.v-tabs-bar .v-tab:first-child,.v-application--is-ltr .v-tabs--right>.v-tabs-bar .v-tabs-slider-wrapper+.v-tab{margin-left:auto}.v-application--is-rtl .v-tabs--right>.v-tabs-bar .v-tab:first-child,.v-application--is-rtl .v-tabs--right>.v-tabs-bar .v-tabs-slider-wrapper+.v-tab{margin-right:auto}.v-application--is-ltr .v-tabs--right>.v-tabs-bar .v-tab:last-child{margin-right:0}.v-application--is-rtl .v-tabs--right>.v-tabs-bar .v-tab:last-child{margin-left:0}.v-tabs--vertical{display:flex}.v-tabs--vertical>.v-tabs-bar{flex:1 0 auto;height:auto}.v-tabs--vertical>.v-tabs-bar .v-slide-group__next,.v-tabs--vertical>.v-tabs-bar .v-slide-group__prev{display:none}.v-tabs--vertical>.v-tabs-bar .v-tabs-bar__content{flex-direction:column}.v-tabs--vertical>.v-tabs-bar .v-tab{height:48px}.v-tabs--vertical>.v-tabs-bar .v-tabs-slider{height:100%}.v-tabs--vertical>.v-window{flex:0 1 100%}.v-tabs--vertical.v-tabs--icons-and-text>.v-tabs-bar .v-tab{height:72px}.v-tab--active{color:inherit}.v-tab--active.v-tab:not(:focus):before{opacity:0}.v-tab--active .v-btn.v-btn--flat,.v-tab--active .v-icon{color:inherit}.v-tab--disabled{pointer-events:none;opacity:.5}.v-textarea textarea{align-self:stretch;flex:1 1 auto;line-height:1.75rem;max-width:100%;min-height:32px;outline:none;padding:0;width:100%}.v-textarea .v-text-field__prefix,.v-textarea .v-text-field__suffix{padding-top:2px;align-self:start}.v-textarea.v-text-field--box .v-text-field__prefix,.v-textarea.v-text-field--box textarea,.v-textarea.v-text-field--enclosed .v-text-field__prefix,.v-textarea.v-text-field--enclosed textarea{margin-top:24px}.v-textarea.v-text-field--box.v-text-field--outlined:not(.v-input--dense) .v-text-field__prefix,.v-textarea.v-text-field--box.v-text-field--outlined:not(.v-input--dense) .v-text-field__suffix,.v-textarea.v-text-field--box.v-text-field--outlined:not(.v-input--dense) textarea,.v-textarea.v-text-field--box.v-text-field--single-line:not(.v-input--dense) .v-text-field__prefix,.v-textarea.v-text-field--box.v-text-field--single-line:not(.v-input--dense) .v-text-field__suffix,.v-textarea.v-text-field--box.v-text-field--single-line:not(.v-input--dense) textarea,.v-textarea.v-text-field--enclosed.v-text-field--outlined:not(.v-input--dense) .v-text-field__prefix,.v-textarea.v-text-field--enclosed.v-text-field--outlined:not(.v-input--dense) .v-text-field__suffix,.v-textarea.v-text-field--enclosed.v-text-field--outlined:not(.v-input--dense) textarea,.v-textarea.v-text-field--enclosed.v-text-field--single-line:not(.v-input--dense) .v-text-field__prefix,.v-textarea.v-text-field--enclosed.v-text-field--single-line:not(.v-input--dense) .v-text-field__suffix,.v-textarea.v-text-field--enclosed.v-text-field--single-line:not(.v-input--dense) textarea{margin-top:10px}.v-textarea.v-text-field--box.v-text-field--outlined:not(.v-input--dense) .v-label,.v-textarea.v-text-field--box.v-text-field--single-line:not(.v-input--dense) .v-label,.v-textarea.v-text-field--enclosed.v-text-field--outlined:not(.v-input--dense) .v-label,.v-textarea.v-text-field--enclosed.v-text-field--single-line:not(.v-input--dense) .v-label{top:18px}.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-text-field__prefix,.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-text-field__suffix,.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense textarea,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-text-field__prefix,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-text-field__suffix,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense textarea,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-text-field__prefix,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-text-field__suffix,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense textarea,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-text-field__prefix,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-text-field__suffix,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense textarea{margin-top:6px}.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-input__append-inner,.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-input__append-outer,.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-input__prepend-inner,.v-textarea.v-text-field--box.v-text-field--outlined.v-input--dense .v-input__prepend-outer,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-input__append-inner,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-input__append-outer,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-input__prepend-inner,.v-textarea.v-text-field--box.v-text-field--single-line.v-input--dense .v-input__prepend-outer,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-input__append-inner,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-input__append-outer,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-input__prepend-inner,.v-textarea.v-text-field--enclosed.v-text-field--outlined.v-input--dense .v-input__prepend-outer,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-input__append-inner,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-input__append-outer,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-input__prepend-inner,.v-textarea.v-text-field--enclosed.v-text-field--single-line.v-input--dense .v-input__prepend-outer{align-self:flex-start;margin-top:8px}.v-textarea.v-text-field--solo{align-items:flex-start}.v-textarea.v-text-field--solo .v-input__append-inner,.v-textarea.v-text-field--solo .v-input__append-outer,.v-textarea.v-text-field--solo .v-input__prepend-inner,.v-textarea.v-text-field--solo .v-input__prepend-outer{align-self:flex-start;margin-top:12px}.v-application--is-ltr .v-textarea.v-text-field--solo .v-input__append-inner{padding-left:12px}.v-application--is-rtl .v-textarea.v-text-field--solo .v-input__append-inner{padding-right:12px}.v-textarea--auto-grow textarea{overflow:hidden}.v-textarea--no-resize textarea{resize:none}.v-textarea.v-text-field--enclosed .v-text-field__slot{align-self:stretch}.v-application--is-ltr .v-textarea.v-text-field--enclosed .v-text-field__slot{margin-right:-12px}.v-application--is-rtl .v-textarea.v-text-field--enclosed .v-text-field__slot{margin-left:-12px}.v-application--is-ltr .v-textarea.v-text-field--enclosed .v-text-field__slot textarea{padding-right:12px}.v-application--is-rtl .v-textarea.v-text-field--enclosed .v-text-field__slot textarea{padding-left:12px}.theme--light.v-timeline:before{background:rgba(0,0,0,.12)}.theme--light.v-timeline .v-timeline-item__dot{background:#fff}.theme--light.v-timeline .v-timeline-item .v-card:before{border-right-color:rgba(0,0,0,.12)}.theme--dark.v-timeline:before{background:hsla(0,0%,100%,.12)}.theme--dark.v-timeline .v-timeline-item__dot{background:#1e1e1e}.theme--dark.v-timeline .v-timeline-item .v-card:before{border-right-color:rgba(0,0,0,.12)}.v-timeline{padding-top:24px;position:relative}.v-timeline:before{bottom:0;content:"";height:100%;position:absolute;top:0;width:2px}.v-timeline-item{display:flex;padding-bottom:24px}.v-timeline-item__body{position:relative;height:100%;flex:1 1 auto}.v-timeline-item__divider{position:relative;min-width:96px;display:flex;align-items:center;justify-content:center}.v-timeline-item__dot{z-index:2;border-radius:50%;box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12);height:38px;left:calc(50% - 19px);width:38px}.v-timeline-item__dot .v-timeline-item__inner-dot{height:30px;margin:4px;width:30px}.v-timeline-item__dot--small{height:24px;left:calc(50% - 12px);width:24px}.v-timeline-item__dot--small .v-timeline-item__inner-dot{height:18px;margin:3px;width:18px}.v-timeline-item__dot--large{height:52px;left:calc(50% - 26px);width:52px}.v-timeline-item__dot--large .v-timeline-item__inner-dot{height:42px;margin:5px;width:42px}.v-timeline-item__inner-dot{border-radius:50%;display:flex;justify-content:center;align-items:center}.v-timeline-item__opposite{flex:1 1 auto;align-self:center;max-width:calc(50% - 48px)}.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after,.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before){flex-direction:row-reverse}.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__opposite,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__opposite{text-align:right}.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__opposite,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__opposite{text-align:left}.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__body>.v-card:before,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__body>.v-card:before{transform:rotate(0);left:-10px;right:auto}.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__body>.v-card:before,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__body>.v-card:before{transform:rotate(180deg);left:auto;right:-10px}.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--after .v-timeline-item__body,.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(odd):not(.v-timeline-item--before) .v-timeline-item__body{max-width:calc(50% - 48px)}.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before,.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after){flex-direction:row}.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__opposite,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__opposite{text-align:left}.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__opposite,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__opposite{text-align:right}.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__body>.v-card:before,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__body>.v-card:before{transform:rotate(180deg);right:-10px;left:auto}.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__body>.v-card:before,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__body>.v-card:before{transform:rotate(0);right:auto;left:-10px}.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item--before .v-timeline-item__body,.v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse) .v-timeline-item:nth-child(2n):not(.v-timeline-item--after) .v-timeline-item__body{max-width:calc(50% - 48px)}.v-timeline-item__body>.v-card:not(.v-card--flat):after,.v-timeline-item__body>.v-card:not(.v-card--flat):before{content:"";position:absolute;border-top:10px solid transparent;border-bottom:10px solid transparent;border-right:10px solid #000;top:calc(50% - 10px)}.v-timeline-item__body>.v-card:not(.v-card--flat):after{border-right-color:inherit}.v-timeline-item__body>.v-card:not(.v-card--flat):before{top:calc(50% - 8px)}.v-timeline--align-top .v-timeline-item__dot{align-self:start}.v-timeline--align-top .v-timeline-item__body>.v-card:before{top:12px}.v-timeline--align-top .v-timeline-item__body>.v-card:after{top:10px}.v-application--is-ltr .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse):before{left:calc(50% - 1px);right:auto}.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense):before,.v-application--is-rtl .v-timeline:not(.v-timeline--dense):not(.v-timeline--reverse):before{left:auto;right:calc(50% - 1px)}.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense):before{right:auto;left:calc(50% - 1px)}.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before,.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after){flex-direction:row}.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__opposite,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__opposite{text-align:left}.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__opposite,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__opposite{text-align:right}.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__body>.v-card:before,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__body>.v-card:before{transform:rotate(180deg);right:-10px;left:auto}.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__body>.v-card:before,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__body>.v-card:before{transform:rotate(0);right:auto;left:-10px}.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--before .v-timeline-item__body,.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(odd):not(.v-timeline-item--after) .v-timeline-item__body{max-width:calc(50% - 48px)}.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after,.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before){flex-direction:row-reverse}.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__opposite,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__opposite{text-align:right}.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__opposite,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__opposite{text-align:left}.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__body>.v-card:before,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__body>.v-card:before{transform:rotate(0);left:-10px;right:auto}.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__body>.v-card:before,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__body>.v-card:before{transform:rotate(180deg);left:auto;right:-10px}.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item--after .v-timeline-item__body,.v-timeline--reverse:not(.v-timeline--dense) .v-timeline-item:nth-child(2n):not(.v-timeline-item--before) .v-timeline-item__body{max-width:calc(50% - 48px)}.v-application--is-ltr .v-timeline--reverse.v-timeline--dense:before{right:47px;left:auto}.v-application--is-ltr .v-timeline--dense:not(.v-timeline--reverse):before,.v-application--is-rtl .v-timeline--reverse.v-timeline--dense:before{right:auto;left:47px}.v-application--is-rtl .v-timeline--dense:not(.v-timeline--reverse):before{left:auto;right:47px}.v-timeline--dense .v-timeline-item{flex-direction:row-reverse!important}.v-application--is-ltr .v-timeline--dense .v-timeline-item .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--dense .v-timeline-item .v-timeline-item__body>.v-card:before{transform:rotate(0);left:-10px;right:auto}.v-application--is-rtl .v-timeline--dense .v-timeline-item .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--dense .v-timeline-item .v-timeline-item__body>.v-card:before{transform:rotate(180deg);left:auto;right:-10px}.v-timeline--dense .v-timeline-item__body{max-width:calc(100% - 96px)}.v-timeline--dense .v-timeline-item__opposite{display:none}.v-timeline--reverse.v-timeline--dense .v-timeline-item{flex-direction:row!important}.v-application--is-ltr .v-timeline--reverse.v-timeline--dense .v-timeline-item .v-timeline-item__body .v-card:after,.v-application--is-ltr .v-timeline--reverse.v-timeline--dense .v-timeline-item .v-timeline-item__body>.v-card:before{transform:rotate(180deg);right:-10px;left:auto}.v-application--is-rtl .v-timeline--reverse.v-timeline--dense .v-timeline-item .v-timeline-item__body .v-card:after,.v-application--is-rtl .v-timeline--reverse.v-timeline--dense .v-timeline-item .v-timeline-item__body>.v-card:before{transform:rotate(0);right:auto;left:-10px}.v-timeline-item--fill-dot .v-timeline-item__inner-dot{height:inherit;margin:0;width:inherit}.theme--light.v-time-picker-clock{background:#e0e0e0}.theme--light.v-time-picker-clock .v-time-picker-clock__item--disabled{color:rgba(0,0,0,.26)}.theme--light.v-time-picker-clock .v-time-picker-clock__item--disabled.v-time-picker-clock__item--active{color:hsla(0,0%,100%,.3)}.theme--light.v-time-picker-clock--indeterminate .v-time-picker-clock__hand{background-color:#bdbdbd}.theme--light.v-time-picker-clock--indeterminate:after{color:#bdbdbd}.theme--light.v-time-picker-clock--indeterminate .v-time-picker-clock__item--active{background-color:#bdbdbd}.theme--dark.v-time-picker-clock{background:#616161}.theme--dark.v-time-picker-clock .v-time-picker-clock__item--disabled,.theme--dark.v-time-picker-clock .v-time-picker-clock__item--disabled.v-time-picker-clock__item--active{color:hsla(0,0%,100%,.3)}.theme--dark.v-time-picker-clock--indeterminate .v-time-picker-clock__hand{background-color:#757575}.theme--dark.v-time-picker-clock--indeterminate:after{color:#757575}.theme--dark.v-time-picker-clock--indeterminate .v-time-picker-clock__item--active{background-color:#757575}.v-time-picker-clock{border-radius:100%;position:relative;transition:.3s cubic-bezier(.25,.8,.5,1);user-select:none;width:100%;padding-top:100%;flex:1 0 auto}.v-time-picker-clock__container{display:flex;flex-direction:column;justify-content:center;padding:10px}.v-time-picker-clock__ampm{display:flex;flex-direction:row;justify-content:space-between;align-items:flex-end;position:absolute;width:100%;height:100%;top:0;left:0;margin:0;padding:10px}.v-time-picker-clock__hand{height:calc(50% - 4px);width:2px;bottom:50%;left:calc(50% - 1px);transform-origin:center bottom;position:absolute;will-change:transform;z-index:1}.v-time-picker-clock__hand:before{background:transparent;border:2px solid;border-color:inherit;border-radius:100%;width:10px;height:10px;top:-4px}.v-time-picker-clock__hand:after,.v-time-picker-clock__hand:before{content:"";position:absolute;left:50%;transform:translate(-50%,-50%)}.v-time-picker-clock__hand:after{height:8px;width:8px;top:100%;border-radius:100%;border-style:solid;border-color:inherit;background-color:inherit}.v-time-picker-clock__hand--inner:after{height:14px}.v-picker--full-width .v-time-picker-clock__container{max-width:290px}.v-time-picker-clock__inner{position:absolute;bottom:27px;left:27px;right:27px;top:27px}.v-time-picker-clock__item{align-items:center;border-radius:100%;cursor:default;display:flex;font-size:16px;justify-content:center;height:40px;position:absolute;text-align:center;width:40px;user-select:none;transform:translate(-50%,-50%)}.v-time-picker-clock__item>span{z-index:1}.v-time-picker-clock__item:after,.v-time-picker-clock__item:before{content:"";border-radius:100%;position:absolute;top:50%;left:50%;height:14px;width:14px;transform:translate(-50%,-50%);height:40px;width:40px}.v-time-picker-clock__item--active{color:#fff;cursor:default;z-index:2}.v-time-picker-clock__item--disabled{pointer-events:none}.v-picker--landscape .v-time-picker-clock__container{flex-direction:row}.v-picker--landscape .v-time-picker-clock__ampm{flex-direction:column}.v-time-picker-title{color:#fff;display:flex;line-height:1;justify-content:flex-end}.v-time-picker-title__time{white-space:nowrap;direction:ltr}.v-time-picker-title__time .v-picker__title__btn,.v-time-picker-title__time span{align-items:center;display:inline-flex;height:70px;font-size:70px;justify-content:center}.v-time-picker-title__ampm{align-self:flex-end;display:flex;flex-direction:column;font-size:16px;text-transform:uppercase}.v-application--is-ltr .v-time-picker-title__ampm{margin:0 0 6px 8px}.v-application--is-rtl .v-time-picker-title__ampm{margin:0 8px 6px 0}.v-time-picker-title__ampm div:only-child{flex-direction:row}.v-time-picker-title__ampm--readonly .v-picker__title__btn.v-picker__title__btn--active{opacity:.6}.v-picker__title--landscape .v-time-picker-title{flex-direction:column;justify-content:center;height:100%}.v-picker__title--landscape .v-time-picker-title__time{text-align:right}.v-picker__title--landscape .v-time-picker-title__time .v-picker__title__btn,.v-picker__title--landscape .v-time-picker-title__time span{height:55px;font-size:55px}.v-picker__title--landscape .v-time-picker-title__ampm{margin:16px 0 0;align-self:auto;text-align:center}.v-picker--time .v-picker__title--landscape{padding:0}.v-picker--time .v-picker__title--landscape .v-time-picker-title__time{text-align:center}.v-tooltip{display:none}.v-tooltip--attached{display:inline}.v-tooltip__content{background:rgba(97,97,97,.9);color:#fff;border-radius:4px;font-size:14px;line-height:22px;display:inline-block;padding:5px 16px;position:absolute;text-transform:none;width:auto;opacity:1;pointer-events:none}.v-tooltip__content--fixed{position:fixed}.v-tooltip__content[class*=-active]{transition-timing-function:cubic-bezier(0,0,.2,1)}.v-tooltip__content[class*=enter-active]{transition-duration:.15s}.v-tooltip__content[class*=leave-active]{transition-duration:75ms}.theme--light.v-treeview{color:rgba(0,0,0,.87)}.theme--light.v-treeview--hoverable .v-treeview-node__root:hover:before,.theme--light.v-treeview .v-treeview-node--click>.v-treeview-node__root:hover:before{opacity:.04}.theme--light.v-treeview--hoverable .v-treeview-node__root--active:before,.theme--light.v-treeview--hoverable .v-treeview-node__root--active:hover:before,.theme--light.v-treeview--hoverable .v-treeview-node__root:focus:before,.theme--light.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:before,.theme--light.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:hover:before,.theme--light.v-treeview .v-treeview-node--click>.v-treeview-node__root:focus:before{opacity:.12}.theme--light.v-treeview--hoverable .v-treeview-node__root--active:focus:before,.theme--light.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:focus:before{opacity:.16}.theme--light.v-treeview .v-treeview-node__root.v-treeview-node--active:before,.theme--light.v-treeview .v-treeview-node__root.v-treeview-node--active:hover:before{opacity:.12}.theme--light.v-treeview .v-treeview-node__root.v-treeview-node--active:focus:before{opacity:.16}.theme--light.v-treeview .v-treeview-node--disabled>.v-treeview-node__root>.v-treeview-node__content{color:rgba(0,0,0,.38)!important}.theme--dark.v-treeview{color:#fff}.theme--dark.v-treeview--hoverable .v-treeview-node__root:hover:before,.theme--dark.v-treeview .v-treeview-node--click>.v-treeview-node__root:hover:before{opacity:.08}.theme--dark.v-treeview--hoverable .v-treeview-node__root--active:before,.theme--dark.v-treeview--hoverable .v-treeview-node__root--active:hover:before,.theme--dark.v-treeview--hoverable .v-treeview-node__root:focus:before,.theme--dark.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:before,.theme--dark.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:hover:before,.theme--dark.v-treeview .v-treeview-node--click>.v-treeview-node__root:focus:before{opacity:.24}.theme--dark.v-treeview--hoverable .v-treeview-node__root--active:focus:before,.theme--dark.v-treeview .v-treeview-node--click>.v-treeview-node__root--active:focus:before{opacity:.32}.theme--dark.v-treeview .v-treeview-node__root.v-treeview-node--active:before,.theme--dark.v-treeview .v-treeview-node__root.v-treeview-node--active:hover:before{opacity:.24}.theme--dark.v-treeview .v-treeview-node__root.v-treeview-node--active:focus:before{opacity:.32}.theme--dark.v-treeview .v-treeview-node--disabled>.v-treeview-node__root>.v-treeview-node__content{color:hsla(0,0%,100%,.5)!important}.v-treeview-node.v-treeview-node--shaped .v-treeview-node__root,.v-treeview-node.v-treeview-node--shaped .v-treeview-node__root:before{border-bottom-right-radius:24px!important;border-top-right-radius:24px!important}.v-treeview-node.v-treeview-node--shaped .v-treeview-node__root{margin-top:8px;margin-bottom:8px}.v-treeview-node.v-treeview-node--rounded .v-treeview-node__root,.v-treeview-node.v-treeview-node--rounded .v-treeview-node__root:before{border-radius:24px!important}.v-treeview-node.v-treeview-node--rounded .v-treeview-node__root{margin-top:8px;margin-bottom:8px}.v-treeview-node--excluded{display:none}.v-treeview-node--click>.v-treeview-node__root,.v-treeview-node--click>.v-treeview-node__root>.v-treeview-node__content>*{cursor:pointer;user-select:none}.v-treeview-node.v-treeview-node--active .v-treeview-node__content .v-icon{color:inherit}.v-treeview-node__root{display:flex;align-items:center;min-height:48px;padding-left:8px;padding-right:8px;position:relative}.v-treeview-node__root:before{background-color:currentColor;bottom:0;content:"";left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:.3s cubic-bezier(.25,.8,.5,1)}.v-treeview-node__root:after{content:"";font-size:0;min-height:inherit}.v-treeview-node__children{transition:all .2s cubic-bezier(0,0,.2,1)}.v-treeview--dense .v-treeview-node__root{min-height:40px}.v-treeview--dense.v-treeview-node--shaped .v-treeview-node__root,.v-treeview--dense.v-treeview-node--shaped .v-treeview-node__root:before{border-bottom-right-radius:20px!important;border-top-right-radius:20px!important}.v-treeview--dense.v-treeview-node--shaped .v-treeview-node__root{margin-top:8px;margin-bottom:8px}.v-treeview--dense.v-treeview-node--rounded .v-treeview-node__root,.v-treeview--dense.v-treeview-node--rounded .v-treeview-node__root:before{border-radius:20px!important}.v-treeview--dense.v-treeview-node--rounded .v-treeview-node__root{margin-top:8px;margin-bottom:8px}.v-treeview-node__checkbox{width:24px;user-select:none}.v-application--is-ltr .v-treeview-node__checkbox{margin-left:6px}.v-application--is-rtl .v-treeview-node__checkbox{margin-right:6px}.v-treeview-node__toggle{width:24px;user-select:none}.v-treeview-node__toggle--loading{animation:progress-circular-rotate 1s linear infinite}.v-application--is-ltr .v-treeview-node__toggle{transform:rotate(-90deg)}.v-application--is-ltr .v-treeview-node__toggle--open{transform:none}.v-application--is-rtl .v-treeview-node__toggle{transform:rotate(90deg)}.v-application--is-rtl .v-treeview-node__toggle--open{transform:none}.v-treeview-node__prepend{min-width:24px}.v-application--is-ltr .v-treeview-node__prepend{margin-right:6px}.v-application--is-rtl .v-treeview-node__prepend{margin-left:6px}.v-treeview-node__append{min-width:24px}.v-application--is-ltr .v-treeview-node__append{margin-left:6px}.v-application--is-rtl .v-treeview-node__append{margin-right:6px}.v-treeview-node__level{width:24px}.v-treeview-node__label{flex:1;font-size:inherit;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.v-treeview-node__content{align-items:center;display:flex;flex-basis:0%;flex-grow:1;flex-shrink:0;min-width:0}.v-treeview-node__content .v-btn{flex-grow:0!important;flex-shrink:1!important}.v-application--is-ltr .v-treeview-node__content{margin-left:6px}.v-application--is-rtl .v-treeview-node__content{margin-right:6px}.v-virtual-scroll{display:block;flex:1 1 auto;height:100%;max-width:100%;overflow:auto;position:relative}.v-virtual-scroll__container{display:block}.v-virtual-scroll__item{left:0;position:absolute;right:0}</style><style type="text/css" id="vuetify-theme-stylesheet">.v-application a { color: #1976d2; }
.v-application .primary {
  background-color: #1976d2 !important;
  border-color: #1976d2 !important;
}
.v-application .primary--text {
  color: #1976d2 !important;
  caret-color: #1976d2 !important;
}
.v-application .primary.lighten-5 {
  background-color: #c7fdff !important;
  border-color: #c7fdff !important;
}
.v-application .primary--text.text--lighten-5 {
  color: #c7fdff !important;
  caret-color: #c7fdff !important;
}
.v-application .primary.lighten-4 {
  background-color: #a8e0ff !important;
  border-color: #a8e0ff !important;
}
.v-application .primary--text.text--lighten-4 {
  color: #a8e0ff !important;
  caret-color: #a8e0ff !important;
}
.v-application .primary.lighten-3 {
  background-color: #8ac5ff !important;
  border-color: #8ac5ff !important;
}
.v-application .primary--text.text--lighten-3 {
  color: #8ac5ff !important;
  caret-color: #8ac5ff !important;
}
.v-application .primary.lighten-2 {
  background-color: #6aaaff !important;
  border-color: #6aaaff !important;
}
.v-application .primary--text.text--lighten-2 {
  color: #6aaaff !important;
  caret-color: #6aaaff !important;
}
.v-application .primary.lighten-1 {
  background-color: #488fef !important;
  border-color: #488fef !important;
}
.v-application .primary--text.text--lighten-1 {
  color: #488fef !important;
  caret-color: #488fef !important;
}
.v-application .primary.darken-1 {
  background-color: #005eb6 !important;
  border-color: #005eb6 !important;
}
.v-application .primary--text.text--darken-1 {
  color: #005eb6 !important;
  caret-color: #005eb6 !important;
}
.v-application .primary.darken-2 {
  background-color: #00479b !important;
  border-color: #00479b !important;
}
.v-application .primary--text.text--darken-2 {
  color: #00479b !important;
  caret-color: #00479b !important;
}
.v-application .primary.darken-3 {
  background-color: #003180 !important;
  border-color: #003180 !important;
}
.v-application .primary--text.text--darken-3 {
  color: #003180 !important;
  caret-color: #003180 !important;
}
.v-application .primary.darken-4 {
  background-color: #001e67 !important;
  border-color: #001e67 !important;
}
.v-application .primary--text.text--darken-4 {
  color: #001e67 !important;
  caret-color: #001e67 !important;
}
.v-application .secondary {
  background-color: #424242 !important;
  border-color: #424242 !important;
}
.v-application .secondary--text {
  color: #424242 !important;
  caret-color: #424242 !important;
}
.v-application .secondary.lighten-5 {
  background-color: #c1c1c1 !important;
  border-color: #c1c1c1 !important;
}
.v-application .secondary--text.text--lighten-5 {
  color: #c1c1c1 !important;
  caret-color: #c1c1c1 !important;
}
.v-application .secondary.lighten-4 {
  background-color: #a6a6a6 !important;
  border-color: #a6a6a6 !important;
}
.v-application .secondary--text.text--lighten-4 {
  color: #a6a6a6 !important;
  caret-color: #a6a6a6 !important;
}
.v-application .secondary.lighten-3 {
  background-color: #8b8b8b !important;
  border-color: #8b8b8b !important;
}
.v-application .secondary--text.text--lighten-3 {
  color: #8b8b8b !important;
  caret-color: #8b8b8b !important;
}
.v-application .secondary.lighten-2 {
  background-color: #727272 !important;
  border-color: #727272 !important;
}
.v-application .secondary--text.text--lighten-2 {
  color: #727272 !important;
  caret-color: #727272 !important;
}
.v-application .secondary.lighten-1 {
  background-color: #595959 !important;
  border-color: #595959 !important;
}
.v-application .secondary--text.text--lighten-1 {
  color: #595959 !important;
  caret-color: #595959 !important;
}
.v-application .secondary.darken-1 {
  background-color: #2c2c2c !important;
  border-color: #2c2c2c !important;
}
.v-application .secondary--text.text--darken-1 {
  color: #2c2c2c !important;
  caret-color: #2c2c2c !important;
}
.v-application .secondary.darken-2 {
  background-color: #171717 !important;
  border-color: #171717 !important;
}
.v-application .secondary--text.text--darken-2 {
  color: #171717 !important;
  caret-color: #171717 !important;
}
.v-application .secondary.darken-3 {
  background-color: #000000 !important;
  border-color: #000000 !important;
}
.v-application .secondary--text.text--darken-3 {
  color: #000000 !important;
  caret-color: #000000 !important;
}
.v-application .secondary.darken-4 {
  background-color: #000000 !important;
  border-color: #000000 !important;
}
.v-application .secondary--text.text--darken-4 {
  color: #000000 !important;
  caret-color: #000000 !important;
}
.v-application .accent {
  background-color: #82b1ff !important;
  border-color: #82b1ff !important;
}
.v-application .accent--text {
  color: #82b1ff !important;
  caret-color: #82b1ff !important;
}
.v-application .accent.lighten-5 {
  background-color: #ffffff !important;
  border-color: #ffffff !important;
}
.v-application .accent--text.text--lighten-5 {
  color: #ffffff !important;
  caret-color: #ffffff !important;
}
.v-application .accent.lighten-4 {
  background-color: #f8ffff !important;
  border-color: #f8ffff !important;
}
.v-application .accent--text.text--lighten-4 {
  color: #f8ffff !important;
  caret-color: #f8ffff !important;
}
.v-application .accent.lighten-3 {
  background-color: #daffff !important;
  border-color: #daffff !important;
}
.v-application .accent--text.text--lighten-3 {
  color: #daffff !important;
  caret-color: #daffff !important;
}
.v-application .accent.lighten-2 {
  background-color: #bce8ff !important;
  border-color: #bce8ff !important;
}
.v-application .accent--text.text--lighten-2 {
  color: #bce8ff !important;
  caret-color: #bce8ff !important;
}
.v-application .accent.lighten-1 {
  background-color: #9fccff !important;
  border-color: #9fccff !important;
}
.v-application .accent--text.text--lighten-1 {
  color: #9fccff !important;
  caret-color: #9fccff !important;
}
.v-application .accent.darken-1 {
  background-color: #6596e2 !important;
  border-color: #6596e2 !important;
}
.v-application .accent--text.text--darken-1 {
  color: #6596e2 !important;
  caret-color: #6596e2 !important;
}
.v-application .accent.darken-2 {
  background-color: #467dc6 !important;
  border-color: #467dc6 !important;
}
.v-application .accent--text.text--darken-2 {
  color: #467dc6 !important;
  caret-color: #467dc6 !important;
}
.v-application .accent.darken-3 {
  background-color: #2364aa !important;
  border-color: #2364aa !important;
}
.v-application .accent--text.text--darken-3 {
  color: #2364aa !important;
  caret-color: #2364aa !important;
}
.v-application .accent.darken-4 {
  background-color: #004c90 !important;
  border-color: #004c90 !important;
}
.v-application .accent--text.text--darken-4 {
  color: #004c90 !important;
  caret-color: #004c90 !important;
}
.v-application .error {
  background-color: #ff5252 !important;
  border-color: #ff5252 !important;
}
.v-application .error--text {
  color: #ff5252 !important;
  caret-color: #ff5252 !important;
}
.v-application .error.lighten-5 {
  background-color: #ffe4d5 !important;
  border-color: #ffe4d5 !important;
}
.v-application .error--text.text--lighten-5 {
  color: #ffe4d5 !important;
  caret-color: #ffe4d5 !important;
}
.v-application .error.lighten-4 {
  background-color: #ffc6b9 !important;
  border-color: #ffc6b9 !important;
}
.v-application .error--text.text--lighten-4 {
  color: #ffc6b9 !important;
  caret-color: #ffc6b9 !important;
}
.v-application .error.lighten-3 {
  background-color: #ffa99e !important;
  border-color: #ffa99e !important;
}
.v-application .error--text.text--lighten-3 {
  color: #ffa99e !important;
  caret-color: #ffa99e !important;
}
.v-application .error.lighten-2 {
  background-color: #ff8c84 !important;
  border-color: #ff8c84 !important;
}
.v-application .error--text.text--lighten-2 {
  color: #ff8c84 !important;
  caret-color: #ff8c84 !important;
}
.v-application .error.lighten-1 {
  background-color: #ff6f6a !important;
  border-color: #ff6f6a !important;
}
.v-application .error--text.text--lighten-1 {
  color: #ff6f6a !important;
  caret-color: #ff6f6a !important;
}
.v-application .error.darken-1 {
  background-color: #df323b !important;
  border-color: #df323b !important;
}
.v-application .error--text.text--darken-1 {
  color: #df323b !important;
  caret-color: #df323b !important;
}
.v-application .error.darken-2 {
  background-color: #bf0025 !important;
  border-color: #bf0025 !important;
}
.v-application .error--text.text--darken-2 {
  color: #bf0025 !important;
  caret-color: #bf0025 !important;
}
.v-application .error.darken-3 {
  background-color: #9f0010 !important;
  border-color: #9f0010 !important;
}
.v-application .error--text.text--darken-3 {
  color: #9f0010 !important;
  caret-color: #9f0010 !important;
}
.v-application .error.darken-4 {
  background-color: #800000 !important;
  border-color: #800000 !important;
}
.v-application .error--text.text--darken-4 {
  color: #800000 !important;
  caret-color: #800000 !important;
}
.v-application .info {
  background-color: #2196f3 !important;
  border-color: #2196f3 !important;
}
.v-application .info--text {
  color: #2196f3 !important;
  caret-color: #2196f3 !important;
}
.v-application .info.lighten-5 {
  background-color: #d4ffff !important;
  border-color: #d4ffff !important;
}
.v-application .info--text.text--lighten-5 {
  color: #d4ffff !important;
  caret-color: #d4ffff !important;
}
.v-application .info.lighten-4 {
  background-color: #b5ffff !important;
  border-color: #b5ffff !important;
}
.v-application .info--text.text--lighten-4 {
  color: #b5ffff !important;
  caret-color: #b5ffff !important;
}
.v-application .info.lighten-3 {
  background-color: #95e8ff !important;
  border-color: #95e8ff !important;
}
.v-application .info--text.text--lighten-3 {
  color: #95e8ff !important;
  caret-color: #95e8ff !important;
}
.v-application .info.lighten-2 {
  background-color: #75ccff !important;
  border-color: #75ccff !important;
}
.v-application .info--text.text--lighten-2 {
  color: #75ccff !important;
  caret-color: #75ccff !important;
}
.v-application .info.lighten-1 {
  background-color: #51b0ff !important;
  border-color: #51b0ff !important;
}
.v-application .info--text.text--lighten-1 {
  color: #51b0ff !important;
  caret-color: #51b0ff !important;
}
.v-application .info.darken-1 {
  background-color: #007cd6 !important;
  border-color: #007cd6 !important;
}
.v-application .info--text.text--darken-1 {
  color: #007cd6 !important;
  caret-color: #007cd6 !important;
}
.v-application .info.darken-2 {
  background-color: #0064ba !important;
  border-color: #0064ba !important;
}
.v-application .info--text.text--darken-2 {
  color: #0064ba !important;
  caret-color: #0064ba !important;
}
.v-application .info.darken-3 {
  background-color: #004d9f !important;
  border-color: #004d9f !important;
}
.v-application .info--text.text--darken-3 {
  color: #004d9f !important;
  caret-color: #004d9f !important;
}
.v-application .info.darken-4 {
  background-color: #003784 !important;
  border-color: #003784 !important;
}
.v-application .info--text.text--darken-4 {
  color: #003784 !important;
  caret-color: #003784 !important;
}
.v-application .success {
  background-color: #4caf50 !important;
  border-color: #4caf50 !important;
}
.v-application .success--text {
  color: #4caf50 !important;
  caret-color: #4caf50 !important;
}
.v-application .success.lighten-5 {
  background-color: #dcffd6 !important;
  border-color: #dcffd6 !important;
}
.v-application .success--text.text--lighten-5 {
  color: #dcffd6 !important;
  caret-color: #dcffd6 !important;
}
.v-application .success.lighten-4 {
  background-color: #beffba !important;
  border-color: #beffba !important;
}
.v-application .success--text.text--lighten-4 {
  color: #beffba !important;
  caret-color: #beffba !important;
}
.v-application .success.lighten-3 {
  background-color: #a2ff9e !important;
  border-color: #a2ff9e !important;
}
.v-application .success--text.text--lighten-3 {
  color: #a2ff9e !important;
  caret-color: #a2ff9e !important;
}
.v-application .success.lighten-2 {
  background-color: #85e783 !important;
  border-color: #85e783 !important;
}
.v-application .success--text.text--lighten-2 {
  color: #85e783 !important;
  caret-color: #85e783 !important;
}
.v-application .success.lighten-1 {
  background-color: #69cb69 !important;
  border-color: #69cb69 !important;
}
.v-application .success--text.text--lighten-1 {
  color: #69cb69 !important;
  caret-color: #69cb69 !important;
}
.v-application .success.darken-1 {
  background-color: #2d9437 !important;
  border-color: #2d9437 !important;
}
.v-application .success--text.text--darken-1 {
  color: #2d9437 !important;
  caret-color: #2d9437 !important;
}
.v-application .success.darken-2 {
  background-color: #00791e !important;
  border-color: #00791e !important;
}
.v-application .success--text.text--darken-2 {
  color: #00791e !important;
  caret-color: #00791e !important;
}
.v-application .success.darken-3 {
  background-color: #006000 !important;
  border-color: #006000 !important;
}
.v-application .success--text.text--darken-3 {
  color: #006000 !important;
  caret-color: #006000 !important;
}
.v-application .success.darken-4 {
  background-color: #004700 !important;
  border-color: #004700 !important;
}
.v-application .success--text.text--darken-4 {
  color: #004700 !important;
  caret-color: #004700 !important;
}
.v-application .warning {
  background-color: #fb8c00 !important;
  border-color: #fb8c00 !important;
}
.v-application .warning--text {
  color: #fb8c00 !important;
  caret-color: #fb8c00 !important;
}
.v-application .warning.lighten-5 {
  background-color: #ffff9e !important;
  border-color: #ffff9e !important;
}
.v-application .warning--text.text--lighten-5 {
  color: #ffff9e !important;
  caret-color: #ffff9e !important;
}
.v-application .warning.lighten-4 {
  background-color: #fffb82 !important;
  border-color: #fffb82 !important;
}
.v-application .warning--text.text--lighten-4 {
  color: #fffb82 !important;
  caret-color: #fffb82 !important;
}
.v-application .warning.lighten-3 {
  background-color: #ffdf67 !important;
  border-color: #ffdf67 !important;
}
.v-application .warning--text.text--lighten-3 {
  color: #ffdf67 !important;
  caret-color: #ffdf67 !important;
}
.v-application .warning.lighten-2 {
  background-color: #ffc24b !important;
  border-color: #ffc24b !important;
}
.v-application .warning--text.text--lighten-2 {
  color: #ffc24b !important;
  caret-color: #ffc24b !important;
}
.v-application .warning.lighten-1 {
  background-color: #ffa72d !important;
  border-color: #ffa72d !important;
}
.v-application .warning--text.text--lighten-1 {
  color: #ffa72d !important;
  caret-color: #ffa72d !important;
}
.v-application .warning.darken-1 {
  background-color: #db7200 !important;
  border-color: #db7200 !important;
}
.v-application .warning--text.text--darken-1 {
  color: #db7200 !important;
  caret-color: #db7200 !important;
}
.v-application .warning.darken-2 {
  background-color: #bb5900 !important;
  border-color: #bb5900 !important;
}
.v-application .warning--text.text--darken-2 {
  color: #bb5900 !important;
  caret-color: #bb5900 !important;
}
.v-application .warning.darken-3 {
  background-color: #9d4000 !important;
  border-color: #9d4000 !important;
}
.v-application .warning--text.text--darken-3 {
  color: #9d4000 !important;
  caret-color: #9d4000 !important;
}
.v-application .warning.darken-4 {
  background-color: #802700 !important;
  border-color: #802700 !important;
}
.v-application .warning--text.text--darken-4 {
  color: #802700 !important;
  caret-color: #802700 !important;
}</style></head>
<body>
<main>
  <div id="app"><div data-app="true" class="v-application v-application--is-ltr theme--light" id="app"><div class="v-application--wrap"><div class="v-card v-sheet theme--light rounded-0"><div class="v-card v-sheet theme--light rounded-0 light-blue"><div class="container ma-0 pa-0 container--fluid"><div class="row ma-0 pa-0"><div class="ma-0 pa-0 col col-12"><p></p></div></div> <div class="row no-gutters"><div class="ma-0 pa-0 col col-2"><a href="https://portal.tech-base.net/" class="router-link-active"><div class="v-image v-responsive theme--light" style="max-height: 72px;"><div class="v-responsive__sizer" style="padding-bottom: 50%;"></div><div class="v-image__image v-image__image--cover" style="background-image: url(&quot;https://portal.tech-base.net/img/LOGO_A2.png&quot;); background-position: left center;"></div><div class="v-responsive__content"></div></div></a></div> <div right="" class="pl-4 col col-10"><div class="v-tabs v-tabs--fixed-tabs v-tabs--icons-and-text theme--dark"><div role="tablist" class="v-item-group theme--dark v-slide-group v-tabs-bar white--text white" data-booted="true"><div class="v-slide-group__prev v-slide-group__prev--disabled"><!----></div><div class="v-slide-group__wrapper"><div class="v-slide-group__content v-tabs-bar__content"><div class="v-tabs-slider-wrapper" style="height: 2px; left: 691px; width: 172px;"><div class="v-tabs-slider"></div></div><a href="https://portal.tech-base.net/site/main" class="light-blue--text v-tab" tabindex="0" aria-selected="false" role="tab">
              Main
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-home theme--dark light-blue--text"></i></a><a href="https://portal.tech-base.net/site/profile/44910" class="light-blue--text v-tab" tabindex="0" aria-selected="false" role="tab">
              MyPage
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-account theme--dark light-blue--text"></i></a><a href="https://portal.tech-base.net/site/team" class="light-blue--text v-tab" tabindex="0" aria-selected="false" role="tab">
              Team
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-account-multiple theme--dark light-blue--text"></i></a><a href="https://portal.tech-base.net/period" class="light-blue--text v-tab" tabindex="0" aria-selected="false" role="tab">
              Period
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-account-group theme--dark light-blue--text"></i></a><a href="https://portal.tech-base.net/editor" aria-current="page" class="light-blue--text v-tab--active v-tab" tabindex="0" aria-selected="true" role="tab">
              Editor
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-edit theme--dark light-blue--text"></i></a> <a tabindex="0" href="https://portal.tech-base.net/mission/" target="_blank" aria-selected="false" role="tab" class="light-blue--text v-tab">
              MISSION
              <i aria-hidden="true" class="v-icon notranslate mdi mdi-language-php theme--dark light-blue--text"></i></a></div></div><div class="v-slide-group__next v-slide-group__next--disabled"><!----></div></div></div> <div class="v-window v-item-group theme--light v-tabs-items"><div class="v-window__container"></div></div></div></div></div></div></div> <main class="v-main v-content" data-booted="true" style="padding: 0px;"><div class="v-main__wrap v-content__wrap"><div class="v-card v-sheet theme--light rounded-0" style="height: 100%; width: 100vw;"><div class="v-card v-sheet theme--dark rounded-0" style="height: 100%; width: 100%;"><div class="container ma-0 pa-0" style="height: 100%; width: 100vw;"><div class="row ma-0 pa-0"><button type="button" class="v-icon notranslate v-icon--link mdi mdi-folder theme--dark"></button>
      通常のエディター
    </div> <div class="row ma-0 pa-0" style="height: 100%; width: 100%;"><div class="ma-0 pa-0 col col-4" style="height: 100%; width: 100%;"><div class="v-card v-sheet theme--dark rounded-0" style="height: 100%; width: 100%;"><div class="v-card__title"><i aria-hidden="true" class="v-icon notranslate mdi mdi-xml theme--dark"></i>
    Editor
    <div class="spacer"></div> <button type="button" class="v-icon notranslate mx-3 v-icon--link mdi mdi-note-plus-outline theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--link mdi mdi-arrow-up-bold-circle theme--dark"></button></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div class="v-treeview theme--dark"><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">5-1table.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">check.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">ex.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root v-treeview-node--active primary--text"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">keijiban.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission1_24.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission1_25.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-02.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-03.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-04.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-05.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-06.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-07.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-08.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-09.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-10.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-11.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-12.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-13.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-14.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-15.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-16.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-17-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-17.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-19.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-20.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-21.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-22.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-23.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-24.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_1-24.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-25.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-26.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_1-27.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_1-27.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_2-1.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_2-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_2-2.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_2-3.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_2-3.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_2-4.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_2-4.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-1.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-1.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-2.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-3.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-3.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-4-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-4.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-4.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_3-5.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-5.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate mdi mdi-file-document-outline theme--dark"></i></div><div class="v-treeview-node__label">mission_3-6.txt</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-1.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-2-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-3.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-4.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-5.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-6.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-7.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-8.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_4-9.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_5-1.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">mission_6-2.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div><div aria-expanded="false" class="v-treeview-node v-treeview-node--leaf v-treeview-node--click"><div class="v-treeview-node__root"><div class="v-treeview-node__level"></div><div class="v-treeview-node__content"><div class="v-treeview-node__prepend"><i aria-hidden="true" class="v-icon notranslate material-icons theme--dark"></i></div><div class="v-treeview-node__label">misssion_1-18.php</div><div class="v-treeview-node__append"><button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-arrow-down-bold-circle theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-fountain-pen-tip theme--dark"></button> <button type="button" class="v-icon notranslate v-icon--left v-icon--link mdi mdi-trash-can-outline theme--dark"></button> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></div></div></div></div> <div class="ma-0 pa-0 col col-8" style="height: 100%; width: 100%;"><div class="v-card__title"><button type="button" class="v-btn v-btn--contained theme--dark v-size--default"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mx-1 mdi mdi-cog theme--dark"></i></span></button> <button type="button" class="mx-1 v-btn v-btn--depressed theme--dark v-size--default"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-content-save theme--dark"></i></span></button> <button type="button" class="v-icon notranslate mx-1 v-icon--link mdi mdi-arrow-right-drop-circle theme--dark"></button> <span class="mx-2">keijiban.php</span></div> <div id="editor" class=" ace_editor ace_hidpi ace-twilight ace_dark" style="height: 100vh; width: 100vw; font-size: 10pt;"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; font-size: 1px; height: 1px; width: 1px; transform: translate(0px, 0px);"></textarea><div class="ace_gutter" aria-hidden="true" style="left: 0px; width: 48px;"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="height: 1e+06px; transform: translate(0px, 0px); width: 48px;"><div class="ace_gutter-cell " style="height: 15px; top: 0px;">1<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 15px;">2<span style="display: inline-block; height: 15px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 30px;">3<span class="ace_fold-widget ace_start ace_open" style="height: 15px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 45px;">4<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 60px;">5<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 75px;">6<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 90px;">7<span class="ace_fold-widget ace_start ace_open" style="height: 15px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 105px;">8<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 120px;">9<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 135px;">10<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 150px;">11<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 165px;">12<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 180px;">13<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 195px;">14<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 210px;">15<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 225px;">16<span style="display: none; height: 15px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 240px;">17<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 255px;">18<span class="ace_fold-widget ace_start ace_open" style="height: 15px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 270px;">19<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 285px;">20<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 300px;">21<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 315px;">22<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 330px;">23<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 345px;">24<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 360px;">25<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 375px;">26<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 390px;">27<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 405px;">28<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 420px;">29<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 435px;">30<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 450px;">31<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 465px;">32<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 480px;">33<span class="ace_fold-widget ace_start ace_open" style="height: 15px; display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 495px;">34<span style="display: inline-block; height: 15px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 510px;">35<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 525px;">36<span class="ace_fold-widget ace_start ace_open" style="height: 15px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 15px; top: 540px;">37<span style="display: none;"></span></div></div></div><div class="ace_scroller" style="line-height: 15px; left: 47.0625px; right: 17px; bottom: 0px; cursor: default;"><div class="ace_content" style="transform: translate(0px, 0px); width: 1215.94px; height: 561px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 567px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_selection ace_br1 ace_start" style="height: 15px; right: 0px; top: 0px; left: 4px;"></div><div class="ace_selection ace_br12" style="height: 15px; width: 0px; top: 555px; left: 4px;"></div><div class="ace_selection ace_br8" style="height: 540px; right: 0px; top: 15px; left: 4px;"></div></div><div class="ace_layer ace_text-layer" style="height: 1e+06px; margin: 0px 4px; transform: translate(0px, 0px);"><div class="ace_line" style="height: 15px; top: 0px;"><span class="ace_xml-pe ace_doctype ace_xml">&lt;!</span><span class="ace_xml-pe ace_doctype ace_xml">DOCTYPE</span><span class="ace_text ace_whitespace ace_xml"> </span><span class="ace_xml-pe ace_xml">html</span><span class="ace_xml-pe ace_doctype ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 15px;"><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">html</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">lang</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"ja"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 30px;"><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">head</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 45px;"><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">meta</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">charset</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"UTF-8"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 60px;"><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">title</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span><span class="ace_text ace_xml">mission_5-1</span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">title</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 75px;"><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">head</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 90px;"><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">body</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div><div class="ace_line" style="height: 15px; top: 105px;"><span class="ace_support ace_php_tag">&lt;?php</span></div><div class="ace_line" style="height: 15px; top: 120px;">    <span class="ace_comment">// DB<span class="ace_cjk" style="width: 14.0625px;">接</span><span class="ace_cjk" style="width: 14.0625px;">続</span><span class="ace_cjk" style="width: 14.0625px;">設</span><span class="ace_cjk" style="width: 14.0625px;">定</span></span></div><div class="ace_line" style="height: 15px; top: 135px;">    <span class="ace_variable">$dsn</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_string">'mysql:dbname=***;host=localhost'</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 150px;">    <span class="ace_variable">$user</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_string">'tb-***'</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 165px;">    <span class="ace_variable">$password</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_string">'PASSWORD'</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 180px;">    <span class="ace_variable">$pdo</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_keyword">new</span> <span class="ace_support ace_class">PDO</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$dsn</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_variable">$user</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_variable">$password</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_keyword">array</span><span class="ace_paren ace_lparen">(</span><span class="ace_support ace_class">PDO</span><span class="ace_keyword ace_operator">::</span><span class="ace_identifier">ATTR_ERRMODE</span> <span class="ace_keyword ace_operator">=&gt;</span> <span class="ace_support ace_class">PDO</span><span class="ace_keyword ace_operator">::</span><span class="ace_identifier">ERRMODE_WARNING</span><span class="ace_paren ace_rparen">))</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 195px;">    </div><div class="ace_line" style="height: 15px; top: 210px;"></div><div class="ace_line" style="height: 15px; top: 225px;">    <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">投</span><span class="ace_cjk" style="width: 14.0625px;">稿</span><span class="ace_cjk" style="width: 14.0625px;">し</span><span class="ace_cjk" style="width: 14.0625px;">た</span><span class="ace_cjk" style="width: 14.0625px;">も</span><span class="ace_cjk" style="width: 14.0625px;">の</span><span class="ace_cjk" style="width: 14.0625px;">を</span><span class="ace_cjk" style="width: 14.0625px;">入</span><span class="ace_cjk" style="width: 14.0625px;">れ</span><span class="ace_cjk" style="width: 14.0625px;">る</span><span class="ace_cjk" style="width: 14.0625px;">テ</span><span class="ace_cjk" style="width: 14.0625px;">ー</span><span class="ace_cjk" style="width: 14.0625px;">ブ</span><span class="ace_cjk" style="width: 14.0625px;">ル</span></span></div><div class="ace_line" style="height: 15px; top: 240px;">    <span class="ace_variable">$sql</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_string">"CREATE TABLE IF NOT EXISTS mission5"</span></div><div class="ace_line" style="height: 15px; top: 255px;">    .<span class="ace_string">" ("</span></div><div class="ace_line" style="height: 15px; top: 270px;">    . <span class="ace_string">"id INT AUTO_INCREMENT PRIMARY KEY,"</span> <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">投</span><span class="ace_cjk" style="width: 14.0625px;">稿</span><span class="ace_cjk" style="width: 14.0625px;">番</span><span class="ace_cjk" style="width: 14.0625px;">号</span></span></div><div class="ace_line" style="height: 15px; top: 285px;">    . <span class="ace_string">"name char(32),"</span> <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">名</span><span class="ace_cjk" style="width: 14.0625px;">前</span></span></div><div class="ace_line" style="height: 15px; top: 300px;">    . <span class="ace_string">"comment TEXT,"</span> <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">コ</span><span class="ace_cjk" style="width: 14.0625px;">メ</span><span class="ace_cjk" style="width: 14.0625px;">ン</span><span class="ace_cjk" style="width: 14.0625px;">ト</span></span></div><div class="ace_line" style="height: 15px; top: 315px;">    . <span class="ace_string">"time datetime,"</span> <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">日</span><span class="ace_cjk" style="width: 14.0625px;">付</span></span></div><div class="ace_line" style="height: 15px; top: 330px;">    . <span class="ace_string">"pass char(16)"</span> <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">パ</span><span class="ace_cjk" style="width: 14.0625px;">ス</span><span class="ace_cjk" style="width: 14.0625px;">ワ</span><span class="ace_cjk" style="width: 14.0625px;">ー</span><span class="ace_cjk" style="width: 14.0625px;">ド</span></span></div><div class="ace_line" style="height: 15px; top: 345px;">    .<span class="ace_string">");"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 360px;">    <span class="ace_variable">$stmt</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_variable">$pdo</span><span class="ace_keyword ace_operator">-&gt;</span><span class="ace_identifier">query</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$sql</span><span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 15px; top: 375px;">    </div><div class="ace_line" style="height: 15px; top: 390px;"><span class="ace_support ace_php_tag">?&gt;</span></div><div class="ace_line" style="height: 15px; top: 405px;"><span class="ace_text ace_xml">    </span></div><div class="ace_line" style="height: 15px; top: 420px;"></div><div class="ace_line" style="height: 15px; top: 435px;"></div><div class="ace_line" style="height: 15px; top: 450px;"><span class="ace_support ace_php_tag">&lt;?php</span></div><div class="ace_line" style="height: 15px; top: 465px;">    </div><div class="ace_line" style="height: 15px; top: 480px;">    <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">投</span><span class="ace_cjk" style="width: 14.0625px;">稿</span><span class="ace_cjk" style="width: 14.0625px;">ボ</span><span class="ace_cjk" style="width: 14.0625px;">タ</span><span class="ace_cjk" style="width: 14.0625px;">ン</span><span class="ace_cjk" style="width: 14.0625px;">が</span><span class="ace_cjk" style="width: 14.0625px;">押</span><span class="ace_cjk" style="width: 14.0625px;">さ</span><span class="ace_cjk" style="width: 14.0625px;">れ</span><span class="ace_cjk" style="width: 14.0625px;">た</span><span class="ace_cjk" style="width: 14.0625px;">と</span><span class="ace_cjk" style="width: 14.0625px;">き</span></span></div><div class="ace_line" style="height: 15px; top: 495px;">    <span class="ace_keyword">if</span><span class="ace_paren ace_lparen">(</span><span class="ace_support ace_function">isset</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"submit1"</span><span class="ace_paren ace_rparen">]))</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 15px; top: 510px;"><span class="ace_indent-guide">    </span>    <span class="ace_comment">//<span class="ace_cjk" style="width: 14.0625px;">新</span><span class="ace_cjk" style="width: 14.0625px;">規</span><span class="ace_cjk" style="width: 14.0625px;">作</span><span class="ace_cjk" style="width: 14.0625px;">成</span><span class="ace_cjk" style="width: 14.0625px;">フ</span><span class="ace_cjk" style="width: 14.0625px;">ォ</span><span class="ace_cjk" style="width: 14.0625px;">ー</span><span class="ace_cjk" style="width: 14.0625px;">ム</span><span class="ace_cjk" style="width: 14.0625px;">が</span><span class="ace_cjk" style="width: 14.0625px;">空</span><span class="ace_cjk" style="width: 14.0625px;">じ</span><span class="ace_cjk" style="width: 14.0625px;">ゃ</span><span class="ace_cjk" style="width: 14.0625px;">な</span><span class="ace_cjk" style="width: 14.0625px;">い</span><span class="ace_cjk" style="width: 14.0625px;">と</span><span class="ace_cjk" style="width: 14.0625px;">き</span>(<span class="ace_cjk" style="width: 14.0625px;">投</span><span class="ace_cjk" style="width: 14.0625px;">稿</span><span class="ace_cjk" style="width: 14.0625px;">番</span><span class="ace_cjk" style="width: 14.0625px;">号</span><span class="ace_cjk" style="width: 14.0625px;">が</span><span class="ace_cjk" style="width: 14.0625px;">空</span><span class="ace_cjk" style="width: 14.0625px;">の</span><span class="ace_cjk" style="width: 14.0625px;">と</span><span class="ace_cjk" style="width: 14.0625px;">き</span>)<span class="ace_cjk" style="width: 14.0625px;">新</span><span class="ace_cjk" style="width: 14.0625px;">規</span><span class="ace_cjk" style="width: 14.0625px;">作</span><span class="ace_cjk" style="width: 14.0625px;">成</span></span></div><div class="ace_line" style="height: 15px; top: 525px;"><span class="ace_indent-guide">    </span>    <span class="ace_keyword">if</span><span class="ace_paren ace_lparen">(</span><span class="ace_support ace_function">empty</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"num1"</span><span class="ace_paren ace_rparen">])</span> <span class="ace_keyword ace_operator">&amp;&amp;</span> <span class="ace_keyword ace_operator">!</span><span class="ace_support ace_function">empty</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"str"</span><span class="ace_paren ace_rparen">])</span> <span class="ace_keyword ace_operator">&amp;&amp;</span> <span class="ace_keyword ace_operator">!</span><span class="ace_support ace_function">empty</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"name"</span><span class="ace_paren ace_rparen">])</span> <span class="ace_keyword ace_operator">&amp;&amp;</span> <span class="ace_keyword ace_operator">!</span><span class="ace_support ace_function">empty</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"password"</span><span class="ace_paren ace_rparen">]))</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 15px; top: 540px;"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span>    <span class="ace_variable">$str</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_variable ace_language">$_POST</span><span class="ace_paren ace_lparen">[</span><span class="ace_string">"str"</span><span class="ace_paren ace_rparen">]</span><span class="ace_punctuation ace_operator">;</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="display: block; transform: translate(53px, 7560px); width: 7px; height: 15px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 22px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 7575px;">&nbsp;</div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 47.0625px; right: 17px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 1215.94px;">&nbsp;</div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;">הההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההה</div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div></div></div></div> <div role="dialog" class="v-dialog__container"><!----></div></div></div></div></main></div></div></div>
</main>
<script src="./keijiban_files/manifest.js.ダウンロード"></script>
<script src="./keijiban_files/vendor.js.ダウンロード"></script>
<script src="./keijiban_files/app.js.ダウンロード"></script>


<div id="UMS_TOOLTIP" style="position: absolute; cursor: pointer; z-index: 2147483647; background: transparent; top: -100000px; left: -100000px;"></div></body><umsdataelement id="UMSSendDataEventElement"></umsdataelement><div id="TAG_ID4TOOLBAR_UMS_GUID" style="display: none;">E7F9C833-C544-76AE-050E-D3822C5DF395</div><div id="tmtoolbar_ums_injected" style="display: none;">init_ums</div></html>