/**
 * product image zoom-in
 */
window.onload = function() {
	const feature_img = document.getElementsByClassName('feature-img');
	//convert node list to array
	const imgArr = Array.from(feature_img);
	imgArr.forEach(cur => cur.onclick = function(){
		cur.classList.toggle('feature-img-zoom-in');
	});
}

