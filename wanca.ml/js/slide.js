
		var i = 0;
		var images = [];
		var time = 3000;

		images[0] = "http://www.mwlis.com/_/rsrc/1310379725780/photoshooting-with-damjana-by-tomaz-levstek/23.JPG?height=400&width=266";
		images[1] = "http://www.mwlis.com/_/rsrc/1310379888578/photoshooting-with-damjana-by-tomaz-levstek/34.JPG?height=400&width=266"	;
		images[2] = "http://www.mwlis.com/photoshooting-with-damjana-by-tomaz-levstek/12.JPG?attredirects=0";
		images[3] = "http://www.mwlis.com/_/rsrc/1310377840435/photoshooting-with-damjana-by-tomaz-levstek/1.JPG?height=400&width=266";
		images[4] = "http://www.mwlis.com/_/rsrc/1310377913306/photoshooting-with-damjana-by-tomaz-levstek/14.JPG?height=400&width=266";
		images[5] = "http://www.mwlis.com/_/rsrc/1310379232562/photoshooting-with-damjana-by-tomaz-levstek/_MG_2900.JPG?height=266&width=400";
		images[6] = "http://www.mwlis.com/_/rsrc/1310378887754/photoshooting-with-damjana-by-tomaz-levstek/_MG_2966.JPG?height=266&width=400";
		images[7] = "http://www.mwlis.com/_/rsrc/1310378230385/photoshooting-with-damjana-by-tomaz-levstek/Kopija%20od%20PRJP0FF094.jpg?height=282&width=400";

		function changeImg(){

			document.slide.src = images[i];
			if( i< images.length - 1){
				i++;

			}else {
				i = 0;
			}
			setTimeout("changeImg()", time);
		}

		window.onload = changeImg;
	