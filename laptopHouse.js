let i = 0;
setInterval(slidesChangeForMobile,3000);
function slidesChangeForMobile(){
	const arr = ['slide2.2.png','slide3.png', 'slide1.1.png']
	document.getElementById('slide').src = arr[i];
	i = i + 1;
	if (i>2){
		i=0;
	}
}

function slidesChangeForMonitor(){
	const arr = ['slide2.png','slide3.png', 'slide1.png']
	document.getElementById('slide').src = arr[i];
	i = i + 1;
	if (i>2){
		i=0;
	}
}
function productBoxDisplay(x){
	if (x.matches){
		$('.laptops').slick({
			slidesToShow : 3,
			slidesToScroll : 2,
			arrows : true,
			infinite : true
		});
	}
	else{
		$('.laptops').slick({
			slidesToShow : 6,
			slidesToScroll : 4,
			arrows : true,
			infinite : true
		});
	}
}

let x = window.matchMedia("(max-width: 430px)");
productBoxDisplay(x);
slideImg(x)
slidesChange(x);

// function slideImg(x){
// 	if (x.matches){
		// setInterval(slidesChangeForMobile,3000);
	// }
	// else {
		// setInterval(slidesChangeForMonitor,3000);
	// }
// }
// x.addlistener(mobileScreen);

function viewAll(){
	location.href="view_all.html";
}

// search bar menu
function search_laptop(){
	let input1 = document.getElementById('search_bar').value;
	input1 = input1.tolowerCase();
	let input2 = document.getelementbyClassName('box');

	for(let i=0; i<input2.length; i++){
		if(!input2[i].innerHTML.tolowerCase.includes(input1)){
			input2[i].style.display="none";
		}
		else{
			x[i].style.display="list-item";
		}
	}
}