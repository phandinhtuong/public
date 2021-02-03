<!DOCTYPE html>
<html>
<body>



<?php
echo "Hello World!";
?>
<div id="main">
    <p align="center" style="font-size:20px" class="rainbowText">
	Ôi, đúng là quái vật Rap việt, kẻ hủy diệt punchline, tổng tư lệnh gun bả, chiến thần chơi chữ, Lỷical god, chúa tể gieo vần, tù trưởng fastflow, đại đội trưởng trung đoàn battle, no1 vipro thí sinh top1 king of rap, thần thoại concept, huyền thoại freestyle, đức chúa rapper, King rap lỏd, lãnh chúa của các thế hệ F1,2,3, người viết lên bí quyết các trận beef, trùm đảo chữ, cụ tổ lái từ , thủy tổ delivery, tướng quân chơi Trap, thầy dạy oldschool, ông tổ autotune, Trùm vocal,thiên tài no beat, Vị thần content, người đột biến Hệ rap, quái thú đồng âm, chiến thần đa nghĩa, dị nhân hán việt, Thần đồng ngôn ngữ, kẻ nắm giữ fact rap việt. Tune thủ quốc gia 
	</p>
    <script type="text/javascript">
        //num = 0;
		//document.getElementById("main").style.color = "red";
		num = 0;
        function colorfulWelcome() { //change welcome text color continuously
		
		/*var css = 
		'body {animation-name:test; animation-duration:4s; animation-iteration-count:infinite; } @keyframes test{ 0%{color:#ff0000} 20%{color:#00ff00} 40%{color:#ffff00} 60%{color:#0000ff} 80%{color:#00ffff} 100%{color:#ff0000}',
		head = document.head || document.getElementsByTagName('head')[0], style = document.createElement('style'); 
		style.type = 'text/css'; 
		if (style.styleSheet){ style.styleSheet.cssText = css; } 
		else { style.appendChild(document.createTextNode(css)); } head.appendChild(style);*/
			//document.getElementById("main").style.color = "hsl(" + (360 * i / text.length) + ",80%,50%)";
            num++;
			var elements = document.getElementsByClassName("rainbowText");
			for (let i = 0; i < elements.length; i++) {
				generateRainbowText(elements[i],num);
			}
            /*switch (num % 10) { //10 colors
                case 1 :
                    //document.getElementById("main").style.color = "red";
					document.getElementById("main").style.color = "#ff0000";
                    break;
                case 2 :
                    //document.getElementById("main").style.color = "green";
                    break;
                case 3 :
                    //document.getElementById("main").style.color = "blue";
                    break;
                case 4 :
                    //document.getElementById("main").style.color = "orange";
                    break;
                case 5 :
                    //document.getElementById("main").style.color = "gray";
					document.getElementById("main").style.color = "#000000";
                    break;
                case 6 :
                    //document.getElementById("main").style.color = "violet";
                    break;
                case 7 :
                    //document.getElementById("main").style.color = "black";
                    break;
                case 8 :
                    //document.getElementById("main").style.color = "yellow";
                    break;
                case 9 :
                    //document.getElementById("main").style.color = "lime";
                    break;
                case 0 :
                    //document.getElementById("main").style.color = "purple";
					document.getElementById("main").style.color = "#ffffff";
                    break;

            }*/
        }
		//colorfulWelcome();
		/*window.addEventListener("load", function() {
			var elements = document.getElementsByClassName("rainbowText");
			for (let i = 0; i < elements.length; i++) {
				generateRainbowText(elements[i]);
			}
		});*/

		function generateRainbowText(element,num) {
			var text = element.innerText;
			element.innerHTML = "";
			/*for (let i = 0; i < text.length; i++) {
				let charElem = document.createElement("span");
				charElem.style.color = "hsl(" + (360 * (i+num) / text.length) + ",100%,50%)";
				charElem.innerHTML = text[i];
				element.appendChild(charElem);
			}*/
			for (let i = 0; i < text.length; i++) {
				let charElem = document.createElement("span");
				charElem.style.color = "hsl(" + (360 * (i-2*num) / text.length) + ",100%,50%)";
				charElem.innerHTML = text[i];
				element.appendChild(charElem);
			}
			
		}
        window.setInterval("colorfulWelcome()", 1000); // set interval in milliseconds, 100 = 100 milliseconds for 1 color of welcome text
    </script>
</div>
</body>
</html>