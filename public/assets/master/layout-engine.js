var LayoutEngine={
	sections:{},
	sectionsArray:[],
	viewport:{
		width:null,
		height:null
	},
	init:function(options) {
		if(typeof options==='object') {
			//Set sections
			if('sections' in options && typeof options.sections==='object') {
				for(var sectionName in options.sections) {
					var newSection=new sectionConstructor(options.sections[sectionName].jqo, options.sections[sectionName].init, options.sections[sectionName].render);
					this.sections[sectionName]=newSection;
					this.sectionsArray.push(newSection);
				}
				console.log(this.sectionsArray);
			}

		}//if(typeof options==='object')

		//Run section init methods
		this.sections.intro.init();

		//Render sections
		this.render();
	},
	render:function() {
		this.viewport.width=$.viewportW();
		this.viewport.height=$.viewportH();

		var slen=this.sectionsArray.length;
		for(var i=0;i<slen;i++) {
			this.sectionsArray[i].render(this.viewport);
		}
	}
};//LayoutEngine{}

function sectionConstructor(jqo,init,render) {
	this.jqo=jqo;
	this.init=init;
	this.render=render;
};//sectionConstructor()

$(document).ready(function() {
	LayoutEngine.init({
		sections:{
			intro:{
				jqo:$('#introSection'),
				init:function() {
					console.log('intro init');
				},
				render:function(viewport) {
					if(viewport.width<768) {//mobile
						var minH=477;
						if(viewport.height>minH) {//respect min height
							//Set section height
							sectionH=0;
							if(viewport.height>1095) {
								sectionH=1095;
							} else {
								sectionH=viewport.height;
							}
							this.jqo.css({height:sectionH});

							//Add margin to section title
							var titleMargin=(sectionH-minH)/2+30;
							this.jqo.find('.title').css({
								marginTop:titleMargin,
								marginBottom:titleMargin
							});
						}
					} else if(viewport.width<992) {//tablet
						var minH=589;
						if(viewport.height>minH) {//respect min height
							//Set section height
							sectionH=0;
							if(viewport.height>1095) {
								sectionH=1095;
							} else {
								sectionH=viewport.height;
							}
							this.jqo.css({height:sectionH});

							//Add margin to section title
							var titleMargin=(sectionH-minH)/2+30;
							this.jqo.find('.title').css({
								marginTop:titleMargin,
								marginBottom:titleMargin
							});
						}
					} else if(viewport.width<1170) {//laptop
						var minH=413;
						if(viewport.height>minH) {//respect min height
							//Set section height
							sectionH=0;
							if(viewport.height>1095) {
								sectionH=1095;
							} else {
								sectionH=viewport.height;
							}
							this.jqo.css({height:sectionH});

							//Add margin to section title
							var centerMargin=(sectionH-minH)/2+30;
							this.jqo.find('.center-wrap').css({
								marginTop:centerMargin
							});
						}
					} else {//desktop
						var minH=424;
						if(viewport.height>minH) {//respect min height
							//Set section height
							sectionH=0;
							if(viewport.height>1095) {
								sectionH=1095;
							} else {
								sectionH=viewport.height;
							}
							this.jqo.css({height:sectionH});

							//Add margin to section title
							var centerMargin=(sectionH-minH)/2+30;
							this.jqo.find('.center-wrap').css({
								marginTop:centerMargin
							});
						}
					}
				}/*render()*/
			}
			/*
			clients:$('#clientsSection'),
			services:$('#servicesSection'),
			portfolio:$('#portfolioSection'),
			contact:$('#contactSection')
			*/
		}
	});


	//Set intro section size
	//BG img size is 1920x1095px
	//var introSection=$('.intro-section');
	//introSection.css('height', introSection.outerWidth()/1920*1095).find('.intro-bg').css('height', introSection.outerWidth()/1920*1095);

	//Remove text from logo
	//introSection.find('.logo').text('');
});