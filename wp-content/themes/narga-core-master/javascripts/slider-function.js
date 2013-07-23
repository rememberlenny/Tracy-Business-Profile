
  // Save variables to modify
  var SliderVar = {
      sliderHead: jQuery('.slider-head-link li'),
      sliderContent: jQuery('.panel-contexts-case .panel-contexts'),
      currentSliderHead: jQuery(this.slideHead).find('.active'),
      currentSliderContent: jQuery('.panel-contexts-case div.active').index('.panel-contexts-case div'),
      currentSlider: jQuery('.slider-head-link li.active').index('.slider-head-link li'),
      slideTotalCount: jQuery('.slider-head-link').find('li').size() - 1
    };
  
  var sliderStates = ['active', 'transition', 'inactive']; 
  
  var sliderApp = {
    // Create functions
    inititalize: function(){
      console.log('Slider initialized.');
    },

    removeSlideClass: function(){
      console.log('Previous slide head was ' + SliderVar.currentSlider + '.');
      SliderVar.sliderHead.removeClass('active');
    },
    removeSlideContentClass: function () {
      SliderVar.sliderContent.removeClass('active');
    },

    updateSlideCount: function(){
      SliderVar.currentSlider = jQuery('.slider-head-link li.active').index('.slider-head-link li');
    },
    updateSlideContentCount: function(){
      SliderVar.currentSliderContent = jQuery('.panel-contexts-case div.active').index('.panel-contexts-case div');
    },
    notifyCurrentSlide: function(){
      this.updateSlideCount();
      console.log('Current slide head is now ' + SliderVar.currentSlider + '.');
    },
    applyActiveSlideContent: function () {
      this.updateSlideContentCount();
      jQuery(SliderVar.sliderContent).eq(SliderVar.currentSlider).addClass('active'); 
    }
  };
  // Activate

  jQuery(function(jQuery){
    sliderApp.inititalize();
    
    jQuery(SliderVar.sliderHead).click(function(event){
      sliderApp.removeSlideClass();
      sliderApp.removeSlideContentClass();
      jQuery(this).addClass('active');
      sliderApp.notifyCurrentSlide();
      sliderApp.updateSlideContentCount();
      sliderApp.applyActiveSlideContent();

    });

  });


