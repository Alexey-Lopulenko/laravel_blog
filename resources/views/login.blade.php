<html class="desktop landscape"
      style="--color-btn-bg:#B79B7E; --color-btn-bg-is-dark:true; --bg:#ffffff; --bg-is-dark:false; --color-text: var(--color-text-dark); --color-text-minor-shade: var(--color-text-dark-minor-shade); --color-text-major-shade: var(--color-text-dark-major-shade); --color-text-half-shade: var(--color-text-dark-half-shade); --color-notice-warning-is-dark:false; --color-notice-success-is-dark:false; --color-notice-error-is-dark:false; --color-notice-info-is-dark:false; --color-form-controls-bg:var(--bg); --color-form-controls-bg-disabled:var(--bg-minor-shade); --color-form-controls-border-color:var(--bg-half-shade); --color-form-controls-color:var(--color-text); --is-editor:false; --vh:1008px;">
<head>
    <style>
        .fc.old-theme-fix {
            overflow: visible;
        }

        .fc.old-theme-fix:after {
            clear: both;
            display: block;
            content: '';
        }

        .tt-dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
            min-width: 160px;
            margin-top: 2px;
            padding: 5px 5px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            background-clip: padding-box;

        }

        .twitter-typeahead {
            display: inherit !important;
        }

        .twitter-typeahead .tt-query, .twitter-typeahead .tt-hint {
            margin-bottom: 0;
        }

        .tt-suggestion, .tt-footer {
            display: block;
            padding: 1px 0px 1px 10px;
        }

        .tt-suggestion.tt-is-under-cursor, .tt-footer.tt-is-under-cursor {
            color: #fff;
            background-color: #428bca;
        }

        .tt-suggestion.tt-is-under-cursor a, .tt-footer.tt-is-under-cursor a {
            color: #fff;
        }

        .tt-suggestion.tt-cursor, .tt-footer.tt-cursor {
            color: #fff;
            background-color: #428bca;
        }

        .tt-suggestion p, .tt-footer p {
            margin: 0;
        }
    </style>
    <style>
        .spinner-container, .spinner {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
        }

        .spinner-container {
            z-index: 900;
            overflow: hidden;

        &
        .animate .spinner {

        &
        .slide-up {
            opacity: 0;
        }

        &
        .fade-in {
            opacity: 0;
        }

        }
        }

        .spinner {
            height: 100%;
            opacity: 0.6;
            background: #fff;


        {{--.slide-up {--}}
        {{--@include  transition-property(opacity, bottom);--}}
        {{--@include  transition-duration(0.3 s);--}}
        {{--}--}}


        {{--.fade-in {--}}
        {{--@include  transition-property(opacity);--}}
        {{--@include  transition-duration(1 s);--}}
        {{--}--}}

        .spin {
            position: absolute;
            top: 50%;
            left: 50%;
        }

        }


        .spinner {
            background: rgba(255, 255, 255, 0);
        }

        .spinner-screen {
            position: fixed;
            z-index: 10000;
            height: 100%;
            width: 100%;
        }
    </style>
    <meta
        data-config="{&quot;money_with_currency_format&quot;:{&quot;delimiter&quot;:&quot;&quot;,&quot;separator&quot;:&quot;.&quot;,&quot;format&quot;:&quot;%n&nbsp;%u&quot;,&quot;unit&quot;:&quot;₽&quot;,&quot;show_price_without_cents&quot;:0},&quot;currency_code&quot;:&quot;RUR&quot;,&quot;facebook&quot;:{&quot;pixelActive&quot;:false,&quot;currency_code&quot;:&quot;RUB&quot;,&quot;use_variants&quot;:null},&quot;vk&quot;:{&quot;pixel_active&quot;:null,&quot;price_list_id&quot;:null},&quot;new_ya_metrika&quot;:false,&quot;ecommerce_data_container&quot;:&quot;dataLayer&quot;,&quot;common_js_version&quot;:null,&quot;vue_ui_version&quot;:null,&quot;feedback_captcha_enabled&quot;:null,&quot;account_id&quot;:1006515,&quot;hide_items_out_of_stock&quot;:false,&quot;forbid_order_over_existing&quot;:true,&quot;minimum_items_price&quot;:null,&quot;enable_comparison&quot;:true,&quot;locale&quot;:&quot;ru&quot;,&quot;client_group&quot;:null,&quot;consent_to_personal_data&quot;:{&quot;active&quot;:false,&quot;obligatory&quot;:true,&quot;description&quot;:&quot;Настоящим подтверждаю, что я ознакомлен и согласен с условиями \u003ca href='/page/oferta' target='blank'\u003eоферты и политики конфиденциальности\u003c/a\u003e.&quot;},&quot;recaptcha_key&quot;:&quot;6Lc0T0YUAAAAAAVNiH-_bnSC4E-YHMFTeYOqZyRx&quot;,&quot;checkout_float_order_content_block&quot;:false,&quot;sber_id_app_id&quot;:&quot;5b5a3c11-72e5-4871-8649-4cdbab3ba9a4&quot;}"
        name="shop-config" content="">
    <meta name="js-evnvironment" content="production">
    <meta name="default-locale" content="ru">
    <meta name="insales-redefined-api-methods" content="[]">
    <script type="text/javascript"
            src="https://bam-cell.nr-data.net/1/fd0d8ed08d?a=40346406&amp;v=1210.e2a3f80&amp;to=c14IQRMOXV4EQR1DUF9BFRoAAlJdFF1GH0tVQhVcDg9CHQ9WRQ%3D%3D&amp;rst=3510&amp;ck=1&amp;ref=https://demo-loft.myinsales.ru/client_account/session/new&amp;qt=1&amp;ap=319&amp;be=2000&amp;fe=3319&amp;dc=2683&amp;perf=%7B%22timing%22:%7B%22of%22:1632754387141,%22n%22:0,%22u%22:737,%22r%22:12,%22ue%22:737,%22re%22:243,%22f%22:243,%22dn%22:243,%22dne%22:243,%22c%22:243,%22ce%22:243,%22rq%22:251,%22rp%22:691,%22rpe%22:748,%22dl%22:740,%22di%22:2426,%22ds%22:2426,%22de%22:2713,%22dc%22:3316,%22l%22:3316,%22le%22:3348%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;fp=2926&amp;fcp=2926&amp;jsonp=NREUM.setToken"></script>
    <script src="https://js-agent.newrelic.com/nr-1210.min.js"></script>
    <script type="text/javascript" async="" src="/javascripts/insales_counter.js?5"></script>
    <script src="/packs/js/shop_checkout2_bundle-69ee096df2485b45e40c.js"></script>
    <style type="text/css">cufon {
            text-indent: 0 !important;
        }

        @media screen, projection {
            cufon {
                display: inline !important;
                display: inline-block !important;
                position: relative !important;
                vertical-align: middle !important;
                font-size: 1px !important;
                line-height: 1px !important;
            }

            cufon cufontext {
                display: -moz-inline-box !important;
                display: inline-block !important;
                width: 0 !important;
                height: 0 !important;
                overflow: hidden !important;
                text-indent: -10000in !important;
            }

            cufon canvas {
                position: relative !important;
            }
        }

        @media print {
            cufon {
                padding: 0 !important;
            }

            cufon canvas {
                display: none !important;
            }
        }</style>
    <style type="text/css"></style>
    <style type="text/css">span.im-caret {
            -webkit-animation: 1s blink step-end infinite;
            animation: 1s blink step-end infinite;
        }

        @keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        @-webkit-keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        span.im-static {
            color: grey;
        }

        div.im-colormask {
            display: inline-block;
            border-style: inset;
            border-width: 2px;
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        div.im-colormask > input {
            position: absolute;
            display: inline-block;
            background-color: transparent;
            color: transparent;
            -webkit-appearance: caret;
            -moz-appearance: caret;
            appearance: caret;
            border-style: none;
            left: 0; /*calculated*/
        }

        div.im-colormask > input:focus {
            outline: none;
        }

        div.im-colormask > input::-moz-selection {
            background: none;
        }

        div.im-colormask > input::selection {
            background: none;
        }

        div.im-colormask > input::-moz-selection {
            background: none;
        }

        div.im-colormask > div {
            color: black;
            display: inline-block;
            width: 100px; /*calculated*/
        }</style>
    <!--InsalesCounter -->
    <script type="text/javascript">
        if (typeof (__id) == 'undefined') {
            var __id = 1006515;

            (function () {
                var ic = document.createElement('script');
                ic.type = 'text/javascript';
                ic.async = true;
                ic.src = '/javascripts/insales_counter.js?5';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ic, s);
            })();
        }
    </script>
    <!-- /InsalesCounter -->
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token"
          content="DvrhTm8/BCbqpxAcext5WEOXaAmCYrraFYzdF+n2mScFbWP6cg6ixs1AAc/iA2UIftki6jOL0IJFj9Kx92iPuQ==">
    <!-- meta -->
    <meta charset="UTF-8">
    <title>Вход в кабинет покупателя
    </title>
    <meta name="description" content="">
    <meta data-config="{&quot;static-versioned&quot;: &quot;1.38&quot;}" name="theme-meta-data" content="">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam-cell.nr-data.net",
            "errorBeacon": "bam-cell.nr-data.net",
            "licenseKey": "fd0d8ed08d",
            "applicationID": "40346406",
            "transactionName": "c14IQRMOXV4EQR1DUF9BFRoAAlJdFF1GH0tVQhVcDg9CHQ9WRQ==",
            "queueTime": 1,
            "applicationTime": 319,
            "agent": ""
        }</script>
    <script>(window.NREUM || (NREUM = {})).loader_config = {licenseKey: "fd0d8ed08d", applicationID: "40346406"};
        window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var i = e[n] = {exports: {}};
                    t[n][0].call(i.exports, function (e) {
                        var i = t[n][1][e];
                        return r(i || e)
                    }, i, i.exports)
                }
                return e[n].exports
            }

            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < n.length; i++) r(n[i]);
            return r
        }({
            1: [function (t, e, n) {
                function r() {
                }

                function i(t, e, n) {
                    return function () {
                        return o(t, [u.now()].concat(f(arguments)), e ? null : this, n), e ? void 0 : this
                    }
                }

                var o = t("handle"), a = t(8), f = t(9), c = t("ee").get("tracer"), u = t("loader"), s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    p = "api-", l = p + "ixn-";
                a(d, function (t, e) {
                    s[e] = i(p + e, !0, "api")
                }), s.addPageAction = i(p + "addPageAction", !0), s.setCurrentRouteName = i(p + "routeName", !0), e.exports = newrelic, s.interaction = function () {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function (t, e) {
                        var n = {}, r = this, i = "function" == typeof e;
                        return o(l + "tracer", [u.now(), t, n], r), function () {
                            if (c.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], n), i) try {
                                return e.apply(this, arguments)
                            } catch (t) {
                                throw c.emit("fn-err", [arguments, this, t], n), t
                            } finally {
                                c.emit("fn-end", [u.now()], n)
                            }
                        }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (t, e) {
                    m[e] = i(l + e)
                }), newrelic.noticeError = function (t, e) {
                    "string" == typeof t && (t = new Error(t)), o("err", [t, u.now(), !1, e])
                }
            }, {}], 2: [function (t, e, n) {
                function r(t) {
                    if (NREUM.init) {
                        for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++) if (e = e[n[r]], "object" != typeof e) return;
                        return e = e[n[n.length - 1]]
                    }
                }

                e.exports = {getConfiguration: r}
            }, {}], 3: [function (t, e, n) {
                function r() {
                    return f.exists && performance.now ? Math.round(performance.now()) : (o = Math.max((new Date).getTime(), o)) - a
                }

                function i() {
                    return o
                }

                var o = (new Date).getTime(), a = o, f = t(10);
                e.exports = r, e.exports.offset = a, e.exports.getLastTimestamp = i
            }, {}], 4: [function (t, e, n) {
                function r(t) {
                    return !(!t || !t.protocol || "file:" === t.protocol)
                }

                e.exports = r
            }, {}], 5: [function (t, e, n) {
                function r(t, e) {
                    var n = t.getEntries();
                    n.forEach(function (t) {
                        "first-paint" === t.name ? d("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && d("timing", ["fcp", Math.floor(t.startTime)])
                    })
                }

                function i(t, e) {
                    var n = t.getEntries();
                    n.length > 0 && d("lcp", [n[n.length - 1]])
                }

                function o(t) {
                    t.getEntries().forEach(function (t) {
                        t.hadRecentInput || d("cls", [t])
                    })
                }

                function a(t) {
                    if (t instanceof m && !g) {
                        var e = Math.round(t.timeStamp), n = {type: t.type};
                        e <= p.now() ? n.fid = p.now() - e : e > p.offset && e <= Date.now() ? (e -= p.offset, n.fid = p.now() - e) : e = p.now(), g = !0, d("timing", ["fi", e, n])
                    }
                }

                function f(t) {
                    "hidden" === t && d("pageHide", [p.now()])
                }

                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var c, u, s, d = t("handle"), p = t("loader"), l = t(7), m = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        c = new PerformanceObserver(r);
                        try {
                            c.observe({entryTypes: ["paint"]})
                        } catch (v) {
                        }
                        u = new PerformanceObserver(i);
                        try {
                            u.observe({entryTypes: ["largest-contentful-paint"]})
                        } catch (v) {
                        }
                        s = new PerformanceObserver(o);
                        try {
                            s.observe({type: "layout-shift", buffered: !0})
                        } catch (v) {
                        }
                    }
                    if ("addEventListener" in document) {
                        var g = !1, h = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        h.forEach(function (t) {
                            document.addEventListener(t, a, !1)
                        })
                    }
                    l(f)
                }
            }, {}], 6: [function (t, e, n) {
                function r(t, e) {
                    if (!i) return !1;
                    if (t !== i) return !1;
                    if (!e) return !0;
                    if (!o) return !1;
                    for (var n = o.split("."), r = e.split("."), a = 0; a < r.length; a++) if (r[a] !== n[a]) return !1;
                    return !0
                }

                var i = null, o = null, a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var f = navigator.userAgent, c = f.match(a);
                    c && f.indexOf("Chrome") === -1 && f.indexOf("Chromium") === -1 && (i = "Safari", o = c[1])
                }
                e.exports = {agent: i, version: o, match: r}
            }, {}], 7: [function (t, e, n) {
                function r(t) {
                    function e() {
                        t(a && document[a] ? document[a] : document[i] ? "hidden" : "visible")
                    }

                    "addEventListener" in document && o && document.addEventListener(o, e, !1)
                }

                e.exports = r;
                var i, o, a;
                "undefined" != typeof document.hidden ? (i = "hidden", o = "visibilitychange", a = "visibilityState") : "undefined" != typeof document.msHidden ? (i = "msHidden", o = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (i = "webkitHidden", o = "webkitvisibilitychange", a = "webkitVisibilityState")
            }, {}], 8: [function (t, e, n) {
                function r(t, e) {
                    var n = [], r = "", o = 0;
                    for (r in t) i.call(t, r) && (n[o] = e(r, t[r]), o += 1);
                    return n
                }

                var i = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}], 9: [function (t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, i = n - e || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = t[e + r];
                    return o
                }

                e.exports = r
            }, {}], 10: [function (t, e, n) {
                e.exports = {exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart}
            }, {}], ee: [function (t, e, n) {
                function r() {
                }

                function i(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? u(t, c, a) : a()
                    }

                    function n(n, r, i, o, a) {
                        if (a !== !1 && (a = !0), !l.aborted || o) {
                            t && a && t(n, r, i);
                            for (var f = e(i), c = v(n), u = c.length, s = 0; s < u; s++) c[s].apply(f, r);
                            var p = d[w[n]];
                            return p && p.push([b, n, r, f]), f
                        }
                    }

                    function o(t, e) {
                        y[t] = v(t).concat(e)
                    }

                    function m(t, e) {
                        var n = y[t];
                        if (n) for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
                    }

                    function v(t) {
                        return y[t] || []
                    }

                    function g(t) {
                        return p[t] = p[t] || i(n)
                    }

                    function h(t, e) {
                        l.aborted || s(t, function (t, n) {
                            e = e || "feature", w[n] = e, e in d || (d[e] = [])
                        })
                    }

                    var y = {}, w = {}, b = {
                        on: o,
                        addEventListener: o,
                        removeEventListener: m,
                        emit: n,
                        get: g,
                        listeners: v,
                        context: e,
                        buffer: h,
                        abort: f,
                        aborted: !1
                    };
                    return b
                }

                function o(t) {
                    return u(t, c, a)
                }

                function a() {
                    return new r
                }

                function f() {
                    (d.api || d.feature) && (l.aborted = !0, d = l.backlog = {})
                }

                var c = "nr@context", u = t("gos"), s = t(8), d = {}, p = {}, l = e.exports = i();
                e.exports.getOrSetContext = o, l.backlog = d
            }, {}], gos: [function (t, e, n) {
                function r(t, e, n) {
                    if (i.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {value: r, writable: !0, enumerable: !1}), r
                    } catch (o) {
                    }
                    return t[e] = r, r
                }

                var i = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}], handle: [function (t, e, n) {
                function r(t, e, n, r) {
                    i.buffer([t], r), i.emit(t, e, n)
                }

                var i = t("ee").get("handle");
                e.exports = r, r.ee = i
            }, {}], id: [function (t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, o, function () {
                        return i++
                    })
                }

                var i = 1, o = "nr@id", a = t("gos");
                e.exports = r
            }, {}], loader: [function (t, e, n) {
                function r() {
                    if (!R++) {
                        var t = M.info = NREUM.info, e = v.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
                        c(E, function (e, n) {
                            t[e] || (t[e] = n)
                        });
                        var n = a();
                        f("mark", ["onload", n + M.offset], null, "api"), f("timing", ["load", n]);
                        var r = v.createElement("script");
                        0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? r.src = t.agent : r.src = l + "://" + t.agent, e.parentNode.insertBefore(r, e)
                    }
                }

                function i() {
                    "complete" === v.readyState && o()
                }

                function o() {
                    f("mark", ["domContent", a() + M.offset], null, "api")
                }

                var a = t(3), f = t("handle"), c = t(8), u = t("ee"), s = t(6), d = t(4), p = t(2),
                    l = p.getConfiguration("ssl") === !1 ? "http" : "https", m = window, v = m.document,
                    g = "addEventListener", h = "attachEvent", y = m.XMLHttpRequest, w = y && y.prototype,
                    b = !d(m.location);
                NREUM.o = {
                    ST: setTimeout,
                    SI: m.setImmediate,
                    CT: clearTimeout,
                    XHR: y,
                    REQ: m.Request,
                    EV: m.Event,
                    PR: m.Promise,
                    MO: m.MutationObserver
                };
                var x = "" + location, E = {
                    beacon: "bam.nr-data.net",
                    errorBeacon: "bam.nr-data.net",
                    agent: "js-agent.newrelic.com/nr-1210.min.js"
                }, O = y && w && w[g] && !/CriOS/.test(navigator.userAgent), M = e.exports = {
                    offset: a.getLastTimestamp(),
                    now: a,
                    origin: x,
                    features: {},
                    xhrWrappable: O,
                    userAgent: s,
                    disabled: b
                };
                if (!b) {
                    t(1), t(5), v[g] ? (v[g]("DOMContentLoaded", o, !1), m[g]("load", r, !1)) : (v[h]("onreadystatechange", i), m[h]("onload", r)), f("mark", ["firstbyte", a.getLastTimestamp()], null, "api");
                    var R = 0
                }
            }, {}], "wrap-function": [function (t, e, n) {
                function r(t, e) {
                    function n(e, n, r, c, u) {
                        function nrWrapper() {
                            var o, a, s, p;
                            try {
                                a = this, o = d(arguments), s = "function" == typeof r ? r(o, a) : r || {}
                            } catch (l) {
                                i([l, "", [o, a, c], s], t)
                            }
                            f(n + "start", [o, a, c], s, u);
                            try {
                                return p = e.apply(a, o)
                            } catch (m) {
                                throw f(n + "err", [o, a, m], s, u), m
                            } finally {
                                f(n + "end", [o, a, p], s, u)
                            }
                        }

                        return a(e) ? e : (n || (n = ""), nrWrapper[p] = e, o(e, nrWrapper, t), nrWrapper)
                    }

                    function r(t, e, r, i, o) {
                        r || (r = "");
                        var f, c, u, s = "-" === r.charAt(0);
                        for (u = 0; u < e.length; u++) c = e[u], f = t[c], a(f) || (t[c] = n(f, s ? c + r : r, i, c, o))
                    }

                    function f(n, r, o, a) {
                        if (!m || e) {
                            var f = m;
                            m = !0;
                            try {
                                t.emit(n, r, o, e, a)
                            } catch (c) {
                                i([c, n, r, o], t)
                            }
                            m = f
                        }
                    }

                    return t || (t = s), n.inPlace = r, n.flag = p, n
                }

                function i(t, e) {
                    e || (e = s);
                    try {
                        e.emit("internal-error", t)
                    } catch (n) {
                    }
                }

                function o(t, e, n) {
                    if (Object.defineProperty && Object.keys) try {
                        var r = Object.keys(t);
                        return r.forEach(function (n) {
                            Object.defineProperty(e, n, {
                                get: function () {
                                    return t[n]
                                }, set: function (e) {
                                    return t[n] = e, e
                                }
                            })
                        }), e
                    } catch (o) {
                        i([o], n)
                    }
                    for (var a in t) l.call(t, a) && (e[a] = t[a]);
                    return e
                }

                function a(t) {
                    return !(t && t instanceof Function && t.apply && !t[p])
                }

                function f(t, e) {
                    var n = e(t);
                    return n[p] = t, o(t, n, s), n
                }

                function c(t, e, n) {
                    var r = t[e];
                    t[e] = f(r, n)
                }

                function u() {
                    for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n) e[n] = arguments[n];
                    return e
                }

                var s = t("ee"), d = t(9), p = "nr@original", l = Object.prototype.hasOwnProperty, m = !1;
                e.exports = r, e.exports.wrapFunction = f, e.exports.wrapInPlace = c, e.exports.argsToArray = u
            }, {}]
        }, {}, ["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="format-detection" content="telephone=no">

    <!-- canonical url-->

    <!-- rss feed-->


    <!-- icons-->
    <link rel="icon" type="image/png" sizes="16x16"
          href="https://assets3.insales.ru/assets/1/4672/1659456/v_1628672504/favicon.png">
    <style media="screen">
        @supports (content-visibility: hidden) {
            body:not(.settings_loaded) {
                content-visibility: hidden;
            }
        }

        @supports not (content-visibility: hidden) {
            body:not(.settings_loaded) {
                visibility: hidden;
            }
        }
    </style>

    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>
<body class="adaptive settings_loaded" data-multi-lang="false">
<noscript>
    <div class="njs-alert-overlay">
        <div class="njs-alert-wrapper">
            <div class="njs-alert">
                <p>Включите в вашем браузере JavaScript!</p>
            </div>
        </div>
    </div>
</noscript>

<div class="page_layout page_layout-clear">
    <header>

        <div class="layout widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81"
             style="--logo-img:'https://static-sl.insales.ru/files/1/8001/16777025/original/Frame_684b138bcc7f48280840f7c7a6efeefe.svg'; --logo-max-width:180px; --bage-bg:#1B2738; --bage-bg-is-dark:true; --bage-bg-minor-shade:#283b54; --bage-bg-minor-shade-is-dark:true; --bage-bg-major-shade:#364f71; --bage-bg-major-shade-is-dark:true; --bage-bg-half-shade:#6e8eb9; --bage-bg-half-shade-is-dark:true; --hide-language:false; --hide-compare:false; --hide-personal:false; --menu-grid-list-min-width:220px; --subcollections-items-limit:10; --menu-grid-list-row-gap:3rem; --menu-grid-list-column-gap:3rem; --menu-img-ratio:1; --img-border-radius:6px; --hide-menu-photo:false; --bg-bottom:#B79B7E; --bg-bottom-is-dark:true; --bg-bottom-minor-shade:#bfa68c; --bg-bottom-minor-shade-is-dark:true; --bg-bottom-major-shade:#c6b099; --bg-bottom-major-shade-is-light:true; --bg-bottom-half-shade:#dbcebf; --bg-bottom-half-shade-is-light:true; --header-wide-bg:true; --layout-mt:0vw; --layout-mb:0vw; --header-top-pt:0.5vw; --header-top-pb:0.5vw; --header-main-pt:1vw; --header-main-pb:1vw; --layout-content-max-width:1408px; --header-wide-content:false; --hide-desktop:false; --hide-mobile:false;">
            <div class="layout__content">


                <div class="header header_no-languages">
                    <div class="header__mobile-head">
                        <div class="header__mobile-head-content">
                            <button type="button"
                                    class="button button_size-l header__hide-mobile-menu-btn js-hide-mobile-menu">
                                <span class="icon icon-times"></span>
                            </button>


                        </div>
                    </div>

                    <div class="header__content">
                        <div class="header-part-top">
                            <div class="header-part-top__inner">
                                <div class="header__area-menu">
                                    <div class="header__menu-title">
                                        Информация
                                    </div>
                                    <ul class="header__menu js-cut-list cut-list" data-navigation=""
                                        data-menu-handle="footer-menu" data-navigation-inited="true">

                                        <li class="header__menu-item cut-list__elem" data-navigation-item=""
                                            data-menu-item-id="11884331" data-index="0">
                                            <div class="header__menu-controls">
                                                <a href="/page/oferta" class="header__menu-link"
                                                   data-navigation-link="/page/oferta">
                                                    Доставка и оплата
                                                </a>
                                            </div>
                                        </li>

                                        <li class="header__menu-item cut-list__elem" data-navigation-item=""
                                            data-menu-item-id="11884332" data-index="1">
                                            <div class="header__menu-controls">
                                                <a href="/page/agreement" class="header__menu-link"
                                                   data-navigation-link="/page/agreement">
                                                    Пункты выдачи
                                                </a>
                                            </div>
                                        </li>

                                        <li class="header__menu-item cut-list__elem" data-navigation-item=""
                                            data-menu-item-id="11884334" data-index="2">
                                            <div class="header__menu-controls">
                                                <a href="/blogs/blog" class="header__menu-link"
                                                   data-navigation-link="/blogs/blog">
                                                    Магазины
                                                </a>
                                            </div>
                                        </li>

                                        <li class="header__menu-item cut-list__elem" data-navigation-item=""
                                            data-menu-item-id="11884333" data-index="3">
                                            <div class="header__menu-controls">
                                                <a href="/page/exchange" class="header__menu-link"
                                                   data-navigation-link="/page/exchange">
                                                    Возврат товаров
                                                </a>
                                            </div>
                                        </li>

                                        <div style="display: none;" class="cut-list__elem cut-list__dropdown"
                                             data-index="4">
                                            <div class="cut-list__drop">
                                                <div class="cut-list__drop-toggle"><span
                                                        class="icon icon-ellipsis-h"></span></div>
                                                <div class="cut-list__more">
                                                    <div class="cut-list__more-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>

                                <div class="header__area-text">

                                </div>

                                <div class="header__area-contacts">


                                    <div class="header__phone">
                                        <a class="header__phone-value" href="tel:+78005551061">+7 800 555-10-61</a>
                                    </div>


                                    <div class="header__phone _phone-2">
                                        <a class="header__phone-value" href="tel:+74956498314">+7 495 649-83-14</a>
                                    </div>


                                </div>


                            </div>
                        </div>

                        <div class="header-part-main">
                            <div class="header-part-main__inner">
                                <div class="header__area-logo">


                                    <a href=" / " class="header__logo">
                                        <img
                                            src="https://static-sl.insales.ru/files/1/8001/16777025/original/Frame_684b138bcc7f48280840f7c7a6efeefe.svg"
                                            alt="Мой интернет-магазин" title="Мой интернет-магазин">
                                    </a>


                                </div>

                                <div class="header__area-search">
                                    <div class="header__search">
                                        <form action="/search" method="get" class="header__search-form">
                                            <input type="text" autocomplete="off"
                                                   class="form-control form-control_size-l header__search-field"
                                                   name="q" value="" placeholder="Поиск">
                                            <button type="submit" class="button button_size-l header__search-btn">
                                                <span class="icon icon-search"></span>
                                            </button>
                                            <input type="hidden" name="lang" value="ru">
                                        </form>
                                        <button type="button"
                                                class="button button_size-l header__search-mobile-btn js-show-mobile-search">
                                            <span class="icon icon-search _show"></span>
                                            <span class="icon icon-times _hide"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="header__area-controls">

                                    <a href="/client_account/orders" class="header__control-btn header__cabinet">
                                        <span class="icon icon-user"></span>
                                    </a>


                                    <a href="/compares" class="header__control-btn header__compare compare-empty"
                                       data-compare-counter-btn="">
            <span class="icon icon-compare">
              <span class="header__control-bage compare-empty" data-compare-counter="">0</span>
            </span>
                                    </a>


                                    <a href="/cart_items" class="header__control-btn header__cart" data-bage-count="0"
                                       data-badge-count="0">
            <span class="icon icon-cart">
              <span class="header__control-bage cart-empty" data-cart-positions-count="">0</span>
            </span>
                                        <span class="header__control-text" data-cart-total-price="">0.00&nbsp;₽</span>
                                    </a>
                                </div>
                            </div>


                            <div class="header__collections">
                                <div class="header__collections-content">
                                    <div class="header__collections-head">Каталог</div>


                                    <ul class="grid-list header__collections-menu" data-navigation=""
                                        data-subcollections-items-limit="10" data-navigation-inited="true">


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/sad-i-ogorod"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/Gh373de_Dq0/fit/500/500/ce/1/plain/images/collections/1/3121/77573169/Фото.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/Z3CcEyLr500/fit/500/500/ce/1/plain/images/collections/1/3121/77573169/Фото.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/sad-i-ogorod" class="header__collections-link"
                                                   data-navigation-link="/collection/sad-i-ogorod">
                                                    Сад и огород
                                                </a>


                                                <button
                                                    class="header__collections-show-submenu-btn js-show-mobile-submenu"
                                                    type="button">
                                                    <span class="icon icon-angle-down"></span>
                                                </button>

                                            </div>


                                            <ul class="header__collections-submenu" data-navigation-submenu="">

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/rasteniya-i-tsvety"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/rasteniya-i-tsvety">
                                                            Растения и цветы
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/uhod-za-rasteniyami"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/uhod-za-rasteniyami">
                                                            Уход за растениями
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/sadovyy-inventar"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/sadovyy-inventar">
                                                            Садовый инвентарь
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-67f705"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-67f705">
                                                            Садовые инструменты
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-e41ae8"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-e41ae8">
                                                            Товары для отдыха
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/grili-mangaly-koptilni"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/grili-mangaly-koptilni">
                                                            Барбекю для дачи
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="header__collections-show-more ">
                <span class="button-link header__collections-show-more-link js-show-more-subcollections">
                  <span class="header__collections-show-more-text-show">Показать все</span>
                  <span class="header__collections-show-more-text-hide">Скрыть</span>
                  <span class="icon icon-angle-down"></span>
                </span>
                                            </div>

                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/sadovaya-mebel"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/PrjiBRSE5qQ/fit/500/500/ce/1/plain/images/collections/1/3123/77573171/Садовая_мебель.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/Hmuc_HQaEHY/fit/500/500/ce/1/plain/images/collections/1/3123/77573171/Садовая_мебель.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/sadovaya-mebel" class="header__collections-link"
                                                   data-navigation-link="/collection/sadovaya-mebel">
                                                    Садовая мебель
                                                </a>


                                                <button
                                                    class="header__collections-show-submenu-btn js-show-mobile-submenu"
                                                    type="button">
                                                    <span class="icon icon-angle-down"></span>
                                                </button>

                                            </div>


                                            <ul class="header__collections-submenu" data-navigation-submenu="">

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/terraboom" class="header__collections-link"
                                                           data-navigation-link="/collection/terraboom">
                                                            Terraboom
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/eco-line" class="header__collections-link"
                                                           data-navigation-link="/collection/eco-line">
                                                            Eco Line
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/reendo" class="header__collections-link"
                                                           data-navigation-link="/collection/reendo">
                                                            Reendo
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/lizard" class="header__collections-link"
                                                           data-navigation-link="/collection/lizard">
                                                            Lizard
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/komplekty-mebeli"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/komplekty-mebeli">
                                                            Комплекты мебели
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/kacheli" class="header__collections-link"
                                                           data-navigation-link="/collection/kacheli">
                                                            Качели
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/gamaki" class="header__collections-link"
                                                           data-navigation-link="/collection/gamaki">
                                                            Гамаки
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-39d8a3"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-39d8a3">
                                                            Шезлонги
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/shatry-besedki"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/shatry-besedki">
                                                            Шатры, беседки
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/zonty" class="header__collections-link"
                                                           data-navigation-link="/collection/zonty">
                                                            Зонты
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item is-hide" data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/kresla-i-stulya"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/kresla-i-stulya">
                                                            Кресла и стулья
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item is-hide" data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/divany" class="header__collections-link"
                                                           data-navigation-link="/collection/divany">
                                                            Диваны
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="header__collections-show-more is-show">
                <span class="button-link header__collections-show-more-link js-show-more-subcollections">
                  <span class="header__collections-show-more-text-show">Показать все</span>
                  <span class="header__collections-show-more-text-hide">Скрыть</span>
                  <span class="icon icon-angle-down"></span>
                </span>
                                            </div>

                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/posuda"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/bzbHfo-zTfY/fit/500/500/ce/1/plain/images/collections/1/2098/80922674/Посуда.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/lzx8CZutYbQ/fit/500/500/ce/1/plain/images/collections/1/2098/80922674/Посуда.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/posuda" class="header__collections-link"
                                                   data-navigation-link="/collection/posuda">
                                                    Посуда
                                                </a>


                                                <button
                                                    class="header__collections-show-submenu-btn js-show-mobile-submenu"
                                                    type="button">
                                                    <span class="icon icon-angle-down"></span>
                                                </button>

                                            </div>


                                            <ul class="header__collections-submenu" data-navigation-submenu="">

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/laambro" class="header__collections-link"
                                                           data-navigation-link="/collection/laambro">
                                                            Laambro
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/belfast" class="header__collections-link"
                                                           data-navigation-link="/collection/belfast">
                                                            Belfast
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/glasgow" class="header__collections-link"
                                                           data-navigation-link="/collection/glasgow">
                                                            Glasgow
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/denmark" class="header__collections-link"
                                                           data-navigation-link="/collection/denmark">
                                                            Denmark
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/dlya-prigotovleniya"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/dlya-prigotovleniya">
                                                            Для приготовления
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/servilovka-stola"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/servilovka-stola">
                                                            Сервиловка стола
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/dlya-chaya-i-kofe"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/dlya-chaya-i-kofe">
                                                            Для чая и кофе
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-ddc75d"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-ddc75d">
                                                            Кухонные аксессуары
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="header__collections-show-more ">
                <span class="button-link header__collections-show-more-link js-show-more-subcollections">
                  <span class="header__collections-show-more-text-show">Показать все</span>
                  <span class="header__collections-show-more-text-hide">Скрыть</span>
                  <span class="icon icon-angle-down"></span>
                </span>
                                            </div>

                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/osveschenie"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/4r3A90gxUJM/fit/500/500/ce/1/plain/images/collections/1/2099/80922675/Освещение.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/Fr6w7egHfHk/fit/500/500/ce/1/plain/images/collections/1/2099/80922675/Освещение.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/osveschenie" class="header__collections-link"
                                                   data-navigation-link="/collection/osveschenie">
                                                    Освещение
                                                </a>


                                                <button
                                                    class="header__collections-show-submenu-btn js-show-mobile-submenu"
                                                    type="button">
                                                    <span class="icon icon-angle-down"></span>
                                                </button>

                                            </div>


                                            <ul class="header__collections-submenu" data-navigation-submenu="">

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/lyustry" class="header__collections-link"
                                                           data-navigation-link="/collection/lyustry">
                                                            Люстры
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/komplektuyuschie-dlya-svetilnikov"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/komplektuyuschie-dlya-svetilnikov">
                                                            Комплектующие для светильников
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/tehnicheskie-svetilniki"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/tehnicheskie-svetilniki">
                                                            Технические светильники
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-da6169"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-da6169">
                                                            Лампочки
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-240d7c"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-240d7c">
                                                            Светодиодное освещение
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/podvesnye-svetilniki"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/podvesnye-svetilniki">
                                                            Подвесные светильники
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="header__collections-show-more ">
                <span class="button-link header__collections-show-more-link js-show-more-subcollections">
                  <span class="header__collections-show-more-text-show">Показать все</span>
                  <span class="header__collections-show-more-text-hide">Скрыть</span>
                  <span class="icon icon-angle-down"></span>
                </span>
                                            </div>

                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/dekor"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/xc7IKZI4RG0/fit/500/500/ce/1/plain/images/collections/1/6087/87644103/minh-pham-MBsReSZ2WNM-unsplash__1_.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/HUxtXdY0M8c/fit/500/500/ce/1/plain/images/collections/1/6087/87644103/minh-pham-MBsReSZ2WNM-unsplash__1_.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/dekor" class="header__collections-link"
                                                   data-navigation-link="/collection/dekor">
                                                    Декор
                                                </a>


                                                <button
                                                    class="header__collections-show-submenu-btn js-show-mobile-submenu"
                                                    type="button">
                                                    <span class="icon icon-angle-down"></span>
                                                </button>

                                            </div>


                                            <ul class="header__collections-submenu" data-navigation-submenu="">

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/tekstil-dlya-doma"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/tekstil-dlya-doma">
                                                            Текстиль для дома
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/karnizy-dlya-shtor"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/karnizy-dlya-shtor">
                                                            Карнизы для штор
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/postelnoe-belie-2"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/postelnoe-belie-2">
                                                            Постельное бельё
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-aa08d4"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-aa08d4">
                                                            Декор для стен
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/oformlenie-interiera"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/oformlenie-interiera">
                                                            Оформление интерьера
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/dekor-dlya-detskoy"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/dekor-dlya-detskoy">
                                                            Декор для детской
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/dekor-dlya-spalni"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/dekor-dlya-spalni">
                                                            Декор для спальни
                                                        </a>
                                                    </div>
                                                </li>

                                                <li class="header__collections-item " data-navigation-item="">
                                                    <div class="header__collections-controls">
                                                        <a href="/collection/katalog-1-ea3b9b"
                                                           class="header__collections-link"
                                                           data-navigation-link="/collection/katalog-1-ea3b9b">
                                                            Декор для кухни
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="header__collections-show-more ">
                <span class="button-link header__collections-show-more-link js-show-more-subcollections">
                  <span class="header__collections-show-more-text-show">Показать все</span>
                  <span class="header__collections-show-more-text-hide">Скрыть</span>
                  <span class="icon icon-angle-down"></span>
                </span>
                                            </div>

                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/postelnoe-belie"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/gF3WWVqySZY/fit/500/500/ce/1/plain/images/products/1/2540/417933804/Фото.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/3BB92cqnIoE/fit/500/500/ce/1/plain/images/products/1/2540/417933804/Фото.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/postelnoe-belie" class="header__collections-link"
                                                   data-navigation-link="/collection/postelnoe-belie">
                                                    Постельное бельё
                                                </a>


                                            </div>


                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/hranenie"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/zREOYEvW8hw/fit/500/500/ce/1/plain/images/collections/1/2106/80922682/Хранение.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/jeJBMbSgiT8/fit/500/500/ce/1/plain/images/collections/1/2106/80922682/Хранение.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/hranenie" class="header__collections-link"
                                                   data-navigation-link="/collection/hranenie">
                                                    Хранение
                                                </a>


                                            </div>


                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/hoztovary"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/ePRUgT3yB6M/fit/500/500/ce/1/plain/images/collections/1/2107/80922683/Хозяйственные_товары.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/pQMwI_-PB5I/fit/500/500/ce/1/plain/images/collections/1/2107/80922683/Хозяйственные_товары.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/hoztovary" class="header__collections-link"
                                                   data-navigation-link="/collection/hoztovary">
                                                    Хозтовары
                                                </a>


                                            </div>


                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/novinki"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/LWkOVU7G17Y/fit/500/500/ce/1/plain/images/collections/1/2338/80922914/new.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/D4Y4Dj38kyY/fit/500/500/ce/1/plain/images/collections/1/2338/80922914/new.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/novinki" class="header__collections-link"
                                                   data-navigation-link="/collection/novinki">
                                                    Новинки
                                                </a>


                                            </div>


                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/bestsellery"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/R_YVV0B-1uU/fit/500/500/ce/1/plain/images/collections/1/2339/80922915/best.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/ERbNl5m3y9Y/fit/500/500/ce/1/plain/images/collections/1/2339/80922915/best.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/bestsellery" class="header__collections-link"
                                                   data-navigation-link="/collection/bestsellery">
                                                    Бестселлеры
                                                </a>


                                            </div>


                                        </li>


                                        <li class="header__collections-item is-level-1" data-navigation-item="">


                                            <div class="header__collections-controls">


                                                <a href="/collection/goryachaya-tsena"
                                                   class="img-ratio img-ratio_cover header__collections-photo">
                                                    <div class="img-ratio__inner">


                                                        <picture>
                                                            <source
                                                                data-srcset="https://static-sl.insales.ru/r/7dvX5eJ0pRE/fit/500/500/ce/1/plain/images/collections/1/2351/80922927/_.jpg@webp"
                                                                type="image/webp" class="lazyload">
                                                            <img
                                                                data-src="https://static-sl.insales.ru/r/bW14baY5RKg/fit/500/500/ce/1/plain/images/collections/1/2351/80922927/_.jpg"
                                                                class="lazyload">
                                                        </picture>

                                                    </div>
                                                </a>

                                                <a href="/collection/goryachaya-tsena" class="header__collections-link"
                                                   data-navigation-link="/collection/goryachaya-tsena">
                                                    Горячая цена
                                                </a>


                                            </div>


                                        </li>


                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="header-part-bottom">
                            <div class="header-part-bottom__inner">
                                <div class="header__area-catalog">
                                    <button type="button"
                                            class="button button_size-l header__show-collection-btn js-show-header-collections">
                                        <span class="icon icon-bars _show"></span>
                                        <span class="icon icon-times _hide"></span>
                                        Каталог
                                    </button>
                                </div>

                                <div class="header__area-bottom_menu">
                                    <div class="header__bottom_menu-title">
                                        Сервис
                                    </div>
                                    <ul class="header__bottom_menu js-cut-list-menu cut-list" data-navigation=""
                                        data-menu-handle="main-menu" data-navigation-inited="true">

                                        <li class="header__bottom_menu-item cut-list__elem" data-navigation-item=""
                                            data-index="0">
                                            <a href="/page/about-us" class="header__bottom_menu-link"
                                               data-navigation-link="/page/about-us">О компании</a>
                                        </li>

                                        <li class="header__bottom_menu-item cut-list__elem" data-navigation-item=""
                                            data-index="1">
                                            <a href="/page/contacts" class="header__bottom_menu-link"
                                               data-navigation-link="/page/contacts">Контакты</a>
                                        </li>

                                        <li class="header__bottom_menu-item cut-list__elem" data-navigation-item=""
                                            data-index="2">
                                            <a href="/page/delivery" class="header__bottom_menu-link"
                                               data-navigation-link="/page/delivery">Доставка</a>
                                        </li>

                                        <li class="header__bottom_menu-item cut-list__elem" data-navigation-item=""
                                            data-index="3">
                                            <a href="/page/payment" class="header__bottom_menu-link"
                                               data-navigation-link="/page/payment">Оплата</a>
                                        </li>

                                        <li class="header__bottom_menu-item cut-list__elem" data-navigation-item=""
                                            data-index="4">
                                            <a href="/client_account/login" class="header__bottom_menu-link"
                                               data-navigation-link="/client_account/login">Личный кабинет</a>
                                        </li>

                                        <div style="display: none;" class="cut-list__elem cut-list__dropdown"
                                             data-index="5">
                                            <div class="cut-list__drop">
                                                <div class="cut-list__drop-toggle"><span
                                                        class="icon icon-ellipsis-h"></span></div>
                                                <div class="cut-list__more">
                                                    <div class="cut-list__more-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="header-mobile-panel">
                    <div class="header-mobile-panel__content">
                        <button type="button"
                                class="button button_size-l header-mobile-panel__show-menu-btn js-show-mobile-menu">
                            <span class="icon icon-bars"></span>
                        </button>

                        <div class="header-mobile-panel__logo">


                            <a href=" / " class="header__logo">
                                <img
                                    src="https://static-sl.insales.ru/files/1/8001/16777025/original/Frame_684b138bcc7f48280840f7c7a6efeefe.svg"
                                    alt="Мой интернет-магазин" title="Мой интернет-магазин">
                            </a>


                        </div>

                        <div class="header-mobile-panel__controls">
                            <a href="/cart_items" class="header__control-btn header__mobile-cart data-bage-count=" 0""=""
                            data-badge-count="0">
                            <span class="icon icon-cart">
          <span class="header__control-bage cart-empty" data-cart-positions-count="">0</span>
        </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="header__collections-overlay"></div>

            </div>
        </div>


    </header>
    <main>
        <div class="layout">
            <div class="layout__content">
                <div class="checkout-v2-wrapper co-section--content_wrapper">

                    <div class="co-section--content">
                        <div class="co-section--checkout_header co-checkout-block--padded">
                            <h1 class="co-checkout-title co-title co-title--h1">
                                Вход в кабинет покупателя
                            </h1>
                        </div>
                        <div class="co-login">
                            <div class="co-login-form_placeholder co-checkout-block--padded">
                                <form class="co-form--login co-modal-login_form" data-code-resend-timeout="60"
                                      data-use-mask="1" data-active-block=".co-form--login_by_email"
                                      action="/client_account/session" accept-charset="UTF-8" method="post"><input
                                        name="utf8" type="hidden" value="✓"><input type="hidden"
                                                                                   name="authenticity_token"
                                                                                   value="DvrhTm8/BCbqpxAcext5WEOXaAmCYrraFYzdF+n2mScFbWP6cg6ixs1AAc/iA2UIftki6jOL0IJFj9Kx92iPuQ==">
                                    <div
                                        class="co-input co-input--text co-input--language co-input--nested co-input--required co-input--empty_nested">
                                        <label class="co-input-label" for="email">Телефон или email</label>
                                        <div class="co-input-text"><input type="text" name="email" id="email"
                                                                          class="co-input-field js-input-field"
                                                                          required="required"></div>
                                    </div>
                                    <div
                                        class="co-input co-input--text co-input--language co-input--nested co-input--required co-input--empty_nested">
                                        <label class="co-input-label" for="password">Пароль</label>
                                        <div class="co-input-text"><input type="password" name="password" id="password"
                                                                          class="co-input-field js-input-field"
                                                                          required="required"></div>
                                    </div>
                                    <div class="co-form-controls">
                                        <button class="co-button co-form-button js-co-login-submit" name="commit"
                                                type="submit">Войти
                                        </button>
                                        <a class="co-button co-button--link co-form-button"
                                           href="/client_account/password/change">Восстановить пароль</a><a
                                            class="co-button co-button--link co-form-button"
                                            href="/client_account/contacts/new">Зарегистрироваться</a></div>
                                </form>
                            </div>
                        </div>
                        <div class="co-login co-login--social_login co-checkout-block--padded"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

        <div class="layout widget-type_system_widget_v4_footer_5"
             style="--logo-img:'https://static-sl.insales.ru/files/1/8002/16777026/original/Frame_a59e4a54556dccaceefb1b7c17d4ae67.svg'; --logo-max-width:180px; --hide-phone-2:false; --hide-menu-title:false; --hide-social:false; --social-img-1:'https://static-sl.insales.ru/files/1/1310/14550302/original/dz.svg'; --social-img-2:'https://static-sl.insales.ru/files/1/1306/14550298/original/fb.svg'; --social-img-3:'https://static-sl.insales.ru/files/1/1309/14550301/original/twitter.svg'; --social-img-4:'https://static-sl.insales.ru/files/1/1307/14550299/original/vk.svg'; --social-img-5:'https://static-sl.insales.ru/files/1/1303/14550295/original/yt.svg'; --social-img-6:'https://static-sl.insales.ru/files/1/1308/14550300/original/insta.svg'; --social-img-7:'https://static-sl.insales.ru/files/1/1304/14550296/original/telegram.svg'; --bg:#fafafa; --bg-is-light:true; --bg-minor-shade:#fafafa; --bg-minor-shade-is-light:true; --bg-major-shade:#fafafa; --bg-major-shade-is-light:true; --bg-half-shade:#f7f7f7; --bg-half-shade-is-light:true; --layout-wide-bg:true; --layout-mt:0vw; --layout-mb:0vw; --layout-pt:2vw; --layout-pb:2vw; --layout-content-max-width:1408px; --layout-wide-content:false; --layout-edge:false; --hide-desktop:false; --hide-mobile:false;">
            <div class="layout__content">


                <div class="footer-wrap ">


                    <div class="footer-bottom">
                        <div class="footer__area-logo">
                            <a href="/" class="footer__logo">
                                <img
                                    src="https://static-sl.insales.ru/files/1/8002/16777026/original/Frame_a59e4a54556dccaceefb1b7c17d4ae67.svg"
                                    alt="Мой интернет-магазин" title="Мой интернет-магазин">
                            </a>
                        </div>
                    </div>


                    <div class="footer-top">

                        <div class="footer__area-menu">


                            <div class="menu-item" data-menu-handle="footer-menu">


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11884331">
                                    Доставка и оплата
                                </a>


                                <a class="menu-link  no-title" href="/page/agreement" data-menu-item-id="11884332">
                                    Пункты выдачи
                                </a>


                                <a class="menu-link  no-title" href="/blogs/blog" data-menu-item-id="11884334">
                                    Магазины
                                </a>


                                <a class="menu-link  no-title" href="/page/exchange" data-menu-item-id="11884333">
                                    Возврат товаров
                                </a>

                            </div>


                            <div class="menu-item" data-menu-handle="footer-menu2">


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969967">
                                    Корпоративным клиентам
                                </a>


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969981">
                                    Сервисный центр
                                </a>


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969982">
                                    Поставщикам
                                </a>


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969983">
                                    Поддержка
                                </a>

                            </div>


                            <div class="menu-item" data-menu-handle="footer-menu3">


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969984">
                                    Услуги
                                </a>


                                <a class="menu-link  no-title" href="/page/oferta" data-menu-item-id="11969985">
                                    Подарочная карта
                                </a>


                                <a class="menu-link  no-title" href="/blogs/blog" data-menu-item-id="11969986">
                                    Статьи
                                </a>

                            </div>


                        </div>


                        <div class="footer__area-sidebar">
                            <div class="contacts_title">
                                Контакты
                            </div>
                            <div class="footer__area-contacts">


                                <div class="footer__phone">
                                    <a class="footer__phone-value" href="tel:+78005551061">+7 800 555-10-61</a>
                                </div>


                                <div class="footer__phone _phone-2">
                                    <a class="footer__phone-value" href="tel:+74956498314">+7 495 649-83-14</a>
                                </div>


                            </div>
                            <div class="contacts_info">
                                г. Москва, ул. Новорязанская, 18, стр. 11
                            </div>
                            <div class="footer__area-social">

                                <div class="social-items">


                                    <div class="social-img-item">
                                        <img src="https://static-sl.insales.ru/files/1/1310/14550302/original/dz.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img src="https://static-sl.insales.ru/files/1/1306/14550298/original/fb.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img
                                            src="https://static-sl.insales.ru/files/1/1309/14550301/original/twitter.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img src="https://static-sl.insales.ru/files/1/1307/14550299/original/vk.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img src="https://static-sl.insales.ru/files/1/1303/14550295/original/yt.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img
                                            src="https://static-sl.insales.ru/files/1/1308/14550300/original/insta.svg">
                                    </div>


                                    <div class="social-img-item">
                                        <img
                                            src="https://static-sl.insales.ru/files/1/1304/14550296/original/telegram.svg">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_copyright">
                        <p><a rel="noopener" href="https://www.insales.ru/" target="_blank">Интернет-магазин создан на
                                InSales</a></p>
                    </div>
                </div>


            </div>
        </div>


    </footer>
</div>
<div class="outside-widgets">

    <div class="layout widget-type_system_widget_v4_preorder_1"
         style="--hide-use-agree:false; --layout-mt:1vw; --layout-mb:1vw; --layout-pt:2vw; --layout-pb:2vw; --layout-content-max-width:480px;">
        <div class="layout__content">
            <div class="preorder">
                <div class="preorder__head">
                    <div class="preorder__title">Предзаказ</div>
                    <button type="button" class="button button_size-m preorder__hide-btn js-hide-preorder">
                        <span class="icon icon-times"></span>
                    </button>
                </div>
                <div class="preorder__main">
                    <form method="post" action="/client_account/feedback" data-feedback-form-wrapper=""
                          class="preorder__form">
                        <input type="hidden" value="" name="is-preorder-form">
                        <div data-feedback-form-success="{&quot;showTime&quot;: 5000}"
                             class="preorder__success-message">Предзаказ успешно отправлен!
                        </div>
                        <div class="preorder__content">
                            <div class="preorder__fields">
                                <div data-feedback-form-field-area="" class="preorder__field-area is-required">
                                    <div class="preorder__field-label">
                                        Имя
                                        <span class="preorder__field-label-star">*</span>
                                    </div>
                                    <input name="name"
                                           data-feedback-form-field="{&quot;isRequired&quot;: true, &quot;errorMessage&quot;: &quot;Необходимо заполнить поле Имя&quot;}"
                                           type="text" value=""
                                           class="form-control form-control_size-l form-control_wide is-required">
                                    <div data-feedback-form-field-error="" class="preorder__field-error"></div>
                                </div>

                                <div data-feedback-form-field-area="" class="preorder__field-area is-required">
                                    <div class="preorder__field-label">
                                        Телефон
                                        <span class="preorder__field-label-star">*</span>
                                    </div>
                                    <input name="phone"
                                           data-feedback-form-field="{&quot;isRequired&quot;: true, &quot;errorMessage&quot;: &quot;Неверно заполнено поле Телефон&quot;, &quot;phoneNumberLength&quot;: 11}"
                                           type="text" autocomplete="off"
                                           class="form-control form-control_size-l form-control_wide is-required">
                                    <div data-feedback-form-field-error="" class="preorder__field-error"></div>
                                </div>


                                <div data-feedback-form-field-area="" class="preorder__field-area agree">
                                    <label class="agree__checkbox">
                                        <input
                                            data-feedback-form-agree="{&quot;errorMessage&quot;: &quot;Необходимо подтвердить согласие&quot;}"
                                            name="agree" type="checkbox" value="" class="agree__field">
                                        <span class="agree__content">
                  <span class="agree__btn icon-check"></span>
                    <span class="agree__label">
                      Настоящим подтверждаю, что я ознакомлен и согласен с условиями

                        оферты и политики конфиденциальности

                      <span class="preorder__field-label-star">*</span>
                    </span>
                </span>
                                    </label>
                                    <div data-feedback-form-field-error="" class="preorder__field-error"></div>
                                </div>


                                <input name="from" data-feedback-form-field="" type="hidden"
                                       value="nikitasher715@gmail.com" class="is-required">
                                <input type="hidden" value="Предзаказ" data-feedback-form-field="" name="subject">
                                <input type="hidden" data-preorder-product-label="Товар: "
                                       data-preorder-variant-label="Вариант: " value="" name="content"
                                       data-feedback-form-field="" class="is-required">


                                <div class="preorder__field-area">
                                    <button class="button button_size-l button_wide preorder__submit-btn" type="submit">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div class="layout widget-type_system_widget_v4_alerts" style="">
        <div class="layout__content">

            <div class="micro-alerts" data-micro-alerts-settings="{


  &quot;success_feedback&quot;: &quot;✓ Сообщение успешно отправлено&quot;,


  &quot;success_cart&quot;: &quot;✓ Товар добавлен в корзину&quot;,


  &quot;add_item_compares&quot;: &quot;Товар добавлен в сравнение&quot;,


  &quot;remove_item_compares&quot;: &quot;Товар удален из сравнения&quot;,


  &quot;add_item_favorites&quot;: &quot;✓ Товар добавлен в избранное&quot;,


  &quot;remove_item_favorites&quot;: &quot;Товар удален из избранного&quot;,


  &quot;overload_compares&quot;: &quot;⚠ Достигнуто максимальное количество товаров для сравнения&quot;,


  &quot;overload_quantity&quot;: &quot;⚠ Достигнуто максимальное количество единиц товара для заказа&quot;,


  &quot;success_preorder&quot;: &quot;✓ Предзаказ успешно отправлен&quot;

}">
            </div>
        </div>
    </div>


    <div class="layout widget-type_system_widget_v4_notification_add_to_cart_1"
         style="--layout-mt:1vw; --layout-mb:1vw; --layout-pt:2vw; --layout-pb:2vw; --layout-content-max-width:750px;">
        <div class="layout__content">
            <div class="notification">
                <div class="notification__head">
                    <div class="notification__title">Добавить в корзину</div>
                    <button type="button" class="button button_size-m notification__hide-btn js-hide-notification">
                        <span class="icon icon-times"></span>
                    </button>
                </div>
                <div class="notification__content">
                    <div class="notification-product">
                        <div class="notification-product__photo"></div>
                        <div class="notification-product__title"></div>
                        <div class="notification-product__info">
                            <div class="notification-product__price"></div>
                            <div class="notification-product__count"></div>
                        </div>
                        <div class="notification-product__controls">
                            <button type="button" class="button notification-product__close-btn js-hide-notification">
                                Вернуться к покупкам
                            </button>
                            <a class="button notification-product__to-cart" href="/cart_items">Перейти в корзину</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="layout widget-type_system_widget_v4_stiker_hex_color" style="">
        <div class="layout__content">
            <style>
                [data-sticker-title] {
                    background-color: #B79B7E;
                    --bg: #B79B7E;
                    --color-text: var(--color-text-light);
                    --color-text-minor-shade: var(--color-text-light-minor-shade);
                    --color-text-major-shade: var(--color-text-light-major-shade);
                    --color-text-half-shade: var(--color-text-light-half-shade);
                    color: var(--color-text);
                }

                [data-sticker-title="Новинка"] {
                    background-color: #009688;
                    --bg: #009688;
                    --color-text: var(--color-text-light);
                    --color-text-minor-shade: var(--color-text-light-minor-shade);
                    --color-text-major-shade: var(--color-text-light-major-shade);
                    --color-text-half-shade: var(--color-text-light-half-shade);
                    color: var(--color-text);
                }

                [data-sticker-title="Распродажа"] {
                    background-color: #e44542;
                    --bg: #e44542;
                    --color-text: var(--color-text-light);
                    --color-text-minor-shade: var(--color-text-light-minor-shade);
                    --color-text-major-shade: var(--color-text-light-major-shade);
                    --color-text-half-shade: var(--color-text-light-half-shade);
                    color: var(--color-text);
                }

                [data-sticker-title="sticker-sale"] {
                    background-color: #B79B7E;
                    --bg: #B79B7E;
                    --color-text: var(--color-text-light);
                    --color-text-minor-shade: var(--color-text-light-minor-shade);
                    --color-text-major-shade: var(--color-text-light-major-shade);
                    --color-text-half-shade: var(--color-text-light-half-shade);
                    color: var(--color-text);
                }

                [data-sticker-title="sticker-preorder"] {
                    background-color: #B79B7E;
                    --bg: #B79B7E;
                    --color-text: var(--color-text-light);
                    --color-text-minor-shade: var(--color-text-light-minor-shade);
                    --color-text-major-shade: var(--color-text-light-major-shade);
                    --color-text-half-shade: var(--color-text-light-half-shade);
                    color: var(--color-text);
                }
            </style>
        </div>
    </div>


    <div class="layout widget-type_system_widget_v4_callback_modal_1"
         style="--hide-field-content:true; --hide-use-agree:false; --layout-mt:1vw; --layout-mb:1vw; --layout-pt:2vw; --layout-pb:2vw; --layout-content-max-width:480px;">
        <div class="layout__content">
            <div class="callback">
                <div class="callback__head">
                    <div class="callback__title">Обратный звонок</div>
                    <button type="button" class="button button_size-m callback__hide-btn js-hide-modal">
                        <span class="icon icon-times"></span>
                    </button>
                </div>
                <div class="callback__main">
                    <form method="post" action="/client_account/feedback" data-feedback-form-wrapper=""
                          class="callback__form">
                        <div data-feedback-form-success="{&quot;showTime&quot;: 5000}"
                             class="callback__success-message">Запрос успешно отправлен!
                        </div>
                        <div class="callback__content">
                            <div class="callback__fields">
                                <div data-feedback-form-field-area="" class="callback__field-area is-required">
                                    <div class="callback__field-label">
                                        Имя
                                        <span class="callback__field-label-star">*</span>
                                    </div>
                                    <input name="name"
                                           data-feedback-form-field="{&quot;isRequired&quot;: true, &quot;errorMessage&quot;: &quot;Необходимо заполнить поле Имя&quot;}"
                                           type="text" value=""
                                           class="form-control form-control_size-l form-control_wide is-required">
                                    <div data-feedback-form-field-error="" class="callback__field-error"></div>
                                </div>

                                <div data-feedback-form-field-area="" class="callback__field-area is-required">
                                    <div class="callback__field-label">
                                        Телефон
                                        <span class="callback__field-label-star">*</span>
                                    </div>
                                    <input name="phone"
                                           data-feedback-form-field="{&quot;isRequired&quot;: true, &quot;errorMessage&quot;: &quot;Неверно заполнено поле Телефон&quot;, &quot;phoneNumberLength&quot;: 11}"
                                           type="text" autocomplete="off"
                                           class="form-control form-control_size-l form-control_wide is-required">
                                    <div data-feedback-form-field-error="" class="callback__field-error"></div>
                                </div>


                                <input name="content" data-feedback-form-field="" type="hidden" value="."
                                       class="is-required">


                                <div data-feedback-form-field-area="" class="callback__field-area agree">
                                    <label class="agree__checkbox">
                                        <input
                                            data-feedback-form-agree="{&quot;errorMessage&quot;: &quot;Необходимо подтвердить согласие&quot;}"
                                            name="agree" type="checkbox" value="" class="agree__field">
                                        <span class="agree__content">
                  <span class="agree__btn icon-check"></span>
                    <span class="agree__label">
                      Настоящим подтверждаю, что я ознакомлен и согласен с условиями

                        оферты и политики конфиденциальности

                      <span class="callback__field-label-star">*</span>
                    </span>
                </span>
                                    </label>
                                    <div data-feedback-form-field-error="" class="callback__field-error"></div>
                                </div>


                                <input name="from" data-feedback-form-field="" type="hidden"
                                       value="nikitasher715@gmail.com" class="is-required">
                                <input type="hidden" value="Обратный звонок" data-feedback-form-field="" name="subject">


                                <div class="callback__field-area">
                                    <button class="button button_size-l button_wide callback__submit-btn" type="submit">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div class="layout widget-type_system_widget_v4_button_on_top_1"
         style="--button-view:bg; --icon-view:icon-arrow-up; --align:right; --size:1.5rem; --margin-bottom:1rem; --margin-side:1rem; --hide-desktop:false; --hide-mobile:true;">
        <div class="layout__content">
            <button type="button" class="btn-on-top js-go-top-page">
                <span class="icon-arrow-up"></span>
            </button>
        </div>
    </div>


