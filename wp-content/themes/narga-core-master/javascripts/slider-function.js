$(jQuery){
  // Save variables to modify
  var SliderTarget = {
      sliderHead: $('.slider-head-link'),
      sliderContent: $('.panel-contexts'),
      currentSliderHead: $(slideHead).find('.active'),
      currentSliderContent: $(slideContent).find('.active'); 
      currentSlider: 0,
      slideTotalCount: $('.slider-head-link').find('li').size()
    }
  
  var sliderStates = ['active', 'transition', 'inactive']; 
  
  var sliderApp = {
    // Create functions
    inititalize: function(){
        checkNumberOfSlides(); 
      })
    },
    checkNumberOfSlides: function(){

    }, 
    checkIfLastSlide: function(){
      if (currentSlide == lastSlide){
        return true;
      } else {
        return false;
      };
    },
    resetSlideCount: function(){
      currentSlider == 0;
    },
    selectNext: function(){
      if (checkIfLastSlide = false){
        incrementSlide();
      } else {
        resetSlideCount();
      };
      loadSlide(currentSlide);
    },
    autoCycle: function(){
      passTime();
      selectNext();  
    },
    loadSlide: function(currentSlide){
      that = $(this);
      currentSliderHead = that.find(sliderHead); 
      currentSliderContent = that.find(sliderContent); 
      
      sliderHead.find('.active').removeclass('active');
      addclass('active');
      sliderContent.find('.active').removeclass('active');
    },
    passTime: function(){

    }
  }
  // Activate

  jQuery(function(){
    sliderApp.initialize();
    sliderApp.autoCycle();
  })

  $(sliderHead).click(function(event){
    alert( event.currentTarget === this);
  })

}(){};