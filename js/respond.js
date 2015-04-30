/*
 HTML5 Shiv v3.6.2 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed
*/
(function(l, f) {
    function m() {
        var a = e.elements;
        return "string" == typeof a ? a.split(" ") : a
    }

    function i(a) {
        var b = n[a[o]];
        b || (b = {}, h++, a[o] = h, n[h] = b);
        return b
    }

    function p(a, b, c) {
        b || (b = f);
        if (g) return b.createElement(a);
        c || (c = i(b));
        b = c.cache[a] ? c.cache[a].cloneNode() : r.test(a) ? (c.cache[a] = c.createElem(a)).cloneNode() : c.createElem(a);
        return b.canHaveChildren && !s.test(a) ? c.frag.appendChild(b) : b
    }

    function t(a, b) {
        if (!b.cache) b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag();
        a.createElement = function(c) {
            return !e.shivMethods ? b.createElem(c) : p(c, a, b)
        };
        a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + m().join().replace(/[\w\-]+/g, function(a) {
            b.createElem(a);
            b.frag.createElement(a);
            return 'c("' + a + '")'
        }) + ");return n}")(e, b.frag)
    }

    function q(a) {
        a || (a = f);
        var b = i(a);
        if (e.shivCSS && !j && !b.hasCSS) {
            var c, d = a;
            c = d.createElement("p");
            d = d.getElementsByTagName("head")[0] || d.documentElement;
            c.innerHTML = "x<style>article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}</style>";
            c = d.insertBefore(c.lastChild, d.firstChild);
            b.hasCSS = !!c
        }
        g || t(a, b);
        return a
    }
    var k = l.html5 || {},
        s = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
        r = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
        j, o = "_html5shiv",
        h = 0,
        n = {},
        g;
    (function() {
        try {
            var a = f.createElement("a");
            a.innerHTML = "<xyz></xyz>";
            j = "hidden" in a;
            var b;
            if (!(b = 1 == a.childNodes.length)) {
                f.createElement("a");
                var c = f.createDocumentFragment();
                b = "undefined" == typeof c.cloneNode ||
                    "undefined" == typeof c.createDocumentFragment || "undefined" == typeof c.createElement
            }
            g = b
        } catch (d) {
            g = j = !0
        }
    })();
    var e = {
        elements: k.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
        version: "3.7.0",
        shivCSS: !1 !== k.shivCSS,
        supportsUnknownElements: g,
        shivMethods: !1 !== k.shivMethods,
        type: "default",
        shivDocument: q,
        createElement: p,
        createDocumentFragment: function(a, b) {
            a || (a = f);
            if (g) return a.createDocumentFragment();
            for (var b = b || i(a), c = b.frag.cloneNode(), d = 0, e = m(), h = e.length; d < h; d++) c.createElement(e[d]);
            return c
        }
    };
    l.html5 = e;
    q(f)
})(this, document);
/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
/*! NOTE: If you're already including a window.matchMedia polyfill via Modernizr or otherwise, you don't need this part */
window.matchMedia = window.matchMedia || function(a) {
    "use strict";
    var c, d = a.documentElement,
        e = d.firstElementChild || d.firstChild,
        f = a.createElement("body"),
        g = a.createElement("div");
    return g.id = "mq-test-1", g.style.cssText = "position:absolute;top:-100em", f.style.background = "none", f.appendChild(g),
        function(a) {
            return g.innerHTML = '&shy;<style media="' + a + '"> #mq-test-1 { width: 42px; }</style>', d.insertBefore(f, e), c = 42 === g.offsetWidth, d.removeChild(f), {
                matches: c,
                media: a
            }
        }
}(document);
/*! Respond.js v1.3.0: min/max-width media query polyfill. (c) Scott Jehl. MIT/GPLv2 Lic. j.mp/respondjs  */
(function(a) {
    "use strict";

    function x() {
        u(!0)
    }
    var b = {};
    if (a.respond = b, b.update = function() {}, b.mediaQueriesSupported = a.matchMedia && a.matchMedia("only all").matches, !b.mediaQueriesSupported) {
        var q, r, t, c = a.document,
            d = c.documentElement,
            e = [],
            f = [],
            g = [],
            h = {},
            i = 30,
            j = c.getElementsByTagName("head")[0] || d,
            k = c.getElementsByTagName("base")[0],
            l = j.getElementsByTagName("link"),
            m = [],
            n = function() {
                for (var b = 0; l.length > b; b++) {
                    var c = l[b],
                        d = c.href,
                        e = c.media,
                        f = c.rel && "stylesheet" === c.rel.toLowerCase();
                    d && f && !h[d] && (c.styleSheet && c.styleSheet.rawCssText ? (p(c.styleSheet.rawCssText, d, e), h[d] = !0) : (!/^([a-zA-Z:]*\/\/)/.test(d) && !k || d.replace(RegExp.$1, "").split("/")[0] === a.location.host) && m.push({
                        href: d,
                        media: e
                    }))
                }
                o()
            },
            o = function() {
                if (m.length) {
                    var b = m.shift();
                    v(b.href, function(c) {
                        p(c, b.href, b.media), h[b.href] = !0, a.setTimeout(function() {
                            o()
                        }, 0)
                    })
                }
            },
            p = function(a, b, c) {
                var d = a.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),
                    g = d && d.length || 0;
                b = b.substring(0, b.lastIndexOf("/"));
                var h = function(a) {
                        return a.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g, "$1" + b + "$2$3")
                    },
                    i = !g && c;
                b.length && (b += "/"), i && (g = 1);
                for (var j = 0; g > j; j++) {
                    var k, l, m, n;
                    i ? (k = c, f.push(h(a))) : (k = d[j].match(/@media *([^\{]+)\{([\S\s]+?)$/) && RegExp.$1, f.push(RegExp.$2 && h(RegExp.$2))), m = k.split(","), n = m.length;
                    for (var o = 0; n > o; o++) l = m[o], e.push({
                        media: l.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/) && RegExp.$2 || "all",
                        rules: f.length - 1,
                        hasquery: l.indexOf("(") > -1,
                        minw: l.match(/\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || ""),
                        maxw: l.match(/\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || "")
                    })
                }
                u()
            },
            s = function() {
                var a, b = c.createElement("div"),
                    e = c.body,
                    f = !1;
                return b.style.cssText = "position:absolute;font-size:1em;width:1em", e || (e = f = c.createElement("body"), e.style.background = "none"), e.appendChild(b), d.insertBefore(e, d.firstChild), a = b.offsetWidth, f ? d.removeChild(e) : e.removeChild(b), a = t = parseFloat(a)
            },
            u = function(b) {
                var h = "clientWidth",
                    k = d[h],
                    m = "CSS1Compat" === c.compatMode && k || c.body[h] || k,
                    n = {},
                    o = l[l.length - 1],
                    p = (new Date).getTime();
                if (b && q && i > p - q) return a.clearTimeout(r), r = a.setTimeout(u, i), void 0;
                q = p;
                for (var v in e)
                    if (e.hasOwnProperty(v)) {
                        var w = e[v],
                            x = w.minw,
                            y = w.maxw,
                            z = null === x,
                            A = null === y,
                            B = "em";
                        x && (x = parseFloat(x) * (x.indexOf(B) > -1 ? t || s() : 1)), y && (y = parseFloat(y) * (y.indexOf(B) > -1 ? t || s() : 1)), w.hasquery && (z && A || !(z || m >= x) || !(A || y >= m)) || (n[w.media] || (n[w.media] = []), n[w.media].push(f[w.rules]))
                    }
                for (var C in g) g.hasOwnProperty(C) && g[C] && g[C].parentNode === j && j.removeChild(g[C]);
                for (var D in n)
                    if (n.hasOwnProperty(D)) {
                        var E = c.createElement("style"),
                            F = n[D].join("\n");
                        E.type = "text/css", E.media = D, j.insertBefore(E, o.nextSibling), E.styleSheet ? E.styleSheet.cssText = F : E.appendChild(c.createTextNode(F)), g.push(E)
                    }
            },
            v = function(a, b) {
                var c = w();
                c && (c.open("GET", a, !0), c.onreadystatechange = function() {
                    4 !== c.readyState || 200 !== c.status && 304 !== c.status || b(c.responseText)
                }, 4 !== c.readyState && c.send(null))
            },
            w = function() {
                var b = !1;
                try {
                    b = new a.XMLHttpRequest
                } catch (c) {
                    b = new a.ActiveXObject("Microsoft.XMLHTTP")
                }
                return function() {
                    return b
                }
            }();
        n(), b.update = n, a.addEventListener ? a.addEventListener("resize", x, !1) : a.attachEvent && a.attachEvent("onresize", x)
    }
})(this);