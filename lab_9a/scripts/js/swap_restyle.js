// JavaScript Document
var counter = 0;

$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#photogallery').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#photogallery').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#photogallery').hide();
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#photogallery').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#photogallery').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#photogallery').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide();  	  	  
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#photogallery').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	   
		});
	}

});


function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
            document.getElementById('headerColor').style.backgroundColor = '#FF0000';
            document.getElementById('footerColor').style.backgroundColor = '#FF9900';
            document.getElementById('main_3d_image').style.backgroundImage = 'url(./assets/images/site_images/main_3D2.jpg)';
            break;
        case 2:
            document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
            document.getElementById('headerColor').style.backgroundColor = '#FF9999';
            document.getElementById('footerColor').style.backgroundColor = '#996699';
            document.getElementById('main_3d_image').style.backgroundImage = 'url(./assets/images/site_images/main_3D3.jpg)';
            break;
        case 3:
            document.getElementById('bodyColor').style.backgroundColor = 'coral';
            document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
            document.getElementById('footerColor').style.backgroundColor = 'darksalmon';
            document.getElementById('main_3d_image').style.backgroundImage = 'url(./assets/images/site_images/main_3D4.jpg)';
            break;
        case 4:
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
            document.getElementById('headerColor').style.backgroundColor = 'chocolate';
            document.getElementById('footerColor').style.backgroundColor = 'dimgray';
            document.getElementById('main_3d_image').style.backgroundImage = 'url(./assets/images/site_images/main_3D1.jpg)';
            break;
    }
}


function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('main_3d_image').style.backgroundImage = 'url(./assets/images/site_images/main_3D.jpg)';
}