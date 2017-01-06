var text = null;
var animate;

function init(){
	text = document.getElementById('bannertext');

	text.style.position = 'relative';
	text.style.left = screen.width + 'px';
//	text.style.left = -text.getBoundingClientRect().width + 'px';

	console.log(text.getBoundingClientRect().width);
	move();
}

function move()
{
	text.style.left = parseInt(text.style.left) - 1 + 'px';



	if(parseInt(text.style.left) < 	-text.getBoundingClientRect().width)
	{
		text.style.left = screen.width + 'px';
	}

		animate = setTimeout(move, 20);
}

function stop()
{
	clearTimeout(animate);
	text.style.left = '0px';
}



window.onload = init;



