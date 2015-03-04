var stage = new Kinetic.Stage({
        container: 'flower365-canvas',
        width: 578,
        height: 800
      });
      
      var layer = new Kinetic.Layer();

	//start from the blue
	 var curve_1 = new Kinetic.Shape({
        drawFunc: function(context) {




			context.beginPath();
context.moveTo(305,450);
context.lineTo(305,362);
context.bezierCurveTo(231,362,167,402,132,461);
context.lineTo(209,505);
context.bezierCurveTo(228,472,264,450,305,450);


			context.closePath();
            context.fillStrokeShape(this);
        },
        fill: '#2b7294',
		strokeWidth: '2'
      });
	  
	  var curve_2 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
 context.moveTo(194,561);
context.bezierCurveTo(194,541,199,522,209,505);
context.lineTo(132,461);
context.bezierCurveTo(115,491,106,525,106,561);
context.bezierCurveTo(106,598,115,632,132,661);
context.lineTo(209,617);
context.bezierCurveTo(199,601,194,582,194,561);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#fab981',
		strokeWidth: '2'
      });
	  
	   var curve_3 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
context.moveTo(209,617);
context.lineTo(132,661);
context.bezierCurveTo(167,721,231,761,305,761);
context.lineTo(305,673);
context.bezierCurveTo(264,673,228,650,209,617);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#f9ae6f',
		strokeWidth: '2'
      });
	  
	  var curve_4 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
context.moveTo(305,673);
context.lineTo(305,761);
context.bezierCurveTo(379,761,444,721,478,661);
context.lineTo(402,617);
context.bezierCurveTo(383,650,347,673,305,673);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#f8a45d',
		strokeWidth: '2'
      });
	  
	  var curve_5 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
context.moveTo(478,461);
context.lineTo(402,505);
context.bezierCurveTo(411,522,417,541,417,561);
context.bezierCurveTo(417,582,411,601,402,617);
context.lineTo(478,661);
context.bezierCurveTo(495,632,505,598,505,561);
context.bezierCurveTo(505,525,495,491,478,461);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#f69a4b',
		strokeWidth: '2'
      });
	  
	  var curve_6 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
context.moveTo(402,505);
context.lineTo(478,461);
context.bezierCurveTo(444,402,379,362,305,362);
context.lineTo(305,450);
context.bezierCurveTo(347,450,383,472,402,505);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#f5903a',
		strokeWidth: '2'
      });
	  
	  //this is the red circle in the center
	   var curve_7 = new Kinetic.Shape({
        drawFunc: function(context) {
          	context.beginPath();
          	context.moveTo(417,561);
			context.bezierCurveTo(417,623,367,673,305,673);
			context.bezierCurveTo(244,673,194,623,194,561);
			context.bezierCurveTo(194,500,244,450,305,450);
			context.bezierCurveTo(367,450,417,500,417,561);
			context.closePath();
          	context.fillStrokeShape(this);
        },
        fill: '#d94b17',
		strokeWidth: '2'
      });
	

      
      layer.add(curve_1);	  
	  layer.add(curve_2);
	  layer.add(curve_3);
	  layer.add(curve_4);
	  layer.add(curve_5);
	  layer.add(curve_6);
	  layer.add(curve_7);
      stage.add(layer);

		for(var i=1; i<8; i++) {
		 this["curve_"+i].on('mouseover', function() {
			var fill = this.getStroke();
			this.setStroke(fill = '#ad3b12');
			document.body.style.cursor = 'pointer';
			layer.draw();
			layer.add(this);
			stage.add(layer);
		  });
		  this["curve_"+i].on('mouseout', function() {
			var fill = this.getStroke();
			document.body.style.cursor = 'default';
			this.setStroke(fill = '');
			layer.draw();
		  });
		}
	var jq = jQuery.noConflict();	
		for(var i=1; i<7; i++) {
		  jq("#shape_"+i).on('click', function() {
			jq(this).toggle();
			jq(this).toggleClass("floweropen");
		  });
		}




	  curve_1.on('click', function() {
		jq('#shape_1').toggle();
		jq('#shape_1').toggleClass("floweropen");
      });
	  curve_2.on('click', function() {
		jq('#shape_2').toggle();
		jq('#shape_2').toggleClass("floweropen");
      });
	  curve_3.on('click', function() {
		jq('#shape_3').toggle();
		jq('#shape_3').toggleClass("floweropen");
      });
	  curve_4.on('click', function() {
		jq('#shape_4').toggle();
		jq('#shape_4').toggleClass("floweropen");
      });
	  curve_5.on('click', function() {
		jq('#shape_5').toggle();
		jq('#shape_5').toggleClass("floweropen");
      });
	  curve_6.on('click', function() {
		jq('#shape_6').toggle();
		jq('#shape_6').toggleClass("floweropen");
      });
	  curve_7.on('click', function() {
		if(jq(".floweropen").length>0){
			jq('.shape').hide();	
			jq(".floweropen").toggleClass("floweropen");
		}else{
			jq('.shape').show();		
			jq(".shape").addClass("floweropen");
		}
      });
	  
	  jq('#flower-id').on('click', function() {
		jq('#shape_1').toggle();
      });
	  jq('#flower-sharepoint').on('click', function() {
		jq('#shape_2').toggle();
      });
	  jq('#flower-lync').on('click', function() {
		jq('#shape_3').toggle();
      });
	  jq('#flower-onedrive').on('click', function() {
		jq('#shape_4').toggle();
      });
	  jq('#flower-excel').on('click', function() {
		jq('#shape_5').toggle();
      });
	  jq('#flower-office').on('click', function() {
		jq('#shape_6').toggle();
      });
	   jq('#what-is-365').on('click', function() {
		if(jq(".floweropen").length>0){
			jq('.shape').hide();	
			jq(".floweropen").toggleClass("floweropen");
		}else{
			jq('.shape').show();		
			jq(".shape").addClass("floweropen");
		}
      });
	   jq('#what-is-365').on('mouseover', function() {
		document.body.style.cursor = 'pointer';
      });
	  jq('#what-is-365').on('mouseout', function() {
		document.body.style.cursor = 'default';
      });
	  
	  
	  

	  