</div>
<script
    src="/served_assets/shop/demoshop_panel-9d8ecd3c0e4224b72ab1bdeaa53bf0f21fcdabe0dae9af060011fc0040cee8e1.js"></script>
<link rel="stylesheet" media="screen"
      href="/served_assets/shop/demoshop_panel-a7bb6ff61ba5696abfc00e1ad326417cc52cb2ccd5bf0f6b114bf316a4f47169.css">
<div class="is-demoshop insales-panel insales-panel_demoshop" id="insales-panel">
    <div class="insales-panel__logotype">
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" width="133px" height="43px" viewBox="0 0 136.516 48.154"
             enable-background="new 0 0 136.516 48.154" xml:space="preserve">
  <path fill="#ffffff" d="M35.102,25.505c-1.248-4.098-0.935-8.557,1.241-12.449c3.725-6.654,11.723-9.526,19.243-7.473l2.183,3.468
                          l-3.494,2.902c-7.52-1.438-14.602,0.842-17.693,6.368C35.352,20.515,34.892,22.979,35.102,25.505L35.102,25.505z"></path>
            <g>
                <path fill="#ffffff" d="M10.986,47.626H5.099V18.097h5.888V47.626z"></path>
                <path fill="#ffffff" d="M33.881,47.626h-5.8V34.708c-0.06-0.995-0.447-1.83-1.165-2.505c-0.718-0.674-1.589-1.039-2.614-1.099
                            c-1.113,0.03-2.029,0.381-2.746,1.055c-0.719,0.675-1.121,1.494-1.209,2.461v13.007h-5.888V26.139h5.888v1.318
                            c1.436-1.23,3.223-1.846,5.361-1.846c2.285,0,4.219,0.864,5.8,2.592c1.582,1.729,2.373,3.896,2.373,6.504V47.626z"></path>
                <path fill="#ffffff" d="M60.658,38.97c0,3.047-1.136,5.339-3.405,6.877c-2.271,1.538-5.105,2.307-8.503,2.307
                            c-4.453-0.029-8.48-1.641-12.084-4.834l4.262-4.262c2.549,1.963,5.259,3.031,8.13,3.207c1.758,0,3.164-0.285,4.219-0.856
                            c1.054-0.571,1.581-1.354,1.581-2.351c0.029-0.996-0.454-1.816-1.45-2.461s-2.68-1.113-5.053-1.406
                            c-3.516-0.439-6.086-1.435-7.712-2.988c-1.626-1.552-2.425-3.384-2.395-5.492c0-2.578,0.886-4.717,2.658-6.416
                            c1.772-1.698,4.328-2.562,7.668-2.593c4.071,0.088,7.558,1.362,10.458,3.823L54.857,25.7c-1.669-1.289-3.69-1.992-6.063-2.109
                            c-1.758,0-3.003,0.257-3.735,0.769c-0.732,0.513-1.099,1.165-1.099,1.956c0.029,0.82,0.418,1.436,1.165,1.845
                            c0.747,0.411,1.999,0.703,3.757,0.879c3.72,0.352,6.613,1.385,8.679,3.099S60.658,36.128,60.658,38.97z"></path>
                <path fill="#ffffff" d="M82.729,47.626h-5.58v-0.703c-1.729,0.674-3.633,1.011-5.713,1.011c-2.373,0-4.321-0.674-5.844-2.021
                            c-1.524-1.347-2.285-3.076-2.285-5.185c0-2.227,0.842-4.079,2.526-5.56c1.685-1.479,3.801-2.219,6.35-2.219
                            c1.729,0,3.412,0.191,5.054,0.571c0.058-0.791-0.235-1.421-0.879-1.89c-0.645-0.468-1.655-0.717-3.032-0.747
                            c-2.051,0-4.043,0.527-5.977,1.582l-2.284-4.569c2.929-1.523,5.683-2.285,8.261-2.285c2.812,0,5.082,0.659,6.811,1.978
                            c1.729,1.317,2.593,3.325,2.593,6.02V47.626z M77.148,41.738v-3.207c-1.758-0.352-3.413-0.527-4.966-0.527
                            c-0.938,0-1.722,0.234-2.351,0.703c-0.631,0.469-0.945,1.04-0.945,1.714c0,0.645,0.374,1.216,1.121,1.713
                            c0.747,0.499,1.647,0.747,2.702,0.747C74.32,42.88,75.801,42.5,77.148,41.738z"></path>
                <path fill="#ffffff" d="M92.272,47.626h-5.888v-26.98l5.888-2.944V47.626z"></path>
                <path fill="#ffffff" d="M115.312,38.75H101.25c0.264,1.23,0.82,2.197,1.67,2.899c0.85,0.703,1.86,1.041,3.032,1.011
                            c1.318,0,2.489-0.512,3.516-1.537l3.91,3.075c-1.963,2.549-4.453,3.823-7.47,3.823c-3.047,0-5.537-1.047-7.471-3.142
                            c-1.933-2.095-2.899-4.782-2.899-8.063c0-2.08,0.439-3.999,1.318-5.757s2.123-3.104,3.734-4.042s3.296-1.406,5.054-1.406
                            c1.786,0,3.449,0.527,4.987,1.582c1.538,1.054,2.702,2.453,3.493,4.196S115.312,35.586,115.312,38.75z M109.512,33.873
                            c-0.206-0.938-0.675-1.67-1.406-2.197c-0.732-0.527-1.554-0.805-2.461-0.835c-0.908,0.03-1.735,0.308-2.482,0.835
                            s-1.224,1.26-1.429,2.197H109.512z"></path>
                <path fill="#ffffff" d="M136.516,41.43c0,1.758-0.784,3.296-2.351,4.614c-1.567,1.318-4.064,1.978-7.492,1.978
                            c-3.018,0-6.343-0.819-9.975-2.461l2.593-5.141c2.694,1.553,5.229,2.358,7.602,2.416c1.846-0.058,2.944-0.241,3.296-0.549
                            s0.527-0.622,0.527-0.945c0-0.321-0.198-0.637-0.594-0.944s-1.619-0.666-3.669-1.076c-2.52-0.498-4.577-1.245-6.174-2.241
                            s-2.425-2.373-2.482-4.131c-0.06-2.167,0.725-3.933,2.351-5.295s3.786-2.043,6.481-2.043c3.046,0,6.181,0.82,9.403,2.461
                            l-2.461,4.877c-2.49-1.083-4.73-1.67-6.723-1.758c-1.084,0-1.883,0.117-2.395,0.352c-0.514,0.235-0.77,0.587-0.77,1.055
                            c0.059,0.352,0.314,0.631,0.77,0.835c0.453,0.205,1.486,0.513,3.098,0.923c2.9,0.674,5.119,1.509,6.657,2.505
                            S136.516,39.38,136.516,41.43z"></path>
            </g>
