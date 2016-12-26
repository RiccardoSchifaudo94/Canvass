<footer class="canvass-clear">
	<div class="row">
		<div class="container">
			 <div class="col-md-3 col-sm-3">
			 	<div class="canvass-brand">
				     <h1><a href="index.php">Canvass</a></h1>
				     <span>Your idea,a smart project</span>
				      <p>
				     	Canvass è un aggreggatore di idee, progetti e delibere realizzate con la collaborazione tra cittadini, associazioni e membri delle istituzioni o aziende per promuovere politiche virtuose e migliorare la qualità del benessere del territorio in cui vivi.
				     </p>
			   	</div>
			 </div>
			 <div class="col-md-3 col-sm-3">
			 	<h4 style="margin-top:15px;">Mappa di navigazione</h4>
			 	<ul>
			 		<li><a href="">Bacheca Idee</a></li>
			 		<li><a href="">Bacheca Progetti</a></li>
			 		<li><a href="">Messaggistica</a></li>
			 		<li><a href="">Profilo</a></li>
			 		<li><a href="">Impostazioni</a></li>
			 		<li><a href="">Log out</a></li>
			 	</ul>
			 </div>	
			 <div class="col-md-3 col-sm-3">
			 	<h4 style="margin-top:15px;">Assistenza</h4>
			 	<ul><li><a href="">Invia una segnalazione</a></ul>
			 </div>	
			 <div class="col-md-3 col-sm-3">
			 	<h4>Contatti</h4>
			 	<ul>
			 		  <li><a href=""><i class="fa fa-envelope-o"></i>  info@canvass.it</a></li>
			 	    <li><a href=""><i class="fa fa-facebook-square"></i>  Canvass on Facebook</a></li>
			 	    <li><a href=""><i class="fa fa-linkedin-square"></i>  Canvass on Linkedin</a></li>
			    </ul>
			 </div>		
		</div>	
	</div>	
</footer>

<!-- AdminLTE App -->
<script src="../../js/adminLTE/app.min.js"></script>
<script src="../../js/adminLTE/demo.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../js/bootstrap/bootstrap3-wysihtml5.all.min.js"></script>  
<script type="text/javascript">
/*$(document).ready(function(){

	$(document).bind("contextmenu copy cut drag drop",function(e){
		return false;
	});

});

shortcut = {
    all_shortcuts: {},
      add: function (e, t, n) {
        var r = {
          type: "keydown",
          propagate: !1,
          disable_in_input: !1,
          target: document,
          keycode: !1
        };
        if (n) for (var i in r) "undefined" == typeof n[i] && (n[i] = r[i]);
        else n = r;
        r = n.target, "string" == typeof n.target && (r = document.getElementById(n.target)), e = e.toLowerCase(), i = function (r) {
          r = r || window.event;
          if (n.disable_in_input) {
            var i;
            r.target ? i = r.target : r.srcElement && (i = r.srcElement), 3 == i.nodeType && (i = i.parentNode);
            if ("INPUT" == i.tagName || "TEXTAREA" == i.tagName) return
          }
          r.keyCode ? code = r.keyCode : r.which && (code = r.which), i = String.fromCharCode(code).toLowerCase(), 188 == code && (i = ","), 190 == code && (i = ".");
          var s = e.split("+"),
            o = 0,
            u = {
              "`": "~",
              1: "!",
              2: "@",
              3: "#",
              4: "$",
              5: "%",
              6: "^",
              7: "&",
              8: "*",
              9: "(",
              0: ")",
              "-": "_",
              "=": "+",
              ";": ":",
              "'": '"',
              ",": "<",
              ".": ">",
              "/": "?",
              "\\": "|"
            }, f = {
              esc: 27,
              escape: 27,
              tab: 9,
              space: 32,
              "return": 13,
              enter: 13,
              backspace: 8,
              scrolllock: 145,
              scroll_lock: 145,
              scroll: 145,
              capslock: 20,
              caps_lock: 20,
              caps: 20,
              numlock: 144,
              num_lock: 144,
              num: 144,
              pause: 19,
              "break": 19,
              insert: 45,
              home: 36,
              "delete": 46,
              end: 35,
              pageup: 33,
              page_up: 33,
              pu: 33,
              pagedown: 34,
              page_down: 34,
              pd: 34,
              left: 37,
              up: 38,
              right: 39,
              down: 40,
              f1: 112,
              f2: 113,
              f3: 114,
              f4: 115,
              f5: 116,
              f6: 117,
              f7: 118,
              f8: 119,
              f9: 120,
              f10: 121,
              f11: 122,
              f12: 123
            }, l = !1,
            c = !1,
            h = !1,
            p = !1,
            d = !1,
            v = !1,
            m = !1,
            y = !1;
          r.ctrlKey && (p = !0), r.shiftKey && (c = !0), r.altKey && (v = !0), r.metaKey && (y = !0);
          for (var b = 0; k = s[b], b < s.length; b++) "ctrl" == k || "control" == k ? (o++, h = !0) : "shift" == k ? (o++, l = !0) : "alt" == k ? (o++, d = !0) : "meta" == k ? (o++, m = !0) : 1 < k.length ? f[k] == code && o++ : n.keycode ? n.keycode == code && o++ : i == k ? o++ : u[i] && r.shiftKey && (i = u[i], i == k && o++);
          if (o == s.length && p == h && c == l && v == d && y == m && (t(r), !n.propagate)) return r.cancelBubble = !0, r.returnValue = !1, r.stopPropagation && (r.stopPropagation(), r.preventDefault()), !1
        }, this.all_shortcuts[e] = {
          callback: i,
          target: r,
          event: n.type
        }, r.addEventListener ? r.addEventListener(n.type, i, !1) : r.attachEvent ? r.attachEvent("on" + n.type, i) : r["on" + n.type] = i
      },
      remove: function (e) {
        var e = e.toLowerCase(),
          t = this.all_shortcuts[e];
        delete this.all_shortcuts[e];
        if (t) {
          var e = t.event,
            n = t.target,
            t = t.callback;
          n.detachEvent ? n.detachEvent("on" + e, t) : n.removeEventListener ? n.removeEventListener(e, t, !1) : n["on" + e] = !1
        }
      }
    },
     shortcut.add("Ctrl+U",function(){
     //alert('Sorry\nNo CTRL+U is allowed. Be creative!')
    }),
     shortcut.add("Meta+Alt+U",function(){
     //alert('Sorry\nNo Command+Option+U is allowed. Be creative!')
    }),
    shortcut.add("Ctrl+C",function(){
     //alert('Sorry\nNever duplicate this article...')
    }),
    shortcut.add("Meta+C",function(){
     //alert('Sorry\nNever duplicate this article...')
    });*/
</script>
</body>
</html>