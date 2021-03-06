/*! koma-eu-cookies v0.1.5 2015-09-23 18:00:12
 *  Copyright (c) 2015 Jakub Bouček (https://jakub-boucek.cz/)
 *  Nahrazeni nevhodneho slova slovem Koma*/

!function (a, b) {
    function c() {
        return a[k] = a[k] || {}, q = f(p, a[k]), g("init"), -1 !== b.cookie.indexOf(j) ? void g(l, o) : navigator.CookiesOK ? (i("auto-CookiesOK"), void g(l, "plugin CookieOK")) : a.addEventListener ? void("complete" === b.readyState ? setTimeout(e) : (b.addEventListener("DOMContentLoaded", d, !1), a.addEventListener("load", d, !1))) : void g(l, "unsupported browser")
    }

    function d() {
        b.removeEventListener("DOMContentLoaded", d, !1), a.removeEventListener("load", d, !1), e()
    }

    function e() {
        g(m);
        var a = '<span>%t <a href="%l">%m</a></span> <button>%a</button>';
        a = a.replace("%t", q.l18n.text).replace("%l", q.l18n.link).replace("%m", q.l18n.more).replace("%a", q.l18n.accept);
        var c = b.body, d = b.head, e = document.createElement("style");
        e.type = "text/css", e.appendChild(b.createTextNode(p.css));
        var f = b.createElement("div");
        f.className = j + " koma-priority", f.innerHTML = a, d.appendChild(e), c.insertBefore(f, c.firstChild), f.getElementsByTagName("button")[0].addEventListener("click", function () {
            h(f)
        });
        var i = f.getElementsByTagName("a")[0];
        i.addEventListener("click", function () {
            g("open-more")
        }), q.options.popupMore && i.setAttribute("target", "_blank")
    }

    function f(a, b) {
        var c = {};
        for (key in a)"undefined" == typeof b[key] ? c[key] = a[key] : "object" == typeof b[key] ? c[key] = f(a[key], b[key]) : c[key] = b[key];
        return c
    }

    function g(b, c) {
        "function" == typeof q.options.callback && q.options.callback(b, c);
        var d = q.options.dataLayerName;
        d && a[d] && "function" == typeof a[d].push && a[d].push({event: j, action: b, label: c})
    }

    function h(a) {
        b.body.removeChild(a), g(n, o), i()
    }

    function i(a) {
        "undefined" == typeof a && (a = "1");
        var c = new Date;
        c.setFullYear(c.getFullYear() + 1);
        var d = "; expires=" + c.toGMTString();
        b.cookie = j + "=" + encodeURIComponent(a) + d + "; path=/"
    }

    var j = "koma-eu-cookies", k = "koma_eu_config", l = "no-show", m = "show", n = "hide", o = "consent", p = {
        css: ".koma-eu-cookies{display:flex;flex-wrap:nowrap;justify-content:center;background:#4A4A4A;align-items:center;color:white;padding:5px;z-index:1000;position:fixed; bottom:0; width:100%}.koma-eu-cookies,.koma-eu-cookies span,.koma-eu-cookies a{font-size:14px;font-family:'Arial','Helvetica',sans-serif; color:white}.koma-eu-cookies span{padding-right:5px}.koma-eu-cookies a,.koma-eu-cookies a:hover,.koma-eu-cookies a:visited,.koma-eu-cookies a:active,.koma-eu-cookies a:focus{color:white;text-decoration:underline}.koma-eu-cookies button{flex-shrink:0;cursor:pointer;font-weight:.9em;margin: 0;padding: 3px 7px;}",
        l18n: {
            text: "Tento web používá k poskytování služeb, personalizaci reklam a analýze návštěvnosti soubory cookie. Používáním tohoto webu s tím souhlasíte. &nbsp;&nbsp;",
            accept: "Souhlasím",
            more: "Více informací",
            link: "https://www.koma-group.cz/informace-o-cookies"
        },
        options: {popupMore: !1, callback: null, dataLayerName: null}
    }, q = {};
    c()
}(window, window.document);