</svg>
    </div>
    <div class="insales-panel__caption insales-panel__shop-title"><a class="insales-panel__preview-label"
                                                                     href="http://www.insales.ru/collection/themes"><span
                class="translation_missing"
                title="translation missing: ru.shop.order_registration.shared.demoshop_panel.panel_title">Panel Title</span></a>
        <div class="insales-panel__theme-title">Шаблон интернет магазина - Loft</div>
    </div>
    <div class="insales-panel__right-section">
        <div class="insales-panel__section" data-demoshop-auth="https://auth.insales.ru/authorized_domains"
             id="demo-use-theme" style="display: block;"><a
                class="insales-panel__button insales-panel__button_install-theme"
                href="https://myshop-bpn125.myinsales.ru/admin2/remote_themes/250007398/install" rel="external"
                title="<span class=" translation_missing"="">Buy Install Help"&gt;<span class="translation_missing"
                                                                                        title="translation missing: ru.shop.order_registration.shared.demoshop_panel.install_theme">Install Theme</span>
            для myshop-bpn125.myinsales.ru</a></div>
        <div class="insales-panel__section" data-demoshop-auth="https://auth.insales.ru/authorized_domains"
             id="demo-create-shop" style="display: none"><a
                class="insales-panel__button insales-panel__button_install-theme"
                href="http://www.insales.ru/page/registration_template?demo_shop_account=demo-loft&amp;remote_theme_id=613"
                rel="external">
                <div class="insales-panel__button-text"><span><span class="translation_missing"
                                                                    title="translation missing: ru.shop.order_registration.shared.demoshop_panel.create_shop">Create Shop</span></span>
                    <span><span class="translation_missing"
                                title="translation missing: ru.shop.order_registration.shared.demoshop_panel.use_current_template">Use Current Template</span></span>
                </div>
            </a></div>
    </div>
    <button class="is-toggle-panel insales-panel__toggle">
        <div class="inner-toggle-panel">
            <svg fill="none" height="14" viewBox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4L7 10L12 4" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="1.5"></path>
            </svg>
        </div>
    </button>
</div>
<link rel="stylesheet" media="screen"
      href="/served_assets/checkout2.core-5863ae33e9ad84c8620a90541e7ebdd2adbeb98acc13e9b9866dafdb475bfcc2.css">


<script src="https://assets3.insales.ru/assets/common-js/common.v2.21.6.js"></script>
<script src="https://assets3.insales.ru/assets/static-versioned/2.17/static/libs/my-layout/1.0.0/my-layout.js"></script>
<link href="https://assets3.insales.ru/assets/static-versioned/2.24/static/libs/my-layout/1.0.0/core-css.css"
      rel="stylesheet" type="text/css">
<script
    src="https://assets3.insales.ru/assets/static-versioned/1.26/static/libs/jquery/3.5.1/jquery-3.5.1.min.js"></script>
<script
    src="https://assets3.insales.ru/assets/static-versioned/1.90/static/libs/microalert/0.1.0/microAlert.js"></script>
<link href="https://assets3.insales.ru/assets/static-versioned/1.90/static/libs/microalert/0.1.0/microAlert.css"
      rel="stylesheet" type="text/css">
<script
    src="https://assets3.insales.ru/assets/static-versioned/2.3/static/libs/body-scroll-lock/v3.1.3/bodyScrollLock.min.js"></script>
<script
    src="https://assets3.insales.ru/assets/static-versioned/2.2/static/libs/cut-list/1.0.0/jquery.cut-list.js"></script>
<link href="https://assets3.insales.ru/assets/static-versioned/2.2/static/libs/cut-list/1.0.0/jquery.cut-list.css"
      rel="stylesheet" type="text/css">
<script
    src="https://assets3.insales.ru/assets/static-versioned/1.26/static/libs/vanilla-lazyload/17.3.0/lazyload.min.js"></script>
<script
    src="https://assets3.insales.ru/assets/static-versioned/1.32/static/libs/js-cookie/3.0.0/js.cookie.min.js"></script>
<style>
    .widget-type_system_widget_v4_alerts .micro-alerts {
        display: none
    }

    .widget-type_system_widget_v4_callback_modal_1.layout {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 0;
        padding-top: var(--layout-mt);
        padding-bottom: var(--layout-mb);
        margin-bottom: 0;
        z-index: var(--zindex-modal);
        align-items: flex-start;
        display: flex;
        background: rgba(0, 0, 0, 0.5) !important;
        overflow-y: auto;
        display: none
    }

    .widget-type_system_widget_v4_callback_modal_1.layout.is-show-fullscreen {
        display: flex
    }

    .widget-type_system_widget_v4_callback_modal_1.layout .layout__content {
        flex-grow: 1;
        padding: 0 !important;
        position: relative
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__head {
        position: relative;
        padding: 2rem calc(var(--controls-height-m) + 2rem) 2rem 2rem;
        background-color: var(--bg-minor-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_callback_modal_1 .callback__head {
            padding: 1rem calc(var(--controls-height-m) + 1rem) 1rem 1rem
        }
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__title {
        font-size: 1.6rem;
        font-weight: 600;
        line-height: 1.3
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_callback_modal_1 .callback__title {
            font-size: 1.2rem
        }
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__hide-btn.button {
        position: absolute;
        top: 50%;
        right: 1rem;
        transform: translateY(-50%);
        background: none;
        padding: 0;
        width: var(--controls-height-m);
        height: var(--controls-height-m);
        font-size: 1.5rem;
        color: var(--color-text);
        border-color: transparent
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__hide-btn.button:hover {
        background: none;
        color: var(--color-accent-text);
        border-color: transparent
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_callback_modal_1 .callback__hide-btn.button {
            right: 0.5rem
        }
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__main {
        padding: var(--layout-pt) 2rem var(--layout-pb) 2rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_callback_modal_1 .callback__main {
            padding: var(--layout-pt) 1rem var(--layout-pb) 1rem
        }
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__form {
        position: relative
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__form.is-sended .callback__content {
        display: none
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__form.is-sended .callback__success-message {
        display: block
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__success-message {
        font-size: 1.2rem;
        text-align: center;
        padding: 0.5rem 0;
        display: none
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__field-area {
        margin-bottom: 20px
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__field-area:last-child {
        margin-bottom: 0
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__field_label {
        margin-bottom: 5px
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__field-label-star {
        color: var(--color-error)
    }

    .widget-type_system_widget_v4_callback_modal_1 .callback__field-error {
        font-size: 0.875rem;
        color: var(--color-error)
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree {
        margin-bottom: 20px;
        text-align: left;
        line-height: 1.3
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__field {
        display: none
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__field:checked + .agree__content .agree__btn {
        border-color: var(--color-btn-bg)
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__field:checked + .agree__content .agree__btn:before {
        opacity: 1;
        visibility: visible
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__content {
        display: inline-flex
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__btn {
        width: 1.5rem;
        min-width: 1.5rem;
        height: 1.5rem;
        margin-right: 0.8rem;
        border: var(--controls-border-width) solid var(--color-form-controls-border-color);
        border-radius: calc(var(--controls-form-border-radius) / 2);
        position: relative
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__btn:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        color: var(--color-btn-bg);
        opacity: 0;
        visibility: hidden
    }

    .widget-type_system_widget_v4_callback_modal_1 .agree__label {
        align-self: center
    }

    .widget-type_system_widget_v4_footer_5 {
        background-color: var(--bg)
    }

    .widget-type_system_widget_v4_footer_5[style*="--bg-is-dark:true"] {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_system_widget_v4_footer_5[style*="--bg-is-light:true"] {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_system_widget_v4_footer_5[style*="--hide-social:true"] .footer__area-social {
        display: none !important
    }

    .widget-type_system_widget_v4_footer_5[style*="--hide-pay:true"] .footer__area-pay {
        display: none !important
    }

    .widget-type_system_widget_v4_footer_5[style*="--hide-phone-2:true"] .footer__phone._phone-2 {
        display: none !important
    }

    .widget-type_system_widget_v4_footer_5[style*="--hide-phone-2:true"] .footer__phone {
        border: none
    }

    @media screen and (min-width: 1680px) {
        .widget-type_system_widget_v4_footer_5[style*="--layout-wide-content:true"] .footer__area-menu .menu-item {
            width: 30%
        }
    }

    .widget-type_system_widget_v4_footer_5[style*="--hide-menu-title:true"] .menu-title {
        display: none !important
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5[style*="--hide-menu-title:true"] .footer__area-menu .menu-item .menu-link {
            display: block
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer-wrap {
        display: grid
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer__phone {
            border: none
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-bottom {
            grid-row-start: 1;
            padding-top: 0;
            border: 0;
            padding-bottom: 1rem;
            display: flex
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-bottom .footer__area-pay {
            display: none
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-bottom .footer__area-logo {
            max-width: 50%
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-bottom .footer__area-logo img {
            width: 100%
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top {
            grid-template-areas:"sidebar" "menu";
            grid-template-columns:auto
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top .footer__area-sidebar {
            display: flex;
            flex-direction: column
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top .footer__area-social {
            padding-bottom: 0
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top .footer__area-contacts {
            padding-bottom: 1rem
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top .footer__area-menu {
            flex-direction: column
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap .footer-top .footer__area-menu .menu-item {
            padding-right: 0
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer-top {
        display: grid;
        grid-template-areas:"menu sidebar";
        gap: 2rem;
        padding-bottom: 1.5rem;
        grid-template-columns:auto 450px
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer-top {
            padding-bottom: 0 !important
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer-bottom {
        padding-bottom: 1.5rem
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-sidebar {
        grid-area: sidebar
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-pay {
        grid-area: pay;
        display: flex;
        grid-auto-flow: column;
        align-content: center;
        justify-self: baseline;
        flex-wrap: wrap
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-pay .pay-img-item {
        margin: 0.5rem 1rem 0.5rem 0;
        max-height: 40px
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-pay .pay-img-item img {
        max-width: 80px;
        max-height: 40px
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-pay .pay-img-item:last-child {
        margin-right: 0
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu {
        grid-area: menu;
        display: flex;
        flex-wrap: wrap;
        font-size: 0.9rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu {
            display: grid;
            grid-auto-flow: row;
            font-size: 1rem
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-title-error {
        width: 120px;
        font-size: 0.7rem
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item {
        display: grid;
        padding-right: 5rem;
        padding-bottom: 1rem;
        gap: 0.75rem;
        grid-auto-rows: max-content
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item.is-show-mobile .menu-link {
        display: inline-block
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item.is-show-mobile .menu-show-submenu-btn {
        transform: rotate(-180deg)
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item {
            padding: 1rem 0;
            border-top: 1px solid var(--color-border-block)
        }

        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item:last-child {
            border-bottom: 1px solid var(--color-border-block)
        }
    }

    @media screen and (max-width: 375px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item {
            display: grid
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item:last-child {
        padding-right: 0
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item a {
        text-decoration: none;
        color: var(--color-text)
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item a.link-current, .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item a:hover {
        color: var(--color-accent-text)
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item a {
            display: inline-block;
            padding-left: 0.5rem
        }
    }

    @media screen and (max-width: 375px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item a {
            display: inline-block;
            margin: 0
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item .menu-link {
            display: none
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item .menu-title {
        font-weight: bold;
        margin-bottom: 0.25rem;
        font-size: 1.1rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-menu .menu-item .menu-title {
            align-self: center;
            position: relative;
            display: grid;
            grid-auto-flow: column;
            grid-template-columns:auto 2rem;
            padding: 0 0.5rem;
            margin: 0 !important
        }
    }

    .widget-type_system_widget_v4_footer_5 .contacts_title {
        font-weight: bold;
        margin-bottom: 1rem;
        font-size: 1.1rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .contacts_title {
            margin-bottom: 0.5rem
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social {
        grid-area: social;
        padding-top: 2rem
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social img {
        max-width: 30px;
        max-height: 30px
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social .title {
        font-size: 1.1rem;
        font-weight: bold;
        padding-bottom: 0.75rem
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social .social-items {
        display: flex;
        flex-wrap: wrap
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social .social-img-item {
        max-height: 40px;
        margin: 0.5rem 1rem 0.5rem 0
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-social .social-img-item:last-child {
        margin-right: 0
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-social .social-img-item {
            margin-right: 1.7rem
        }
    }

    @media screen and (max-width: 375px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-social .social-img-item {
            margin-right: 1rem
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-contacts {
        grid-area: contacts;
        display: flex;
        flex-wrap: wrap
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer__area-contacts {
            display: block
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-logo {
        grid-area: logo
    }

    .widget-type_system_widget_v4_footer_5 .footer__area-logo img {
        max-width: var(--logo-max-width, 280px);
        max-height: 300px;
        object-fit: contain;
        width: 100%;
        object-position: 0%
    }

    .widget-type_system_widget_v4_footer_5 .footer__phone {
        margin-right: 15px;
        padding-right: 15px;
        border-right: 2px solid var(--color-border-block)
    }

    .widget-type_system_widget_v4_footer_5 .footer__phone:last-child {
        margin-right: 0;
        padding-right: 0;
        border-right: none
    }

    .widget-type_system_widget_v4_footer_5 .footer__phone-value {
        color: var(--color-text);
        text-decoration: none;
        font-size: 1.1rem
    }

    .widget-type_system_widget_v4_footer_5 .footer_copyright {
        padding-top: 1.5rem;
        border-top: 1px solid var(--color-border-block);
        font-size: 0.9rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer_copyright {
            border-top: none !important
        }
    }

    .widget-type_system_widget_v4_footer_5 .footer_copyright a {
        color: var(--color-accent-text-major-shade);
        text-decoration: none;
        font-size: 0.9rem
    }

    .widget-type_system_widget_v4_footer_5 .footer_copyright p {
        margin-bottom: 0
    }

    .widget-type_system_widget_v4_footer_5 .footer_copyright p + p {
        margin-top: 1rem
    }

    .widget-type_system_widget_v4_footer_5 .contacts_info {
        font-size: 1.1rem;
        padding-top: 0.75rem
    }

    .widget-type_system_widget_v4_footer_5 .footer__phone:first-child {
        flex: 0 0 auto;
        align-self: center
    }

    .widget-type_system_widget_v4_footer_5 .menu-show-submenu-btn {
        position: absolute;
        right: 0;
        top: 50%;
        width: 2.5rem;
        height: 2.5rem;
        margin-top: -1.25rem;
        background: none;
        border: none;
        padding: 0;
        outline: none;
        box-shadow: none;
        color: var(--color-text);
        cursor: pointer;
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .menu-show-submenu-btn {
            display: block
        }
    }

    .widget-type_system_widget_v4_footer_5 .no-title {
        display: block !important
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_footer_5 .footer-wrap.without_menu .footer-top .footer__area-sidebar {
            grid-row-start: 2
        }

        .widget-type_system_widget_v4_footer_5 .footer-wrap.without_menu .footer-top {
            gap: 0
        }
    }

    .widget-type_system_widget_v4_modal_cookie_1 {
        background-color: var(--bg)
    }

    [style*="--bg-is-dark:true"].widget-type_system_widget_v4_modal_cookie_1 {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    [style*="--bg-is-light:true"].widget-type_system_widget_v4_modal_cookie_1 {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_system_widget_v4_modal_cookie_1.layout {
        z-index: var(--zindex-modal);
        position: fixed;
        bottom: 0;
        width: 100%;
        display: none;
        -webkit-box-shadow: 0px -1px 23px 2px rgba(0, 0, 0, 0.09);
        -moz-box-shadow: 0px -1px 23px 2px rgba(0, 0, 0, 0.09);
        box-shadow: 0px -1px 23px 2px rgba(0, 0, 0, 0.09)
    }

    .widget-type_system_widget_v4_modal_cookie_1.layout.is-show-fullscreen {
        display: block
    }

    .widget-type_system_widget_v4_modal_cookie_1 .cookie-banner {
        align-items: center;
        display: grid;
        gap: 2rem;
        grid-template-columns:auto 300px
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_modal_cookie_1 .cookie-banner {
            grid-template-columns:auto;
            gap: 1rem
        }
    }

    .widget-type_system_widget_v4_modal_cookie_1 .cookie-text p {
        margin: 0
    }

    .widget-type_system_widget_v4_modal_cookie_1 .cookie-link {
        justify-self: end
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_modal_cookie_1 .cookie-link {
            justify-self: start
        }
    }

    .widget-type_system_widget_v4_modal_cookie_1 .cookie-link .button {
        padding: 0 60px
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1.layout {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 0;
        padding-top: var(--layout-mt);
        padding-bottom: var(--layout-mb);
        margin-bottom: 0;
        z-index: var(--zindex-modal);
        align-items: flex-start;
        display: flex;
        background: rgba(0, 0, 0, 0.5) !important;
        overflow-y: auto;
        display: none
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1.layout.is-show-fullscreen {
        display: flex
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1.layout .layout__content {
        flex-grow: 1;
        padding: 0 !important;
        position: relative
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__head {
        position: relative;
        padding: 2rem calc(var(--controls-height-m) + 2rem) 2rem 2rem;
        background-color: var(--bg-minor-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__head {
            padding: 1rem calc(var(--controls-height-m) + 1rem) 1rem 1rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__title {
        font-size: 1.6rem;
        font-weight: 600;
        line-height: 1.3
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__title {
            font-size: 1.2rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__hide-btn.button {
        position: absolute;
        top: 50%;
        right: 1rem;
        transform: translateY(-50%);
        background: none;
        padding: 0;
        width: var(--controls-height-m);
        height: var(--controls-height-m);
        font-size: 1.5rem;
        color: var(--color-text);
        border-color: transparent
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__hide-btn.button:hover {
        background: none;
        color: var(--color-accent-text);
        border-color: transparent
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__hide-btn.button {
            right: 0.5rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__content {
        padding: var(--layout-pt) 2rem var(--layout-pb) 2rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification__content {
            padding: var(--layout-pt) 1rem var(--layout-pb) 1rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product {
        display: grid;
        grid-template-areas:"photo title" "photo info" "photo controls";
        grid-template-columns:30% 1fr;
        grid-template-rows:min-content 1fr min-content;
        grid-column-gap: 2rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product {
            grid-template-areas:"photo title" "info info" "controls controls";
            grid-column-gap: 1rem;
            grid-row-gap: 1rem;
            align-items: center
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__photo {
        grid-area: photo;
        min-width: 0
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__photo img {
        max-width: 100%
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__title {
        grid-area: title;
        padding: 5px 0 1rem;
        font-size: 1.6rem;
        line-height: 1.3;
        font-weight: 600
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__title {
            font-size: 1.2rem;
            padding: 0
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__info {
        grid-area: info
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__controls {
        grid-area: controls;
        padding-top: 1rem;
        display: flex;
        flex-wrap: wrap;
        margin: 0 -5px
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__controls {
            padding-top: 0
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__controls .button {
        flex-grow: 1;
        margin: 0 5px 5px
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__price {
        display: inline-block;
        vertical-align: middle;
        font-size: 1.6rem;
        font-weight: 600;
        margin-right: 0.5rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__price {
            font-size: 1.2rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__count {
        display: inline-block;
        vertical-align: middle;
        font-size: 1.5rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__count {
            font-size: 1rem
        }
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__close-btn {
        background: var(--color-btn-color);
        color: var(--color-btn-bg);
        border-color: var(--color-btn-bg)
    }

    .widget-type_system_widget_v4_notification_add_to_cart_1 .notification-product__close-btn:hover {
        background: var(--color-btn-color);
        color: var(--color-btn-bg-minor-shade);
        border-color: var(--color-btn-bg-minor-shade)
    }

    .widget-type_system_widget_v4_preorder_1.layout {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin-top: 0;
        padding-top: var(--layout-mt);
        padding-bottom: var(--layout-mb);
        margin-bottom: 0;
        z-index: var(--zindex-modal);
        align-items: flex-start;
        display: flex;
        background: rgba(0, 0, 0, 0.5) !important;
        overflow-y: auto;
        display: none
    }

    .widget-type_system_widget_v4_preorder_1.layout.is-show-fullscreen {
        display: flex
    }

    .widget-type_system_widget_v4_preorder_1.layout .layout__content {
        flex-grow: 1;
        padding: 0 !important;
        position: relative
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__head {
        position: relative;
        padding: 2rem calc(var(--controls-height-m) + 2rem) 2rem 2rem;
        background-color: var(--bg-minor-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_preorder_1 .preorder__head {
            padding: 1rem calc(var(--controls-height-m) + 1rem) 1rem 1rem
        }
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__title {
        font-size: 1.6rem;
        font-weight: 600;
        line-height: 1.3
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_preorder_1 .preorder__title {
            font-size: 1.2rem
        }
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__hide-btn.button {
        position: absolute;
        top: 50%;
        right: 1rem;
        transform: translateY(-50%);
        background: none;
        padding: 0;
        width: var(--controls-height-m);
        height: var(--controls-height-m);
        font-size: 1.5rem;
        color: var(--color-text);
        border-color: transparent
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__hide-btn.button:hover {
        background: none;
        color: var(--color-accent-text);
        border-color: transparent
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_preorder_1 .preorder__hide-btn.button {
            right: 0.5rem
        }
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__main {
        padding: var(--layout-pt) 2rem var(--layout-pb) 2rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_system_widget_v4_preorder_1 .preorder__main {
            padding: var(--layout-pt) 1rem var(--layout-pb) 1rem
        }
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__form {
        position: relative
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__form.is-sended .preorder__content {
        display: none
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__form.is-sended .preorder__success-message {
        display: block
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__success-message {
        font-size: 1.2rem;
        text-align: center;
        padding: 0.5rem 0;
        display: none
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__field-area {
        margin-bottom: 20px
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__field-area:last-child {
        margin-bottom: 0
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__field_label {
        margin-bottom: 5px
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__field-label-star {
        color: var(--color-error)
    }

    .widget-type_system_widget_v4_preorder_1 .preorder__field-error {
        font-size: 0.875rem;
        color: var(--color-error)
    }

    .widget-type_system_widget_v4_preorder_1 .agree {
        margin-bottom: 20px;
        text-align: left;
        line-height: 1.3
    }

    .widget-type_system_widget_v4_preorder_1 .agree__field {
        display: none
    }

    .widget-type_system_widget_v4_preorder_1 .agree__field:checked + .agree__content .agree__btn {
        border-color: var(--color-btn-bg)
    }

    .widget-type_system_widget_v4_preorder_1 .agree__field:checked + .agree__content .agree__btn:before {
        opacity: 1;
        visibility: visible
    }

    .widget-type_system_widget_v4_preorder_1 .agree__content {
        display: inline-flex
    }

    .widget-type_system_widget_v4_preorder_1 .agree__btn {
        width: 1.5rem;
        min-width: 1.5rem;
        height: 1.5rem;
        margin-right: 0.8rem;
        border: var(--controls-border-width) solid var(--color-form-controls-border-color);
        border-radius: calc(var(--controls-form-border-radius) / 2);
        position: relative
    }

    .widget-type_system_widget_v4_preorder_1 .agree__btn:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        color: var(--color-btn-bg);
        opacity: 0;
        visibility: hidden
    }

    .widget-type_system_widget_v4_preorder_1 .agree__label {
        align-self: center
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--align:left"] .btn-on-top {
        right: auto;
        left: var(--margin-side)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:bg"] .btn-on-top {
        background-color: var(--color-btn-bg);
        color: var(--color-btn-color)
    }

    [style*="--color-btn-bg-is-dark:true"].widget-type_system_widget_v4_button_on_top_1[style*="--button-view:bg"] .btn-on-top {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    [style*="--color-btn-bg-is-light:true"].widget-type_system_widget_v4_button_on_top_1[style*="--button-view:bg"] .btn-on-top {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:bg"] .btn-on-top:hover {
        background-color: var(--color-btn-bg-minor-shade)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:border"] .btn-on-top {
        background-color: var(--bg);
        color: var(--color-text)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:border"] .btn-on-top:hover {
        background-color: var(--bg);
        border-color: var(--color-btn-bg-minor-shade);
        color: var(--color-text-minor-shade)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:transparent"] .btn-on-top {
        background-color: transparent;
        border-color: transparent;
        color: var(--color-btn-bg)
    }

    .widget-type_system_widget_v4_button_on_top_1[style*="--button-view:transparent"] .btn-on-top:hover {
        background-color: transparent;
        color: var(--color-btn-bg-minor-shade)
    }

    .widget-type_system_widget_v4_button_on_top_1 .btn-on-top {
        position: fixed;
        bottom: var(--margin-bottom);
        right: var(--margin-side);
        padding: calc(var(--size) / 2);
        width: auto;
        height: auto;
        outline: none;
        cursor: pointer;
        background-color: var(--color-btn-bg);
        border: 1px solid var(--color-btn-bg);
        border-radius: var(--controls-btn-border-radius);
        color: var(--color-btn-color);
        font-size: var(--size);
        line-height: 1;
        z-index: calc(var(--zindex-modal) - 1);
        opacity: 0;
        visibility: hidden;
        transition: .2s
    }

    .widget-type_system_widget_v4_button_on_top_1 .btn-on-top.is-show {
        visibility: visible;
        opacity: 1
    }

    .widget-type_system_widget_v4_button_on_top_1 .btn-on-top > span:before {
        display: block
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 {
        background: transparent !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        --submenu-indent: 15px;
        --submenu-item-vertical-indent: 3px;
        --submenu-min-width: 200px;
        --submenu-max-width: 300px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__content {
        position: relative;
        background: var(--bg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .layout__content {
        max-width: 100%;
        background: transparent;
        padding-left: 0 !important;
        padding-right: 0 !important
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg"] .header-part-main {
        padding-left: 0;
        padding-right: 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg"] .header-part-main__inner {
        padding-left: var(--layout-side-padding);
        padding-right: var(--layout-side-padding)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-bottom {
        position: relative
    }

    @media screen and (min-width: 768px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-bottom__inner {
            background-color: var(--bg-bottom)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"] .header-part-bottom__inner {
            color: var(--color-text-light);
            --color-text: var(--color-text-light);
            --color-text-minor-shade: var(--color-text-light-minor-shade);
            --color-text-major-shade: var(--color-text-light-major-shade);
            --color-text-half-shade: var(--color-text-light-half-shade)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"] .header-part-bottom__inner {
            color: var(--color-text-dark);
            --color-text: var(--color-text-dark);
            --color-text-minor-shade: var(--color-text-dark-minor-shade);
            --color-text-major-shade: var(--color-text-dark-major-shade);
            --color-text-half-shade: var(--color-text-dark-half-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu {
            flex-direction: column;
            align-items: self-start;
            padding: 10px var(--layout-side-padding) 0;
            background-color: var(--bg)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"] .header__bottom_menu {
            color: var(--color-text-light);
            --color-text: var(--color-text-light);
            --color-text-minor-shade: var(--color-text-light-minor-shade);
            --color-text-major-shade: var(--color-text-light-major-shade);
            --color-text-half-shade: var(--color-text-light-half-shade)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"] .header__bottom_menu {
            color: var(--color-text-dark);
            --color-text: var(--color-text-dark);
            --color-text-minor-shade: var(--color-text-dark-minor-shade);
            --color-text-major-shade: var(--color-text-dark-major-shade);
            --color-text-half-shade: var(--color-text-dark-half-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu .cut-list__more {
        background-color: var(--bg-bottom);
        border-color: var(--bg-bottom-major-shade);
        background-color: var(--bg-bottom, var(--bg));
        z-index: var(--zindex-fixed)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"] .header__bottom_menu .cut-list__more {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"] .header__bottom_menu .cut-list__more {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-item {
        position: relative;
        list-style: none;
        white-space: nowrap
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-item + .header__bottom_menu-item {
            margin-top: 1rem
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-link {
        text-decoration: none;
        color: var(--color-text);
        display: inline-block;
        vertical-align: middle;
        position: relative;
        height: var(--controls-height-l);
        line-height: var(--controls-height-l);
        padding: var(--controls-btn-padding-y) var(--controls-btn-padding-x)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-link {
            padding-left: 0;
            padding-right: 0;
            height: auto;
            line-height: 1.2
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-link.is-current {
        font-weight: bold
    }

    @media (min-width: 768px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-link.is-current {
            color: var(--color-active-link, var(--color-text))
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-bottom {
        padding-left: var(--layout-side-padding);
        padding-right: var(--layout-side-padding)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-bottom {
            padding-left: 0;
            padding-right: 0
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-bottom__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-bottom__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-bottom__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-bottom__inner {
        padding-left: 0;
        padding-right: 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-main, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main {
        background-color: var(--bg)
    }

    @media screen and (min-width: 768px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-bottom {
            background-color: var(--bg-bottom)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"][style*="--header-wide-bg:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"][style*="--header-wide-content:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"][style*="--header-wide-bg: true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"][style*="--header-wide-content: true"] .header-part-bottom {
            color: var(--color-text-light);
            --color-text: var(--color-text-light);
            --color-text-minor-shade: var(--color-text-light-minor-shade);
            --color-text-major-shade: var(--color-text-light-major-shade);
            --color-text-half-shade: var(--color-text-light-half-shade)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"][style*="--header-wide-bg:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"][style*="--header-wide-content:true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"][style*="--header-wide-bg: true"] .header-part-bottom, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"][style*="--header-wide-content: true"] .header-part-bottom {
            color: var(--color-text-dark);
            --color-text: var(--color-text-dark);
            --color-text-minor-shade: var(--color-text-dark-minor-shade);
            --color-text-major-shade: var(--color-text-dark-major-shade);
            --color-text-half-shade: var(--color-text-dark-half-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top {
        background: var(--bg-minor-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top {
            background-color: var(--bg)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"][style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"][style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"][style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"][style*="--header-wide-content: true"] .header-part-top {
            color: var(--color-text-light);
            --color-text: var(--color-text-light);
            --color-text-minor-shade: var(--color-text-light-minor-shade);
            --color-text-major-shade: var(--color-text-light-major-shade);
            --color-text-half-shade: var(--color-text-light-half-shade)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"][style*="--header-wide-bg:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"][style*="--header-wide-content:true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"][style*="--header-wide-bg: true"] .header-part-top, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"][style*="--header-wide-content: true"] .header-part-top {
            color: var(--color-text-dark);
            --color-text: var(--color-text-dark);
            --color-text-minor-shade: var(--color-text-dark-minor-shade);
            --color-text-major-shade: var(--color-text-dark-major-shade);
            --color-text-half-shade: var(--color-text-dark-half-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-bg: true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main__inner {
        background-color: transparent
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header__collections-content, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content:true"] .header-part-bottom__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header__collections-content, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--header-wide-content: true"] .header-part-bottom__inner {
        max-width: 100%
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header_no-languages .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language: true"] .header-part-top__inner {
        grid-template-areas:"contacts menu";
        grid-template-columns:max-content 1fr
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language:true"] .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header_no-languages .header-part-top__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language: true"] .header-part-top__inner {
            grid-template-areas:"menu" "contacts";
            grid-template-columns:auto
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language:true"] .header__languages, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language:true"] .header__area-language, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language:true"] .header__mobile-languages, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header_no-languages .header__languages, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header_no-languages .header__area-language, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header_no-languages .header__mobile-languages, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language: true"] .header__languages, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language: true"] .header__area-language, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-language: true"] .header__mobile-languages {
        display: none !important
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal:true"] .header__cabinet, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal: true"] .header__cabinet {
        display: none !important
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-compare:true"] .header__compare, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-compare: true"] .header__compare {
        display: none !important
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal:true"][style*="--hide-compare:true"] .header-part-main__inner, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal: true"][style*="--hide-compare: true"] .header-part-main__inner {
            grid-template-areas:"search" "collections";
            grid-template-columns:100%
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal:true"][style*="--hide-compare:true"] .header__area-controls, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal: true"][style*="--hide-compare: true"] .header__area-controls {
            display: none
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal:true"][style*="--hide-compare:true"] .header__search-form, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal: true"][style*="--hide-compare: true"] .header__search-form {
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            z-index: 1;
            display: flex
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal:true"][style*="--hide-compare:true"] .header__search-mobile-btn, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-personal: true"][style*="--hide-compare: true"] .header__search-mobile-btn {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-menu-photo:true"] .header__collections-photo, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--hide-menu-photo: true"] .header__collections-photo {
        display: none !important
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-bottom__inner {
        max-width: var(--layout-content-max-width);
        grid-column-gap: 12px;
        margin: 0 auto
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-top {
            order: 1
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-top__inner {
        display: grid;
        grid-template-areas:"contacts menu language";
        grid-template-columns:max-content 1fr max-content;
        grid-column-gap: 30px;
        align-items: center;
        max-width: var(--layout-content-max-width);
        margin: 0 auto;
        padding-top: var(--header-top-pt);
        padding-bottom: var(--header-top-pb);
        padding-left: var(--layout-side-padding);
        padding-right: var(--layout-side-padding);
        background: var(--bg-minor-shade)
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-top__inner {
            grid-column-gap: 20px
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-top__inner {
            grid-template-areas:"menu" "text" "contacts";
            grid-template-columns:auto;
            padding-top: 15px;
            padding-bottom: 15px
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-main {
        padding-left: var(--layout-side-padding);
        padding-right: var(--layout-side-padding)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-main {
            padding: 0
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-main__inner {
        display: grid;
        grid-template-areas:"logo search controls";
        grid-template-columns:1fr 2fr 1fr;
        grid-row-gap: calc(var(--header-main-pt) + var(--header-top-pb));
        align-items: center;
        padding-top: var(--header-main-pt);
        padding-bottom: var(--header-main-pb);
        max-width: var(--layout-content-max-width);
        margin: 0 auto;
        background-color: var(--bg);
        position: relative
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-main__inner {
            grid-template-areas:"controls search" "collections collections";
            grid-template-columns:1fr max-content;
            padding: 0;
            align-items: stretch
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header.is-touch .header__collections-show-submenu-btn {
        display: inline-flex
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header.is-touch .header__collections-link.with-arrow {
        padding-right: 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header.is-touch .header__collections-link.with-arrow .icon {
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: var(--zindex-modal);
            overflow-y: auto;
            background-color: var(--bg);
            transform: translate3d(-100%, 0, 0);
            visibility: hidden;
            transition: .3s
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header.is-show-mobile {
            transform: translate3d(0, 0, 0);
            visibility: visible
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__content {
            display: flex;
            flex-direction: column
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-menu {
        grid-area: menu;
        min-width: 0
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-menu {
            padding: 0 var(--layout-side-padding)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-language {
        grid-area: language;
        display: flex
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-language {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-contacts {
        grid-area: contacts;
        display: flex
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-contacts {
            display: block;
            padding: 0 var(--layout-side-padding)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-logo {
        grid-area: logo
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-logo {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-search {
        grid-area: search
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-search {
            padding: 10px calc(var(--layout-side-padding) - 5px) 10px var(--layout-side-padding);
            background-color: var(--bg-minor-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-controls {
        grid-area: controls;
        display: flex;
        justify-content: flex-end
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-controls {
            padding: 10px 5px 10px calc(var(--layout-side-padding) - 5px);
            background-color: var(--bg-minor-shade);
            justify-content: flex-start
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-collections {
        grid-area: collections;
        min-width: 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu {
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: flex-end
    }

    @media screen and (min-width: 768px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu {
            font-size: .9rem
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu {
            display: block;
            margin-bottom: 10px;
            margin-top: 10px
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__drop-toggle {
        width: 1.5rem;
        height: 1.5rem;
        text-align: center
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__drop-toggle {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__drop-toggle .icon {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__more {
        background-color: var(--bg);
        border-color: var(--bg-major-shade);
        min-width: 160px;
        padding: 5px 10px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"] .header__menu .cut-list__more {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"] .header__menu .cut-list__more {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__more {
            border: none;
            min-width: 0;
            padding: 0;
            position: static;
            top: auto;
            right: auto;
            z-index: 1;
            display: block !important
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu .cut-list__more .header__menu-item {
        margin-right: 0;
        white-space: normal
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-item {
        list-style: none;
        margin-right: 18px;
        white-space: nowrap
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-item:last-child {
        margin-right: 0
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-item {
            margin-right: 0;
            white-space: normal
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-item + .header__menu-item {
            margin-top: 1rem
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-link {
        color: var(--color-text);
        text-decoration: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-link.is-current {
        color: var(--color-accent-text)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-link {
            display: inline-block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone {
        position: relative;
        padding-right: 14px;
        font-size: .9rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone {
            font-size: 1.2rem;
            font-weight: 600;
            border-right: none;
            margin-right: 0;
            padding-right: 0;
            margin-top: 1rem
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone:last-child {
        margin-right: 0;
        padding-right: 0;
        border-right: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone a {
        color: var(--color-text);
        text-decoration: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__work-time {
        color: var(--color-text-half-shade)
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__work-time {
            max-width: 250px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__work-time {
            margin-bottom: 10px;
            max-width: 100%;
            overflow: visible;
            white-space: normal
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo {
        margin-right: 25px;
        display: inline-block;
        max-width: var(--logo-max-width, 180px)
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo {
            max-width: var(--logo-max-width, 150px)
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo {
            margin-right: 0
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo img {
        max-width: 100%;
        max-height: 260px;
        width: 100%;
        object-fit: contain;
        object-position: 0 50%
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo img {
            object-position: 50%
        }
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__logo img {
            max-height: 150px
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search {
        margin: 0 5%
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search {
            margin: 0 16px
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search {
            margin: 0
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search.is-show-mobile .header__search-form {
            display: flex
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search.is-show-mobile .header__search-mobile-btn .icon._show {
            display: none
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search.is-show-mobile .header__search-mobile-btn .icon._hide {
            display: block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-form {
        display: flex;
        border-radius: var(--controls-form-border-radius);
        max-width: 700px
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-form {
            position: absolute;
            top: 10px;
            left: var(--layout-side-padding);
            right: calc(var(--layout-side-padding) + 60px);
            z-index: 1;
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header .form-control.header__search-field {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right: none;
        font-size: var(--font-size);
        width: 150px;
        flex-grow: 1;
        background: var(--bg-minor-shade);
        border-color: var(--bg-minor-shade);
        color: var(--color-text)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header .form-control.header__search-field::placeholder {
        color: var(--bg-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header .form-control.header__search-field:focus {
        box-shadow: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header .form-control.header__search-field {
            background: var(--bg-major-shade);
            border-color: var(--bg-major-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-btn {
        position: relative;
        width: var(--controls-height-l);
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        background: var(--bg-minor-shade);
        border-color: var(--bg-minor-shade);
        color: var(--bg-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-btn:hover {
        color: var(--color-accent-text);
        background: var(--bg-minor-shade);
        border-color: var(--bg-minor-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-btn {
            background: var(--bg-major-shade);
            border-color: var(--bg-major-shade)
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-btn:hover {
            background: var(--bg-major-shade);
            border-color: var(--bg-major-shade)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-btn .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.5rem
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn {
        min-width: 50px;
        height: 50px;
        padding: 0;
        border: none;
        background: none;
        color: var(--color-text);
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn:hover, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn:active {
        background: none;
        color: var(--color-text)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn {
            display: inline-flex
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn .icon {
        font-size: 1.5rem
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__search-mobile-btn .icon._hide {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-btn {
        min-width: 2rem;
        height: 2rem;
        display: inline-flex;
        align-items: center;
        line-height: 1;
        text-decoration: none;
        margin-left: 25px;
        color: var(--color-text);
        justify-content: center
    }

    @media screen and (max-width: 1200px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-btn {
            margin-left: 16px
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-btn {
            min-width: 50px;
            height: 50px;
            margin-left: 0;
            justify-content: center
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-btn .icon {
        font-size: 1.5rem;
        position: relative
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-bage {
        font-family: var(--font-family);
        min-width: 1.125rem;
        height: 1.125rem;
        padding: 0 3px;
        line-height: 1.125rem;
        font-size: 0.75rem;
        font-weight: 700;
        text-align: center;
        border-radius: 50%;
        position: absolute;
        top: -5px;
        right: -10px;
        background-color: var(--bage-bg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bage-bg-is-dark:true"] .header__control-bage {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bage-bg-is-light:true"] .header__control-bage {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-text {
        margin-left: 12px;
        font-size: 1.125rem;
        color: var(--color-accent-text);
        font-weight: 600;
        display: none
    }

    @media screen and (max-width: 1024px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__control-text {
            display: none
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__cart {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-overlay {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: var(--zindex-overlay);
        display: none;
        filter: contrast(0.8)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-overlay.is-show {
        display: block
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-overlay.is-show {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections {
        --grid-list-min-width: var(--menu-grid-list-min-width, --grid-list-min-width);
        --grid-list-row-gap: var(--menu-grid-list-row-gap, --grid-list-row-gap);
        --grid-list-column-gap: var(--menu-grid-list-column-gap, --grid-list-column-gap);
        --img-ratio: var(--menu-img-ratio, --img-ratio);
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        z-index: var(--zindex-modal);
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections {
            grid-area: collection-menu;
            display: block;
            position: relative;
            left: auto;
            right: auto;
            top: auto;
            z-index: 1
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections.is-show {
        display: block
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-content {
        background-color: var(--bg);
        margin: 0 auto;
        padding: 2rem;
        max-width: var(--layout-content-max-width);
        overflow-y: auto;
        scrollbar-width: thin;
        min-height: 300px;
        box-shadow: 0px 0 15px rgba(0, 0, 0, 0.5)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"] .header__collections-content {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"] .header__collections-content {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-content::-webkit-scrollbar {
        width: 10px;
        background-color: var(--bg-minor-shade);
        border: 2px solid var(--bg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-content::-webkit-scrollbar-thumb {
        background-color: var(--color-btn-bg);
        border: 2px solid var(--bg)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-content {
            max-width: 100%;
            max-height: max-content !important;
            margin: 0;
            padding: 0 var(--layout-side-padding);
            overflow-y: visible;
            min-height: 0;
            box-shadow: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-menu {
        padding: 0;
        margin: 0;
        list-style: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-menu {
            display: block !important
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-submenu {
        list-style: none;
        margin: 0 0 0 1rem;
        padding: 0
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-submenu {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-submenu .header__collections-item {
        margin-bottom: 3px
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-controls {
            position: relative;
            padding-right: 3rem
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-submenu-btn {
        position: absolute;
        right: 0;
        top: 50%;
        width: 2.5rem;
        height: 2.5rem;
        margin-top: -1.25rem;
        background: none;
        border: none;
        padding: 0;
        outline: none;
        box-shadow: none;
        color: var(--color-text);
        cursor: pointer;
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-submenu-btn .icon {
        position: relative;
        display: inline-block;
        font-size: 1.25rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-submenu-btn {
            display: block !important
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-hide {
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-hide {
            display: block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-current .header__collections-show-more-link {
        color: var(--color-accent-text)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-current .header__collections-show-more-link:hover {
        color: var(--color-accent-text-major-shade)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 {
            border-bottom: 1px solid var(--bg-minor-shade);
            padding: 0.5rem 0
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1:last-child {
            border-bottom: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-controls {
        margin-bottom: 5px
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-controls {
            margin-bottom: 0;
            width: 100%;
            display: inline-flex;
            align-self: center;
            vertical-align: middle;
            position: relative
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-controls .header__collections-link {
        display: block;
        font-size: 1rem
    }

    @media screen and (min-width: 768px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-controls .header__collections-link {
            font-size: 1.5rem;
            font-weight: 500
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-submenu {
        margin-left: 0
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1 > .header__collections-submenu {
            margin-left: 1rem;
            margin-top: 1rem
        }
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-show-mobile > .header__collections-submenu {
            display: block
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-show-mobile > .header__collections-controls .header__collections-show-submenu-btn {
            transform: rotate(-180deg)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-link {
        text-decoration: none;
        color: var(--color-text);
        font-size: 1rem
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-link:hover, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-link.is-current {
        color: var(--color-accent-text)
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-link {
            display: block;
            padding: 5px 0 !important;
            font-size: 0.875rem
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-photo {
        display: block;
        text-decoration: none;
        margin-bottom: 1rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-photo {
            width: 44px;
            min-width: 44px;
            padding-top: 44px;
            margin: 0;
            display: inline-flex;
            align-self: center;
            vertical-align: middle;
            margin-right: 16px
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more {
        padding-top: 3px;
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more.is-show {
        display: block
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more.is-show {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link {
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        position: relative
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link:hover {
        color: var(--color-btn-bg-major-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link.is-active .icon:before {
        transform: rotate(180deg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link.is-active .header__collections-show-more-text-show {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link.is-active .header__collections-show-more-text-hide {
        display: inline
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link .icon {
        margin-left: 5px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-link .icon:before {
        display: inline-block;
        position: relative
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-show-more-text-hide {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-head {
        font-weight: var(--heading-weight, 500);
        font-size: 1.15rem;
        padding: 10px 0;
        border-bottom: 1px solid var(--bg-minor-shade);
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-head {
            display: block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-head {
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-head {
            display: block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-head-content {
        display: grid;
        grid-template-areas:"controls language";
        grid-template-columns:50px 1fr;
        grid-column-gap: 10px;
        align-items: center;
        background-color: var(--bg-major-shade);
        padding: 5px var(--layout-side-padding);
        min-height: 66px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__hide-mobile-menu-btn {
        font-size: 1.5rem;
        padding: 0;
        width: 50px;
        height: 50px;
        border: none;
        background: none;
        color: var(--color-text);
        margin-left: -5px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__hide-mobile-menu-btn:hover, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__hide-mobile-menu-btn:active {
        background: none;
        color: var(--color-text)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__hide-mobile-menu-btn.button {
        font-size: 1.5rem;
        width: 50px;
        height: 50px
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-languages.header__languages {
            display: block;
            justify-self: flex-end
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel {
        background-color: var(--bg);
        display: none
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel {
            display: block
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__content {
        display: grid;
        grid-template-areas:"burger logo controls";
        grid-template-columns:max-content 1fr max-content;
        grid-column-gap: 10px;
        align-items: center;
        padding: 5px var(--layout-side-padding);
        min-height: 66px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__show-menu-btn {
        padding: 0;
        border: none;
        background: none;
        color: var(--color-text);
        margin-left: -5px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__show-menu-btn:hover, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__show-menu-btn:active {
        background: none;
        color: var(--color-text)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__show-menu-btn.button {
        font-size: 1.5rem;
        width: 50px;
        height: 50px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__logo {
        text-align: center
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel__logo img {
        max-width: 100%;
        max-height: 50px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-mobile-panel .header__control-btn {
        margin-left: 0;
        min-width: 50px;
        height: 50px;
        justify-content: center
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-bottom__inner {
        display: grid;
        grid-template-areas:"catalog menu";
        grid-template-columns:max-content 1fr
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header-part-bottom__inner {
            grid-template-columns:auto;
            grid-template-areas:"collection-menu" "menu"
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-bottom_menu {
        grid-area: menu;
        min-width: 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-catalog {
        grid-area: catalog
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-catalog {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-link {
        margin-bottom: 3px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-catalog .button {
        background-color: var(--bg-bottom);
        background-color: var(--bg-bottom-minor-shade, var(--color-btn-bg));
        border-radius: 0px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-dark:true"] .header__area-catalog .button {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom-is-light:true"] .header__area-catalog .button {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-catalog .button:hover {
        outline: none;
        border-color: var(--bg-bottom-minor-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-dark:true"] .header__area-catalog .button, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-dark: true"] .header__area-catalog .button, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-light:false"] .header__area-catalog .button {
        --color-btn-color: var(--color-text-light);
        --color-btn-color-minor-shade: var(--color-text-light-minor-shade);
        --color-btn-color-major-shade: var(--color-text-light-major-shade);
        --color-btn-color-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-light:true"] .header__area-catalog .button, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-light: true"] .header__area-catalog .button, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 [style*="--color-btn-bg-is-dark:false"] .header__area-catalog .button {
        --color-btn-color: var(--color-text-dark);
        --color-btn-color-minor-shade: var(--color-text-dark-minor-shade);
        --color-btn-color-major-shade: var(--color-text-dark-major-shade);
        --color-btn-color-half-shade: var(--color-text-dark-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom:#FFFFFF"] .header__area-catalog .button {
        background-color: var(--bg-bottom)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-bottom:#FFFFFF"] .header__area-catalog .button:hover {
        outline: none;
        border-color: var(--bg-bottom)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages {
        display: inline-flex;
        margin-left: 0.8rem;
        position: relative;
        vertical-align: middle;
        font-size: 1.2rem;
        text-transform: uppercase;
        line-height: 1;
        grid-area: language;
        display: flex;
        font-size: .9rem
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages {
            font-size: 1rem;
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages.is-show .header__languages-drop {
        display: block
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages.is-show .header__languages-cur .icon {
        transform: rotate(180deg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-drop {
        position: absolute;
        top: calc(100% + 18px);
        left: -5px;
        right: 0;
        z-index: var(--zindex-dropdown);
        padding-top: 2px;
        display: none;
        min-width: 50px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-list {
        background-color: var(--bg);
        padding: 2px 0;
        box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        padding: 2px 0
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-item {
        display: block;
        padding: 8px 12px;
        text-decoration: none;
        color: var(--color-text);
        text-align: center
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-item:hover {
        color: var(--color-accent-text)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-cur {
        white-space: nowrap;
        cursor: pointer
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-cur .icon {
        display: inline-block;
        position: relative
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-drop:before {
        content: "";
        position: absolute;
        width: 20px;
        height: 20px;
        background: var(--bg-minor-shade);
        transform: rotate(45deg) translateX(-50%);
        top: 0%;
        left: calc(50% - 3px);
        box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
        z-index: 1
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-item {
        position: relative;
        z-index: 3
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-list {
        position: relative
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__languages-list:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        background: var(--bg-minor-shade);
        border-radius: 4px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn {
        position: relative;
        font-weight: 600;
        font-size: var(--font-size)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn.is-active {
        z-index: calc(var(--zindex-overlay) + 1)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn.is-active .icon._hide {
        display: inline
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn.is-active .icon._show {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn .icon {
        margin-right: 15px;
        font-size: 1.25rem;
        width: 1.25rem;
        text-align: center
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__show-collection-btn .icon._hide {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .compare-empty .header__control-bage {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__favorite .header__control-bage {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__cart .header__control-bage, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-cart .header__control-bage {
        display: none
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__cart:not([data-badge-count="0"]) .header__control-bage, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__mobile-cart:not([data-badge-count="0"]) .header__control-bage {
        display: block
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__favorite:not([data-badge-count="0"]) .header__control-bage {
        display: block
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone._phone-2:before {
        content: "\2022";
        color: var(--bg-bottom, var(--color-text));
        padding-right: 9px
    }

    @media screen and (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__phone._phone-2:before {
            display: none
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-bottom_menu .cut-list__drop-toggle {
        line-height: 1
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-bottom_menu .cut-list__drop-toggle .icon {
        vertical-align: middle
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__area-bottom_menu .cut-list__drop {
        padding: 13px 12px
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-title, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-title {
        display: none;
        font-size: 18px;
        background-color: var(--bg)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"] .header__menu-title, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-dark:true"] .header__bottom_menu-title {
        color: var(--color-text-light);
        --color-text: var(--color-text-light);
        --color-text-minor-shade: var(--color-text-light-minor-shade);
        --color-text-major-shade: var(--color-text-light-major-shade);
        --color-text-half-shade: var(--color-text-light-half-shade)
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"] .header__menu-title, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81[style*="--bg-is-light:true"] .header__bottom_menu-title {
        color: var(--color-text-dark);
        --color-text: var(--color-text-dark);
        --color-text-minor-shade: var(--color-text-dark-minor-shade);
        --color-text-major-shade: var(--color-text-dark-major-shade);
        --color-text-half-shade: var(--color-text-dark-half-shade)
    }

    @media (max-width: 767px) {
        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-title {
            margin: 1rem var(--layout-side-padding) 0
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__menu-title, .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__bottom_menu-title {
            display: block;
            font-weight: var(--heading-weight, 500);
            border-top: 1px solid var(--bg-minor-shade);
            padding-top: 1rem
        }

        .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item.is-level-1.is-current > .header__collections-controls > .header__collections-link {
            color: var(--color-accent-text)
        }
    }

    .widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81 .header__collections-item img {
        border-radius: var(--img-border-radius)
    }

</style>
<script>
    try {
        let widget = '.widget-type_system_widget_v4_alerts';
        let $widget = $('.widget-type_system_widget_v4_alerts');
        let alertsSettings = $widget.find('[data-micro-alerts-settings]').data('micro-alerts-settings');

        function replaceAlertCheckIcon(message) {
            let iconCheck = '<span class="icon-check" style="margin-right:5px;"></span>';
            if (message.indexOf('✓') != -1) {
                return message.replace(/✓/gi, iconCheck);
            } else {
                return `${iconCheck} ${message}`;
            }
        }

        function replaceAlertWarningIcon(message) {
            let iconWarning = '<span class="icon-exclamation-triangle" style="margin-right:5px;"></span>';
            if (message.indexOf('⚠') != -1) {
                return message.replace(/⚠/gi, iconWarning);
            } else {
                return `${iconWarning} ${message}`;
            }
        }

        EventBus.subscribe('error-feedback:insales:ui_feedback', function (data) {
            let iconWarning = '<span class="icon-exclamation-triangle" style="margin-right:5px;"></span>';
            $.each(data.errors, function (i, val) {
                let errorText = typeof val == 'string' ? val : val[0];

                microAlert(iconWarning + errorText, 5000, {
                    modificator: 'warning-notice'
                });
            });
        });

        EventBus.subscribe('send-feedback:insales:ui_feedback', function (data) {
            let success_feedback = alertsSettings['success_feedback'];
            let preorder = false;

            if ($(data.form[0]).find('[name="is-preorder-form"]').length) {
                success_feedback = alertsSettings['success_preorder'];
                preorder = true;
            }

            if ($(window).width() >= '767' && preorder) {
                microAlert(replaceAlertCheckIcon(success_feedback), 5000, {
                    modificator: 'success-notice'
                });
            } else if ($(window).width() <= '768' && !preorder) {
                microAlert(replaceAlertCheckIcon(success_feedback), 5000, {
                    modificator: 'success-notice'
                });
            }
        });

        EventBus.subscribe('overload:insales:compares', function () {
            let overload_compares = alertsSettings['overload_compares'];
            microAlert(replaceAlertWarningIcon(overload_compares), 5000, {
                modificator: 'warning-notice'
            });
        });

        EventBus.subscribe('add_item:insales:compares', () => {
            let add_item_compares = alertsSettings['add_item_compares'];

            microAlert(replaceAlertCheckIcon(add_item_compares), 5000, {
                modificator: 'success-notice'
            });
        });

        EventBus.subscribe('remove_item:insales:compares', () => {
            let remove_item_compares = alertsSettings['remove_item_compares'];
            microAlert(remove_item_compares, 5000, {
                modificator: 'success-notice'
            });
        });

        EventBus.subscribe('add_item:insales:favorites_products', () => {
            let add_item_favorites = alertsSettings['add_item_favorites'];
            microAlert(replaceAlertCheckIcon(add_item_favorites), 5000, {
                modificator: 'success-notice'
            });
        });

        EventBus.subscribe('remove_item:insales:favorites_products', () => {
            let remove_item_favorites = alertsSettings['remove_item_favorites'];
            microAlert(remove_item_favorites, 5000, {
                modificator: 'success-notice'
            });
        });

        EventBus.subscribe(['overload:quantity:insales:product', 'unchange_quantity:insales:ui_add-cart-counter'], () => {
            let overload_quantity = alertsSettings['overload_quantity'];
            microAlert(replaceAlertWarningIcon(overload_quantity), 5000, {
                modificator: 'warning-notice'
            });
        });

        EventBus.subscribe('add_items:insales:cart', function (data) {
            if (data.action.button) {
                let success_cart = alertsSettings['success_cart'];
                let btn_add_cart_counter_attr = $(data.action.button).is("[data-add-cart-counter-btn]") || $(data.action.button).is("[data-add-cart-counter]");
                let show_alert_always = $(data.action.button.prevObject).is("[data-show-alert-always]");

                if (btn_add_cart_counter_attr && data.action.currentItems && data.action.currentItems.length) {
                    let current_id = data.action.currentItems[0].variant_id;
                    let first_added = Cart.order.order_lines.filter(i => {
                        return i.variant_id == current_id && i.quantity == 1;
                    });

                    if (first_added.length || show_alert_always) {
                        microAlert(replaceAlertCheckIcon(success_cart), 3000, {
                            modificator: 'success-notice'
                        });
                    }
                }
            }
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_alerts" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_callback_modal_1';
        let $widget = $('.widget-type_system_widget_v4_callback_modal_1');
        $(document).ready(function () {
            $(widget).find(".js-hide-modal").on("click", function () {
                $(widget).removeClass("is-show-fullscreen");
            });

            $(widget).on("click", function (event) {
                if ($(event.target).closest(widget + ' .layout__content').length) {
                    return;
                }

                $(widget).removeClass("is-show-fullscreen");
            });
        });

        EventBus.subscribe('send-feedback:insales:ui_feedback', (data) => {
            data.form.addClass("is-sended");

            setTimeout(function () {
                data.form.removeClass("is-sended");
                $(widget).removeClass("is-show-fullscreen");
            }, 5000);
        });

        EventBus.subscribe('show-modal-feedback:insales:ui_feedback', (data) => {
            if (data.modal_id && data.modal_id == "default") {
                $(widget).addClass("is-show-fullscreen");
            }
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_callback_modal_1" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_footer_5';
        let $widget = $('.widget-type_system_widget_v4_footer_5');
        $(widget).find(".js-show-mobile-submenu").on("click", function () {
            $(this).parents(".menu-item:first").toggleClass("is-show-mobile");
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_footer_5" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_modal_cookie_1';
        let $widget = $('.widget-type_system_widget_v4_modal_cookie_1');
        $widget.ready(function () {
            if ($widget.find('.cookie-banner').length) {
                if (!Cookies.get('was')) {
                    $widget.addClass("is-show-fullscreen");
                }

                $('.js-cookies-button').on('click', function () {
                    $widget.removeClass("is-show-fullscreen");
                    Cookies.set('was', true, {
                        expires: 365,
                        path: '/'
                    });
                })
            }
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_modal_cookie_1" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_notification_add_to_cart_1';
        let $widget = $('.widget-type_system_widget_v4_notification_add_to_cart_1');
        EventBus.subscribe('add_items:insales:cart', function (data) {
            if (data.action.button) {
                var btn_add_cart_counter_attr = $(data.action.button[0]).attr("data-add-cart-counter");

                if (typeof btn_add_cart_counter_attr === typeof undefined && data.action.currentItems && data.action.currentItems.length) {

                    var photo_area = $(widget).find(".notification-product__photo");
                    var title_area = $(widget).find(".notification-product__title");
                    var price_area = $(widget).find(".notification-product__price");
                    var count_area = $(widget).find(".notification-product__count");

                    photo_area.find("img").remove();
                    title_area.text('');
                    price_area.text('');
                    count_area.text('');

                    var product_info = data.action.currentItems[0];
                    var variant_id = product_info.variant_id;
                    var count = data.action.items[variant_id] || 1;

                    $('<img src="' + product_info.first_image.medium_url + '"/>').appendTo($(widget).find(".notification-product__photo"));
                    $(widget).find(".notification-product__title").html(product_info.title);
                    $(widget).find(".notification-product__price").html(Shop.money.format(product_info.sale_price));
                    $(widget).find(".notification-product__count").text(count + ' ' + Shop.units.getName(product_info.product.unit) + '.');

                    $(widget).addClass("is-show-fullscreen");
                }
            }
        });

        $(document).ready(function () {
            $(widget).find(".js-hide-notification").on("click", function () {
                $(widget).removeClass("is-show-fullscreen");
            });

            $(widget).on("click", function (event) {
                if ($(event.target).closest(widget + ' .layout__content').length) {
                    return;
                }

                $(widget).removeClass("is-show-fullscreen");
            });
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_notification_add_to_cart_1" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_preorder_1';
        let $widget = $('.widget-type_system_widget_v4_preorder_1');
        EventBus.subscribe('show-preorder:insales:ui_product', (data) => {
            let content_field = $(widget).find('[name="content"]');
            let product_label = content_field.data("preorderProductLabel");
            let variant_label = content_field.data("preorderVariantLabel");

            let product_info = product_label + data.product;

            if (data.variant) {
                product_info += "<br/>" + variant_label + data.variant;
            }

            $(widget).find('[name="content"]').val(product_info);
            $(widget).addClass("is-show-fullscreen");
        });

        $(document).ready(function () {
            $(widget).find(".js-hide-preorder").on("click", function () {
                $(widget).removeClass("is-show-fullscreen");
            });

            $(widget).on("click", function (event) {
                if ($(event.target).closest(widget + ' .layout__content').length) {
                    return;
                }

                $(widget).removeClass("is-show-fullscreen");
            });
        });

        EventBus.subscribe('send-feedback:insales:ui_feedback', (data) => {
            data.form.addClass("is-sended");

            setTimeout(function () {
                data.form.removeClass("is-sended");
                $(widget).removeClass("is-show-fullscreen");
            }, 5000);
        });

    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_preorder_1" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_system_widget_v4_button_on_top_1';
        let $widget = $('.widget-type_system_widget_v4_button_on_top_1');
        let scroll_timeout;

        $widget.find(".js-go-top-page").on("click", function () {
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });

        $(window).on("scroll", function () {
            clearTimeout(scroll_timeout);
            scroll_timeout = setTimeout(function () {
                showButtonOnTop($widget.find(".js-go-top-page"));
            }, 50);
        });

        function showButtonOnTop(btn) {
            if ($(window).scrollTop() >= $(window).height()) {
                btn.addClass("is-show");
            } else {
                btn.removeClass("is-show");
            }
        }

        EventBus.subscribe(['widget:input-setting:insales:system:editor', 'widget:change-setting:insales:system:editor'], (data) => {
            if (data.setting_name == 'icon-view') {
                let btn = $('[data-widget-id="' + data.widget_id + '"] .js-go-top-page');
                btn.find("> span").removeClass().addClass(data.value);
            }
        });


    } catch (error) {
        console.error('Widget "widget-type_system_widget_v4_button_on_top_1" throwed an error: "' + error.stack + '"')
    }
    ;
    try {
        let widget = '.widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81';
        let $widget = $('.widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81');
        var isTouch = !!('ontouchstart' in window || navigator.msMaxTouchPoints);
        var mobilePoint = 768;

        $(document).ready(function () {
            if (isTouch) {
                $(widget).find(".header").addClass("is-touch");
            }

            $(widget).find("[data-catalog-current]").each(function (index, el) {
                let currrent_link = $(el).data('catalog-current')
                let currrent_selector = `[data-navigation-link="${currrent_link}"]`;
                $(currrent_selector).addClass('is-current')
            })

            $(widget).find(".js-show-header-collections").on("click", function () {
                $widget.each(function (index, el) {
                    let lazyLoadCollectionList = new LazyLoad({
                        container: $(el).get(0),
                        elements_selector: '.lazyload'
                    });

                    try {
                        lazyLoadCollectionList.loadAll()
                    } catch (e) {
                        console.log(e)
                    }
                });

                let collections_menu = $(widget).find(".header__collections");
                let collections_menu_content = collections_menu.find(".header__collections-content");

                if (collections_menu.is(".is-show")) {
                    collections_menu.removeClass("is-show");
                } else {
                    collections_menu.addClass("is-show");

                    let max_height = $(window).height() - collections_menu.offset().top - 20;
                    collections_menu_content.css("maxHeight", max_height);
                }

                $(this).toggleClass("is-active");
                $(widget).find(".header__collections-overlay").toggleClass("is-show");
            });

            $(document).on("click", function (event) {
                if ($(event.target).closest(".js-show-header-collections").length || $(event.target).closest(".header__collections-content").length) {
                    return;
                }

                $(widget).find(".header__collections.is-show").removeClass("is-show");
                $(widget).find(".header__collections-overlay.is-show").removeClass("is-show");
                $(widget).find(".js-show-header-collections").removeClass("is-active");
            });


            $(widget).find(".js-cut-list").cutList({
                moreBtnTitle: '<span class="icon icon-ellipsis-h"></span>',
                alwaysVisibleElem: '.is-current'
            });


            $(widget).find(".js-cut-list-menu").cutList({
                moreBtnTitle: '<span class="icon icon-ellipsis-h"></span>',
                showMoreOnHover: true
            });

            $(window).on('load', function () {
                $(widget).find(".js-cut-list").resize();
                $(widget).find(".js-cut-list-menu").resize();
            });

            if ($(widget).find(".header__collections .is-current").length) {
                if ($(window).width() < mobilePoint) {
                    $(widget).find(".header__collections .is-current").addClass("is-show");
                }
            }

            $(widget).find(".js-toggle-languages-list").on("click", function () {
                $(this).parents(".header__languages").toggleClass("is-show");
            });


            $(widget).find(".js-show-mobile-submenu").on("click", function () {
                $(this).parents(".header__collections-item:first").toggleClass("is-show-mobile");
            });


            $(".header__collections-item").hover(
                function () {
                    var submenu = $(this).find("> .header__collections-submenu");

                    if (submenu.length && submenu.offset().left + submenu.innerWidth() > $(window).width()) {
                        submenu.addClass("is-right");
                    }
                },
                function () {
                    $(this).find("> .header__collections-submenu").removeClass("is-right");
                }
            )

            $(widget).find(".js-show-touch-submenu").on("click", function () {
                var root_item = $(this).parents(".header__collections-item:last");
                var cur_item = $(this).parents(".header__collections-item:first");
                var submenu = cur_item.find("> .header__collections-submenu");

                if ($(window).width() >= mobilePoint) {
                    if ($(this).parents(".cut-list__more-content").length) {
                        $(this).parents(".cut-list__more-content").find("> .header__collections-item.is-show").each(function () {
                            if ($(this).is(root_item) == false) {
                                $(this).removeClass("is-show is-right").find(".header__collections-item.is-show").removeClass("is-show is-right");
                            }
                        });
                    } else {
                        $(widget).find(".header__collections > .header__collections-item.is-show").each(function () {
                            if ($(this).is(root_item) == false) {
                                $(this).removeClass("is-show is-right").find(".header__collections-item.is-show").removeClass("is-show is-right");
                            }
                        });
                    }
                }

                cur_item.toggleClass("is-show");

                if (submenu.length && submenu.offset().left + submenu.innerWidth() > $(window).width()) {
                    submenu.addClass("is-right");
                }
            });

            $(document).on("click", function (event) {
                if ($(event.target).closest(".header__collections").length) {
                    return;
                }

                if ($(window).width() >= mobilePoint) {
                    $(widget).find(".header__collections-item").removeClass("is-show is-right");
                }
            });

            $(widget).find(".cut-list__drop-toggle").on("click", function () {
                if ($(window).width() >= mobilePoint) {
                    $(widget).find(".header__collections-item").removeClass("is-show is-right");
                }
            });

            $(widget).find(".js-show-mobile-menu").on("click", function () {
                $(widget).find(".header").addClass("is-show-mobile");
                let targetElement = $(widget).find(".header").get(0);
                bodyScrollLock.disableBodyScroll(targetElement);

                $widget.each(function (index, el) {
                    let lazyLoadCollectionList = new LazyLoad({
                        container: $(el).get(0),
                        elements_selector: '.lazyload'
                    });

                    try {
                        lazyLoadCollectionList.loadAll()
                    } catch (e) {
                        console.log(e)
                    }
                });
            });

            let resizeTimer;
            let beforeStateMenu = 'setup';

            $(window).on('resize', function () {

                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function () {
                    if ($(window).width() > mobilePoint) {
                        if (beforeStateMenu != 'setup') {
                            $(widget).find(".js-cut-list-menu").cutList.setup()
                            beforeStateMenu = 'setup'
                        }
                    } else {
                        if (beforeStateMenu != 'destroy') {
                            $(widget).find(".js-cut-list-menu").cutList.destroy()
                            beforeStateMenu = 'destroy'
                        }
                    }
                }, 250);

            });

            $(widget).find(".js-hide-mobile-menu").on("click", function () {
                $(widget).find(".header").removeClass("is-show-mobile");
                let targetElement = $(widget).find(".header").get(0);
                bodyScrollLock.enableBodyScroll(targetElement);
            });

            $(widget).find(".js-show-mobile-search").on("click", function () {
                $(this).parents(".header__search").toggleClass("is-show-mobile").find(".header__search-field").focus();
            });

            $(widget).find(".js-show-more-subcollections").on("click", function () {
                let collections_menu = $(widget).find(".header__collections-menu");
                let limit = collections_menu.attr("data-subcollections-items-limit");
                let collection_elem = $(this).parents(".header__collections-item.is-level-1");

                if ($(this).is(".is-active")) {
                    $(this).removeClass("is-active");
                    collection_elem.find('.header__collections-submenu .header__collections-item:nth-child(n+' + (parseInt(limit) + 1) + ')').addClass("is-hide");
                } else {
                    $(this).addClass("is-active");
                    collection_elem.find(".header__collections-submenu .header__collections-item").removeClass("is-hide");
                }
            });
        });

        EventBus.subscribe(['widget:input-setting:insales:system:editor', 'widget:change-setting:insales:system:editor'], () => {
            $(widget).find(".js-cut-list").resize();
            $(widget).find(".js-cut-list-menu").resize();
        });


        EventBus.subscribe('widget:change-setting:insales:system:editor', (data) => {
            $(widget).find(".js-cut-list").resize();

            if (data.setting_name == 'subcollections-items-limit') {
                configureSubcollectionsItemsLimit(data.value);
            }
        });

        EventBus.subscribe('update_items:insales:favorites_products', (data) => {
            $(widget).find(".header__favorite").attr('data-badge-count', data.products.length);
        });

        EventBus.subscribe('update_items:insales:cart:light', (data) => {
            $(widget).find(".header__cart, .header__mobile-cart").attr('data-badge-count', data.order_lines.length);
        });


        function configureSubcollectionsItemsLimit(limit) {
            let collections_menu = $(widget).find(".header__collections-menu");
            collections_menu.attr("data-subcollections-items-limit", limit);

            $(widget).find(".header__collections-submenu").each(function () {
                let collection_elem = $(this).parents(".header__collections-item.is-level-1");
                let collection_elem_more_controls = collection_elem.find(".header__collections-show-more");

                $(this).find(".header__collections-item").removeClass("is-hide");
                $(this).find('.header__collections-item:nth-child(n+' + (parseInt(limit) + 1) + ')').addClass("is-hide");
                collection_elem_more_controls.find(".js-show-more-subcollections").removeClass("is-active");

                if ($(this).find(".header__collections-item").length > parseInt(limit)) {
                    collection_elem_more_controls.addClass("is-show");
                } else {
                    collection_elem_more_controls.removeClass("is-show");
                }
            });
        }

    } catch (error) {
        console.error('Widget "widget-type_widget_v4_header_5_0456c4ba1d9de0667e643ad5a3795f81" throwed an error: "' + error.stack + '"')
    }

</script>


<meta name="font-static-version" content="2.31">
<meta name="google-fonts-list"
      content="Open Sans,Comfortaa,Jura,Roboto,Montserrat,Oswald,Exo 2,Lobster,Neucha,El Messiri,PT Serif,Anonymous Pro,Istok Web,Fira Sans,Jost,Manrope,PT Sans Caption,">


<link rel="preload" class="font-main" as="style"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/fonts/PT+Root+UI/stylesheet.css">

<link rel="stylesheet" class="font-main"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/fonts/PT+Root+UI/stylesheet.css" media="all"
      onload="this.media='all'">


<link rel="preload" class="font-main" as="style"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/fonts/PT+Root+UI/stylesheet.css">

<link rel="stylesheet" class="font-main"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/fonts/PT+Root+UI/stylesheet.css" media="all"
      onload="this.media='all'">


<link rel="preload" as="style"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/icons/icons-insales-default/style.css">

<link rel="stylesheet"
      href="https://assets3.insales.ru/assets/static-versioned/2.31/static/icons/icons-insales-default/style.css"
      media="all" onload="this.media='all'">


<link href="https://assets3.insales.ru/assets/1/4672/1659456/1628672504/theme.css" rel="stylesheet" type="text/css"
      onload="document.body.classList.add('settings_loaded');">

<script src="https://assets3.insales.ru/assets/1/4672/1659456/1628672504/theme.js" charset="utf-8"></script>


</body>
</html>
